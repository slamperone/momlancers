jQuery(document).ready(function($){

  jQuery('.images-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return   '<small></small>';
        }
      }
    });


   jQuery('.gallery-thumbs').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return   '<small></small>';
        }
      }
    });
 jQuery('.owl-style-1').owlCarousel({
          loop:false,
            margin:30,
            nav:false,
            controls:true,
            items:1,
            center:true,
            nav:false,
            autoplay:true,
             dots:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            //navText : [jQuery('.arrow-prev'),jQuery('.arrow-next')],
            responsive:{
              0:{
                items:1
                },
              600:{
                items:1
              },
              1000:{
                items:1
              }
              ,
              1200:{
                items:1
              }
            }
    });
var owl = $('.owl-style-1');
owl.owlCarousel();
// Go to the next item
$('.arrow-prev-1').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.arrow-next-1').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
 jQuery('.owl-style-2').owlCarousel({
          loop:false,
            margin:10,
            nav:false,
            controls:true,
            items:2,
            center:false,
            nav:false,
            autoplay:true,
             dots:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            //navText : [jQuery('.arrow-prev'),jQuery('.arrow-next')],
            responsive:{
              0:{
                items:1
                },
              600:{
                items:2
              },
              1000:{
                items:2
              }
              ,
              1200:{
                items:2
              }
            }
    });

 


var owl1 = $('.owl-style-2');
owl1.owlCarousel();
// Go to the next item
$('.arrow-prev-2').click(function() {
    owl1.trigger('next.owl.carousel');
})
// Go to the previous item
$('.arrow-next-2').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl1.trigger('prev.owl.carousel', [300]);
})

jQuery('.owl-style-3').owlCarousel({
          loop:false,
            margin:10,
            nav:false,
            controls:true,
            items:2,
            center:false,
            nav:false,
            autoplay:true,
             dots:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            //navText : [jQuery('.arrow-prev'),jQuery('.arrow-next')],
            responsive:{
              0:{
                items:1
                },
              600:{
                items:2
              },
              1000:{
                items:3
              },
              1200:{
                items:3
              }
            }
    });

 


 var owl3 = $('.owl-style-3');
owl3.owlCarousel();
// Go to the next item
$('.arrow-prev-3').click(function() {
    owl3.trigger('next.owl.carousel');
})
// Go to the previous item
$('.arrow-next-3').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl3.trigger('prev.owl.carousel', [300]);
});


 jQuery('.owl-thumbs').owlCarousel({
          loop:false,
            margin:10,
            nav:false,
            items:3,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
              0:{
                items:1
                },
              600:{
                items:2
              },
              1000:{
                items:3
              }
              ,
              1200:{
                items:4
              }
            }
    });

  jQuery('.owl-tips').owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      items:3,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive:{
        0:{
          items:1
          },
        600:{
          items:2
        },
        1000:{
          items:3
        }
        ,
        1200:{
          items:3
        }
      }
    });

 
  //Magnific
      jQuery('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
          verticalFit: true
        }
        
      });
jQuery('.image-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return   '<small></small>';
      }
    }
  });


jQuery('.popup-modal').magnificPopup({
    type: 'inline',
    preloader: true,
    modal: true
  });
  jQuery(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    jQuery.magnificPopup.close();
  });



 jQuery('.products-carousel').owlCarousel({
        loop:false,
      margin:10,
      nav:true,
      items:3,
      dots:false,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
       navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive:{
        0:{
          items:1
          },
        600:{
          items:2
        },
        1000:{
          items:3
        }
        ,
        1200:{
          items:4
        }
      }
    });

    jQuery('.owl-slider').owlCarousel({
      loop:false,
      margin:10,
      nav:true,
      items:1,
      dots:false,
      autoplay:true,
      autoplayTimeout:3000,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      autoplayHoverPause:true
    });

});




 window.addEventListener('scroll', function() {
            var header = document.getElementById('header');
 
           

            if (window.scrollY > 100) {
                header.classList.add('sticky');
               
            } else {
                header.classList.remove('sticky');
           
            }
  });