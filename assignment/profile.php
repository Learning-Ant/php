<?php
require_once 'header.php';
echo <<<_WEBCAM
<script src='https://cdn.jsdelivr.net/gh/jhuckaby/webcamjs/webcam.min.js'></script>
<script src='webcam.js'></script>

_WEBCAM;

if (!$loggedin) die("</div></body></html>");
echo "<h3>Your Profile</h3>";

$result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

if (isset($_POST['text'])) {
    $text = sanitizeString($_POST['text']);
    $text = preg_replace('/\s\s+/', ' ', $text); // 공백문자를 스페이스로 변경

    if ($result->rowCount()) {
        queryMysql("UPDATE profiles SET text='$text' WHERE user='$user'");
    } else queryMysql("INSERT INTO profiles VALUES('$user', '$text')");
} else {
    if ($result->rowCount()) {
        $row = $result->fetch();
        $text = stripslashes($row['text']);
    } else $text = "";
}

$text = stripslashes(preg_replace('/\s\s+/', ' ', $text));

if (isset($_FILES['image']['name'])) {
    $dest_dir = "./assets/member_profile_imgs/";
    $saveto = $dest_dir . "$user.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
    $typeok = TRUE;

    switch ($_FILES['image']['type']) {
        case "image/gif":
            $src = imagecreatefromgif($saveto);
            break;
        case "image/jpeg":
        case "image/pjpeg":
            $src = imagecreatefromjpeg($saveto);
            break;
        case "image/png":
            $src = imagecreatefrompng($saveto);
            break;
        default:
            $typeok = FALSE;
            break;
    }

    // image resizing
    if ($typeok) {
        list($w, $h) = getimagesize($saveto);

        $max = 100;
        $tw = $w;
        $th = $h;
        if ($w > $h && $max < $w) {
            $th = $max / $w * $h;
            $tw = $max;
        } elseif ($h > $w && $max < $h) {
            $tw = $max / $h * $w;
            $th = $max;
        } elseif ($max < $w) {
            $tw = $th = $max;
        }

        $tmp = imagecreatetruecolor($tw, $th);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imageconvolution($tmp, array(array(-1, -1, -1), array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
        imagejpeg($tmp, $saveto);
        imagedestroy($tmp);
        imagedestroy($src);
    }
}

showProfile($user);

echo <<<_END
            <form data-ajax='false' method='post' action='profile.php?r=$randstr' enctype='multipart/form-data'>
                <h3>Enter or edit your details and/or upload an image</h3>
                <textarea name='text'>$text</textarea><br>
                Image: <input type='file' name='image'>
                <input type='submit' value='Save Profile'>
            </form>
            <div id='snap-wrap'>
                <div id='cam'></div>
                <div id='btn-wrap'>
                    <a data-role='button' data-inline='true' onClick='configure()'>Configure</a>
                    <a data-role='button' data-inline='true' onClick='take_snapshot()'>Take Snapshot</a>
                    <a data-role='button' data-inline='true' onClick='saveSnap()'>Save Snapshot</a>
                </div>
                <div id='results'></div>
            </div>
        </div> <br>
    </body>
</html>
_END;
?>


<!--  -->