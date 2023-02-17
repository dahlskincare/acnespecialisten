<div class="nav-buttons-widget carousel">
    <?php foreach ($nav_buttons as $id => $label) { ?>
        <a class="slide" href="javascript:;" onclick="scrollToElement('#<?php echo $id ?>')" class="button grey l10n"><?php echo $label ?></a>
    <?php } ?>
</div>