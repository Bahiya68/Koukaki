// Sélectionnez l'élément sur lequel vous souhaitez effectuer l'action
var element = document.querySelector(".logo");

// Fonction pour détecter le défilement de la page
window.addEventListener("scroll", function () {
  // Hauteur à laquelle vous souhaitez remplacer les classes (en pixels)
  var hauteurCible = 275; //Par exemple, 300 pixels

  // Vérifiez si la position de défilement de la page dépasse la hauteur cible
  if (window.scrollY > hauteurCible) {
    // Remplacez la classe actuelle par la nouvelle classe
    element.classList.remove("logo");
    element.classList.add("logoposition");
  } else {
    // Remplacez la nouvelle classe par la classe actuelle si la hauteur de défilement est inférieure à la hauteur cible
    element.classList.remove("logoposition");
    element.classList.add("logo");
  }
});

// parallax horizontale des nuages

document.addEventListener("DOMContentLoaded", function (event) {
  const parallaxBg = document.querySelector(".grosNuageBleu");
  const parallaxPt = document.querySelector(".petitNuageBleu");
  const parallaxSection = document.querySelector(".story #place h3");
  const sectionTop = parallaxSection.offsetTop; //récupèration de la position verticale

  window.addEventListener("scroll", function () {
    const scrollTop = window.scrollY;
    if (scrollTop >= sectionTop) {
      //Si le défilement est supérieur ou égal à la position verticale de la section
      const scrollAmount = scrollTop - sectionTop; //quantité de défilement par rapport à la position de la section
      const translation = Math.min(scrollAmount, 300); // limite la valeur de translation (translation) à un maximum de 300 pixels
      parallaxBg.style.transform = "translateX(-" + translation + "px)";
      parallaxPt.style.transform = "translateX(-" + translation + "px)";
      //console.log("scrollAmount" + scrollAmount);
      //console.log("scrollTop" + scrollTop);
    } else {
      parallaxBg.style.transform = "translateX(0)";
    }
  });
});
