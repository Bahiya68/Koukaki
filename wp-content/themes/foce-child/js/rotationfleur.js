const observertitlesOptions = {
  root: null,
};

// Accéleration des fleurs au scroll
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
