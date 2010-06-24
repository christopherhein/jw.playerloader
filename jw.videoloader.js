/*
 • jQuery JW.Video_Loader
 • http://christopherhein.com
 •
 • Copyright 2010, Christopher Hein
 • Free to use and abuse under the GPL license.
 • http://www.gnu.org/copyleft/gpl.html
 • 
 • June 2010
*/

(function($) {

  $.fn.load_player = function(options) {      
     
      // Settings
    settings = jQuery.extend( {
      video_path: "/",
      preview_url: "/",
			title: "",
    }, options);
    
    var elem = $(this);
    var video = elem.attr('video');
    var preview = elem.attr('preview');
      
    $('#player').remove();
	     
    $.ajax({
      cache: false,
      url: 'pages/video_player.php?src_url='+settings.video_path+video+'&preview_url='+settings.preview_url+preview,
      success: function(data) {
        $('#reel-player').append('<div id="player"><div>');
        $('#reel-player #player').html(data);
      }
    });
    	
    
  }  
	
})(jQuery);
