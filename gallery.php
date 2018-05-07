

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
  <title>Page3</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheets/gallery.css">
  <style>


  </style>
</head>
<h1>Association Gallery Slideshow</h1>
<body style="background-image:url('images/s.jpg')">
<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="images/IMG_9315.JPG" style="width:100%">
  <img class="mySlides" src="images/IMG_9316.JPG" style="width:100%">
    <img class="mySlides" src="images/IMG_9319.JPG" style="width:100%">
    <img class="mySlides" src="images/IMG_9321.JPG" style="width:100%">
      <img class="mySlides" src="images/IMG_9323.JPG" style="width:100%">
        <img class="mySlides" src="images/IMG_9328.JPG" style="width:100%">
        <img class="mySlides" src="images/IMG_9329 (1).JPG" style="width:100%">
        <img class="mySlides" src="images/IMG_9331.JPG" style="width:100%">
        <img class="mySlides" src="images/IMG_9332.JPG" style="width:100%">
        <img class="mySlides" src="images/IMG_9333.JPG" style="width:100%">
          <img class="mySlides" src="images/IMG_9334.JPG" style="width:100%">
          <img class="mySlides" src="images/IMG_9337.JPG" style="width:100%">
          <img class="mySlides" src="images/IMG_9338.JPG" style="width:100%">
            <img class="mySlides" src="images/IMG_9340.JPG" style="width:100%">
              <img class="mySlides" src="images/IMG_9341.JPG" style="width:100%">
              <img class="mySlides" src="images/IMG_9343.JPG" style="width:100%">
                <img class="mySlides" src="images/IMG_9345.JPG" style="width:100%">
                <img class="mySlides" src="images/IMG_9346.JPG" style="width:100%">
                  <img class="mySlides" src="images/IMG_9347.JPG" style="width:100%">

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);


}
</script>



</div>

<br>
<br>
<br>
<form action="insert.php" method="post" enctype="multipart/form-data">
<input type="file" name="image" />
<br>
<button style="font-size:20px" >Upload</button>

<br>
<br>


  </ul>
</div>
</form>
</body>
</html>
