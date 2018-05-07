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






<?php


require_once('../../../DB.php');
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
$result = mysqli_query($con,"SELECT * FROM mytable");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css">
<title>Delete suggestion data</title>
</head>

<script type="text/javascript" class="init">


$(document).ready(function() {
	$('#employeetable').DataTable();
} );


</script>
<body style="background-image:url('images/s.jpg')">
	<p><font size ="10"><p align="center"> Delete Suggestions Information</font></p>
	<table id="employeetable" class="display" cellspacing="0" width="100%" >
	<style>



	employeetable {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	#employeetable td, #employeetable th {
	    border: 1px solid #ddd;
	    padding: 8px;
	}

	#employeetable tr:nth-child(even){background-color: #f2f2f2;}

	#employeetable tr:hover {background-color: #ddd;}

	#employeetable th {
	    padding-top: 12px;
	    padding-bottom: 12px;
	    text-align: left;
	    background-color: #324044;
	    color: white;
	}
</style>

<thead><tr>
<th>Person Name</p></th>
<th>Suggestions</th>
<th>Email Address</th>
<th>Phone Number</th>




</tr></thead>



<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">

<td><?php echo $row["personName"]; ?></td>
<td><?php echo $row["suggestions"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phoneNumber"]; ?></td>
<td><a href="deletedata.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
<br>
<br>
<br>
<p align="left"><a href="data.php">return the  Main Suggestions table</i></p>
</body>
</html>
