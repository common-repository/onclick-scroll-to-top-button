(function($){
	jQuery(document).ready(function(){
		"use strict";

		jQuery(window).scroll(function(){
			var difHight = jQuery(window).scrollTop();

			if ( difHight > 100 ) {
				jQuery(".scroll_to_top").fadeIn();
			}else{
				jQuery(".scroll_to_top").fadeOut();
			}
		});

		jQuery(".scroll_to_top a").on('click', function(){

			jQuery("html, body").animate({'scrollTop': 0}, 1000);

			return false;
		});

	});
}(jQuery));	