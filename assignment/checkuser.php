<?php
require_once 'functions.php';

if (isset($_POST['user'])) {
    $regEx = "/^[0-9a-zA-Z]{5,16}/";
    $user = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");
    if (strlen($user) < 5) {
        echo "<span class='taken'>&nbsp;&#x2718; The username must at least 5 characters long</span>";
    } elseif ($result->rowCount()) {
        echo "<span class='taken'>&nbsp;&#x2718; " . "The username '$user' is taken</span>";
    } elseif (!preg_match($regEx, $user)) {
        echo "<span class='taken'>&nbsp;&#x2718; The username must be letter and number</span>";
    } else {
        echo "<span class='available'>&nbsp;&#x2714; " . "The username '$user' is available</span>";
    }
}
?>
<!--  -->