<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $ided=$_POST['ided'];
        $productTypeed=$_POST['productType'];
     
    }
    if(!empty($productTypeed))
  {

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
 $sqla="UPDATE `product_orders` SET delimanid='$productTypeed' WHERE orderid='$ided'";
 $q1=mysqli_query($con,$sqla);

 header("Location: http://localhost/Food-Hub-restaurant/Views/stafforder.php?eid= & type=");
  }
?>

