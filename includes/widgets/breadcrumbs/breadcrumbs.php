<?php

if (!isset($path_segments)) {
    $path_segments = array();
    $parsed_segments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    array_shift($parsed_segments);
    array_pop($parsed_segments);
    foreach ($parsed_segments as $segment) {
        $path_segments[] = new PathSegment(name: $segment);
    }
}
$last_segment_index = count($path_segments) - 1;

if ($last_segment_index >= 0) { ?>
    <div class="breadcrumbs-widget">
        <?php for ($i = 0; $i <= $last_segment_index; $i++) {
            if ($i < $last_segment_index) {
                echo '<a href="' . $path_segments[$i]->url . '" class="segment" title="' . $path_segments[$i]->name . '">' . $path_segments[$i]->name . '</a><div class="separator"></div>';
            } else {
                echo '<a href="' . $path_segments[$i]->url . '" class="segment active" title="' . $path_segments[$i]->name . '">' . $path_segments[$i]->name . '</a>';
            }
        } ?>
    </div>
<?php } ?>