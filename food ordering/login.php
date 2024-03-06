<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
        .login{
            width: 169px;
          height: 42px;
          background-color: yellow;
          border: none;
          border-radius: 10px;

        }
        .login:hover{
            box-shadow: 0 20px 20px 0 red;
        }
        </style>
</head>
<body>
    <form action="login.php" method="post">
    <div class="main">
        <div class="sub">
            <div>
               <input type="text" name="username"  class="input" id="name" placeholder=" Username">
            </div>
            <div> <input type="password" name="password"  class="input"  id="name" placeholder="Password"></div>
            <div>
                <input type="submit" class="login" name="login" value="login" >
            </div>
            <div>
              <button class="login" ><a href="signup.php" >Create Account</a></button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="food_ordering_system";
    $conn=mysqli_connect($host,$user,$pass,$db);
    if($conn)
    {
        $q="SELECT * FROM `users`";
        $result=mysqli_query($conn,$q);
        $user=$_POST['username'];
        $pass=$_POST['password'];
        while($row=mysqli_fetch_array($result))
        {
            if($row['username'] == $user && $row['password']== $pass)
            
            {
               header("location:home.php");
            }
        }
    }
}
    


?>