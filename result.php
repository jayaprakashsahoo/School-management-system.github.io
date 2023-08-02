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
$db="examresult";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit']))
{ 
$class=$_POST['class'];
$email=$_POST['email'];
$examtype=$_POST['exam'];

$sql="SELECT * FROM result";
$result=mysqli_query($data,$sql);

$rows=mysqli_fetch_assoc($result);




}
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
            color: yellow;
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
            height: 440px;
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
        marquee{
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
                <a href="student_form.php">view course</a>
            </li>
            <li>
                <a href="student_result.php">view result</a>
            </li>
            <li>
                <a href="#">Feedback</a>
            </li>
           
        </ul>
    </aside>
<div class="content">
    <center><br><br>
    <div>
        <table>
            <tr>
                <th>Class</th>
                <td><?php echo $rows['class']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $rows['email']; ?></td>
            </tr>
            <tr>
                <th>Marks</th>
                <td><?php echo $rows['mark']; ?></td>
            </tr>
            <tr>
                <th>Raise issue</th>
                <td><a class="btn btn-primary" href="issues.php">click here</a></td>
            </tr>
        </table>
    </div>
    </center>

    

 </div>

 <footer>
    <center><h5 style="color: white;">Welcome to W-school student  Dashboard</h5></center>

 </footer>

    
    
    
</body>
</html>