<?php
   
if(isset($_POST["loginbtn"])) 
{
 include("dbconnect.php");
 $eid =  $_POST["email"];
 $pwd = $_POST["Password"];

 if($eid == "admin@123" && $pwd == "admin")
 {
   header("location:admin.php");
 }

 
 $pwd = md5($_POST["Password"]);
 

 $qry = "SELECT * FROM `register` WHERE email = '$eid' AND Password = '$pwd'";

$result =  mysqli_query($connect, $qry);
$row = mysqli_num_rows($result);
if($row>0)
{
   header("location:user.php");
}
else
{
   echo " Invalid Email or password";
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
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
 	<div class="row">
 		<div class="col-md-5 mx-auto">
 			<div class="card-header bg-primary text-light">
 			      <b> Login form </b>
 				</div>
 				<div class="body">
 					<form method="post">
 						
 						    <div class="form-group">
 							<label> Email </label>
 							<input type="text" name="email" class="form-control">
 						</div>
 						<div class="form-group">
 							<label> Password </label>
 							<input type="Password" name="Password" class="form-control" >
 						</div>
 						
 						<div class="form-group">
                            <button class="btn btn-primary" type="submit" name="loginbtn"> Login </button>
 						</div>

 						 <p> Don't have an Account <a href="register.php"> Sign up </a>
                         </p>
 					</form>
 				</div>
 			</div>


                     </html>