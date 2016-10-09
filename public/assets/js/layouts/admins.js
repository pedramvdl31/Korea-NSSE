$(document).ready(function(){
	adminsly.pageLoad();
	adminsly.events();

});
adminsly = {

	pageLoad: function() {

	},
	events: function() {
		//COOPER>>IF F11 PRESSED CHECK THE BTNS
		$(document).keyup(function(e){
		   if(e.which==122){
		       e.preventDefault();//kill anything that browser may have assigned to it by default
		       //do what ever you wish here :) 
		       if ($('.to-fullscreen-li').hasClass('hide')) {
		       		$('.to-fullscreen-li').removeClass('hide');
		       } else {
		       		$('.to-fullscreen-li').addClass('hide');
		       }
		       return false;
		   }
		});
		//COOPER>CLICKED ON FULLSCREEN BTN
		$('.to-fullscreen-li').click(function(){
			// Find the right method, call on correct element
			function launchIntoFullscreen(element) {
			  if(element.requestFullscreen) {
			    element.requestFullscreen();
			  } else if(element.mozRequestFullScreen) {
			    element.mozRequestFullScreen();
			  } else if(element.webkitRequestFullscreen) {
			    element.webkitRequestFullscreen();
			  } else if(element.msRequestFullscreen) {
			    element.msRequestFullscreen();
			  }
			}
			// Launch fullscreen for browsers that support it!
			launchIntoFullscreen(document.documentElement); // the whole page
			// $('.to-normalscreen-li').removeClass('hide');
			$('.to-fullscreen-li').addClass('hide');
		});
		//COOPER>CLICKED ON NORMALSCREEN BTN
		$('.to-normalscreen-li').click(function(){
			// Whack fullscreen
			function exitFullscreen() {
			  if(document.exitFullscreen) {
			    document.exitFullscreen();
			  } else if(document.mozCancelFullScreen) {
			    document.mozCancelFullScreen();
			  } else if(document.webkitExitFullscreen) {
			    document.webkitExitFullscreen();
			  }
			}
			// Cancel fullscreen for browsers that support it!
			exitFullscreen();
			$('.to-normalscreen-li').addClass('hide');
			$('.to-fullscreen-li').removeClass('hide');
		});
	}
}
requestadmk = {

};

