<?php
session_start();
destroy_session_and_data();

if (isset($_SESSION['forename']) || isset($_SESSION['username'])) {
    $forename = $_SESSION['forename'];
    $surname = $_SESSION['surname'];

    destroy_session_and_data();

    echo htmlspecialchars("Welcome back $forename");
    echo "<br>";
    echo htmlspecialchars("Your full name is $forename $surname.");
} else echo "Please <a href='13_5.php'>click here</a> to log in.";

function destroy_session_and_data()
{
    session_start();
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}
?>

<!--  -->