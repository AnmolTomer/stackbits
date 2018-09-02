<?php
$url = "http://api.openweathermap.org/data/2.5/find?q=Chennai&type=accurate&units=imperial&mode=xml&APPID=2a3b861cc493bddbed998f10a9e52a55";
$getweather = simplexml_load_file($url);
$gethumidity = $getweather->list->item->humidity['value'];
$gettemp = $getweather->list->item->temperature['value'];
$getpressure = $getweather->list->item->pressure['value'];
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Weather</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
	<table>
		<thead>
			<tr>
				<th>Field</th>
				<th>Data</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Humidity</td>
				<td><?php echo($gethumidity); ?> %</td>
				
			</tr>
			<tr>
				<td>Temperature</td>
				<td><?php echo($gettemp); ?> K</td>
				
			</tr>
			<tr>
				<td>Pressure</td>
				<td><?php echo($getpressure); ?> Pa</td>
				
			</tr>
			
		</tbody>
	</table>
</div>
  

</body>

</html>


