const SSD = document.getElementById("SSDs");
const SSDprice = document.getElementById("SSDprice");
SSD.addEventListener("change", function() { 
  localStorage.setItem("newSSD", this.value);
});

let newSSD = localStorage.getItem("newSSD");
var price = "Price: $";

function priceChange() {
  SSDprice.textContent = price.concat(this.value);
}
document.getElementById("SSDs").onchange = priceChange;

if (newSSD) {
  SSD.value = newSSD;
  SSDprice.innerHTML = newSSD;
}
SSD.onchange();