<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ansiktsbehandlingar för hudproblem | AcneSpecialisten';
$seo_description = 'Skräddarsydda ansiktsbehandlingar för problemhy som akne, rosacea, olika typer av finnar och mer. Bli av med hudproblem med våra expertanpassade lösningar';
$seo_keywords = 'problemhy, gropig hy, hudproblem ansikte, olika typer av finnar, torr hy med finnar och pormaskar, olika typer av akne, hudutskott, blodprickar, torr hy och finnar, finnar och torr hy, åldersfläckar bilder, stressfinnar i ansiktet';
$seo_image = 'bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Problemhy', '/problemhy.php'),
);

$model = new Service(
    title: 'Ansiktsbehandlingar mot hudproblem',
    duration: '60 min',
    price: 'Från 1295 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
    image_large: 'bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1295 kr',
            savings: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '3495 kr',
            savings: '1165 kr per behandling',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '4995 kr',
            savings: '999 kr per behandling',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        )
    ),
);

$description_title = 'Vad är behandlingar för hudproblem?';
$description_text = '<p class="p200">Dessa behandlingar skräddarsydds för en mängd olika hudproblem. Behandlingen rengör huden på djupet, särskilt nyttigt för de som lider av akne, finnar eller pormaskar. Med hjälp av en vapozone öppnas porerna upp genom ånga, vilket möjliggör en noggrann exfoliering. Perfekt för dig som upplever att du har dålig hy i ansiktet som vuxen.</p>
<p class="p200 mt-m">Oavsett om du har blandhy, oljig, kombinerad, torr eller känslig hud, eller lider av specifika tillstånd som rosacea, seborré, perioral dermatit eller stora porer, anpassar denna behandling sig efter dina unika behov. Vi behandlar även <a class="b200 underline color-deep-sea-400" href="/blodprickar.php" title="Mer information om blodprickar">blodprickar</a> och andra typer av hudförändringar. Målet är att återställa en balanserad och problemfri hy.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/problemhy-forberedelser.webp',
        image_large: '/bilder/process/872x456/problemhy-forberedelser.webp',
        image_alt: 'Förberedelser inför ansiktsbehandlingar för problemhy',
        image_title: 'Förberedelser inför ansiktsbehandlingar för problemhy',
        content: '<p class="p200">Inför din ansiktsbehandling för problemhy hos oss behöver du inte tänka på något särskilt. Kom som du är, och vi tar hand om resten. Om du vill förbereda dig lite extra kan du tänka på följande: undvik att exfoliera huden dagen innan och undvik att sola några dagar innan behandlingen. Det kan också vara bra att komma med ett rent ansikte, utan smink, men det är inte nödvändigt. Informera gärna din hudterapeut i förväg om du tar några mediciner eller har några aktiva hudåkommor, så att behandlingen kan anpassas efter dina behov. Men det viktigaste är att du känner dig bekväm, så välj den ansiktsbehandling som känns bäst för dig.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/problemhy-process.webp',
        image_large: '/bilder/process/872x456/problemhy-process.webp',
        image_alt: 'Processen för ansiktsbehandling mot problemhy',
        image_title: 'Processen för ansiktsbehandling mot problemhy',
        content: '<p class="p200">Hos oss hittar du ansiktsbehandlingar utformade för alla typer av problemhy. Vi förstår att varje persons hud är unik, och därför skräddarsyr vi varje behandling baserat på dina personliga och individuella behov. Vår expertis och omfattande kunskap i att identifiera din hudtyp säkerställer att du får den bästa möjliga vården för din hud.</p>
        <p class="p200 mt-m">Varje behandling inleds med en noggrann rengöring för att avlägsna smuts och eventuellt smink. Därefter används en Vapozon för att varsamt öppna upp porerna och göra huden mer mottaglig. Efter detta steg genomför vi en grundlig extraktion (klämning) där vi noggrant tömmer porerna på oönskade finnar, pormaskar och andra orenheter. För att lugna huden och minska eventuell rodnad eller irritation appliceras sedan en lugnande mask. Slutligen avslutas behandlingen med en intensiv återfuktning, vilket hjälper din hud att återhämta sig och känna sig förnyad.</p>',
        tags: array(new ArticleTag(
            icon: 'rengoring',
            label: 'Rengöring'
        ), new ArticleTag(
            icon: 'anga',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'extraktion',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'mask',
            label: 'Mask'
        ))
    ),
);

$types_title = 'Ansiktsbehandlingar mot problemhy';
$types_description = '';
$types = array(
    new Service(
        title: 'Ansiktsbehandling mot akne',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling mot acne hy anpassad för olika typer av akne med fokus på att klämma ut papler, pustler och komedoner. Perfekt för dig som lider av blemmor i ansiktet och vi behandlar allt från mild till grov akne.',
        image_small: 'bilder/hudproblem/102x102/akne.webp',
        image_large: 'bilder/hudproblem/200x200/akne.webp',
        image_alt: 'Ansiktsbehandling mot Akne',
        image_title: 'Ansiktsbehandling mot Akne',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Akne',

        url_label: 'Läs mer om ansiktsbehandling mot akne',
        url: '/hudbehandlingar/ansiktsbehandling/akne/',
        url_title: 'Läs mer om ansiktsbehandling mot akne',
    ),
    new Service(
        title: 'Ansiktsbehandling mot pormaskar',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling anpassad för pormaskar som upplevs som svarta prickar i ansiktet eller prickig hy med fokus på att rengöra porer och klämma ut pormaskar. Vi behandlar alla områden såsom pormaskar runt munnen, näsa eller på kinderna.',
        image_small: 'bilder/hudproblem/102x102/pormaskar.webp',
        image_large: 'bilder/hudproblem/200x200/pormaskar.webp',
        image_alt: 'Ansiktsbehandling mot Pormaskar',
        image_title: 'Ansiktsbehandling mot Pormaskar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Pormaskar',

        url_label: 'Läs mer om portömning',
        url: '/portomning.php',
        url_title: 'Läs mer om portömning',
    ),
    new Service(
        title: 'Ansiktsbehandling mot rosacea',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling för rosacea som lugnar huden, minskar rodnaden och rensar inflammerade porer samt blåsor.',
        image_small: 'bilder/hudproblem/102x102/rosacea.webp',
        image_large: 'bilder/hudproblem/200x200/rosacea.webp',
        image_alt: 'Ansiktsbehandling för Rosacea',
        image_title: 'Ansiktsbehandling för Rosacea',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Rosacea',

        url_label: 'Läs mer om ansiktsbehandling mot rosacea',
        url: '/hudbehandlingar/ansiktsbehandling/rosacea/',
        url_title: 'Läs mer om ansiktsbehandling mot rosacea',
    ),

    new Service(
        title: 'Ansiktsbehandling mot finnar',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling mot olika typer av finnar i ansiktet som djuprengör, behandlar och klämmer ut finnar, samtidigt som den balanserar hudens talgproduktion och minskar inflammation för att bli av med stora som små finnar. Utmärkt för dig som lider av röda eller vita finnar av torr hy eller fet hy.',
        image_small: 'bilder/hudproblem/102x102/finnar.webp',
        image_large: 'bilder/hudproblem/200x200/finnar.webp',
        image_alt: 'Ansiktsbehandling mot Finnar',
        image_title: 'Ansiktsbehandling mot Finnar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Pimples',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Finnar',

        url_label: 'Läs mer om portömning',
        url: '/portomning.php',
        url_title: 'Läs mer om portömning',
    ),
    new Service(
        title: 'Ansiktsbehandling för blandhy',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling för blandhy som kan vara oljig eller torr med finnar och pormaskar. Balanserar och återfuktar huden, samtidigt som den djuprengör och tar bort pormaskar för en jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/blandhy.webp',
        image_large: 'bilder/hudproblem/200x200/blandhy.webp',
        image_alt: 'Ansiktsbehandling för Blandhy',
        image_title: 'Ansiktsbehandling för Blandhy',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_CombinationSkin&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Blandhy',

        url_label: 'Läs mer om portömning',
        url: '/portomning.php',
        url_title: 'Läs mer om portömning',
    ),
    new Service(
        title: 'Ansiktsbehandling mot milier',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling för milier som uppstår som vita prickar i ansiktet eller på näsan, inriktad på att varsamt öppna upp de små, vita cystorna som saknar poröppning, för att noggrant extrahera dem och ge en klarare hud.',
        image_small: 'bilder/hudproblem/102x102/milier.webp',
        image_large: 'bilder/hudproblem/200x200/milier.webp',
        image_alt: 'Ansiktsbehandling mot Milier',
        image_title: 'Ansiktsbehandling mot Milier',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Milia&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Milier',

        url: '/milierbehandling.php',
        url_label: 'Läs mer om milierbehandling',
        url_title: 'Klicka här för att läsa mer om behandling mot milier',
    ),
    new Service(
        title: 'Ansiktsbehandling för perioral dermatit',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling för perioral dermatit som lugnar huden, reducera irritation och rodnad runt munområdet, med fokus på att återställa hudens naturliga balans och lindra symtomen. Finnar runt munnen betyder ofta att man har perioral dermatit.',
        image_small: 'bilder/hudproblem/102x102/perioral-dermatit.webp',
        image_large: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
        image_alt: 'Ansiktsbehandling för Perioral Dermatit',
        image_title: 'Ansiktsbehandling för Perioral Dermatit',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_PerioralDermatitis&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Perioral Dermatit',

        url_label: 'Läs mer om ansiktsbehandling mot perioral dermatit',
        url: '/portomning.php',
        url_title: 'Läs mer om ansiktsbehandling mot perioral dermatit',
    ),
    new Service(
        title: 'Ansiktsbehandling för seborré',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling som behandlar och balansera huden som drabbats av seborré. Genom att exfoliera bort flagnande hy, kontrollera överdriven talgproduktion och minska inflammation, vilket ger huden en friskare och jämnare ton.',
        image_small: 'bilder/hudproblem/102x102/seborre.webp',
        image_large: 'bilder/hudproblem/200x200/seborre.webp',
        image_alt: 'Ansiktsbehandling för Seborré',
        image_title: 'Ansiktsbehandling för Seborré',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Seborrea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Seborré',

        url_label: 'Läs mer om ansiktsbehandling mot seborré',
        url: '/portomning.php',
        url_title: 'Läs mer om ansiktsbehandling mot seborré',
    ),
    new Service(
        title: 'Ansiktsbehandling för stora porer',
        duration: null,
        price: null,
        content: 'Denna behandling är specifikt framtagen för att behandla och minska framträdande stora porer i ansiktet och på kroppen. Vi rengör och tömmer porerna på djupet så att de blir mindre framträdande vilket resulterar i en jämnare och slätare hy.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Ansiktsbehandling för Stora Porer',
        image_title: 'Ansiktsbehandling för Stora Porer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Stora Porer',

        url_label: 'Läs mer om portömning',
        url: '/portomning.php',
        url_title: 'Läs mer om portömning',
    ),
    new Service(
        title: 'Ansiktsbehandling för torr & känslig Hy',
        duration: null,
        price: null,
        content: 'Denna behandling är specifikt framtagen för att nära och lugna torr samt känslig hy. Genom att använda specialanpassade produkter återställer vi hudens fuktbalans, minska rodnad och irritation, och ge huden en mjuk och behaglig känsla för att bekämpa flagnande hud. Kan även hjälpa för dig som har torr hy och finnar.',
        image_small: 'bilder/hudproblem/102x102/torr-kanslig-hy.webp',
        image_large: 'bilder/hudproblem/200x200/torr-kanslig-hy.webp',
        image_alt: 'Ansiktsbehandling för Torr & Känslig Hy',
        image_title: 'Ansiktsbehandling för Torr & Känslig Hy',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_DrySensitiveSkin',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Torr & Känslig Hy',

        url_label: 'Läs mer om torr & känslig hy',
        url: '/torr-hy.php',
        url_title: 'Läs mer om torr & känslig hy',
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/problemhy-eftervard.webp',
    image_large: '/bilder/process/872x456/problemhy-eftervard.webp',
    image_alt: 'Eftervård och omhändertagande',
    image_title: 'Eftervård och omhändertagande',
    content: '<p class="p200">Efter en ansiktsbehandling är det viktigt med rätt eftervård för att behandla och bibehålla hudens skick. Genom att fortsätta ta hand om huden med rätt hemmavård kan du förlänga och förstärka effekterna av behandlingen. Det handlar inte bara om att använda rätt hudvårdsprodukter utan också om att följa rätt behandlingsrutiner för just ditt behov.</p>
    <p class="p200 mt-m">Vi på AcneSpecialisten finns här för att hjälpa dig att ta fram den bästa hudvårdsplanen för din hudtyp. Oavsett om det handlar om daglig rengöring, återfuktning eller specialbehandlingar, så kommer vi att vägleda dig genom varje steg för att säkerställa att din hud får den vård den förtjänar. Vi kan även hjälpa dig att behandla gropig hy och annan ärrbildning som uppstår efter problemhy. Kom ihåg, rätt eftervård är nyckeln till en frisk och strålande hud!</p>',
));

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

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Passar era ansiktsbehandlingar alla hudtyper?',
            text: '<p class="p200">Ja, vi har ansiktsbehandlingar som passar alla hudtyper. Vi anpassar dessutom alltid våra behandlingar efter dina individuella behov så att du ska få ett så bra resultat som möjligt.</p>'
        ),
        new Question(
            title: 'Är ansiktsbehandlingar effektiva mot pormaskar?',
            text: '<p class="p200">Ja, många av våra ansiktsbehandlingar syftar till att djuprengöra porerna och kan vara särskilt effektiva mot pormaskar. Genom regelbundna behandlingar kan vi hjälpa till att minska och förebygga uppkomsten av nya pormaskar.</p>'
        ),
        new Question(
            title: 'Hur ofta bör jag boka en ansiktsbehandling för bästa resultat?',
            text: '<p class="p200">Det beror på din specifika hudtyp och de problem du vill behandla. För vissa kan månadsvis behandling vara optimal, medan för andra kan var tredje månad passa bättre, allt beror på din hy och dina behov. Regelbundna besök hjälper dig att underhålla din hy och din hudterapeut kan följa hudens utveckling under hela behandlingsprocessen.</p>'
        ),
        new Question(
            title: 'Hur vet jag vilken behandling som passar bäst för min problemhy?',
            text: '<p class="p200">Det är bäst att boka en konsultation med en av våra hudterapeuter. Under konsultationen kommer vi att analysera din hud, diskutera dina bekymmer och rekommendera den bästa behandlingsplanen anpassad för dina specifika behov.</p>'
        ),
        new Question(
            title: 'Vilken hudtyp har jag?',
            text: '<p class="p200">För dig som är osäker på vilken hudtyp du har erbjuder vi alltid en kostnadsfri hudkonsultation. Vi kan också svara på frågor om din hudtyp under ansiktsbehandlingen för problemhy, och vi skräddarsyr alltid behandlingen efter din huds behov.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i problemhud',
        image_title: 'Cazzandra Lindberg - Expert på behandling av problemhy'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på problemhy',
        image_title: 'Veronika Benedik - Specialist inom problemhudvård'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund, hudterapeut med kunskap inom hantering av problemhud',
        image_title: 'Julia Eklund - Hudterapeut specialiserad på problemhy'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av problemhud',
        image_title: 'Vilma Libom - Expert inom problemhudbehandling'
    )
);

$specialists_view_more = 'Se alla hudterapeuter';

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
    new Brand(
        label: 'DAHL Skincare',
        image: 'bilder/logotyper/dahl-skincare.webp',
        image_alt: 'DAHL Skincare logotyp',
        image_title: 'DAHL Skincare - hudvårdsprodukter',
        url: 'https://www.dahlskincare.com/sv/',
        url_title: 'DAHL Skincare',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/problemhy.php" />

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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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