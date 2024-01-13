<!Doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

<!-- Add your site or application content here -->

<?php

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api-nba-v1.p.rapidapi.com/seasons', [
'headers' => [
'X-RapidAPI-Host' => 'api-nba-v1.p.rapidapi.com',
'X-RapidAPI-Key' => 'a3310a643bmsh096b8f603260f65p18360djsn848fee2737cd',
],
]);

echo $response->getBody();

<script src="js/app.js"></script>

</body>

</html>
