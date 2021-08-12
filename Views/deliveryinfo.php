

<?php
session_start();
$userid=$_SESSION['uname'];
$asd=$_GET['eid'];
$asdw=$_GET['type'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STaff-dashboad.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/ALluser.css">
    <link rel="stylesheet" href="css/Orderinfo.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Dashboard</title>
    <style>
       .navigation .Status{
            background-color: rgb(82, 82, 82);
            border-radius: 3px;
            color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>
 
<div>
    <?php include 'header-footer/delimannavgation.php';?>
</div>
<section id="All-info" style="display:one;">
       <div class="title">
           <h2>All Orders Information</h2>
       </div>
       <?php

           
            

?>
 <table  class="alluser-table" style="margin-left:-50px; width:1230px;">
        <tr  class="alluser-td">
            <th>Orderid</th>
            <th>UserName</th>
            <th>Userid</th>
            <th>Productname </th>
            <th>Totalprice</th>
            
            
            
            <th>Userphone</th>
            
            
            <th>Statues</th>
            <th>Qantity</th>
            <th>paymenttype</th>
            <th>Useraddress</th>
            <th>Action</th>
    </tr>
    <?php
    $conor=mysqli_connect('localhost','root');
    mysqli_select_db($conor,'Productdb');
  
    $qor="SELECT *FROM product_orders Where delimanid='$userid'";
    $resultor= mysqli_query($conor, $qor);
     
  while ($rows=mysqli_fetch_assoc( $resultor)){
        $did=$rows['id'];
         $orderid=$rows['orderid'];
         $productname=$rows['Productname'];
         $price=$rows['toprice'];
         $status=$rows['Statues'];
         $Qantity=$rows['Qantity'];
         $paytype=$rows['paymenttype'];
         $username=$rows['username'];
         $userid=$rows['userid'];
         $useraddress=$rows['useraddress'];
         $userphone=$rows['userphone'];
         $userphone=$rows['userphone'];
         $proprice=$rows['proprice'];
         $useraddress=$rows['useraddress'];
      
        echo "<tr class='alluser-tr' style='height: 70px;'>
        <td>$orderid</td>
        <td>$username</td>
        <td>$userid</td>
        <td >$productname</td>
        <td>$price</td>
        <td> $userphone</td>
        
        <td>$status</td>
        <td>$Qantity</td>
        <td>$paytype</td>
        <td> $useraddress</td>

      <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
      <div class='edit-delet'>
      <div style=' '> <a href='deliveryinfo.php?eid=$did & type=block'><input type='submit' value='Edit' style='cursor: pointer; background:none; border:none; font-size:1.3em;' onclick='edits()' id='check'></a></div>
      </div>
    </div>
       </tr>";
     }
     ?>
    </table>

   </section>



  <div id="productupdate" style="display:<?php echo $asdw; ?>;">
 <form action="./formcontrol/deliveryupdate.php"class="sign-up-form" method="POST" enctype="multipart/form-data">
<div class="header">
<h1>Product update</h1>
        </div>
<div class="addproduct">
<?php
$cond=new mysqli('localhost','root','','Productdb');
$sqld="SELECT *FROM product_orders where id='".$asd."'";
$resulted=mysqli_query($cond,$sqld);
$data=mysqli_fetch_assoc($resulted);
$orderid=$data['orderid'];
$Productname=$data['Productname'];
$userid=$data['userid'];
$username=$data['username'];


?>
     <label for="Cp"> product Order Id:   </label>
    <input type="text" name="ideds" value="<?php echo $orderid; ?>" readonly ><br><br>
    <label for="Cp"> product Name:</label>
    <input type="text" value="<?php echo $Productname; ?>"   name="" required="" id="ide" readonly><br><br>
    <label for="np">User Name:</label>
    <input type="text" id="np" value="<?php echo $username; ?>"  name="" required="" readonly><br><br>
    <label for="np">User Id:</label>
    <input type="text" value="<?php echo $userid; ?>" id="np" name="" required="" readonly><br><br>
    <label for="np">Status Update:</label>
    <select name="Statues" class="selecttype">
        <option value="">--Select--</option>
        <option value='Your Order is Processing'> Your Order is Processing</option>
        <option value='Your Order is on the way'> Your Order is on the way</option>
        <option value='Your Order is Cancelled'>Your Order is Cancelled</option>
        <option value='Wait Few minute'>Wait Few minute</option>
        <option value='You received the order already'>You received the order already</option>
    </select><br><br>
  
    
    <button class="send btn" >Submit</button>
    <button class="btn"><a href="deliveryinfo.php?eid= & type=" class="Additeam" style="color:white;">Cancel</a></button>
              

      </div>
</form>

</div>





    </body>
    </html>