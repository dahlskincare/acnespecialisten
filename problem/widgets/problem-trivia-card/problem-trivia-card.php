<div class="problem-trivia-card-widget">
    <h3 class="h300">
        <span class="trivia-prefix"><?php echo $trivia->prefix ?></span><span><?php echo $trivia->title ?></span>
    </h3>
    <?php if (sizeof($trivia->icons) > 0) { ?>
        <div class="flex-row">
            <?php foreach ($trivia->icons as $icon => $label) { ?>
                <div class="trivia-icon">
                    <?php
                    icon($icon);
                    echo '<span>' . $label . '</span>';
                    ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="p200 mt-m">
        <?php echo $trivia->content ?>
    </div>
    <button class="mt-m text b200 compact is-hidden-mobile" onclick="showExtendedContent(this)">
        <span class="l10n">Läs mer</span>
        <?php icon('arrow-down') ?>
    </button>
    <button class="mt-m grey b100 expand is-hidden-tablet" onclick="showExtendedContent(this)">
        <span class="l10n">Läs mer</span>
        <?php icon('arrow-down') ?>
    </button>
    <div class="p200 mt-m is-hidden" id="extended-content">
        <?php echo $trivia->extended_content ?>
    </div>
</div>