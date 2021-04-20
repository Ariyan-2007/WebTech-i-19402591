function showOwner(uname) {
    var xhttp;  
    if (uname == "") {
      document.getElementById("instruction").innerHTML = "Select an owner to show their contact details..";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("instruction").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../Model/Owners_Queries.php?q="+uname, true);
    xhttp.send();
  }