<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="food_ordering_system";
 $conn=mysqli_connect($host,$user,$pass,$db);
 if(isset($_POST['buy']))
 {
    $qty=$_POST["quantity"];
    $price=$_POST["price"];
    $name=$_POST["name"];

$stot=$qty*$price;
    $sql="INSERT INTO `cart`(`name`, `qty`, `price`, `subtotal`) VALUES ('$name','$qty','$price','$stot')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:cart.php");
    }

 }

 

?>