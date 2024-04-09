const RAM = document.getElementById("RAM"); 
RAM.addEventListener("change", function() { 
  localStorage.setItem("newRAM", this.value);
}); 

let newRAM = localStorage.getItem("newRAM"); 
if (newRAM) RAM.value = newRAM;
RAM.onchange();