<?php
if ($lang == 'sv') {
    $badges_trustpilot = '<strong>4,8</strong> på Trustpilot';
    $badges_years_in_service = '<strong>30 år</strong> i tjänst';
    $badges_clients = '<strong>200k+</strong> kunder';
} else {
    $badges_trustpilot = '<strong>4,8</strong> on Trustpilot';
    $badges_years_in_service = '<strong>30+</strong> years';
    $badges_clients = '<strong>200k+</strong> clients';
}
?>

<div class="badges-widget p100">
    <div class="badge">
        <?php icon('trustpilot') ?>
        <span class="l10n">
            <?php echo $badges_trustpilot ?>
        </span>
    </div>
    <div class="badge">
        <span class="l10n">
            <?php echo $badges_years_in_service ?>
        </span>
    </div>
    <div class="badge">
        <span class="l10n">
            <?php echo $badges_clients ?>
        </span>
    </div>
</div>