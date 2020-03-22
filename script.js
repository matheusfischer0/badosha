const menuBurger = document.querySelector("#menu-icon");
const menuDropdown = document.querySelector(".menu-modal");
var openMenuDropdown = false;

menuBurger.addEventListener("click", function() {
  if (openMenuDropdown) {
    openMenuDropdown = false;
    menuDropdown.classList.remove("modal-active");
  } else {
    openMenuDropdown = true;
    menuDropdown.classList.add("modal-active");
  }
});

menuDropdown.addEventListener("click", function() {
  openMenuDropdown = false;
});
