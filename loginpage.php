<?php
session_start();
require_once('../../../DB.php');
$message="";
if(count($_POST)>0) {
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
$user=$_POST['username'];
$pass=$_POST['password'];
//$EncryptPassword = md5($pass);
$sql = "INSERT INTO usertable(username,password) VALUES ('$user','$pass')";
//$result = mysqli_query($con,"SELECT username,password FROM usertable WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$query= "SELECT username,password FROM usertable WHERE username='$user' AND password='$pass'";
$result= mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($result);


if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["username"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:homepage.php");
}
