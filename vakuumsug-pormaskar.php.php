<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Effektiv Vakuumsugning av Pormaskar';
$seo_description = 'Upptäck hemligheten till en klarare hud med vår vakuumsugningsteknik som effektivt rengör porerna, exfolierar, avlägsnar orenheter och återfuktar.';
$seo_keywords = 'vakuumsug pormaskar, djuprengöring porer, återfuktning hudvård, Stockholm';

$seo_image = 'images/treatments/large/hydrafacial.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/behandlingar.php'),
    new PathSegment('HydraFacial', '/hydrafacial.php'),
);

$model = new Service(
    title: 'Vakuumsug Pormaskar',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Vi suger ut pormaskarna effektivt med hjälp av vakuum, töm dina porer effektivt.</p>',
    image_small: 'bilder/varumarken/358x274/hydrafacial.webp',
    image_large: 'bilder/varumarken/424x456/hydrafacial.webp',
    image_alt: 'Vakuumsug Pormaskar',
    image_title: 'Vakuumsug Pormaskar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1995 kr',
            savings: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '4995 kr',
            savings: 'Spara 990 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '7995 kr',
            savings: 'Spara 1980 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        )
    ),
);

$floating_box = 'Vi suger ut pormaskarna effektivt med hjälp av vakuum, töm dina porer effektivt.';

$nav_buttons = array(
    'about' => 'vakuumsug pormaskar',
    'preparing' => 'Förberedelser',
    'process' => 'Processen',
    'types' => 'Typer',
    'treatment-areas' => 'Områden',
    'aftercare' => 'Eftervård',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister',
    'service-brands' => 'Märken',
);

$description_title = 'Vad är vakuumsugning av pormaskar?';
$description_text = '<p class="p200">Vakuumsugning av pormaskar är en effektiv hudvårdsbehandling som djuprengör huden genom att kombinera rengöring, exfoliering, avlägsnande av orenheter och intensiv återfuktning. Behandlingen använder avancerad teknik för att skonsamt suga ut smuts, olja och döda hudceller från porerna samtidigt som den infuserar huden med närande ingredienser som antioxidanter, peptider och hyaluronsyra.</p>
<p class="p200 mt-m">På vår klinik skräddarsys varje behandling för att möta specifika hudbehov, vilket gör det möjligt att effektivt adressera en rad hudbekymmer som åldrandetecken inklusive fina linjer och rynkor, acne, förstorade porer och ojämn hudton. Vakuumsugning av pormaskar förbättrar inte bara hudens yttre egenskaper genom att minska orenheter och främja en jämnare hudton, utan bidrar även till hudens övergripande välbefinnande genom att öka hydreringen. Denna behandling är idealisk för den som söker en omedelbar förbättring av hudens utseende utan någon återhämtningstid.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur fungerar en vakuumsugning för pormaskar?',
        image_small: '/bilder/process/358x272/hydrafacial-process.webp',
        image_large: '/bilder/process/872x456/hydrafacial-process.webp',
        image_alt: 'Behandlingsprocessen för vakuumsug av pormaskar',
        image_title: 'Behandlingsprocessen för vakuumsug av pormaskar',
        content: '<p class="p200">Behandlingen med vakuumsug för pormaskar följer en noggrant planerad process som går igenom flera steg för att djuprengöra och återfukta huden.</p>
    <p class="p200 mt-m">Steg 1 - Djuprengöring och Exfoliering<br /> Behandlingen inleds med en djupgående rengöring följt av en skonsam exfoliering. Detta förbereder huden genom att öppna upp porerna och ta bort döda hudceller, vilket gör den redo för nästa fas.</p>
    <p class="p200 mt-m">Steg 2 - Mild Peeling<br /> Här appliceras en mild peeling som syftar till att lösa upp orenheter och smuts inuti porerna utan att irritera huden.</p>
    <p class="p200 mt-m">Steg 3 - Extraktion av Orenheter<br /> Med hjälp av specifik vakuumsugningsteknik rensas porerna från djupet och orenheter samt överflödigt sebum extraheras effektivt, vilket bidrar till en klarare och mer jämn hudton.</p>
    <p class="p200 mt-m">Steg 4 - Intensiv Återfuktning<br /> Slutligen får huden en riklig återfuktning genom en infusion av närande ingredienser som antioxidanter och hyaluronsyra. Denna fas av behandlingen ger intensiv hydrering och näringsboost, vilket stärker hudens skyddsbarriär och lämnar den mjuk och återfuktad.</p>
    <p class="p200 mt-m">Varje steg i denna behandling är designat för att maximera hudens hälsa och lyster, erbjuder en omfattande vård som inte bara förbättrar hudens utseende utan också dess kvalitet utan någon nedtid.</p>',
    ),
);

$types_title = 'Olika metoder för vakuumsugning av pormaskar';
$types_description = '';
$big_types = array(
    new Service(
        title: 'Vakuumsug - Standard',
        duration: '40 min',
        price: null,
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Vakuumsug - Standard',
        image_title: 'Vakuumsug - Standard',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Vakuumsug mot pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Vakuumsug kombinerat med Glycal Acid Peel är en specialdesignad behandling för att målinriktat bekämpa hudproblem som pormaskar. Genom att djuprengöra huden och specifikt rikta in sig på att minska överproduktionen av talg, tar denna anpassade behandling itu med en av de främsta orsakerna till dessa vanliga hudtillstånd.</p>
        <p class="p200 mt-m">Om du letar efter en grundlig lösning för dina hudproblem, är Glycal Acid Peel det perfekta valet. Denna behandling erbjuder mer än bara en yttre rengöring; den arbetar intensivt för att rena huden inifrån och ut. Efter behandlingen kommer du att märka en betydande förbättring – en renare, fräschare hud som ser och känns förnyad, befriad från de mest typiska tecknen på pormaskar.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'Vakuumsug mot pormaskar',
        image_title: 'Vakuumsug mot pormaskar',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Inför din vakuumsugningsbehandling mot pormaskar',
        image_small: null,
        image_large: null,
        image_alt: 'Inför en vakuumsugningsbehandling mot pormaskar',
        image_title: 'Inför en vakuumsugningsbehandling mot pormaskar',
        content: '<p class="p200">För att din hud ska vara optimalt förberedd inför en vakuumsugningsbehandling mot pormaskar, är det viktigt att följa några förberedande steg. Dessa inkluderar att undvika:</p>
        <p class="p200 mt-m">- Användning av starka syror och intensiva exfolierande behandlingar under de två veckorna före din behandling.</p>
        <p class="p200 mt-m">- Direkt solljussexponering minst tre dygn innan din behandling.</p>
        <p class="p200 mt-m">- Användning av kraftfulla hudvårdsprodukter två dagar före din behandling.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård för vakuumsugning mot pormaskar',
        image_small: null,
        image_large: null,
        image_alt: 'Eftervård för vakuumsugning mot pormaskar',
        image_title: 'Eftervård för vakuumsugning mot pormaskar',
        content: '<p class="p200">Efter att ha genomgått en vakuumsugningsbehandling mot pormaskar kommer du att märka en omedelbar förbättring av hudens renhet och lyster. För att maximera behandlingens resultat och minimera irritation, är det viktigt att:</p>
        <p class="p200 mt-m">- Undvika solen i minst 72 timmar för att skydda din behandlade hud.</p>
        <p class="p200 mt-m">- Avstå från att använda starka hudvårdsprodukter under de första 48 timmarna efter behandlingen, för att ge din hud chans att återhämta sig naturligt.</p>
        <p class="p200 mt-m">Att följa dessa enkla riktlinjer hjälper till att säkerställa optimal återhämtning för din hud efter behandlingen, och du kommer att kunna njuta av dina resultat längre.</p>',
    ),
);

$service_brands_title = 'Märken för vakuumsugning av pormaskar';
$service_brands_text = '<p class="p200">Vi använder HydraFacial för att effektivt suga upp pormaskarna.</p>';
$service_brands = array(

    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '5 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Cazzandra Lindberg'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        url_title: 'Rosacea resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Rosaceabehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår rosacea',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
);

$reviews_title = 'Omdömen';
$reviews = array(
    new Review(
        brand: 'Trustpilot',
        title: 'Supernöjd',
        text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
        signature: 'Sofia',
        stars: 5,
        logo_url: 'images/brands/trustpilot.svg'

    ),
    new Review(
        brand: 'Google',
        title: 'Jag är mycket nöjd..',
        text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
        signature: 'Lovisa',
        stars: 5,
        logo_url: 'images/brands/google-small.svg'

    ),
    new Review(
        brand: 'Bokadirekt',
        title: 'Rekommenderar varmt!',
        text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
        signature: 'Emily',
        stars: 5,
        logo_url: 'images/brands/bokadirekt-small.svg'
    ),
);
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur lång tid tar det att se resultat efter en behandling med vakuumsug mot pormaskar?',
            text: 'Resultaten från en behandling med vakuumsug mot pormaskar kan ofta ses omedelbart efter behandlingen, där många upplever en minskning av pormaskar och en renare hud. För att uppnå och upprätthålla optimala resultat rekommenderas regelbundna behandlingar anpassade efter individens hudbehov.'
        ),
        new Question(
            title: 'Är det säkert att göra behandlingar med vakuumsug mot pormaskar regelbundet?',
            text: 'Ja, behandlingar med vakuumsug mot pormaskar är säkra och skonsamma och kan utföras regelbundet. De är utformade för att vara skonsamma mot huden samtidigt som de erbjuder effektiva resultat, vilket gör dem till en idealisk lösning för kontinuerlig hudvård och underhåll.'
        ),
        new Question(
            title: 'Kan behandlingar med vakuumsug mot pormaskar hjälpa mot specifika hudproblem?',
            text: 'Ja, behandlingar med vakuumsug mot pormaskar är effektiva för en mängd olika hudproblem, inklusive pormaskar, orenheter och överflödigt talg. Behandlingen är anpassningsbar, vilket gör det möjligt att rikta in sig på specifika problemområden och hudtillstånd.'
        ),
        new Question(
            title: 'Vilka är de främsta fördelarna med behandlingar med vakuumsug mot pormaskar jämfört med andra hudvårdsbehandlingar?',
            text: 'Behandlingar med vakuumsug mot pormaskar utmärker sig genom sin förmåga att djuprengöra huden och avlägsna orenheter effektivt. Deras unika teknik och skonsamma natur gör dem lämpliga för en rad olika hudtyper och problem, med mindre risk för irritation jämfört med mer aggressiva behandlingar.'
        ),
    )
);


$faq_view_more = 'Se alla frågor & svar';

$skin_guide_title = 'Hudguiden';
$skin_guide_articles = array(
    new SkinGuideArticle(
        url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
        url_title: 'How hormones effect?',
        title: 'How hormones effect?',
        problem: 'Acne',
        image_small: 'https://via.placeholder.com/426x324.webp',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_alt: 'Hormones effect',
        image_title: 'Hormones effect',
    ),
);
$skin_guide_view_more = 'Se alla artiklar';

$specialists_title = 'Våra hudterpaueter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering på vakuumsug mot pormaskar',
        image_title: 'Cazzandra Lindberg - Expert på vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på vakuumsug mot pormaskar',
        image_title: 'Veronika Benedik - Specialist inom vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom vakuumsug mot pormaskar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot vakuumsug mot pormaskar',
        image_title: 'Vilma Libom - Expert inom vakuumsug mot pormaskar'
    )
);

$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
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
    <link rel="stylesheet" href="/behandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $model->image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h500">
                            <?php echo $model->title ?>
                        </h2>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-m">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <div class="mt-m"><?php echo $floating_box ?></div>
                        <?php if (isset($model->procedures)) { ?>
                            <div id="floating-procedures" class="mt-xl">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="floating-procedure">
                                        <div class="p200">
                                            <?php echo $procedure->label ?>
                                        </div>
                                        <div class="floating-procedure-price">
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $model->title ?>
                    </h1>
                    <?php if (isset($model->duration)) { ?>
                        <h3 class="mt-xs p200 l10n">Längd: <?php echo $model->duration ?></h3>
                    <?php } ?>
                    <?php if (strlen($model->content) > 0) { ?>
                        <div class="mt-xs"><?php echo $model->content ?></div>
                    <?php } ?>
                    <?php if (isset($model->procedures)) { ?>
                        <div class="procedures mt-xl">
                            <?php foreach ($model->procedures as $procedure) { ?>
                                <div class="procedure">
                                    <div class="p200"><?php echo $procedure->label ?></div>
                                    <div>
                                        <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                        <span class="p200"><?php echo $procedure->savings ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-touch">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $model->title ?>
                        </h1>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-xs">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-s"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div class="mt-xl large-procedures flex-row">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="large-procedure">
                                        <div class="p200 l10n"><?php echo $procedure->label ?></div>
                                        <div>
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
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
                            <?php foreach ($types as $service) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $service) { ?>
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
                        <?php foreach ($treatment_areas as $treatment_area) { ?>
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                    </section>

                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($service_brands)) { ?>
                    <section id="service-brands" class="large-margin">
                        <?php if (isset($service_brands_title)) { ?>
                            <h2 class="h500"><?php echo $service_brands_title ?></h2>
                        <?php } ?>
                        <?php if (isset($service_brands_text)) { ?>
                            <div class="mt-xs"><?php echo $service_brands_text ?></div>
                        <?php } ?>
                        <div class="mt-xl">
                            <?php
                            $brands = $service_brands;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                            ?>
                        </div>
                    </section>
                <?php } ?>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                        <div class="flex-row is-hidden-mobile">
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
                </section>
                <!--Hudguide-->
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>