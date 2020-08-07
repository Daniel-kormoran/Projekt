<?php
/**
* Plugin Name: Big Boy
* Plugin URI: wordpress.cormo/
* Description: Pierwszy plugin WP.
* Version: 1.0
* Author: Daniel Święcki
* Author URI: wordpress.cormo/
**/
/** [hello] wysfietla dzien dobry **/
function hello_shortcode() 
{
	 
$hello="GOOD MORNING";
	return "$hello";


}
add_shortcode( 'hello', 'hello_shortcode' );
/** [date] wysfietla date i godzine **/

function date_set_shortcode() 
{

$date=date("Y-m-d");
$time=date("H:i:s");
return $date .' '. $time;

}
add_shortcode( 'date', 'date_set_shortcode' );
/** [who] wysfietla nazwe uzytkownika gdy ten jest zalogowany **/

function who_shortcode() 
{
 $current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
        echo " Nie znajomy .";
    } else {
        
    printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
	}
}
add_shortcode( 'who', 'who_shortcode' );
/** [new5] wysfietla 5 ostatnio wrzuconych postów **/
function new_5_shortcode() 
{
 $args = array(
	'numberposts'	=> 10,
	 'category'         => 1,
        'author'           => 1,
	's'                =>'test',
        'orderby'          => 'title',
        'order'            => 'DESC',
        'include'          =>  array(),
        'exclude'          =>  array(),
        'post_type'        => 'post',
        'suppress_filters' => true,
		
	 
	
);
$last_posts = get_posts( $args );

if( ! empty( $last_posts ) ){
	$post = '<ul>';
	foreach ( $last_posts as $p ){
		$post .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		. $p->post_title . '</a></li>';
	}
	$post .= '<ul>';
}
return $post ?? '<strong>Sorry. No posts matching your criteria!</strong>';
}
add_shortcode( 'new5', 'new_5_shortcode' );


?>
