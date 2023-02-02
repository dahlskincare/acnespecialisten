<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('widgets/problem-trivia.php');
include_once('widgets/treatment-step.php');
include_once('widgets/symptom.php');
include_once('widgets/treatment-card/treatment.php');

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
      $symptoms = array(
            new Symptom('post-inflammatory-hyperpigmentaion', 'Post inflammatory hyperpigmentation', 'scars stains', 'images/symptoms/small/post-inflammatory-hyperpigmentation.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-icepick-scars', 'Atrophic icepick scars', 'scars stains', 'images/symptoms/small/atrophic-icepick-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-boxcar-scars', 'Atrophic boxcar scars', 'scars stains', 'images/symptoms/small/atrophic-boxcar-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-rolling-scars', 'Atrophic rolling scars', 'scars stains', 'images/symptoms/small/atrophic-rolling-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('hypertrophic-keloid', 'Hypertrophic keloid', 'scars stains', 'images/symptoms/small/hypertrophic-keloid.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      );
      $treatment = new Treatment('consultation', 'Consultation', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/consultation.jpg', 'images/service-categories/large/consultation.jpg', 'https://dahlskincare.com/skin-consultation', null);
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
      $symptoms = array(
            new Symptom('post-inflammatory-hyperpigmentaion', 'Post inflammatory hyperpigmentation', 'scars stains', 'images/symptoms/small/post-inflammatory-hyperpigmentation.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-icepick-scars', 'Atrophic icepick scars', 'scars stains', 'images/symptoms/small/atrophic-icepick-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-boxcar-scars', 'Atrophic boxcar scars', 'scars stains', 'images/symptoms/small/atrophic-boxcar-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('atrophic-rolling-scars', 'Atrophic rolling scars', 'scars stains', 'images/symptoms/small/atrophic-rolling-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
            new Symptom('hypertrophic-keloid', 'Hypertrophic keloid', 'scars stains', 'images/symptoms/small/hypertrophic-keloid.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      );
      $treatment = new Treatment('consultation', 'Consultation', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/consultation.jpg', 'images/service-categories/large/consultation.jpg', 'https://dahlskincare.com/skin-consultation', null);
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
                        <section id="image"
                                 class="mt-xl is-hidden-desktop">
                              <picture class="is-hidden-tablet">
                                    <source media="(max-width: 449px)"
                                            srcset="images/problems/medium/<?php echo $image ?>">
                                    <source media="(min-width: 450px)"
                                            srcset="images/problems/large/<?php echo $image ?>">
                                    <img src="images/problems/<?php echo $image ?>"
                                         alt="<?php echo $title ?>"
                                         width="358"
                                         height="274" />
                              </picture>
                        </section>
                        <section id="nav-buttons">
                              <a href="javascript:;"
                                 class="button grey l10n">Overview</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Treatment approach</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Types & symptoms</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Define problem</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Treatment solutions</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Risk factors</a>
                              <a href="javascript:;"
                                 class="button grey l10n">When to visit a doctor</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Cases</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Reviews</a>
                              <a href="javascript:;"
                                 class="button grey l10n">FAQ</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Skin guide</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Specialists</a>
                              <a href="javascript:;"
                                 class="button grey l10n">Related problems</a>
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
                                    <span class="h500">
                                          <?php echo $title ?>
                                    </span>
                                    <span class="h500 l10n">types & symptoms</span>
                              </h2>
                              <div class="mt-m is-hidden-tablet"
                                   id="symptom-buttons">
                                    <?php foreach ($symptoms as $symptom) { ?>
                                          <a href="javascript:;"
                                             onclick="scrollToElement('#<?php echo $symptom->id ?>')"
                                             class="button grey">
                                                <?php echo $symptom->name ?>
                                          </a>
                                    <?php } ?>
                              </div>
                              <div class="columns is-multiline is-variable is-3"
                                   id="symptom-cards">
                                    <?php foreach ($symptoms as $symptom) { ?>
                                          <div class="column is-half"
                                               id="<?php echo $symptom->id ?>">
                                                <?php include('widgets/symptom-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </div>
                        </section>
                        <section id="define">
                              <h2>
                                    <span class="h500 l10n">Define</span>
                                    <span class="h500 lowercase">
                                          <?php echo $title ?>
                                    </span>
                              </h2>
                              <?php include('widgets/treatment-card/treatment-card.php') ?>

                        </section>
                  </div>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problems/problems.js"></script>
</body>

</html>