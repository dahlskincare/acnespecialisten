<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('metod/models/step/step.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php');

$path_segments = array(
    new PathSegment('Metoden', '/metoden.php'),
);

$steps = array(
    new StepModel(
        title: '01. Identifiera',
        content: "På Acnespecialisten inleder vi din hudvårdsresa med en gratis hudkonsultation på klinik eller online. Under denna session identifierar våra experter din hudtyp och eventuella hudproblem. Denna noggranna analys är grunden för att skapa en effektiv och personligt anpassad behandlingsplan.",
        image_small: 'bilder/hudbehandlingar/358x274/konsultation.webp',
        image_large: 'bilder/hudbehandlingar/424x456/konsultation.webp',
        url: 'gratis-hudkonsultation.php',
        url_label: 'Boka en gratis konsultation',
        url_title: 'Boka en gratis hudkonsultation hos AcneSpecialisten',
    ),
    new StepModel(
        title: '02. Behandla',
        content: "Efter att vi har identifierat ditt specifika hudproblem, går vi vidare till nästa steg – att inleda behandlingen med den metod som bäst passar just ditt tillstånd. Valet av behandlingsmetod baseras på problemets art och dina individuella behov.",
        image_small: 'bilder/hudbehandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: 'bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp',
        url: '/hudbehandlingar',
        url_label: 'Se våra behandlingar',
        url_title: 'Se våra behandlingar',
    ),
    new StepModel(
        title: '03. Förebygga',
        content: "För att säkerställa långsiktiga resultat fokuserar vi på att förebygga framtida hudproblem. Vi ger dig skräddarsydd hudvårdsrutin och rekommenderar högkvalitativa hudvårdsprodukter som är anpassade för att skydda och upprätthålla din huds hälsa.",
        image_small: 'bilder/hudbehandlingar/358x274/produkter.webp',
        image_large: 'bilder/hudbehandlingar/424x456/produkter.webp',
        url: 'https://dahlskincare.se',
        url_label: 'Upptäck produkterna',
        url_title: 'Se produkterna',
        url_target: '_blank',
    ),
    new StepModel(
        title: '04. Reparera',
        content: "I det sista steget i vår metod tar vi hand om eventuella återstående effekter av hudproblem, såsom ärr och pigmentförändringar. Vi erbjuder effektiva behandlingar för att reparera och återställa huden, och ge dig en hälsosam och strålande hy.",
        image_small: 'bilder/hudbehandlingar/358x274/microneedling.webp',
        image_large: 'bilder/hudbehandlingar/424x456/microneedling.webp',
        url: 'behandla-acnearr.php',
        url_label: 'Läs mer om eftervård',
        url_title: 'Läs mer om eftervård',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/metoden.php" />

    <title class="l10n">Alternativ till hudläkare Stockholm - Privat & utan remiss</title>
    <meta name="title" content="Alternativ till hudläkare Stockholm - Privat & utan remiss" class="l10n">
    <meta name="description" content="Vi är ett alternativ till hudläkare och på AcneSpecialisten erbjuder vi behandlingar och rådgivning utan remiss. Boka gratis konsultation så hjälper vi dig!" class="l10n">
    <meta name="keywords" content="hudläkare, hudläkare stockholm, hudläkare stockholm utan remiss, hudläkare utan remiss stockholm, hudläkare utan remiss, privat hudläkare stockholm, hudläkare stockholm privat, hudläkare privat, privat hudläkare, hudläkare online, huddoktor" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/metod/method.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="l10n">Alternativ till hudläkare Stockholm - Privat & utan remiss</h1>
                    <p class="l10n">Vi på Acnespecialisten har utvecklat en unik metod i fyra steg där kundens problemhy står i fokus. Vi är ditt alternativ till en hudläkare, men utan remisser och långa köer. På våra hudmottagningar arbetar vi med att identifiera problemet, behandla det och sedan hjälpa dig att förebygga och bibehålla den balans som vi påbörjat arbetet med att reparera och återställa. Vi vill vara ditt enkla och självklara val mot en problemfri hy!</p>
                </section>
                <section id="video">
                    <iframe width="872" height="560" src="https://www.youtube.com/embed/3XmCJ8dROCw?si=ITCRjBGvBZBeP2ML" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </section>
                <section id="bullets">
                    <div class="columns is-variable is-3">
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Unik helhetslösning</span>
                                </div>
                                <div class="bullet-content l10n">Vi erbjuder en unik helhetslösning för din hud. Vår metod går ut på att att identifiera till att långsiktigt hantera hudproblem. Vi erbjuder personlig rådgivning och skräddarsydda hudvårdsrutiner, anpassade efter just din hudtyp.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">30 års erfarenhet</span>
                                </div>
                                <div class="bullet-content l10n">Med över 30 års erfarenhet och över 200.000 nöjda kunder, har AcneSpecialisten en djupgående kunskap inom problemhy och hudvård. Vi är ständigt i utveckling, allt för att ge dig den bästa möjliga behandlingen.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Diplomerade hudspecialister</span>
                                </div>
                                <div class="bullet-content l10n">Vårt team består av diplomutbildade hudterapeuter, specialiserade inom våra behandlingsområden. Du kan lita på att vi levererar högkvalitativa och säkra hudvårdsbehandlingar, med precision och omsorg.</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="steps">
                    <?php foreach ($steps as $step) {
                        include('metod/widgets/step/step.php');
                    } ?>
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
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>

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
                            title: 'Vad innebär det att ha en personlig terapeut hos er?',
                            text: '<p class="p200">En personlig terapeut hos AcneSpecialisten fungerar som din personliga tränare (PT) för hudvård, vilken leder dig genom hela din behandlingsresa. Denna expert, som känner till ditt unika fall, skapar din behandlingsplan och står för kontinuerlig uppföljning och direktkontakt via chatten på din profil. De säkerställer en skräddarsydd och uppdaterad behandlingsprocess baserat på dina framsteg och behov.</p>'
                        ),
                        new Question(
                            title: 'Hur skiljer sig AcneSpecialistens metod från andra hudvårdskliniker?',
                            text: '<p class="p200">Vår unika metod hos AcneSpecialisten bygger på en holistisk lösning. Vi kombinerar djupgående kunskap med de mest effektiva behandlingsmetoderna och korrekta hudvårdsrutiner för att ge dig ett omfattande stöd. Du behöver inte vända dig någon annanstans; vi tar hand om ditt hudproblem från början till slut med hjälp av din personliga terapeut. Detta garanterar en trygg och sammanhållen behandlingsprocess.</p>'
                        ),
                        new Question(
                            title: 'Hur påbörjar jag min behandlingsprocess hos er?',
                            text: '<p class="p200">Din resa med oss börjar med en kostnadsfri hudkonsultation. Under detta första möte med en av våra kvalificerade hudterapeuter, utvecklas en individuellt anpassad behandlingsplan specifikt för din hudtyp. Detta första steg ger dig en djupare förståelse för din hud och hur vi kan arbeta tillsammans för att uppnå de bästa möjliga resultaten.</p>'
                        ),
                        new Question(
                            title: 'Är er metod lämplig för alla hudtyper?',
                            text: '<p class="p200">Absolut, vår metod är utformad för att tillgodose alla hudtyper och hudproblem. Under den inledande konsultationen utför vi en noggrann analys av din hud för att identifiera dess unika behov. Baserat på denna analys skapar vi en skräddarsydd behandlingsplan som är perfekt anpassad för just din hudtyp.</p>'
                        ),
                        new Question(
                            title: 'Hur anpassar ni metoden under behandlingsprocessen?',
                            text: '<p class="p200">En framgångsrik hudvårdsbehandling kräver en nära dialog med din hudterapeut. Vi värderar och uppmuntrar denna kommunikation högt, eftersom det gör det möjligt för oss att finjustera din behandlingsplan baserat på hudens respons genom processen. Din personliga terapeut är alltid redo att svara på dina frågor och justera rekommendationerna efterhand för att säkerställa optimala resultat. Din hud är unik, och vår flexibilitet garanterar att vi möter dess föränderliga behov på bästa sätt.</p>'
                        ),
                    ),

                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>

            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
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