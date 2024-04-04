//*********Create the observer like the examples above
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("fade-in");
      return;
    }
  });
});
// Get multiple elements instead of a single one using "querySelectorAll"
const fadeInSection = document.querySelectorAll(".section");

// Loop over the elements and add each one to the observer
fadeInSection.forEach((element) => observer.observe(element));
