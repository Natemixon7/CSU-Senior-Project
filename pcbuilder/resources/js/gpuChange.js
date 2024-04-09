const GPU = document.getElementById("GPUs");
GPU.addEventListener("change", function() { 
  localStorage.setItem("newGPU", this.value);
}); 

let newGPU = localStorage.getItem("newGPU"); 
if (newGPU) GPU.value = newGPU;
GPU.onchange();