<?php

$path_segments = array();
$parsed_segments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
array_shift($parsed_segments);
array_pop($parsed_segments);
foreach ($parsed_segments as $segment) {
    $path_segments[] = new PathSegment(name: $segment);
}
$last_segment_index = count($path_segments) - 2;

?>

<div class="breadcrumbs-widget">
    <?php for ($i = 0; $i <= $last_segment_index; $i++) {
        if ($i < $last_segment_index) {
            echo '<a href="' . $path_segments[$i]->url . '" class="segment">' . $path_segments[$i]->name . '</a><div class="separator"></div>';
        } else {
            echo '<a href="' . $path_segments[$i]->url . '" class="segment active">' . $path_segments[$i]->name . '</a>';
        }
    } ?>
</div>