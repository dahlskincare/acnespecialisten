<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Professionell vaxning i Stockholm – Omedelbar hårborttagning';
$seo_description = 'Upplev omedelbar hårborttagning med skonsam vaxning. Våra erfarna terapeuter ger dig silkeslen hud direkt. Boka din tid idag och känn skillnaden!';
$seo_keywords = 'vaxning, omedelbar hårborttagning, hårborttagning vaxning, vaxning stockholm, vaxa bort hår, brasiliansk vaxning, skonsam hårborttagning';

$seo_image = 'bilder/hudbehandlingar/424x456/vaxning.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Permanent Laser Hårborttagning', '/hudbehandlingar/vaxning/'),
);

$model = new Service(
    title: 'Vaxning',
    duration: null,
    price: 'Från 295 kr',
    content: '<p class="p200">Vaxning är en snabb och effektiv metod för omedelbar hårborttagning. Behandlingen avlägsnar hårstråna från roten, vilket ger en slät och len hud som varar i flera veckor. Oavsett om du vill behandla ansikte, kropp eller intimområde erbjuder vi professionell vaxning anpassad efter dina behov.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/vaxning.webp',
    image_large: 'bilder/hudbehandlingar/424x456/vaxning.webp',
    image_alt: 'Vaxning',
    image_title: 'Vaxning',
    consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-ben-hela--3281257',
    consultation_url_label: 'Hela ben',
    consultation_url_title: 'Boka tid för vaxning av hela ben',
    booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-brasiliansk-3281247',
    booking_url_label: 'Brasiliansk',
    booking_url_title: 'Boka tid för brasiliansk vaxning',
);

$floating_box = 'Omedelbar hårborttagning med vaxning.';

$description_title = 'Vad är vaxning?';
$description_text = '<p class="p200">Vaxning är en beprövad och effektiv metod för omedelbar hårborttagning som ger dig slät och len hud direkt efter behandlingen. Hårstråna avlägsnas från roten, vilket ger ett resultat som varar i flera veckor. Behandlingen passar för alla kroppsdelar – från ansikte och armar till ben, rygg och intimområden.</p>
<p class="p200 mt-m">Till skillnad från rakning som endast tar bort hårstrået vid ytan, ger vaxning ett långvarigare resultat och tunnare återväxt över tid. Metoden passar de flesta hud- och hårtyper och utförs med skonsamma tekniker som minimerar risken för irritation. Vaxning är ett utmärkt alternativ för dig som vill ha en snabb och effektiv lösning utan behov av avancerad teknik eller återhämtningstid.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/vaxning-forberedelser.webp',
        image_large: '/bilder/process/872x456/vaxning-forberedelser.webp',
        image_alt: 'Förberedelser inför vaxning',
        image_title: 'Förberedelser inför vaxning',
        content: '<p class="p200">För att få bästa möjliga resultat av din vaxning är det viktigt att följa några enkla förberedelser. Låt håret växa ut till cirka 0,5–1 cm innan behandlingen – detta gör att vaxet får bra fäste och att håren kan dras upp effektivt. Undvik att raka området minst 2 veckor innan.</p>
        <p class="p200 mt-m">Peela gärna huden ett par dagar innan din bokade tid, men undvik att smörja in området samma dag. Kom i rena, torra kläder och undvik att använda parfymerade produkter på området som ska behandlas. Dessa steg hjälper till att minska risken för irritation och säkerställer en skonsam och effektiv vaxningsupplevelse.</p>',
    ),
    'process' => new Article(
        title: 'Hur fungerar behandlingen?',
        image_small: '/bilder/process/358x272/vaxning-process.webp',
        image_large: '/bilder/process/872x456/vaxning-process.webp',
        image_alt: 'Hur fungerar vaxning?',
        image_title: 'Hur fungerar vaxning?',
        content: '<p class="p200">Vaxning är en snabb och effektiv metod för att ta bort oönskat hår. Under behandlingen appliceras varmt eller kallt vax på huden, som sedan avlägsnas tillsammans med hårstråna från roten. Resultatet är en slät hud som varar i flera veckor.</p>
        <p class="p200 mt-m">Direkt efter behandlingen kan du uppleva viss rodnad eller en lätt känsla av irritation – detta är helt normalt och brukar lägga sig snabbt. Regelbunden vaxning kan leda till att hårstråna blir tunnare och färre över tid. Våra terapeuter arbetar med professionell teknik för att vaxningen ska vara så behaglig som möjligt och ge ett långvarigt resultat.</p>',
    ),
);

$treatment_areas_title = 'Områden vi behandlar';
$treatment_areas_text = null;

$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Hos oss kan du vaxa bort oönskad ansiktsbehåring snabbt och skonsamt – perfekt inför semestern eller vardagen. Välj mellan enskilda områden eller hela ansiktet.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Hela ansiktet',
                image_title: 'Hela ansiktet',
                title: 'Hela ansiktet',
                duration: '30 min',
                price: '495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-ansikte-fullface--3281261',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '10 min',
                price: '295 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-overlapp-3281252',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '10 min',
                price: '295 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-haka-3281262',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Överkropp',
        image_title: 'Överkropp',
        title: 'Överkropp',
        description: '<p class="p200">Få en slät och fräsch känsla med professionell vaxning av överkroppen. Välj mellan bröst, mage, armar, rygg eller armhålor – alltid snabbt och effektivt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armhalor.webp',
                image_alt: 'Armhålor',
                image_title: 'Armhålor',
                title: 'Armhålor',
                duration: '20 min',
                price: '495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-armhalor-3281242',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brost.webp',
                image_alt: 'Bröst',
                image_title: 'Bröst',
                title: 'Bröst',
                duration: '40 min',
                price: '695 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-brost-3281248',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/mage.webp',
                image_alt: 'Mage',
                image_title: 'Mage',
                title: 'Mage',
                duration: '40 min',
                price: '695 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-mage-3281255',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '40 min',
                price: '795 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-rygg-3281259',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armar.webp',
                image_alt: 'Armar (Hela)',
                image_title: 'Armar (Hela)',
                title: 'Armar (Hela)',
                duration: '40 min',
                price: '795 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-armar-hela--3281258',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armar.webp',
                image_alt: 'Armar (Halva)',
                image_title: 'Armar (Halva)',
                title: 'Armar (Halva)',
                duration: '30 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-armar-halva--3281263',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ben',
        image_title: 'Ben',
        title: 'Ben',
        description: '<p class="p200">Få lena ben med hjälp av effektiv vaxning. Välj mellan halva eller hela ben beroende på dina behov och önskemål.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hela-ben.webp',
                image_alt: 'Ben (Hela)',
                image_title: 'Ben (Hela)',
                title: 'Ben (Hela)',
                duration: '50 min',
                price: '1 195 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-ben-hela--3281257',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/halva-ben.webp',
                image_alt: 'Ben (Halva)',
                image_title: 'Ben (Halva)',
                title: 'Ben (Halva)',
                duration: '30 min',
                price: '895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-ben-halva--3281245',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Intim (Kvinna)',
        image_title: 'Intim (Kvinna)',
        title: 'Intim (Kvinna)',
        description: '<p class="p200">Vi erbjuder skonsam intimvaxning för kvinnor med fokus på komfort, hygien och ett lent resultat. Välj det alternativ som passar dig bäst.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brasiliansk.webp',
                image_alt: 'Brasiliansk',
                image_title: 'Brasiliansk',
                title: 'Brasiliansk',
                duration: '40 min',
                price: '995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-brasiliansk-3281247',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rumpa.webp',
                image_alt: 'Rumpa (Inre & Yttre)',
                image_title: 'Rumpa (Inre & Yttre)',
                title: 'Rumpa (Inre & Yttre)',
                duration: '30 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-rumpa-inre-yttre--3281254',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/bikinilinje.webp',
                image_alt: 'Bikinilinje',
                image_title: 'Bikinilinje',
                title: 'Bikinilinje',
                duration: '20 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-bikiniljnje-3281264',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Paket (Kvinna)',
        image_title: 'Paket (Kvinna)',
        title: 'Paket (Kvinna)',
        description: '<p class="p200">Spara tid och få ett helhetsresultat med våra utvalda vaxningspaket för kvinnor. Perfekt för dig som vill känna dig silkeslen från topp till tå.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/clean-smooth.webp',
                image_alt: 'Clean & Smooth',
                image_title: 'Clean & Smooth',
                title: 'Clean & Smooth',
                duration: '60 min',
                price: '1 395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-clean-smooth-brasiliansk-armhalor--3281260',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/silky-legs.webp',
                image_alt: 'Silky Legs',
                image_title: 'Silky Legs',
                title: 'Silky Legs',
                duration: '80 min',
                price: '1 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-silky-legs-hela-ben-bikinilinje-armhalor--3281250',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/full-body-basic.webp',
                image_alt: 'Full Body Basic',
                image_title: 'Full Body Basic',
                title: 'Full Body Basic',
                duration: '100 min',
                price: '2 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-full-body-basic-hela-ben-hela-armar-armhalor-brasiliansk--3281251',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/glow-face.webp',
                image_alt: 'Glow Face',
                image_title: 'Glow Face',
                title: 'Glow Face',
                duration: '30 min',
                price: '495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-glow-face-hela-ansiktet--3281244',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Intim (Man)',
        image_title: 'Intim (Man)',
        title: 'Intim (Man)',
        description: '<p class="p200">Vi erbjuder trygg och professionell intimvaxning för män. Välj mellan brasiliansk, bikinilinje eller vaxning av rumpa – alltid med fokus på hygien och komfort.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brasiliansk-man.webp',
                image_alt: 'Brasiliansk (Man)',
                image_title: 'Brasiliansk (Man)',
                title: 'Brasiliansk (Man)',
                duration: '50 min',
                price: '1 495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-brasiliansk-intim-man--3281249',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rumpa-man.webp',
                image_alt: 'Rumpa (Man)',
                image_title: 'Rumpa (Man)',
                title: 'Rumpa (Man)',
                duration: '30 min',
                price: '995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-rumpa-intim-man--3281256',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/bikinilinje-man.webp',
                image_alt: 'Bikinilinje (Man)',
                image_title: 'Bikinilinje (Man)',
                title: 'Bikinilinje (Man)',
                duration: '30 min',
                price: '995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-bikiniljnje-intim-man--3281253',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Paket (Man)',
        image_title: 'Paket (Man)',
        title: 'Paket (Man)',
        description: '<p class="p200">Våra paket för män kombinerar flera vaxningsområden för ett helhetsresultat. Perfekt för dig som vill känna dig fräsch och välvårdad på ett effektivt sätt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/clean-chest-back.webp',
                image_alt: 'Clean Chest & Back',
                image_title: 'Clean Chest & Back',
                title: 'Clean Chest & Back',
                duration: '80 min',
                price: '1 895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-clean-chest-back-brost-mage-rygg--3281246',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/smooth-start.webp',
                image_alt: 'Smooth Start',
                image_title: 'Smooth Start',
                title: 'Smooth Start',
                duration: '60 min',
                price: '1 895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-smooth-start-brasiliansk-armhalor--3281265',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/full-body-pro.webp',
                image_alt: 'Full Body Pro',
                image_title: 'Full Body Pro',
                title: 'Full Body Pro',
                duration: '120 min',
                price: '2 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-full-body-pro-hela-ben-brost-rygg-armhalor--3281243',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),

);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/vaxning-eftervard.webp',
        image_large: '/bilder/process/872x456/vaxning-eftervard.webp',
        image_alt: 'Eftervård för vaxning',
        image_title: 'Eftervård för vaxning',
        content: '<p class="p200">Efter en vaxningsbehandling är huden ofta extra känslig och behöver omtanke för att återhämta sig optimalt. Det är vanligt att uppleva en lätt rodnad eller värmekänsla i det behandlade området, men detta brukar lägga sig inom några timmar.</p>
        <p class="p200 mt-m">Undvik att duscha varmt, träna intensivt eller använda parfymerade produkter de första 24 timmarna efter behandlingen. Vi rekommenderar att du bär löst sittande kläder och låter huden vila från sol, bastu och peeling i minst ett par dagar.</p>
        <p class="p200 mt-m">För att minska risken för inåtväxta hårstrån, kan du börja exfoliera försiktigt några dagar efter behandlingen och återfukta huden regelbundet. Om du har frågor eller upplever ovanlig irritation – tveka inte att kontakta oss. Rätt eftervård gör din vaxning både skönare och mer hållbar.</p>',
    )
);

$reviews_title = 'Omdömen';


$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur länge håller resultatet efter vaxning?',
            text: '<p class="p200">Resultatet efter en vaxning varar vanligtvis mellan 3 till 5 veckor, beroende på din individuella hårväxtcykel. Regelbunden vaxning kan leda till att håren växer ut tunnare och glesare över tid.</p>'
        ),
        new Question(
            title: 'Gör vaxning ont?',
            text: '<p class="p200">Vaxning kan upplevas som obehagligt, särskilt första gången eller på känsliga områden. Smärtan är dock kortvarig och de flesta vänjer sig snabbt. Våra terapeuter arbetar skonsamt och effektivt för att göra behandlingen så behaglig som möjligt.</p>'
        ),
        new Question(
            title: 'Hur långt måste håret vara för att vaxas?',
            text: '<p class="p200">För bästa resultat bör håret vara minst 0,5 cm långt – ungefär som ett riskorn. Om håret är för kort får inte vaxet tillräckligt fäste, vilket kan påverka resultatet.</p>'
        ),
        new Question(
            title: 'Kan jag vaxa mig om jag är gravid?',
            text: '<p class="p200">Ja, det går bra att vaxa sig under graviditet, men huden kan vara extra känslig. Informera alltid din terapeut om att du är gravid, så anpassar vi behandlingen därefter.</p>'
        ),
        new Question(
            title: 'Finns det något jag bör undvika efter vaxning?',
            text: '<p class="p200">Ja, undvik att sola, bada bastu, träna hårt eller använda parfymerade produkter det första dygnet efter vaxning. Detta för att minska risken för irritation och inåtväxta hårstrån.</p>'
        ),
        new Question(
            title: 'Hur ofta bör man vaxa sig?',
            text: '<p class="p200">De flesta vaxar sig var 4:e till 6:e vecka beroende på hur snabbt håret växer ut. Regelbunden vaxning kan göra att håret växer långsammare och blir mjukare över tid.</p>'
        ),
        new Question(
            title: 'Kan alla göra vaxning?',
            text: '<p class="p200">Vaxning passar de allra flesta, men om du har mycket känslig hud, eksem, solbränna eller tar vissa mediciner bör du rådgöra med din terapeut innan behandling.</p>'
        ),
        new Question(
            title: 'Vad är skillnaden mellan brasiliansk vaxning och bikinilinje?',
            text: '<p class="p200">Brasiliansk vaxning innebär att allt hår i intimområdet tas bort, även mellan skinkorna. Bikinilinje innebär att endast håret utanför underklädeslinjen avlägsnas.</p>'
        ),
        new Question(
            title: 'Hur förbereder jag mig inför min vaxning?',
            text: '<p class="p200">Peela huden ett par dagar innan och undvik att smörja in området samma dag som behandlingen. Se till att håret är tillräckligt långt för att vaxas och kom i rena, torra kläder.</p>'
        ),
        new Question(
            title: 'Får man röda prickar efter vaxning?',
            text: '<p class="p200">Ja, det är vanligt att få tillfälliga röda prickar efter vaxning. De brukar försvinna inom några timmar. Återfukta huden och undvik att klia på området för att underlätta läkningen.</p>'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i permanent hårborttagning',
        image_title: 'Cazzandra Lindberg - Expert på permanent hårborttagning'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på permanent hårborttagning',
        image_title: 'Veronika Benedik - Specialist inom hårborttagning'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom permanent hårborttagning',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på permanent hårborttagning'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot permanent hårborttagning',
        image_title: 'Vilma Libom - Expert inom permanent hårborttagning'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech/',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: 'bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: 'bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed/',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
    new Brand(
        label: 'DAHL Skincare',
        image: 'bilder/logotyper/dahl-skincare.webp',
        image_alt: 'DAHL Skincare logotyp',
        image_title: 'DAHL Skincare - hudvårdsprodukter',
        url: 'https://dahlskincare.se',
        url_title: 'DAHL Skincare',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/laser-mot-hudproblem/" />

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
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
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
                            <?php foreach ($types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
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
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img loading="lazy" class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
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

                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
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

                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>