
<?php include $_SERVER['DOCUMENT_ROOT'].'/Food-Hub-restaurant/Model(database)/employeedatabase.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/addemployee.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoloyee Add</title>
    <style>
       .navigation .Employeess{
              background-color: rgb(59, 121, 214);
             border-radius: 3px;
              color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>


<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'registrationbd');
$ql="SELECT *FROM employee";
$results= mysqli_query($con, $ql);

 $num1= mysqli_num_rows($results);
?>



<div>
    <?php include 'header-footer/adminnav.php';?>
</div>

    <section name="login" id="Sign-up">
        
    <form action="#" class="sign-up-form" method="POST" onsubmit="return validateinput()"  name="emform">
            <h2 class="title">Add Employee</h2>
            <div class="input-field" id="user">
              <i class="fa fa-user"></i>
              <input type="text" name="username" id="username"  placeholder="Username" pattern="[A-Za-z\s]+" title="Only letter support"/>
            </div>

           <div class="input-field " id="sal">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input type="text" name="salary" id="salary" placeholder="Add Salary" pattern="[0-9]+" title="Wrong Salary format">
            </div>

            <div class="input-field" id="em">
              <i class="fa fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Wrong email format">
            </div>

            <div class="input-field" id="pho">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="integer" name="phn" id="phn" placeholder="Phone number" pattern="[0-9]{11}" title="Wrong phone number"><br><span></span>
              </div>

              <div class="input-field" id="ui">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" value="<?php $f=(2*$num1); echo $userid="Enter 110(staff)or100(deli-man)-".(10130+$f);?>" name="uid" id="uid" placeholder="User id">
              </div>
              
            <div class="input-field" id="pass">
              <i class="fa fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <div class="eye" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
            </div>

            <div class="input-field" id="emp">
                <i class="fa fa-lock"></i>
                <select name="employetype" class="selecttype" id="employetype">
                    <option value="">--Select--</option>
                    <option value="Staff">Staff</option>
                    <option value="Delivery man">Delivery man</option>
                </select>
              </div>
              <div style="display: flex; padding:10px;" >
                <input type="submit"  id="submitsave"  class="btn" value="Save" /><br>
                <a href='http://localhost/Food-Hub-restaurant/Views/Addemployees.php'><input type="submit"  id="submitreg"  class="btn" value="Cancel" /></a>

              </div>
              <?php echo $message;?>
            
        </form>
    
    </section>
    <section id="order-list">
        <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Employee List</div>
        <div class="list-heading">
            <table  class="list-table">
                <tr  class="list-td">
                    <th>User_id</th>
                    <th>Namee</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Emptype</th>
                    <th>PhoneNum</th>
                    <th>Password</th>
            </tr>
            <?php
     $con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'registrationbd');
     $ql="SELECT *FROM employee";
     $result= mysqli_query($con, $ql);
     
     while ($data=mysqli_fetch_assoc($result)){
        $username=$data['Username'];
        $address=$data['Address'];
        $Email=$data['Email'];
        $uid=$data['User_id'];
        $phone=$data['Phone_number'];
        $pasw=$data['cPassword'];
        $employeetype=$data['Employetype'];
        $salary=$data['Salary'];
      
        echo "<tr class='alluser-tr'>
        <td> $uid</td>
        <td >$username</td>
        <td>$address</td>
        <td>$Email</td>
        <td>$salary</td>
        <td>$employeetype</td>
        <td>$phone</td>
        <td>$pasw</td>
      
       </tr>";
     }
     ?>
            
        </table>
    </div>
    </section>
    <script src="js/addemplvalidation.js"></script>
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