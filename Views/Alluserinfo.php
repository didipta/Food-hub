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
       .navigation .User{
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
           <h2>All Users Information</h2>
       </div>
       <?php

           
            

?>
 <table  class="alluser-table">
        <tr  class="alluser-td">
            <th>User_id</th>
            <th>Name </th>
            <th>Address</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Password</th>
            
    </tr>
    <?php
     $con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'registrationbd');
     $ql="SELECT *FROM usertb";
     $result= mysqli_query($con, $ql);
     
     while ($data=mysqli_fetch_assoc($result)){
        $username=$data['Username'];
        $address=$data['Address'];
        $Email=$data['Email'];
        $uid=$data['User_id'];
        $phone=$data['Phone_number'];
        $pasw=$data['cPassword'];
      
        echo "<tr class='alluser-tr'>
        <td> $uid</td>
        <td >$username</td>
        <td>$address</td>
        <td>$Email</td>
        <td>$phone</td>
        <td>$pasw</td>
      
       </tr>";
     }
     ?>
    </table>

   </section>

</body>
</html>