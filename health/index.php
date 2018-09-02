<?php
        $url = "https://api.breezometer.com/baqi/?lat=13.0827&lon=80.2707&key=85f9929c6e044222be3b00fc6e9bf3db";
        $data = json_decode(file_get_contents($url), true);
        
		$children=$data['random_recommendations']['children'];
		$sport=$data['random_recommendations']['sport'];
		$health=$data['random_recommendations']['health'];
		$inside=$data['random_recommendations']['inside'];
		$outside=$data['random_recommendations']['outside'];
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Health</title>
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<div class="comics-dialog">
  <?php echo($children); ?>
</div><br>

<div class="comics-dialog">
  <?php echo($sport); ?>
</div><br>

<div class="comics-dialog">
  <?php echo($health); ?>
</div><br>

<div class="comics-dialog">
  <?php echo($inside); ?>
</div><br>

<div class="comics-dialog">
  <?php echo($outside); ?>
</div><br>
  
  

</body>

</html>
