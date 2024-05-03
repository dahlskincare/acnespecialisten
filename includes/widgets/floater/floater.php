<div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
    <div class="container">
        <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
            <div id="overlay">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                <div>
                    <h2 class="h600"><?php echo $green_banner_content->title ?></h2>
                    <div class="mt-m">
                        <span class="p200 l10n">Även kallat</span>
                        <div>
                            <?php foreach ($green_banner_content->akas as $aka) { ?>
                                <?php if (isset($aka->url)) { ?>
                                    <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                <?php } else { ?>
                                    <span class="b200 aka"><?php echo $aka->label ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="mt-m"><?php echo $floating_box ?></div>
                    <div class="mt-xl">
                        <div class="columns is-2 is-variable">
                            <?php foreach ($green_banner_content->links_touch as $link) { ?>
                                <div class="column">
                                    <a href="<?php echo $link->url ?>" title="<?php echo $link->title ?>" class="button white expand"><?php echo $link->label ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>