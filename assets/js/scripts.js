// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
// Main Slider
jQuery(document).ready(function() {
  jQuery('#home_slider').owlCarousel({
    lazyLoad: true,
    items: 1,
    //animateOut: 'fadeOut',
    //animateIn: 'fadeIn',
    slideSpeed: 5000,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    dots: true,
    smartSpeed: 1000,
  })
//Recent Presents Slider
  jQuery('#presents-slider').owlCarousel({
    lazyLoad: true,
    items: 5,
    slideSpeed: 5000,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    //loop: true,
    dots: false,
    smartSpeed: 1000,
    margin: 40,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,

      },
      768: {
        items: 3,

      },
      992: {
        items: 5,

      }
    },
  })

//Presents heigth
  var presentImgW = $('.presents-block').width(),
    presentImgH = presentImgW * 1.3;

  $('.presents-block .img-presents').height(presentImgH);
  $(window).resize(function() {
    var presentImgW = $('.presents-block').width(),
      presentImgH = presentImgW * 1.3;

    $('.presents-block .img-presents').height(presentImgH);
  })


});
