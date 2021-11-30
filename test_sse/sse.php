<?php
// function sendDataToId($id, $data){
//   echo "id:$id" . PHP_EOL;
//   echo "data:$data" . PHP_EOL . PHP_EOL;
// }

// header('Content-Type: text/event-stream');
// header('Cache-Control:no-cache, no-store, must-revalidate');
// header('Pragma: no-cache');

// $time = date('r');
// echo "data: The server time is:${time}".PHP_EOL.PHP_EOL;

echo <<<_END
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <form method="get" action="../send_res/send_res.php">
    <input type="text" name="sendData" id="send-data" />
    <input type="text" name="toId" id="to-id" />
    <button type="submit">send Data</button>
  </form>
</body>
</html>
_END;
?>