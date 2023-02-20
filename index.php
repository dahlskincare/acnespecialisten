<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Home</title>
      <meta name="description" content="Acnespecialisten is the best etc..." class="l10n">
      <meta name="title" content="Acnespecialisten" class="l10n">
      <meta name="keywords" content="Acne, specialisten" class="l10n">

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
                                                <div class="p200 l10n">Trustpilot</div>
                                          </div>
                                          <div>
                                                <span class="h500">30+</span>
                                                <div class="p200 l10n">years</div>
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
                                                      <div class="p200 l10n">Trustpilot score</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">30+</span>
                                                <div>
                                                      <div class="h400 l10n">years</div>
                                                      <div class="p200 l10n">on the market</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">200k+</span>
                                                <div>
                                                      <div class="h400 l10n">clients</div>
                                                      <div class="p200 l10n">were satisfied</div>
                                                </div>
                                          </div>
                                          <div class="button white l10n">
                                                Get a free consultation
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </a>
            </section>
            <section id="problems">
                  <div class="container l10n">
                        <h2 class="big">Problems</h2>
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
                        <a href="problems" class="mt-xl button outline is-hidden-desktop expand">View all problems</a>
                  </div>
            </section>
            <section id="our-approach">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="h500 l10n">Our approach</h2>
                              <a href="our-approach" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Read more about our approach</span>
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
                        <a href="our-approach" class="button outline expand mt-xl l10n is-hidden-desktop">
                              Read more about our approach
                        </a>
                  </div>
            </section>
            <section id="results">
                  <div class="is-hidden-tablet">
                        <div class="container">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Results</h2>
                                    <div class="step-buttons">
                                          <button class="round-large grey" onclick="Carousel.prev('#results-carousel')">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="Carousel.next('#results-carousel')">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel" id="results-carousel">
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/acne-before.webp';
                                          $after = 'images/results/acne-after.webp';
                                          $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/rosacea-before.webp';
                                          $after = 'images/results/rosacea-after.webp';
                                          $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/comedones-before.webp';
                                          $after = 'images/results/comedones-after.webp';
                                          $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                        </div>
                        <div class="container">
                              <a class="button outline expand l10n" href="results">View all treatment results</a>
                        </div>
                  </div>
                  <div class="container is-hidden-mobile">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Results</h2>
                              <a href="results" class="button compact text">
                                    <span class="l10n">View all treatment results</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <div class="columns is-3 is-variable">
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/acne-before.webp';
                                    $after = 'images/results/acne-after.webp';
                                    $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/rosacea-before.webp';
                                    $after = 'images/results/rosacea-after.webp';
                                    $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/comedones-before.webp';
                                    $after = 'images/results/comedones-after.webp';
                                    $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="reviews">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Reviews</h2>
                              <div class="flex-row is-hidden-mobile">
                                    <div class="step-buttons">
                                          <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel')">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="Carousel.next('#reviews-carousel')">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                                    <a href="reviews" class="ml-l button compact text">
                                          <span class="l10n">View all reviews</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>

                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
                  </div>
            </section>
            <section id="services">
                  <div class="container l10n">
                        <h2 class="big">Services</h2>
                        <?php
                        $accordion = array(
                              new AccordionItem('Facials', 'images/service-categories/small/facials.jpg', 'images/service-categories/large/facials.jpg', 'services/facials', true, true),
                              new AccordionItem('IPL', 'images/service-categories/small/ipl.jpg', 'images/service-categories/large/ipl.jpg', 'services/ipl', true, true),
                              new AccordionItem('Laser', 'images/service-categories/small/laser-problem-skin.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'services/laser', true, true),
                              new AccordionItem('Dermabration', 'images/service-categories/small/dermabration.jpg', 'images/service-categories/large/dermabration.jpg', 'services/dermabration', true, true),
                              new AccordionItem('Microneedling', 'images/service-categories/small/microneedling.jpg', 'images/service-categories/large/microneedling.jpg', 'services/microneedling', true, true),
                              new AccordionItem('Injections ', 'images/service-categories/small/injections.jpg', 'images/service-categories/large/injections.jpg', 'services/injection', false, true),
                              new AccordionItem('View all services', 'images/service-categories/small/luxury.jpg', 'images/service-categories/large/luxury.jpg', 'services', true, false)
                        );

                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="problems" class="mt-xl button outline is-hidden-desktop expand">View all services</a>
                  </div>
            </section>
            <section id="faq">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Questions & answers</h2>
                              <a href="faq" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all questions</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
                  </div>
            </section>
            <section id="skin-guide">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Skin guide</h2>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all articles</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
                  </div>
            </section>
            <section id="about-us">
                  <div class="container">
                        <div id="about-text-wrapper">
                              <div id="about-text">
                                    <h2 class="big l10n">About us</h2>
                                    <h3 class="h200 mt-m l10n">
                                          This is a treatment adapted for acne skin and pimples and gives a
                                          really good start to the treatment of the skin.
                                    </h3>
                                    <picture class="is-hidden-tablet">
                                          <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                          <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                          <img src="images/about-mobile.jpg" alt="About us" width="364" height="364" />
                                    </picture>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('about-bullet') ?>
                                                      <h3 class="h200 l10n">25 years of experience</h3>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('about-bullet') ?>
                                                      <h3 class="h200 l10n">Unique solution</h3>
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
                                                      <?php icon('about-bullet') ?>
                                                      <h3 class="h200 l10n">Unique solution</h3>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      In a personal meeting with a skin specialist,
                                                      your skin type is examined and identified.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('about-bullet') ?>
                                                      <h3 class="h200 l10n">25 years of experience</h3>
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
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our specialists</h2>
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
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
                  </div>
            </section>
            <section id="brands">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Brands we use</h2>
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="index.js"></script>
</body>

</html>