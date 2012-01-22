<p>
	<?php
	$forum_title = $vars['entity']->forum_title;
	$vanilla_url = $vars['entity']->vanilla_url;
	
	echo elgg_echo('Forum title');
	echo elgg_view('input/text', array(
			'name' => 'params[forum_title]',
			'value' => $forum_title,
		));
	echo elgg_echo('Vanilla url - (recommended is your_website_url/elgg/vendors/vanilla/)');
	echo elgg_view('input/text', array(
			'name' => 'params[vanilla_url]',
			'value' => $vanilla_url,
		));
	
	?>
    
</p>