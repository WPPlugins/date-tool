=== Date Tool ===
Contributors: gordi555
Donate link: http://www.dealsanddiscountcodes.co.uk
Tags: date, return date, current date, current day, current month, current year
Requires at least: 3.3
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin that returns the current date/time in a variety of different ways.

== Description ==

This simple plugin makes it possible to insert the current date, time or date & time related information into your website. This is very handy if you are manually updating the date & time information and want to do this automatically in the future.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates and use the 'format' argument to display the current date and time information in a number of different ways.

== Frequently asked questions ==

= What's the easiest way to get this working after installation? =

Simply insert the following code into your post to display the current year.

[datetool_current format="Y"]
This displays: 2013

= What else can you use in the 'format' argument to display the current date and time information? =

For a complete reference and combinations you can visit this page: http://php.net/manual/en/function.date.php

Some examples...

Shortcode: [datetool_current format="Y"]
Output: 2013 (or what the current year is)

Shortcode: [datetool_current format="d"]
Output: 16 (or what number the current day is)

Shortcode: [datetool_current format="jS F Y"]
Output: 24th June 2013 (or what number the current date is)

== Screenshots ==



== Changelog ==

2013-06-23 Plugin created.

== Upgrade notice ==



== Arbitrary section 1 ==

