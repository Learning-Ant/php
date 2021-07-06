<?php
$lname = $_POST['lname'];
$fname = $_POST['fname'];

echo "<h2>Hello, $fname $lname</h2><br><br>";
echo "<a href=3.html><input type=button value=bye></a>";

?>

<script>
    console.log(<?php echo $_POST; ?>);
</script>