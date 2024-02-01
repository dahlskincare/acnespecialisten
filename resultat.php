<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Resultat hos AcneSpecialisten | Före- och Efterbilder</title>
    <meta name="title" content="Resultat hos AcneSpecialisten | Före- och Efterbilder" class="l10n">
    <meta name="description" content="Upptäck AcneSpecialistens framgångar genom före- och efterbilder. Se hur vår expertis inom hudvård bidrar till betydande resultat i kampen mot akne och andra hudproblem. Våra kundcase illustrerar effekterna av våra skräddarsydda behandlingar.">
    <meta name="keywords" content="Före och efter acnebehandling, Hudvårdsresultat, AcneSpecialisten framgångar, Kundcase hudvård, Förbättrad hudkvalitet, Effektiv behandling, Hudvårdsbehandlingar resultat">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php

$consultation_url = 'gratis-hudkonsultation.php';

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

$result_category =
    new ResultCategory(
        id: 'resultat',
        title: 'Resultat',
        description_1: 'Här hittar du resultaten från några av våra kunder som har kämpat med olika typer av hudproblem. Vi har samlat före- och efterbilder som tydligt visar de märkbara förändringarna som våra skräddarsydda hudvårdsbehandlingar och produkter åstadkommer.',

        description_2: 'Om du är redo att förändra din hud och uppleva hur vi kan göra skillnad, boka din kostnadsfria konsultation idag. Påbörja din resa mot en problemfri hy!',

    );

$category_links = array(
    'resultat-acne.php' => 'Akne',
    'resultat-acnearr.php' => 'Akneärr',
    'resultat-blandhy.php' => 'Blandhy',
    'resultat-finnar-arr.php' => 'Ärr från Finnar',
    'resultat-finnar.php' => 'Finnar',
    'resultat-pormaskar.php' => 'Pormaskar',
    'resultat-rosacea.php' => 'Rosacea',
    'resultat-ytliga-blodkarl.php' => 'Ytliga Blodkärl',
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
            image_before_small: '/bilder/resultat/178x238/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-akne-efter-1.jpg',
            url_title: 'Akne resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat svår akne',
            image_title: 'Svår akne resultat',
            age: 21,
            gender: 'Kvinna',
            problem: 'Akne',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '3 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Aknebehandlingar',
                        count: '5 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår akne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Cazzandra Lindberg',
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-akne-efter-2.jpg',
            url_title: 'Akne resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat svår akne',
            image_title: 'Svår akne resultat',
            age: 18,
            gender: 'Kvinna',
            problem: 'Akne',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '2 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Aknebehandlingar',
                        count: '3 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår akne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Julia Eklund',
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-rosacea-efter.jpg',
            url_title: 'Rosacea resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat svår rosacea',
            image_title: 'Svår rosacea resultat',
            age: 33,
            gender: 'Kvinna',
            problem: 'Rosacea',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '4 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Rosaceabehandlingar',
                        count: '3 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår Rosacea',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Julia Eklund',
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-ytliga-blodkarl-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-ytliga-blodkarl-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-ytliga-blodkarl-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-ytliga-blodkarl-efter.jpg',
            url_title: 'Ytliga Blodkärl resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat ytliga blodkärl',
            image_title: 'Ytliga blodkärl resultat',
            age: 47,
            gender: 'Kvinna',
            problem: 'Ytliga Blodkärl',
            type: 'Mellan',
            treatment: new ResultTreatment(
                duration: '4 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'IPL mot Ytliga Blodkärl',
                        count: '5 tillfällen'
                    ),
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Cazzandra Lindberg',
                ),
            )
        ),
    ),
    2 => array(
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-aknearr-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-aknearr-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-aknearr-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-aknearr-efter.jpg',
            url_title: 'Akneärr resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat akneärr',
            image_title: 'Akneärr resultat',
            age: 24,
            gender: 'Kvinna',
            problem: 'Akneärr',
            type: 'Atrofiska',
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
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-arr-fran-finnar-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-arr-fran-finnar-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-arr-fran-finnar-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-arr-fran-finnar-efter.jpg',
            url_title: 'Ärr från finnar resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat akneärr',
            image_title: 'Akneärr resultat',
            age: 22,
            gender: 'Kvinna',
            problem: 'Ärr från finnar',
            type: 'Atrofiska',
            treatment: new ResultTreatment(
                duration: '5 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Dermapen',
                        count: '4 tillfällen',
                    ),
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Julia Eklund',
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-pormaskar-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-pormaskar-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-pormaskar-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-pormaskar-efter.jpg',
            url_title: 'Resultat mot pormaskar',
            image_alt: 'Före och efterbilder på kvinna som behandlat pormaskar',
            image_title: 'Pormaskar resultat',
            age: 24,
            gender: 'Kvinna',
            problem: 'Pormaskar',
            type: 'Mellan',
            treatment: new ResultTreatment(
                duration: '3 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Portömning',
                        count: '3 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot mellan Pormaskar',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Jennifer Messner',
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-finnar-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-finnar-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-finnar-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-finnar-efter.jpg',
            url_title: 'Resultat mot finnar',
            image_alt: 'Före och efterbilder på kvinna som behandlat finnar',
            image_title: 'Finnar resultat',
            age: 18,
            gender: 'Kvinna',
            problem: 'Finnar',
            type: 'Mellan',
            treatment: new ResultTreatment(
                duration: '3 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Ansiktsbehandling mot finnar',
                        count: '3 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot mellan Finnar',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Sally Johansson',
                ),
            )
        ),
    ),
    3 => array(
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/178x238/resultat-blandhy-fore.jpg',
            image_after_small: '/bilder/resultat/178x238/resultat-blandhy-efter.jpg',
            image_before_large: '/bilder/resultat/372x496/resultat-blandhy-fore.jpg',
            image_after_large: '/bilder/resultat/372x496/resultat-blandhy-efter.jpg',
            url_title: 'Blandhy resultat',
            image_alt: 'Före och efterbilder på kvinna som behandlat finnar',
            image_title: 'Finnar resultat',
            age: 19,
            gender: 'Kvinna',
            problem: 'Blandhy',
            type: 'Mellan',
            treatment: new ResultTreatment(
                duration: '3 månader',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Portömning',
                        count: '3 tillfällen',
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Startpaket mot mellan Blandhy',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Vilma Libom',
                ),
            )
        ),
    )
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
                button_url: $consultation_url,
                button_label: 'Boka en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container mt-m is-hidden-desktop" id="filters-touch-container">
                <div id="filters-touch">
                    <?php foreach ($category_links as $link_id => $link_label) { ?>
                        <div class="filter-item">
                            <a href="/<?php echo $link_id ?>" class="b100 filter-item-label l10n">
                                <?php echo $link_label ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="container is-hidden-touch">
                <div id="filters-desktop">
                    <div id="filter-items">
                        <?php foreach ($category_links as $link_id => $link_label) { ?>
                            <a href="/<?php echo $link_id ?>" class="filter-item">
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $link_label ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-previous">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-next">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($results_per_page[$page] as $result_customer) { ?>
                    <?php include('resultat/widgets/result_customer_card/result_customer_card.php'); ?>
                <?php } ?>
                <div id="paginator">
                    <?php include('hudguide/widgets/paginator/paginator.php'); ?>
                </div>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php $faq_categories = array(
                        'Generellt' => array(
                            new Question(
                                title: 'När börjar jag se resultat efter era ansiktsbehandlingar?',
                                text: '<p class="p200">De första förbättringarna kan ofta märkas inom de första veckorna efter behandlingen. Fullständiga resultat kan dock ta längre tid att uppnå, beroende på behandlingens natur och individens hudtillstånd.</p>'
                            ),
                            new Question(
                                title: 'Hur långvariga är resultaten från era behandlingar?',
                                text: '<p class="p200">Det beror på vilket problem som behandlas. Hudproblem såsom akne, rosacea och pormaskar måste behandlas löpande. Befintliga Pigmentfläckar, ytliga blodkärl och hår tas bort permanent, dock kan man inte motverka uppkomsten av nya.</p>'
                            ),
                            new Question(
                                title: 'Hur följer ni upp och mäter framgång i behandlingarna?',
                                text: '<p class="p200">Vi dokumenterar varje kunds framsteg genom att ta bilder vid den första konsultationen, vid varje uppföljande besök, och slutligen när det önskade resultatet har uppnåtts. Dessa bilder jämförs sedan för att visa hudens förändring och framsteg från start till slut.</p>'
                            ),
                            new Question(
                                title: 'Förbättras resultaten om jag kombinerar olika behandlingar?',
                                text: '<p class="p200">Absolut. För att effektivt hantera hudproblem som akne, rosacea och pormaskar rekommenderar vi en kombination av specifikt utvalda hudvårdsprodukter och skräddarsydda ansiktsbehandlingar. Denna strategi syftar till att inte bara behandla befintliga hudåkommor utan också förebygga framtida utbrott.</p>'
                            ),
                            new Question(
                                title: 'Ger era behandlingar samma resultat för alla hudtyper?',
                                text: '<p class="p200">Medan vi strävar efter att uppnå de bästa möjliga resultaten för alla våra kunder, skräddarsys behandlingsplanen för varje individ baserat på deras unika hudtyp och behov. Detta tillvägagångssätt garanterar att varje person får den mest effektiva behandlingen anpassad för att maximera resultaten för just deras hud.</p>'
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
    <script src="resultat/results.js"></script>
</body>

</html>