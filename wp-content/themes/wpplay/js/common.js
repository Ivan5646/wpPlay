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


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("learnMore");

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        console.log("modal clikded");
        modal.style.display = "none";
    }
}