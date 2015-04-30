=== WP Block Semalt ===
Contributors: cklosows
Tags: semalt, bots, crawlers, google analytics
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 1.1
Donate link: https://filament-studios.com/donate
License: GPLv2 or later

Simply uses the HTTP_REFERER to determine if it's from 'Semalt', and blocks it with a nice 403 "Unauthorized" response.

== Description ==

Pretty simple. Just blocks semalt.semalt.com with a 403.

If your web host uses a web server that doesn't support .htaccess, then this plugin is for you.

If your host supports .htaccess, you should try https://wordpress.org/plugins/block-semalt, as this is the best method.

== Installation ==

1. Install the WP Block Semalt Plugin
2. Activate the plugin
3. Stop seeing Semalt in your analytics stats

== Changelog ==
= 1.1 =
* NEW: Added best-seo-offer.com to the URL list
* NEW: Added filter for the URLS to look for
* TWEAK: Does not check on logged in or admin sessions

= 1.0 =
* Initial Release

== Frequently Asked Questions ==

= I still see semalt sometimes =

This plugin was a way to try and catch the low hanging fruit...I'm relying on the 'HTTP_REFERER' which isn't always reliable. Most of the time it will be, but not always.

If your host supports .htaccess, you can try using https://wordpress.org/plugins/block-semalt as a more complete solution.

== Screenshots ==
None at this time
