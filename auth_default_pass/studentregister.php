<?php

  $errorMsg = "";

  if(isset($_POST["register"])) {

    if(!$_POST['username'] || strlen($_POST['username']) != 9 || !substr($_POST['username'], 0, 3 ) === 100 || !is_numeric($_POST['username'])) {
      $errorMsg = 'Invalid student ID. A correct ID looks like 100xxxxxx';
    }
    else {
      if (isset($_COOKIE['StudentID'])) {
        unset($_COOKIE['StudentID']); 
      }
      setcookie('StudentID', $_POST['username'], time() + (86400 * 30), "/");
      $errorMsg = "You are now registered! You can log in using your Oshawa postal code as your password (i.e. L1xxxx)";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Student Registration</title>
</head>
<body>
  <form name="input" action="" method="post">
    <label for="username">Student ID:</label><input type="text" value="" id="username" name="username" /><br/>
    <input type="submit" value="Register" name="register" />
    <input type="button" onclick="window.location.href = '/';" value="Back"/>
  </form>
  <div class="error"><font color="red"><?= $errorMsg ?></font></div>
</body>
</html>