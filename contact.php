<?php

session_start();
if($_SESSION['username']==true)
{
  //echo "welcome"." ".$_SESSION['username'];
  //session_destroy();
}
else{
  header('location:login.php');
}
?>

<?php
if(isset($_POST['email'])) {

    $email_to = "hafes7788@gmail.com";
    $subject = "Email contact from  Omanis Students Association website";

    $name = $_POST['name'];
    $email= $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];


$headers = 'From: '.$message."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $subject, $message, $headers);
//print "Thanks "  .$name. "<br>";
//print "From $country";
header("refresh:2; contact.php");

}
?>



<!DOCTYPE html>



<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-image:url('images/s.jpg')">
<link rel="stylesheet" href="stylesheets/contact.css">
<h1>Contact Us</h1>
    <form action="contact.php" method="post">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="country">Country</label>
    <input type="text" id="country" name="country" placeholder="Your country..">
    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Write your message here.." style="height:150px"></textarea>

    <input type="submit" value="Submit" id="submited">
</div>
<div class="container">
  <ul class="pager">
    <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/homepage.php">Homepage</a></li>
  </ul>
</div>

<script>
document.getElementById("submited").addEventListener("click", myFunction);

function myFunction() {
    alert ("Thank you for contacting us. We will be in touch with you very soon.");
}
</script>

</body>
</html>
