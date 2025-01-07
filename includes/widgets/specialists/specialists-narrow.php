<?php
if (!isset($specialists)) {
    $specialists = array(
        new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2018',
            image: 'images/specialists/large/hudterapeut-cazzandra.webp',
            image_title: 'Hudterapeut Cazzandra Lindberg',
            image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
        ),
        new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2022',
            image: 'images/specialists/large/hudterapeut-vilma.webp',
            image_title: 'Hudterapeut Vilma Libom',
            image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
        ),
        new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'images/specialists/large/hudterapeut-julia.webp',
            image_title: 'Hudterapeut Julia Eklund',
            image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
        ),
        new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/large/hudterapeut-veronika.webp',
            image_title: 'Hudterapeut Veronika Benedik',
            image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
        ),
    );
}
?>


<div class="specialists-widget">
    <div class="specialists-small is-hidden-tablet">
        <?php foreach ($specialists as $specialist) { ?>
            <div class="specialist">
                <img loading="lazy" src="<?php echo $specialist->image ?>" alt="<?php echo $specialist->image_alt ?>" title="<?php echo $specialist->image_title ?>" width="240" height="240" />
                <h3>
                    <?php echo $specialist->name ?>
                </h3>
                <p>
                    <?php echo $specialist->title ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="specialists-large columns is-2 is-variable is-hidden-mobile">
        <?php foreach ($specialists as $specialist) { ?>
            <div class="column is-one-third">
                <div class="specialist">
                    <img loading="lazy" src="<?php echo $specialist->image ?>" alt="<?php echo $specialist->image_alt ?>" title="<?php echo $specialist->image_title ?>" width="312" height="312" />
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