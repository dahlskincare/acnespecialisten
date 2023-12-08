<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Resultat hos AcneSpecialisten | Se Våra Framgångar i Hudvård</title>
    <meta name="description" content="Utforska framgångsrika resultat hos AcneSpecialisten, där vi använder vår expertis inom hudvård för att effektivt bekämpa acne och andra hudproblem. Våra kundcase visar tydligt hur våra skräddarsydda behandlingar leder till förbättrad hudhälsa och ökat välbefinnande.">
    <meta name="keywords" content="Acnebehandling resultat, Hudvårdsframgångar, AcneSpecialisten kundcase, Förbättrad hudhälsa, Effektiv hudvård, Resultatdriven behandling, Hudvårdsresultat">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

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
    )
);

$result_category =
    new ResultCategory(
        id: '',
        title: 'Resultat',
        description_1: 'Här hittar du resultaten från några av våra kunder som har kämpat med olika typer av problemhy. Vi har samlat före- och efterbilder som tydligt visar de märkbara förändringarna som våra skräddarsydda hudvårdsbehandlingar och produkter åstadkommer.',

        description_2: 'Om du är redo att förändra din hud och uppleva hur vi kan göra skillnad, boka din kostnadsfria konsultation idag. Påbörja din resa mot en problemfri hy!'

    );

$category_links = array(
    'akne' => 'Akne',
    'aknearr' => 'Akneärr',
    'pormaskar' => 'Pormaskar',
);

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$results_per_page = array(
    1 => array(
        new ResultCustomer(
            url: 'resultat/details-1',
            image_before_small: 'https://via.placeholder.com/178x238.webm',
            image_after_small: 'https://via.placeholder.com/178x238.webm',
            image_before_large: 'https://via.placeholder.com/372x496.webm',
            image_after_large: 'https://via.placeholder.com/372x496.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
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
            url: 'resultat/details-1',
            image_before_small: 'https://via.placeholder.com/178x238.webm',
            image_after_small: 'https://via.placeholder.com/178x238.webm',
            image_before_large: 'https://via.placeholder.com/372x496.webm',
            image_after_large: 'https://via.placeholder.com/372x496.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
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
    ),
    2 => array(
        new ResultCustomer(
            url: 'resultat/details-1',
            image_before_small: 'https://via.placeholder.com/178x238.webm',
            image_after_small: 'https://via.placeholder.com/178x238.webm',
            image_before_large: 'https://via.placeholder.com/372x496.webm',
            image_after_large: 'https://via.placeholder.com/372x496.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
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
    ),
    3 => array(
        new ResultCustomer(
            url: 'resultat/details-1',
            image_before_small: 'https://via.placeholder.com/178x238.webm',
            image_after_small: 'https://via.placeholder.com/178x238.webm',
            image_before_large: 'https://via.placeholder.com/372x496.webm',
            image_after_large: 'https://via.placeholder.com/372x496.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
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
                button_url: 'gratis-hudkonsultation',
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container mt-m is-hidden-desktop" id="filters-touch-container">
                <div id="filters-touch">
                    <?php foreach ($category_links as $link_id => $link_label) { ?>
                        <div class="filter-item">
                            <a href="/resultat/<?php echo $link_id ?>" class="b100 filter-item-label l10n">
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
                            <a href="/resultat/<?php echo $link_id ?>" class="filter-item">
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
                    <?php include('widgets/result_customer_card/result_customer_card.php'); ?>
                <?php } ?>
                <div id="paginator">
                    <?php include('../hudguide/widgets/paginator/paginator.php'); ?>
                </div>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Ready to start your own journey?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
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
                    <div class="h500 l10n">Questions & answers</div>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
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
                    <div class="h500 l10n">Our specialists</div>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialister" title="View all specialists">View all specialists</a>
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
    <script src="resultat/results.js"></script>
</body>

</html>