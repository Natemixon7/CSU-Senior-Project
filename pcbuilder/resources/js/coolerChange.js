const CPUCooler = document.getElementById("CPUCoolers");
const Coolerprice = document.getElementById("Coolerprice");
CPUCooler.addEventListener("change", function() { 
  localStorage.setItem("newCooler", this.value);
}); 

let newCooler = localStorage.getItem("newCooler"); 
var price = "Price: $";

function priceChange() {
  Coolerprice.textContent = price.concat(this.value);
}
document.getElementById("CPUCoolers").onchange = priceChange;

if (newCooler) {
  CPUCooler.value = newCooler;
  Coolerprice.value = newCooler;
}
CPUCooler.onchange();