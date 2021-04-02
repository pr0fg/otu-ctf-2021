<?php

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: /login.php");
	die();
}

$day = date("dmyH");
$apiKey = base64_encode("UID-test-UUID-$day");

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	<h1>X-API-KEY:</h1>
	<div><?= $apiKey ?></div>
	<br/>
	<h1>API Endpoints:</h1>
	<ul>
		<li>/api/auth/validate.php</li>
	</ul>
</body>
</html>