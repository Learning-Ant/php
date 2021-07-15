<?php
$host = 'localhost';
$data = 'seongnet';
$user = 'jspark';
$pass = '1111';
$chars = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$data;charset=$chars";

$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "TABLE '$name' created or already exists.<br>";
}

function queryMysql($query)
{
    global $pdo;
    return $pdo->query($query);
}

function destroySession()
{
    $_SESSION = array();
    if (session_id() != "" || isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 2592000, '/');
    }
    session_destroy();
}

function sanitizeString($var)
{
    global $pdo;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    $result = $pdo->quote($var);
    return str_replace("'", "", $result);
}

function showProfile($user)
{
    global $pdo;
    if (file_exists("./assets/member_profile_imgs/$user.jpg")) {
        echo "<img src='./assets/member_profile_imgs/$user.jpg' style='float:left;'>";
    }

    $result = $pdo->query("SELECT * FROM profiles WHERE user='$user'");

    if (!$result->rowCount()) {
        echo "<p>Nothing to see here, yet<p><br>";
    } else {
        while ($row = $result->fetch()) {
            echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
        }
    }
}

// encryption password
function passHash($passFromPost)
{
    return password_hash($passFromPost, PASSWORD_BCRYPT);
}
?>
<!--  -->