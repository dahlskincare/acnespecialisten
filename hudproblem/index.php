<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

class ProblemArea
{
      public function __construct($label, $icon, $problem_ids)
      {
            $this->label = $label;
            $this->icon = $icon;
            $this->problem_ids = $problem_ids;
      }

      public string $label;
      public string $icon;
      public array $problem_ids;
}

class Problem
{
      public function __construct($button_label, $content_label, $url, $url_title, $consultation_url, $consultation_url_title, $booking_url, $booking_url_title, $image, $image_title, $image_alt, $info)
      {
            $this->button_label = $button_label;
            $this->content_label = $content_label;
            $this->url = $url;
            $this->url_title = $url_title;
            $this->consultation_url = $consultation_url;
            $this->consultation_url_title = $consultation_url_title;
            $this->booking_url = $booking_url;
            $this->booking_url_title = $booking_url_title;
            $this->image = $image;
            $this->image_title = $image_title;
            $this->image_alt = $image_alt;
            $this->info = $info;
      }
      public string $button_label;
      public string $content_label;
      public string $url;
      public string $url_title;
      public string $consultation_url;
      public string $consultation_url_title;
      public string $booking_url;
      public string $booking_url_title;
      public string $image;
      public string $image_title;
      public string $image_alt;
      public string $info;
}


$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
);

$green_banner_content = new GreenBannerContent(
      title: 'Hudproblem',
      description: 'På Acnespecialisten arbetar vi med att behandla och förbättra huden genom att erbjuda skräddarsydda lösningar för varje enskilt hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har.',
      description_extended: 'Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera ditt problem och ta fram en skräddarsydd behandlingsplan, kostnadsfritt.',
);

$problems['akne'] = new Problem(
      button_label: 'Akne',
      content_label: 'Akne',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne',
      image: 'bilder/hudproblem/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr'] = new Problem(
      button_label: 'Akneärr',
      content_label: 'Akneärr',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr',
      booking_url_title: 'Boka behandling mot akneärr',
      image: 'bilder/hudproblem/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av olika typer av akne. Det ser ut som gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar'] = new Problem(
      button_label: 'Finnar',
      content_label: 'Finnar',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar',
      booking_url_title: 'Boka behandling mot finnar',
      image: 'bilder/hudproblem/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar'] = new Problem(
      button_label: 'Ärr från finnar',
      content_label: 'Ärr från finnar',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar',
      booking_url_title: 'Boka behandling mot ärr från finnar',
      image: 'bilder/hudproblem/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen (finnen).'
);
$problems['rosacea'] = new Problem(
      button_label: 'Rosacea',
      content_label: 'Rosacea',
      url: 'rosacea.php',
      url_title: 'Läs mer information om Rosacea',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea',
      booking_url_title: 'Boka behandling mot rosacea',
      image: 'bilder/hudproblem/424x324/rosacea.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder (skov) av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet (fjärilsmönster) på kinderna och nästan.'
);
$problems['ytliga-blodkarl'] = new Problem(
      button_label: 'Ytliga Blodkärl',
      content_label: 'Ytliga Blodkärl',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl',
      booking_url_title: 'Boka behandling mot ytliga blodkärl',
      image: 'bilder/hudproblem/424x324/ytliga-blodkarl.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar'] = new Problem(
      button_label: 'Pormaskar',
      content_label: 'Pormaskar',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar',
      booking_url_title: 'Boka behandling mot pormaskar',
      image: 'bilder/hudproblem/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer'] = new Problem(
      button_label: 'Stora porer',
      content_label: 'Stora porer',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer',
      booking_url_title: 'Boka behandling mot stora porer',
      image: 'bilder/hudproblem/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['blandhy'] = new Problem(
      button_label: 'Blandhy',
      content_label: 'Blandhy',
      url: 'blandhy.php',
      url_title: 'Läs mer information om Blandhy',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka konsultation mot blandhy',
      booking_url_title: 'Boka behandling mot blandhy',
      image: 'bilder/hudproblem/424x324/blandhy.webp',
      image_alt: 'Ansikte med hudproblemet Blandhy',
      image_title: 'Blandhy',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torr hy med finnar och pormaskar. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg.'
);
$problems['pigmentflackar'] = new Problem(
      button_label: 'Pigmentfläckar',
      content_label: 'Pigmentfläckar',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar',
      booking_url_title: 'Boka behandling mot pigmentfläckar',
      image: 'bilder/hudproblem/424x324/pigmentflackar.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['perioral-dermatit'] = new Problem(
      button_label: 'Perioral dermatit',
      content_label: 'Perioral dermatit',
      url: 'perioral-dermatit.php',
      url_title: 'Läs mer information om Perioral dermatit',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
      booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka konsultation mot perioral dermatit',
      booking_url_title: 'Boka behandling mot perioral dermatit',
      image: 'bilder/hudproblem/424x324/perioral-dermatit.webp',
      image_alt: 'Ansikte med hudproblemet Perioral dermatit',
      image_title: 'Perioral dermatit',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller finnar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar och hudirriterande ämnen.'
);
$problems['seborre'] = new Problem(
      button_label: 'Seborré',
      content_label: 'Seborré',
      url: 'seborre.php',
      url_title: 'Läs mer information om Seborré',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea',
      consultation_url_title: 'Boka konsultation mot seborré',
      booking_url_title: 'Boka behandling mot seborré',
      image: 'bilder/hudproblem/424x324/seborre.webp',
      image_alt: 'Ansikte med hudproblemet Seborré',
      image_title: 'Seborré',
      info: 'Detta tillstånd är karakteriserat av överdriven produktion av talg, vilket leder till en oljig hudton och ibland tillstånd som mjäll. Det kan påverka olika områden av kroppen, inklusive hårbotten, ansiktet och bröstet, och varierar i svårighetsgrad.'
);
$problems['milier'] = new Problem(
      button_label: 'Milier',
      content_label: 'Milier',
      url: 'milier.php',
      url_title: 'Läs mer information om Milier',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka konsultation mot milier',
      booking_url_title: 'Boka behandling mot milier',
      image: 'bilder/hudproblem/424x324/milier.webp',
      image_alt: 'Ansikte med hudproblemet Milier',
      image_title: 'Milier',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen och på kinderna. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['hudforandringar'] = new Problem(
      button_label: 'Hudförändringar',
      content_label: 'Hudförändringar',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar',
      booking_url_title: 'Boka behandling mot hudförändringar',
      image: 'bilder/hudproblem/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['mogen-hy'] = new Problem(
      button_label: 'Mogen Hy',
      content_label: 'Mogen Hy',
      url: 'mogen-hy.php',
      url_title: 'Läs mer information om Mogen Hy',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka konsultation mot mogen hy',
      booking_url_title: 'Boka behandling mot mogen hy',
      image: 'bilder/hudproblem/424x324/mogen-hy.webp',
      image_alt: 'Ansikte med hudproblemet Mogen Hy',
      image_title: 'Mogen Hy',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['torr-kanslig-hy'] = new Problem(
      button_label: 'Torr & Känslig hy',
      content_label: 'Torr & Känslig hy',
      url: 'torr-hy.php',
      url_title: 'Läs mer information om Torr & Känslig hy',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation',
      booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_DrySensetiveSkin',
      consultation_url_title: 'Boka konsultation mot torr & känslig hy',
      booking_url_title: 'Boka behandling mot torr & känslig hy',
      image: 'bilder/hudproblem/424x324/torr-kanslig-hy.webp',
      image_alt: 'Ansikte med hudproblemet Torr & Känslig hy',
      image_title: 'Torr & Känslig hy',
      info: 'Denna hudtyp är benägen att bli torr, stram, röd och irriterad och kan reagera negativt på vissa hudvårdsprodukter, klimatförändringar eller föroreningar. Torr och känslig hud kräver särskilt skonsam vård för att bibehålla dess barriärfunktion och förhindra ytterligare irritation.'
);
$problems['bristningar'] = new Problem(
      button_label: 'Bristningar',
      content_label: 'Bristningar',
      url: 'hudproblem/bristningar/',
      url_title: 'Läs mer information om Bristningar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Strechmarks',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_StrechMarks',
      consultation_url_title: 'Boka konsultation mot bristningar',
      booking_url_title: 'Boka behandling mot bristningar',
      image: 'bilder/hudproblem/424x324/bristningar.webp',
      image_alt: 'Mage med hudproblemet Bristningar',
      image_title: 'Bristningar',
      info: 'Dessa är linjer eller märken på huden som uppstår när huden sträcks snabbt, som under graviditet, pubertet eller snabb viktökning. De börjar ofta som röda eller lila linjer och bleknar över tid till en mer silvervit färg. Bristningar är ett resultat av bristningar i hudens kollagen och elastin, vilket minskar hudens elasticitet och styrka.'
);
$problems['operations-skadearr'] = new Problem(
      button_label: 'Operations & Skadeärr',
      content_label: 'Operations & Skadeärr',
      url: 'hudproblem/operations-skadearr/',
      url_title: 'Läs mer information om Operations & Skadeärr',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr',
      booking_url_title: 'Boka behandlingoperations & skadeärr',
      image: 'bilder/hudproblem/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har'] = new Problem(
      button_label: 'Oönskat hår',
      content_label: 'Oönskat hår',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår',
      booking_url_title: 'Boka behandling mot oönskat hår',
      image: 'bilder/hudproblem/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);



$problems['akne-ansikte'] = new Problem(
      button_label: 'Akne i ansiktet',
      content_label: 'Akne i ansiktet',
      url: 'acne-ansikte.php',
      url_title: 'Läs mer information om Akne i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne i ansiktet',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne i ansiktet',
      image: 'bilder/hudproblem/424x324/akne-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne i ansiktet',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-ansikte'] = new Problem(
      button_label: 'Akneärr i ansiktet',
      content_label: 'Akneärr i ansiktet',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr i ansiktet',
      booking_url_title: 'Boka behandling mot akneärr i ansiktet',
      image: 'bilder/hudproblem/424x324/acnearr-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr i ansiktet',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av olika typer av akne hy. De kan vara gropig hy eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-ansikte'] = new Problem(
      button_label: 'Finnar i ansiktet',
      content_label: 'Finnar i ansiktet',
      url: 'finnar-ansikte.php',
      url_title: 'Läs mer information om Finnar i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar i ansiktet',
      booking_url_title: 'Boka behandling mot finnar i ansiktet',
      image: 'bilder/hudproblem/424x324/finnar-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar i ansiktet',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-ansikte'] = new Problem(
      button_label: 'Ärr från finnar i ansiktet',
      content_label: 'Ärr från finnar i ansiktet',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar i ansiktet',
      booking_url_title: 'Boka behandling mot ärr från finnar i ansiktet',
      image: 'bilder/hudproblem/424x324/arr-fran-finnar-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar i ansiktet',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['rosacea-ansikte'] = new Problem(
      button_label: 'Rosacea i ansiktet',
      content_label: 'Rosacea i ansiktet',
      url: 'rosacea.php',
      url_title: 'Läs mer information om Rosacea i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea i ansiktet',
      booking_url_title: 'Boka behandling mot rosacea i ansiktet',
      image: 'bilder/hudproblem/424x324/rosacea-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea i ansiktet',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet på kinderna och nästan.'
);
$problems['ytliga-blodkarl-ansikte'] = new Problem(
      button_label: 'Ytliga Blodkärl i ansiktet',
      content_label: 'Ytliga Blodkärl i ansiktet',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl i ansiktet',
      booking_url_title: 'Boka behandling mot ytliga blodkärl i ansiktet',
      image: 'bilder/hudproblem/424x324/ytliga-blodkarl-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl i ansiktet',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar-ansikte'] = new Problem(
      button_label: 'Pormaskar i ansiktet',
      content_label: 'Pormaskar i ansiktet',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar i ansiktet',
      booking_url_title: 'Boka behandling mot pormaskar i ansiktet',
      image: 'bilder/hudproblem/424x324/pormaskar-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar i ansiktet',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-ansikte'] = new Problem(
      button_label: 'Stora porer i ansiktet',
      content_label: 'Stora porer i ansiktet',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer i ansiktet',
      booking_url_title: 'Boka behandling mot stora porer i ansiktet',
      image: 'bilder/hudproblem/424x324/stora-porer-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer i ansiktet',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['blandhy-ansikte'] = new Problem(
      button_label: 'Blandhy i ansiktet',
      content_label: 'Blandhy i ansiktet',
      url: 'blandhy.php',
      url_title: 'Läs mer information om Blandhy i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka konsultation mot blandhy i ansiktet',
      booking_url_title: 'Boka behandling mot blandhy i ansiktet',
      image: 'bilder/hudproblem/424x324/blandhy-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Blandhy',
      image_title: 'Blandhy i ansiktet',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torr hy med finnar och pormaskar. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg.'
);
$problems['pigmentflackar-ansikte'] = new Problem(
      button_label: 'Pigmentfläckar i ansiktet',
      content_label: 'Pigmentfläckar i ansiktet',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar i ansiktet',
      booking_url_title: 'Boka behandling mot pigmentfläckar i ansiktet',
      image: 'bilder/hudproblem/424x324/pigmentflackar-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar i ansiktet',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['perioral-dermatit-ansikte'] = new Problem(
      button_label: 'Perioral dermatit i ansiktet',
      content_label: 'Perioral dermatit i ansiktet',
      url: 'perioral-dermatit.php',
      url_title: 'Läs mer information om Perioral dermatit i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
      booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka konsultation mot perioral dermatit i ansiktet',
      booking_url_title: 'Boka behandling mot perioral dermatit i ansiktet',
      image: 'bilder/hudproblem/424x324/perioral-dermatit-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Perioral dermatit',
      image_title: 'Perioral dermatit i ansiktet',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller finnar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar och hudirriterande ämnen.'
);
$problems['seborre-ansikte'] = new Problem(
      button_label: 'Seborré i ansiktet',
      content_label: 'Seborré i ansiktet',
      url: 'seborre.php',
      url_title: 'Läs mer information om Seborré i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea',
      consultation_url_title: 'Boka konsultation mot seborré i ansiktet',
      booking_url_title: 'Boka behandling mot seborré i ansiktet',
      image: 'bilder/hudproblem/424x324/seborre-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Seborré',
      image_title: 'Seborré i ansiktet',
      info: 'Detta tillstånd är karakteriserat av överdriven produktion av talg, vilket leder till en oljig hudton och ibland tillstånd som mjäll. Det kan påverka olika områden av kroppen, inklusive hårbotten, ansiktet och bröstet, och varierar i svårighetsgrad.'
);
$problems['milier-ansikte'] = new Problem(
      button_label: 'Milier i ansiktet',
      content_label: 'Milier i ansiktet',
      url: 'milier.php',
      url_title: 'Läs mer information om Milier i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka konsultation mot milier i ansiktet',
      booking_url_title: 'Boka behandling mot milier i ansiktet',
      image: 'bilder/hudproblem/424x324/milier-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Milier',
      image_title: 'Milier i ansiktet',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen och på kinderna. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['hudforandringar-ansikte'] = new Problem(
      button_label: 'Hudförändringar i ansiktet',
      content_label: 'Hudförändringar i ansiktet',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar i ansiktet',
      booking_url_title: 'Boka behandling mot hudförändringar i ansiktet',
      image: 'bilder/hudproblem/424x324/hudforandringar-ansikte.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar i ansiktet',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['mogen-hy-ansikte'] = new Problem(
      button_label: 'Mogen Hy i ansiktet',
      content_label: 'Mogen Hy i ansiktet',
      url: 'mogen-hy.php',
      url_title: 'Läs mer information om Mogen Hy i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka konsultation mot mogen hy i ansiktet',
      booking_url_title: 'Boka behandling mot mogen hy i ansiktet',
      image: 'bilder/hudproblem/424x324/mogen-hy-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Mogen Hy',
      image_title: 'Mogen Hy i ansiktet',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['torr-kanslig-hy-ansikte'] = new Problem(
      button_label: 'Torr & Känslig hy i ansiktet',
      content_label: 'Torr & Känslig hy i ansiktet',
      url: 'torr-hy.php',
      url_title: 'Läs mer information om Torr & Känslig hy i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation',
      booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_DrySensetiveSkin',
      consultation_url_title: 'Boka konsultation mot torr & känslig hy i ansiktet',
      booking_url_title: 'Boka behandling mot torr & känslig hy i ansiktet',
      image: 'bilder/hudproblem/424x324/torr-kanslig-hy-ansikte.webp',
      image_alt: 'Ansikte med hudproblemet Torr & Känslig hy',
      image_title: 'Torr & Känslig hy i ansiktet',
      info: 'Denna hudtyp är benägen att bli torr, stram, röd och irriterad och kan reagera negativt på vissa hudvårdsprodukter, klimatförändringar eller föroreningar. Torr och känslig hud kräver särskilt skonsam vård för att bibehålla dess barriärfunktion och förhindra ytterligare irritation.'
);
$problems['operations-skadearr-ansikte'] = new Problem(
      button_label: 'Operations & Skadeärr i ansiktet',
      content_label: 'Operations & Skadeärr i ansiktet',
      url: 'hudproblem/operations-skadearr/',
      url_title: 'Läs mer information om Operations & Skadeärr i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr i ansiktet',
      booking_url_title: 'Boka behandlingoperations & skadeärr i ansiktet',
      image: 'bilder/hudproblem/424x324/operations-skadearr-ansikte.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr i ansiktet',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-ansikte'] = new Problem(
      button_label: 'Oönskat hår i ansiktet',
      content_label: 'Oönskat hår i ansiktet',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår i ansiktet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår i ansiktet',
      booking_url_title: 'Boka behandling mot oönskat hår i ansiktet',
      image: 'bilder/hudproblem/424x324/oonskat-har-ansikte.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår i ansiktet',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);

$problems['akne-rygg'] = new Problem(
      button_label: 'Akne på ryggen',
      content_label: 'Akne på ryggen',
      url: 'acne-rygg.php',
      url_title: 'Läs mer information om Akne på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på ryggen',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på ryggen',
      image: 'bilder/hudproblem/424x324/akne-rygg.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på ryggen',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-rygg'] = new Problem(
      button_label: 'Akneärr på ryggen',
      content_label: 'Akneärr på ryggen',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr på ryggen',
      booking_url_title: 'Boka behandling mot akneärr på ryggen',
      image: 'bilder/hudproblem/424x324/acnearr-rygg.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr på ryggen',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av olika typer av akne hy. De kan vara gropig hy eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-rygg'] = new Problem(
      button_label: 'Finnar på ryggen',
      content_label: 'Finnar på ryggen',
      url: 'finnar-rygg.php',
      url_title: 'Läs mer information om Finnar på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på ryggen',
      booking_url_title: 'Boka behandling mot finnar på ryggen',
      image: 'bilder/hudproblem/424x324/finnar-rygg.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på ryggen',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-rygg'] = new Problem(
      button_label: 'Ärr från finnar på ryggen',
      content_label: 'Ärr från finnar på ryggen',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar på ryggen',
      booking_url_title: 'Boka behandling mot ärr från finnar på ryggen',
      image: 'bilder/hudproblem/424x324/arr-fran-finnar-rygg.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar på ryggen',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['pormaskar-rygg'] = new Problem(
      button_label: 'Pormaskar på ryggen',
      content_label: 'Pormaskar på ryggen',
      url: 'pormaskar-rygg.php',
      url_title: 'Läs mer information om Pormaskar på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på ryggen',
      booking_url_title: 'Boka behandling mot pormaskar på ryggen',
      image: 'bilder/hudproblem/424x324/pormaskar-rygg.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på ryggen',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['pigmentflackar-rygg'] = new Problem(
      button_label: 'Pigmentfläckar i ryggen',
      content_label: 'Pigmentfläckar i ryggen',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar i ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar i ryggen',
      booking_url_title: 'Boka behandling mot pigmentfläckar i ryggen',
      image: 'bilder/hudproblem/424x324/pigmentflackar-rygg.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar i ryggen',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['hudforandringar-rygg'] = new Problem(
      button_label: 'Hudförändringar på ryggen',
      content_label: 'Hudförändringar på ryggen',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på ryggen',
      booking_url_title: 'Boka behandling mot hudförändringar på ryggen',
      image: 'bilder/hudproblem/424x324/hudforandringar-rygg.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på ryggen',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['operations-skadearr-rygg'] = new Problem(
      button_label: 'Operations & Skadeärr på ryggen',
      content_label: 'Operations & Skadeärr på ryggen',
      url: 'hudproblem/operations-skadearr/',
      url_title: 'Läs mer information om Operations & Skadeärr på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på ryggen',
      booking_url_title: 'Boka behandlingoperations & skadeärr på ryggen',
      image: 'bilder/hudproblem/424x324/operations-skadearr-rygg.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på ryggen',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-rygg'] = new Problem(
      button_label: 'Oönskat hår på ryggen',
      content_label: 'Oönskat hår på ryggen',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår på ryggen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på ryggen',
      booking_url_title: 'Boka behandling mot oönskat hår på ryggen',
      image: 'bilder/hudproblem/424x324/oonskat-har-rygg.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på ryggen',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['akne-brost'] = new Problem(
      button_label: 'Akne på bröstet',
      content_label: 'Akne på bröstet',
      url: 'acne-brost.php',
      url_title: 'Läs mer information om Akne på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på bröstet',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på bröstet',
      image: 'bilder/hudproblem/424x324/akne-brost.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på bröstet',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-brost'] = new Problem(
      button_label: 'Akneärr på bröstet',
      content_label: 'Akneärr på bröstet',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr på bröstet',
      booking_url_title: 'Boka behandling mot akneärr på bröstet',
      image: 'bilder/hudproblem/424x324/acnearr-brost.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr på bröstet',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av olika typer av akne hy. De kan vara gropig hy eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-brost'] = new Problem(
      button_label: 'Finnar på bröstet',
      content_label: 'Finnar på bröstet',
      url: 'finnar-brost.php',
      url_title: 'Läs mer information om Finnar på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på bröstet',
      booking_url_title: 'Boka behandling mot finnar på bröstet',
      image: 'bilder/hudproblem/424x324/finnar-brost.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på bröstet',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-brost'] = new Problem(
      button_label: 'Ärr från finnar på bröstet',
      content_label: 'Ärr från finnar på bröstet',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar på bröstet',
      booking_url_title: 'Boka behandling mot ärr från finnar på bröstet',
      image: 'bilder/hudproblem/424x324/arr-fran-finnar-brost.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar på bröstet',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['pormaskar-brost'] = new Problem(
      button_label: 'Pormaskar på bröstet',
      content_label: 'Pormaskar på bröstet',
      url: 'pormaskar-brost.php',
      url_title: 'Läs mer information om Pormaskar på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på bröstet',
      booking_url_title: 'Boka behandling mot pormaskar på bröstet',
      image: 'bilder/hudproblem/424x324/pormaskar-brost.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på bröstet',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['pigmentflackar-brost'] = new Problem(
      button_label: 'Pigmentfläckar i bröstet',
      content_label: 'Pigmentfläckar i bröstet',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar i bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar i bröstet',
      booking_url_title: 'Boka behandling mot pigmentfläckar i bröstet',
      image: 'bilder/hudproblem/424x324/pigmentflackar-brost.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar i bröstet',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['hudforandringar-brost'] = new Problem(
      button_label: 'Hudförändringar på bröstet',
      content_label: 'Hudförändringar på bröstet',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på bröstet',
      booking_url_title: 'Boka behandling mot hudförändringar på bröstet',
      image: 'bilder/hudproblem/424x324/hudforandringar-brost.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på bröstet',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['operations-skadearr-brost'] = new Problem(
      button_label: 'Operations & Skadeärr på bröstet',
      content_label: 'Operations & Skadeärr på bröstet',
      url: 'hudproblem/operations-skadearr/',
      url_title: 'Läs mer information om Operations & Skadeärr på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på bröstet',
      booking_url_title: 'Boka behandlingoperations & skadeärr på bröstet',
      image: 'bilder/hudproblem/424x324/operations-skadearr-brost.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på bröstet',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-brost'] = new Problem(
      button_label: 'Oönskat hår på bröstet',
      content_label: 'Oönskat hår på bröstet',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår på bröstet',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på bröstet',
      booking_url_title: 'Boka behandling mot oönskat hår på bröstet',
      image: 'bilder/hudproblem/424x324/oonskat-har-brost.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på bröstet',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['akne-panna'] = new Problem(
      button_label: 'Akne i pannan',
      content_label: 'Akne i pannan',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne i pannan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne i pannan',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne i pannan',
      image: 'bilder/hudproblem/424x324/akne-panna.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne i pannan',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['finnar-panna'] = new Problem(
      button_label: 'Finnar i pannan',
      content_label: 'Finnar i pannan',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar i pannan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar i pannan',
      booking_url_title: 'Boka behandling mot finnar i pannan',
      image: 'bilder/hudproblem/424x324/finnar-panna.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar i pannan',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['pormaskar-panna'] = new Problem(
      button_label: 'Pormaskar i pannan',
      content_label: 'Pormaskar i pannan',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar i pannan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar i pannan',
      booking_url_title: 'Boka behandling mot pormaskar i pannan',
      image: 'bilder/hudproblem/424x324/pormaskar-panna.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar i pannan',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['hudforandringar-panna'] = new Problem(
      button_label: 'Hudförändringar i pannan',
      content_label: 'Hudförändringar i pannan',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar i pannan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar i pannan',
      booking_url_title: 'Boka behandling mot hudförändringar i pannan',
      image: 'bilder/hudproblem/424x324/hudforandringar-panna.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar i pannan',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['akne-kinder'] = new Problem(
      button_label: 'Akne på kinderna',
      content_label: 'Akne på kinderna',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på kinderna',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på kinderna',
      image: 'bilder/hudproblem/424x324/akne-kinder.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på kinderna',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-kinder'] = new Problem(
      button_label: 'Akneärr på kinderna',
      content_label: 'Akneärr på kinderna',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr på kinderna',
      booking_url_title: 'Boka behandling mot akneärr på kinderna',
      image: 'bilder/hudproblem/424x324/acnearr-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr på kinderna',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av olika typer av akne hy. De kan vara gropig hy eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-kinder'] = new Problem(
      button_label: 'Finnar på kinderna',
      content_label: 'Finnar på kinderna',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på kinderna',
      booking_url_title: 'Boka behandling mot finnar på kinderna',
      image: 'bilder/hudproblem/424x324/finnar-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på kinderna',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['rosacea-kinder'] = new Problem(
      button_label: 'Rosacea på kinderna',
      content_label: 'Rosacea på kinderna',
      url: 'rosacea.php',
      url_title: 'Läs mer information om Rosacea på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea på kinderna',
      booking_url_title: 'Boka behandling mot rosacea på kinderna',
      image: 'bilder/hudproblem/424x324/rosacea-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea på kinderna',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet på kinderna och nästan.'
);
$problems['ytliga-blodkar-kinder'] = new Problem(
      button_label: 'Ytliga Blodkärl på kinderna',
      content_label: 'Ytliga Blodkärl på kinderna',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl på kinderna',
      booking_url_title: 'Boka behandling mot ytliga blodkärl på kinderna',
      image: 'bilder/hudproblem/424x324/ytliga-blodkarl-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl på kinderna',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar-kinder'] = new Problem(
      button_label: 'Pormaskar på kinderna',
      content_label: 'Pormaskar på kinderna',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på kinderna',
      booking_url_title: 'Boka behandling mot pormaskar på kinderna',
      image: 'bilder/hudproblem/424x324/pormaskar-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på kinderna',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-kinder'] = new Problem(
      button_label: 'Stora porer på kinderna',
      content_label: 'Stora porer på kinderna',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer på kinderna',
      booking_url_title: 'Boka behandling mot stora porer på kinderna',
      image: 'bilder/hudproblem/424x324/stora-porer-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer på kinderna',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['pigmentflackar-kinder'] = new Problem(
      button_label: 'Pigmentfläckar på kinderna',
      content_label: 'Pigmentfläckar på kinderna',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar på kinderna',
      booking_url_title: 'Boka behandling mot pigmentfläckar på kinderna',
      image: 'bilder/hudproblem/424x324/pigmentflackar-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar på kinderna',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['milier-kinder'] = new Problem(
      button_label: 'Milier på kinderna',
      content_label: 'Milier på kinderna',
      url: 'milier.php',
      url_title: 'Läs mer information om Milier på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka konsultation mot milier på kinderna',
      booking_url_title: 'Boka behandling mot milier på kinderna',
      image: 'bilder/hudproblem/424x324/milier-kinder.webp',
      image_alt: 'Ansikte med hudproblemet Milier',
      image_title: 'Milier på kinderna',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen och på kinderna. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['hudforandringar-kinder'] = new Problem(
      button_label: 'Hudförändringar på kinderna',
      content_label: 'Hudförändringar på kinderna',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på kinderna',
      booking_url_title: 'Boka behandling mot hudförändringar på kinderna',
      image: 'bilder/hudproblem/424x324/hudforandringar-kinder.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på kinderna',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['oonskat-har-kinder'] = new Problem(
      button_label: 'Oönskat hår på kinderna',
      content_label: 'Oönskat hår på kinderna',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår på kinderna',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på kinderna',
      booking_url_title: 'Boka behandling mot oönskat hår på kinderna',
      image: 'bilder/hudproblem/424x324/oonskat-har-kinder.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på kinderna',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['akne-nasa'] = new Problem(
      button_label: 'Akne på näsan',
      content_label: 'Akne på näsan',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på näsan',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på näsan',
      image: 'bilder/hudproblem/424x324/akne-nasa.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på näsan',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['finnar-nasa'] = new Problem(
      button_label: 'Finnar på näsan',
      content_label: 'Finnar på näsan',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på näsan',
      booking_url_title: 'Boka behandling mot finnar på näsan',
      image: 'bilder/hudproblem/424x324/finnar-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på näsan',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['rosacea-nasa'] = new Problem(
      button_label: 'Rosacea på näsan',
      content_label: 'Rosacea på näsan',
      url: 'rhinophyma-rosacea.php',
      url_title: 'Läs mer information om Rosacea på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea på näsan',
      booking_url_title: 'Boka behandling mot rosacea på näsan',
      image: 'bilder/hudproblem/424x324/rosacea-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea på näsan',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet på kinderna och nästan.'
);
$problems['ytliga-blodkarl-nasa'] = new Problem(
      button_label: 'Ytliga Blodkärl på näsan',
      content_label: 'Ytliga Blodkärl på näsan',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl på näsan',
      booking_url_title: 'Boka behandling mot ytliga blodkärl på näsan',
      image: 'bilder/hudproblem/424x324/ytliga-blodkarl-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl på näsan',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar-nasa'] = new Problem(
      button_label: 'Pormaskar på näsan',
      content_label: 'Pormaskar på näsan',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på näsan',
      booking_url_title: 'Boka behandling mot pormaskar på näsan',
      image: 'bilder/hudproblem/424x324/pormaskar-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på näsan',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-nasa'] = new Problem(
      button_label: 'Stora porer på näsan',
      content_label: 'Stora porer på näsan',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer på näsan',
      booking_url_title: 'Boka behandling mot stora porer på näsan',
      image: 'bilder/hudproblem/424x324/stora-porer-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer på näsan',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['pigmentflackar-nasa'] = new Problem(
      button_label: 'Pigmentfläckar på näsan',
      content_label: 'Pigmentfläckar på näsan',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar på näsan',
      booking_url_title: 'Boka behandling mot pigmentfläckar på näsan',
      image: 'bilder/hudproblem/424x324/pigmentflackar-nasa.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar på näsan',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['hudforandringar-nasa'] = new Problem(
      button_label: 'Hudförändringar på näsan',
      content_label: 'Hudförändringar på näsan',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på näsan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på näsan',
      booking_url_title: 'Boka behandling mot hudförändringar på näsan',
      image: 'bilder/hudproblem/424x324/hudforandringar-nasa.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på näsan',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['perioral-dermatit-runt-munnen'] = new Problem(
      button_label: 'Perioral dermatit runt munnen',
      content_label: 'Perioral dermatit runt munnen',
      url: 'perioral-dermatit.php',
      url_title: 'Läs mer information om Perioral dermatit runt munnen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
      booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka konsultation mot perioral dermatit runt munnen',
      booking_url_title: 'Boka behandling mot perioral dermatit runt munnen',
      image: 'bilder/hudproblem/424x324/perioral-dermatit-runt-munnen.webp',
      image_alt: 'Ansikte med hudproblemet Perioral dermatit',
      image_title: 'Perioral dermatit runt munnen',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller finnar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar och hudirriterande ämnen.'
);
$problems['akne-runt-munnen'] = new Problem(
      button_label: 'Akne runt munnen',
      content_label: 'Akne runt munnen',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne runt munnen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne runt munnen',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne runt munnen',
      image: 'bilder/hudproblem/424x324/akne-runt-munnen.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne runt munnen',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['finnar-runt-munnen'] = new Problem(
      button_label: 'Finnar runt munnen',
      content_label: 'Finnar runt munnen',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar runt munnen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar runt munnen',
      booking_url_title: 'Boka behandling mot finnar runt munnen',
      image: 'bilder/hudproblem/424x324/finnar-runt-munnen.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar runt munnen',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['hudforandringar-runt-munnen'] = new Problem(
      button_label: 'Hudförändringar runt munnen',
      content_label: 'Hudförändringar runt munnen',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar runt munnen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar runt munnen',
      booking_url_title: 'Boka behandling mot hudförändringar runt munnen',
      image: 'bilder/hudproblem/424x324/hudforandringar-runt-munnen.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar runt munnen',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['oonskat-har-runt-munnen'] = new Problem(
      button_label: 'Oönskat hår runt munnen',
      content_label: 'Oönskat hår runt munnen',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår runt munnen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår runt munnen',
      booking_url_title: 'Boka behandling mot oönskat hår på runt munnen',
      image: 'bilder/hudproblem/424x324/oonskat-har-runt-munnen.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår runt munnen',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['akne-haka'] = new Problem(
      button_label: 'Akne på hakan',
      content_label: 'Akne på hakan',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne på hakan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på hakan',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på hakan',
      image: 'bilder/hudproblem/424x324/akne-haka.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på hakan',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['finnar-haka'] = new Problem(
      button_label: 'Finnar på hakan',
      content_label: 'Finnar på hakan',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar på hakan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på hakan',
      booking_url_title: 'Boka behandling mot finnar på hakan',
      image: 'bilder/hudproblem/424x324/finnar-haka.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på hakan',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['hudforandringar-haka'] = new Problem(
      button_label: 'Hudförändringar på hakan',
      content_label: 'Hudförändringar på hakan',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på hakan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på hakan',
      booking_url_title: 'Boka behandling mot hudförändringar på hakan',
      image: 'bilder/hudproblem/424x324/hudforandringar-haka.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på hakan',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['operations-skadearr-haka'] = new Problem(
      button_label: 'Operations & Skadeärr på hakan',
      content_label: 'Operations & Skadeärr på hakan',
      url: 'hudproblem/operations-skadearr/',
      url_title: 'Läs mer information om Operations & Skadeärr på hakan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på hakan',
      booking_url_title: 'Boka behandlingoperations & skadeärr på hakan',
      image: 'bilder/hudproblem/424x324/operations-skadearr-haka.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på hakan',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-haka'] = new Problem(
      button_label: 'Oönskat hår på hakan',
      content_label: 'Oönskat hår på hakan',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår på hakan',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på hakan',
      booking_url_title: 'Boka behandling mot oönskat hår på hakan',
      image: 'bilder/hudproblem/424x324/oonskat-har-haka.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på hakan',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['akne-kaklinje'] = new Problem(
      button_label: 'Akne på käklinjen',
      content_label: 'Akne på käklinjen',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne på käklinjen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på käklinjen',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på käklinjen',
      image: 'bilder/hudproblem/424x324/akne-kaklinje.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Olika typer av akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['finnar-kaklinje'] = new Problem(
      button_label: 'Finnar på käklinjen',
      content_label: 'Finnar på käklinjen',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar på käklinjen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på käklinjen',
      booking_url_title: 'Boka behandling mot finnar på käklinjen',
      image: 'bilder/hudproblem/424x324/finnar-kaklinje.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på käklinjen',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier där de orsakar olika typer av finnar. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['hudforandringar-kaklinje'] = new Problem(
      button_label: 'Hudförändringar på käklinjen',
      content_label: 'Hudförändringar på käklinjen',
      url: 'hudproblem/hudforandringar/',
      url_title: 'Läs mer information om Hudförändringar på käklinjen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på käklinjen',
      booking_url_title: 'Boka behandling mot hudförändringar på käklinjen',
      image: 'bilder/hudproblem/424x324/hudforandringar-kaklinje.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på käklinjen',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['oonskat-har-kaklinje'] = new Problem(
      button_label: 'Oönskat hår på käklinjen',
      content_label: 'Oönskat hår på käklinjen',
      url: 'hudproblem/oonskat-har/',
      url_title: 'Läs mer information om Oönskat hår på käklinjen',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på käklinjen',
      booking_url_title: 'Boka behandling mot oönskat hår på käklinjen',
      image: 'bilder/hudproblem/424x324/oonskat-har-kaklinje.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på käklinjen',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);

$default_problems = new ProblemArea(
      label: '',
      icon: '',
      problem_ids: array('akne', 'aknearr', 'finnar', 'arr-fran-finnar', 'rosacea', 'ytliga-blodkarl', 'pormaskar', 'stora-porer', 'blandhy', 'pigmentflackar', 'perioral-dermatit', 'seborre', 'milier', 'hudforandringar', 'mogen-hy', 'torr-kanslig-hy', 'bristningar', 'operations-skadearr', 'oonskat-har',),
);

$problem_areas = array(
      new ProblemArea(
            label: 'Ansikte',
            icon: 'area-face',
            problem_ids: array('akne-ansikte', 'aknearr-ansikte', 'finnar-ansikte', 'arr-fran-finnar-ansikte', 'rosacea-ansikte', 'ytliga-blodkarl-ansikte', 'pormaskar-ansikte', 'stora-porer-ansikte', 'pigmentflackar-ansikte', 'perioral-dermatit-ansikte', 'seborre-ansikte', 'milier-ansikte', 'hudforandringar-ansikte',  'mogen-hy-ansikte', 'torr-kanslig-hy-ansikte', 'operations-skadearr-ansikte', 'oonskat-har-ansikte',)
      ),
      new ProblemArea(
            label: 'Rygg',
            icon: 'area-back',
            problem_ids: array('akne-rygg', 'aknearr-rygg', 'finnar-rygg', 'arr-fran-finnar-rygg', 'pormaskar-rygg', 'pigmentflackar-rygg', 'hudforandringar-rygg', 'operations-skadearr-rygg', 'oonskat-har-rygg',)
      ),
      new ProblemArea(
            label: 'Bröst',
            icon: 'area-chest',
            problem_ids: array('akne-brost', 'aknearr-brost', 'finnar-brost', 'arr-fran-finnar-brost', 'pormaskar-brost', 'pigmentflackar-brost', 'hudforandringar-brost', 'operations-skadearr-brost', 'oonskat-har-brost',)
      ),
      new ProblemArea(
            label: 'Panna',
            icon: 'panna',
            problem_ids: array('akne-panna', 'finnar-panna', 'pormaskar-panna', 'hudforandringar-panna',)
      ),
      new ProblemArea(
            label: 'Kinder',
            icon: 'kinder',
            problem_ids: array('akne-kinder', 'aknearr-kinder', 'finnar-kinder', 'rosacea-kinder', 'ytliga-blodkarl-kinder', 'pormaskar-kinder', 'stora-porer-kinder', 'pigmentflackar-kinder', 'milier-kinder', 'hudforandringar-kinder', 'oonskat-har-kinder',)
      ),
      new ProblemArea(
            label: 'Näsa',
            icon: 'nasa',
            problem_ids: array('finnar-nasa', 'akne-nasa', 'rosacea-nasa', 'ytliga-blodkarl-nasa', 'pormaskar-nasa', 'stora-porer-nasa', 'pigmentflackar-nasa', 'hudforandringar-nasa',)
      ),
      new ProblemArea(
            label: 'Runt munnen',
            icon: 'mun',
            problem_ids: array('akne-runt-munnen', 'finnar-runt-munnen', 'perioral-dermatit-runt-munnen', 'hudforandringar-runt-munnen', 'oonskat-har-runt-munnen',)
      ),
      new ProblemArea(
            label: 'Haka',
            icon: 'haka',
            problem_ids: array('akne-haka', 'finnar-haka', 'hudforandringar-haka', 'operations-skadearr-haka', 'oonskat-har-haka',)
      ),
      new ProblemArea(
            label: 'Käklinje',
            icon: 'kaklinje',
            problem_ids: array('akne-kaklinje', 'finnar-kaklinje', 'hudforandringar-kaklinje', 'oonskat-har-kaklinje',)
      ),
);

$faq_categories = array(
      'Generellt' => array(
            new Question(
                  title: 'Vad ska jag göra om jag är osäker på vilket hudproblem jag har?',
                  text: '<p class="p200">Om du är osäker på vilket hudproblem du upplever, rekommenderar vi en kostnadsfri hudkonsultation med en av våra erfarna hudterapeuter. De kan ge dig en professionell bedömning och en personlig behandlingsplan baserat på din hudtyp och dess specifika problem.</p>'
            ),
            new Question(
                  title: 'Behandlar AcneSpecialisten alla typer av hudproblem?',
                  text: '<p class="p200">AcneSpecialisten har en bred expertis inom många olika hudproblem, inklusive men inte begränsat till akne, rosacea, pormaskar och de andra hudtyper som listas på den här sidan. Vi erbjuder skräddarsydda behandlingar och råd för en mängd olika hudtillstånd. Boka en konsultation hos oss så berättar vi mer om hur vi kan hjäpla dig.</p>'
            ),
            new Question(
                  title: 'Hur går jag tillväga för att behandla mitt hudproblem?',
                  text: '<p class="p200">För att hitta den mest effektiva behandlingen för ditt specifika hudproblem, börjar vi med en grundlig hudanalys under en konsultation. Utifrån denna analys kan vi sedan rekommendera en anpassad behandlingsplan med behandlingar och hudvårdssrutiner som är skräddarsydda för din huds unika behov.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra om jag plötsligt utvecklar problem?',
                  text: '<p class="p200">Om du plötsligt börjar uppleva hudproblem, är det viktigt att först identifiera orsaken. Detta kan göras genom en professionell hudanalys hos en av våra hudterapeuter. De kan också ge dig skräddarsydd rådgivning och behandlingsalternativ för att effektivt hantera ditt specifika hudtillstånd.</p>'
            ),
            new Question(
                  title: 'Vad händer om mitt hudproblem inte finns listat på er hemsida?',
                  text: '<p class="p200">Om ditt specifika hudproblem inte finns listat på vår hemsida, tveka inte att kontakta oss för en personlig konsultation. Våra hudterapeuter har bred erfarenhet och kan ofta erbjuda hjälp och rådgivning även för ovanliga eller sällsynta hudtillstånd. Vi är här för att hjälpa dig med alla dina hudvårdsbehov.</p>'
            ),
      ),
);

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2018',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_title: 'Hudterapeut Cazzandra Lindberg',
            image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_title: 'Hudterapeut Veronika Benedik',
            image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_title: 'Hudterapeut Julia Eklund',
            image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2022',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_title: 'Hudterapeut Vilma Libom',
            image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
      ),
);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hudproblem/" />

      <title class="l10n">Hudproblem i ansiktet? Boka en kostnadsfri konsultation</title>
      <meta name="title" content="Hudproblem i ansiktet? Boka en kostnadsfri konsultation" class="l10n">
      <meta name="description" content="Läs mer om hudproblem och hur du effektivt behandlar dem. Hos oss får du alltid gratis hudkonsultation och tillgång till en personlig hudterapeut." class="l10n">
      <meta name="keywords" content="hudproblem, hudproblem ansikte" class="l10n">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/hudproblem/problems.css">
      <?php echo '<script>var default_problems = ' . json_encode($default_problems->problem_ids) . ';</script>'; ?>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php'); ?>
                  <div class="container is-hidden-desktop" id="filters-touch-container">
                        <div id="filters-touch" class="mt-m">
                              <?php foreach ($problem_areas as $problem_area) { ?>
                                    <div class="filter-item" onclick="toggleProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                          <div class="close-icon">
                                                <?php icon('close') ?>
                                          </div>
                                          <?php icon($problem_area->icon) ?>
                                          <div class="b100 filter-item-label l10n">
                                                <?php echo $problem_area->label ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
                  <div class="container">
                        <div id="filters-desktop" class="is-hidden-touch">
                              <div id="filter-items">
                                    <?php foreach ($problem_areas as $problem_area) { ?>
                                          <div class="filter-item" onclick="toggleProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this);">
                                                <div class="close-icon">
                                                      <?php icon('close') ?>
                                                </div>
                                                <?php icon($problem_area->icon) ?>
                                                <div class="b100 filter-item-label l10n">
                                                      <?php echo $problem_area->label ?>
                                                </div>
                                          </div>
                                    <?php }
                                    ?>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-previous">
                                    <button class="round-large grey" aria-label="scroll">
                                          <?php icon('arrow-left') ?>
                                    </button>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-next">
                                    <button class="round-large grey" aria-label="scroll">
                                          <?php icon('arrow-right') ?>
                                    </button>
                              </div>
                        </div>
                        <div class="mt-xl">
                              <div id="banner-problem-areas">
                                    <?php foreach ($problems as $id => $problem) { ?>
                                          <div class="is-hidden" data-id="<?php echo $id ?>">
                                                <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="button b200 grey expand l10n" title="<?php echo $problem->content_label ?>"><?php echo $problem->button_label ?></a>
                                          </div>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="cards">
                  <div class="container">
                        <div id="card-grid">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="card-grid-item">
                                          <div class="problem-area-card" id="card-<?php echo $id ?>">
                                                <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>">
                                                      <div class="picture">
                                                            <img loading="lazy" src="<?php echo $problem->image ?>" alt="<?php echo $problem->image_alt ?>" title="<?php echo $problem->image_title ?>" width="424" height="324" />
                                                      </div>
                                                </a>
                                                <div class="problem-area-card-content">
                                                      <div class="pac-info">
                                                            <h3 class="h300"><?php echo $problem->content_label ?></h3>
                                                            <p class="mt-xs"><?php echo $problem->info ?></p>
                                                            <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="mt-m button is-hidden-tablet outline expand l10n" title="Läs mer">Läs mer</a>
                                                            <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="mt-m button text is-hidden-mobile compact l10n" title="Läs mer">Läs mer</a>
                                                      </div>
                                                      <div class="is-hidden-tablet">
                                                            <hr>
                                                            <a href="<?php echo $problem->consultation_url ?>" title="<?php echo $problem->consultation_url_title ?>" class="button expand l10n" title="Boka konsultation">Boka Konsultation</a>
                                                            <a href="<?php echo $problem->booking_url ?>" title="<?php echo $problem->booking_url_title ?>" class="mt-s button expand l10n" title="Boka behandling">Boka Behandling</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <hr>
                                                            <div class="columns is-multiline">
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="<?php echo $problem->consultation_url ?>" title="<?php echo $problem->consultation_url_title ?>" class="button expand l10n" title="Boka konsultation">Boka Konsultation</a>
                                                                  </div>
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="<?php echo $problem->booking_url ?>" title="<?php echo $problem->booking_url_title ?>" class="button expand l10n" title="Boka behandling">Boka Behandling</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </section>
            <section id="consultation-banner">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
                  </div>
            </section>
            <section id="results">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php'); ?>
                  </div>
            </section>
            <section id="reviews">
                  <div class="container">
                        <h2 class="big l10n">Omdömen</h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
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
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" title="Läs alla våra frågor och svar" href="fragor-svar.php">Se fler frågor & svar</a>
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Våra hudterapeuter</h2>
                              <a href="/hudterapeut/" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla våra hudterapeuter</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut/" title="Se alla våra hudterapeuter">Se alla våra hudterapeuter</a>
                  </div>
            </section>
            <section id="brands">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="varumarken/" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="hudproblem/problems.js"></script>
      <script>
            toggleProblems('<?php echo join(',', $default_problems->problem_ids) ?>');
      </script>
</body>

</html>