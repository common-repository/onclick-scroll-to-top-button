<?php

/*
Plugin Name: Onclick scroll to top Button
Plugin URI: http://www.phpmysql.xyz/sohel
Author: Sohel Rana
Author URI: http://www.facebook.com/sohelrana022
Description: Awesome scroll to top Button for web pages by "Hireling theme".
Version: 1.0.0
*/
function scroll_to_top(){
	?>
	<div class="scroll_to_top">
		<a href="#"><i class="fa fa-chevron-up" ></i></a>
	</div>
	<?php
}
add_action('wp_footer', 'scroll_to_top');

function prothom_theme_styles(){
	wp_enqueue_style('plugins-font-awesome', PLUGINS_URL('css/font-awesome.min.css', __FILE__));
	wp_enqueue_style('plugins-custom-style', PLUGINS_URL('css/custom.css', __FILE__));
	wp_enqueue_script('plugins-custom-js', PLUGINS_URL('js/custom.js', __FILE__), array('jquery'), '', false);
}
add_action('wp_enqueue_scripts', 'prothom_theme_styles');


?>