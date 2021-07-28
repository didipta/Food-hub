<?php
$con=new mysqli('localhost','root','','Productdb');
$catid=$_POST['catId'];
$sql="SELECT *FROM producttb where id='".$catid."'";
$resulted=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($resulted);
$status=$data['product_status'];
if($status=='on')
{
  $status="off";
}
else
{
  $status="on";
}

$update="UPDATE producttb SET  product_status='$status' WHERE id='".$catid."'";
$resulteds=mysqli_query($con,$update);


?>

<?php

$delet=$_POST['delet'];
$deleted="DELETE FROM producttb  WHERE id='".$delet."'";
$resulteds=mysqli_query($con,$deleted);
?>







