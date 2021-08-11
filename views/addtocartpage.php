<?php
$con=new mysqli('localhost','root','','Productdb');
$id=$_GET['id'];
$sql="SELECT *FROM producttb where id='".$id."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $productname=$row['product_name'];
    $productprice=$row['product_price'];
    $productimg=$row['product_img'];
}

?>

<?php
$userid=$_GET['uid'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Addtocartpage.css">
    <link rel="stylesheet" href="css/jquery.nice-number.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Order page</title>
</head>
<body>
    <div>
    <?php include 'header-footer/header.php';?>
   </div>


    <section id="contain">
        <div class="boxs">
            <div class="ads"><p><?php echo $address;?> <i class="fa fa-pencil" aria-hidden="true"></i></p></div>
            <div class="order-now"><h4>Order Now</h4> </div>
            <div class="items">
                <div class="img"><img src="<?php echo $productimg; ?>" alt=""></div>
                <div class="title"> 

                    <h1 id="productname"><?php echo $productname;?></h1>
                    <p>Very tasty!!!</p>
                    <div class="price-number">
                    <div class="input"><input type="number" name="" id="value" value="1" min="1" ></div>
                    <p >Only <span id="price"><?php echo $productprice;?></span>/-</p>
                    </div> 
                    
                    <input type="submit" value="Add to cart " class="btn" onclick="cl()" >
                <p id="username" style="display:none;"><?php echo $username;?></span></p>
                <p id="userid" style="display:none;"><?php echo $userid;?></span></p>
                <p id="userpho" style="display:none;"><?php echo $phone;?></span></p>
                <p id="useremail" style="display:none;"><?php echo $Email;?></span></p>
               
            </div>
           
            
            </div>

            <div class="detalis">
                <div class="details-box">
                    <input type="radio" name="detalis-item" id="check1" checked>
                    <input type="radio" name="detalis-item" id="check2">
                    <input type="radio" name="detalis-item" id="check3">
                   

                    <div class="top-content">
                        <label for="check1" class="r">Rating(10)</label>
                        <label for="check2" class="f">Feedbacks(10)</label>
                        <label for="check3" class="d">Detailed info</label>
                        </div>

                        <div class="title-Rating Rating titles">
                            <h3>Rating</h3>
                          
                        </div>
            
                        <div class="title-Feedbacks Feedbacks titles">
                            <h3>Feedbacks</h3>
                         
                        </div>
            
                        <div class="title-Detailed Detailed titles">
                            <h3>Detailed info</h3>
                         </div>
                         
                         <div class="Detail-list">

                        <div class="Detaild Rating">
                                <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                </p>
                                 <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                </p>
                                <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </p>
                                    <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </p>
                               
                            </div>
            
                            <div class="Detaild Feedbacks">
                                <p style="display: flex;"><input type="text" name="" id="" placeholder="Enater your own feedback"><input type="submit" value="send" style="width: 50px; background-color: black; color: rgb(255, 255, 255); cursor: pointer;"></p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>

                            </div>
            
                            <div class="Detaild Detailed">
                                <h3>Nikunjo-2,road=18,Dhaka,Bangladesh<i class="fa fa-pencil" aria-hidden="true"></i></h3>
                                <h3>Delivery Charge:45/-</h3>
                                <h3>Delivery time :20-30 min</h3>
                                
                            </div>
                            </div>



                </div>
            </div>
        </div>


    </section>

    <section class="payment" id="back">
       
       <h1>CONFIRMATION</h1>
       <div class="paymentmethod">
       <div class="orderaddre">
           <span style="display: flex;" >Order number:  <p style="padding-left: 10px; color: rgb(56, 149, 255);" id="orderid">FOHD#<?php echo ($numor+1235445);?></p></span>
           <p style=" color: rgb(105, 105, 105);" id="address"><?php echo $address;?> </p>
           <h2 style="font-size: 1.7rem; color: rgb(0, 0, 0);letter-spacing: 3px;"><?php echo $productname?></h2>
       </div>
       <div class="price">
        <h4 style="font-size: 1.3rem; font-weight: bolder; letter-spacing: 5px;">Product Price</h4>
        <div style="display: flex; margin-left:100px ; font-size:1.3rem ; font-weight: bolder; color: rgb(97, 96, 96);"><p id="zx"></p>*<p id="xy"></p></div>
        <h3 style="margin-left: 70px; font-size: 1.4rem; font-weight: bolder;"><span id="sd"></span>/-</h3>

       </div>

       <div class="price">
        <h4 style="font-size: 1.3rem; font-weight: bolder; letter-spacing: 5px;">Delivery Charge</h4>
        <h3 style="margin-left: 190px; font-size: 1.4rem; font-weight: bolder;">45/-</h3>

       </div>

       <div class="price">
        <h4 style="font-size: 1.3rem; font-weight: bolder; letter-spacing: 5px;">Total Prices</h4>
        <h3 style="margin-left: 240px; font-size: 1.4rem; font-weight: bolder;"><span id="cx"></span>/-</h3>

       </div>

       <a href="addtocartpage.php?id=<?php echo $id ;?> & uid=<?php echo $userid; ?>"><input type="submit" value="Back" class="btn" style="margin-left: 100px; box-shadow: 5px 5px 5px 5px rgba(182, 182, 182, 0.548);" ></a>

    </div>
    <div class="paymentmethod">
        <div class="orderaddre" style="text-align: center;">
            <h2 style="letter-spacing: 15px;">Payment Type</h2>
            <div class="paytype" style="margin-left:60px;">
                <img src="img/bkash.jpg" alt="" id="bkask" title="bkash payment" onclick="bkashclick()">
                <img src="img/cashin.png" alt="" id="cashin" title="Cash in payment" onclick="cashclick()" >
                <img src="img/card.png" alt="" title="card payment" onclick="cardclick()">
    
            </div>
          <div class="bkash" id="bkashback">
              <img src="img/bkash.jpg" alt=""><br>
              
              <input type="text" placeholder="Enter your mobile number" id="id" required>
              <input type="password" placeholder="Enter your password" id="pass" required>
            <input type="submit" value="Confirm" class="btn" style=" box-shadow: 5px 5px 5px 5px rgba(182, 182, 182, 0.548);" onclick="paymentsuccessbkask()" >
            
          </div>

          <div class="bkash" id="cashback">
            <img src="img/cashin.png" alt=""><br>
            
            <input type="submit" value="Confirm" class="btn" style=" box-shadow: 5px 5px 5px 5px rgba(182, 182, 182, 0.548);" onclick="cashsuccess()" >
        
        </div>
        <div class="bkash " id="cardback">
            <img src="img/card.png" alt=""><br>
            
            <input type="text" placeholder="Enter your user id" id="idC" required>
            <input type="password" placeholder="Enter your password" id="passC" required>
            <input type="submit" value="Confirm" class="btn" style=" box-shadow: 5px 5px 5px 5px rgba(182, 182, 182, 0.548);" onclick="paymentsuccesscard()" >
            
        </div>
        </div>
        


    </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery.nice-number.js"></script>
    <script src="js/addtocard.js"></script>

    <script>

        $(function(){

            $('input[type="number"]').niceNumber();

            });
    </script>
</body>
</html>