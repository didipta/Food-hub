<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/project/css/addemployee.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoloyee Add</title>
</head>
<body>
<div>
    <?php include 'header-footer/adminnav.php';?>
</div>

    <section name="login" id="Sign-up">
        
        <form class="sign-up-form" method="POST">
            <h2 class="title">Add Employee</h2>
            <div class="input-field">
              <i class="fa fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" />
            </div>

           <div class="input-field">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input type="text" name="salary" id="add" placeholder="Add Salary">
            </div>

            <div class="input-field">
              <i class="fa fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div class="input-field">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="integer" name="phn" id="phn" placeholder="Phone number"><br><span></span>
              </div>

              <div class="input-field">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" name="uid" id="uid" placeholder="User id">
              </div>
              
            <div class="input-field">
              <i class="fa fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <div class="eye" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
            </div>

            <div class="input-field">
                <i class="fa fa-lock"></i>
                <select name="productType" class="selecttype">
                    <option value="">--Select--</option>
                    <option value="POPULAR">POPULAR</option>
                    <option value="LUNCH">LUNCH</option>
                    <option value="SNACK">SNACK</option>
                    <option value="DINNER">DINNER</option>
                    
                </select>
              </div>
              <div style="display: flex; padding: ;:10px;">
                <input type="submit"  id="submitreg"  class="btn" value="Save" /><br>
                <input type="submit"  id="submitreg"  class="btn" value="Cancel" />

              </div>
            
        </form>
    
    </section>
    <section id="order-list">
        <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Employee List</div>
        <div class="list-heading">
            <table  class="list-table">
                <tr  class="list-td">
                    <th>id </th>
                    <th>Namee</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>User_id</th>
                    <th>PhoneNum</th>
                    <th>Emptype</th>
                    <th>Action</th>
            </tr>
            <tr  class="list-tr">
                <td>1</td>
                <td>Dipta saha</td>
                <td>road-18,nikunjo,dhaka</td>
                <td>22,000</td>
                <td>110-12342</td>
                <td>0191302929</td>
                <td>Staff</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Delete</p>
                </div>
                </td>
            </tr>
            <tr  class="list-tr">
                <td>1</td>
                <td>Dipta saha</td>
                <td>road-18,nikunjo,dhaka</td>
                <td>22,000</td>
                <td>110-12342</td>
                <td>0191302929</td>
                <td>Staff</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Delete</p>
                </div>
                </td>
            </tr>
            
        </table>
    </div>
    </section>

    <script>

        function myFunction(){
        var x= document.getElementById("password");
        var y= document.getElementById("cpassword");
        if(x.type==="password" || y.type==="password" )
        {
            x.type="text";
            y.type="text";
         
    
        }
        else{
            x.type="password";
            y.type="password";
        }
        }

        
    </script>
</body>
</html>