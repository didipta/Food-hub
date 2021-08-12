<?php
session_start();
$userid=$_SESSION['uname'];
require_once($_SERVER['DOCUMENT_ROOT'].'/Food-Hub-restaurant/Model(database)/productdatabase.php');

$database=new createDb("Productdb","ProductTB");

$productname =$productprice=$filename =$productimg=$productType="";
$rows=0;
$rowstatus=0;
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STaff-dashboad.css">
    <link rel="stylesheet" href="css/calendar.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Dashboard</title>
    <style>
       .navigation .Dashboard{
            background-color: rgb(82, 82, 82);
            border-radius: 3px;
            color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>
 
<div>
    <?php include 'header-footer/staffnavgation.php';?>
</div>
    <section id="view">
        <h2>Order Details</h2>
        <div class="contain">

            <div class="order-head">
                <div class="icon Total">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total Order</h4>
                    <p>1150</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon pending">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total pending Order</h4>
                    <p>150</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon Dispatched">
                <i class="fa fa-th-list" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total Dispatched</h4>
                    <p>1000</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon Man">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Delivery Man</h4>
                    <p>210</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon profile">
                <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="title ptitle">
                <a href="staffprofile.php?id=<?php echo $userid;?>" style="color:black;"> <h3><?php echo $username;?></h3></a>
                    <h4>@<?php echo $username;?></h4>
                </div>
    
            </div>
        </div>
       
    </section>
    <section id="order-list">
    <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Pending Orders</div>
        <div class="list-heading">
            <table  class="list-table">
                <tr  class="list-td">
                    <th>Order-id </th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
            </tr>
           <?php
            for($x=0;$x<=10;$x++)
            {
                echo "<tr  class='list-tr'>
                <td>#ORFH123423</td>
                <td>Dipta saha</td>
                <td>road-18,nikunjo,dhaka</td>
                <td>11/03/2021</td>
                <td>1,200</td>
                <td style='color:red;'>pending</td>
                <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
                <div class='edit-delet'>
                    <p>Edit</p>
                    <p style='margin-top: -15px;'>Delete</p>
                </div>
            </tr>";
            }
           ?>

            
        </table>
        </div>
        <div class="list-footer">
            <a href="#">Sce More</a>
        </div>
    </section>

    <section id="calender" class="light " >
        
        <div class="calendar cal">
        <div style="text-align: center; font-size: 1.2rem; font-weight: 900;">Calendar</div>
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">February</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2021</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="calendar-days"></div>
            </div>
            <div class="month-list"></div>
        </div>
        </section>

        <section id="emp-list">
            <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Most Order Person</div>
            <table  class="eml-list-table">
                <tr  class="eml-list-td">
                    <th>id </th>
                    <th>Name</th>
                    <th>Total Order</th>
                    <th>Status</th>
            </tr>
            <?php
            for($x=0;$x<=10;$x++)
            {
                echo " <tr  class='eml-list-tr'>
                <td>111-1234</td>
                <td>Dipta saha</td>
                <td>40</td>
                <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
                <div class='edit-delet'>
                    <p>Edit</p>
                    <p style='margin-top: -15px;''>Delete</p>
                </div>
                </td>
            </tr>";
            }
           ?>
           
            
        </table>
        </section>
        <section id="Product-Details">
            <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Stock Details</div>
            <table  class="Product-list-table">
                <tr  class="Product-list-td">
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>Status</th>
                    <th>Price</th>
            </tr>

            <?php
               
               $result=$database->getData();
               for($r=0;$r<=6;$r++)
               {
               $row=mysqli_fetch_assoc($result);
               $a=$row['id'];
               $b=$row['product_name'];
               $c=$row['product_price'];
               $d=$row['product_img'];
               $f=$row['product_type'];
               $g=$row['product_status'];
               $ch="";
               if($g== "on"){$x="checked"; $rowstatus++;}
               else{$x="";}
               $rows=$rows+1;
                echo"
                <tr class='Product-list-tr'>
                <td>$b</td>
                <td>$f</td>
                
              
                
                
                <td><label class='switch'>
              <input type='checkbox'  onclick='status($a)'onclick='status($a)' id='check' $x >
              <span class='slider round'></span>
            </label></td>
            <td>$c</td>

              </tr> 
                
                ";
                
               }
                ?>

            
            
        </table>
        <div class="list-footer">
            <a href="product.php?eid= & type=">Sce More</a>
        </div>
        </section>
        <script src="http://localhost/project/js/calendar.js"></script>

        <script>

  function status(id){
   
    var id=id;
    swal('Done!', '', 'success');
    $.ajax({
      url:"./component/status.php",
      type:"post",
      data:{catId:id}
    });
  }

  function refresh()
  {
    swal('Done!', '', 'success');
  }

  </script>
</body>
</html>