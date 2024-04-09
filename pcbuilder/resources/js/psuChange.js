const PSU = document.getElementById("PSUs"); 
PSU.addEventListener("change", function() { 
  localStorage.setItem("newPSU", this.value);
}); 

let newPSU = localStorage.getItem("newPSU"); 
if (newPSU) PSU.value = newPSU;
PSU.onchange();