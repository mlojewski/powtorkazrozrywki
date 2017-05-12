//
// function getNumber(a, array) {
//
//   if (array.indexOf(a)!= -1) {
//     return true;
//   }else {
//     return false
//   }
// }
// console.log(getNumber(2,[2,3,4]))
// console.log(getNumber(7,[2,3,4]))
//------------------

var Tree = function(type){
  this.type=type;

}
var dab = new Tree("dab");
var kasztan = new Tree ("kasztan");

Tree.prototype.bloom = function (type) {
  console.log(this.type+" is blooming")
};
dab.bloom()
kasztan.bloom()
