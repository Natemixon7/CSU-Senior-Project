const GPU = document.getElementById("GPUs");
const GPUprice = document.getElementById("GPUprice");
GPU.addEventListener("change", function() {
  var GPUtext = GPU.options[GPU.selectedIndex].text;
  localStorage.setItem("newGPU", this.value);
  localStorage.setItem("GPUtext", GPUtext);
}); 

let newGPU = localStorage.getItem("newGPU");
var price = "Price: $";

function priceChange() {
  GPUprice.textContent = price.concat(this.value);
}
document.getElementById("GPUs").onchange = priceChange;

if (newGPU) {
  GPU.value = newGPU;
}
GPU.onchange();