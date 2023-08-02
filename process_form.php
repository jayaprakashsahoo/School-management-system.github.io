<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject2";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $class=$_POST['class'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $nationality=$_POST['nationality'];
    $dob=$_POST['dob'];


$sql="INSERT INTO admission1 (name,age,gender,address,class,contact,email,nationality,dob) 
VALUES ('$name','$age','$gender','$address','$class','$contact','$email','$nationality','$dob')";

$result=mysqli_query($data,$sql);

if($result){

    $_SESSION['message']="your details submitted successfully";

header("location:index.php");
    
}

}






?>