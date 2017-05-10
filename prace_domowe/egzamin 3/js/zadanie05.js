document.addEventListener('DOMContentLoaded',function(){
var buttons = document.querySelectorAll("button");
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function(event) {
      var div=document.querySelector("#id1");
      div.innerText=this.dataset.text;
    });
  }


});
