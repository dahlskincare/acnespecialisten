<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$path_segments = [
    new PathSegment('Frågor & Svar', 'fragor-svar.php'),
];

$faq_categories = array(
    'Bokning' => array(
        new Question('Hur bokar jag en tid för behandling?', '<p class="p200">Du kan boka en tid för behandling genom att besöka vår hemsida och välja den tjänst du är intresserad av. Alternativt kan du kontakta vår kundtjänst direkt för personlig assistans.</p>'),
        new Question('Kan jag boka tid via telefon?', '<p class="p200">Ja, du kan boka tid via telefon genom att ringa oss på <a class="b200 underline color-deep-sea-400" href="tel:08-29 61 01" title="Ring oss">08 29 61 01</a>. Vi hjälper dig gärna att hitta en tid som passar dig och svarar på eventuella frågor om våra behandlingar.</p>'),
        new Question('När har ni telefontid?', '<p class="p200">Vår telefontid är vardagar 10:00 - 18:00. För snabbast svar rekommenderar vi att du kontaktar oss via chatten som du hittar nere i högra hörnet på vår webbplats och lämnar din e-postadress, så återkommer vi så snart vi kan.</p>'),
        new Question('Har ni långa väntetider?', '<p class="p200">Nej, vi har inga väntetider. Du bokar nästa tillgängliga tid direkt via vår bokningssida eller genom att kontakta oss på telefon <a class="b200 underline color-deep-sea-400" href="tel:08-29 61 01" title="Ring oss">08 29 61 01</a>. Lediga tider för konsultationer finns ofta tillgängliga inom de närmaste dagarna och behandlingar vanligtvis inom en till två veckor.</p>'),
        new Question('Kan jag ändra eller avboka min bokning?', '<p class="p200">Ja, du kan ändra eller avboka din bokning. Vi ber dig att meddela oss så snart som möjligt om du behöver göra ändringar i din bokning då den ska genomföras minst 24 timmar innan den bokade tiden.</p>'),
        new Question('Vilka är era öppettider?', '<p class="p200">Våra kliniker i Stockholm har öppet vardagar mellan 07:00-21:00. Helger och kvällar bokas enligt tillgänglighet. Du kan enkelt se lediga tider och boka direkt via vår bokningssida, eller kontakta oss på telefon 08 29 61 01 så hjälper vi dig att hitta en tid som passar.</p>'),
        new Question('Hur når jag er utöver telefon?', '<p class="p200">Du når oss på telefonnummer <a class="b200 underline color-deep-sea-400" href="tel:08-29 61 01" title="Ring oss">08 29 61 01</a>, via e-post på info@acnespecialisten.se eller genom chatten som du hittar nere i högra hörnet på vår webbplats. Vi strävar efter att svara på alla förfrågningar inom en arbetsdag.</p>'),
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
            text: '<p class="p200">På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.</p>'
        ),
        new Question(
            title: 'Vad är den genomsnittliga tidsåtgången för en behandling?',
            text: '<p class="p200">En typisk behandling hos AcneSpecialisten tar mellan 60 och 90 min, beroende på behandlingens art och dina individuella hudvårdsbehov.</p>'
        ),
        new Question(
            title: 'Hur många behandlingar rekommenderas för att uppnå synliga resultat?',
            text: '<p class="p200">Antalet rekommenderade behandlingar varierar beroende på individens hudproblem och hudtyp. I genomsnitt ser kunderna betydande förbättringar efter 2-4 behandlingssessioner.</p>'
        ),
        new Question(
            title: 'Är behandlingarna hos AcneSpecialisten smärtsamma?',
            text: '<p class="p200">Vi strävar efter att göra våra behandlingar så bekväma som möjligt. Viss lätt smärta kan upplevas under behandling av inflammerade områden eller vid extraktioner, men denna känsla är övergående och hanteras med största omsorg för din komfort.</p>'
        ),
        new Question(
            title: 'Anpassar ni behandlingarna för olika hudtyper?',
            text: '<p class="p200">Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.</p>'
        ),
        new Question(
            title: 'Vad kostar permanent hårborttagning för hela kroppen?',
            text: '<p class="p200">Vi erbjuder inte permanent hårborttagning för hela kroppen som ett färdigt paket, eftersom varje kund har olika önskemål om vilka områden de vill behandla. Vi sätter istället ihop ett pris baserat på just de kroppsdelar du är intresserad av. Kontakta oss via chatten eller boka en kostnadsfri konsultation så hjälper vi dig med ett skräddarsytt prisförslag.</p>'
        ),
        new Question(
            title: 'Behandlar ni vårtor?',
            text: '<p class="p200">Vi behandlar inte vanliga vårtor som orsakas av virus. Däremot behandlar vi åldersvårtor (seborrhoiska keratoser) som är godartade hudförändringar som ofta uppkommer med åldern. Om du är osäker på vilken typ av hudförändring du har, rekommenderar vi att du bokar en kostnadsfri konsultation så att våra hudspecialister kan bedöma ditt fall.</p>'
        ),
        new Question(
            title: 'Erbjuder ni behandlingar för fransar och bryn?',
            text: '<p class="p200">Ja, vi erbjuder behandlingar för fransar och bryn genom skönhetsdelen av vår verksamhet Sveriges Skönhetscenter. Här hittar du behandlingar som brynplock, brynfärgning, fransfärgning och fransförlängning. Du kan läsa mer om vårt kompletta utbud av frans- och brynbehandlingar på <a class="b200 underline color-deep-sea-400" href="https://www.sverigesskonhetscenter.se/behandlingar/fransar-bryn/" target="_blank">sverigesskonhetscenter.se/behandlingar/fransar-bryn</a>.</p>'
        ),
        new Question(
            title: 'Behandlar ni eksem?',
            text: '<p class="p200">Nej, vi behandlar inte eksem i allmänhet. Vi är specialiserade på hudproblem relaterade till talg- och talgkörtelproduktion. Däremot behandlar vi seborroiskt eksem (även kallat mjälleksem eller seborré), som är en specifik typ av hudtillstånd som drabbar områden med hög talgproduktion som hårbotten, ögonbryn och ansiktet. Om du har andra typer av eksem som atopiskt eksem eller kontakteksem rekommenderar vi att du kontaktar en hudläkare för rätt behandling.</p>'
        ),
        new Question(
            title: 'Behandlar ni xanthelasma?',
            text: '<p class="p200">Nej, vi behandlar inte xanthelasma. Xanthelasma är gula fettansamlingar som uppstår runt ögonen och kräver medicinsk bedömning och behandling av läkare. Vi rekommenderar att du kontaktar en hudläkare eller plastikkirurg för behandling av xanthelasma.</p>'
        ),
    ),
    'Konsultationer' => array(
        new Question(
            title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
            text: '<p class="p200">Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.</p>'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
            text: '<p class="p200">Under konsultationen kommer en av våra hudspecialister att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.</p>'
        ),
        new Question(
            title: 'Hur fungerar länken till mitt online-möte?',
            text: '<p class="p200">För bokningar gjorda från och med juni 2026 skickar vi en Google Meet-länk i ditt bekräftelsemejl – klicka på länken på din bokade tid så är du direkt inne i mötet. Konsultationer som bokades innan dess sker via FaceTime, där vi ringer upp dig på din bokade tid.</p>'
        ),
    ),
    'Produkter' => array(
        new Question(
            title: 'Hur kan jag hitta de rätta produkterna för min hudtyp?',
            text: '<p class="p200">För att hitta de produkter som passar just din hudtyp bäst, erbjuder vi kostnadsfria hudkonsultationer där våra experter analyserar din hud och rekommenderar produkter anpassade efter dina unika behov och hudtillstånd.</p>'
        ),
        new Question(
            title: 'Kan jag köpa produkter utan att boka en behandling?',
            text: '<p class="p200">Ja, du kan köpa produkter från oss utan att boka en behandling. Vi rekommenderar dock en kostnadsfri konsultation först, så att vi kan säkerställa att du får de produkter som är rätt för just din hud och ditt hudproblem.</p>'
        ),
        new Question(
            title: 'Skickar ni produkter hem?',
            text: '<p class="p200">Ja, vi skickar produkter hem till dig. Du kan enkelt beställa via vår webbshop och få leverans direkt till din dörr. Har du frågor om vilka produkter som passar dig bäst är du välkommen att kontakta oss via chatten på vår webbplats.</p>'
        ),
    ),
    'Skötselråd och rutiner' => array(
        new Question(
            title: 'Vilka eftervårdstips bör jag följa efter en behandling?',
            text: '<p class="p200">Efter en behandling rekommenderar vi specifika eftervårdstips för att maximera behandlingens effektivitet och stödja din huds läkningsprocess. Detta kan inkludera råd om fuktgivande, solskydd och hur du undviker vissa produkter eller aktiviteter under en viss tid.</p>'
        ),
        new Question(
            title: 'Hur snabbt ser man resultat av behandlingarna?',
            text: '<p class="p200">Det varierar beroende på vilket hudproblem som behandlas och din hudtyp. Många kunder märker förbättringar redan efter 2–4 behandlingar, men för mer djupgående hudproblem som acne eller pigmentfläckar kan det ta längre tid. Din terapeut sätter upp en behandlingsplan anpassad efter dina förutsättningar och ger dig realistiska förväntningar på resultatet.</p>'
        ),
        new Question(
            title: 'Vad bör jag undvika direkt efter en behandling?',
            text: '<p class="p200">Direkt efter en behandling rekommenderar vi att du undviker stark sol, bastu, intensiv träning och parfymerade produkter under minst 24 timmar. Huden är extra känslig efter behandling och behöver tid att återhämta sig. Din terapeut ger dig alltid individuella råd anpassade efter den behandling du genomgått.</p>'
        ),
    ),
    'Priser och betalning' => array(
        new Question(
            title: 'Hur kan jag ta reda på priserna för era behandlingar?',
            text: '<p class="p200">Våra behandlingspriser finns listade på vår hemsida. För varje specifik behandling hittar du detaljerad prisinformation som hjälper dig att planera ditt besök.</p>'
        ),
        new Question(
            title: 'Erbjuder ni några paketpriser eller rabatter för flera behandlingar?',
            text: '<p class="p200">Ja, vi erbjuder ibland paketpriser eller rabatter vid bokning av flera behandlingar. Detta är ett utmärkt sätt att få en omfattande behandling till ett reducerat pris. För mer information om aktuella erbjudanden, besök vår hemsida eller kontakta oss direkt.</p>'
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
    <meta name="description" content="Få svar på vanliga frågor om hudvård och behandlingar hos AcneSpecialisten. Läs om bokning, priser och eftervård." class="l10n">
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
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>