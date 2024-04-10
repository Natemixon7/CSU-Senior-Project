const CPU = document.getElementById("CPUs");
const CPUprice = document.getElementById("CPUprice");
CPU.addEventListener("change", function() { 
  localStorage.setItem("newCPU", this.value);
  localStorage.setItem("cpuName", CPU.innerHTML);
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