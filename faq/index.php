<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$faq_categories = array(
    'Behandlingar' => array(
        new Question('Hur går metoden till?', 'Det första vi gör är att du kommer in till oss på en gratis hudkonsultation. Här konstaterar vi din hudtyp och går igenom vad vi skulle kunna göra för dig och vilka behandlingar och hudvårdsprodukter som passar just dig och din hudtyp. I samband med detta kan vi boka in dig på en första behandling. Vid den första behandlingen tar vi alltid bilder på ditt ansikte för att kunna jämföra med resultatet senare. Detta har även du tillgång till då du loggar in på din egna kundsida för att se din hudtyp, behandlingsrekommendationer, produktrekommendationer samt före och efter bilder. Därefter tar vi nya bilder vid varje besök så att vi tillsammans kan följa utvecklingen av din hy.'),
        new Question('Varför skulle era metoder fungera när allt annat jag har provat tidigare aldrig har fungerat?', 'Det är många som är skeptiska och nästan förbannade när de kommer till oss och ifrågasätter varför vi skulle vara så mycket bättre än alla de andra salongerna/klinikerna/läkare de varit hos. Svaret är att vi har behandlat problemhy framgångsrikt sedan 1994 och vi skulle aldrig vart så länge i branschen om det inte hjälpte och gav resultat. Behandlingarna och hudvårdsprodukterna innehåller den rätta kombinationen av bakteriedödande och talgdämpande effekt samt rika mjukgörande och återfuktande hudvårdsprodukter som inte täpper till porerna, detta i kombination med ordentligt djuprengörande ansiktsbehandlingar ger en perfekt kombination för problemhy.'),
        new Question('Kan man bota acne / problemhy?', 'Det går inte att bota acne och annan problemhy, inte ens med receptbelagda preparat. Men med hjälp av vår unika 3 stegs metod återskapas den naturliga balansen i huden vilket effektivt håller din problemhy under kontroll.'),
        new Question('Kan jag klämma mina egna pormaskar?', 'Låt bli att klämma dina pormaskar. När en utbildad hudterapeut tar hand om pormaskar görs mycket mer än att bara klämma dem. Gör du fel kan inflammationer uppstå och det kan bli fula ärr.'), 
    ),
    'Bokning' => array(
        new Question('Hur bokar jag en tid för behandling?', 'Du kan boka en tid för behandling genom att besöka vår hemsida och välja den tjänst du är intresserad av. Alternativt kan du kontakta vår kundtjänst direkt för personlig assistans.'),
        new Question('Kan jag ändra eller avboka min bokning?', 'Ja, du kan ändra eller avboka din bokning. Vi ber dig att meddela oss så snart som möjligt om du behöver göra ändringar i din bokning då den ska genomföras minst 24 timmar innan den bokade tiden.'),
    ),
    'Produkter' => array(
        new Question('Är det viktigt att följa behandlingsrutinerna?', 'Ja, det är viktigt att följa de rekommenderade behandlingsrutinerna för att uppnå de bästa resultaten och undvika försämring av hudens tillstånd.'),
        new Question('Måste jag göra behandling innan jag börjar med hudvårdsprodukterna?', 'För att få de snabbaste och bästa resultaten bör du göra en till tre behandlingar för att verkligen få rent i din hy innan du börjar med hudvårdsprodukterna. Om du inte kan ta dig till en AcneSpecialisten salong föreslår vi att du pratar med din närmaste auktoriserade hudterapeut.'),
    ),
    'Problemhy' => array(
        new Question('Är det något man ska tänka på med nya acneärr / fläckar då det gäller solen?', 'Tänk på att nya ärr / fläckar efter acne bör skyddas mot starkt solljus så att de inte blir mörkare. Ärr är nämligen mycket känsligare mot solen än vanlig hud. Detta beror på att ärrvävnad saknar de celler som tillverkar melanin som är kroppens egna solskydd. Solens skadliga UVA/B strålar kan missfärga ärret i en ljusare eller mörkare färg. Missfärgningen är ofta permanent och resultatet kan bli att ärret inte återgår till samma färg som omkringliggande hud. Därför är det viktigt att använd SPF 30 över din vanliga dagkräm om du ska vistas ute mycket i solen, gäller även när man åker upp till fjällen, då snön reflekterar solen precis som sanden och vattnet på stranden.'),
        new Question('Kan jag sola när jag använder hudvårdsprodukterna?', 'Undvik stark sol de första två veckorna under intensivbehandlingen samt direkt efter intensivbehandlingen då du är extra känslig i din hy. Använd SPF 30 om du vistas utomhus och det är soligt, skydda gärna extra med t.ex. en hatt eller keps. När du använt hudvårdsprodukterna ett tag kan du sola som vanligt då du i fortsättningen kommer att använda gelen endast över natten. Se dock till att tvätta av ordentligt på morgonen samt att du gärna använder SPF över din kräm om det är soligt för att skydda din hud. Detta gäller för alla som använder DAHLs hudvårdsprodukter.'),
        new Question('Är det något i min kost jag bör undvika såsom choklad, fet mat mm?', 'The journal of the American Medical Association säger att: "Diet plays no role in acne treatment in most patients, even large amount of certain foods have not clinically exaseratet acne" det betyder att dieten man intar under acnebehandlingar inte spelar någon större roll, även stora intag av viss mat, har inte visat sig ha någon kliniskt bevisat dålig effekt på acnen.'),
        new Question('Vad är det för skillnad mellan tonårs acne och vuxenacne?', 'Tonårsacnen har sin gång och den växer man oftast ifrån, men så länge acnen blomstrar bör man använda DAHL Skincare produkterna. Vuxenacne har man i stort sett hela sitt liv, den minskar dock ju äldre man blir, då talgproduktionen blir mindre med åren. Det som är likheten med de båda är att det handlar om hormoner, i tonåren när alla hormoner rusar i kroppen påverkas också talgproduktion i huden vilket leder till obalans.'),
    ),
    'Betalning' => array(
        new Question('Kan jag få pengarna tillbaka för presentkort och behandlingspaket?', 'Nej tyvärr, det är inte möjligt att få pengarna tillbaka för presentkort och behandlingspaket men du kan självklart använda resterande belopp till andra behandlingar hos oss.'),
        new Question('Vilka betalningsalternativ erbjuder ni?', 'På AcneSpecialisten erbjuder vi flera betalningsalternativ för din bekvämlighet. Du kan betala för dina behandlingar och produkter med Klarna, Qliro och Swish.')
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
                    <div class="h500 l10n">Reviews</div>
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
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide" title="View all articles">View all articles</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>