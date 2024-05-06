<div class="treatment-green-header-widget">
    <div id="green-header-small" class="is-hidden-desktop">
        <div class="container">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            <h1 class="mt-xs h600">
                <?php echo $model->title ?>
            </h1>
            <?php if (isset($model->duration)) { ?>
                <h3 class="mt-xs p200 l10n">Längd: <?php echo $model->duration ?></h3>
            <?php } ?>
            <?php if (strlen($model->content) > 0) { ?>
                <div class="mt-xs"><?php echo $model->content ?></div>
            <?php } ?>
            <?php if (isset($model->procedures)) { ?>
                <div class="procedures mt-xl">
                    <?php foreach ($model->procedures as $procedure) { ?>
                        <div class="procedure">
                            <div class="p200"><?php echo $procedure->label ?></div>
                            <div>
                                <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                <span class="p200"><?php echo $procedure->savings ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="mt-xl">
                <div class="columns is-mobile">
                    <div class="column is-half">
                        <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                    </div>
                    <div class="column is-half">
                        <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                    </div>
                </div>
            </div>
            <div class="mt-xl">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
        </div>
    </div>
    <div id="green-header-large" class="is-hidden-touch">
        <div class="container">
            <div id="green-header-large-header">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
            <div id="green-header-large-text" class="mt-xxs">
                <h1 class="h600">
                    <?php echo $model->title ?>
                </h1>
                <?php if (isset($model->duration)) { ?>
                    <div class="mt-xs">
                        <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                    </div>
                <?php } ?>
                <?php if (strlen($model->content) > 0) { ?>
                    <div class="mt-s"><?php echo $model->content ?></div>
                <?php } ?>
                <?php if (isset($model->procedures)) { ?>
                    <div class="mt-xl large-procedures flex-row">
                        <?php foreach ($model->procedures as $procedure) { ?>
                            <div class="large-procedure">
                                <div class="p200 l10n"><?php echo $procedure->label ?></div>
                                <div>
                                    <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                    <span class="p200"><?php echo $procedure->savings ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="mt-xl flex-row" id="book-buttons">
                    <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                    <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                </div>
            </div>
        </div>
    </div>
</div>