<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Hydrafacial - Djupgående Hudvård och Förnyelse | AcneSpecialisten';
$seo_description = 'Upptäck Hydrafacial hos AcneSpecialisten, en mångsidig behandling som kombinerar djup rengöring, exfoliering, och hydrering för att revitalisera din hud. Perfekt för alla hudtyper, denna behandling erbjuder omedelbar lyster och förbättrar hudens kvalitet på lång sikt.';
$seo_keywords = 'Hydrafacial, hudvård, djupgående rengöring, exfoliering, hydrering, lyster, hudförbättring, AcneSpecialisten, hudens kvalitet, alla hudtyper';

$seo_image = 'images/treatments/large/hydrafacial.jpg';

$model = new Service(
    title: 'HydraFacial',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Hydrafacial hos AcneSpecialisten är en djupgående hudvårdsbehandling som kombinerar rengöring, exfoliering och hydrering för att vitalisera huden. Denna skonsamma men effektiva metod är idealisk för alla hudtyper och ger omedelbar förbättring av hudens lyster och textur. Med Hydrafacial upplever du en fräschare, klarare och mer strålande hud, tack vare behandlingens förmåga att djuprengöra och återfukta på en och samma gång.</p>',
    image_small: 'bilder/varumarken/358x274/hydrafacial.webp',
    image_large: 'bilder/varumarken/424x456/hydrafacial.webp',
    image_alt: 'HydraFacial',
    image_title: 'HydraFacial',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Med HydraFacial slipas och vårdas huden för att effektivt exfoliera huden.';

$nav_buttons = array(
    'about' => 'Om HydraFacial',
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

$description_title = 'Vad är HydraFacial?';
$description_text = '<p class="p200">HydraFacial är en innovativ och skonsam hudvårdsbehandling som kombinerar rengöring, exfoliering och intensiv återfuktning för att förnya och vitalisera huden. Denna behandling använder en unik teknik som kallas "vortex-fusion", där en spiralformad tipps design möjliggör djuprengöring samtidigt som den tillför antioxidanter, peptider och hyaluronsyra.</p>
<p class="p200 mt-m">På AcneSpecialisten anpassar vi varje HydraFacial-behandling efter individuella hudbehov. Behandlingen är effektiv för att minska synliga tecken på åldrande, som fina linjer och rynkor, samt att hantera problem som acne, förstorade porer och hyperpigmentering. Dessutom förbättrar HydraFacial hudens övergripande hälsa och lyster genom att öka fuktnivåerna och skydda mot miljömässiga skador. HydraFacial är en perfekt lösning för alla som vill ha en direkt synlig förbättring av sin hudkvalitet utan någon återhämtningstid.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför HydraFacial',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelse inför HydraFaciala ansiktsbehandlingar',
        image_title: 'Förberedelse inför HydraFaciala ansiktsbehandlingar',
        content: '<p class="p200">Inför din HydraFacial-behandling hos AcneSpecialisten är det viktigt att förbereda huden för att optimera behandlingens effekt. Vi rekommenderar att du undviker starka hudvårdsprodukter, såsom exfolierande syror eller retinol, några dagar före din session. Detta hjälper till att minska risken för hudirritation och gör huden mer mottaglig för behandlingen.</p>
        <p class="p200 mt-m">Skydda din hud mot stark sol och undvik solbränna innan din HydraFacial-behandling, då solbränd hud kan vara mer känslig och detta kan påverka behandlingens resultat. Om du använder mediciner som påverkar huden, eller har hudtillstånd som akne eller rosacea, är det viktigt att informera oss i förväg så att vi kan anpassa behandlingen efter dina unika behov. Kom ihåg att det är viktigt att du känner dig trygg och bekväm, så tveka inte att kontakta oss med eventuella frågor eller funderingar inför din behandling hos AcneSpecialisten.</p>',
    ),
    'process' => new Article(
        title: 'Processen för HydraFacial',
        image_small: null,
        image_large: null,
        image_alt: 'Processen för HydraFacial',
        image_title: 'Processen för HydraFacial',
        content: '<p class="p200">En HydraFacial-behandling hos AcneSpecialisten börjar med en grundlig rengöring av huden för att avlägsna smuts och orenheter. Detta första steg är viktigt för att förbereda huden för behandlingens nästa faser.</p>
    <p class="p200 mt-m">Efter rengöringen följer HydraFacialens huvudsteg, där vi använder en specialiserad apparatur för att utföra en skonsam men djupgående exfoliering. Apparaten kombinerar rengöring, exfoliering och extraktion för att ta bort döda hudceller och rengöra porerna, samtidigt som den tillför intensiva fuktgivande serum anpassade efter din hudtyp.</p>
    <p class="p200 mt-m">Behandlingen fortsätter med införande av näring och antioxidanter som vitaliserar och ger huden en fräsch, strålande lyster. HydraFacialen avslutas med att lugnande och skyddande ämnen appliceras på huden för att maximera återhämtningen och skydda mot miljöpåverkan.</p>
    <p class="p200 mt-m">Våra experter vid AcneSpecialisten anpassar varje HydraFacial-behandling individuellt för att uppnå bästa möjliga resultat. Denna behandling är perfekt för alla som söker en djup men skonsam rengöring och önskar en synbart förbättrad hudkvalitet.</p>',
    ),
);

$types_title = 'HydraFacial och tillval';
$types_description = 'Med hjälp av våra tillval anpassar vi behandingen för just dina behov..';
$big_types = array(
    new Service(
        title: 'HydraFacial',
        duration: '40 min',
        price: null,
        content: '<p class="p200">HydraFacial hos AcneSpecialisten är en mångsidig och effektiv hudvårdsbehandling som passar en mängd olika hudtyper. Behandlingen fokuserar på djupgående rengöring, hydrering och förnyelse av hudens yta, vilket ger en fräsch och strålande lyster.</p>
        <p class="p200 mt-m">Behandlingen inleds med en varsam men grundlig rengöring som förbereder huden för HydraFacialens nästa steg. Därefter används en specialapparat för att utföra en mild exfoliering, som tar bort döda hudceller och rengör porerna på djupet. Samtidigt tillförs närande och fuktgivande serum som är skräddarsydda efter din hudtyp och dina behov.</p>
        <p class="p200 mt-m">Efter den exfolierande fasen följer en infusion av antioxidanter och hyaluronsyra som djupt återfuktar huden och bidrar till dess vitalitet och utstrålning. Behandlingen avslutas med en lugnande fas där huden får extra vård och skydd för att bevara de långvariga effekterna av HydraFacial.</p>
        <p class="p200 mt-m">På AcneSpecialisten ger vi dig en skräddarsydd behandling och eftervård som maximerar fördelarna av HydraFacial. Denna behandling är idealisk för dig som söker en omfattande lösning för att förbättra din hudhälsa och utstrålning.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard',
        booking_url_label: 'Boka HydraFacial behandling',
        booking_url_title: 'Boka HydraFacial behandling',
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '5995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraFacial - Dermabuilder Serum - Boost & Glow',
        duration: '40 min',
        price: null,
        content: '<p class="p200">HydraFacial-behandlingen med Dermabuilder Serum hos AcneSpecialisten är en exceptionell upplevelse för den mogna huden. Detta avancerade serum är särskilt framtaget för att djupt vitalisera och stärka huden. Med en kraftfull blandning av två aktiva peptider, arbetar serumet för att stimulera produktionen av hudens egna proteiner, vilket är avgörande för hudens elasticitet och fasthet.</p>
        <p class="p200 mt-m">I denna behandling tränger Dermabuilder Serum in i hudens djupare lager för att effektivt bygga upp och stärka hudstrukturen inifrån. Detta bidrar till att synbart minska rynkor och fina linjer, och ger ansiktet en fastare och mer ungdomlig profil. Behandlingen är perfekt för dig som vill återställa och bevara hudens ungdomliga utstrålning och vitalitet.</p>
        <p class="p200 mt-m">Med HydraFacial och Dermabuilder Serum får du inte bara en slätare och jämnare hud, utan också en mer motståndskraftig och välvårdad hudkvalitet. Detta serum är en idealisk lösning för att ge din mogen hud en omedelbar boost.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Boost_Glow',
        booking_url_label: 'Boka HydraFacial behandling',
        booking_url_title: 'Boka HydraFacial behandling',
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraFacial - Glycal Acid Peel - Mot Pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200">HydraFacial-behandlingen hos AcneSpecialisten, förstärkt med Glycal Acid Peel, är skräddarsydd för att effektivt hantera hud med pormaskar och finnar. Denna specialanpassade behandling fokuserar på att djuprengöra huden och adressera överproduktionen av talg, en vanlig orsak till dessa hudtillstånd.</p>
        <p class="p200 mt-m">Glycal Acid Peel är en kraftfull kombination av aktiva syror som tränger djupt in i hudlagren för att lösgöra och avlägsna inbyggda orenheter. Denna intensiva exfolieringsprocess renar effektivt porerna, vilket minskar synligheten av pormaskar och finnar och bidrar till en klarare och jämnare hudton.</p>
        <p class="p200 mt-m">Denna behandling är idealisk för dig som söker en djupgående lösning på problemhy. Med vår Glycal Acid Peel får du inte bara en yttre rengöring, utan en behandling som aktivt arbetar för att rena huden på djupet. Resultatet är en ren, förnyad hud som är fri från de vanligaste orsakerna till problemhy.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer',
        booking_url_label: 'Boka HydraFacial behandling',
        booking_url_title: 'Boka HydraFacial behandling',
        
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för HydraFacial',
    image_small: null,
    image_large: null,
    image_alt: 'Eftervård för HydraFacial',
    image_title: 'Eftervård för HydraFacial',
    content: '<p class="p200">Efter din HydraFacial-behandling hos AcneSpecialisten är det viktigt att noggrant följa eftervårdsinstruktioner för att bibehålla och förlänga behandlingens positiva effekter. Direkt efter behandlingen ska huden behandlas varsamt. Undvik stark sol och använd ett högkvalitativt solskydd med hög SPF för att skydda huden från UV-strålar.</p>
    <p class="p200 mt-m">För att stödja huden i dess återhämtningsprocess, är det viktigt att regelbundet återfukta med lämpliga hudvårdsprodukter, som rekommenderats av din hudterapeut. Om din behandling inkluderade en kemisk peeling eller en djup exfoliering, bör du undvika att skrubba eller irritera huden och låta eventuella mindre orenheter läka på egen hand. Det är även viktigt att hålla en god hydrering genom att dricka tillräckligt med vatten och upprätthålla en näringsrik kost för att stödja huden inifrån. Tveka inte att kontakta oss på AcneSpecialisten för ytterligare råd eller frågor om din eftervård.</p>',
));

$service_brands_title = 'Andra märken för Dermabrasion';
$service_brands_text = '<p class="p200">Utöver HydraFacial jobbar vi även med Microdermabrasion.</p>';
$service_brands = array(

    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders behandling av <a href="/problem/akne/aknebehandling" title="akne">akne</a>',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 2 månaders behandling av <a href="/problem/akne/aknebehandling" title="akne">akne</a>',
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
        image_alt: 'Rosacea resultat',
        image_title: 'Rosacea resultat',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 4 månaders behandling av <a href="/problem/rosacea/rosaceabehandling" title="akne">akne</a>',
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
            title: 'Hur lång tid tar det att se resultat efter en HydraFacial?',
            text: 'Resultaten från en HydraFacial kan ofta ses omedelbart efter behandlingen, där många upplever en mer strålande och jämn hudton. För att uppnå och upprätthålla optimala resultat rekommenderas regelbundna behandlingar anpassade efter individens hudbehov.'
        ),
        new Question(
            title: 'Är det säkert att göra HydraFacial regelbundet?',
            text: 'Ja, HydraFacial är en säker och skonsam behandling som kan utföras regelbundet. Den är utformad för att vara skonsam mot huden samtidigt som den erbjuder effektiva resultat, vilket gör den till en idealisk lösning för kontinuerlig hudvård och underhåll.'
        ),
        new Question(
            title: 'Kan HydraFacial hjälpa mot specifika hudproblem?',
            text: 'Ja, HydraFacial är effektiv för en mängd olika hudproblem, inklusive torrhet, fina linjer, acne och hyperpigmentering. Behandlingen är anpassningsbar, vilket gör det möjligt att rikta in sig på specifika problemområden och hudtillstånd.'
        ),
        new Question(
            title: 'Vilka är de främsta fördelarna med HydraFacial jämfört med andra hudvårdsbehandlingar?',
            text: 'HydraFacial utmärker sig genom sin förmåga att djuprengöra, exfoliera och återfukta huden på ett skonsamt sätt. Dess unika teknik och anpassningsförmåga gör den effektiv för en rad olika hudtyper och problem, med mindre risk för irritation jämfört med mer aggressiva behandlingar.'
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
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
                </section>
                <!--Hudguide-->
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
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