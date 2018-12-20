function clear(){  
  document.getElementById('fname').style.value="";
  document.getElementById('cno').style.value="";
  document.getElementById('nic').style.value="";
  document.getElementById('email').style.value="";
  document.getElementById('course').selectedIndex="1";
}  

function validateForm(){
  var x = document.forms["stuForm"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.indexOf(".");
  if(atpos <1 || dotpos<atpos+2 || dotpos+2 >=x.length){
    alter("Not valid email");
    return false;
  }
}

  
