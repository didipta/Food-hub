<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
    <link rel="stylesheet" href="/project/css/Alluser.css">
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
</head>
<body>
<section id="nav">
        <div class="res-logo">
            <img src="./img/LOGO.jpg" alt="">
        </div>
        <div class="navigation">
         
        <ul>
            <li style="padding-left: 15px; font-weight: 900;">Menu</li>
             <li><a href="Admindashboard.php" ><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></li> 
            <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i></i>&nbsp;All iteam</a></li>
            <li><a href="#"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>&nbsp;Add Employees</a></li>
            <li><a href="writefile.php" style="background-color: rgb(59, 121, 214); border-radius: 3px; color: rgb(255, 255, 255);"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;All User</a></li> 
            <li><a href="Aboutus.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Categories</a></li>
            <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Order info</a></li>
            <li><a href="Aboutus.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;Roles</a></li>
            <li><a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;privacy Policy</a></li>
            <li><a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log-out</a></li>
        </ul>
        </div>

    </section>
   <section id="All-info">
       <div class="title">
           <h2>All Users Information</h2>
       </div>
       <p>
       <?php
    $myfile=fopen("Signup.txt","r")or die("Unable to open file");

    while(!feof($myfile))
    {
        echo "<div class='box'>".fread($myfile,filesize("Signup.txt"))."<br></div>";
    }
    fclose($myfile);
    ?>
    

   </section>

</body>
</html>