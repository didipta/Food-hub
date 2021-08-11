<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');

$sql="INSERT INTO `product_orders` (`paymenttype`,`toprice`,`proprice`,`Qantity`,`orderid`,`userphone`,`useremail`,`useraddress`,`userid`,`username`,`Productname`,`Statues`) 
VALUES ('$paymenttype','$toprice','$productprice','$Qantity','$orderid','$userphone','$useremail','$useraddress','$userid','$username','$productname','$productstatus') ";
         $q=mysqli_query($con,$sql);


?>