<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('widgets/problem-trivia-card/problem-trivia.php');
include_once('widgets/treatment-step-card/treatment-step.php');
include_once('widgets/symptom-card/symptom.php');
include_once('widgets/problem-article/problem-article.php');
include_once('widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$floating_image = 'images/problems/carousel/large/acne-scars.jpg';
$image_small = 'images/problems/medium/acne-scars.jpg';
$image_large = 'images/problems/large/acne-scars.jpg';

$title = 'Acne scars';
$description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
$akas = ['post-inflammatory-hyperpigmentation' => 'Post-inflammatory hyperpigmentation', 'athropic-scars' => 'Atrophic scars'];
$booking_url = 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922';
$nav_buttons = array(
      'about' => 'Overview',
      'approach' => 'Treatment approach',
      'types' => 'Types',
      'symptoms' => 'Symptoms',
      'define' => 'Define problem',
      'treatments' => 'Treatment solutions',
      'articles' => 'Risk factors',
      'articles' => 'When to visit a doctor',
      'results' => 'Cases',
      'reviews' => 'Reviews',
      'faq' => 'FAQ',
      'skin-guide' => 'Skin guide',
      'specialists' => 'Specialists',
      'related-problems' => 'Related problems'
);
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
$type_categories = array(
      new BasedTypeCategory('category-age', 'Based on age', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', array(
            new BasedType('adult-acne', 'https://via.placeholder.com/102x102.jpg', 'Adult acne', 'Also called scars stains', '', ''),
            new BasedType('teen-acne', 'https://via.placeholder.com/102x102.jpg', 'Teen acne', 'Also called scars stains', '', ''),
            new BasedType('kids-acne', 'https://via.placeholder.com/102x102.jpg', 'Kids acne', 'Also called scars stains', '', ''),
      )),
      new BasedTypeCategory(
            'category-reason',
            'Based on reason',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                  new BasedType('mallorca-acne', 'https://via.placeholder.com/102x102.jpg', 'Mallorca acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('hormonal-acne', 'https://via.placeholder.com/102x102.jpg', 'Hormonal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('cosmetic-acne', 'https://via.placeholder.com/102x102.jpg', 'Cosmetic acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('acne-exoriee', 'https://via.placeholder.com/102x102.jpg', 'Acne exoriee', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('acne-mechanics', 'https://via.placeholder.com/102x102.jpg', 'Acne mechanics', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('acne-medicamentosa', 'https://via.placeholder.com/102x102.jpg', 'Acne medicamentosa', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('fungal-acne', 'https://via.placeholder.com/102x102.jpg', 'Fungal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
            )
      ),
      new BasedTypeCategory(
            'category-area',
            'Based on area',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                  new BasedType('acne-on-face', 'https://via.placeholder.com/102x102.jpg', 'Acne on face', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
                  new BasedType('acne-on-body', 'https://via.placeholder.com/102x102.jpg', 'Acne on body', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
            )
      )
);
$symptoms = array(
      new Symptom('post-inflammatory-hyperpigmentaion', 'Post inflammatory hyperpigmentation', 'scars stains', 'images/symptoms/small/post-inflammatory-hyperpigmentation.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      new Symptom('atrophic-icepick-scars', 'Atrophic icepick scars', 'scars stains', 'images/symptoms/small/atrophic-icepick-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      new Symptom('atrophic-boxcar-scars', 'Atrophic boxcar scars', 'scars stains', 'images/symptoms/small/atrophic-boxcar-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      new Symptom('atrophic-rolling-scars', 'Atrophic rolling scars', 'scars stains', 'images/symptoms/small/atrophic-rolling-scars.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
      new Symptom('hypertrophic-keloid', 'Hypertrophic keloid', 'scars stains', 'images/symptoms/small/hypertrophic-keloid.jpg', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'),
);
$service = new Service('acne-scars-consultation', 'Consultation', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ', 'images/service-categories/small/consultation.jpg', 'images/service-categories/large/consultation.jpg', 'https://dahlskincare.com/skin-consultation', null);
$services = array(
      new Service('acne-scars-microneedling', 'Microneedling for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/microneedling.jpg', 'images/service-categories/large/microneedling.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
      new Service('acne-scars-laser', 'Laser for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/laser-problem-skin.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
      new Service('acne-scars-chemical-peeling', 'Chemical peeling for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/chemical-peeling.jpg', 'images/service-categories/large/chemical-peeling.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
);
$articles = array(
      new ProblemArticle('pigmentation-causes-and-risk-factors', 'Acne scars causes and risks factors', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
      new ProblemArticle('when-to-see-your-pigmentation-specialist', 'When to see your acne scars specialist?', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
);

$faq_categories = array(
      '' => array(
            new Question('How many treatments are needed?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('Can my acne come back?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('How do I get rid of my acne fast?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('Do I have acne even if I only have one pimple?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
      )
);

$skin_guide_articles = array(
      new SkinGuideArticle('How hormones affect?', 'Problem skin', 'skin-guide/hormones-effect', 'images/skin-guide/small/hormones.jpg', 'images/skin-guide/large/hormones.jpg'),
      new SkinGuideArticle('Can makeup harm your skin?', 'Problem skin', 'skin-guide/can-makeup-harm', 'images/skin-guide/small/makeup.jpg', 'images/skin-guide/large/makeup.jpg'),
      new SkinGuideArticle('How to build a skin care routine', 'Problem skin', 'skin-guide/routine-how-to', 'images/skin-guide/small/routine.jpg', 'images/skin-guide/large/routine.jpg'),
      new SkinGuideArticle('How to build a skin care routine', 'Problem skin', 'skin-guide/routine-how-to', 'images/skin-guide/small/routine.jpg', 'images/skin-guide/large/routine.jpg'),
      new SkinGuideArticle('How to build a skin care routine', 'Problem skin', 'skin-guide/routine-how-to', 'images/skin-guide/small/routine.jpg', 'images/skin-guide/large/routine.jpg'),
      new SkinGuideArticle('How to build a skin care routine', 'Problem skin', 'skin-guide/routine-how-to', 'images/skin-guide/small/routine.jpg', 'images/skin-guide/large/routine.jpg')
);
$specialists = array(
      new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
      new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-2.jpg'),
      new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-3.jpg'),
      new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
      new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-2.jpg')
);
$related_problems = array(
      new RelatedProblem('acne', 'Acne', 'scars stains', 'https://via.placeholder.com/102x102.webp'),
      new RelatedProblem('acne', 'Acne', 'scars stains', 'https://via.placeholder.com/102x102.webp'),
      new RelatedProblem('acne', 'Acne', 'scars stains', 'https://via.placeholder.com/102x102.webp'),
);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">
            Acnespecialisten |
            <?php echo $title ?>
      </title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">

      <link rel="stylesheet" href="problems/problem.css">
      <script src="problems/widgets/problem-trivia-card/problem-trivia-card.js"></script>

</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
            <div class="container">
                  <div id="floating-picture" style="background-image: url('<?php echo $floating_image ?>')">
                        <div id="overlay">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                              <div>
                                    <h2 class="h600">
                                          <?php echo $title ?>
                                    </h2>
                                    <div class="mt-m aka">
                                          <span class="p200 l10n">Also known as</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <!-- TODO (Patrick) create page glossary -->
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="glossary?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="glossary?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                          <div class="mt-xl columns is-2 is-variable">
                                                <div class="column">
                                                      <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button white expand l10n">Get a free consultation</a>
                                                </div>
                                                <div class="column">
                                                      <a href="<?php echo $booking_url ?>" target="_blank" class="button white expand l10n">Book a treatment</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <main>
            <section id="header">
                  <div id="green-header-small" class="is-hidden-desktop">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                              <h1 class="mt-xs h600">
                                    <?php echo $title ?>
                              </h1>
                              <h3 class="mt-xs p100 l10n">Also known as</h3>
                              <?php foreach ($akas as $key => $aka) { ?>
                                    <div>
                                          <a href="glossary?keyword=<?php echo $key ?>" class="mt-xs button b50 bright">
                                                <?php echo $aka ?>
                                          </a>
                                    </div>
                              <?php } ?>
                              <hr class="mt-xl" />
                              <p class="mt-m p200">
                                    <?php echo $description ?>
                              </p>
                              <div class="mt-xl columns is-mobile">
                                    <div class="column is-half">
                                          <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                                    </div>
                                    <div class="column is-half">
                                          <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div id="green-header-large" class="is-hidden-touch">
                        <div class="container">
                              <div class="columns">
                                    <div class="column is-half">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                    </div>
                                    <div class="column is-half flex-row justify-end">
                                          <div class="mt-xl">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                              </div>
                              <div id="green-header-large-text" class="mt-xxs">
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
                                                <!-- TODO (Patrick) create page glossary -->
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="glossary?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="glossary?keyword=' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200">
                                          <?php echo $description ?>
                                    </p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button b200 white l10n">Get a free consultation</a>
                                          <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white l10n">Book a treatment</a>
                                    </div>


                              </div>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <div id="content">
                        <section id="badges" class="is-hidden-desktop mt-s mb-s">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </section>
                        <section id="image" class="is-hidden-desktop">
                              <picture>
                                    <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                                    <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                                    <img src="<?php echo $image_large ?>" alt="<?php echo $title ?>" width="358" height="274" />
                              </picture>
                        </section>
                        <section id="nav-buttons">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
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
                                    include('widgets/problem-trivia-card/problem-trivia-card.php');
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
                                          include('widgets/treatment-step-card/treatment-step-card.php');
                                          echo '</div>';
                                    } ?>
                              </div>
                              <hr class="mt-xl3 is-hidden-mobile">
                              <a href="treatments/acne-scars" class="mt-xl button b200 outline expand auto-width l10n">
                                    Read more about treatment
                              </a>
                        </section>
                        <?php if (sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2>
                                          <span class="h500">
                                                <?php echo $title ?>
                                          </span>
                                          <span class="h500 l10n">types</span>
                                    </h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href=" javascript:;" onclick="scrollToElement('#<?php echo $type_category->id ?>')" class="button b50 grey">
                                                            <?php echo $type_category->title ?>
                                                      </a>
                                                <?php } ?>
                                          </div>
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category" id="<?php echo $type_category->id ?>">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="type-category-cards">
                                                            <?php foreach ($type_category->types as $type) {
                                                                  include('widgets/type-card/type-card.php');
                                                            } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <div class="is-hidden-mobile">
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category-large" id="<?php echo $type_category->id ?>">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="columns is-3 is-variable is-multiline type-category-large-cards">
                                                            <?php foreach ($type_category->types as $type) { ?>
                                                                  <div class="column is-one-third">
                                                                        <?php include('widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <a href="<?php echo $_SERVER['REQUEST_URI'] . '/types' ?>" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Read more about types</a>
                                    <a href="<?php echo $_SERVER['REQUEST_URI'] . '/types' ?>" class="mt-xl button b200 outline l10n is-hidden-mobile">Read more about types</a>
                              </section>
                        <?php } ?>
                        <?php if (sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2>
                                          <span class="h500">
                                                <?php echo $title ?>
                                          </span>
                                          <span class="h500 l10n">symptoms</span>
                                    </h2>
                                    <div class="mt-m is-hidden-tablet" id="symptom-buttons">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <a href="javascript:;" onclick="scrollToElement('#<?php echo $symptom->id ?>')" class="button b50 grey">
                                                      <?php echo $symptom->name ?>
                                                </a>
                                          <?php } ?>
                                    </div>
                                    <div class="columns is-multiline is-variable is-3" id="symptom-cards">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <div class="column is-half" id="<?php echo $symptom->id ?>">
                                                      <?php include('widgets/symptom-card/symptom-card.php'); ?>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
                        <section id="define">
                              <h2>
                                    <span class="h500 l10n">Define</span>&nbsp;
                                    <span class="h500 lowercase">
                                          <?php echo $title ?>
                                    </span>
                              </h2>
                              <hr class="is-hidden-mobile">
                              <?php include('widgets/service-card/service-card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2>
                                    <span class="h500">
                                          <?php echo $title ?>
                                    </span>
                                    <span class="h500 l10n">treatment solution</span>
                              </h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $service) { ?>
                                    <?php include('widgets/service-card/service-card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include('widgets/problem-article/problem-article-widget.php'); ?>
                              <?php } ?>
                        </section>
                        <section id="results">
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
                              <div class="carousel" id="results-carousel">
                                    <div class="slide l10n">
                                          <?php
                                          $before = 'images/results/acne-before.webp';
                                          $after = 'images/results/acne-after.webp';
                                          $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                                    <div class="slide l10n">
                                          <?php
                                          $before = 'images/results/rosacea-before.webp';
                                          $after = 'images/results/rosacea-after.webp';
                                          $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                                    <div class="slide l10n">
                                          <?php
                                          $before = 'images/results/comedones-before.webp';
                                          $after = 'images/results/comedones-after.webp';
                                          $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                          ?>
                                    </div>
                              </div>
                              <a class="button b200 outline l10n" href="results">View all treatment results</a>
                        </section>
                        <section id="reviews">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Reviews</h2>
                                    <div class="flex-row is-hidden-mobile">
                                          <div class="step-buttons">
                                                <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel', -1)">
                                                      <?php icon('arrow-left') ?>
                                                </button>
                                                <button class="round-large grey" onclick="Carousel.next('#reviews-carousel', 1)">
                                                      <?php icon('arrow-right') ?>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="reviews">View all reviews</a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Questions & answers</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="faq">View all questions</a>
                        </section>
                        <section id="skin-guide">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Skin guide</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide">View all articles</a>
                        </section>
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Our specialists</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="scrollSpecialists(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                              ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="specialists">View all specialists</a>
                        </section>
                        <section id="related-problems">
                              <h2 class="big l10n">Related problems</h2>
                              <dig class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </dig>
                        </section>
                  </div>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Brands we use</h2>
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="brands">View all brands</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>