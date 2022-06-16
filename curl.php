<?php

/*

// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

// $url = "http://dummy.restapiexample.com/api/v1/employees";

$url = "https://api.isthereanydeal.com/v01/deals/list/?key=c22b79a6422708915183a0b4ae493ffc128a8e25&region=br2&country=BR&shops=steam%2Cgog&sort=price%3Aasc";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);

// Print all data if needed
// print_r($response_data);
// die();

*/

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.isthereanydeal.com/v01/deals/list/?key=c22b79a6422708915183a0b4ae493ffc128a8e25&region=br2&country=BR&shops=steam%2Cgog&sort=price%3Aasc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);


?>