// function active(item){
//   var currentItem = item;
//   $(".sf-menu li").addClass("active");
// }

function myFunction(item) {
  $(item).addClass("active");
  console.log($(item));
}

var menu = document.getElementsByClassName("sf-menu");

for (var i = 0; i < menu.length; i++) {
  menu[i].addEventListener("click", myFunction(menu[i]));
}