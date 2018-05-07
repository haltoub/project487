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
<!--For English-->

<html lang="en">


<!--For Arabic-->

<html lang="ar">


<head>
  <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAADy8vIA+/v7APn69gD09PQAaF1BAEY+GQD9/f0A///5AOLg2ACglXoAPz+rAE5BJwD++vUA////AP/++gBCPyMA/PzwAPv//gBWRCcA+PfzAPr6+gAyOKkA+v/2AOrq6gD//v8A/Pz8APr79wCUjncA0c/HAP7+/gD///wA/P35AOzq4gBkWEAAYlc7ANTRyQBUTToAal1DAIiAaQD7/PMA+PTvAPn5+QD9/fEARFHFANHKuwBdUjYAr6+fAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dFisKFR0dHR0dHR0dKQANFwMCGA0NBgEZHR0dHR0BHRkIECogHwEGHR0dHR0dHR0GHB4TLAwdHR0dHR0dHR0dHScjKBEdHR0dHR0dHR0dHR0uCRskHR0dHR0dHR0dHR0dByUmDh0dHR0dHR0dHR0dHQ4iLQ4dHR0dHR0dHR0dHR0PBCELHR0dHR0dHR0dHR0dBRQaEh0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA="
    <rel="icon" type="image/x-icon" />



  <title>Omanis Students Association</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-image:url('images/s.jpg')">




  <nav class="navbar navbar-light" style="background-color: #000000;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/homepage.php">Omanis Students Association</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/homepage.php">Home</a></li>
        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/contact.php">Contact</a></li>
        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/about.html">About</a></li>

        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/map.php">Location</a></li>

        <li><a href="logout.php"> <name="logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li></input>

        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>




      </ul>
      <form class="navbar-form navbar-right">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>

          </button>


          </div>

        </div>

      </form>
    </div>


  </nav>




  <h1>Welcome to Omanis Students Association at Olemiss </h1>

      <header>



      </header>

      <ul>
        <a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/gallery.php" button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Gallery</a>
        <a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/videos.php" button type="button" class="btn btn-success" >Videos</a>
        <a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/profile.php" button type="button" class="btn btn-success" >Members profile</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Members Suggestions</button>
        <a href="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/invoice.php" button type="button" class="btn btn-success" >Invoice</a>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="jumbotron">
    <h1>Omanis Students Association</h1>
    <img src="https://turing.cs.olemiss.edu/~haltoub/myProject/seniorProject/images/logo.jpg" class="img-circle">
    <p> Omani Students Association was created in 2013 at olemiss.It consistes of group of omani students at Olemiss.</br> The main purpose of the Association is to introduce for students our traditions and national big events to give them a good knowledge about Oman</p>
  </div>
</div>




  <div class="container">

    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

             <form action="suggestions.php" method="post">

               <input type="text" id="personName" name="personName" placeholder="Write your name  here.." class="form-control">
               <input type="text" id="email" name="email" placeholder="Write your email address  here.." class="form-control">
               <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Write your phone number here.." class="form-control">
               <input type="text" id="suggestions" name="suggestions" placeholder="Write your suggestions here.." class="form-control">
                  <br/>
                  <div class="modal-footer">

    <input type="submit" value="Submit" button type="button" id="submit" class="btn btn-success">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
              </form>




          </div>
        </div>

      </div>
    </div>

  </div>
  <?php
  // define variables and set to empty values
  $CommentErr = $PersonErr = $EmailErr = $NumberErr = "";
  $Comment = $Person = $Email = $Number = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["personName"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["personName"]);
    }

    if (empty($_POST["suggestions"])) {
      $emailErr = "suggestions are required";
    } else {
      $email = test_input($_POST["suggestions"]);
    }
    if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

    if (empty($_POST["email"])) {
      $website = "email is required";
    } else {
      $website = test_input($_POST["email"]);
    }

    if (empty($_POST["phoneNumber"])) {
      $comment = "phone mumber is required";
    } else {
      $comment = test_input($_POST["phoneNumber"]);
    }


  }
  ?>

  <script>
     document.getElementById("submit").addEventListener("click", myFunction);

     function myFunction() {
      alert("Thank you for your suggestion!");
    }
  </script>



</body>

</html>
