<div class="green-header-banner-widget">
    <div class="container">
        <div id="ghb-touch" class="is-hidden-desktop">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            <h1><?php echo $green_banner_content->title ?></h1>
            <?php if (sizeof($green_banner_content->akas) > 0) { ?>
                <div id="ghb-akas-touch">
                    <div class="p100 mt-xs l10n">Även känt som</div>
                    <div id="gbh-akas-touch-links">
                        <?php foreach ($green_banner_content->akas as $aka) { ?>
                            <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>"><?php echo $aka->label ?></a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <div id="ghb-touch-content">
                <span><?php echo $green_banner_content->description ?></span>
                <?php if (isset($green_header_banner->description_extended)) { ?>
                    <span class="l10n underline h200" onclick="GreenHeaderBanner.onReadMoreClick(this)">läs mer</span>
                <?php } ?>
                <div id="banner-expanded" class="zero-size">
                    <?php echo $green_banner_content->description_extended ?>
                </div>
            </div>
            <?php if ($green_banner_content->show_consultation_card) { ?>
                <div class="ghb-consultation-card">
                    <div class="ghb-consultation-card-content">
                        <div class="ghb-consultation-card-text">
                            <h3 class="l10n">Få specialisthjälp</h3>
                            <p class="l10n">Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.</p>
                        </div>
                        <?php icon('consultation') ?>
                    </div>
                    <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service" class="button outline">Boka en gratis hudkonsultation</a>
                </div>
            <?php } ?>
            <div id="ghb-touch-links">
                <?php foreach ($green_banner_content->links_touch as $link) { ?>
                    <a href="<?php echo $link->url ?>" title="<?php echo $link->title ?>" class="button b200 white"><?php echo $link->label ?></a>
                <?php } ?>
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
                <div id="ghb-texts-col">
                    <div class="h600"><?php echo $green_banner_content->title ?></div>
                    <?php if (sizeof($green_banner_content->akas) > 0) { ?>
                        <div id="ghb-akas">
                            <span class="p200">Även känt som</span>
                            <?php foreach ($green_banner_content->akas as $aka) { ?>
                                <?php if (isset($aka->url)) { ?>
                                    <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline"><?php echo $aka->label ?></a>
                                <?php } else { ?>
                                    <span class="b200"><?php echo $aka->label ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <p><?php echo $green_banner_content->description ?></p>
                    <p><?php echo $green_banner_content->description_extended ?></p>
                    <div id="ghb-links">
                        <?php foreach ($green_banner_content->links_desktop as $link) { ?>
                            <a href="<?php echo $link->url ?>" title="<?php echo $link->title ?>" class="button b200 white"><?php echo $link->label ?></a>
                        <?php } ?>
                    </div>

                </div>
                <?php if ($green_banner_content->show_consultation_card) { ?>
                    <div class="ghb-consultation-card">
                        <div class="ghb-consultation-card-content">
                            <div class="ghb-consultation-card-text">
                                <h3 class="l10n">Få specialisthjälp</h3>
                                <p class="l10n">Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.</p>
                            </div>
                            <?php icon('consultation') ?>
                        </div>
                        <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service" class="button outline">Boka en gratis hudkonsultation</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script src="includes/widgets/green_header_banner/green_header_banner.js"></script>