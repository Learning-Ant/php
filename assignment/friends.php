<?php
require_once 'header.php';

if (!$loggedin) die("</div></body></html>");

if (isset($_GET['view'])) {
    $view = sanitizeString($_GET['view']);
} else {
    $view = $user;
}

if ($view == $user) {
    $name1 = $name2 = "Your";
    $name3 = "You are";
} else {
    $name1 = "<a data-transition='slide' href='members.php?view=$view&r=$randstr'>$view</a>'s";
    $name2 = "$view's";
    $name3 = "$view is";
}

// show Viewer's profile
showProfile($view);

$followers = array(
    'user' => array(),
    'time' => array()
);
$following = array(
    'user' => array(),
    'time' => array()
);

$result = queryMysql("SELECT * FROM friends WHERE user='$view' ORDER BY user");

while ($row = $result->fetch()) {
    array_push($followers['user'], $row['friend']);
    array_push($followers['time'], $row['time']);
}

$result = queryMysql("SELECT * FROM friends WHERE friend='$view' ORDER BY user");

while ($row = $result->fetch()) {
    array_push($following['user'], $row['user']);
    array_push($following['time'], $row['time']);
}

// relation distinction
$mutual = array_intersect($followers['user'], $following['user']);
$followers['user'] = array_diff($followers['user'], $mutual);
$following['user'] = array_diff($following['user'], $mutual);
$friends = FALSE;

// codes for debuging
// print_r($mutual);
// print_r($followers);
// print_r($following);

echo "<br>";

if (sizeof($mutual)) {
    echo "<span class='subhead'>$name2 mutual friends</span><ul>";
    foreach ($mutual as $friend) {
        echo "<li><a data-transition='slide' href='members.php?view=$friend&r=$randstr'>$friend</a>";
    }
    echo "</ul>";
    $friends = TRUE;
}

if (sizeof($followers['user'])) {
    echo "<span class='subhead'>$name2 followers</span><ul>";

    for ($i = 0; $i < sizeof($followers['user']); ++$i) {
        echo "<li><a data-transition='slide' href='members.php?view=$firend&r=$randstr'>" . $followers['user'][$i] . "</a> since " . substr($followers['time'][$i], 0, 11);
    }

    echo "</ul>";

    // foreach ($followers['user'] as $friend) {
    //     echo "<li><a data-transition='slide' href='members.php?view=$friend&r=$randstr'>$friend </a>";
    // }
    // echo "</ul>";

    $friends = TRUE;
}

if (sizeof($following['user'])) {
    echo "<span class='subhead'>$name3 following</span><ul>";

    for ($i = 0; $i < sizeof($following['user']); ++$i) {
        echo "<li><a data-transition='slide' href='members.php?view=$firend&r=$randstr'>" . $following['user'][$i] . "</a> since " . substr($following['time'][$i], 0, 11);
    }

    echo "</ul>";

    // foreach ($following['user'] as $friend) {
    //     echo "<li><a data-transition='slide' href='members.php?view=$friend&r=$randstr'>$friend</a>";
    // }
    // echo "</ul>";

    $friends = TRUE;
}

// don't have friends
if (!$friends) echo "<br>You don't have any friends yet.";

?>
</div><br>
</body>

</html>