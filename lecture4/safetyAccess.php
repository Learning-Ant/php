<?php
require_once 'login.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$user = mysql_entities_fix_string($pdo, $_POST['user']);
$pass = mysql_entities_fix_string($pdo, $_POST['pass']);
$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

function mysql_entities_fix_string($pdo, $string)
{
    return htmlentities(mysql_fix_string($pdo, $string));
}
function mysql_fix_string($pdo, $string)
{
    // get_maigc_quotes_gpc()는 5.4.0이상의 버전부터는 삭제된 것 같습니다.
    // if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $pdo->quote($string);
}

?>
<!--  -->