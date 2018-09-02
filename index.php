<?php
        $url = "https://api.breezometer.com/baqi/?lat=13.0827&lon=80.2707&key=85f9929c6e044222be3b00fc6e9bf3db";
        $data = json_decode(file_get_contents($url), true);
        
		$alert=$data['breezometer_description']
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>StackBits</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>


      <link rel="stylesheet" href="css/style.css">
	  

  
</head>

<body>

  <nav class="nav" id="menu">
  <div class="wrap">
    <div class="brand">
      <span>StackBits</span>
    </div>
      <button id="mobile-btn" class="hamburger-btn">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
    <ul class="top-menu" id="top-menu">
      <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>
</nav>

<header class="hero">
  <div class="content">
    <p>Providing technologies to create smart and futuristic cities!</p>
    <button class="cta"><a href="register.php">Sign Up</a></button>
  </div>
</header>

<marquee><font size=30px><p><b>Live Air Quality Alert: <?php echo($alert); ?></b></p></font></marquee>

<main class="main">
  <section>
    <div class="tab-row">
      <div class="col-12">
        <center><h2>Forging the cities of future.</h2>
		<h3><b>Our Mission and Vision:</b></h3>
        <p>A multi disciplinary project focused at modernizing the cities of today for the technology and exciting future of tomorrow.
</p></center>
      </div>
    </section>
    <section class="feature">
      <div class="tab-row">
        <div class="col-12">
          <h2>How StackBits is helping in building Smart Communities?</h2>
          <p>There comes a time when community leaders struggle to make their community more efficient and smarter. Forward-thinking organizations institute policies and procedures that enable them to make data-driven decisions, maintain constant awareness of community activities, and stay connected with all of their constituents.

Effective smart communities do so by applying a hub approach that connects people with the information and technology to drive improved quality of life, innovation, and better choices. Get the most out of your location technology investment by exploiting a combination of big data, community feedback, and web development to gain previously unimagined insight.

We at StackBits are driven by this very idea. Our site aims to bring together the residents of Chennai, as of now, to form a full-fledged online community. Each member of our site has access to a plethora of opportunities that are vital to the community. We allow multiple activities such as lodging complaints,  participating on a local forum, getting the local news, availing services, getting information regarding the city, and a lot more to be performed from a single easily-accessible location, there by making our site simple to use for everyone.</p>
        </div>
      </div>
    </div>
  </section>
 
</main>



<footer class="footer">
    <div class="row">
      <div class="col-6">
        <p><i class="fa fa-phone" aria-hidden="true"></i> +91 7008147519</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> support@stackbits.ml</p>
      </div>
      <div class="col-6" style="text-align: right;">
        <h3>StackBits</h3>
		<p></p>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">&copy; 2018 StackBits - <a href="#">Facebook</a> - <a href="#">Twitter</a></div>
    </div>
</footer>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
