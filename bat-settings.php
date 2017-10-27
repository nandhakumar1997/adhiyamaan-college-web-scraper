<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<?php include 'include.php'; ?>
<title>settings | BAT</title>

<style type="text/css">

@font-face {
	font-family: bat;
	src: url("archives/dkr.ttf");
}


	body {
		background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("http://www.magic4walls.com/wp-content/uploads/2014/01/art-batman-bats-dark-moon.jpg");
		background-position: left 5px;
		font-family: bat;

	}
	#settings {
		font-family: bat;
		color: white;
		padding: 30px;
		background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), transparent;
	}
	#url {
		background-color: transparent;
	}
=
<div class="col-sm-12 text-center" id="head">
<h1>@ BAT SETTINGS</h1>
<br/>
<p>if you came to this page unknowingly then remember that your ip has been saved to logs</p>
<br/><br/><br/><br/><br/><br/>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6 text-center" id="settings"><div class="col-sm-12 text-center" id="head">
<h1>@ BAT SETTINGS</h1>
<br/>
<p>if you came to this page unknowingly then remember that your ip has been saved to logs</p>
<br/><br/><br/><br/><br/><br/>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6 text-center" id="settings"><div class="col-sm-12 text-center" id="head">
<h1>@ BAT SETTINGS</h1>
<br/>
<p>if you came to this page unknowingly then remember that your ip has been saved to logs</p>
<br/><br/><br/><br/><br/><br/>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6 text-center" id="settings"><div class="col-sm-12 text-center" id="head">
<h1>@ BAT SETTINGS</h1>
<br/>
<p>if you came to this page unknowingly then remember that your ip has been saved to logs</p>
<br/><br/><br/><br/><br/><br/>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6 text-center" id="settings">

<h2><i class="fa fa-gear"></i>&nbsp;Settings</h2>
<form action="bat-settings.php" method="POST">
<br/>
<?php 

$url = $r['url'];
echo "the current url is <br/><br/><p style='font-family: ubuntu;'>", $url;
echo "</p><br/><br/><input type='text' name='url' class='form-control' id='url'><br/><br/>";
?>
<input type="submit" name="submit" value="update" class="btn btn-primary">

</form>

</div>
<?php 
if (isset($_POST['url'])) {

	if (!empty($_POST['url'])) {

$url1 = $_POST['url'];
$url2 = "?regno=";
$ur5 = $url1.$url2;

$spd = "UPDATE `bat` SET `url`='$ur5'";
$q = mysqli_query($db_con, $spd);


	}
}





?>
