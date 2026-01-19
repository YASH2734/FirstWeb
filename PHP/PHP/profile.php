<?php
session_start();
/*if(!isset($_SESSION['name'])){
    header('location: Sessionlogin.php');
}*/
if(isset($_POST['cname'])){
   setcookie('coupon',$_POST['cname'],time()+3600,'/','',0);
    setcookie('discount',$_POST['dis'],time()+3600,'/','',0);
 // $dis= $_POST['dis'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome </title>
</head>
<body>
    <h2>
        Welcome!
<?php
echo $_SESSION['name'];
?>
<h1>
    Order History
</h1>
<h4>Product name:<?php echo $_SESSION['pname'];?></h4>
<h4>Product Price:<?php echo $_SESSION['pprice'];?></h4>
<?php 
$qty=$_SESSION['qname']; 
$pprice=$_SESSION['pprice'];
$total=$pprice* $qty;
if(isset($_COOKIE['coupon'])){
    $discountprice=($total*$_COOKIE['discount'])/100;
    $priceafterdis=$total-$discountprice;
}
else{
   $priceafterdis= $total;
}
//$pprice=$_SESSION['pprice'];$total=$pprice* $qty;?>
<h4>Total:<?php echo $priceafterdis;?></h4>
<form method="post">
     <label>coupon name:
            <input type="text" id="cname" name="cname">
</label>
 <label>Discount in %:
            <input type="number" id="dis" name="dis">
</label>
  <input type="submit" value="Add Coupon">
</form>
</body>