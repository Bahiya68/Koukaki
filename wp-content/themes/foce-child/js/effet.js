//parallax

// // Attend que le document soit complètement chargé
// document.addEventListener("DOMContentLoaded", function () {
//   // Sélectionnez l'élément à animer
//   var elementToAnimate = document.querySelector(".fade-in");

//   // Vérifiez si l'élément existe
//   if (elementToAnimate) {
//     // Ajoutez la classe pour déclencher l'animation
//     elementToAnimate.classList.add("fade-in-animation");
//   }
// });

// parallax+css
const parallax = document.querySelector(".parallax");
const video = document.querySelector(".parallax video");
const logo = document.querySelector(".parallax img");

window.addEventListener("scroll", () => {
  const scrollValue = window.scrollY;
  const videoPosition = scrollValue * 0.5;
  const logoPosition = -scrollValue * 0.5;

  video.style.transform = `translateY(${videoPosition}px)`;
  //logo.style.transform = `translateY(${logoPosition}px)`;
});
