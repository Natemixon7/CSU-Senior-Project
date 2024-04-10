const Case = document.getElementById("Cases");
const Caseprice = document.getElementById("Caseprice");
Case.addEventListener("change", function() { 
  localStorage.setItem("newCase", this.value);
}); 

let newCase = localStorage.getItem("newCase");
var price = "Price: $";

function priceChange() {
  Caseprice.textContent = price.concat(this.value);
}
document.getElementById("Cases").onchange = priceChange;

if (newCase) {
  Case.value = newCase;
  Caseprice.innerHTML = newCase;
}
Case.onchange();