
const CPUCooler = document.getElementById("CPUCoolers"); 
CPUCooler.addEventListener("change", function() { 
  localStorage.setItem("newCooler", this.value);
}); 

let newCooler = localStorage.getItem("newCooler"); 
if (newCooler) CPUCooler.value = newCooler;
CPUCooler.onchange();