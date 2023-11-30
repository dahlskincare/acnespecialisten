<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Om Oss - AcneSpecialisten | Din Partner i Hudvård</title>
    <meta name="description" content="AcneSpecialisten är din dedikerade partner i kampen mot acne och andra hudproblem. Med en kombination av expertkunskap, skräddarsydda behandlingar och en holistisk syn på hudvård, strävar vi efter att förbättra din hudhälsa och ditt välbefinnande." class="l10n">
    <meta name="title" content="AcneSpecialisten - Expertis inom Hudvård och Behandling av Acne" class="l10n">
    <meta name="keywords" content="Acnebehandling, Hudvårdspecialister, Hudproblem, Ansiktsbehandling, Personlig hudvård, Hudhälsa, AcneSpecialisten" class="l10n">

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
                    <p class="p200 l10n">På AcneSpecialisten har vi under 30 år utvecklat en unik och effektiv trestegsmetod för att behandla problemhy. Vårt engagerade team av experter följer dig genom hela behandlingsprocessen, från noggrann analys till personligt anpassade behandlingar. Vi erbjuder skräddarsydda hudvårdsrutiner som främjar din huds naturliga balans och hälsa, utan att kompromissa med kroppens välbefinnande. Med vår långa erfarenhet och metodik står vi redo att hjälpa dig uppnå och bibehålla en frisk och balanserad hud.</p>
                </section>
                <section id="plant">
                    <picture>
                        <source media="(max-width: 799px)" srcset="om-oss/images/about-plant.jpg">
                        <source media="(min-width: 800px)" srcset="om-oss/images/about-plant-large.jpg">
                        <img src="images/about/about-plant.jpg" alt="Om AcneSpecialisten" title="Om AcneSpecialisten" width="360" height="274" />
                    </picture>
                </section>
                <section id="segments" class="large-margin">
                    <h2 class="h500 mb-l is-hidden-tablet l10n">Vår Fyrstegsmetod: Ett Omfattande metod mot hudproblem</h2>
                    <div id="segments-flex">
                        <div id="s-first-two">
                            <div id="s-first-two-text" class="is-hidden-mobile">
                                <h2 class="h500 l10n">Vår Fyrstegsmetod: Ett Omfattande metod mot hudproblem</h2>
                                <p class="p200 l10n">På AcneSpecialisten tillämpar vi en unik fyrstegsmetod för att noggrant och effektivt hantera din problemhy. I det första steget erbjuder vi en gratis hudkonsultation, där vi identifierar de bakomliggande orsakerna till dina hudproblem. Efter denna grundliga analys följer det andra steget: specifikt anpassade behandlingar som riktar sig mot dina individuella hudproblem. I det tredje steget tar vi proaktiva åtgärder för att förhindra att problemen återuppstår, genom att tillämpa förebyggande hudvård. Det sista steget fokuserar på att reparera och återställa huden från eventuella skador såsom ärrbildningar, vilket är ett resultat av tidigare hudproblem. Vår omfattande metod säkerställer att du får en helhetssyn på din hudvård, från problemidentifiering till långsiktig underhåll och reparation. Vi står vid din sida genom hela processen, med stöd och rådgivning tillgänglig via din personliga profil.</p>
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
                    <p class="mt-xl p200 is-hidden-tablet l10n">På AcneSpecialisten tillämpar vi en unik fyrstegsmetod för att noggrant och effektivt hantera din problemhy. I det första steget erbjuder vi en gratis hudkonsultation, där vi identifierar de bakomliggande orsakerna till dina hudproblem. Efter denna grundliga analys följer det andra steget: specifikt anpassade behandlingar som riktar sig mot dina individuella hudproblem. I det tredje steget tar vi proaktiva åtgärder för att förhindra att problemen återuppstår, genom att tillämpa förebyggande hudvård. Det sista steget fokuserar på att reparera och återställa huden från eventuella skador såsom ärrbildningar, vilket är ett resultat av tidigare hudproblem. Vår omfattande metod säkerställer att du får en helhetssyn på din hudvård, från problemidentifiering till långsiktig underhåll och reparation. Vi står vid din sida genom hela processen, med stöd och rådgivning tillgänglig via din personliga profil.</p>
                </section>
                <section id="hands" class="large-margin">
                    <h2 class="h500 l10n">Vi siktar mot målet!</h2>
                    <p class="mt-m p200 l10n is-hidden-mobile">På AcneSpecialisten är ditt nöjda leende och synliga hudförbättringar vårt främsta mål. Med fyra välplacerade salonger i Stockholmsregionen, står vi redo att välkomna dig på din resa mot en klarare och friskare hy. Vår expertis och engagemang speglas i de förstklassiga behandlingar och högkvalitativa produkter vi erbjuder, alla noggrant utvalda och beprövade för sin effektivitet. Vi ser fram emot att hjälpa dig uppnå din drömhud och ge dig den uppmärksamhet och vård du förtjänar.</p>
                    <picture>
                        <source media="(max-width: 799px)" srcset="om-oss/images/about-hands.jpg">
                        <source media="(min-width: 800px)" srcset="om-oss/images/about-hands-large.jpg">
                        <img src="images/about/about-hands.jpg" alt="Vi siktar mot målet!" title="Vi siktar mot målet!" width="358" height="274" />
                    </picture>
                    <p class="p200 mt-xl l10n is-hidden-tablet">På AcneSpecialisten är ditt nöjda leende och synliga hudförbättringar vårt främsta mål. Med fyra välplacerade salonger i Stockholmsregionen, står vi redo att välkomna dig på din resa mot en klarare och friskare hy. Vår expertis och engagemang speglas i de förstklassiga behandlingar och högkvalitativa produkter vi erbjuder, alla noggrant utvalda och beprövade för sin effektivitet. Vi ser fram emot att hjälpa dig uppnå din drömhud och ge dig den uppmärksamhet och vård du förtjänar.</p>
                </section>
                <section id="bullets" class="large-margin">
                    <div class="columns">
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">Unik helhetslösning</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                På AcneSpecialisten är vi dedikerade till att ge dig en omfattande lösning för din hud. Vår beprövade metod innebär att vi inte bara identifierar och behandlar dina hudproblem, utan även hjälper dig att bibehålla en frisk och balanserad hud på lång sikt. Genom hela processen står vi vid din sida, och vi tillhandahåller en skräddarsydd hudvårdsrutin som är anpassad specifikt för din unika hudtyp.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">30 års erfarenhet</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                Sedan vår grundläggning 1994 har vi stolt hjälpt över 100.000 kunder att uppnå en bättre hudhälsa. Vår resa som AcneSpecialisten har varit fylld av kontinuerlig lärande och förfining av vår kunskap inom problemhy och hudvård. Vår långa erfarenhet ger oss en unik förmåga att ständigt utveckla och förbättra våra behandlingar och tjänster.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">Diplomerade hudspecialister</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                Varje medlem i vårt team är en certifierad hudterapeut med specialutbildning inom de behandlingar vi erbjuder. Detta garanterar att alla behandlingar utförs med högsta möjliga kvalitet och precision, enligt branschstandarder och bästa praxis. Vårt engagemang för kvalitet och kunskap säkerställer att du får den mest effektiva och säkra hudvården.
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
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
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
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Questions & answers</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide" title="View all articles">View all articles</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Our specialists</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="View all specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>