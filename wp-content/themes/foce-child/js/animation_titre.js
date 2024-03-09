// Create the observer like the examples above
const observer1 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animateTitle");
      return;
    }
    entry.target.classList.remove("animateTitle");
  });
});

// Get multiple elements instead of a single one using "querySelectorAll"
const Section1 = document.querySelectorAll(".Animetitre");

// Loop over the elements and add each one to the observer
Section1.forEach((element) => observer1.observe(element));

// Create the observer like the examples above
const observer2 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animateTitle2");
      return;
    }
    entry.target.classList.remove("animateTitle2");
  });
});

// Get multiple elements instead of a single one using "querySelectorAll"
const Section2 = document.querySelectorAll(".Animetitre2");

// Loop over the elements and add each one to the observer
Section2.forEach((element) => observer2.observe(element));
