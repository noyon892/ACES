<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Add Member</title>
    <?php include 'head.php';
    session_start();
    	if( $_SESSION['ROLE'] == "admin")
    	{

    	}
    	else{
    		 header("Location: login.php");
    	}

    ?>
  </head>
  <body>
    <?php include 'adminHeader.php';?>
	<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
	<div class="container font" style="margin-top: 1%;">
	  <div class="row">
			<div class="col-md-5 cal-md-offset-2">
			<h1 class="text-center text-success font"><strong>Register page</strong></h1>
			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			    	<div class="panel-success">
			    		<p class="text-success" id="my-alert"></p>
			    	</div>
					<form method="post" action="">
					  <div class="form-group font">
					    <label for="FullName" class="font">Full Name</label>
					    <input type="text" class="form-control font" id="name" name="name">
					  </div>
					  
					  <div class="form-group font">
					    <label for="UserName" class="font">Username:</label>
					    <input type="text" class="form-control font" id="username" name="username">
					    <p id='useralart' class="hidden">Username not Avaliable</p>
					  </div>
					  
					  <div class="form-group">
					    <label for="email" class="font">Email address:</label>
					    <input type="email" class="form-control font" id="email" name="email">
					    <p id='emailalart' class="hidden">Email address already registred.Try with new Email</p>
					  </div>
					  
					  <div class="form-group">
					    <label for="phone" class="font">Phone no:</label>
					    <input type="tel" class="form-control font" id="phone" name="phone">
					  </div>

					  <div class="form-group">
					    <label for="pwd" class="font">Password:</label>
					    <input type="password" class="form-control font" id="pwd" name="password">
					  </div>

					  <div class="form-group">
					    <label for="pwd" class="font">Confirm Password:</label>
					    <input type="password" class="form-control font" id="pwd" name="cpassword">
					  </div>

					  <div class="form-group">
					    <label for="address" class="font">Address:</label>
					    <input type="text-area" class="form-control font" id="address" name="address">
					  </div>
					  <!-- <input type="submit" class="btn btn-primary btn-lg font" value="Submit"> -->
					  <button type="submit" class="btn btn-primary btn-lg font submit" id="submit">Submit</button>
					</form>
					<br/>
					
			    </div>
			    </div>
			   </div>
	  		</div>
		</div>
</body>
</html>



<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {

require("db.php");

$name=$_REQUEST["name"];
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$password=$_REQUEST["password"];
$address=$_REQUEST["address"];

$sql = "INSERT INTO user (name, username,email,password,phone,address)
VALUES (null, '$name', '$username','$email','$password','$phone','$address')";

if (mysqli_query($conn, $sql)) {
   echo" <script>
    	document.getElementById('my-alert').innerHTML='successfully Member Added';
    </script>";
} else {
    echo "Error When Adding Member.";
}

mysqli_close($conn);
}

?>