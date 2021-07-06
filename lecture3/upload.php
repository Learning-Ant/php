<?php
// Example 7-15
echo "<h3>Example 7-15</h3>";

echo <<<_END
<html>
<head>
<title>PHP Form Upload</title>
</head>
<body>
<form method='post' ation='upload.php' enctype='multipart/form-data'>
Select File: <input type='file' name='upload_file_name' size='10'>
<input type='submit' value='Upload'>
</form>
_END;

if ($_FILES) {
    $name = $_FILES['upload_file_name']['name'];
    move_uploaded_file($_FILES['upload_file_name']['tmp_name'], $name);
    echo "Uploaded image '$name'<br><img src='$name'>";
}

echo "</body></html>";
?>
<!-- -->