<div class="nav-buttons-widget">
    <div class="scroll-button is-hidden" id="scroll-prev">
        <button class="round-medium grey">
            <?php icon('arrow-left') ?>
        </button>
    </div>
    <div class="scroll-button is-hidden" id="scroll-next">
        <button class="round-medium grey">
            <?php icon('arrow-right') ?>
        </button>
    </div>
    <div class="carousel" id="nav-buttons-carousel">
        <?php foreach ($nav_buttons as $id => $label) { ?>
            <a class="slide" href="javascript:;" onclick="scrollToElement('#<?php echo $id ?>')" class="button grey l10n"><?php echo $label ?></a>
        <?php } ?>
    </div>
</div>
<script src="includes/widgets/nav_buttons/nav_buttons.js"></script>