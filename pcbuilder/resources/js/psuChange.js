const PSU = document.getElementById("PSUs");
const PSUprice = document.getElementById("PSUprice");
PSU.addEventListener("change", function() {
  var PSUtext = PSU.options[PSU.selectedIndex].text;
  localStorage.setItem("newPSU", this.value);
  localStorage.setItem("PSUtext", PSUtext);
}); 

let newPSU = localStorage.getItem("newPSU");
var price = "Price: $";

function priceChange() {
  PSUprice.textContent = price.concat(this.value);
}
document.getElementById("PSUs").onchange = priceChange;

if (newPSU) {
  PSU.value = newPSU;
}
PSU.onchange();