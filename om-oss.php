<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Om Oss - AcneSpecialisten | Din Partner i Hudvård</title>
    <meta name="description" content="AcneSpecialisten är din dedikerade partner i kampen mot acne och andra hudproblem. Med en kombination av expertkunskap, skräddarsydda behandlingar och en holistisk syn på hudvård, strävar vi efter att förbättra din hudhälsa och ditt välbefinnande.">
    <meta name="keywords" content="Acnebehandling, Hudvårdspecialister, Hudproblem, Ansiktsbehandling, Personlig hudvård, Hudhälsa, AcneSpecialistenn">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/om-oss/about.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="h600 l10n">Om AcneSpecialisten</h1>
                    <p class="p200 l10n">På AcneSpecialisten har vi under 30 år utvecklat en unik och effektiv fyrstegsmetod för att behandla hudproblem. Vårt engagerade team av hudterapeuter följer dig genom hela behandlingsprocessen, från noggrann hudkonsultation till personligt anpassade behandlingar. Vi erbjuder skräddarsydda hudvårdsrutiner som främjar din huds naturliga balans och hälsa, utan att kompromissa med kroppens välbefinnande. Med vår långa erfarenhet och metodik står vi redo att hjälpa dig uppnå och bibehålla en frisk och balanserad hud.</p>
                </section>
                <section id="plant">
                    <picture>
                        <source media="(max-width: 799px)" srcset="images/about-plant.jpg">
                        <source media="(min-width: 800px)" srcset="images/about-plant-large.jpg">
                        <img src="images/about/about-plant.jpg" alt="Om AcneSpecialisten" title="Om AcneSpecialisten" width="360" height="274" />
                    </picture>
                </section>
                <section id="segments" class="large-margin">
                    <h2 class="h500 mb-l is-hidden-tablet l10n">Din helhetslösning för hudproblem</h2>
                    <div id="segments-flex">
                        <div id="s-first-two">
                            <div id="s-first-two-text" class="is-hidden-mobile">
                                <h2 class="h500 l10n">Din helhetslösning för hudproblem</h2>
                                <p class="p200 l10n">AcneSpecialisten använder en fyrstegsmetod för hudvård, som börjar med en gratis konsultation för att <b>identifiera</b> hudproblem. Vi fortsätter med anpassade <b>behandlingar</b>, följer upp med <b>förebyggande</b> hudvård, och avslutar med att <b>reparera</b> skadad hud, inklusive ärr. Denna metod säkerställer en komplett lösning från diagnos till reparation, med personlig rådgivning under hela processen.</p>
                            </div>
                            <div id="s-first-images">
                                <picture>
                                    <source media="(max-width: 799px)" srcset="om-oss/images/segments-left.jpg">
                                    <source media="(min-width: 800px)" srcset="om-oss/images/segments-left-large.jpg">
                                    <img src="images/about/segments-left.jpg" alt="Salon 1" title="Salon 1" width="114" height="214" />
                                </picture>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="om-oss/images/segments-mid.jpg">
                                    <source media="(min-width: 800px)" srcset="om-oss/images/segments-mid-large.jpg">
                                    <img src="images/about/segments-mid.jpg" alt="Salon 2" title="Salon 2" width="114" height="157" />
                                </picture>
                            </div>
                        </div>
                        <div id="s-last">
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/segments-right.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/segments-right-large.jpg">
                                <img src="images/about/segments-right.jpg" alt="Salon 3" title="Salon 3" width="114" height="272" />
                            </picture>
                        </div>
                    </div>
                    <p class="mt-xl p200 is-hidden-tablet l10n">AcneSpecialisten använder en fyrstegsmetod för hudvård, som börjar med en gratis konsultation för att <b>identifiera</b> hudproblem. Vi fortsätter med anpassade <b>behandlingar</b>, följer upp med <b>förebyggande</b> hudvård, och avslutar med att <b>reparera</b> skadad hud, inklusive ärr. Denna metod säkerställer en komplett lösning från diagnos till reparation, med personlig rådgivning under hela processen.</p>
                </section>
                <section id="hands" class="large-margin">
                    <h2 class="h500 l10n">Från start till mål – Din partner i holistisk hudvård</h2>
                    <p class="mt-m p200 l10n is-hidden-mobile">På AcneSpecialisten erbjuder vi en omfattande lösning för dina hudproblem, från start till mål. Vår process inleds med en kostnadsfri konsultation, där du tilldelas en personlig hudterapeut (PT) som guidar dig genom hela din hudvårdsresa. Vi dokumenterar din framgång med förebilder och fortsätter att noggrant följa upp din utveckling. Vid dessa tillfällen fotograferar vi din hud för att tydligt kunna jämföra framstegen, säkerställande att vi uppnår önskat slutresultat.</p>
                    <picture>
                        <source media="(max-width: 799px)" srcset="om-oss/images/about-hands.jpg">
                        <source media="(min-width: 800px)" srcset="om-oss/images/about-hands-large.jpg">
                        <img src="images/about/about-hands.jpg" alt="Vi siktar mot målet!" title="Vi siktar mot målet!" width="358" height="274" />
                    </picture>
                    <p class="p200 mt-xl l10n is-hidden-tablet">På AcneSpecialisten erbjuder vi en omfattande lösning för dina hudproblem, från start till mål. Vår process inleds med en kostnadsfri konsultation, där du tilldelas en personlig hudterapeut (PT) som guidar dig genom hela din hudvårdsresa. Vi dokumenterar din framgång med förebilder och fortsätter att noggrant följa upp din utveckling genom kostnadsfria återbesök. Vid dessa tillfällen fotograferar vi din hud för att tydligt kunna jämföra framstegen, säkerställande att vi uppnår önskat slutresultat.</p>
                </section>
                <section id="bullets" class="large-margin">
                    <div class="columns">
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('unik') ?>
                                <h3 class="h200 ml-s l10n">Unik helhetslösning</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                På AcneSpecialisten är vi dedikerade till att ge dig en helhetslösning för din hy. Vår beprövade metod innebär att vi inte bara identifierar och behandlar dina hudproblem, utan även hjälper dig att förebygga och reparera huden. Genom hela processen står vi vid din sida, och vi tillhandahåller en skräddarsydd behandlingsplan som är anpassad specifikt för din unika hudtyp.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('erfarenhet') ?>
                                <h3 class="h200 ml-s l10n">30 års erfarenhet</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                Sedan vår start 1994 har vi stolt hjälpt flera hundra tusen personer att uppnå en problemfri hy. Vår resa som AcneSpecialisten har varit fylld av kontinuerlig lärande och förfining av vår kunskap inom problemhy och hudvård. Vår långa erfarenhet ger oss en unik förmåga att ständigt utveckla och förbättra våra behandlingar och tjänster.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('certifierad') ?>
                                <h3 class="h200 ml-s l10n">Diplomerade hudspecialister</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                Varje specialist i vårt team är en certifierad hudterapeut med en Svenskt SHR-godkänd (Svenska hudterapeuters riksorganisation) utbildning. Detta garanterar att alla behandlingar utförs med högsta möjliga kvalitet och precision, enligt branschstandarder och bästa praxis. Vårt engagemang för kvalitet och kunskap säkerställer att du får den mest effektiva och säkra hudvården.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="poster large-margin" id="poster-left">
                    <h2 class="h500 l10n is-hidden-desktop">Modern Hudvård Möter Beprövad Expertis</h2>
                    <div class="flex-row align-center">
                        <div>
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/about-drip.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/about-drip-large.jpg">
                                <img src="images/about/about-drip.jpg" alt="Method" title="Method" width="358" height="272" />
                            </picture>
                        </div>
                        <div class="is-hidden-touch">
                            <h2 class="h500 l10n">Modern Hudvård Möter Beprövad Expertis</h2>
                            <p class="p200 l10n">
                                På AcneSpecialisten förenar vi årtiondens erfarenhet inom hudvård med de senaste innovationerna inom hudvårdsteknologi och metodik. Vårt team av erfarna hudterapeuter och specialister är inte bara djupt rotade i traditionell kunskap, utan är också ständigt uppdaterade med de nyaste teknikerna och maskinerna inom estetisk hudvård. Denna unika kombination säkerställer att varje behandling vi erbjuder inte bara är tidsenlig och effektiv, utan också bygger på en solid grund av beprövad kunskap och erfarenhet. På AcneSpecialisten är du i händerna på experter som förstår vikten av att kombinera det bästa från både det förflutna och framtiden för att ge dig optimala resultat för din hud.
                            </p>
                        </div>
                    </div>
                    <p class="p200 l10n is-hidden-desktop">
                        På AcneSpecialisten förenar vi årtiondens erfarenhet inom hudvård med de senaste innovationerna inom hudvårdsteknologi och metodik. Vårt team av erfarna hudterapeuter och specialister är inte bara djupt rotade i traditionell kunskap, utan är också ständigt uppdaterade med de nyaste teknikerna och maskinerna inom estetisk hudvård. Denna unika kombination säkerställer att varje behandling vi erbjuder inte bara är tidsenlig och effektiv, utan också bygger på en solid grund av beprövad kunskap och erfarenhet. På AcneSpecialisten är du i händerna på experter som förstår vikten av att kombinera det bästa från både det förflutna och framtiden för att ge dig optimala resultat för din hud.
                    </p>
                </section>
                <section class="poster large-margin" id="poster-right">
                    <h2 class="h500 l10n is-hidden-desktop">Nära Dig i Stockholm – Tre Kliniker/h2>
                    <div class="flex-row align-center">
                        <div class="is-hidden-touch">
                            <h2 class="h500 l10n">Nära Dig i Stockholm – Tre Kliniker</h2>
                            <p class="p200 l10n">
                                På AcneSpecialisten förstår vi vikten av tillgänglighet och bekvämlighet när det kommer till hudvård. Därför har vi placerat våra tre kliniker strategiskt i Stockholmsområdet – på Strandvägen, Södermalm och i Sundbyberg. Oavsett var du befinner dig i staden, är professionell hudvård aldrig långt borta. Varje klinik erbjuder en unik och personlig upplevelse, med målet att ge dig den bästa möjliga vård för din hud. Våra team av erfarna hudterapeuter är redo att välkomna dig och skapa en behandlingsplan som är skräddarsydd efter dina specifika behov och önskemål. Besök den klinik som ligger närmast dig för att påbörja din resa mot en friskare och mer strålande hud med AcneSpecialisten.
                            </p>
                        </div>
                        <div>
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/about-lotion.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/about-lotion-large.jpg">
                                <img src="images/about/about-lotion.jpg" alt="Method" title="Method" width="358" height="272" />
                            </picture>
                        </div>
                    </div>
                    <p class="p200 l10n is-hidden-desktop">
                        På AcneSpecialisten förstår vi vikten av tillgänglighet och bekvämlighet när det kommer till hudvård. Därför har vi placerat våra tre kliniker strategiskt i Stockholmsområdet – på Strandvägen, Södermalm och i Sundbyberg. Oavsett var du befinner dig i staden, är professionell hudvård aldrig långt borta. Varje klinik erbjuder en unik och personlig upplevelse, med målet att ge dig den bästa möjliga vård för din hud. Våra team av erfarna hudterapeuter är redo att välkomna dig och skapa en behandlingsplan som är skräddarsydd efter dina specifika behov och önskemål. Besök den klinik som ligger närmast dig för att påbörja din resa mot en problemfri hud med AcneSpecialisten.
                    </p>
                </section>
            </div>
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Omdömens</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                            <span class="l10n">Se alla omdömen</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php $faq_categories = array(
                        'Generellt' => array(
                            new Question(
                                title: 'Hur länge har AcneSpecialisten funnits?',
                                text: '<p class="p200">AcneSpecialisten har varit en pionjär inom specialiserad hudvård sedan starten 1994, med över två decennier av erfarenhet och expertis.</p>'
                            ),
                            new Question(
                                title: 'Vilka tjänster erbjuder AcneSpecialisten?',
                                text: '<p class="p200">Vi erbjuder en rad behandlingar, inklusive ansiktsbehandlingar, kemiska peelingar, laserterapi och skräddarsydda hudvårdsprogram, alla designade för att möta specifika hudvårdsbehov.</p>'
                            ),
                            new Question(
                                title: 'Vad gör AcneSpecialisten unikt?',
                                text: '<p class="p200">Vår dedikation till personlig vård, användning av avancerade behandlingstekniker och en holistisk syn på hudhälsa skiljer oss från andra kliniker.</p>'
                            ),
                            new Question(
                                title: 'Kan jag boka en konsultation online?',
                                text: '<p class="p200">Absolut, du kan enkelt boka en kostnadsfri konsultation via vår hemsida för att börja din resa mot bättre hudhälsa.</p>'
                            ),
                            new Question(
                                title: 'Vad kan jag förvänta mig under min första konsultation?',
                                text: '<p class="p200">Under din första konsultation kommer en av våra erfarna hudterapeuter att utföra en grundlig hudanalys, diskutera dina hudvårdsbehov och mål, och rekommendera en anpassad behandlingsplan.</p>'
                            ),
                        ),

                  );
                  include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>
            <!--Hudguide-->
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="Se alla specialister">Se alla specialister</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>