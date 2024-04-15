const CPU = document.getElementById("CPUs");
const CPUprice = document.getElementById("CPUprice");
CPU.addEventListener("change", function() {
  localStorage.setItem("newCPU", this.value);
  localStorage.setItem("CPUtext", CPUtext);
  var CPUtext = CPU.options[CPU.selectedIndex].text;
});

let newCPU = localStorage.getItem("newCPU");
var price = "Price: $";

function priceChange() {
  CPUprice.textContent = price.concat(this.value);
}
document.getElementById("CPUs").onchange = priceChange;

if (newCPU) {
  CPU.value = newCPU;
  //CPUprice.innerHTML = newCPU;
} 
CPU.onchange();

function update() {
  let cpuPrice = localStorage.getItem("newCPU");
  let casePrice = localStorage.getItem("newCase");
  let coolerPrice = localStorage.getItem("newCooler");
  let gpuPrice = localStorage.getItem("newGPU");
  let motherboardPrice = localStorage.getItem("newMotherboard");
  let ramPrice = localStorage.getItem("newRAM");
  let ssdPrice = localStorage.getItem("newSSD");
  let psuPrice = localStorage.getItem("newPSU");

  var price = (Number(cpuPrice) + Number(casePrice) + Number(coolerPrice)
    + Number(gpuPrice) + Number(motherboardPrice) + Number(ramPrice) + Number(ssdPrice) + Number(psuPrice)).toFixed(2);
  
  var tax = (price * 0.07);
  var priceWithTax = price + tax;

  subtotalPrice.textContent = subtotalPriceText.concat(price.toFixed(2));
  taxPrice.textContent = taxText.concat(tax.toFixed(2));
  totalPrice.textContent = totalPriceText.concat(priceWithTax.toFixed(2));
  }