Recent discussions plugin for Elgg 1.8
Latest Version: 1.8.1
Released: 2012-05-27
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (C) iionly 2012, (c) Jean-Baptiste Perriot 2009


The plugin offers a widget to be added to the profile page / dashboard which shows / links to the latest group discussions the user has participated in (latest 5, 10, 15, 20 depending on how the widget is configured by the user). The widget won't show the starting entry of a discussion (= Elgg entity) but only the latest comments the user made in group discussions (= Elgg annotations).

Additionally, you can include the "Recent discussions" widget also on your index page. Assuming you are using the custom_index plugin add the following lines to the file mod/custom_index/views/default/page/layouts/custom_index.php at the appropriate place (depending on where you want the Recent discussions widget to be placed within your index page):

// Recent discussions plugin
if (elgg_is_active_plugin('recentdiscussions')) {
  $html = elgg_view('index/recentdiscussions');
  echo elgg_view_module('featured',  elgg_echo('recentdiscussions:title'), $html, $mod_params);
}


Installation:

1. Copy the recentdiscussions folder in the mod directory of your Elgg installation,
2. Enable the plugin in the admin section.
3. The widget can now be added to profile pages/dashboards.



Changelog:

1.8.1

- French translation added (thank to emanwebdev),
- German translation added.

1.8.0

- Initial release for Elgg 1.8.
