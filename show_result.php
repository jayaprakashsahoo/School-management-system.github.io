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

$con=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM stdissues";

$result=mysqli_query($con,$sql);


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
            background-color: rgb(224,176,255);
            padding-bottom: 100px;
            height: 485px;
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
          height: 195px;
          padding-right: 60px;
            
        }
        footer{
            background-color: black;
            height: 40px;
            width: 100%;
            padding-right: 20px;
            margin-top: 20px;
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
          table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        }
        
        

        

        


    </style>
</head>
<body>
    <header class="header">
        <a href="">Admin Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="admission_display.php">Admission open</a>
            </li>
            <li>
                <a href="add_student.php">Add student</a>
            </li>
            <li>
                <a href="view_student.php">View student</a>
            </li>
            <li>
                <a href="add_teacher.php">Add teacher</a>
            </li>
            <li>
                <a href="view_teacher.php">View teacher</a>
            </li>
            <li>
                <a href="add_course.php">Add course</a>
            </li>
            <li>
                <a href="course_form.php">View course</a>
            </li>
            <li>
                <a href="show_result.php">Student issues</a>
            </li>
           
        </ul>
    </aside>
<div class="content">

<center>

<h2>Student issues details</h2>

<div>
    <table>
        <tr>
            <th style="padding: 20px; font-size:15px">Email</th>
            <th style="padding: 20px; font-size:15px">Class</th>
            <th style="padding: 20px; font-size:15px">Exam type</th>
            <th style="padding: 20px; font-size:15px">issues</th>
            <th style="padding: 20px; font-size:15px">Subjects</th>
        </tr>
        <?php

        while($rows=$result->fetch_assoc())
        {

        

        ?>
        <tr>
            <td style="padding: 20px;"><?php echo "{$rows['email']}";  ?></td>
            <td style="padding: 20px;"><?php echo "{$rows['class']}";  ?></td>
            <td style="padding: 20px;"><?php echo "{$rows['exam']}";  ?></td>
            <td style="padding: 20px;"><?php echo "{$rows['issues']}";  ?></td>
            <td style="padding: 20px;"><?php echo "{$rows['subject']}";  ?></td>
           
        </tr>

        <?php
        }

        ?>
    </table>
</div>





</center>

 </div>

    
    
    
</body>
</html>