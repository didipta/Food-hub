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

<?php include '/Food-Hub-restaurant/Model(database)/Signupdatabase.php';?>



