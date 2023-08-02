<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student'])){

    $username=$_POST['username'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);
    $usertype="student";

    $check="SELECT * FROM userinfo WHERE username='$username'";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
        echo " <script type='text/javascript'>
        alert('Username already exist.Try new!'); 
         </script ";
    }
    else
    {

    $sql="INSERT INTO userinfo(username,email,phone,usertype,password,image) VALUES('$username','$user_email','$user_phone',
    '$usertype','$user_password','$dst_db')";

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
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
            color: white;
        }
        .div_deg{
            background-color: #ff4f4b;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
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
                <a href="update_result.php">Student result</a>
            </li>
            <li>
                <a href="show_result.php">Student issues</a>
            </li>
           
        </ul>
    </aside>
<div class="content">

<center>

<h2>Add student page</h2>

<div class="div_deg">

    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="phone" name="phone" required>
        </div>
        
        <div>
            <label>Password:</label>
            <input type="text" name="password" required>
        </div>
        <div >
            <label >Image:</label>
            <input type="file" name="image"  required>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" name="add_student" value="Add student">
        </div>
    </form>
</div>
</center>

    

 </div>

    
    
    
</body>
</html>