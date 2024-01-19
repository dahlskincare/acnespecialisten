<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title>AcneSpecialisten | Erfarna Hudspecialister inom hudproblem i Stockholm</title>
      <meta name="description" content="Med över 30 års erfarenhet, erbjuder AcneSpecialisten expertis inom behandling av hudproblem i Stockholm. Boka en kostnadsfri hudkonsultation idag och upplev skillnaden med personligt anpassad hudvård.">
      <meta name="keywords" content="Hudspecialist, Hudspecialist stockholm, Hudvård Stockholm, Acnespecialisten, Hudvårdsexpert, Acnebehandling, Hudproblem, AcneSpecialisten, Personlig hudvård, Hudvårdsklinik Stockholm, Acne konsultation">

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
                  <a href="gratis-hudkonsultation.php" title="Boka Gratis Hudkonsultation">
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
                                                <div class="p200 l10n">års erfarenhet</div>
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
                                                      <?php icon('trustpilot-white') ?>
                                                      <?php icon('trustpilot-white') ?>
                                                      <?php icon('trustpilot-white') ?>
                                                      <?php icon('trustpilot-white') ?>
                                                      <?php icon('trustpilot-white') ?>
                                                      <div class="p200 l10n">På Trustpilot</div>
                                                </div>
                                          </div>
                                          <div class="flex-aligner">
                                                <span class="label-large">30+</span>
                                                <div>
                                                      <div class="h400 l10n">års</div>
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
                        <div class="h500 l10n">Problem</div>
                        <?php
                        $accordion = array(
                              new AccordionItem(
                                    label: 'Akne',
                                    image_small: 'images/problems/114x140/akne.webp',
                                    image_large: 'images/problems/424x324/akne.webp',
                                    image_title: 'Information om Akne - Acnespecialisten',
                                    image_alt: 'Bild som illustrerar akne',
                                    url: 'acne.php',
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
                                    url: 'acnearr.php',
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
                                    url: 'rosacea.php',
                                    url_title: 'Rosacea',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Pigmentfläckar',
                                    image_small: 'images/problems/114x140/pigmentflackar.webp',
                                    image_large: 'images/problems/424x324/pigmentflackar.webp',
                                    image_title: 'Pigmentfläckar',
                                    image_alt: 'Pigmentfläckar',
                                    url: 'pigmentflackar.php',
                                    url_title: 'Pigmentfläckar',
                                    show_on_large: true,
                                    show_on_small: true
                              ),
                              new AccordionItem(
                                    label: 'Finnar',
                                    image_small: 'images/problems/114x140/finnar.webp',
                                    image_large: 'images/problems/424x324/finnar.webp',
                                    image_title: 'Finnar',
                                    image_alt: 'Finnar',
                                    url: 'finnar.php',
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
                                    url: 'pormaskar.php',
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
                                    url: 'problemhy.php',
                                    url_title: 'Se alla problem',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );
                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="problem" title="problem" class="mt-xl button outline is-hidden-desktop expand l10n">Se alla problem</a>
                  </section>
                  <section id="our-approach">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Metod</div>
                              <a href="metod" title="metod" class="button compact text is-hidden-mobile">
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
                                    button_label: 'Boka gratis hudkonsultation',
                                    button_url: 'gratis-hudkonsultation.php'
                              ),
                              new ApproachCard(
                                    number: '02',
                                    title: 'Behandla',
                                    content: 'Vi erbjuder skräddarsydda behandlingar som åtgärdar hudproblem och förbättrar hudens utseende. Våra hudspecialister säkerställer att behandlingarna är effektiva och säkra för din hudtyp.',
                                    button_label: 'Våra behandlingar',
                                    button_url: 'behandlingar.php'
                              ),
                              new ApproachCard(
                                    number: '03',
                                    title: 'Förebygga',
                                    content: 'För att förebygga framtida hudproblem och bibehålla resultatet av behandlingarna rekommenderar vi produkter och rutiner som är anpassade efter din hudtyp och specifika problem.',
                                    button_label: 'Se produkter',
                                    button_url: 'https://dahlskincare.com'
                              ),
                              new ApproachCard(
                                    number: '04',
                                    title: 'Reparera',
                                    content: 'Efter att det aktiva problemet åtgärdats fokuserar vi på att reparera eventuella ärr med hjälp av maskinbehandlingar som microneedling, laser och IPL för att förbättra hudens struktur.',
                                    button_label: 'Se behandlingar',
                                    button_url: 'behandlingar.php'
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
                        <a href="metod" title="Metod" class="button b200 outline expand mt-xl l10n is-hidden-desktop">Läs mer om metoden</a>
                  </section>
                  <section id="results">
                        <?php
                        $results = array(
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
                                    image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
                                    image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
                                    image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
                                    image_alt: 'Akne resultat',
                                    image_title: 'Akne resultat',
                                    treatment: new ResultTreatment(
                                          duration: '3 månader',
                                    )
                              ),
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
                                    image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
                                    image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
                                    image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
                                    image_alt: 'Akne resultat',
                                    image_title: 'Akne resultat',
                                    treatment: new ResultTreatment(
                                          duration: '2 månader',
                                    )
                              ),
                              new ResultCustomer(
                                    image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
                                    image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
                                    image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
                                    image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
                                    image_alt: 'Rosacea resultat',
                                    image_title: 'Rosacea resultat',
                                    treatment: new ResultTreatment(
                                          duration: '4 månader',
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
                                    <a href="https://se.trustpilot.com/review/acnespecialisten.se" title="Omdömen" class="ml-l button compact text">
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
                                    signature: 'Sara'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Google',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Man behöver inte klä av sig',
                                    text: "Man behöver inte klä av sig för behandling. Behandlaren känns inte stressad, sitter kvar utan att springa iväg för att uträtta annat! Frågar inte ut en. Försöker inte pracka på en produkter. Är trevlig och hjälpsam",
                                    signature: 'Alan'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Otroligt nöjd',
                                    text: "Efter bara tre månader hos bästa Emma har min hud blivit så mycket bättre! Efter en graviditet och en kombination av hormonell och bakteriell acne så har jag äntligen börjar komma tillbaks till min gamla hy. Är verkligen så himla nöjd. Har gjort ansiktsbehandling mot acne samt kört acnespecialistens produkter och kan bara säga gott om dem!",
                                    signature: 'Jenny'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Google',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Nöjd',
                                    text: "Ett första besök som absolut kommer leda till ett till. Bra och tydlig information om vad som skulle vara bäst för min hy.",
                                    signature: 'Mona'
                              ),
                              new Review(
                                    stars: 5,
                                    brand: 'Trustpilot',
                                    logo_url: 'images/brands/trustpilot.svg',
                                    title: 'Kunniga och bra!',
                                    text: "Mina tonårsdöttrar har båda gått till acnespecialisten under flera år med både mindre och större problemområden. Vi har alltid fått professionell och kunnig behandling, bra produkter och bra råd, som också hjälper fint!",
                                    signature: 'Izabella'
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Omdömen" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
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
                                    url: 'ansiktsbehandlingar-klassiska.php',
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
                                    url: 'behandlingar/laser-mot-problemhy',
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
                                    url: 'portomning.php',
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
                                    url: 'microneedling.php',
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
                                    url: 'kemisk-peeling.php',
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
                                    url: 'behandlingar.php',
                                    url_title: 'Se alla behandlingar',
                                    show_on_large: true,
                                    show_on_small: false
                              )
                        );

                        $more_count = 17;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/accordion/accordion.php')
                        ?>
                        <a href="behandlingar.php" title="Behandlingar" class="mt-xl button b200 outline is-hidden-desktop expand">Se alla behandlingar</a>
                  </section>
                  <section id="faq">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Frågor & Svar</div>
                              <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se fler frågor & svar</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php $faq_categories = array(
                              'Behandlingar' => array(
                                  new Question(
                                      title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
                                      text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
                                  ),
                                  new Question(
                                      title: 'Vad är den genomsnittliga tidsåtgången för en behandling?',
                                      text: 'En typisk behandling hos AcneSpecialisten tar mellan 60 och 90 minuter, beroende på behandlingens art och dina individuella hudvårdsbehov.'
                                  ),
                                  new Question(
                                      title: 'Hur många behandlingar rekommenderas för att uppnå synliga resultat?',
                                      text: 'Antalet rekommenderade behandlingar varierar beroende på individens hudproblem och hudtyp. I genomsnitt ser kunderna betydande förbättringar efter 2-4 behandlingssessioner.'
                                  ),
                                  new Question(
                                      title: 'Är behandlingarna hos AcneSpecialisten smärtsamma?',
                                      text: 'Vi strävar efter att göra våra behandlingar så bekväma som möjligt. Viss lätt smärta kan upplevas under behandling av inflammerade områden eller vid extraktioner, men denna känsla är övergående och hanteras med största omsorg för din komfort.'
                                  ),
                                  new Question(
                                      title: 'Anpassar ni behandlingarna för olika hudtyper?',
                                      text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
                                  ),
                              ),
                              'Konsultationer' => array(
                                  new Question(
                                      title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
                                      text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
                                  ),
                                  new Question(
                                      title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
                                      text: 'Under konsultationen kommer en av våra hudspecialister att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
                                  ),
                              ),
                              'Produkter' => array(
                                  new Question(
                                      title: 'Hur kan jag hitta de rätta produkterna för min hudtyp?',
                                      text: 'För att hitta de produkter som passar just din hudtyp bäst, erbjuder vi kostnadsfria hudkonsultationer där våra experter analyserar din hud och rekommenderar produkter anpassade efter dina unika behov och hudtillstånd.'
                                  ),
                              ),
                              'Skötselråd och rutiner' => array(
                                  new Question(
                                      title: 'Vilka eftervårdstips bör jag följa efter en behandling?',
                                      text: 'Efter en behandling rekommenderar vi specifika eftervårdstips för att maximera behandlingens effektivitet och stödja din huds läkningsprocess. Detta kan inkludera råd om fuktgivande, solskydd och hur du undviker vissa produkter eller aktiviteter under en viss tid.'
                                  ),
                              ),
                              'Priser och betalning' => array(
                                  new Question(
                                      title: 'Hur kan jag ta reda på priserna för era behandlingar?',
                                      text: 'Våra behandlingspriser finns listade på vår hemsida. För varje specifik behandling hittar du detaljerad prisinformation som hjälper dig att planera ditt besök.'
                                  ),
                                  new Question(
                                      title: 'Erbjuder ni några paketpriser eller rabatter för flera behandlingar?',
                                      text: 'Ja, vi erbjuder ibland paketpriser eller rabatter vid bokning av flera behandlingar. Detta är ett utmärkt sätt att få en omfattande behandling till ett reducerat pris. För mer information om aktuella erbjudanden, besök vår hemsida eller kontakta oss direkt.'
                                  ),
                              ),

                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="FAQ" href="faq">Se fler frågor & svar</a>
                  </section>
                  <!--Hudguide-->
                  <section id="about-us">
                        <div id="about-text-wrapper">
                              <div id="about-text">
                                    <div class="h500 l10n">Kort om oss</div>
                                    <div class="h200 mt-m l10n">
                                          AcneSpecialisten är en del av Sveriges Skönhetscenter som har valt att fokusera helt på acne och problemhy. Genom att specialisera oss inom detta område kan vi erbjuda expertis, behandlingar och produkter anpassade specifikt för att hantera och förbättra hudens hälsa hos dem som lider av acne och andra hudproblem.
                                    </div>
                                    <picture class="is-hidden-tablet">
                                          <source media="(max-width: 799px)" srcset="images/about-mobile.jpg">
                                          <source media="(min-width: 800px)" srcset="images/about-desktop.jpg">
                                          <img src="images/about-mobile.jpg" alt="About us" title="About us" width="364" height="364" />
                                    </picture>
                                    <div class="columns is-4 is-variable">
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('erfarenhet') ?>
                                                      <div class="h200 l10n">30 års erfarenhet</div>
                                                </div>
                                                <p class="p200 mt-xxs l10n">
                                                      Sedan 1994 har vi hjälpt över 100 000 kunder med problemhy och hudvård, ständigt utvecklande vår verksamhet.
                                                </p>
                                                <div class="divider"></div>
                                          </div>
                                          <div class="column">
                                                <div class="flex-row about-header">
                                                      <?php icon('unik') ?>
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
                                                      Tre kliniker i Stockholm – Östermalm, Södermalm, Sundbyberg – för bekväm, professionell hudvård i huvudstaden.
                                                </p>
                                          </div>
                                    </div>
                                    <a href="om-oss.php" title="Om oss" class="button b200 outline expand l10n">Läs mer om oss</a>
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
                              <a href="specialister" title="Specialister" class="button compact text is-hidden-mobile">
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
                                    name: 'Julia Eklund',
                                    title: 'Hudterapeut sedan 2017',
                                    image: 'images/specialists/large/hudterapeut-julia.webp',
                                    image_alt: 'Julia Eklund',
                                    image_title: 'Julia Eklund'
                                ),
                              new Specialist(
                                    name: 'Vilma Libom',
                                    title: 'Hudterapeut sedan 2019',
                                    image: 'images/specialists/large/hudterapeut-vilma.webp',
                                    image_alt: 'Vilma Libom',
                                    image_title: 'Vilma Libom'
                              ),
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Specialister" href="specialists">Se alla specialister</a>
                  </section>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <div class="h500 l10n">Varumärken</div>
                              <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="index.js"></script>
</body>

</html>