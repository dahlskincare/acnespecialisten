<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>Rosacea Resultat | Hudförbättring och Lindring</title>
    <meta name="description" content="Se resultatbilder från våra rosacea behandlingar. AcneSpecialisten har lång erfarenhet av att behandla hudutslag och rosacea">
    <meta name="keywords" content="rosacea bilder, rosacea näsa bilder, bilder på hudutslag, bilder hudutslag, utslag i ansiktet bilder">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php

$path_segments = array(
    new PathSegment('Resultat', '/resultat.php'),
    new PathSegment('Rosacea', '/resultat-rosacea.php'),
);

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
        id: 'rosacea',
        title: 'Rosacea Resultat',
        description_1: 'Utforska hur AcneSpecialisten framgångsrikt behandlar rosacea. Denna sida samlar före- och efter bilder som visar effektiva resultat av våra specialanpassade behandlingar. Se hur vi minskar rodnad och lugnar huden, vilket bidrar till att förbättra hudens hälsa och övergripande utseende för personer med rosacea.',

        description_2: 'Redo att ta itu med din rosacea och uppnå en lugnare hudton? Boka en kostnadsfri konsultation hos AcneSpecialisten och börja din resa mot en mer balanserad och hälsosam hud. Våra skräddarsydda behandlingsplaner är utformade för att effektivt hantera symtomen på rosacea och ge dig en klarare och jämnare hudton.',
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
        content: '<a href="#">Severe Acne</a> treated with <a href="#">Acne Treatment</a> and <a href="#">Products for Acne</a>',
    ),
    new LabelImage(
        image_url: 'https://via.placeholder.com/600x250.webp',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '<a href="#">Severe Acne</a> treated with <a href="#">Acne Treatment</a> and <a href="#">Products for Acne</a>',
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
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($results as $result) { ?>
                    <div class="result-card">
                        <img src="<?php echo $result->image_url ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->image_title ?>" />
                        <div class="result-card-content"><?php echo $result->content ?></div>
                    </div>
                <? } ?>
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
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
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