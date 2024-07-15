<div class="is-hidden-touch is-hidden-desktop-only" id="floater">
    <div class="container">
        <div id="floating-picture" style="background-image: url('<?php echo $model->image_large ?>')">
            <div id="overlay">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                <div>
                    <h2 class="h500">
                        <?php
                        if (isset($floating_box_title)) {
                            echo $floating_box_title;
                        } else {
                            echo $model->title;
                        }
                        ?>
                    </h2>
                    <?php if (isset($model->duration)) { ?>
                        <div class="mt-m">
                            <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                        </div>
                    <?php } ?>
                    <?php if (isset($floating_box) && strlen($floating_box) > 0) { ?>
                        <div class="mt-m p200" id="floater-description"><?php echo $floating_box ?></div>
                    <?php } ?>
                    <?php if (isset($model->procedures) && !empty($model->procedures)) { ?>
                        <div id="floating-procedures" class="mt-xl">
                            <?php foreach ($model->procedures as $procedure) { ?>
                                <div class="floating-procedure">
                                    <div class="p200">
                                        <?php echo $procedure->label ?>
                                    </div>
                                    <div class="floating-procedure-price">
                                        <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                        <span class="p200"><?php echo $procedure->savings ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mt-xl">
                        <div class="columns is-2 is-variable">
                            <div class="column">
                                <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            </div>
                            <div class="column">
                                <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>