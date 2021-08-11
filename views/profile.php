<?php
$messagev="";
$cookie='setcookie ("password","",time()-3600, "/");';
   $filename="pro.png";
    if(isset($_POST['imgfile'])){
        $filename = $_FILES['imgfile']['name'];
        $tmp_loc = $_FILES['imgfile']['tmp_name'];
        $uploadloc='upload_profile_img/';
        if(!empty($filename))
        {
            move_uploaded_file($tmp_loc,$uploadloc.$filename);
            
            
        }
         
    }
    ?>

<?php
  $userid=$_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PROfile-User.css">
   
    <title>Profile</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
</head>
<body>
<div>
    <?php include 'header-footer/header.php';?>
</div>

<section>
    <section id="profile-info">

        <form action="#" method="Post" class="profile-form" enctype="multipart/form-data">
              
          <div class="img">

            <img src="upload_profile_img/<?php echo $filename ?>" alt="" id="blah">

            <label for="imgfile" class="Add-file"><i type="file" class="fa fa-plus" aria-hidden="true"></i></label>
            <div class="file-style"> <input type="file" name="imgfile" id="imgfile" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" ></div>
        </div>
     </form>

        <form action="formcontrol/profileedit.php" method="Post" class="profile-form">
            <fieldset>
                <legend><p>Username</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="<?php echo $username;?>" name="username" placeholder="username" pattern="[A-Za-z\s]+" title="Only letter support"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Address</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="<?php echo $address;?>" name="address" placeholder="Address" required="" ><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Email</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="<?php echo $Email;?>" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Wrong email format"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>User Id</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="<?php echo $uid;?>" name="useid" placeholder="User Id" readonly><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Phone Number</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="<?php echo $phone;?>" name="phone" placeholder="Phone Number"  pattern="[0-9]{11}" title="Wrong phone number"><br>
                </div>
               
            </fieldset>
        

            <input type="submit" name="submit" value="Save" class="btn" >
        
           
        </form>

    </section>

    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $currentpass=$_POST['thispass'];
    $newpass=$_POST['newpass'];
    if($pasw==$currentpass)
    {
        $sqla="UPDATE usertb SET  cPassword='$newpass' WHERE User_id='$uid'";
        mysqli_query($con,$sqla);
        echo $cookie;
        $messagev="<a href='http://localhost/Food-Hub-restaurant/Views/login.php'>Password Changed Successfully.clicke here</a>";
        
        
    }
    else
    {
     $messagev="Current password not match";
    }
    
    
}

?>
    <section id="Change-password">
        <div class="head">
            <h1>
                PASSWORD
            </h1>
        </div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="Post" class="Changepassword">

           
                <div class="input-file-cp" >
                    <input type="password" id="password"  name="thispass" placeholder="Current password"><br>
                    <div class="eye eyes" onclick=" myFunction() " style=" position:absolute; left:35vw; top:7.5vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>
               
          
                <div class="input-file-cp">
                    <input type="password" id="cpassword" name="newpass" placeholder="New password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase 
                        and lowercase letter, and at least 8 or more characters">
              <div class="eye eyes" onclick=" myFunction() " style=" position:absolute; left:35vw; top:12vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>

                <button class="btn">
                    Save
                    </button>
               
         <p><?php echo $messagev;?></p>

        </form>
    </section>
  <section id="myorder">
    <div class="order">
        <h1>
            MY PAYMENTS
        </h1>
    </div>
    <table  class="order-table">
        <tr  class="order-td">
            <th>Order Id </th>
            <th>Product name</th>
            <th>Qantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Payment type</th>
            
    </tr>
    <?php
     while ($rows=mysqli_fetch_assoc($resultuser)){
         $orderid=$rows['orderid'];
         $productname=$rows['Productname'];
         $price=$rows['toprice'];
         $status=$rows['Statues'];
         $Qantity=$rows['Qantity'];
         $paytype=$rows['paymenttype'];
        echo "<tr class='order-tr'>
        <td style='color:rgb(255, 0, 255);'>$orderid</td>
        <td>$productname</td>
        <td> $Qantity</td>
        <td> $price</td>
        <td style='color:rgb(66, 113, 252);'>$status</td>
        <td>$paytype</td>
      
       </tr>";
     }
     ?>
    </table>
  </section>
</section>

  <script>

function myFunction(){
var x= document.getElementById("password");
var y= document.getElementById("cpassword");
if(x.type==="password" || y.type==="password" )
{
    x.type="text";
    y.type="text";

}
else{
    x.type="password";
    y.type="password";
}
}

</script>

  
</body>
</html>
