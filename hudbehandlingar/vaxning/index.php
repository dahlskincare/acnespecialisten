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
    consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/vaxning-brasiliansk-3281247',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=waxing',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Effektiv och skonsam borttagning av hår med hjälp av laser.';

$description_title = 'Vad är permanent hårborttagning med laser?';
$description_text = '<p class="p200">Permanent hårborttagning med laser representerar den bästa och mest avancerade metoden för att effektivt och långvarigt ta bort oönskat hår. Denna högteknologiska metod är effektiv på alla kroppsdelar, till exempel ansiktet, benen, armarna, ryggen och intim såsom underlivet och rumpa. Laserbehandlingarna fungerar genom att rikta energi direkt mot hårfolliklarna, vilket förhindrar framtida hårväxt på ett säkert och effektivt sätt.</p>
<p class="p200 mt-m">Vår laser hårborttagning är anpassningsbar för alla hud- och hårtyper, och är ett utmärkt alternativ till traditionella metoder som rakning, vaxning eller IPL. Dess unika förmåga att arbeta på flera olika djupnivåer säkerställer en grundlig behandling och minimerar risken för missade hårstrån. Denna smärtfria och tidsbesparande metod ger dig slät och hårfri hud utan behov av återhämtningstid. Vi behandlar de flesta hårtyper, hudfärger och grova strån, men notera att gråa eller röda hårstrån inte kan behandlas med denna teknik.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/permanent-harborttagning-forberedelser.webp',
        image_large: '/bilder/process/872x456/permanent-harborttagning-forberedelser.webp',
        image_alt: 'Förberedelser inför permanent hårborttagning',
        image_title: 'Förberedelser inför permanent hårborttagning',
        content: '<p class="p200">Förberedelserna inför permanent hårborttagning består av en konsultation som är en viktig del av processen för att gå igenom vilka områden på kroppen som du vill ta bort hår på. Innan din laserbehandling rekommenderar vi att du undviker att vaxa eller noppa hår i behandlingsområdet, eftersom laserenergin fokuserar på håret som leder värmen ner i hårfolliklarna. Istället ska området rakas dagen innan behandlingen.</p>
        <p class="p200 mt-m">Det är också viktigt att skydda huden från solen och inte sola under veckan innan behandling, eftersom solbränd hud kan påverka effektiviteten av laserbehandlingen och öka risken för biverkningar. Dessa förberedelser hjälper till att säkerställa att din hud är i optimalt skick för laserbehandlingen och bidrar till en smidigare och mer effektiv hårborttagningsprocess.</p>',
    ),
    'process' => new Article(
        title: 'Hur fungerar behandlingen?',
        image_small: '/bilder/process/358x272/permanent-harborttagning-process.webp',
        image_large: '/bilder/process/872x456/permanent-harborttagning-process.webp',
        image_alt: 'Hur fungerar laser hårborttagning?',
        image_title: 'Hur fungerar laser hårborttagning?',
        content: '<p class="p200">Permanent hårborttagning med laser är en noggrant anpassad behandling som effektivt minskar oönskad hårväxt. Under behandlingen appliceras laserljus på de områden där hårborttagning önskas. Ljuset absorberas av pigmentet i hårfolliklarna som omvandlas till värme, vilket skadar hårfolliklarna och därmed hindrar framtida hårväxt. Denna metod är noggrann och riktar sig selektivt mot håret, vilket minimerar påverkan på den omgivande huden. Alla våra lasermaskiner för permanent hårborttagning har effektiva kylsystem som gör att behandlingarna nästan är smärtfria.</p>
        <p class="p200 mt-m">Efter behandlingen kan du märka en viss rodnad och svullnad i de behandlade områdena, vilket är en normal reaktion och bör avta inom kort. Eftersom hår växer i olika faser behövs flera behandlingar behövas för att uppnå permanent resultat. Vår expertis inom permanent hårborttagning med laser garanterar en säker och effektiv process, vilket ger dig slät och hårfri hud.</p>',
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

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/permanent-harborttagning-eftervard.webp',
    image_large: '/bilder/process/872x456/permanent-harborttagning-eftervard.webp',
    image_alt: 'Eftervård för Permanent Hårborttagning',
    image_title: 'Eftervård för Permanent Hårborttagning',
    content: '<p class="p200">Efter en laser behandling för permanent hårborttagning är en smidig återhämtning avgörande för att säkerställa de bästa resultaten. Du kan förvänta dig en viss rodnad och en lätt värmande känsla i det behandlade området, men dessa symtom är vanligtvis milda och avtar snabbt. För att underlätta återhämtningen, rekommenderar vi att du tar hand om området försiktigt och undviker direkt exponering för solen under de första dagarna efter behandlingen.</p>
    <p class="p200 mt-m">Undvik hård skrubbning och använd inte irriterande hudvårdsprodukter. Det är också viktigt att undvika andra hårborttagningsmetoder som vaxning eller plockning under läkningsperioden. Använd ett högt SPF-solskydd om du ska vara utomhus, för att skydda huden från ytterligare skador och stödja återhämtningsprocessen.</p>
    <p class="p200 mt-m">Om du upplever någon ovanlig irritation eller har frågor om din återhämtning, är det viktigt att du kontaktar oss. En korrekt skötsel efter din behandling för permanent hårborttagning är nyckeln till en snabb och problemfri återhämtning, och hjälper till att upprätthålla och optimera behandlingens resultat.</p>',
));

$service_brands_title = 'Våra lasermaskiner för permanent hårborttagning';
$service_brands_text = '<p class="p200">Vi utför Permanent Hårborttagning med Splendor X och Soprano Ice som är de två bästa maskinerna på marknaden.</p>';
$service_brands = array(

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
);

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


$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar behövs för permanent hårborttagning?',
            text: '<p class="p200">Antalet behandlingar för permanent hårborttagning varierar beroende på individens hårtyp, hårfärg och det område som behandlas. Generellt krävs det 8-12 behandlingar för att uppnå optimala resultat. Varje behandling utförs med några veckors mellanrum för att följa hårets tillväxtcykel.</p>'
        ),
        new Question(
            title: 'Hur länge håller laser hårborttagning?',
            text: '<p class="p200">Målet med laser hårborttagning är att permanent eliminera oönskat hår. När behandlingen är klar och hårfollikeln slutar producera hår, upphör hårväxten helt. För att uppnå detta resultat är det viktigt att noggrant följa de rekommenderade behandlingsintervallerna. Dessa intervaller är utformade för att behandlingen ska ske under rätt fas av hårets tillväxtcykel, vilket är avgörande för effektiviteten. Om behandlingsplanens intervaller inte följs kan det resultera i att det tar längre tid att uppnå en permanent hårfri status. Att följa dessa riktlinjer noggrant säkerställer att du får ut det mesta och bästa av din behandling för långvariga resultat.</p>'
        ),
        new Question(
            title: 'Är laserbehandling för permanent hårborttagning smärtsamt?',
            text: '<p class="p200">Många upplever att laserbehandling för permanent hårborttagning är mycket mindre smärtsamt jämfört med alternativa metoder, såsom vaxning och IPL. Ofta liknas känslan vid behandlingen vid ett lätt snärt mot huden. Det är dock viktigt att notera att upplevelsen av smärta kan variera från person till person, beroende på individens smärttröskel samt vilket område som behandlas. För att ytterligare minska obehaget är alla våra lasermaskiner utrustade med avancerade kylsystem. Dessa system är placerade direkt på munstycket som avger laserstrålen, vilket hjälper till att kyla ner huden omedelbart före varje pulsslag. Denna funktion bidrar till en mer bekväm behandlingsupplevelse.</p>'
        ),
        new Question(
            title: 'Hur ofta utförs laser hårborttagning?',
            text: '<p class="p200">Behandlingsintervallen för laser hårborttagning varierar beroende på vilket område av kroppen som behandlas, eftersom olika delar har olika hårväxtcykler. För ansiktet rekommenderas behandling var fjärde vecka för att effektivt rikta in sig på hårets tillväxtfas. För områden på överkroppen, inklusive intimbehandlingar, är det lämpligt med behandling var sjätte vecka. Underkroppen, såsom lår och ben, bör behandlas var åttonde vecka för bästa möjliga resultat. Dessa intervaller är optimerade för att matcha de unika växtcyklerna för varje område och maximera effektiviteten av behandlingen mot permanent hårborttagning.</p>

            <p class="p200 mt-m">En individuell behandlingsplan utformas av din personliga laserterapeut för att säkerställa att du får den mest effektiva behandlingen för permanent hårborttagning. Din terapeut kommer att bedöma dina specifika behov, hudtyp och hårväxt för att fastställa de optimala behandlingsintervallerna och antalet sessioner som krävs för att uppnå bästa möjliga resultat. Detta skräddarsydda tillvägagångssätt garanterar att behandlingen är anpassad just för dig.</p>'
        ),
        new Question(
            title: 'Kan man göra permanent hårborttagning hemma?',
            text: '<p class="p200">Nej, att uppnå helt permanent hårborttagning hemma är inte möjligt med maskiner för hemmabruk. Hemmabrukstekniker kan potentiellt minska hårväxten till viss del, men de kan inte erbjuda de permanenta resultaten som professionella behandlingar gör. För helt permanent hårborttagning rekommenderas professionella metoder som laserhårborttagning eller elektrolys, som är utformade för att målinrikta och permanent minska hårväxten med stor precision och säkerhet.</p>

            <p class="p200 mt-m">Dessutom är säkerhetsaspekten viktig att överväga. Hemmabruk av hårborttagningsenheter innebär en risk för hudirritationer, brännskador och i värsta fall permanenta hudskador om de används felaktigt. Professionella behandlare har särskild utbildning och tillgång till avancerad utrustning för att minimera dessa risker, vilket gör att de kan erbjuda en säker och effektiv behandling för permanent hårborttagning.</p>'
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