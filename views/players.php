<!Doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBA STATS</title>
  <link rel="stylesheet" href="../assets/css/style.css">

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
  <script type="text/javascript" src="../queries/playersQuery.js"></script>
</head>

<body>
<?php
include '../sharedUtilities/menu.html';
include '../sharedUtilities/splash.php'
?>
<div class="container">
  <table id='myTable'>
    <thead>
    <tr>
      <th>Nombre</th>
      <th>Posicion</th>
      <th>Altura</th>
      <th>Peso</th>
      <th>Equipo</th>
    </tr>
    </thead>
    <tbody id="players">
    <script> getPlayers();</script>
    </tbody>
  </table>
</div>

</body>
</html>


