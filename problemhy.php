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
      public function __construct($label, $url, $url_title, $consultation_url, $consultation_url_title, $booking_url, $booking_url_title, $image, $image_title, $image_alt, $info)
      {
            $this->label = $label;
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
      public string $label;
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

$problems['akne'] = new Problem(
      label: 'Akne',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr'] = new Problem(
      label: 'Akneärr',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr',
      booking_url_title: 'Boka behandling mot akneärr',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av akne. De kan vara gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar'] = new Problem(
      label: 'Finnar',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar',
      booking_url_title: 'Boka behandling mot finnar',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar'] = new Problem(
      label: 'Ärr från finnar',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar',
      booking_url_title: 'Boka behandling mot ärr från finnar',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['rosacea'] = new Problem(
      label: 'Rosacea',
      url: 'rosacea.php',
      url_title: 'Läs mer information om Rosacea',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea',
      booking_url_title: 'Boka behandling mot rosacea',
      image: 'images/problems/424x324/rosacea.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet på kinderna och nästan.'
);
$problems['ytliga-blodkarl'] = new Problem(
      label: 'Ytliga Blodkärl',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl',
      booking_url_title: 'Boka behandling mot ytliga blodkärl',
      image: 'images/problems/424x324/ytliga-blodkarl.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar'] = new Problem(
      label: 'Pormaskar',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar',
      booking_url_title: 'Boka behandling mot pormaskar',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer'] = new Problem(
      label: 'Stora porer',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer',
      booking_url_title: 'Boka behandling mot stora porer',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['blandhy'] = new Problem(
      label: 'Blandhy',
      url: 'blandhy.php',
      url_title: 'Läs mer information om Blandhy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka konsultation mot blandhy',
      booking_url_title: 'Boka behandling mot blandhy',
      image: 'images/problems/424x324/blandhy.webp',
      image_alt: 'Ansikte med hudproblemet Blandhy',
      image_title: 'Blandhy',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torra. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg.'
);
$problems['pigmentflackar'] = new Problem(
      label: 'Pigmentfläckar',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar',
      booking_url_title: 'Boka behandling mot pigmentfläckar',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['perioral-dermatit'] = new Problem(
      label: 'Perioral dermatit',
      url: 'perioral-dermatit.php',
      url_title: 'Läs mer information om Perioral dermatit',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PerioralDermatitis',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka konsultation mot perioral dermatit',
      booking_url_title: 'Boka behandling mot perioral dermatit',
      image: 'images/problems/424x324/perioral-dermatit.webp',
      image_alt: 'Ansikte med hudproblemet Perioral dermatit',
      image_title: 'Perioral dermatit',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller finnar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar och hudirriterande ämnen.'
);
$problems['seborre'] = new Problem(
      label: 'Seborré',
      url: 'seborre.php',
      url_title: 'Läs mer information om Seborré',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Seborrea',
      consultation_url_title: 'Boka konsultation mot seborré',
      booking_url_title: 'Boka behandling mot seborré',
      image: 'images/problems/424x324/seborre.webp',
      image_alt: 'Ansikte med hudproblemet Seborré',
      image_title: 'Seborré',
      info: 'Detta tillstånd är karakteriserat av överdriven produktion av talg, vilket leder till en oljig hudton och ibland tillstånd som mjäll. Det kan påverka olika områden av kroppen, inklusive hårbotten, ansiktet och bröstet, och varierar i svårighetsgrad.'
);
$problems['milier'] = new Problem(
      label: 'Milier',
      url: 'milier.php',
      url_title: 'Läs mer information om Milier',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka konsultation mot milier',
      booking_url_title: 'Boka behandling mot milier',
      image: 'images/problems/424x324/milier.webp',
      image_alt: 'Ansikte med hudproblemet Milier',
      image_title: 'Milier',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen och på kinderna. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['hudforandringar'] = new Problem(
      label: 'Hudförändringar',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar',
      booking_url_title: 'Boka behandling mot hudförändringar',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['mogen-hy'] = new Problem(
      label: 'Mogen Hy',
      url: 'mogen-hy.php',
      url_title: 'Läs mer information om Mogen Hy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka konsultation mot mogen hy',
      booking_url_title: 'Boka behandling mot mogen hy',
      image: 'images/problems/424x324/mogen-hy.webp',
      image_alt: 'Ansikte med hudproblemet Mogen Hy',
      image_title: 'Mogen Hy',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['torr-kanslig-hy'] = new Problem(
      label: 'Torr & Känslig hy',
      url: 'torr-hy.php',
      url_title: 'Läs mer information om Torr & Känslig hy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_DrySensetiveSkin',
      consultation_url_title: 'Boka konsultation mot torr & känslig hy',
      booking_url_title: 'Boka behandling mot torr & känslig hy',
      image: 'images/problems/424x324/torr-kanslig-hy.webp',
      image_alt: 'Ansikte med hudproblemet Torr & Känslig hy',
      image_title: 'Torr & Känslig hy',
      info: 'Denna hudtyp är benägen att bli torr, stram, röd och irriterad och kan reagera negativt på vissa hudvårdsprodukter, klimatförändringar eller föroreningar. Torr och känslig hud kräver särskilt skonsam vård för att bibehålla dess barriärfunktion och förhindra ytterligare irritation.'
);
$problems['bristningar'] = new Problem(
      label: 'Bristningar',
      url: 'problem/bristningar',
      url_title: 'Läs mer information om Bristningar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_StrechMarks',
      consultation_url_title: 'Boka konsultation mot bristningar',
      booking_url_title: 'Boka behandling mot bristningar',
      image: 'images/problems/424x324/bristningar.webp',
      image_alt: 'Mage med hudproblemet Bristningar',
      image_title: 'Bristningar',
      info: 'Dessa är linjer eller märken på huden som uppstår när huden sträcks snabbt, som under graviditet, pubertet eller snabb viktökning. De börjar ofta som röda eller lila linjer och bleknar över tid till en mer silvervit färg. Bristningar är ett resultat av bristningar i hudens kollagen och elastin, vilket minskar hudens elasticitet och styrka.'
);
$problems['operations-skadearr'] = new Problem(
      label: 'Operations & Skadeärr',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr',
      booking_url_title: 'Boka behandlingoperations & skadeärr',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har'] = new Problem(
      label: 'Oönskat hår',
      url: 'problem/oonskat-har',
      url_title: 'Läs mer information om Oönskat hår',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår',
      booking_url_title: 'Boka behandling mot oönskat hår',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);





$problems['akne-ansikte'] = new Problem(
      label: 'Akne i ansiktet',
      url: 'acne-ansikte.php',
      url_title: 'Läs mer information om Akne i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne i ansiktet',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne i ansiktet',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne i ansiktet',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-ansikte'] = new Problem(
      label: 'Akneärr i ansiktet',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr i ansiktet',
      booking_url_title: 'Boka behandling mot akneärr i ansiktet',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr i ansiktet',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av akne. De kan vara gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-ansikte'] = new Problem(
      label: 'Finnar i ansiktet',
      url: 'finnar-ansikte.php',
      url_title: 'Läs mer information om Finnar i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar i ansiktet',
      booking_url_title: 'Boka behandling mot finnar i ansiktet',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar i ansiktet',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-ansikte'] = new Problem(
      label: 'Ärr från finnar i ansiktet',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar i ansiktet',
      booking_url_title: 'Boka behandling mot ärr från finnar i ansiktet',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar i ansiktet',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['rosacea-ansikte'] = new Problem(
      label: 'Rosacea i ansiktet',
      url: 'rosacea.php',
      url_title: 'Läs mer information om Rosacea i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka konsultation mot rosacea i ansiktet',
      booking_url_title: 'Boka behandling mot rosacea i ansiktet',
      image: 'images/problems/424x324/rosacea.webp',
      image_alt: 'Ansikte med hudproblemet Rosacea',
      image_title: 'Rosacea i ansiktet',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, varfyllda bölder. Det kan också involvera hettande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet på kinderna och nästan.'
);
$problems['ytliga-blodkarl-ansikte'] = new Problem(
      label: 'Ytliga Blodkärl i ansiktet',
      url: 'ytliga-blodkarl.php',
      url_title: 'Läs mer information om Ytliga Blodkärl i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka konsultation mot ytliga blodkärl i ansiktet',
      booking_url_title: 'Boka behandling mot ytliga blodkärl i ansiktet',
      image: 'images/problems/424x324/ytliga-blodkarl.webp',
      image_alt: 'Ansikte med hudproblemet Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl i ansiktet',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, synliga blodkärl som ligger nära hudytan. De är vanligast i ansiktet och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);
$problems['pormaskar-ansikte'] = new Problem(
      label: 'Pormaskar i ansiktet',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar i ansiktet',
      booking_url_title: 'Boka behandling mot pormaskar i ansiktet',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar i ansiktet',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-ansikte'] = new Problem(
      label: 'Stora porer i ansiktet',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer i ansiktet',
      booking_url_title: 'Boka behandling mot stora porer i ansiktet',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer i ansiktet',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['blandhy-ansikte'] = new Problem(
      label: 'Blandhy i ansiktet',
      url: 'blandhy.php',
      url_title: 'Läs mer information om Blandhy i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka konsultation mot blandhy i ansiktet',
      booking_url_title: 'Boka behandling mot blandhy i ansiktet',
      image: 'images/problems/424x324/blandhy.webp',
      image_alt: 'Ansikte med hudproblemet Blandhy',
      image_title: 'Blandhy i ansiktet',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torra. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg.'
);
$problems['pigmentflackar-ansikte'] = new Problem(
      label: 'Pigmentfläckar i ansiktet',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar i ansiktet',
      booking_url_title: 'Boka behandling mot pigmentfläckar i ansiktet',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar i ansiktet',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['perioral-dermatit-ansikte'] = new Problem(
      label: 'Perioral dermatit i ansiktet',
      url: 'perioral-dermatit.php',
      url_title: 'Läs mer information om Perioral dermatit i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PerioralDermatitis',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka konsultation mot perioral dermatit i ansiktet',
      booking_url_title: 'Boka behandling mot perioral dermatit i ansiktet',
      image: 'images/problems/424x324/perioral-dermatit.webp',
      image_alt: 'Ansikte med hudproblemet Perioral dermatit',
      image_title: 'Perioral dermatit i ansiktet',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller finnar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar och hudirriterande ämnen.'
);
$problems['seborre-ansikte'] = new Problem(
      label: 'Seborré i ansiktet',
      url: 'seborre.php',
      url_title: 'Läs mer information om Seborré i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Seborrea',
      consultation_url_title: 'Boka konsultation mot seborré i ansiktet',
      booking_url_title: 'Boka behandling mot seborré i ansiktet',
      image: 'images/problems/424x324/seborre.webp',
      image_alt: 'Ansikte med hudproblemet Seborré',
      image_title: 'Seborré i ansiktet',
      info: 'Detta tillstånd är karakteriserat av överdriven produktion av talg, vilket leder till en oljig hudton och ibland tillstånd som mjäll. Det kan påverka olika områden av kroppen, inklusive hårbotten, ansiktet och bröstet, och varierar i svårighetsgrad.'
);
$problems['milier-ansikte'] = new Problem(
      label: 'Milier i ansiktet',
      url: 'milier.php',
      url_title: 'Läs mer information om Milier i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka konsultation mot milier i ansiktet',
      booking_url_title: 'Boka behandling mot milier i ansiktet',
      image: 'images/problems/424x324/milier.webp',
      image_alt: 'Ansikte med hudproblemet Milier',
      image_title: 'Milier i ansiktet',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen och på kinderna. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['hudforandringar-ansikte'] = new Problem(
      label: 'Hudförändringar i ansiktet',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar i ansiktet',
      booking_url_title: 'Boka behandling mot hudförändringar i ansiktet',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar i ansiktet',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['mogen-hy-ansikte'] = new Problem(
      label: 'Mogen Hy i ansiktet',
      url: 'mogen-hy.php',
      url_title: 'Läs mer information om Mogen Hy i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka konsultation mot mogen hy i ansiktet',
      booking_url_title: 'Boka behandling mot mogen hy i ansiktet',
      image: 'images/problems/424x324/mogen-hy.webp',
      image_alt: 'Ansikte med hudproblemet Mogen Hy',
      image_title: 'Mogen Hy i ansiktet',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['torr-kanslig-hy-ansikte'] = new Problem(
      label: 'Torr & Känslig hy i ansiktet',
      url: 'torr-hy.php',
      url_title: 'Läs mer information om Torr & Känslig hy i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_DrySensetiveSkin',
      consultation_url_title: 'Boka konsultation mot torr & känslig hy i ansiktet',
      booking_url_title: 'Boka behandling mot torr & känslig hy i ansiktet',
      image: 'images/problems/424x324/torr-kanslig-hy.webp',
      image_alt: 'Ansikte med hudproblemet Torr & Känslig hy',
      image_title: 'Torr & Känslig hy i ansiktet',
      info: 'Denna hudtyp är benägen att bli torr, stram, röd och irriterad och kan reagera negativt på vissa hudvårdsprodukter, klimatförändringar eller föroreningar. Torr och känslig hud kräver särskilt skonsam vård för att bibehålla dess barriärfunktion och förhindra ytterligare irritation.'
);
$problems['operations-skadearr-ansikte'] = new Problem(
      label: 'Operations & Skadeärr i ansiktet',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr i ansiktet',
      booking_url_title: 'Boka behandlingoperations & skadeärr i ansiktet',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr i ansiktet',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-ansikte'] = new Problem(
      label: 'Oönskat hår i ansiktet',
      url: 'problem/oonskat-har',
      url_title: 'Läs mer information om Oönskat hår i ansiktet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår i ansiktet',
      booking_url_title: 'Boka behandling mot oönskat hår i ansiktet',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår i ansiktet',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);





$problems['pigmentflackar-kropp'] = new Problem(
      label: 'Pigmentfläckar på kroppen',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar på kroppen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar på kroppen',
      booking_url_title: 'Boka behandling mot pigmentfläckar på kroppen',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar på kroppen',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['hudforandringar-kropp'] = new Problem(
      label: 'Hudförändringar på kroppen',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar på kroppen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på kroppen',
      booking_url_title: 'Boka behandling mot hudförändringar på kroppen',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på kroppen',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['bristningar-kropp'] = new Problem(
      label: 'Bristningar på kroppen',
      url: 'problem/bristningar',
      url_title: 'Läs mer information om Bristningar på kroppen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_StrechMarks',
      consultation_url_title: 'Boka konsultation mot bristningar på kroppen',
      booking_url_title: 'Boka behandling mot bristningar på kroppen',
      image: 'images/problems/424x324/bristningar.webp',
      image_alt: 'Mage med hudproblemet Bristningar',
      image_title: 'Bristningar på kroppen',
      info: 'Dessa är linjer eller märken på huden som uppstår när huden sträcks snabbt, som under graviditet, pubertet eller snabb viktökning. De börjar ofta som röda eller lila linjer och bleknar över tid till en mer silvervit färg. Bristningar är ett resultat av bristningar i hudens kollagen och elastin, vilket minskar hudens elasticitet och styrka.'
);
$problems['operations-skadearr-kropp'] = new Problem(
      label: 'Operations & Skadeärr på kroppen',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr på kroppen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på kroppen',
      booking_url_title: 'Boka behandlingoperations & skadeärr på kroppen',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på kroppen',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-kropp'] = new Problem(
      label: 'Oönskat hår på kroppen',
      url: 'problem/oonskat-har',
      url_title: 'Läs mer information om Oönskat hår på kroppen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på kroppen',
      booking_url_title: 'Boka behandling mot oönskat hår på kroppen',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på kroppen',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);





$problems['akne-rygg'] = new Problem(
      label: 'Akne på ryggen',
      url: 'acne-rygg.php',
      url_title: 'Läs mer information om Akne på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på ryggen',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på ryggen',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på ryggen',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-rygg'] = new Problem(
      label: 'Akneärr på ryggen',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr på ryggen',
      booking_url_title: 'Boka behandling mot akneärr på ryggen',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr på ryggen',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av akne. De kan vara gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-rygg'] = new Problem(
      label: 'Finnar på ryggen',
      url: 'finnar-rygg.php',
      url_title: 'Läs mer information om Finnar på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på ryggen',
      booking_url_title: 'Boka behandling mot finnar på ryggen',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på ryggen',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-rygg'] = new Problem(
      label: 'Ärr från finnar på ryggen',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar på ryggen',
      booking_url_title: 'Boka behandling mot ärr från finnar på ryggen',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar på ryggen',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['pormaskar-rygg'] = new Problem(
      label: 'Pormaskar på ryggen',
      url: 'pormaskar-rygg.php',
      url_title: 'Läs mer information om Pormaskar på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på ryggen',
      booking_url_title: 'Boka behandling mot pormaskar på ryggen',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på ryggen',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-rygg'] = new Problem(
      label: 'Stora porer på ryggen',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer på ryggen',
      booking_url_title: 'Boka behandling mot stora porer på ryggen',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer på ryggen',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['hudforandringar-rygg'] = new Problem(
      label: 'Hudförändringar på ryggen',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på ryggen',
      booking_url_title: 'Boka behandling mot hudförändringar på ryggen',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på ryggen',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['operations-skadearr-rygg'] = new Problem(
      label: 'Operations & Skadeärr på ryggen',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på ryggen',
      booking_url_title: 'Boka behandlingoperations & skadeärr på ryggen',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på ryggen',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-rygg'] = new Problem(
      label: 'Oönskat hår på ryggen',
      url: 'problem/oonskat-har',
      url_title: 'Läs mer information om Oönskat hår på ryggen',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på ryggen',
      booking_url_title: 'Boka behandling mot oönskat hår på ryggen',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på ryggen',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);





$problems['akne-brost'] = new Problem(
      label: 'Akne på bröstet',
      url: 'acne-brost.php',
      url_title: 'Läs mer information om Akne på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne på bröstet',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne på bröstet',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne på bröstet',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-brost'] = new Problem(
      label: 'Akneärr på bröstet',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr på bröstet',
      booking_url_title: 'Boka behandling mot akneärr på bröstet',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr på bröstet',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av akne. De kan vara gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-brost'] = new Problem(
      label: 'Finnar på bröstet',
      url: 'finnar-brost.php',
      url_title: 'Läs mer information om Finnar på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar på bröstet',
      booking_url_title: 'Boka behandling mot finnar på bröstet',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar på bröstet',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-brost'] = new Problem(
      label: 'Ärr från finnar på bröstet',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar på bröstet',
      booking_url_title: 'Boka behandling mot ärr från finnar på bröstet',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar på bröstet',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['pormaskar-brost'] = new Problem(
      label: 'Pormaskar på bröstet',
      url: 'pormaskar-brost.php',
      url_title: 'Läs mer information om Pormaskar på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar på bröstet',
      booking_url_title: 'Boka behandling mot pormaskar på bröstet',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar på bröstet',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-brost'] = new Problem(
      label: 'Stora porer på bröstet',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer på bröstet',
      booking_url_title: 'Boka behandling mot stora porer på bröstet',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer på bröstet',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['hudforandringar-brost'] = new Problem(
      label: 'Hudförändringar på bröstet',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar på bröstet',
      booking_url_title: 'Boka behandling mot hudförändringar på bröstet',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar på bröstet',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['operations-skadearr-brost'] = new Problem(
      label: 'Operations & Skadeärr på bröstet',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr på bröstet',
      booking_url_title: 'Boka behandlingoperations & skadeärr på bröstet',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr på bröstet',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['oonskat-har-brost'] = new Problem(
      label: 'Oönskat hår på bröstet',
      url: 'problem/oonskat-har',
      url_title: 'Läs mer information om Oönskat hår på bröstet',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka konsultation mot oönskat hår på bröstet',
      booking_url_title: 'Boka behandling mot oönskat hår på bröstet',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Bröst med hudproblemet Oönskat hår',
      image_title: 'Oönskat hår på bröstet',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);





$problems['akne-panna'] = new Problem(
      label: 'Akne i pannan',
      url: 'acne.php',
      url_title: 'Läs mer information om Akne i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka konsultation mot akne i pannan',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka behandling mot akne i pannan',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Ansikte med hudproblemet akne',
      image_title: 'Akne i pannan',
      info: 'Den vanligaste hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av finnar i form av papler och pustler. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, och genetiska faktorer.',
);
$problems['aknearr-panna'] = new Problem(
      label: 'Akneärr i pannan',
      url: 'acnearr.php',
      url_title: 'Läs mer information om Akneärr i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en konsultation mot akneärr i pannan',
      booking_url_title: 'Boka behandling mot akneärr i pannan',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Ansikte med hudproblemet Akneärr',
      image_title: 'Akneärr i pannan',
      info: 'Dessa ärr är en vanlig följd av akne och består av texturförändringar i huden efter skador orsakat av akne. De kan vara gropar eller fläckar och variera i storlek och djup. Ärrbildningen är ett resultat av hudens läkningsprocess och kan påverka både hudens utseende och struktur.'
);
$problems['finnar-panna'] = new Problem(
      label: 'Finnar i pannan',
      url: 'finnar.php',
      url_title: 'Läs mer information om Finnar i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka konsultation mot finnar i pannan',
      booking_url_title: 'Boka behandling mot finnar i pannan',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Ansikte med hudproblemet Finnar',
      image_title: 'Finnar i pannan',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad.'
);
$problems['arr-fran-finnar-panna'] = new Problem(
      label: 'Ärr från finnar i pannan',
      url: 'finnar-arr.php',
      url_title: 'Läs mer information om Ärr från finnar i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka konsultation mot ärr från finnar i pannan',
      booking_url_title: 'Boka behandling mot ärr från finnar i pannan',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ansikte med hudproblemet Ärr från finnar',
      image_title: 'Ärr från finnar i pannan',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen.'
);
$problems['pormaskar-panna'] = new Problem(
      label: 'Pormaskar i pannan',
      url: 'pormaskar.php',
      url_title: 'Läs mer information om Pormaskar i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka konsultation mot pormaskar i pannan',
      booking_url_title: 'Boka behandling mot pormaskar i pannan',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Ansikte med hudproblemet Pormaskar',
      image_title: 'Pormaskar i pannan',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'
);
$problems['stora-porer-panna'] = new Problem(
      label: 'Stora porer i pannan',
      url: 'stora-porer.php',
      url_title: 'Läs mer information om Stora porer i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka konsultation mot stora porer i pannan',
      booking_url_title: 'Boka behandling mot stora porer i pannan',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Ansikte med hudproblemet Stora porer',
      image_title: 'Stora porer i pannan',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['blandhy-panna'] = new Problem(
      label: 'Blandhy i pannan',
      url: 'blandhy.php',
      url_title: 'Läs mer information om Blandhy i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka konsultation mot blandhy i pannan',
      booking_url_title: 'Boka behandling mot blandhy i pannan',
      image: 'images/problems/424x324/blandhy.webp',
      image_alt: 'Ansikte med hudproblemet Blandhy',
      image_title: 'Blandhy i pannan',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torra. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg.'
);
$problems['pigmentflackar-panna'] = new Problem(
      label: 'Pigmentfläckar i pannan',
      url: 'pigmentflackar.php',
      url_title: 'Läs mer information om Pigmentfläckar i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka konsultation mot pigmentfläckar i pannan',
      booking_url_title: 'Boka behandling mot pigmentfläckar i pannan',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Ansikte med hudproblemet Pigmentfläckar',
      image_title: 'Pigmentfläckar i pannan',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['hudforandringar-panna'] = new Problem(
      label: 'Hudförändringar i pannan',
      url: 'problem/hudforandringar',
      url_title: 'Läs mer information om Hudförändringar i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka konsultation mot hudförändringar i pannan',
      booking_url_title: 'Boka behandling mot hudförändringar i pannan',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Rygg med hudproblemet Hudförändringar',
      image_title: 'Hudförändringar i pannan',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive födelsemärken, leverfläckar och hudflikar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och livsstil.'
);
$problems['mogen-hy-panna'] = new Problem(
      label: 'Mogen Hy i pannan',
      url: 'mogen-hy.php',
      url_title: 'Läs mer information om Mogen Hy i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka konsultation mot mogen hy i pannan',
      booking_url_title: 'Boka behandling mot mogen hy i pannan',
      image: 'images/problems/424x324/mogen-hy.webp',
      image_alt: 'Ansikte med hudproblemet Mogen Hy',
      image_title: 'Mogen Hy i pannan',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['operations-skadearr-panna'] = new Problem(
      label: 'Operations & Skadeärr i pannan',
      url: 'problemhy/operations-skadearr',
      url_title: 'Läs mer information om Operations & Skadeärr i pannan',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka konsultation operations & skadeärr i pannan',
      booking_url_title: 'Boka behandlingoperations & skadeärr i pannan',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Mage med hudproblemet Operations & Skadeärr',
      image_title: 'Operations & Skadeärr i pannan',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp eller skador och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);





$default_problems = new ProblemArea(
      label: '',
      icon: '',
      problem_ids: array('akne', 'aknearr', 'finnar', 'arr-fran-finnar', 'rosacea', 'ytliga-blodkarl', 'pormaskar', 'stora-porer', 'blandhy', 'pigmentflackar', 'perioral-dermatit',  'seborre', 'milier',  'hudforandringar',  'mogen-hy', 'torr-kanslig-hy', 'bristningar', 'operations-skadearr', 'oonskat-har',),
);

$problem_areas = array(
      new ProblemArea(
            label: 'Ansikte',
            icon: 'ansikte',
            problem_ids: array('akne-ansikte', 'aknearr-ansikte', 'finnar-ansikte', 'arr-fran-finnar-ansikte', 'rosacea-ansikte', 'ytliga-blodkarl-ansikte', 'pormaskar-ansikte', 'stora-porer-ansikte', 'blandhy-ansikte', 'pigmentflackar-ansikte', 'perioral-dermatit-ansikte', 'seborre-ansikte', 'milier-ansikte', 'hudforandringar-ansikte',  'mogen-hy-ansikte', 'torr-kanslig-hy-ansikte', 'operations-skadearr-ansikte', 'oonskat-har-ansikte',)
      ),
      new ProblemArea(
            label: 'Kropp',
            icon: 'kropp',
            problem_ids: array('pigmentflackar-kropp', 'hudforandringar-kropp', 'bristningar-kropp', 'operations-skadearr-kropp', 'oonskat-har-kropp',)
      ),
      new ProblemArea(
            label: 'Rygg',
            icon: 'rygg',
            problem_ids: array('akne-rygg', 'aknearr-rygg', 'finnar-rygg', 'arr-fran-finnar-rygg', 'pormaskar-rygg', 'stora-porer-rygg', 'hudforandringar-rygg', 'operations-skadearr-rygg', 'oonskat-har-rygg',)
      ),
      new ProblemArea(
            label: 'Bröst',
            icon: 'brost',
            problem_ids: array('akne-brost', 'aknearr-brost', 'finnar-brost', 'arr-fran-finnar-brost', 'pormaskar-brost', 'stora-porer-brost', 'hudforandringar-brost', 'operations-skadearr-brost', 'oonskat-har-brost',)
      ),
      new ProblemArea(
            label: 'Panna',
            icon: 'panna',
            problem_ids: array('akne-panna', 'aknearr-panna', 'finnar-panna', 'arr-fran-finnar-panna', 'pormaskar-panna', 'stora-porer-panna', 'blandhy-panna', 'pigmentflackar-panna', 'hudforandringar-panna','mogen-hy-panna',)
      ),
      new ProblemArea(
            label: 'Kinder',
            icon: 'kinder',
            problem_ids: array('akne-kinder', 'aknearr-kinder', 'finnar-kinder', 'arr-fran-finnar-kinder', 'rosacea-kinder', 'ytliga-blodkarl-kinder', 'pormaskar-kinder', 'stora-porer-kinder', 'blandhy-kinder', 'pigmentflackar-kinder', 'milier-kinder', 'hudforandringar-kinder', 'mogen-hy-kinder', 'torr-kanslig-hy-kinder', 'oonskat-har-kinder',)
      ),
      new ProblemArea(
            label: 'Näsa',
            icon: 'nasa',
            problem_ids: array('akne-nasa', 'aknearr-nasa', 'finnar-nasa', 'arr-fran-finnar-nasa', 'rosacea-nasa', 'ytliga-blodkarl-nasa', 'pormaskar-nasa', 'stora-porer-nasa', 'blandhy-nasa', 'pigmentflackar-nasa', 'perioral-dermatit-nasa', 'seborre-nasa', 'hudforandringar-nasa',)
      ),
      new ProblemArea(
            label: 'Runt munnen',
            icon: 'mun',
            problem_ids: array('akne-runt-munnen', 'finnar-munnen', 'pormaskar-munnen', 'pigmentflackar-munnen', 'perioral-dermatit-munnen', 'seborre-munnen', 'hudforandringar-munnen', 'mogen-hy-munnen', 'torr-kanslig-hy-munnen', 'oonskat-har-munnen',)
      ),
      new ProblemArea(
            label: 'Haka',
            icon: 'haka',
            problem_ids: array('akne-haka', 'aknearr-haka', 'finnar-haka', 'arr-fran-finnar-haka', 'pormaskar-haka', 'stora-porer-haka', 'perioral-dermatit-haka', 'hudforandringar-haka', 'operations-skadearr-haka', 'oonskat-har-haka',)
      ),
      new ProblemArea(
            label: 'Käklinje',
            icon: 'kaklinje',
            problem_ids: array('akne-kaklinje', 'aknearr-kaklinje', 'finnar-kaklinje', 'arr-fran-finnar-kaklinje', 'hudforandringar-kaklinje', 'oonskat-har-kaklinje',)
      ),
);

$path_segments = array(
      new PathSegment('Hudproblem', '/problemhy.php'),
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title>Behandling av Hudproblem | Acnespecialisten</title>
      <meta name="description" content="På Acnespecialisten erbjuder vi effektiva behandlingar mot en rad olika hudproblem, inklusive akne, rosacea, torr hud, och mer. Kontakta oss idag för en konsultation och ta det första steget mot en friskare och mer strålande hud.">
      <meta name="title" content="Behandling av Hudproblem | Acnespecialisten">
      <meta name="keywords" content="hudproblem, aknebehandling, rosaceabehandling, torr hud, fet hud, oren hud, ärrbehandling, akneärr, hudspecialist, hudklinik, hudvårdsrutiner">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="problem/problems.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner" class="sticky-badges-target">
                  <?php
                  $green_banner_content = new GreenBannerContent(
                        title: 'Hudproblem',
                        description: 'På Acnespecialisten arbetar vi med att behandla och förbättra huden genom att erbjuda skräddarsydda lösningar för varje enskilt hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har.',
                        description_extended: 'Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera ditt problem.',
                        button_url: 'gratis-hudkonsultation.php',
                        button_label: 'Boka en gratis hudkonsultation'
                  );
                  include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
                  ?>
                  <div class="container is-hidden-desktop" id="filters-touch-container">
                        <div id="filters-touch" class="mt-m">
                              <?php foreach ($problem_areas as $problem_area) { ?>
                                    <div class=" filter-item" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
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
                                          <div class="filter-item" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this);">
                                                <?php icon($problem_area->icon) ?>
                                                <div class="b100 filter-item-label l10n">
                                                      <?php echo $problem_area->label ?>
                                                </div>
                                          </div>
                                    <?php }
                                    ?>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-previous">
                                    <button class="round-large grey">
                                          <?php icon('arrow-left') ?>
                                    </button>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-next">
                                    <button class="round-large grey">
                                          <?php icon('arrow-right') ?>
                                    </button>
                              </div>
                        </div>
                        <div class="mt-xl">
                              <div class="columns is-multiline" id="banner-problem-areas">
                                    <?php foreach ($problems as $id => $problem) { ?>
                                          <div class="column is-one-fifth is-hidden" data-id="<?php echo $id ?>">
                                                <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="button b200 grey expand l10n" title="<?php echo $problem->label ?>"><?php echo $problem->label ?></a>
                                          </div>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="cards">
                  <div class="container">
                        <div class="columns is-multiline is-variable is-3">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-third">
                                          <div class="problem-area-card" id="card-<?php echo $id ?>">
                                                <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>">
                                                      <div class="picture">
                                                            <img src="<?php echo $problem->image ?>" alt="<?php echo $problem->image_alt ?>" title="<?php echo $problem->image_title ?>" width="424" height="324" />
                                                      </div>
                                                </a>
                                                <div class="problem-area-card-content">
                                                      <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>">
                                                            <h3 class="h300"><?php echo $problem->label ?></h3>
                                                            <p class="mt-xs"><?php echo $problem->info ?></p>
                                                      </a>
                                                      <div class="is-hidden-tablet">
                                                            <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="mt-m button outline expand l10n" title="Läs mer">Läs mer</a>
                                                            <hr>
                                                            <a href="<?php echo $problem->consultation_url ?>" title="<?php echo $problem->consultation_url_title ?>" class="button expand l10n" title="Boka konsultation">Boka Konsultation</a>
                                                            <a href="<?php echo $problem->booking_url ?>" title="<?php echo $problem->booking_url_title ?>" class="mt-s button expand l10n" title="Boka behandling">Boka Behandling</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="mt-m button text compact l10n" title="Läs mer">Läs mer</a>
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
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
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
                        <span class="l10n">Se alla våra specialister</span>
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists" title="Se alla våra specialister">Se alla våra specialister</a>
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
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problem/problems.js"></script>
      <script>
            showProblems('<?php echo join(',', $default_problems->problem_ids) ?>');
      </script>
</body>

</html>