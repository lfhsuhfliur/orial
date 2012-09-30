<?php 
/*
* ----------------------------------------------------------------------------------------------------
* SHORTCODE FOR TOGGLE
* @PACKAGE BY HAWKTHEME
* ----------------------------------------------------------------------------------------------------
*/
add_shortcode('toggle', 'theme_sc_toggle');
add_shortcode('toggles', 'theme_sc_toggles');


/***************************************************************************
 * Add shortcode [toggle] [/toggle]
***************************************************************************/
function theme_sc_toggle($atts, $content=null)
{	
	extract(shortcode_atts(array('title' => 'Title goes here'), $atts));
	
	$output = '<div class="sc-toggle">';
	$output .= '<div class="title"><span>'.$title.'</span></div>';
	$output .= '<div class="inner clearfix">';
	$output .= theme_remove_autop( $content )."\n";
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}


/***************************************************************************
 * Add shortcode [toggles] [/toggles]
***************************************************************************/
function theme_sc_toggles( $atts, $content = null)
{
	$output = '<div class="sc-toggles-wrap">';
	$output .= theme_remove_autop($content)."\n";
	$output .= '</div>';		
	
	return $output;
}

?>