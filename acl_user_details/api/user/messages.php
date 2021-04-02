<?php

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: /login.php");
	die();
}

header("Content-Type: application/json; charset=UTF-8");

$array = [
    ["to" => "test", "from" => "admin", "message" => "Welcome to our new web portal!"],
    ["to" => "tes", "from" => "j.blow", "message" => "Hi test. Welcome! :)"],
    ["to" => "j.blow", "from" => "test", "message" => "I'm not even a real user..."],
];

$result = json_encode($array);

echo $result;
?>