<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>
	
 <nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1>street</h1>
		</li>
	</ul>

 <nav>
 <section class="top-bar-section">
	<ul class="right ">
<!-- {% block head %} -->
<li><a href="/ASLProject/index.php/main/signUpForm">sign Up</a></li>
<li><a href="/ASLProject/index.php/main/logginForm">login</a></li>
<li><a href="/ASLProject/index.php/main/loggOut">Logout</a></li>

<!-- {% endblock %} -->


			</ul>	
	</section>
	</nav> 
</nav>

<h1>Home</h1>


<?PHP for ($i=0; $i < count($name) ; $i++) { ?>
	
<h2>Artist name:</h2>
<h4><?php echo $name[$i];?></h4>

<h3>description:</h3>
<p><?php echo $description[$i];?></p>

<h3>Adress:</h3>
<h4><?php echo $location[$i];?></h4>

<h3>city:</h3>
<h4><?php echo $cities[$i];?></h4>
<h3>Time:</h3>

<h4><?php echo $setTime[$i];?></h4>

<h3>Date:</h3>
<h4><?php echo $date[$i];?></h4>


<br>


<?php }?>
<br>





</body>
</html>