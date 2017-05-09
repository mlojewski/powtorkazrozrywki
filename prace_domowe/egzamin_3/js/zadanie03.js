var User= function(name){
  this.name = name;
};
User.prototype.welcomeUser=function(userName){
  console.log(" welcome "+userName)
}
var zdziszek = new User("Zdziszek");
zdziszek.welcomeUser("Zdziszek")
