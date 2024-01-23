<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<?php
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
      url_title: 'Läs mer om detaljerd information om Akne',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Bild på akne i ansiktet',
      image_title: 'Akne',
      info: 'En vanlig hudsjukdom som involverar inflammation i talgkörtlarna, vilket leder till bildandet av pormaskar, finnar och ibland smärtsamma knölar. Det är ett resultat av en kombination av överproduktion av talg, tilltäppning av hårfolliklar och bakterietillväxt. Akne kan vara emotionellt påfrestande och variera i svårighetsgrad, ofta påverkad av hormonella förändringar, stress, diet och genetiska faktorer.',
);
$problems['aknearr'] = new Problem(
      label: 'Akneärr',
      url: 'acnearr.php',
      url_title: 'Akneärr',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Akneärr',
      image_title: 'Akneärr',
      info: 'Dessa ärr är en vanlig följd av svår akne och består av texturförändringar i huden efter läkning av akne. De kan vara gropiga, kantiga eller upphöjda och variera i storlek och djup. Ärrbildningen är ett resultat av kroppens läkningsprocess och kan påverka både hudens utseende och struktur, ofta krävande längre tid för att blekna eller förbättras.'
);
$problems['arr-fran-finnar'] = new Problem(
      label: 'Ärr från finnar',
      url: 'finnar-arr.php',
      url_title: 'Ärr från finnar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ärr från finnar',
      image_title: 'Ärr från finnar',
      info: 'Ärr som bildas när inflammerade finnar läker och lämnar permanenta märken eller fördjupningar i huden. Dessa ärr kan variera i storlek och form och påverka hudens släthet och jämnhet. Ärrbildningen beror på hur huden läker efter inflammationen och kan påverka personens självkänsla.'
);
$problems['blandhy'] = new Problem(
      label: 'Blandhy',
      url: 'blandhy.php',
      url_title: 'Blandhy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/blandhy.webp',
      image_alt: 'Blandhy',
      image_title: 'Blandhy',
      info: 'En hudtyp där vissa områden, speciellt T-zonen (panna, näsa, haka), är oljiga, medan kinderna och andra delar av ansiktet kan vara normala eller torra. Denna blandning av hudtyper kräver en balanserad hudvårdsrutin som kan hantera både torrhet och överproduktion av talg. Blandhy kan vara särskilt utmanande att sköta eftersom olika områden kräver olika typer av vård.'
);
$problems['bristningar'] = new Problem(
      label: 'Bristningar',
      url: 'problem/bristningar',
      url_title: 'Bristningar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_StrechMarks',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/bristningar.webp',
      image_alt: 'Bristningar',
      image_title: 'Bristningar',
      info: 'Dessa är linjer eller band på huden som uppstår när huden sträcks snabbt, som under graviditet, pubertet eller snabb viktökning. De börjar ofta som röda eller lila linjer och bleknar över tid till en mer silvervit färg. Bristningar är ett resultat av bristningar i hudens kollagen och elastin, vilket minskar hudens elasticitet och styrka.'
);
$problems['finnar'] = new Problem(
      label: 'Finnar',
      url: 'finnar.php',
      url_title: 'Finnar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Finnar',
      image_title: 'Finnar',
      info: 'Små inflammerade blemmor på huden, ofta fyllda med var, som är en del av akne. Finnar orsakas av inflammation i hårfolliklar och talgkörtlar, ofta förvärrade av bakterier. De kan uppstå i ansiktet, på ryggen, bröstet och axlarna och kan variera i storlek och svårighetsgrad. Regelbunden hudvård och undvikande av att irritera området är viktigt för att hantera finnar.'

);
$problems['hudforandringar'] = new Problem(
      label: 'Hudförändringar',
      url: 'problem/hudforandringar',
      url_title: 'Hudförändringar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Moles',
      booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Hudförändringar',
      image_title: 'Hudförändringar',
      info: 'Detta är en bred kategori som innefattar alla typer av synliga förändringar i huden, inklusive åldersfläckar, rynkor, födelsemärken och förändringar som kan vara indikatorer på hudsjukdomar. Dessa förändringar kan bero på en rad faktorer som åldrande, solskador, genetiska predispositioner och miljöpåverkan.'
);
$problems['milier'] = new Problem(
      label: 'Milier',
      url: 'milier.php',
      url_title: 'Milier',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Milia',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/milier.webp',
      image_alt: 'Milier',
      image_title: 'Milier',
      info: 'Dessa är små, fasta, vita cystor som består av ansamlingar av keratin, vanligtvis lokaliserade under huden runt ögonen, kinderna och på näsan. De är vanliga hos både barn och vuxna och betraktas ofta som ofarliga. Milier utvecklas när döda hudceller blir inneslutna i små fickor på hudytan.'
);
$problems['mogen-hy'] = new Problem(
      label: 'Mogen Hy',
      url: 'mogen-hy.php',
      url_title: 'Mogen Hy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/mogen-hy.webp',
      image_alt: 'Mogen Hy',
      image_title: 'Mogen Hy',
      info: 'Detta refererar till hud som uppvisar tecken på åldrande, som rynkor, fina linjer, minskad fasthet och torrhet. Hudens förmåga att behålla fukt och dess naturliga oljeproduktion minskar ofta med åldern, vilket kan leda till en känsla av stramhet och en synlig förlust av hudens ungdomliga lyster. Ytterligare faktorer som solskador och livsstilsval kan påverka hur snabbt huden åldras.'
);
$problems['oonskat-har'] = new Problem(
      label: 'Oönskat hår',
      url: 'problem/oonskat-har',
      url_title: 'Oönskat hår',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Oönskat hår',
      image_title: 'Oönskat hår',
      info: 'Detta innebär överdriven hårväxt på kroppen eller ansiktet, vilket kan vara ett resultat av hormonella obalanser, genetik, vissa mediciner eller medicinska tillstånd. Denna typ av hårväxt kan uppfattas som kosmetiskt störande och varierar i intensitet och distribution över kroppen.'
);
$problems['operations-skadearr'] = new Problem(
      label: 'Operations & Skadeärr',
      url: 'problemhy/operations-skadearr',
      url_title: 'Operations & Skadeärr',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Operations & Skadeärr',
      image_title: 'Operations & Skadeärr',
      info: 'Dessa ärr är resultatet av kirurgiska ingrepp och kan variera mycket i utseende, beroende på operationens omfattning, placeringen av snittet, och individens läkningsförmåga. De kan vara upphöjda, röda, eller ha en annorlunda textur jämfört med omgivande hud.'
);
$problems['perioral-dermatit'] = new Problem(
      label: 'Perioral dermatit',
      url: 'perioral-dermatit.php',
      url_title: 'Perioral dermatit',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PerioralDermatitis',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_PerioralDermatitis',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/perioral-dermatit.webp',
      image_alt: 'Perioral dermatit',
      image_title: 'Perioral dermatit',
      info: 'Detta är ett inflammatoriskt hudtillstånd som påverkar området runt munnen, vilket resulterar i utslag, rodnad och ibland små blåsor eller knölar. Tillståndet kan påverkas av flera faktorer, inklusive hormonella förändringar, hudirriterande ämnen och långvarig användning av topiska steroider.'
);
$problems['pigmentflackar'] = new Problem(
      label: 'Pigmentfläckar',
      url: 'pigmentflackar.php',
      url_title: 'Pigmentfläckar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Pigmentfläckar',
      image_title: 'Pigmentfläckar',
      info: 'Detta är mörka områden på huden som uppstår när melanin, det pigment som ger hud dess färg, produceras i överflöd. Dessa fläckar kan vara resultatet av olika faktorer, inklusive solskador, hormonella förändringar som de som uppstår under graviditet eller genom användning av vissa mediciner, och är vanligare med stigande ålder.'
);
$problems['pormaskar'] = new Problem(
      label: 'Pormaskar',
      url: 'pormaskar.php',
      url_title: 'Pormaskar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Pormaskar',
      image_title: 'Pormaskar',
      info: 'Dessa är små, mörka lesioner på huden, oftast förekommande i ansiktet. De uppstår när porerna i huden blir tilltäppta med en kombination av talg och döda hudceller. Pormaskar kan vara antingen öppna (svarta) eller stängda (vita) och är ofta ett av de första tecknen på akne.'

);
$problems['rosacea'] = new Problem(
      label: 'Rosacea',
      url: 'rosacea.php',
      url_title: 'Rosacea',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/rosacea.webp',
      image_alt: 'Rosacea',
      image_title: 'Rosacea',
      info: 'Ett kroniskt hudtillstånd som kännetecknas av episoder av rodnad och ibland små, pusfyllda knölar. Det kan också involvera brännande eller stickande känsla i huden och ökad känslighet. Tillståndet är vanligast i centrala delar av ansiktet och dess exakta orsak är fortfarande okänd.'
);
$problems['seborre'] = new Problem(
      label: 'Seborré',
      url: 'seborre.php',
      url_title: 'Seborré',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Seborrea',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/seborre.webp',
      image_alt: 'Seborré',
      image_title: 'Seborré',
      info: 'Detta tillstånd är karakteriserat av överdriven produktion av talg, vilket leder till en oljig hudton och ibland tillstånd som mjäll. Det kan påverka olika områden av kroppen, inklusive skalpen, ansiktet och bröstet, och varierar i svårighetsgrad.'
);
$problems['stora-porer'] = new Problem(
      label: 'Stora porer',
      url: 'stora-porer.php',
      url_title: 'Stora porer',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
      booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_LargePores',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Stora porer',
      image_title: 'Stora porer',
      info: 'Dessa är porer som ser större ut än vanligt, ofta märkbara på näsan, kinderna och pannan. Stora porer kan vara resultatet av genetiska faktorer, åldrande, frekvent sol exponering, ökad talgproduktion eller tidigare hudskador.'
);
$problems['torr-kanslig-hy'] = new Problem(
      label: 'Torr & Känslig hy',
      url: 'torr-hy.php',
      url_title: 'Torr & Känslig hy',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
      booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_DrySensetiveSkin',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/torr-kanslig-hy.webp',
      image_alt: 'Torr & Känslig hy',
      image_title: 'Torr & Känslig hy',
      info: 'Denna hudtyp är benägen att bli torr, stram, röd och irriterad och kan reagera negativt på vissa hudvårdsprodukter, klimatförändringar eller föroreningar. Torr och känslig hud kräver särskilt skonsam vård för att bibehålla dess barriärfunktion och förhindra ytterligare irritation.'
);
$problems['ytliga-blodkarl'] = new Problem(
      label: 'Ytliga Blodkärl',
      url: 'ytliga-blodkarl.php',
      url_title: 'Ytliga Blodkärl',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
      booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/ytliga-blodkarl.webp',
      image_alt: 'Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl',
      info: 'Dessa synliga blodkärl, ofta kallade "spindelvener" eller telangiektasier, är små, utvidgade blodkärl som ligger nära hudytan. De är vanligast i ansiktet och på benen och kan vara resultatet av genetiska faktorer, solskador, hormonförändringar eller hudtillstånd som rosacea.'
);

$default_problems = new ProblemArea(
      label: '',
      icon: '',
      problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'bristningar', 'finnar', 'hudforandringar', 'milier', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'rosacea', 'pormaskar', 'stora-porer', 'blandhy', 'perioral-dermatit', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',),
);

$problem_areas = array(
      new ProblemArea(
            label: 'Ansikte',
            icon: 'ansikte',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'finnar', 'hudforandringar', 'milier', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'rosacea', 'pormaskar', 'stora-porer', 'blandhy', 'perioral-dermatit', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Kropp',
            icon: 'kropp',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'bristningar', 'finnar', 'hudforandringar', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'pormaskar', 'stora-porer', 'blandhy', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Rygg',
            icon: 'rygg',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'bristningar', 'finnar', 'hudforandringar', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'pormaskar', 'stora-porer', 'blandhy', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Bröst',
            icon: 'brost',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'bristningar', 'finnar', 'hudforandringar', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'pormaskar', 'stora-porer', 'blandhy', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Panna',
            icon: 'panna',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'finnar', 'hudforandringar', 'milier', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'rosacea', 'pormaskar', 'stora-porer', 'blandhy', 'perioral-dermatit', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Kinder',
            icon: 'kinder',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'finnar', 'hudforandringar', 'milier', 'mogen-hy', 'operations-skadearr', 'rosacea', 'pormaskar', 'stora-porer', 'blandhy', 'perioral-dermatit', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Näsa',
            icon: 'nasa',
            problem_ids: array('akne', 'finnar', 'mogen-hy', 'rosacea', 'pormaskar', 'stora-porer', 'blandhy', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Runt munnen',
            icon: 'mun',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'finnar', 'mogen-hy', 'oonskat-har', 'blandhy', 'perioral-dermatit', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      new ProblemArea(
            label: 'Haka',
            icon: 'haka',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'finnar', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'pormaskar', 'stora-porer', 'blandhy', 'perioral-dermatit', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
      
      new ProblemArea(
            label: 'Käklinje',
            icon: 'kaklinje',
            problem_ids: array('akne', 'aknearr', 'arr-fran-finnar', 'bristningar', 'finnar', 'hudforandringar', 'mogen-hy', 'oonskat-har', 'operations-skadearr', 'pormaskar', 'stora-porer', 'blandhy', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar',)
      ),
);
require_once("includes/models/path_segment.php");
$path_segments = array(
      new PathSegment('Problem', '/problemhy.php'),
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
                        description_extended: 'Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål.',
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
                                                            <a href="<?php echo $problem->consultation_url ?>" title="<?php echo $problem->consultation_url_title ?>" class="button expand l10n" title="Få gratis konsultation">Få gratis konsultation</a>
                                                            <a href="<?php echo $problem->booking_url ?>" title="<?php echo $problem->booking_url_title ?>" class="mt-s button expand l10n" title="Se behandlingar">Se behandlingar</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="mt-m button text compact l10n" title="Läs mer">Läs mer</a>
                                                            <hr>
                                                            <div class="columns is-multiline">
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="<?php echo $problem->consultation_url ?>" title="<?php echo $problem->consultation_url_title ?>" class="button expand l10n" title="Få gratis konsultation">Få gratis konsultation</a>
                                                                  </div>
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="<?php echo $problem->booking_url ?>" title="<?php echo $problem->booking_url_title ?>" class="button expand l10n" title="Se behandlingar">Se behandlingar</a>
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