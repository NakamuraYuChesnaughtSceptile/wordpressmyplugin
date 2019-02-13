var element = document.createElement('div'); 
element.id = "menubutton";
element.className = "dashicons dashicons-wordpress active3";

var objBody = document.getElementsByTagName("body").item(0);
objBody.appendChild(element);

document.getElementById("menubutton").onclick = function() {

  if(document.getElementById("wpadminbar").className == "active2"){
    document.getElementById("wpadminbar").classList.add('active1');
    document.getElementById("wpadminbar").classList.remove('active2');
    element.classList.add('active3');
  }else{
    element.classList.remove('active3');
  document.getElementById("wpadminbar").classList.add('active2');
  document.getElementById("wpadminbar").classList.remove('active1');
  }
};