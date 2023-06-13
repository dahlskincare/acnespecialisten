<?php
if (!isset($brands)) {
  $brands = array(
    new Brand(
      label: 'Powerlite',
      image: 'images/brands/powerlite.svg',
      image_alt: 'Powerlite',
      image_title: 'Powerlite',
      url: '/varumarken/powerlite',
      url_title: 'Läs mer om Powerlite',
    ),
    new Brand(
      label: 'Dermapen4',
      image: 'images/brands/dermapen4.svg',
      image_alt: 'Dermapen4',
      image_title: 'Dermapen4',
      url: '/varumarken/dermapen4',
      url_title: 'Läs mer om Dermapen4',
    ),
    new Brand(
      label: 'Cryopen',
      image: 'images/brands/cryopen.svg',
      image_alt: 'Cryopen',
      image_title: 'Cryopen',
      url: '/varumarken/cryopen',
      url_title: 'Läs mer om Cryopen',
    ),
    new Brand(
      label: 'Lumenis',
      image: 'images/brands/lumenis.svg',
      image_alt: 'Lumenis',
      image_title: 'Lumenis',
      url: '/varumarken/lumenis',
      url_title: 'Läs mer om Lumenis',
    ),
    new Brand(
      label: 'Alma',
      image: 'images/brands/alma.svg',
      image_alt: 'Alma',
      image_title: 'Alma',
      url: '/varumarken/alma',
      url_title: 'Läs mer om Alma',
    ),
    new Brand(
      label: 'PRXT',
      image: 'images/brands/prxt.svg',
      image_alt: 'PRXT',
      image_title: 'PRXT',
      url: '/varumarken/prxt',
      url_title: 'Läs mer om PRXT',
    ),
    new Brand(
      label: 'Hydrafacial',
      image: 'images/brands/hydrafacial.svg',
      image_alt: 'Hydrafacial',
      image_title: 'Hydrafacial',
      url: '/varumarken/hydrafacial',
      url_title: 'Läs mer om Hydrafacial',
    ),
    new Brand(
      label: 'IP infusion',
      image: 'images/brands/ipinfusion.svg',
      image_alt: 'IP infusion',
      image_title: 'IP infusion',
      url: '/varumarken/ip-infusion',
      url_title: 'Läs mer om IP infusion',
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