<?php
$username=$_POST["username"];
$userid=$_POST["userid"];
$useraddress=$_POST["useraddress"];
$orderid=$_POST["orderid"];
$Qantity=$_POST["Qantity"];
$productprice=$_POST["productprice"];
$toprice=$_POST["toprice"];
$userphone=$_POST["userphone"];
$useremail=$_POST["useremail"];
$paymenttype=$_POST["paymenttype"];
$productname=$_POST["productname"];
$productstatus=$_POST["productstatus"];
include $_SERVER['DOCUMENT_ROOT'].'/Food-Hub-restaurant/Model(database)/orderdatabase.php';
?>