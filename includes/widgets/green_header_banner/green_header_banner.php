<div class="green-header-banner-widget">
    <div class="container">
        <div class="is-hidden-desktop">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            <h1 class="h600"><?php echo $green_banner_content->title ?></h1>
            <p class="p200 mt-xs">
                <span><?php echo $green_banner_content->description ?></span>
                <span class="l10n underline h200" onclick="GreenHeaderBanner.onReadMoreClick(this)">läs mer</span>
                <span id="banner-expanded" class="zero-size">
                    <?php echo $green_banner_content->description_extended ?>
                </span>
            </p>
            <a href="<?php echo $green_banner_content->button_url ?>" class="button b200 white expand mt-xl" title="<?php echo $green_banner_content->button_label ?>"><?php echo $green_banner_content->button_label ?></a>
        </div>
        <div class="is-hidden-touch">
            <div class="flex-row justify-space-between">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                <div class="mt-xl mb-xs">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
            <div class="flex-row align-end justify-space-between">
                <div id="ghb-title-col">
                    <h1 class="h600 mt-xs"><?php echo $green_banner_content->title ?></h1>
                    <a href="<?php echo $green_banner_content->button_url ?>" class="button b200 white mt-xl" title="<?php echo $green_banner_content->button_label ?>"><?php echo $green_banner_content->button_label ?></a>
                </div>
                <div id="ghb-texts-col">
                    <div>
                        <?php echo $green_banner_content->description ?>
                    </div>
                    <div class="ml-xl4">
                        <?php echo $green_banner_content->description_extended ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-s is-hidden-desktop">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
</div>
<script src="includes/widgets/green_header_banner/green_header_banner.js"></script>