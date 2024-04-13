<?php

if(isset($_POST["registerbtn"]))
{

include("dbconnect.php");

$fn = $_POST["fullname"];
$eid = $_POST["email"];
$pwd = md5($_POST["Password"]);
$mob = $_POST["Mobile"];

$qry = "INSERT INTO `register`(`id`, `fullname`, `email`, `password`, `mobile`) VALUES (NULL,'$fn','$eid','$pwd','$mob')";
 
$result =  mysqli_query($connect, $qry);

if($result)
{
   echo "Registration success";
}
else
{
   echo "failed to Register";
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

         <link href="css/style.css" rel="stylesheet">

        <style>
           .row{
            height: 100vh;
            align-items: center;
           }

        </style> 

</head>
<body style= "background-color: #4158D0; background-image: linear-gradient(to right, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">
 <div class="container" id="reg">
 	<div class="row">
 		<div class="col-md-5 mx-auto">
 			<div class="card-header bg-success text-light">
 			      <b align= "center"> Registration form </b>
 				</div>
 				<div class="body">
 					<form method="post">
 						<div class="form-group">
 							<label> Fullname </label> 
 							<input type="text" name="fullname" class="form-control"  >
 						</div>
 						    <div class="form-group">
 							<label> Email </label>
 							<input type="email" name="email" class="form-control">
 						</div>
 						<div class="form-group">
 							<label> Password </label>
 							<input type="Password" name="Password" class="form-control" >
 						</div>
 						<div class="form-group">
 							<label> Mobile No </label>
 							<input type="tel" name="Mobile" class="form-control" >
 						</div>
 						<div class="form-group">
                            <button class="btn btn-success" type="submit" name="registerbtn"> Register </button>
 						</div>
 						 <p>Already have an Account? <a href="login.php">  Sign In </a>
                         </p>
 					</form>
 				</div>
 			</div>

                </div>
        </div>
</div>                        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                     </body>
                     </html>
