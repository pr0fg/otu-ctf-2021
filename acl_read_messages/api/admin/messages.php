<?php

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: /login.php");
	die();
}

header("Content-Type: application/json; charset=UTF-8");

$array = [
    ["to" => "admin", "from" => "admin", "message" => "Mental note: I don't like that j.doe user..."],
    ["to" => "admin", "from" => "admin", "message" => "Flag: 64116e760547c7d8a84d7e7bd582fe0e"],
];

$result = json_encode($array);

echo $result;
?>