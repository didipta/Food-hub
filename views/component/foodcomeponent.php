<?php
function foodproducts($poproductname,$poproductprice,$productimg ,$producttype,$status){
    $elemented="  
     <div class='food $producttype $status'>
     <img src='$productimg'>
    <h3>$poproductname</h3>
    <h4>$poproductprice</h4>
    </div>

    ";
    echo $elemented;
}
?>