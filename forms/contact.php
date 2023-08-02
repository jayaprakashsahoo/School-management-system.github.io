<?php

session_start();

$con = mysqli_connect("localhost","root","","contactinfo");


if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['message'];

$sql = "INSERT INTO helpcenter2 (name,email,phone,message)
VALUES ('$name','$email','$phone','$comment')";

$result=mysqli_query($con,$sql);

if($result){

header("location:index.php");

}

}


?>