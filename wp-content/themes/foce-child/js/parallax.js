// Sélectionnez l'élément sur lequel vous souhaitez effectuer l'action
var element = document.querySelector(".logo");

// Fonction pour détecter le défilement de la page
window.addEventListener("scroll", function () {
  // Hauteur à laquelle vous souhaitez remplacer les classes (en pixels)
  var hauteurCible = 275; // Par exemple, 300 pixels

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
