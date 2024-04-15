const RAM = document.getElementById("RAM");
const RAMprice = document.getElementById("RAMprice");
RAM.addEventListener("change", function() {
  var RAMtext = RAM.options[RAM.selectedIndex].text;
  localStorage.setItem("newRAM", this.value);
  localStorage.setItem("RAMtext", RAMtext);
}); 

let newRAM = localStorage.getItem("newRAM");
var price = "Price: $";

function priceChange() {
  RAMprice.textContent = price.concat(this.value);
}
document.getElementById("RAM").onchange = priceChange;

if (newRAM) {
  RAM.value = newRAM;
}
RAM.onchange();