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
?>




<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css">
<link rel="stylesheet" href="stylesheets/homepage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body style="background-image:url('images/download.jpg')">
  <nav class="navbar navbar-light" style="background-color: #000000;">
    <div class="container-fluid">
      <div class="navbar-header">

      <ul class="nav navbar-nav">
        <li class="active"><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/homepage.php">Home</a></li>
        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/contact.php">Contact</a></li>
        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/about.html">About</a></li>
          </ul>
      </div>
    </button>


    </div>
    </form>
    </div>


    </nav>

<h1> Omanis Students Asssociation map</h1>





    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d6586.6001133994005!2d-89.5336085!3d34.3682879!3m2!1i1024!2i768!4f13.1!2m1!1sunion+oxford+campus+ole+miss!5e0!3m2!1sen!2sus!4v1524038602984" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>








<br>
<br>
<br>
<br>
<br>
<p align="center"><a href="homepage.php"><button style="font-size:24px">Home <i class="fa fa-institution"></i></button></p></a>
</body>
</html>


<style>




h1{
  text-align: left;
  font-style:oblique;
  font-weight: bolder;
  font-family: cursive;
  font-weight: 600;
  text-decoration:underline;
}
body{
  background-size: cover;
  background-repeat: no-repeat;
}
