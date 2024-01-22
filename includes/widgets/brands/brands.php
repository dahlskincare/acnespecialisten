<?php
if (!isset($brands)) {
  $brands = array(
    new Brand(
      label: 'Powerlite Photonova',
      image: 'bilder/logotyper/powerlite-photonova.svg',
      image_alt: 'Powerlite Brand Logo',
      image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
      url: 'varumarken/powerlite-photonova',
      url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
    ),
    new Brand(
      label: 'Dermapen',
      image: 'bilder/logotyper/dermapen.svg',
      image_alt: 'Dermapen Brand Logo',
      image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
      url: 'dermapen.php',
      url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
      label: 'CryoPen',
      image: 'bilder/logotyper/cryopen.svg',
      image_alt: 'CryoPen Brand Logo',
      image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
      url: 'cryopen.php',
      url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
    ),
    new Brand(
      label: 'Alma',
      image: 'bilder/logotyper/alma.svg',
      image_alt: 'Alma Brand Logo',
      image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
      url: 'varumarken/alma',
      url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
    ),
    new Brand(
      label: 'PRX-T33',
      image: 'bilder/logotyper/prx-t33.svg',
      image_alt: 'PRX-T33 Brand Logo',
      image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
      url: 'prx-t33.php',
      url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
    ),
    new Brand(
      label: 'Hydrafacial',
      image: 'bilder/logotyper/hydrafacial.svg',
      image_alt: 'Hydrafacial Brand Logo',
      image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
      url: 'hydrafacial.php',
      url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
    ),
    new Brand(
      label: 'Infuzion',
      image: 'bilder/logotyper/infuzion.svg',
      image_alt: 'Infuzion Brand Logo',
      image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
      url: 'infuzion.php',
      url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
    ),
  );
}
?>

<div class="brands-widget">
  <div class="flex-container">
    <?php foreach ($brands as $brand) { ?>
      <a href="<?php echo $brand->url ?>" title="<?php echo $brand->url_title ?>" class="flex-item">
        <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>" width="116" height="30" />
      </a>
    <?php } ?>
  </div>
  <div>