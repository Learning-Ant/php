<?php
require_once '../lecture4/login.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}

if (
    isset($_SERVER['PHP_AUTH_USER']) &&
    isset($_SERVER['PHP_AUTH_PW'])
) {
    $un_temp = sanitise($pdo, $_SERVER['PHP_AUTH_USER']);
    $pw_temp = sanitise($pdo, $_SERVER['PHP_AUTH_PW']);
    $query = "SELECT * FROM users WHERE username=$un_temp";
    $result = $pdo->query($query);

    if (!$result->rowCount()) die("User not found");

    $row = $result->fetch();
    $fn = $row['forename'];
    $sn = $row['surname'];
    $un = $row['username'];
    $pn = $row['password'];

    if (password_verify(str_replace("'", "", $pw_temp), $pw)) {
        session_start();

        $_SESSION['forename'] = $fn;
        $_SESSION['surname'] = $sn;

        echo htmlspecialchars("$fn $sn : Hi $fn, you are now logged in as '$un'");
        die("<p><a href='13_6.php'>Click here to continue</a></p>");
    } else die("Invalid username/password combination");
} else {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.1 401 Unauthorized');
    die("Please enter your username and password");
}

function sanitise($pdo, $str)
{
    $str = htmlentities($str);
    return $pdo->quote($str);
}
?>

<!--  -->