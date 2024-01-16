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


</head>


<body>
<?php
include '../sharedUtilities/menu.html';
?>


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





</body>

</html>
