<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('includes/models/service.php');
include_once('includes/models/path_segment.php');

$path_segments = array(
    new PathSegment('Gratis hudkonsultation', '/gratis-hudkonsultation.php'),
);

$model = new Service(
    title: 'Gratis hudkonsultation eller hudanalys online',
    duration: null,
    price: null,
    content: 'Vår kostnadsfria hudanalys passar alla, boka gratis hudkonsultation i Stockholm eller online. Vi identifierar din hudtyp och vilket hudproblem du har med hjälp av vår hudanalys.',
    image_small: 'bilder/hudbehandlingar/358x274//gratis-hudkonsultation.webp',
    image_large: 'bilder/hudbehandlingar/424x456//gratis-hudkonsultation.webp',
    image_alt: 'Gratis hudkonsultation',
    image_title: 'Gratis hudkonsultation',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation',
    consultation_url_label: 'Boka klinikbesök',
    consultation_url_title: 'Klicka här för att boka ett besök i någon av våra kliniker',
    booking_url: 'https://boka.acnespecialisten.se?flow=consultation',
    booking_url_label: 'Boka onlinebesök',
    booking_url_title: 'Klicka här för att boka en onlinekonsultation',
);

$floating_box = 'Vår kostnadsfria hudanalys passar alla, boka gratis hudkonsultation i Stockholm eller online. Vi identifierar din hudtyp och vilket hudproblem du har med hjälp av vår hudanalys.';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/gratis-hudkonsultation.php" />

    <title class="l10n">Gratis Hudkonsultation och Hudanalys i Stockholm och Online</title>
    <meta name="title" content="Gratis Hudkonsultation och Hudanalys i Stockholm och Online" class="l10n">
    <meta name="description" content="Boka en kostnadsfri hudkonsultation, våra erfarna hudterapeuter analyserar din hudtyp och skräddarsyr en personlig behandlingsplan just för dig." class="l10n">
    <meta name="keywords" content="hudkonsultation, gratis hudkonsultation stockholm, hudanalys" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/gratis-hudkonsultation/consultation.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/treatment_floater.php'); ?>
    <main>
        <section id="header">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/treatment_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="mt-m is-hidden-desktop">
                    <img src="bilder/hudbehandlingar/358x274/gratis-hudkonsultation.webp" alt="Gratis Hudkonsultation" title="Gratis Hudkonsultation" width="358" height="274" />
                </section>
                <section id="about" class="large-margin">
                    <h2 class="h500 l10n">Vad är en hudkonsultation?</h2>
                    <div class="infobox">
                        <div class="ib-header" onclick="Consultation.toggleContent(this.parentElement)">
                            <div class="l10n">Vi erbjuder alltid gratis hudkonsultation! (Värde 600 kronor)</div>
                            <?php icon('arrow-down'); ?>
                        </div>
                        <div class="ib-content zero-size">
                            <p class="p200 l10n">Våra konsultationer är gratis om man kommer på det bokade besöket. Vid uteblivet besök som inte avbokas senast 24 timmar innan den bokade tiden debiterar vi 500 kronor.</p>
                        </div>
                    </div>
                    <div class="mt-xl l10n">
                        <p class="p200">Upptäck nyckeln till en strålande och frisk hy med vår skräddarsydda hudkonsultation på AcneSpecialisten. Denna kostnadsfria tjänst är inte bara en analys av din hudtyp, utan ett omfattande första steg för att skräddarsy en behandlingsplan som är rätt för dig. Under konsultationen utforskar vi din hud i detalj - vi identifierar din hudtyp, eventuella hudproblem och skräddarsyr en behandling som är effektiv och anpassad för just dig.</p>
                        <p class="p200 mt-m">När du besöker oss för en konsultation får du träffa din personliga terapeut som blir som din personliga tränare (PT) för hudvård, vilken leder dig genom hela din behandlingsresa. Denna hudspecialist känner till ditt unika fall och skapar en skräddarsydd behandlingsplan och hjälper dig genom kontinuerlig uppföljning och direktkontakt via chatten i din profil. De är med dig hela vägen från start till mål och anpassar behandlingsprocessen för just dina behov.</p>
                        <p class="p200 mt-m">Vår expertis sträcker sig bortom grundläggande hudvård. Vi tar en helhetssyn på din hudhälsa och erbjuder råd och lösningar som omfattar allt från våra beprövade metoder till de senaste innovationerna inom hudvård. Vi introducerar dig till de mest effektiva produkterna och varumärkena i vår portfolio, noggrant utvalda för att matcha dina specifika behov.</p>
                        <p class="p200 mt-m">Boka din gratis hudkonsultation idag och ta det första steget mot en klarare, friskare hy. Kontakta oss på AcneSpecialisten eller använd vårt smidiga bokningssystem för att hitta en tid som passar dig. Våra <a class="b200 underline color-deep-sea-400" href="/" title="Mer information om hudterapeuter i Stockholm">hudterapeuter i Stockholm</a> är redo att ge dig en personlig upplevelse och hjälpa dig på din resa mot en problemfri hy.</p>
                    </div>
                </section>
                <section id="types" class="large-margin">
                    <h2 class="h500 mb-xs l10n">Konsultationer efter</h2>
                    <div class="consultation-type">
                        <div class="consultation-type-text">
                            <h3 class="l10n">Problem</h3>
                            <p class="l10n">Här hittar du våra konsultationer som är anpassade för ditt hudproblem. Vi analyserar din hy och tar fram en behandlingsplan med rätt behandlingar och produkter för just din hudtyp.</p>
                        </div>
                        <div class="consultation-type-button">
                            <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem" title="Boka problemhy konsultation" class="button expand">Välj problem</a>
                        </div>
                    </div>
                    <div class="consultation-type">
                        <div class="consultation-type-text">
                            <h3 class="l10n">Metod</h3>
                            <p class="l10n">Dessa konsultationer är för dig som redan vet vilken behandlingsmetod du är intresserad av att höra mer och komma igång med behandlingen av huden. Vi kommer att analysera huden noga och ta fram en skräddarsydd behandlingsplan för just din hy.</p>
                        </div>
                        <div class="consultation-type-button">
                            <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service" title="Boka behandlings konsultation" class="button expand">Välj metod</a>
                        </div>
                    </div>
                    <div class="consultation-type">
                        <div class="consultation-type-text">
                            <h3 class="l10n">Varumärke</h3>
                            <p class="l10n">Våra varumärkes konsultationer är för dig som hört om ett specifikt märke eller maskin och är intresserad av att höra mer om hur den kan hjäpla dig att uppnå dina hudvårdsmål.</p>
                        </div>
                        <div class="consultation-type-button">
                            <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand" title="Boka varumärkes konsultation" class="button expand">Välj varumärke</a>
                        </div>
                    </div>
                </section>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
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
                                title: 'Hur gör man en hudanalys?',
                                text: '<p class="p200">För att göra en hudanalys kan du välja mellan att besöka en av våra kliniker i Stockholm eller boka en tid online. När din bokning är bekräftad, kommer du att matchas med en personlig hudterapeut – tänk på dem som din hudvårdspersonliga tränare. Under konsultationen kommer du att få ta bilder av din hud, diskutera dina hudproblem och mål, och tillsammans med din terapeut utarbeta en skräddarsydd behandlingsplan. Denna initiala konsultation är helt kostnadsfri, förutsatt att du dyker upp på din bokade tid. Det är viktigt att betona att det inte finns något köptvång; syftet är att erbjuda dig en personlig åtgärdsplan.</p>'
                            ),
                            new Question(
                                title: 'Varför är konsultationen kostnadsfri?',
                                text: '<p class="p200">Vi erbjuder gratis konsultationer för att göra professionell hudvård tillgänglig för alla, utan att du behöver binda dig till något. Detta innovativa tillvägagångssätt har varit en del av vår filosofi i nästan 30 år, vilket gör oss till pionjärer inom branschen för att tillhandahålla denna service.</p>'
                            ),
                            new Question(
                                title: 'Måste jag köpa något under eller efter konsultationen?',
                                text: '<p class="p200">Absolut inte. Det finns inget köptvång eller dolda avgifter associerade med vår konsultation. Mötet är helt och hållet gratis, där du får en personanpassad rekommendation och behandlingsplan utifrån din hudanalys.</p>'
                            ),
                            new Question(
                                title: 'Vad är skillnaden mellan en konsultation på klinik och en online?',
                                text: '<p class="p200">Det finns ingen skillnad i kvaliteten på service mellan en konsultation på klinik och en online. Vi har infört onlinekonsultationer för att kunna erbjuda vår expertis till kunder över hela Sverige. Oavsett vilket alternativ du väljer, garanterar vi en personlig och professionell service. För att genomföra eventuella behandlingar, välkomnar vi dig sedan till en av våra kliniker i Stockholm.</p>'
                            ),
                            new Question(
                                title: 'Hur fungerar tekniken för online-konsultationen?',
                                text: '<p class="p200">För online-konsultationer använder vi olika metoder beroende på din enhet. Om du har iOS (iPhone/iPad) ringer vi upp dig via vanligt videosamtal på din bokade tid. För Android-användare skickar vi en länk via SMS i samband med den bokade tiden. Se till att ange ditt telefonnummer korrekt när du bokar så att vi kan kontakta dig på rätt sätt.</p>'
                            ),
                        ),

                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
                </section>
                <section id="specialister" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Våra specialister</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
                </section>
            </div>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
    <script src="/gratis-hudkonsultation/consultation.js"></script>
</body>

</html>