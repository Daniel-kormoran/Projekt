<?php
/**
* Plugin Name: dziendobry
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/


function powitanie_shortcode() 
{
	 
if ($content == "dzisaj") ; {
	$content=str_replace (  'dzisaj' ,  '$powitanie' ,  $content  );}
	return "$powitanie";


}
add_shortcode( 'powitanie', 'powitanie_shortcode' );

?>