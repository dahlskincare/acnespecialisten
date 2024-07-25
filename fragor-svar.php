<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$path_segments = [
    new PathSegment('Frågor & Svar', 'fragor-svar.php'),
];

$faq_categories = array(
    'Bokning' => array(
        new Question('Hur bokar jag en tid för behandling?', '<p class="p200">Du kan boka en tid för behandling genom att besöka vår hemsida och välja den tjänst du är intresserad av. Alternativt kan du kontakta vår kundtjänst direkt för personlig assistans.</p>'),
        new Question('Kan jag ändra eller avboka min bokning?', '<p class="p200">Ja, du kan ändra eller avboka din bokning. Vi ber dig att meddela oss så snart som möjligt om du behöver göra ändringar i din bokning då den ska genomföras minst 24 timmar innan den bokade tiden.</p>'),
    ),
    'Problemhy' => array(
        new Question('Är det något man ska tänka på med nya acneärr / fläckar då det gäller solen?', '<p class="p200">Tänk på att nya ärr / fläckar efter acne bör skyddas mot starkt solljus så att de inte blir mörkare. Ärr är nämligen mycket känsligare mot solen än vanlig hud. Detta beror på att ärrvävnad saknar de celler som tillverkar melanin som är kroppens egna solskydd. Solens skadliga UVA/B strålar kan missfärga ärret i en ljusare eller mörkare färg. Missfärgningen är ofta permanent och resultatet kan bli att ärret inte återgår till samma färg som omkringliggande hud. Därför är det viktigt att använd SPF 30 över din vanliga dagkräm om du ska vistas ute mycket i solen, gäller även när man åker upp till fjällen, då snön reflekterar solen precis som sanden och vattnet på stranden.</p>'),
        new Question('Kan jag sola när jag använder hudvårdsprodukterna?', '<p class="p200">Undvik stark sol de första två veckorna under intensivbehandlingen samt direkt efter intensivbehandlingen då du är extra känslig i din hy. Använd SPF 30 om du vistas utomhus och det är soligt, skydda gärna extra med t.ex. en hatt eller keps. När du använt hudvårdsprodukterna ett tag kan du sola som vanligt då du i fortsättningen kommer att använda gelen endast över natten. Se dock till att tvätta av ordentligt på morgonen samt att du gärna använder SPF över din kräm om det är soligt för att skydda din hud. Detta gäller för alla som använder DAHLs hudvårdsprodukter.</p>'),
        new Question('Är det något i min kost jag bör undvika såsom choklad, fet mat mm?', '<p class="p200">The journal of the American Medical Association säger att: "Diet plays no role in acne treatment in most patients, even large amount of certain foods have not clinically exaseratet acne" det betyder att dieten man intar under acnebehandlingar inte spelar någon större roll, även stora intag av viss mat, har inte visat sig ha någon kliniskt bevisat dålig effekt på acnen.</p>
            <p class="p200">Det finns en annan studie som forskare i Australien utförde där man delade upp acnedrabbade män i åldrarna 15-25 år, den ena gruppen fick inta en diet av kolhydrater med högt GI (vitt bröd, sockerhaltiga drycker, snacks etc.) och den andra gruppen, en proteinrik diet med kolhydrater med lågt GI (fullkornsbröd/pasta, baljväxter etc.). Efter 12 veckor så visade den gruppen som fått den proteinrika dieten med kolhydrater med lågt GI ha fått en 50 procentig minskning av sin acne.</p>
            <p class="p200">Socker och vitt mjöl som snabbt höjer insulinet är sannolikt den främsta orsaken, och då kan man se ett samband med hormonerna, att när de kommer i obalans så påverkas även huden, vilket kan resultera i acne. En annan studie som utförts av en dermatolog vid namn Jerome Fischer, har sambandet mellan mejeriprodukter och acne, utretts på över tusen acnepatienter. Hans teori är att de könshormoner som finns i mjölken är det som ställer till problemen. Sambanden mellan manliga könshormoner och acne är sedan länge kända och Fisher tror att detsamma kan gälla med de kvinnliga könshormonerna. 80 procent av alla mjölkande kor är dräktiga vilket gör att de släpper ut stora mängder hormoner i mjölken som vi sedan dricker. I kombination med de hormoner som finns naturligt i människokroppen under tonåren blir det helt enkelt för mycket för kroppen att hantera. Särskilt om insulinnivåerna dessutom är höga för att dra en parallell till den australiska studien. Huden, som även är ett utrensningsorgan, får jobba hårt med att bli av med allt hormonöverskott och finns anlag så blir resultatet finnar och pormaskar.</p>
            <p class="p200">Så slutsatsen blir både ja och nej, det finns mycket att säga om acne och vilken typ av kost man bör äta och inte äta. Det vi brukar säga är att det finns inget som säger att viss mat verkligen ger acne, men det är alltid det bästa att äta en bra varierad kost så att man hjälper sin hud på bästa sätt med att tillföra alla nödvändiga vitaminer och mineraler. Det gör att huden och kroppen mår så bra som den kan bara kan må och då har man de bästa förutsättningarna. Dessutom är det ju så att vissa är känsligare än andra och är det så att man märker att huden blir sämre av viss kost så kan det ju vara bra att undvika att äta det man reagerar på för ofta. För fel kost är inte grundproblemet till acne, det är hormonerna, men det kan självklart bidra.</p>'),
        new Question('Vad är det för skillnad mellan tonårs acne och vuxenacne?', '<p class="p200">Tonårsacnen har sin gång och den växer man oftast ifrån, men så länge acnen blomstrar bör man använda DAHL Skincare produkterna. Vuxenacne har man i stort sett hela sitt liv, den minskar dock ju äldre man blir, då talgproduktionen blir mindre med åren. Det som är likheten med de båda är att det handlar om hormoner, i tonåren när alla hormoner rusar i kroppen påverkas också talgproduktion i huden vilket leder till obalans.</p>'),
    ),
    'Betalning' => array(
        new Question('Kan jag få pengarna tillbaka för presentkort och behandlingspaket?', '<p class="p200">Nej tyvärr, det är inte möjligt att få pengarna tillbaka för presentkort och behandlingspaket men du kan självklart använda resterande belopp till andra behandlingar hos oss.</p>'),
        new Question('Vilka betalningsalternativ erbjuder ni?', '<p class="p200">På AcneSpecialisten erbjuder vi flera betalningsalternativ för din bekvämlighet. Du kan betala för dina behandlingar och produkter med Klarna, Qliro och Swish.</p>')
    ),
    'Behandlingar' => array(
        new Question(
            title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
            text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
        ),
        new Question(
            title: 'Vad är den genomsnittliga tidsåtgången för en behandling?',
            text: 'En typisk behandling hos AcneSpecialisten tar mellan 60 och 90 min, beroende på behandlingens art och dina individuella hudvårdsbehov.'
        ),
        new Question(
            title: 'Hur många behandlingar rekommenderas för att uppnå synliga resultat?',
            text: 'Antalet rekommenderade behandlingar varierar beroende på individens hudproblem och hudtyp. I genomsnitt ser kunderna betydande förbättringar efter 2-4 behandlingssessioner.'
        ),
        new Question(
            title: 'Är behandlingarna hos AcneSpecialisten smärtsamma?',
            text: 'Vi strävar efter att göra våra behandlingar så bekväma som möjligt. Viss lätt smärta kan upplevas under behandling av inflammerade områden eller vid extraktioner, men denna känsla är övergående och hanteras med största omsorg för din komfort.'
        ),
        new Question(
            title: 'Anpassar ni behandlingarna för olika hudtyper?',
            text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
        ),
    ),
    'Konsultationer' => array(
        new Question(
            title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
            text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
            text: 'Under konsultationen kommer en av våra hudspecialister att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
        ),
    ),
    'Produkter' => array(
        new Question(
            title: 'Hur kan jag hitta de rätta produkterna för min hudtyp?',
            text: 'För att hitta de produkter som passar just din hudtyp bäst, erbjuder vi kostnadsfria hudkonsultationer där våra experter analyserar din hud och rekommenderar produkter anpassade efter dina unika behov och hudtillstånd.'
        ),
    ),
    'Skötselråd och rutiner' => array(
        new Question(
            title: 'Vilka eftervårdstips bör jag följa efter en behandling?',
            text: 'Efter en behandling rekommenderar vi specifika eftervårdstips för att maximera behandlingens effektivitet och stödja din huds läkningsprocess. Detta kan inkludera råd om fuktgivande, solskydd och hur du undviker vissa produkter eller aktiviteter under en viss tid.'
        ),
    ),
    'Priser och betalning' => array(
        new Question(
            title: 'Hur kan jag ta reda på priserna för era behandlingar?',
            text: 'Våra behandlingspriser finns listade på vår hemsida. För varje specifik behandling hittar du detaljerad prisinformation som hjälper dig att planera ditt besök.'
        ),
        new Question(
            title: 'Erbjuder ni några paketpriser eller rabatter för flera behandlingar?',
            text: 'Ja, vi erbjuder ibland paketpriser eller rabatter vid bokning av flera behandlingar. Detta är ett utmärkt sätt att få en omfattande behandling till ett reducerat pris. För mer information om aktuella erbjudanden, besök vår hemsida eller kontakta oss direkt.'
        ),
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/fragor-svar.php" />

    <title class="l10n">Frågor & svar - AcneSpecialisten</title>
    <meta name="title" content="Frågor & Svar - AcneSpecialisten" class="l10n">
    <meta name="description" content="Frågor & svar AcneSpecialisten, här får du svar på några av de vanligaste frågorna" class="l10n">
    <meta name="keywords" content="hudvård, acnebehandling, hudproblem, frågor och svar, AcneSpecialisten, hudterapi" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/faq/faq.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <section id="title">
                <h1 class="h600 l10n">Frågor & Svar</h1>
                <p class="mt-s p200 l10n">Här hittar du svaren på några av de vanligaste frågorna vi får från våra kunder.</p>
            </section>
            <section id="faq">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
            </section>
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
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