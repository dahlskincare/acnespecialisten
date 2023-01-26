<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Problems</title>
      <meta name="description"
            content=""
            class="l10n">
      <meta name="title"
            content=""
            class="l10n">
      <meta name="keywords"
            content=""
            class="l10n">

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet"
            href="/styles/default-layout.css">
      <link rel="stylesheet"
            href="problems.css">
      <script src="problems.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-green">
                        <div class="container l10n">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                              <h2 class="big mt-xs l10n">Skin problems</h2>
                              <p class="p200 mt-xs">
                                    <span id="problems-banner-collapsed"
                                          class="l10n">
                                          In a personal meeting with a skin specialist, your skin type is examined and
                                          identified. We take pre-photos of your skin, recommend. In a personal meeting
                                          with a
                                          skin specialist, your skin type is examined and identified. We take pre-photos
                                          of
                                          your skin, recommend. In a personal meeting with a skin specialist, your skin
                                          type
                                          is examined and identified In a personal meeting with a skin specialist, your
                                          skinonal...
                                          <span class="l10n underline"
                                                onclick="onReadMoreClick()">read more</span>
                                    </span>
                                    <span id="problems-banner-expanded"
                                          class="l10n is-hidden">
                                          In a personal meeting with a skin specialist, your skin type is
                                          examined and identified. We take pre-photos of your skin, recommend. In a
                                          personal
                                          meeting with a skin specialist, your skin type is examined and identified. We
                                          take
                                          pre-photos of your skin, recommend. In a personal meeting with a skin
                                          specialist,
                                          your
                                          skin type is examined and identified In a personal meeting with a skin
                                          specialist,
                                          your
                                          skinonal.

                                          In a personal meeting with a skin specialist, your skin type is examined and
                                          identified. We take pre-photos of your skin, recommend. In a personal meeting
                                          with a
                                          skin specialist, your skin type is examined and identified. We take pre-photos
                                          of
                                          your skin, recommend. In a personal meeting with a skin specialist, your skin
                                          type
                                          is examined and identified In a personal meeting with a skin specialist, your
                                          skinonal.
                                    </span>
                              </p>
                              <a href="https://dahlskincare.com/skin-consultation"
                                 target="_blank"
                                 class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                              <div class="chips mt-xl">
                                    <div class="chip">
                                          <?php icon('trustpilot') ?>
                                          <span class="l10n">4,8 on Trustpilot</span>
                                    </div>
                                    <div class="chip">
                                          <span class="l10n">30 years</span>
                                    </div>
                                    <div class="chip">
                                          <span class="l10n">200k+ clients</span>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="container">
                        <div id="banner-problem-area-filters"
                             class="carousel l10n">
                              <?php
                              $problem_areas = array();
                              if ($lang == 'sv') {
                                    $problem_areas[] = 'ansikte';
                                    $problem_areas[] = 'kropp';
                                    $problem_areas[] = 'bröst';
                                    $problem_areas[] = 'ögon';
                                    $problem_areas[] = 'läppar';
                                    $problem_areas[] = 'hår';
                                    $problem_areas[] = 'rygg';
                                    $problem_areas[] = 'axlar';
                                    $problem_areas[] = 'käklinje';
                                    $problem_areas[] = 'nacke';
                              } else {
                                    $problem_areas[] = 'face';
                                    $problem_areas[] = 'body';
                                    $problem_areas[] = 'chest';
                                    $problem_areas[] = 'eyes';
                                    $problem_areas[] = 'lips';
                                    $problem_areas[] = 'hair';
                                    $problem_areas[] = 'back';
                                    $problem_areas[] = 'shoulders';
                                    $problem_areas[] = 'neckline';
                                    $problem_areas[] = 'neck';
                              }

                              foreach ($problem_areas as $problem_area) { ?>
                                    <div class="banner-problem-area">
                                          <img src="images/problem-areas/<?php echo $problem_area ?>.png"
                                               alt="icon"
                                               width="32"
                                               height="32">
                                          <div class="b100 l10n">
                                                <?php echo $problem_area ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                        <div id="banner-problem-areas">
                              <a href="problems/acne.php"
                                 class="button b200 grey expand l10n">Acne</a>
                              <a href="problems/acne-scars.php"
                                 class="button b200 grey expand l10n">Acne scars</a>
                              <a href="problems/comedones.php"
                                 class="button b200 grey expand l10n">Comedones</a>
                        </div>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>