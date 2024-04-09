const Motherboard = document.getElementById("Motherboards"); 
Motherboard.addEventListener("change", function() { 
  localStorage.setItem("newMotherboard", this.value);
}); 

let newMotherboard = localStorage.getItem("newMotherboard"); 
if (newMotherboard) Motherboard.value = newMotherboard;
Motherboard.onchange();