

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            color: #ffffff;
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

        body {
            color: #ffffff;
            background: black;
        }

        header {
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

        p {
            font-size: 2rem;
            font-weight: 600;
        }

        .navlist {
            display: flex;
            align-items: center;
        }

        .navlist a {
            color: #ffffff;
            font-size: 2rem;
            font-weight: 600;
            margin: 0 40px;
            transition: all ease .40s;
        }

        .navlist a:hover {
            color: red;
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
        section {
            padding: 0px 5% 50px;
        }

        .fa-solid i {
            color: black;
            font-size: 35px;
            text-align: left;
        }

        .heading {
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: red;
            text-align: center;
            margin-top: 110px;
        }

        .row-main {
            display: flex;
            color: #000;
            border-top: 2px solid lightblue;
            text-align: center;
            align-items: center;
            gap: 250px;
        }

        .row-main p {
            display: flex;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            line-height: 20px;
            margin-bottom: .5rem;
            height: 50px;
            text-align: center;
            align-items: center;
        }

        .row-main_1 {
            display: flex;
            color: #000;
            border-top: 2px solid lightblue;
            text-align: center;
            align-items: center;
            gap: 300px;
        }

        .row-main_1 p {
            display: flex;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            line-height: 20px;
            margin-bottom: .5rem;
            height: 50px;
            text-align: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <section>

        <header class="sticky">
            <form>

                <ul class="navlist">
                    <li>
                        <p>Food<span>F</span>amily</p>
                    </li>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#food">Food</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><button class="btn-header" name="login">Login</button></li>
                </ul>
        </header>

        <div class="heading">
            You are About to your food
        </div>

        <div class="row-main">
            <div>
                <p>Product</p>
            </div>
            <div>
                <p>Quantity</p>
            </div>
            <div>
                <p>Price</p>
            </div>
            <div>
                <p>Sub Total</p>
            </div>
        </div>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "food_ordering_system";
        $conn = mysqli_connect($host, $user, $pass, $db);
        $select = "select * from cart";
       $total=0;
        $query1 = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($query1)) {
            $total=$total+$row['subtotal'];
        ?>
            <div class="row-main_1">
                <div class="sub-row1">
                    <p><?php echo $row["name"]; ?></p>
                </div>
                <div class="sub-row1">
                    <p><?php echo $row["qty"]; ?></p>
                </div>
                <div class="sub-row1">
                    <p><?php echo $row["price"] ; ?></p>
                </div>
                <div class="sub-row1">
                    <p><?php echo $row["subtotal"]; ?></p>
                </div>
            </div>
            </div>
        <?php
        }
        ?>
        <div class="sub-row4">
                    <p>Total:-<?php echo $total; ?></p>
                </div>
                <div class="sub-row4">
                    
                    
                       
                   <a href="payment.php" >payment and place order</a>
                   
                      
                   
                </div>
    </section>
</body>

</html>