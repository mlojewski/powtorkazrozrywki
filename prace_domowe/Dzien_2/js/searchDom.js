//----------------zad1
var element1 = document.querySelector("#menu")
function getDataInfo(element1) {
  var allChildren = element1.children;
 var newTable = [];
 for (var i = 0; i < allChildren.length; i++) {
   newTable[i]=allChildren[i].dataset.info;
   console.log(newTable[i]);
 }
 return newTable;
}
//--------------------zad2
var element2 = document.querySelector("#main-contener")

function getElementClass(element2) {
 var newTable = [];
 var classList = element2.classList;
 for (var i = 0; i < classList.length; i++) {
   newTable.push(classList[i])
 }
return newTable
}
// console.log(getElementClass(element2))
//----------------zad3
var element3 = document.querySelector(" .pink-color")
function getElementText(element3) {
  return element3.innerText
}
// console.log(getElementText(element3))
//------------------zad4
var element4 = document.querySelectorAll(" .images")
function getElementAlt(element4) {
  var newTable = [];
  for (var i = 0; i < element4.length; i++) {
    newTable[i] = element4[i].getAttribute("alt")
  }
  return newTable
}
// console.log(getElementAlt(element4))
//---------------zad 5
var element5 = document.querySelectorAll(" .my-link")
function getElementHref(element5) {
  var newTable = []
  for (var i = 0; i < element5.length; i++) {
  newTable[i]= element5[i].getAttribute("href")
  }
  return newTable
}
console.log(getElementHref(element5))
