<?php
// example 4-1
echo "example 4-1<br>";
echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE . "]<br>";
?>

<br>

<?php
// example 4-2
echo "example 4-2<br>";
echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";
?>

<br>

<?php
// example 4-3
echo "example 4-3<br>";
$myname = "Brian";
$myage = 37;

echo "a: " . 73 . "<br>"; // Numeric literal
echo "a: " . "Hello" . "<br>"; // String literal
echo "a: " . FALSE . "<br>"; // Constant literal
echo "a: " . $myname . "<br>"; // String variable
echo "a: " . $myage . "<br>"; // Numeric variable
?>

<br>

<?php
// example 4-4
echo "example 4-4<br>";
$days_to_new_year = 366 - $day_number;  // Expression
echo $days_to_new_year;
echo $day_number;
if ($days_to_new_year < 30) {
    echo "Not long now till new year";  // Statement
}
?>

<br>

<?php
// example 4-5
echo "example 4-5<br>";
echo 1 + 2 + 3 - 4 + 5 . "<br>";
echo 2 - 4 + 5 + 3 + 1 . "<br>";
echo 5 + 2 - 4 + 1 + 3 . "<br>";
?>

<br>

<?php
// example 4-6
echo "example 4-6<br>";
echo 1 * 2 * 3 / 4 * 5 . "<br>";
echo 2 / 4 * 5 * 3 * 1 . "<br>";
echo 5 * 2 / 4 * 1 * 3 . "<br>";
?>

<br>

<?php
// example 4-7
echo "example 4-7<br>";
echo 1 + 2 * 3 - 4 * 5 . "<br>";
echo 2 - 4 * 5 * 3 + 1 . "<br>";
echo 5 + 2 - 4 + 1 * 3 . "<br>";
?>

<br>

<?php
// example 4-8
echo "example 4-8<br>";
echo 1 + (2 * 3) - (4 * 5) . "<br>";
echo 2 - (4 * 5 * 3) + 1 . "<br>";
echo 5 + 2 - 4 + (1 * 3) . "<br>";
?>

<br>

<?php
// example 4-9
echo "example 4-9<br>";
echo 1 + (6) - (20) . "<br>";
echo 2 - (60) + 1 . "<br>";
echo 5 + 2 - 4 + (3) . "<br>";
?>

<br>

<?php
// example 4-10
echo "example 4-10<br>";
echo ((1 + 2) * 3 - 4) + 5 . "<br>";
echo (2 - 4) * 5 * 3 + 1 . "<br>";
echo (5 + 2 - 4 + 1) * 3 . "<br>";
?>

<br>

<?php
// example 4-11
echo "example 4-11<br>";
$level = $score = $time = 0;
echo $level . " " . $score . " " . $time;
?>

<br>

<?php
// example 4-12
echo "example 4-12<br>";
$month = "March";

if ($month == "March") echo "It's springtime";
?>

<br>

<?php
// example 4-13
echo "example 4-13<br>";

$a = "1000";
$b = "+1000";

if ($a == $b) echo "1";
if ($a === $b) echo "2";
?>

<br>

<?php
// example 4-14
echo "example 4-14<br>";

$a = "1000";
$b = "+1000";

if ($a != $b) echo "1";
if ($a !== $b) echo "2";
?>

<br>

<?php
// example 4-15
echo "example 4-15<br>";

$a = 2;
$b = 3;

if ($a > $b) echo "$a is greater than $b<br>";
if ($a < $b) echo "$a is less than $b<br>";
if ($a >= $b) echo "$a is greater than or equal to $b<br>";
if ($a <= $b) echo "$a is less than or equal to $b<br>";
?>

<br>

<?php
// example 4-16
echo "example 4-16<br>";

echo "a: " . $a . ", b: " . $b . "<br>";
echo ($a and $b) . "<br>";  // true
echo ($a or $b) . "<br>";   // true
echo ($a xor $b) . "<br>";  // false
echo !$a . "<br>";          // false
?>

<br>

<?php
// example 4-17
echo "example 4-17<br>";

// $finished = 1;

if ($finished == 1) exit; // 1이면 종료, 이후의 명령은 실행되지 않는다.
?>

<br>

<?php
// example 4-18
echo "example 4-18<br>";

// $gn = getnext();

if ($finished == 1 or $gn == 1) exit;
?>

<br>

<?php
// example 4-19
echo "example 4-19<br>";

if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
}
?>

<br>

<?php
// example 4-20
echo "example 4-20<br>";

if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} else {
    $savings += 50;
    $bank_balance -= 50;
}
?>

<br>

<?php
// example 4-21
echo "example 4-21<br>";

if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} elseif ($bank_balance > 200) {
    $savings += 100;
    $bank_balance -= 100;
} else {
    $savings += 50;
    $bank_balance -= 50;
}
?>

<br>

<?php
// example 4-22
echo "example 4-22<br>";

if ($page == "Home") echo "You selected Home";
elseif ($page == "About") echo "You selected About";
elseif ($page == "News") echo "You selected News";
elseif ($page == "Login") echo "You selected Login";
elseif ($page == "Links") echo "You selected Links";
else echo "Unrecognized selection";
?>

<br>

<?php
// example 4-23
echo "example 4-23<br>";

switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
}
?>

<br>

<?php
// example 4-24
echo "example 4-24<br>";

switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
    default:
        echo "Unrecognized selection";
        break;
}
?>

<br>

<?php
// example 4-25
echo "example 4-25<br>";

switch ($page):
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
    default:
        echo "Unrecognized selection";
        break;
endswitch;
?>

<br>

<?php
// example 4-26
echo "example 4-26<br>";
$fuel = 0;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
?>

<br>

<?php
// example 4-27
echo "example 4-27<br>";
$fuel = 1;
$enough = $fuel <= 1 ? FALSE : TRUE;
?>

<br>

<?php
// example 4-28
echo "example 4-28<br>";

$fuel = 10;

while ($fuel > 1) {
    echo "There's enough fuel($fuel) <br>";
    $fuel--;
}
?>

<br>

<?php
// example 4-29
echo "example 4-29<br>";

$count = 1;

while ($count <= 12) {
    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}
?>

<br>

<?php
// example 4-30
echo "example 4-30<br>";

$count = 0;

while (++$count <= 12)
    echo "$count times 12 is " . $count * 12 . "<br>";
?>

<br>

<?php
// example 4-31
echo "example 4-31<br>";

$count = 1;
do
    echo "$count times 12 is " . $count * 12 . "<br>";
while (++$count <= 12);
?>

<br>

<?php
// example 4-32
echo "example 4-32<br>";

$count = 1;

do {
    echo "$count times 12 is " . $count * 12;
    echo "<br>";
} while (++$count <= 12);
?>

<br>

<?php
// example 4-33
echo "example 4-33<br>";

for ($count = 1; $count <= 12; ++$count)
    echo "$count times 12 is " . $count * 12 . "<br>";
?>

<br>

<?php
// example 4-34
echo "example 4-34<br>";

for ($count = 1; $count <= 12; ++$count) {
    echo "$count times 12 is " . $count * 12;
    echo "<br>";
}
?>

<br>

<?php
// example 4-35
echo "example 4-35<br>";

$fp = fopen("test.txt", 'wb');

for ($j = 0; $j < 100; ++$j) {
    $written = fwrite($fp, "date");

    if ($written == FALSE) break;
}

fclose($fp);
?>

<br>

<?php
// example 4-36
echo "example 4-36<br>";

$j = 11;

while ($j > -10) {
    $j--;

    if ($j == 0) continue;

    echo (10 / $j) . "<br>";
}
?>

<br>

<?php
// example 4-37
echo "example 4-37<br>";

$a = 56;
$b = 12;
$c = $a / $b;

echo $c;
?>

<br>