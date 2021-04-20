function change(x) 
{
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var a = x.value;
    

    if(a=="")
    {
        if(x.name=="fname"){
            document.getElementById("fnameErr").innerHTML = "Name cannot be empty";
            document.getElementById("fnameErr").style.color = "red";
        }   
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "Email is required";
            document.getElementById("emailErr").style.color = "red";
        }   
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "Cannot Be Empty";
            document.getElementById("phoneErr").style.color = "red";
        }                 
        else if(x.name=="address"){
            document.getElementById("addressErr").innerHTML = "Address cannot be empty";
            document.getElementById("addressErr").style.color = "red";
        }       
        
    }
    else if((!format3.test(a)) && x.name =="email")
    {
        document.getElementById("emailErr").innerHTML = "Invalid email format";
        document.getElementById("emailErr").style.color = "red";
    }
    else if((!format2.test(a)) && x.name =="phone")
    {
        document.getElementById("phoneErr").innerHTML = "Invalid Phone Number";
        document.getElementById("phoneErr").style.color = "red";
    }
    else
    {
        if(x.name=="fname"){
            document.getElementById("fnameErr").innerHTML = "\u2713";
            document.getElementById("fnameErr").style.color = "green";
        }
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "\u2713";
            document.getElementById("emailErr").style.color = "green";
        }
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "\u2713";
            document.getElementById("phoneErr").style.color = "green";
        }
        else if(x.name=="address"){
            document.getElementById("addressErr").innerHTML = "\u2713";
            document.getElementById("addressErr").style.color = "green";
        }
        
    }

    
    
}
