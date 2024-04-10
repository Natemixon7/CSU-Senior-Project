const totalPrice = document.getElementById("totalPrice");
var priceText = "Total Price: $";

const CPU = document.getElementById("CPUs");
CPU.addEventListener("change", function() { 
    localStorage.setItem("newCPU", this.value);
    update();
});

const Case = document.getElementById("Cases");
Case.addEventListener("change", function() { 
  localStorage.setItem("newCase", this.value);
  update();
}); 

const CPUCooler = document.getElementById("CPUCoolers");
CPUCooler.addEventListener("change", function() { 
  localStorage.setItem("newCooler", this.value);
  update();
}); 

const GPU = document.getElementById("GPUs");
GPU.addEventListener("change", function() { 
  localStorage.setItem("newGPU", this.value);
  update();
}); 

const Motherboard = document.getElementById("Motherboards");
Motherboard.addEventListener("change", function() { 
  localStorage.setItem("newMotherboard", this.value);
  update();
}); 

const PSU = document.getElementById("PSUs");
PSU.addEventListener("change", function() { 
  localStorage.setItem("newPSU", this.value);
  update();
}); 

const RAM = document.getElementById("RAM");
RAM.addEventListener("change", function() { 
  localStorage.setItem("newRAM", this.value);
  update();
}); 

const SSD = document.getElementById("SSDs");
SSD.addEventListener("change", function() { 
  localStorage.setItem("newSSD", this.value);
  update();
});

function update() {
    let cpuPrice = localStorage.getItem("newCPU");
    let casePrice = localStorage.getItem("newCase");
    let coolerPrice = localStorage.getItem("newCooler");
    let gpuPrice = localStorage.getItem("newGPU");
    let motherboardPrice = localStorage.getItem("newMotherboard");
    let ramPrice = localStorage.getItem("newRAM");
    let ssdPrice = localStorage.getItem("newSSD");
    let psuPrice = localStorage.getItem("newPSU");

    var price = parseFloat(cpuPrice) + parseFloat(casePrice) + parseFloat(coolerPrice)
    + parseFloat(gpuPrice)+ parseInt(motherboardPrice) + parseInt(ramPrice) + parseInt(ssdPrice) + parseInt(psuPrice);
    
    totalPrice.innerHTML = priceText.concat(price);
}

    let cpuPrice = localStorage.getItem("newCPU");
    let casePrice = localStorage.getItem("newCase");
    let coolerPrice = localStorage.getItem("newCooler");
    let gpuPrice = localStorage.getItem("newGPU");
    let motherboardPrice = localStorage.getItem("newMotherboard");
    let ramPrice = localStorage.getItem("newRAM");
    let ssdPrice = localStorage.getItem("newSSD");
    let psuPrice = localStorage.getItem("newPSU");

    var price = parseFloat(cpuPrice) + parseFloat(casePrice) + parseFloat(coolerPrice)
    + parseFloat(gpuPrice)+ parseInt(motherboardPrice) + parseInt(ramPrice) + parseInt(ssdPrice) + parseInt(psuPrice);
    
    totalPrice.innerHTML = priceText.concat(price);



