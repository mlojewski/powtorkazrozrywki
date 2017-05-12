
var pierwszy = document.querySelector("section").firstElementChild
var drugi = document.querySelector("section").lastElementChild
pierwszy.addEventListener("click", function (event) {
  var zmiana = pierwszy.firstElementChild.nextElementSibling.nextElementSibling
  // console.log(zmiana)
  zmiana.removeAttribute("class")
})
drugi.addEventListener("mouseover", function (event) {
  var zmiana = drugi.firstElementChild.nextElementSibling.nextElementSibling
  // console.log(zmiana)
  zmiana.removeAttribute("class")
})
