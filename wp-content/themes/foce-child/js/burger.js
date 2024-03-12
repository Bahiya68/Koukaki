//Animation au click du menu burger -> croix
const burgericon = document.querySelector(".burger");

burgericon.addEventListener("click", () => {
  burgericon.classList.toggle("active");
});

//Ouverture du menu

const burger = document.querySelector(".menuFull");

burgericon.addEventListener("click", () => {
  burger.classList.toggle("nav_open");
});
