<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Fillers i Stockholm - Naturligt Vackra Läppar';
$seo_description = 'Upptäck fillers för läppar, under ögonen och mer i Stockholm. Naturliga resultat med lip fillers och andra behandlingar av högsta kvalitet.';
$seo_keywords = 'lip fillers, fillers läppar, fillers under ögonen, fillers stockholm, fillers läppar naturligt';

$seo_image = '/images/treatments/large/fillers.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('Estetiska Injektionsbehandlingar', '/hudbehandlingar/estetiska-injektionsbehandlingar/'),
    new PathSegment('Fillers', '/hudbehandlingar/estetiska-injektionsbehandlingar/fillers/'),
);

$model = new Service(
    title: 'Fillers',
    duration: null,
    price: 'Från 3595 kr',
    content: '<p class="p200">Vårt mål är att förädla din naturliga skönhet genom att varsamt förbättra hudens utseende och textur. Med hjälp av fillers arbetar vi för att subtilt reducera synliga linjer och rynkor samt återskapa och accentuera hudens naturliga volym och konturer.</p>',
    image_small: 'bilder/behandlingar/358x274/injektionsbehandlingar.webp',
    image_large: 'bilder/behandlingar/424x456/injektionsbehandlingar.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/konsultation-fillers-klinik-2181498?',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Våra fillersbehandlingar fyller effektivt ut huden.';

$description_title = 'Vad är fillers?';
$description_text = '<p class="p200">Fillers är en icke-invasiv teknik för att förhöja och förbättra hudens kvalitet samt dess estetiska uttryck. Våra behandlingar omfattar precisioninjektioner med högkvalitativa produkter, framtagna för att effektivt minska uppkomsten av fina linjer och rynkor, samtidigt som de återskapar eller framhäver hudens naturliga volym och form. Vår filosofi centrerar kring att åstadkomma en subtil försköning, skräddarsydd för att komplettera varje klients unika ansiktsdrag och behov.</p>
<p class="p200 mt-m">VVi använder en rad avancerade tekniker för att varsamt adressera områden som läppar, kinder, panna, och andra delar av ansiktet där åldrande eller volymförlust kan vara särskilt framträdande. Perfekt för dig som söker lip fillers som ger läppar naturligt utseende. Varje behandlingsplan är unikt utformad med ambitionen att leverera resultat som ser och känns naturliga. Våra injektionsbehandlingar levererar omedelbara förbättringar i hudens utseende på ett tryggt och effektivt vis.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går fillers behandlingar till?',
        image_small: null,
        image_large: null,
        image_alt: 'Hur går fillers behandlingar till?',
        image_title: 'Hur går fillers behandlingar till?',
        content: '<p class="p200">Fillers behandlingen inleds alltid med en omsorgsfull rengöring av det specifika område som ska behandlas, för att försäkra oss om att huden är optimalt förberedd och fri från föroreningar. Efter detta steg markerar vår kvalificerade personal de exakta områdena som kommer att behandlas. Denna precision är avgörande för att uppnå de estetiska mål du önskar, samtidigt som vi minimerar eventuellt obehag. Genom att använda sig av skickliga injektionstekniker arbetar vi metodiskt för att uppfylla dina önskemål, med fokus på både resultat och komfort.</p>
    <p class="p200 mt-m">Efter behandlingen går vi noggrannt igenom eftervårdsinstruktioner, en avgörande del för en effektiv återhämtning och för att säkra det bästa möjliga resultat av din fillersbehandling. Det är vanligt med en lätt rodnad eller svullnad efter proceduren, men dessa symtom är vanligtvis övergående. Vi planerar också uppföljningsbesök så att vi kan följa hudens framsteg och säkerställa att du är fullständigt nöjd med resultatet. Dessa steg understryker vår åtagande till din säkerhet och tillfredsställelse genom hela behandlingsprocessen.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Fillers';
$treatment_areas_text = '<p class="p200">Vi anpassar alltid mängden fillers efter dina behov och önskemål.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Populära fillers områden',
        image_title: 'Populära fillers områden',
        title: 'Populära fillers områden',
        description: '<p class="p200">Här hittar du de områden som är mest populära att behandla med fillers och injektionsbehandlingar.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Läppar',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för läpparna.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Haka',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för haka.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Kindben',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för kindben.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Näsa',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för näsan.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Käklinje',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för kaklinje.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Nasolabialveck',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för nasolabialveck.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Kinder',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för kinder.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Mungipor',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för mungipor.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Lip fillers',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för lip fillers.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers under Ögonen',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling under ögonen.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Fillers Panna',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling för panna.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Fillers',
        image_title: 'Fillers',
        title: 'Fillers',
        description: '<p class="p200">Kom ihåg att alltid börja med en konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1 ml',
                image_title: 'Fillers 1 ml',
                title: 'Fillers 1 ml',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 1 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2 ml',
                image_title: 'Fillers 2 ml',
                title: 'Fillers 2 ml',
                duration: '40 min',
                price: '5595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 2 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3 ml',
                image_title: 'Fillers 3 ml',
                title: 'Fillers 3 ml',
                duration: '60 min',
                price: '7595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 3 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 4 ml',
                image_title: 'Fillers 4 ml',
                title: 'Fillers 4 ml',
                duration: '90 min',
                price: '9995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 4 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 5 ml',
                image_title: 'Fillers 5 ml',
                title: 'Fillers 5 ml',
                duration: '90 min',
                price: '12995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 5 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                image_title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                duration: '30 min',
                price: '2395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för påfyllning.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers - Hyalase (Borttagning av fillers)',
                image_title: 'Fillers - Hyalase (Borttagning av fillers)',
                title: 'Fillers - Hyalase (Borttagning av fillers)',
                duration: '60 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för hyalase.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers - Hyalase (Återbesök & Kontroll)',
                image_title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                duration: '60 min',
                price: 'Gratis',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för återbesök och kontroll.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera fillers med injektionsbehandlingar.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1 ml + Injektion 1x Område',
                image_title: 'Fillers 1 ml + Injektion 1x Område',
                title: 'Fillers 1 ml + Injektion 1x Område',
                duration: '50 min',
                price: '5595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1 ml + Injektion 2x Områden',
                image_title: 'Fillers 1 ml + Injektion 2x Områden',
                title: 'Fillers 1 ml + Injektion 2x Områden',
                duration: '50 min',
                price: '6095 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1 ml + Injektion 3x Områden',
                image_title: 'Fillers 1 ml + Injektion 3x Områden',
                title: 'Fillers 1 ml + Injektion 3x Områden',
                duration: '50 min',
                price: '6595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 3x Områden.'
            ),

            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2 ml + Injektion 1x Område',
                image_title: 'Fillers 2 ml + Injektion 1x Område',
                title: 'Fillers 2 ml + Injektion 1x Område',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2 ml + Injektion 2x Områden',
                image_title: 'Fillers 2 ml + Injektion 2x Områden',
                title: 'Fillers 2 ml + Injektion 2x Områden',
                duration: '50 min',
                price: '8995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2 ml + Injektion 3x Områden',
                image_title: 'Fillers 2 ml + Injektion 3x Områden',
                title: 'Fillers 2 ml + Injektion 3x Områden',
                duration: '50 min',
                price: '9495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 3x Områden.'
            ),

            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3 ml + Injektion 1x Område',
                image_title: 'Fillers 3 ml + Injektion 1x Område',
                title: 'Fillers 3 ml + Injektion 1x Område',
                duration: '70 min',
                price: '11395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3 ml + Injektion 2x Områden',
                image_title: 'Fillers 3 ml + Injektion 2x Områden',
                title: 'Fillers 3 ml + Injektion 2x Områden',
                duration: '70 min',
                price: '11895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3 ml + Injektion 3x Områden',
                image_title: 'Fillers 3 ml + Injektion 3x Områden',
                title: 'Fillers 3 ml + Injektion 3x Områden',
                duration: '70 min',
                price: '12395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 3x Områden.'
            ),
        ),
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför fillers',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelse inför fillers',
        image_title: 'Förberedelse inför fillers',
        content: '<p class="p200">Inför din fillersbehandling lägger vi stor vikt vid en omfattande förberedelseprocess, inkluderande en djupgående konsultation. Detta första steg, som inkluderar en betänketid på 48 timmar, är avgörande för att skräddarsy behandlingen så den perfekt matchar dina unika behov och förväntningar. Under konsultationen tar vi oss tid att utforska dina mål med behandlingen, dina förhoppningar samt eventuella tidigare erfarenheter av liknande procedurer.</p>
        <p class="p200 mt-m">För att optimera förutsättningarna för din fillersbehandling, rekommenderar vi vissa förberedelser. Vi råder dig att undvika starkt solljus och att inte använda hudirriterande produkter såsom retinol eller produkter med exfolierande syror några dagar innan din behandling. Dessa försiktighetsåtgärder hjälper till att minska risken för hudirritation och säkerställer att din hud är i bästa möjliga skick. Det är också viktigt att du inför din behandling har en klar förståelse för hela processen, för att vi gemensamt ska kunna uppnå de resultat du önskar.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård och underhåll efter fillers',
        image_small: null,
        image_large: null,
        image_alt: 'Eftervård och underhåll efter fillers',
        image_title: 'Eftervård och underhåll efter fillers',
        content: '<p class="p200">Efter din fillersbehandling är det normalt att känna av en viss svullnad eller se några blåmärken, tecken på kroppens naturliga läkningsprocess. För en optimal återhämtning är det viktigt att undvika direktkontakt eller massage av det behandlade området de första dagarna. Om obehag uppstår, kan en kall kompress användas för att lindra svullnad. Det är också essentiellt att fortsätta återfukta huden med de specifikt rekommenderade produkterna från din behandlare.</p>
        <p class="p200 mt-m">För att bevara effekten av din behandling över tid kan det vara aktuellt med regelbundna uppföljningsbehandlingar, enligt den individuella plan som du och din specialist har lagt upp. Om du har frågor eller funderingar kring din eftervård, uppmuntrar vi dig att kontakta oss. Vi är dedikerade till att erbjuda personlig rådgivning, för att säkerställa att du är helt nöjd med dina resultat och känner dig trygg genom hela processen.</p>',
    ),
);

$results_title = 'Fillers före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
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
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
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
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
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
            title: 'Hur länge håller fillers?',
            text: 'Längden på effekten av fillers kan variera beroende på flera faktorer, inklusive typen av filler som används, behandlingsområdet och individens hudtyp. Generellt sett kan fillers i läpparna hålla mellan 6 till 12 månader, medan fillers i nasolabialvecken ofta har en varaktighet på 9 till 18 månader. Självklart kand in specialist alltid ge en mer exakt uppskattning baserat på din unika situation.'
        ),
        new Question(
            title: 'Hur länge är man svullen efter fillers i läpparna?',
            text: 'Svullnad efter fillers i läpparna är vanligt och en del av läkningsprocessen. Den initiala svullnaden avtar vanligtvis inom de första dagarna efter behandlingen, men det kan ta upp till två veckor för svullnaden att helt försvinna. Varje persons erfarenhet är unik, och din specialist kan ge dig specifika råd om vad du kan förvänta dig.'
        ),
        new Question(
            title: 'Vilken fillers är bäst?',
            text: 'Valet av fillers beror på flera faktorer, inklusive behandlingsområdet, önskat resultat och individens hudtyp. På vår klinik arbetar vi endast med de bästa märkena på marknaden, kombinerat med våra duktiga specialister som har omfattande erfarenhet och kunskap om att utföra behandlingarna. Detta säkerställer att vi kan erbjuda skräddarsydda lösningar som uppfyller våra klienters behov och förväntningar på bästa möjliga sätt.'
        ),
    )
);

$faq_view_more = 'Se alla frågor & svar';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: '/bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: '/bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: '/bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: '/bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: '/bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: '/bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: '/bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: '/bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: '/bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: '/bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: '/bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: '/bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: '/bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: '/bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: '/bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/estetiska-injektionsbehandlingar/fillers/" />
      
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
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../../widgets/treatment-area-item-card/treatment-area-item-card.php');
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