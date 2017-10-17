<?php
	
	$plaintext = 'Please Encrypt me';
	$password = '3sc3RLrpd17';
	$ivString = '571a480b14dc4f93';
	$method = 'aes-256-cbc';

	$key = substr(hash('sha256', $password, true), 0, 32);
	echo "Password:" . $password . "</br>";
	
	$iv = $ivString;
	
	$encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
	
	$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);

	echo 'plaintext = ' . $plaintext . "</br>";
	echo 'cipher = ' . $method . "</br>";
	echo 'encrypted to: ' . $encrypted . "</br>";
	echo 'decrypted to: ' . $decrypted . "</br>";
?>