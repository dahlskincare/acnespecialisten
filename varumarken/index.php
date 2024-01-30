<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
include_once('models.php');

$green_banner_content = new GreenBannerContent(
      title: 'Varumärken',
      description: 'På AcneSpecialisten samarbetar vi med branschledande leverantörer för att säkerställa att vi använder de mest avancerade teknikerna inom hudvård. Denna kombination av toppmodern teknik och expertkompetens möjliggör de bästa möjliga resultaten för våra kunder. Kvalitet står i centrum för vår verksamhet, och vi kompromissar aldrig med standarden på vår utrustning.',
      description_extended: 'Hos oss är varje behandlingsplan anpassad för att möta individuella behov. Vi erbjuder en personlig och detaljerad konsultation för att noggrant förstå varje kunds unika hudtillstånd. Våra hudterapeuter är här för att ge dig vägledning och skapa en behandlingsplan som ger optimala resultat för just din hudtyp.',
      button_url: 'gratis-hudkonsultation.php',
      button_label: 'Boka en gratis konsultation'
);

$header_brands = array(
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_alt: 'Alma',
            image_title: 'Alma',
            url: 'varumarken/alma',
            url_title: 'Alma',
      ),
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid',
            image_title: 'Alma Hybrid',
            url: 'alma-hybrid-co2-laser.php',
            url_title: 'Alma Hybrid',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen',
            image_title: 'Dermapen',
            url: 'dermapen.php',
            url_title: 'Dermapen',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_alt: 'Harmony XL Pro',
            image_title: 'Harmony XL Pro',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Harmony XL Pro',
      ),
      new Brand(
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial',
            image_title: 'HydraFacial',
            url: 'hydrafacial.php',
            url_title: 'HydraFacial',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech',
            image_title: 'Skin Tech',
            url: 'varumarken/skin-tech',
            url_title: 'Skin Tech',
      ),
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL',
            image_title: 'Alma Rejuve Dye-VL',
            url: 'varumarken/alma/rejuve-dye-vl',
            url_title: 'Alma Rejuve Dye-VL',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen',
            image_title: 'CryoPen',
            url: 'cryopen.php',
            url_title: 'CryoPen',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X',
            image_title: 'Splendor X',
            url: 'varumarken/splendor-x',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice',
            image_title: 'Soprano Ice',
            url: 'varumarken/alma/soprano-ice',
            url_title: 'Soprano Ice',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova',
            image_title: 'Powerlite Photonova',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Powerlite Photonova',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion',
            image_title: 'Infuzion',
            url: 'infuzion.php',
            url_title: 'Infuzion',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33n',
            image_title: 'PRX-T33',
            url: 'prx-t33.php',
            url_title: 'PRX-T33',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed',
            image_title: 'Exceed',
            url: 'varumarken/exceed',
            url_title: 'Exceedn',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion',
            image_title: 'Microdermabrasion',
            url: 'microdermabrasion.php',
            url_title: 'Microdermabrasion',
      ),
);

$link_brands = array(
      new BrandCategory(
            label: 'Laser for problem skin',
            services: array(
                  "alma-hybrid-co2-laser.php" => "Alma - Hybrid",
                  "alma-harmony-xl-pro.php" => "Alma - Harmony XL"
            )
      ),
      new BrandCategory(
            label: 'Permanent Hårborttagning',
            services: array(
                  "varumarken/alma/soprano-ice" => "Alma - Soprano Ice",
                  "varumarken/splendor-x" => "Lumenis - Splendor X",
            )
      ),
      new BrandCategory(
            label: 'IPL',
            services: array(
                  "varumarken/alma/rejuve-dye-vl" => "Alma - Rejuve Dye VL",
                  "alma-harmony-xl-pro.php" => "Alma - Harmony XL",
                  "varumarken/powerlite-photonova" => "Powerlight - PhotoNova PLS3",
            )
      ),
      new BrandCategory(
            label: 'Dermabration',
            services: array(
                  "hydrafacial.php" => "HydraFacial",
                  "microdemabrasion.php" => "Mimass - MicroDermabrasion",
            )
      ),
      new BrandCategory(
            label: 'Kemisk Peeling',
            services: array(
                  "varumarken/skin-tech" => "Skin Tech",
                  "prx-t33.php" => "PRX-T33",
            )
      ),
      new BrandCategory(
            label: 'FreezeTreat',
            services: array(
                  "cryopen.php" => "CryoPen",
            )
      ),
      new BrandCategory(
            label: 'Skinbooster',
            services: array(
                  "infuzion.php" => "Infuzion",
            )
      ),
      new BrandCategory(
            label: 'Microneedling',
            services: array(
                  "dermapen.php" => "Dermapen",
                  "varumarken/exceed" => "Exceed"
            )
      ),
);

$brand_cards = array(
      new Brand(
          label: 'Alma',
          image: 'bilder/logotyper/alma.svg',
          image_alt: 'Alma Lasers Logo',
          image_title: 'Alma Lasers',
          photo: 'bilder/varumarken/424x324/alma-hybrid-co2.webp',
          photo_alt: 'Alma Hybrid CO2',
          photo_title: 'Alma Hybrid CO2',
          title: 'Alma Lasers - Avancerad estetisk teknik',
          subtitle: 'Högpresterande lasrar och ljusbaserade system',
          description: 'Alma Lasers är en pionjär inom medicinska och estetiska laserlösningar. Våra behandlingar med Alma innehåller avancerad teknologi för hudföryngring, hårborttagning, och behandling av olika hudtillstånd. Upplev skillnaden med Alma Lasers precision och innovation för överlägsna estetiska resultat.',
          url: 'varumarken/alma',
          url_title: 'Läs mer om Alma',
          booking_url: 'https://acnespecialisten.se/book?flow=almarejuve',
          booking_url_title: 'Boka tid för Alma-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'CryoPen',
          image: 'bilder/logotyper/cryopen.svg',
          image_alt: 'CryoPen Logo',
          image_title: 'CryoPen',
          photo: 'bilder/varumarken/424x324/cryopen.webp',
          photo_alt: 'CryoPen Behandling',
          photo_title: 'CryoPen',
          title: 'CryoPen - Precision i kryoterapi',
          subtitle: 'Effektiv behandling av hudlesioner',
          description: 'CryoPen erbjuder en avancerad kryoterapilösning för säker och precisionsinriktad behandling av vårtor, hudfläckar och andra hudlesioner. Med dess precisa applicering minimeras påverkan på omgivande hud, vilket garanterar en snabb, effektiv och bekväm behandling.',
          url: 'cryopen.php',
          url_title: 'Läs mer om CryoPen',
          booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
          booking_url_title: 'Boka tid för CryoPen-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Dermapen',
          image: 'bilder/logotyper/dermapen.svg',
          image_alt: 'Dermapen Logo',
          image_title: 'Dermapen',
          photo: 'bilder/varumarken/424x324/dermapen.webp',
          photo_alt: 'Dermapen Microneedling',
          photo_title: 'Dermapen',
          title: 'Dermapen - Microneedling revolution',
          subtitle: 'Innovativ hudföryngring och ärrbehandling',
          description: 'Dermapen är världsledande inom microneedling-teknik, som effektivt behandlar akneärr, rynkor, och sträcker huden. Genom att skapa mikroskopiska kanaler i huden stimuleras kroppens naturliga kollagenproduktion, vilket leder till en fastare, jämnare och yngre hud.',
          url: 'dermapen.php',
          url_title: 'Läs mer om Dermapen',
          booking_url: 'https://acnespecialisten.se/book?flow=dermapen',
          booking_url_title: 'Boka tid för Dermapen-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Exceed',
          image: 'bilder/logotyper/exceed.png',
          image_alt: 'Exceed Logo',
          image_title: 'Exceed',
          photo: 'bilder/varumarken/424x324/exceed.webp',
          photo_alt: 'Exceed Microneedling',
          photo_title: 'Exceed',
          title: 'Exceed - Nästa nivå av Microneedling',
          subtitle: 'Avancerad behandling för hudförbättring',
          description: 'Exceed systemet tar microneedling till nästa nivå med sin patenterade teknologi. Perfekt för att minska rynkor, sträcka hud och förbättra hudtextur. Exceed-behandlingen stimulerar hudens naturliga läkningsprocess och ger en synligt förbättrad hudkvalitet.',
          url: 'varumarken/exceed',
          url_title: 'Läs mer om Exceed',
          booking_url: 'https://acnespecialisten.se/book?flow=exceed',
          booking_url_title: 'Boka tid för Exceed-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Exceed',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'HydraFacial',
          image: 'bilder/logotyper/hydrafacial.svg',
          image_alt: 'HydraFacial Logo',
          image_title: 'HydraFacial',
          photo: 'bilder/varumarken/424x324/hydrafacial.webp',
          photo_alt: 'HydraFacial Behandling',
          photo_title: 'HydraFacial',
          title: 'HydraFacial - Revolutionerande hudvård',
          subtitle: 'Djuprengörande och återfuktande ansiktsbehandling',
          description: 'HydraFacial är en icke-invasiv behandling som rengör, exfolierar och återfuktar huden. Med en patenterad teknik erbjuder denna behandling omedelbara och märkbara resultat utan nedtid. HydraFacial passar alla hudtyper och ger en klarare, mjukare och mer strålande hud.',
          url: 'hydrafacial.php',
          url_title: 'Läs mer om HydraFacial',
          booking_url: 'https://acnespecialisten.se/book?flow=hydrafacial',
          booking_url_title: 'Boka tid för HydraFacial-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Infuzion',
          image: 'bilder/logotyper/infuzion.svg',
          image_alt: 'Infuzion Logo',
          image_title: 'Infuzion',
          photo: 'bilder/varumarken/424x324/infuzion.webp',
          photo_alt: 'Infuzion System',
          photo_title: 'Infuzion',
          title: 'Infuzion - Skonsam hudföryngring',
          subtitle: 'Effektivt system för näringsämnesinfusion',
          description: 'Infuzion System är en revolutionerande teknik som effektivt levererar näringsämnen djupt in i huden. Genom att använda en icke-invasiv metod förbättras hudens hydrering och elasticitet markant, vilket ger en yngre och friskare hud.',
          url: 'infuzion.php',
          url_title: 'Läs mer om Infuzion',
          booking_url: 'https://acnespecialisten.se/book?flow=infuzion',
          booking_url_title: 'Boka tid för Infuzion-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Infuzion',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Microdermabrasion',
          image: 'bilder/logotyper/microdermabrasion.png',
          image_alt: 'Microdermabrasion Logo',
          image_title: 'Microdermabrasion',
          photo: 'bilder/varumarken/424x324/microdermabrasion.webp',
          photo_alt: 'Microdermabrasion Behandling',
          photo_title: 'Microdermabrasion',
          title: 'Microdermabrasion - Exfolierande hudföryngring',
          subtitle: 'Gentle yet effective skin resurfacing',
          description: 'Microdermabrasion är en populär behandling för att varsamt exfoliera och förnya hudens yta. Genom att avlägsna döda hudceller och stimulera cellförnyelse, minskar behandlingen synligheten av fina linjer, akneärr och ojämn hudton, vilket ger en fräschare och klarare hud.',
          url: 'microdermabrasion.php',
          url_title: 'Läs mer om Microdermabrasion',
          booking_url: 'https://acnespecialisten.se/book?flow=microdermabrasion',
          booking_url_title: 'Boka tid för Microdermabrasion-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_MicroDermabrasion',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Powerlite Photonova',
          image: 'bilder/logotyper/powerlite-photonova.svg',
          image_alt: 'Powerlite Photonova Logo',
          image_title: 'Powerlite Photonova',
          photo: 'bilder/varumarken/424x324/powerlite-photonova.webp',
          photo_alt: 'Powerlite Photonova',
          photo_title: 'Powerlite Photonova',
          title: 'Powerlite Photonova - Ljusbaserad hudperfektionering',
          subtitle: 'Framtidens teknologi idag',
          description: 'Powerlite Photonova är en avancerad ljusbaserad behandlingsplattform som erbjuder allt från hudföryngring till aknebehandling. Med sin mångsidiga teknologi och precisa applicering, ger Photonova synliga förbättringar för en mängd olika hudtillstånd.',
          url: 'varumarken/powerlite-photonova',
          url_title: 'Läs mer om Powerlite Photonova',
          booking_url: 'https://acnespecialisten.se/book?flow=powerlite',
          booking_url_title: 'Boka Powerlite Photonova-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Photonova',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'PRX-T33',
          image: 'bilder/logotyper/prx-t33.svg',
          image_alt: 'PRX-T33 Logo',
          image_title: 'PRX-T33',
          photo: 'bilder/varumarken/424x324/prx-t33.webp',
          photo_alt: 'PRX-T33',
          photo_title: 'PRX-T33',
          title: 'PRX-T33 - Innovativ biorevitaliseringsbehandling',
          subtitle: 'Ingen återhämtning, omedelbar effekt',
          description: 'PRX-T33 är en unik behandling som kombinerar TCA-peeling med väteperoxid för omedelbara resultat utan återhämtningstid. Den stimulerar hudens djupare lager för förbättrad elasticitet och fasthet, och är idealisk för dem som önskar en omedelbar hudförbättring.',
          url: 'prx-t33.php',
          url_title: 'Läs mer om PRX-T33',
          booking_url: 'https://acnespecialisten.se/book?flow=prx',
          booking_url_title: 'Boka PRX-T33-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Skin Tech',
          image: 'bilder/logotyper/skin-tech.svg',
          image_alt: 'Skin Tech Logo',
          image_title: 'Skin Tech',
          photo: 'bilder/varumarken/424x324/skin-tech.webp',
          photo_alt: 'Skin Tech',
          photo_title: 'Skin Tech',
          title: 'Skin Tech - Avancerad hudvårdsinnovation',
          subtitle: 'Expertlösningar för din hud',
          description: 'Skin Tech erbjuder ett brett sortiment av avancerade hudvårdsprodukter och peelingar, utformade för att möta specifika hudvårdsbehov. Deras innovativa formuleringar arbetar för att förbättra hudens hälsa och utseende, med fokus på resultat och säkerhet.',
          url: 'skin-tech.php',
          url_title: 'Läs mer om Skin Tech',
          booking_url: 'https://acnespecialisten.se/book?flow=skintech',
          booking_url_title: 'Boka Skin Tech-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SkinTech',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Splendor X',
          image: 'bilder/logotyper/splendor-x.png',
          image_alt: 'Splendor X Logo',
          image_title: 'Splendor X',
          photo: 'bilder/varumarken/424x324/splendor-x.webp',
          photo_alt: 'Splendor X',
          photo_title: 'Splendor X',
          title: 'Splendor X - Kraftfull och mångsidig laserbehandling',
          subtitle: 'Det senaste inom laserhårborttagning och mer',
          description: 'Splendor X kombinerar laser- och BLEND X-teknologi för en kraftfull och mångsidig behandlingsupplevelse. Perfekt för hårborttagning, hudföryngring och pigmentkorrigering, erbjuder Splendor X snabba och effektiva resultat för en rad hudtillstånd.',
          url: 'varumarken/splendor-x',
          url_title: 'Läs mer om Splendor X',
          booking_url: 'https://acnespecialisten.se/book?flow=splendorx',
          booking_url_title: 'Boka Splendor X-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SplendorX',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

      new Brand(
          label: 'Soprano Ice',
          image: 'bilder/logotyper/soprano-ice.png',
          image_alt: 'Soprano Ice Logo',
          image_title: 'Soprano Ice',
          photo: 'bilder/varumarken/424x324/soprano-ice.webp',
          photo_alt: 'Soprano Ice',
          photo_title: 'Soprano Ice',
          title: 'Soprano Ice - Banbrytande hårborttagningsteknik',
          subtitle: 'Komfortabel och effektiv för alla hudtyper',
          description: 'Soprano Ice använder Alma Lasers unika SHR-teknik för en nästan smärtfri och effektiv laserhårborttagning. Den är säker för alla hudtyper och erbjuder en behaglig behandlingsupplevelse med långvariga resultat, vilket gör den till en favorit för permanent hårborttagning.',
          url: 'varumarken/soprano-ice',
          url_title: 'Läs mer om Soprano Ice',
          booking_url: 'https://acnespecialisten.se/book?flow=sopranoice',
          booking_url_title: 'Boka Soprano Ice-behandling',
          consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SopranoIce',
          consultation_url_title: 'Boka gratis hudkonsultation',
      ),

);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Varumärken</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/varumarken/style.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner" class="sticky-badges-target">
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
                        <div id="item-container">
                              <?php for ($i = 0; $i < count($link_brands); $i++) { ?>
                                    <div class="item" id="item-<?php echo $i ?>">
                                          <p class="p200"><?php echo $link_brands[$i]->label ?></p>
                                          <?php foreach ($link_brands[$i]->services as $url => $label) { ?>
                                                <p class="p200 service-label"><a href="<?php echo $url ?>" title="<?php echo $label ?>"><?php echo $label ?></a></p>
                                          <?php } ?>
                                    </div>
                              <?php } ?>
                        </div>
                  </section>
                  <section id="cards">
                        <div class="columns is-multiline">
                              <?php foreach ($brand_cards as $brand) { ?>
                                    <div class="column is-one-third">
                                          <div class="mt-xl">
                                                <?php include('widgets/brand_card/brand_card.php'); ?>
                                          </div>
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
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Omdömen</h2>
                                    <div class="flex-row is-hidden-mobile">
                                          <div class="step-buttons">
                                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                                      <?php icon('arrow-left') ?>
                                                </button>
                                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                                      <?php icon('arrow-right') ?>
                                                </button>
                                          </div>
                                          <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                                                <span class="l10n">Se alla omdömen</span>
                                                <?php icon('navigate-next') ?>
                                          </a>
                                    </div>

                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">Se alla omdömen</a>
                        </div>
                  </section>
                  <section id="faq">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Frågor & svar</h2>
                                    <a href="faq" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla frågor</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
                        </div>
                  </section>
                  <!--Hudguide-->
                  <section id="specialists">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Våra specialister</h2>
                                    <a href="specialister" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla specialister</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php
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
                                          name: 'Julia Eklund',
                                          title: 'Hudterapeut sedan 2017',
                                          image: 'images/specialists/large/hudterapeut-julia.webp',
                                          image_alt: 'Julia Eklund',
                                          image_title: 'Julia Eklund',
                                    ),
                                    new Specialist(
                                          name: 'Vilma Libom',
                                          title: 'Hudterapeut sedan 2019',
                                          image: 'images/specialists/large/hudterapeut-vilma.webp',
                                          image_alt: 'Vilma Libom',
                                          image_title: 'Vilma Libom'
                                    )
                              );
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                              ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists" title="Se alla specialister">Se alla specialister</a>
                        </div>
                  </section>
                  <section id="brands">
                        <div class="container">
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Varumärken</h2>
                                    <a href="varumarken" class="button compact text is-hidden-mobile">
                                          <span class="l10n">Se alla varumärken</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                              <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
                        </div>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="varumarken/brands.js"></script>
</body>

</html>