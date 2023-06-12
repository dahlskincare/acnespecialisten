<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Det självklara valet för acne och problemhy</title>
      <meta name="description" content="Acnespecialisten is the best etc..." class="l10n">
      <meta name="title" content="Acnespecialisten" class="l10n">
      <meta name="keywords" content="Acne, specialisten" class="l10n">
      <meta property="og:title" content="Acnespecialisten" />
      <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="og:image" content="images/about-desktop.jpg" />
      <meta property="twitter:title" content="Acnespecialisten" />
      <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="twitter:image" content="images/about-desktop.jpg" />
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
                              <h1 class="h700 l10n">Hudspecialisterna</h1>
                        </div>
                  </div>
                  <a href="hudkonsultation">
                        <div class="container">
                              <div class="banner-bar elevation-medium is-hidden-desktop" id="banner-bar-small">
                                    <button class="white">
                                          <span class="l10n">Gratis Hudkonsultation</span>
                                    </button>
                                    <div id="banner-bar-cols">
                                          <div>
                                                <span class="h500">4,8</span>
                                                <?php icon('trustpilot') ?>
                                                <div class="p200 l10n">På Trustpilot</div>
                                          </div>
                                          <div>
                                                <span class="h500">30+</span>
                                                <div class="p200 l10n">år</div>
                                          </div>
                                          <div>
                                                <span class="h500">200k+</span>
                                                <div class="p200 l10n">Problemfria</div>
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
                                                      <div class="p200 l10n">På Trustpilot</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">30+</span>
                                                <div>
                                                      <div class="h400 l10n">år</div>
                                                      <div class="p200 l10n">i branchen</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">200k+</span>
                                                <div>
                                                      <div class="h400 l10n">Personer</div>
                                                      <div class="p200 l10n">som blivit problemfria</div>
                                                </div>
                                          </div>
                                          <div class="button white l10n">
                                                Gratis Hudkonsultation
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </a>
            </section>
            <div class="container">
                  <section id="problems">
                        <div class="h500 l10n">Problem</div>
                        <?php
                        $accordion = array(
                              new AccordionItem(
                                  label: 'Akne',
                                  image_small: 'images/problems/114x140/akne.webp',
                                  image_large: 'images/problems/424x324/akne.webp',
                                  image_title: 'Information om Akne - Acnespecialisten',
                                  image_alt: 'Bild som illustrerar akne',
                                  url: 'problem/akne',
                                  url_title: 'Läs mer om Akne',
                                  show_on_large: true,
                                  show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Akneärr',
                                    image_small: 'images/problems/114x140/acnearr.webp',
                                    image_large: 'images/problems/424x324/acnearr.webp',
                                    image_title: 'Akneärr',
                                    image_alt: 'Akneärr',
                                    url: 'problem/aknearr',
                                    url_title: 'Akneärr',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Rosacea',
                                    image_small: 'images/problems/114x140/rosacea.webp',
                                    image_large: 'images/problems/424x324/rosacea.webp',
                                    image_title: 'Rosacea',
                                    image_alt: 'Rosacea',
                                    url: 'problem/rosacea',
                                    url_title: 'Rosacea',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Blandhy',
                                    image_small: 'images/problems/114x140/blandhy.webp',
                                    image_large: 'images/problems/424x324/blandhy.webp',
                                    image_title: 'Blandhy',
                                    image_alt: 'Blandhy',
                                    url: 'problem/blandhy',
                                    url_title: 'Blandhy',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Finnar',
                                    image_small: 'images/problems/114x140/finnar.webp',
                                    image_large: 'images/problems/424x324/finnar.webp',
                                    image_title: 'Finnar',
                                    image_alt: 'Finnar',
                                    url: 'problem/finnar',
                                    url_title: 'Finnar',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Pormaskar',
                                    image_small: 'images/problems/114x140/pormaskar.webp',
                                    image_large: 'images/problems/424x324/pormaskar.webp',
                                    image_title: 'Pormaskar',
                                    image_alt: 'Pormaskar',
                                    url: 'problem/pormaskar',
                                    url_title: 'Pormaskar',
                                    show_on_large: false,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Se alla problem',
                                    image_small: 'images/carousel/problems/small/other.jpg',
                                    image_large: 'images/problems/carousel/large/other.jpg',
                                    image_title: 'Se alla problem',
                                    image_alt: 'Se alla problem',
                                    url: 'problem',
                                    url_title: 'Se alla problem',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="problem" class="mt-xl button outline is-hidden-desktop expand l10n">Se alla problem</a>
                  </section>
                  <section id="our-approach">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Metod</div>
                              <a href="metod" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Läs mer om metoden</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $approach_cards = array(
                              new ApproachCard(
                                    number: '01',
                                    title: 'Identifiera',
                                    content: 'Vi erbjuder alltid gratis konsultation, där du får en personlig hudterapeut och en individuell behandlingsplan baserad på din hudanalys. Förebilder tas för att jämföra resultat före och efter behandling.',
                                    button_label: 'Få en gratis konsultation',
                                    button_url: 'hudkonsultation'
                              ),
                              new ApproachCard(
                                    number: '02',
                                    title: 'Behandla',
                                    content: 'Vi erbjuder skräddarsydda behandlingar som åtgärdar hudproblem och förbättrar hudens utseende. Våra hudspecialister säkerställer att behandlingarna är effektiva och säkra för din hudtyp.',
                                    button_label: 'Våra behandlingar',
                                    button_url: 'behandlingar'
                              ),
                              new ApproachCard(
                                    number: '03',
                                    title: 'Förebygga',
                                    content: 'För att förebygga framtida hudproblem och bibehålla resultatet av behandlingarna rekommenderar vi produkter och rutiner som är anpassade efter din hudtyp och specifika problem.',
                                    button_label: 'Se produkter',
                                    button_url: 'produkter'
                              ),
                              new ApproachCard(
                                    number: '04',
                                    title: 'Reparera',
                                    content: 'Efter att det aktiva problemet åtgärdats fokuserar vi på att reparera ärr och bygga upp skyddsbarriären med hjälp av maskinbehandlingar som laser och IPL för att förbättra hudens struktur.',
                                    button_label: 'Se behandlingar',
                                    button_url: 'behandlingar'
                              )
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
                        <a href="our-approach" class="button b200 outline expand mt-xl l10n is-hidden-desktop">
                              Läs mer om metoden
                        </a>
                  </section>
                  <section id="results">
                        <?php
                        $results = array(
                              new ResultCustomer(
                                    id: '1',
                                    image_before_small: 'https://via.placeholder.com/358x358.webm',
                                    image_after_small: 'https://via.placeholder.com/358x358.webm',
                                    image_before_large: 'https://via.placeholder.com/424x424.webm',
                                    image_after_large: 'https://via.placeholder.com/424x424.webm',
                                    age: 18,
                                    gender: 'Female',
                                    problem: 'Acne',
                                    type: 'Severe',
                                    treatment: new ResultTreatment(
                                          duration: '3 months',
                                          procedures: array(
                                                new ResultProcedure(
                                                      image: 'https://via.placeholder.com/102x102.webm',
                                                      name: 'Problem skin facials',
                                                      count: '3 times'
                                                ),
                                          ),
                                          product: new ResultProduct(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Product bundle for light acne',
                                          ),
                                          employee: new ResultEmployee(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Patrick Minogue'
                                          ),
                                    )
                              ),
                              new ResultCustomer(
                                    id: '2',
                                    image_before_small: 'https://via.placeholder.com/358x358.webm',
                                    image_after_small: 'https://via.placeholder.com/358x358.webm',
                                    image_before_large: 'https://via.placeholder.com/424x424.webm',
                                    image_after_large: 'https://via.placeholder.com/424x424.webm',
                                    age: 18,
                                    gender: 'Female',
                                    problem: 'Acne',
                                    type: 'Severe',
                                    treatment: new ResultTreatment(
                                          duration: '3 months',
                                          procedures: array(
                                                new ResultProcedure(
                                                      image: 'https://via.placeholder.com/102x102.webm',
                                                      name: 'Problem skin facials',
                                                      count: '3 times'
                                                ),
                                          ),
                                          product: new ResultProduct(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Product bundle for light acne',
                                          ),
                                          employee: new ResultEmployee(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Patrick Minogue'
                                          ),
                                    )
                              ),
                              new ResultCustomer(
                                    id: '3',
                                    image_before_small: 'https://via.placeholder.com/358x358.webm',
                                    image_after_small: 'https://via.placeholder.com/358x358.webm',
                                    image_before_large: 'https://via.placeholder.com/424x424.webm',
                                    image_after_large: 'https://via.placeholder.com/424x424.webm',
                                    age: 18,
                                    gender: 'Female',
                                    problem: 'Acne',
                                    type: 'Severe',
                                    treatment: new ResultTreatment(
                                          duration: '3 months',
                                          procedures: array(
                                                new ResultProcedure(
                                                      image: 'https://via.placeholder.com/102x102.webm',
                                                      name: 'Problem skin facials',
                                                      count: '3 times'
                                                ),
                                          ),
                                          product: new ResultProduct(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Product bundle for light acne',
                                          ),
                                          employee: new ResultEmployee(
                                                image: 'https://via.placeholder.com/102x102.webm',
                                                name: 'Patrick Minogue'
                                          ),
                                    )
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php')
                        ?>
                  </section>
                  <section id="reviews">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Omdömen</div>
                              <div class="flex-row is-hidden-mobile">
                                    <div class="step-buttons">
                                          <button class="round-large grey" onclick="Reviews.scroll(-1)"><?php icon('arrow-left') ?></button>
                                          <button class="round-large grey" onclick="Reviews.scroll(1)"><?php icon('arrow-right') ?></button>
                                    </div>
                                    <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                                          <span class="l10n">Läs fler omdömen</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                        </div>
                        <?php 
                        $reviews = array(
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Allt gick jätte bra!',
                                    text: "Allt gick jätte bra, personal var snäll och trevlig med min dotter. Min dotter var orolig för behandling hur ska det vara därför har det varit så lång tid innan vi kommit tillbaka och börjat med behandling. Det var inte lätt för henne men hon är jätte nöjd och glad när hon såg bra resultat /ändring på hennes ansikte. Tack så jätte mycket!!",
                                    signature: 'Emily'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Google',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Man behöver inte klä av sig',
                                    text: "Man behöver inte klä av sig för behandling. Behandlaren känns inte stressad, sitter kvar utan att springa iväg för att uträtta annat! Frågar inte ut en. Försöker inte pracka på en produkter. Är trevlig och hjälpsam",
                                    signature: 'Emily'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Otroligt nöjd',
                                    text: "Efter bara tre månader hos bästa Emma har min hud blivit så mycket bättre! Efter en graviditet och en kombination av hormonell och bakteriell acne så har jag äntligen börjar komma tillbaks till min gamla hy. Är verkligen så himla nöjd. Har gjort ansiktsbehandling mot acne samt kört acnespecialistens produkter och kan bara säga gott om dem!",
                                    signature: 'Emily'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Google',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Nöjd',
                                    text: "Ett första besök som absolut kommer leda till ett till. Bra och tydlig information om vad som skulle vara bäst för min hy.",
                                    signature: 'Emily'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Kunniga och bra!',
                                    text: "Mina tonårsdöttrar har båda gått till acnespecialisten under flera år med både mindre och större problemområden. Vi har alltid fått professionell och kunnig behandling, bra produkter och bra råd, som också hjälper fint!",
                                    signature: 'Emily'
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
                  </section>
                  <section id="services">
                        <div class="h500 l10n">Behandlingar</div>
                        <?php
                        $accordion = array(
                              new AccordionItem(
                                    label: 'Ansiktsbehandlingar',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/facials.jpg',
                                    image_alt: 'Facials',
                                    image_title: 'Facials',
                                    url: 'behandlingar/facials',
                                    url_title: 'Facials',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'IPL',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/ipl.jpg',
                                    image_title: 'IPL',
                                    image_alt: 'IPL',
                                    url: 'behandlingar/ipl',
                                    url_title: 'IPL',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Laser',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/laser-problem-skin.jpg',
                                    image_title: 'Laser',
                                    image_alt: 'Laser',
                                    url: 'behandlingar/laser',
                                    url_title: 'Laser',
                                    show_on_large: true,
                                    show_on_small: true,
                              ),
                              new AccordionItem(
                                    label: 'Portömning',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/dermabration.jpg',
                                    image_title: 'Portömning',
                                    image_alt: 'Portömning',
                                    url: 'behandlingar/dermabration',
                                    url_title: 'Portömning',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Microneedling',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/microneedling.jpg',
                                    image_title: 'Microneedling',
                                    image_alt: 'Microneedling',
                                    url: 'behandlingar/microneedling',
                                    url_title: 'Microneedling',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Kemisk Peeling ',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/injections.jpg',
                                    image_title: 'Kemisk Peeling',
                                    image_alt: 'Kemisk Peeling',
                                    url: 'behandlingar/injection',
                                    url_title: 'Kemisk Peeling',
                                    show_on_large: false,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Se alla behandlingar',
                                    image_small: 'https://via.placeholder.com/114x140.jpg',
                                    image_large: 'images/service-categories/large/luxury.jpg',
                                    image_title: 'Se alla behandlingar',
                                    image_alt: 'Se alla behandlingar',
                                    url: 'behandlingar',
                                    url_title: 'Se alla behandlingar',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );

                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="services" class="mt-xl button b200 outline is-hidden-desktop expand">Se alla behandlingar</a>
                  </section>
                  <section id="faq">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Frågor & Svar</div>
                              <a href="faq" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se fler frågor & svar</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php $faq_categories = array(
                              'Behandlingar' => array(
                                    new Question(
                                          title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för olika hudproblem?',
                                          text: 'Acnespecialisten erbjuder en rad olika behandlingar för hudproblem, inklusive acnebehandling, rosaceabehandling och portömning.'
                                    ),
                                    new Question(
                                          title: 'Hur lång tid tar en behandling hos Acnespecialisten?',
                                          text: 'En behandling hos Acnespecialisten tar vanligtvis cirka 60 - 90 minuter.'
                                    ),
                                    new Question(
                                          title: 'Hur många behandlingar behövs för att se resultat?',
                                          text: 'Antalet behandlingar som behövs för att se resultat varierar beroende på ditt specifika hudproblem och din hudtyp. Genomsnittligt antal behandlingar är mellan 2-4 stycken.'
                                    ),
                                    new Question(
                                          title: 'Är behandlingarna smärtsamma?',
                                          text: 'Behandlingarna hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar inflammerade områden och utför extraktioner kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
                                    ),
                                    new Question(
                                          title: 'Kan alla hudtyper behandlas hos Acnespecialisten?',
                                          text: 'Ja, Acnespecialisten erbjuder behandlingar som passar alla hudtyper.'
                                    ),
                              ),
                              'Konsultationer' => array(
                                    new Question(
                                          title: 'Hur bokar jag en konsultation hos Acnespecialisten?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Vad kan jag förvänta mig under en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Är konsultationen gratis?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Hur lång tid tar en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Kan jag boka en konsultation online?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                              ),
                              'Produkter' => array(
                                    new Question(
                                          title: 'Hur bokar jag en konsultation hos Acnespecialisten?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Vad kan jag förvänta mig under en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Är konsultationen gratis?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Hur lång tid tar en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Kan jag boka en konsultation online?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                              ),
                              'Skötselråd och rutiner' => array(
                                    new Question(
                                          title: 'Hur bokar jag en konsultation hos Acnespecialisten?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Vad kan jag förvänta mig under en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Är konsultationen gratis?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Hur lång tid tar en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Kan jag boka en konsultation online?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                              ),
                              'Priser och betalning' => array(
                                    new Question(
                                          title: 'Hur bokar jag en konsultation hos Acnespecialisten?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Vad kan jag förvänta mig under en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Är konsultationen gratis?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Hur lång tid tar en konsultation?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                                    new Question(
                                          title: 'Kan jag boka en konsultation online?',
                                          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                                    ),
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq">Se fler frågor & svar</a>
                  </section>
                  <section id="skin-guide">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Hudguide</div>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se fler guider</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $skin_guide_articles = array(
                              new SkinGuideArticle(
                                    id: 'how-hormones-effect',
                                    title: 'How hormones effect?',
                                    subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
                                    problem: 'Acne',
                                    description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
                                    image_small: 'https://via.placeholder.com/426x324.webp',
                                    image_large: 'https://via.placeholder.com/872x456.jpg',
                                    category_id: 'category-here',
                                    subcategory_id: 'subcategory-here'
                              ),
                              new SkinGuideArticle(
                                    id: 'how-hormones-effect',
                                    title: 'How hormones effect?',
                                    subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
                                    problem: 'Acne',
                                    description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
                                    image_small: 'https://via.placeholder.com/426x324.webp',
                                    image_large: 'https://via.placeholder.com/872x456.jpg',
                                    category_id: 'category-here',
                                    subcategory_id: 'subcategory-here'
                              ),
                              new SkinGuideArticle(
                                    id: 'how-hormones-effect',
                                    title: 'How hormones effect?',
                                    subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
                                    problem: 'Acne',
                                    description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
                                    image_small: 'https://via.placeholder.com/426x324.webp',
                                    image_large: 'https://via.placeholder.com/872x456.jpg',
                                    category_id: 'category-here',
                                    subcategory_id: 'subcategory-here'
                              ),
                              new SkinGuideArticle(
                                    id: 'how-hormones-effect',
                                    title: 'How hormones effect?',
                                    subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
                                    problem: 'Acne',
                                    description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
                                    image_small: 'https://via.placeholder.com/426x324.webp',
                                    image_large: 'https://via.placeholder.com/872x456.jpg',
                                    category_id: 'category-here',
                                    subcategory_id: 'subcategory-here'
                              )
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php');
                        ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">Se fler guider</a>
                  </section>
                  <section id="about-us">
                        <div id="about-text-wrapper">
                              <div id="about-text">
                                    <div class="h500 l10n">Kort om oss</div>
                                    <div class="h200 mt-m l10n">
                                          Acnespecialisten är en del av Sveriges Skönhetscenter som har valt att bryta sig loss och fokusera helt på acne och problemhy. Genom att specialisera oss inom detta område kan vi erbjuda expertis, behandlingar och produkter anpassade specifikt för att hantera och förbättra hudens hälsa hos dem som lider av acne och andra hudproblem.
                                    </div>
                                    <picture class="is-hidden-tablet">
                                          <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                          <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                          <img src="images/about-mobile.jpg" alt="About us" title="About us" width="364" height="364" />
                                    </picture>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">30 års erfarenhet</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Sedan 1994 har vi hjälpt över 100 000 kunder med problemhy och hudvård, ständigt utvecklande vår verksamhet.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">Unik helhetslösning</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Vi erbjuder unika helhetslösningar för att identifiera, behandla och kontrollera problemhy med anpassade behandlingar.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                    </div>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">Diplomerade hudspecialister</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Vår expertis och passion säkerställer att du får den bästa möjliga hudvården, anpassad efter dina behov.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('star') ?>
                                                      <div class="h200 l10n">3 Kliniker</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Tre kliniker i Stockholm – Östermalm, Södermalm, Sundbyberg – för bekväm, professionell hudvård i huvudstaden.
                                                </p>
                                          </div>
                                    </div>
                                    <a href="om-oss" class="button b200 outline expand l10n">Läs mer om oss</a>
                              </div>
                        </div>
                        <div id="about-image-desktop">
                              <picture>
                                    <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                    <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                    <img src="images/about-desktop.jpg" alt="About us" title="About us" width="632" height="632" />
                              </picture>
                        </div>
                  </section>
                  <section id="specialists">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Våra specialister</div>
                              <a href="specialister" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla specialister</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $specialists = array(
                              new Specialist(
                                    name: 'Cazzandra Lindberg',
                                    title: 'Hudterapeut sedan 2015',
                                    image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                                    image_alt: 'Cazzandra Lindberg',
                                    image_title: 'Cazzandra Lindberg'
                              ),
                              new Specialist(
                                    name: 'Veronika Benedik',
                                    title: 'Hudterapeut sedan 1999',
                                    image: 'images/specialists/large/hudterapeut-veronika.webp',
                                    image_alt: 'Veronika Benedik',
                                    image_title: 'Veronika Benedik'
                              ),
                              new Specialist(
                                    name: 'Amira Maqboul',
                                    title: 'Hudterapeut sedan 2017',
                                    image: 'images/specialists/large/hudterapeut-amira.webp',
                                    image_alt: 'Amira Maqboul',
                                    image_title: 'Amira Maqboul'
                              ),
                              new Specialist(
                                    name: 'Vilma Libom',
                                    title: 'Hudterapeut sedan 2019',
                                    image: 'images/specialists/large/hudterapeut-vilma.webp',
                                    image_alt: 'Vilma Libom',
                                    image_title: 'Vilma Libom'
                              )
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialists">Se alla specialister</a>
                  </section>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Varumärken</div>
                              <a href="varumarken" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="index.js"></script>
</body>

</html>