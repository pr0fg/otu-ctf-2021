<?php

if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'sqlmap') !== false) {
  die();
}

$title = 'Loading...';
$content = '';

if(!isset($_REQUEST['i'])) {
    header('Location: /?i=1');
}
elseif(isset($_REQUEST['i']) && !empty($_REQUEST['i']) && strpos($_REQUEST['i'], '9238823') === false) {

    $mysqli = new mysqli("web_sqli_medium_db", "user", "password", "db");

    if($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

    $id = str_replace('%', '', $_REQUEST['i']);

    $result = $mysqli->query("SELECT * FROM posts WHERE id=$id");
    if(!$result) {
        die("MySQL query failed: (" . $mysqli->errno . ") " . $mysqli->error);
    }

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>View Post</title>
</head>
<body>
    <h2><?= $title ?></h2>
    <pre><?= $content ?></pre>
    <br/>
</body>
</html>