<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.isthereanydeal.com/v01/deals/list/?key=c22b79a6422708915183a0b4ae493ffc128a8e25&limit=15&offset=0&region=br2&country=BR&shops=steam%2Cgog&sort=price%3Aasc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$response = curl_exec($ch);
curl_close($ch);

//var_dump($response);
$response_arr = json_decode($response);

//echo $response_arr;

//var_dump($response_arr);

?>