<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

// Image filename (must be in folder "images/problems/large/")
$image = 'acne-scars.jpg';

// l10n
if ($lang == 'sv') {
      $title = 'Akneärr';
      $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
      $akas = ['post-inflammatory-hyperpigmentation' => 'Post-inflammatory hyperpigmentation', 'athropic-scars' => 'Atrophic scars'];
      $booking_url = 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922';
} else {
      $title = 'Acne scars';
      $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
      $akas = ['post-inflammatory-hyperpigmentation' => 'Post-inflammatory hyperpigmentation', 'athropic-scars' => 'Atrophic scars'];
      $booking_url = 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922';
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
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <div class="is-hidden-touch is-hidden-desktop-only"
           id="floater">
            <div class="container">
                  <div id="picture"
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
                                       class="mt-xs button bright"><?php echo $aka ?></a>
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
                  </div>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problems/problems.js"></script>
</body>

</html>