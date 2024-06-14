<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Pormaskar - Effektiv Behandling och Förebyggande';
$seo_description = 'Lär dig allt om behandlingen av pormaskar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis.';
$seo_keywords = 'pormaskar, portömning, pormaskbehandling, orsaker till pormaskar, förebygga pormaskar, ta bort pormaskar, djupa porer, rengöring av porer, svarta prickar, vita pormaskar';
$seo_image = '/bilder/hudproblem/424x456/pormaskar.webp';

$path_segments = array(
    new PathSegment('Hudbehandlingar', '/hudbehandlingar'),
    new PathSegment('Behandlingar mot pormaskar', '/hudbehandlingar/pormaskar/'),
);

$model = new Service(
    title: 'Behandlingar mot pormaskar',
    duration: null,
    price: null,
    content: 'Här har vi samlat de mest effektiva metoderna för behandling av pormaskar som hjälper dig att effektivt reducera synligheten av porer och få bort pormaskar. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">pormaskbehandling</a> som bäst passar din hudtyp för att rengöra och förminska porer? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en klarare och friskare hy.',
    image_small: '/bilder/hudproblem/424x324/pormaskar.webp',
    image_large: '/bilder/hudproblem/424x456/pormaskar.webp',
    image_alt: 'Bild som illustrerar pormaskar',
    image_title: 'Pormaskar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Vi behandlar pormaskar';

$about_title = 'Hur vi reducerar och behandling av pormaskar';

$about_content = '<p class="p200">Att behandla och reducera pormaskar kräver rätt behandlingar och produkter. På AcneSpecialisten använder vi vår långa erfarenhet och expertis för att effektivt och regelbundet minska synligheten och få bort pormaskar. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att rensa och minimera porerna, vilket förhindrar ansamling av talg och döda hudceller. Efter att porerna har behandlats hjälper vi dig att skapa en anpassad hudvårdsrutin med produkter mot pormaskar för att förhindra att de blir blockerade igen. Om dina pormaskar har lett till andra hudproblem, har vi lösningar för att förbättra huden. Vi ser fram emot att bli din guide på resan mot att reducera pormaskar och återfå en klarare, friskare hy.</p>';

$headline01 = "01. Identifiera dina pormaskar";

$define_image_alt = 'Hur vi reducerar och behandlar pormaskar?';
$define_image_title = 'Hur vi reducerar och behandlar pormaskar?';

$define_content = '<p class="p200">Första steget i vår process att behandla pormaskar är att kartlägga omfattningen av dina pormaskar. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. Din personliga hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "klicka här för att boka din kostnadsfria hudkonsultation mot pormaskar";

$headline02 = "02. Behandla pormaskar";

$treat_content = '<p class="p200">Här är målet framför allt att rensa och rengöra porerna på djupet. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process rensar vi bort döda hudceller, kontrollerar talgproduktionen och säkerställer att porerna förblir rena.</p>';

$services = array(
    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Effektiv Ansiktsbehandling mot Pormaskar på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot pormaskar utförd på Acnespecialisten',

        title: 'Ansiktsbehandling mot Pormaskar',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array(),
        content: '<p class="p200">Ansiktsbehandling mot pormaskar på Acnespecialisten är speciellt framtagen för att djuprengöra huden, avlägsna döda hudceller och bekämpa tilltäppta porer. Processen börjar med en rengöring, följt av ångning för att mjuka upp och öppna porerna. Därefter görs en noggrann porrengöring där pormaskar och andra orenheter avlägsnas. Behandlingen avrundas med en lugnande mask och en fuktgivande kräm som är anpassad för din hudtyp.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Pormaskar på Acnespecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Pormaskar på Acnespecialisten',

        url: '/problemhy.php',
        url_label: 'Läs mer om ansiktsbehandlingar mot pormaskar',
        url_title: 'Läs mer om ansiktsbehandlingar mot pormaskar',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser.webp',
        image_title: 'Klient som genomgår laserbehandling mot pormaskar',
        image_alt: 'Bild av laserbehandling mot pormaskar hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling riktad mot pormaskar hos AcneSpecialisten använder ljusenergi för att specifikt behandla och minska pormaskarnas synlighet. Laserstrålens penetration i huden fokuserar på de områden där pormaskarna dominerar, balanserar hudens talgproduktion och minskar ansamlingen av döda hudceller, vilket ofta är orsaken till pormaskar.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot pormaskar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot pormaskar nu',
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        url_label: 'Läs mer om laser mot pormaskar',
        url_title: 'Läs mer om laser mot pormaskar',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för pormaskar',
        image_alt: 'Bild på kemisk peelingbehandling mot pormaskar hos Acnespecialisten',
        title: 'Kemisk peeling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">För att effektivt behandla pormaskar starka syror under en kemisk peeling behandling. Vi applicerar en särskilt framtagen lösning på huden som avlägsnar det översta lagret av hudceller och luckra upp tilltäpta porer. Genom att ge plats för ny, frisk hud att framträda, minskas synligheten av pormaskar samtidigt som hudens textur och utseende förbättras betydligt.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot pormaskar',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot pormaskar',
        url_title: 'Läs mer om kemisk peeling mot pormaskar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot pormaskar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för pormaskar',
        image_alt: 'Bild på microneedlingbehandling mot pormaskar hos Acnespecialisten',
        title: 'Effektiv microneedling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Microneedling erbjuds som en kraftfull metod för att bekämpa pormaskar. Genom att använda mikronålar skapas små kanaler i huden, vilket uppmuntrar hudens naturliga läkning och ökar kollagen- och elastinproduktionen. Microneedling adresserar även de bakomliggande orsakerna till pormaskar genom att tillåta aktiva ingredienser att penetrera djupare in i huden, vilket aktivt bidrar till att minska både storlek och mängd av pormaskar.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot pormaskar',
        url: '/microneedling.php',
        url_label: 'Läs mer om microneedling mot pormaskar',
        url_title: 'Läs mer om microneedling mot pormaskar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot pormaskar nu',
        short_title: 'Microneedling'
    ),

);

$headline03 = "03. Förebygg pormaskar";

$products = array(
    new Product(
        image_small: null,
        image_large: null,
        image_title: 'AcneSpecialistens effektiva hudvårdsprodukter mot pormaskar',
        image_alt: 'Bild på AcneSpecialistens hudvårdsprodukter mot pormaskar',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
        url_label: 'Utforska våra hudvårdsprodukter mot pormaskar',
        url_title: 'Information om AcneSpecialistens hudvårdsprodukter mot pormaskar',
        price: 'AcneSpecialistens hudvårdsprodukter mot pormaskar - Pris från 1295 kr',
        content: '<p class="p200">Bekämpning av pormaskar kräver en riktad strategi, och att använda rätt hudvårdsprodukter är kärnan i denna process. Hos AcneSpecialisten förstår vi detta behov och erbjuder en skräddarsydd daglig hudvårdsrutin designad specifikt för att hantera pormaskar. Med rätt produkter ser denna rutin till att din hud är ren, balanserad, och framför allt, fri från det som orsakar pormaskar. Med konsekvent användning kan du inte bara minska befintliga pormaskar men också effektivt förhindra nya från att uppträda. Genom att följa denna rutin kompletterar du perfekt de behandlingar du gör hos oss på AcneSpecialisten.</p>',
    ),
);

$results = array(
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot pormaskar";
$show_all_results_title = "Resultat mot pormaskar";

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

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";


$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka är de mest effektiva behandlingarna för pormaskar?',
            text: '<p class="p200">De mest effektiva behandlingarna för att ta hand om pormaskar kan variera från person till person, men det finns flera allmänt erkända metoder som har visat sig vara effektiva. Hudvårdsprodukter i kombination med portömning utförd av kvalificerade hudterapeuter behandlar effektivt pormaskar. Detta är en omedelbar lösning och resultat kan ses direkt efter behandlingen, även om uppföljande behandlingar ofta är nödvändiga för långsiktiga resultat.</p>'
        ),
        new Question(
            title: 'Är det bra eller dåligt att klämma pormaskar?',
            text: '<p class="p200">Det är generellt inte rekommenderat att själv klämma pormaskar eftersom det kan leda till infektion, inflammation och potentiell ärrbildning. Professionella portömningar utförda av en hudvårdsspecialist är ett säkrare alternativ.</p>
            <p class="p200 mt-m">När du klämmer en pormask, riskerar du att trycka ned bakterier och talg djupare in i huden, vilket kan leda till en allvarligare infektion. Därför är det bäst att låta en professionell hudvårdsterapeut hantera det för att minimera risken för komplikationer.</p>'
        ),
        new Question(
            title: 'Vilka risker finns det med att behandla pormaskar själv?',
            text: '<p class="p200">Behandla pormaskar själv kan leda till skada på huden, inklusive infektioner, ärrbildning, och ökad inflammation. Dessutom kanske man inte väljer den mest effektiva behandlingen för sin hudtyp eller problem.</p>
            <p class="p200 mt-m">Felaktig användning av verktyg eller produkter, såsom pormaskborttagare, kan också skada huden och förvärra tillståndet. För att undvika dessa risker är det viktigt att konsultera en kvalificerad hudvårdsspecialist.</p>'
        ),
        new Question(
            title: 'Kan man helt bli av med pormaskar?',
            text: '<p class="p200">Det kan vara svårt att helt och hållet eliminera pormaskar eftersom de kan uppstå på grund av en rad olika faktorer som hormoner, diet, och hudvård. Men genom en kombination av professionella behandlingar och rätt hudvårdsrutin kan du dramatiskt minska deras förekomst och förhindra nya från att uppstå.</p>
            <p class="p200 mt-m">Det är också viktigt att ha realistiska förväntningar. Medan professionell behandling kan minimera och kontrollera pormaskar, kräver det ofta en långsiktig plan och konsekvent hudvård för att upprätthålla resultaten.</p>'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pormaskbehandling";

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

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider om pormaskbehandling";

$specialists = array(
    new Specialist(
        name: 'Cassandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_title: 'Cassandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cassandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten'
    ),
    new Specialist(
        name: 'Jennifer Eklund',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_title: 'Amira Maqboul, Hudterapeut på Acnespecialisten',
        image_alt: 'Amira Maqboul, hudterapeut sedan 2017 på Acnespecialisten'

    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_title: 'Vilma Libom, Hudterapeut på Acnespecialisten',
        image_alt: 'Vilma Libom, hudterapeut sedan 2019 på Acnespecialisten'
    )
);

$specialist_url_label = "Se alla hudterapeuter på pormaskar";
$specialist_url_title = "Pormask Specialiserade Hudterapeuter";

$brands = array(
    new Brand(
        label: 'DAHL Skincare',
        image: 'bilder/logotyper/dahl-skincare.webp',
        image_alt: 'DAHL Skincare logotyp',
        image_title: 'DAHL Skincare - hudvårdsprodukter',
        url: 'https://dahlskincare.se',
        url_title: 'DAHL Skincare',
    ),
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_title: 'Alma Hybrid - CO2 laser',
        image_alt: 'Alma Hybrid logotyp',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Läs mer om Alma Hybrid CO2 laser',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_title: 'Harmony XL Pro - Laser & IPL',
        image_alt: 'Harmony XL Pro logotyp',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen Brand Logo',
        image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
        url: '/dermapen.php',
        url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_title: 'Skin Tech - Professionella kemiska peelingar',
        image_alt: 'Skin Tech logotyp',
        url: '/varumarken/skin-tech',
        url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för pormaskbehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/pormaskar/" />
      
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

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="hudproblem/treatment.css">
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
                    <h2 class="h500"><?php echo $about_title; ?></h2>
                    <div class="mt-xl"><?php echo $about_content ?></div>
                </section>
                <section id="define">
                    <h2 class="h500 l10n"><?php echo $headline01; ?></h2>
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_link ?>" title="<?php echo $define_consultation_link_title ?>" class="mt-xl button b200 l10n"><?php echo $define_consultation_link_label ?></a>
                </section>
                <section id="treat">
                    <h2 class="h500 l10n"><?php echo $headline02 ?></h2>
                    <div class="mt-xs">
                        <?php echo $treat_content ?>
                        </p>
                        <?php foreach ($services as $service) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <?php if (isset($products) && sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2 class="h500 l10n"><?php echo $headline03 ?></h2>
                        <?php foreach ($products as $product) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/hudproblem/widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $review_url_title ?>" href="https://se.trustpilot.com/review/acnespecialisten.se"><?php echo $review_url_label ?></a>
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="/hudterapeut" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>