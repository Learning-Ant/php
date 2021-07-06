<?php
// example 3-1
echo "example 3-1<br>";
echo "Hello World";
?>

<br>

<?php
// example 3-2
/* This is a section of multiline comments which will not be interpreted */
?>

<br>

<?php
// example 3-3
echo "example 3-3<br>";
$mycounter = 1;
$mystring = "Hello";
$myarray = array("One", "Two", "Three");
?>

<br>

<?php
// example 3-4
echo "example 3-4<br>";
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
?>

<br>

<?php
// example 3-5
echo "example 3-5<br>";
$oxo = array(
    array('x', ' ', 'o'),
    array('o', 'o', 'x'),
    array('x', 'o', ' ')
);
?>

<br>

<?php
// example 3-6
echo "example 3-6<br>";
$author = "Steve Ballmer";

echo "Developers, developers, developers, developers, developers, developers, developers, developers, developers!
    
    - $author.";
?>

<br>

<?php
// example 3-7
echo "example 3-7<br>";
$author = "Bill Gates";

$text = "Measuring programming progress by lines of code is like Measuring aircraft building progress by weight.
    
    - $author.";
?>

<br>

<?php
// example 3-8
echo "example 3-8<br>";
$author = "Brian W. Kernighan";

// heredoc
echo <<<_END
    Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.
    
    - $author.
    _END;
?>

<br>

<?php
// example 3-9
echo "example 3-9<br>";
$author = "Scott Adams";

$out = <<<_END
    Normal people believe that if it ain't broke, don't fix it.
    Engineers believe that if it ain't broke, it doesn't have enough features yet.
    
    - $author.
    _END;
echo $out;
?>

<br>

<?php
// example 3-10
echo "example 3-10<br>";
$number = 12345 * 67890;
echo substr($number, 3, 1);
?>

<br>

<?php
// example 3-11
echo "example 3-11<br>";
$pi = "3.1415927";
$radius = 5;
echo $pi * ($radius * $radius);
?>

<br>

<?php
// example 3-12
echo "example 3-12<br>";
function longdate1($timestamp)
{
    return date("l F jS Y", $timestamp);
}
?>

<br>

<?php
// example 3-13
function longdate2($timestamp)
{
    echo "example 3-13<br>";
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}
?>

<br>

<?php
// example 3-14
echo "example 3-14<br>";
$temp = "The date is ";
// echo longdate3(time());

// function longdate3($timestamp)
// {
//     return $temp . date("I F jS Y", $timestamp);
// }
?>

<br>

<?php
// example 3-15
echo "example 3-15<br>";
$temp = "The date is ";
echo $temp . longdate4(time());

function longdate4($timestamp)
{
    return date("l F jS Y", $timestamp);
}
?>

<br>

<?php
// example 3-16
echo "example 3-16<br>";
$temp = "The date is ";
echo longdate($temp, time());

function longdate($text, $timestamp)
{
    return $text . date("l F jS Y", $timestamp);
}
?>

<br>

<?php
// example 3-17
function test()
{
    echo "example 3-17<br>";
    static $count = 0;
    $count++;
    echo $count;
}
test();
?>

<br>

<?php
// example 3-18
echo "example 3-18<br>";
static $int = 0;    // Allowed
static $int = 1 + 2;    // Correct(as of PHP 5.6)
//static $int = sqrt(144); // Disallowed
?>

<br>