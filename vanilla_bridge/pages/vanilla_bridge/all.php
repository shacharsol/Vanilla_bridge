<?php

    include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
	gatekeeper();
	 $title = "";
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);
 
    // Add the form to this section
    $area2 .= elgg_view_form('vanilla_bridge/show');
 
    // layout the page
    //$body = elgg_view_layout('two_column_left_sidebar', '', $area2);
 	$body=elgg_view_layout('layout', array('title' => $title, 'content' => $area2, 'sidebar' => $sidebar, 'sidebar_alt' => $sidebar_alt));
	if (elgg_is_active_plugin('fanarchy_theme') or elgg_is_active_plugin('facebook_theme')) {
			    $content = elgg_view_layout('two_sidebar', array(
				'title' => $title,
				'content' => $body,
				
				
				));
	}
	else
		$content=$body;
	 	

    // draw the page
    echo elgg_view_page($title, $content);
	

?>