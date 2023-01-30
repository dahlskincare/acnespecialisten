<?php


$segments = array();
if ($lang == 'sv') {
    $segments[0] = new PathSegment('hem', '/');
} else {
    $segments[0] = new PathSegment('home', '/');
}

$url_segments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
array_shift($url_segments);
foreach ($url_segments as $segment) {
    $segments[] = new PathSegment($segment);
}

$last_index = count($segments) - 1;
?>

<div class="breadcrumbs-widget">
    <?php for ($i = 0; $i <= $last_index; $i++) {
        if ($i < $last_index) {
            echo '<a href="' . $segments[$i]->url . '" class="segment">' . $segments[$i]->name . '</a><div class="separator"></div>';
        } else {
            echo '<a href="' . $segments[$i]->url . '" class="segment active">' . $segments[$i]->name . '</a>';
        }
    } ?>
</div>