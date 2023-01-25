<div class="specialists-widget">
    <div class="specialists-small carousel is-hidden-tablet">
        <?php foreach ($specialists as $specialist) { ?>
            <div class="specialist slide">
                <img src="<?php echo $specialist->image_small ?>"
                     alt="<?php echo $specialist->name ?>"
                     width="240"
                     height="240" />
                <h3>
                    <?php echo $specialist->name ?>
                </h3>
                <p>
                    <?php echo $specialist->title ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="specialists-large columns is-3 is-variable is-hidden-mobile">
        <?php foreach ($specialists as $specialist) { ?>
            <div class="column">
                <div class="specialist">
                    <img src="<?php echo $specialist->image_large ?>"
                         alt="<?php echo $specialist->name ?>"
                         width="312"
                         height="312" />
                    <h3>
                        <?php echo $specialist->name ?>
                    </h3>
                    <p>
                        <?php echo $specialist->title ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>