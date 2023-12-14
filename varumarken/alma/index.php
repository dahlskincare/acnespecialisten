<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
include_once('../widgets/brand_model_card/brand_model.php');

$nav_buttons = array(
    'about' => 'Om Alma',
    'models' => 'Modeller',
    'problems' => 'Problem',
    'results' => 'Resultats',
    'reviews' => 'Omdömnen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister',
    'service-brands' => 'Märken',
);

$models = array(
    new BrandModel(
        image: 'https://via.placeholder.com/102x102.webp',
        title: 'Hybrid (CO2)',
        subtitle: 'Avancerad laser för problemhy och ärr',
        content: 'Alma Hybrid CO2 laser är en innovativ lösning för behandling av problemhy och ärr. Denna laser kombinerar CO2-teknik med andra våglängder för att effektivt behandla akneärr och förbättra hudens textur och utseende. Idealisk för djupare hudförnyelse och ärrminskning, erbjuder Hybrid CO2 precisionsbehandling med snabb återhämtning.',
        url: 'varumarken/alma/hybrid-c02',
        url_label: 'Läs mer',
    ),
    new BrandModel(
        image: 'https://via.placeholder.com/102x102.webp',
        title: 'Harmony XL',
        subtitle: 'Mångsidig laser och IPL-system',
        content: 'Harmony XL från Alma är ett mångsidigt system som erbjuder både laser- och IPL-behandlingar. Perfekt för en rad hudtillstånd inklusive akne, pigmentfläckar och ytliga blodkärl. Denna plattform ger skräddarsydda lösningar för både hudföryngring och specifika hudproblem, med olika handstycken för att passa olika behandlingsbehov.',
        url: 'varumarken/alma/harmony-xl',
        url_label: 'Läs mer',
    ),
    new BrandModel(
        image: 'https://via.placeholder.com/102x102.webp',
        title: 'Soprano ICE',
        subtitle: 'Effektiv laser för permanent hårborttagning',
        content: 'Soprano ICE är Alma Lasers banbrytande system för permanent hårborttagning. Denna laser är känd för sin effektivitet, komfort och säkerhet, och är lämplig för alla hudtyper. Med sin unika teknik ger Soprano ICE en nästan smärtfri behandlingserfarenhet och är idealisk för att minska oönskat hår på lång sikt.',
        url: 'varumarken/alma/soprano-ice',
        url_label: 'Läs mer',
    ),
    new BrandModel(
        image: 'https://via.placeholder.com/102x102.webp',
        title: 'Rejuve Dye VL',
        subtitle: 'IPL för hudtonsförbättring',
        content: 'Rejuve Dye VL är en del av Harmony XL-plattformen och fokuserar på IPL-behandlingar. Det är speciellt effektivt för att hantera hudrodnad, pigmentering och ytliga blodkärl. Denna teknik ger skonsamma men effektiva behandlingar för att förbättra hudtonen och ge en jämnare hudfärg.',
        url: 'varumarken/alma/rejuve-dye-vl',
        url_label: 'Läs mer',
    ),
);

$types_title = 'Hudproblem som behandlas med Harmony XL Pro';
$types_description = '<p class="p200">med Harmony XL Pro behandlar vi en rad olika hudproblem effektivt.</p>';
$types = array(
    new Service(
        title: 'Harmony XL Pro mot Acneärr',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Harmony XL Pro-lasern reducerar effektivt acneärr och förbättrar hudens textur genom att stimulera kollagenproduktion och främja hudens läkning, vilket resulterar i en jämnare och mer föryngrad hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Harmony XL Pro mot Acneärr',
        image_title: 'Harmony XL Pro mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka Harmony XL Pro mot Acneärr',
        booking_url_title: 'Boka Harmony XL Pro mot Acneärr',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 2 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
        image_alt: 'Rosacea resultat',
        image_title: 'Rosacea resultat',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 4 månaders behandling av <a href="/problme/rosacea/rosaceabehandling" title="akne">akne</a>',
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
            title: 'Vilka typer av behandlingar erbjuder Alma Lasers maskiner?',
            text: 'Alma Lasers maskiner, som inkluderar Alma Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice, erbjuder ett brett utbud av behandlingar. Dessa omfattar hudföryngring, aknebehandling, hårborttagning, behandling av ytliga blodkärl och pigmentering, samt tatueringsborttagning. Varje maskin använder avancerad teknologi anpassad för specifika hudvårdsbehov.'
        ),
        new Question(
            title: 'Hur säkra är behandlingarna med Alma Lasers maskiner?',
            text: 'Behandlingar med Alma Lasers maskiner är mycket säkra. Dessa system är kliniskt testade och designade för att ge effektiva resultat med hög säkerhetsstandard. Varje maskin erbjuder skonsamma behandlingsalternativ som minimerar risker och biverkningar, vilket gör dem lämpliga för en rad olika hudtyper och tillstånd.'
        ),
        new Question(
            title: 'Vad skiljer Alma Lasers Soprano Ice från andra hårborttagningsmaskiner?',
            text: 'Alma Lasers Soprano Ice skiljer sig från andra hårborttagningsmaskiner genom sin unika SHR-teknik (Super Hair Removal), som ger en nästan smärtfri upplevelse. Den är effektiv på alla hudtyper och hårfärger och erbjuder snabba behandlingar med minimal risk för biverkningar, vilket gör den till en av de mest föredragna metoderna för permanent hårborttagning.'
        ),
        new Question(
            title: 'Är Alma Lasers utrustning lämplig för alla hudtyper?',
            text: 'Ja, Alma Lasers utrustning är designad för att vara lämplig för alla hudtyper. System som Harmony XL Pro och Soprano Ice har inställningar som kan anpassas för olika hudtoner och känslighetsnivåer, vilket säkerställer både effektivitet och säkerhet för en bred användargrupp.'
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
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Powerlite',
        image: 'images/brands/powerlite.svg',
        image_alt: 'Powerlite',
        image_title: 'Powerlite',
    ),
    new Brand(
        label: 'Dermapen4',
        image: 'images/brands/dermapen4.svg',
        image_alt: 'Dermapen4',
        image_title: 'Dermapen4',
    ),
    new Brand(
        label: 'Cryopen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'Cryopen',
        image_title: 'Cryopen',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'images/brands/lumenis.svg',
        image_alt: 'Lumenis',
        image_title: 'Lumenis',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRXT',
        image: 'images/brands/prxt.svg',
        image_alt: 'PRXT',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'Hydrafacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'Hydrafacial',
        image_title: 'Hydrafacial',
    ),
    new Brand(
        label: 'IP infusion',
        image: 'images/brands/ipinfusion.svg',
        image_alt: 'IP infusion',
        image_title: 'IP infusion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Alma Laser hos AcneSpecialisten | Avancerad Hudvårdsteknologi</title>
    <meta name="description" content="På AcneSpecialisten använder vi Alma Lasers högteknologiska system för att erbjuda banbrytande behandlingar. Upptäck våra Alma-lösningar, inklusive Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice, designade för att effektivt hantera en mängd hudproblem och förbättra hudhälsa.">
    <meta name="keywords" content="Alma Lasers, Avancerad hudvårdsteknologi, Hybrid CO2, Harmony XL Pro, Rejuve Dye VL, Soprano Ice, AcneSpecialisten behandlingar, Hudföryngring, Laserhårborttagning, Hudproblem lösningar, Estetisk hudvård">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <!-- This stylesheet should be included only on pages with the default style and layout. -->
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="varumarken/brand.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('images/problems/carousel/large/acne-scars.jpg')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600 l10n">Alma</h2>
                        <p class="mt-m p200 l10n">Alma erbjuder de modernaste och mest avancerade maskinerna inom skönhet och hudvård.</p>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="gratis-hudkonsultation" class="button white expand l10n" title="Boka konsultation">Boka konsultation</a>
                                </div>
                                <div class="column">
                                    <a href="https://bokadirekt.se" class="button white expand l10n" title="Boka behandling">Boka behandling</a>
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
                    <h1 class="mt-xs h600 l10n">Alma</h1>
                    <div class="mt-xs l10n">
                        Alma är en ledande innovatör inom estetisk laserbehandling. Vårt utbud omfattar fyra av Almas toppmoderna system: Alma Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice. Dessa avancerade maskiner erbjuder en bred palett av behandlingar, från hudföryngring och pigmentkorrigering till effektiv hårborttagning och behandling av vaskulära problem. Varje system är designat för att ge säkra, skonsamma och effektiva lösningar för en mängd olika hudtillstånd, vilket gör det möjligt för oss att skräddarsy behandlingar efter dina unika hudvårdsbehov.
                    </div>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="gratis-hudkonsultation" class="button b200 white expand l10n" title="Boka konsultation">Boka konsultation</a>
                            </div>
                            <div class="column is-half">
                                <a href="bokadirekt" class="button b200 white expand l10n" title="Boka behandling">Boka behandling</a>
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
                        <h1 class="h600 l10n">Alma</h1>
                        <div class="mt-s l10n p200">Alma är en ledande innovatör inom estetisk laserbehandling. Vårt utbud omfattar fyra av Almas toppmoderna system: Alma Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice. Dessa avancerade maskiner erbjuder en bred palett av behandlingar, från hudföryngring och pigmentkorrigering till effektiv hårborttagning och behandling av vaskulära problem. Varje system är designat för att ge säkra, skonsamma och effektiva lösningar för en mängd olika hudtillstånd, vilket gör det möjligt för oss att skräddarsy behandlingar efter dina unika hudvårdsbehov.</div>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="gratis-hudkonsultation" class="button b200 white l10n" title="Boka konsultation">Boka konsultation</a>
                            <a href="bokadirekt" class="button b200 white l10n" title="Boka behandling">Boka behandling</a>
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
                        <source media="(max-width: 449px)" srcset="https://via.placeholder.com/358x274.webp">
                        <source media="(min-width: 450px)" srcset="https://via.placeholder.com/424x456.webp">
                        <img src="https://via.placeholder.com/358x274.webp" alt="Alma" title="Alma" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about" class="large-margin">
                    <h2 class="h500 l10n">Vad är Alma?</h2>
                    <p class="p200 mt-xl l10n">Alma är ledande inom utveckling och tillverkning av innovativa estetiska behandlingssystem. Företaget, grundat i början av 2000-talet, har specialiserat sig på att producera avancerad medicinsk utrustning för en mängd olika hudvårdsbehandlingar. Alma's teknologi är känd för sin mångsidighet och effektivitet och används för behandlingar som hudföryngring, hårborttagning, minskning av akneärr, samt behandling av ytliga blodkärl och pigmentförändringar.</p>
                    <p class="p200 mt-xl l10n">Almas utrustning, som Alma Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice, utnyttjar avancerade laser-, ljus- och ultraljudsbaserade teknologier. Dessa system är designade för att erbjuda skonsamma, icke-invasiva behandlingar som ger effektiva resultat med minimal återhämtningstid. Alma Lasers är synonymt med innovation, säkerhet och kvalitet, vilket gör deras utrustning till bland de bästa på marknaden.</p>

                </section>
                <section id="models" class="large-margin">
                    <h2 class="h500 l10n">Alma maskiner</h2>
                    <p class="p200 mt-xs l10n">På AcneSpecialisten använder vi fyra avancerade maskiner från Alma Lasers för att erbjuda ett brett spektrum av hudbehandlingar. Dessa inkluderar Alma Hybrid CO2, Harmony XL Pro, Rejuve Dye VL och Soprano Ice, var och en med sina unika egenskaper och fördelar. Alma Hybrid CO2 är en toppmodern laser för hudföryngring och ärrbehandling, medan Harmony XL Pro erbjuder mångsidiga lösningar för en rad hudtillstånd från akne till pigmentering. Rejuve Dye VL är specialiserad på att behandla rodnad och vaskulära lesioner, och Soprano Ice är känt för sin effektiva och bekväma laserhårborttagning. Varje system är utformat för att ge säkra och effektiva resultat, vilket gör dem till en vital del av våra hudvårdslösningar.</p>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($models as $model) { ?>
                            <div class="column is-half">
                                <?php include('../widgets/brand_model_card/brand_model_card.php'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <section id="problems" class="large-margin">
                    <h2 class="h500 l10n">Problem vi behandlar med Alma</h2>
                    <hr class="divider is-hidden-touch" />
                    <?php foreach ($problems as $service) { ?>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                        <hr class="divider is-hidden-touch" />
                    <?php } ?>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="Se alla frågor"><?php echo $faq_view_more ?></a>
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
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>