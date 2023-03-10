<?php
$num_paginator_steps = min(6, $pages);
if ($page < 4) {
    $paginator_first = 1;
    $paginator_last = $num_paginator_steps;
} else {
    $paginator_first = $page - 2;
    $paginator_last = $page - 2 + $num_paginator_steps - 1;
}

if ($paginator_last > $pages) {
    $offset = $paginator_last - $pages;
    $paginator_last -= $offset;
    $paginator_first -= $offset;
}

$paginator_steps = range($paginator_first, $paginator_last);
if ($num_paginator_steps >= 6) {
    if ($page >= 4) {
        $paginator_steps[0] = 1;
        $paginator_steps[1] = '...';
    }
    if ($pages > $paginator_last) {
        $paginator_steps[$num_paginator_steps - 2] = '...';
        $paginator_steps[$num_paginator_steps - 1] = $pages;
    }
}

?>
<div class="paginator-widget">
    <a class="button round-large grey" href="/results?page=<?php echo max($page - 1, 1) ?>&pagesize=<?php echo $pagesize ?>">
        <?php icon('arrow-left') ?>
    </a>
    <div class="steps">
        <?php foreach ($paginator_steps as $i) {
            if ($i == $page) {
                echo '<a class="step active" href="/results/?page=' . $i . '&pagesize=' . $pagesize . '">' . $i . '</a>';
            } else if ($i == '...') {
                echo '<div class="step">' . $i . '</div>';
            } else {
                echo '<a class="step" href="/results/?page=' . $i . '&pagesize=' . $pagesize . '">' . $i . '</a>';
            }
        } ?>
    </div>
    <a class="button round-large grey" href="/results?page=<?php echo min($page + 1, $pages) ?>&pagesize=<?php echo $pagesize ?>">
        <?php icon('arrow-right') ?>
    </a>
</div>