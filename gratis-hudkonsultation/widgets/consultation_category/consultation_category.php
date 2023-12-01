<div class="consultation-category-widget" id="<?php echo $category->id ?>">
    <div class="cc-header">
        <div class="cc-header-texts">
            <div class="h200"><?php echo $category->name ?></div>
            <div class="p200"><?php echo $category->description ?></div>
        </div>
        <button class="expand button-expand" onclick="ConsultationCategory.toggleVisible(this)"><?php echo $category->button_label ?></button>
        <button class="outline expand button-collapse l10n" onclick="ConsultationCategory.toggleVisible(this)">Hide</button>
    </div>
    <div class="cc-content">
        <?php foreach ($category->types as $type) { ?>
            <div class="cc-type-desktop is-hidden-touch">
                <div>
                    <img src="<?php echo $type->image ?>" alt="<?php echo $type->title ?>" title="<?php echo $type->title ?>" width="102" height="102" />
                    <div>
                        <div class="h200"><?php echo $type->title ?></div>
                        <div class="p200"><?php echo $type->subtitle ?></div>
                        <a href="<?php echo $type->url ?>" class="button mt-xs b200 text compact" title="<?php echo $type->url_label ?>"><?php echo $type->url_label ?></a>
                    </div>
                </div>
                <a href="<?php echo $type->consultation_url ?>" class="button" title="<?php echo $type->consultation_url_label ?>"><?php echo $type->consultation_url_label ?></a>
            </div>
            <div class="cc-type-touch is-hidden-desktop">
                <div>
                    <img src="<?php echo $type->image ?>" alt="<?php echo $type->title ?>" title="<?php echo $type->title ?>" width="102" height="102" />
                    <div>
                        <div class="h200"><?php echo $type->title ?></div>
                        <div class="p200"><?php echo $type->subtitle ?></div>
                    </div>
                </div>
                <a href="<?php echo $type->url ?>" class="button expand mt-m outline" title="<?php echo $type->url_label ?>"><?php echo $type->url_label ?></a>
                <hr />
                <a href="<?php echo $type->consultation_url ?>" class="button expand" title="<?php echo $type->consultation_url_label ?>"><?php echo $type->consultation_url_label ?></a>
            </div>
        <?php } ?>
    </div>
</div>