const slider = tns({
  container: ".carousel__inner",
  items: 1,
  slideBy: "page",
  autoplay: false,
  controls: false,
  nav: false,
  speed: 1200,
  animateDelay: 1000,
});



document.querySelector(".prev").addEventListener("click", () => {
  slider.goTo("prev");
});
document.querySelector(".next").addEventListener("click", () => {
  slider.goTo("next");
});
