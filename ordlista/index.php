<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$glossary_items = array(
    'a' => array(
        /*new GlossaryItem(
            title: 'Bacne treatment',
            image_small: 'https://via.placeholder.com/102x102.webm',
            image_large: 'https://via.placeholder.com/200x200.webm',
            description: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud...",
            description_extended: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud..."
        ),*/
        new GlossaryItem(
            title: 'Aknebehandling',
            description: '<p class="p200">Detta är en behandling anpassad för acnehy och finnar och ger en riktigt bra start på behandlingen av huden. Under acnebehandlingen rengörs huden på djupet med hjälp av en vapozon som ångar upp huden. Hudterapeuten tar även hand om både finnar och pormaskar för att få bort talg och andra orenheter.
                <a class="b200 underline color-deep-sea-400" href="/problem/akne/aknebehandling">Läs mer och boka en Acnebehandling</a></p>',
        ),
        new GlossaryItem(
            title: 'Aknebölder',
            description: '<p class="p200">Dessa bölder kan förekomma hos hy med svår acne och uppstår när hårsäcken brister inåt. En stor böld uppstår då under huden som kan vara öm och smärtsam att ta bort. Du bör inte sticka eller skära i bölder då detta kan skapa ärr.
                <a class="b200 underline color-deep-sea-400" href="/problem/akne">Läs mer om Akne</a></p>',
        ),
    ),
    'b' => array(
        new GlossaryItem(
            title: 'Bota Problemhy',
            description: '<p class="p200">Tyvärr går det inte att bota problemhy, det är därför viktigt att använda produkter som effektivt behandlar och tar hand om huden och inte bara attackerar problemhyn. Roaccutan och andra preparat mot problemhy såsom acne ger temporär lindring och slutar verka så snart huden vänjer sig. </p>
                <p class="p200">Vi på AcneSpecialisten erbjuder en effektiv behandling mot problemhy och med hjälp av hudvårdsprodukterna kan du få din hud i balans för att effektivt bli av med problemhyn och motverka att problemet återuppstår. <a class="b200 underline color-deep-sea-400" href="/behandlingar/gratis-hudkonsultation">Läs mer om Gratis Hudkonsultation</a></p>',
        ),
        
    ),
    'c' => array(),
    'd' => array(
        new GlossaryItem(
            title: 'Dermapen Resultat',
            description: '<p class="p200">Här hittar du våra resultat för Dermapen.
                <a class="b200 underline color-deep-sea-400" href="/resultat/dermapen">Dermapen Resultat</a></p>',
        ),
        
    ),
    'e' => array(),
    'f' => array(),
    'g' => array(),
    'h' => array(),
    'i' => array(),
    'j' => array(),
    'k' => array(),
    'l' => array(),
    'm' => array(
        new GlossaryItem(
            title: 'Microneedling Resultat',
            description: '<p class="p200">Här hittar du våra resultat för Microneedling.
                <a class="b200 underline color-deep-sea-400" href="/resultat/microneedling">Microneedling Resultat</a></p>',
        ),
        
    ),
    'n' => array(),
    'o' => array(),
    'p' => array(),
    'q' => array(),
    'r' => array(),
    's' => array(),
    't' => array(),
    'u' => array(),
    'v' => array(),
    'w' => array(),
    'x' => array(),
    'y' => array(),
    'z' => array(),
    'å' => array(),
    'ä' => array(),
    'ö' => array(),
)
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Glossary</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/ordlista/glossary.css">
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
                    <h1 class="h600 l10n">Ordlista</h1>
                </section>
                <section id="letters">
                    <div id="letter-selector-scroller">
                        <div id="letter-selector">
                            <?php foreach ($glossary_items as $letter => $_items) { ?>
                                <div class="letter" id="<?php echo $letter ?>"><?php echo $letter ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <section id="glossary-items">
                    <?php foreach ($glossary_items as $letter => $items) { ?>
                        <div class="item-category" id="category-<?php echo $letter ?>">
                            <?php foreach ($items as $item) { ?>
                                <div class="item">
                                    <?php if (isset($item->image_large)) { ?>
                                        <picture>
                                            <source media="(max-width: 799px)" srcset="<?php echo $item->image_small ?>">
                                            <source media="(min-width: 800px)" srcset="<?php echo $item->image_large ?>">
                                            <img src="<?php echo $item->image_large ?>" alt="<?php echo $item->title ?>" title="<?php echo $item->title ?>" width="102" height="102" />
                                        </picture>

                                    <?php } ?>
                                    <h2><?php echo $item->title ?></h2>
                                    <p><?php echo $item->description ?></p>
                                    <?php if (isset($item->description_extended)) { ?>
                                        <div class="button text compact l10n" onclick="Glossary.onShowMoreClick(this)">Läs mer</div>
                                        <p class="extended zero-size"><?php echo $item->description_extended ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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
    <script type="text/javascript" src="ordlista/glossary.js"></script>
</body>

</html>