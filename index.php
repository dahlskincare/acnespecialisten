<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Home</title>
      <meta name="description"
            content="Acnespecialisten is the best etc..."
            class="l10n">
      <meta name="title"
            content="Acnespecialisten"
            class="l10n">
      <meta name="keywords"
            content="Acne, specialisten"
            class="l10n">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

      <link rel="preload"
            as="image"
            href="images/banner-desktop.jpg"
            media="(min-width: 984px)">
      <link rel="preload"
            as="image"
            href="images/banner-mobile.jpg"
            media="(max-width: 983px)">

      <link rel="stylesheet"
            href="/styles/default-layout.css">

      <link rel="stylesheet"
            href="/index.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-background">
                        <div class="container">
                              <h1 class="big l10n">Skin specialists</h1>
                        </div>
                  </div>
                  <div class="container">
                        <div class="banner-bar elevation-medium is-hidden-desktop"
                             id="banner-bar-small">
                              <a href="https://dahlskincare.com/skin-consultation"
                                 target="_blank">
                                    <button class="white">
                                          <span class="l10n">Get a free consultation</span>
                                    </button>
                              </a>
                              <div id="banner-bar-cols">
                                    <div>
                                          <span class="h500">4,8</span>
                                          <?php icon('trustpilot') ?>
                                          <div class="p200 l10n">on Trustpilot</div>
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
                        <div class="banner-bar elevation-medium is-hidden-touch"
                             id="banner-bar-large">
                              <div id="banner-bar-cols">
                                    <div class="flex-aligner">
                                          <span class="h500">4,8</span>
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
                                          <span class="h500">30+</span>
                                          <div>
                                                <div class="h400 l10n">years</div>
                                                <div class="p200 l10n">on the market</div>
                                          </div>
                                    </div>
                                    <div class="flex-aligner">
                                          <span class="h500 l10n">200k+</span>
                                          <div>
                                                <div class="h400 l10n">clients</div>
                                                <div class="p200 l10n">were satisfied</div>
                                          </div>
                                    </div>
                                    <a href="https://dahlskincare.com/skin-consultation"
                                       target="_blank"
                                       class="button white l10n">
                                          Get a free consultation
                                    </a>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="problems">
                  <div class="container l10n">
                        <h2 class="big">Problems</h2>
                        <?php
                        $accordion = array();
                        if ($lang == 'sv') {
                              $accordion[] = new AccordionItem('Akne', 'images/problems/carousel/small/acne.jpg', 'images/problems/carousel/large/acne.jpg', 'problems/acne.php', true, true);
                              $accordion[] = new AccordionItem('Akneärr', 'images/problems/carousel/small/acne-scars.jpg', 'images/problems/carousel/large/acne-scars.jpg', 'problems/acne-scars.php', true, true);
                              $accordion[] = new AccordionItem('Rosacea', 'images/problems/carousel/small/rosacea.jpg', 'images/problems/large/carousel/rosacea.jpg', 'problems/rosacea.php', true, true);
                              $accordion[] = new AccordionItem('Pigmentering', 'images/problems/carousel/small/pigmentation.jpg', 'images/problems/carousel/large/pigmentation.jpg', 'problems/pigmentation.php', true, true);
                              $accordion[] = new AccordionItem('Pormaskar', 'images/problems/carousel/small/large-pores.jpg', 'images/problems/carousel/large/large-pores.jpg', 'problems/large-pores.php', true, true);
                              $accordion[] = new AccordionItem('Åldrande hy', 'images/problems/carousel/small/mature-skin.jpg', 'images/problems/carousel/large/mature-skin.jpg', 'problems/mature-skin.php', false, true);
                              $accordion[] = new AccordionItem('Visa alla problem', 'images/problems/carousel/small/other.jpg', 'images/problems/carousel/large/other.jpg', 'problems.php', true, false);
                        } else {
                              $accordion[] = new AccordionItem('Acne', 'images/problems/carousel/small/acne.jpg', 'images/problems/carousel/large/acne.jpg', 'problems/acne.php', true, true);
                              $accordion[] = new AccordionItem('Acne scars', 'images/problems/carousel/small/acne-scars.jpg', 'images/problems/carousel/large/acne-scars.jpg', 'problems/acne-scars.php', true, true);
                              $accordion[] = new AccordionItem('Rosacea', 'images/problems/carousel/small/rosacea.jpg', 'images/problems/carousel/large/rosacea.jpg', 'problems/rosacea.php', true, true);
                              $accordion[] = new AccordionItem('Pigmentation', 'images/problems/carousel/small/pigmentation.jpg', 'images/problems/carousel/large/pigmentation.jpg', 'problems/pigmentation.php', true, true);
                              $accordion[] = new AccordionItem('Comedones', 'images/problems/carousel/small/large-pores.jpg', 'images/problems/carousel/large/large-pores.jpg', 'problems/large-pores.php', true, true);
                              $accordion[] = new AccordionItem('Aging skin', 'images/problems/carousel/small/mature-skin.jpg', 'images/problems/carousel/large/mature-skin.jpg', 'problems/mature-skin.php', false, true);
                              $accordion[] = new AccordionItem('View all problems', 'images/carousel/problems/small/other.jpg', 'images/problems/carousel/large/other.jpg', 'problems.php', true, false);
                        }
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                              ?>
                        <a href="problems.php"
                           class="mt-xl button outline is-hidden-desktop expand">View all problems</a>
                  </div>
            </section>
            <section id="our-approach">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our approach</h2>
                              <a href="our-approach.php"
                                 class="button compact text is-hidden-mobile">
                                    <span class="l10n">Read more about or approach</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <div class="columns is-gapless">
                              <div class="column">
                                    <div class="approach-card">
                                          <div class="card-title">
                                                <div class="circle">01</div>
                                                <h3 class="h300 l10n">Define</h3>
                                          </div>
                                          <div class="p200 l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend.
                                          </div>
                                          <a href="https://www.dahlskincare.com/skin-consultation"
                                             target="_blank"
                                             class="button compact text l10n is-hidden-mobile">
                                                Get a free consultation
                                          </a>
                                          <a href="https://www.dahlskincare.com/skin-consultation"
                                             class="button grey expand l10n is-hidden-tablet">
                                                Get a free consultation
                                          </a>
                                    </div>
                              </div>
                              <div class="column">
                                    <div class="approach-card">
                                          <div class="card-title">
                                                <div class="circle">02</div>
                                                <h3 class="h300 l10n">Treat</h3>
                                          </div>
                                          <div class="p200 l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend.
                                          </div>
                                          <a href="treatments.php"
                                             class="button compact text l10n is-hidden-mobile">View treatments</a>
                                          <a href="treatments.php"
                                             class="button grey expand l10n is-hidden-tablet">View treatments</a>
                                    </div>
                              </div>
                              <div class="column">
                                    <div class="approach-card">
                                          <div class="card-title">
                                                <div class="circle">03</div>
                                                <h3 class="h300 l10n">Prevent</h3>
                                          </div>
                                          <div class="p200 l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend.
                                          </div>
                                          <a href="https://www.dahlskincare.com"
                                             target="_blank"
                                             class="button compact text l10n is-hidden-mobile">View products</a>
                                          <a href="products.php"
                                             class="button grey expand l10n is-hidden-tablet">View products</a>
                                    </div>
                              </div>
                              <div class="column">
                                    <div class="approach-card">
                                          <div class="card-title">
                                                <div class="circle">04</div>
                                                <h3 class="h300 l10n">Repair</h3>
                                          </div>
                                          <div class="p200 l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend.
                                          </div>
                                          <a href="treatments.php"
                                             class="button compact text l10n is-hidden-mobile">View treatments</a>
                                          <a href="treatments.php"
                                             class="button grey expand l10n is-hidden-tablet">View treatments</a>
                                    </div>
                              </div>
                        </div>
                        <a href="our-approach.php"
                           class="button outline expand mt-xl l10n is-hidden-desktop">
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
                                          <button class="round-large grey"
                                                  onclick="Carousel.prev('#results-carousel')">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey"
                                                  onclick="Carousel.next('#results-carousel')">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel"
                             id="results-carousel">
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/acne-before.webp';
                                          $after = 'images/results/acne-after.webp';
                                          if ($lang == 'sv') {
                                                $label = 'Efter två månaders <a href="treatments/acne.php">aknebehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/acne.php">acne treatment</a>';
                                          }
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/rosacea-before.webp';
                                          $after = 'images/results/rosacea-after.webp';
                                          if ($lang == 'sv') {
                                                $label = 'Efter två månaders <a href="treatments/rosacea.php">rosaceabehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/rosacea.php">rosacea treatment</a>';
                                          }
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                              <div class="slide">
                                    <div class="container l10n">
                                          <?php
                                          $before = 'images/results/comedones-before.webp';
                                          $after = 'images/results/comedones-after.webp';
                                          if ($lang == 'sv') {
                                                $label = 'Efter två månaders <a href="treatments/comedones.php">pormaskbehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/comedones.php">comedones treatment</a>';
                                          }
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                        </div>
                        <div class="container">
                              <a class="button outline expand l10n"
                                 href="results.php">View all treatment results</a>
                        </div>
                  </div>
                  <div class="container is-hidden-mobile">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Results</h2>
                              <a href="results.php"
                                 class="button compact text">
                                    <span class="l10n">View all treatment results</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <div class="columns is-3 is-variable">
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/acne-before.webp';
                                    $after = 'images/results/acne-after.webp';
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/acne.php">aknebehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/acne.php">acne treatment</a>';
                                    }
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/rosacea-before.webp';
                                    $after = 'images/results/rosacea-after.webp';
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/rosacea.php">rosaceabehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/rosacea.php">rosacea treatment</a>';
                                    }
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/comedones-before.webp';
                                    $after = 'images/results/comedones-after.webp';
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/comedones.php">pormaskbehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/comedones.php">comedones treatment</a>';
                                    }
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
                                          <button class="round-large grey"
                                                  onclick="Carousel.prev('#reviews-carousel')">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey"
                                                  onclick="Carousel.next('#reviews-carousel')">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                                    <a href="reviews.php"
                                       class="ml-l button compact text">
                                          <span class="l10n">View all reviews</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>

                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n"
                           href="reviews.php">View all reviews</a>
                  </div>
            </section>
            <section id="services">
                  <div class="container l10n">
                        <h2 class="big">Services</h2>
                        <?php
                        $accordion = array();
                        if ($lang == 'sv') {
                              $accordion[] = new AccordionItem('Ansiktsbehandlingar', 'images/service-categories/small/facials.jpg', 'images/service-categories/large/facials.jpg', 'services/facials.php', true, true);
                              $accordion[] = new AccordionItem('IPL', 'images/service-categories/small/ipl.jpg', 'images/service-categories/large/ipl.jpg', 'services/ipl.php', true, true);
                              $accordion[] = new AccordionItem('Laser', 'images/service-categories/small/laser-problem-skin.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'services/laser.php', true, true);
                              $accordion[] = new AccordionItem('Dermabration', 'images/service-categories/small/dermabration.jpg', 'images/service-categories/large/dermabration.jpg', 'services/dermabration.php', true, true);
                              $accordion[] = new AccordionItem('Microneedling', 'images/service-categories/small/microneedling.jpg', 'images/service-categories/large/microneedling.jpg', 'services/microneedling.php', true, true);
                              $accordion[] = new AccordionItem('Injections ', 'images/service-categories/small/injections.jpg', 'images/service-categories/large/injections.jpg', 'services/injection.php', false, true);
                              $accordion[] = new AccordionItem('Visa alla tjänster', 'images/service-categories/small/luxury.jpg', 'images/service-categories/large/luxury.jpg', 'services.php', true, false);
                        } else {
                              $accordion[] = new AccordionItem('Facials', 'images/service-categories/small/facials.jpg', 'images/service-categories/large/facials.jpg', 'services/facials.php', true, true);
                              $accordion[] = new AccordionItem('IPL', 'images/service-categories/small/ipl.jpg', 'images/service-categories/large/ipl.jpg', 'services/ipl.php', true, true);
                              $accordion[] = new AccordionItem('Laser', 'images/service-categories/small/laser-problem-skin.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'services/laser.php', true, true);
                              $accordion[] = new AccordionItem('Dermabration', 'images/service-categories/small/dermabration.jpg', 'images/service-categories/large/dermabration.jpg', 'services/dermabration.php', true, true);
                              $accordion[] = new AccordionItem('Microneedling', 'images/service-categories/small/microneedling.jpg', 'images/service-categories/large/microneedling.jpg', 'services/microneedling.php', true, true);
                              $accordion[] = new AccordionItem('Injections ', 'images/service-categories/small/injections.jpg', 'images/service-categories/large/injections.jpg', 'services/injection.php', false, true);
                              $accordion[] = new AccordionItem('View all services', 'images/service-categories/small/luxury.jpg', 'images/service-categories/large/luxury.jpg', 'services.php', true, false);
                        }
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                              ?>
                        <a href="problems.php"
                           class="mt-xl button outline is-hidden-desktop expand">View all services</a>
                  </div>
            </section>
            <section id="faq">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Questions & answers</h2>
                              <a href="faq.php"
                                 class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all questions</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                  </div>
            </section>
            <section id="skin-guide">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Skin guide</h2>
                              <a href="skin-guide.php"
                                 class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all articles</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n"
                           href="skin-guide.php">View all articles</a>
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
                                          <source media="(max-width: 799px)"
                                                  srcset="images/about-mobile.jpg">
                                          <source media="(min-width: 800px)"
                                                  srcset="images/about-desktop.jpg">
                                          <img src="images/about-mobile.jpg"
                                               alt="About us"
                                               width="364"
                                               height="364" />
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
                                    <a href="about.php"
                                       class="button b200 outline expand l10n">View more about us</a>
                              </div>
                        </div>
                        <div id="about-image-desktop">
                              <picture>
                                    <source media="(max-width: 799px)"
                                            srcset="images/about-mobile.jpg">
                                    <source media="(min-width: 800px)"
                                            srcset="images/about-desktop.jpg">
                                    <img src="images/about-desktop.jpg"
                                         alt="About us"
                                         width="632"
                                         height="632" />
                              </picture>
                        </div>
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our specialists</h2>
                              <a href="specialists.php"
                                 class="button compact text is-hidden-mobile">
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
                        <a class="mt-xl button outline expand is-hidden-tablet l10n"
                           href="specialists.php">View all specialists</a>
                  </div>
            </section>
            <section id="brands">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Brands we use</h2>
                              <a href="brands.php"
                                 class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n"
                           href="brands.php">View all brands</a>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>