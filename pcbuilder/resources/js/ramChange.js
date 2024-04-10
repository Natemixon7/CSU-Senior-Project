const RAM = document.getElementById("RAM");
const RAMprice = document.getElementById("RAMprice");
RAM.addEventListener("change", function() { 
  localStorage.setItem("newRAM", this.value);
}); 

let newRAM = localStorage.getItem("newRAM");
var price = "Price: $";

function priceChange() {
  RAMprice.textContent = price.concat(this.value);
}
document.getElementById("RAM").onchange = priceChange;

if (newRAM) {
  RAM.value = newRAM;
  RAMprice.innerHTML = newRAM;
}
RAM.onchange();