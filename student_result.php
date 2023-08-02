
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
    $subs=$_POST['subs'];
    $examtype=$_POST['exam'];

    $sql="INSERT INTO result (class,email,mark,exam) VALUES
    ('$class','$email','$subs','$examtype')";

    $result=mysqli_query($data,$sql);
    if($result)
    {
        echo " <script type='text/javascript'> 
            alert('Data upload success');
        </script ";
    }
    else
    {
        echo "upload failed";
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
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
            color: black;
        }
        .div_deg{
            background-color: skyblue;
            width: 350px!important;
            padding-top: 70px;
            padding-bottom: 70px;
        }
            
            
        
        


    </style>
</head>
<body>
    <header class="header">
        <a href="">Teacher Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="teacher_form.php">view course</a>
            </li>
            <li>
                <a href="student_result.php">Update result</a>
            </li>
            <li>
                <a href="#">Show my class</a>
            </li>
           
        </ul>
    </aside>
<div class="content">
    <center><br><br>
    <div class="div_deg">
    <form action="#" method="POST">
           <div>
            <label>Class:</label>
            <select name="class" style="padding-right: 120px; padding-top: 5px; padding-bottom: 5px;" required>select class
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
            <label>stud.Email:</label>
            <input type="email" name="email" placeholder="enter std.registered email" required>
        </div>
        <div>
            <label>subs & mark</label>
            <textarea name="subs" required></textarea>
        </div>
        <div>
            <label>exam type</label>
            <select name="exam" style="padding-right: 90px; padding-top: 5px; padding-bottom: 5px;">select exam
                <option value="exam">rxam</option>
                <option value="half_yearly">half_yearly</option>
                <option value="annually">annually</option>
                <option value="test">test</option>
                <option value="pretest">pretest</option>
            </select>
        </div>
        <div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
        </div>

    </form>
</div>
</center>
    

 </div>

 <footer>
    <center><h5 style="color: white;">Welcome to W-school student  Dashboard</h5></center>

 </footer>

    
    
    
</body>
</html>