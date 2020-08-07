<?php
/**
* Plugin Name: codziśmamy
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WP.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
**/

function acodziśmamy_shortcode() 
{

$data=date("Y-m-d");
$czas=date("H:i:s");
return $data .' '. $czas;

}
add_shortcode( 'acodziśmamy', 'acodziśmamy_shortcode' );

?>
