<?php

// set default value
if (!isset($vars['entity']->num_display)) {
  $vars['entity']->num_display = 10;
}

$params = array(
        'name' => 'params[num_display]',
        'value' => $vars['entity']->num_display,
        'options' => array(5, 10, 15, 20),
);
$dropdown = elgg_view('input/dropdown', $params);

?>
<div>
  <?php echo elgg_echo('recentdiscussions:widget:numberdiscussions'); ?>:
  <?php echo $dropdown; ?>
</div>
