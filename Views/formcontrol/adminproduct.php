<?php


$productname =$productprice=$filename =$productimg=$productType="";
$productnameed =$productpriceed=$filenameed =$productimged=$productTypeed="";
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $productname = $_POST['productname'];
     $price = $_POST['productprice'];
     $productprice=$price;
     $filename = $_FILES['imgfile']['name'];
     $productimg="img/$filename";
     $productType=$_POST['productType'];
     $product_status="on";
    }
    if(!empty($productname && $productprice && $productimg && $productType))
  {

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
 $sql="INSERT INTO `producttb` (`product_name`,`product_price`,`product_img`,`product_type`,`product_status`) VALUES ('$productname','$productprice','$productimg','$productType','$product_status') ";
 $q=mysqli_query($con,$sql);

 header("Location: http://localhost/Food-Hub-restaurant/Views/adminproduct.php?eid= & type=");
  }
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $ided=$_POST['ided'];
      $productnameed = $_POST['productnameed'];
      $productpriceed = $_POST['productpriceed'];
     $filenameed = $_FILES['imgfileed']['name'];
     $productimged="img/$filenameed";
     $productTypeed=$_POST['productTypeed'];
     $product_statused="on";
    }
    if(!empty($productnameed && $productpriceed && $productimged && $productTypeed))
  {

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
 $sqla="UPDATE `producttb` SET  product_name='$productnameed',product_price='$productpriceed',product_img='$productimged',product_type='$productTypeed',product_status='$product_statused' WHERE id='$ided'";
 $q1=mysqli_query($con,$sqla);

 header("Location: http://localhost/Food-Hub-restaurant/Views/adminproduct.php?eid= & type=");
  }
?>