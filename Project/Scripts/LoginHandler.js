function change(x) 
{
    var a = x.value;
    if(a=="")
    {
        if(x.name=="uname")
            document.getElementById("unameErr").innerHTML = "Username cannot be empty";
        else if(x.name=="pass" && !document.getElementById("uname").value=="")
            document.getElementById("passErr").innerHTML = "Password is required";
    }
    else
    {
        if(x.name=="uname")
            document.getElementById("unameErr").innerHTML = "";
        else if(x.name=="pass")
            document.getElementById("passErr").innerHTML = "";
    }
    
}
