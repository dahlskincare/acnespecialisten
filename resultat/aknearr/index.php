<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Akneärr Resultat hos AcneSpecialisten | Framgångshistorier i Hudförbättring</title>
    <meta name="description" content="Utforska hur AcneSpecialisten framgångsrikt behandlar akneärr genom våra kundcase. Upptäck effekten av våra expertanpassade behandlingar som minimerar akneärr och förbättrar hudens utseende och struktur. Se våra imponerande före- och efterbilder som visar hur vi effektivt reducerar akneärr och återställer hudens jämnhet.">
    <meta name="keywords" content="Akneärrbehandling resultat, AcneSpecialisten framgångar, Hudförbättring, Jämn hudton, Reducera akneärr, Kundcase akneärr, Effektiv akneärrbehandling, Hudhälsans förbättring, Akneärr före- och efterbilder">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/category.css">
</head>

<?php

$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg',
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
$result_category =
    new ResultCategory(
        id: 'aknearr',
        title: 'Akneärr Resultat',
        description_1: 'Upptäck hur vi på AcneSpecialisten framgångsrikt omvandlar hud med akneärr. På denna sida presenterar vi en samling före- och efterbilder som visar resultaten av våra anpassade behandlingar för akneärr. Se hur vi återställer hudens jämnhet och minskar synligheten av ärr för en klarare och mer jämn hudton.',

        description_2: 'Är du redo att adressera dina akneärr och se en verklig förändring? Genom att boka en kostnadsfri konsultation hos AcneSpecialisten, tar du det första steget mot en hud utan akneärr. Vi är här för att vägleda dig mot en mer självsäker hud med våra effektiva och skräddarsydda behandlingsalternativ.',
    );

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$results_per_page = array(
    1 => array(
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-aknearr-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-aknearr-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-aknearr-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-aknearr-efter.jpg',
            url_title: 'Akneärr resultat',
            image_alt: 'Akneärr resultat',
            image_title: 'Akneärr resultat',
            age: 24,
            gender: 'Kvinna',
            problem: 'Akneärr',
            type: 'Mellan',
            treatment: new ResultTreatment(
                duration: '6 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Microneedling',
                        count: '6 tillfällen',
                    ),
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Amira Maqboul',
                ),
            )
        ),
    ),
);

$pages = sizeof($results_per_page);

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $result_category->title,
                description: $result_category->description_1,
                description_extended: $result_category->description_2,
                button_url: 'gratis-hudkonsultation',
                button_label: 'Boka en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($results_per_page[$page] as $result_customer) { ?>
                    <?php include('../widgets/result_customer_card/result_customer_card.php'); ?>
                <?php } ?>
                <div id="paginator">
                    <?php include('../../hudguide/widgets/paginator/paginator.php'); ?>
                </div>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
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
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
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