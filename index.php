<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | hej</title>
      <meta name="description" content="Acnespecialisten is the best etc..." class="l10n">
      <meta name="title" content="Acnespecialisten" class="l10n">
      <meta name="keywords" content="Acne, specialisten" class="l10n">
      <meta property="og:title" content="Acnespecialisten" />
      <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="og:image" content="https://temp.visurus.org/images/about-desktop.jpg" />
      <meta property="twitter:title" content="Acnespecialisten" />
      <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="twitter:image" content="https://temp.visurus.org/images/about-desktop.jpg" />
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="preload" as="image" href="images/banner-desktop.jpg" media="(min-width: 984px)">
      <link rel="preload" as="image" href="images/banner-mobile.jpg" media="(max-width: 983px)">
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/index.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-background">
                        <video autoplay muted loop id="banner-video">
                        </video>
                        <div class="container">
                              <h1 class="big l10n">Hudspecialister</h1>
                        </div>
                  </div>
                  <a href="https://dahlskincare.com/skin-consultation" target="_blank">
                        <div class="container">
                              <div class="banner-bar elevation-medium is-hidden-desktop" id="banner-bar-small">
                                    <button class="white">
                                          <span class="l10n">Gratis Hudkonsultation</span>
                                    </button>
                                    <div id="banner-bar-cols">
                                          <div>
                                                <span class="h500">4,8</span>
                                                <?php icon('trustpilot') ?>
                                                <div class="p200 l10n">På Trustpilot</div>
                                          </div>
                                          <div>
                                                <span class="h500">30+</span>
                                                <div class="p200 l10n">år</div>
                                          </div>
                                          <div>
                                                <span class="h500">200k+</span>
                                                <div class="p200 l10n">clients</div>
                                          </div>
                                    </div>
                              </div>
                              <div class="banner-bar elevation-medium is-hidden-touch" id="banner-bar-large">
                                    <div id="banner-bar-cols">
                                          <div class="flex-aligner">
                                                <span class="label-large">4,8</span>
                                                <div>
                                                      <?php icon('trustpilot') ?>
                                                      <?php icon('trustpilot') ?>
                                                      <?php icon('trustpilot') ?>
                                                      <?php icon('trustpilot') ?>
                                                      <?php icon('trustpilot') ?>
                                                      <div class="p200 l10n">På Trustpilot</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">30+</span>
                                                <div>
                                                      <div class="h400 l10n">år</div>
                                                      <div class="p200 l10n">i branchen</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">200k+</span>
                                                <div>
                                                      <div class="h400 l10n">Kunder</div>
                                                      <div class="p200 l10n">som blivit problemfria</div>
                                                </div>
                                          </div>
                                          <div class="button white l10n">
                                                Gratis konsultation
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </a>
            </section>
            <div class="container">
                  <section id="problems">
                        <div class="h500 l10n">Problem</div>
                        <?php
                        $accordion = array(
                              new AccordionItem('Acne', 'images/problems/carousel/small/acne.jpg', 'images/problems/carousel/large/acne.jpg', 'problems/acne', true, true),
                              new AccordionItem('Acne scars', 'images/problems/carousel/small/acne-scars.jpg', 'images/problems/carousel/large/acne-scars.jpg', 'problems/acne-scars', true, true),
                              new AccordionItem('Rosacea', 'images/problems/carousel/small/rosacea.jpg', 'images/problems/carousel/large/rosacea.jpg', 'problems/rosacea', true, true),
                              new AccordionItem('Pigmentation', 'images/problems/carousel/small/pigmentation.jpg', 'images/problems/carousel/large/pigmentation.jpg', 'problems/pigmentation', true, true),
                              new AccordionItem('Comedones', 'images/problems/carousel/small/large-pores.jpg', 'images/problems/carousel/large/large-pores.jpg', 'problems/large-pores', true, true),
                              new AccordionItem('Aging skin', 'images/problems/carousel/small/mature-skin.jpg', 'images/problems/carousel/large/mature-skin.jpg', 'problems/mature-skin', false, true),
                              new AccordionItem('View all problems', 'images/carousel/problems/small/other.jpg', 'images/problems/carousel/large/other.jpg', 'problems', true, false)
                        );
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="problems" class="mt-xl button outline is-hidden-desktop expand l10n">Se alla problem</a>
                  </section>
                  <section id="our-approach">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Vår metod</div>
                              <a href="our-approach" class="button compact text is-hidden-mobile">
                                    <span class="l10n">läs mer om vår metod</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $approach_cards = array(
                              new ApproachCard('01', 'Define', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'Get a free consultation', 'https://www.dahlskincare.com/skin-consultation'),
                              new ApproachCard('02', 'Treat', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View treatments', 'treatments'),
                              new ApproachCard('03', 'Prevent', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View products', 'products'),
                              new ApproachCard('04', 'Repair', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View treatments', 'treatments')
                        );
                        ?>
                        <div class="columns is-gapless">
                              <?php foreach ($approach_cards as $approach_card) { ?>
                                    <div class="column">
                                          <?php
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/approach_card/approach_card.php')
                                          ?>
                                    </div>
                              <?php } ?>
                        </div>
                        <a href="our-approach" class="button b200 outline expand mt-xl l10n is-hidden-desktop">
                              Read more about our approach
                        </a>
                  </section>
                  <section id="results">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
                  </section>
                  <section id="reviews">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Reviews</div>
                              <div class="flex-row is-hidden-mobile">
                                    <div class="step-buttons">
                                          <button class="round-large grey" onclick="Reviews.scroll(-1)"><?php icon('arrow-left') ?></button>
                                          <button class="round-large grey" onclick="Reviews.scroll(1)"><?php icon('arrow-right') ?></button>
                                    </div>
                                    <a href="reviews" class="ml-l button compact text">
                                          <span class="l10n">View all reviews</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
                  </section>
                  <section id="services">
                        <div class="h500 l10n">Services</div>
                        <?php
                        $accordion = array(
                              new AccordionItem('Facials', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/facials.jpg', 'services/facials', true, true),
                              new AccordionItem('IPL', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/ipl.jpg', 'services/ipl', true, true),
                              new AccordionItem('Laser', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'services/laser', true, true),
                              new AccordionItem('Dermabration', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/dermabration.jpg', 'services/dermabration', true, true),
                              new AccordionItem('Microneedling', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/microneedling.jpg', 'services/microneedling', true, true),
                              new AccordionItem('Injections ', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/injections.jpg', 'services/injection', false, true),
                              new AccordionItem('View all services', 'https://via.placeholder.com/114x140.jpg', 'images/service-categories/large/luxury.jpg', 'services', true, false)
                        );

                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="services" class="mt-xl button b200 outline is-hidden-desktop expand">View all services</a>
                  </section>
                  <section id="faq">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Questions & answers</div>
                              <a href="faq" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all questions</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
                  </section>
                  <section id="skin-guide">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Skin guide</div>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all articles</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
                  </section>
                  <section id="about-us">
                        <div id="about-text-wrapper">
                              <div id="about-text">
                                    <div class="h500 l10n">About us</div>
                                    <div class="h200 mt-m l10n">
                                          This is a treatment adapted for acne skin and pimples and gives a
                                          really good start to the treatment of the skin.
                                    </div>
                                    <picture class="is-hidden-tablet">
                                          <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                          <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                          <img src="images/about-mobile.jpg" alt="About us" width="364" height="364" />
                                    </picture>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">25 years of experience</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">Unique solution</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                    </div>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">Unique solution</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">25 years of experience</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                          </div>
                                    </div>
                                    <a href="about" class="button b200 outline expand l10n">View more about us</a>
                              </div>
                        </div>
                        <div id="about-image-desktop">
                              <picture>
                                    <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                    <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                    <img src="images/about-desktop.jpg" alt="About us" width="632" height="632" />
                              </picture>
                        </div>
                  </section>
                  <section id="specialists">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Our specialists</div>
                              <a href="specialists" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all specialists</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $specialists = array();
                        $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg');
                        $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg');
                        $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg');
                        $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg');
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
                  </section>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Brands we use</div>
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="index.js"></script>
</body>

</html>
