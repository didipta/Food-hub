

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
    <link rel="stylesheet" href="css/ALluser.css">
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
    <style>
       .navigation .orders{
              background-color: rgb(59, 121, 214);
             border-radius: 3px;
              color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>
<div>
    <?php include 'header-footer/adminnav.php';?>
</div>
   <section id="All-info">
       <div class="title">
           <h2>All Orders Information</h2>
       </div>
       <?php

           
            

?>
 <table  class="alluser-table" style="margin-left:-50px; width:1800px;">
        <tr  class="alluser-td">
            <th>Orderid</th>
            <th>Productname </th>
            <th>Totalprice</th>
            <th>Username</th>
            <th>Userid</th>
            <th>Useraddress</th>
            <th>Useremail</th>
            <th>Userphone</th>
            <th>Productprice</th>
            <th>Statues</th>
            <th>Qantity</th>
            <th>paymenttype</th>
            <th>deliman_id</th>
            
    </tr>
    <?php
    $conor=mysqli_connect('localhost','root');
    mysqli_select_db($conor,'Productdb');
  
    $qor="SELECT *FROM product_orders";
    $resultor= mysqli_query($conor, $qor);
     
  while ($rows=mysqli_fetch_assoc( $resultor)){
         $orderid=$rows['orderid'];
         $productname=$rows['Productname'];
         $price=$rows['toprice'];
         $status=$rows['Statues'];
         $Qantity=$rows['Qantity'];
         $paytype=$rows['paymenttype'];
         $username=$rows['username'];
         $userid=$rows['userid'];
         $useraddress=$rows['useraddress'];
         $useremail=$rows['useremail'];
         $userphone=$rows['userphone'];
         $proprice=$rows['proprice'];
         $deliman_id=$rows['delimanid'];
      
        echo "<tr class='alluser-tr' style='height: 70px;'>
        <td>$orderid</td>
        <td >$productname</td>
        <td>$price</td>
        <td>$username</td>
        <td>$userid</td>
        <td>$useraddress</td>
        <td>$useremail</td>
        <td>$userphone</td>
        <td>$proprice</td>
        <td>$status</td>
        <td>$Qantity</td>
        <td>$paytype</td>
        <td>$deliman_id</td>
       </tr>";
     }
     ?>
    </table>

   </section>

</body>
</html>