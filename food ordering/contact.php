<?php
if(isset($_POST["home"]))
{
    header("location:home.php");
}
?>
<html>
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

**Contact Us**
<br>
Thank you for using our food ordering app! We value your feedback and inquiries. Please feel free to reach out to us through any of the following channels:
<br>
**Customer Support:**
<br>
- Email: support@yourfoodapp.com
<br>
- Phone: +1 (800) 123-4567 (Mon-Fri, 9:00 AM - 6:00 PM EST)
<br>
**Technical Support:**
<br>
- Email: techsupport@yourfoodapp.com
<br>
- Phone: +1 (800) 987-6543 (Mon-Fri, 9:00 AM - 6:00 PM EST)
<br>
**Business Inquiries:**
<br>
- Email: business@yourfoodapp.com
<br>
**Address:**
<br>
123 Main Street
City, State, Zip Code
Country
<br>



We strive to provide you with the best experience possible and are committed to resolving any issues you may encounter promptly. Thank you for choosing Food<span>F</span>Family!
<br>
<form name="frm1" action="home.php" mehod="POST">
        <button name="home">back</button>
        </form>
</body>
</html>