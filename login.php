<?php
session_start();
  $_SESSION['username'];


?>

<?php

   require_once('../../../DB.php');


   $mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);


   	if($mysqli->connect_errno) {
   			die("Could not connect to server ".DBHOST."<br />");
   	}



    //if(isset($_POST) & !empty($_POST)){
    if(isset($_POST['bttLogin'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $EncryptPassword = md5($pass);
    $sql = "INSERT INTO usertable(username,password) VALUES ('$user','  $EncryptPassword')";
    $message="";


    $query= "SELECT username,password FROM usertable WHERE username='$user' AND password='$EncryptPassword'";
    $result= mysqli_query($mysqli,$query);
    $count=mysqli_fetch_array($result);
// If result matched $username and $password, table row must be 1 row

if(isset($count)){
  $_SESSION['username'] =$user;
header("location: homepage.php");


}else{

  $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:0; login.php");
}
}
?>

<!DOCTYPE html>
<html>
  <head>


    <link rel="stylesheet" href="stylesheets/login.css">
    <meta charset="utf-8">
    <title> My website</title>
  </head>
  <body style="background-image:url('images/s.jpg')">

    <h2>Login page</h2>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">


    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" required>
	<br><br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>
	<br><br>
    <button type="submit3"  id ="bttLogin" name = "bttLogin" value="Login">Login</button></input>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  <p><b><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/signup.html" target="_blank"> or create an account</a></b></p>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" id="forgot" name ="forgot">Forgot <a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/password.html">password?</a></span>
  </div>
</form>



<script>
   document.getElementById("submit").addEventListener("click", myFunction);

   function myFunction() {
    alert("Try again!, your password or username is invalid");
  }
</script>



  </body>
</html>



</body>
</html>
