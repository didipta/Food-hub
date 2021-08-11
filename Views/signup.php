
<?php
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'registrationbd');

  $ql="SELECT *FROM usertb";
  $result= mysqli_query($con, $ql);

   $num1= mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Hub Sign-up</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/log-in.css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <style>
    <?php echo $nameErr;?>
    <?php echo $addressErr;?>
    <?php echo $passwordErr;?>
    <?php echo $phoneErr;?>
    <?php echo $emailErr;?>
    <?php echo $cpasswordErr;?>
    <?php echo $ueridErr;?>
    <?php echo $eErr;?>
    </style>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Food-Hub-restaurant/Controller/signuppage.php';?>

    <section name="login" id="Sign-up">
        
        <form action="#" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field username">
              <i class="fa fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" pattern="[A-Za-z\s]+" title="Only letter support" />
            </div>

           <div class="input-field address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input type="text" name="add" id="add" placeholder="Address"  required="">
            </div>

            <div class="input-field email">
              <i class="fa fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Wrong email format">
            </div>
            <div class="input-field phn">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="integer" name="phn" id="phn" placeholder="Phone number"  pattern="[0-9]{11}" title="Wrong phone number">
              </div>

              <div class="input-field uid">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" value="<?php $f=(2*$num1); echo $userid="111-".(10130+$f);?>" name="uid" id="uid" placeholder="User id" >
              </div>
              
            <div class="input-field password">
              <i class="fa fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase 
              and lowercase letter, and at least 8 or more characters">
              <div class="eye" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
            </div>

            <div class="input-field cpassword">
                <i class="fa fa-lock"></i>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                <div class="eye eyes" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
              </div>
            <input type="submit" class="btn" value="Sign up" />
           <?php echo $message;?>
        </form>
    
    </section>
    
   
        <div class="circul-signup">
            <img src="img/LOGO.jpg" alt="">
          <div class="signin">
            
            <h3 style="color: rgb(236, 236, 236); text-align: center; font-weight: 900; font-style: italic;"> ONE OF US ?</h3>
            <p style="font-style: italic; text-align: center;">
                You Have an Account Yet? please Sing in your own account.......
            </p>
            <a href="Login.php">
                <button class="btn"  style="margin-left: 150px;">
                    Sign In
                  </button>
            </a>
          </div>
          </div>

          <div class="social">
              <p class="social-text" style="margin-left:  25px; font-weight: 900;">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin" aria-hidden="true"></i>

              </a>
            </div>

      
          </div>
    
  
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