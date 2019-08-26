<?php
error_reporting(0);
$get= json_decode(file_get_contents('http://ip-api.com/json/'),true);


date_default_timezone_set($get['timezone']);
$city = $_GET['city'];
$country = $_GET['country'];

$string ="http://api.openweathermap.org/data/2.5/weather?q=".$city=",".$country="&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
$data= json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];
$icon = $data['weather'][0]['icon'];
$visibility = $data['visibility'];
$visibilitykm = $visibility / 1000;
$logo = "<centre><img src='http://openweathermap.org/img/w/".$icon.".png'></centre>";
$desc = "<b>Description: <p>".$data['weather'][0]['description']."</p></b>";
$temperature = "<b>Temperature: ".$temp."°C</b><br>";
$clouds = "<b>Clouds: ".$data['clouds']['all']."%</b><br>";
$humidity = "<b>Humidity: ".$data['main']['humidity']."%</b><br>";
$windspeed = "<b>Windspeed: ".$data['wind']['speed']."m/s</b><br>";
$pressure = "<b>Pressure: ".$data['main']['presure']."hpa</b><br>";
$visibility = "<b>Visibility: ".$visibilitykm."km</b><br>";
$sunrise = "<b>Sunrise: ".date('h:i A', $data['sys']['sunrise'])."</b><br>";
$sunset = "<b>Sunset: ".date('h:i A', $data['sys']['sunset'])."</b><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/">

    <title>Weather of <?php echo $_GET['city'];?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <![endif]-->
</head>

<body style="background-color: blanchedalmond">

<div class="container bg-primary">
    <div class="header clearfix">

        <h3 class="text-muted" style="color: black " align="centre" >Weatherapp</h3>
        <h4>Weather details of your <?php echo $_GET['city']; ?></h4>
        <table class="table table-bordered">
            <tr>
                <td>Temperatures</td>
                <td><?php echo $logo; ?><?php echo $temperature; ?></td>
            </tr>
            <tr>
                <td>Clouds</td>
                <td><?php echo $clouds; ?></td>
            </tr>
            <tr>
                <td>Humidity</td>
                <td><?php echo $humidity; ?></td>
            </tr>
            <tr>
                <td>Wind speed</td>
                <td><?php echo $windspeed; ?></td>
            </tr>
            <tr>
                <td>pressure</td>
                <td><?php echo $pressure; ?></td>
            </tr>
            <tr>
                <td>Visiblity</td>
                <td><?php echo $visibility; ?></td>
            </tr>
            <tr>
                <td>Sunrise</td>
                <td><?php echo $sunrise; ?></td>
            </tr>
            <tr>
                <td>Sunset</td>
                <td><?php echo $sunset; ?></td>
            </tr>
        </table>
    </div>

    
    


    <footer class="footer">
        <p>&copy; Md Ariful Islam</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>

