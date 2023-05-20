$(".main-slideshow1").flickity({
  draggable: true,
  pageDots: false,
  autoPlay: 2000,
  pauseAutoPlayOnHover: true,
  wrapAround: true,
  prevNextButtons: false,
});
const $carousel1 = $(".main-slideshow1").flickity();
$(".main-btn__prev1").on("click", function () {
  $carousel1.flickity("previous", true);
});

$(".main-btn__next1").on("click", function () {
  $carousel1.flickity("next", true);
});

$(".main-slideshow2").flickity({
  draggable: true,
  pageDots: false,
  autoPlay: 2000,
  pauseAutoPlayOnHover: true,
  wrapAround: true,
  prevNextButtons: false,
});
const $carousel2 = $(".main-slideshow2").flickity();
$(".main-btn__prev2").on("click", function () {
  $carousel2.flickity("previous", true);
});

$(".main-btn__next2").on("click", function () {
  $carousel2.flickity("next", true);
});
