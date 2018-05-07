<?php
session_start();
if($_SESSION['username']==true)
{
  //echo "welcome"." ".$_SESSION['username'];
  //session_destroy();
}
else{
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
<h1>Suggestions Table</h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css">
<style>

}
div.hidden
{
   display: none
}
.formelem{
	margin-top: 10px;



}
input[type=submit] {
    background-color: green;

    padding: 4px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button{
	background-color: grey;
	font-size: 15px;
	cursor: pointer;
}
button[href]{
	background-color: grey;
	font-size: 10px;
	cursor: pointer;
  width:5px;
}
input[type=text] {
    width: 15%;

}


input[type=text] {
    width: 15%;

}
label[input]{
  width:15%;
}
h1{
  font-size: 40px;
  font-style:normal;
  text-align: center;
}
</style>




</script>
</head>
</script>
<script type="text/javascript" class="init">


$(document).ready(function() {
	$('#employeetable').DataTable();
} );


</script>
</head>
<body style="background-image:url('images/s.jpg')">

<table id="employeetable" class="display" cellspacing="0" width="100%" >
<style>

</style>
<br /><br />
<a href="form.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Add New suggestions"><i class="fas fa-user-plus"></i></button></a><br />
<thead><tr>
<th>Person Name</p></th>
<th>Suggestions</th>
<th>Email Address</th>
<th>Phone Number</th>




</tr></thead>
<style>





#employeetable {
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
<tbody>
<?php


// do some db stuff here

require_once('../../../DB.php');

$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


  if($con->connect_errno) {
      die("Could not connect to server ".DBHOST."<br />");
  }

  $query= "SELECT personName,suggestions,email,phoneNumber FROM mytable";
  $result= mysqli_query($con, $query);
	# setting the fetch mode


	while($row = mysqli_fetch_array($result))

		echo "<tr><td>" . $row['personName'] . "</td><td>" . $row['suggestions'] . "</td><td>" . $row['email'] . "</td><td>"
		. $row['phoneNumber'] . "</td></tr>";





mysqli_close($con)
?>


</tbody>
</table>
<br><br>
</body>
</html>





  <!--LOGOUT -->

<?php
//session_start();
//session_unset();
//session_destroy();

?><html>
<body>
<br>

<br>



<script>
$(document).ready(function() {
	$("div#extraControls").removeClass("hidden");
});
function myFunction() {
	var x = document.getElementById("extraControls");
	if (x.style.display === "none") {
			x.style.display = "block";
	} else {
			x.style.display = "none";
	}
}



</script>

<br>
<br>
<br>




<button style="font-size:20px"><a href="delete.php">Delete Suggestions <i class="fa fa-trash"></i></button></a>

</style>
<br>
<br>
<br>
<br>
<br>
<button onclick="Function1()">Print this page</button>

<script>
function Function1() {
    window.print();
}
</script>
<br>
<br>
<br>


<p align="center"><a href="homepage.php"><button style="font-size:24px">Home <i class="fa fa-institution"></i></button></p></a>





</body>
</html>
