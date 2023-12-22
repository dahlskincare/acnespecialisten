<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
include_once('models.php');

$green_banner_content = new GreenBannerContent(
      title: 'Varumärken',
      description: 'På AcneSpecialisten är vi dedikerade till att behandla och förbättra hudproblem som akne, rosacea, pormaskar och finnar, och detta åstadkommer vi genom att använda ledande varumärken och tekniker inom hudvård. Våra samarbetspartners inkluderar Alma, Dermapen, CryoPen, HydraFacial, Infuzion, Splendor X och Soprano Ice, som alla erbjuder banbrytande lösningar för en rad hudtillstånd.',
      description_extended: 'Genom dessa innovativa behandlingsmetoder och vår expertis, skapar vi skräddarsydda behandlingsplaner för att möta dina individuella hudvårdsbehov. Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.',
      button_url: 'gratis-hudkonsultation',
      button_label: 'Boka en gratis konsultation'
);

$header_brands = array(
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_alt: 'Alma',
            image_title: 'Alma',
            url: 'varumarken/alma',
            url_title: 'Alma',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen',
            image_title: 'CryoPen',
            url: 'cryopen.php',
            url_title: 'CryoPen',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen',
            image_title: 'Dermapen',
            url: 'dermapen.php',
            url_title: 'Dermapen',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed',
            image_title: 'Exceed',
            url: 'varumarken/exceed',
            url_title: 'Exceedn',
      ),
      new Brand(
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial',
            image_title: 'HydraFacial',
            url: 'hydrafacial.php',
            url_title: 'HydraFacial',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion',
            image_title: 'Infuzion',
            url: 'infuzion.php',
            url_title: 'Infuzion',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion',
            image_title: 'Microdermabrasion',
            url: 'microdermabrasion.php',
            url_title: 'Microdermabrasion',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova',
            image_title: 'Powerlite Photonova',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Powerlite Photonova',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33n',
            image_title: 'PRX-T33',
            url: 'prx-t33.php',
            url_title: 'PRX-T33',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech',
            image_title: 'Skin Tech',
            url: 'varumarken/skin-tech',
            url_title: 'Skin Tech',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X',
            image_title: 'Splendor X',
            url: 'varumarken/splendor-x',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice',
            image_title: 'Soprano Ice',
            url: 'varumarken/alma/soprano-ice',
            url_title: 'Soprano Ice',
      ),
);

$link_brands = array(
      new BrandCategory(
            label: 'Laser for problem skin',
            services: array(
                  "varumarken/alma/hybrid" => "Alma - Hybrid",
                  "varumarken/alma/harmony-xl-pro" => "Alma - Harmony XL"
            )
      ),
      new BrandCategory(
            label: 'Permanent Hårborttagning',
            services: array(
                  "varumarken/alma/soprano-ice" => "Alma - Soprano Ice",
                  "varumarken/splendor-x" => "Lumenis - Splendor X",
            )
      ),
      new BrandCategory(
            label: 'IPL',
            services: array(
                  "varumarken/alma/rejuve" => "Alma - Rejuve Dye VL",
                  "varumarken/alma/harmony-xl" => "Alma - Harmony XL",
                  "varumarken/powerlite-photonova" => "Powerlight - PhotoNova PLS3",
            )
      ),
      new BrandCategory(
            label: 'Dermabration',
            services: array(
                  "varumarken/hydrafacial" => "HydraFacial",
                  "varumarken/microdemabrasion" => "Mimass - MicroDermabrasion",
            )
      ),
      new BrandCategory(
            label: 'Kemisk Peeling',
            services: array(
                  "varumarken/skin-tech" => "Skin Tech",
                  "varumarken/prx-t33" => "PRX-T33",
            )
      ),
      new BrandCategory(
            label: 'FreezeTreat',
            services: array(
                  "varumarken/cryopen" => "CryoPen",
            )
      ),
      new BrandCategory(
            label: 'Skinbooster',
            services: array(
                  "varumarken/infuzion" => "Infuzion",
            )
      ),
      new BrandCategory(
            label: 'Microneedling',
            services: array(
                  "varumarken/dermapen" => "Dermapen",
                  "varumarken/exceed" => "Exceed"
            )
      ),
);

$brand_cards = array(
      new Brand(
            label: 'Alma',
            image: 'bilder/varumarken/102x102/alma-hybrid-co2.webp',
            image_alt: 'Alma',
            image_title: 'Alma',
            photo: 'bilder/varumarken/424x324/alma-hybrid-co2.webp',
            photo_alt: 'Alma',
            photo_title: 'Alma',
            title: 'Alma - Hybrid (CO2)',
            subtitle: 'Laser for problem skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
            url: 'brands/alma',
            url_title: 'Alma',
            booking_url: 'https://bokadirekt.se',
            booking_url_title: 'Boka tid',
            consultation_url: 'gratis-hudkonsultation',
            consultation_url_title: 'Hudkonsultation',
      ),
      new Brand(
            label: 'Alma',
            image: 'https://via.placeholder.com/116x80.webp',
            image_alt: 'Alma',
            image_title: 'Alma',
            photo: 'https://via.placeholder.com/424x324.webp',
            photo_alt: 'Alma',
            photo_title: 'Alma',
            title: 'Alma - Hybrid (CO2)',
            subtitle: 'Laser for problem skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
            url: 'brands/alma',
            url_title: 'Alma',
            booking_url: 'https://bokadirekt.se',
            booking_url_title: 'Boka tid',
            consultation_url: 'gratis-hudkonsultation',
            consultation_url_title: 'Hudkonsultation',
      ),
      new Brand(
            label: 'Alma',
            image: 'https://via.placeholder.com/116x80.webp',
            image_alt: 'Alma',
            image_title: 'Alma',
            photo: 'https://via.placeholder.com/424x324.webp',
            photo_alt: 'Alma',
            photo_title: 'Alma',
            title: 'Alma - Hybrid (CO2)',
            subtitle: 'Laser for problem skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
            url: 'brands/alma',
            url_title: 'Alma',
            booking_url: 'https://bokadirekt.se',
            booking_url_title: 'Boka tid',
            consultation_url: 'gratis-hudkonsultation',
            consultation_url_title: 'Hudkonsultation',
      ),
      new Brand(
            label: 'Alma',
            image: 'https://via.placeholder.com/116x80.webp',
            image_alt: 'Alma',
            image_title: 'Alma',
            photo: 'https://via.placeholder.com/424x324.webp',
            photo_alt: 'Alma',
            photo_title: 'Alma',
            title: 'Alma - Hybrid (CO2)',
            subtitle: 'Laser for problem skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
            url: 'brands/alma',
            url_title: 'Alma',
            booking_url: 'https://bokadirekt.se',
            booking_url_title: 'Boka tid',
            consultation_url: 'gratis-hudkonsultation',
            consultation_url_title: 'Hudkonsultation',
      ),
      new Brand(
            label: 'Alma',
            image: 'https://via.placeholder.com/116x80.webp',
            image_alt: 'Alma',
            image_title: 'Alma',
            photo: 'https://via.placeholder.com/424x324.webp',
            photo_alt: 'Alma',
            photo_title: 'Alma',
            title: 'Alma - Hybrid (CO2)',
            subtitle: 'Laser for problem skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
            url: 'brands/alma',
            url_title: 'Alma',
            booking_url: 'https://bokadirekt.se',
            booking_url_title: 'Boka tid',
            consultation_url: 'gratis-hudkonsultation',
            consultation_url_title: 'Hudkonsultation',
      ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Varumärken</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/varumarken/style.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner" class="sticky-badges-target">
                  <?php
                  include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
                  ?>
                  <div class="container">
                        <div id="brands-container">
                              <div id="brands">
                                    <div id="brands-shadow">
                                          <?php
                                          foreach ($header_brands as $brand) { ?>
                                                <a href="<?php echo $brand->url ?>">
                                                      <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->title ?>" title="<?php echo $brand->title ?>" width="94" height="34" class="brand" />
                                                </a>
                                          <?php } ?>
                                    </div>
                              </div>
                              <div class="scroll-button is-hidden" id="scroll-button-previous">
                                    <button class="round-medium grey">
                                          <?php icon('arrow-left') ?>
                                    </button>
                              </div>
                              <div class="scroll-button is-hidden" id="scroll-button-next">
                                    <button class="round-medium grey">
                                          <?php icon('arrow-right') ?>
                                    </button>
                              </div>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <section id="links">
                        <div id="item-container">
                              <?php for ($i = 0; $i < count($link_brands); $i++) { ?>
                                    <div class="item" id="item-<?php echo $i ?>">
                                          <p class="p200"><?php echo $link_brands[$i]->label ?></p>
                                          <?php foreach ($link_brands[$i]->services as $url => $label) { ?>
                                                <p class="p200 service-label"><a href="<?php echo $url ?>" title="<?php echo $label ?>"><?php echo $label ?></a></p>
                                          <?php } ?>
                                    </div>
                              <?php } ?>
                        </div>
                  </section>
                  <section id="cards">
                        <div class="columns is-multiline">
                              <?php foreach ($brand_cards as $brand) { ?>
                                    <div class="column is-one-third">
                                          <div class="mt-xl">
                                                <?php include('widgets/brand_card/brand_card.php'); ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </section>

                  <section id="consultation-banner" class="large-margin">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
                        </div>
                  </section>
                  <section id="results" class="large-margin">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
                        </div>
                  </section>
                  <section id="reviews">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Omdömen</h2>
                                    <div class="flex-row is-hidden-mobile">
                                          <div class="step-buttons">
                                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                                      <?php icon('arrow-left') ?>
                                                </button>
                                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                                      <?php icon('arrow-right') ?>
                                                </button>
                                          </div>
                                          <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                                                <span class="l10n">Se alla omdömen</span>
                                                <?php icon('navigate-next') ?>
                                          </a>
                                    </div>

                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">Se alla omdömen</a>
                        </div>
                  </section>
                  <section id="faq">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Frågor & svar</h2>
                                    <a href="faq" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla frågor</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
                        </div>
                  </section>
                  <!--Hudguide-->
                  <section id="specialists">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Våra specialister</h2>
                                    <a href="specialister" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla specialister</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php
                              $specialists = array(
                                    new Specialist(
                                          name: 'Cazzandra Lindberg',
                                          title: 'Hudterapeut sedan 2015',
                                          image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                                          image_alt: 'Cazzandra Lindberg',
                                          image_title: 'Cazzandra Lindberg'
                                    ),
                                    new Specialist(
                                          name: 'Veronika Benedik',
                                          title: 'Hudterapeut sedan 1999',
                                          image: 'images/specialists/large/hudterapeut-veronika.webp',
                                          image_alt: 'Veronika Benedik',
                                          image_title: 'Veronika Benedik'
                                    ),
                                    new Specialist(
                                          name: 'Julia Eklund',
                                          title: 'Hudterapeut sedan 2017',
                                          image: 'images/specialists/large/hudterapeut-julia.webp',
                                          image_alt: 'Julia Eklund',
                                          image_title: 'Julia Eklund',
                                    ),
                                    new Specialist(
                                          name: 'Vilma Libom',
                                          title: 'Hudterapeut sedan 2019',
                                          image: 'images/specialists/large/hudterapeut-vilma.webp',
                                          image_alt: 'Vilma Libom',
                                          image_title: 'Vilma Libom'
                                    )
                              );
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                              ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists" title="Se alla specialister">Se alla specialister</a>
                        </div>
                  </section>
                  <section id="brands">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Varumärken</h2>
                                    <a href="varumarken" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla varumärken</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
                        </div>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="varumarken/brands.js"></script>
</body>

</html>