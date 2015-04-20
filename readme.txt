=== Plugin Name ===
Contributors: mrwiblog
Donate link: http://www.stillbreathing.co.uk/donate/
Tags: performer, javascript, html, css, interaction, ajax
Requires at least: 2.7
Tested up to: 4.2
Stable tag: 1.0.5

PerformerJS allows you to add really cool effects and features to your website by doing some simple editing of the HTML code in your pages.

== Description ==

For beginners:

Ever wanted to put those really great effects on your website, but didn't know how to start? Yeah, so have we. That's why we wrote [Performer](http://performerjs.org "JavaScript without the code") - to take away the pain. AJAX, toggling visibility, form and password checking, tabbing, inline editing and more. We've got it all. Check out [all the features here](http://performerjs.org/docs "The full list of Performer features"), or download the PerformerJS plugin to get started.

For intermediate developers:

Performer allows you to easily add JavaScript features - like AJAX stuff - to your pages using nothing but CSS classes and other standard element attributes, like rel and rev. There are [a wide range of features available](http://performerjs.org/docs "The full list of Performer features") and Performer works with jQuery, MooTools and Prototype.

For advanced developers:

Prototype allows you to easily add JavaScript features to your pages using nothing but CSS classes and other standard element attributes. Using the power of a JavaScript library (there's a list of libraries Performer supports below) means you have to write less JavaScript code to get things done. But even that isn't enough. For simple effects and functions wouldn't it be great to add the JavaScript functionality as you build the HTML of a page? See the Getting Started section for some simple examples.

To be clear; Performer works with your JavaScript library to make it easier to add simple functionality to your page. While it may be possible to write an entire complex web application interface using Performer, I don't recommend it. Check out [the Documentation](http://performerjs.org/docs "The full list of Performer features") for full details on all features Performer supports.

And if you don't have one of the supported JavaScript libraries already in use on your site, PerformerJS will automatically include the latest version of [jQuery](http://jquery.com "The best JavaScript library") from the Google AJAX API site.

== Installation ==

Put the plugin into your /wp-content/plugins/ folder and activate using the Manage Plugins screen. The files should be at the following locations:

/wp-content/plugins/performerjs/
/wp-content/plugins/performerjs/index.php
/wp-content/plugins/performerjs/performer-min.js

== Frequently Asked Questions ==

= What is Performer? =

PerformerJS allows you to add really cool effects and features to your website by doing some simple editing of the HTML code in your pages. It allows you to affect stuff on your page, just like the clever JavaScript guys do, without writing any JavaScript. Yes, even AJAX.

= Why did you write this plugin? =

I think that Performer has the potential to make life much easier for website developers who want to get the basics done quickly. A lot of those developers use Wordpress to create sites, so a simple plugin was a no-brainer.

= How does Performer work? =

Performer is pretty simple. First it detects if one of the supported JavaScript libraries is present (jQuery, MooTools and Prototype). If so it goes through the page looking for Performer CSS classes (such as 'toggler', 'loader' and 'pager'). Based on other CSS classes - which I call 'CSS-parameters' - Performer sets up simple JavaScript listeners to catch interaction events.

For example, for every 'toggler' link on the page Performer will attach a click listener to the link so then it is clicked the visibility of the target element is toggled. Simples.

There's loads more information in [the Documentation](http://performerjs.org/docs "The full list of Performer features").

= And the Wordpress plugin? =

This plugin simply includes the Performer JavaScript file using the 'admin_head' (yes, Performer in the admin area) and 'wp_footer' hooks. However it first checks to see if one of the support JavaScript libraries is present, and if not includes the jQuery library using the Google AJAX API.

== Screenshots ==

No screenshots needed.

== Upgrade Notice ==

This is the first version.

== Changelog ==

= 1.0.5 =

Made plugin handle non-standard plugin directories. Tested up to 4.2.

= 1.0.4 =

Added delay parameter to Looper, allowing for slideshows. Fixed some bugs.

= 1.0.3 =

Fixed 3 bugs

= 1.0.1 =

Updated to version 1.0.1 of the library, enabled loading of customised jQuery, Prototype and MooTools version

= 1.0 =

Updated to version 1.0 of the library

= 0.8 =

Initial plugin version, numbered 0.8 to keep up with the version of the Performer JavaScript library itself.