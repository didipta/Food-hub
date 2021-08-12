<?php
$message="";
$username=$salary=$address=$email=$phn=$uid=$password= $employetype="";
$messagebox2="<script>  swal('Good job!', 'Registration is Successful. User id is $uid', 'success');</script>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $salary=$_POST["salary"];
    $address ="Enter your current Address";
    $email=$_POST["email"];
    $phn=$_POST["phn"];
    $uid=$_POST["uid"];
    $password=$_POST["password"];
    $employetype=$_POST["employetype"];
}
if(!empty($username && $email && $address && $phn && $password && $uid &&  $employetype && $salary))
  {
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'registrationbd');
 
    $ql="SELECT *FROM employee where User_id='$uid'";
    $result= mysqli_query($con, $ql);
 
     $num= mysqli_num_rows($result);
     if($num == 1){

        $message="<script>swal('Fail!', 'User Id is same', 'error');</script>";
     }

     else
     {
         $sql="INSERT INTO `employee` (`Username`,`Address`,`Email`,`Phone_number`,`User_id`,`cPassword`,`Salary`,`Employetype`) VALUES ('$username','$address','$email','$phn','$uid','$password','$salary','$employetype') ";
         $q=mysqli_query($con,$sql);
         echo "<div style=' z-index: 2; width:400px; background-color: rgb(158, 241, 190); text-align: center; box-shadow: rgba(82, 82, 85, 0.2) 1px 1px 5px 1px; padding: 10px; margin-left:600px;'>
         <p style='font-weight: 900; color: rgb(0, 0, 0);'>Registration is complete</p>
         <p style='font-weight: 900; color: rgb(0, 0, 0);'>Your user_id is :$uid</p>
         <a href='http://localhost/Food-Hub-restaurant/Views/Addemployees.php'>$messagebox2<button style='width: 80px; height: 40px; background-color: rgb(127, 164, 245); border: none; font-weight: 900; margin-left:300px ;'>Ok</button></a>
         
     </div>";
     }

  }
?>