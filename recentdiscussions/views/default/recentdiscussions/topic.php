<?php

foreach (array_keys($vars['groupsposts']) as $groupid) {
  $group = get_entity($groupid);
  $info .= "<h4><a href=\"{$group->getURL()}\">" . elgg_echo('group') . " {$group->name}</a></h4>";
  $info .= "<blockquote style='margin:0px, padding:0px'>";

  $grouptopics = $vars['groupsposts'][$groupid];
  foreach (array_keys($grouptopics) as $topicid) {
    $topic = get_entity($topicid);
    $info .= "- <a href=\"".elgg_get_site_url()."discussion/view/$topicid\">" . $topic->title . "</a><br>";

    if ($vars['showmessages']) {
      foreach ($grouptopics[$topicid] as $post) {
        $info .= $post->value;
      }
    }
  }
  $info .= "</blockquote>";
}

$info .= "<div class='clearfloat'></div>";

echo $info;
