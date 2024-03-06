<?php
if(isset($_POST["login"]))
{
    header("location:login.php");
}
?>

<?php
if(isset($_POST["signup"]))
{
    header("location:signup.php");
}
?>
<?php
if(isset($_POST["about"]))
{
    header("location:about.php");
}
?>
<?php
if(isset($_POST["contact"]))
{
    header("location:contact.php");
}
?>

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
.home{
    position: relative;
    min-height: 100vh;
    width: 100%;
    background: url("photos/494243.jpg.crdownload");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.hero-text h3{
    font-size: 100px;
    font-weight: 600;
    margin-bottom: 15px;
    word-spacing: 10px;
}
.hero-text h1{
    font-size: 40px;
    font-weight: 800;
    margin-bottom: 20px;
    letter-spacing: 2px;
}
.hero-text h4{
    font-size: 80px;
    font-weight: 600;
    word-spacing: 15px;
    margin-bottom: 3.5rem;
}
span{
    color: red;
}
.btn{
    display: inline-block;
    padding: 16px 45px;
    background: red;
    color: #ffffff;
    font-size: 25px;
    font-weight: 600;
    border: 2px solid #000;
    transition: all .50s;
    border-radius: 10px;
}
.btn:hover{
    transform: translateX(5px);
    background: transparent;
    border: 5px solid #000;
    color: #000;
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

.food-main{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10rem;
}
.food-vr{
    /* height: 250px;
    width: 200PX; */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 10px;
}
.food-img{
    border-radius: 50%;
    position: absolute;
    margin-top: -150px;
    border-radius: 50%;
    
}
.food-nm{

    color: #000;
    border-radius: 20px;
background: linear-gradient(145deg, #cacaca, #f0f0f0);
    height: 200px;
    width: 180px;
    border-radius: 25px;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    font-size: 2rem;
    font-weight: 600;
}
.buybtn{
    text-decoration: none;
    font-size: 1.3rem;
    height: 50px;
    width: 120px;

    background-color: brown;
    border-radius: 15px;
    
} 
.buybtn a{
    color: #ffffff;
    text-decoration: none;

}
.f_n{
    margin-top: 40px;
    margin-bottom: 20px;
}
.about{
    background-color: var(--secont-bg-color);
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    align-items: center;
    gap: 4rem;
}
.about-img img{
    width: 100%;
    height: 500px;
}
.about-text h2{
    font-family: 'Dosis', sans-serif;
    font-size: var(--h2-font);
    font-weight: 800;
    margin-bottom: 10px;
}
.about-text h5{
    font-size: 22px;
    margin-bottom: 20px;
    line-height: 1.4;
}
span{
    color: var(--main-color);
}
.about-text p{
    color: var(--other-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 3rem;
    
}
:root{
    --bg-color: #191919;
    --secont-bg-color: #101010;
    --main-color: #e9204f;
    --text-color: #fff;
    --second-color:#e4e4e4;
    --other-color: #c6c9d8bf;

    --h1-font: 7rem;
    --h2-font: 3.5rem;
    --p-font: 1.1rem;
}
.contact{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    align-items: center;
    gap: 8rem;
}
.left-contact{
    display: flex;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.right-contact h2{
    font-family: 'Dosis', sans-serif;
    font-size: var(--h2-font);
    font-weight: 800;
    margin-bottom: 5px;
}
.right-contact p{
    color: #fff;
    font-size: var(--p-font);
    line-height: 30px;
}
.end-section{
    padding: 80px 19% 70px;
    background: var(--secont-bg-color);
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
}
.end-section h3{
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
}
.end-section p{
    color: var(--other-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 20px;
}
.end-section i{
    height: 40px;
    width: 40px;
    background: var(--main-color);
    color: var(--text-color);
    border: 2px solid var(--main-color);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    border-radius: 50%;
    margin: 0 9px;
    transition: all ease .50s;
}
.end-section i:hover{
    transform: translateY(-5px);
    background: transparent;
    border: 2px solid var(--main-color);
}
    </style>
</head>
<body>
     <!--header section -->
     <header class="sticky">
        <form action="home.php" method="post">
            
            <ul class="navlist">
                <li><p>Food<span>F</span>amily</p></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#food">Food</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button class="btn-header" name="login">Login</button></li>
                <li><button class="btn-header" name="signup">Sign up</button></li>
            </ul>
        </header>

        <!--hero section-->
        <section class="home" id="home">
            <div class="hero-text">
                <h3>it's not just</h3>
                <h1>Food, It's an</h1>
                <h4>Experience.</h4>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>

        <!--food section -->
        <section class="food" id="food">
            <div class="food-main">
                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Burgar</div>
                        <div>    <button class="buybtn"><a href="buy_food.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Pizaa</div>
                        <div>    <button class="buybtn"><a href="buy_food2.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Sendvich</div>
                        <div>    <button class="buybtn"><a href="buy_food3.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
              


                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Burgar</div>
                        <div>    <button class="buybtn"><a href="buy_food.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Pizaa</div>
                        <div>    <button class="buybtn"><a href="buy_food2.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
                <div class="food-vr">
                    <div class="food-img"><img width="150px" width="100px" src="photos/bg.png"></div>
                    <div class="food-nm">
                        <div class="f_n">Sendvich</div>
                        <div>    <button class="buybtn"><a href="buy_food3.php">See Food</a></button></div>
                        
                    
                    </div>
                </div>
            </div>
        </section>

        <!--about section -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="about.png">
            </div>
            <div class="about-text">
                <h2>About Us</h2>
                <h5>Welcome to Food<span>F</span>amily</h5>
                <p>At Food<span>F</span>amily, our mission is simple: to connect food lovers with their favorite restaurants, cafes, and eateries, all at the touch of a button. We strive to make ordering food as effortless and enjoyable as possible, ensuring that every meal is a delightful experience.</p>
                <p>We build innovative products & solutions that deliver unparalleled convenience to urban consumers.
The best part? Every bit of your work at Swiggy will help elevate the lives of our users across India.</p>
            </div>
        </section>


        <!--contact section -->
        <section class="contact" id="contact">
            <div class="left-contact">
            <h2>**Customer Support:**</h2><br>
            - Email: support@yourfoodapp.com<br>
            - Phone: +1 (800) 123-4567 (Mon-Fri, 9:00 AM - 6:00 PM EST)<br><br>
            <h2>**Technical Support:**</h2><br>
            - Email: techsupport@yourfoodapp.com<br>
            - Phone: +1 (800) 987-6543 (Mon-Fri, 9:00 AM - 6:00 PM EST)
            </div>

            <div class="right-contact">
                <h2>
                    Contact
                </h2>
                <p>Thank you for using our food ordering app! We value your feedback and inquiries. Please feel free to reach out to us through any of the following channels:</p>
            </div>
        </section>

        <!--end section -->
        <section class="end-section">
            <h3>Vaibhav Makwana</h3>
            <p>support FoodFamily</p>
            <div class="end-icon">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </section>
        </form>
</body>
</html>



       