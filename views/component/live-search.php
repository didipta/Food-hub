<?php
$rowstatus=0;
$rows=0;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
$output="";

$sql="SELECT * FROM producttb WHERE product_name LIKE '%".$_POST['search']."%'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
    $output .='<h4 align="center">Search Result</h4>';
    $output .="<table class='list-table'>
    <tr class='s-list-td'>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>type</th>
      <th>img</th>
      <th>status</th>
      <th>Action</th>
    </tr>";
       while ($row=mysqli_fetch_array($result))
       {
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

                
              $output .="<tr class='list-tr'>
                <td>$a</td>
                <td>$b</td>
                <td>$c</td>
                <td>$f</td>
                <td>$d</td>
              
                
                
                <td><label class='switch'>
              <input type='checkbox'  onclick='status($a)' id='check' $x >
              <span class='slider round'></span>
            </label></td>

            <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
            <div class='edit-delet'>
            <div style=' '> <a href='product.php?eid=$a & type=block'><input type='submit' value='Edit' style='cursor: pointer; background:none; border:none;' onclick='edits()' id='check'></a></div>
                <div style=' '> <input type='submit' value='Delete' style='cursor: pointer; background:none; border:none;' onclick='deletes($a)' id='check'></div>
            </div>

              </tr>";
    }
    echo $output;
}
else
{
    echo "Data not found";
}
         




?>