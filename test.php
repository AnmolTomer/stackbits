<?php
$url = "http://api.openweathermap.org/data/2.5/find?q=Chennai&type=accurate&units=imperial&mode=xml&APPID=2a3b861cc493bddbed998f10a9e52a55";
$getweather = simplexml_load_file($url);
$gethumidity = $getweather->list->item->humidity['value'];
$gettemp = $getweather->list->item->temperature['value'];
$getpressure = $getweather->list->item->pressure['value'];
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Current Chennai Weather</title>
    </head>
    <body>
        <h1> Chennai's Weather</h1>
        <ul>
            <li>Humidity: <?php echo($gethumidity); ?> %</li>
            <li>Temperature: <?php echo($gettemp); ?> K</li>
			<li>Pressure: <?php echo($getpressure); ?> Pa</li>
        </ul>
    </body>
</html>



