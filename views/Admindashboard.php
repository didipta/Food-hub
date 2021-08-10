<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/Admin-Dasboa.css">
    <link rel="stylesheet" href="css/calendar.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="/project/js/chart.js"></script>
    <title>Dashboard</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
    <style>
       .navigation .Dashboard{
              background-color: rgb(59, 121, 214);
             border-radius: 3px;
              color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>
<div>
    <?php include 'header-footer/adminnav.php';?>
</div>

    <section id="view">
        <h2>Website Statistics</h2>
        <div class="contain">
            <div class="user">
                <div class="icon users">
                <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Users</h4>
                    <p>150,123</p>
                </div>
    
            </div>

            <div class="user">
                <div class="icon Employees">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Employees</h4>
                    <p>250</p>
                </div>
    
            </div>

            <div class="user">
                <div class="icon fiteam">
                <i class="fa fa-th-large" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Food Item</h4>
                    <p>1,152</p>
                </div>
    
            </div>

            <div class="user">
                <div class="icon Complain">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Complain</h4>
                    <p>123</p>
                </div>
    
            </div>


            <div class="user">
                <div class="icon profile">
                <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="title ptitle">
                    <h3>Dipta Saha</h3>
                    <h4>@diptasaha</h4>
                </div>
    
            </div>
        </div>
       
    </section>


    <section id="Chart-bar">
        <div class="chart-title">
            <p>Monthly selling</p>
        </div>
        <div class="chart">
            <ul class="number">
                <li><span>100%</span></li>
                <li><span>75%</span></li>
                <li><span>50%</span></li>
                <li><span>25%</span></li>
                <li><span>0%</span></li>
            </ul>
            <ul class="bars">
            <li><div class="bar" data-percentage="55"></div><span>Jan</span> </li>
            <li><div class="bar" data-percentage="65"></div><span>Feb</span> </li>
            <li><div class="bar" data-percentage="71"></div><span>Mar</span> </li>
            <li><div class="bar" data-percentage="75"></div><span>Apr</span> </li>
            <li><div class="bar" data-percentage="81"></div><span>May</span> </li>
            <li><div class="bar" data-percentage="88"></div><span>Jun</span> </li>
            <li><div class="bar" data-percentage="82"></div><span>Aug</span> </li>
            <li><div class="bar" data-percentage="75"></div><span>Sep</span> </li>
            <li><div class="bar" data-percentage="70"></div><span>Oct</span> </li>
            <li><div class="bar" data-percentage="95"></div><span>Nov</span> </li>
            <li><div class="bar" data-percentage="97"></div><span>Dec</span> </li>
            </ul>
        </div>
        
        
    </section>

    <div class="ivse">
         <div class="ivse-title">
             <p>Investment vs Income</p>
        </div>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
       </div>

    <section id="chart-pie">
        <div class="chartpie-title">
            <p>Users Rating</p>
        </div>
        <div class="piechart">
            <h4>92%</h4>
            <h5>8%</h5>
        </div>
        <div style="display:flex;">
            <div class="info">
                <span style="background-color: rgb(53, 150, 214);"></span>&nbsp;&nbsp;<p>Good Rating</p>
            </div>
            <div class="info">
                <span style="background-color: rgb(226, 98, 98);"></span>&nbsp;&nbsp;<p>Bad Rating</p>
            </div>
        </div>
       
        
       
    </section>

    <section id="map">
    <h2>Google Map Location Identify</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746984.5371402493!2d88.10008483443673!3d23.490580540484256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1625057808739!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>


    <section id="items-bar">
        <div class="item-bar-title">
            <p>Indivisible items selling</p>
        </div>
        <div class="charts">
            <ul class="item-bars">
            <li><div class="item-bar" data-percentage="75"></div><span>Breakfast items</span> </li>
            <li><div class="item-bar" data-percentage="89"></div><span>Lunch items</span> </li>
            <li><div class="item-bar" data-percentage="95"></div><span>Snack items</span> </li>
            <li><div class="item-bar" data-percentage="75"></div><span>Dinner items</span> </li>
            <li><div class="item-bar" data-percentage="81"></div><span>Special items</span> </li>
            <li><div class="item-bar" data-percentage="90"></div><span>Drinks items</span> </li>
            </ul>
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
        <script src="js/calendar.js"></script>

</body>
</html>