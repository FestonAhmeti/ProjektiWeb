//Kodi per sliderin e search bar


var fotoArray = [
    "images/furntiure1.jpg",
    "images/furntiure2.jpg",
    "images/furntiure3.jpg",
    "images/furntiure4.jpg",
    "images/furntiure6.jpg",
    "images/furntiure7.jfif",

];
var i = 0;
function ndrroImg(){
    document.getElementById('slide1').src=fotoArray[i];
    if (i<fotoArray.length-1){
        i++
    }else{
        i=0;
    }
    setTimeout('ndrroImg()', 6000);
}
document.body.addEventListener('load' , ndrroImg());

/*Slider Carousel */
const gap = 16;

const carousel = document.getElementById("carousel"),
  content = document.getElementById("content"),
  next = document.getElementById("next"),
  prev = document.getElementById("prev");

next.addEventListener("click", e => {
  carousel.scrollBy(width + gap, 0);
  if (carousel.scrollWidth !== 0) {
    prev.style.display = "flex";
  }
  if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.style.display = "none";
  }
});
prev.addEventListener("click", e => {
  carousel.scrollBy(-(width + gap), 0);
  if (carousel.scrollLeft - width - gap <= 0) {
    prev.style.display = "none";
  }
  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.style.display = "flex";
  }
});

let width = carousel.offsetWidth;
window.addEventListener("resize", e => (width = carousel.offsetWidth));
/*End of Carousel */