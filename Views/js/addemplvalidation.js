
    var username=document.forms["emform"]["username"];
    var salary=document.forms["emform"]["salary"];
    var email=document.forms["emform"]["email"];
    var phn=document.forms["emform"]["phn"];
    var uid=document.forms["emform"]["uid"];
    var password=document.forms["emform"]["password"];
    var employetype=document.forms["emform"]["employetype"];

    username.addEventListener("blur",nameverfi,true);
    salary.addEventListener("blur",salaryverfi,true);
    email.addEventListener("blur",emailverfi,true);
    phn.addEventListener("blur",phnverfi,true);
    uid.addEventListener("blur",uidverfi,true);
    password.addEventListener("blur",passwordverfi,true);
    employetype.addEventListener("blur",employetypeverfi,true);

function validateinput(){

    if(username.value == "")
    {
        document.getElementById("user").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("user").focus();
        return false;
    }
    if(salary.value == "")
    {
        document.getElementById("sal").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("sal").focus();
        return false;
    }

    if(email.value == "")
    {
        document.getElementById("em").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("em").focus();
        return false;
    }
    if(phn.value == "")
    {
        document.getElementById("pho").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("pho").focus();
        return false;
    }
    if(uid.value == "")
    {
        document.getElementById("ui").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("ui").focus();
        return false;
    }
    if(password.value == "")
    {
        document.getElementById("pass").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("pass").focus();
        return false;
    }
    if(employetype.value == "")
    {
        document.getElementById("emp").style.border = "2px solid rgb(255, 76, 76)";
        document.getElementById("emp").focus();
        return false;
    }

    

}
 
function nameverfi()
{
    if(username.value != "")
    {
        document.getElementById("user").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}
function salaryverfi()
{
    if(salary.value != "")
    {
        document.getElementById("sal").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}
  
function emailverfi()
{
    if(email.value != "")
    {
        document.getElementById("em").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}

function phnverfi()
{
    if(phn.value != "")
    {
        document.getElementById("pho").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}

function uidverfi()
{
    if(phn.value != "")
    {
        document.getElementById("ui").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}

function passwordverfi()
{
    if(password.value != "")
    {
        document.getElementById("pass").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}

function employetypeverfi()
{
    if(employetype.value != "")
    {
        document.getElementById("emp").style.border = "2px solid rgb(142, 255, 76)";
        return false;
    }
}