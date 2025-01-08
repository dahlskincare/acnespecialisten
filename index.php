<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <link rel="canonical" href="https://www.acnespecialisten.se" />

      <title class="l10n">Din hudspecialist i Stockholm och Online | AcneSpecialisten</title>

      <meta name="title" content="Din hudspecialist i Stockholm och Online | AcneSpecialisten">
      <meta name="description" content="AcneSpecialisten har över 30 års erfarenhet av alla typer av hudproblem. Boka en gratis konsultation så hjälper våra hudspecialister dig med rätt hudvård." class="l10n">
      <meta name="keywords" content="acnespecialisten, hudspecialist, hudspecialist stockholm" class="l10n">


      <meta property="og:title" content="AcneSpecialisten | Erfarna hudspecialister inom hudproblem i Stockholm" />
      <meta property="og:description" content="Med över 30 års erfarenhet, erbjuder AcneSpecialisten expertis inom behandling av hudproblem i Stockholm. Boka en kostnadsfri hudkonsultation idag och upplev skillnaden med personligt anpassad hudvård." class="l10n" />
      <meta property="og:image" content="bilder/start/banner-desktop.webp" />
      <meta property="twitter:title" content="AcneSpecialisten | Erfarna hudspecialister inom hudproblem i Stockholm" />
      <meta property="twitter:description" content="Med över 30 års erfarenhet, erbjuder AcneSpecialisten expertis inom behandling av hudproblem i Stockholm. Boka en kostnadsfri hudkonsultation idag och upplev skillnaden med personligt anpassad hudvård." class="l10n" />
      <meta property="twitter:image" content="bilder/start/banner-desktop.webp" />

      <link rel="preload" as="image" href="/bilder/start/banner-desktop.webp" media="(min-width: 984px)">
      <link rel="preload" as="image" href="/bilder/start/banner-mobile.webp" media="(max-width: 983px)">
      <link rel="preload" as="video" href="/videos/banner-square.webm" type="video/webm" media="(max-width: 799px)">
      <link rel="preload" as="video" href="/videos/banner.webm" type="video/webm" media="(min-width: 800px)">
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/index.css">
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php');
      include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/organization.php');
      include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/local_business.php');
      ?>

</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-background">
                        <video autoplay muted loop playsinline id="banner-video">
                              <source src="videos/banner.webm" type="video/webm" media="(min-width: 800px)">
                              <source src="videos/banner-square.webm" type="video/webm" media="(max-width: 799px)">
                        </video>
                        <div class="container">
                              <h1 class="h700 l10n">AcneSpecialisten,<br />din hudspecialist i <br />Stockholm och Online</h1>
                        </div>
                  </div>
                  <a href="gratis-hudkonsultation.php" title="Boka Gratis Hudkonsultation">
                        <div class="container">
                              <div class="banner-bar elevation-medium is-hidden-desktop" id="banner-bar-small">
                                    <button class="white">
                                          <span class="l10n">Gratis Hudkonsultation</span>
                                    </button>
                                    <div id="banner-bar-cols">
                                          <div>
                                                <span class="h500">4,8</span>
                                                <?php icon('trustpilot-green') ?>
                                                <div class="p200 l10n">På Trustpilot</div>
                                          </div>
                                          <div>
                                                <span class="h500">30+</span>
                                                <div class="p200 l10n">Års erfarenhet</div>
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
                                                      <div id="trustpilot-stars">
                                                            <?php icon('trustpilot-green') ?>
                                                            <?php icon('trustpilot-green') ?>
                                                            <?php icon('trustpilot-green') ?>
                                                            <?php icon('trustpilot-green') ?>
                                                            <?php icon('trustpilot-green-half') ?>
                                                      </div>
                                                      <div class="p200 l10n">På Trustpilot</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">30+</span>
                                                <div>
                                                      <div class="h400 l10n">Års</div>
                                                      <div class="p200 l10n">erfarenhet</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">200k+</span>
                                                <div>
                                                      <div class="h400 l10n">Personer</div>
                                                      <div class="p200 l10n">fri från hudproblem</div>
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
                        <div class="h500 l10n">Hudproblem</div>
                        <?php
                        $accordion = array(
                              new AccordionItem(
                                    label: 'Akne',
                                    image_small: 'bilder/hudproblem/114x140/akne.webp',
                                    image_large: 'bilder/hudproblem/424x324/akne.webp',
                                    image_title: 'Ansikte med akne',
                                    image_alt: 'Närbild på person som har akne i ansiktet.',
                                    url: 'acne.php',
                                    url_title: 'Läs mer information om akne',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Akneärr',
                                    image_small: 'bilder/hudproblem/114x140/acnearr.webp',
                                    image_large: 'bilder/hudproblem/424x324/acnearr.webp',
                                    image_title: 'Person med akneärr',
                                    image_alt: 'Närbild på person som har akneärr i ansiktet.',
                                    url: 'acnearr.php',
                                    url_title: 'Läs mer information om akneärr',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Rosacea',
                                    image_small: 'bilder/hudproblem/114x140/rosacea.webp',
                                    image_large: 'bilder/hudproblem/424x324/rosacea.webp',
                                    image_title: 'Person med rosacea',
                                    image_alt: 'Närbild på person som har rosacea i ansiktet.',
                                    url: 'rosacea.php',
                                    url_title: 'Läs mer information om rosacea',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Finnar',
                                    image_small: 'bilder/hudproblem/114x140/finnar.webp',
                                    image_large: 'bilder/hudproblem/424x324/finnar.webp',
                                    image_title: 'Person med finnar',
                                    image_alt: 'Närbild på person som har finnar i ansiktet.',
                                    url: 'finnar.php',
                                    url_title: 'Läs mer information om finnar',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Pigmentfläckar',
                                    image_small: 'bilder/hudproblem/114x140/pigmentflackar.webp',
                                    image_large: 'bilder/hudproblem/424x324/pigmentflackar.webp',
                                    image_title: 'Person med pigmentfläckar',
                                    image_alt: 'Närbild på person som har pigmentfläckar i ansiktet.',
                                    url: 'pigmentflackar.php',
                                    url_title: 'Läs mer information om pigmentfläckar',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Ytliga blodkärl',
                                    image_small: 'bilder/hudproblem/114x140/ytliga-blodkarl.webp',
                                    image_large: 'bilder/hudproblem/424x324/ytliga-blodkarl.webp',
                                    image_title: 'Person med allmänna hudproblem',
                                    image_alt: 'Närbild på person som hara allmänna hudproblem i ansiktet.',
                                    url: 'ytliga-blodkarl.php',
                                    url_title: 'Läs mer information om alla typer av hudproblem',
                                    show_on_large: false,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Se alla problem',
                                    image_small: 'bilder/hudproblem/114x140/ytliga-blodkarl.webp',
                                    image_large: 'bilder/hudproblem/424x324/ytliga-blodkarl.webp',
                                    image_title: 'Person med allmänna hudproblem',
                                    image_alt: 'Närbild på person som har allmänna hudproblem i ansiktet.',
                                    url: '/hudproblem/',
                                    url_title: 'Läs mer information om alla typer av hudproblem.',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="/hudproblem/" title="Se alla hudproblem" class="mt-xl button outline is-hidden-desktop expand l10n">Se alla hudproblem</a>
                  </section>
                  <section id="our-approach">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Metoden</div>
                              <a href="metoden.php" title="metoded" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Läs mer om metoden</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $approach_cards = array(
                              new ApproachCard(
                                    number: '01',
                                    title: 'Identifiera',
                                    content: 'Vi erbjuder alltid gratis konsultation där du får en personlig hudspecialist och en individuell behandlingsplan baserad på din hudanalys. Förebilder tas för att jämföra resultat före och efter behandling.',
                                    button_label: 'Boka gratis hudkonsultation',
                                    button_url: 'gratis-hudkonsultation.php',
                                    button_url_title: 'Boka en kostnadsfri hudkonsultation',
                              ),
                              new ApproachCard(
                                    number: '02',
                                    title: 'Behandla',
                                    content: 'Vi erbjuder skräddarsydda behandlingar som åtgärdar hudproblem och förbättrar hudens utseende. Våra hudspecialister säkerställer att behandlingarna är effektiva och säkra för din hudtyp.',
                                    button_label: 'Våra behandlingar',
                                    button_url: '/hudbehandlingar/',
                                    button_url_title: 'Boka en behandling',
                              ),
                              new ApproachCard(
                                    number: '03',
                                    title: 'Förebygga',
                                    content: 'För att förebygga framtida hudproblem och bibehålla resultatet av behandlingarna rekommenderar vi produkter och rutiner som är anpassade efter din hudtyp och specifika problem.',
                                    button_label: 'Se produkter',
                                    button_url: 'https://dahlskincare.se',
                                    button_url_title: 'Besök vår webbshop',
                                    button_url_target: '_blank',
                              ),
                              new ApproachCard(
                                    number: '04',
                                    title: 'Reparera',
                                    content: 'Efter att det aktiva problemet åtgärdats fokuserar vi på att reparera eventuella ärr med hjälp av maskinbehandlingar som microneedling, laser och IPL för att förbättra hudens struktur.',
                                    button_label: 'Våra ärrbehandlingar',
                                    button_url: 'behandla-acnearr.php',
                                    button_url_title: 'Läs mer om ärrbehandlingar',
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
                        <a href="metoden.php" title="Metoded" class="button b200 outline expand mt-xl l10n is-hidden-desktop">Läs mer om vår metod</a>
                  </section>
                  <section id="results">
                        <?php
                        $results = array(
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
                                    image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
                                    image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
                                    image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
                                    image_before_title: 'Person som har akne',
                                    image_before_alt: 'Ansiktet på en person som behandlat svår akne, förebild',
                                    image_after_title: 'Person som har akne',
                                    image_after_alt: 'Ansiktet på en person som behandlat svår akne, efterbild',
                                    treatment: new ResultTreatment(
                                          duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
                                    )
                              ),
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
                                    image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
                                    image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
                                    image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
                                    image_before_title: 'Person som har akne',
                                    image_before_alt: 'Ansiktet på en person som behandlat akne, föreefterbild',
                                    image_after_title: 'Person som har akne',
                                    image_after_alt: 'Ansiktet på en person som behandlat akne, efterbild',
                                    treatment: new ResultTreatment(
                                          duration: '<a href="acne.php" title="Akne">Akne</a>',
                                    )
                              ),
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
                                    image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
                                    image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
                                    image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
                                    image_before_title: 'Person som har rosacea',
                                    image_before_alt: 'Ansiktet på en person som behandlat rosacea, förebild',
                                    image_after_title: 'Person som har rosacea',
                                    image_after_alt: 'Ansiktet på en person som behandlat rosacea, efterbild',
                                    treatment: new ResultTreatment(
                                          duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
                                    )
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php')
                        ?>
                  </section>
                  <section id="reviews">
                        <div class="h500 l10n">Omdömen</div>
                        <?php
                        $reviews = array(
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Hade testat allt innan',
                                    text: "Hade testat allt innan, och var skeptisk till att de kunde hjälpa mig på AcneSpecialisten. Men genom att följa deras råd blev allt så mycket bättre! Kan varmt rekommendera.",
                                    signature: 'Josefin',
                                    link: new Link(label: "", url: "https://www.trustpilot.com/reviews/626930310c4813f76bf61446", title: "Hade testat allt innan"),
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Google',
                                    logo_url: 'images/brands/google-small.svg',
                                    title: 'Super!',
                                    text: "Super! Proffsigt, kunnigt, snabbt, smidigt! Bra och tydlig information, kan bara varmt rekommendera 👌🏼🙌🏼🙏🏼",
                                    signature: 'Veronica'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Bokadirekt',
                                    logo_url: 'images/brands/bokadirekt-small.svg',
                                    title: 'Super fin personal, fint ställe',
                                    text: "Super fin personal, fint ställe. Duktiga på att informera och svara på frågor. Jag har gått där i ca 2-3 år och det är stor skillnad på hyn. Bra produkter!",
                                    signature: 'Felicia'
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                  </section>
                  <section id="services">
                        <div class="h500 l10n">Behandlingar</div>
                        <?php
                        $accordion = array(
                              new AccordionItem(
                                    label: 'Ansiktsbehandling',
                                    image_small: 'bilder/hudbehandlingar/114x140/ansiktsbehandlingar-mot-problemhy.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/ansiktsbehandlingar-mot-problemhy.webp',
                                    image_title: 'Ansiktsbehandling',
                                    image_alt: 'Kvinna som får ansiktsbehandling i ansiktet.',
                                    url: '/problemhy.php',
                                    url_title: 'Läs mer och boka tid för ansiktsbehandling.',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Microneedling',
                                    image_small: 'bilder/hudbehandlingar/114x140/microneedling.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/microneedling.webp',
                                    image_title: 'Ansiktsbehandling med microneedling.',
                                    image_alt: 'Kvinna som får microneedling behandling i ansiktet.',
                                    url: '/microneedling.php',
                                    url_title: 'Läs mer och boka tid för microneedling.',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Laser',
                                    image_small: 'bilder/hudbehandlingar/114x140/laser-mot-problemhy.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/laser-mot-problemhy.webp',
                                    image_title: 'Laserbehandling i ansiktet',
                                    image_alt: 'Närbild på person som får laserbehandling på kinden.',
                                    url: '/hudbehandlingar/laser-mot-hudproblem/',
                                    url_title: 'Läs mer och boka tid för laser.',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Kemisk Peeling',
                                    image_small: 'bilder/hudbehandlingar/114x140/kemisk-peeling.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/kemisk-peeling.webp',
                                    image_title: 'Ansiktsbehandling med kemisk peeling.',
                                    image_alt: 'Man som får kemisk peeling behandling i ansiktet.',
                                    url: '/kemisk-peeling.php',
                                    url_title: 'Läs mer och boka tid för kemisk peeling.',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'IPL',
                                    image_small: 'bilder/hudbehandlingar/114x140/ipl.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/ipl.webp',
                                    image_title: 'IPL-behandling i ansiktet',
                                    image_alt: 'Kvinna som får IPL-behandling i ansiktet.',
                                    url: '/hudbehandlingar/ipl/',
                                    url_title: 'Läs mer och boka tid för IPL.',
                                    show_on_large: true,
                                    show_on_small: true,
                              ),
                              new AccordionItem(
                                    label: 'Dermabrasion',
                                    image_small: 'bilder/hudbehandlingar/114x140/dermabrasion.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/dermabrasion.webp',
                                    image_title: 'Ansiktsbehandling med HydraFacial',
                                    image_alt: 'Kvinna som får HydraFacial behandling i ansiktet.',
                                    url: '/hudbehandlingar/dermabrasion/',
                                    url_title: 'Läs mer och boka tid för dermabrasion.',
                                    show_on_large: false,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Se alla behandlingar',
                                    image_small: 'bilder/hudbehandlingar/114x140/klassiska-ansiktsbehandlingar.webp',
                                    image_large: 'bilder/hudbehandlingar/424x324/klassiska-ansiktsbehandlingar.webp',
                                    image_title: 'Ansiktsbehandling',
                                    image_alt: 'Man som får ansiktsbehandling i ansiktet.',
                                    url: '/hudbehandlingar/',
                                    url_title: 'Se alla våra behandlingar.',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );

                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="/hudbehandlingar/" title="Behandlingar" class="mt-xl button b200 outline is-hidden-desktop expand">Se alla behandlingar</a>
                  </section>

                  <section id="faq">
                        <div id="faq-container">
                              <div class="flex-row align-end justify-space-between">
                                    <div class="h500 l10n">Frågor & Svar</div>
                                    <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se fler frågor & svar</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php $faq_categories = array(
                                    'Generellt' => array(
                                          new Question(
                                                title: 'Behandlar AcneSpecialisten enbart akne?',
                                                text: '<p class="p200">Nej, vår expertis sträcker sig bortom behandling av enbart akne. Vi hanterar en bred variation av hudproblem, inklusive akne, rosacea, pormaskar, pigmentfläckar, ytliga blodkärl och mycket mer. För en fullständig översikt över de hudproblem vi behandlar, besök vår <a class="b200 underline color-deep-sea-400" href="/hudproblem/">hudproblemsida</a> Om du är osäker på vilket hudproblem du har, erbjuder vi en kostnadsfri konsultation där våra erfarna hudspecialister kan ge dig råd och vägledning.</p>'
                                          ),
                                          new Question(
                                                title: 'Kan jag besöka AcneSpecialisten även för mindre hudproblem?',
                                                text: '<p class="p200">Absolut, vi välkomnar alla, oavsett hur litet eller stort ditt hudproblem är. Även en enstaka finne är värd vår uppmärksamhet. Vi erbjuder kostnadsfria hudkonsultationer, som kan genomföras antingen via videosamtal eller på någon av våra tre kliniker i Stockholm.</p>'
                                          ),
                                          new Question(
                                                title: 'Varför erbjuder AcneSpecialisten gratis konsultationer?',
                                                text: '<p class="p200">Vi erbjuder gratis konsultationer för att ge dig en djupare förståelse för din hudtyp och de mest effektiva metoderna för att behandla den. Vår prioritet är att du får omfattande information om behandlingsprocessen och hur vi kan hjälpa dig i att uppnå önskade resultat med rätt behandlingar och produkter.</p>'
                                          ),
                                          new Question(
                                                title: 'Finns AcneSpecialisten endast i Stockholm?',
                                                text: '<p class="p200">Just nu har vi enbart fysiska kliniker i Stockholm. Men oavsett var du befinner dig, kan vi erbjuda hjälp genom vår onlinekonsultation. Genom denna service får du möta en av våra erfarna hudspecialister digitalt. För många hudproblem kan effektiva lösningar implementeras hemma. Skulle det krävas ett personligt besök på kliniken, kan det vara värt resan för att få den rätta behandlingen efter en initial onlinekonsultation.</p>'
                                          ),
                                          new Question(
                                                title: 'Är personalen på AcneSpecialisten hudläkare?',
                                                text: '<p class="p200">Vi är professionella hudspecialister, inte hudläkare. Vår personal har lång erfarenhet och expertis i att behandla problemhud med de senaste metoderna och teknikerna. Vi är specialiserade på att erbjuda effektiva hudvårdsbehandlingar och rådgivning.</p>'
                                          ),
                                          new Question(
                                                title: 'Vilken utbildning har hudspecialisterna hos AcneSpecialisten?',
                                                text: '<p class="p200">Alla våra hudspecialister har genomgått utbildning vid en av Sveriges Hudterapeuters Riksorganisations (SHR) godkända skolor. Många av dem är dessutom CIDESCO-certifierade, vilket är en internationellt erkänd kvalifikation. Denna höga utbildningsstandard säkerställer att vi är väl förberedda för att effektivt hjälpa personer med olika hudproblem.</p>'
                                          ),
                                    ),

                              );
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Läs alla våra frågor och svar" href="fragor-svar.php">Se fler frågor & svar</a>
                        </div>
                  </section>

                  <section id="about-us">
                        <div id="about-text-wrapper">
                              <div id="about-text">
                                    <div class="h500 l10n">Kort om oss</div>
                                    <div class="h200 mt-m l10n">
                                          AcneSpecialisten är en del av Sveriges Skönhetscenter som har valt att fokusera helt på hudproblem. Genom att specialisera oss inom detta område kan vi erbjuda expertis, behandlingar och produkter anpassade specifikt för att hantera och förbättra hudens hälsa hos dem som lider av akne och andra hudproblem.
                                    </div>
                                    <picture class="is-hidden-tablet">
                                          <source media="(max-width: 799px)" srcset="bilder/start/about-mobile.webp">
                                          <source media="(min-width: 800px)" srcset="bilder/start/about-desktop.webp">
                                          <img loading="lazy" src="bilder/start/about-mobile.webp" alt="Vit logotype i en grön växtvägg på kliniken." title="AcneSpecialisten och Sveriges Skönhetscenter" width="364" height="364" />
                                    </picture>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('erfarenhet') ?>
                                                      <div class="h200 l10n">30 års erfarenhet</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Sedan 1994 har vi hjälpt över 200 000 kunder med hudproblem och hudvård, och är idag det självklara valet mot hudproblem.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('unik') ?>
                                                      <div class="h200 l10n">Unik helhetslösning</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Vi erbjuder unika helhetslösningar för att identifiera, behandla och kontrollera hudproblem med anpassade behandlingar.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                    </div>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('certifierad') ?>
                                                      <div class="h200 l10n">Diplomerade hudspecialister</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Vår expertis och passion säkerställer att du får den bästa möjliga hudvården, anpassad efter dina behov.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('kliniker') ?>
                                                      <div class="h200 l10n">3 Kliniker</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Tre kliniker i Stockholm – Östermalm, Södermalm, Sundbyberg – för service, kvalité och resultat.
                                                </p>
                                          </div>
                                    </div>
                                    <a href="om-oss.php" title="Läs mer om AcneSpecialisten" class="button b200 outline expand l10n">Läs mer om oss</a>
                              </div>
                        </div>
                        <div id="about-image-desktop">
                              <picture>
                                    <source media="(max-width: 799px)" srcset="bilder/start/about-mobile.webp">
                                    <source media="(min-width: 800px)" srcset="bilder/start/about-desktop.webp">
                                    <img loading="lazy" src="bilder/start/about-desktop.webp" alt="Vit logotype i en grön växtvägg på kliniken." title="AcneSpecialisten och Sveriges Skönhetscenter" width="632" height="632" />
                              </picture>
                        </div>
                  </section>
                  <section id="specialists">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Våra hudspecialister</div>
                              <a href="/hudterapeut/" title="Specialister" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla specialister</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $specialists = array(
                              new Specialist(
                                    name: 'Cazzandra Lindberg',
                                    title: 'Hudterapeut sedan 2018',
                                    image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                                    image_title: 'Hudterapeut Cazzandra Lindberg',
                                    image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
                              ),
                              new Specialist(
                                    name: 'Veronika Benedik',
                                    title: 'Hudterapeut sedan 1999',
                                    image: 'images/specialists/large/hudterapeut-veronika.webp',
                                    image_title: 'Hudterapeut Veronika Benedik',
                                    image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
                              ),
                              new Specialist(
                                    name: 'Julia Eklund',
                                    title: 'Hudterapeut sedan 2021',
                                    image: 'images/specialists/large/hudterapeut-julia.webp',
                                    image_title: 'Hudterapeut Julia Eklund',
                                    image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
                              ),
                              new Specialist(
                                    name: 'Vilma Libom',
                                    title: 'Hudterapeut sedan 2022',
                                    image: 'images/specialists/large/hudterapeut-vilma.webp',
                                    image_title: 'Hudterapeut Vilma Libom',
                                    image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Se alla AcneSpecialistens hudspecialister" href="/hudterapeut/">Se alla hudspecialister</a>
                  </section>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Varumärken</div>
                              <a href="varumarken/" title="Läs mer om de varumärken vi jobbar med" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Se alla varumärken vi jobbar med" href="varumarken/">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>