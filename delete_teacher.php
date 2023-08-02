<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);


if($_GET['teacher_id'])
{
    $user_id=$_GET['teacher_id'];
    $sql="DELETE FROM userinfo WHERE Id='$user_id' ";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']='Delete data successed.';
        header("location:view_teacher.php");
    }
}



?>