= Vanilla 2 bridge =

Integrate vanilla 2 with elgg 1.8.3

== Contents ==

1. Requirements
2. Installation steps

== 1. Requirements ==

The following installations are required:

- Vanilla 2.0.18.1
- ProxyConnect 2 (Vanilla plugin)

== 2. Installation steps ==


- Install vanilla 2 on your elgg vendors folder (http://yourelggurl/vendors/vanilla/)
- Activate the vanilla bridge plug in.
- After activation set the url of Vanilla and the title for the Vanilla forum menu item.
- On Vanilla go to dashboard, and on the right menu select under users the authentication link.
 - select ProxyConnect as the authenitcator
 - In integration manager select Manual integration
 - Under Vanilla configuration set the main site url, authentication url, registeration url, sign in and sign out url (see screen shot for example)
 - Click save settings.
- Clear the browser and elgg cache.
- This version of the plugin enables it to be displayed properly with the facebook theme for elgg 1.8.3
- To enable it add the following code to facebook_theme_pagesetup_handler in start.php
- if (elgg_is_active_plugin('vanilla_bridge')) {
			$discussions_text=elgg_get_plugin_setting("forum_title","vanilla_bridge");
			elgg_register_menu_item('topbar', array(
						'name' => 'discussions',
						'text' => "".elgg_echo("$discussions_text"),
						'priority' => 2,
						
						'href' => 'vanilla_bridge/all'
		));
		}
- Enjoy.
