<?php
	$asn = trim($_REQUEST["asn"]);
	$prefix = trim($_REQUEST["prefix"]);
	if($asn == "")
		exit(0);
	if($prefix == "")
		exit(0);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:9556/validity?asn=".$asn."&prefix=".$prefix);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
?>
