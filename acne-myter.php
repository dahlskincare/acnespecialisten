<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$faq_categories = array(
    'Generella' => array(
        new Question('Choklad och fettig mat orsakar acne', '<p class="p200">Vi har länge vetat att man inte får finnar av choklad, men denna myt finns fortfarande kvar. I en studie gav man 65 studenter med acne 2 chokladkakor per dag i en månad för att se vad detta hade för effekt på acnen. Hälften av gruppen fick chokladkakor med en extra hög koncentration av choklad medan den andra gruppen ovetandes fick artificiella chokladkakor helt utan choklad som istället innehöll en hög koncentration av vegetabiliskt fett. På så sätt fick man även möjlighet att se vad som hände med huden på en kost med hög fetthalt. Resultatet av studien visade att 1 person fick bättre hy, 1 person fick sämre hy och för övriga 63 deltagare var acnen oförändrad.</p>
            <p class="p200 mt-m">Så varför finns myten om att man får finnar av choklad fortfarande kvar? Många känner igen att efter att man frossat i choklad får man mer acne efter ett par dagar. Även om observationen kanske stämmer är slutsatsen felaktig, istället beror det troligtvis på att ångestattacken som orsakade chokladfrossan även orsakade mer acne. Om hen känner att choklad gör acnen värre så kan man sluta äta det, choklad är ju inte nödvändig mat. Men eftersom det inte finns någon koppling mellan choklad och acne är det dags att stoppa chokladmyten. Men mat myterna begränsas inte bara till choklad utan även pommes frites och annan flottig/oljig mat. Kopplingen mellan flottig mat och flottig hy bygger på tron om att oljan man får i sig till slut sipprar ut genom porerna. Men så är inte fallet, oljan brys ner i magen på samma sätt som allt annat man äter.</p>'),
        new Question('Smutsig hud och hår i ansiktet orsakar acne', '<p class="p200">Många tror att smutsig hy är en orsak till acne. En vanlig missuppfattning är att svarta pormaskar (öppna komedoner) uppstår av smuts som fastnar i porerna eller att fettigt hår i ansiktet orsakar finnar. Dessa myter har fått tusentals människor att försöka skrubba rent huden med diverse redskap och tvålar. Man kan inte tvätta bort acne eller smuts från porerna eftersom det inte är smuts som finns i porerna. Den svarta pormasken är egentligen en tilltäpp por som täppts igen med en kombination av döda hudceller och talg som produceras djupt nere i poren. Den svarta färgen uppstår när de döda hudcellerna oxiderar i kontakt med syre vilket bygger upp koncentrationen av pigment i cellerna. Den svarta pormasken är alltså inte smuts utan en anatomisk blockering som kan sträcka sig 2 mm ner i huden. Eftersom dessa problem uppstår 2 mm ner i huden skapas problemet av de döda hudcellerna och talget som produceras nere i poren. Hår i ansiktet kommer bara åt ytan och det är inte oljan utanpå hudytan som orsakar pormaskar, finnar eller andra typer av acne.</p>'),
        new Question('Endast tonåringar får acne', '<p class="p200">Även om det är sant att många tonåringar drabbas av acne, är det inte alls begränsat till endast tonåringar. Det kan starta mycket tidigare, men kan även uppstå långt senare. I sällsynta fall kan det börja så tidigt som hos nyfödda barn, acnen försvinner då efter några veckor för att sedan komma tillbaka vid 10 års ålder. I andra fall kan individen gå igenom tonåren utan några som helst problem med huden för att sedan få acne i vuxen ålder. Detta är särskilt sant för acne-benägna kvinnor som inte får skov förrän de är i 20-30 års åldern.</p>
            <p class="p200 mt-m">Acne kan slå till vid vilken ålder som helst, därför bör det absolut inte ses som en tonårssjukdom. Tyvärr kan ingen tonåring vara säker på att deras acne försvinner efter tonåren. Många tonåringar accepterar sin acne i tron om att det kommer att försvinna efter tonåren, men de blir besvikna när acnen fortsätter tills de är 25, 35 eller till och med längre. Det är synd att tusentals tonåringar får hemska ärr och psykologiskt lidande i tron om att det är en övergång till vuxen ålder. Det är därför viktigt att föräldrar och tonåringar inser att denna myt är felaktig och gör något åt huden innan det är för sent. Många typer av ärr är permanenta och det är därför viktigt att behandla huden i tid.</p>'),
        new Question('Jag har inte acne, bara en finne', '<p class="p200">Många med acne insisterar på att de bara har oljig hy, finnar eller dålig hy i ansiktet som vuxen eller tonåring, men inte acne! Andra insisterar på att det finns en skillnad mellan att ha en enstaka finne någon gång ibland och att ha många finnar som återkommer ofta. Men ur ett anatomiskt perspektiv är allt det samma under mikroskopet, det är acne oavsett hur många finnar man får. Eftersom varje ärr är ett resultat av en finne, så kommer en individ som bara har en finne som leder till ett ärr i månaden under en 5 årig period till slut ha 60 ärr. Det är lika mycket som en person som har svår akne och får 5 ärr i månaden under en ettårsperiod. Acne är acne, oavsett hur mycket</p>'),
        new Question('Ingen behandling fungerar', '<p class="p200">Effektiv behandling av acne har funnits i över 25 år, men myten om att ingenting fungerar lever fortfarande kvar. Detta beror på att forskning kring acne aldrig prioriterats och det tog lång tid innan man förstod vad acne är och hur man effektivt behandlar huden, och det finns fortfarande många som inte förstår vad acne är! Det är därför vanligt att människor med acne har prövat allt utan resultat, från dieter och vitaminer till behandlingar, produkter och mediciner. Eftersom de som blivit hjälpa ofta inte vill berätta om att de har acne som de måste behandla, lever myten om att ingenting fungerar vidare.</p>
            <p class="p200 mt-m">Det finns även en variation på myten där vissa tror att de inte har råd att behandla sin hy, det är för dyrt. Dock är det mer troligt att de menar att om de spenderar pengar på att behandla sin hy så kommer det inte att fungera, och när de då blir besvikna känns det som att de kastat pengarna i sjön. Det finns nämligen inte många som inte skulle vara villiga att spendera en förmögenhet på något som faktiskt fungerar, och för att undvika de svåra ärr som acne kan leda till. Det finns till och med många som säger att de skulle göra vad som helst för att ha sluppit sin acne, och ångrar att de inte sökte hjälp och hittade AcneSpecialisten tidigare. Vi erbjuder effektiv behandling av acne och när man använder en metod som faktiskt fungerar så blir det inte så dyrt som många kanske skulle tro.</p>'),

        new Question('Acne är bara ett resultat av psykologiska problem', '<p class="p200">Även om acne och psykologisk ohälsa ofta hänger ihop har många missförstått sambandet och tror på myten om att acne bara är ett resultat av psykiska problem. Många söker inte hjälp i form av produkter eller behandling eftersom de tror att problemet sitter i huvudet. Något som ofta bekräftas av psykologer, familjemedlemmar och vänner.  De tror därför att de inte kan bli av med sin acne förrän de har behandlat det inre kaoset. När detta inte fungerar ger de till slut upp vilket bara gör saken värre. De är dock inte ensamma i sin naivitet, många experter har utforskat de psykologiska problemen med acne med antagandet att det var de psykologiska problemen som orsakade acnen. Detta är helt fel.</p>
            <p class="p200 mt-m">Vi är övertygade om att acnens största bieffekt är just psykologiska och emotionella ärr. Dessa ärr kan leda till kronisk depression, asocialt och antisocialt beteende. Efter att ha hjälpt tusentals är vi övertygade om att acnen kom först och de psykologiska problemen därefter. För att behandla dessa människor på bästa sätt måste man först och främst ta hand om källan till problemet, acneutbrotten i ansiktet, på bröstet, magen eller ryggen. När man ser att vår metod fungerar börjar de emotionella problemen försvinna vilket gör de mer mottagliga för att följa vår behandlingsmetod noga. Vi ser att de tar lättare steg, ler och håller huvudet högt på ett helt annat sätt en tidigare. När acnen försvinner från ansiktet har de en helt annan livsuppfattning.</p>
            <p class="p200 mt-m">Men för alla de som ännu inte tagit tag i sin acne måste vi bekämpa myten om att acne bara är ett resultat av psykiska problem. Som med många av de andra myterna kring acne är det viktigt att motverka den generella uppfattningen som finns kring acnen. Det är inte det som pågår i huvudet som är problemet utan det som pågår i porerna. Samtidigt måste vi ta tillfället i akt och förklara kopplingen som faktiskt finns mellan acne och psykologisk ohälsa. Även om stress och andra emotionella problem sällan orsakar acne kan de mycket väl leda till ett skov för de som redan har acne. Stress har en otroligt negativ effekt på acne-benägen hy. På samma sätt som stress kan ge en person med matsmältningsproblem magsår och kan orsaka hjärtproblem för en person med gener för hjärtsjukdom så kan stress leda till ett skov hos de som har acne. Skovet leder ofta till ännu mer stress vilket skapar en ord cirkel för människor med acne, men kom ihåg att allt började med genetiskt triggad acne. Själva acnen måste behandlas först och främst, sedan får man hjälpa hen att hantera stress.</p>'),
        new Question('Rätt skönhetsprodukt kommer att fixa min acne', '<p class="p200">Många människor som lider av acne fastnar i en oändlig och otroligt dyr hudvårdsdjungel, i konstant jakt efter nästa mirakelkräm, rengöring, foundation, återfuktande kräm, ansiktsvatten och ansiktsmask som ska lösa deras ”hudproblem”. De letar febrilt på bloggar, sociala medier och magasin efter det senaste inom skönhetsvård. I tron och hoppet om att just denna produkt ska göra dem acnefria är de villiga att pröva nästan vad som helst. Det talas om den senaste trenden, om produkter som ska vara hypoallergena, naturliga, ekologiska etc och för många är det värt ett försök, för tänk om detta är produkten som äntligen får bort acnen!</p>
            <p class="p200 mt-m">Problemet är att acne inte går att behandla med en enskild produkt, och eftersom det är en sjukdom krävs det att man behandlar huden dagligen. Det som gör vår metod unik är att vi kombinerar effektiva hudvårdsprodukter med en hudvårdsrutin och det är denna sammansättning av flera olika hudvårdsprodukter som gör våra resultat möjliga. Våra rekommenderade behandlingar hjälper dig att få en grundlig rengöring av huden och få bort det underliggande impaktionerna som fräter på huden och orsakar ärr. Vi har inga mirakelprodukter utan en effektiv individuell metod som gör behandlingen av acne möjlig, och det är detta som gör oss unika.</p>'),
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/acne-myter.php" />
      
    <title class="l10n">Acne Myter - Vanliga frågor och svar | AcneSpecialisten</title>
    <meta name="title" content="Acne Myter Vanliga frågor och svar | AcneSpecialisten" class="l10n">
    <meta name="description" content="Får man finnar av choklad? Här kan du läsa mer om detta och andra vanliga myter om acne! Vi på AcneSpecialisten är specialister på allt som inom acne!" class="l10n">
    <meta name="keywords" content="får man finnar av choklad, finnar av choklad" class="l10n">

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
                <h1 class="h600 l10n">Akne myter</h1>
                <p class="mt-s p200 l10n">Här hittar du svaren på några av de vanligaste akne myterna.</p>
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