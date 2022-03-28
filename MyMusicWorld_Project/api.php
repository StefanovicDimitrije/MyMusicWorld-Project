<?php

$q = urlencode($_REQUEST["q"]);
$t = $_REQUEST["t"];

$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => 'https://api.spotify.com/v1/search?q='.$q.'&type='.$t.'&market=ES&limit=10',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_SSL_VERIFYHOST => 0,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_HTTPHEADER => [
		"Accept: application/json",
		"Content-Type: application/json",
		"Authorization: Bearer TOKEN-HERE"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>