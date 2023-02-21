<div class="problem-trivia-card-widget">
    <h3 class="h300">
        <span class="trivia-prefix"><?php echo $trivia->prefix ?></span><span><?php echo $trivia->title ?></span>
    </h3>
    <?php if (sizeof($trivia->icons) > 0) { ?>
        <div class="mt-m">
            <div class="columns is-gapless is-mobile is-multiline">
                <?php foreach ($trivia->icons as $icon => $label) { ?>
                    <div class="column is-one-fifth-tablet is-half-mobile trivia-icon">
                        <?php
                        icon($icon);
                        echo '<span>' . $label . '</span>';
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="p200 mt-m">
        <?php echo $trivia->content ?>
    </div>
    <button class="mt-m text b200 compact is-hidden-mobile" onclick="showExtendedContent(this)">
        <span class="l10n">Read more</span>
        <?php icon('arrow-down') ?>
    </button>
    <button class="mt-m grey b200 expand is-hidden-tablet" onclick="showExtendedContent(this)">
        <span class="l10n">Read more</span>
        <?php icon('arrow-down') ?>
    </button>
    <div class="p200 mt-m is-hidden" id="extended-content">
        <?php echo $trivia->extended_content ?>
    </div>
</div>