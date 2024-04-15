const SSD = document.getElementById("SSDs");
const SSDprice = document.getElementById("SSDprice");
SSD.addEventListener("change", function() {
  var SSDtext = SSD.options[SSD.selectedIndex].text;
  localStorage.setItem("newSSD", this.value);
  localStorage.setItem("SSDtext", SSDtext);
});

let newSSD = localStorage.getItem("newSSD");
var price = "Price: $";

function priceChange() {
  SSDprice.textContent = price.concat(this.value);
}
document.getElementById("SSDs").onchange = priceChange;

if (newSSD) {
  SSD.value = newSSD;
}
SSD.onchange();