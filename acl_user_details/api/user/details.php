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
	elseif($_GET['u'] == '101') {
		$array = [
		    "username" => "j.blow",
		    "firstName" => "Joseph",
		    "lastName" => "Blowseph",
		];
	}
	elseif($_GET['u'] == '10') {
		$array = [
		    "username" => "admin",
		    "firstName" => "Flag",
		    "lastName" => "cb9d96d02c226ffbbacbcea009887b71",
		];
	}

	$result = json_encode($array);
	echo $result;
}

?>