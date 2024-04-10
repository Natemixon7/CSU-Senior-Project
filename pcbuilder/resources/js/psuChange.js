const PSU = document.getElementById("PSUs");
const PSUprice = document.getElementById("PSUprice");
PSU.addEventListener("change", function() { 
  localStorage.setItem("newPSU", this.value);
}); 

let newPSU = localStorage.getItem("newPSU");
var price = "Price: $";

function priceChange() {
  PSUprice.textContent = price.concat(this.value);
}
document.getElementById("PSUs").onchange = priceChange;

if (newPSU) {
  PSU.value = newPSU;
  PSUprice.innerHTML = newPSU;
}
PSU.onchange();