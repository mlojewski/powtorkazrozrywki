var elements = document.querySelectorAll(" .sample_class")

function getElementsTag(elements) {
  var result = []
  for (var i = 0; i < elements.length; i++) {
    result.push(elements[i].tagName)

  }
  return result
}
// console.log(getElementsTag(elements))

var elements2 = document.querySelector(" #sample_id")

function getElementsClass(elements2) {
var result1 = elements2.classList
for (var i = 0; i < result1.length; i++) {
  var result = []
  result.push(result1[i])
}
return result
}
// console.log(getElementsClass(elements2)) - nie wiem czemu pokazuje mi się ylko 1 element zamiast 2

var liElements = document.querySelector(" .sample_class_2").querySelectorAll("li")
function getElementsInnerText(liElements) {
  var result = [];
    for (var i = 0; i < liElements.length; i++) {
      result.push(liElements[i].innerText)
    }
  return result
}
// console.log(getElementsInnerText(liElements))

var aElements = document.querySelectorAll("a")
function getElementsAdress(aElements) {
  var result = []
  for (var i = 0; i < aElements.length; i++) {
  if (aElements[i].getAttribute("href")!= null) {
    result.push(aElements[i].getAttribute("href"))
  }
  }
  return result
}
// console.log(getElementsAdress(aElements))

var elements3 = document.querySelector(" .sample_class_3").children
function getElementsTag(elements3) {
  var result = []
  for (var i = 0; i < elements3.length; i++) {
    result.push(elements3[i].tagName)

  }
  return result
}
console.log(getElementsTag(elements3))
