<div class="problem-trivia-card-widget">
    <h3 class="h300">
        <span class="trivia-prefix">
            <?php echo $trivia->prefix ?>
        </span>
        <span>
            <?php echo $trivia->title ?>
        </span>
    </h3>
    <?php if (sizeof($trivia->icons) > 0) { ?>
        <div class="trivia-icons mt-m">
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
    <p class="p200 mt-m">
        <?php echo $trivia->content ?>
    </p>
    <button class="mt-m text b200 compact"
            onclick="showExtendedContent(this)">
        <span class="l10n">Read more</span>
        <?php icon('arrow-down') ?>
    </button>
    <p class="p200 mt-m is-hidden"
       id="extended-content">
        <?php echo $trivia->extended_content ?>
    </p>
</div>