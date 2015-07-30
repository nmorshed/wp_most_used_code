<?php

/*
 * This code is for example of a shortcode which add a twitter
 * button by shortcode
 *
 * function reference:
 * 1. <?php add_shortcode( $tag , $func ); ?>
 * 2. <?php shortcode_atts( $pairs , $atts, $shortcode ); ?>
 */
add_shortcode('twitter', function( $atts, $text ){
	// $atts = the attribute inside shortcode -> an array
	// The text inside shortcode tag -> a variable
	
	$atts = shortcode_atts(
		array(
			'username' => 'niaj_morshed',
			'text' => empty($text) ? 'Follow me on twitter' : $text
		), $atts, 'twitter'
		// $atts = User defined attributes in shortcode tag
		// 'twitter' = shortcode name
	);

	extract($atts);
		
	return "<a href='http://twitter.com/$username'> $text </a>";
});

?>