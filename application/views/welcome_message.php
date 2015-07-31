<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/main.css">

</head>

<body>
	
	<nav id="header" class="navbar">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <a id="brand" class="navbar-brand upper" href="/BuskrApp">Buskr</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a class="upper"href="/BuskrApp">Home</a></li>
                        <li><a class="btn upper" href="/BuskrApp/index.php/main/signUpForm">Sign Up</a></li>
						<li><a class="btn upper"href="/BuskrApp/index.php/main/logginForm">Login</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    <div class="jumbotron">
    	<div class="container text-center">
    		<h1>Announce Your Performance. Anywhere. Anytime.</h1>
    		<p>Share your upcoming events with the people who care about your art</p>
    		<p><a class="btn btn-primary btn-lg" href="/BuskrApp/index.php/main/signUpForm" role="button">Learn more »</a></p>
    	</div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-centered">
			<h1 class="text-center">Upcoming Events</h1>
		</div>
	</div>
</div>
<hr>

<?PHP for ($i=0; $i < count($name) ; $i++) { ?>
	
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-centered">
            <div class="box">
                <div class="info">
                    <h4 class="text-center"><?php echo $name[$i];?></h4>
                    <hr>
                    <p class="text-center">Description</p>
                    <h4 class="text-center"><?php echo $description[$i];?></h4>
                    <h3 class="text-center">Address:</h3>
                    <h4 class="text-center"><?php echo $location[$i];?></h4>
                    <hr>
                    <h3 class="text-center">City:</h3>
					<h4 class="text-center"><?php echo $cities[$i];?></h4>
					<h3 class="text-center">Time:</h3>
					<h4 class="text-center"><?php echo $setTime[$i];?></h4>
                    <h3 class="text-center">Date:</h3>
					<h4 class="text-center"><?php echo $date[$i];?></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<br>


<?php }?>
<br>





</body>
</html>