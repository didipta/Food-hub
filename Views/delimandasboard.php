<?php
session_start();
$userid=$_SESSION['uname'];
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
    <?php include 'header-footer/delimannavgation.php';?>
</div>
    <section id="view">
        <h2>Order Details</h2>
        <div class="contain">

            <div class="order-head">
                <div class="icon Total">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>My delivery</h4>
                    <p>135</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon pending">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>pending delivery</h4>
                    <p>35</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon Dispatched">
                <i class="fa fa-th-list" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Complete delivery</h4>
                    <p>100</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon Man">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>New Delivery</h4>
                    <p>10</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon profile">
                <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="title ptitle">
               <a href="employeeprofile.php" style="color:black;"> <h3><?php echo $username;?></h3></a>
                    <h4>@<?php echo $username;?></h4>
                </div>
    
            </div>
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

        <script src="http://localhost/project/js/calendar.js"></script>
       
</body>
</html>