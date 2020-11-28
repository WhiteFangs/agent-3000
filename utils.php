<?php

function getCURLOutput($ch, $url){
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_COOKIEJAR, './cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, './cookie.txt');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/58.0.1');
	// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14931
	$output = curl_exec($ch);
	if (curl_errno($ch)) {
		$error_msg = curl_error($ch);
	}
	return $output;
}

function getDOMXPath($page){
	$dom = new DOMDocument;
	$page = mb_convert_encoding($page, 'HTML-ENTITIES', "UTF-8");
	@$dom->loadHTML($page);
	$xpath = new DOMXPath($dom);
	return $xpath;
}

?>