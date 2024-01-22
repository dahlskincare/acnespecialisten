<?php
if (!isset($brands)) {
  $brands = array(
    new Brand(
      label: 'Alma',
      image: 'bilder/logotyper/alma.svg',
      image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
      image_alt: 'Alma Brand logotyp',
      url: 'varumarken/alma',
      url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
    ),
    new Brand(
      label: 'CryoPen',
      image: 'bilder/logotyper/cryopen.svg',
      image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
      image_alt: 'CryoPen Brand logotyp',
      url: 'cryopen.php',
      url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
    ),
    new Brand(
      label: 'Dermapen',
      image: 'bilder/logotyper/dermapen.svg',
      image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
      image_alt: 'Dermapen Brand logotyp',
      url: 'dermapen.php',
      url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
      label: 'HydraFacial',
      image: 'bilder/logotyper/hydrafacial.svg',
      image_title: 'HydraFacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
      image_alt: 'HydraFacial Brand logotyp',
      url: 'hydrafacial.php',
      url_title: 'Läs mer om HydraFacial Hudvårdsbehandlingar',
    ),
    new Brand(
      label: 'Powerlite Photonova',
      image: 'bilder/logotyper/powerlite-photonova.svg',
      image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
      image_alt: 'Powerlite Brand logotyp',
      url: 'varumarken/powerlite-photonova',
      url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
    ),
    new Brand(
      label: 'PRX-T33',
      image: 'bilder/logotyper/prx-t33.svg',
      image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
      image_alt: 'PRX-T33 Brand logotyp',
      url: 'prx-t33.php',
      url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
    ),
    new Brand(
      label: 'Infuzion',
      image: 'bilder/logotyper/infuzion.svg',
      image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
      image_alt: 'Infuzion Brand logotyp',
      url: 'infuzion.php',
      url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
    ),
    new Brand(
      label: 'Skin Tech',
      image: 'bilder/logotyper/skin-tech.svg',
      image_title: 'Skin Tech - Professionella kemiska peelingar',
      image_alt: 'Skin Tech logotyp',
      url: 'varumarken/skin-tech',
      url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
    new Brand(
      label: 'Splendor X',
      image: 'bilder/logotyper/splendor-x.png',
      image_title: 'Splendor X - Permanent hårborttagning',
      image_alt: 'Splendor X logotyp',
      url: 'varumarken/splendor-x',
      url_title: 'Splendor X',
    ),
    new Brand(
      label: 'Soprano Ice',
      image: 'bilder/logotyper/soprano-ice.png',
      image_title: 'Soprano Ice - Laser hårborttagning',
      image_alt: 'Soprano Ice logotyp',
      url: 'varumarken/alma/soprano-ice',
      url_title: 'Soprano Ice',
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