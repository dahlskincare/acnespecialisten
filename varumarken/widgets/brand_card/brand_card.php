<div class="brand-card-widget">
  <a href="<?php echo $brand->url ?>" class="l10n" title="<?php echo $brand->url_title ?>">
    <img loading="lazy" class="bc-img-background" src="<?php echo $brand->photo ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>" width="424" height="324">
  </a>
  <div class="bc-content">
    <div>
      <div class="flex-row justify-end">
        <a class="overlay" href="<?php echo $brand->url ?>" class="l10n" title="<?php echo $brand->url_title ?>">
          <img loading="lazy" src="<?php echo $brand->image ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>">
        </a>
      </div>
      <div class="subtitle"><?php echo $brand->subtitle ?></div>
      <div class="title"><?php echo $brand->title ?></div>
      <div class="description"><?php echo $brand->description ?></div>
      <a href="<?php echo $brand->url ?>" class="button compact text l10n" title="<?php echo $brand->url_title ?>"><?php echo $brand->url_label ?></a>
    </div>
    <div class="is-hidden-desktop">
      <hr />
      <a href="<?php echo $brand->consultation_url ?>" title="<?php echo $brand->consultation_url_title ?>" class="button expand l10n"><?php echo $brand->consultation_url_label ?></a>
      <a href="<?php echo $brand->booking_url ?>" title="<?php echo $brand->booking_url_title ?>" class="button expand mt-s l10n"><?php echo $brand->booking_url_label ?></a>
    </div>
    <div class="is-hidden-touch">
      <hr />
      <div class="flex-row">
        <a href="<?php echo $brand->consultation_url ?>" title="<?php echo $brand->consultation_url_title ?>" class="button expand l10n"><?php echo $brand->consultation_url_label ?></a>
        <a href="<?php echo $brand->booking_url ?>" title="<?php echo $brand->booking_url_title ?>" class="button expand l10n"><?php echo $brand->booking_url_label ?></a>
      </div>
    </div>
  </div>

</div>