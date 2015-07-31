<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buskr</title>
  <link rel="stylesheet" href="../../public/main.css"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>


  <nav id="header" class="navbar">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <a id="brand" class="navbar-brand upper" href="/BuskrApp/index.php/main/loggin">Buskr</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a class="upper" href="/BuskrApp">Home</a></li>
                        <li><a class="upper" href="/logOut">Logout</a></li>
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
<p>Enter Event Information</p>
<form action="/BuskrApp/index.php/main/processForm" method="Post">
<h3>Artist Name:</h3>
<input type="text" name="BandName" placeholder="Artist Name">
<h3>Address:</h3>
<input type="text" name="location" placeholder="adress">
<h3>City:</h3>
<input type="text" name="city" placeholder="city">


<h3>Set Time</h3>
<select name="hour">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>

<select name="mOne">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
<select name="mTwo">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
<select name="tofd">
  <option value="am">am</option>
  <option value="pm">pm</option>
</select>


<h3>Month:</h3>
<select name="month">
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
</select>


<h3>Date:</h3>
<select name="day">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

<h3>Year:</h3>
<select name="year">
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
</select>

<h3>Description:</h3>
<textarea name="description">
Hello
</textarea>

<input type="submit" class="button">

	
</form>
</div>
</div>
</div>
</html>