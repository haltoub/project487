<?php
require_once('../../../DB.php');




// check them against the user records in the databas
$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


 if($mysqli->connect_errno) {
     die("Could not connect to server ".DBHOST."<br />");
 }

 if(isset($_POST) & !empty($_POST)){
   $username =$_POST['username'];
   $Email =$_POST['email'];
   $sql="SELECT username,email,password FROM usertable WHERE username = '$username' AND email = '$Email'";
   $res = mysqli_query($mysqli, $sql);
   $count = mysqli_num_rows($res);
   if($count ==1){

   }else{
     echo "User name does not exist in database";

   }


 }

$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "your recoverd password";

$message= "please use this password to login ". $password;
$headers = "From : haltoub@go.olemiss.edu";
if(mail($to, $subject, $message, $headers)){
  echo "Your password has been sent to your email id";
}else{
  echo "Failed to recover your password, try again";
}


?>
