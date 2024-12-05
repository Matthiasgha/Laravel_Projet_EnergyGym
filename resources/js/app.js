import './bootstrap';


console.log('Hello Laravel');

const scrollButton = document.querySelector(".scroll-top");
scrollButton.addEventListener("click", () => {
  window.scrollTo(0, 0);
});


