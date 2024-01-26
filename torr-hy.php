<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Torr och Känslig Hy - Orsaker, Behandling och Förebyggande | AcneSpecialisten';
$seo_description = 'Lär dig allt om torr och känslig hy, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'torr hy, torr hud, känslig hy, känslig hud, hudvård, förebygga torr hud, behandla känslig hud, hudproblem, fuktighetskräm, hudbarriär';

$title = 'Torr och Känslig Hy';

$image_small = 'bilder/problem/424x324/torr-kanslig-hy.webp';
$image_large = 'bilder/problem/424x456/torr-kanslig-hy.webp';
$image_title = 'Visar en hy som är torr och känslig';
$image_alt = 'Bild som illustrerar hur torr och känslig hy ser ut';
$description = 'Här förklarar vi vad som kännetecknar torr och känslig hy, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av torr och känslig hy, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Yttorr hy',
            url: null,
            title: 'Yttorr hy',
      ),
      new Link(
            label: 'Ömtålig hy',
            url: null,
            title: 'Ömtålig hy',
      ),
      new Link(
            label: 'Reaktiv hy',
            url: null,
            title: 'Reaktiv hy',
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin";
$consultation_url_title = "Gratis Konsultation för Torr och Känslig Hy";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_DrySensetiveSkin";
$booking_url_title = "Boka Behandling för Torr och Känslig Hy";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Torr och Känslig Hy";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Behandling för Torr och Känslig Hy";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Torr och Känslig Hy";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling för Torr och Känslig Hy";


$nav_buttons = array(
      'about' => 'Om torr och känslig hy',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Varför AS?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om torr och känslig hy';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är torr och känslig hy?',
            content: '<p class="p200">Torr och känslig hy är mer än bara en kosmetisk besvärighet; det är en hudtillstånd som kan ha både fysiska och psykologiska effekter på dem som lider av det. Denna hudtyp kännetecknas av en brist på tillräcklig fukt, vilket leder till en kompromissad hudbarriär. Detta gör huden mindre effektiv på att hålla kvar fukt och mer benägen att reagera på olika stimuli som temperaturändringar, kosmetiska produkter och till och med kranvatten. Symptomen kan inkludera klåda, rodnad, fjällning och en obehaglig känsla av stramhet i huden.</p>',
            extended_content: '<p class="p200 mt-xl">En komplex orsakssamband av genetiska och miljömässiga faktorer kan bidra till torr och känslig hy. En viktig faktor är hudens lipidbarriär, som består av naturliga oljor som hjälper till att behålla fukt och skydda mot yttre irritanter. När denna barriär är försvagad, kan huden lättare förlora fukt och blir därmed torr och mer känslig för inflammation och irritation.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man torr och känslig hy?',
            content: '<p class="p200">Det finns flera faktorer som kan bidra till utvecklingen av torr och känslig hy. Klimatförhållanden såsom kyla under vintern med låg luftfuktighet kan avsevärt minska hudens fuktighetsnivåer. Inomhusförhållanden, såsom centralvärme och luftkonditionering, kan också torka ut huden. Hudvårdsprodukter irriterande ämnen kan störa hudens naturliga pH-balans och därmed förvärra tillståndet. Vidare kan hudsjukdomar som psoriasis och eksem, bidra till problemet. Vissa produkter och behandlingar kan också påverka hudens fuktbalans.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer som dålig kost och brist på vattenintag kan också spela en roll. En diet som är låg i essentiella fettsyror och vitaminer som vitamin E kan påverka hudens förmåga att behålla fukt. Stress och brist på sömn har också visat sig förvärra hudens känslighet och kan leda till ytterligare uttorkning och irritation. Det är viktigt att förstå att en kombination av dessa faktorer oftast ligger bakom problemet, och därför kan en holistisk ansats till behandling och förebyggande vara mest effektiv.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får torr och känslig hy?',
            content: '<p class="p200">Torr och känslig hy är inte begränsad till en specifik demografisk grupp; den kan drabba personer i alla åldrar och kön. Det är dock viktigt att förstå att vissa faktorer gör vissa människor mer benägna att utveckla denna hudtyp. Ålder är en av de mest framstående faktorerna. Med åldern minskar hudens naturliga oljeproduktion och dess förmåga att behålla fukt, vilket gör äldre personer mer mottagliga för torr och känslig hud.</p>',
            extended_content: '<p class="p200 mt-xl">Individer med tillstånd som eksem, rosacea eller psoriasis är också särskilt utsatta, eftersom de ofta medför en kronisk torrhet och känslighet i huden. Hormonella förändringar som sker under graviditet, menopaus eller menstruationscykler påverka hudens tillstånd och göra den mer känslig eller torr. Yrkesmässig exponering för kemiska ämnen, eller jobb som kräver frekvent handtvätt eller användning av handskar, kan också förvärra problemet.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man torr och känslig hy?',
            content: '<p class="p200">Medan torr och känslig hy kan drabba hela kroppen, finns det vissa områden som är extra utsatta. Ansiktet är ofta det mest drabbade området, och det är också här som symptomen vanligtvis är mest synliga. Specifika delar av ansiktet som ögonområdet och runt munnen har särskilt tunn hud och är mer känsliga för torrhet och irritation. Händerna är också ett kritiskt område och är extra utsatta på grund av den ständiga exponeringen för vatten, tvål och desinfektionsmedel, särskilt i en pandemi-präglad värld. Händernas hud kan bli så torr att den flagnar, spricker och i värsta fall blöder, vilket inte bara är obehagligt utan också utgör en potentiell infektionsrisk.</p>',
            extended_content: '<p class="p200 mt-xl">Armbågar och knän är andra vanliga områden där torr hud ofta förekommer, delvis på grund av konstant friktion från kläder och den tunnare huden på dessa ställen. Fötterna, särskilt hälar, kan också utveckla extrem torrhet och sprickor, särskilt under de kallare månaderna när huden är mindre utsatt för fukt. Områden som regelbundet rakas, som ben eller ansiktet för män, kan också bli extra känsliga och torra. Detta är ofta resultatet av att rakprodukter och tekniker inte är anpassade till en torr och känslig hudtyp, vilket resulterar i en försvagad hudbarriär och ytterligare uttorkning och irritation.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'panna' => 'Panna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig att identifiera din hudtyp som torr och känslig, samt skapar en individuell behandlingsplan för dig.',

            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder milda och effektiva behandlingar specialanpassade för torr och känslig hud, som syftar till att återfukta och lugna din hud på ett säkert och effektivt sätt.',

            url_label: 'Se behandlingar',
            url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_DrySensetiveSkin',
            url_title: 'Utforska våra skräddarsydda behandlingar för torr och känslig hud'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som är anpassade för torr och känslig hud, för att förhindra framtida hudproblem och behålla hudens balans.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/day-n-night-duo',
            url_title: 'Hitta de bästa produkterna för att förebygga hudproblem för torr och känslig hud'
      )

);
/*
$types_title = 'Olika typer av torr & känslig hy';

$type_categories = array(
      new BasedTypeCategory(
              title: 'Torr och Känslig Hy baserat på Ålder',
              content: '<p class="p200">Torr och känslig hud är en åkomma som kan påverka människor i alla åldrar, från spädbarn till äldre. Denna hudtyp är känslig för en rad faktorer, inklusive klimatförändringar, livsstil och hormonella förändringar. Oavsett ålder är det viktigt att identifiera och behandla symptomen för att återställa hudens naturliga balans.</p>',
              types: array(
                  new BasedType(
                  title: 'Spädbarns- och Småbarnshud',
                  subtitle: 'Benägen för torrhet',

                  image_url: 'images/problems/102x102/barn-torr-kanslig-hy.webp',
                  image_alt: 'Bild av spädbarns- och småbarnshud',
                  image_title: 'Hud hos spädbarn och små barn',

                  url: null,
                  url_title: 'Utforska information om spädbarns- och småbarnshud'
                ),
                new BasedType(
                  title: 'Tonårshud',
                  subtitle: 'Hormonella förändringar',

                  image_url: 'images/problems/102x102/tonaring-torr-kanslig-hy.webp',
                  image_alt: 'Bild av tonårshud',
                  image_title: 'Hud hos tonåringar',

                  url: null,
                  url_title: 'Utforska information om tonårshud'
                ),
                new BasedType(
                  title: 'Vuxen Hud i 20- och 30-årsåldern',
                  subtitle: 'Livsstilsfaktorer',

                  image_url: 'images/problems/102x102/vuxen-torr-kanslig-hy.webp',
                  image_alt: 'Bild av vuxen hud',
                  image_title: 'Hud hos vuxna',

                  url: null,
                  url_title: 'Utforska information om vuxen hud i 20- och 30-årsåldern'
                ),
                new BasedType(
                  title: 'Mogen Hud (40-60 år)',
                  subtitle: 'Åldersrelaterad torrhet',

                  image_url: 'images/problems/102x102/mogen-hy-torr-kanslig-hy.webp',
                  image_alt: 'Bild av mogen hud',
                  image_title: 'Hud hos mogen hy',

                  url: null,
                  url_title: 'Utforska information om mogen hud'
                ),
                new BasedType(
                  title: 'Äldre Hud (60+ år)',
                  subtitle: 'Tunnare och torrare',

                  image_url: 'images/problems/102x102/aldre-hud-torr-kanslig-hy.webp',
                  image_alt: 'Bild av äldre hud',
                  image_title: 'Hud hos äldre',

                  url: null,
                  url_title: 'Utforska information om äldre hud'
                ),

            )
      ),
      new BasedTypeCategory(
            title: 'Torr och Känslig Hy baserat på Yttre Faktorer',
            content: '<p class="p200">Yttre faktorer som klimat, kost, kemiska ämnen, arbetsmiljö och stress kan starkt påverka torr och känslig hy. Dessa faktorer kan irritera huden, förändra hudens fuktbalans, och leda till symptom som torrhet, sprickor och irritation.</p>',
            types: array(
                  new BasedType(
                        title: 'Klimatpåverkad',
                        subtitle: 'Även kallat Klimatinducerad Dermatit',

                        image_url: 'images/problems/102x102/klimatpaverkad.webp',
                        image_alt: 'Bild av klimatpåverkad hud',
                        image_title: 'Exempel på klimatpåverkad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kostrelaterad',
                        subtitle: 'Även kallat Dietinducerad Dermatit',

                        image_url: 'images/problems/102x102/kostrelaterad.webp',
                        image_alt: 'Bild av kostrelaterad hud',
                        image_title: 'Exempel på kostrelaterad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kemiskt Utsatt',
                        subtitle: 'Även kallat Kontaktdermatit',

                        image_url: 'images/problems/102x102/kemiskt-utsatt.webp',
                        image_alt: 'Bild av kemiskt utsatt hud',
                        image_title: 'Exempel på kemiskt utsatt hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Arbetsrelaterad',
                        subtitle: 'Även kallat Yrkesdermatit',

                        image_url: 'images/problems/102x102/arbetsrelaterad.webp',
                        image_alt: 'Bild av arbetsrelaterad hud',
                        image_title: 'Exempel på arbetsrelaterad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Stressinducerad',
                        subtitle: 'Även kallat Stressrelaterad Dermatit',

                        image_url: 'images/problems/102x102/stressinducerad.webp',
                        image_alt: 'Bild av stressinducerad hud',
                        image_title: 'Exempel på stressinducerad hud',

                        url: null,
                        url_title: null,
                  )
            )
      ),
      new BasedTypeCategory(
            title: 'Torr och känslig hy baserat på område i ansiktet',
            content: '<p class="p200">Torr och känslig hy kan variera beroende på vilket område av ansiktet det rör sig om. Olika delar av ansiktet som pannan, ögonområdet, kinderna, näsan, munområdet och hakan kan vara särskilt känsliga och benägna att torrhet. Att förstå var problemet är lokaliserat kan hjälpa dig att skräddarsy din hudvårdsrutin.</p>',
            types: array(
                  new BasedType(
                        title: 'Torrhet i pannan',
                        subtitle: 'Även kallat Frontal xeros',

                        image_url: 'images/problems/102x102/torr-panna.webp',
                        image_alt: 'Bild av torr panna',
                        image_title: 'Exempel på torr panna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Känslighet runt ögonen',
                        subtitle: 'Även kallat Periorbital Sensitivity',

                        image_url: 'images/problems/102x102/kansligt-ogonomrade.webp',
                        image_alt: 'Bild av känsligt ögonområde',
                        image_title: 'Exempel på känsligt ögonområde',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Torrhet på kinderna',
                        subtitle: 'Även kallat Buccal xeros',

                        image_url: 'images/problems/102x102/torra-kinder.webp',
                        image_alt: 'Bild av torra kinder',
                        image_title: 'Exempel på torra kinder',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Torrhet runt näsan',
                        subtitle: 'Även kallat Nasal xeros',

                        image_url: 'images/problems/102x102/torr-nasa.webp',
                        image_alt: 'Bild av torr näsa',
                        image_title: 'Exempel på torr näsa',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Känslighet runt munnen',
                        subtitle: 'Även kallat Perioral Sensitivity',

                        image_url: 'images/problems/102x102/kanslig-mun.webp',
                        image_alt: 'Bild av känslig mun',
                        image_title: 'Exempel på känslig mun',

                        url: null,
                        url_title: null,
                  ),

            )
      ),

);

$symptoms_title = 'Torr och känslig hy symptom';

$symptoms = array(
      new Symptom(
          name: 'Rödhet',
          aka: 'Hudrodnad',
          content: 'Huden kan visa tecken på rodnad, särskilt efter exponering för väder eller kosmetiska produkter.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/rodnad.webp',
          image_alt: 'Bild av hud med rodnad',
          image_title: 'Rödhet i huden'
      ),
      new Symptom(
          name: 'Klåda',
          aka: 'Pruritus',
          content: 'Torr och känslig hy kan vara mycket irriterande och klåda är en vanlig känsla.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/klada.webp',
          image_alt: 'Bild av hud med klåda',
          image_title: 'Klåda'
      ),
      new Symptom(
          name: 'Brännande Känsla',
          aka: 'Hudbränna',
          content: 'Det kan kännas som att huden bränner, särskilt efter applicering av hudvårdsprodukter eller exponering för vissa miljöfaktorer.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/brannande-hy.webp',
          image_alt: 'Bild av hud med brännande känsla',
          image_title: 'Brännande Känsla'
      ),
      new Symptom(
          name: 'Hudflagor eller Fjällande Hud',
          aka: 'Desquamation',
          content: 'Det är vanligt att se små hudflagor, vilket är ett tecken på extrem torrhet.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/hudflagor.webp',
          image_alt: 'Bild av hud med hudflagor eller fjällande hud',
          image_title: 'Hudflagor eller Fjällande Hud'
      ),
      new Symptom(
          name: 'Sprickor eller Skåror',
          aka: 'Hudsprickor',
          content: 'I mer allvarliga fall kan huden bli så torr att den spricker eller får små skåror, vilket kan vara mycket smärtsamt.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/sprickor.webp',
          image_alt: 'Bild av hud med sprickor eller skåror',
          image_title: 'Sprickor eller Skåror'
      ),
      new Symptom(
          name: 'Känslighet för Produkter',
          aka: 'Produktreaktion',
          content: 'En reaktion på kosmetika, tvål, eller andra hudvårdsprodukter är vanligt.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/kanslighet-produkter.webp',
          image_alt: 'Bild av hud känslig för produkter',
          image_title: 'Känslighet för Produkter'
      ),
      new Symptom(
          name: 'Stramhet i huden',
          aka: 'Hudstramhet',
          content: 'Huden kan kännas stram, särskilt efter tvätt eller bad.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/stram-hy.webp',
          image_alt: 'Bild av hud med stramhet',
          image_title: 'Stramhet i huden'
      ),
      new Symptom(
          name: 'Ojämn hudton eller hyperpigmentering',
          aka: 'Ojämn hudfärg',
          content: 'I vissa fall kan torr och känslig hud leda till ojämn hudton eller mörka fläckar.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/ojamn-hudtonwebp',
          image_alt: 'Bild av hud med ojämn ton eller hyperpigmentering',
          image_title: 'Ojämn hudton eller hyperpigmentering'
      ),
      new Symptom(
          name: 'Små knottror eller utslag',
          aka: 'Hudknottror',
          content: 'I vissa fall kan torr och känslig hy leda till små, icke-infekterade knottror på huden.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/knottror.webp',
          image_alt: 'Bild av hud med små knottror eller utslag',
          image_title: 'Små knottror eller utslag'
      ),
      new Symptom(
          name: 'Ökad reaktivitet',
          aka: 'Reaktiv hud',
          content: 'Huden kan reagera mer än normalt på väderförändringar, som värme, kyla, eller vind.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/reaktivitet.webp',
          image_alt: 'Bild av hud med ökad reaktivitet',
          image_title: 'Ökad reaktivitet'
      ),
      new Symptom(
          name: 'Torrhet runt ögonen, näsan eller munnen',
          aka: 'Specifik torrhet',
          content: 'Dessa områden är särskilt känsliga och kan visa tecken på torrhet och känslighet först.',
          
          url_label: null,
          url: null,
          url_title: null,
          
          image: 'images/symptoms/102x102/torrhet-ogon-nasa-mun.webp',
          image_alt: 'Bild av hud med torrhet runt ögonen, näsan eller munnen',
          image_title: 'Torrhet runt ögonen, näsan eller munnen'
      ),

);
*/
$headline01 = "01. Identifiera din torra och känsliga hy";

$service = new Service(
      title: 'Konsultation för Torr och Känslig Hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom torr och känslig hy utförs en omfattande hudanalys. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina unika behov och hudtyp.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av torr och känslig hy',
      image_title: 'Konsultation för Torr och Känslig Hy',

      url_label: 'Läs mer om vår konsultation för torr och känslig hy',
      url: 'hudkonsultation-for-torr-och-kanslig-hy',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för torr och känslig hy',

      consultation_url_label: 'Boka tid för konsultation av torr och känslig hy',
      consultation_url: 'consultation-booking?problem=torr-kanslig-hy',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för torr och känslig hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla torr och känslig hy";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för torr och känslig hy',
            duration: '60 min',
            price: '995 kr',
            content: 'Denna ansiktsbehandling är specialdesignad för att lindra torr och känslig hud. Behandlingen innehåller djup rengöring, fuktgivande masker och serum som hjälper till att återställa hudens naturliga fuktbalans och minska irritation.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för torr och känslig hy',
            image_title: 'Ansiktsbehandling för torr och känslig hy',

            url: 'behandlingar/ansiktsbehandling-torr-kanslig',
            url_label: 'Läs mer om ansiktsbehandling för torr och känslig hy',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling för torr och känslig hy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=dry-sensitive&service=classicFacials',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för torr och känslig hy',

            booking_url_label: 'Boka tid för ansiktsbehandling för torr och känslig hy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/torr-kanslig-konsultation-1643922',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för torr och känslig hy'
      ),

);

$headline03 = "03. Förebygg uppkomsten av torr och känslig hy";

$products = array(
      new Service(
            title: 'Produkter för torr och känslig hy',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt lindra symtom av torr och känslig hud är det viktigt med en daglig hudvårdsrutin med rätt produkter. Våra produkter för torr och känslig hy är speciellt utformade för att återfukta huden, minska irritation och återställa hudens naturliga barriär.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av torr och känslig hy',
            image_title: 'Effektiva produkter för lindring och vård av torr och känslig hy',

            url_label: 'Läs mer om produkter för torr och känslig hy',
            url: 'https://dahlskincare.se',
            url_title: 'Klicka här för att läsa mer om produkter för torr och känslig hy',

            consultation_url_label: null,
            consultation_url: null,
            consultation_url_title: null,

            booking_url_label: null,
            booking_url: null,
            booking_url_title: null,
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp för min torra och känsliga hy?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för min torra och känsliga hy?',
            image_title: 'När ska jag söka hjälp för min torra och känsliga hy?',
            content: '<p class="p200">Torr och känslig hud är en utmaning som många människor brottas med. Denna hudtyp kan kännas obekväm, stram och kan även flagna eller bli röd. Även om dessa symtom i många fall kan hanteras med rätt hudvårdsrutin, kan det för vissa bli en källa till stress eller obehag. Om du känner att din hud inte svarar väl på de produkter du använder, eller om din hudrutin inte verkar göra någon skillnad, kan det vara dags att överväga professionell hjälp.</p>
            <p class="p200 mt-m">Genom att konsultera en hudspecialist kan du få en skräddarsydd lösning som matchar din huds unika behov. En expert kan bedöma din hud, diskutera orsakerna bakom torrheten och känsligheten, och rekommendera en behandlingsplan. Detta kan inkludera specialiserade produkter, behandlingar eller båda. Om du känner att din torra och känsliga hud har blivit ett problem, eller om du helt enkelt vill återställa hudens lyster och komfort, bör du inte tveka att söka professionell rådgivning. Det är aldrig för tidigt eller för sent att sträva efter en hälsosam hud.</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten för Torr & Känslig Hy?',
            content: '<p class="p200">Om du känner att din torra och känsliga hud påverkar din livskvalitet, eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar, bör du överväga att besöka AcneSpecialisten. Ju tidigare du får professionell hjälp, desto bättre chanser har du att lösa ditt hudproblem på ett effektivt sätt. AcneSpecialisten är här för att erbjuda dig skräddarsydda lösningar, oavsett om du har milda eller mer allvarliga hudproblem. Tveka inte att boka en kostnadsfri konsultation och ta det första steget mot en mjukare och mer komfortabel hud.</p><p class="p200 mt-m">Vi erbjuder en kostnadsfri konsultation där vi analyserar din hud och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla torr och känslig hud och kan rekommendera vilka produkter och behandlingar som är bäst för just din hudtyp. Boka en gratis konsultation för att se hur vi kan hjälpa dig att förbättra din torra och känsliga hy.</p>',

            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka Specialisten för Torr & Känslig Hy?',
            image_title: 'När ska jag besöka Specialisten för Torr & Känslig Hy?',
      ),

);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_alt: 'Akne resultat',
            image_title: 'Akne resultat',
            treatment: new ResultTreatment(
                  duration: '3 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_alt: 'Akne resultat',
            image_title: 'Akne resultat',
            treatment: new ResultTreatment(
                  duration: '2 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_alt: 'Rosacea resultat',
            image_title: 'Rosacea resultat',
            treatment: new ResultTreatment(
                  duration: '4 månader',
            )
      ),
);

$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat";


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

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om torr och känslig hy' => array(
            new Question(
                  title: 'Vad är de vanligaste orsakerna till torr och känslig hud?',
                  text: '<p class="p200">Det finns flera faktorer som kan bidra till torr och känslig hud. Dessa inkluderar genetiska predispositioner, miljöfaktorer som kallt eller torrt klimat, och kemiska faktorer som användning av hårda hudvårdsprodukter. Medicinska tillstånd som eksem, psoriasis, och rosacea kan också orsaka eller förvärra torr och känslig hud. Hormonella förändringar, som de som upplevs under graviditet eller klimakteriet, kan också påverka huden.</p>'
            ),
            new Question(
                  title: 'Hur kan man skilja mellan torr och känslig hud?',
                  text: '<p class="p200">Torr hud kännetecknas ofta av en brist på fukt, vilket kan leda till fjällning, klåda och en känsla av stramhet. Känslig hud å andra sidan, är mer en reaktion på vissa triggers som hudvårdsprodukter, mat eller miljöfaktorer. Symptomen på känslig hud inkluderar rodnad, irritation, och ibland utslag. Det är också möjligt att ha både torr och känslig hud, vilket kan komplicera diagnos och behandling.</p>'
            ),
            new Question(
                  title: 'Vilka är de vanligaste symtomen på torr och känslig hud?',
                  text: '<p class="p200">Torr hud uppvisar ofta symtom som stramhet, fjällning och ibland klåda. I mer allvarliga fall kan huden bli sprucken och till och med blöda. Känslig hud kan reagera med symtom som rodnad, brännande, stickningar och ibland utslag när den utsätts för irriterande ämnen eller miljöfaktorer. Ofta upplever personer med känslig hud att deras hud "reaktiverar" snabbt och lätt blir irriterad.</p>'
            ),
            new Question(
                  title: 'Hur påverkar årstiderna hudens torrhet och känslighet?',
                  text: '<p class="p200">Under vintermånaderna kan den kalla utomhusluften och den torra inomhusluften från uppvärmningssystem leda till torrare hud. Sommaren har sin egen uppsättning utmaningar, inklusive ökad exponering för solen och salt eller klorerat vatten, vilket kan torka ut huden och göra den mer känslig. Vissa personer finner att deras hud är känsligare under perioder med hög pollenproduktion eller andra miljömässiga förändringar.</p>'
            ),
            new Question(
                  title: 'Kan kost och livsstil påverka torr och känslig hud?',
                  text: '<p class="p200">Ja, kost och livsstil kan ha en betydande inverkan på huden. En diet som är låg i essentiella fettsyror eller fukt kan förvärra torr hud. Rökning och hög alkoholkonsumtion kan också påverka hudens förmåga att hålla kvar fukt och kan göra huden mer känslig. Sömnbrist och stress kan också påverka huden negativt genom att störa hormonbalansen och öka inflammation, vilket kan leda till ökad torrhet och känslighet.</p>'
            ),
            new Question(
                  title: 'Hur kan man differentiera mellan torr hud och andra hudåkommor som eksem eller psoriasis?',
                  text: '<p class="p200">Det kan vara svårt att differentiera mellan torr hud och andra hudåkommor som eksem eller psoriasis utan professionell diagnos. Torr hud är generellt sett karakteriserad av torrhet och skalning, medan eksem och psoriasis oftast innefattar rodnad, inflammation och ibland klåda. Om du är osäker, är det bäst att söka professionell rådgivning för att fastställa den exakta orsaken och få en anpassad behandlingsplan.</p>'
            ),
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Vilka dagliga rutiner kan lindra symtomen på torr och känslig hud?',
                  text: '<p class="p200">Att ha en daglig hudvårdsrutin kan göra en stor skillnad i hanteringen av torr och känslig hud. Grundläggande steg inkluderar skonsam rengöring, applicering av en fuktgivande kräm direkt efter bad eller dusch och användning av dagkräm. Det är också viktigt att undvika faktorer som kan förvärra din hud såsom starka tvålar. Vidare kan användning av en luftfuktare och dricka tillräckligt med vatten också vara fördelaktigt.</p>'
            ),
            new Question(
                  title: 'Är det några specifika livsstilsförändringar som kan hjälpa i behandlingen av torr och känslig hud?',
                  text: '<p class="p200">Ja, livsstilsförändringar kan definitivt hjälpa. Dricka tillräckligt med vatten, äta en balanserad kost rik på antioxidanter och essentiella fettsyror, och undvika rökning och överdriven alkoholkonsumtion kan bidra till bättre hudhälsa. Dessutom kan att hålla en jämn sömnrytm och undvika överdriven exponering för sol och vind ha en positiv effekt på din hud.</p>'
            ),
            new Question(
                  title: 'Hur ofta bör man applicera fuktgivande kräm eller lotion om man har torr hud?',
                  text: '<p class="p200">För personer med torr hud är det vanligtvis bäst att applicera fuktgivande kräm minst två gånger om dagen - på morgonen och på kvällen. I vissa fall kan ytterligare appliceringar under dagen vara nödvändiga, särskilt på vintern eller i torra klimat. Det är också bra att applicera en kräm direkt efter dusch eller bad, när huden är något fuktig, för att låsa in fukten.</p>'
            ),
            new Question(
                  title: 'Är det några specifika behandlingar som kan vara fördelaktiga för torr och känslig hud?',
                  text: '<p class="p200">För torr och känslig hud bör mer aggressiva behandlingar som kemiska peelingar och mikrodermabrasion undvikas eller användas med stor försiktighet, då de kan orsaka ytterligare irritation och torrhet. Behandlingar som fuktgivande masker, mild exfoliering och hyaluronsyra-injektioner kan istället vara mer lämpliga. Det är alltid bäst att rådgöra med en hudvårdsexpert innan du inleder någon ny behandlingsregim.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till torr och känslig hy";

$skin_guide_articles = array(
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
      ),
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',


      ),
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

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider om torr och känslig hy";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av torr och känslig hy',
            image_title: 'Cazzandra Lindberg - Expert på behandling av torr och känslig hy'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på torr och känslig hy',
            image_title: 'Veronika Benedik - Specialist inom torr och känslig hy'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av torr och känslig hy',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på torr och känslig hy'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av torr och känslig hy',
            image_title: 'Vilma Libom - Expert inom behandling av torr och känslig hy'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Blandhy',
            aka: 'Kombinationshy',
            image: 'images/problems/102x102/blandhy.webp',
            image_alt: 'Bild som visar blandhy, en typ av hudproblem där vissa områden är torra medan andra är oljiga',
            image_title: 'Blandhy - en komplex hudtyp som kräver specialiserad vård',
            url: 'blandhy.php',
            url_title: 'Blandhy'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_alt: 'Alma Brand Logo',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            url: 'varumarken/alma',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av torr och känslig hy";

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
      <meta property="og:image" content="<?php echo $image_large ?>" />
      <meta property="twitter:title" content="<?php echo $seo_title ?>" />
      <meta property="twitter:description" content="<?php echo $seo_description ?>" />
      <meta property="twitter:image" content="<?php echo $image_large ?>" />
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="problem/problem.css">
      <script src="problem/widgets/problem-trivia-card/problem-trivia-card.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
            <div class="container">
                  <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                        <div id="overlay">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                              <div>
                                    <h2 class="h600"><?php echo $title ?></h2>
                                    <div class="mt-m aka">
                                          <span class="p200 l10n">Även kallat</span>
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
                                          <div class="mt-xl">
                                                <div class="columns is-2 is-variable">
                                                      <div class="column">
                                                            <a href="<?php echo $consultation_url ?>" title="<?php echo $floating_consultation_url_title ?>" class="button white expand l10n"><?php echo $floating_consultation_url_label ?></a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="<?php echo $booking_url ?>" title="<?php echo $floating_booking_url_title ?>" class="button white expand l10n"><?php echo $floating_booking_url_label ?></a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <main>
            <section id="header" class="sticky-badges-target">
                  <div id="green-header-small" class="is-hidden-desktop">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                              <h1 class="h600"><?php echo $title ?></h1>
                              <h3 class="mt-xs p100 l10n">Även känt som:</h3>

                              <?php foreach ($akas as $aka) { ?>
                                    <div>
                                          <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="mt-xs button b50 bright">
                                                <?php echo $aka->label ?>
                                          </a>
                                    </div>
                              <?php } ?>
                              <hr class="mt-xl" />
                              <p class="mt-m p200">
                                    <?php echo $description ?>
                              </p>
                              <div class="mt-xl">
                                    <div class="columns is-mobile">
                                          <div class="column is-half">
                                                <a href="<?php echo $consultation_url ?>" title="<?php echo $mobile_consultation_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_consultation_url_label ?></a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="<?php echo $booking_url ?>" title="<?php echo $mobile_booking_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_booking_url_label ?></a>
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
                                    <div class="column is-half flex-row justify-end">
                                          <div class="mt-xl">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                              </div>
                              <div id="green-header-large-text" class="mt-xxs">
                                    <h1 class="h600"><?php echo $title ?></h1>
                                    <div class="mt-s">
                                          <span class="h200 l10n">Även känt som:</span>
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200"><?php echo $description ?></p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="<?php echo $consultation_url ?>" title="<?php echo $consultation_url_title ?>" class="button b200 white l10n"><?php echo $consultation_url_label ?></a>
                                          <a href="<?php echo $booking_url ?>" title="<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <div id="content">
                        <section id="badges" class="is-hidden-desktop mt-s mb-s">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </section>
                        <section id="image" class="is-hidden-desktop">
                              <picture>
                                    <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                                    <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                                    <img src="<?php echo $image_large ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>" width="358" height="274" />
                              </picture>
                        </section>
                        <section id="nav-buttons">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                        </section>
                        <section id="about">
                              <h2 class="h500 l10n"><?php echo $about_title ?></h2>
                              <?php foreach ($trivias as $trivia) {
                                    echo '<hr>';
                                    include('problem/widgets/problem-trivia-card/problem-trivia-card.php');
                              } ?>
                              <hr>
                        </section>
                        <section id="approach">
                              <h2 class="h500 l10n">Metoden</h2>
                              <hr class="mt-xl mb-xl3 is-hidden-mobile">
                              <div class="columns is-variable is-2">
                                    <?php for ($i = 0; $i < sizeof($treatment_steps); $i++) {
                                          echo '<div class="column">';
                                          include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/treatment_step_card/treatment_step_card.php');
                                          echo '</div>';
                                    } ?>
                              </div>
                              <hr class="mt-xl3 is-hidden-mobile">

                        </section>
                        <?php if (isset($type_categories) && sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2 class="h500 l10n"><?php echo $types_title ?></h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href="javascript:;" class="button b50 grey">
                                                            <?php echo $type_category->title ?>
                                                      </a>
                                                <?php } ?>
                                          </div>
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="type-category-cards">
                                                            <?php foreach ($type_category->types as $type) {
                                                                  include('problem/widgets/type-card/type-card.php');
                                                            } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <div class="is-hidden-mobile">
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category-large">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="columns is-3 is-variable is-multiline type-category-large-cards">
                                                            <?php foreach ($type_category->types as $type) { ?>
                                                                  <div class="column is-one-third">
                                                                        <?php include('problem/widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <?php echo $types_url ?>
                              </section>
                        <?php } ?>
                        <?php if (isset($symptoms) && sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2 class="h500"><?php echo $symptoms_title ?></h2>
                                    <div class="mt-m is-hidden-tablet" id="symptom-buttons">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <a href="javascript:;" class="button b50 grey">
                                                      <?php echo $symptom->name ?>
                                                </a>
                                          <?php } ?>
                                    </div>
                                    <div class="columns is-multiline is-variable is-3" id="symptom-cards">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <div class="column is-half">
                                                      <?php include('problem/widgets/symptom-card/symptom-card.php'); ?>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
                        <section id="define">
                              <h2 class="h500 l10n"><?php echo $headline01 ?></h2>
                              <hr class="is-hidden-mobile">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2 class="h500"><?php echo $headline02 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
                        </section>
                        <section id="results">
                              <?php
                              $results_title = 'Resultat';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
                        </section>
                        <section id="reviews">
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
                                    </div>
                              </div>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $review_url_title ?>" href="https://se.trustpilot.com/review/acnespecialisten.se"><?php echo $review_url_label ?></a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                        </section>
                        <!--Hudguide-->
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra specialister</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="specialister"><?php echo $specialist_url_label ?></a>
                        </section>
                        <section id="related-problems">
                              <h2 class="big l10n">Relaterade hudproblem</h2>
                              <dig class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('problem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </dig>
                        </section>
                  </div>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="varumarken" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot torr och känslig hy" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>