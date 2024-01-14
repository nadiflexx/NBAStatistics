<!Doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBA STATS</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/img/icon.png" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/img/icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style>
    .container {
      display: grid;
      grid-template-columns: 1fr 1fr; /* Permitir que los elementos se envuelvan a la siguiente línea */
    }

    body {
      background-image: url("/img/background.jpg");
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
    }

    .title h1 {
      position:relative; color: #637bd0;
      font-family: Fantasy, serif; font-size:70px; font-weight:700;  letter-spacing:0; text-transform:uppercase; width:500px; text-align:center; margin:auto; white-space:nowrap; border:2px solid #343333;padding:5px 11px 3px 11px;
    }
    .title h1:before, .title h1:after {
      background-color: #c50000;
      position:absolute;
      content: '';
      height: 7px;

      width: 7px; border-radius:50%;
      bottom: 12px;
    }
    .title h1:before {
      left:-20px;
    }
    .title h1:after {
      right:-20px;
    }

    h1:before,
    h1:after {
      background-color: #c50000;
    }
  </style>
</head>


<body>

<div class="title">
  <h1>NBA STATISTICS</h1>
</div>

<div class="wrap">
<div class="container">
  <div class="row">
    <div class="chart">
      <canvas id="bar-chart"></canvas>
    </div>

    <div class="chart">
      <canvas id="pie-chart"></canvas>
    </div>
  </div>

  <div class="row">
    <div class="chart">
      <canvas id="doughnut-chart"></canvas>
    </div>

    <div class="chart">
      <canvas id="bar-chart-grouped"></canvas>
    </div>
  </div>
</div>

<script>
  // Bar chart
  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
          data: [2478, 5267, 734, 784, 433]
        }
      ]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
  });

  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        data: [2478, 5267, 734, 784, 433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
  });

  new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
          data: [2478, 5267, 734, 784, 433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
  });

  new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [
        {
          label: "Africa",
          backgroundColor: "#3e95cd",
          data: [133, 221, 783, 2478]
        }, {
          label: "Europe",
          backgroundColor: "#8e5ea2",
          data: [408, 547, 675, 734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions)'
      }
    }
  });
</script>

<!-- Add your site or application content here -->

<?php

$json_data = file_get_contents("https://balldontlie.io/api/v1/players?search=lebron");
$response_data = json_decode($json_data, true);
  echo $response_data['data'][0]['id'];
  echo $response_data['data'][0]['team']['abbreviation'];

?>

<script src="js/app.js"></script>


</body>

</html>
