<?php
if (!isset($brands)) {
  $brands = array(
    new Brand(
      label: 'Alma',
      image: 'bilder/logotyper/alma.svg',
      image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
      image_alt: 'Alma logotyp',
      url: 'varumarken/alma',
      url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
    ),
    new Brand(
      label: 'Alma Hybrid',
      image: 'bilder/logotyper/alma-hybrid.svg',
      image_title: 'Alma Hybrid - CO2 laser',
      image_alt: 'Alma Hybrid logotyp',
      url: 'alma-hybrid-co2-laser.php',
      url_title: 'Läs mer om Alma Hybrid CO2 laser',
    ),
    new Brand(
      label: 'Harmony XL Pro',
      image: 'bilder/logotyper/harmony-xl-pro.png',
      image_title: 'Harmony XL Pro - Laser & IPL',
      image_alt: 'Harmony XL Pro logotyp',
      url: 'alma-harmony-xl-pro.php',
      url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
    ),
    new Brand(
      label: 'CryoPen',
      image: 'bilder/logotyper/cryopen.svg',
      image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
      image_alt: 'CryoPen logotyp',
      url: 'cryopen.php',
      url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
    ),
    new Brand(
      label: 'Dermapen',
      image: 'bilder/logotyper/dermapen.svg',
      image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
      image_alt: 'Dermapen logotyp',
      url: 'dermapen.php',
      url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
      label: 'HydraFacial',
      image: 'bilder/logotyper/hydrafacial.svg',
      image_title: 'HydraFacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
      image_alt: 'HydraFacial logotyp',
      url: 'hydrafacial.php',
      url_title: 'Läs mer om HydraFacial Hudvårdsbehandlingar',
    ),
    new Brand(
      label: 'Powerlite Photonova',
      image: 'bilder/logotyper/powerlite-photonova.svg',
      image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
      image_alt: 'Powerlite logotyp',
      url: 'varumarken/powerlite-photonova',
      url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
    ),
    new Brand(
      label: 'PRX-T33',
      image: 'bilder/logotyper/prx-t33.svg',
      image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
      image_alt: 'PRX-T33 logotyp',
      url: 'prx-t33.php',
      url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
    ),
    new Brand(
      label: 'Infuzion',
      image: 'bilder/logotyper/infuzion.svg',
      image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
      image_alt: 'Infuzion logotyp',
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