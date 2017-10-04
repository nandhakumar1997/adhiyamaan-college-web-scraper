<?php 
session_start();
if (empty($_SESSION['key'])) {

	header("location: index.php");

}







?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<style>
#h {


	background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), transparent;
color: white;
font-size: 100px;
}


	
	@font-face {
		font-family: bat;
		src: url("dkr.ttf");
	}
	body {

		background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("http://www.magic4walls.com/wp-content/uploads/2014/01/art-batman-bats-dark-moon.jpg");
		background-position: left 5px;
		font-family: bat;

	}
	#button {

		background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), transparent;
		padding: 40px;
		color: white;
		font-family: bat;
		border: none;

	}

		#button:hover {

		background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,1)), transparent;
		padding: 40px;
		color: white;
		font-family: bat;


	}



	</style>
	<div class="col-sm-12 text-left" id="h">
<h1>@ BAT </h1>


</div>
<div class="col-sm-4 text-center">
<br/>
<br/>
<br/>
<br/>
<form action="mech.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate mech module" id="button">
</form>

<br/>
<br/>
<br/>
<br/>
<form action="cse.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate CSE module" id="button">
</form>

<br/>
<br/>
<br/>
<br/>
<form action="eee.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate EEE module" id="button">
</form>



</div>






<div class="col-sm-4 text-center">
<br/>
<br/>
<br/>
<br/>
<form action="ece.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate ECE module" id="button">
</form>

<br/>
<br/>
<br/>
<br/>
<form action="it.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate IT module" id="button">
</form>

<br/>
<br/>
<br/>
<br/>
<form action="civil.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate CIVIL module" id="button">
</form>



</div>

<div class="col-sm-4 text-center">
<br/>
<br/>
<br/>
<br/>
<form action="biotech.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate BIOTECH module" id="button">
</form>

<br/>
<br/>
<br/>
<br/>
<form action="biomedical.php" method="POST">
<input type="hidden" name="regno" value="fwjwefdiueuhwufiefiuiu">
<input type="submit" value="activate BIOMEDICAL module" id="button">
</form>





</div>