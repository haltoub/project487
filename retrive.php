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





<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
<h1> Omanis Students Associacion Gallery At olemiss</h1>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="main.css">
<style>


h1{
  text-align: center;
  font-size: 40px;
  font-style: italic;
  font-stretch: semi-condensed;
}




</style>
<body style="background-image:url('images/s.jpg')">
  <form name="form1" action="retrive.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>

<?php
require_once('../../../DB.php');
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);

if(isset($_POST["submit2"]))
{ $res=mysqli_query($con,"select * from images");
echo "<table>";
echo "<tr>";
while($row=mysqli_fetch_array($res))
{
echo "<td>";
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
echo "<br>";
 ?><a href="process.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php echo "</td>";


}
echo "</tr>";
echo "</table>";

}
?>
<br>
<br>
<br>
<br>
<p align="center"><a href="homepage.php"><button style="font-size:24px">Home <i class="fa fa-institution"></i></button></p></a>
</body>
</html>
