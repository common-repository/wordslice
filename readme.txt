=== Plugin Name ===
Contributors: beakersoft
Plugin Name: wordslice
Author URI: http://www.beakersoft.co.uk
Plugin URI: http://www.we3soft.com/wordslice
Donate link:https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5735325
Tags: ie8, webslice, web slice
Requires at least: 2.0.0
Tested up to: 2.7.1
Stable tag: 0.1

Wordslice is a simple plugin to add web slice functionality to your wordpress blog

== Description ==

Internet Expolrer 8 brought with it a new bit of functionality called webslices. Instead of using traditional RSS feeds to keep up to date with
changes to your favorite sites, you can now use a webslice as well.

A webslice will display a section of a website, instead of just a list of text items. As the section of the website gets updated the slice will turn bold to inform the user there has been an update

The first version of this plugin will just go and get the last 7 blog enties and display them in an list. You can easliy change the 
style sheet included to make the slice reflect the look of your site. 

Upcoming versions should be more configurable and have added functionality, this version is just the initial alpha and will be updated based on
any feedback people offer.

What i'm looking at **Implementing** - 

* Ability to configure the plugin so you can tell it what sections to wrap a word slice around
* Ability to set the size, expiration time and other settings on the slice

== Installation ==

1. Upload the wordslice folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php echo write_slice_div(); ?>` in the template (probably index.php) where you want the slice to be avalable from.
1. Now when up view your page in IE8 you should have the ability to subscribe to your blog as a web slice
1. Alter the included webslice.css style sheet to change the look and feel of your web slice to match the rest of your site

== Frequently Asked Questions ==

= Why can i not see any webslice at all in Internet Explorer? =

There apears to be a bug in the release of IE8/Google gears. If you have Google gears installed then sometimes webslices may not load.
To get round this at present you need to disable the 

== Screenshots ==

1. What my blog looks like with the plugin installed

