<?php
$consultation_banner_title = 'Want to identify your problem?';
$consultation_banner_description = 'In a personal meeting with a skin specialist, your skin type is examined';
$consultation_banner_button_label = 'Get a free consultation';
?>


<div class="consultation-banner-widget">
    <div class="columns is-vcentered">
        <div class="column">
            <h2 class="h400 l10n">
                <?php echo $consultation_banner_title ?>
            </h2>
            <p class="p200 l10n">
                <?php echo $consultation_banner_description ?>
            </p>
        </div>
        <div class="column">
            <a href="hudkonsultation" class="button b200 white l10n" title="<?php echo $consultation_banner_button_label ?>"><?php echo $consultation_banner_button_label ?></a>
        </div>
    </div>
</div>