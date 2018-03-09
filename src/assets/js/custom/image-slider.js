jQuery(".image-slider").slick({

  dots: false,
  infinite: true,
  // speed: 7500,
  adaptiveHeight: true,
  arrows: false,
  // fade:true

});

//remove flickering
jQuery('.image-slider').on('init', function(){
  console.log('init slick slider');
  jQuery(".image-slider").removeClass('un-initialized');
  // left
});
