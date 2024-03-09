const callback = function (entries) {
  entries.forEach((entry) => {
    entry.target.classList.toggle("is-visible");
  });
};

const observer3 = new IntersectionObserver(callback);

const targets = document.querySelectorAll(".show-on-scroll");
targets.forEach(function (target) {
  observer3.observe(target);
});
