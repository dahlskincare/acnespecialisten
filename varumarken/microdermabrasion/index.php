<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Microdermabrasion - Effektiv Hudslipning och Förnyelse | AcneSpecialisten';
$seo_description = 'AcneSpecialisten presenterar microdermabrasion, en avancerad behandlingsmetod för att förbättra hudens textur och lyster. Denna djupgående hudslipning är idealisk för att förfina porer, minska fina linjer och ge en jämnare hudton. Perfekt för de som söker en skonsam, men effektiv hudförnyelse.';
$seo_keywords = 'Microdermabrasion, hudförnyelse, hudslipning, fina linjer, jämn hudton, porförfining, AcneSpecialisten, skonsam behandling, effektiv hudvård';

$seo_image = 'images/treatments/large/microdermabrasion.jpg';

$model = new Service(
    title: 'Microdermabrasion',
    duration: null,
    price: 'Från 1595 kr',
    content: '',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Microdermabrasion',
    image_title: 'Microdermabrasion',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 procedure',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 procedures',
            price: '3995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 procedures',
            price: '5995 kr',
            savings: 'Spara 1980 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$nav_buttons = array(
    'about' => 'Om Microdermabrasion',
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

$description_title = 'Vad är Microdermabrasion?';
$description_text = '<p class="p200">Microdermabrasion på AcneSpecialisten är en effektiv behandlingsmetod för att föryngra och vitalisera huden. Denna process fokuserar på att varsamt skrapa bort det yttersta lagret av döda hudceller, vilket stimulerar huden att påbörja en naturlig läkningsprocess. Genom denna slipning avlägsnas gamla celler och ger plats åt nya, fräscha hudceller, vilket bidrar till en starkare, friskare och mer strålande hud. Behandlingen är designad för att kickstarta hudens förnyelse och är särskilt effektiv för att skapa en jämnare hudton och förbättra hudens övergripande kvalitet.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför Microdermabrasion',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        image_title: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        content: '<p class="p200">När du förbereder dig för din Microdermabrasion-behandling hos AcneSpecialisten, är det viktigt att ta vissa steg för att din hud ska vara i bästa möjliga skick. För att säkerställa att du är fullständigt informerad och bekväm med processen, erbjuder vi en konsultation där vi går igenom allt du behöver veta inför din Microdermabrasion-behandling. Under konsultationen kommer vi att diskutera din hudtyp, eventuella specifika bekymmer och vad du kan förvänta dig av behandlingen. Detta är också ett utmärkt tillfälle för dig att ställa frågor och uttrycka eventuella funderingar. Vår prioritet är att du känner dig helt trygg och förberedd inför din behandling hos AcneSpecialisten.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
    'process' => new Article(
        title: 'Processen för Microdermabrasion',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Processen för Microdermabrasion',
    image_title: 'Processen för Microdermabrasion',
    content: '<p class="p200">Microdermabrasion-processen på AcneSpecialisten är en noggrant utformad behandling som syftar till att förbättra hudens kvalitet genom en skonsam men effektiv exfoliering. Behandlingen inleds med en grundlig rengöring av huden för att avlägsna smuts, olja och orenheter. Detta steg är viktigt för att förbereda huden för microdermabrasionen.</p>
    <p class="p200 mt-m">Nästa steg i processen är själva microdermabrasionen, där vi använder en specialapparat för att skonsamt men djupgående exfoliera hudens yttre lager. Denna teknik använder mikrokristaller eller en diamantspets för att försiktigt slipa bort döda hudceller, vilket främjar cellförnyelse och förbättrar hudens textur och lyster.</p>
    <p class="p200 mt-m">Efter exfolieringen appliceras specifika serum och näringsämnen för att ytterligare förbättra hudens hälsa och utseende. Dessa produkter är utvalda för att passa din specifika hudtyp och behov, och kan innefatta ingredienser som hyaluronsyra, antioxidanter och vitaminer.</p>
    <p class="p200 mt-m">Behandlingen avslutas med applicering av en lugnande och återfuktande kräm för att maximera hudens återhämtning och skydda den från yttre påverkan. Microdermabrasion är en idealisk behandling för dig som vill förbättra hudens textur och utseende, och passar för en rad olika hudtyper och tillstånd. Vårt mål är att ge dig en förbättrad, mjukare och mer strålande hud efter varje behandling.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för Microdermabrasion',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för Microdermabrasion',
    image_title: 'Eftervård för Microdermabrasion',
    content: '<p class="p200">Efter en Microdermabrasion-behandling hos AcneSpecialisten är det essentiellt att du följer våra eftervårdsinstruktioner för att säkerställa bästa möjliga resultat. Det är viktigt att behandla din hud med omsorg under de första dagarna efter behandlingen. Börja med att skydda huden från solen och använd ett högkvalitativt solskydd med hög SPF för att förebygga skador från UV-strålar.</p>
    <p class="p200 mt-m">Om du har några frågor eller behöver ytterligare rådgivning angående din eftervård, är du alltid välkommen att kontakta oss på AcneSpecialisten. Vi är här för att stödja dig i din resa mot en friskare och mer strålande hud.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Andra märken för Dermabrasion';
$service_brands_text = '<p class="p200">Utöver Microdermabrasion jobbar vi även med HydraFacial.</p>';
$service_brands = array(

    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
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
            title: 'Hur snabbt ser man resultat efter Microdermabrasion?',
            text: 'De flesta kunder märker en omedelbar förbättring i hudens lyster och känsla direkt efter en Microdermabrasion-behandling. För långsiktiga och mer dramatiska förbättringar rekommenderas regelbundna sessioner, som ger progressiv förbättring av hudens utseende och kvalitet.'
        ),
        new Question(
            title: 'Är det säkert att göra Microdermabrasion på regelbunden basis?',
            text: 'Ja, Microdermabrasion är en skonsam behandling som är säker att utföra regelbundet. Den är utformad för att varsamt men effektivt förbättra hudens yta utan att orsaka skador, vilket gör den idealisk för kontinuerlig användning i en hudvårdsrutin.'
        ),
        new Question(
            title: 'Kan Microdermabrasion behandla specifika hudåkommor?',
            text: 'Absolut. Microdermabrasion är effektiv för att behandla en rad hudproblem som fina linjer, lättare pigmentförändringar, torrhet och till viss del acne. Den kan skräddarsys för att fokusera på dina specifika hudbehov och problemområden.'
        ),
        new Question(
            title: 'Vad är de huvudsakliga fördelarna med Microdermabrasion jämfört med andra hudvårdsbehandlingar?',
            text: 'En av de största fördelarna med Microdermabrasion är dess förmåga att effektivt exfoliera och förnya huden utan aggressivitet. Detta gör behandlingen särskilt lämplig för känsliga hudtyper och dem som söker en mild men effektiv hudförbättring. Dessutom ger Microdermabrasion snabba resultat med minimal återhämtningstid jämfört med vissa mer invasiva behandlingsalternativ.'
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
        label: 'Microdermabrasion',
        image: 'images/brands/Microdermabrasion.svg',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion',
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
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-m"><?php echo $model->content ?></div>
                        <?php } ?>
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
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                            </picture>
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