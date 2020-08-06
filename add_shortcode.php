<?php
/**
* Plugin Name: WP First Plugin
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/

<?php
 // Add Shortcode
function my_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'$data' => 'date(\"Y-m-d\")',
			'$czas' => 'date(\"H:i:s\")',
		),
		$atts,
		'myshortcode'
	);

	str_replace (  '[dzisaj]' ,  'my_shortcode' ,  $content  );
	return "mamy $data , o $czas";


add_shortcode( 'myshortcode', 'my_shortcode' ) ;
}