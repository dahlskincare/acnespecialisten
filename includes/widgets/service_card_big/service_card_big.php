<div class="service-card-big-widget">
    <div class="service-card-big-touch">
        <div class="service-card-header">
            <div class="service-card-image">
                <?php if (isset($service->image_small) && isset($service->image_large)) { ?>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                        <img src="<?php echo $service->image_small ?>" alt="<?php echo $service->image_alt ?>" title="<?php echo $service->image_title ?>" width="102" height="102" />
                    </picture>
                <?php } ?>
            </div>
            <div class="service-card-meta">
                <div class="service-card-title"><?php echo $service->title ?></div>
                <?php if (isset($service->duration) || isset($service->price)) { ?>
                    <div class="service-card-info">
                        <div class="p200">
                            <?php echo $service->duration ?>
                        </div>
                        <?php if (isset($service->duration) && isset($service->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $service->price ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (isset($service->icons) && sizeof($service->icons) > 0) { ?>
            <div class="service-card-icons">
                <?php foreach ($service->icons as $key => $label) { ?>
                    <div class="service-card-icon">
                        <?php icon($key) ?>
                        <div><?php echo $label ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="service-card-content">
            <div class="p200">
                <?php echo $service->content ?>
            </div>
            <?php if (isset($service->procedures) && sizeof($service->procedures) > 0) { ?>
                <div class="service-card-procedures">
                    <?php foreach ($service->procedures as $procedure) { ?>
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
            <?php if (isset($service->url)) { ?>
                <div class="mt-m">
                    <a href="<?php echo $service->url ?>" title="<?php echo $service->url_title ?>" class="button outline expand">
                        <?php echo $service->url_label ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if (isset($service->consultation_url) || isset($service->booking_url)) { ?>
            <div class="service-card-buttons">
                <?php if (isset($service->consultation_url)) { ?>
                    <div>
                        <a href="<?php echo $service->consultation_url ?>" title="<?php echo $service->consultation_url_title ?>" class="button expand" title="<?php echo $service->consultation_url_label ?>"><?php echo $service->consultation_url_label ?></a>
                    </div>
                <?php } ?>
                <?php if (isset($service->booking_url)) { ?>
                    <div>
                        <a href="<?php echo $service->booking_url ?>" title="<?php echo $service->booking_url_title ?>" class="button expand" title="<?php echo $service->booking_url_label ?>"><?php echo $service->booking_url_label ?></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="service-card-big-desktop">
        <div class="service-card-header">
            <div class="service-card-image">
                <?php if (isset($service->image_small) && isset($service->image_large)) { ?>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                        <img src="<?php echo $service->image_small ?>" alt="<?php echo $service->image_alt ?>" title="<?php echo $service->image_title ?>" width="102" height="102" />
                    </picture>
                <?php } ?>
            </div>
            <div class="service-card-meta">
                <div class="service-card-title"><?php echo $service->title ?></div>
                <?php if (isset($service->duration) || isset($service->price)) { ?>
                    <div class="service-card-info">
                        <div class="p200">
                            <?php echo $service->duration ?>
                        </div>
                        <?php if (isset($service->duration) && isset($service->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $service->price ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (isset($service->icons) && sizeof($service->icons) > 0) { ?>
                    <div class="service-card-icons">
                        <?php foreach ($service->icons as $key => $label) { ?>
                            <div class="service-card-icon">
                                <?php icon($key) ?>
                                <div><?php echo $label ?></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (isset($service->consultation_url) || isset($service->booking_url)) { ?>
                <div class="service-card-buttons">
                    <?php if (isset($service->consultation_url)) { ?>
                        <div>
                            <a href="<?php echo $service->consultation_url ?>" title="<?php echo $service->consultation_url_title ?>" class="button expand" title="<?php echo $service->consultation_url_label ?>"><?php echo $service->consultation_url_label ?></a>
                        </div>
                    <?php } ?>
                    <?php if (isset($service->booking_url)) { ?>
                        <div>
                            <a href="<?php echo $service->booking_url ?>" title="<?php echo $service->booking_url_title ?>" class="button expand" title="<?php echo $service->booking_url_label ?>"><?php echo $service->booking_url_label ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="service-card-content">
            <div class="p200">
                <?php echo $service->content ?>
            </div>
            <?php if (isset($service->procedures) && sizeof($service->procedures) > 0) { ?>
                <div class="service-card-procedures">
                    <?php foreach ($service->procedures as $procedure) { ?>
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
            <?php if (isset($service->url)) { ?>
                <div class="mt-m">
                    <a href="<?php echo $service->url ?>" title="<?php echo $service->url_title ?>" class="button text compact">
                        <span>
                            <?php echo $service->url_label ?>
                        </span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>