
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
  <title>Videos page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="stylesheets/videos.css">
  <style>


  </style>
</head>



<body style="background-image:url('images/s.jpg')">

  <nav class="navbar navbar-light" style="background-color:#000000;">
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
    <h1>Association Videos At Olemiss</h1><br>

    <h2>Big Event in Oman</h2>
    <video width="400" controls>
  <source src="videos/olemiss.mp4" type="video/mp4">
  <source src="videos/olemiss.ogg" type="video/ogg">

</video>

<h2> Oman National Day At Olemiss</h2>
<video width="400" controls>
<source src="videos/Omani National Day at Olemiss.mp4" type="video/mp4">
<source src="videos/Omani National Day at Olemiss.ogg" type="video/ogg">
Your browser does not support HTML5 video.
</video>

<h2> Olemiss Omanis Students Trips</h2>
<video width="400" controls>
<source src="videos/Olemiss Omani students trips.mp4" type="video/mp4">
<source src="videos/Olemiss Omani students trips.ogg" type="video/ogg">
Your browser does not support HTML5 video.
</video>

<h2> Omanis Soccer Team</h2>
<video width="400" controls>
<source src="videos/Omanis Soccer team won 6-2.mp4" type="video/mp4">
<source src="videos/.ogg" type="video/Omanis Soccer team won 6-2.ogg">
Your browser does not support HTML5 video.
</video>

<h2> What is Oman At Olemiss</h2>
<video width="400" controls>
<source src="videos/what is oman olemiss.mp4" type="video/mp4">
<source src="videos/.ogg" type="video/what is oman olemiss.ogg">
Your browser does not support HTML5 video.
</video>



  </body>

  </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
