<?php
        $url = "https://api.breezometer.com/baqi/?lat=13.0827&lon=80.2707&key=85f9929c6e044222be3b00fc6e9bf3db";
        $data = json_decode(file_get_contents($url), true);
        
		$datec=$data['datetime'];
		$aqi=$data['breezometer_aqi'];
		$aqi_status=$data['breezometer_description'];
		$caqi=$data['country_aqi'];
		$country=$data['country_description'];
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>AQI</title>
  
  
  
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
				<td>Date and Time</td>
				<td><?php echo($datec); ?> </td>
				
			</tr>
			<tr>
				<td>Air Quality Index(AQI)</td>
				<td><?php echo($aqi); ?> </td>
				
			</tr>
			<tr>
				<td>Air Quality Index Status</td>
				<td><?php echo($aqi_status); ?> </td>
				
			</tr>
			<tr>
				<td>Country Air Quality Index</td>
				<td><?php echo($caqi); ?> </td>
				
			</tr>
			<tr>
				<td>Country Air Quality Index Status</td>
				<td><?php echo($country); ?> </td>
				
			</tr>
			
		</tbody>
	</table>
</div>
  

</body>

</html>



