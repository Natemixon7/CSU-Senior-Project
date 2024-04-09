const Case = document.getElementById("Cases"); 
Case.addEventListener("change", function() { 
  localStorage.setItem("newCase", this.value);
}); 

let newCase = localStorage.getItem("newCase"); 
if (newCase) Case.value = newCase;
Case.onchange();