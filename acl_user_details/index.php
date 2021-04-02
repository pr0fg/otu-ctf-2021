<?php

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: /login.php");
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/js/custom.js"></script>
  <style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
  </style>
  <title>Messages</title>
</head>
<body>
	<h1 id="name"></h1>
	<h2>Messages:</h2>
	<div id="messages" style="width: 80%"></div><br/>
</body>
</html>