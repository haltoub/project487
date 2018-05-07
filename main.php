<?php

//session_start();

//if(!$_SESSION['ValidUser']) {
	// send 'em back to the login form
//	header('Location: https://www.mis419.com/login.php');
//	die();
//}

// ===============================================
// ===============================================




// ===============================================
// ===============================================



// are we just arriving from the Delete Employee form?
if(isset($_POST['deleteemployeenow'])) {
	// delete employee from the employees table in the DB

	$delEmpnumber = $_POST['Fempnum'];

	// do some db stuff here

  require_once('../../../DB.php');

  $con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


    if($con->connect_errno) {
        die("Could not connect to server ".DBHOST."<br />");
    }


		$query = ("SELECT personName,suggestions from mytable WHERE ID = id");
    $result= mysqli_query($con, $query);

		$query=("'id', $delEmpnumber");

		// execute the PDO prepared statement
		$query->execute();

		# setting the fetch mode


		$empFound = false;
		if($row = mysqli_fetch_array($result)) {
			$empFound = true;
			$empName = trim($row['personName']) . " " . $row['suggestions'];
			echo "<p>Employee deleted: " . $empName . "</p>";
			$query = ("DELETE personName,suggestions from mytable WHERE ID = id");
			$query=("'id', $delEmpnumber");
			$query->execute();
		}



}

// ===============================================
// ===============================================


// are we just arriving from the Edit EmployephoneNumber
if(isset($_POST['editemployeenow'])) {

	$editEmpFirstName = $_POST['personName'];
	$editEmpLastName = $_POST['suggestions'];
	$editEmpEmail = $_POST['email'];
	$number = $_POST['phoneNumber'];
	$editEmpnumber = $_POST['fempnum'];
	$editActiveStatus = (  isset($_POST['factiveemployee']) ? "1" : "0" );


	// do some db stuff here
  require_once('../../../DB.php');

  $con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


    if($con->connect_errno) {
        die("Could not connect to server ".DBHOST."<br />");
    }


    $query =("SELECT * from mytable WHERE ID = :id");
		$result= mysqli_query($con, $query);

		$query= ("':id', $editEmpnumber");




		$empFound = false;
		if($row = mysqli_fetch_array($result)) {
			$empFound = true;
			$empName = trim($editEmpFirstName) . " " . $editEmpLastName ;
			echo "<p>Employee updated: " . $empName . "</p>";

			$query = ("UPDATE mytable
				 SET EmpLastname = :suggestions,
				     EmpFirstname = :personName,
				     EmpEmail = :email,
					 EmpActive= :empstatus,
				     WHERE ID = :id");
			$query =("':id', $editEmpnumber");
			$query=("':suggestions', $editEmpLastName");
			$query =("':personName', $editEmpFirstName");
			$query=("':email', $editEmpEmail");

			$query=("':empstatus', $editActiveStatus");


		}
		}






// ===============================================
// ===============================================


?><!DOCTYPE html>
<html>
<head>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel=stylesheet href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script  src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" class="init">


$(document).ready(


function() {
	$('#employeetable').DataTable();
}


);


</script>
</head>
<body>
<br /><br />
<a href="employeeform.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Add New Employee"><i class="fas fa-user-plus"></i></button></a><br />
<p>Employee Roster</p>
<table id="employeetable" class="display" cellspacing="0" >

<thead><tr>
<th>&nbsp;</th>
<th>person Name</th>
<th>Suggestions</th>
<th>Email Address</th>
<th>Phone Number</th>
</tr></thead>
<tbody>
<?php


// do some db stuff here
require_once('../../../DB.php');

$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


  if($con->connect_errno) {
      die("Could not connect to server ".DBHOST."<br />");
  }


	  $query= "SELECT suggestions,personName,email,phoneNumber FROM mytable";

	  $result= mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result)) {
		$deleteLink = "<a href='delete.php?empnum=" . $row['id'] ."'>";
		$editLink = "<a href='edit.php?empnum=" . $row['id'] ."'>";
		$editLink = "<a href='edit.php?empnum=" . $row['id'] ."'>";
		$editLink = "<a href='edit.php?empnum=" . $row['id'] ."'>";
		echo "<tr><td>" . $deleteLink . "<i class='fas fa-trash-alt'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
			. $editLink . "<i class='fas fa-pencil-alt'></i></a></td><td>"
			. $row['personName'] . "</td><td>"
			. $row['suggestions'] . "</td></tr>"
			. $row['email'] . "</td><td>"
			. $row['phoneNumber'] . "</td><td>";




	}





?>
</tbody>
</table>


<br><br>
<a href="data.php">Return to the menu</a>

</body>
</html>
