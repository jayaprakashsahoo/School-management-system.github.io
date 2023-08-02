<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit']))
{
    $class=$_POST['class'];
    $year=$_POST['year'];
    $subject=$_POST['subject'];
    $teacher=$_POST['teacher'];

    $sql="INSERT INTO course (class,session,subject,teacher) VALUES
    ('$class','$year','$subject','$teacher')";

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
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;

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
            background-color: #286086;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<center><br><br>
    <div class="div_deg">
        
      <form action="#" method="POST">
        <div>
            <label>Class:</label>
            <select name="class" style="padding-right: 100px; padding-top: 5px; padding-bottom: 5px;" required>select class
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
            <label>year session:</label>
            <select name="year" style="padding-right: 80px; padding-top: 5px; padding-bottom: 5px;" required>select session
                <option value="year">year</option>
                <option value="2023-24">2023-24</option>
                <option value="2024-25">2024-25</option>

            </select>
        </div><br>
        <div>
            <label>Subjects:</label>
            <textarea name="subject" required></textarea>
        </div>
        <div>
            <label>Teachers</label>
            <textarea name="teacher"  required></textarea>
        </div>
        <div>
            <input class="btn btn-danger" type="submit" name="submit" value="ADD">
            <a class="btn btn-warning" href="admininfo.php">Back</a>
        </div>
      </form>
      
    </div>
    </center>
    
</body>
</html>