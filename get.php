<?php

   require_once('../../../DB.php');


   $mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


   	if($mysqli->connect_errno) {
   			die("Could not connect to server ".DBHOST."<br />");
   	}
$id=addslashes($_REQUEST['id']);
$image=mysqli_query("SELECT* from images");
$image= $image['image'];
header("Content-type:image/jpg");
?>
