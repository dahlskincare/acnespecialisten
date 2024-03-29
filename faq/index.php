<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$faq_categories = array(
    'Behandlingar' => array(
        new Question('Hur går metoden till?', '<p class="p200">Det första vi gör är att du kommer in till oss på en gratis hudkonsultation. Här konstaterar vi din hudtyp och går igenom vad vi skulle kunna göra för dig och vilka behandlingar och hudvårdsprodukter som passar just dig och din hudtyp. I samband med detta kan vi boka in dig på en första behandling. Vid den första behandlingen tar vi alltid bilder på ditt ansikte för att kunna jämföra med resultatet senare. Detta har även du tillgång till då du loggar in på din egna kundsida för att se din hudtyp, behandlingsrekommendationer, produktrekommendationer samt före och efter bilder. Därefter tar vi nya bilder vid varje besök så att vi tillsammans kan följa utvecklingen av din hy.</p>'),
        new Question('Varför skulle era metoder fungera när allt annat jag har provat tidigare aldrig har fungerat?', '<p class="p200">Det är många som är skeptiska och nästan förbannade när de kommer till oss och ifrågasätter varför vi skulle vara så mycket bättre än alla de andra salongerna/klinikerna/läkare de varit hos. Svaret är att vi har behandlat problemhy framgångsrikt sedan 1994 och vi skulle aldrig vart så länge i branschen om det inte hjälpte och gav resultat. Behandlingarna och hudvårdsprodukterna innehåller den rätta kombinationen av bakteriedödande och talgdämpande effekt samt rika mjukgörande och återfuktande hudvårdsprodukter som inte täpper till porerna, detta i kombination med ordentligt djuprengörande ansiktsbehandlingar ger en perfekt kombination för problemhy.</p>'),
        new Question('Kan man bota acne / problemhy?', '<p class="p200">Det går inte att bota acne och annan problemhy, inte ens med receptbelagda preparat. Men med hjälp av vår unika 3 stegs metod återskapas den naturliga balansen i huden vilket effektivt håller din problemhy under kontroll.</p>'),
        new Question('Kan jag klämma mina egna pormaskar?', '<p class="p200">Låt bli att klämma dina pormaskar. När en utbildad hudterapeut tar hand om pormaskar görs mycket mer än att bara klämma dem. Gör du fel kan inflammationer uppstå och det kan bli fula ärr.</p>'), 
    ),
    'Bokning' => array(
        new Question('Hur bokar jag en tid för behandling?', '<p class="p200">Du kan boka en tid för behandling genom att besöka vår hemsida och välja den tjänst du är intresserad av. Alternativt kan du kontakta vår kundtjänst direkt för personlig assistans.</p>'),
        new Question('Kan jag ändra eller avboka min bokning?', '<p class="p200">Ja, du kan ändra eller avboka din bokning. Vi ber dig att meddela oss så snart som möjligt om du behöver göra ändringar i din bokning då den ska genomföras minst 24 timmar innan den bokade tiden.</p>'),
    ),
    'Produkter' => array(
        new Question('Är det viktigt att följa behandlingsrutinerna?', '<p class="p200">Ja, det är viktigt att följa de rekommenderade behandlingsrutinerna för att uppnå de bästa resultaten och undvika försämring av hudens tillstånd.</p>'),
        new Question('Måste jag göra behandling innan jag börjar med hudvårdsprodukterna?', '<p class="p200">För att få de snabbaste och bästa resultaten bör du göra en till tre behandlingar för att verkligen få rent i din hy innan du börjar med hudvårdsprodukterna. Om du inte kan ta dig till en AcneSpecialisten salong föreslår vi att du pratar med din närmaste auktoriserade hudterapeut.</p>'),
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
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Vanliga Frågor</title>
    <meta name="description" content="Hitta svar på de vanligaste frågorna om AcneSpecialistens hudvårdsbehandlingar, metoder och produkter." class="l10n">
    <meta name="title" content="Vanliga Frågor - AcneSpecialisten" class="l10n">
    <meta name="keywords" content="hudvård, acnebehandling, hudproblem, frågor och svar, AcneSpecialisten, hudterapi" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/faq/faq.css">
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
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Omdömen</div>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">Se alla omdömen</a>
            </section>
            <!--Hudguide-->
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