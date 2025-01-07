<div class="accordion-widget">
    <div class="is-hidden-desktop" id="accordion-small">
        <div class="columns is-mobile is-multiline">
            <?php for ($i = 0; $i < sizeof($accordion); $i++) { ?>
                <?php if (!$accordion[$i]->show_on_small) {
                    continue;
                } ?>
                <div class="column is-one-third">
                    <a href="<?php echo $accordion[$i]->url; ?>" title="<?php echo $accordion[$i]->url_title ?>">
                        <div class="accordion-card">
                            <div class="image">
                                <img loading="lazy" src="<?php echo $accordion[$i]->image_small; ?>" width="114" height="140" alt="<?php echo $accordion[$i]->image_alt ?>" title="<?php echo $accordion[$i]->image_title ?>">
                            </div>
                            <div class="bottom">
                                <button class="text compact black l10n">
                                    <?php echo $accordion[$i]->label ?>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="is-hidden-touch" id="accordion-large">
        <div class="mt-xl" id="accordion-cards">
            <?php for ($i = 0; $i < sizeof($accordion); $i++) { ?>
                <?php if (!$accordion[$i]->show_on_large) {
                    continue;
                } ?>
                <?php if ($i < sizeof($accordion) - 1) { ?>
                    <a href="<?php echo $accordion[$i]->url ?>" class="accordion-card">
                        <div class="button white text black l10n">
                            <?php echo $accordion[$i]->label ?>
                        </div>
                        <div class="background-image" style="background-image: url('<?php echo $accordion[$i]->image_large ?>')"></div>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $accordion[$i]->url ?>" title="<?php echo $accordion[$i]->url_title ?>" class="accordion-card accordion-card-last">
                        <div class="button white text black l10n">
                            <?php echo $accordion[$i]->label ?>
                            <?php icon('navigate-next') ?>
                        </div>
                        <div class="background-image" style="background-image: url('<?php echo $accordion[$i]->image_large ?>')">
                            +<?php echo $more_count; ?>
                        </div>
                    </a>
                    <div class="image-frame image-frame1" style="background-image: url('<?php echo $accordion[$i]->image_large ?>')"></div>
                    <div class="image-frame image-frame2" style="background-image: url('<?php echo $accordion[$i]->image_large ?>')"></div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>