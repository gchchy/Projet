<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '172.26.137.74/api/connection',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Api-Key: A166DBB65C8A4169B838BA013710F06F'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$response_data = json_decode($response);
echo 'Current state: ' . $response_data->current->state . "\n";
echo 'Current port: ' . $response_data->current->port . "\n";
echo 'Current baudrate: ' . $response_data->current->baudrate . "\n";
?>