<?php

  $errorMsg = "";

  if(isset($_POST["login"])) {
    if(isset($_COOKIE['StudentID']) && isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] == $_COOKIE['StudentID'] && $_POST['password'] == "L1K0A7") {
      echo "Flag: 586e61ba3c64ddd2a648f0d778c2a65b";
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
  <div class="info" style="margin-bottom:10px;"><font color="red">Register as a student then brute force their password.</font></div>
  <form name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="" id="username" name="username" /><br/>
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" /><br/>
    <input type="submit" value="Login" name="login" />
    <input type="button" onclick="window.location.href = '/studentregister.php';" value="Student Register"/>
  </form>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>