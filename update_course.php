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

$Id=$_GET['course_id'];

$sql="SELECT * FROM course WHERE Id='$Id'";
$result=mysqli_query($data,$sql);

$rows=$result->fetch_assoc();



if(isset($_POST['update']))
{
    $coursename=$_POST['name'];
    $t_name=$_POST['tname'];

    


    $query="UPDATE course SET subject='$coursename',teacher='$t_name'
    WHERE Id='$Id'";

    $result2=mysqli_query($data,$query);



    if($result2)
    {
        
        header('location:course_form.php');

    }
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
            background-color: rgb(224,176,255);
            padding-bottom: 100px;
            height: 530px;
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
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
        }
        .div_deg{
            background-color: skyblue;
            padding-top: 70px;
            padding-bottom: 70px;
            width: 500px;
        }
        


    </style>
</head>
<body>
    <header class="header">
        <a href="admininfo.php">Admin Dashboard</a>

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

<h2>Update course Details</h2><br>
<div class="div_deg">
    <form action="#" method="POST">
        <div>
            <label>courseName:</label>
            <input name="name" value="<?php echo "{$rows['subject']}"; ?>">
        </div><br>
        <div>
            <label>Teachername:</label>
            <input name="tname" value="<?php echo "{$rows['teacher']}"; ?>">
        </div><br>
        <div>
            
            <input class="btn btn-primary" type="submit" name="update" value="Update">
        </div>
    </form>
</div>


</center>

 </div>

    
    
    
</body>
</html>