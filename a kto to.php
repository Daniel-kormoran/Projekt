<?php
/**
* Plugin Name: a_kto_to

* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
**/

function aktoto_shortcode() 
{
 $current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
        echo " Nie zalogowany .";
    } else {
        
    printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
	}
}
add_shortcode( 'aktoto', 'aktoto_shortcode' );



?>