<?php
require_once('../../../DB.php');
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
mysqli_query($con,"DELETE FROM images WHERE id='" . $_GET["id"] . "'");
echo "Data delete sucessfully";
header('location:retrive.php');

?>
