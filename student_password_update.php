<?php
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit']))
{
    
$old_password=$_POST['password1'];
$new_password=$_POST['password2'];

$Id=$_GET['student_id'];

$sql="SELECT password FROM userinfo WHERE Id='$Id'";
$result=mysqli_query($data,$sql);

$row = mysqli_fetch_array($result);



if($row["password"]==$old_password)
{
    $sql2="UPDATE userinfo SET password='$new_password' WHERE Id='$Id'";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        echo " <script type='text/javascript'>
        alert('password changed successfully'); 
         </script ";
    }
    else
    {
        echo " upload failed. ";
        
    }


}
else{
    echo " <script type='text/javascript'>
        alert('prev password not match'); 
         </script ";
}






}











?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
       *{
        margin: 0;
        padding: 0;
       }
       .content{
        margin-top: 150px;
        width: 400px;
        background-color: lightgreen;
       }
    </style>
</head>
<body>

<center>
    <div class="content">
        <h3>Change your password</h3><br>
       
        
        <form action="#" method="POST">
            <div>
                <label>Old password</label>
                <input type="password" name="password1"  required>
            </div><br>
            <div>
                <label>New password</label>
                <input type="text" name="password2"  required>
            </div><br>
            <div>
                <input class="btn btn-success" type="submit" name="submit" value="submit">
                <a class="btn btn-danger ml-1" href="student_profile.php">Back</a>
            </div>
        </form>
    </div>
</center>
    
</body>
</html>