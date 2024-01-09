<div class="brand-card-widget">
  <a href="<?php echo $brand->url ?>" class="l10n" title="Läs mer">
    <img class="bc-img-background" src="<?php echo $brand->photo ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>" width="424" height="324">
  </a>
  <div class="bc-content">
    <div class="flex-row justify-end">
      <div class="overlay">
        <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>">
      </div>
    </div>
    <div class="subtitle"><?php echo $brand->subtitle ?></div>
    <div class="title"><?php echo $brand->title ?></div>
    <div class="description"><?php echo $brand->description ?></div>
    <div class="is-hidden-desktop">
      <a href="<?php echo $brand->url ?>" title="<?php echo $brand->url_title ?>" class="button expand outline l10n" title="Läs mer">Läs mer</a>
      <hr />
      <a href="<?php echo $brand->consultation_url ?>" title="<?php echo $brand->consultation_url_title ?>" class="button expand l10n" title="Gratis hudkonsultation">Gratis hudkonsultation</a>
      <a href="<?php echo $brand->booking_url ?>" title="<?php echo $brand->booking_url_title ?>" class="button expand mt-s l10n" title="Boka behandling">Boka behandling</a>
    </div>
    <div class="is-hidden-touch">
      <a href="<?php echo $brand->url ?>" class="button compact text l10n" title="Läs mer">Läs mer</a>
      <hr />
      <div class="flex-row">
        <a href="<?php echo $brand->consultation_url ?>" title="<?php echo $brand->consultation_url_title ?>" class="button expand l10n" title="Gratis hudkonsultation">Gratis hudkonsultation</a>
        <a href="<?php echo $brand->booking_url ?>" title="<?php echo $brand->booking_url_title ?>" class="button expand l10n" title="Boka behandling">Boka behandling</a>
      </div>
    </div>
  </div>

</div>