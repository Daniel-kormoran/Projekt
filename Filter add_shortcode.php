<?php
/**
* Plugin Name: WP First Plugin
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WordPress.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
fun

apply_filters (  'the_content' , 'filter_do_and_add_shortcode' );
function filter_do_and_add_shortcode ($content)
{
$cofiltruje = array ('do_shortcode','add_shortcode') ;
$content  =  str_replace (  'cofiltruje' ,  'echo '😁';' ,  $content  );
return  $content ; 
}

