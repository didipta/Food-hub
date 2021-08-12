<?php

require_once('./component/foodcomeponent.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Food-Hub-restaurant/Model(database)/productdatabase.php');

$database=new createDb("Productdb","ProductTB");
?>

<?php
$userid=$_GET['id'];



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            FOOD
        </title>
        <link rel="stylesheet" href="css/Foodsme.css">
        <script src="https://kit.fontawesome.com/ec8ab4f226.js" crossorigin="anonymous"></script>
        <style>
            *{
                
                font-size:1rem;
                
            }
          
        </style>
    </head>
    <!--BODY-->
    <body>
    <div>
    <?php include 'header-footer/header.php';?>
   </div>
        <section id="nav">
       
            <div class="navigation">
            <ul>
                <li><a href="homepage.php?id=<?php echo $userid ;?>" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li> 
                <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp;Special Menu</a></li>
                <li><a href="#" style="background-color: rgba(185, 185, 185, 0.534); border-radius: 3px; color: #000;"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;Foods</a></li>
                <li><a href="#"><i class="fa fa-glass" aria-hidden="true"></i>&nbsp;Drinks</a></li> 
                <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;About</a></li>
                <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;My orders</a></li>
            </ul>
            </div>
    
        </section>

       
        <input type="radio" name="FOODS" id="check1" checked>
        <input type="radio" name="FOODS" id="check2">
        <input type="radio" name="FOODS" id="check3">
        <input type="radio" name="FOODS" id="check4">
        <input type="radio" name="FOODS" id="check5">
        <input type="radio" name="FOODS" id="check6">

        <div class="container">
            <div class="top-content">
                <label for="check1">All Foods</label>
                <label for="check2">Popular</label>
                <label for="check3">Breakfast</label>
                <label for="check4">Lunch</label>
                <label for="check5">Snack</label>
                <label for="check6">Dinner</label>
               
            </div>
            <div class="title-all titles">
                <h3>All-Food</h3>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This time available all foods</h4>
            </div>

            <div class="title-populer POPULAR titles">
                <h3>Popular</h3>
                <h4>Most order right now</h4>
            </div>

            <div class="title-Breakfast BREAKFAST titles">
                <h3>&nbsp;&nbsp;Breakfast</h3>
                <h4>Most order right now</h4>
            </div>

            <div class="title-lunch LUNCH titles">
                <h3>Lunch</h3>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;Most order right now</h4>
            </div>
           
            <div class="title-Snack SNACK titles">
                <h3>Snack</h3>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most order right now</h4>
            </div>

            <div class="title-Dinner DINNER titles">
                <h3>Dinner</h3>
                <h4>&nbsp;&nbsp;&nbsp;Most order right now</h4>
            </div>

            <div class="food-list">

                <?php
               
               $result=$database->getData();
               while ($row=mysqli_fetch_assoc($result)){
                $z= $row['id'];
                echo "<a href='addtocartpage.php?id=$z & uid=$userid '>";
                foodproducts($row['product_name'],$row['product_price'],$row['product_img'],$row['product_type'],$row['product_status']);
                echo "</a>";
               }
                ?>


                



            </div>
        </div>
        


    </body>
</html>