var infodata={};
document.getElementById("xy").innerHTML=value;
var price=document.getElementById("price").innerHTML;
infodata.username=document.getElementById("username").innerHTML;
infodata.userid=document.getElementById("userid").innerHTML;
infodata.useraddress=document.getElementById("address").innerHTML;
infodata.orderid=document.getElementById("orderid").innerHTML;
infodata.Qantity="";
infodata.productprice=document.getElementById("price").innerHTML;
infodata.toprice="";
infodata.userphone=document.getElementById("userpho").innerHTML;
infodata.useremail=document.getElementById("useremail").innerHTML;
infodata.productname=document.getElementById("productname").innerHTML;
infodata.productstatus="Your Order is Processing";

function cl(){
    document.getElementById("back").style.display = "block";
    var value=document.getElementById("value").value;
    document.getElementById("xy").innerHTML=value;
    var price=document.getElementById("price").innerHTML;
    document.getElementById("zx").innerHTML=price;
    document.getElementById("sd").innerHTML=(value*price);
    document.getElementById("cx").innerHTML=(value*price)+45;
    infodata.toprice=(value*price)+45;
    infodata.Qantity=value;
}

function paymentsuccessbkask(){
    var x=document.getElementById("id").value;
    var y=document.getElementById("pass").value;
    if(x!="" && y!="")
    {
     infodata.paymenttype="Bkash";
     console.log(infodata)
     swal('Good job!', 'Order is Successful received.', 'success');
     $.ajax({
        url:"./component/productorder.php",
        type:"post",
        data:infodata
      });
    
    }
    else
    {
     swal('Sorry!', 'Please Enter Required section .', 'error');
    }
    
    
}

function paymentsuccesscard(){

    var x1=document.getElementById("idC").value;
    var y1=document.getElementById("passC").value;
  
    if(x1!="" && y1!="")
    {
        infodata.paymenttype="Card";
     swal('Good job!', 'Order is Successful received.', 'success');
     $.ajax({
      url:"./component/productorder.php",
      type:"post",
      data:infodata
    });
    
    }
    else
    {
     swal('Sorry!', 'Please Enter Required section .', 'error');
    }
    
    
}
function cashsuccess(){
    infodata.paymenttype="Cash";
    
     swal('Good job!', 'Order is Successful received.', 'success');
     $.ajax({
      url:"./component/productorder.php",
      type:"post",
      data:infodata
    });
    
    
}


       function bkashclick(){
             
             document.getElementById("bkashback").style.display = "block";
             document.getElementById("cardback").style.display = "none";
             document.getElementById("cashback").style.display = "none";
           }
           function cashclick(){
             document.getElementById("bkashback").style.display = "none";
             document.getElementById("cashback").style.display = "block";
             document.getElementById("cardback").style.display = "none";
           }
           function cardclick(){
             document.getElementById("bkashback").style.display = "none";
             document.getElementById("cashback").style.display = "none";
             document.getElementById("cardback").style.display = "block";
           }