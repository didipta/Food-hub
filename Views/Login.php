<?php
session_start();
$userid="";
if(!empty($_POST["uname"])) {
	setcookie ("uname",$_POST["uname"],time()+ (86400 * 30), "/");
	setcookie ("password",$_POST["password"],time()+ (86400 * 30), "/");
  $userid=$_POST["uname"];
} 
else {
	setcookie("uname","");
	setcookie("password","");
}

?>


<?php
    
    $error="";
    $style="";
    $worning="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $userid = $_POST['uname'];
      $Password = $_POST['password'];

      if(substr($userid,0,4)=="111-")
      {
        $sql="SELECT *FROM usertb where User_id= '$userid' AND cPassword= '$Password' ";
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'registrationbd');

          $q= mysqli_query($con,$sql);
          $num= mysqli_num_rows($q);
          if($num == 1){

            
            header("Location: http://localhost/Food-Hub-restaurant/Views/homepage.php?id=$userid");
          }
          else
          {
            $error="please right user-id or password provide...!!";
            $style="#log-in{ background-color: rgba(255, 0, 0, 0.507); border: 1px solid rgb(253, 95, 95);}
            .input-field{ border: .5px solid rgb(253, 95, 95);}
            ";
           $worning= "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
           
          }
   
        
       
      }

      elseif(substr($userid,0,4)=="200-")
      {
        $sql="SELECT *FROM admin where USERID= '$userid' AND CONFIRMPASS= '$Password' ";
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'registrationbd');

          $q= mysqli_query($con,$sql);
          $num= mysqli_num_rows($q);
          if($num == 1){

        header("Location: http://localhost/Food-Hub-restaurant/Views/Admindashboard.php?id=$userid");
          }

          else
          {
            $error="please right user-id or password provide...!!";
            $style="#log-in{ background-color: rgba(255, 0, 0, 0.507); border: 1px solid rgb(253, 95, 95);}
            .input-field{ border: .5px solid rgb(253, 95, 95);}
            ";
           $worning= "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
           
          }
      }
      elseif(substr($userid,0,4)=="110-")
      {
        $sql="SELECT *FROM employee where User_id= '$userid' AND cPassword= '$Password' ";
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'registrationbd');

          $q= mysqli_query($con,$sql);
          $num= mysqli_num_rows($q);
          if($num == 1){
        
        if(isset($_POST['submit'])){
          $_SESSION['uname'] = $userid;
            header('Location: http://localhost/Food-Hub-restaurant/Views/Staffdashboard.php');
          }
        }
        else
        {
          $error="please right user-id or password provide...!!";
          $style="#log-in{ background-color: rgba(255, 0, 0, 0.507); border: 1px solid rgb(253, 95, 95);}
          .input-field{ border: .5px solid rgb(253, 95, 95);}
          ";
         $worning= "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
         
        }
        
      }

      elseif(substr($userid,0,4)=="100-")
      {
        $sql="SELECT *FROM employee where User_id= '$userid' AND cPassword= '$Password' ";
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'registrationbd');

          $q= mysqli_query($con,$sql);
          $num= mysqli_num_rows($q);
          if($num == 1){
        
        if(isset($_POST['submit'])){
          $_SESSION['uname'] = $userid;
            header('Location: http://localhost/Food-Hub-restaurant/Views/delimandasboard.php');
          }
        }
        else
        {
          $error="please right user-id or password provide...!!";
          $style="#log-in{ background-color: rgba(255, 0, 0, 0.507); border: 1px solid rgb(253, 95, 95);}
          .input-field{ border: .5px solid rgb(253, 95, 95);}
          ";
         $worning= "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
         
        }
        
      }

      else
      {
          $error="please right user-id or password provide...!!";
          $style="#log-in{ background-color: rgba(255, 0, 0, 0.507); border: 1px solid rgb(253, 95, 95);}
          .input-field{ border: .5px solid rgb(253, 95, 95);}
          ";
         $worning= "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
         
      }
       
    }
    
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-HubLOG-In</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
    <link rel="stylesheet" href="css/log-in.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <style>
      <?php echo $style;?>
   </style>
</head>
<body>
    <section name="login" id="log-in">
        
        <form action="#" class="sign-in-form" method="POST" >
            <h2 class="title"><i class="fa fa-user" aria-hidden="true"></i>
                Sign in<span style="color:red; margin-left:5px;"><?php echo $worning?></span></h2>
            <div class="input-field">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" name="uname" id="uname" placeholder="user id" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" required />
            </div>
            <div class="input-field">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type="password" name="password" id="password" placeholder="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required />

               <div class="eye" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
              
            </div>
            
            <a href="#" >Forgotten password?</a>


            <p style="color:#2bff00;"><?php echo $error;?></p>



            <input type="submit" value="Sign In" name="submit" class="btn">
            <p class="social-text">Or Sign in with social platforms</p>
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
          </form>
    
    </section>

<div class="circul">
<a href="/Food-Hub-restaurant/index.php">
    <img src="img/LOGO.jpg" alt="">
</a>
<div class="signup">
  
  <h3 style="color: rgb(236, 236, 236);; text-align: center; font-weight: 900; font-style: italic;">New here ?</h3>
  <p style="font-style: italic;">
    Don't Have an Account Yet ? Please Create a account ....
  </p>
  <a href="signup.php">
    <button class="btn transparent" id="sign-in-btn" style="margin-left: 120px;">
      Sign Up
    </button>
  </a>
  
</div>
</div>

    <script>

    function myFunction(){
    var x= document.getElementById("password");
    if(x.type==="password")
    {
        x.type="text";

    }
    else{
        x.type="password";
    }
    }
    </script>





</body>
</html>


