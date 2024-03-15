console.log(
  " le script javascript lancé se nomme animation_fleurs_scroll.js et il est fonctionnel "
);

const observertitlesOptions = {
  root: null,
};

// Accélaration des fleurs au scroll
// pour la compréhension
// - https://developer.mozilla.org/en-US/docs/Web/API/CSSStyleDeclaration/setProperty
// - https://developer.mozilla.org/en-US/docs/Web/API/Document/scroll_event

const root = document.querySelector("body");
window.addEventListener("scroll", () => {
  root.style.setProperty("--vitesseFleurs", "2s");
});

window.addEventListener("scrollend", () => {
  root.style.setProperty("--vitesseFleurs", "15s");
});
