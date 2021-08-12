<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $ideds=$_POST['ideds'];
        $Statues=$_POST['Statues'];
     
    }
    if(!empty($Statues))
  {

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
 $sqla="UPDATE `product_orders` SET Statues='$Statues' WHERE orderid='$ideds'";
 $q1=mysqli_query($con,$sqla);

 header("Location: http://localhost/Food-Hub-restaurant/Views/deliveryinfo.php?eid= & type=");
  }
?>