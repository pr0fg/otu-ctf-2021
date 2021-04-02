<?php
$errorMsg = "";
if(isset($_POST["submit"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "paradise";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $errorMsg = "Flag: 7b38d5e71a2f3c0603252668d5fa39f8";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Admin Login</title>
</head>
<body>
  <form name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="admin" id="username" name="username" />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
    <input type="submit" value="Login" name="submit" />
  </form>
  <br>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>
