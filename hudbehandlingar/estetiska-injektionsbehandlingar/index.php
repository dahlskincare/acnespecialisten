<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Estetiska injektionsbehandlingar - Naturliga resultat';
$seo_description = 'Utforska våra estetiska injektionsbehandlingar för att förbättra din naturliga skönhet. Säkra och skräddarsydda lösningar för varje individ.';
$seo_keywords = 'estetiska injektionsbehandlingar';

$seo_image = '/images/treatments/large/injektionsbehandlingar.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Estetiska Injektionsbehandlingar', '/hudbehandlingar/estetiska-injektionsbehandlingar/'),
);

$model = new Service(
    title: 'Estetiska injektionsbehandlingar',
    duration: null,
    price: 'Från 2595 kr',
    content: '<p class="p200">Vi erbjuder estetiska injektionsbehandlingar för att förbättra hudens utseende och textur. Dessa behandlingar är utformade för att försiktigt minska synliga linjer och rynkor samt återställa hudens volym och konturer.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/injektionsbehandlingar.webp',
    image_large: 'bilder/hudbehandlingar/424x456/injektionsbehandlingar.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Botox_Fillers',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Moderna och säkra injektionsbehandlingar för ett brett utbud av hudproblem.';

$description_title = 'Vad är estetiska injektionsbehandlingar?';
$description_text = '<p class="p200">Vår metod fokuserar på att skapa en naturlig och förfinad estetik, anpassad efter varje kunds unika ansiktsdrag och behov. Dessa behandlingar involverar användning av speciella preparat som injiceras i huden för att minska synliga linjer, rynkor och för att återställa eller förbättra hudens volym och konturer. Vi använder en rad tekniker för att behandla områden som kinder, läppar, panna och andra delar av ansiktet där tecken på åldrande eller volymförlust kan vara synliga. Varje behandling är skräddarsydd för att uppnå de mest naturliga och tillfredsställande resultaten.</p>
<p class="p200 mt-m">Våra injektionsbehandlingar erbjuder en säker och effektiv lösning för de som önskar en omedelbar förbättring av hudens utseende utan behov av kirurgiska ingrepp. Med vårt team av erfarna sjuksköterskor och läkare, samt användning av högkvalitativa produkter, strävar vi efter att ge dig en förbättrad hudhälsa och förnyat självförtroende.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går injektionsbehandlingar till?',
        image_small: '/bilder/process/358x272/injektioner-process.webp',
        image_large: '/bilder/process/872x456/injektioner-process.webp',
        image_alt: 'Hur går injektionsbehandlingar till?',
        image_title: 'Hur går injektionsbehandlingar till?',
        content: '<p class="p200">Behandlingen börjar med en noggrann rengöring av det område som ska behandlas. Därefter markerar vår erfarna personal de specifika områdena som ska behandlas för att säkerställa precision och effektivitet. Behandlingen utförs med största noggrannhet, där vi använder injektionstekniker som uppfyller dina estetiska önskemål samtidigt som vi minimerar obehag.</p>
    <p class="p200 mt-m">Efter behandlingen får du detaljerade instruktioner om eftervård för att säkerställa optimal läkning och resultat. Det är vanligt att uppleva mild rodnad eller svullnad i det behandlade området, men detta bör avta inom kort. Vi erbjuder också uppföljningssessioner för att bedöma resultaten och göra eventuella justeringar om det behövs. Vår prioritet är din tillfredsställelse och säkerhet genom hela processen.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Injektionsbehandlingar';
$treatment_areas_text = '<p class="p200">Vi behandlar både specifika problem och områden effektivt.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Områden',
        image_title: 'Områden',
        title: 'Områden',
        description: '<p class="p200">Lägg till flera områden för endast 500 kronor styck.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '30 min',
                price: '2995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-2x-omraden-2181712',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '30 min',
                price: '3595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-3x-omraden-2181669',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '4x områden',
                image_title: '4x områden',
                title: '4x områden',
                duration: '30 min',
                price: '3995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-4x-omraden-2181612',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 4 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '5x områden',
                image_title: '5x områden',
                title: '5x områden',
                duration: '30 min',
                price: '4595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-5x-omraden-2181785',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 5 områden.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Problem',
        image_title: 'Problem',
        title: 'Problem',
        description: '<p class="p200">Här hittar du alla våra behandlingar för specifika problem.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Gabella (Arga rynkan)',
                image_title: 'Gabella (Arga rynkan)',
                title: 'Gabella (Arga rynkan)',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för glabella'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Bekymmersrynka',
                image_title: 'Bekymmersrynka',
                title: 'Bekymmersrynka',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för bekymmersrynka'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Pannrynkor',
                image_title: 'Pannrynkor',
                title: 'Pannrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för pannrynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Kråksparkar',
                image_title: 'Kråksparkar',
                title: 'Kråksparkar',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för kråksparkar'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Skrattrynkor',
                image_title: 'Skrattrynkor',
                title: 'Skrattrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för skrattrynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Sura Mungipor',
                image_title: 'Sura Mungipor',
                title: 'Sura Mungipor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för sura mungipor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Resting Bitch Face',
                image_title: 'Resting Bitch Face',
                title: 'Resting Bitch Face',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för Resting Bitch Face'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'DAO',
                image_title: 'DAO',
                title: 'DAO',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för DAO'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Bunnylines',
                image_title: 'Bunnylines',
                title: 'Bunnylines',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för Bunnylines'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Näsrynkor',
                image_title: 'Näsrynkor',
                title: 'Näsrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för näsrynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Ögonbrynslyft',
                image_title: 'Ögonbrynslyft',
                title: 'Ögonbrynslyft',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för ögonbrynslyft'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Lipflip',
                image_title: 'Lipflip',
                title: 'Lipflip',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för lipflip'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Läpplyft',
                image_title: 'Läpplyft',
                title: 'Läpplyft',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för läpplyft'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Läpprynkor',
                image_title: 'Läpprynkor',
                title: 'Läpprynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för läpprynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Rökrynkor',
                image_title: 'Rökrynkor',
                title: 'Rökrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för rökrynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Munrynkor',
                image_title: 'Munrynkor',
                title: 'Munrynkor',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för munrynkor'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Apelsinhaka',
                image_title: 'Apelsinhaka',
                title: 'Apelsinhaka',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för apelsinhaka'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Gummy Smile',
                image_title: 'Gummy Smile',
                title: 'Gummy Smile',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för Gummy Smile'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Tandköttsvisning',
                image_title: 'Tandköttsvisning',
                title: 'Tandköttsvisning',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
                url_label: 'Boka',
                url_title: 'Boka tid för tandköttsvisning'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Fillers',
        image_title: 'Fillers',
        title: 'Fillers',
        description: '<p class="p200">Vi utför även fillers, lägg till 2000 kronor per mililiter.</p>',
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
        image_alt: 'Kombinera metoder',
        image_title: 'Kombinera metoder',
        title: 'Kombinera metoder',
        description: '<p class="p200">Kombinera injektionsbehandling med fillers.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 1x område + Fillers 1 ml',
                image_title: 'Injektion 1x område + Fillers 1 ml',
                title: 'Injektion 1x område + Fillers 1 ml',
                duration: '50 min',
                price: '5595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 1x område + Fillers 2 ml',
                image_title: 'Injektion 1x område + Fillers 2 ml',
                title: 'Injektion 1x område + Fillers 2 ml',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 1x område + Fillers 3 ml',
                image_title: 'Injektion 1x område + Fillers 3 ml',
                title: 'Injektion 1x område + Fillers 3 ml',
                duration: '50 min',
                price: '11395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 1x område + Fillers 3 ml.'
            ),

            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 2x områden + Fillers 1 ml',
                image_title: 'Injektion 2x områden + Fillers 1 ml',
                title: 'Injektion 2x områden + Fillers 1 ml',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 2x områden + Fillers 2 ml',
                image_title: 'Injektion 2x områden + Fillers 2 ml',
                title: 'Injektion 2x områden + Fillers 2 ml',
                duration: '50 min',
                price: '8995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 2x områden + Fillers 3 ml',
                image_title: 'Injektion 2x områden + Fillers 3 ml',
                title: 'Injektion 2x områden + Fillers 3 ml',
                duration: '70 min',
                price: '11895 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 2x områden + Fillers 3 ml.'
            ),

            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 3x områden + Fillers 1 ml',
                image_title: 'Injektion 3x områden + Fillers 1 ml',
                title: 'Injektion 3x områden + Fillers 1 ml',
                duration: '50 min',
                price: '6595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 1 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 3x områden + Fillers 2 ml',
                image_title: 'Injektion 3x områden + Fillers 2 ml',
                title: 'Injektion 3x områden + Fillers 2 ml',
                duration: '50 min',
                price: '9495 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 2 ml.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Injektion 3x områden + Fillers 3 ml',
                image_title: 'Injektion 3x områden + Fillers 3 ml',
                title: 'Injektion 3x områden + Fillers 3 ml',
                duration: '70 min',
                price: '12395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka',
                url_title: 'Boka tid för Injektion 3x områden + Fillers 3 ml.'
            ),
        ),
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför injektionsbehandlingar',
        image_small: '/bilder/process/358x272/injektioner-forberedelser.webp',
        image_large: '/bilder/process/872x456/injektioner-forberedelser.webp',
        image_alt: 'Förberedelse inför injektionsbehandlingar',
        image_title: 'Förberedelse inför injektionsbehandlingar',
        content: '<p class="p200">På AcneSpecialisten är en grundlig konsultation ett essentiellt första steg inför din injektionsbehandling. Denna process, som inkluderar en 48 timmars betänketid, är avgörande för att säkerställa att behandlingen är anpassad efter dina specifika behov och önskemål. Under konsultationen diskuterar vi dina mål, förväntningar och eventuella tidigare erfarenheter av liknande behandlingar.</p>
        <p class="p200 mt-m">För att förbereda dig för din behandling rekommenderar vi att du undviker vissa aktiviteter och produkter. Det är bra att inte exponera huden för starkt solljus och att undvika att använda hudirriterande produkter som retinol eller exfolierande syror några dagar före din behandling. Dessa åtgärder minimerar risken för eventuell hudirritation. Vi betonar vikten av att du kommer till din behandling med en god förståelse för processen.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård och underhåll efter injektionsbehandlingar',
        image_small: '/bilder/process/358x272/injektioner-eftervard.webp',
        image_large: '/bilder/process/872x456/injektioner-eftervard.webp',
        image_alt: 'Eftervård och underhåll efter injektionsbehandlingar',
        image_title: 'Eftervård och underhåll efter injektionsbehandlingar',
        content: '<p class="p200">Efter behandlingen kan det uppstå mindre svullnad eller blåmärken, vilket är normalt. Det är viktigt att inte röra eller massera behandlingsområdet under de första dagarna. Om du upplever någon obehag, kan en kall kompress hjälpa till att minska svullnad. För att stödja läkningen, fortsätt att återfukta huden med lämpliga hudvårdsprodukter som rekommenderats av din utövare.</p>
        <p class="p200 mt-m">Ett balanserat intag av vatten och näringsrik kost är också viktigt för att stödja din huds hälsa inifrån och ut. Undvik att dricka alkohol och begränsa användningen av blodförtunnande läkemedel som kan öka risken för blåmärken. För att upprätthålla resultatet av din behandling, kan regelbundna uppföljningsbehandlingar rekommenderas av din specialist. Om du har några frågor eller funderingar kring din eftervård, tveka inte att kontakta oss på AcneSpecialisten för personlig rådgivning och stöd.</p>',
    ),
);

$results_title = 'Estetiska injektionsbehandlingar före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
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
            title: 'Hur ofta behöver jag genomföra injektionsbehandlingar?',
            text: 'Antalet injektionsbehandlingar varierar beroende på individuella mål och hudens reaktion. Oftast rekommenderas initiala behandlingar med uppföljande underhållsbehandlingar var tredje till sjätte månad för att upprätthålla resultatet.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig efter en injektionsbehandling?',
            text: 'Efter en injektionsbehandling kan du uppleva lätt svullnad eller rodnad i behandlingsområdet. Dessa symtom är vanligtvis milda och tillfälliga. Resultaten blir synliga efter några dagar när svullnaden har lagt sig.'
        ),
        new Question(
            title: 'När kan jag återgå till mina normala aktiviteter efter en injektionsbehandling?',
            text: 'De flesta kan återgå till sina normala aktiviteter direkt efter behandlingen. Vi rekommenderar dock att undvika ansträngande fysisk aktivitet under de första 24 timmarna för att minimera svullnad och blåmärken.'
        ),
        new Question(
            title: 'Behöver jag någon speciell eftervård efter en injektionsbehandling?',
            text: 'Efter injektionsbehandlingar är det viktigt att undvika att röra vid behandlingsområdet under de första timmarna. Vi ger dig detaljerade eftervårdsinstruktioner beroende på din specifika behandling.'
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
        url: '/varumarken/skin-tech/',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: '/bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
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
        url: '/varumarken/splendor-x/',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: '/bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: '/bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
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
        url: '/varumarken/splendor-x/',
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
        url: '/varumarken/exceed/',
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

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/estetiska-injektionsbehandlingar/" />

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

            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>