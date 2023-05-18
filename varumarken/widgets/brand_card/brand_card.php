<div class="brand-card-widget">
  <img class="bc-img-background" src="<?php echo $brand->photo ?>" alt="<?php echo $brand->label ?>" title="<?php echo $brand->label ?>" width="424" height="324">
  <div class="bc-content">
    <div class="flex-row justify-end">
      <img src="<?php echo $brand->image ?>" class="overlay" alt="<?php echo $brand->label ?>" title="<?php echo $brand->label ?>" width="116" height="80">
    </div>
    <div class="subtitle"><?php echo $brand->subtitle ?></div>
    <div class="title"><?php echo $brand->title ?></div>
    <div class="description"><?php echo $brand->description ?></div>
    <div class="is-hidden-desktop">
      <a href="<?php echo $brand->url ?>" class="button expand outline l10n">Read more about model</a>
      <hr />
      <a href="<?php echo $brand->consultation_url ?>" class="button expand l10n">Get a free consultation</a>
      <a href="<?php echo $brand->booking_url ?>" class="button expand mt-s l10n">Book a treatment</a>
    </div>
    <div class="is-hidden-touch">
      <a href="<?php echo $brand->url ?>" class="button compact text l10n">Read more about model</a>
      <hr />
      <div class="flex-row">
        <a href="<?php echo $brand->consultation_url ?>" class="button expand l10n">Get a free consultation</a>
        <a href="<?php echo $brand->booking_url ?>" class="button expand l10n">Book a treatment</a>
      </div>
    </div>
  </div>

</div>