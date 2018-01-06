$(document).ready(function(){

  //Slick Slider
  $('.slider-container').slick({
		dots: true,
		infinite: true,
    autoplay: true,
		speed: 1000,
    fade: true,
		slidesToShow: 1,
    autoplaySpeed: 3000,
    arrows: false,
    adaptiveHeight: true
      });
});
