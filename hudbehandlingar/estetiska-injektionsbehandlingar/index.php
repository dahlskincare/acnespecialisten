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
    consultation_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300',
    consultation_url_label: 'Boka Sundbyberg',
    consultation_url_title: 'Boka injektionsbehandling på Sundbyberg',
    booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
    booking_url_label: 'Boka Östermalm',
    booking_url_title: 'Boka injektionsbehandling på Östermalm',
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

$treatment_areas_title = 'Välj behandlingstyp';
$treatment_areas_text = '<p class="p200">Vi erbjuder estetiska injektionsbehandlingar på båda våra kliniker i Stockholm. Välj behandlingstyp nedan och sedan vilken klinik som passar dig bäst.</p>';

$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Toxin & Fillers',
        image_title: 'Toxin & Fillers',
        title: 'Toxin & Fillers',
        description: '<p class="p200">Vi erbjuder toxinbehandlingar och fillers på båda våra kliniker. På Sundbyberg arbetar vi ml-baserat, på Östermalm arbetar vi områdesbaserat. Alla behandlingar kräver en kostnadsfri konsultation enligt lag.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 1x område - Sundbyberg',
                image_title: 'Toxin 1x område - Sundbyberg',
                title: 'Toxin 1x område',
                duration: '30 min',
                price: '2 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/toxin-1x-omrade-2181493',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Toxin 1x område på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 1x område - Östermalm',
                image_title: 'Toxin 1x område - Östermalm',
                title: 'Toxin 1x område',
                duration: '30 min',
                price: '2 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/toxin-1x-omrade-3437248',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Toxin 1x område på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 2x områden - Sundbyberg',
                image_title: 'Toxin 2x områden - Sundbyberg',
                title: 'Toxin 2x områden',
                duration: '30 min',
                price: '2 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/toxin-2x-omraden-2181712',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Toxin 2x områden på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 2x områden - Östermalm',
                image_title: 'Toxin 2x områden - Östermalm',
                title: 'Toxin 2x områden',
                duration: '30 min',
                price: '2 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/toxin-2x-omraden-3437249',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Toxin 2x områden på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 3x områden - Sundbyberg',
                image_title: 'Toxin 3x områden - Sundbyberg',
                title: 'Toxin 3x områden',
                duration: '30 min',
                price: '3 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/toxin-3x-omraden-2181669',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Toxin 3x områden på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin 3x områden - Östermalm',
                image_title: 'Toxin 3x områden - Östermalm',
                title: 'Toxin 3x områden',
                duration: '30 min',
                price: '3 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/toxin-3x-omraden-3437247',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Toxin 3x områden på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1 ml - Sundbyberg',
                image_title: 'Fillers 1 ml - Sundbyberg',
                title: 'Fillers 1 ml',
                duration: '40 min',
                price: '3 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-2181434',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Fillers 1 ml på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 1x område - Östermalm',
                image_title: 'Fillers 1x område - Östermalm',
                title: 'Fillers 1x område',
                duration: '40 min',
                price: '3 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-1x-omrade-3437282',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Fillers 1x område på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2 ml - Sundbyberg',
                image_title: 'Fillers 2 ml - Sundbyberg',
                title: 'Fillers 2 ml',
                duration: '40 min',
                price: '5 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-2-ml-2181435',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Fillers 2 ml på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 2x områden - Östermalm',
                image_title: 'Fillers 2x områden - Östermalm',
                title: 'Fillers 2x områden',
                duration: '40 min',
                price: '5 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-2x-omraden-3437283',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Fillers 2x områden på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3 ml - Sundbyberg',
                image_title: 'Fillers 3 ml - Sundbyberg',
                title: 'Fillers 3 ml',
                duration: '60 min',
                price: '7 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-3-ml-2181436',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Fillers 3 ml på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Fillers 3x områden - Östermalm',
                image_title: 'Fillers 3x områden - Östermalm',
                title: 'Fillers 3x områden',
                duration: '40 min',
                price: '7 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-3x-omraden-3437284',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Fillers 3x områden på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin + Filler - Sundbyberg',
                image_title: 'Toxin + Filler - Sundbyberg',
                title: 'Toxin + Filler',
                duration: '60 min',
                price: 'Från 5 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/toxin-filler-2181666',
                url_label: 'Boka Sundbyberg',
                url_title: 'Boka Toxin + Filler på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Toxin + Filler - Östermalm',
                image_title: 'Toxin + Filler - Östermalm',
                title: 'Toxin + Filler',
                duration: '40 min',
                price: '5 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/toxin-filler-3437245',
                url_label: 'Boka Östermalm',
                url_title: 'Boka Toxin + Filler på Östermalm'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Hyalase',
        image_title: 'Hyalase',
        title: 'Hyalase',
        description: '<p class="p200">Hyalase används för att lösa upp oönskad filler. Behandlingen finns på vår klinik i Sundbyberg.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Påfyllning (inom 2 månader)',
                image_title: 'Påfyllning (inom 2 månader)',
                title: 'Påfyllning (inom 2 mån)',
                duration: '30 min',
                price: '2 395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-1-ml-pafyllning-inom-2-manader-2181439',
                url_label: 'Boka',
                url_title: 'Boka Påfyllning på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hyalase (Borttagning av fillers)',
                image_title: 'Hyalase (Borttagning av fillers)',
                title: 'Hyalase (Borttagning)',
                duration: '60 min',
                price: '2 595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-hyalase-borttagning-av-fillers-2181440',
                url_label: 'Boka',
                url_title: 'Boka Hyalase-behandling på Sundbyberg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hyalase (Återbesök & Kontroll)',
                image_title: 'Hyalase (Återbesök & Kontroll)',
                title: 'Hyalase (Återbesök)',
                duration: '60 min',
                price: 'Gratis',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/fillers-hyalase-aterbesok-kontroll-2181441',
                url_label: 'Boka',
                url_title: 'Boka Hyalase återbesök på Sundbyberg'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Medicinsk Toxin',
        image_title: 'Medicinsk Toxin',
        title: 'Medicinsk Toxin',
        description: '<p class="p200">Vi erbjuder medicinsk toxinbehandling för hyperhidros (överdriven svettning) samt behandling av tandgnissling, käkspänningar, migrän och spänningshuvudvärk. Finns på vår klinik på Östermalm.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hyperhidros - Armhålor',
                image_title: 'Hyperhidros - Armhålor',
                title: 'Hyperhidros - Armhålor',
                duration: '60 min',
                price: '3 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-armhalor-3442783',
                url_label: 'Boka',
                url_title: 'Boka Hyperhidros Armhålor på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hyperhidros - Händer',
                image_title: 'Hyperhidros - Händer',
                title: 'Hyperhidros - Händer',
                duration: '60 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-hander-3442785',
                url_label: 'Boka',
                url_title: 'Boka Hyperhidros Händer på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hyperhidros - Fötter',
                image_title: 'Hyperhidros - Fötter',
                title: 'Hyperhidros - Fötter',
                duration: '60 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-fotter-3442784',
                url_label: 'Boka',
                url_title: 'Boka Hyperhidros Fötter på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Bruxism/Tandgnissling',
                image_title: 'Bruxism/Tandgnissling',
                title: 'Bruxism/Tandgnissling',
                duration: '30 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-bruxism-tandgnissling-3442788',
                url_label: 'Boka',
                url_title: 'Boka Bruxism-behandling på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Masseter',
                image_title: 'Masseter',
                title: 'Masseter',
                duration: '30 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-masseter-3442789',
                url_label: 'Boka',
                url_title: 'Boka Masseter-behandling på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Migrän',
                image_title: 'Migrän',
                title: 'Migrän',
                duration: '30 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-migran-3442790',
                url_label: 'Boka',
                url_title: 'Boka Migrän-behandling på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Spänningshuvudvärk',
                image_title: 'Spänningshuvudvärk',
                title: 'Spänningshuvudvärk',
                duration: '30 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-spanningshuvudvark-3442791',
                url_label: 'Boka',
                url_title: 'Boka Spänningshuvudvärk-behandling på Östermalm'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Nackspänningar',
                image_title: 'Nackspänningar',
                title: 'Nackspänningar',
                duration: '30 min',
                price: '4 995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-nackspanningar-3442792',
                url_label: 'Boka',
                url_title: 'Boka Nackspänningar-behandling på Östermalm'
            ),
        )
    ),
);

// Legacy arrays - keeping for backwards compatibility but not used in rendering
$types = array(
    new Service(
        title: 'Toxin 1x område',
        duration: '30 min',
        price: '2 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Toxin 1x område',
        image_title: 'Toxin 1x område',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-1x-omrade-2181493',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Toxin 1x område på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-1x-omrade-3437248',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Toxin 1x område på Östermalm'
    ),
    new Service(
        title: 'Toxin 2x områden',
        duration: '40 min',
        price: '2 995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Toxin 2x områden',
        image_title: 'Toxin 2x områden',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-2x-omraden-2181712',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Toxin 2x områden på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-2x-omraden-3437249',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Toxin 2x områden på Östermalm'
    ),
    new Service(
        title: 'Toxin 3x områden',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Toxin 3x områden',
        image_title: 'Toxin 3x områden',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300/botox-3x-omraden-2181669',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Toxin 3x områden på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-3x-omraden-3437247',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Toxin 3x områden på Östermalm'
    ),
    new Service(
        title: 'Hyperhidros - Armhålor',
        duration: '60 min',
        price: '3 995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Hyperhidros - Armhålor',
        image_title: 'Hyperhidros - Armhålor',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Hyperhidros',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-armhalor-3442783',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Hyperhidros Armhålor på Östermalm'
    ),
    new Service(
        title: 'Hyperhidros - Händer',
        duration: '60 min',
        price: '4 995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Hyperhidros - Händer',
        image_title: 'Hyperhidros - Händer',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Hyperhidros',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-hander-3442785',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Hyperhidros Händer på Östermalm'
    ),
    new Service(
        title: 'Hyperhidros - Fötter',
        duration: '60 min',
        price: '4 995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Hyperhidros - Fötter',
        image_title: 'Hyperhidros - Fötter',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Hyperhidros',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-hyperhidros-fotter-3442784',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Hyperhidros Fötter på Östermalm'
    ),
    new Service(
        title: 'Bruxism - Tandpressning/Tandgnissling',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Bruxism - Tandpressning/Tandgnissling',
        image_title: 'Bruxism - Tandpressning/Tandgnissling',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Bruxism-behandling',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-bruxism-tandpressning-tandgnissling-3442782',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Bruxism-behandling på Östermalm'
    ),
    new Service(
        title: 'Masseter - Käkspänningar',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Masseter - Käkspänningar',
        image_title: 'Masseter - Käkspänningar',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Masseter-behandling',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-masseter-kakspanningar-3442786',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Masseter-behandling på Östermalm'
    ),
    new Service(
        title: 'Migrän',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Migrän',
        image_title: 'Migrän',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Migrän-behandling',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-migran-3442787',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Migrän-behandling på Östermalm'
    ),
    new Service(
        title: 'Spänningshuvudvärk',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Spänningshuvudvärk',
        image_title: 'Spänningshuvudvärk',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Spänningshuvudvärk-behandling',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-spanningshuvudvark-3442789',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Spänningshuvudvärk-behandling på Östermalm'
    ),
    new Service(
        title: 'Nackspänningar',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Nackspänningar',
        image_title: 'Nackspänningar',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Nackspänningar-behandling',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-nackspanningar-3442788',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Nackspänningar-behandling på Östermalm'
    ),
);

$types_fillers_title = 'Fillers & Kombinationsbehandlingar';
$types_fillers_description = 'Hyaluronsyra för volym och konturering, samt kombinationsbehandlingar med toxin och fillers.';
$types_fillers = array(
    new Service(
        title: 'Fillers 1x område',
        duration: '40 min',
        price: '3 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Fillers 1x område',
        image_title: 'Fillers 1x område',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-sundbyberg-135394/fillers-1x-omrade-3437279',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Fillers 1x område på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-1x-omrade-3437278',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Fillers 1x område på Östermalm'
    ),
    new Service(
        title: 'Fillers 2x områden',
        duration: '40 min',
        price: '5 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Fillers 2x områden',
        image_title: 'Fillers 2x områden',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-sundbyberg-135394/fillers-2x-omraden-3437283',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Fillers 2x områden på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-2x-omraden-3437282',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Fillers 2x områden på Östermalm'
    ),
    new Service(
        title: 'Fillers 3x områden',
        duration: '40 min',
        price: '7 995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Fillers 3x områden',
        image_title: 'Fillers 3x områden',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-sundbyberg-135394/fillers-3x-omraden-3437284',
        consultation_url_label: 'Boka Sundbyberg',
        consultation_url_title: 'Boka Fillers 3x områden på Sundbyberg',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/fillers-3x-omraden-3437284',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Fillers 3x områden på Östermalm'
    ),
);

$types_combo = array(
    new Service(
        title: 'Toxin + Filler',
        duration: '40 min',
        price: '5 595 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'Toxin + Filler',
        image_title: 'Toxin + Filler',
        consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-botox-fillers-klinik-3431308',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Botox + Filler',
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/botox-filler-3437245',
        booking_url_label: 'Boka Östermalm',
        booking_url_title: 'Boka Toxin + Filler på Östermalm'
    ),
);

$areas_title = 'Områden och problem vi behandlar';
$areas_text = '<p class="p200">Våra injektionsbehandlingar kan användas för att behandla följande områden och problem. Välj antal områden ovan eller boka en konsultation för att komma igång.</p>';
$areas_list = array(
    'Gabella (Arga rynkan)',
    'Bekymmersrynka',
    'Pannrynkor',
    'Kråksparkar',
    'Skrattrynkor',
    'Sura mungipor',
    'Resting Bitch Face',
    'DAO',
    'Bunnylines',
    'Näsrynkor',
    'Ögonbrynslyft',
    'Lipflip',
    'Läpplyft',
    'Läpprynkor',
    'Rökrynkor',
    'Munrynkor',
    'Apelsinhaka',
    'Gummy Smile',
    'Tandköttsvisning'
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
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
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
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
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

$faq_view_more = 'Se fler frågor & svar';



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
        url_title: 'Exceed',
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
                <?php if (isset($areas_title) && isset($areas_list)) { ?>
                    <section id="treatment-areas-info" class="large-margin">
                        <h2 class="h500"><?php echo $areas_title; ?></h2>
                        <?php if (isset($areas_text)) { ?>
                            <div class="mt-xs"><?php echo $areas_text ?></div>
                        <?php } ?>
                        <div class="mt-xl columns is-multiline is-variable is-3">
                            <?php foreach ($areas_list as $area) { ?>
                                <div class="column is-half">
                                    <div class="p200">• <?php echo $area ?></div>
                                </div>
                            <?php } ?>
                        </div>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se fler frågor"><?php echo $faq_view_more ?></a>
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