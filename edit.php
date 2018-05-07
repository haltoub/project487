<?php

session_start();

//if(!$_SESSION['ValidUser']) {
	// send 'em back to the login form
	//header('Location: https://www.mis419.com/login.php');
	//die();
//}

?><!DOCTYPE html>
<html>
<body>


<p>Edit suggestions</p>
<?php
$editEmpnumber = $_GET['empnum'];

// do some db stuff here

require_once('../../../DB.php');

$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


  if($con->connect_errno) {
      die("Could not connect to server ".DBHOST."<br />");
  }


  $query = 'SELECT sugestions,personName,email,phoneNumber from mytable WHERE ID = ' . $editEmpnumber;

  	# setting the fetch mode
  	$result= mysqli_query($con, $query);

	$empFound = false;
	if($row = mysqli_fetch_array($result)) {
		$empFound = true;
		$Comment = $row['suggestions'];
		$Person = $row['personName'];
		$Email = $row['email'];
    $Number = $row['phoneNumber'];
		$ActiveEmp = "";
		if($row['EmpActive']) $ActiveEmp=" checked ";

	}


if($empFound) {
?>
<p>Please enter the following suggestions information:</p>

<form action="main.php" method="post">
  Suggestions:<br>
  <input type="text" name="suggestions" value="<?php echo $Comment; ?>" >
  <br><br>
  Person name:<br>
  <input type="text" name="personName" value="<?php echo $Person; ?>" >
  <br><br>
  Email Address:<br>
  <input type="text" name="email" value="<?php echo $Email; ?>" >
  <br><br>

  Phone number:<br>
  <input type="text" name="phoneNumber" value="<?php echo $Number; ?>" >
  <br><br>

  Active Employee:<br>
  <input type="checkbox" name="factiveemployee" value="" <?php echo $ActiveEmp; ?>>
  <br><br>
  <input type="hidden" name="Fempnum" value="<?php echo $editEmpnumber; ?>">
  <input type="submit" name="editemployeenow" value="Submit">
</form>
<?php
} //end if($empFound) block
?>





<br><br>
<p><a href="main.php">Return to the Employee Roster</a></p>
<p><a href="homepage.html">Return to the menu</a></p>



</body>
</html>
