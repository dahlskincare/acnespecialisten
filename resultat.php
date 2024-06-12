<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>Resultat Från AcneSpecialisten | Före och Efter bilder</title>
    <meta name="title" content="Resultat Från AcneSpecialisten | Före och Efter bilder" class="l10n">
    <meta name="description" content="Före  och efter bilder på våra kunders resultat som har använt AcneSpecialistens behandlingsmetoder.">
    <meta name="keywords" content="Acnespecialisten resultat, acnespecialisten före efter">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php
$path_segments = array(
    new PathSegment('Resultat', 'resultat.php'),
);

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
        description_1: 'Här hittar du resultaten från några av våra kunder som har kämpat med olika typer av hudproblem. Vi har samlat före och efter bilder som tydligt visar de märkbara förändringarna som våra skräddarsydda hudvårdsbehandlingar och produkter åstadkommer.',

        description_2: 'Om du är redo att förändra din hud och uppleva hur vi kan göra skillnad, boka din kostnadsfria konsultation idag. Påbörja din resa mot en problemfri hy!',

    );

$category_links = array(
    'resultat-acne.php' => 'Akne',
    'resultat-acnearr.php' => 'Akneärr',
    'resultat-finnar-arr.php' => 'Ärr från Finnar',
    'resultat-pormaskar.php' => 'Pormaskar',
    'resultat-rosacea.php' => 'Rosacea',
    'resultat-stora-porer.php' => 'Stora Porer',
    'resultat-ytliga-blodkarl.php' => 'Ytliga Blodkärl',
);

$results = [
    new LabelImage(
        image_url: 'https://via.placeholder.com/426x224.webp',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '<a href="#">Severe Acne</a> treated with <a href="#">Acne Treatment</a> and <a href="#">Products for Acne</a>',
    ),
    new LabelImage(
        image_url: 'https://via.placeholder.com/200x100.webp',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '<a href="#">Severe Acne</a> treated with <a href="#">Acne Treatment</a> and <a href="#">Products for Acne</a>',
    ),
    new LabelImage(
        image_url: 'https://via.placeholder.com/50x10.webp',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: null,
    ),
    new LabelImage(
        image_url: 'https://via.placeholder.com/600x250.webp',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '',
    ),
];

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $result_category->title,
                description: $result_category->description_1,
                description_extended: $result_category->description_2,
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
                <?php foreach ($results as $result) { ?>
                    <div class="result-card">
                        <img src="<?php echo $result->image_url ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->image_title ?>" />
                        <div class="result-card-content"><?php echo $result->content ?></div>
                    </div>
                <?php } ?>
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
                <div class="h500 l10n">Omdömen</div>
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
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut" title="Se alla specialister">Se alla hudterapeuter</a>
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