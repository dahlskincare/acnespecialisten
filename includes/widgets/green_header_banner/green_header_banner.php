<div class="green-header-banner-widget">
    <div class="container">
        <div class="is-hidden-desktop">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            <h1 class="h600"><?php echo $green_banner_content->title ?></h1>
            <p class="p200">
                <span><?php echo $green_banner_content->description ?></span>
                <span class="l10n underline h200" onclick="GreenHeaderBanner.onReadMoreClick(this)">läs mer</span>
                <span id="banner-expanded" class="zero-size">
                    <?php echo $green_banner_content->description_extended ?>
                </span>
            </p>
        </div>
        <div class="is-hidden-touch">
            <div id="ghb-header">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
            <div id="ghb-main">
                <h1><?php echo $green_banner_content->title ?></h1>
                <div id="ghb-texts-col">
                    <div><?php echo $green_banner_content->description ?></div>
                    <div><?php echo $green_banner_content->description_extended ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container is-hidden-desktop">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
</div>
<script src="includes/widgets/green_header_banner/green_header_banner.js"></script>