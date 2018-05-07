
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




<!DOCTYPE html>
<html>


<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
      background-color: #45a049;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body style="background-image:url('images/s.jpg')">


<h2><p align="center"><font size="7" color="black">Add Suggestions Form</h2></p></font>

<div>
	<form action="suggestions.php" method="post">
    <label for="suggestions">suggestions</label>
    <input type="text" id="suggestions" name="suggestions" placeholder="Your suggestions..">

    <label for="personName">person Name</label>
    <input type="text" id="personName" name="personName" placeholder="Your name..">

     <label for="email">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

	 <label for="phoneNumber">phone Number</label>
    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phone Number..">



  <input type="submit" name="addnewemployee" value="Submit">


  </form>
</div>

<br><br>
<a href="data.php">Main table</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
