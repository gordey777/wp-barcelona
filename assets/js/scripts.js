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
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    slideSpeed: 5000,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    dots: true,
    smartSpeed: 1000,
  });

  jQuery('#salone_slider').owlCarousel({
    lazyLoad: true,
    items: 1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    slideSpeed: 5000,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    dots: true,
    smartSpeed: 1000,
  });

  jQuery('#prod-slider').owlCarousel({
    lazyLoad: true,
    items: 1,
    //animateOut: 'fadeOut',
    //animateIn: 'fadeIn',
    //slideSpeed: 5000,
    nav: true,
    margin: 40,
    autoplay: false,
    autoplayHoverPause: true,
    navText: '',
    dots: false,
    smartSpeed: 1000,
    navContainer: '#customNav',
    onInitialized: function(e) {
      $('.counter').text('1/' + this.items().length)
      console.log();
    }
  });

  jQuery('#prod-slider').on('changed.owl.carousel', function(e) {
    $('.counter').text(e.item.index + 1 + '/' + e.item.count)
  });

  //Recent Presents Slider
  jQuery('#presents-slider').owlCarousel({
    lazyLoad: true,
    slideSpeed: 5000,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    //loop: true,
    dots: false,
    smartSpeed: 1000,
    margin: 30,
    navText: '',
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
  });

  //Presents heigth
  var presentImgW = $('.img-W').width(),
    presentImgH = presentImgW * 1.3;

  $('.img-H').css('min-height', presentImgH + 'px');


  var presSlideImgW = $('.slide-img-W').width(),
    presSlideImgH = presSlideImgW * .65;

  $('.slide-img-H').css('height', presSlideImgH + 'px');

  var collImgW = $('.coll-img-W').width(),
    collImgH = collImgW * 1.25;

  $('.coll-img-W').css('height', collImgH + 'px');



  $(window).resize(function() {
    var presentImgW = $('.img-W').width(),
      presentImgH = presentImgW * 1.3;

    $('.img-H').css('min-height', presentImgH + 'px');

    var presSlideImgW = $('.slide-img-W').width(),
      presSlideImgH = presSlideImgW * .65;

    $('.slide-img-H').css('height', presSlideImgH + 'px');

    var collImgW = $('.coll-img-W').width(),
      collImgH = collImgW * 1.25;

    $('.coll-img-W').css('height', collImgH + 'px');

  })


  $('.show_more').click(function() {
    $('.show_more').toggleClass('clicked');
    $('.inst-row .content').toggleClass('open');
  });


    // Show or hide the sticky footer button
  jQuery(window).scroll(function() {

    var scrollH = jQuery(window).height();
    if (jQuery(this).scrollTop() > (scrollH * .9)) {
      jQuery('.go-top').fadeIn(200);
    } else {
      jQuery('.go-top').fadeOut(200);
    }

  });

  // Animate the scroll to top
  jQuery('.go-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({
      scrollTop: 0
    }, 300);
  });

  function goToByScroll() {
    $('html,body').animate({
        scrollTop: $('#main-video-frame').offset().top
      },
      'slow');
  }


  $('.video-thumb').click(function(ev) {
    goToByScroll();
  });


  //FRONT VIDEO

  $('#front-video .placeholder_wrap').click(function(ev) {

    var data = this.dataset;

    $('#front-video .big-video').attr("src", data.video);
    $('#front-video .video_plaseholder_wrap').addClass('played');
  });

  $('header .nav').click(function() {
    $('header .nav').toggleClass('open');
  });


});
