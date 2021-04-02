<?php
$errorMsg = "";
if(isset($_SERVER["HTTP_HOST"])) {
  $validHost = $_SERVER["HTTP_HOST"] == "localhost";
  if($validHost) {
    $errorMsg = "Flag: 4ae0f5145ffe1678be6959187830bcf8";
  }
  else {
    $errorMsg = "Error: API can only be accessed by localhost.";
  }
}
else {
  $errorMsg = "Error: API can only be accessed by localhost.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Internal API</title>
</head>
<body>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>
