<?php
if (!isset($brands)) {
  $brands = array(
    new Brand('Powerlite', 'images/brands/powerlite.svg'),
    new Brand('Dermapen4', 'images/brands/dermapen4.svg'),
    new Brand('Cryopen', 'images/brands/cryopen.svg'),
    new Brand('Lumenis', 'images/brands/lumenis.svg'),
    new Brand('Alma', 'images/brands/alma.svg'),
    new Brand('PRXT', 'images/brands/prxt.svg'),
    new Brand('Hydrafacial', 'images/brands/hydrafacial.svg'),
    new Brand('IP infusion', 'images/brands/ipinfusion.svg'),
  );
}
?>

<div class="brands-widget">
  <div class="flex-container">
    <?php foreach ($brands as $brand) { ?>
      <div class="flex-item flex-item-bottom-right">
        <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->label ?>" title="<?php echo $brand->label ?>" width="116" height="30" />
      </div>
    <?php } ?>
  </div>
  <div>