<?php

/**
 * Elgg RecentDiscussions
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jean-Baptiste Perriot <jb@perriot.fr>
 */

$max_topics = $vars['entity']->num_display;

if(!$max_topics)
$max_topics = 10;

$ownerid = $vars['entity']->owner_guid;
$offset = 0;
$sortedposts = array();
$topiccount = 0;

while ($topiccount < $max_topics ) {
  $lastposts = elgg_get_annotations(array('annotation_name' => 'group_topic_post',
                                          'annotation_owner_guid' => $ownerid,
                                          'limit' => 10,
                                          'offset' => $offset,
                                          'order_by' => 'n_table.time_created desc'
                                         ));

  if (!$lastposts) {
    break;
  }

  // Build an array with the posts sorted by groups/topics
  foreach ($lastposts as $lastpost) {
    $topicid = $lastpost->entity_guid;
    $topic = get_entity($topicid);
    $groupid = $topic->container_guid;
    $group = get_entity($groupid);

    if (!array_key_exists($groupid, $sortedposts)) {
      $sortedposts[$groupid] = array();
    }
    if (!array_key_exists($topicid, $sortedposts[$groupid])) {
      $topiccount++;
      $sortedposts[$groupid][$topicid] = array();
    }
    array_push($sortedposts[$groupid][$topicid], $lastpost);

    if ($topiccount >= $max_topics) {
      break;
    }
  }
  $offset += 10;
}

// Pass it to the view
echo elgg_view("recentdiscussions/topic", array("groupsposts" => $sortedposts, "showmessages" => false));
