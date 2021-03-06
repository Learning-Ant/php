<?php
require_once 'header.php';
$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "") {
        $error = 'Not all fields were entered';
    } else {
        $result = queryMysql("SELECT user, pass FROM members WHERE user='$user'");
        if ($row = $result->fetch()) {
            // 암호화되어 table에 저장된 암호와 비교
            if (password_verify($pass, $row['pass'])) {
                $_SESSION['user'] = $user;
                die("<div class='center'> You are now logged in. Please
                <a data-transition='slide' href='members.php?view=$user&r=&randstr'>click here</a> to continu.</div></div></body></html>");
            } else {
                $error = "Invalid login attempt";
            }
        }
    }
}

echo <<<_END
            <form method='post' action='login.php?r=$randstr'>
                <div data-role='fieldcontain'>
                    <label></label>
                    <span class='error'>$error</span>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    Please enter your details to log in
                </div>
                <div data-role='fieldcontain'>
                    <label>Username</label>
                    <input type='text' maxlength='16' name='user' value='$user'/>
                </div>
                <div data-role='fieldcontain'>
                    <label>Password</label>
                    <input type='password' maxlength='16' name='pass' value='$pass'/>
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <input data-transition='slide' type='submit' value='Login' />
                </div>
            </form>
        </div>
    </body>
</html>
_END;
?>
<!--  -->