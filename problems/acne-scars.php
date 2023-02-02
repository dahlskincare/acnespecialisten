<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('widgets/problem-trivia.php');
include_once('widgets/treatment-step.php');

// Image filename (must be in folder "images/problems/large/")
$image = 'acne-scars.jpg';

// l10n
if ($lang == 'sv') {
      $title = 'Akneärr';
      $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
      $akas = ['post-inflammatory-hyperpigmentation' => 'Post-inflammatory hyperpigmentation', 'athropic-scars' => 'Atrophic scars'];
      $booking_url = 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922';
      $trivias = array(
            new ProblemTrivia('What', 'is acne scars', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array()),
            new ProblemTrivia('Why', 'do acne scars happen', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
            new ProblemTrivia('Who', 'gets acne scars', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
            new ProblemTrivia('Where', 'acne scars is', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
      );
      $treatment_steps = array(
            new TreatmentStep('Define', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.dahlskincare.com/skin-consultation', 'Get a free consultation'),
            new TreatmentStep('Treat', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922', 'View treatments'),
            new TreatmentStep('Prevent', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.dahlskincare.com', 'View products'),
      );
} else {
      $title = 'Acne scars';
      $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
      $akas = ['post-inflammatory-hyperpigmentation' => 'Post-inflammatory hyperpigmentation', 'athropic-scars' => 'Atrophic scars'];
      $booking_url = 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922';
      $trivias = array(
            new ProblemTrivia('What', 'is acne scars', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array()),
            new ProblemTrivia('Why', 'do acne scars happen', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
            new ProblemTrivia('Who', 'gets acne scars', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
            new ProblemTrivia('Where', 'acne scars is', '<p class="p200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="p200 mt-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="p200">Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders')),
      );
      $treatment_steps = array(
            new TreatmentStep('Define', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.dahlskincare.com/skin-consultation', 'Get a free consultation'),
            new TreatmentStep('Treat', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922', 'View treatments'),
            new TreatmentStep('Prevent', 'Lorem ipsum dolor sit amet, <a href="#" class="b200 underline">consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'https://www.dahlskincare.com', 'View products'),
      );
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">
            Acnespecialisten |
            <?php echo $title ?>
      </title>
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
            href="problems/problems.css">
      <link rel="stylesheet"
            href="problems/widgets/problem-trivia-card.css">
      <link rel="stylesheet"
            href="problems/widgets/treatment-step-card.css">
      <script src="problems/widgets/problem-trivia-card.js"></script>

</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <div class="is-hidden-touch is-hidden-desktop-only"
           id="floater">
            <div class="container">
                  <div id="floating-picture"
                       style="background-image: url('images/problems/carousel/large/<?php echo $image ?>')">
                        <div id="overlay">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                              <div>
                                    <h2 class="h600">
                                          <?php echo $title ?>
                                    </h2>
                                    <p class="mt-m aka">
                                          <span class="p200 l10n">Also known as</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <!-- TODO (Patrick) create page glossary.php -->
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="glossary.php?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="glossary.php?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                    <div class="mt-xl columns is-2 is-variable">
                                          <div class="column">
                                                <a href="https://www.dahlskincare.com/skin-consultation"
                                                   target="_blank"
                                                   class="button white expand l10n">Get a free consultation</a>
                                          </div>
                                          <div class="column">
                                                <a href="<?php echo $booking_url ?>"
                                                   target="_blank"
                                                   class="button white expand l10n">Book a treatment</a>
                                          </div>
                                    </div>
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <main>
            <section id="header">
                  <div id="green-header-small"
                       class="is-hidden-tablet">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                              <h1 class="mt-xs h600">
                                    <?php echo $title ?>
                              </h1>
                              <h3 class="mt-m h200 l10n">Also known as</h3>
                              <?php foreach ($akas as $key => $aka) { ?>
                                    <a href="glossary.php?keyword=<?php echo $key ?>"
                                       class="mt-xs button bright">
                                          <?php echo $aka ?>
                                    </a>
                              <?php } ?>
                              <p class="mt-m">
                                    <?php echo $description ?>
                              </p>
                              <div class="mt-xl columns is-mobile">
                                    <div class="column is-half">
                                          <a href="https://dahlskincare.com/skin-consultation"
                                             target="_blank"
                                             class="button b200 white expand l10n">Free consultation</a>
                                    </div>
                                    <div class="column is-half">
                                          <a href="<?php echo $booking_url ?>"
                                             target="_blank"
                                             class="button b200 white expand l10n">Book a treatment</a>
                                    </div>
                              </div>
                              <div class="mt-xl">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                              </div>
                        </div>
                  </div>
                  <div id="green-header-large"
                       class="is-hidden-mobile">
                        <div class="container">
                              <div class="columns">
                                    <div class="column is-half">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                    </div>
                                    <div class="column is-half flex-row align-end justify-end">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                    </div>
                              </div>
                              <div id="green-header-large-text"
                                   class="mt-xxs">
                                    <h1 class="h600">
                                          <?php echo $title ?>
                                    </h1>
                                    <div class="mt-s">
                                          <span class="h200 l10n">Also known as</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <!-- TODO (Patrick) create page glossary.php -->
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="glossary.php?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="glossary.php?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200">
                                          <?php echo $description ?>
                                    </p>
                                    <div class="mt-xl flex-row"
                                         id="book-buttons">
                                          <a href="https://www.dahlskincare.com/skin-consultation"
                                             target="_blank"
                                             class="button b200 white l10n">Get a free consultation</a>
                                          <a href="<?php echo $booking_url ?>"
                                             target="_blank"
                                             class="button b200 white l10n">Book a treatment</a>
                                    </div>


                              </div>
                        </div>
                  </div>
            </section>

            <div class="container">
                  <div id="content">
                        <section id="nav-buttons">
                              <a class="button grey l10n">Overview</a>
                              <a class="button grey l10n">Treatment approach</a>
                              <a class="button grey l10n">Types & symptoms</a>
                              <a class="button grey l10n">Define problem</a>
                              <a class="button grey l10n">Treatment solutions</a>
                              <a class="button grey l10n">Risk factors</a>
                              <a class="button grey l10n">When to visit a doctor</a>
                              <a class="button grey l10n">Cases</a>
                              <a class="button grey l10n">Reviews</a>
                              <a class="button grey l10n">FAQ</a>
                              <a class="button grey l10n">Skin guide</a>
                              <a class="button grey l10n">Specialists</a>
                              <a class="button grey l10n">Related problems</a>
                        </section>
                        <section id="about">
                              <h2>
                                    <span class="h500 l10n">About</span>
                                    <span class="h500 lowercase">
                                          <?php echo $title ?>
                                    </span>
                              </h2>
                              <?php foreach ($trivias as $trivia) {
                                    echo '<hr>';
                                    include('widgets/problem-trivia-card.php');
                              } ?>
                              <hr>
                        </section>
                        <section id="approach">
                              <h2>
                                    <span class="h500">
                                          <?php echo $title ?>
                                    </span>
                                    <span class="h500 l10n">treatment approach</span>
                              </h2>
                              <hr class="mt-xl mb-xl3 is-hidden-mobile">
                              <div class="columns is-variable is-2">
                                    <?php for ($i = 0; $i < sizeof($treatment_steps); $i++) {
                                          echo '<div class="column">';
                                          include('widgets/treatment-step-card.php');
                                          echo '</div>';
                                    } ?>
                              </div>
                              <hr class="mt-xl3 is-hidden-mobile">
                              <a href="treatments/acne-scars.php"
                                 class="mt-xl button b200 outline expand l10n"
                                 id="approach-link">
                                    Read more about treatment
                              </a>
                        </section>
                        <section id="symptoms">
                              <h2>
                                    <spa class="h500">
                                          <?php echo $title ?>
                                          </span>
                                          <span class="l10n h500">types & symptoms</span>
                              </h2>
                        </section>
                  </div>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problems/problems.js"></script>
</body>

</html>