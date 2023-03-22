<?php
if (!isset($specialists)) {
    $specialists = array(
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg')
    );
}
?>


<div class="specialists-widget">
    <div class="specialists-small carousel is-hidden-tablet">
        <?php foreach ($specialists as $specialist) { ?>
            <div class="specialist slide">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $specialist->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $specialist->image_large ?>">
                    <img src="<?php echo $specialist->image_small ?>" alt="<?php echo $specialist->name ?>" width="240" height="240" />
                </picture>
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
            <div class="column is-one-quarter">
                <div class="specialist">
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $specialist->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $specialist->image_large ?>">
                        <img src="<?php echo $specialist->image_large ?>" alt="<?php echo $specialist->name ?>" width="312" height="312" />
                    </picture>
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
<script>
    function scrollSpecialists(distance) {
        let container = document.querySelector('.specialists-large');
        let item = container.querySelector('.column');
        container.scrollBy(distance * item.getBoundingClientRect().width, 0);
    }
</script>