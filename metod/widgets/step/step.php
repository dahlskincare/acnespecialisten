<div class="step-widget">
    <div class="step-touch is-hidden-desktop">
        <h2><?php echo $step->title ?></h2>
        <img loading="lazy" src="<?php echo $step->image_small ?>" alt="<?php echo $step->title ?>" title="<?php echo $step->title ?>" width="358" height="272" />
        <p><?php echo $step->content ?></p>
        <a href="<?php echo $step->url ?>" class="button outline expand" title="<?php echo $step->url_title ?>" target="<?php echo $step->url_target ?>"><?php echo $step->url_label ?></a>
    </div>
    <div class="step-desktop is-hidden-touch">
        <div class="step-texts">
            <h2><?php echo $step->title ?></h2>
            <p><?php echo $step->content ?></p>
            <a href="<?php echo $step->url ?>" class="button outline" title="<?php echo $step->url_title ?>" target="<?php echo $step->url_target ?>"><?php echo $step->url_label ?></a>
        </div>
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $step->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $step->image_large ?>">
            <img loading="lazy" src="<?php echo $step->image_large ?>" alt="<?php echo $step->title ?>" title="<?php echo $step->title ?>" width="424" height="526" />
        </picture>
    </div>
</div>