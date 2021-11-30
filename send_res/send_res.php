<?php
header('Content-Type: text/event-stream');
header('Cache-Control:no-cache, no-store, must-revalidate');
header('Pragma: no-cache');

echo "id:" . $_GET["toId"] . PHP_EOL;
echo "data:" . $_GET["sendData"] . PHP_EOL . PHP_EOL;
?>