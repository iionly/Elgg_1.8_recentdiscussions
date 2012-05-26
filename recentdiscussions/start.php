<?php

/**
 * This plugin adds a widget that lists all the group discussions in which a user recently took part in.
 *
 * @package ElggOnline
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @Author Jean-Baptiste Perriot <jb@perriot.fr>
 */

function recentdiscussions_init() {

  //add a widget
  elgg_register_widget_type('recentdiscussions', elgg_echo('recentdiscussions:title'), elgg_echo('recentdiscussions:widget:description'));

  // Register for index page
  elgg_extend_view('index/recentdiscussions', 'recentdiscussions/indexview');
  }

elgg_register_event_handler('init','system','recentdiscussions_init');
