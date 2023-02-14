<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<?php
class ProblemArea
{
      public function __construct($label, $icon, $problem_ids)
      {
            $this->label = $label;
            $this->icon = $icon;
            $this->problem_ids = $problem_ids;
      }

      public string $label;
      public string $icon;
      public array $problem_ids;
}

class Problem
{
      public function __construct($label, $url, $consultation_url, $booking_url, $image_small, $image_medium, $image_large, $info)
      {
            $this->label = $label;
            $this->url = $url;
            $this->consultation_url = $consultation_url;
            $this->booking_url = $booking_url;
            $this->image_small = $image_small;
            $this->image_medium = $image_medium;
            $this->image_large = $image_large;
            $this->info = $info;
      }
      public string $label;
      public string $url;
      public string $consultation_url;
      public string $booking_url;
      public string $image_small;
      public string $image_medium;
      public string $image_large;
      public string $info;
}

$problems['acne'] = new Problem('Acne', 'problems/acne', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne.jpg', 'images/problems/medium/acne.jpg', 'images/problems/large/acne.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['acne-scars'] = new Problem('Acne scars', 'problems/acne-scars', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne-scars.jpg', 'images/problems/medium/acne-scars.jpg', 'images/problems/large/acne-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['comedones'] = new Problem('Comedones', 'problems/comedones', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/comedones.jpg', 'images/problems/medium/comedones.jpg', 'images/problems/large/comedones.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['rosacea'] = new Problem('Rosacea', 'problems/rosacea', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/rosacea.jpg', 'images/problems/medium/rosacea.jpg', 'images/problems/large/rosacea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['seborrhea'] = new Problem('Seborrhea', 'problems/seborrhea', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/seborrhea.jpg', 'images/problems/medium/seborrhea.jpg', 'images/problems/large/seborrhea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['perioral-dermatitis'] = new Problem('Perioral dermatitis', 'problems/perioral-dermatitis', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/perioral-dermatitis.jpg', 'images/problems/medium/perioral-dermatitis.jpg', 'images/problems/large/perioral-dermatitis.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['large-pores'] = new Problem('Large pores', 'problems/large-pores', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/large-pores.jpg', 'images/problems/medium/large-pores.jpg', 'images/problems/large/large-pores.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['pigmentation'] = new Problem('Pigmentation', 'problems/pigmentation', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pigmentation.jpg', 'images/problems/medium/pigmentation.jpg', 'images/problems/large/pigmentation.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['oily-combination-skin'] = new Problem('Oily & combination skin', 'problems/oily-combination-skin', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/oily-combination-skin.jpg', 'images/problems/medium/oily-combination-skin.jpg', 'images/problems/large/oily-combination-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['dry-and-sensitive-skin'] = new Problem('Dry & sensitive skin', 'problems/dry-and-sensitive-skin', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/dry-and-sensitive-skin.jpg', 'images/problems/medium/dry-and-sensitive-skin.jpg', 'images/problems/large/dry-and-sensitive-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['mature-skin'] = new Problem('Mature skin', 'problems/mature-skin', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/mature-skin.jpg', 'images/problems/medium/mature-skin.jpg', 'images/problems/large/mature-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['milier'] = new Problem('Milier', 'problems/milier', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/milier.jpg', 'images/problems/medium/milier.jpg', 'images/problems/large/milier.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['visible-blood-vessels'] = new Problem('Visible blood vessels', 'problems/visible-blood-vessels', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/visible-blood-vessels.jpg', 'images/problems/medium/visible-blood-vessels.jpg', 'images/problems/large/visible-blood-vessels.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['skin-imperfections'] = new Problem('Skin imperfections', 'problems/skin-imperfections', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/skin-imperfections.jpg', 'images/problems/medium/skin-imperfections.jpg', 'images/problems/large/skin-imperfections.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['pimples'] = new Problem('Pimples', 'problems/pimples', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pimples.jpg', 'images/problems/medium/pimples.jpg', 'images/problems/large/pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['stretch-marks'] = new Problem('Stretch marks', 'problems/stretch-marks', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/stretch-marks.jpg', 'images/problems/medium/stretch-marks.jpg', 'images/problems/large/stretch-marks.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['operational-scars'] = new Problem('Operational scars', 'problems/operational-scars', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/operational-scars.jpg', 'images/problems/medium/operational-scars.jpg', 'images/problems/large/operational-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['unwanted-hair'] = new Problem('Unwanted hair', 'problems/unwanted-hair', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/unwanted-hair.jpg', 'images/problems/medium/unwanted-hair.jpg', 'images/problems/large/unwanted-hair.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problems['scars-from-pimples'] = new Problem('Scars from pimples', 'problems/scars-from-pimples', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/scars-from-pimples.jpg', 'images/problems/medium/scars-from-pimples.jpg', 'images/problems/large/scars-from-pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
$problem_areas[] = new ProblemArea('Face', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Body', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
$problem_areas[] = new ProblemArea('Chest', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Eyes', 'images/problem-areas/eyes.png', array('rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Lips', 'images/problem-areas/lips.png', array('unwanted-hair'));
$problem_areas[] = new ProblemArea('Hair', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Back', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Shoulders', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Neckline', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Neck', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Problems</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="problems/problems.css">
      <script src="problems/problems.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-green">
                        <div class="container l10n">
                              <div class="is-hidden-desktop">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                    <h1 class="h600 mt-xs l10n">Skin problems</h1>
                                    <p class="p200 mt-xs">
                                          <span id="problems-banner-collapsed" class="l10n">
                                                In a personal meeting with a skin specialist, your skin type is
                                                examined
                                                and
                                                identified. We take pre-photos of your skin, recommend. In a
                                                personal
                                                meeting
                                                with a
                                                skin specialist, your skin type is examined and identified. We
                                                take
                                                pre-photos
                                                of
                                                your skin, recommend. In a personal meeting with a skin
                                                specialist, your
                                                skin
                                                type
                                                is examined and identified In a personal meeting with a skin
                                                specialist,
                                                your
                                                skinonal...
                                                <span class="l10n underline" onclick="onReadMoreClick()">read more</span>
                                          </span>
                                          <span id="problems-banner-expanded" class="l10n is-hidden">
                                                In a personal meeting with a skin specialist, your skin type is
                                                examined and identified. We take pre-photos of your skin,
                                                recommend. In
                                                a
                                                personal
                                                meeting with a skin specialist, your skin type is examined and
                                                identified. We
                                                take
                                                pre-photos of your skin, recommend. In a personal meeting with a
                                                skin
                                                specialist,
                                                your
                                                skin type is examined and identified In a personal meeting with a
                                                skin
                                                specialist,
                                                your
                                                skinonal.

                                                In a personal meeting with a skin specialist, your skin type is
                                                examined
                                                and
                                                identified. We take pre-photos of your skin, recommend. In a
                                                personal
                                                meeting
                                                with a
                                                skin specialist, your skin type is examined and identified. We
                                                take
                                                pre-photos
                                                of
                                                your skin, recommend. In a personal meeting with a skin
                                                specialist, your
                                                skin
                                                type
                                                is examined and identified In a personal meeting with a skin
                                                specialist,
                                                your
                                                skinonal.
                                          </span>
                                    </p>
                                    <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                                    <div class="mt-xl">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                    </div>
                              </div>
                              <div class="is-hidden-touch" id="banner-green-desktop">
                                    <div class="flex-row justify-space-between">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                          <div class="mt-xl mb-xs">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                                    <div class="flex-row align-end">
                                          <div id="skin-problems-header-column">
                                                <h1 class="h600 mt-xs l10n">Skin<br />problems</h1>
                                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Get a free consultation</a>
                                          </div>
                                          <div class="l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend. In a
                                                personal meeting with a skin specialist, your skin type is examined and
                                                identified. We take pre-photos of your skin, recommend. In a personal
                                                meeting with a skin specialist, your skin type is examined and
                                                identified In a personal meeting with a skin specialist, your skinonal
                                          </div>
                                          <div class="ml-xl4 l10n">
                                                In a personal meeting with a skin specialist, your skin type is examined
                                                and identified. We take pre-photos of your skin, recommend. In a
                                                personal meeting with a skin specialist, your skin type is examined and
                                                identified. We take pre-photos of your skin, recommend. In a personal
                                                meeting with a skin specialist, your skin type is examined and
                                                identified In a personal meeting with a skin specialist, your skinonal
                                          </div>

                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="container">
                        <div id="banner-problem-area-filters" class="carousel l10n">
                              <?php foreach ($problem_areas as $problem_area) { ?>
                                    <div class="banner-problem-area" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                          <img src="<?php echo $problem_area->icon ?>" alt="icon" width="32" height="32">
                                          <div class="b100 l10n">
                                                <?php echo $problem_area->label ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                        <div class="columns is-multiline" id="banner-problem-areas">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-fifth is-hidden" data-id="<?php echo $id ?>">
                                          <a href="javascript:;" onclick="scrollToElement('#card-<?php echo $id ?>')" class="button b200 grey expand l10n"><?php echo $problem->label ?></a>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </section>
            <section id="cards">
                  <div class="container">
                        <div class="columns is-multiline is-variable is-3">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-third">
                                          <div class="problem-area-card" id="card-<?php echo $id ?>">
                                                <picture>
                                                      <source media="(max-width: 799px)" srcset="<?php echo $problem->image_medium ?>">
                                                      <source media="(min-width: 800px)" srcset="<?php echo $problem->image_large ?>">
                                                      <img src="<?php echo $problem->image_large ?>" alt="<?php echo $problem->label ?>" width="424" height="324" />
                                                </picture>
                                                <div class="problem-area-card-content">
                                                      <h3 class="h300">
                                                            <?php echo $problem->label ?>
                                                      </h3>
                                                      <p class="mt-xs">
                                                            <?php echo $problem->info ?>
                                                      </p>
                                                      <div class="is-hidden-tablet">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button outline expand l10n">
                                                                  View problem details
                                                            </a>
                                                            <hr>
                                                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Get a free consultation</a>
                                                            <!-- TODO: procedure link -->
                                                            <a href="#" class="mt-s button expand l10n">Select a procedure</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button text compact l10n">Read more</a>
                                                            <hr>
                                                            <div class="columns is-multiline">
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Get a free
                                                                              consultation</a>
                                                                  </div>
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <!-- TODO: procedure link -->
                                                                        <a href="#" target="_blank" class="button expand l10n">Select procedure</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </section>
            <section id="consultation-banner">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
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
                                          if ($lang == 'sv') {
                                                $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
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
                                                $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
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
                                                $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                                          } else {
                                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                          }
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
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                    }
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/rosacea-before.webp';
                                    $after = 'images/results/rosacea-after.webp';
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                    }
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                    ?>
                              </div>
                              <div class="column l10n">
                                    <?php
                                    $before = 'images/results/comedones-before.webp';
                                    $after = 'images/results/comedones-after.webp';
                                    if ($lang == 'sv') {
                                          $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                                    } else {
                                          $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
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
      <script>
            showProblems('ALL')
      </script>
</body>

</html>