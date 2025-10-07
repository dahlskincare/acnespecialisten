<?php
if (!isset($brands)) {
      $brands = array(
            new Brand(
                  label: 'Alma Hybrid',
                  image: 'bilder/logotyper/alma-hybrid.svg',
                  image_alt: 'Alma Hybrid logotyp',
                  image_title: 'Alma Hybrid CO2',
                  url: '/alma-hybrid-co2-laser.php',
                  url_title: 'Alma Hybrid',
            ),
            new Brand(
                  label: 'Dermapen',
                  image: 'bilder/logotyper/dermapen.svg',
                  image_alt: 'Dermapen logotyp',
                  image_title: 'Dermapen - Microneedling',
                  url: '/dermapen.php',
                  url_title: 'Dermapen',
            ),
            new Brand(
                  label: 'Harmony XL Pro',
                  image: 'bilder/logotyper/harmony-xl-pro.png',
                  image_alt: 'Harmony XL Pro logotyp',
                  image_title: 'Alma Harmony XL Pro',
                  url: '/alma-harmony-xl-pro.php',
                  url_title: 'Harmony XL Pro',
            ),
            new Brand(
                  label: 'HydraFacial',
                  image: 'bilder/logotyper/hydrafacial.svg',
                  image_alt: 'HydraFacial logotyp',
                  image_title: 'HydraFacial - Dermabrasion',
                  url: '/hydrafacial.php',
                  url_title: 'HydraFacial',
            ),
            new Brand(
                  label: 'Skin Tech',
                  image: 'bilder/logotyper/skin-tech.svg',
                  image_alt: 'Skin Tech logotyp',
                  image_title: 'Skin Tech - kemisk peeling',
                  url: '/varumarken/skin-tech/',
                  url_title: 'Skin Tech',
            ),
            new Brand(
                  label: 'Alma Rejuve Dye-VL',
                  image: 'bilder/logotyper/rejuve-dye-vl.svg',
                  image_alt: 'Alma Rejuve Dye-VL logotyp',
                  image_title: 'Alma Rejuve Dye-VL - IPL',
                  url: '/varumarken/rejuve-dye-vl/',
                  url_title: 'Alma Rejuve Dye-VL',
            ),
            new Brand(
                  label: 'CryoPen',
                  image: 'bilder/logotyper/cryopen.svg',
                  image_alt: 'CryoPen logotyp',
                  image_title: 'CryoPen - frysbehandling',
                  url: '/cryopen.php',
                  url_title: 'CryoPen',
            ),
            new Brand(
                  label: 'Splendor X',
                  image: 'bilder/logotyper/splendor-x.png',
                  image_alt: 'Splendor X logotyp',
                  image_title: 'Splendor X - Permanent hårborttagning med laser',
                  url: '/varumarken/splendor-x/',
                  url_title: 'Splendor X',
            ),
            new Brand(
                  label: 'Soprano Ice',
                  image: 'bilder/logotyper/soprano-ice.png',
                  image_alt: 'Soprano Ice logotyp',
                  image_title: 'Soprano Ice - Permanent hårborttagning med laser',
                  url: '/varumarken/soprano-ice/',
                  url_title: 'Soprano Ice',
            ),
            new Brand(
                  label: 'Infuzion',
                  image: 'bilder/logotyper/infuzion.svg',
                  image_alt: 'Infuzion logotyp',
                  image_title: 'Infuzion - nålfri skinbooster',
                  url: '/infuzion.php',
                  url_title: 'Infuzion',
            ),
            new Brand(
                  label: 'Lumenis',
                  image: 'bilder/logotyper/lumenis.svg',
                  image_alt: 'Lumenis logotyp',
                  image_title: 'Lumenis - Permanent hårborttagning med laser',
                  url: '/varumarken/splendor-x/',
                  url_title: 'Lumenis',
            ),
            new Brand(
                  label: 'PRX-T33',
                  image: 'bilder/logotyper/prx-t33.svg',
                  image_alt: 'PRX-T33 logotyp',
                  image_title: 'PRX-T33 - kemisk peeling',
                  url: '/prx-t33.php',
                  url_title: 'PRX-T33',
            ),
            new Brand(
                  label: 'Exceed',
                  image: 'bilder/logotyper/exceed.png',
                  image_alt: 'Exceed logotyp',
                  image_title: 'Exceed - microneedling',
                  url: '/varumarken/exceed/',
                  url_title: 'Exceedn',
            ),
            new Brand(
                  label: 'Microdermabrasion',
                  image: 'bilder/logotyper/microdermabrasion.png',
                  image_alt: 'Microdermabrasion logotyp',
                  image_title: 'Microdermabrasion - hudslipning',
                  url: '/microdermabrasion.php',
                  url_title: 'Microdermabrasion',
            ),
            new Brand(
                  label: 'DAHL Skincare',
                  image: 'bilder/logotyper/dahl-skincare.webp',
                  image_alt: 'DAHL Skincare logotyp',
                  image_title: 'DAHL Skincare - hudvårdsprodukter',
                  url: 'https://www.dahlskincare.com/sv/,
                  url_title: 'DAHL Skincare',
            ),
      );
}
?>

<div class="brands-widget">
      <div class="flex-container">
            <?php foreach ($brands as $brand) { ?>
                  <a href="<?php echo $brand->url ?>" title="<?php echo $brand->url_title ?>" class="flex-item">
                        <img loading="lazy" src="<?php echo $brand->image ?>" alt="<?php echo $brand->image_alt ?>" title="<?php echo $brand->image_title ?>" width="116" height="30" />
                  </a>
            <?php } ?>
      </div>
      <div class="brand-mask is-hidden" id="brand-mask-left">
            <div class="brand-mask-scroll-button" onclick="Brands.scroll(-1)"><?php icon('arrow-left') ?></div>
      </div>
      <div class="brand-mask is-hidden" id="brand-mask-right">
            <div class="brand-mask-scroll-button" onclick="Brands.scroll(1)"><?php icon('arrow-right') ?></div>
      </div>
</div>
<script src="includes/widgets/brands/brands.js"></script>