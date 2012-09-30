<?php 
/*
* ----------------------------------------------------------------------------------------------------
* SHORTCODE FOR TABBED
* @PACKAGE BY HAWKTHEME
* ----------------------------------------------------------------------------------------------------
*/

add_shortcode('tabs', 'theme_sc_tabs');
add_shortcode('tab', 'theme_sc_tab');


/***************************************************************************
 * Add shortcode [tabs] [/tabs]
***************************************************************************/
function theme_sc_tabs( $atts, $content = null)
{
	global $tabs_array;

	$tabs_array = array();

	do_shortcode($content);

	$output = '<div class="tabs-wrap sc-tabs-wrap">';
	$output .= '<ul class="tabs clearfix">';
	
	foreach( $tabs_array as $tab )
	{
		$output .= '<li><a href="#" class="sc-tab">' . $tab['title'] . '</a></li>';
	}
	
	$output .= '</ul>';
	$output .= '<div class="panes">';
	
	foreach( $tabs_array as $tab )
	{
		$output .= '<div class="pane">'.$tab['content'].'</div>';
	}

	$output .= '</div>';		
	$output .= '</div>';
	
	return $output;
}



/***************************************************************************
 * Add shortcode [tab] [/tab]
***************************************************************************/
function theme_sc_tab( $atts, $content = null)
{
	extract(shortcode_atts(array(
		'title' => 'Title goes here'
	), $atts));

	global $tabs_array;

	$tabs_array[] = array(
		'title' => $title,
		'content' => $content
	);
}


?>