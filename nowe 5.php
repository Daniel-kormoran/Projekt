<?php
/**
* Plugin Name: nowe_5
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
**/

function nowe_5_shortcode() 
{
 $args = array(
	'numberposts'	=> 5
	
);
$ostatnie_posty = get_posts( $args );

if( ! empty( $ostatnie_posty ) ){
	$posty = '<ul>';
	foreach ( $ostatnie_posty as $p ){
		$posty .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		. $p->post_title . '</a></li>';
	}
	$posty .= '<ul>';
}
return $posty ?? '<strong>Sorry. No posts matching your criteria!</strong>';
}
add_shortcode( 'nowe5', 'nowe_5_shortcode' );



?>