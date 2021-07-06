<?php
// Example 6-1
echo "<h3>Example 6-1</h3>";
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
?>

<br>

<?php
// Example 6-2
echo "<h3>Example 6-2</h3>";
$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";

print_r($paper);
?>

<br>

<?php
// Example 6-3
echo "<h3>Example 6-3</h3>";
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for ($j = 0; $j < 4; ++$j)
    echo "$j : $paper[$j]<br>"
?>

<br>

<?php
// Example 6-4
echo "<h3>Example 6-4</h3>";
$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Pinter";
$paper['photo'] = "Photographic Paper";

echo $paper['laser'];
?>

<br>

<?php
// Example 6-5
echo "<h3>Example 6-5</h3>";
$p1 = array("Copier", "Inkjet", "Laser", "Photo");

echo "p1 element : " . $p1[2] . "<br>";

$p2 = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"
);
echo "p2 element : " . $p2['inkjet'] . "<br>";
?>

<br>

<?php
// Example 6-6
echo "<h3>Example 6-6</h3>";
$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

foreach ($paper as $item) {
    echo "$j: $item<br>";
    ++$j;
}
?>

<br>

<?php
// Example 6-7
echo "<h3>Example 6-7</h3>";
$paper = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"
);
foreach ($paper as $item => $description)
    echo "$item : $description<br>";
?>

<br>

<?php
// Example 6-8
echo "<h3>Example 6-8</h3>";
$paper = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"
);
while (list($item, $description) = myEach($paper))
    echo "$item : $description<br>";
function myEach(&$array)
{
    $key = key($array);
    $result = ($key === null) ? false : [$key, current($array), 'key', 'value' => current($array)];
    next($array);
    return $result;
}
?>

<br>

<?php
// Example 6-9
echo "<h3>Example 6-9</h3>";
list($a, $b) = array('Alice', 'Bob');
echo "a=$a b=$b";
?>

<br>

<?php
// Example 6-10
echo "<h3>Example 6-10</h3>";
$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    ),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"
    ),
    'misc' => array(
        'tape' => "sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips"
    )
);
echo "<pre>";

foreach ($products as $section => $items)
    foreach ($items as $key => $value)
        echo "$section: \t $key\t($value)<br>";

echo "</pre>";
?>

<br>

<?php
// Example 6-11
echo "<h3>Example 6-11</h3>";
$chessboard = array(
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
    array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);
echo "<pre>";

foreach ($chessboard as $row) {
    foreach ($row as $piece)
        echo "$piece";
    echo "<br>";
}
echo "</pre>";
?>

<br>

<?php
// Example 6-12
echo "<h3>Example 6-12</h3>";
$temp = explode(' ', "This is a sentence with seven words");
// js나 python str의 split와 동일한 기능
print_r($temp);
?>

<br>

<?php
// Example 6-13
echo "<h3>Example 6-13</h3>";
$temp = explode('***', "A***sentence***with***asterisks");
// js나 python str의 split와 동일한 기능
print_r($temp);
?>

<br>

<?php
// Example 6-14
echo "<h3>Example 6-14</h3>";
$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";
$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

print_r($contact);
?>

<br>

<?php
// Example 6-15
echo "<h3>Example 6-15</h3>";
$j = 23;
$temp = "Hello";
$address = "1 Old Street";
$age = 61;

print_r(compact(explode(' ', 'j temp address age')));
?>

<br>