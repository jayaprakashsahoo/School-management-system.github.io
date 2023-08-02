<?php

error_reporting(0);
session_start();


if(isset($_POST['captcha']) && $_POST['captcha'] === $_SESSION['captcha_code'])
{
    $con = mysqli_connect("localhost","root","","schoolproject2");

    if($con->connect_error){
    die("connection faild:" .$con->connect_error);
    }
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {

     $name = $_POST['username'];
     $password = $_POST['password'];
                    
     $sql = "select * from userinfo where username='".$name."' and password='".$password."'";
                    
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
                    
                    
     if($row["usertype"]=="student"){
     $_SESSION['username']=$name;
     $_SESSION['usertype']="student";
     header("location:studentinfo.php");
     }
     elseif($row["usertype"]=="admin"){
     $_SESSION['username']=$name;
     $_SESSION['usertype']="admin";
     header("location:admininfo.php");
     }
     elseif($row["usertype"]=="teacher"){
        $_SESSION['username']=$name;
        $_SESSION['usertype']="teacher";
        header("location:teacherinfo.php");
     }
    else{
                            
        $message="Invaild credential";
        $_SESSION['loginmessage']=$message;
        header("location:login.php");
         }
    }
}
else
{
    $_SESSION['message']="invalid details";

    header("location:login.php");
}







?>