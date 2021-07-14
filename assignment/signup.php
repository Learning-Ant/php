<?php
require_once 'header.php';

echo <<<_END
<script>
    function checkUser(user){
        if (user.value == '') {
            $('#used').html('&nbsp;');
            return
        }
        $.ajax ({
            type: "POST",
            url: "checkuser.php",
            data: {"user": user.value},
            success: function(res) {
                $('#used').html(res);
            },
            error: function() {
                alert("Something is wrong. Please re-try");
            }
        })
    }
    function checkPw(pw){
        $.ajax({
            type: "post",
            url: "checkpw.php",
            data: {"pw": pw.value},
            success: function(res) {
                $('#pwchk').html(res);
            },
            error: function() {
                alert("Something is wrong. Please re-try");
            }
        })
    }

</script>
_END;

$error = $user = $pass = "";

if (isset($_SESSION['user'])) destroySession();

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = passHash(sanitizeString($_POST['pass']));
    echo "<script>console.log('$user, $pass," . $_POST['pass'] . "')</script>";

    if ($user == "" || $pass == "") {
        $error = 'Not all fields were entered<br><br>';
    } else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");

        if ($result->rowCount()) {
            $error = 'That username already exists<br><br>';
        } else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die('<h4>Account created</h4>Please Log in.</div></body></html>');
        }
    }
}

echo <<<_END
            <form method='post' action='signup.php?r=$randstr'>$error
                <div data-role='fieldcontain'>
                    <label></label>
                    Please enter your details to sign up
                <div>
                <div data-role='fieldcontain'>
                    <label>Username</label>
                    <input type='text' maxlength='16' name='user' value='$user' onkeyup='checkUser(this)'/>
                    <label></label>
                    <div id='used'>&nbsp;</div>
                    </div>
                    <div data-role='fieldcontain'>
                    <label>Password</label>
                    <input type='password' maxlength='16' name='pass' value='$pass' onkeyup='checkPw(this)' />
                    <label></label>
                    <div id='pwchk'>&nbsp;</div>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <input data-transition='slide' type='submit' value='Sign Up' />
                </div>
            </form>    
        </div>
    </body>
</html>
_END;
?>
<!--  -->