<?php
/*
 * Elgg vanilla bridge plugin
 *
 * */

elgg_register_event_handler('init', 'system', 'vanilla_bridge_init');

/**
 * vanilla_bridge_init 
 */
	function vanilla_bridge_init() {
		
		$discussions_text=elgg_get_plugin_setting("forum_title");
		elgg_register_menu_item('site', array(
						'name' => 'discussions',
						'text' => elgg_echo($discussions_text),
						'href' => 'vanilla_bridge/all'
		));
		// Register a page handler, so we can have nice URLs
		elgg_register_page_handler('vanilla_bridge','vanilla_bridge_page_handler');
		
		
		
	
	if (elgg_is_logged_in()) {
	
		 		
		
		$user = elgg_get_logged_in_user_entity();
		
	}
	
	
}

/**
 * vanilla_bridge page handler; allows the use of fancy URLs
 *
 * @param array $page From the page_handler function
 * @return true|false Depending on success
 */
function vanilla_bridge_page_handler($page) {
	if (isset($page[0])) {
		switch($page[0]) {
		case "auth":			@include(dirname(__FILE__) . "/pages/vanilla_bridge/auth.php");
								break;
		case "all":			@include(dirname(__FILE__) . "/pages/vanilla_bridge/all.php");
								break;
			
		}
		return TRUE;
				
	} else {
		@include(dirname(__FILE__) . "/pages/index.php");
		return TRUE;
	}
	
	return FALSE;
	
}

elgg_register_action("vanilla_bridge/show", dirname(__FILE__) . "/actions/vanilla_bridge/show.php");
				
	
?>