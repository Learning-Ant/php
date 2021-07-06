<?php
// Example 7-1
echo "<h3>Example 7-1</h3>";
echo "<pre>";

// $[format]
printf("The result is $%15f\n", 123.42 / 12);
printf("The result is $%015f\n", 123.42 / 12);
printf("The result is $%15.2f\n", 123.42 / 12);
printf("The result is $%015.2f\n", 123.42 / 12);
printf("The result is $%'#15.2f\n", 123.42 / 12);
?>

<br>

<?php
// Example 7-2
echo "<h3>Example 7-2</h3>";
echo "<pre>";

$h = 'Rasmus';

printf("[%s]\n", $h);
printf("[%12s]\n", $h);
printf("[%-12s]\n", $h);
printf("[%012s]\n", $h);
printf("[%'#12s]\n\n", $h);

$d = 'Rasmus Lerdorf';

printf("[%12.8s]\n", $h);
printf("[%-12.12s]\n", $h);
printf("[%-'@12.10s]\n", $h);
?>

<br>

<?php
// Example 7-3
echo "<h3>Example 7-3</h3>";
$month = 9;
$day = 31;
$year = 2025;

if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";
?>

<br>

<?php
// Example 7-4
echo "<h3>Example 7-4</h3>";
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully";
?>

<br>

<?php
// Example 7-5
echo "<h3>Example 7-5</h3>";
$fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");

$line = fgets($fh);
fclose($fh);
echo $line;
?>

<br>

<?php
// Example 7-6
echo "<h3>Example 7-6</h3>";

$fh = fopen("Testfile.txt", 'r') or die("File does not exist or you lack permission to open it");

$text = fread($fh, 3);
fclose($fh);
echo $text;
?>

<br>

<?php
// Example 7-7, 8
echo "<h3>Example 7-7, 8</h3>";
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";

if (!copy('testfile.txt', 'testfile2.txt')) echo "Could note copy file";
else echo "File successfully copied to 'testfile2.txt'";
?>

<br>

<?php
// Example 7-9
echo "<h3>Example 7-9</h3>";
if (!rename('testfile2.txt', 'testfile2.new'))
    echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'";
?>

<br>

<?php
// Example 7-10
echo "<h3>Example 7-10</h3>";
if (!unlink('testfile2.new')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";
?>

<br>

<?php
// Example 7-11
echo "<h3>Example 7-11</h3>";
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);

fseek($fh, 0, SEEK_END);
fwrite($fh, "\n$text") or die("Could not write to file");
fclose($fh);

echo "File 'testfile.txt' successfully updated";
?>

<br>

<?php
// Example 7-12
echo "<h3>Example 7-12</h3>";
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
if (flock($fh, LOCK_EX))
/* 
    LOCK_SH : 1, Acquire a shared lock(reader), allow other processes to acces the file
    LOCK_EX : 2, Acquire an exclusive lock(writer), prevent other processe from accessing the file
    LOCK_UN : 3, release a lock(shared or exclusive)
    LOCK_NB : 4, Avoid blocking other processes while locking
*/ {
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Could not write to file");
    flock($fh, LOCK_UN);
}
?>

<br>

<?php
// Example 7-13
echo "<h3>Example 7-13</h3>";
echo "<pre>";
echo file_get_contents("testfile.txt");
echo "</pre>";
?>

<br>

<?php
// Example 7-14
echo "<h3>Example 7-14</h3>";

// echo file_get_contents("http://oreilly.com.libproxy.hongik.ac.kr");

?>

<br>