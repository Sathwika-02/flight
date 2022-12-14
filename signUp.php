
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Just Fly | Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="JustFly"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="home.html">HOME</a></li>
        <li><a href="#services">FLIGHTS</a></li>
        <li><a href="viewReservations.php">RESERVATIONS</a></li>
        <li><a href="login.html">LOG IN</a></li>
        <li><a href="signUp.html">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--Signup-->
<div class="jumbotron text-center">
<h1>Sign Up </h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
            <form action="signup.php" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <label for = "firstname">First Name: </label><input class="form-control" name="firstname" id = "firstname" placeholder="First Name" type="text" required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                   <label for = "lasttname">Last Name: </label><input class="form-control" name="lastname" id = "lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
             <label for = "email">Email: </label><input class="form-control" name="email" id = "email" placeholder="Your Email" type="email" />
             <label for = "password">Password: </label><input class="form-control" name="password" id= "password" placeholder="New Password" type="password" required/>
			
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign up</button>
            </form>
        </div>
 </div>   
</div>

<?php
$insert=false;
//mysql connection 
if(isset($_POST['name'])){
    // Set connection variables 
$server="localhost";
$username="";
$password="";
//create a connection 
$con=mysqli_connect($server,$username,$password);

// check for connection success 
if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}
// Collect post varaibles 
$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `signin`.`signin` ( `firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password');";
//echo $sql;
 
if($con->query($sql)==true){
   // echo "Successfully inserted";

   //Flag for successfull insertion 
   $insert=true;
}
else{
    echo "ERROR :$sql <br> $con->error";
}
$con->close();
}

?>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; Just Fly. All Rights Reserved </p>
</footer>

</body>
</html>

