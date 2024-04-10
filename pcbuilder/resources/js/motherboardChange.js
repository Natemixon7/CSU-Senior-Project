const Motherboard = document.getElementById("Motherboards");
const Motherboardprice = document.getElementById("Motherboardprice");
Motherboard.addEventListener("change", function() { 
  localStorage.setItem("newMotherboard", this.value);
}); 

let newMotherboard = localStorage.getItem("newMotherboard");
var price = "Price: $";

function priceChange() {
  Motherboardprice.textContent = price.concat(this.value);
}
document.getElementById("Motherboards").onchange = priceChange;

if (newMotherboard) {
  Motherboard.value = newMotherboard;
  Motherboardprice.innerHTML = newMotherboard;
}
Motherboard.onchange();