=== Plugin Name ===
Contributors: nathanrice, studiopress
Tags: social media, social networking, social profiles
Requires at least: 3.0
Tested up to: 4.8.3
Stable tag: 1.2.3

This plugin/widget allows you to insert icon links to your social profiles in any widgetized area.

== Description ==

By simply dragging this widget into your sidebar or any widgetized area, you can easily place icon links to your various social profiles like twitter, facebook, flickr, etc.

== Installation ==

1. Upload the entire social-profiles-widget folder to the /wp-content/plugins/ directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. In your Widgets menu, simply drag the widget labeled "Social Profiles" into a widgetized Area.
1. Configure the widget by choosing a title, icon size, and the URLs to your various social profiles.

== Frequently Asked Questions ==

= The icons are a bit crowded in my sidebar. How do I give them breathing room? =

Open your theme's style.css file, and insert this code (somewhere near the bottom of the file).

.social-profiles img {
	padding-right: 10px;
}

You can adjust that code to suite your needs, depending on your situation.

== Changelog ==

= 0.1-beta =
* Pre-Release

= 1.0 =
* Added Linkedin Support

= 1.1 =
* Added support for more icons
* Changed name from "Total Social" to "Social Profiles Widget"
* Updated PHP techniques to be compatible with WordPress standards
* Added groundwork for localization

= 1.1.1 =
* Added `alt` tags to image output
* Changed plugin file from `total-social.php` to `plugin.php`

= 1.2 =
* Added new 24x24 image size

= 1.2.1 =
* Add option to open links in a new window

= 1.2.2 =
* PHP7 compatibility

= 1.2.3 =
* Fixed undefined index warning
* Fixed spacing in widget form