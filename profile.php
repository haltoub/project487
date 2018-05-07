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
<html lang="en">

<head>
  <title>Profile page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="stylesheets/profile.css">
  <style>


  </style>
</head>



<body style="background-image:url('images/s.jpg')">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/gallery.php">Gallery</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/homepage.php">Home</a></li>
          <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/about.html">About</a></li>
          <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

        </ul>
      </div>
    </div>
  </nav>

  </div>
  </div>

  <div class="container-fluid bg-3 text-center">
    <h1>Members Profiles Associstion at Olemiss</h1><br>


    <div class="card">
  <img src="images/hafedh.jpg" alt="John" style="width:95%">
  <h2>Hafedh Al-Toubi</h2>
  <p>Mississippi University</p>
  <p>Computer Science</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="images/Alkhawaldi.jpg" alt="John" style="width:95%">
<h2>Mohammed Al-khawaldi</h2>
<p>Mississippi University</p>
<p>Geological Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>











<div class="card">
<img src=" https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Ali.jpg" alt="John" style="width:95%">
<h2>Ali Al-nabhani</h2>
<p>Mississippi University</p>
<p>Mechanical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Yahya.jpg" alt="John" style="width:95%">
<h2>Yahya Al-zaabi</h2>
<p>Mississippi University</p>
<p>Mechanical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Asim.JPG" alt="John" style="width:95%">
<h2>Asim Al-amri</h2>
<p>Mississippi University</p>
<p>Mechanical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/peter2b.JPG" alt="John" style="width:95%">
<h2>Abdalaziz Al-toubi</h2>
<p>Mississippi University</p>
<p>Computer Science</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Dawood.JPG" alt="John" style="width:95%">
<h2>Dawood Al-nassri</h2>
<p>Mississippi University</p>
<p>Information System Management</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/abood.jpg" alt="John" style="width:95%">
<h2>Abdulah Al-siyabi</h2>
<p>Mississippi University</p>
<p>Mechanical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/photo 1.jpg" alt="John" style="width:95%">
<h2>Anas Al-abri</h2>
<p>Mississippi University</p>
<p>Chemical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/saqer.jpg" alt="John" style="width:95%">
<h2>Saqer Awladthani</h2>
<p>Mississippi University</p>
<p>Computer Science</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Mazin.jpg" alt="John" style="width:95%">
<h2>Mazin Al-siyabi</h2>
<p>Mississippi University</p>
<p>Civil Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>


<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Alharthi.jpg" alt="John" style="width:95%">
<h2>Mohammed Al-harthi</h2>
<p>Mississippi University</p>
<p>Geoligical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>


<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/WhatsApp%20Image%202018-02-11%20at%201.29.47%20AM.jpeg" alt="John" style="width:95%">
<h2>Asad Al-Zakwani</h2>
<p>Mississippi University</p>
<p>Mechanical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/Ahmed.jpeg" alt="John" style="width:95%">
<h2>Ahmed Al-Saadi</h2>
<p>Mississippi University</p>
<p>Geoligical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>
<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/hood.jpg" alt="John" style="width:95%">
<h2>Hood Al-hamdani</h2>
<p>Mississippi University</p>
<p>Geoligical Engineering</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

<div class="card">
<img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/khamis.jpg" alt="John" style="width:95%">
<h2>Khamis Al-bulushi</h2>
<p>Mississippi University</p>
<p>Computer Science</p>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>

<p><button><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/Memberscontact.php">Contact</button></a></p>
</div>

</body>
</html>
