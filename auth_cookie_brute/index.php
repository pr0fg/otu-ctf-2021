<?php

  $errorMsg = "";

  if(isset($_COOKIE["uid"]) && isset($_COOKIE["uname"]) && $_COOKIE['uid'] == 42 && $_COOKIE['uname'] == "admin") {
     echo "Flag: 0525d9cb9bde5d6ace0f0f2d71221d2b";
     die();
  }

  if(isset($_POST["login"])) {
    if($_POST["username"] == "test" && $_POST["password"] == "test") {
      setcookie('uid', "101", time() + (86400 * 30), "/");
      setcookie('uname', "test", time() + (86400 * 30), "/");
      echo "Welcome 'test' :)";
      die();
    }
    else {
      $errorMsg = "Invalid username or password.";
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
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" /><br/>
    <input type="submit" value="Login" name="login" />
  </form>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>