Recent discussions plugin for Elgg 1.8
Latest Version: 1.8.3
Released: 2014-01-04
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (C) iionly 2012-2014, (c) Jean-Baptiste Perriot 2009-2014



The plugin offers a widget to be added to the profile page / dashboard which shows / links to the latest group discussions the user has participated in (latest 5, 10, 15, 20 depending on how the widget is configured by the user). The widget won't show the starting entry of a discussion (= Elgg entity) but only the latest comments the user made in group discussions (= Elgg annotations).

Additionally, you can include the "Recent discussions" widget also on your index page. Assuming you are using the custom_index plugin add the following lines to the file mod/custom_index/views/default/page/layouts/custom_index.php at the appropriate place (depending on where you want the Recent discussions widget to be placed within your index page):

// Recent discussions plugin
if (elgg_is_active_plugin('recentdiscussions')) {
  $html = elgg_view('index/recentdiscussions');
  echo elgg_view_module('featured',  elgg_echo('recentdiscussions:title'), $html, $mod_params);
}

If you are using the Widget Manager plugin, the recentdiscussions plugins comes with a widget you can add to your index page using the Widget Manager plugin without the need to modify any code.



Installation:

1. Copy the recentdiscussions folder in the mod directory of your Elgg installation,
2. Enable the plugin in the admin section.
3. The widget can now be added to profile pages/dashboards.
(4. Optionally: if you have the Widget Manager plugin installed, you can add the recentdiscussions widget to your index page.)



Changelog:

1.8.3:

- Fixed WSOD due to listing of (public or logged-in accessible) discussions that belong to restricted/hidden groups. Such discussions are now no longer listed to non-members of these groups.

1.8.2

- Index page widget for Widget Manager plugin added,
- fix in index page view if custom_index plugin is used.

1.8.1

- French translation added (thank to emanwebdev),
- German translation added.

1.8.0

- Initial release for Elgg 1.8.
