<div class="consultation-category-widget" id="<?php echo $category->id ?>">
    <div class="cc-header">
        <div class="cc-header-texts">
            <div class="h200"><?php echo $category->name ?></div>
            <div class="p200"><?php echo $category->description ?></div>
        </div>
        <button class="expand" onclick="ConsultationCategory.toggleVisible(this)"><?php echo $category->button_label ?></button>
    </div>
    <div class="cc-content is-hidden">
        <?php foreach ($category->types as $type) { ?>
            <div class="cc-type">
                <div class="cc-type-image">
                    <img src="<?php echo $type->image ?>" alt="<?php echo $type->title ?>" width="102" height="102" />
                </div>
                <div class="cc-type-texts">
                    <div class="h200"><?php echo $type->title ?></div>
                    <div class="p200"><?php echo $type->subtitle ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>