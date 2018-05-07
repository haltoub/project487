<!DOCTYPE html>
<html>
<head>
<title>Insert Image in MySql using PHP</title>
</head>





<?php

require_once('../../../DB.php');

$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$image = $_FILES['image']['tmp_name'];
$img = file_get_contents($image);
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
$sql = "insert into images (image) values(?)";
$stmt = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($stmt, "s",$img);
mysqli_stmt_execute($stmt);
$check = mysqli_stmt_affected_rows($stmt);
if($check==1){
$msg = 'Image Successfullly UPloaded';
header('location: retrive.php');
}else{
$msg = 'Error uploading image';
}
mysqli_close($con);
}
?>

<?php
echo $msg;
?>


</body>
</html>
