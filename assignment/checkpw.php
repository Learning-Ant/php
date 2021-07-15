<?php
if (isset($_POST['pw'])) {
    // check using regular expression
    $regEx = "/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#%&_])[A-Za-z0-9!@#%&_]{5,16}$/";
    $pw = $_POST['pw'];
    if (strlen($pw) < 5) {
        echo "<span class='taken'>&nbsp;&#x2718; Pw must be at least 5 characters long</span>";
    } elseif (preg_match($regEx, $pw)) {
        echo "<span class='available'>&nbsp;&#x2714; " . "The pw is available</span>";
    } else {
        echo "<span class='taken'>&nbsp;&#x2718; Pw must contain at least one letter, number and special character(!@#%&amp;_) </span>";
    }
}
?>
<!--  -->