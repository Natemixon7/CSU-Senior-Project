const CPUCooler = document.getElementById("CPUCoolers");
const Coolerprice = document.getElementById("Coolerprice");
CPUCooler.addEventListener("change", function() {
  var Coolertext = CPUCooler.options[CPUCooler.selectedIndex].text;
  localStorage.setItem("newCooler", this.value);
  localStorage.setItem("Coolertext", Coolertext);
}); 

let newCooler = localStorage.getItem("newCooler"); 
var price = "Price: $";

function priceChange() {
  Coolerprice.textContent = price.concat(this.value);
}
document.getElementById("CPUCoolers").onchange = priceChange;

if (newCooler) {
  CPUCooler.value = newCooler;
}
CPUCooler.onchange();