<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<title>BAT RESULT SYSTEM | DARK KNIGHT ENTERPRISES</title>


<style>
a, a:hover, a:visited {
	text-decoration: none;
	color: inherit;
}

#loader {
	margin-left: 39em;
	margin-top: 19em;
}
	
	@font-face {
		font-family: bat;
		src: url("dkr.ttf");
	}
	

	body {
		background: rgba(0,0,0,0.9);
		

		background-position: left 5px;
		font-family: bat;

	}
body {

 background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("bg.jpg");
}


#h {
background: rgba(0,0,0,0.2);

color: white;
font-size: 100px;
}

#login {
	background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), transparent;
	height: 400px;

	color: white;
}
h4 {
	font-family: fantasy;
}
.fa-facebook-square {
	color: rgba(0,0,203,1);
}

</style>

<div class="col-sm-12 text-left" id="h">
<h1>@ BAT </h1>

</div>
<div class="col-xs-12">
<br/><br/><br/><br/><br/><br/><br/>
</div>
<div class="col-xs-1"></div>
<div class="col-xs-4 text-center" id="login">
<h3>STATUS: ONLINE</h3>
<hr style="border-top: 3px solid #fff;">


<form action="index.php" method="POST">

<br/><br/>
<h2>access key</h2>
<br/>
	<input type="password" name="key" class="form-control" style="background: transparent; font-size: 70px; color: white; width: 350px;">
	<br/>
	<br/>

	<input type="submit" value="proceed" class="btn btn-primary">
</form>



<?php 
session_start();

if (isset($_POST['key'])) {

	if (!empty($_POST['key'])) {

$key = $_POST['key'];

if ($key == "king17797") {

$_SESSION['key'] = str_shuffle("Abcdefghijklmno");
header("location: bat.php");

}

else {

	echo "<br/><p style='color: red;'>the access key is incorrect</p>";

}




	}
}







?>
</div>
<div class="col-xs-1"></div>

