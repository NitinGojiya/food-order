<?php
if(isset($_POST["home"]))
{
    header("location:home.php");
}
?>
<Html>
<head>
    <style>
            span{
                 color: red;
                }
                body{
                color: #ffffff;
                background: black;
                }
               
                

        </style>
</head>
<body>

<h1><center>About Us</center></h1>
<br>

Welcome to Food<span>F</span>amily – your ultimate destination for convenient, delicious, and hassle-free dining experiences. We are more than just an app; we are your culinary companion, dedicated to revolutionizing the way you enjoy food.
<br>
<h3>**Our Mission**</h3>
<br>
At Food<span>F</span>amily, our mission is simple: to connect food lovers with their favorite restaurants, cafes, and eateries, all at the touch of a button. We strive to make ordering food as effortless and enjoyable as possible, ensuring that every meal is a delightful experience.
<br>
            <h3>**What We Offer**</h3>
<br>
- **Wide Selection:** Explore a diverse range of cuisines, from local favorites to international delights, all curated to satisfy your cravings.
  <br>
- **Convenience:** With our user-friendly interface, ordering food has never been easier. Simply browse, select, and place your order – it's that simple.
<br>
- **Personalization:** Tailor your dining experience to your preferences with customizable options and special dietary considerations. Whether you're a vegetarian, vegan, or have specific food allergies, we've got you covered.
<br>
- **Speedy Delivery:** Enjoy prompt and efficient delivery services, ensuring that your food arrives fresh and piping hot, right to your doorstep.
<br>
- **Secure Transactions:** Rest assured that your transactions are safe and secure, with multiple payment options available for your convenience.
<br>
<h3>**Our Commitment to Quality**</h3>
<br>
At Food<span>F</span>amily, we prioritize quality above all else. We partner with only the finest restaurants and vendors, ensuring that every dish meets our stringent standards of excellence. From farm-fresh ingredients to expertly crafted recipes, we guarantee a dining experience that surpasses expectations.
<br>
            <h3>**Get in Touch**</h3>
<br>
We love hearing from our customers! Whether you have feedback, questions, or simply want to say hello, don't hesitate to reach out to us. You can contact our customer support team via email, phone, or through our in-app messaging feature. Your satisfaction is our top priority, and we're here to assist you every step of the way.
<br>
Join the  Food<span>F</span>amily community today and embark on a culinary journey like no other. Delicious possibilities await – download the app now and let the feasting begin!
<br>
<form name="frm1" action="home.php" mehod="POST">
        <button name="home">back</button>
        </form>
</body>
</html>