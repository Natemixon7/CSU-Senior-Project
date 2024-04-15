const Motherboard = document.getElementById("Motherboards");
const Motherboardprice = document.getElementById("Motherboardprice");
Motherboard.addEventListener("change", function() {
  var Motherboardtext = Motherboard.options[Motherboard.selectedIndex].text;
  localStorage.setItem("newMotherboard", this.value);
  localStorage.setItem("Motherboardtext", Motherboardtext);
}); 

let newMotherboard = localStorage.getItem("newMotherboard");
var price = "Price: $";

function priceChange() {
  Motherboardprice.textContent = price.concat(this.value);
}
document.getElementById("Motherboards").onchange = priceChange;

if (newMotherboard) {
  Motherboard.value = newMotherboard;
}
Motherboard.onchange();