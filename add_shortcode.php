<?php
/**
* Plugin Name: Wtyczka
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/

<?php
// Add Shortcode
function my_shortcode() {

	$data=date("Y-m-d");
	$czas=date("H:i:s");
	$dataiczas=  " $data .'.' $czas";
	$content=str_replace (  '[dzisaj]' ,  'my_shortcode' ,  $content  );
		return "$content";

}

add_shortcode( 'my_first_shorcode', 'my_shortcode' );
