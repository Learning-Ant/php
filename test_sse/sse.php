<?php
header('Content-Type: text/event-stream');
header('Cache-Control:no-cache, no-store, must-revalidate');
header('Pragma: no-cache');

$time = date('r');
echo "data: The server time is:${time}".PHP_EOL.PHP_EOL;
?>