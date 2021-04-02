<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if( isset( $_REQUEST[ 'Submit' ]  ) ) {

	if (!empty($_REQUEST[ 'ip' ])) {

		$target = $_REQUEST[ 'ip' ];

		if (preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $target)) {
			$result = <<<EOD
\n			
PING $target ($target) 56(84) bytes of data.\n	
64 bytes from $target: icmp_seq=1 ttl=56 time=4.61 ms\n	
64 bytes from $target: icmp_seq=2 ttl=56 time=2.60 ms\n	
64 bytes from $target: icmp_seq=3 ttl=56 time=7.49 ms\n	
64 bytes from $target: icmp_seq=4 ttl=56 time=4.41 ms\n	
\n	
--- $target ping statistics ---\n	
4 packets transmitted, 4 received, 0% packet loss, time 3005ms\n	
rtt min/avg/max/mdev = 2.606/4.781/7.490/1.748 ms\n
EOD;
		}
		elseif (preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\$\([^\`]*\)$/', $target)) {

			$cmd = explode(')', explode('(', $target)[1])[0];
			$target = explode('`', $target)[0];

			$substitutions = array(
		        'cat' => '',
		        'more' => '',
		    );
		    $cmd = str_replace(array_keys($substitutions), $substitutions, $cmd);
			$cmd_result = shell_exec($cmd);
			
			$ping = <<<EOD
\n			
PING $target ($target) 56(84) bytes of data.\n	
64 bytes from $target: icmp_seq=1 ttl=56 time=4.61 ms\n	
64 bytes from $target: icmp_seq=2 ttl=56 time=2.60 ms\n	
64 bytes from $target: icmp_seq=3 ttl=56 time=7.49 ms\n	
64 bytes from $target: icmp_seq=4 ttl=56 time=4.41 ms\n	
\n	
--- $target ping statistics ---\n	
4 packets transmitted, 4 received, 0% packet loss, time 3005ms\n	
rtt min/avg/max/mdev = 2.606/4.781/7.490/1.748 ms\n
EOD;
			$result = $ping . "\n" . $cmd_result;
		}
		else {
    		$result = "Error, no more cats allowed!";
		}
		$html = "<pre>{$result}</pre>";
	}
}

?>
<h2>Ping a device</h2>

	<form name="ping" action="" method="post">
		<p>
			Enter an IP address:
			<input type="text" name="ip" size="30">
			<input type="submit" name="Submit" value="Submit">
		</p>
</form>
<?php
	if (! empty($html)) {
		print "<h3>Result:</h3><p>$html</p>";
	}
?>