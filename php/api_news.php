<?php
  error_reporting(0);

  // API Endpoint
  $apiEndpoint = "https://api.coinstats.app/public/v1/news";

  // Read JSON file
  $jsonData = file_get_contents($apiEndpoint);

  // Decode JSON data into array
  $responseData = json_decode($jsonData);

  // All news data exists in 'news' object
  $newsData = $responseData->news;

  // Select 50 records of data
  $newsData = array_slice($newsData, 0, 50);
?>