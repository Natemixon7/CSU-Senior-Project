/* Provides functionality for select tags in .php files */
var classes, i, iter;
var length, elementLength, tagElements; 
var divOne, divTwo, divThree;

classes = document.getElementsByClassName("select-fancy");
length = classes.length;

for (i = 0; i < length; i++) {
  tagElements = classes[i].getElementsByTagName("select")[0];
  elementLength = tagElements.length;
  divOne = document.createElement("DIV");
  divOne.setAttribute("class", "select-selected");
  divOne.innerHTML = tagElements.options[tagElements.selectedIndex].innerHTML;
  classes[i].appendChild(divOne);
  divTwo = document.createElement("DIV");
  divTwo.setAttribute("class", "select-items select-hide");

  for (iter = 1; iter < elementLength; iter++) {
    divThree = document.createElement("DIV");
    divThree.innerHTML = tagElements.options[iter].innerHTML;
    divThree.addEventListener("click", function(e) {
        
    var i, iter;
    var parTagSelected, parTagEle, parPrev, parTagEleLength, parTagSelectedLength;
    parTagEle = this.parentNode.parentNode.getElementsByTagName("select")[0];
    parTagEleLength = parTagEle.length;
    parPrev = this.parentNode.previousSibling;

    for (i = 0; i < parTagEleLength; i++) {
      if (parTagEle.options[i].innerHTML == this.innerHTML) {
        parTagEle.selectedIndex = i;
        parPrev.innerHTML = this.innerHTML;
        parTagSelected = this.parentNode.getElementsByClassName("same-as-selected");
        parTagSelectedLength = parTagSelected.length;

        for (iter = 0; iter < parTagSelectedLength; iter++) {
          parTagSelected[iter].removeAttribute("class");
        }

        this.setAttribute("class", "same-as-selected");
        break;
      }
    }
    parPrev.click();
  });
  divTwo.appendChild(divThree);
}
  classes[i].appendChild(divTwo);
  divOne.addEventListener("click", function(e) {
  e.stopPropagation();
  closeAllSelect(this);
  this.nextSibling.classList.toggle("select-hide");
  this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  var classSelectItems, classSelectSelected, i, classSelectItemsLength, parTagSelectedLength, arrNo = [];
  classSelectItems = document.getElementsByClassName("select-items");
  classSelectSelected = document.getElementsByClassName("select-selected");
  classSelectItemsLength = classSelectItems.length;
  parTagSelectedLength = classSelectSelected.length;

  for (i = 0; i < parTagSelectedLength; i++) {
    if (elmnt == classSelectSelected[i]) {
      arrNo.push(i)
    } 
    else {
      classSelectSelected[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < classSelectItemsLength; i++) {
    if (arrNo.indexOf(i)) {
      classSelectItems[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);