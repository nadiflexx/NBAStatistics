<!Doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBA STATS</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/teams.css">

  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/assets/img/icon.png" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/assets/img/icon.png">

  <link rel="manifest" href="../site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/d4031569f3.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../queries/teamsQuery.js"></script>
</head>


<body>
<?php
include '../sharedUtilities/menu.html';
include '../sharedUtilities/splash.php';
?>

<div class="container">
  <div class="teamsTable">
    <table id='teamsTable'>
      <caption>TEAMS</caption>
      <thead>
      <tr>
        <th>Equipo</th>
        <th>Ciudad</th>
        <th>Conferencia</th>
        <th>División</th>
        <th>Stadium</th>
      </tr>
      </thead>
      <tbody id="teams">
      <script> getTeams();</script>
    </table>
  </div>

  <div class="teamsStandings">
    <div class="col">
      <div class="row">
        <table>
          <caption>EASTERN STANDINGS</caption>
          <thead>
          <tr>
            <th>Rank</th>
            <th>Team</th>
            <th>Wins</th>
            <th>Loses</th>
            <th>Streak</th>
            <th>Percentage</th>
          </tr>
          </thead>
          <tbody id="standingsEastern">
          <script> getStandings("Eastern");</script>
        </table>
      </div>
      <div class="row">
        <table>
          <caption>WESTERN STANDINGS</caption>
          <thead>
          <tr>
            <th>Rank</th>
            <th>Team</th>
            <th>Wins</th>
            <th>Loses</th>
            <th>Streak</th>
            <th>Percentage</th>
          </tr>
          </thead>
          <tbody id="standingsWestern">
          <script> getStandings("Western");</script>
        </table>
      </div>
    </div>
  </div>
</div>
</body>

</html>


