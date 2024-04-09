const SSD = document.getElementById("SSDs"); 
SSD.addEventListener("change", function() { 
  localStorage.setItem("newSSD", this.value);
}); 

let newSSD = localStorage.getItem("newSSD"); 
if (newSSD) SSD.value = newSSD;
SSD.onchange();