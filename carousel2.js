/*New Products Carousel */
const gap = 16;

const carousel2 = document.getElementById("carousel2"),
  content2 = document.getElementById("container-second"),
  next2 = document.getElementById("next2"),
  prev2 = document.getElementById("prev2");

next2.addEventListener("click", e => {
  carousel2.scrollBy(width + gap, 0);
  if (carousel2.scrollWidth !== 0) {
    prev2.style.display = "flex";
  }
  if (content2.scrollWidth - width - gap <= carousel2.scrollLeft + width) {
    next2.style.display = "none";
  }
});
prev2.addEventListener("click", e => {
  carousel2.scrollBy(-(width + gap), 0);
  if (carousel2.scrollLeft - width - gap <= 0) {
    prev2.style.display = "none";
  }
  if (!content2.scrollWidth - width - gap <= carousel2.scrollLeft + width) {
    next2.style.display = "flex";
  }
});

let width = carousel2.offsetWidth;
window.addEventListener("resize", e => (width = carousel2.offsetWidth));
/*End of Carousel */
