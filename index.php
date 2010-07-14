<?php
/**
 * @package PerformerJS
 * @author Chris Taylor
 * @version 1.0
 */
/*
Plugin Name: PerformerJS
Plugin URI: http://performerjs.org/
Description: Performer is a JavaScript class that works with your favourite library (jQuery, Prototype, Scriptaculous and MooTools are currently supported) giving you simple JavaScript features in your web pages without having to write any JavaScript code. Using standard element attributes such as 'class' you can do AJAX requests, toggle the visibility of elements, check form inputs and much more. A full list of the features available, with documentation, <a href="http://performerjs.org/docs">is available here</a>.
Author: Chris Taylor
Version: 1.0
Author URI: http://www.stillbreathing.co.uk/
*/

function performerjs()
{
	echo '
<script type="text/javascript">
if ((!window.Prototype || typeof window.Prototype == "undefined") && (!window.MooTools || typeof window.MooTools == "undefined") && (!window.jQuery || typeof window.jQuery == "undefined")){
	document.write("<"+"script type=\'text/javascript\' src=\'http://www.google.com/jsapi\'><"+"/script>");
	document.write("<"+"script type=\"text/javascript\">google.load(\'jquery\', \'1\');<"+"/script>");
}
</script>
<script src="' . get_option("siteurl ") . '/wp-content/plugins/performerjs/performer-min.js" type="text/javascript"></script>
';
}

add_action('admin_head', 'performerjs');
add_action('wp_footer', 'performerjs');
?>
