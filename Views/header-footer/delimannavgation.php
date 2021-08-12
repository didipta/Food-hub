<style>

.res-logo img
{
    display: inline;
  width: 36%;
  position: relative;
  border-radius: 50px;
  color: #000;
  margin: 10px;
}
#nav 
{
    width:20% ;
    height: 47vw;
    background-color: #ffffff;
    font-size: 1.1rem;
    position: fixed;
    padding: 10px;
    flex-wrap:wrap;
    display:flex;
    
}
.logo-title h2 , #view h2
{
   font-size: 1.5rem;
   margin-top: 10px;
   font-family: 'Kirang Haerang', cursive;
   font-size: 1.3rem;
}
.navigation ul{
    float: left;
    margin-left: -20px;
    margin-top: 5px;
    padding-top: 10px;
   
}
.navigation ul li 
{
    display:block;
    line-height: 19px;
    margin: 5px 8px;
    padding-top: 4px;
    line-height: 40px;
    
}
.navigation ul li a
{
   padding: 5px 10px;
   border-radius: 3px;
   color: rgba(68, 68, 97, 0.788);
   font-weight: 800;
   font-size: 1.1rem;
    
}
.navigation a{
    color:#000000;
    font-family: 'Chewy', cursive;
    font-weight: bolder;
    margin: 9px;
    padding: 4px;
}
.navigation a:hover{
    width:100% ;
    text-align: center;
    background-color: rgb(82, 82, 82);
    border-radius: 3px;
    color: rgb(255, 255, 255);
    transition: 1s;
   
}



</style>

<section id="nav">
        <div class="res-logo">
            <img src="./img/LOGO.jpg" alt="">
        </div>
        <div class="navigation">
         
        <ul>
            <li style="padding-left: 15px; font-weight: 900;">Menu</li>
             <li ><a href="delimandasboard.php" class="Dashboard" style="" ><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></li> 
            <li><a href="deliveryinfo.php?eid= & type=" class="Status"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></i></i>&nbsp;Delivery Status</a></li>
            <li><a href="#" class="Delivery"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Delivery info</a></li>
            <li><a href="login.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log-out</a></li>
        </ul>
        </div>

    </section>


<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'registrationbd');
$ql="SELECT *FROM employee where User_id= '$userid'";
$result= mysqli_query($con, $ql);
$data=mysqli_fetch_assoc($result);
   $username=$data['Username'];
   $address=$data['Address'];
   $Email=$data['Email'];
   $uid=$data['User_id'];
   $phone=$data['Phone_number'];
   $pasw=$data['cPassword'];
   $employeetype=$data['Employetype'];
   $salary=$data['Salary'];
?>