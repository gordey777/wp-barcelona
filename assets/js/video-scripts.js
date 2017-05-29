
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

function is_msie_8() {
  return (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) === 8);
}

function updateVideoShareUrl($new_url, $new_title, $new_media_url) {
  var $video_share = jQuery('#sharevideo a.social-share');
  //console.log(video_share);
  $video_share.attr('data-pushurl', 'http://www.dolcegabbana.com/beauty/video/' + $new_url);
  $video_share.each(function(index, element) {
    if (jQuery(element).hasClass('fb_social_share')) {
      jQuery(element).attr('href', 'http://www.facebook.com/sharer.php?u=http://www.dolcegabbana.com/beauty/video/' + $new_url);
    } else if (jQuery(element).hasClass('tw_social_share')) {
      jQuery(element).attr('href', 'https://twitter.com/intent/tweet?url=http://www.dolcegabbana.com/beauty/video/' + $new_url + '&text=' + $new_title + ' @dolcegabbana');
    } else if (jQuery(element).hasClass('gp_social_share')) {
      jQuery(element).attr('href', 'https://plus.google.com/share?url=http://www.dolcegabbana.com/beauty/video/' + $new_url);
    } else if (jQuery(element).hasClass('pn_social_share')) {
      jQuery(element).attr('href', 'http://pinterest.com/pin/create/button/?url=http://www.dolcegabbana.com/beauty/video/' + $new_url + '&media=' + $new_media_url + '&description=' + $new_title);
    }
  });

}

function get_html_translation_table(e, t) {
  var n = {},
    r = {},
    i;
  var s = {},
    o = {};
  var u = {},
    a = {};
  s[0] = "HTML_SPECIALCHARS";
  s[1] = "HTML_ENTITIES";
  o[0] = "ENT_NOQUOTES";
  o[2] = "ENT_COMPAT";
  o[3] = "ENT_QUOTES";
  u = !isNaN(e) ? s[e] : e ? e.toUpperCase() : "HTML_SPECIALCHARS";
  a = !isNaN(t) ? o[t] : t ? t.toUpperCase() : "ENT_COMPAT";
  if (u !== "HTML_SPECIALCHARS" && u !== "HTML_ENTITIES") {
    throw new Error("Table: " + u + " not supported")
  }
  n["38"] = "&";
  if (u === "HTML_ENTITIES") {
    n["160"] = "&nbsp;";
    n["161"] = "&iexcl;";
    n["162"] = "&cent;";
    n["163"] = "&pound;";
    n["164"] = "&curren;";
    n["165"] = "&yen;";
    n["166"] = "&brvbar;";
    n["167"] = "&sect;";
    n["168"] = "&uml;";
    n["169"] = "&copy;";
    n["170"] = "&ordf;";
    n["171"] = "&laquo;";
    n["172"] = "&not;";
    n["173"] = "&shy;";
    n["174"] = "&reg;";
    n["175"] = "&macr;";
    n["176"] = "&deg;";
    n["177"] = "&plusmn;";
    n["178"] = "&sup2;";
    n["179"] = "&sup3;";
    n["180"] = "&acute;";
    n["181"] = "&micro;";
    n["182"] = "&para;";
    n["183"] = "&middot;";
    n["184"] = "&cedil;";
    n["185"] = "&sup1;";
    n["186"] = "&ordm;";
    n["187"] = "&raquo;";
    n["188"] = "&frac14;";
    n["189"] = "&frac12;";
    n["190"] = "&frac34;";
    n["191"] = "&iquest;";
    n["192"] = "&Agrave;";
    n["193"] = "&Aacute;";
    n["194"] = "&Acirc;";
    n["195"] = "&Atilde;";
    n["196"] = "&Auml;";
    n["197"] = "&Aring;";
    n["198"] = "&AElig;";
    n["199"] = "&Ccedil;";
    n["200"] = "&Egrave;";
    n["201"] = "&Eacute;";
    n["202"] = "&Ecirc;";
    n["203"] = "&Euml;";
    n["204"] = "&Igrave;";
    n["205"] = "&Iacute;";
    n["206"] = "&Icirc;";
    n["207"] = "&Iuml;";
    n["208"] = "&ETH;";
    n["209"] = "&Ntilde;";
    n["210"] = "&Ograve;";
    n["211"] = "&Oacute;";
    n["212"] = "&Ocirc;";
    n["213"] = "&Otilde;";
    n["214"] = "&Ouml;";
    n["215"] = "&times;";
    n["216"] = "&Oslash;";
    n["217"] = "&Ugrave;";
    n["218"] = "&Uacute;";
    n["219"] = "&Ucirc;";
    n["220"] = "&Uuml;";
    n["221"] = "&Yacute;";
    n["222"] = "&THORN;";
    n["223"] = "&szlig;";
    n["224"] = "&agrave;";
    n["225"] = "&aacute;";
    n["226"] = "&acirc;";
    n["227"] = "&atilde;";
    n["228"] = "&auml;";
    n["229"] = "&aring;";
    n["230"] = "&aelig;";
    n["231"] = "&ccedil;";
    n["232"] = "&egrave;";
    n["233"] = "&eacute;";
    n["234"] = "&ecirc;";
    n["235"] = "&euml;";
    n["236"] = "&igrave;";
    n["237"] = "&iacute;";
    n["238"] = "&icirc;";
    n["239"] = "&iuml;";
    n["240"] = "&eth;";
    n["241"] = "&ntilde;";
    n["242"] = "&ograve;";
    n["243"] = "&oacute;";
    n["244"] = "&ocirc;";
    n["245"] = "&otilde;";
    n["246"] = "&ouml;";
    n["247"] = "&divide;";
    n["248"] = "&oslash;";
    n["249"] = "&ugrave;";
    n["250"] = "&uacute;";
    n["251"] = "&ucirc;";
    n["252"] = "&uuml;";
    n["253"] = "&yacute;";
    n["254"] = "&thorn;";
    n["255"] = "&yuml;"
  }
  if (a !== "ENT_NOQUOTES") {
    n["34"] = "&quot;"
  }
  if (a === "ENT_QUOTES") {
    n["39"] = "&#39;"
  }
  n["60"] = "&lt;";
  n["62"] = "&gt;";
  for (i in n) {
    if (n.hasOwnProperty(i)) {
      r[String.fromCharCode(i)] = n[i]
    }
  }
  return r
}

function html_entity_decode(e, t) {
  var n = {},
    r = "",
    i = "",
    s = "";
  i = e.toString();
  if (false === (n = this.get_html_translation_table("HTML_ENTITIES", t))) {
    return false
  }
  delete n["&"];
  n["&"] = "&";
  for (r in n) {
    s = n[r];
    i = i.split(s).join(r)
  }
  i = i.split("&#039;").join("'");
  return i
}






jQuery(document).ready(function() {



  // Basic FitVids
  jQuery(".videoholder").fitVids();



});



jQuery(document).ready(function() {
  var palyer;
  //init the page
  init_this_page();

  //"?autoplay=1&rel=0&showinfo=0&color=white"

  function init_this_page() {
    //init the page
    var initial = 'filter-all';
    jQuery('#' + initial).addClass('current');
    rebuildPager(initial);

    var first_video = jQuery('#video-container .span3:first-child');


    jQuery('#video-placeholder').attr('src', first_video.find('.transparent a').attr('data-bigimage'));
    jQuery('#video-placeholder').fadeIn(800);

    var first_videourl = first_video.find('.transparent a').attr('data-video');
    var autoplay_first = "1";

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
    updateVideoShareUrl(first_video.find('.transparent a').attr('data-pushurl'), first_video.find('.transparent a').attr('data-sharetitle'), first_video.find('img').attr('src'));

    first_video.find('.video_play_overlay_layer.little-player').fadeOut(400);
    first_video.find('.now_playing').fadeIn(400);
    first_video.find('.video-thumb img').addClass('opacity60');

    jQuery('#main-video').fitVids();




  }



  jQuery('#content .span3').hover(
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
      jQuery('#toolbar').slideUp(300);
      jQuery('#header').addClass('collapsed all-transition');
      //show video
      jQuery(videoplayer).parent('.fluid-width-video-wrapper').fadeIn(400).promise().done(function() {
        //console.log('videoPlayer:'+videoplayer);
        //console.log('videoUrl:'+videourl);

        jQuery(videoplayer).attr('src', videourl);
        // player = new YT.Player('main-video-frame', {
        //   height: '1170',
        //   width: '658',
        //   events: {
        //     'onReady': onPlayerReady,
        //     'onStateChange': onPlayerStateChange
        //   }
        // });
        jQuery('#main-video-frame').fadeIn();

        //console.log('track -> #video-placeholder.click');
        //gap_datalayer.track_video(videourl_save_for_track);
        //console.log($this_element.attr('data-pushurl'));
        // if ($this_element.attr('data-pushurl') != undefined && $this_element.attr('data-pushurl') != 'undefined') {
        //   update_url($this_element.attr('data-pushurl'));
        // }

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

      //show header
      jQuery('#toolbar').slideDown(300);
      jQuery('#header').removeClass('collapsed all-transition');

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
      //change the sharer
      updateVideoShareUrl($this_element.attr('data-pushurl'), $this_element.attr('data-sharetitle'), $this_element.find('img').attr('src'));



      var videoplayer = '#main-video-frame';
      //hide the image

      jQuery('#toolbar').slideUp(300);
      jQuery('#header').addClass('collapsed all-transition');
      //show video
      jQuery(videoplayer).parent('.fluid-width-video-wrapper').fadeIn(400).promise().done(function() {
        //console.log('videoPlayer:'+videoplayer);
        //console.log('videoUrl:'+videourl);

        jQuery(videoplayer).attr('src', videourl);
        // player = new YT.Player('main-video-frame', {
        //   height: '1170',
        //   width: '658',
        //   events: {
        //     'onReady': onPlayerReady,
        //     'onStateChange': onPlayerStateChange
        //   }
        // });
        jQuery('#main-video-frame').fadeIn();
        //console.log('track -> #video-container .span3 .transparent a.click');
        //gap_datalayer.track_video(videourl_save_for_track);
        //update_url($this_element.attr('data-pushurl'));
      });



    }
  );



});


jQuery('#menu-video .label-menu').click(function() {

  jQuery('#menu-video .label-menu').removeClass('current');
  var current_elements = jQuery(this).attr('id');

  //get the new reference url
  var new_reference = current_elements.replace("filter-", "");
  if (new_reference == "all") {
    new_reference = '';
  }

  jQuery('#video-container .span3').fadeOut(700).promise().done(function() {
    rebuildPager(current_elements);

    //update_url(new_reference);
    //gap_datalayer.track_filter(new_reference);
    //jQuery('#video-container .span3.'+current_elements).fadeIn( 800 ).promise().done( function(){});
  });

  jQuery(this).addClass('current');

});


function rebuildPager(to_show) {

  var item_per_page = 8;
  var items = jQuery('#video-container .span3.' + to_show);
  var pager = jQuery('#navigation-container .nav-video');

  pager.html('');

  //reset header
  jQuery('#toolbar').slideDown(300);
  jQuery('#header').removeClass('collapsed all-transition');

  if (items.length > item_per_page) {

    var total_page = Math.ceil(items.length / item_per_page);
    var el_page = 1;
    //console.log(total_page);
    items.each(function(index, element) {

      if (index != 0 && ((index) % (item_per_page) == 0)) {
        el_page++;
      }
      jQuery(element).attr('data-item_page', el_page);

    }).promise().done(function() {

      //add prev link
      pager.append('<li><a href="javascript:void(0);" onclick="showThisPage(\'prev_page\')" class="prev_page" data-show_page="prev_page">Previous</a></li>');

      //add pages links
      for (i = 1; i <= total_page; i++) {
        pager.append('<li><a href="javascript:void(0);" onclick="showThisPage(\'' + i + '\')" class="numerate_page" data-show_page="' + i + '">' + i + '</a></li>');
      }

      //add next link
      pager.append('<li><a href="javascript:void(0);" onclick="showThisPage(\'next_page\')" class="next_page" data-show_page="next_page">Next</a></li>');

      jQuery('#video-container').attr('data-current_page', 1);
      jQuery('#video-container').attr('data-total_pages', total_page);
      jQuery('#video-container').attr('data-current_showing', to_show);
      jQuery('#video-container .span3.' + to_show + '[data-item_page="1"]').fadeIn(400);
    });


  } else {
    items.fadeIn(700);
  }
}



function showThisPage(show_page) {

  var current_page = jQuery('#video-container').attr('data-current_page');
  var to_show = jQuery('#video-container').attr('data-current_showing');
  var total_pages = jQuery('#video-container').attr('data-total_pages');
  var page_to_show = "";

  //console.log(to_show);
  //console.log('current_page =' + current_page);
  //console.log('total_page = ' + total_pages);

  if (show_page == current_page) {
    return;
  }

  if (show_page == 'next_page') {
    page_to_show = parseInt(current_page) + 1;
  } else if (show_page == 'prev_page') {
    page_to_show = parseInt(current_page) - 1;
  } else {
    page_to_show = show_page;
  }

  //console.log('page_to_show = ' + page_to_show);

  if (page_to_show < 1 || page_to_show > total_pages) {
    return;
  } else {

    //reset header
    jQuery('#toolbar').slideDown(300);
    jQuery('#header').removeClass('collapsed all-transition');


    jQuery('#video-container .span3').fadeOut(700).promise().done(function() {

      jQuery('#video-container .span3.' + to_show + '[data-item_page="' + page_to_show + '"]').fadeIn(700).promise().done(function() {

        jQuery('#video-container').attr('data-current_page', page_to_show);

      });

    });

  }

}


function onYouTubeIframeAPIReady() {}

function onPlayerReady(event) {
  //event.target.playVideo();

}


function onVideoStop() {
  jQuery('#top-container .v-text').addClass('visible');
  jQuery('#toolbar').slideDown(300);
  jQuery('#header').removeClass('collapsed all-transition');
}

function onVideoEnd() {
  onVideoStop();
  jQuery('#toolbar').slideDown(300);
  jQuery('#header').removeClass('collapsed all-transition');
  if (!is_a_mobile_device()) {
    jQuery('#main-video .fluid-width-video-wrapper').hide(400).promise().done(function() {
      jQuery('#main-video #video-placeholder , #main-video .video_play_overlay_layer').fadeIn(400);
    });
  }

}

function onVideoPlaying() {
  jQuery('#top-container .v-text').removeClass('visible');
  jQuery('#toolbar').slideUp(300);
  jQuery('#header').addClass('collapsed all-transition');

}

jQuery(document).ready(function() {

  setTimeout(
    function() {
      jQuery('#main-video img#video-placeholder').click();
    }, 1000);

});

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
