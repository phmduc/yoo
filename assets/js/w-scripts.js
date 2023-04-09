/**
 * Process scrollbar width
 *
 */
const scrollbarWidth = window.innerWidth - document.body.clientWidth;
document.body.style.setProperty("--scrollbarWidth", `${scrollbarWidth}px`);

/**
 * Fix 100vh on iOS (When address bar is show)
 *
 * Source: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
 */
function appHeight() {
  const doc = document.documentElement;
  doc.style.setProperty("--vh", window.innerHeight * 0.01 + "px");
}
window.addEventListener("resize", appHeight);
appHeight();

/**
 * jQuery
 *
 */
(function ($) {
  $(document).ready(function () {
    sal({
      once: false,
    });
  });

  $("#hamburger-menu").click(function () {
    $(this).toggleClass("active");
    $(".m-menu").toggleClass("show");
  });

  $(document).ready(function () {
    $(".blog-slider-list-container").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      
      draggable: false,
      prevArrow: `<button type='button' class='slick-prev'><i class="bi bi-arrow-left"></i></button>`,
      nextArrow: `<button type='button' class='slick-prev'><i class="bi bi-arrow-right"></i></button>`,
      dots: true,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            arrows: false,
            infinite: false,
          },
        },
      ],
     
    });
  });
  // $( document ).ready(function() {
  

  //   var $sticky = $('.sticky');
  //   var $stickyrStopper = $('.sticky-stopper');
  //   if (!!$sticky.offset()) { // make sure ".sticky" element exists
  
  //     var generalSidebarHeight = $sticky.innerHeight();
  //     var stickyTop = $sticky.offset().top;
  //     var stickOffset = 0;
  //     var stickyStopperPosition = $stickyrStopper.offset().top;
  //     var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
  //     var diff = stopPoint + stickOffset;
  //     console.log(diff)
  //     $(window).scroll(function(){ // scroll event
  //       var windowTop = $(window).scrollTop(); // returns number
  
  //       if (stopPoint < windowTop) {
  //           $sticky.css({ position: 'absolute', botttom: 0 });
  //       } else if (stickyTop < windowTop+stickOffset) {
  //           $sticky.css({ position: 'fixed', top: 30 });
  //       } else {
  //           $sticky.css({position: 'absolute', top: 'initial'});
  //       }
  //     });
  
  //   }
  // });
  
  
}( jQuery ) );

