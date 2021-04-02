<?php

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: /login.php");
	die();
}

header("Content-Type: application/json; charset=UTF-8");

if(isset($_GET['u'])) {

	$array = [];

	if($_GET['u'] == '108') {
		$array = [
		    "username" => "test",
		    "firstName" => "Example",
		    "lastName" => "User",
		];
	}

	$result = json_encode($array);
	echo $result;
}

?>