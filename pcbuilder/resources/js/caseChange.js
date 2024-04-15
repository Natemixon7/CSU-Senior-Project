const Case = document.getElementById("Cases");
const Caseprice = document.getElementById("Caseprice");
Case.addEventListener("change", function() {
  var Casetext = Case.options[Case.selectedIndex].text;
  localStorage.setItem("newCase", this.value);
  localStorage.setItem("Casetext", Casetext);
}); 

let newCase = localStorage.getItem("newCase");
var price = "Price: $";

function priceChange() {
  Caseprice.textContent = price.concat(this.value);
}
document.getElementById("Cases").onchange = priceChange;

if (newCase) {
  Case.value = newCase;
}
Case.onchange();