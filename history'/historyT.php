<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<#location> weather data" />
  <meta name="keywords" content="Cumulus MX, Cumulus, <#location> weather data, weather, data, weather station" />
  <meta name="author" content="Chris Hudson">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Latham Weather</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">

  <!-- Weather Icons -->
  <link rel="stylesheet" href="../css/weather-icons.min.css">
  <link rel="stylesheet" href="../css/weather-icons-wind.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/sticky-footer-navbar.css">
  <link rel="stylesheet" href="../css/weather.css">
  <link rel="stylesheet" href="../css/WU-HistoryTan.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.htm">Latham Weather</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarcollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.htm"><span class="fa fa-home fa-lg"></span> Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Historical<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" role="menu">
              <a class="dropdown-item" href="../today.htm">Today</a>
              <a class="dropdown-item" href="../yesterday.htm">Yesterday</a>
              <a class="dropdown-item" href="../thismonth.htm">This Month</a>
              <a class="dropdown-item" href="../thisyear.htm">This Year</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Graphics<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown02" role="menu">
              <a class="dropdown-item" href="../gauges.htm">Gauges</a>
              <a class="dropdown-item" href="../charts.htm">Recent Trends</a>
              <a class="dropdown-item" href="../tempvar.htm">Monthly Temp Variations</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Records<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown03" role="menu">
              <a class="dropdown-item" href="../monthlyrecord.htm">Monthly</a>
              <a class="dropdown-item" href="../record.htm">Alltime</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Testing<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04" role="menu">
              <a class="dropdown-item" href="../chartsannual.htm">Annual Charts</a>
              <a class="dropdown-item" href="../windmap.htm">WindMap</a>
              <a class="dropdown-item" href="history.php">History</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other Sites<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown05" role="menu">
              <a class="dropdown-item" href="http://bom.gov.au/act" target="_blank" rel="noopener">BOM ACT Site</a>
              <a class="dropdown-item" href="https://app.weathercloud.net/d0419553521#current" target="_blank" rel="noopener">WeatherCloud</a>
              <a class="dropdown-item" href="https://www.wunderground.com/dashboard/pws/I90580966" target="_blank" rel="noopener">WeatherUnderground Historical</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about.htm"><span class="fa fa-info-circle fa-lg"></span> About</a>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container">
    <p style="display:none" id="forecast">
      <#forecast>
    </p>
    <p style="display:none" id="lastupdate">
      <#update>
    </p>
    <div id="weatherquote" style="font-family: 'Paprika', serif;"></div>
    <!--
  <div class="alert alert-danger" role="alert">
    <h6 class="my-auto">Wind data is not available at the moment due to cockatoos eating anenometer cable.</h6>
  </div>
  -->
    <div id="updatealert"></div>
    <div class="alert alert-info" role="alert">
      <h4 class="my-auto">Historical Data</h4>
    </div>
    <div class="alert alert-secondary" role="alert">
      <p class="my-auto">Sourced from Weather Underground</p>
    </div>
    <div class="row">
      <?php include("WU-History-inc.php"); ?>
    </div>
    <div class="row">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">
        <p class="text-right"><em>Latitude <#latitude> Longitude <#longitude> Elevation <#altitude><br>
                  Page updated <#update>.<br>
                    Powered by <a href="https://cumuluswiki.wxforum.net/a/Software" target="_blank" rel="noopener">Cumulus MX</a> v<#version> (<#build>)</em></p>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <br>
      <p class="text-light">&copy; LathamWeather.net 2019</p>
    </div>
  </footer>

  <!-- jQuery and Bootstrap JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <!-- Custom JavaScript-->
  <script src="../js/weather.js"></script>
  <script>
    $(document).ready(function() {
      showQuote();
      showForecastIcon();
    });
  </script>
</body>

</html>
