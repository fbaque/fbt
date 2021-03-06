=== Hyper Cache ===
Tags: cache,performance,staticizer,apache,htaccess,tuning,speed,bandwidth,optimization,tidy,gzip,compression,server load,boost
Requires at least: 2.5
Tested up to: 3.9.2
Stable tag: trunk
Donate link: http://www.satollo.net/donations

Hyper Cache is flexible and easy to configure cache system for WordPress.

== Description ==

New! Version 3.0 has been rewritten. Be patient if some bugs are present and report
me any issue. Thank you.

Hyper Cache is a new cache system for WordPress, specifically written for
people which have their blogs on low resources hosting provider
(cpu and mysql). It works even with hosting based on Microsoft IIS (just tuning
the configuration). It has three invalidation method: all the cache, single post
based and nothing but with control on home and archive pages invalidation.

More can be read on the [official plugin page](http://www.satollo.net/plugins/hyper-cache).

Thanks to:

* Amaury Balmer
* Frank Luef
* HypeScience, Martin Steldinger, Giorgio Guglielmino for test and bugs submissions
* Ishtiaq
* Gene Steinberg
* Marcis Gasun
* Florian Höch
* Quentin
* Mckryak
* Tommy Tung


== Installation ==

1. Put the plugin folder into [wordpress_dir]/wp-content/plugins/
2. Go into the WordPress admin interface and activate the plugin
3. Optional: go to the options page and configure the plugin

== Frequently Asked Questions ==

See the [Hyper Cache official page](http://www.satollo.net/plugins/hyper-cache) or
the [Hyper Cache official forum](http://www.satollo.net/forums/forum/hyper-cache-plugin).

== Screenshots ==

1. The main configuration panel

2. Configuration of bypasses (things you want/not want to be cached)

3. Mobile devices configuration

== Changelog ==

= 3.0.2 =

* Added the browser caching option
* Fixed a cache header
* Fixed warning on cache size if empty

= 3.0.1 =

* Short description fix on plugin.php
* Forum link fix on readme.txt
* More help on comment authors option

= 3.0.0 =

* Totally rewritten to include the Lite Cache features

= To Do =

* Register an action to clean the cache by other plugin
* Separated cache for https
* Invalidation of categories paths when /%category%/%postname% is used

