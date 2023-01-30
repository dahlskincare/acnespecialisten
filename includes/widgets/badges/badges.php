<?php
if ($lang == 'sv') {
    $badges_trustpilot = '4,8 på Trustpilot';
    $badges_years_in_service = '30 år i tjänst';
    $badges_clients = '200k+ kunder';
} else {
    $badges_trustpilot = '4,8 on Trustpilot';
    $badges_years_in_service = '30 years';
    $badges_clients = '200k+ clients';
}
?>

<div class="badges-widget h100">
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