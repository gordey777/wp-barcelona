jQuery(document).ready(function() {

  var $this = this;
  $this.isMobile = is_a_mobile_device();



  function is_a_mobile_device() {
    var user = navigator.userAgent;
    return (
      (jQuery.browser.mobile) ||
      (/Android/i.test(user)) ||
      (/iPhone|iPod/i.test(user)) || (/iPad/i.test(user)) || (user.match(/iPad/i) != null) || (navigator.platform.indexOf("iPhone") != -1)
    );
  }

  function goTo(param) {
    if (param != '') {
      this.location.href = param;
    }
  }


  // Basic FitVids
  jQuery(".videoholder").fitVids();


  var palyer;
  //init the page
  init_this_page();

  //"?autoplay=1&rel=0&showinfo=0&color=white"

  function init_this_page() {
    //init the page

    var first_video = jQuery('#videouniquenumber_1');


    jQuery('#video-placeholder').attr('src', first_video.find('.transparent a').attr('data-bigimage'));
    jQuery('#video-placeholder').fadeIn(800);

    var first_videourl = first_video.find('.transparent a').attr('data-video');
    var autoplay_first = "1"; //AUTOPLAY

    if (is_a_mobile_device()) {
      autoplay_first = "0";
    }

    //if we just have a ? in the video url we dont need to put another
    if (first_videourl.indexOf("?") > 0) {
      first_videourl = first_videourl + "&amp;enablejsapi=1&amp;autoplay=" + autoplay_first + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque&amp;origin=http://" + window.location.host;
    } else {
      first_videourl = first_videourl + "?enablejsapi=1&amp;autoplay=" + autoplay_first + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque&amp;origin=http://" + window.location.host;
    }

    jQuery('#video-placeholder').attr('data-videourl', first_videourl);

    jQuery('#main-video-frame').attr('src', first_video.find('.transparent a').attr('data-video'));

    jQuery('#top-container .v-text').addClass('visible');
    jQuery('#top-container .v-text #main-video-description').html(first_video.find('.video-featured-description').html());


    first_video.find('.video_play_overlay_layer.little-player').fadeOut(400);
    first_video.find('.now_playing').fadeIn(400);
    first_video.find('.video-thumb img').addClass('opacity60');

    jQuery('#main-video').fitVids();

  }



  jQuery('#content-video .span3').hover(
    function() {
      jQuery(this).find('.tutorial').stop(true, false).fadeIn(300);
      jQuery(this).find('.box-content').addClass("white");
    },
    function() {
      jQuery(this).find('.tutorial').stop(true, false).fadeOut(300);
      jQuery(this).find('.box-content').removeClass("white");
    }
  );



  //.video-placeholder
  jQuery('.video_play_overlay_layer').click(function() {
    //jQuery(this).parent().find('.video-placeholder').click();
  });

  jQuery('#video-placeholder').click(function(e) {
    var $this_element = jQuery(this);

    var videourl = $this_element.attr('data-videourl');
    var videourl_save_for_track = videourl;

    var overlay = $this_element.parent().find('.video_play_overlay_layer');
    var videoplayer = '#' + $this_element.attr('data-videoplayer');
    //hide the image
    jQuery(overlay).fadeOut(100);
    jQuery(this).fadeOut(300).promise().done(function() {

      //show video
      jQuery(videoplayer).parent('.fluid-width-video-wrapper').fadeIn(400).promise().done(function() {

        jQuery(videoplayer).attr('src', videourl);

        jQuery('#main-video-frame').fadeIn();


      });
    });

  });


  jQuery('#video-container .span3 .transparent a').click(
    function(e) {
      e.preventDefault();

      jQuery('.now_playing').fadeOut(400);
      jQuery('.video-thumb img').removeClass('opacity60');
      jQuery('.video_play_overlay_layer.little-player').fadeIn(400);

      //hide the video
      jQuery('#main-video-frame').fadeOut(250);
      jQuery('#main-video-frame').attr('src', "");
      jQuery('.fluid-width-video-wrapper').hide();

      //hide the image
      jQuery('#video-placeholder').hide();


      var $this_element = jQuery(this);
      var videourl = jQuery(this).attr('data-video');
      var videourl_save_for_track = videourl;
      var bigimage = jQuery(this).attr('data-bigimage');

      var autoplay = "1";
      if (is_a_mobile_device()) {
        autoplay = "0";
      }

      //if we just have a ? in the video url we dont need to put another
      if (videourl.indexOf("?") > 0) {
        videourl = videourl + "&amp;enablejsapi=1&amp;autoplay=" + autoplay + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque&amp;origin=http://" + window.location.host;
      } else {
        videourl = videourl + "?enablejsapi=1&amp;autoplay=" + autoplay + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque&amp;origin=http://" + window.location.host;
      }

      jQuery('#video-placeholder').attr('data-videourl', videourl);
      jQuery('#video-placeholder').attr('src', bigimage);


      $this_element.find('.video_play_overlay_layer.little-player').fadeOut(400);
      $this_element.find('.now_playing').fadeIn(400);
      $this_element.find('.video-thumb img').addClass('opacity60');
      //fill the box
      jQuery('#top-container .v-text #main-video-description').html($this_element.find('.video-featured-description').html());



      var videoplayer = '#main-video-frame';

      //show video
      jQuery(videoplayer).parent('.fluid-width-video-wrapper').fadeIn(400).promise().done(function() {


        jQuery(videoplayer).attr('src', videourl);

        jQuery('#main-video-frame').fadeIn();

      });

    }
  );





  function onVideoStop() {
    jQuery('#top-container .v-text').addClass('visible');

  }

  function onVideoEnd() {
    onVideoStop();

    if (!is_a_mobile_device()) {
      jQuery('#main-video .fluid-width-video-wrapper').hide(400).promise().done(function() {
        jQuery('#main-video #video-placeholder , #main-video .video_play_overlay_layer').fadeIn(400);
      });
    }

  }

  function onVideoPlaying() {
    jQuery('#top-container .v-text').removeClass('visible');

  }


  setTimeout(
    function() {
      jQuery('#main-video img#video-placeholder').click();
    }, 1000);


  //.video-placeholder
  jQuery('.video_play_overlay_layer').click(function() {
    jQuery(this).parent().find('.video-placeholder').click();
  });

  jQuery('.video-placeholder').click(function(e) {

    var videourl = jQuery(this).attr('data-videourl');
    var videourl_save_for_track = videourl;
    var autoplay = "1";
    if (is_a_mobile_device()) {
      autoplay = "0";
    }
    //if we already have a ? in the video url we dont need to put another
    if (videourl.indexOf("?") > 0) {
      //videourl = videourl + "&amp;autoplay="+autoplay+"&amp;rel=0&amp;showinfo=1&amp;color=white&amp;autohide=1";
      videourl = videourl + "&amp;enablejsapi=1&amp;autoplay=" + autoplay + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque";
    } else {
      //videourl = videourl +"?autoplay="+autoplay+"&amp;rel=0&amp;showinfo=0&amp;color=white&amp;autohide=1";
      videourl = videourl + "?enablejsapi=1&amp;autoplay=" + autoplay + "&amp;autohide=1&amp;controls=1&amp;rel=0&amp;color=white&amp;showinfo=0&amp;modestbranding=0&amp;wmode=opaque";
    }
    //
    var overlay = jQuery(this).parent().find('.video_play_overlay_layer');
    var videoplayer = '#' + jQuery(this).attr('data-videoplayer');
    var videoplayer_ = '' + jQuery(this).attr('data-videoplayer');

    //hide the image
    jQuery(overlay).fadeOut(100);
    jQuery(this).fadeOut(300).promise().done(function() {
      //show video
      jQuery(videoplayer).parent('.fluid-width-video-wrapper').show(1).promise().done(function() {
        jQuery(videoplayer).attr('src', videourl);
        jQuery(videoplayer).fadeIn(400, function() {});
        jQuery(videoplayer).fitVids();
        //track video on tagmanager
        //gap_datalayer.track_video(videourl_save_for_track);
      });
    });
  });
});
