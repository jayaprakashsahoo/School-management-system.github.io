<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
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
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
            color: black;
        }
        .div_deg{
            background-color: lightgreen;
            width: 350px!important;
            padding-top: 70px;
            padding-bottom: 70px;
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
<h3>Fill the form to show the course</h3>
 <div class="div_deg">
    
    <form action="view_course.php" method="POST">
        <div>
            <label>class</label>
            <select name="class" style="padding-right: 100px; padding-top: 5px; padding-bottom: 5px;">select class
                <option value="class">class</option>
                <option value="c1">c1</option>
                <option value="c2">c2</option>
                <option value="c3">c3</option>
                <option value="c4">c4</option>
                <option value="c5">c5</option>
                <option value="c6">c6</option>
                <option value="c7">c7</option>
                <option value="c8">c8</option>
                <option value="c9">c9</option>
                <option value="c10">c10</option>
                <option value="c11">c11</option>
                <option value="c12">c12</option>

            </select>
        </div><br>
        <div>
            <label>year session</label>
            <select name="year" style="padding-right: 80px; padding-top: 5px; padding-bottom: 5px;">select session
                <option value="year">year</option>
                <option value="2023-24">2023-24</option>
                <option value="2024-25">2024-25</option>

            </select>
        </div><br>
        <div>
            <input type="submit" class="btn btn-primary" name="submit" value="Get course">
        </div>
    </form>
 </div>
 </center>
</div>

    
    
    
</body>
</html>