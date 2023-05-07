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
      public function __construct($label, $url, $consultation_url, $booking_url, $image_small, $image_medium, $image_large, $info)
      {
            $this->label = $label;
            $this->url = $url;
            $this->consultation_url = $consultation_url;
            $this->booking_url = $booking_url;
            $this->image_small = $image_small;
            $this->image_medium = $image_medium;
            $this->image_large = $image_large;
            $this->info = $info;
      }
      public string $label;
      public string $url;
      public string $consultation_url;
      public string $booking_url;
      public string $image_small;
      public string $image_medium;
      public string $image_large;
      public string $info;
}

$problems['akne'] = new Problem(
      label: 'Akne',
      url: 'problem/akne',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/acne.jpg',
      image_medium: 'images/problems/medium/acne.jpg',
      image_large: 'images/problems/large/acne.jpg',
      info: 'Akne är den allra vanligaste typen av hudproblem och identifieras av finnar i ansiktet eller på andra delar av kroppen. Det påverkar människor i alla åldrar och orsakas av inflammation i hårsäckarna och talgkörtlarna. Det kan leda till finnar, pormaskar och ibland ärr. Behandla och förebygga akne effektivt genom skräddarsydda behandlingar och en korrekt hudvårdsrutin.'
);
$problems['aknearr'] = new Problem(
      label: 'Akneärr',
      url: 'problem/aknearr',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/acne-scars.jpg',
      image_medium: 'images/problems/medium/acne-scars.jpg',
      image_large: 'images/problems/large/acne-scars.jpg',
      info: 'Acneärr uppstår när inflammerade finnar skadar hudens vävnad och lämnar bestående märken. Ärrtyper varierar från gropiga, ojämna ytor till missfärgade områden. Även om ärr kan vara svåra att helt eliminera, finns det behandlingar som avsevärt kan förbättra deras utseende och struktur, såsom Laser, IPL, Miceoneedling och kemiska peelingar. Acneärr kräver ofta flera behandlingssessioner för optimala resultat.'
);
$problems['pormaskar'] = new Problem(
      label: 'Pormaskar',
      url: 'problem/pormaskar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/comedones.jpg',
      image_medium: 'images/problems/medium/comedones.jpg',
      image_large: 'images/problems/large/comedones.jpg',
      info: 'Pormaskar är små pluggar av talg och döda hudceller som täpper till hårsäckar. De finns i två typer: öppna (svarta) och stängda (vita) pormaskar. För att förebygga och behandla pormaskar är det viktigt att rengöra huden noggrant, exfoliera regelbundet och använda icke-komedogena produkter.'
);
$problems['rosacea'] = new Problem(
      label: 'Rosacea',
      url: 'problem/rosacea',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/rosacea.jpg',
      image_medium: 'images/problems/medium/rosacea.jpg',
      image_large: 'images/problems/large/rosacea.jpg',
      info: 'Rosacea är en kronisk inflammatorisk hudsjukdom som främst påverkar ansiktet. Den kännetecknas av rodnad, synliga blodkärl, svullnad och små knottriga utslag. Rosacea kan förväxlas med akne, men orsakas av olika faktorer. Vanliga utlösare kan vara solljus, stress, värme och kryddstark mat. Behandlingen fokuserar på att eliminera problemet genom att undvika utlösare och använda skonsamma metoder som laserterapi eller IPL-behandlingar. En anpassad hudvårdsrutin för känslig hy är också viktig för att hantera rosacea effektivt.'
);
$problems['seborre'] = new Problem(
      label: 'Seborré',
      url: 'problem/seborre',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/seborrhea.jpg',
      image_medium: 'images/problems/medium/seborrhea.jpg',
      image_large: 'images/problems/large/seborrhea.jpg',
      info: 'Seborré är en hudåkomma där huden producerar för mycket talg (olja), vilket leder till fet och fjällande hud. Det påverkar oftast områden där talgkörtlar är rikligt förekommande, som ansikte, hårbotten och överkropp. Symtom innefattar klåda, rodnad, oljig hud och fjällning. Orsaker till seborré kan vara genetiska, hormonella eller miljömässiga, och behandlingar syftar till att kontrollera symtomen och balansera hudens oljeproduktion.'
);
$problems['perioral-dermatit'] = new Problem(
      label: 'Perioral dermatit',
      url: 'problem/perioral-dermatitis',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/perioral-dermatitis.jpg',
      image_medium: 'images/problems/medium/perioral-dermatitis.jpg',
      image_large: 'images/problems/large/perioral-dermatitis.jpg',
      info: 'Perioral dermatit är en hudåkomma med röda, inflammerade knottror och fjällande hud kring munnen, hakan och näsan. Vanligast hos kvinnor i åldern 20-50 år, kan orsakas av steroidkrämer, starka hudvårdsprodukter, hormonella förändringar eller stress.'
);
$problems['stora-porer'] = new Problem(
      label: 'Stora porer',
      url: 'problem/stora-porer',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/large-pores.jpg',
      image_medium: 'images/problems/medium/large-pores.jpg',
      image_large: 'images/problems/large/large-pores.jpg',
      info: 'Stora porer är en vanlig hudåkomma där porerna i huden syns tydligare på grund av deras storlek. De är ofta ett resultat av överaktiv talgproduktion, genetik, åldrande och förlust av hudens elasticitet. Stora porer kan leda till ojämn hudstruktur, ökad synlighet av pormaskar och en fetare hud. Behandlingar syftar till att rengöra och minska porstorlek, samt balansera hudens oljeproduktion för att förbättra hudens utseende och struktur.'
);
$problems['pigmentflackar'] = new Problem(
      label: 'Pigmentfläckar',
      url: 'problem/pigmentflackar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/pigmentation.jpg',
      image_medium: 'images/problems/medium/pigmentation.jpg',
      image_large: 'images/problems/large/pigmentation.jpg',
      info: 'Pigmentfläckar är ojämna områden på huden där det finns en större mängd melanin, vilket ger huden dess färg. De kan vara ljusa till mörka i färgen och variera i storlek och form. Pigmentfläckar kan orsakas av flera faktorer, såsom solskador, hormonella förändringar, åldrande eller genetik. De är vanliga på områden som är mest exponerade för solen, som ansikte, händer och armar. Behandlingar syftar till att reducera synligheten av pigmentfläckar och jämna ut hudtonen.'
);
$problems['blandhy'] = new Problem(
      label: 'Blandhy',
      url: 'problem/blandhy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/oily-combination-skin.jpg',
      image_medium: 'images/problems/medium/oily-combination-skin.jpg',
      image_large: 'images/problems/large/oily-combination-skin.jpg',
      info: 'Blandhy är en hudtyp som kombinerar element av både torr och fet hud. Den kännetecknas av varierande oljighet och torrhet i olika delar av ansiktet, där den så kallade T-zonen (panna, näsa och haka) ofta är fetare medan kinderna kan vara normala eller torra. Personer med blandhy kan uppleva pormaskar, finnar och glansighet i de oljigare områdena, samtidigt som torra områden kan kännas strama och fjälla'
);
$problems['torr-kanslig-hy'] = new Problem(
      label: 'Torr & Känslig hy',
      url: 'problem/torr-kanslig-hy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/dry-and-sensitive-skin.jpg',
      image_medium: 'images/problems/medium/dry-and-sensitive-skin.jpg',
      image_large: 'images/problems/large/dry-and-sensitive-skin.jpg',
      info: 'Torr och känslig hy är en hudtyp som ofta upplever brist på fukt och en skyddande fet hinna, vilket gör huden mer mottaglig för irritation och yttre påverkan. Symptom inkluderar stramhet, rodnad, fjällning och klåda. För att behandla denna hudtyp krävs det extra omsorg och professionella behandlingar som fokuserar på att skydda och stärka hudbarriären. Det är viktigt att välja behandlingar som är skonsamma mot huden och syftar till att återfukta, lugna och återuppbygga den känsliga hudbarriären'
);
$problems['mogen-hy'] = new Problem(
      label: 'Mogen Hy',
      url: 'problem/mogen-hy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/mature-skin.jpg',
      image_medium: 'images/problems/medium/mature-skin.jpg',
      image_large: 'images/problems/large/mature-skin.jpg',
      info: 'Mogen hy är en hudtyp som vanligtvis upplever naturliga ålderstecken som rynkor, linjer, minskad elasticitet och förlust av volym på grund av åldrandet och kollagenminskning. Mogen hy kan också vara mer benägen för torrhet och känslighet. Behandlingar för mogen hy bör fokusera på att främja hudens naturliga kollagenproduktion, återfukta, stärka hudbarriären och förbättra hudens lyster. Användning av antioxidanter, peptider och retinoider i hudvårdsprodukter kan vara fördelaktigt. Professionella behandlingar såsom ansiktsbehandlingar med fokus på återfuktning, exfoliering och stimulering av kollagenproduktionen, samt mikrodermabrasion och kemiska peelingar kan hjälpa till att förbättra hudens utseende och motverka ålderstecken.'
);
$problems['milier'] = new Problem(
      label: 'Milier',
      url: 'problem/milier',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/milier.jpg',
      image_medium: 'images/problems/medium/milier.jpg',
      image_large: 'images/problems/large/milier.jpg',
      info: 'Milier, även kallade "milk spots" eller "vitkorn", är små, fasta, vita eller gulaktiga knölar som vanligtvis uppträder på ansiktet, särskilt runt ögonen och kinderna. De består av små ansamlingar av keratin (ett protein) inneslutet under hudytan och är vanligtvis ofarliga och icke-smittsamma. Milier kan förekomma hos personer i alla åldrar och är inte direkt kopplade till akne eller andra hudåkommor. Behandling av milier kan omfatta professionell borttagning genom en hudterapeut eller läkare, som använder sterila verktyg för att säkert öppna och tömma knölarna.'
);
$problems['ytliga-blodkarl'] = new Problem(
      label: 'Ytliga Blodkärl',
      url: 'problem/ytliga-blodkarl',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/visible-blood-vessels.jpg',
      image_medium: 'images/problems/medium/visible-blood-vessels.jpg',
      image_large: 'images/problems/large/visible-blood-vessels.jpg',
      info: 'Ytliga blodkärl, även kallade kärlbristningar eller telangiektasier, är små, vidgade blodkärl som syns på hudytan, ofta i ansiktet eller benen. De kan vara röda, lila eller blå och uppträda som fina linjer eller spindelvener. Orsaker kan vara genetik, solskador, hormonella förändringar, åldrande eller rosacea. Behandlingar som kan reducera deras synlighet inkluderar laserterapi, IPL'
);
$problems['hudforandringar'] = new Problem(
      label: 'Hudförändringar',
      url: 'problem/hudforandringar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/skin-imperfections.jpg',
      image_medium: 'images/problems/medium/skin-imperfections.jpg',
      image_large: 'images/problems/large/skin-imperfections.jpg',
      info: 'Hudförändringar kan uppstå av olika anledningar och variera i utseende och omfattning. Solskador, åldrande, genetik och hormonella obalanser kan bidra till ojämn hudton, fläckar och upphöjningar. Acnespecialisten erbjuder skräddarsydda behandlingar för att minska hudförändringar och förbättra hudens utseende.'
);
$problems['finnar'] = new Problem(
      label: 'Finnar',
      url: 'problem/finnar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/pimples.jpg',
      image_medium: 'images/problems/medium/pimples.jpg',
      image_large: 'images/problems/large/pimples.jpg',
      info: 'Finnar är en vanlig hudåkomma som drabbar människor i alla åldrar. De orsakas ofta av tilltäppta porer på grund av överproduktion av talg, döda hudceller och bakterier. Finnar kan variera i storlek, färg och svårighetsgrad, och kan uppträda som pormaskar, vita plitor, papler och pustler. Behandlingar för finnar inkluderar rengöring, exfoliering, samt produkter och metoder som reglerar talgproduktionen och bekämpar inflammation.'
);
$problems['bristningar'] = new Problem(
      label: 'Bristningar',
      url: 'problem/bristningar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/stretch-marks.jpg',
      image_medium: 'images/problems/medium/stretch-marks.jpg',
      image_large: 'images/problems/large/stretch-marks.jpg',
      info: 'Bristningar, även kallade striae, är linjära ärr som uppträder på huden när den snabbt sträcks ut, exempelvis under graviditet, snabb viktökning eller tillväxtspurtar. De börjar ofta som röda eller lila streck och bleknar över tiden till en ljusare nyans. Bristningar förekommer vanligtvis på områden som buken, brösten, låren och höfterna. Även om de inte kan elimineras helt, finns det behandlingar för att förbättra deras utseende, såsom laserterapi, kemisk peeling och mikroneedling.'
);
$problems['operations-arr'] = new Problem(
      label: 'Operations & Skadeärr',
      url: 'problem/operations-arr',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/operational-scars.jpg',
      image_medium: 'images/problems/medium/operational-scars.jpg',
      image_large: 'images/problems/large/operational-scars.jpg',
      info: 'Ärr och skadeärr är resultatet av hudens naturliga läkningsprocess efter skador, såsom skärsår, brännskador eller akne. Dessa ärr kan variera i form, storlek och färg och kan påverka både utseendet och självkänslan hos den drabbade. På Acnespecialisten erbjuder vi effektiva behandlingsmetoder för att reducera och ta bort ärr, inklusive laserterapi, kemiska peelingar och mikroneedling.'
);
$problems['oonskad-harvaxt'] = new Problem(
      label: 'Oönskat hår',
      url: 'problem/oonskad-harvaxt',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/unwanted-hair.jpg',
      image_medium: 'images/problems/medium/unwanted-hair.jpg',
      image_large: 'images/problems/large/unwanted-hair.jpg',
      info: 'Oönskad hårväxt är en vanlig problematik som drabbar både män och kvinnor, och involverar hår som växer på icke-önskade områden såsom ansiktet, armarna, benen eller ryggen. För att effektivt och permanent behandla oönskad hårväxt använder vi oss av laserhårborttagning, vilket ger långvariga och tillfredsställande resultat.'
);
$problems['arr-fran-finnar'] = new Problem(
      label: 'Ärr från finnar',
      url: 'problem/arr-fran-finnar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/scars-from-pimples.jpg',
      image_medium: 'images/problems/medium/scars-from-pimples.jpg',
      image_large: 'images/problems/large/scars-from-pimples.jpg',
      info: 'Ärr från finnar, även kallade akneärr, uppstår när huden läker efter inflammation orsakad av finnar och pormaskar. Dessa ärr kan variera i form och storlek, från små gropar till större ojämnheter i huden. Behandling av akneärr syftar till att reducera synligheten och förbättra hudens utseende och textur.'
);

$problem_areas = array(
      new ProblemArea(
            label: 'Face',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Body',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Chest',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Eyes',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Lips',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Hair',
            icon: 'area-face',
            problem_ids: array('operations-arr')
      ),
      new ProblemArea(
            label: 'Back',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Shoulders',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Neckline',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Neck',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Självklara valet mot Hudproblem</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="problem/problems.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner" class="sticky-badges-target">
                  <div id="banner-green">
                        <div class="container l10n">
                              <div class="is-hidden-desktop">
                                    <h1 class="h600 l10n">Hudproblem</h1>
                                    <p class="p200 mt-xs">
                                          <span id="problems-banner-collapsed" class="l10n">
                                                Hudproblem som akne, rosacea, pormaskar och finnar kan påverka individer i alla åldrar och orsaka obehag, nedsatt självkänsla och försämrad livskvalitet. På Acnespecialisten arbetar vi med att behandla och förbättra problemhy genom att erbjuda skräddarsydda lösningar och behandlingar för varje enskild kund. Vi erbjuder en rad behandlingsmetoder och tekniker anpassade för att hantera olika hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har:
                                                <span class="l10n underline h200" onclick="Problems.onReadMoreClick()">läs mer</span>
                                          </span>
                                          <span id="problems-banner-expanded" class="l10n is-hidden">
                                                Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål. Boka din gratis hudkonsultation idag och ta det första steget mot en friskare och mer välmående hud.
                                          </span>
                                    </p>
                                    <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Få gratis konsultation</a>
                              </div>
                              <div class="is-hidden-touch" id="banner-green-desktop">
                                    <div class="flex-row justify-end">
                                          <div class="mt-xl mb-xs">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                                    <div class="flex-row align-end">
                                          <div id="skin-problems-header-column">
                                                <h1 class="h600 mt-xs l10n">Hudproblem</h1>
                                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Få gratis hudkonsultation</a>
                                          </div>
                                          <div class="l10n">
                                                Hudproblem som akne, rosacea, pormaskar och finnar kan påverka individer i alla åldrar och orsaka obehag, nedsatt självkänsla och försämrad livskvalitet. På Acnespecialisten arbetar vi med att behandla och förbättra problemhy genom att erbjuda skräddarsydda lösningar och behandlingar för varje enskild kund. Vi erbjuder en rad behandlingsmetoder och tekniker anpassade för att hantera olika hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har:
                                          </div>
                                          <div class="ml-xl4 l10n">
                                                Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål. Boka din gratis hudkonsultation idag och ta det första steget mot en friskare och mer välmående hud.
                                          </div>

                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-m is-hidden-desktop">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                        <div class="container" id="filters-touch-container">
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
                  </div>
                  <div class="container">
                        <div id="filters-desktop" class="is-hidden-touch">
                              <div id="filter-items">
                                    <?php foreach ($problem_areas as $problem_area) { ?>
                                          <div class="filter-item" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                                <?php icon($problem_area->icon) ?>
                                                <div class="b100 filter-item-label l10n">
                                                      <?php echo $problem_area->label ?>
                                                </div>
                                          </div>
                                    <?php } ?>
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
                                                <a href="<?php echo $problem->url ?>" class="button b200 grey expand l10n"><?php echo $problem->label ?></a>
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
                                                      <picture>
                                                            <source media="(max-width: 799px)" srcset="<?php echo $problem->image_medium ?>">
                                                            <source media="(min-width: 800px)" srcset="<?php echo $problem->image_large ?>">
                                                            <img src="<?php echo $problem->image_large ?>" alt="<?php echo $problem->label ?>" width="424" height="324" />
                                                      </picture>
                                                </div>
                                                <div class="problem-area-card-content">
                                                      <h3>
                                                            <a href="<?php echo $problem->url ?>" class="h300"><?php echo $problem->label ?></a>
                                                      </h3>
                                                      <p class="mt-xs">
                                                            <?php echo $problem->info ?>
                                                      </p>
                                                      <div class="is-hidden-tablet">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button outline expand l10n">
                                                                  View problem details
                                                            </a>
                                                            <hr>
                                                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Få gratis konsultation</a>
                                                            <!-- TODO: procedure link -->
                                                            <a href="#" class="mt-s button expand l10n">Se behandlingar</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button text compact l10n">Läs mer</a>
                                                            <hr>
                                                            <div class="columns is-multiline">
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Få gratis konsultation</a>
                                                                  </div>
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <!-- TODO: procedure link -->
                                                                        <a href="#" target="_blank" class="button expand l10n">Se behandlingar</a>
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
                              <h2 class="big l10n">Reviews</h2>
                              <div class="flex-row is-hidden-mobile">
                                    <div class="step-buttons">
                                          <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="Reviews.scroll(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                                    <a href="reviews" class="ml-l button compact text">
                                          <span class="l10n">View all reviews</span>
                                          <?php icon('navigate-next') ?>
                                    </a>
                              </div>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="omdomen">Läs fler omdömen</a>
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
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
                  </div>
            </section>
            <section id="skin-guide">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Skin guide</h2>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all articles</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our specialists</h2>
                              <a href="specialists" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all specialists</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $specialists = array(
                              new Specialist(
                                    name: 'Cazzandra Lindberg',
                                    title: 'Hudterapeut sedan 2015',
                                    image_small: 'images/specialists/small/specialist-1.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-cazzandra.webp'
                              ),
                              new Specialist(
                                    name: 'Veronika Benedik',
                                    title: 'Hudterapeut sedan 1999',
                                    image_small: 'images/specialists/small/specialist-2.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-veronika.webp'
                              ),
                              new Specialist(
                                    name: 'Amira Maqboul',
                                    title: 'Hudterapeut sedan 2017',
                                    image_small: 'images/specialists/small/specialist-3.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-amira.webp'
                              ),
                              new Specialist(
                                    name: 'Vilma Libom',
                                    title: 'Hudterapeut sedan 2019',
                                    image_small: 'images/specialists/small/specialist-4.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-vilma.webp'
                              )
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister">View all specialists</a>
                  </div>
            </section>
            <section id="brands">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Brands we use</h2>
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problem/problems.js"></script>
</body>

</html>