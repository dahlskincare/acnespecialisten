<div class="result-customer-card-widget">
    <div class="customer-card-photos">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $result_customer->image_before_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $result_customer->image_before_large ?>">
            <img src="<?php echo $result_customer->image_before_large ?>" alt="Before" width="178" height="238" />
        </picture>
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $result_customer->image_after_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $result_customer->image_after_large ?>">
            <img src="<?php echo $result_customer->image_after_large ?>" alt="After" width="178" height="238" />
        </picture>
    </div>
    <div class="customer-card-content">
        <div class="h300 l10n">Customer</div>
        <div class="customer-details">
            <div>
                <div class="p200 l10n">Age</div>
                <div class="mt-xxs h200"><?php echo $result_customer->age ?></div>
            </div>
            <div>
                <div class="p200 l10n">Gender</div>
                <div class="mt-xxs h200"><?php echo $result_customer->gender ?></div>
            </div>
            <div>
                <div class="p200 l10n">Problem</div>
                <div class="mt-xxs h200"><?php echo $result_customer->problem ?></div>
            </div>
            <div>
                <div class="p200 l10n">Type</div>
                <div class="mt-xxs h200"><?php echo $result_customer->type ?></div>
            </div>
        </div>
        <div class="treatment-details">
            <div class="treatment-details-title">
                <span class="h200 l10n">Treatment</span>
                <div class="dot"></div>
                <span class="p200"><?php echo $result_customer->treatment->duration ?></span>
            </div>
            <?php foreach ($result_customer->treatment->procedures as $procedure) { ?>
                <div class="detail-card">
                    <img src="<?php echo $procedure->image ?>" alt="<?php echo $procedure->name ?>" width="102" height="102">
                    <div class="detail-card-content">
                        <div class="p200 l10n">Procedure</div>
                        <div class="name-and-count">
                            <div class="h200"><?php echo $procedure->name ?></div>
                            <div class="dot"></div>
                            <div class="p200"><?php echo $procedure->count ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($result_customer->treatment->product)) { ?>
                <div class="detail-card">
                    <img src="<?php echo $result_customer->treatment->product->image ?>" alt="<?php echo $result_customer->treatment->product->name ?>" width="102" height="102">
                    <div class="detail-card-content">
                        <div class="p200 l10n">Products</div>
                        <div class="h200"><?php echo $result_customer->treatment->product->name ?></div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($result_customer->treatment->employee)) { ?>
                <div class="detail-card">
                    <img src="<?php echo $result_customer->treatment->employee->image ?>" alt="<?php echo $result_customer->treatment->employee->name ?>" width="102" height="102">
                    <div class="detail-card-content">
                        <div class="p200 l10n">Personal esthetician</div>
                        <div class="h200"><?php echo $result_customer->treatment->employee->name ?></div>
                    </div>
                </div>
            <?php } ?>
            <hr class="is-hidden-desktop" />
            <a href="" class="button expand outline l10n">View journey details</a>
        </div>

    </div>
</div>