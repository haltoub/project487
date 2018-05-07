<?php

session_start();
if($_SESSION['username']==true)
{
  //echo "welcome"." ".$_SESSION['username'];
  //session_destroy();
}
else{
  header('location:index.html');
}
require_once('../../../DB.php');
$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


	if($mysqli->connect_errno) {
			die("Could not connect to server ".DBHOST."<br />");
	}
	else {
			echo "Successful connection";

	}
header("location: data.php");
//header("refresh:4; homepage.html");
$olemissID = $_POST['id'];
$Comment=$_POST['personName'];
$Person=$_POST['suggestions'];
$Email=$_POST['email'];
$Number=$_POST['phoneNumber'];
$sql = "INSERT INTO mytable(personName,suggestions,email,phoneNumber) VALUES ('$Comment','$Person','$Email','$Number')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}



echo "Query: " + $sql;
//$mysqli->query($sql);




// define variables and set to empty values



$mysqli->close();


?>
