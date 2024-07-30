<?php
$consultation_banner_title = 'Vill du ha hjälp med din hy?';
$consultation_banner_description = 'Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.';
$consultation_banner_button_label = 'Boka en gratis hudkonsultation';
?>


<div class="consultation-banner-widget">
    <div class="columns is-vcentered">
        <div class="column">
            <h2 class="l10n">
                <?php echo $consultation_banner_title ?>
            </h2>
            <p class="p200 l10n">
                <?php echo $consultation_banner_description ?>
            </p>
        </div>
        <div class="column">
            <a href="gratis-hudkonsultation.php" class="button b200 white l10n" title="<?php echo $consultation_banner_button_label ?>"><?php echo $consultation_banner_button_label ?></a>
        </div>
    </div>
</div>