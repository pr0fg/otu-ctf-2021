<?php
if (isset($_REQUEST['username']) and isset($_REQUEST['password'])) {

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

    if ($username == $password) {
         print 'Username cannot be the same as password!';
    }
    else if (sha1($username) === sha1($password)) {
    	$flag = file_get_contents('../flag.txt');
        die('Flag: '.$flag);
    }
    else {
        print '<p>Try harder!</p>';
    }
}
?>
<h2>Bypass Me</h2>

	<form name="compare" action="" method="post">
		<p>
			Username:
			<input type="text" name="username" size="30">
			Password:
			<input type="text" name="password" size="30">
			<input type="submit" name="Submit" value="Submit">
		</p>
</form>
<p><h3>Source Code:</h3></p>
<?php
    echo "<pre>";
    echo htmlentities(file_get_contents('index.php'));
    echo "</pre>";
?>
