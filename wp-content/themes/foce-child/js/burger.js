//  animation au click du menu burger -> croix
const burgericon = document.querySelector(".burger");

burgericon.addEventListener("click", () => {
  burgericon.classList.toggle("active");
  burgericon.classList.add;
});

// /*Ouverture menu*/

// //const boutonMenu = document.querySelector(".burger");
// const burger = document.querySelector(".menuFull");

// burgericon.addEventListener("click", () => {
//   burger.classList.toggle("nav_open");
//   burgericon.classList.toggle("active");
// });

// /*Fermeture menu sur click d'un lien*/

// const menuLinks = document.querySelectorAll(".menuFull ul li a");

// menuLinks.forEach((link) => {
//   link.addEventListener("click", () => {
//     burger.classList.remove("nav_open");
//     burgericon.classList.remove("active");
//   });
// });
