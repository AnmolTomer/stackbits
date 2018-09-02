<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,name,age,gender,city,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<?php if( !empty($user) ): ?>

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
				<td>E-mail</td>
				<td><?= $user['email']; ?></td>
				
			</tr>
			<tr>
				<td>Name</td>
				<td><?= $user['name']; ?></td>
				
			</tr>
			<tr>
				<td>Age</td>
				<td><?= $user['age']; ?></td>
				
			</tr>
			<tr>
				<td>Gender</td>
				<td><?= $user['gender']; ?></td>
				
			</tr>
			<tr>
				<td>City</td>
				<td><?= $user['city']; ?></td>
				
			</tr>
		</tbody>
	</table>
</div>
  
<?php else: ?>
		<center><h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a></center>


	<?php endif; ?>
  

</body>

</html>


