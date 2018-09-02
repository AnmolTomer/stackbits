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
  <title>StackBits|Poll</title>
  
  
  
      <link rel="stylesheet" href="css/dashstyle.css">

  
</head>

<body>

<?php if( !empty($user) ): ?>

  <div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      StackBits
    </div>
    <ul class='nav'>
      <li>
        <a href="dashboard.php">Dashboard</a>
      </li>
      <li>
        <a href="helpline.php">Helpine</a>
      </li>
      <li>
        <a href="health.php">Be Healthy :D</a>
      </li>
      <li>
        <a href="pollution.php">Pollution Statistics</a>
      </li>
      <li>
        <a class='active' href="poll.php">Polls</a>
      </li>
      <li>
        <a href="forum.php">Forums</a>
      </li>
      <li>
        <a href="profile.php">Profile</a>
      </li>
      <li>
        <a href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class='content isOpen'>
    <a class='button'></a>
    <center><iframe src="poll/index.php" height=500 width=700></iframe></center>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/dashindex.js"></script>
	
	
<?php else: ?>
		<center><h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a></center>


	<?php endif; ?>




</body>

</html>
