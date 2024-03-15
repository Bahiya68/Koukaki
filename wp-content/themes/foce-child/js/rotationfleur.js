// var element = document.querySelector(".story__article::after");

// document.addEventListener("scroll", (event) => {
//   if (window.scrollY > hauteurCible) {
//     // Remplacez la classe actuelle par la nouvelle classe
//     element.classList.remove("logo");
//     element.classList.add("scroll_rotation");
//   } else {
//     // Remplacez la nouvelle classe par la classe actuelle si la hauteur de défilement est inférieure à la hauteur cible
//     element.classList.remove("scroll_rotation");
//     element.classList.add("logo");
//   }
// });

//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(
  " le script javascript lancé se nomme animation_fleurs_scroll.js et il est fonctionnel "
);

const observertitlesOptions = {
  root: null,
};

/* Accélaration des fleurs au scroll
// pour la compréhension
// - https://developer.mozilla.org/en-US/docs/Web/API/CSSStyleDeclaration/setProperty
// - https://developer.mozilla.org/en-US/docs/Web/API/Document/scroll_event
*/

const root = document.querySelector("body");
window.addEventListener("scroll", () => {
  root.style.setProperty("--vitesseFleurs", "2s");
});

window.addEventListener("scrollend", () => {
  root.style.setProperty("--vitesseFleurs", "5s");
});
