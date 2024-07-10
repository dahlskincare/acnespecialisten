<div class="problem-trivia-card-widget">
    <h3 class="h300">
        <span class="trivia-prefix"><?php echo $trivia->prefix ?></span><span><?php echo $trivia->title ?></span>
    </h3>
    <?php if (sizeof($trivia->icons) > 0) { ?>
        <ul class="flex-row">
            <?php foreach ($trivia->icons as $icon => $label) { ?>
                <li class="trivia-icon">
                    <?php
                    icon($icon);
                    echo '<div>' . $label . '</div>';
                    ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div class="p200 mt-m">
        <?php echo $trivia->content ?>
    </div>
    <button class="mt-m text b200 compact is-hidden-mobile show-button" onclick="showExtendedContent(this)">
        <span class="l10n">Läs mer</span>
        <?php icon('arrow-down') ?>
    </button>
    <button class="mt-m grey b100 expand is-hidden-tablet show-button" onclick="showExtendedContent(this)">
        <span class="l10n">Läs mer</span>
        <?php icon('arrow-down') ?>
    </button>
    <div class="p200 mt-m zero-size" id="extended-content">
        <?php echo $trivia->extended_content ?>
        <button class="mt-m text b200 compact is-hidden-mobile l10n" onclick="hideExtendedContent(this)">Minimera
        </button>
        <button class="mt-m grey b100 expand is-hidden-tablet l10n" onclick="hideExtendedContent(this)">Minimera</button>
    </div>
</div>