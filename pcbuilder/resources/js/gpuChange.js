const GPU = document.getElementById("GPUs");
const GPUprice = document.getElementById("GPUprice");
GPU.addEventListener("change", function() { 
  localStorage.setItem("newGPU", this.value);
}); 

let newGPU = localStorage.getItem("newGPU");
var price = "Price: $";

function priceChange() {
  GPUprice.textContent = price.concat(this.value);
}
document.getElementById("GPUs").onchange = priceChange;

if (newGPU) {
  GPU.value = newGPU;
  GPUprice.innerHTML = newGPU;
}
GPU.onchange();