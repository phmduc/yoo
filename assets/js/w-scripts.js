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

  // Loader
  // $(window).on("load",function(){
  // 	$(".w-loader").fadeOut("slow");
  // });

  

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


  $(function() {
    var top = $('#sidebarr').offset().top - parseFloat($('#sidebarr').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));
  
    var maxY = footTop - $('#sidebarr').outerHeight()- 32;
    console.log(maxY)
    $(window).scroll(function() {
      var y = $(this).scrollTop();
      if (y > top) {
        if (y < maxY) {
          $('#sidebarr').addClass('fixed').removeAttr('style');
        } else {
          $('#sidebarr').removeClass('fixed').css({
            position: 'absolute',
            bottom: 0,
            width: 386
          });
        }
      } else {
        $('#sidebarr').removeClass('fixed');
      }
    });
  });
  
  
  
}( jQuery ) );

