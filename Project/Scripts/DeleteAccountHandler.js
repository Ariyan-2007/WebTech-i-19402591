

function trigger1()
{
    document.getElementById("confirm").style.display = "block";
}


function trigger2()
{
    window.location.href = "../View/Profile.php";
}


    
    



function change(x,y) 
{
    var a = x.value;
    

    if(a=="")
    {
        if(x.name=="pass"){
            document.getElementById("passErr").innerHTML = "Password is required";
            document.getElementById("passErr").style.color = "red";
        }       
        else if(x.name=="rpass" && !document.getElementById("pass").value==""){
            document.getElementById("rpassErr").innerHTML = "Re-type the Password";
            document.getElementById("rpassErr").style.color = "red";
        }       
    }
    else if(a!=spass)
    {
        if(x.name=="pass"){
            document.getElementById("passErr").innerHTML = "Wrong Password!";
            document.getElementById("passErr").style.color = "red";
        }       
        else if(x.name=="rpass" && document.getElementById("pass").value==spass){
            document.getElementById("rpassErr").innerHTML = "Password Doesn't Match!";
            document.getElementById("rpassErr").style.color = "red";
        }   
    }
    else
    {
        if(x.name=="pass"){
            document.getElementById("passErr").innerHTML = "\u2713";
            document.getElementById("passErr").style.color = "green";
        }
        else if(x.name=="rpass"  && x.value==document.getElementById("pass").value ){
            document.getElementById("rpassErr").innerHTML = "\u2713";
            document.getElementById("rpassErr").style.color = "green";
        }
    }
}


