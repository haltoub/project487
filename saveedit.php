<?php

session_start();

//if(!$_SESSION['ValidUser']) {
	// send 'em back to the login form
//	header('Location: https://www.dawoodsa2018.com/login3.php');
	//die();
//}

?><!DOCTYPE html>
<html>
<body>


<p>Edit Suggestions Complete</p>
<?php
$editEmpFirstName = $_POST['suggestions'];
$editEmpLastName = $_POST['personName'];
$editEmpEmail = $_POST['email'];
$editEmpnumber = $_POST['phoneNumber'];

// do some db stuff here

require_once('../../../DB.php');

$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


  if($con->connect_errno) {
      die("Could not connect to server ".DBHOST."<br />");
  }

  $query = 'SELECT suggestions,personName,email,phoneNumber from mytable WHERE ID = ' . $editEmpnumber;

  	# setting the fetch mode
  	$result= mysqli_query($con, $query);


	$empFound = false;
	if($row = mysqli_fetch_array($result)) {
		$empFound = true;
		$empName = trim($editEmpFirstName) . " " . $editEmpLastName;
		echo "<p>Suggestions updated: " . $empName . "</p>";
		$empUpdateSQL = "UPDATE mytable "
			. "SET suggestions = '" . $editEmpLastName . "', "
			. 	   "personName = '" . $editEmpFirstName . "', "
			.	   "email = '" . $editEmpEmail . "' "
			. "WHERE ID = " . $editEmpnumber;

		$conn->exec($empUpdateSQL);
	}




?>

<br><br>
<p><a href="data.php">Return to the suggestions Roster</a></p>
<p><a href="homepage.html">Return to the menu</a></p>

</body>
</html>
