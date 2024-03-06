<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        body{
            background-color:black;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .main{
            height: 500px;
            width: 500px;
            background-color: pink;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            border-radius: 20px;
        }
        .sub div{
           margin-top: 30px;

        }
        .input{
            background: transparent;
            border: none;
            border-bottom: 2px black solid;
            height: 40px;
        }
        #login{
            width: 169px;
          height: 42px;
          background-color: yellow;
          border: none;
          border-radius: 10px;

        }
        </style>
</head>
<body>
<form action="signup.php" method="post">
    <div class="main">
        <div class="sub">
            <div>
               <input type="text" name="username"  class="input" id="name" placeholder=" Username">
            </div>
            <div> <input type="text" name="name"  class="input"  id="name" placeholder="Name"></div>
            <div> <input type="password" name="password"  class="input"  id="name" placeholder="Password"></div>
            <div> <input type="password" name="cpassword"  class="input"  id="name" placeholder="Confirm Password"></div>

            <div>
                <input type="submit" id="login" name="signup" value="signup" >
            </div>
<div>
         
        </div>
    </div>
    </form>
</body>
</html>
<?php

if(isset($_POST['signup']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="food_ordering_system";
    $conn=mysqli_connect($host,$user,$pass,$db);
    if($conn)
    {
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $q="INSERT INTO `users`( `username`, `password`) VALUES ('$user','$pass')";
        $result=mysqli_query($conn,$q);
       
       if($result)
       {
        header("location:login.php");
       }
    }
}
?>