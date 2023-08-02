<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}



$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);
$name=$_SESSION['username'];
$sql="SELECT u.Id, u.username,u.phone,u.email,u.image,a.address,a.nationality,a.dob
FROM userinfo u  INNER JOIN admission1 a  ON u.Id = a.Id WHERE username='$name'";

$result=mysqli_query($data,$sql);

$rows=mysqli_fetch_assoc($result);


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .header{
            background-color: #000080;
            color: black;
            line-height: 70px;
            padding-left: 30px;
            font-weight: bold;
            font-size: 20px;
        }
        a,a:hover{
            text-decoration: none;
        }
        .logout{
            float: right;
            padding-right: 10px;
        }
        ul{
            background-color: #424a5b;
            width: 16%;
            height: 100%;
            position: fixed;
            padding-top: 5%;
            
        }
        ul li{
            list-style: none;
            padding-bottom: 30px;
            font-size: 15px;
        }
        ul li a{
            color: white;
            font-weight: bold;
        }
        ul li a:hover{
            color: skyblue;
            text-decoration: none;
        }
        .content{
            padding-left: 20%;
            background-color: #90EE90;
            padding-bottom: 100px;
            height: 480px;
        }
        .dashboard_deg{
            font-weight: bold;
            background-color: yellow;
            position: relative;
            margin-right: 10px!important;
            padding-left: 5px!important;
            
        }
        .img_deg{
          width: 100%;
          height: 280px;
          padding-right: 60px;
            
        }
        footer{
            background-color: black;
            height: 45px;
            width: 100%;
            padding-right: 20px;
     
            }
        .txt_deg{
            width: 250px;
            height: 110px;

        }
        .row{
            justify-content: space-evenly!important;
        }
        .font_deg{
            color: black;
            font-weight: bold;
            
        }
        
        label{
            color: yellow;
        }
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
            text-align: left;
        }
        
     


    </style>
</head>
<body>
    <header class="header">
        <a href="studentinfo.php">Student Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
            <label><img style="height: 70px; width: 70px;" src="<?php echo $rows['image']; ?>" alt="profile_pic"></label>
            </li>
            <li>
                <label>Name:<h6><?php echo $rows['username']; ?></h6></label>
                
            </li>
            <li>
            <label>Contact:<h6><?php echo $rows['phone']; ?></h6></label>
            </li>
            <li>
            <?php  echo "<a class='btn btn-danger' href='student_password_update.php?student_id=
            {$rows['Id']}'>Change password</a>"; ?>
            </li>
           
           
        </ul>
    </aside>
<div class="content">

<div class="div_deg"><br><br>
  <div>
    <center>
    <table>
          
        <tr>
            <th>Attribute</th>
            <td>Details</td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $rows['address']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $rows['email']; ?></td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td><?php echo $rows['nationality']; ?></td>
        </tr>
        <tr>
            <th>Date of birth</th>
            <td><?php echo $rows['dob']; ?></td>
        </tr>
       
    </table>
    </center>
  </div>

    

 </div>
 </div>
 <footer>
    <center><h5 style="color: white;">Welcome to W-school student  Dashboard</h5></center>

 </footer>



    
    
    
</body>
</html>