// function active(item){
//   var currentItem = item;
//   $(".sf-menu li").addClass("active");
// }

function myFunction(item) {
  $(item).find('a').addClass("active");
  var myVar = $(item).find('a');
  console.log(myVar);
}

var menu = document.getElementsByClassName("sf-menu");

for (var i = 0; i < menu.length; i++) {
  menu[i].addEventListener("click", myFunction);

}