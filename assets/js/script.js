$(window).on('load', function(){
  $('.owl-carousel').owlCarousel({
      center: true,
      items:1,
      loop:false,
      margin:77,
      dots:true,
      autoWidth:true,
      smartSpeed:500,
      responsive:{
          600:{
              items:1,
              margin:30,
          }
      }
  });
});
