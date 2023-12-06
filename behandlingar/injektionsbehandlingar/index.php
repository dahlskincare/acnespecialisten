<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Injektionsbehandlingar för Hudförbättring | AcneSpecialisten';
$seo_description = 'Utforska AcneSpecialistens injektionsbehandlingar för att uppnå en ungdomligare och fräschare hud. Våra erfarna utövare använder avancerade tekniker för att försiktigt behandla linjer, rynkor och återställa hudens volym, med resultat som ser naturliga ut.';
$seo_keywords = 'injektionsbehandlingar, hudföryngring, rynkreducering, volymåterställning, professionell hudvård, ansiktskonturering, AcneSpecialisten, estetiska behandlingar';

$seo_image = 'images/treatments/large/injektionsbehandlingar.jpg';


$model = new Service(
    title: 'Injektionsbehandlingar',
    duration: null,
    price: 'Från 2595 kr',
    content: '<p class="p200">På AcneSpecialisten erbjuder vi specialiserade injektionsbehandlingar för att förbättra hudens utseende och textur. Dessa behandlingar är utformade för att försiktigt minska synliga linjer och rynkor samt återställa hudens volym och konturer. Våra erfarna hudterapeuter arbetar noggrant för att skapa naturliga och estetiskt tilltalande resultat.</p>
    <p class="p200 mt-m">Våra injektionsbehandlingar är idealiska för dig som vill uppnå en mer ungdomlig look eller förbättra specifika områden i ansiktet, såsom kinder, läppar eller panna. Vi tar oss tid att förstå dina specifika behov och önskemål, och erbjuder skräddarsydda behandlingsplaner för att uppnå bästa möjliga resultat. Oavsett om du är ute efter att ge din hy en uppfräschning eller vill hantera specifika åldersrelaterade förändringar, är våra injektionsbehandlingar en effektiv lösning för att förbättra din hudhälsa och ditt utseende.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Moderna och säkra injektionsbehandlingar för ett brett utbud av hudproblem.';

$nav_buttons = array(
    'about' => 'Om injektionsbehandlingar',
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

$description_title = 'Vad är Injektionsbehandlingar?';
$description_text = '<p class="p200">Injektionsbehandlingar på AcneSpecialisten innefattar icke-kirurgiska metoder för att förbättra hudens utseende och struktur. Dessa behandlingar involverar användning av speciella preparat som injiceras i huden för att minska synliga linjer, rynkor och för att återställa eller förbättra hudens volym och konturer.</p>
<p class="p200 mt-m">Vår metod fokuserar på att skapa en naturlig och förfinad estetik, anpassad efter varje klients unika ansiktsdrag och behov. Vi använder en rad tekniker för att behandla områden som kinder, läppar, panna och andra delar av ansiktet där tecken på åldrande eller volymförlust kan vara synliga. Varje behandling är skräddarsydd för att uppnå de mest naturliga och tillfredsställande resultaten.</p>
<p class="p200 mt-m">Våra injektionsbehandlingar erbjuder en säker och effektiv lösning för de som önskar en omedelbar förbättring av hudens utseende utan behov av kirurgiska ingrepp. Med vårt team av erfarna hudterapeuter och användning av högkvalitativa produkter, strävar vi efter att ge dig en förbättrad hudhälsa och förnyat självförtroende.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför injektionsbehandlingar',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför injektionsbehandlingar',
        image_title: 'Förberedelse inför injektionsbehandlingar',
        content: '<p class="p200">På AcneSpecialisten är en grundlig konsultation ett essentiellt första steg inför din injektionsbehandling. Denna process, som inkluderar en 48 timmars betänketid, är avgörande för att säkerställa att behandlingen är anpassad efter dina specifika behov och önskemål. Under konsultationen diskuterar vi dina mål, förväntningar och eventuella tidigare erfarenheter av liknande behandlingar.</p>
        <p class="p200 mt-m">För att förbereda dig för din behandling rekommenderar vi att du undviker vissa aktiviteter och produkter. Det är bra att inte exponera huden för starkt solljus och att undvika att använda hudirriterande produkter som retinol eller exfolierande syror några dagar före din behandling. Dessa åtgärder minimerar risken för eventuell hudirritation. Vi betonar vikten av att du kommer till din behandling med en god förståelse för processen och med realistiska förväntningar på resultatet.</p>
        <p class="p200 mt-m">Vårt team på AcneSpecialisten är här för att stödja dig genom hela processen. Vi värdesätter din komfort och strävar efter att erbjuda en säker, skonsam och effektiv behandling. Tveka inte att ställa frågor eller uttrycka dina funderingar under konsultationen. Vi ser fram emot att välkomna dig och bistå dig på din resa mot förbättrad hudhälsa och skönhet.</p>',
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
        title: 'Hur går injektionsbehandlingar till?',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Hur går injektionsbehandlingar till?',
    image_title: 'Hur går injektionsbehandlingar till?',
    content: '<p class="p200">På AcneSpecialisten är processen för injektionsbehandlingar noggrant utformad för att uppnå bästa möjliga resultat. Det första steget är alltid en personlig konsultation, där vi diskuterar dina mål och granskar din hud för att skapa en skräddarsydd behandlingsplan. Denna konsultation följs av en 48 timmars betänketid för att ge dig möjlighet att överväga behandlingen fullt ut.</p>
    <p class="p200 mt-m">När du bestämt dig för att fortsätta, börjar själva behandlingsdagen med en noggrann rengöring av det område som ska behandlas. Därefter markerar vår erfarna personal de specifika områdena som ska behandlas för att säkerställa precision och effektivitet. Behandlingen utförs med största noggrannhet, där vi använder injektionstekniker som syftar till att uppfylla dina estetiska önskemål samtidigt som vi minimerar obehag.</p>
    <p class="p200 mt-m">Efter behandlingen får du detaljerade instruktioner om eftervård för att säkerställa optimal läkning och resultat. Det är vanligt att uppleva mild rodnad eller svullnad i det behandlade området, men detta bör avta inom kort. Vi erbjuder också uppföljningssessioner för att bedöma resultaten och göra eventuella justeringar om det behövs. Vår prioritet är din tillfredsställelse och säkerhet genom hela processen.</p>',
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

$treatment_areas_title = 'Behandlingsområden för Injektionsbehandlingar';
$treatment_areas_text = '<p class="p200">Vi behandlar både specifika problem och områden effektivt.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Problem',
        image_title: 'Problem',
        title: 'Problem',
        description: '<p class="p200">Här hittar du alla våra behandlingar för specifika problem.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Gabella (Arga rynkan)',
                image_title: 'Gabella (Arga rynkan)',
                title: 'Gabella (Arga rynkan)',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för glabella'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Bekymmersrynka',
                image_title: 'Bekymmersrynka',
                title: 'Bekymmersrynka',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för bekymmersrynka'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Pannrynkor',
                image_title: 'Pannrynkor',
                title: 'Pannrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för pannrynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kråksparkar',
                image_title: 'Kråksparkar',
                title: 'Kråksparkar',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för kråksparkar'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Skrattrynkor',
                image_title: 'Skrattrynkor',
                title: 'Skrattrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för skrattrynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Sura Mungipor',
                image_title: 'Sura Mungipor',
                title: 'Sura Mungipor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för sura mungipor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Resting Bitch Face',
                image_title: 'Resting Bitch Face',
                title: 'Resting Bitch Face',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Resting Bitch Face'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'DAO',
                image_title: 'DAO',
                title: 'DAO',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för DAO'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Bunnylines',
                image_title: 'Bunnylines',
                title: 'Bunnylines',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Bunnylines'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsrynkor',
                image_title: 'Näsrynkor',
                title: 'Näsrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för näsrynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Ögonbrynslyft',
                image_title: 'Ögonbrynslyft',
                title: 'Ögonbrynslyft',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ögonbrynslyft'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Lipflip',
                image_title: 'Lipflip',
                title: 'Lipflip',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för lipflip'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Läpplyft',
                image_title: 'Läpplyft',
                title: 'Läpplyft',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för läpplyft'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Läpprynkor',
                image_title: 'Läpprynkor',
                title: 'Läpprynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för läpprynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Rökrynkor',
                image_title: 'Rökrynkor',
                title: 'Rökrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för rökrynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Munrynkor',
                image_title: 'Munrynkor',
                title: 'Munrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för munrynkor'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Apelsinhaka',
                image_title: 'Apelsinhaka',
                title: 'Apelsinhaka',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för apelsinhaka'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Gummy Smile',
                image_title: 'Gummy Smile',
                title: 'Gummy Smile',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Gummy Smile'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Tandköttsvisning',
                image_title: 'Tandköttsvisning',
                title: 'Tandköttsvisning',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för tandköttsvisning'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Områden',
        image_title: 'Områden',
        title: 'Områden',
        description: '<p class="p200">Lägg till flera områden för endast 500 kronor styck.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '30 min',
                price: '2995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '30 min',
                price: '3595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '4x områden',
                image_title: '4x områden',
                title: '4x områden',
                duration: '30 min',
                price: '3995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 4 områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '5x områden',
                image_title: '5x områden',
                title: '5x områden',
                duration: '30 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 5 områden.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Fillers',
        image_title: 'Fillers',
        title: 'Fillers',
        description: '<p class="p200">Vi utför även fillers, lägg till 2000 kronor per mililiter.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 1 ml',
                image_title: 'Fillers 1 ml',
                title: 'Fillers 1 ml',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 1 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 2 ml',
                image_title: 'Fillers 2 ml',
                title: 'Fillers 2 ml',
                duration: '40 min',
                price: '5595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 2 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 3 ml',
                image_title: 'Fillers 3 ml',
                title: 'Fillers 3 ml',
                duration: '60 min',
                price: '7595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 3 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 4 ml',
                image_title: 'Fillers 4 ml',
                title: 'Fillers 4 ml',
                duration: '90 min',
                price: '9995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 4 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 5 ml',
                image_title: 'Fillers 5 ml',
                title: 'Fillers 5 ml',
                duration: '90 min',
                price: '12995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 5 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                image_title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                duration: '30 min',
                price: '2395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för påfyllning.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - Hyalase (Borttagning av fillers)',
                image_title: 'Fillers - Hyalase (Borttagning av fillers)',
                title: 'Fillers - Hyalase (Borttagning av fillers)',
                duration: '60 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för hyalase.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - Hyalase (Återbesök & Kontroll)',
                image_title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                duration: '60 min',
                price: 'Gratis',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för återbesök och kontroll.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera injektionsbehandling med fillers.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 1x område + Fillers 1 ml',
                image_title: 'Injektion 1x område + Fillers 1 ml',
                title: 'Injektion 1x område + Fillers 1 ml',
                duration: '50 min',
                price: '5595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 1x område + Fillers 2 ml',
                image_title: 'Injektion 1x område + Fillers 2 ml',
                title: 'Injektion 1x område + Fillers 2 ml',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 1x område + Fillers 3 ml',
                image_title: 'Injektion 1x område + Fillers 3 ml',
                title: 'Injektion 1x område + Fillers 3 ml',
                duration: '50 min',
                price: '11395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 3 ml.'
            ),

            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 2x områden + Fillers 1 ml',
                image_title: 'Injektion 2x områden + Fillers 1 ml',
                title: 'Injektion 2x områden + Fillers 1 ml',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 2x områden + Fillers 2 ml',
                image_title: 'Injektion 2x områden + Fillers 2 ml',
                title: 'Injektion 2x områden + Fillers 2 ml',
                duration: '50 min',
                price: '8995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 2x områden + Fillers 3 ml',
                image_title: 'Injektion 2x områden + Fillers 3 ml',
                title: 'Injektion 2x områden + Fillers 3 ml',
                duration: '70 min',
                price: '11895 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 3 ml.'
            ),

            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 3x områden + Fillers 1 ml',
                image_title: 'Injektion 3x områden + Fillers 1 ml',
                title: 'Injektion 3x områden + Fillers 1 ml',
                duration: '50 min',
                price: '6595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 3x områden + Fillers 2 ml',
                image_title: 'Injektion 3x områden + Fillers 2 ml',
                title: 'Injektion 3x områden + Fillers 2 ml',
                duration: '50 min',
                price: '9495 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Injektion 3x områden + Fillers 3 ml',
                image_title: 'Injektion 3x områden + Fillers 3 ml',
                title: 'Injektion 3x områden + Fillers 3 ml',
                duration: '70 min',
                price: '12395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 3 ml.'
            ),
        ),
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård och underhåll efter injektionsbehandlingar',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård och underhåll efter injektionsbehandlingar',
    image_title: 'Eftervård och underhåll efter injektionsbehandlingar',
    content: '<p class="p200">Efter din injektionsbehandling hos AcneSpecialisten är det viktigt att du följer några grundläggande eftervårdsanvisningar för att upprätthålla och maximera resultatet. Direkt efter behandlingen bör du undvika intensiv sol och använda solskydd med hög SPF för att skydda behandlingsområdet. Det är också rekommenderat att undvika tung makeup och produkter som kan irritera huden under de första 24 timmarna.</p>
    <p class="p200 mt-m">Efter en injektionsbehandling kan det uppstå mindre svullnad eller blåmärken, vilket är normalt. Det är viktigt att inte röra eller massera behandlingsområdet under de första dagarna. Om du upplever någon obehag, kan en kall kompress hjälpa till att minska svullnad. För att stödja läkningen, fortsätt att återfukta huden med lämpliga hudvårdsprodukter som rekommenderats av din hudterapeut.</p>
    <p class="p200 mt-m">Ett balanserat intag av vatten och näringsrik kost är också viktigt för att stödja din huds hälsa inifrån och ut. Undvik att dricka alkohol och begränsa användningen av blodförtunnande medel som kan öka risken för blåmärken. För att upprätthålla resultatet av din behandling, kan regelbundna uppföljningsbehandlingar rekommenderas av din hudterapeut. Om du har några frågor eller funderingar kring din eftervård, tveka inte att kontakta oss på AcneSpecialisten för personlig rådgivning och stöd.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

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
            title: 'Hur ofta behöver jag genomföra injektionsbehandlingar?',
            text: 'Antalet injektionsbehandlingar varierar beroende på individuella mål och hudens reaktion. Oftast rekommenderas initiala behandlingar med uppföljande underhållsbehandlingar var tredje till sjätte månad för att upprätthålla resultatet.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig efter en injektionsbehandling?',
            text: 'Efter en injektionsbehandling kan du uppleva lätt svullnad eller rodnad i behandlingsområdet. Dessa symtom är vanligtvis milda och tillfälliga. Resultaten blir synliga efter några dagar när svullnaden har lagt sig.'
        ),
        new Question(
            title: 'När kan jag återgå till mina normala aktiviteter efter en injektionsbehandling?',
            text: 'De flesta kan återgå till sina normala aktiviteter direkt efter behandlingen. Vi rekommenderar dock att undvika ansträngande fysisk aktivitet och direkt solstrålning under de första 24 timmarna för att minimera svullnad och blåmärken.'
        ),
        new Question(
            title: 'Behöver jag någon speciell eftervård efter en injektionsbehandling?',
            text: 'Efter injektionsbehandlingar är det viktigt att undvika att röra vid behandlingsområdet under de första timmarna. Använd solskydd och milda hudvårdsprodukter för att skydda och lugna huden. Vi ger dig detaljerade eftervårdsinstruktioner beroende på din specifika behandling.'
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
        label: 'Hydrafacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'Hydrafacial',
        image_title: 'Hydrafacial',
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
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>