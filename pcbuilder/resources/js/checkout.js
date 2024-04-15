const totalPrice = document.getElementById("totalPrice");
const Coolertext = document.getElementById("Coolertext");
const CPUtext = document.getElementById("CPUtext");
const Casetext = document.getElementById("Casetext");
const GPUtext = document.getElementById("GPUtext");
const Motherboardtext = document.getElementById("Motherboardtext");
const PSUtext = document.getElementById("PSUtext");
const RAMtext = document.getElementById("RAMtext");
const SSDtext = document.getElementById("SSDtext");


var priceText = "Total Price: $";

    
let cpuPrice = localStorage.getItem("newCPU");
let newCPUtext = localStorage.getItem("CPUtext");

let casePrice = localStorage.getItem("newCase");
let newCasetext = localStorage.getItem("Casetext");

let coolerPrice = localStorage.getItem("newCooler");
let newCoolertext = localStorage.getItem("Coolertext");

let gpuPrice = localStorage.getItem("newGPU");
let newGPUtext = localStorage.getItem("GPUtext");

let motherboardPrice = localStorage.getItem("newMotherboard");
let newMotherboardtext = localStorage.getItem("Motherboardtext");

let ramPrice = localStorage.getItem("newRAM");
let newRAMtext = localStorage.getItem("RAMtext");

let ssdPrice = localStorage.getItem("newSSD");
let newSSDtext = localStorage.getItem("SSDtext");

let psuPrice = localStorage.getItem("newPSU");
let newPSUtext = localStorage.getItem("RAMtext");

var price = Number(cpuPrice) + Number(casePrice) + Number(coolerPrice)
+ Number(gpuPrice) + Number(motherboardPrice) + Number(ramPrice) + Number(ssdPrice) + Number(psuPrice);

var priceWithTax = (price + (price * 0.07));

totalPrice.innerHTML = priceText.concat(priceWithTax.toFixed(2));

Coolertext.innerHTML = newCoolertext;
CPUtext.innerHTML = newCPUtext;
Casetext.innerHTML = newCasetext;
GPUtext.innerHTML = newGPUtext;
Motherboardtext.innerHTML = newMotherboardtext;
PSUtext.innerHTML = newPSUtext;
RAMtext.innerHTML = newRAMtext;
SSDtext.innerHTML = newSSDtext;