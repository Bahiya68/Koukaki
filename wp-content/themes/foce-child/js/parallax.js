// parallax+css
const parallax = document.querySelector(".parallax");
const video = document.querySelector(".parallax video");
const logo = document.querySelector(".parallax img");

window.addEventListener("scroll", () => {
  const scrollValue = window.scrollY;
  const videoPosition = scrollValue * 0.2;
  const logoPosition = -scrollValue * 0.2;

  video.style.transform = `translateY(${videoPosition}px)`;
  logo.style.transform = `translateY(${logoPosition}px)`;
});
