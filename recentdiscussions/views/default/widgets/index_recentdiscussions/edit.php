<?php

$widget = $vars["entity"];

$count = (int) $widget->recentdiscussions_count;
if($count < 1){
    $count = 10;
}

?>

<div><?php echo elgg_echo("recentdiscussions:widget:numberdiscussions"); ?></div>
<?php echo elgg_view("input/text", array("name" => "params[recentdiscussions_count]", "value" => $count, "size" => "4", "maxlength" => "4")); ?>
