<div class="service-card-big-widget">
    <div class="service-card-big-touch">
        <div class="service-card-header">
            <div class="service-card-image">
                <?php if (isset($scm->image_small) && isset($scm->image_large)) { ?>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $scm->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $scm->image_large ?>">
                        <img src="<?php echo $scm->image_small ?>" alt="<?php echo $scm->image_alt ?>" title="<?php echo $scm->image_title ?>" width="102" height="102" />
                    </picture>
                <?php } ?>
            </div>
            <div class="service-card-meta">
                <div class="service-card-title"><?php echo $scm->title ?></div>
                <?php if (isset($scm->duration) || isset($scm->price)) { ?>
                    <div class="service-card-info">
                        <div class="p200">
                            <?php echo $scm->duration ?>
                        </div>
                        <?php if (isset($scm->duration) && isset($scm->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $scm->price ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (isset($scm->icons) && sizeof($scm->icons) > 0) { ?>
            <div class="service-card-icons">
                <?php foreach ($scm->icons as $key => $label) { ?>
                    <div class="service-card-icon">
                        <?php icon($key) ?>
                        <div><?php echo $label ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="service-card-content">
            <div class="p200">
                <?php echo $scm->content ?>
            </div>
            <?php if (isset($scm->procedures) && sizeof($scm->procedures) > 0) { ?>
                <div class="service-card-procedures">
                    <?php foreach ($scm->procedures as $procedure) { ?>
                        <div class="procedure">
                            <div>
                                <div class="procedure-label"><?php echo $procedure->label ?></div>
                                <div>
                                    <span class="price"><?php echo $procedure->price ?></span>
                                    <span class="savings"><?php echo $procedure->savings ?></span>
                                </div>
                            </div>
                            <?php if (isset($procedure->booking_url)) { ?>
                                <a href="<?php echo $procedure->booking_url ?>" title="<?php echo $procedure->booking_url_title ?>" class="button" title="<?php echo $procedure->booking_url_label ?>"><?php echo $procedure->booking_url_label ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($scm->url)) { ?>
                <div class="mt-m">
                    <a href="<?php echo $scm->url ?>" title="<?php echo $scm->url_title ?>" class="button outline expand">
                        <?php echo $scm->url_label ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if (isset($scm->consultation_url) || isset($scm->booking_url)) { ?>
            <div class="service-card-buttons">
                <?php if (isset($scm->consultation_url)) { ?>
                    <div>
                        <a href="<?php echo $scm->consultation_url ?>" title="<?php echo $scm->consultation_url_title ?>" class="button expand" title="<?php echo $scm->consultation_url_label ?>"><?php echo $scm->consultation_url_label ?></a>
                    </div>
                <?php } ?>
                <?php if (isset($scm->booking_url)) { ?>
                    <div>
                        <a href="<?php echo $scm->booking_url ?>" title="<?php echo $scm->booking_url_title ?>" class="button expand" title="<?php echo $scm->booking_url_label ?>"><?php echo $scm->booking_url_label ?></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="service-card-big-desktop">
        <div class="service-card-header">
            <div class="service-card-image">
                <?php if (isset($scm->image_small) && isset($scm->image_large)) { ?>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $scm->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $scm->image_large ?>">
                        <img src="<?php echo $scm->image_small ?>" alt="<?php echo $scm->image_alt ?>" title="<?php echo $scm->image_title ?>" width="102" height="102" />
                    </picture>
                <?php } ?>
            </div>
            <div class="service-card-meta">
                <div class="service-card-title"><?php echo $scm->title ?></div>
                <?php if (isset($scm->duration) || isset($scm->price)) { ?>
                    <div class="service-card-info">
                        <div class="p200">
                            <?php echo $scm->duration ?>
                        </div>
                        <?php if (isset($scm->duration) && isset($scm->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $scm->price ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (isset($scm->icons) && sizeof($scm->icons) > 0) { ?>
                    <div class="service-card-icons">
                        <?php foreach ($scm->icons as $key => $label) { ?>
                            <div class="service-card-icon">
                                <?php icon($key) ?>
                                <div><?php echo $label ?></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (isset($scm->consultation_url) || isset($scm->booking_url)) { ?>
                <div class="service-card-buttons">
                    <?php if (isset($scm->consultation_url)) { ?>
                        <div>
                            <a href="<?php echo $scm->consultation_url ?>" title="<?php echo $scm->consultation_url_title ?>" class="button expand" title="<?php echo $scm->consultation_url_label ?>"><?php echo $scm->consultation_url_label ?></a>
                        </div>
                    <?php } ?>
                    <?php if (isset($scm->booking_url)) { ?>
                        <div>
                            <a href="<?php echo $scm->booking_url ?>" title="<?php echo $scm->booking_url_title ?>" class="button expand" title="<?php echo $scm->booking_url_label ?>"><?php echo $scm->booking_url_label ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="service-card-content">
            <div class="p200">
                <?php echo $scm->content ?>
            </div>
            <?php if (isset($scm->procedures) && sizeof($scm->procedures) > 0) { ?>
                <div class="service-card-procedures">
                    <?php foreach ($scm->procedures as $procedure) { ?>
                        <div class="procedure">
                            <div>
                                <div class="procedure-label"><?php echo $procedure->label ?></div>
                                <div>
                                    <span class="price"><?php echo $procedure->price ?></span>
                                    <span class="savings"><?php echo $procedure->savings ?></span>
                                </div>
                            </div>
                            <?php if (isset($procedure->booking_url)) { ?>
                                <a href="<?php echo $procedure->booking_url ?>" title="<?php echo $procedure->booking_url_title ?>" class="button" title="<?php echo $procedure->booking_url_label ?>"><?php echo $procedure->booking_url_label ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($scm->url)) { ?>
                <div class="mt-m">
                    <a href="<?php echo $scm->url ?>" title="<?php echo $scm->url_title ?>" class="button text compact">
                        <span>
                            <?php echo $scm->url_label ?>
                        </span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>