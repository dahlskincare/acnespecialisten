<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Acne scars</title>
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
            href="problems/acne-scars.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <div id="green-header-small"
                 class="is-hidden-tablet">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="mt-xs h600 l10n">Acne scars</h1>
                        <h3 class="mt-m h200 l10n">Also known as</h3>
                        <a href=""
                           class="mt-xs button bright l10n">Post-inflammatory hyperpigmentation</a>
                        <a href=""
                           class="mt-xs button bright l10n">Atrophic scars</a>
                        <p class="mt-m l10n">
                              Here we explain what identifies acne scars, why the problem occurs and how we can help you
                              treat. Here we explain what identifies acne scars, why the problem occurs and how we can
                              help you treat.
                        </p>
                        <div class="mt-xl columns is-mobile">
                              <div class="column is-half">
                                    <a href="https://dahlskincare.com/skin-consultation"
                                       target="_blank"
                                       class="button b200 white expand l10n">Free consultation</a>
                              </div>
                              <div class="column is-half">
                                    <a href="https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922"
                                       target="_blank"
                                       class="button b200 white expand l10n">Book a treatment</a>
                              </div>
                        </div>
                        <div class="mt-xl">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                  </div>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>