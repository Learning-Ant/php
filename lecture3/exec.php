<?php
// Example 7-17
echo "<h3>Example 7-17</h3>";
$cmd = "dir";   // Windows, Mac, Linux
// "ls" Linux, Unix & Mac
$output;
$status;
exec(escapeshellcmd($cmd), $output, $status);
if ($status) echo "Exec command failed";
else {
    echo "<pre>";
    // print_r($output[0]);
    print_r($output);
    print htmlspecialchars($output[0]);
    foreach ($output as $line) echo htmlspecialchars("$line\n");
    echo "</pre>";
}

?>
<!--  -->