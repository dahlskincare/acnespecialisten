<div class="paginator-widget">
    <a class="button round-large grey" href="/results?page=<?php echo max($page - 1, 1) ?>&pagesize=<?php echo $pagesize ?>">
        <?php icon('arrow-left') ?>
    </a>
    <div class="steps">
        <?php for ($i = 1; $i < $pages + 1; $i++) {
            if ($i == $page) {
                echo '<a class="step active" href="/results/?page=' . $i . '&pagesize=' . $pagesize . '">' . $i . '</a>';
            } else {
                echo '<a class="step" href="/results/?page=' . $i . '&pagesize=' . $pagesize . '">' . $i . '</a>';
            }
        } ?>
    </div>
    <a class="button round-large grey" href="/results?page=<?php echo min($page + 1, $pages) ?>&pagesize=<?php echo $pagesize ?>">
        <?php icon('arrow-right') ?>
    </a>
</div>