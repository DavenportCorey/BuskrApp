<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Buskr</title>
	<link rel="stylesheet" href="../public/main.css"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

	<nav id="header" class="navbar">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <a id="brand" class="navbar-brand upper" href="/BuskrApp">Buskr</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a class="upper" href="/BuskrApp">Home</a></li>
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
 <hr>

<form action="/BuskrApp/index.php/main/processSignUp" method="Post">

<input type="text" name="email" placeholder="email">
<input type="text" name="password" placeholder="password">
<input type="text" name="city" placeholder="city">




<input type="submit" class="button">

	
</form>
</html>