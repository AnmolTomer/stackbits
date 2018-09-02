<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['city'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, name, age, gender, city, password) VALUES (:email, :name, :age, :gender, :city, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':age', $_POST['age']);
	$stmt->bindParam(':gender', $_POST['gender']);
	$stmt->bindParam(':city', $_POST['city']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'You have successfully registered on StackBits.';
	else:
		$message = 'Sorry there must have been an issue creating your account.';
	endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>StackBits|Register</title>
	<link rel="stylesheet" type="text/css" href="css/registerstyle.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="wrapper">
	<div class="container">
		<h1>StackBits Register</h1>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	
<form class="form" action="register.php" method="POST">
		
		<input type="text" placeholder="E-Mail" name="email">
		<input type="text" placeholder="Name" name="name">
		<input type="text" placeholder="Age" name="age">
		<input type="text" placeholder="Gender" name="gender">
		<input type="text" placeholder="City" name="city">
		<input type="password" placeholder="Password" name="password">
		<input type="password" placeholder="Confirm Password" name="confirm_password">
		<input type="submit">

	</form>
	
	<h3>All fields are mandatory.</h3>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
	

</body>
</html>