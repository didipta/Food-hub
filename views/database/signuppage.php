<?php
$message="";
$num="";
$username = $email = $address = $phone = $password =$uerid=$cpassword=$cpass="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST["username"])) {

      $nameErr = ".username{border:3px solid red;}";
    } 
    else {
     
      $username = validateInpute($_POST["username"]);
      $nameErr = ".username{border:3px solid green;}";
      
    }

    if (empty($_POST["add"])) {
        $addressErr = ".address{border:3px solid red;}";
        
        } else {
            $address = validateInpute($_POST["add"]);
        $addressErr = ".address{border:3px solid green;}";
        
        }

            if (empty($_POST["email"])) {
                $emailErr = ".email{border:3px solid red;}";
                
                } else {
                    $email = validateInpute($_POST["email"]);
                $emailErr = ".email{border:3px solid green;}";
                
                }

                if (empty($_POST["phn"])) {
                    $phoneErr = ".phn{border:3px solid red;}";
                    
                    } else {
                        $phone = validateInpute($_POST["phn"]);
                    $phoneErr = ".phn{border:3px solid green;}";
                    
                    }

                    if (empty($_POST["uid"])) {
                        $ueridErr = ".uid{border:3px solid red;}";
                        
                        } else {
                            $uerid= validateInpute($_POST["uid"]);
                            $ueridErr = ".uid{border:3px solid green;}";
                        
                        }
                        if (empty($_POST["password"])) {
                            $passwordErr = ".password{border:3px solid red;}";
                            
                            } else {
                                $password = validateInpute($_POST["password"]);
                            $passwordErr = ".password{border:3px solid green;}";
                            
                            }

                            if (empty($_POST["cpassword"])) {
                                $cpasswordErr = ".cpassword{border:3px solid red;}";
                                
                                } else {
                                    $cpassword = validateInpute($_POST["cpassword"]);
                                $cpasswordErr = ".cpassword{border:3px solid green;}";
                                
                                }
                        
                            
                               
                              
}
function validateInpute($data){
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
  
  
}


if ($password== $cpassword) {
    $eErr = ".eyes i{color:green;}";
    $cpasswordErr = ".cpassword{border:3px solid green;}";
    $cpass=$cpassword;
    
   
    } else {
    $eErr = ".eyes i{color:red;}";
    $cpasswordErr = ".cpassword{border:3px solid red;}";
    
    }
   
?>



<?php
$messagebox2="<script>  swal('Good job!', 'Registration is Successful. User id is $uerid', 'success');</script>";
    $myfile=fopen("Signup.txt","a+")or die("unable to open file");
  if(!empty($username && $email && $address && $phone && $password && $uerid && $cpass))
  {
    /*fwrite($myfile,"<div style='width:30%;background-color: rgb(255, 255, 255);box-shadow: 1px 1px 1px 1px rgba(201, 201, 201, 0.548);text-align: center;padding: 4px;margin: 9px;'><h1>Registration</h1> \n\n");
    $uname="<p><b>Username:</b>". $username."</p>\n";
    $yemail ="<p><b>Email:</b>".$email."</p>\n";
    $yaddress="<p><b>Address:</b>".$address."</p>\n";
    $yphone="<p><b>Phone Number:</b>".$phone."</p>\n";
    $yid="<p><b>User Id:</b>".$uerid."</p>\n";
    $ypass="<p><b>password:</b>".$password."</p>\n";
    $ycpass="<p><b>Confirm Password:</b>".$cpassword."</p></div>\n\n\n";
    echo "<br>";
    
    echo $messagebox2;
    fwrite($myfile,$uname);
    fwrite($myfile,$yemail);
    fwrite($myfile,$yaddress);
    fwrite($myfile,$yphone);
    fwrite($myfile,$yid);
    fwrite($myfile,$ypass);
    fwrite($myfile,$ycpass); 
    fclose($myfile);*/

    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'registrationbd');
 
    $ql="SELECT *FROM usertb where User_id='$uerid'";
    $result= mysqli_query($con, $ql);
 
     $num= mysqli_num_rows($result);
     if($num == 1){

        $message="<script>swal('Fail!', 'User Id is same', 'error');</script>";
     }
     else
     {
         $sql="INSERT INTO `usertb` (`Username`,`Address`,`Email`,`Phone_number`,`User_id`,`cPassword`) VALUES ('$username','$address','$email','$phone','$uerid','$cpass') ";
         $q=mysqli_query($con,$sql);
         echo "<div style=' z-index: 2; width:400px; background-color: rgb(158, 241, 190); text-align: center; box-shadow: rgba(82, 82, 85, 0.2) 1px 1px 5px 1px; padding: 10px; margin:200px;'>
         <p style='font-weight: 900; color: rgb(0, 0, 0);'>Registration is complete</p>
         <p style='font-weight: 900; color: rgb(0, 0, 0);'>Your user_id is :$uerid</p>
         <a href='http://localhost/project/views/signup.php'>$messagebox2<button style='width: 80px; height: 40px; background-color: rgb(127, 164, 245); border: none; font-weight: 900; margin-left:300px ;'>Ok</button></a>
         
     </div>";
    
      
     }
     
     
  }
  
  
  
 
    ?>

