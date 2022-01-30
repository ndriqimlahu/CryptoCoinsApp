<?php
  error_reporting(0);

  // API Endpoint
  $apiEndpoint = "https://api.coinstats.app/public/v1/coins";

  // Read JSON file
  $jsonData = file_get_contents($apiEndpoint);

  // Decode JSON data into array
  $responseData = json_decode($jsonData);

  // All crypto data exists in 'coins' object
  $cryptoData = $responseData->coins;
?>