<div class="green-header-banner-widget">
    <div class="container">
        <div id="ghb-touch" class="is-hidden-desktop">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            <h1><?php echo $green_banner_content->title ?></h1>
            <div id="ghb-touch-content">
                <span><?php echo $green_banner_content->description ?></span>
                <span class="l10n underline h200" onclick="GreenHeaderBanner.onReadMoreClick(this)">läs mer</span>
                <div id="banner-expanded" class="zero-size">
                    <?php echo $green_banner_content->description_extended ?>
                </div>
            </div>
            <div class="ghb-consultation-card">
                <div class="ghb-consultation-card-content">
                    <div class="ghb-consultation-card-text">
                        <h3 class="l10n">Get specialists help</h3>
                        <p class="l10n">Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.</p>
                    </div>
                    <?php icon('consultation') ?>
                </div>
                <a href="/gratis-hudkonsultation.php" class="button outline">Boka en gratis hudkonsultation</a>
            </div>
            <div id="ghb-touch-badges">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
        </div>
        <div id="ghb-desktop" class="is-hidden-touch">
            <div id="ghb-header">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
            <div id="ghb-main">
                <div>
                    <h1><?php echo $green_banner_content->title ?></h1>
                    <div id="ghb-texts-col">
                        <p><?php echo $green_banner_content->description ?></p>
                        <p><?php echo $green_banner_content->description_extended ?></p>
                    </div>
                </div>
                <div class="ghb-consultation-card">
                    <div class="ghb-consultation-card-content">
                        <div class="ghb-consultation-card-text">
                            <h3 class="l10n">Get specialists help</h3>
                            <p class="l10n">Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.</p>
                        </div>
                        <?php icon('consultation') ?>
                    </div>
                    <a href="/gratis-hudkonsultation.php" class="button outline">Boka en gratis hudkonsultation</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="includes/widgets/green_header_banner/green_header_banner.js"></script>