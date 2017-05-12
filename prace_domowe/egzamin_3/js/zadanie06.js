document.addEventListener("DOMContentLoaded", function() {
var guzik1 = document.querySelector(" #button-1")
var guzik2 = document.querySelector(" #button-2")
var guzik3 = document.querySelector(" #button-3")

guzik1.addEventListener("click", function (event) {
var lista = document.querySelector(" #shopping-list")
  var chleb = document.createElement("p")
  chleb.innerText = "chleb"
  lista.appendChild(chleb)
})
guzik2.addEventListener("click", function (event) {
var lista = document.querySelector(" #shopping-list")
  var usun = lista.lastElementChild;
  usun.parentNode.removeChild(usun)

})
guzik3.addEventListener("click", function (event) {
  var lista = document.querySelector(" #shopping-list")
  var result = document.querySelector('#shopping-list p:nth-child(2)')
  var nowy = result.cloneNode(true)
  lista.appendChild(nowy)
})
});
