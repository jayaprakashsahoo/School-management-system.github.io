<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
        alert('$message');
        
    </script>";
}






?>









<!DOCTYPE html>
<html>
<head>
	<title>LogIn Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
   label{
    color: black;
    font-weight: bold;
   }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand btn btn-warning" href="index.php">W-school</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
</nav>

<div class="container card bg-dark text-white" style="border-radius: 1rem;">
	<div class="row card-body p-3">
		<div  style="width: 40%; margin: 25px auto; background-color: lightgreen;">
		<h3 style="text-align: center; color: maroon;">Login Page</h3>
         <h4>
            <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginmessage'];

            ?>
        </h4>
		<form  method="POST" action="login_connection.php">
			<div class="form-group">
				<label>UserName:</label><input type="text" name="username" class="form-control" autofocus placeholder="username">
			</div><br>
			<div class="form-group">
				<label>Password:</label><input type="Password" name="password" class="form-control" autofocus placeholder="Password">
			</div><br>
      <div class="form-group">
				<label>Captcha:</label>
        <input type="text" name="captcha" required>
        <img src="generate_captcha.php">
			</div><br>
      <div class="form-group">
				<center><input class="btn btn-lg btn-danger" type="submit" name="submit" value="Login"></center>
			</div>
</form>
</div>
</div>
</div>

      
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html