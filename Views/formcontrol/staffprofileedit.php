<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernameed=$_POST['username'];
    $addressed=$_POST['address'];
    $Emailed=$_POST['email'];
    $uided=$_POST['useid'];
    $phoneed=$_POST['phone'];
    $cons=mysqli_connect('localhost','root');
    mysqli_select_db($cons,'registrationbd');
    $sqla="UPDATE employee SET  Username='$usernameed',Address='$addressed',Email='$Emailed',Phone_number='$phoneed' WHERE User_id='$uided'";
    mysqli_query($cons,$sqla);

        header("Location: http://localhost/Food-Hub-restaurant/Views/staffprofile.php");
    
}

?>