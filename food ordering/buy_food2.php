<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    border: none;
    outline: none;
}
body{
    color: #ffffff;
    background: black;
}
header{
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 28px 11%;
    border-bottom: 1px solid transparent;
    transition: all ease .50s;
}
p{
    font-size: 2rem;
    font-weight: 600;
}
.navlist{
    display: flex;
    align-items: center;
}
.navlist a{
    color: #ffffff;
    font-size: 2rem;
    font-weight: 600;
    margin: 0 40px;
    transition: all ease .40s;
}
.navlist a:hover{
    color: red;
}
section{
    padding: 120px 19% 100px;
}

span{
    color: red;
}
.btn2{
    height: 40px;
    width: 100px;
    background: red;
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    border: 2px solid #000;
    transition: all .50s;
    border-radius: 10px;
}
.btn2:hover{
    transform: translateX(5px);
    background: transparent;
    background-color: black;
}
header.sticky{
    padding: 15px 11%;
    background: #000;
    border-bottom: 1px solid #4e5055;
}
.btn-header{
    background-color: brown;
    color: white;
    text-decoration: none;
    font-size: 25px;
    margin-left: 25px;
    font-weight: bolder;
    border-radius: 20px;
    transition: transform .4s;
    height: 50px;
    width: 150px;
}
.btn-header:hover{
    background-color: red;
}

        /* .main {
            height: auto;
            width: 1465px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
        } */

        .sub {
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 50px;

        }

        .food {
            background-color: #fff;
            gap: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 250px;
            width: 200px;
            margin: 20px;
            border-radius: 20px;
            color: #000;
        }
        img{
            border-radius: 20px;
        }
        
    </style>
	
</head>

<body>
    <!--header section -->
    <header class="sticky">
        <form action="home.php" method="post">
            
            <ul class="navlist">
                <li><p>Food<span>F</span>amily</p></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="#food">Food</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><button class="btn-header" name="login">Login</button></li>
                <li><button class="btn-header" name="signup">Sign up</button></li>
            </ul>
        </header>
        <section class="buy">
    <div class="main" id="food">
        <div class="sub">
        <?php
     $host="localhost";
     $user="root";
     $pass="";
     $db="food_ordering_system";
     $conn=mysqli_connect($host,$user,$pass,$db);
     $sql="select * from food where name='pizaa'";
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result))
     {

     
    ?>
            <div class="food">
                <div><img src="<?php echo $row['photo']; ?>" height="100px"></div>
                <div>
                  <?php echo $row['name'];?>
                </div>
                <div>
                <?php echo $row['price'];?>
                </div>
                <div>
                    <input type="submit" value="buy" name="buy" class="btn2">
                </div>
            </div>
            <?php }?>

           
        </div>
    </div>
        </section>
</body>

</html>
