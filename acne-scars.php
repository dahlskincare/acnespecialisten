<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Acne scars - Treatment, causes, and prevention';
$seo_description = 'Explore everything about acne scars, from their underlying causes to effective treatment methods and preventive measures. Book a free consultation!';
$seo_keywords = 'acne scars';
$seo_image = 'bilder/hudproblem/424x456/acnearr.webp';

$path_segments = array(
      new PathSegment('Skin problem', '/hudproblem/'),
      new PathSegment('Inflammation acne', '/inflammation-acne.php'),
);

$image_small = 'bilder/hudproblem/358x274/acnearr.webp';
$image_large = 'bilder/hudproblem/424x456/acnearr.webp';
$image_title = 'Effektiv Behandling av Inflammatorisk Akne';
$image_alt = 'Bild som visar inflammatorisk akne';

$green_banner_content = new GreenBannerContent(
      title: 'Acne Scars',
      description: 'Denna engelska sida handlar om akneärr och hur de uppstår. Here we explain what characterizes acne scars, why the problem occurs, and how we can help you with treatment. We also go through how we identify different types of acne scars, the causes behind them, and how we can support you in your treatment process.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Acneärr Gropar (Atrofiska ärr)',
                  url: 'atrofiska-arr.php',
                  title: 'Allt du behöver veta om atrofiska ärr i form av gropar från akne och deras behandling'
            ),
            new Link(
                  label: 'Acneärr Fläckar (Postinflammatorisk hyperpigmentering)',
                  url: 'postinflammatorisk-hyperpigmentering.php',
                  title: 'Utforska orsaker, symptom och behandlingar av post inflammatorisk hyperpigmentering i form av fläckar från akne'
            ),
      ]
);

$floating_box = 'Treat your acne scars effectively.';

$description_title = 'What are acne scars?';
$description_text = '<p class="p200">Acne scars are a result of the skin healing from severe acne, leaving behind marks or indentations. These scars form when the skin’s natural healing process produces too much or too little tissue. Raised scars, such as hypertrophic or keloid scars, occur when the body creates too much tissue. Depressed scars, like ice pick, boxcar, or rolling scars, form when there is a loss of tissue. Inflammation from acne, particularly cystic or nodular acne, can damage the skin’s underlying structure, leading to scarring.</p>
<p class="p200 mt-m">Treatment of acne scars focuses on improving skin texture and appearance. This can include the use of skincare products that promote skin regeneration and procedures like chemical peels, microneedling, and laser therapy. It is also important to prevent further acne outbreaks by maintaining a proper skincare routine. Managing acne scars requires a tailored treatment plan that addresses the specific type of scars and individual skin needs. With the right skincare and treatments, we can help you reduce the appearance of acne scars and improve your skin\'s overall texture and tone.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identify',
            content: 'We analyze the unique characteristics of your scars, take before pictures of the skin, and recommend a treatment plan for your acne scars.',
            url_label: 'Book a free consultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            url_title: 'Book your free skin consultation for acne scars today'
      ),
      new TreatmentStep(
            title: 'Treat',
            content: 'We tailor our treatments for acne scars according to your skin type and unique needs. We offer a wide range of treatments designed to improve skin texture and reduce the appearance of scars.',
            url_label: 'See treatments',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
            url_title: 'Explore our treatments for acne scars'
      ),
      new TreatmentStep(
            title: 'Prevent',
            content: 'To prevent future acne outbreaks and minimize new scars, we offer specially developed skincare products and routines.',
            url_label: 'See products',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_title: 'Find the best products to prevent acne and minimize scars'
      ),
      new TreatmentStep(
            title: 'Repair',
            content: 'After treating active acne, we focus on repairing and reducing scarring and improving skin texture, contributing to a smoother and more radiant skin tone.',
            url_label: 'See scar treatments',
            url: 'behandla-acnearr.php',
            url_title: 'Discover our effective treatments for acne scars'
      ),
);

$treatment_link = '<a href="acnebehandling.php" title="Explore effective treatments for acne scars" class="mt-xl button b200 outline expand auto-width">Learn more about our treatments</a>';


$results_title = 'Acne Scars before and after results';
$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Are there different types of acne scars?',
                  text: 'Yes, there are different types of acne scars, each with distinct characteristics. Ice pick scars are deep and narrow, resembling small puncture wounds. Boxcar scars are wider and more rectangular, with well-defined edges, giving the skin a pitted appearance. Rolling scars have a wave-like texture, causing the skin to appear uneven and undulating. Hypertrophic scars are raised above the skin’s surface due to excess tissue formation during the healing process. Keloid scars are similar but tend to grow larger than the original wound and can continue to grow over time. Each type of scar requires specific treatments for optimal improvement.'
            ),
            new Question(
                  title: 'What are the best treatments for acne scars?',
                  text: 'The best treatments for acne scars vary depending on the type and severity of the scars. Chemical peels involve applying a solution to the skin that exfoliates the top layers, promoting the growth of new, smoother skin. Microneedling uses fine needles to create micro-injuries in the skin, stimulating collagen production and improving texture. Laser therapy targets the deeper layers of the skin to reduce scar tissue and promote new skin growth.'
            ),
            new Question(
                  title: 'How long does it take for acne scars to heal?',
                  text: 'The healing time for acne scars can vary widely depending on the type of scar and the treatment used. For example, chemical peels and microneedling typically require multiple sessions over several months to see significant improvement. Laser therapy might show noticeable results after a few sessions, but complete healing and collagen remodeling can take several months. Topical treatments may take longer, with gradual improvements over several months to a year. The severity of the scars also plays a role; deeper scars often require more intensive treatments and longer healing times. Patience and consistency in following the recommended treatment plan are essential for the best results.'
            ),
            new Question(
                  title: 'Is it possible to completely remove acne scars?',
                  text: 'Completely removing acne scars is challenging, but it is possible to significantly reduce their appearance to the point where they are barely noticeable. Various treatments can help improve skin texture and tone. These treatments include laser therapy, which can resurface the skin and stimulate collagen production; microneedling, which encourages the skin to heal itself; and chemical peels, which remove the top layer of skin to reveal fresher, smoother skin underneath. Consistent use of topical treatments containing retinoids or other active ingredients can also aid in the gradual reduction of scars. Combining different treatments often yields the best results, and ongoing skincare maintenance helps sustain the improvements.'
            ),
            new Question(
                  title: 'Should I see an esthetician for my acne scars?',
                  text: 'Seeing an esthetician for your acne scars is highly recommended, especially if the scars are severe. Estheticians are trained professionals who can assess your skin type and the specific characteristics of your scars to develop a personalized treatment plan. They can perform advanced procedures such as chemical peels, microneedling, and laser treatments that are not available for at-home use. Additionally, an esthetician can provide professional-grade skincare products and advice on maintaining your skin’s health. Regular visits to an esthetician can significantly enhance the effectiveness of your scar treatment and improve your overall skin appearance.'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor";

$skin_guide_articles = array(
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
      ),
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',


      ),
      new SkinGuideArticle(
            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            problem: 'Acne',
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
      ),
      new SkinGuideArticle(
            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            problem: 'Acne',
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
      ),
);

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul hudterapeut',
            image_title: 'Amira Maqboul - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);

$brands = array(
      new Brand(
            label: 'DAHL Skincare',
            image: 'bilder/logotyper/dahl-skincare.webp',
            image_alt: 'DAHL Skincare logotyp',
            image_title: 'DAHL Skincare - hudvårdsprodukter',
            url: 'https://dahlskincare.se',
            url_title: 'DAHL Skincare',
      ),
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_title: 'Alma Hybrid - CO2 laser',
            image_alt: 'Alma Hybrid logotyp',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2 laser',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: '/alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: '/dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_title: 'Skin Tech - Professionella kemiska peelingar',
            image_alt: 'Skin Tech logotyp',
            url: '/varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/acne-scars.php" />

      <title><?php echo $seo_title ?></title>
      <meta name="description" content="<?php echo $seo_description ?>">
      <meta name="keywords" content="<?php echo $seo_keywords ?>">

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
      <meta property="og:title" content="<?php echo $seo_title ?>" />
      <meta property="og:description" content="<?php echo $seo_description ?>" />
      <meta property="og:image" content="<?php echo $seo_image ?>" />

      <meta property="twitter:title" content="<?php echo $seo_title ?>" />
      <meta property="twitter:description" content="<?php echo $seo_description ?>" />
      <meta property="twitter:image" content="<?php echo $seo_image ?>" />
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="hudproblem/problem.css">
      <script src="hudproblem/widgets/problem-trivia-card/problem-trivia-card.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/floater.php'); ?>
      <main>
            <section id="header">
                  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php'); ?>
            </section>
            <div class="container">
                  <div id="content">
                        <section id="image" class="is-hidden-desktop">
                              <picture>
                                    <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                                    <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                                    <img src="<?php echo $image_large ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>" width="358" height="274" />
                              </picture>
                        </section>
                        <section id="about">
                              <h2 class="h500"><?php echo $description_title ?></h2>
                              <div class="mt-xl"><?php echo $description_text ?></div>
                        </section>
                        <section id="approach">
                              <h2 class="h500 l10n">Metoden</h2>
                              <hr class="mt-xl mb-xl3 is-hidden-mobile">
                              <div class="columns is-variable is-2">
                                    <?php for ($i = 0; $i < sizeof($treatment_steps); $i++) {
                                          echo '<div class="column">';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/treatment_step_card/treatment_step_card.php');
                                          echo '</div>';
                                    } ?>
                              </div>
                              <hr class="mt-xl3 is-hidden-mobile">
                              <?php echo $treatment_link ?>

                        </section>

                        <section id="results">
                              <?php
                              $results_title = 'Resultat';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
                        </section>
                        <section id="reviews">
                              <h2 class="big l10n">Omdömen</h2>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                        </section>

                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
                        </section>
                        <section id="related-problems">
                              <h2 class="big l10n">Relaterade hudproblem</h2>
                              <dig class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('hudproblem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </dig>
                        </section>
                  </div>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="varumarken" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>