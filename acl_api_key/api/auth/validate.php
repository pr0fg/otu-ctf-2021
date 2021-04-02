<?php

$headers = apache_request_headers();

foreach ($headers as $header => $value)
{
    if($header === "X-API-KEY") {

    	$day = date("dmyH");
		$testApiKey = base64_encode("UID-test-UUID-$day");
		$day2 = date("dmy02");
		$adminApiKey = base64_encode("UID-admin-UUID-$day2");

    	if($value === $testApiKey) {
    		echo "Login successful for 'test'";
    		die();
    	}
    	elseif($value == $adminApiKey) {
    		echo "Login successful for 'admin'\n";
    		echo "Flag: bec3713bea06b700899f7a2ede959294";
    		die();
    	}
    }
}

echo "Invalid API key!";

?>
