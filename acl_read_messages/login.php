<?php

session_start();
if (isset($_SESSION['username'])) {
  header("Location: /index.php");
  die();
}

$errorMsg = "";

if(!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if($_POST['username'] == 'test' && $_POST['password'] == 'test') {
        $_SESSION['username'] = $_POST['username'];
        header("Location: /index.php");
      }
      else {
        $errorMsg = "Invalid username or password.";
      }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
  <div class="info" style="margin-bottom:10px;"><font color="red">You can't brute force the admin's password for this challenge! Log in as 'test' first.</font></div>
  <form name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="test" id="username" name="username" /><br/>
    <label for="password">Password:</label><input type="password" value="test" id="password" name="password" /><br/>
    <input type="submit" value="Login" name="login" />
  </form>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>