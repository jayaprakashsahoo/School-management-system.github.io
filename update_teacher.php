
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

$Id=$_GET['teacher_id'];

$sql="SELECT * FROM userinfo WHERE Id='$Id'";
$result=mysqli_query($data,$sql);

$rows=$result->fetch_assoc();



if(isset($_POST['update']))
{
    
    $email=$_POST['email'];
    $contact=$_POST['phone'];
    $password=$_POST['password'];


    $query="UPDATE userinfo SET email='$email',phone='$contact',password='$password'
    WHERE Id='$Id'";

    $result2=mysqli_query($data,$query);
    if($result2)
    {
        
        header("location:teacher_profile.php");

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
            color: black;
        }
        .div_deg{
            background-color: lightgreen;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
    <div>
        <center><br><br>
            <div class="div_deg">
                <form action="#" method="POST">
                    <div>
                        <label>Email:</label>
                        <input type="text" name="email" value="<?php  echo $rows['email']; ?>">
                    </div>
                    <div>
                        <label>Contact:</label>
                        <input type="text" name="phone" value="<?php  echo $rows['phone'];  ?>">
                    </div>
                    <div>
                        <label>Password:</label>
                        <input type="text" name="password" value="<?php echo $rows['password'] ?>">
                    </div>
                    <div>
                        
                        <input class="btn btn-primary" type="submit" name="update" value="Update">
                        <a class="ml-2 btn btn-danger" href="teacher_profile.php">Back</a>
                    </div>
                </form>
            </div>
        </center>
    </div>
    
</body>
</html>