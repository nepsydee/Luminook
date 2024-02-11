let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("mouseover", activeLink));


//menu toggle{
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");


toggle.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

// ----------------------------------------sound-------------------------------------------------

const audio = new Audio();
audio.src = "http://localhost/project/sound/voice.mp3";


// ----------------------------dropdown-------------------

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}