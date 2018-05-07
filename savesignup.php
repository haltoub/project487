<?php

require_once('../../../DB.php');

$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


	if($mysqli->connect_errno) {
			die("Could not connect to server ".DBHOST."<br />");
	}
	else {
			echo "Successful connection" . "<BR>";
			header("location: login.html");
	}




	$user = $_POST["username"];
	$pass = $_POST["password"];
	$LName = $_POST["LName"];
	$FName = $_POST["FName"];
	$Email = $_POST["Email"];
	$Phone = $_POST["Phone"];
	$BirthDay = $_POST["BirthDay"];
	$EncryptPassword = md5($pass);

	$query = "INSERT INTO usertable(username,password,LName,FName,Email,Phone,BirthDay) VALUES ('$user','$EncryptPassword ','$LName','$FName','$Email','$Phone','$BirthDay')";

    if(!mysqli_query($mysqli,$query))
    {
      echo 'Not Inserted';
    }


?>
