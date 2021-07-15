<?php
session_start();
require_once 'functions.php';

$userstr = 'Welcome Guest';
$randstr = substr(md5(rand()), 0, 7);

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = "Logged in as $user";
} else $loggedin = FALSE;

if (isset($_GET['search'])) {
    $search_id = sanitizeString($_GET['search']);
    $result = queryMysql("SELECT user FROM members WHERE user LIKE '%$search_id%' ORDER BY user");
    $str = '';

    while ($row = $result->fetch()) {
        if ($row['user'] == $user) continue;

        $str .= "<li><a data-transition='slide' href='members.php?view=" . $row['user'] . "&r=$randstr'>" . $row['user'] . "</a>";
        $follow = "follow";

        // follow 관계 확인
        $result1 = queryMysql("SELECT * FROM friends WHERE user='" . $row['user'] . "' AND friend='$user'");
        $t1 = $result1->rowCount();

        $result1 = queryMysql("SELECT * FROM friends WHERE user='$user' AND friend='" . $row['user'] . "'");
        $t2 = $result1->rowCount();

        if (($t1 + $t2) > 1) {
            $str .= " &harr; is a mutual friend";
        } elseif ($t1) {
            $str .= "&larr; you are following";
        } elseif ($t2) {
            $str .= "&rarr; is following you";
            $follow = "recip";
        }

        if (!$t1) {
            $str .= "[<a data-transition='slide' href='members.php?add=" . $row['user'] . "&r=$randstr'>$follow</a>]";
        } else {
            $str .= "[<a data-transition='slide' href='members.php?remove=" . $row['user'] . "&r=$randstr'>drop</a>]";
        }
    }
}

echo $str;

?>

<!--  -->