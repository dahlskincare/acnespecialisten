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
    <div id="nav-buttons-scroller">
        <?php foreach ($nav_buttons as $id => $label) { ?>
            <a class="nav-button" href="javascript:;" data-id="<?php echo $id ?>" onclick="NavButtons.setActive(this);" title="<?php echo $label ?>"><?php echo $label ?></a>
        <?php } ?>
    </div>
</div>
<script src="includes/widgets/nav_buttons/nav_buttons.js"></script>