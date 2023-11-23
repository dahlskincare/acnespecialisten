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
    content: '<p class="p200">Microdermabrasion hos AcneSpecialisten är en avancerad hudslipningsbehandling som effektivt förbättrar hudens textur och lyster. Denna metod använder mikrokristaller för att varsamt exfoliera det yttersta lagret av döda hudceller, vilket stimulerar cellförnyelse och kollagenproduktion. Idealisk för alla hudtyper, bidrar microdermabrasion till en klarare och mer jämn hudton, minskar fina linjer och gör huden synbart fräschare och mer strålande.</p>',
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
$description_text = '<p class="p200">Microdermabrasion är en innovativ och skonsam hudvårdsbehandling som kombinerar rengöring, exfoliering och intensiv återfuktning för att förnya och vitalisera huden. Denna behandling använder en unik teknik som kallas "vortex-fusion", där en spiralformad tipps design möjliggör djuprengöring samtidigt som den tillför antioxidanter, peptider och hyaluronsyra.</p>
<p class="p200 mt-m">På AcneSpecialisten anpassar vi varje Microdermabrasion-behandling efter individuella hudbehov. Behandlingen är effektiv för att minska synliga tecken på åldrande, som fina linjer och rynkor, samt att hantera problem som acne, förstorade porer och hyperpigmentering. Dessutom förbättrar Microdermabrasion hudens övergripande hälsa och lyster genom att öka fuktnivåerna och skydda mot miljömässiga skador. Microdermabrasion är en perfekt lösning för alla som vill ha en direkt synlig förbättring av sin hudkvalitet utan någon återhämtningstid.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför Microdermabrasion',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        image_title: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        content: '<p class="p200">Inför din Microdermabrasion-behandling hos AcneSpecialisten är det viktigt att förbereda huden för att optimera behandlingens effekt. Vi rekommenderar att du undviker starka hudvårdsprodukter, såsom exfolierande syror eller retinol, några dagar före din session. Detta hjälper till att minska risken för hudirritation och gör huden mer mottaglig för behandlingen.</p>
        <p class="p200 mt-m">Skydda din hud mot stark sol och undvik solbränna innan din Microdermabrasion-behandling, då solbränd hud kan vara mer känslig och detta kan påverka behandlingens resultat. Om du använder mediciner som påverkar huden, eller har hudtillstånd som akne eller rosacea, är det viktigt att informera oss i förväg så att vi kan anpassa behandlingen efter dina unika behov. Kom ihåg att det är viktigt att du känner dig trygg och bekväm, så tveka inte att kontakta oss med eventuella frågor eller funderingar inför din behandling hos AcneSpecialisten.</p>',
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
    content: '<p class="p200">En Microdermabrasion-behandling hos AcneSpecialisten börjar med en grundlig rengöring av huden för att avlägsna smuts och orenheter. Detta första steg är viktigt för att förbereda huden för behandlingens nästa faser.</p>
    <p class="p200 mt-m">Efter rengöringen följer Microdermabrasionens huvudsteg, där vi använder en specialiserad apparatur för att utföra en skonsam men djupgående exfoliering. Apparaten kombinerar rengöring, exfoliering och extraktion för att ta bort döda hudceller och rengöra porerna, samtidigt som den tillför intensiva fuktgivande serum anpassade efter din hudtyp.</p>
    <p class="p200 mt-m">Behandlingen fortsätter med införande av näring och antioxidanter som vitaliserar och ger huden en fräsch, strålande lyster. Microdermabrasionen avslutas med att lugnande och skyddande ämnen appliceras på huden för att maximera återhämtningen och skydda mot miljöpåverkan.</p>
    <p class="p200 mt-m">Våra experter vid AcneSpecialisten anpassar varje Microdermabrasion-behandling individuellt för att uppnå bästa möjliga resultat. Denna behandling är perfekt för alla som söker en djup men skonsam rengöring och önskar en synbart förbättrad hudkvalitet.</p>',
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

$types_title = 'Microdermabrasion och tillval';
$types_description = 'Med hjälp av våra tillval anpassar vi behandingen för just dina behov..';
$big_types = array(
    new Service(
        title: 'Microdermabrasion',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Microdermabrasion hos AcneSpecialisten är en mångsidig och effektiv hudvårdsbehandling som passar en mängd olika hudtyper. Behandlingen fokuserar på djupgående rengöring, hydrering och förnyelse av hudens yta, vilket ger en fräsch och strålande lyster.</p>
        <p class="p200 mt-m">Behandlingen inleds med en varsam men grundlig rengöring som förbereder huden för Microdermabrasionens nästa steg. Därefter används en specialapparat för att utföra en mild exfoliering, som tar bort döda hudceller och rengör porerna på djupet. Samtidigt tillförs närande och fuktgivande serum som är skräddarsydda efter din hudtyp och dina behov.</p>
        <p class="p200 mt-m">Efter den exfolierande fasen följer en infusion av antioxidanter och hyaluronsyra som djupt återfuktar huden och bidrar till dess vitalitet och utstrålning. Behandlingen avslutas med en lugnande fas där huden får extra vård och skydd för att bevara de långvariga effekterna av Microdermabrasion.</p>
        <p class="p200 mt-m">På AcneSpecialisten ger vi dig en skräddarsydd behandling och eftervård som maximerar fördelarna av Microdermabrasion. Denna behandling är idealisk för dig som söker en omfattande lösning för att förbättra din hudhälsa och utstrålning.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Microdermabrasion behandling',
        booking_url_title: 'Boka Microdermabrasion behandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '5995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Microdermabrasion - Dermabuilder Serum - Boost & Glow',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Microdermabrasion-behandlingen med Dermabuilder Serum hos AcneSpecialisten är en exceptionell upplevelse för den mogna huden. Detta avancerade serum är särskilt framtaget för att djupt vitalisera och stärka huden. Med en kraftfull blandning av två aktiva peptider, arbetar serumet för att stimulera produktionen av hudens egna proteiner, vilket är avgörande för hudens elasticitet och fasthet.</p>
        <p class="p200 mt-m">I denna behandling tränger Dermabuilder Serum in i hudens djupare lager för att effektivt bygga upp och stärka hudstrukturen inifrån. Detta bidrar till att synbart minska rynkor och fina linjer, och ger ansiktet en fastare och mer ungdomlig profil. Behandlingen är perfekt för dig som vill återställa och bevara hudens ungdomliga utstrålning och vitalitet.</p>
        <p class="p200 mt-m">Med Microdermabrasion och Dermabuilder Serum får du inte bara en slätare och jämnare hud, utan också en mer motståndskraftig och välvårdad hudkvalitet. Detta serum är en idealisk lösning för att ge din mogen hud en omedelbar boost.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Microdermabrasion behandling',
        booking_url_title: 'Boka Microdermabrasion behandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Microdermabrasion - Glycal Acid Peel - Mot Pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Microdermabrasion-behandlingen hos AcneSpecialisten, förstärkt med Glycal Acid Peel, är skräddarsydd för att effektivt hantera hud med pormaskar och finnar. Denna specialanpassade behandling fokuserar på att djuprengöra huden och adressera överproduktionen av talg, en vanlig orsak till dessa hudtillstånd.</p>
        <p class="p200 mt-m">Glycal Acid Peel är en kraftfull kombination av aktiva syror som tränger djupt in i hudlagren för att lösgöra och avlägsna inbyggda orenheter. Denna intensiva exfolieringsprocess renar effektivt porerna, vilket minskar synligheten av pormaskar och finnar och bidrar till en klarare och jämnare hudton.</p>
        <p class="p200 mt-m">Denna behandling är idealisk för dig som söker en djupgående lösning på problemhy. Med vår Glycal Acid Peel får du inte bara en yttre rengöring, utan en behandling som aktivt arbetar för att rena huden på djupet. Resultatet är en ren, förnyad hud som är fri från de vanligaste orsakerna till problemhy.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Microdermabrasion behandling',
        booking_url_title: 'Boka Microdermabrasion behandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för Microdermabrasion',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för Microdermabrasion',
    image_title: 'Eftervård för Microdermabrasion',
    content: '<p class="p200">Efter din Microdermabrasion-behandling hos AcneSpecialisten är det viktigt att noggrant följa eftervårdsinstruktioner för att bibehålla och förlänga behandlingens positiva effekter. Direkt efter behandlingen ska huden behandlas varsamt. Undvik stark sol och använd ett högkvalitativt solskydd med hög SPF för att skydda huden från UV-strålar.</p>
    <p class="p200 mt-m">För att stödja huden i dess återhämtningsprocess, är det viktigt att regelbundet återfukta med lämpliga hudvårdsprodukter, som rekommenderats av din hudterapeut. Om din behandling inkluderade en kemisk peeling eller en djup exfoliering, bör du undvika att skrubba eller irritera huden och låta eventuella mindre orenheter läka på egen hand. Det är även viktigt att hålla en god hydrering genom att dricka tillräckligt med vatten och upprätthålla en näringsrik kost för att stödja huden inifrån. Tveka inte att kontakta oss på AcneSpecialisten för ytterligare råd eller frågor om din eftervård.</p>',
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
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
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
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
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
);

$reviews_title = 'Omdömen';
$reviews = array(
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    )
);
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur lång tid tar det att se resultat efter en Microdermabrasion?',
            text: 'Resultaten från en Microdermabrasion kan ofta ses omedelbart efter behandlingen, där många upplever en mer strålande och jämn hudton. För att uppnå och upprätthålla optimala resultat rekommenderas regelbundna behandlingar anpassade efter individens hudbehov.'
        ),
        new Question(
            title: 'Är det säkert att göra Microdermabrasion regelbundet?',
            text: 'Ja, Microdermabrasion är en säker och skonsam behandling som kan utföras regelbundet. Den är utformad för att vara skonsam mot huden samtidigt som den erbjuder effektiva resultat, vilket gör den till en idealisk lösning för kontinuerlig hudvård och underhåll.'
        ),
        new Question(
            title: 'Kan Microdermabrasion hjälpa mot specifika hudproblem?',
            text: 'Ja, Microdermabrasion är effektiv för en mängd olika hudproblem, inklusive torrhet, fina linjer, acne och hyperpigmentering. Behandlingen är anpassningsbar, vilket gör det möjligt att rikta in sig på specifika problemområden och hudtillstånd.'
        ),
        new Question(
            title: 'Vilka är de främsta fördelarna med Microdermabrasion jämfört med andra hudvårdsbehandlingar?',
            text: 'Microdermabrasion utmärker sig genom sin förmåga att djuprengöra, exfoliera och återfukta huden på ett skonsamt sätt. Dess unika teknik och anpassningsförmåga gör den effektiv för en rad olika hudtyper och problem, med mindre risk för irritation jämfört med mer aggressiva behandlingar.'
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions"><?php echo $faq_view_more ?></a>
                </section>
                <section id="skin-guide" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $skin_guide_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles"><?php echo $faq_view_more ?></a>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla märken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>