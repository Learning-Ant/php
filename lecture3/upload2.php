<?php
// Example 7-16
echo "<h3>Example 7-16</h3>";

echo <<<_END
<html>
<head>
<title>PHP Form Upload</title>
</head>
<body>
<form method='post' ation='upload2.php' enctype='multipart/form-data'>
Select a JPG, GIF, PNG or TIF File: 
<input type='file' name='upload_file_name' size='10'>
<input type='submit' value='Upload'>
</form>
_END;

if ($_FILES) {
    $name = $_FILES['upload_file_name']['name'];
    switch ($_FILES['upload_file_name']['type']) {
        case 'image/jpeg':
            $ext = 'jpg';
            break;
        case 'image/gif':
            $ext = 'gif';
            break;
        case 'image/png':
            $ext = 'png';
            break;
        case 'image/tiff':
            $ext = 'tif';
            break;
        default:
            $ext = '';
            break;
    }
    if ($ext) {
        $n = "image.$ext";
        move_uploaded_file($_FILES['upload_file_name']['tmp_name'], $n);
        echo "Uploaded image '$name' as '$n':<br>";
        echo "<img src='$n' />";
    } else echo "'$name' is not an accepted image file";
} else echo "No image has been uploaded";

echo "</body></html>";
?>
<!-- -->