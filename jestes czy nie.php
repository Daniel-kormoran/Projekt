<?php
/**
* Plugin Name: jesteśczycieniema

* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
**/

function aktoto_shortcode() 
{
 {
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) {
        echo " Not logged in.";
    } else {
        echo "Logged in.";
    }
}
	

}
add_shortcode( 'aktoto', 'aktoto_shortcode' );



?>