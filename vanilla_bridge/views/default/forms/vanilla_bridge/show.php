<?php
$vanilla_url=elgg_get_plugin_setting("vanilla_url"); 
$display=<<<DISP
	<script type="text/javascript" src="$vanilla_url/plugins/embedvanilla/remote.js"></script>
DISP;

echo $display;
?>
