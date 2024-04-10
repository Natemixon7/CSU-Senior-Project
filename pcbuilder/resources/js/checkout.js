const totalPrice = document.getElementById("totalPrice");
//const cpuName = document.getElementById("cpuName");
var priceText = "Total Price: $";
//var ltext = "yo";
    
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

//let updateName = localStorage.getItem("cpuName");

//cpuName.innerHTML = updateName;