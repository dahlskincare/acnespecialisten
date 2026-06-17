<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Professionell vaxning i Stockholm – Omedelbar hårborttagning';
$seo_description = 'Upplev omedelbar hårborttagning med skonsam vaxning. Våra erfarna hudterapeuter ger dig silkeslen hud direkt. Boka din tid idag och känn skillnaden!';
$seo_keywords = 'vaxning, omedelbar hårborttagning, hårborttagning vaxning, vaxning stockholm, vaxa bort hår, brasiliansk vaxning, skonsam hårborttagning';

$seo_image = 'bilder/hudbehandlingar/424x456/vaxning.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Vaxning', '/hudbehandlingar/vaxning/'),
);

$model = new Service(
    title: 'Vaxning',
    duration: null,
    price: 'Från 295 kr',
    content: '<p class="p200">Vaxning är en snabb och effektiv metod för omedelbar hårborttagning. Behandlingen avlägsnar hårstråna från roten, vilket ger en slät och len hud som varar i flera veckor. Oavsett om du vill behandla ansikte, kropp eller intimområde erbjuder vi professionell vaxning anpassad efter dina behov.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/vaxning.webp',
    image_large: 'bilder/hudbehandlingar/424x456/vaxning.webp',
    image_alt: 'Vaxning',
    image_title: 'Vaxning',
    consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-brasiliansk-3477884',
    consultation_url_label: 'Brasiliansk',
    consultation_url_title: 'Boka tid för brasiliansk vaxning',
    booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-armhalor-3477880',
    booking_url_label: 'Armhålor',
    booking_url_title: 'Boka tid för vaxning av armhålor',
);

$floating_box = 'Omedelbar hårborttagning med vaxning.';

$description_title = 'Vad är vaxning?';
$description_text = '<p class="p200">Vaxning är en beprövad och effektiv metod för omedelbar hårborttagning som ger dig slät och len hud direkt efter behandlingen. Hårstråna avlägsnas från roten, vilket ger ett resultat som varar i flera veckor. Behandlingen passar för alla kroppsdelar, från ansikte och armar till ben, rygg och intimområden.</p>
<p class="p200 mt-m">Till skillnad från rakning som endast tar bort hårstrået vid ytan, ger vaxning ett slätt resultat som håller i flera veckor innan håret växer tillbaka. Metoden passar de flesta hud- och hårtyper och utförs med skonsamma tekniker som minimerar risken för irritation. Vaxning är ett utmärkt alternativ för dig som vill ha en snabb och effektiv lösning utan behov av avancerad teknik eller återhämtningstid.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/vaxning-forberedelser.webp',
        image_large: '/bilder/process/872x456/vaxning-forberedelser.webp',
        image_alt: 'Förberedelser inför vaxning',
        image_title: 'Förberedelser inför vaxning',
        content: '<p class="p200">För att få bästa möjliga resultat av din vaxning är det viktigt att följa några enkla förberedelser. Låt håret växa ut till cirka 0,5–1 cm innan behandlingen, detta gör att vaxet får bra fäste och att håren kan dras upp effektivt. Undvik att raka området minst 2 veckor innan.</p>
        <p class="p200 mt-m">Peela gärna huden ett par dagar innan din bokade tid, men undvik att smörja in området samma dag. Kom i rena, torra kläder och undvik att använda parfymerade produkter på området som ska behandlas. Dessa steg hjälper till att minska risken för irritation och säkerställer en skonsam och effektiv vaxningsupplevelse.</p>',
    ),
    'process' => new Article(
        title: 'Hur fungerar behandlingen?',
        image_small: '/bilder/process/358x272/vaxning-process.webp',
        image_large: '/bilder/process/872x456/vaxning-process.webp',
        image_alt: 'Hur fungerar vaxning?',
        image_title: 'Hur fungerar vaxning?',
        content: '<p class="p200">Vaxning är en snabb och effektiv metod för att ta bort oönskat hår. Under behandlingen appliceras varmt eller kallt vax på huden, som sedan avlägsnas tillsammans med hårstråna från roten. Resultatet är en slät hud som varar i flera veckor.</p>
        <p class="p200 mt-m">Direkt efter behandlingen kan du uppleva viss rodnad eller en lätt känsla av irritation, detta är helt normalt och brukar lägga sig snabbt. Eftersom håret tas bort från roten dröjer det flera veckor innan återväxten kommer tillbaka. Våra hudterapeuter arbetar med professionell teknik för att vaxningen ska vara så behaglig som möjligt och ge ett slätt resultat.</p>',
    ),
);

$treatment_areas_title = 'Områden vi behandlar';
$treatment_areas_text = null;

$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Hos oss kan du vaxa bort oönskad ansiktsbehåring snabbt och skonsamt, perfekt inför semestern eller vardagen. Välj mellan enskilda områden eller hela ansiktet.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Hela ansiktet',
                image_title: 'Hela ansiktet',
                title: 'Hela ansiktet',
                duration: '30 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-ansikte-fullface--3477859',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '10 min',
                price: '295 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-overlapp-3477891',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '10 min',
                price: '295 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-haka-3477886',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Överkropp',
        image_title: 'Överkropp',
        title: 'Överkropp',
        description: '<p class="p200">Få en slät och fräsch känsla med professionell vaxning av överkroppen. Välj mellan bröst, mage, armar, rygg eller armhålor, alltid snabbt och effektivt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armhalor.webp',
                image_alt: 'Armhålor',
                image_title: 'Armhålor',
                title: 'Armhålor',
                duration: '20 min',
                price: '495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-armhalor-3477880',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brost.webp',
                image_alt: 'Bröst',
                image_title: 'Bröst',
                title: 'Bröst',
                duration: '40 min',
                price: '695 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-brost-3477885',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/mage.webp',
                image_alt: 'Mage',
                image_title: 'Mage',
                title: 'Mage',
                duration: '40 min',
                price: '695 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-mage-3477887',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '40 min',
                price: '795 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-rygg-3477890',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armar.webp',
                image_alt: 'Armar (Hela)',
                image_title: 'Armar (Hela)',
                title: 'Armar (Hela)',
                duration: '40 min',
                price: '795 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-armar-hela--3477879',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armar.webp',
                image_alt: 'Armar (Halva)',
                image_title: 'Armar (Halva)',
                title: 'Armar (Halva)',
                duration: '30 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-armar-halva--3477877',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ben',
        image_title: 'Ben',
        title: 'Ben',
        description: '<p class="p200">Få lena ben med hjälp av effektiv vaxning. Välj mellan halva eller hela ben beroende på dina behov och önskemål.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hela-ben.webp',
                image_alt: 'Ben (Hela)',
                image_title: 'Ben (Hela)',
                title: 'Ben (Hela)',
                duration: '50 min',
                price: '1 195 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-ben-hela--3477882',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/halva-ben.webp',
                image_alt: 'Ben (Halva)',
                image_title: 'Ben (Halva)',
                title: 'Ben (Halva)',
                duration: '30 min',
                price: '895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-ben-halva--3477881',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Intim (Kvinna)',
        image_title: 'Intim (Kvinna)',
        title: 'Intim (Kvinna)',
        description: '<p class="p200">Vi erbjuder skonsam intimvaxning för kvinnor med fokus på komfort, hygien och ett lent resultat. Välj det alternativ som passar dig bäst.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brasiliansk-anus.webp',
                image_alt: 'Brasiliansk',
                image_title: 'Brasiliansk',
                title: 'Brasiliansk',
                duration: '40 min',
                price: '995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-brasiliansk-3477884',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/anus.webp',
                image_alt: 'Rumpa (Inre & Yttre)',
                image_title: 'Rumpa (Inre & Yttre)',
                title: 'Rumpa (Inre & Yttre)',
                duration: '30 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-rumpa-inre-yttre--3477888',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/bikinilinje.webp',
                image_alt: 'Bikinilinje',
                image_title: 'Bikinilinje',
                title: 'Bikinilinje',
                duration: '20 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/vaxning-bikinilinje-3477917',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/vaxning-eftervard.webp',
        image_large: '/bilder/process/872x456/vaxning-eftervard.webp',
        image_alt: 'Eftervård för vaxning',
        image_title: 'Eftervård för vaxning',
        content: '<p class="p200">Efter en vaxningsbehandling är huden ofta extra känslig och behöver omtanke för att återhämta sig optimalt. Det är vanligt att uppleva en lätt rodnad eller värmekänsla i det behandlade området, men detta brukar lägga sig inom några timmar.</p>
        <p class="p200 mt-m">Undvik att duscha varmt, träna intensivt eller använda parfymerade produkter de första 24 timmarna efter behandlingen. Vi rekommenderar att du bär löst sittande kläder och låter huden vila från sol, bastu och peeling i minst ett par dagar.</p>
        <p class="p200 mt-m">För att minska risken för inåtväxta hårstrån, kan du börja exfoliera försiktigt några dagar efter behandlingen och återfukta huden regelbundet. Om du har frågor eller upplever ovanlig irritation, tveka inte att kontakta oss. Rätt eftervård gör din vaxning både skönare och mer hållbar.</p>',
    )
);

$reviews_title = 'Omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur långt måste håret vara inför vaxning?',
            text: '<p class="p200">För bästa resultat bör håret vara cirka 0,5–1 cm långt, vilket motsvarar ungefär två till tre veckors återväxt. Då får vaxet ordentligt fäste och hårstråna kan dras med från roten. Är håret för kort fastnar inte vaxet, och är det för långt kan behandlingen kännas mer obehaglig.</p>'
        ),
        new Question(
            title: 'Gör vaxning ont?',
            text: '<p class="p200">Vaxning innebär ett kort ögonblick av obehag när vaxet dras av, men de flesta upplever det som fullt hanterbart. Känsligheten varierar beroende på område och individ. Vår hudterapeut arbetar snabbt och med skonsam teknik för att göra behandlingen så behaglig som möjligt.</p>'
        ),
        new Question(
            title: 'Hur länge håller resultatet?',
            text: '<p class="p200">Eftersom håret avlägsnas från roten håller resultatet betydligt längre än vid rakning, vanligtvis i tre till fyra veckor innan håret växer tillbaka. Vill du ha ett mer bestående resultat kan vi även berätta om våra övriga behandlingar vid din bokning.</p>'
        ),
        new Question(
            title: 'Utförs vaxningen av en hudterapeut?',
            text: '<p class="p200">Ja, all vaxning utförs av en av våra erfarna hudterapeuter. Du är därmed i trygga händer med någon som har stor vana av både ansikts-, kropps- och intimvaxning och som anpassar behandlingen efter din hud och dina behov.</p>'
        ),
        new Question(
            title: 'Kan jag vaxa om jag har känslig hud?',
            text: '<p class="p200">Vaxning passar de flesta hudtyper, även känslig hud. Vår hudterapeut väljer teknik och vax utifrån ditt område och din hud för att minimera risken för irritation. Har du en hudåkomma, använder starka hudvårdssyror eller andra läkemedel som påverkar huden är du välkommen att berätta det före behandlingen så att vi kan anpassa den.</p>'
        ),
        new Question(
            title: 'Vad bör jag tänka på inför och efter behandlingen?',
            text: '<p class="p200">Låt håret växa ut och undvik att raka området minst två veckor innan. Efter behandlingen är huden extra känslig, undvik därför sol, bastu, intensiv träning och parfymerade produkter det första dygnet. Exfoliera och återfukta huden regelbundet några dagar efter för att motverka inåtväxta hårstrån.</p>'
        ),
    )
);
$faq_view_more = 'Se fler frågor & svar';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/vaxning/" />

    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
    <meta property="og:title" content="<?php echo $seo_title ?>" />
    <meta property="og:description" content="<?php echo $seo_description ?>" />
    <meta property="og:image" content="<?php echo $seo_image ?>" />

    <meta property="twitter:title" content="<?php echo $seo_title ?>" />
    <meta property="twitter:description" content="<?php echo $seo_description ?>" />
    <meta property="twitter:image" content="<?php echo $seo_image ?>" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
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
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>
                <?php foreach ($top_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
                                <div class="big-type">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($combos) && isset($combos_title)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n"><?php echo $combos_title ?></h2>
                        <?php foreach ($combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        
                        <?php foreach ($treatment_areas as $index => $treatment_area) { ?>
                            <div class=" treatment-area" id="treatment-area-<?php echo $index ?>">
                                <?php if (isset($treatment_area->image_small)) { ?>
                                    <picture>
                                        <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                        <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                        <img loading="lazy" class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                    </picture>
                                <?php } ?>
                                <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                                <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                            <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                        </div>
                    </section>

                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                </section>
                <?php if (isset($faq_categories)) { ?>
                    <section id="faq" class="large-margin">
                        <h2 class="big l10n"><?php echo $faq_title ?></h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se fler frågor"><?php echo $faq_view_more ?></a>
                    </section>
                <?php } ?>

            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>