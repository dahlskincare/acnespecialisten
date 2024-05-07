<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('gratis-hudkonsultation/models.php');
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
    image_small: 'bilder/behandlingar/424x456//gratis-hudkonsultation.webp',
    image_large: 'bilder/behandlingar/424x456//gratis-hudkonsultation.webp',
    image_alt: 'Gratis hudkonsultation',
    image_title: 'Gratis hudkonsultation',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation',
    consultation_url_label: 'Boka ett klinikbesök',
    consultation_url_title: 'Klicka här för att boka ett besök i någon av våra kliniker',
    booking_url: 'https://acnespecialisten.se/book?flow=consultation',
    booking_url_label: 'Boka online konsultation',
    booking_url_title: 'Klicka här för att boka en onlinekonsultation',
);

$floating_box = 'Vår kostnadsfria hudanalys passar alla, boka gratis hudkonsultation i Stockholm eller online. Vi identifierar din hudtyp och vilket hudproblem du har med hjälp av vår hudanalys.';

$nav_buttons = array(
    'about' => 'Översikt',
    'types' => 'Konsultationer',
);

$categories = array(
    new ConsultationCategory(
        id: 'problem-skin-consultation',
        name: 'Problemhy Konsultation',
        description: 'Här hittar du våra konsultationer som är anpassade för ditt hudproblem. Vi analyserar din hy och tar fram en behandlingsplan med rätt behandlingar och produkter för just din hudtyp.',
        types: array(
            new ConsultationType(
                title: 'Akne',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne'
            ),
            new ConsultationType(
                title: 'Akneärr',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars'
            ),
            new ConsultationType(
                title: 'Finnar',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples'
            ),
            new ConsultationType(
                title: 'Blandhy',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin'
            ),
            new ConsultationType(
                title: 'Pormaskar',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones'
            ),
            new ConsultationType(
                title: 'Rosacea',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea'
            ),
            new ConsultationType(
                title: 'Milier',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia'
            ),
            new ConsultationType(
                title: 'Perioral Dermatit',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PerioralDermatitis'
            ),
            new ConsultationType(
                title: 'Seborré',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea'
            ),
            new ConsultationType(
                title: 'Bristningar',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks'
            ),
            new ConsultationType(
                title: 'Födelsemärken',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles'
            ),
            new ConsultationType(
                title: 'Pigmentfläckar',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots'
            ),
            new ConsultationType(
                title: 'Mogen hy',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles'
            ),
            new ConsultationType(
                title: 'Rodnad',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Redness'
            ),
            new ConsultationType(
                title: 'Stora porer',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores'
            ),
            new ConsultationType(
                title: 'Torr & känslig hy',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin'
            ),
            new ConsultationType(
                title: 'Ytliga Blodkärl',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels'
            ),
            new ConsultationType(
                title: 'Operations- och skadeärr',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars'
            ),
            new ConsultationType(
                title: 'Melasma',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Melasma'
            ),
            new ConsultationType(
                title: 'Oönskat hår',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval'
            ),
        ),
        button_label: 'Se alternativ',
    ),
    new ConsultationCategory(
        id: 'service-consultation',
        name: 'Behandlings konsultation',
        description: 'Dessa konsultationer är för dig som redan vet vilken metod du är intresserad av att höra mer och komma igång med behandlingen av huden. Vi kommer att analysera huden noga och ta fram en skräddarsydd behandlingsplan för just din hy.',
        types: array(
            new ConsultationType(
                title: 'Kemisk Peeling',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling'
            ),
            new ConsultationType(
                title: 'Microneedling',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling'
            ),
            new ConsultationType(
                title: 'Laser mot problemhy',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem'
            ),
            new ConsultationType(
                title: 'Permanent hårborttagning',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval'
            ),
            new ConsultationType(
                title: 'IPL',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL'
            ),
            new ConsultationType(
                title: 'Microdemabrasion',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_MicroDermabrasion'
            ),
            new ConsultationType(
                title: 'Hydrodermabrasion',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_HydroDermabrasion'
            ),
            new ConsultationType(
                title: 'Dermabrasion',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Dermabrasion'
            ),
        ),
        button_label: 'Se alternativ',
    ),
    new ConsultationCategory(
        id: 'brand-consultation',
        name: 'Varumärkes konsultation',
        description: 'Våra varumärkes konsultationer är för dig som hört om ett specifikt märke eller maskin och är intresserad av att höra mer om hur den kan hjäpla dig att uppnå dina hudvårdsmål.',
        types: array(
            new ConsultationType(
                title: 'Skin Tech',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SkinTech'
            ),
            new ConsultationType(
                title: 'Powerlite Photonova',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PowerLite'
            ),
            new ConsultationType(
                title: 'HydraFacial',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial'
            ),
            new ConsultationType(
                title: 'Infuzion',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Infuzion'
            ),
            new ConsultationType(
                title: 'Dermapen',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen'
            ),
            new ConsultationType(
                title: 'PRX-T33',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33'
            ),
            new ConsultationType(
                title: 'Hybrid CO2',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2'
            ),
            new ConsultationType(
                title: 'Soprano Ice',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SopranoIce'
            ),
            new ConsultationType(
                title: 'Harmony XL Pro',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO'
            ),
            new ConsultationType(
                title: 'Rejuve Dye-VL',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve'
            ),
            new ConsultationType(
                title: 'Splendor X',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SplendorX'
            ),
            new ConsultationType(
                title: 'Photonova Powerlite',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Photonova'
            ),
            new ConsultationType(
                title: 'CryoPen',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen'
            ),
            new ConsultationType(
                title: 'Exceed',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Exceed'
            ),
        ),
        button_label: 'Se alternativ',
    ),
);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Gratis hudanalys och hudkonsultation i Stockholm och Online</title>
    <meta name="description" content="Boka en kostnadsfri hudkonsultation, våra erfarna hudterapeuter analyserar din hudtyp och skräddarsyr en behandlingsplan just för dig." class="l10n">
    <meta name="title" content="Gratis hudanalys och hudkonsultation i Stockholm eller Online" class="l10n">
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
                    <img src="bilder/behandlingar/358x274/gratis-hudkonsultation.webp" alt="Gratis Hudkonsultation" title="Gratis Hudkonsultation" width="358" height="274" />
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about" class="large-margin">
                    <h2 class="h500 l10n">Vad är en hudkonsultation?</h2>
                    <div class="infobox">
                        <div class="ib-header" onclick="Consultation.toggleContent(this.parentElement)">
                            <div class="l10n">Vi erbjuder alltid gratis hudkonsultation! (Värde 600 kronor)</div>
                            <?php icon('add'); ?>
                        </div>
                        <div class="ib-content zero-size">
                            <p class="p200 l10n">Våra konsultationer är gratis om man kommer på det bokade besöket. Vid uteblivet besök som inte avbokas senast 24 timmar innan den bokade tiden debiterar vi 500 kronor.</p>
                        </div>
                    </div>
                    <div class="mt-xl l10n">
                        <p class="p200">Upptäck nyckeln till en strålande och frisk hy med vår skräddarsydda hudkonsultation på AcneSpecialisten. Denna kostnadsfria tjänst är inte bara en analys av din hudtyp, utan ett omfattande första steg för att skräddarsy en behandlingsplan som är rätt för dig. Under konsultationen utforskar vi din hud i detalj - vi identifierar din hudtyp, eventuella hudproblem och skräddarsyr en behandling som är effektiv och anpassad för just dig.</p>
                        <p class="p200 mt-m">När du besöker oss för en konsultation får du träffa din personliga terapeut som blir som din personliga tränare (PT) för hudvård, vilken leder dig genom hela din behandlingsresa. Denna hudspecialist känner till ditt unika fall och skapar en skräddarsydd behandlingsplan och hjälper dig genom kontinuerlig uppföljning och direktkontakt via chatten i din profil. De är med dig hela vägen från start till mål och anpassar behandlingsprocessen för just dina behov.</p>
                        <p class="p200 mt-m">Vår expertis sträcker sig bortom grundläggande hudvård. Vi tar en helhetssyn på din hudhälsa och erbjuder råd och lösningar som omfattar allt från våra beprövade metoder till de senaste innovationerna inom hudvård. Vi introducerar dig till de mest effektiva produkterna och varumärkena i vår portfolio, noggrant utvalda för att matcha dina specifika behov.</p>
                        <p class="p200 mt-m">Boka din gratis hudkonsultation idag och ta det första steget mot en klarare, friskare hy. Kontakta oss på AcneSpecialisten eller använd vårt smidiga bokningssystem för att hitta en tid som passar dig. Vår dedikerade personal väntar på att ge dig en personlig upplevelse och hjälpa dig på din resa mot en problemfri hy.</p>
                    </div>
                </section>
                <section id="types" class="large-margin">
                    <h2 class="h500 mb-xs l10n">Konsultations typer</h2>
                    <hr class="is-hidden-desktop" />
                    <?php foreach ($categories as $category) { ?>
                        <?php include('gratis-hudkonsultation/widgets/consultation_category/consultation_category.php') ?>
                        <hr class="is-hidden-desktop" />
                    <?php } ?>
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
                        ),

                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
                </section>
                <!--Hudguide-->
                <section id="specialister" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Våra specialister</h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
                </section>
            </div>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
    <script src="/gratis-hudkonsultation/widgets/consultation_category/consultation_category.js"></script>
    <script src="/gratis-hudkonsultation/consultation.js"></script>
</body>

</html>