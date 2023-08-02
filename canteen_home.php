
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
    <style>
        img{
            
            width: 45px;
            height: 45px;
        }
        .logout{
            float: right;
            padding-right: 10px;
        }
        .body_deg{
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
         }
         .deg{
          color: black;
          font-weight: bold;
         }
         .marq_deg{
            background-color: hsl(0, 100%, 70%);
            width: 100%;
            padding-top: 70px;
            padding-bottom: 70px;

         }
         marquee{
          color: black;
          font-size: 20px;
          font-weight: bold;
         }
         .marq_style{
          float: right;
         }
         .container{
            padding-top: 70px;
        }
        .teacher{
            width: 90%;
            height: 200px;
        }
        .foot_deg{
          background-color: black;
          padding-top: 10px;
          padding-bottom: 10px;
          width: 100%
          
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="assets/img/canteen2.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active deg" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle deg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="school_canteen_login.php">Day meal</a></li>
            <li><a class="dropdown-item" href="school_canteen_login.php">Night meal</a></li>
            <li><a class="dropdown-item" href="school_canteen_login.php">Today meal</a></li>
            <li><a class="dropdown-item" href="school_canteen_login.php">tomorrow meal</a></li>
            <li><a class="dropdown-item" href="school_canteen_login.php">cancel meal</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-warning" aria-current="page" href="canteen_register.php">Register here</a>
        </li>
      </ul>
      <div class="logout">
            <a href="school_canteen_login.php" class="btn btn-success">login</a>
        </div>
    </div>
  </div>
</nav>
<div>
  <center>
  <img src="assets/img/canteen4.jpg" alt="" style="width: 100%; height: 300px;">
  </center>

</div>
<center>
        <h4 class="mt-5">Our Canteen</h4>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img class="teacher" src="assets/img/food1.jpg" alt="">
            </div>
            <div class="col-md-4">
                <img class="teacher" src="assets/img/food2.jpg" alt="">
            </div>
            <div class="col-md-4">
                <img class="teacher" src="assets/img/food3.jpg" alt="">
                
            </div>
        </div>
    </div><br>

    
















<footer class="foot_deg">
  <h2 style="text-align: center; color: white;">Thank you for visit our canteen.</h2>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>