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
            color: #000;
            text-align: center;
            margin-top: 110px;
        }

        .row-main {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            align-items: center;
            margin-top: 3rem;
            color: #000;
            border-top: 2px solid #000;
            text-align: center;
        }

        .row-main p {
            color: black;
            font-size: 20px;
            line-height: 20px;
            margin-bottom: 1rem;
            padding: 10px 0 20px 0;
        }

        .row-main_1 {
            display: flex;
            color: #000;
            border-top: 2px solid lightblue;
            text-align: center;
            margin-left: 20px;
            padding: 15px 0 15px 0;
            align-items: center;
        }

        .row-main_1 p {
            font-size: 20px;
            line-height: 10px;
            text-align: center;
        }

        .sub-row1 {
            width: 270px;
        }

        .sub-row2 {
            width: 40px;
            margin-left: 190px;
        }

        .sub-row3 {
            width: 80px;
            margin-left: 290px;
        }

        .sub-row4 {
            width: 270px;
            margin-left: 180px;
        }

        .sub-row5 {
            border: #000 0.5px solid;
            border-radius: 5px;
            width: 30px;
        }

        .sub-row5 a {
            font-size: 20px;
            color: #000;
            background-color: white;
            font-weight: 600;
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#food">Food</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><button class="btn-header" name="login">Login</button></li>
                </ul>
        </header>

        <div class="heading">
            You are About to Wine
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
                <div class="sub-row2">
                    <p><?php echo $row["qty"]; ?></p>
                </div>
                <div class="sub-row3">
                    <p><?php echo $row["price"] ; ?></p>
                </div>
                <div class="sub-row4">
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
    </section>
</body>

</html>