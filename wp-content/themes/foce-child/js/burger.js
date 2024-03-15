//Animation au click du menu burger -> croix
const burgericon = document.querySelector(".burger");
const burger = document.querySelector(".menuFull");

//Ouverture du menu

burgericon.addEventListener("click", () => {
  burger.classList.toggle("nav_open");
  // burgericon.classList.toggle("active");
});

const menuLinks = document.querySelectorAll(".menuFull ul li a");

menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("nav_open");
    // burgericon.classList.remove("active");
  });
});
