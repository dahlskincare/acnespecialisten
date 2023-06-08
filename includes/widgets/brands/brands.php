<?php
if (!isset($brands)) {
  $brands = array(
    new Brand('Powerlite', 'images/brands/powerlite.svg', 'Powerlite', 'Powerlite'),
    new Brand('Dermapen4', 'images/brands/dermapen4.svg', 'Dermapen4', 'Dermapen4'),
    new Brand('Cryopen', 'images/brands/cryopen.svg', 'Cryopen', 'Cryopen'),
    new Brand('Lumenis', 'images/brands/lumenis.svg', 'Lumenis', 'Lumenis'),
    new Brand('Alma', 'images/brands/alma.svg', 'Alma', 'Alma'),
    new Brand('PRXT', 'images/brands/prxt.svg', 'PRXT', 'PRXT'),
    new Brand('Hydrafacial', 'images/brands/hydrafacial.svg', 'Hydrafacial', 'Hydrafacial'),
    new Brand('IP infusion', 'images/brands/ipinfusion.svg', 'IP infusion', 'IP infusion'),
  );
}
?>

<div class="brands-widget">
  <div class="flex-container">
    <?php foreach ($brands as $brand) { ?>
      <div class="flex-item flex-item-bottom-right">
        <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>" width="116" height="30" />
      </div>
    <?php } ?>
  </div>
  <div>