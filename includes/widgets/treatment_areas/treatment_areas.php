<div class="treatment-areas-widget">
    <?php foreach ($treatment_areas as $area) { ?>
        <div class="treatment-area-small is-hidden-tablet">
            <?php if (isset($area->image_large) && isset($area->image_small)) { ?>
                <div class="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $area->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $area->image_large ?>">
                        <img src="<?php echo $area->image_large ?>" alt="<?php echo $area->image_alt ?>" title="<?php echo $area->image_title ?>" width="361" height="274" />
                    </picture>
                </div>
            <?php } ?>
            <?php if (isset($area->title)) { ?>
                <div class="mt-m h300"><?php echo $area->title ?></div>
            <?php } ?>
            <?php if (isset($area->description)) { ?>
                <div class="mt-xxs mb-xs"><?php echo $area->description ?></div>
            <?php } ?>
            <?php if (isset($area->all)) { ?>
                <div class="select-all-card" onclick="TreatmentAreas.toggleAllSelected(this)">
                    <div class="flex-row">
                        <?php if (isset($area->all->image)) { ?>
                            <div class="image">
                                <img src="<?php echo $area->all->image ?>" alt="<?php echo $area->all->image_alt ?>" title="<?php echo $area->all->image_title ?>" width="102" height="102" />
                            </div>
                        <?php } ?>
                        <div class="area-all-info">
                            <div class="h200 title"><?php echo $area->all->title ?></div>
                            <div class="price-duration">
                                <div><?php echo $area->all->duration ?></div>
                                <div class="dot ml-xs mr-xs"></div>
                                <div><?php echo $area->all->price ?></div>
                            </div>
                        </div>
                    </div>
                    <button class="mt-m grey expand select-all-button">
                        <?php icon('add') ?>
                        <span class="l10n">Select</span>
                    </button>
                    <button class="mt-m grey expand deselect-all-button">
                        <?php icon('close') ?>
                        <span class="l10n">Cancel</span>
                    </button>
                </div>
            <?php } ?>
            <?php foreach ($area->items as $id => $item) { ?>
                <div class="area-item-card" id="area-item-<?php echo $id ?>" onclick="TreatmentAreas.toggleSelected(this, this.parentElement)">
                    <?php if (isset($item->image)) { ?>
                        <div class="image">
                            <img src="<?php echo $item->image ?>" alt="<?php echo $area->image_alt ?>" title="<?php echo $area->image_title ?>" width="102" height="102" />
                        </div>
                    <?php } ?>
                    <div class="area-item-info">
                        <div class="h200 title"><?php echo $item->title ?></div>
                        <div class="price-duration">
                            <div><?php echo $item->duration ?></div>
                            <div class="dot ml-xs mr-xs"></div>
                            <div><?php echo $item->price ?></div>
                        </div>
                    </div>
                    <div class="area-item-icon">
                        <?php icon('add') ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="treatment-area-large is-hidden-mobile">
            <?php if (isset($area->image_large) && isset($area->image_small)) { ?>
                <div class="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $area->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $area->image_large ?>">
                        <img src="<?php echo $area->image_large ?>" alt="<?php echo $area->image_alt ?>" title="<?php echo $area->image_title ?>" width="872" height="456" />
                    </picture>
                </div>
            <?php } ?>
            <?php if (isset($area->title)) { ?>
                <div class="mt-xl h300"><?php echo $area->title ?></div>
            <?php } ?>
            <?php if (isset($area->description)) { ?>
                <div class="mt-xxs"><?php echo $area->description ?></div>
            <?php } ?>
            <?php if (isset($area->all)) { ?>
                <div class="select-all-card flex-row align-center" onclick="TreatmentAreas.toggleAllSelected(this)">
                    <?php if (isset($area->all->image)) { ?>
                        <div class="image">
                            <img src="<?php echo $area->all->image ?>" alt="<?php echo $area->all->title ?>" title="<?php echo $area->all->title ?>" width="102" height="102" />
                        </div>
                    <?php } ?>
                    <div class="area-all-info">
                        <div class="h200 title"><?php echo $area->all->title ?></div>
                        <div class="price-duration">
                            <div><?php echo $area->all->duration ?></div>
                            <div class="dot ml-xs mr-xs"></div>
                            <div><?php echo $area->all->price ?></div>
                        </div>
                    </div>
                    <button class="grey select-all-button">
                        <?php icon('add') ?>
                        <span class="l10n">Select</span>
                    </button>
                    <button class="grey deselect-all-button">
                        <?php icon('close') ?>
                        <span class="l10n">Cancel</span>
                    </button>
                </div>
            <?php } ?>

            <div class="columns is-3 is-variable is-multiline">
                <?php foreach ($area->items as $id => $item) { ?>
                    <div class="column <?php
                                        if (isset($item->image)) {
                                            echo 'is-half';
                                        } else {
                                            echo 'is-one-third';
                                        }
                                        ?>">
                        <div class="area-item-card" id="area-item-<?php echo $id ?>" onclick="TreatmentAreas.toggleSelected(this, this.parentElement.parentElement.parentElement)">
                            <?php if (isset($item->image)) { ?>
                                <div class=" image">
                                    <img src="<?php echo $item->image ?>" alt="<?php echo $area->image_alt ?>" title="<?php echo $area->image_title ?>" width="102" height="102" />
                                </div>
                            <?php } ?>
                            <div class="area-item-info">
                                <div class="h200 title"><?php echo $item->title ?></div>
                                <div class="price-duration">
                                    <div><?php echo $item->duration ?></div>
                                    <div class="dot ml-xs mr-xs"></div>
                                    <div><?php echo $item->price ?></div>
                                </div>
                            </div>
                            <div class="area-item-icon">
                                <?php icon('add') ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <script src="includes/widgets/treatment_areas/treatment_areas.js"></script>
</div>