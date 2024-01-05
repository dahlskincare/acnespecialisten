<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'CryoPen - Precisionsstyrd Cryoterapi för hudförändringar | Acnespecialisten';
$seo_description = 'Upplev precisionen med CryoPen hos Acnespecialisten, den moderna lösningen för att utan smärta och med stor noggrannhet behandla och ta bort hudförändringar som födelsemärken, skintags och leverfläckar. CryoPen använder avancerad kryoteknik för att effektivt minska hudförändringar och främja en jämn hudton.';
$seo_keywords = 'CryoPen behandling, cryoterapi precision, smärtfri hudlesionsborttagning, hudlesioner, CryoPen för vårtor, skintags, pigmentfläckar reduktion, avancerad kryoteknik, jämna ut hudton, estetisk hudvård';

$seo_image = 'images/treatments/large/cryopen.jpg';


$model = new Service(
    title: 'CryoPen',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">CryoPen är en framstående metod för att snabbt och effektivt behandla en rad hudförändringar, inklusive födelsemärken, skintags och leverfläckar. Denna icke-invasiva teknik erbjuder en precisionsstyrd behandling som fryser och förstör oönskade hudlesioner med minimal påverkan på den omgivande huden. Våra CryoPen-behandlingar är säkra, kräver minimal återhämtningstid och är idealiska för att återställa en slät hudton utan behov av kirurgiska ingrepp.</p>',
    image_small: 'bilder/varumarken/358x274/cryopen.webp',
    image_large: 'bilder/varumarken/424x456/cryopen.webp',
    image_alt: 'CryoPen',
    image_title: 'CryoPen',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'CryoPen är den största och mest populra frysbehandlingen på marknaden.';

$nav_buttons = array(
    'about' => 'Om CryoPen',
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

$description_title = 'CryoPen - Effektiv behandling för hudförändringar';
$description_text = '<p class="p200">CryoPen är en avancerad form av kryoterapi, en snabb och icke-invasiv metod för att avlägsna hudförändringar som födelsemärken, hudflikar och ansitksvårtor, och olika typer av märken och skönhetsfläckar. Den här behandlingen använder en preciserad kylteknologi för att selektivt frysa och förstöra oönskade hudförändringar.</p>
    <p class="p200 mt-m">Genom att rikta in sig på specifika områden med extrem kyla, kan CryoPen behandla hudförändringar effektivt utan att skada omgivande hud. Den naturliga läkningsprocessen som stimuleras efter behandlingen resulterar i en jämnare och mer estetisk hudyta.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför CryoPenbehandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Inför CryoPenbehandling',
        image_title: 'Inför CryoPenbehandling',
        content: '<p class="p200">Inför din CryoPen behandling erbjuder vi alltid en kostnadsfri konsultation där du möter en av våra erfarna hudterapeuter. Under konsultationen kommer din hudterapeut att noggrant undersöka de hudförändringar du önskar behandla. Detta steg är avgörande för att vi ska kunna utforma en behandlingsplan som är skräddarsydd för just dina hudproblem och för att besluta om CryoPen är den optimala metoden för dig.</p>
        <p class="p200 mt-m">För att förbereda huden inför behandlingen är det viktigt att du låter bli att manipulera eller irritera området som ska behandlas. Det är också fördelaktigt att inte utsätta huden för intensiv solning eller stark kyla före din session. Under konsultationen kommer vi att ge dig omfattande information om hur du bäst förbereder dig och vad du kan förvänta dig av behandlingen. Om förhållandena tillåter, och området är lämpligt, kan vi ofta påbörja din CryoPen behandling direkt vid konsultationstillfället.</p>',
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
        title: 'Hur går CryoPen till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går CryoPen till?',
        image_title: 'Hur går CryoPen till?',
        content: '<p class="p200">CryoPen behandling är en precisionsmetod för att frysa och avlägsna oönskade hudförändringar. Vid ankomst till vår klinik kommer vi att inleda med en grundlig rengöring av huden för att förbereda det aktuella området för behandling.</p>
        <p class="p200 mt-m">Med hjälp av CryoPen-apparaten applicerar vår kvalificerade hudterapeut en exakt dos av kylmedel direkt på den oönskade hudförändringen. Denna riktade kyla är mycket effektiv och behandlingen tar bara några sekunder. Känslan under behandlingen kan jämföras med en nypande eller stickande känsla, men är normalt sett kortvarig och hanterbar.</p>
        <p class="p200 mt-m">Omedelbart efter CryoPen-behandlingen kan det behandlade området uppvisa rodnad eller svullnad, och ibland kan en liten blåsa uppstå. Detta är en normal reaktion och en del av den naturliga läkningsprocessen. Efter behandlingen kommer du att få detaljerade instruktioner för att ta hand om huden hemma. Den frysta hudförändringen kommer att torka och så småningom falla av inom några veckor, vilket lämnar ett jämnare och renare hudområde.</p>',
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

$types_title = 'Vilka hudförändringar kan CryoPen avlägsna?';
$types_description = 'CryoPen är en avancerad behandlingsteknik inom kryoterapi som specialiserar sig på att noggrant och effektivt frysa bort ett brett spektrum av hudförändringar.';
$types = array(
    new Service(
        title: 'CryoPen mot ansiktsvårtor',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har ansiktsvårtor.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen för ansiktsvårtor',
        image_title: 'CryoPen för ansiktsvårtor',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för behandling av ansiktsvårtor',
        consultation_url_title: 'Boka konsultation för behandling av ansiktsvårtor',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka CryoPen för ansiktsvårtor',
        booking_url_title: 'Boka CryoPen för ansiktsvårtor',
    ),
    new Service(
        title: 'CryoPen av fibrom',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har fibrom.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen för fibrom',
        image_title: 'CryoPen för fibrom',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för behandling av fibrom',
        consultation_url_title: 'Boka konsultation för behandling av fibrom',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_fibrom',
        booking_url_label: 'Boka CryoPen för fibrom',
        booking_url_title: 'Boka CryoPen för fibrom',
    ),
    new Service(
        title: 'CryoPen av födelsemärken',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har födelsemärken.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen för födelsemärken',
        image_title: 'CryoPen för födelsemärken',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för behandling av födelsemärken',
        consultation_url_title: 'Boka konsultation för behandling av födelsemärken',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_fodelsemarken',
        booking_url_label: 'Boka CryoPen för födelsemärken',
        booking_url_title: 'Boka CryoPen för födelsemärken',
    ),
    new Service(
        title: 'CryoPen av Hallonmärke - Jordgubbsmärke - Smultronmärke',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hallonmärken, jordgubbsmärken eller smultromärken.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen av kärlförändringar',
        image_title: 'CryoPen av kärlförändringar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för kärlförändringar',
        consultation_url_title: 'Boka konsultation för kärlförändringar',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_smultronmarke',
        booking_url_label: 'Boka CryoPen för kärlförändringar',
        booking_url_title: 'Boka CryoPen för kärlförändringar',
    ),
    new Service(
        title: 'CryoPen av hemangiom',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hemangiom.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen för hemangiom',
        image_title: 'CryoPen för hemangiom',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för hemangiom',
        consultation_url_title: 'Boka konsultation för hemangiom',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_angiom',
        booking_url_label: 'Boka CryoPen för hemangiom',
        booking_url_title: 'Boka CryoPen för hemangiom',
    ),

    new Service(
        title: 'CryoPen av hudflikar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hudflikar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen för hudflikar',
        image_title: 'CryoPen för hudflikar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för behandling av hudflikar',
        consultation_url_title: 'Boka konsultation för behandling av hudflikar',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_skintags',
        booking_url_label: 'Boka CryoPen för hudflikar',
        booking_url_title: 'Boka CryoPen för hudflikar',
    ),
    new Service(
        title: 'CryoPen för leverfläckar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har leverfläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen av leverfläckar',
        image_title: 'CryoPen av leverfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för leverfläckar',
        consultation_url_title: 'Boka konsultation för leverfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_leverflackar',
        booking_url_label: 'Boka CryoPen för leverfläckar',
        booking_url_title: 'Boka CryoPen för leverfläckar',
    ),
    new Service(
        title: 'CryoPen för seborroisk keratos',
        duration: '15 minuter',
        price: '895 kr',
        content: 'För dig som har seborroisk keratos.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen av seborroisk keratos',
        image_title: 'CryoPen av seborroisk keratos',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för seborroisk keratos',
        consultation_url_title: 'Boka konsultation för seborroisk keratos',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_seborroisk_keratos',
        booking_url_label: 'Boka CryoPen för seborroisk keratos',
        booking_url_title: 'Boka CryoPen för seborroisk keratos',
    ),
    new Service(
        title: 'CryoPen för skintags',
        duration: '15 minuter',
        price: '895 kr',
        content: 'För dig som har skintags.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen av hudflikar',
        image_title: 'CryoPen av hudflikar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för hudflikar',
        consultation_url_title: 'Boka konsultation för hudflikar',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Problem_skintags',
        booking_url_label: 'Boka CryoPen för hudflikar',
        booking_url_title: 'Boka CryoPen för hudflikar',
    ),
    new Service(
        title: 'CryoPen för åldersfläckar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har åldersfläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'CryoPen av åldersfläckar',
        image_title: 'CryoPen av åldersfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation för åldersfläckar',
        consultation_url_title: 'Boka konsultation för åldersfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka CryoPen för åldersfläckar',
        booking_url_title: 'Boka CryoPen för åldersfläckar',
    ),
);

$treatment_areas_title = 'Användningsområden för CryoPen Behandling';
$treatment_areas_text = '<p class="p200">CryoPen erbjuder en mångsidig lösning för att avlägsna hudförändringar i många olika delar av kroppen. Med dess precision kan behandlingen utföras på känsliga och svåråtkomliga områden som ansiktet, samt mer utbredda regioner som hals, axlar, och rygg. CryoPen är idealisk för att behandla enstaka eller flera hudförändringar, oavsett deras storlek och placering, och anpassas för att leverera optimala resultat för varje unikt fall.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Antal hudförändringar',
        image_title: 'Antal hudförändringar',
        title: 'Antal hudförändringar',
        description: '<p class="p200">Behandlingen utgår ifrån antalet hudförändringar du vill behandla..</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '1 st',
                image_title: '1 st',
                title: '1 st',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_1',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '2 - 3 st',
                image_title: '2 - 3 st',
                title: '2 - 3 st',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_1',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '4 - 6 st',
                image_title: '4 - 6 st',
                title: '4 - 6 st',
                duration: '20 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_4-6',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '7 - 10 st',
                image_title: '7 - 10 st',
                title: '7 - 10 st',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_7-10',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '20 st',
                image_title: '20 st',
                title: '20 st',
                duration: '30 min',
                price: '4995 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_20',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '50 st',
                image_title: '50 st',
                title: '50 st',
                duration: '70 min',
                price: '9995 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&problem=SKIP&quantity=PriceClass_Skin_Imperfections_50',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Återbesök',
                image_title: 'Återbesök',
                title: 'Återbesökt',
                duration: '20 min',
                price: 'Från 250 kr',
                url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=Cryopen_aterbesok',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),

        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter CryoPen',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Efter CryoPen',
    image_title: 'Efter CryoPeng',
    content: '<p class="p200">Efter en CryoPen-behandling är korrekt eftervård avgörande för att säkerställa en effektiv läkning och undvika komplikationer. Direkt efter behandlingen kan området vara rött och svullet, vilket är normalt. Det är viktigt att skydda det behandlade området från att smutsas ner; undvik därför att röra det med händerna och att applicera smink inom de första 24 timmarna efter ingreppet.</p>
    <p class="p200 mt-m">För att minska risken för irritation och svullnad, bör du avstå från att delta i ansträngande aktiviteter som intensiv träning, bastu och exponering för mycket varmt vatten under de initiala dagarna efter behandlingen. Även om det behandlade området inte utsätts för direkt solljus, är det kritiskt att applicera solskydd för att skydda huden mot UV-strålning och understödja läkningsprocessen.</p>
    <p class="p200 mt-m">Det är viktigt att du följer de eftervårdsinstruktioner som din hudterapeut ger dig. Om du upplever några osäkerheter eller bekymmer angående din läkning efter behandlingen, kontakta din klinik för råd. Baserat på din huds respons på behandlingen rekommenderas en eller flera uppföljningar eller behandlingar för optimala resultat.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Metoder för CryoPen';
$service_brands_text = '<p class="p200">Cryopen är en form av frysbehandling</p>';
$service_brands = array(

    new Brand(
        label: 'Frysbehandling',
        image: 'bilder/logotyper/cryopen.svg',
        image_alt: 'Frysbehandling',
        image_title: 'Frysbehandling',
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
            title: 'Vilken är den vanliga läkningstiden efter en behandling med CryoPen?',
            text: 'Läkningstiden efter en CryoPen-behandling varierar beroende på individens hudtyp, omfattningen och storleken på de behandlade hudförändringarna. Små lesioner tenderar att läka inom några dagar, medan större eller fler behandlade områden kan kräva flera veckor. Initial svullnad och rodnad är att förvänta och bör subside inom de första dagarna post-behandling.'
        ),
        new Question(
            title: 'Finns det en risk att hudförändringar återkommer efter att ha använt CryoPen?',
            text: 'CryoPen är utformad för att permanent eliminera behandlade hudförändringar. Även om de specifika förändringarna som behandlats typiskt inte återkommer, är det möjligt att nya hudförändringar kan utvecklas på andra områden av huden. Att upprätthålla en bra hudvårdsrutin och att skydda huden mot överdriven solexponering kan minska sannolikheten för framtida hudproblem.'
        ),
        new Question(
            title: 'Vad ska jag undvika efter behandling med CryoPen?',
            text: 'Efter en CryoPen-behandling är det viktigt att inte röra det behandlade området med orena händer för att förhindra infektion. Du bör också skydda området från direkt solljus och använda solskydd för att undvika pigmentförändringar. Undvik att applicera makeup, utsättande för intensiv värme såsom bastu, och att ta långa varma duschar under de första 24 till 48 timmarna. Dessa försiktighetsåtgärder bidrar till att ge din hud de bästa förutsättningarna för att läka på ett korrekt sätt.'
        ),
        new Question(
            title: 'Hur många återbesök kan behövas efter en CryoPen-behandling?',
            text: 'Vanligtvis kan 1-3 återbesök vara tillräckliga för att uppnå önskat resultat med CryoPen-behandling. Detta antagande baseras på genomsnittliga fall där hudförändringarna är av mindre storlek och reagerar väl på behandlingen. Det är dock viktigt att notera att varje individs hud är unik, och i vissa fall kan det vara nödvändigt med fler behandlingar för att fullständigt avlägsna hudförändringar, särskilt om de är större, djupare eller om det finns ett större antal att behandla.'
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
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                            </picture>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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