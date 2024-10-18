<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
include_once('models.php');

$green_banner_content = new GreenBannerContent(
      title: 'Varumärken',
      description: 'På AcneSpecialisten är vi dedikerade till att behandla och förbättra hudproblem som akne, rosacea, pormaskar och finnar, och detta åstadkommer vi genom att använda ledande varumärken och tekniker inom hudvård. Våra samarbetspartners inkluderar Alma, Dermapen, CryoPen, HydraFacial, Infuzion, Splendor X och Soprano Ice, som alla erbjuder banbrytande lösningar för en rad hudtillstånd.',
      description_extended: 'Genom dessa innovativa behandlingsmetoder och vår expertis, skapar vi skräddarsydda behandlingsplaner för att möta dina individuella hudvårdsbehov. Om du är osäker på ditt hudtillstånd eller vilken behandling som passar dig bäst, rekommenderar vi en kostnadsfri hudkonsultation hos oss.',
);

$header_brands = array(
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid logotyp',
            image_title: 'Alma Hybrid CO2',
            url: 'alma-hybrid-co2-laser.php',
            url_title: 'Alma Hybrid',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen logotyp',
            image_title: 'Dermapen - Microneedling',
            url: 'dermapen.php',
            url_title: 'Dermapen',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_alt: 'Harmony XL Pro logotyp',
            image_title: 'Alma Harmony XL Pro',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Harmony XL Pro',
      ),
      new Brand(
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial logotyp',
            image_title: 'HydraFacial - Dermabrasion',
            url: 'hydrafacial.php',
            url_title: 'HydraFacial',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech logotyp',
            image_title: 'Skin Tech - kemisk peeling',
            url: 'varumarken/skin-tech/',
            url_title: 'Skin Tech',
      ),
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: 'varumarken/rejuve-dye-vl/',
            url_title: 'Alma Rejuve Dye-VL',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen logotyp',
            image_title: 'CryoPen - frysbehandling',
            url: 'cryopen.php',
            url_title: 'CryoPen',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - Permanent hårborttagning med laser',
            url: 'varumarken/splendor-x/',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: 'varumarken/soprano-ice/',
            url_title: 'Soprano Ice',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: 'varumarken/powerlite-photonova/',
            url_title: 'Powerlite Photonova',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion logotyp',
            image_title: 'Infuzion - nålfri skinbooster',
            url: 'infuzion.php',
            url_title: 'Infuzion',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'bilder/logotyper/lumenis.svg',
            image_alt: 'Lumenis logotyp',
            image_title: 'Lumenis - Permanent hårborttagning med laser',
            url: 'varumarken/splendor-x/',
            url_title: 'Lumenis',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 logotyp',
            image_title: 'PRX-T33 - kemisk peeling',
            url: 'prx-t33.php',
            url_title: 'PRX-T33',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed logotyp',
            image_title: 'Exceed - microneedling',
            url: 'varumarken/exceed/',
            url_title: 'Exceedn',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion logotyp',
            image_title: 'Microdermabrasion - hudslipning',
            url: 'microdermabrasion.php',
            url_title: 'Microdermabrasion',
      ),
);

$link_brands = array(
      new BrandCategory(
            label: 'Laser',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_title: 'Läs mer',
            services: array(
                  "/alma-hybrid-co2-laser.php" => "Alma Hybrid CO2",
                  "/alma-harmony-xl-pro.php" => "Harmony XL Pro",
            )
      ),
      new BrandCategory(
            label: 'Permanent Hårborttagning',
            url: '/permanent-harborttagning.php',
            url_title: 'Läs mer',
            services: array(
                  "/varumarken/splendor-x/" => "Splendor X",
                  "/varumarken/soprano-ice/" => "Soprano Ice",
            )
      ),
      new BrandCategory(
            label: 'IPL',
            url: '/hudbehandlingar/ipl/',
            url_title: 'Läs mer',
            services: array(
                  "/varumarken/rejuve-dye-vl/" => "Alma Beauty Rejuve Dye-VL",
                  "/alma-harmony-xl-pro.php" => "Harmony XL Pro",
                  "/varumarken/powerlite-photonova/" => "Powerlight - PhotoNova PLS3",
            )
      ),
      new BrandCategory(
            label: 'Frysbehandling',
            url: '/cryopen.php',
            url_title: 'Läs mer',
            services: array(
                  "/cryopen.php" => "CryoPen",
            )
      ),
      new BrandCategory(
            label: 'Kemisk Peeling',
            url: '/kemisk-peeling.php',
            url_title: 'Läs mer',
            services: array(
                  "/varumarken/skin-tech/" => "Skin Tech",
                  "/prx-t33.php" => "PRX-T33",
            )
      ),
      new BrandCategory(
            label: 'Dermabration',
            url: '/hudbehandlingar/dermabrasion/',
            url_title: 'Läs mer',
            services: array(
                  "/hydrafacial.php" => "HydraFacial",
                  "/microdermabrasion.php" => "Mimass",
            )
      ),
      new BrandCategory(
            label: 'Skinbooster',
            url: '/hudbehandlingar/skinbooster/',
            url_title: 'Läs mer',
            services: array(
                  "/infuzion.php" => "Infuzion",
                  "/varumarken/dual-injector/" => "Dual Injector",
            )
      ),
      new BrandCategory(
            label: 'Microneedling',
            url: '/microneedling.php',
            url_title: 'Läs mer',
            services: array(
                  "/dermapen.php" => "Dermapen",
                  "/varumarken/exceed/" => "Exceed",
            )
      ),
);

$brand_cards = array(
      new Brand(
            label: 'Alma Hybrid CO2',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid CO2 logotyp',
            image_title: 'Alma Hybrid CO2',
            photo: 'bilder/varumarken/424x324/alma-hybrid-co2.webp',
            photo_alt: 'Person som får behanding med alma hybrid co2',
            photo_title: 'Alma Hybrid CO2',
            title: 'Alma Hybrid CO2',
            subtitle: 'Koldioxidlaser för hudproblem',
            description: 'Specialiserad på hudföryngring och behandling av en rad hudtillstånd, erbjuder denna avancerade teknik precisionsbaserade laserbehandlingar för att effektivt förbättra hudens kvalitet och utseende. Upplev en ny nivå av estetiska resultat med Alma Hybrids innovation och expertis.',
            url: 'alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2',
            booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve',
            booking_url_title: 'Boka tid för Alma-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Hybrid',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen logotyp',
            image_title: 'Dermapen - Microneedling',
            photo: 'bilder/varumarken/424x324/dermapen.webp',
            photo_alt: 'Kvinna som får dermapenbehandling i ansiktet',
            photo_title: 'Dermapen - Microneedling',
            title: 'Dermapen',
            subtitle: 'Microneedling mot hudproblem',
            description: 'Dermapen är världsledande inom microneedling, som effektivt behandlar akneärr, fina linjer och rynkor. Genom att skapa mikroskopiska kanaler i huden stimuleras kroppens naturliga kollagenproduktion, vilket leder till en fastare, jämnare och yngre hud.',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen',
            booking_url: 'https://boka.acnespecialisten.se?flow=dermapen',
            booking_url_title: 'Boka tid för Dermapen-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Dermapen',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_alt: 'Harmony XL Pro logotyp',
            image_title: 'Harmony XL Pro',
            photo: 'bilder/varumarken/424x324/harmony-xl-pro.webp',
            photo_alt: 'Person som får behanding med harmony xl pro',
            photo_title: 'Harmony XL Pro',
            title: 'Harmony XL Pro',
            subtitle: 'Laser och IPL hybrid',
            description: 'Harmony XL Pro är en estetisk plattform som erbjuder en bred uppsättning av behandlingar för hudföryngring och hudproblem. Denna mångsidiga och innovativa lösning är idealisk för att effektivt ta itu med en rad hudrelaterade utmaningar.',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro',
            booking_url: 'https://boka.acnespecialisten.se?flow=almaharmony&skipable_problem=SKIP',
            booking_url_title: 'Boka tid för Alma-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Harmony',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial logotyp',
            image_title: 'HydraFacial - hydrodermabrasion',
            photo: 'bilder/varumarken/424x324/hydrafacial.webp',
            photo_alt: 'Kvinna som får HydraFacial behandling i ansiktet',
            photo_title: 'HydraFacial - hydrodermabrasion',
            title: 'HydraFacial',
            subtitle: 'Hydrodermabrasion',
            description: 'HydraFacial är en icke-invasiv behandling som rengör, exfolierar och återfuktar huden. Med en patenterad teknik erbjuder denna behandling omedelbara och märkbara resultat utan nedtid. HydraFacial passar alla hudtyper och ger en klarare, mjukare och mer strålande hud.',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om HydraFacial',
            booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial',
            booking_url_title: 'Boka tid för HydraFacial-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Hydrafacial',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech logotyp',
            image_title: 'Skin Tech - kemisk peeling',
            photo: 'bilder/varumarken/424x324/skin-tech.webp',
            photo_alt: 'Man som får skin tech behandling i ansiktet',
            photo_title: 'Skin Tech - kemisk peeling',
            title: 'Skin Tech',
            subtitle: 'Kemisk peeling mot hudproblem',
            description: 'En familj av kemiska peelingar anpassade för olika hudtillstånd. Dessa peelingar använder innovativa formuleringar som effektivt förbättrar hudens textur och utseende, med ett konstant fokus på resultat.',
            url: 'varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Tech',
            booking_url: 'https://boka.acnespecialisten.se?flow=skintech',
            booking_url_title: 'Boka Skin Tech-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_SkinTech',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Rejuve Dye-VL logotyp',
            image_title: 'Rejuve Dye-VL - IPL',
            photo: 'bilder/varumarken/424x324/alma-rejuve-dye-vl.webp',
            photo_alt: 'Kvinna som får Rejuve Dye-VL behandling i ansiktet',
            photo_title: 'Rejuve Dye-VL - IPL',
            title: 'Rejuve Dye-VL',
            subtitle: 'IPL för hudproblem',
            description: 'Rejuve Dye-VL är en framstående behandling som använder avancerad IPL-teknologi för att effektivt rikta in sig på och behandla hudproblem såsom pigmentfläckar och ytliga blodkärl. Denna metod är perfekt för dem som söker en skonsam, men ändå kraftfull lösning för att förbättra hudens utseende och textur.',
            url: 'varumarken/rejuve-dye-vl/',
            url_title: 'Läs mer om Rejuve Dye-VL',
            booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve',
            booking_url_title: 'Boka Rejuve Dye-VL-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen logotyp',
            image_title: 'CryoPen',
            photo: 'bilder/varumarken/424x324/cryopen.webp',
            photo_alt: 'Kvinna som tar bort hudförändring med CryoPen på halsen',
            photo_title: 'CryoPen',
            title: 'CryoPen',
            subtitle: 'Frysbehandling för hudförändringar',
            description: 'Avancerad frysbehandling för att säker och precisionsinriktad behandling av födelsemärken, leverfläckar och hudförändringar. Med dess precisa applicering minimeras påverkan på omgivande hud, vilket resulterar en snabb, effektiv och bekväm behandling.',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
            booking_url_title: 'Boka tid för CryoPen-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - permanent hårborttagning med laser',
            photo: 'bilder/varumarken/424x324/splendor-x.webp',
            photo_alt: 'Splendor X',
            photo_title: 'Splendor X - permanent hårborttagning med laser',
            title: 'Splendor X',
            subtitle: 'Senaste inom permanent hårborttagning',
            description: 'Splendor X kombinerar laser- och BLEND X-teknologi för en kraftfull och mångsidig behandlingsupplevelse. Perfekt för hårborttagning, hudföryngring och pigmentkorrigering, erbjuder Splendor X snabba och effektiva resultat för hårborttagning.',
            url: 'varumarken/splendor-x/',
            url_title: 'Läs mer om Splendor X',
            booking_url: 'https://boka.acnespecialisten.se?flow=splendorx',
            booking_url_title: 'Boka Splendor X-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_SplendorX',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice Logo',
            image_title: 'Soprano Ice - permanent hårborttagning med laser',
            photo: 'bilder/varumarken/424x324/soprano-ice.webp',
            photo_alt: 'Soprano Ice',
            photo_title: 'Soprano Ice - permanent hårborttagning med laser',
            title: 'Soprano Ice',
            subtitle: 'Laser för hårborttagning',
            description: 'Soprano Ice använder Alma Lasers unika SHR-teknik för en nästan smärtfri och effektiv laserhårborttagning. Den är säker för alla hudtyper och erbjuder en behaglig behandlingsupplevelse med långvariga resultat, vilket gör den till en favorit för permanent hårborttagning.',
            url: 'varumarken/soprano-ice/',
            url_title: 'Läs mer om Soprano Ice',
            booking_url: 'https://boka.acnespecialisten.se?flow=sopranoice',
            booking_url_title: 'Boka Soprano Ice-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Soprano',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            photo: 'bilder/varumarken/424x324/powerlite-photonova.webp',
            photo_alt: 'Kvinna som får powerlite photonoval behandling i ansiktet',
            photo_title: 'Powerlite Photonova - IPL',
            title: 'Powerlite Photonova',
            subtitle: 'IPL för hudproblem',
            description: 'Powerlite Photonova är en effektiv IPL-behandling som effektivt behandlar pigmentfläckar och ytliga blodkärl. Denna mångsidiga och avancerade teknologi möjliggör precis behandling, vilket resulterar i synbara förbättringar av en rad olika hudtillstånd.',
            url: 'varumarken/powerlite-photonova/',
            url_title: 'Läs mer om Powerlite Photonova',
            booking_url: 'https://boka.acnespecialisten.se?flow=powerlite',
            booking_url_title: 'Boka Powerlite Photonova-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion Logo',
            image_title: 'Infuzion - nålfri skinbooster',
            photo: 'bilder/varumarken/424x324/infuzion.webp',
            photo_alt: 'Infuzion maskin',
            photo_title: 'Infuzion - nålfri skinbooster',
            title: 'Infuzion',
            subtitle: 'Skinbooster utan nålar',
            description: 'Infuzion System är en revolutionerande teknik som effektivt levererar näringsämnen djupt in i huden. Genom att använda en icke-invasiv metod förbättras hudens hydrering och elasticitet markant, vilket ger en yngre och friskare hud.',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
            booking_url_title: 'Boka tid för Infuzion-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Infuzion',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 logotyp',
            image_title: 'PRX-T33 - TCA peeling',
            photo: 'bilder/varumarken/424x324/prx-t33.webp',
            photo_alt: 'PRX-T33 serum',
            photo_title: 'PRX-T33 - TCA peeling',
            title: 'PRX-T33',
            subtitle: 'Ansiktspeeling med TCA',
            description: 'PRX-T33 är en unik behandling som kombinerar TCA-peeling med väteperoxid för omedelbara resultat utan återhämtningstid. Den stimulerar hudens djupare lager för förbättrad elasticitet och fasthet, och är idealisk för dem som önskar en omedelbar hudförbättring.',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33',
            booking_url: 'https://boka.acnespecialisten.se?flow=prx',
            booking_url_title: 'Boka PRX-T33-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_PRXT33',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed logotyp',
            image_title: 'Exceed',
            photo: 'bilder/varumarken/424x324/exceed.webp',
            photo_alt: 'Kvinna som får exceed behandling i ansiktet',
            photo_title: 'Exceed',
            title: 'Exceed',
            subtitle: 'Microneedling mot hudtillstånd',
            description: 'Perfekt för att minska rynkor, jämnar ut huden och förbättra hudtextur. Exceed-behandlingen stimulerar hudens naturliga läkningsprocess och ger en synligt förbättrad hudkvalitet.',
            url: 'varumarken/exceed/',
            url_title: 'Läs mer om Exceed',
            booking_url: 'https://boka.acnespecialisten.se?flow=exceed',
            booking_url_title: 'Boka tid för Exceed-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Exceed',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion logotyp',
            image_title: 'Microdermabrasion - hudslipning',
            photo: 'bilder/varumarken/424x324/microdermabrasion.webp',
            photo_alt: 'Kvinna som får microdermabrasion behandling i ansiktet',
            photo_title: 'Microdermabrasion - hudslipning',
            title: 'Microdermabrasion',
            subtitle: 'Hudslipning',
            description: 'Microdermabrasion är en populär behandling för att varsamt exfoliera och förnya hudens yta. Genom att avlägsna döda hudceller och stimulera cellförnyelse, minskar behandlingen synligheten av fina linjer, akneärr och ojämn hudton, vilket ger en fräschare och klarare hud.',
            url: 'microdermabrasion.php',
            url_title: 'Läs mer om Microdermabrasion',
            booking_url: 'https://boka.acnespecialisten.se?flow=microdermabrasion',
            booking_url_title: 'Boka tid för Microdermabrasion-behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Dermabrasion',
            consultation_url_title: 'Boka gratis hudkonsultation',
      ),
);

$path_segments = array(
      new PathSegment('Varumärken', 'varumarken'),
);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/" />

      <title class="l10n">Ledande varumärken inom hudvård hos AcneSpecialisten</title>
      <meta name="title" content="Ledande varumärken inom hudvård hos AcneSpecialisten" class="l10n">
      <meta name="description" content="Upptäck AcneSpecialistens noggrant utvalda samling av ledande hudvårdsmärken och toppmodern utrustning, för effektiva och skräddarsydda hudvårdsbehandlingar." class="l10n">
      <meta name="keywords" content="varumärke" class="l10n">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/varumarken/style.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <?php
                  include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
                  ?>
                  <div class="container">
                        <div id="brands-container">
                              <div id="brands">
                                    <div id="brands-shadow">
                                          <?php
                                          foreach ($header_brands as $brand) { ?>
                                                <a href="<?php echo $brand->url ?>">
                                                      <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->title ?>" title="<?php echo $brand->title ?>" width="94" height="34" class="brand" />
                                                </a>
                                          <?php } ?>
                                    </div>
                              </div>
                              <div class="scroll-button is-hidden" id="scroll-button-previous">
                                    <button class="round-medium grey">
                                          <?php icon('arrow-left') ?>
                                    </button>
                              </div>
                              <div class="scroll-button is-hidden" id="scroll-button-next">
                                    <button class="round-medium grey">
                                          <?php icon('arrow-right') ?>
                                    </button>
                              </div>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <section id="links">
                        <div class="columns is-variable is-3">
                              <?php
                              $brand_index = 0;
                              for ($i = 0; $i < 4; $i++) {
                              ?>
                                    <div class="column">
                                          <div class="item-container">
                                                <?php for ($j = 0; $j < 2; $j++) { ?>
                                                      <div class="item">
                                                            <a href="<?php echo $link_brands[$brand_index]->url ?>" title="<?php echo $link_brands[$brand_index]->url_title ?>"><?php echo $link_brands[$brand_index]->label ?></a>
                                                            <?php foreach ($link_brands[$brand_index]->services as $url => $label) { ?>
                                                                  <a href="<?php echo $url ?>" title="<?php echo $label ?>" class="service-label"><?php echo $label ?></a>
                                                            <?php } ?>
                                                      </div>
                                                <?php
                                                      $brand_index++;
                                                } ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </section>
                  <section id="cards">
                        <div id="card-grid">
                              <?php foreach ($brand_cards as $brand) { ?>
                                    <div class="card-grid-item">
                                          <?php include('widgets/brand_card/brand_card.php'); ?>
                                    </div>
                              <?php } ?>
                        </div>
                  </section>

                  <section id="consultation-banner" class="large-margin">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
                        </div>
                  </section>
                  <section id="results" class="large-margin">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
                        </div>
                  </section>
                  <section id="reviews">
                        <div class="container">
                              <h2 class="big l10n">Omdömen</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
                        </div>
                  </section>
                  <section id="faq">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Frågor & svar</h2>
                                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla frågor</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php $faq_categories = array(
                                    'Generellt' => array(
                                          new Question(
                                                title: 'Vad innebär det att använda "best in class" maskiner?',
                                                text: '<p class="p200">Med "best in class" menar vi att vi använder de senaste och mest avancerade maskinerna inom varje behandlingskategori. Dessa maskiner är noggrant utvalda baserat på deras erkännande i kliniska studier och branschutmärkelser, vilket garanterar hög kvalitet och effektivitet i våra behandlingar, vilket ger våra kunder de bästa möjliga resultaten.</p>'
                                          ),
                                          new Question(
                                                title: 'Hur väljer Acnespecialisten sina varumärken och maskiner för behandlingar?',
                                                text: '<p class="p200">Vårt urval baseras på omfattande forskning och samarbete med ledande leverantörer som har gedigen erfarenhet inom branschen. Vi prioriterar specialiserade varumärken som fokuserar på specifika områden för att garantera högkvalitativa produkter. Dessutom säkerställer vi att vår personal får den bästa utbildningen för säker och effektiv användning av utrustningen.</p>'
                                          ),
                                          new Question(
                                                title: 'Hur skiljer sig Acnespecialistens utrustning från andra hudvårdsklinikers?',
                                                text: '<p class="p200">Till skillnad från vissa kliniker som använder kopior, fokuserar vi på att endast använda originalutrustning av högsta kvalitet. Vi uppmuntrar våra kunder att göra medvetna val genom att informera sig om vilken typ av utrustning som används för deras behandlingar, för att säkerställa optimala resultat och kompetens.</p>'
                                          ),
                                          new Question(
                                                title: 'Har Acnespecialisten några exklusiva samarbeten med hudvårdsmärken?',
                                                text: '<p class="p200">Ja, Acnespecialisten är stolt över att vara en av Sveriges ledande kliniker för Dermapen och PRX-T33. Vi har etablerat starka samarbeten med dessa märken, vilket gör det möjligt för oss att erbjuda unika och effektiva behandlingsmetoder.</p>'
                                          ),
                                          new Question(
                                                title: 'Hur ofta uppdaterar Acnespecialisten sin teknologi och utrustning inom hudvård?',
                                                text: '<p class="p200">Vi ser alltid till att ligga i framkant när det kommer till den senaste tekonolign, vi strävar efter att alltid ha den senaste och bästa, släpps nya tekonoliger på marknaden ser vi till att byta ut till det bästa som marknaden har att erbjuda.</p>'
                                          ),
                                    ),

                              );
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
                        </div>
                  </section>

                  <section id="specialists">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
                                    <a href="/hudterapeut/" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla hudterapeuter</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php
                              $specialists = array(
                                    new Specialist(
                                          name: 'Cazzandra Lindberg',
                                          title: 'Hudterapeut sedan 2018',
                                          image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                                          image_title: 'Hudterapeut Cazzandra Lindberg',
                                          image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
                                    ),
                                    new Specialist(
                                          name: 'Veronika Benedik',
                                          title: 'Hudterapeut sedan 1999',
                                          image: 'images/specialists/large/hudterapeut-veronika.webp',
                                          image_title: 'Hudterapeut Veronika Benedik',
                                          image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
                                    ),
                                    new Specialist(
                                          name: 'Julia Eklund',
                                          title: 'Hudterapeut sedan 2021',
                                          image: 'images/specialists/large/hudterapeut-julia.webp',
                                          image_title: 'Hudterapeut Julia Eklund',
                                          image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
                                    ),
                                    new Specialist(
                                          name: 'Vilma Libom',
                                          title: 'Hudterapeut sedan 2022',
                                          image: 'images/specialists/large/hudterapeut-vilma.webp',
                                          image_title: 'Hudterapeut Vilma Libom',
                                          image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
                                    ),
                              );
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                              ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut/" title="Se alla våra hudterapeuter">Se alla våra hudterapeuter</a>
                        </div>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script async src="/varumarken/brands.js"></script>
</body>

</html>