<div class="nav-buttons-widget carousel" id="nav-buttons-carousel">
    <div class="scroll-button">
        <div class="button round-medium grey">
            <?php icon('arrow-right') ?>
        </div>
    </div>
    <?php foreach ($nav_buttons as $id => $label) { ?>
        <a class="slide" href="javascript:;" onclick="scrollToElement('#<?php echo $id ?>')" class="button grey l10n"><?php echo $label ?></a>
    <?php } ?>
</div>
<script>
    let container = document.querySelector('#nav-buttons-carousel');
    let buttonContainer = container.querySelector('.scroll-button');
    let button = buttonContainer.querySelector('.button');
    if (container.scrollWidth > container.parentElement.clientWidth) {
        buttonContainer.classList.add('visible');
        button.addEventListener('click', () => {
            buttonContainer.remove();
            container.scrollTo(container.scrollWidth, 0);
        });
    }
</script>