<?php if (!isset($results)) {
    $results = array();
} ?>

<div class="is-hidden-tablet">
    <div class="flex-row justify-space-between">
        <div class="h500 l10n">Results</div>
        <div class="result-step-buttons">
            <button class="round-large grey">
                <?php icon('arrow-left') ?>
            </button>
            <button class="round-large grey">
                <?php icon('arrow-right') ?>
            </button>
        </div>
    </div>
    <div class="results-scroller">
        <?php
        foreach ($results as $result) {
            include('result.php');
        }
        ?>
    </div>
    <a class="button b200 outline expand l10n" href="results">View all treatment results</a>
</div>
<div class="is-hidden-mobile">
    <div class="flex-row align-end justify-space-between">
        <div class="h500 l10n">Results</div>
        <a href="results" class="button compact text">
            <span class="l10n">View all treatment results</span>
            <?php icon('navigate-next') ?>
        </a>
    </div>
    <div class="columns is-3 is-variable">
        <?php
        foreach ($results as $result) { ?>
            <div class="column">
                <?php include('result.php'); ?>
            </div>
        <?php } ?>
    </div>
</div>