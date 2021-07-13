<?php
session_start();

// <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
// <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
// 위 버전은 jquery 1.9까지만 지원한다
// <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
// <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
// <script src="https://code.jquery.com/mobile/1.5.0-rc1/jquery.mobile-1.5.0-rc1.min.js"></script>
echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='styles.css'>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src='javascript.js'></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


_INIT;

require_once 'functions.php';

$userstr = 'Welcome Guest';
$randstr = substr(md5(rand()), 0, 7);

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = "Logged in as: $user";
} else $loggedin = FALSE;

echo <<<_MAIN
        <title>Robin's Nest: $userstr</title>
    </head>
    <body>
        <div data-role='page'>
            <div data-role='header'>
                <div id='logo' class='center'>R<img id='robin' src='https://raw.githubusercontent.com/RobinNixon/lpmj6/master/29/robin.gif'>bin's Nest</div>
            <div class='username'>$userstr</div>
        </div>
        <div data-role='content'>
_MAIN;

if ($loggedin) {
    echo <<<_LOGGEDIN
            <div class='center'>
                <a data-role='button' data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=$user&r=$randstr'>Home</a>
                <a data-role='button' data-inline='true' data-icon='user' data-transition="slide" href='members.php?r=$randstr'>Members</a>
                <a data-role='button' data-inline='true' data-icon='heart' data-transition="slide" href='friends.php?r=$randstr'>Friends</a>
                <a data-role='button' data-inline='true' data-icon='mail' data-transition="slide" href='messages.php?r=$randstr'>Messages</a>
                <a data-role='button' data-inline='true' data-icon='edit' data-transition="slide" href='profile.php?r=$randstr'>Edit Profile</a>
                <a data-role='button' data-inline='true' data-icon='action' data-transition="slide" href='logout.php?r=$randstr'>Log out</a>
            </div>
_LOGGEDIN;
} else {
    echo <<<_GUEST
            <div class='center'>
                <a data-role='button' data-inline='true' data-icon='home' data-transition='slide' href='index.php?r=$randstr'>Home</a>
                <a data-role='button' data-inline='true' data-icon='plus' data-transition='slide' href='signup.php?r=$randstr'>Sign Up</a>
                <a data-role='button' data-inline='true' data-icon='check' data-transition='slide' href='login.php?r=$randstr'>Log In</a>
            </div>
            <p class='info'>(You must be logged in to use this app)</p>
_GUEST;
}
?>
<!--  -->