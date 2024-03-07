


<!DOCTYPE html>
<html>
<head>
<style>


	
</style>
</head>

<body>
	

	
<form action="payment.php" method="post">
	<div id="Debit Card" class="tabcontent">
		<h3>Pay by Debit Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
        <p>Atm Pin</p>
		<input type="text" name="atm">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<input type="submit" value="Pay" name="pay">
		<input type="reset" value="Reset">
	</div>

	
	</form>
		
</body>
</html>
<?php
if(isset($_POST['pay']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="food_ordering_system";
    $conn=mysqli_connect($host,$user,$pass,$db);
$no=$_POST['card'];
$atm=$_POST['atm'];
$cvv=$_POST['cvv'];
$name=$_POST['name'];
$sql="SELECT * FROM `payment`";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{
if($no==$row['cardno'] && $atm==$row['atmpin'] && $cvv==$row['cvv'] && $name==$row['cardname']  )
{
   
    $dl="DELETE FROM `cart`";
    $r=mysqli_query($conn,$dl);
    if($r)
    {
        header("location:order.php");
    }
}

}
}

?>