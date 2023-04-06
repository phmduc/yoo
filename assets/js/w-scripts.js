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
    $(".w-pageBlogs .slidePageBlogs .slide").slick({
      infinite: false,
      dot: false,
      arrows: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:
        '<button type="button" class="slick-prev slick-arrow"><i class="bi bi-arrow-left-short"></i></button>',
      nextArrow:
        '<button type="button" class="slick-next slick-arrow"><i class="bi bi-arrow-right-short"></i></button>',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            autoplay: true,
            autoplaySpeed: 2500,
          },
        },
      ],
    });
  });
})(jQuery);
