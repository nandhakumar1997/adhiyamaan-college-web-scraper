 
<?php
 $db_con = mysqli_connect("127.2.7.130:3306", "adminkCWadcX", "51aRgFr79TJB", "funappworld"); 
 $sql = "SELECT * FROM `bat`"; 
 $query = mysqli_query($db_con, $sql); 
 $r = mysqli_fetch_assoc($query);

 ?>