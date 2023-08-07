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
      url: 'problem/akne',
      url_title: 'Läs mer om detaljerd information om Akne',
      consultation_url: 'hudkonsultation',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Bild på akne i ansiktet',
      image_title: 'Akne i ansiktet, den vanligaste hudsjukdomen',
      info: 'Akne är den allra vanligaste typen av hudproblem och identifieras av finnar i ansiktet eller på andra delar av kroppen. Det påverkar människor i alla åldrar och orsakas av inflammation i hårsäckarna och talgkörtlarna. Det kan leda till finnar, pormaskar och ibland ärr. Behandla och förebygga akne effektivt genom skräddarsydda behandlingar och en korrekt hudvårdsrutin.'
);

$problems['akne-rygg'] = new Problem(
      label: 'Akne',
      url: 'problem/akne-rygg',
      url_title: 'Akne',
      consultation_url: 'hudkonsultation',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/akne.webp',
      image_alt: 'Akne på ryggen',
      image_title: 'Akne på ryggen',
      info: 'Akne är den allra vanligaste typen av hudproblem och identifieras av finnar i ansiktet eller på andra delar av kroppen. Det påverkar människor i alla åldrar och orsakas av inflammation i hårsäckarna och talgkörtlarna. Det kan leda till finnar, pormaskar och ibland ärr. Behandla och förebygga akne effektivt genom skräddarsydda behandlingar och en korrekt hudvårdsrutin.'
);

$problems['aknearr'] = new Problem(
      label: 'Akneärr',
      url: 'problem/aknearr',
      url_title: 'Akneärr',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/acnearr.webp',
      image_alt: 'Akneärr',
      image_title: 'Akneärr',
      info: 'Acneärr uppstår när inflammerade finnar skadar hudens vävnad och lämnar bestående märken. Ärrtyper varierar från gropiga, ojämna ytor till missfärgade områden. Även om ärr kan vara svåra att helt eliminera, finns det behandlingar som avsevärt kan förbättra deras utseende och struktur, såsom Laser, IPL, Miceoneedling och kemiska peelingar. Acneärr kräver ofta flera behandlingssessioner för optimala resultat.'

);
$problems['rosacea'] = new Problem(
      label: 'Rosacea',
      url: 'problem/rosacea',
      url_title: 'Rosacea',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/rosacea.webp',
      image_alt: 'Rosacea',
      image_title: 'Rosacea',
      info: 'Rosacea är en kronisk inflammatorisk hudsjukdom som främst påverkar ansiktet. Den kännetecknas av rodnad, synliga blodkärl, svullnad och små knottriga utslag. Rosacea kan förväxlas med akne, men orsakas av olika faktorer. Vanliga utlösare kan vara solljus, stress, värme och kryddstark mat. Behandlingen fokuserar på att eliminera problemet genom att undvika utlösare och använda skonsamma metoder som laserterapi eller IPL-behandlingar. En anpassad hudvårdsrutin för känslig hy är också viktig för att hantera rosacea effektivt.'


);
$problems['pormaskar'] = new Problem(
      label: 'Pormaskar',
      url: 'problem/pormaskar',
      url_title: 'Pormaskar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/pormaskar.webp',
      image_alt: 'Pormaskar',
      image_title: 'Pormaskar',
      info: 'Pormaskar är små pluggar av talg och döda hudceller som täpper till hårsäckar. De finns i två typer: öppna (svarta) och stängda (vita) pormaskar. För att förebygga och behandla pormaskar är det viktigt att rengöra huden noggrant, exfoliera regelbundet och använda icke-komedogena produkter.'

);
$problems['stora-porer'] = new Problem(
      label: 'Stora porer',
      url: 'problem/stora-porer',
      url_title: 'Stora porer',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/stora-porer.webp',
      image_alt: 'Stora porer',
      image_title: 'Stora porer',
      info: 'Stora porer är en vanlig hudåkomma där porerna i huden syns tydligare på grund av deras storlek. De är ofta ett resultat av överaktiv talgproduktion, genetik, åldrande och förlust av hudens elasticitet. Stora porer kan leda till ojämn hudstruktur, ökad synlighet av pormaskar och en fetare hud. Behandlingar syftar till att rengöra och minska porstorlek, samt balansera hudens oljeproduktion för att förbättra hudens utseende och struktur.'

);
$problems['milier'] = new Problem(
      label: 'Milier',
      url: 'problem/milier',
      url_title: 'Milier',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/milier.webp',
      image_alt: 'Milier',
      image_title: 'Milier',
      info: 'Milier, även kallade "milk spots" eller "vitkorn", är små, fasta, vita eller gulaktiga knölar som vanligtvis uppträder på ansiktet, särskilt runt ögonen och kinderna. De består av små ansamlingar av keratin (ett protein) inneslutet under hudytan och är vanligtvis ofarliga och icke-smittsamma. Milier kan förekomma hos personer i alla åldrar och är inte direkt kopplade till akne eller andra hudåkommor. Behandling av milier kan omfatta professionell borttagning genom en hudterapeut eller läkare, som använder sterila verktyg för att säkert öppna och tömma knölarna.'

);
$problems['blandhy'] = new Problem(
      label: 'Blandhy',
      url: 'problem/blandhy',
      url_title: 'Blandhy',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/blandhy.webp',
      image_alt: 'Blandhy',
      image_title: 'Blandhy',
      info: 'Blandhy är en hudtyp som kombinerar element av både torr och fet hud. Den kännetecknas av varierande oljighet och torrhet i olika delar av ansiktet, där den så kallade T-zonen (panna, näsa och haka) ofta är fetare medan kinderna kan vara normala eller torra. Personer med blandhy kan uppleva pormaskar, finnar och glansighet i de oljigare områdena, samtidigt som torra områden kan kännas strama och fjälla'

);
$problems['finnar'] = new Problem(
      label: 'Finnar',
      url: 'problem/finnar',
      url_title: 'Finnar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/finnar.webp',
      image_alt: 'Finnar',
      image_title: 'Finnar',
      info: 'Finnar är en vanlig hudåkomma som drabbar människor i alla åldrar. De orsakas ofta av tilltäppta porer på grund av överproduktion av talg, döda hudceller och bakterier. Finnar kan variera i storlek, färg och svårighetsgrad, och kan uppträda som pormaskar, vita plitor, papler och pustler. Behandlingar för finnar inkluderar rengöring, exfoliering, samt produkter och metoder som reglerar talgproduktionen och bekämpar inflammation.'

);
$problems['arr-fran-finnar'] = new Problem(
      label: 'Ärr från finnar',
      url: 'problem/arr-fran-finnar',
      url_title: 'Ärr från finnar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/arr-fran-finnar.webp',
      image_alt: 'Ärr från finnar',
      image_title: 'Ärr från finnar',
      info: 'Ärr från finnar, även kallade akneärr, uppstår när huden läker efter inflammation orsakad av finnar och pormaskar. Dessa ärr kan variera i form och storlek, från små gropar till större ojämnheter i huden. Behandling av akneärr syftar till att reducera synligheten och förbättra hudens utseende och textur.'

);
$problems['perioral-dermatit'] = new Problem(
      label: 'Perioral dermatit',
      url: 'problem/perioral-dermatitis',
      url_title: 'Perioral dermatit',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/perioral-dermatit.webp',
      image_alt: 'Perioral dermatit',
      image_title: 'Perioral dermatit',
      info: 'Perioral dermatit är en hudåkomma med röda, inflammerade knottror och fjällande hud kring munnen, hakan och näsan. Vanligast hos kvinnor i åldern 20-50 år, kan orsakas av steroidkrämer, starka hudvårdsprodukter, hormonella förändringar eller stress.'

);
$problems['seborre'] = new Problem(
      label: 'Seborré',
      url: 'problem/seborre',
      url_title: 'Seborré',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/seborre.webp',
      image_alt: 'Seborré',
      image_title: 'Seborré',
      info: 'Seborré är en hudåkomma där huden producerar för mycket talg (olja), vilket leder till fet och fjällande hud. Det påverkar oftast områden där talgkörtlar är rikligt förekommande, som ansikte, hårbotten och överkropp. Symtom innefattar klåda, rodnad, oljig hud och fjällning. Orsaker till seborré kan vara genetiska, hormonella eller miljömässiga, och behandlingar syftar till att kontrollera symtomen och balansera hudens oljeproduktion.'

);
$problems['torr-kanslig-hy'] = new Problem(
      label: 'Torr & Känslig hy',
      url: 'problem/torr-kanslig-hy',
      url_title: 'Torr & Känslig hy',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/torr-kanslig-hy.webp',
      image_alt: 'Torr & Känslig hy',
      image_title: 'Torr & Känslig hy',
      info: 'Torr och känslig hy är en hudtyp som ofta upplever brist på fukt och en skyddande fet hinna, vilket gör huden mer mottaglig för irritation och yttre påverkan. Symptom inkluderar stramhet, rodnad, fjällning och klåda. För att behandla denna hudtyp krävs det extra omsorg och professionella behandlingar som fokuserar på att skydda och stärka hudbarriären. Det är viktigt att välja behandlingar som är skonsamma mot huden och syftar till att återfukta, lugna och återuppbygga den känsliga hudbarriären'

);
$problems['ytliga-blodkarl'] = new Problem(
      label: 'Ytliga Blodkärl',
      url: 'problem/ytliga-blodkarl',
      url_title: 'Ytliga Blodkärl',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/ytliga-blodkarl.webp',
      image_alt: 'Ytliga Blodkärl',
      image_title: 'Ytliga Blodkärl',
      info: 'Ytliga blodkärl, även kallade kärlbristningar eller telangiektasier, är små, vidgade blodkärl som syns på hudytan, ofta i ansiktet eller benen. De kan vara röda, lila eller blå och uppträda som fina linjer eller spindelvener. Orsaker kan vara genetik, solskador, hormonella förändringar, åldrande eller rosacea. Behandlingar som kan reducera deras synlighet inkluderar laserterapi, IPL'


);
$problems['pigmentflackar'] = new Problem(
      label: 'Pigmentfläckar',
      url: 'problem/pigmentflackar',
      url_title: 'Pigmentfläckar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/pigmentflackar.webp',
      image_alt: 'Pigmentfläckar',
      image_title: 'Pigmentfläckar',
      info: 'Pigmentfläckar är ojämna områden på huden där det finns en större mängd melanin, vilket ger huden dess färg. De kan vara ljusa till mörka i färgen och variera i storlek och form. Pigmentfläckar kan orsakas av flera faktorer, såsom solskador, hormonella förändringar, åldrande eller genetik. De är vanliga på områden som är mest exponerade för solen, som ansikte, händer och armar. Behandlingar syftar till att reducera synligheten av pigmentfläckar och jämna ut hudtonen.'


);
$problems['mogen-hy'] = new Problem(
      label: 'Mogen Hy',
      url: 'problem/mogen-hy',
      url_title: 'Mogen Hy',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/mogen-hy.webp',
      image_alt: 'Mogen Hy',
      image_title: 'Mogen Hy',
      info: 'Mogen hy är en hudtyp som vanligtvis upplever naturliga ålderstecken som rynkor, linjer, minskad elasticitet och förlust av volym på grund av åldrandet och kollagenminskning. Mogen hy kan också vara mer benägen för torrhet och känslighet. Behandlingar för mogen hy bör fokusera på att främja hudens naturliga kollagenproduktion, återfukta, stärka hudbarriären och förbättra hudens lyster. Användning av antioxidanter, peptider och retinoider i hudvårdsprodukter kan vara fördelaktigt. Professionella behandlingar såsom ansiktsbehandlingar med fokus på återfuktning, exfoliering och stimulering av kollagenproduktionen, samt mikrodermabrasion och kemiska peelingar kan hjälpa till att förbättra hudens utseende och motverka ålderstecken.'


);
$problems['hudforandringar'] = new Problem(
      label: 'Hudförändringar',
      url: 'problem/hudforandringar',
      url_title: 'Hudförändringar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/hudforandringar.webp',
      image_alt: 'Hudförändringar',
      image_title: 'Hudförändringar',
      info: 'Hudförändringar kan uppstå av olika anledningar och variera i utseende och omfattning. Solskador, åldrande, genetik och hormonella obalanser kan bidra till ojämn hudton, fläckar och upphöjningar. Acnespecialisten erbjuder skräddarsydda behandlingar för att minska hudförändringar och förbättra hudens utseende.'

);
$problems['bristningar'] = new Problem(
      label: 'Bristningar',
      url: 'problem/bristningar',
      url_title: 'Bristningar',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/bristningar.webp',
      image_alt: 'Bristningar',
      image_title: 'Bristningar',
      info: 'Bristningar, även kallade striae, är linjära ärr som uppträder på huden när den snabbt sträcks ut, exempelvis under graviditet, snabb viktökning eller tillväxtspurtar. De börjar ofta som röda eller lila streck och bleknar över tiden till en ljusare nyans. Bristningar förekommer vanligtvis på områden som buken, brösten, låren och höfterna. Även om de inte kan elimineras helt, finns det behandlingar för att förbättra deras utseende, såsom laserterapi, kemisk peeling och mikroneedling.'
);
$problems['operations-arr'] = new Problem(
      label: 'Operations & Skadeärr',
      url: 'problem/operations-arr',
      url_title: 'Operations & Skadeärr',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/arr.webp',
      image_alt: 'Operations & Skadeärr',
      image_title: 'Operations & Skadeärr',
      info: 'Ärr och skadeärr är resultatet av hudens naturliga läkningsprocess efter skador, såsom skärsår, brännskador eller akne. Dessa ärr kan variera i form, storlek och färg och kan påverka både utseendet och självkänslan hos den drabbade. På Acnespecialisten erbjuder vi effektiva behandlingsmetoder för att reducera och ta bort ärr, inklusive laserterapi, kemiska peelingar och mikroneedling.'
);
$problems['oonskad-harvaxt'] = new Problem(
      label: 'Oönskat hår',
      url: 'problem/oonskad-harvaxt',
      url_title: 'Oönskat hår',
      consultation_url: 'hudkonsultation',
      booking_url: 'https://www.bokadirekt.se',
      consultation_url_title: 'Boka en hudkonsultation',
      booking_url_title: 'Boka',
      image: 'images/problems/424x324/oonskat-har.webp',
      image_alt: 'Oönskat hår',
      image_title: 'Oönskat hår',
      info: 'Oönskad hårväxt är en vanlig problematik som drabbar både män och kvinnor, och involverar hår som växer på icke-önskade områden såsom ansiktet, armarna, benen eller ryggen. För att effektivt och permanent behandla oönskad hårväxt använder vi oss av laserhårborttagning, vilket ger långvariga och tillfredsställande resultat.'
);

$default_problems = new ProblemArea(
      label: '',
      icon: '',
      problem_ids: array('akne','aknearr','rosacea','Finnar', ),
);

$problem_areas = array(
      new ProblemArea(
            label: 'Ansikte',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'rosacea', 'pormaskar', 'stora porer', 'milier', 'blandhy', 'finnar', 'arr-fran-finnar', 'perioral-dermatit', 'seborre', 'torr-kanslig-hy', 'ytliga-blodkarl', 'pigmentflackar', 'mogen-hy', 'bristningar', 'hudforandringar', 'operations-arr', 'oonskad-harvaxt')
      ),
      new ProblemArea(
            label: 'Kropp',
            icon: 'area-face',
            problem_ids: array('akne-rygg', 'aknearr', 'pormaskar', 'stora-porer', 'pigmentflackar', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Rygg',
            icon: 'area-face',
            problem_ids: array('akne-rygg', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Bröst',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Runt munnen',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Näsa',
            icon: 'area-face',
            problem_ids: array('operations-arr')
      ),
      new ProblemArea(
            label: 'Kinder',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Haka',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Läppar',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Käklinje',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
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
                        description: 'Hudproblem som akne, rosacea, pormaskar och finnar kan påverka individer i alla åldrar och orsaka obehag, nedsatt självkänsla och försämrad livskvalitet. På Acnespecialisten arbetar vi med att behandla och förbättra problemhy genom att erbjuda skräddarsydda lösningar och behandlingar för varje enskild kund. Vi erbjuder en rad behandlingsmetoder och tekniker anpassade för att hantera olika hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har:',
                        description_extended: 'Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål. Boka din gratis hudkonsultation idag och ta det första steget mot en friskare och mer välmående hud.',
                        button_url: 'hudkonsultation',
                        button_label: 'Få gratis konsultation'
                  );
                  include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
                  ?>
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
                                                <div class="picture">
                                                      <img src="<?php echo $problem->image ?>" alt="<?php echo $problem->image_alt ?>" title="<?php echo $problem->image_title ?>" width="424" height="324" />
                                                </div>
                                                <div class="problem-area-card-content">
                                                      <h3><a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="h300" title="<?php echo $problem->label ?>"><?php echo $problem->label ?></a></h3>
                                                      <p class="mt-xs"><?php echo $problem->info ?></p>
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
                                          <span class="l10n">Läs fler omdömen</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Läs fler omdömen">Läs fler omdömen</a>
                  </div>
            </section>
            <section id="faq">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Questions & answers</h2>
                              <a href="faq" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all questions</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Läs fler frågor & svar">Läs fler frågor & svar</a>
                  </div>
            </section>
            <section id="skin-guide">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Hudguide</h2>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Läs fler guider</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide" title="Läs fler guider">Läs fler guider</a>
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our specialists</h2>
                              <a href="specialists" class="button compact text is-hidden-mobile">
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
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="Se alla specialister">Se alla specialister</a>
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
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
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