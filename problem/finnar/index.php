<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Finnar - Orsaker, Behandling och Förebyggande | AcneSpecialisten';
$seo_description = 'Lär dig allt om finnar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'finnar, finnarbehandling, orsaker till finnar, förebygga finnar, ta bort finnar, vuxenfinnar, tonårsfinnar, finnärr, pormaskar';

$title = 'Finnar';

$image_small = 'images/problems/424x324/finnar.webp';
$image_large = 'images/problems/424x456/finnar.webp';
$image_title = 'Visar en hud med finnar';
$image_alt = 'Bild som illustrerar hur finnar kan se ut på huden';
$description = 'Här förklarar vi vad som kännetecknar finnar, varför dessa irriterande hudutslag uppstår, och hur vi kan hjälpa dig med effektiv behandling. Vi går även igenom de vanligaste orsakerna bakom finnar, inklusive hormonella förändringar och stress, samt hur vi kan stödja dig i din behandlingsprocess för att uppnå en klarare och friskare hud.';

$akas = [
      new Link(
            label: 'Vuxenfinnar',
            url: 'problem/vuxenfinnar',
            title: 'Utforska de vanligaste orsakerna, symptomen och behandlingsalternativen för finnar hos vuxna'
      ),
      new Link(
            label: 'Tonårsfinnar',
            url: 'problem/tonarsfinnar',
            title: 'Komplett guide till tonårsfinnar: orsaker, förebyggande åtgärder och effektiva lösningar'
      ),
            new Link(
            label: 'Akne',
            url: 'problem/akne',
            title: 'Allt du behöver veta om akne och de mest effektiva behandlingsmetoderna'
      )

];

$consultation_url_label ="Få gratis konsultation";
$consultation_url_title ="Gratis Konsultation mot Finnar";

$booking_url_label ="Boka behandling";
$booking_url_title ="Boka behandling mot finnar";

$mobile_consultation_url_label ="Få gratis konsultation";
$mobile_consultation_url_title ="Gratis Konsultation för finnar";

$mobile_booking_url_label ="Boka behandling";
$mobile_booking_url_title ="Boka behandling för finnar";

$floating_consultation_url_label ="Få gratis konsultation";
$floating_consultation_url_title ="Gratis Konsultation för finnar";

$floating_booking_url_label ="Boka behandling";
$floating_booking_url_title ="Boka behandling mot finnar";

$nav_buttons = array(
      'about' => 'Om Finnar',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om Finnar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är finnar?',
            content: '<p class="p200">Finnar är en form av akne, en hudåkomma som kännetecknas av inflammerade talgkörtlar i huden. Det uppstår vanligtvis i ansiktet, nacken, bröstet, ryggen och axlarna. Finnar kan variera i svårighetsgrad, från milda till svåra utbrott, och kan påverka både tonåringar och vuxna.</p>',

            extended_content: '<p class="p200 mt-xl">Finnarna kan uppstå som vita prickar, svarta prickar eller som röda inflammerade områden. Dessa olika typer av finnar har olika orsaker och behandlingar, och vissa typer kan lämna ärr om de inte behandlas korrekt.</p>       

            <p class="p200 mt-xl">På AcneSpecialisten har vi expertis inom finnar och relaterade hudproblem. Vi kan hjälpa dig att förstå din hudtyp och dess behov och erbjuda en behandlingsplan som är skräddarsydd för just dig.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man finnar?',
            content: '<p class="p200">Finnar uppstår när porerna i din hud blir igensatta med olja och döda hudceller. Varje por är ansluten till en talgkörtel, som producerar en oljig substans kallad talg. Extra talg kan täppa till porer, vilket resulterar i tillväxt av bakterier och inflammation - det vi känner igen som finnar.</p>',

            extended_content: '<p class="p200 mt-xl">Faktorer som hormonella förändringar, användning av olämpliga hudvårdsprodukter, stress och kost kan också bidra till uppkomsten av finnar. Det är viktigt att förstå de underliggande orsakerna för att kunna behandla finnar effektivt.</p>

            <p class="p200 mt-xl">På AcneSpecialisten erbjuder vi en omfattande hudanalys för att identifiera orsakerna till dina finnar och utveckla en personlig behandlingsplan. Vi tar hänsyn till din livsstil, kost och andra faktorer som kan påverka din hud.</p>',

            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får finnar?',
            content: '<p class="p200">Även om finnar oftast förknippas med tonåringar, kan personer i alla åldrar drabbas. Hormonella förändringar, t.ex. under puberteten eller menstruation, kan utlösa ökad talgproduktion. Men även vissa läkemedel, kosten och genetik kan bidra till uppkomsten av finnar.</p>',

            extended_content: '<p class="p200 mt-xl">Vuxna, särskilt kvinnor, kan fortsätta att uppleva finnar långt in i 30- och 40-årsåldern. Detta kan vara relaterat till hormonella förändringar, användning av vissa kosmetika eller andra underliggande hälsoproblem.</p>

            <p class="p200 mt-xl">På AcneSpecialisten har vi erfarenhet av att behandla finnar hos individer i alla åldrar. Vi erbjuder ett brett utbud av behandlingar och produkter som kan anpassas till dina specifika behov och livsförhållanden.</p>',

            icons: array('who-infants' => 'Barn', 'who-teenagers' => 'Ungdommar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man finnar?',
            content: '<p class="p200">Finnar uppstår vanligtvis på delar av kroppen där det finns många talgkörtlar, inklusive ansikte, rygg, bröst och axlar. Men de kan också uppstå på andra områden beroende på individuella faktorer som hudtyp och livsstil.</p>',

            extended_content: '<p class="p200 mt-xl">Vissa områden, som hakan och käklinjen, kan vara mer mottagliga för finnar på grund av hormonella förändringar. Finnar på ryggen och bröstet kan förvärras av svett och friktion från kläder.</p>

            <p class="p200 mt-xl">På AcneSpecialisten erbjuder vi specialiserade behandlingar för finnar på olika delar av kroppen. Våra hudterapeuter kan hjälpa dig att identifiera orsakerna till finnar i olika områden och erbjuda effektiva lösningar för att rengöra och återställa din hud.</p>',

            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos FinnarSpecialisten blir du kopplad till en expert hudterapeut som analyserar din finnartyp och skapar en unik behandlingsplan. Vare sig du lider av milda eller allvarliga finnar, hjälper vi dig att förstå orsakerna och den bästa vägen framåt.',
            url_label: 'Få gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder målinriktade och effektiva behandlingar för dina finnar, anpassade efter din hudtyp och finnarnas svårighetsgrad. Genom säkra metoder säkerställer vi att du snabbt får kontroll över ditt problem.',
            url_label: 'Se behandlingar mot finnar',
            url: 'Behandlingar',
            url_title: 'Utforska våra skräddarsydda behandlingar mot finnar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'För att hålla finnarna borta och din hud i balans erbjuder vi en personlig hudvårdsrutin och produkter som är särskilt anpassade för din hudtyp. Dessa hjälper till att förebygga framtida utbrott och upprätthålla en klar och frisk hud.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/finnar',
            url_title: 'Hitta de bästa produkterna för att förebygga finnar'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'Om finnarna har lämnat ärr eller annan skada, fokuserar vi på att reparera din hud med avancerade behandlingsmetoder som laser, microneedling och kemisk peeling. Målet är en jämn, vacker och problemfri hud.',
            url_label: 'Se ärrbehandlingar',
            url: 'finnararr-behandling',
            url_title: 'Upptäck effektiva behandlingar för ärr orsakade av finnar'
      ),
);

$treatment_link = '<a href="problem/finnar/behandling-mot-finnar" title="Utforska effektiva behandlingar mot finnar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$types_title = 'Olika typer av Finnar';

$type_categories = array(
      new BasedTypeCategory(
            id: 'category-age',
            title: 'Finnar baserat på ålder',
            content: '<p class="p200">Finnar är inte begränsade till en viss ålder och kan påverka både unga och vuxna. Tonårsfinnar är vanliga och orsakas ofta av hormonella förändringar under puberteten. Men även som vuxen kan man drabbas, och det kan relateras till olika faktorer såsom stress, kost och livsstil. Det är essentiellt att förstå att finnar kan påverka personer i olika skeden av livet.</p>',
            types: array(
                  new BasedType(
                        title: 'Vuxenfinnar',
                        subtitle: 'Ibland kopplat till livsstilsfaktorer',
                        content: '',
                        image_url: 'images/problems/102x102/vuxenfinnar.webp',
                        image_alt: 'Bild av finnar hos vuxna',
                        image_title: 'Finnar hos vuxna',
                        url: 'problem/finnar/typer/vuxenfinnar',
                        url_title: 'Utforska information om finnar hos vuxna'
                  ),
                  new BasedType(
                        title: 'Tonårsfinnar',
                        subtitle: 'En vanlig företeelse under puberteten',
                        content: '',
                        image_url: 'images/problems/102x102/tonarsfinnar.webp',
                        image_alt: 'Bild av finnar hos tonåringar',
                        image_title: 'Finnar hos tonåringar',
                        url: 'problem/finnar/typer/tonarsfinnar',
                        url_title: 'Utforska information om finnar hos tonåringar'
                  ),
            )     
      ),

      new BasedTypeCategory(
          id: 'category-reason',
          title: 'Finnar baserat på yttre faktorer',
          content: '<p class="p200">Externa faktorer kan kraftigt påverka uppkomsten av finnar. Sådana faktorer kan vara solens strålar, friktion mot huden, användning av kosmetika, vissa läkemedel och miljöpåverkan. Dessa kan bidra till utvecklingen eller förvärringen av finnar genom att irritera huden, täppa till porerna eller rubba hudens talgproduktion.</p>',
          types: array(
              new BasedType(
                  title: 'Solfinnar',
                  subtitle: 'Även kallat solutlöst acne',
                  content: '',
                  image_url: 'images/problems/102x102/solfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av solen',
                  image_title: 'Exempel på finnar orsakade av solen',
                  url: 'problem/finnar/typer/solfinnar',
                  url_title: 'Läs mer om hur solen kan bidra till finnar'
              ),
              new BasedType(
                  title: 'Hormonella finnar',
                  subtitle: 'Finnar orsakade av hormonell obalans',
                  content: '',
                  image_url: 'images/problems/102x102/hormonell-finnar.webp',
                  image_alt: 'Bild av hormonella finnar',
                  image_title: 'Exempel på hormonella finnar',
                  url: 'problem/finnar/typer/hormonella-finnar',
                  url_title: 'Utforska mer om hur hormoner kan framkalla finnar'
              ),
              new BasedType(
                  title: 'Kosmetikafinnar',
                  subtitle: 'Finnar utlösta av kosmetiska produkter',
                  content: '',
                  image_url: 'images/problems/102x102/kosmetikafinnar.webp',
                  image_alt: 'Bild av finnar orsakade av kosmetika',
                  image_title: 'Exempel på finnar orsakade av kosmetika',
                  url: 'problem/finnar/typer/kosmetika-finnar',
                  url_title: 'Lär dig mer om hur kosmetika kan orsaka finnar'
              ),
             new BasedType(
                  title: 'Pillfinnar',
                  subtitle: 'Finnar framkallade genom ständigt pillande eller klämmande',
                  content: '',
                  image_url: 'images/problems/102x102/pillfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av pillande',
                  image_title: 'Exempel på finnar orsakade av pillande',
                  url: 'problem/finnar/typer/pillfinnar',
                  url_title: 'Läs mer om hur omedvetet pillande kan leda till finnar'
                  ),
             new BasedType(
                  title: 'Friktionsfinnar',
                  subtitle: 'Finnar orsakade av konstant friktion eller tryck mot huden',
                  content: '',
                  image_url: 'images/problems/102x102/friktionsfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av friktion',
                  image_title: 'Exempel på finnar orsakade av friktion',
                  url: 'problem/finnar/typer/friktionsfinnar',
                  url_title: 'Utforska mer om hur friktion eller tryck mot huden kan orsaka finnar'
                  ),

              new BasedType(
                  title: 'Läkemedelsfinnar',
                  subtitle: 'Finnar orsakade av medicinska preparat',
                  content: '',
                  image_url: 'images/problems/102x102/lakemedelsfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av läkemedel',
                  image_title: 'Exempel på finnar orsakade av läkemedel',
                  url: 'problem/finnar/typer/lakemedelsfinnar',
                  url_title: 'Lär dig mer om hur läkemedel kan orsaka finnar'
              ),
              new BasedType(
                  title: 'Kontaktfinnar',
                  subtitle: 'Finnar orsakade av hudkontakt med irriterande ämnen',
                  content: '',
                  image_url: 'images/problems/102x102/kontaktfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av kontakt',
                  image_title: 'Exempel på finnar orsakade av kontakt',
                  url: 'problem/finnar/typer/kontaktfinnar',
                  url_title: 'Utforska mer om hur direktkontakt kan orsaka finnar'
              ),
              new BasedType(
                  title: 'Svampfinnar',
                  subtitle: 'Finnar relaterade till hudsvamp',
                  content: '',
                  image_url: 'images/problems/102x102/svampfinnar.webp',
                  image_alt: 'Bild av finnar orsakade av svamp',
                  image_title: 'Exempel på finnar orsakade av svamp',
                  url: 'problem/finnar/typer/svampfinnar',
                  url_title: 'Lär dig mer om hur svamp kan bidra till uppkomst av finnar'
              ),
          )
      ),

            new BasedTypeCategory(
                  id: 'category-area',
                  title: 'Finnar baserat på område',
                  content: '<p class="p200">Finnar kan framträda på olika delar av kroppen. Ansiktet är det vanligaste området, men finnar kan också uppstå på bröstet, ryggen, axlarna och andra delar av kroppen. Finnarnas placering kan ge en indikation på underliggande orsaker, såsom hormonella förändringar, irritation från kläder eller externa faktorer som sol och friktion.</p>',
                  types: array(
                        new BasedType(
                              title: 'Finnar i ansiktet',
                              subtitle: 'Även kallat Acne faciei',
                              content: '',
                              image_url: 'images/problems/102x102/finnar-ansikte.webp',
                              image_alt: 'Bild av finnar i ansiktet',
                              image_title: 'Exempel på finnar i ansiktet',
                              url: 'problem/finnar/typer/finnar-ansiktet',
                              url_title: 'Läs mer om finnar i ansiktet och möjliga behandlingar'
                        ),
                        new BasedType(
                              title: 'Finnar på ryggen',
                              subtitle: 'Även kallat Acne dorsalis',
                              content: '',
                              image_url: 'images/problems/102x102/finnar-rygg.webp',
                              image_alt: 'Bild av finnar på ryggen',
                              image_title: 'Exempel på finnar på ryggen',
                              url: 'problem/finnar/typer/finnar-ryggen',
                              url_title: 'Läs mer om finnar på ryggen och möjliga behandlingar'
                        ),
                        new BasedType(
                              title: 'Finnar på bröstet',
                              subtitle: 'Även kallat Acne pectoralis',
                              content: '',
                              image_url: 'images/problems/102x102/finnar-brost.webp',
                              image_alt: 'Bild av finnar på bröstet',
                              image_title: 'Exempel på finnar på bröstet',
                              url: 'problem/finnar/typer/finnar-brostet',
                              url_title: 'Läs mer om finnar på bröstet och möjliga behandlingar'
                        ),
                        new BasedType(
                              title: 'Finnar runt munnen',
                              subtitle: 'Även kallat Perioral dermatit',
                              content: '',
                              image_url: 'images/problems/102x102/finnar-mun.webp',
                              image_alt: 'Bild av finnar runt munnen',
                              image_title: 'Exempel på finnar runt munnen',
                              url: 'problem/finnar/typer/finnar-mun',
                              url_title: 'Läs mer om finnar runt munnen och möjliga behandlingar'
                        ),
                  )
            ),


);

$types_url = '<a href="typer" title="Lär dig mer om olika typer av finnar och deras behandling" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Läs mer om olika typer av finnar</a>
              <a href="typer" title="Lär dig mer om olika typer av finnar och deras behandling" class="mt-xl button b200 outline l10n is-hidden-mobile">Läs mer om olikta typer av finnar</a>';

$symptoms_title = 'Finnar symptom';

$symptoms = array(
       new Symptom(
            name: 'Pormaskar - Svarta',
            aka: 'Kallade öppna komedoner',
            content: 'Kända som öppna komedoner, dessa små, mörkfärgade prickar bildas när porer blir blockerade av talg och döda hudceller. Oxidation ger dem deras svarta eller bruna färg, och de är ofta lokaliserade på näsa, kinder, panna och haka.',
            image: 'images/symptoms/102x102/komedoner-oppna.webp',
            image_alt: 'Öppna komedoner (pormaskar) i bild',
            image_title: 'Pormaskar (öppna komedoner)',
            url: 'problem/finnar/typer/post-inflammatory-hyperpigmentaion',
            url_title: 'Utforska öppna komedoner',
            url_label: 'Fler detaljer om öppna komedoner'
      ),
      new Symptom(
            name: 'Pormaskar - Vita',
            aka: '"Whiteheads" på engelska',
            content: 'Slutna komedoner eller "whiteheads" är små, vitaktiga knölar som bildas när talg och döda hudceller samlas under huden. De behåller sin ljusa färg på grund av ett hudlager som förhindrar oxidation och kan ofta finnas på kinder, panna och haka.',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            image_alt: 'Whiteheads (stängda komedoner) bild',
            image_title: 'Stängda komedoner ("whiteheads")',
            url: 'problem/finnar/typer/atrophic-icepick-scars',
            url_title: 'Mer om stängda komedoner',
            url_label: 'Fler detaljer om stängda komedoner'
      ),
      new Symptom(
            name: 'Röda Finnar',
            aka: 'Också kallade papler',
            content: 'Röda och inflammerade blemmor kallas papler och bildas när hårsäckar infekteras, ofta med bakterien Propionibacterium acnes. Mindre än 5 mm i diameter, de kan vara ömma och vanligen synliga på ansiktet, nacken, bröstet och ryggen.',
            image: 'images/symptoms/102x102/papler.webp',
            image_alt: 'Röda finnar (papler) bild',
            image_title: 'Papler (Röda Finnar)',
            url: 'problem/finnar/typer/atrophic-boxcar-scars',
            url_title: 'Lär dig mer om röda finnar',
            url_label: 'Mer information om papler'
      ),
      new Symptom(
            name: 'Gula Finnar',
            aka: 'Eller pustuler',
            content: 'Inflammerade blemmor fyllda med var kallas pustuler. Dessa röda blemmor har en vit eller gul prick i centrum och kan vara ömma. De uppträder ofta på ansikte, nacke, bröst och rygg.',
            image: 'images/symptoms/102x102/pustler.webp',
            image_alt: 'Gula finnar (pustler) bild',
            image_title: 'Pustler (Gula Finnar)',
            url: 'problem/finnar/typer/atrophic-rolling-scars',
            url_title: 'Fler detaljer om gula finnar',
            url_label: 'Utforska pustuler'
      ),
      new Symptom(
            name: 'Innåtfinnar',
            aka: 'Kallas också noduler',
            content: 'Noduler är djupa, större blemmor som kan vara ömma och smärtsamma. De bildas när en hårsäck blir starkt infekterad, och inflammationen breder ut sig. De syns ofta på ansikte, nacke, bröst, rygg samt ibland överarmar och skinkor.',
            image: 'images/symptoms/102x102/noduler.webp',
            image_alt: 'Innåtfinnar (noduler) i bild',
            image_title: 'Noduler (Innåtfinnar)',
            url: 'problem/finnar/typer/hypertrophic-keloid',
            url_title: 'Mer om innåtfinnar',
            url_label: 'Utforska noduler'
      ),
      new Symptom(
            name: 'Bölder',
            aka: 'Ofta kallade cystor',
            content: 'Bölder, även kända som cystor, är stora, varfyllda inflammerade blemmor som uppstår när en hårsäck blir kraftigt infekterad och inflammationen sprider sig djupt in i huden. Beroende på graden av inflammation kan de vara mjuka och runda, eller fasta och ömma vid beröring. Bölder kan vara större än 5 mm i diameter och är vanliga på ansiktet, nacken, bröstet och ryggen. Ärrbildning är en vanlig följd av cystisk akne, vilket gör att professionell behandling ofta är nödvändig.',
            image: 'images/symptoms/102x102/cystor.webp',
            image_alt: 'Bild av bölder (cystor)',
            image_title: 'Bölder (cystor)',
            url: 'problem/finnar/typer/hypertrophic-keloid',
            url_title: 'Läs mer om bölder (cystor)',
            url_label: 'Mer information om bölder'
      ),

);

            $headline01 = "01. Identifiera dina finnar";

            $service = new Service(
            id: 'finnar',
            title: 'Konsultation',
            duration: '20 min',
            price: 'Kostnadsfri',
            content: 'Möt en expert på finnar för en individuell konsultation. Under detta möte kommer en detaljerad analys av ditt hudproblem att utföras. Vi tar bilder före behandlingen för att tydligt kunna se och jämföra dina resultat och rekommenderar en anpassad behandlingsplan som passar just din hud.',
            image_small: 'images/services/200x200/finnar-konsultation.webp',
            image_large: 'images/services/200x200/finnar-konsultation.webp',
            image_alt: 'Bild som visar en konsultation för finnar',
            image_title: 'Konsultation för finnbehandling',
            consultation_url: 'finnar-konsultation',
            consultation_url_label: 'Boka tid för finnar konsultation',
            consultation_url_title: 'Klicka här för att boka en tid för en konsultation om finnar',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'finnar-konsultation',
            url_label: 'Läs mer om vår konsultation för finnar',
            url_title: 'Klicka här för att lära dig mer om vår kostnadsfria konsultation för finnar'

);

$headline02 = "02. Behandla dina finnar";

$services = array(
           new Service(
            id: 'ansiktsbehandling-finnar',
            title: 'Ansiktsbehandling mot finnar',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår ansiktsbehandling mot finnar är en effektiv lösning, noggrant designad för att extrahera orenheter som orsakar inflammation och skador på huden. Genom att varsamt ta bort finnar och pormaskar kan behandlingen hjälpa till att förebygga ärrbildning och främja snabbare läkning.',
            image_small: 'images/services/200x200/ansiktsbehandling-finnar.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-finnar.webp',
            image_alt: 'Bild av en ansiktsbehandling mot finnar',
            image_title: 'Ansiktsbehandling mot finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/finnar-konsultation-1643922',
            booking_url_label: 'Boka tid för ansiktsbehandling mot finnar',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot finnar',
            url: 'ansiktsbehandling-finnar',
            url_label: 'Läs mer om ansiktsbehandling mot finnar',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling mot finnar'
      ),
       new Service(
            id: 'laser-finnar',
            title: 'Laser mot finnar',
            duration: '50 min',
            price: '3595 kr',
            content: 'Vår avancerade laserbehandling mot finnar erbjuder en effektiv lösning för att bekämpa aktiv akne och ärr som kan uppstå efter utbrott. Lasertekniken riktar sig mot bakterier som orsakar inflammation och hjälper till att minska produktionen av talg, vilket minskar risken för framtida utbrott.',
            image_small: 'images/services/200x200/laser-finnar.webp',
            image_large: 'images/services/200x200/laser-finnar.webp',
            image_alt: 'Bild av laserbehandling mot finnar',
            image_title: 'Laserbehandling mot finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/finnar-konsultation-1643922',
            booking_url_label: 'Boka tid för laserbehandling mot finnar',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot finnar',
            url: 'laser-finnar',
            url_label: 'Läs mer om laser mot finnar',
            url_title: 'Klicka här för att läsa mer om laserbehandling mot finnar'
      ),
       new Service(
            id: 'kemisk-peeling-finnar',
            title: 'Kemisk peeling mot finnar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla finnar. Genom att använda en speciellt framtagen lösning för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation. Resultatet är en jämnare hudton, färre utbrott och mindre synliga ärr. Det är en enkel och effektiv strategi för att hantera dina finnar och förbättra din hudhälsa.',
            image_small: 'images/services/200x200/kemisk-peeling-finnar.webp',
            image_large: 'images/services/200x200/kemisk-peeling-finnar.webp',
            image_alt: 'Bild av kemisk peeling mot finnar',
            image_title: 'Kemisk peeling mot finnar behandling',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/finnar-konsultation-1643922',
            booking_url_label: 'Boka tid för kemisk peeling mot finnar',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot finnar behandling',
            url: 'kemisk-peeling-finnar',
            url_label: 'Läs mer om kemisk peeling mot finnar',
            url_title: 'Klicka här för att läsa mer om kemisk peeling mot finnar'
      ),

        new Service(
            id: 'microneedling-finnar',
            title: 'Microneedling mot finnar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en innovativ behandlingsmetod mot finnar. Genom att skapa små mikroskopiska kanaler i huden, främjar denna behandling hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Metoden kan effektivt minska utbrott av finnar, förbättra hudens struktur och minska synligheten av ärr orsakade av finnar. Microneedling är en säker och effektiv strategi för att hantera dina finnar och förbättra din hudhälsa.',
            image_small: 'images/services/200x200/microneedling-finnar.webp',
            image_large: 'images/services/200x200/microneedling-finnar.webp',
            image_alt: 'Bild av microneedling mot finnar',
            image_title: 'Microneedling mot finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/finnar-konsultation-1643922',
            booking_url_label: 'Boka tid för microneedling mot finnar',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot finnar',
            url: 'microneedling-finnar',
            url_label: 'Läs mer om microneedling mot finnar',
            url_title: 'Klicka här för att läsa mer om microneedling mot finnar'
            )


);

$headline03 = "03. Förebygg uppkomsten av nya finnar";

$products = array(
      new Service(
            id: 'produkter-mot-finnar',
            title: 'Produkter mot finnar',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'provat det mest mot finnar fast utan resultat? Låt oss förenkla det för dig. Lösningen är att balansera din hud, och det kan vara så enkelt som att välja rätt produkter. Våra specialutformade produkter för finnar har vetenskapligt framtagits för att ge högpresterande resultat. De arbetar aktivt för att effektivt bekämpa och förebygga finnar, samtidigt som de hjälper till att återställa balansen i din hud. Investera i vår hudvårdsserie idag och börja resan mot en klarare, friskare och mer problemfri hud. Vänta inte, starta din resa mot renare hud nu med vår specialiserade hudvård för finnar - en enkel lösning till ett komplicerat problem.'
            content: 'Förvandla din hud och ta makten över dina finnar med våra specialutformade produkter. Dessa högpresterande, vetenskapligt framtagna produkter är utformade för att snabbt och effektivt bekämpa och förebygga finnar genom att balansera din hud och motverka uppkomsten av nya finnar. Investerar du i vår hudvårdsserie idag, investerar du i en friskare, klarare och mer självsäker framtid för din hud. Vänta inte, påbörja din resa mot renare hud nu och upplev skillnaden som vår hudvård för finnar kan göra.'
            image_small: 'images/services/200x200/produkter-finnar.webp',
            image_large: 'images/services/200x200/produkter-finnar.webp',
            image_alt: 'Bild av produkter designade för behandling av finnar',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av finnar',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'produkter-finnar',
            url_label: 'Läs mer om våra produkter mot finnar',
            url_title: 'Klicka här för att läsa mer om våra effektiva produkter mot finnar'
      )
);


$headline04 = "04. Reparera ärr från finnar";

$procedures = array(
      new Service(
            id: 'behandling-for-finnarr',
            title: 'Reparera ärr efter finnar',
            duration: '4 effektiva metoder',
            price: null,
            content: 'Finnar kan lämna efter sig oönskade ärr och missfärgningar. Med våra specialutvecklade behandlingsmetoder kan vi hjälpa dig att reparera dessa ärr och återställa din huds naturliga utseende. Vi erbjuder fyra effektiva metoder, anpassade för att behandla olika typer av ärr. Klicka här för att läsa mer om hur vi kan hjälpa dig att ta kontroll över din hud och reparera ärr efter finnar.',
            image_small: 'images/services/200x200/behandling-finnarr.webp',
            image_large: 'images/services/200x200/behandling-finnarr.webp',
            image_alt: 'Bild av behandling för ärr efter finnar',
            image_title: 'Åtgärda ärr efter finnar',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'behandling/finnarr',
            url_label: 'Läs mer om behandlingar för ärr efter finnar',
            url_title: 'Klicka här för att läsa mer om våra behandlingar för ärr efter finnar'
      ),
);

$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Varför AcneSpecialisten?!',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Du som vill ha det som är bäst mot akne bör välja Acnespecialisten eftersom vi är experter på att behandla akne och har över 30 års erfarenhet av att ha arbetat med olika typer av akne. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa akneprodukterna för att förebygga och behandla din hud och akne. </p><p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Du bör besöka Acnespecialisten när du känner att din akne påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. Acnespecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår akne. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p><p class="p200 mt-m">Välj Acnespecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din akne och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla akne och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova Acnespecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',
      ),
);


$results = array(
      new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>',
            )
      ),
      new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
            )
      ),
);

$results_url_label ="Se fler resultat";
$results_url_title ="se flera behandlingsresultat av finnar";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily'
      ),

);

$review_url_label ="Läs fler omdömen";
$review_url_title ="AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om akne' => array(
            new Question(
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: '<p class="p200">Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.</p>'
            ),
            new Question(
                  title: 'Har jag akne även om jag bara har en finne?',
                  text: '<p class="p200">ja, du har tekniskt sett akne även om du bara har en enstaka finne. Akne kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har akne om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som akne.</p>'
            ),
            new Question(
                  title: 'Ska jag klämma mina finnar?',
                  text: '<p class="p200">Vi på Acnespecialisten rekommenderar att du inte klämmer finnar själv, eftersom felaktig teknik kan leda till ärrbildning och förvärra inflammationen genom att införa bakterier från dina fingrar. Det är dock sant att finnar kan behöva klämmas, men det måste göras på rätt sätt för att undvika skador på huden. Om du undviker att klämma helt kan ärrbildning också uppstå, eftersom fettsyran i finnen fortsätter att fräta på huden.</p>

                        <p class="p200 mt-m">För att klämma finnar korrekt krävs både rätt utrustning och teknik. På Acnespecialisten har vi erfarna hudterapeuter som kan hjälpa dig att behandla dina finnar på ett säkert och effektivt sätt. Genom att vända dig till oss får du den expertis och omsorg du behöver för att hantera din akne på bästa sätt. Du kan läsa mer om våra aknebehandlingar och hur de kan hjälpa dig här.</p>'
            ),
            new Question(
                  title: 'Försvinner aknen efter tonåren?',
                  text: '<p class="p200">Det är svårt att ge ett entydigt svar på den frågan eftersom det varierar från person till person. För vissa kan akne vara ett tonårsproblem som försvinner när de blir äldre, medan det för andra kan övergå till vuxenakne. Det är inte säkert att aknen försvinner efter tonåren, och det kan variera beroende på individuella faktorer som hormoner, genetik och livsstil.</p>

                        <p class="p200 mt-m">Akne kan uppstå i olika faser av livet och dess svårighetsgrad varierar från person till person. Vissa individer upplever akne under tonåren, som sedan försvinner när de når vuxen ålder. Andra kan vara aknefria under tonåren, men drabbas av akne som vuxna. Den mest besvärliga situationen är när någon drabbas av akne under tonåren som sedan övergår till vuxenakne.</p>

                        <p class="p200 mt-m">När man når vuxen ålder och aknen fortfarande inte har försvunnit, är det stor risk att aknen har lett till ärrbildning. Det är därför viktigt att behandla akne i alla åldrar för att förebygga och minimera risken för att drabbas av acneärr. Oavsett ålder och fas av akne, bör man söka hjälp för att behandla och kontrollera sitt tillstånd, för att minska risken för långsiktiga hudproblem som ärrbildning.</p>'
            ),
            new Question(
                  title: 'Kan jag ha akne även om jag är vuxen?',
                  text: '<p class="p200">Ja, akne kan drabba vuxna och det är faktiskt ganska vanligt. Vuxenakne drabbar cirka 12-22% av alla kvinnor och 3% av alla män. Den kan uppkomma vid 20-, 30- och 40-årsåldern, och ibland ännu senare. Det kallas då för vuxenakne och har också med hormonerna i din kropp att göra, men faktorerna som triggar igång din akne är lite annorlunda än vid tonårsakne.</p>

                        <p class="p200 mt-m">Vid tonårsakne ökar produktionen av det manliga könshormonet i din kropp. Det, i kombination med fettproduktionen, kan leda till att du drabbas av akne. Vid vuxen ålder däremot, kan aknen bero på sådant som graviditet, menstruation, alkohol, stress och preventivmedel. Alltså, yttre faktorer som triggar igång dina hormoner och får aknen att blomma upp.</p>

                       <p class="p200 mt-m">Vuxenakne kan orsakas av flera faktorer, såsom hormonella förändringar, stress, genetik och användning av olämpliga hudvårdsprodukter. Hos kvinnor kan akne ofta vara kopplad till menstruationscykeln eller hormonella förändringar i samband med graviditet och menopaus.</p>

                       <p class="p200 mt-m">Sammanfattningsvis kan akne drabba personer i alla åldrar, och det är viktigt att vara medveten om att akne inte bara är ett tonårsproblem.</p>'
            ),
            new Question(
                  title: 'Förvärras min akne av att jag äter choklad?',
                  text: '<p class="p200">Nej, det är en myt att choklad direkt skulle leda till akne. Ingen vetenskaplig forskning har tydligt påvisat ett direkt samband mellan chokladkonsumtion och uppkomsten av finnar. Det som potentiellt kan påverka din akne är stress. Om du upplever stress över att du ätit choklad, kan det i sin tur bidra till akneutbrott. Men en bit choklad då och då bör inte orsaka akneutbrott hos de flesta människor.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med min akne?',
                  text: '<p class="p200">Att bekämpa akne effektivt kräver en individuellt anpassad strategi som kombinerar lämpliga behandlingar och hudvårdsprodukter, utformade för att passa dina unika behov och din huds specifika tillstånd. På Acnespecialisten, erbjuder vi kostnadsfria hudkonsultationer där vi kan utvärdera ditt specifika fall av akne och hjälpa till att skräddarsy en effektiv behandlingsrutin.</p>'
            )
      ),

);

$faq_url_label ="Läs fler frågor & svar";
$faq_url_title ="läs flera frågor relaterat till akne";

$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'myter-om-akne',
            url_title: '',
            title: 'Myter om Akne',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Akne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
);

$skinguide_url_label ="Läs fler guider";
$skinguide_url_title ="Läs fler guider om akne";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i aknebehandling',
            image_title: 'Cazzandra Lindberg - Expert på aknebehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akne',
            image_title: 'Veronika Benedik - Specialist inom aknevård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom aknehantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på akne'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot aknebehandling',
            image_title: 'Vilma Libom - Expert inom aknebehandling'
      )
);

$specialist_url_label ="Se alla specialister";
$specialist_url_title ="Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'problem/acnearr',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'problem/rosacea',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit',
            url_title: 'Perioral dermatit',
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen4 - Microneedling Verktyg för Hudföryngring',
            url: 'varumarken/dermapen4',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'Cryopen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen Brand Logo',
            image_title: 'Cryopen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'varumarken/cryopen',
            url_title: 'Läs mer om Cryopen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'images/brands/lumenis.svg',
            image_alt: 'Lumenis Brand Logo',
            image_title: 'Lumenis - Laser och Intensivt Pulserat Ljus (IPL) Teknologi för Hudvård',
            url: 'varumarken/lumenis',
            url_title: 'Läs mer om Lumenis Laser och IPL Hudvårdslösningar',
      ),
      new Brand(
            label: 'Alma',
            image: 'images/brands/alma.svg',
            image_alt: 'Alma Brand Logo',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            url: 'varumarken/alma',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'images/brands/prxt.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'varumarken/prxt',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'varumarken/hydrafacial',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'varumarken/infuzion',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label ="Se alla varumärken";
$brands_url_title ="Varumärken för Aknebehandling";

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
                                                            <a href="hudkonsultation" title="<?php echo $floating_consultation_url_title ?>" class="button white expand l10n"><?php echo $floating_consultation_url_label ?></a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="https://bokadirekt.se" title="<?php echo $floating_booking_url_title ?>" class="button white expand l10n"><?php echo $floating_booking_url_label ?></a>
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
                                                <a href="hudkonsultation" title="<?php echo $mobile_consultation_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_consultation_url_label ?></a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="https://bokadirekt.se" title="<?php echo $mobile_booking_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_booking_url_label ?></a>
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
                                          <a href="hudkonsultation" title="<?php echo $consultation_url_title ?>" class="button b200 white l10n"><?php echo $consultation_url_label ?></a>
                                          <a href="https://bokadirekt.se" title="B<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
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
                                    include('../widgets/problem-trivia-card/problem-trivia-card.php');
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
                              <?php echo $treatment_link ?>

                        </section>
                        <?php if (sizeof($type_categories) > 0) { ?>
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
                                                <div class="type-category" id="<?php echo $type_category->id ?>">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="type-category-cards">
                                                            <?php foreach ($type_category->types as $type) {
                                                                  include('../widgets/type-card/type-card.php');
                                                            } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <div class="is-hidden-mobile">
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category-large" id="<?php echo $type_category->id ?>">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="columns is-3 is-variable is-multiline type-category-large-cards">
                                                            <?php foreach ($type_category->types as $type) { ?>
                                                                  <div class="column is-one-third">
                                                                        <?php include('../widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <?php echo $types_url ?>
                              </section>
                        <?php } ?>
                        <?php if (sizeof($symptoms) > 0) { ?>
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
                                                      <?php include('../widgets/symptom-card/symptom-card.php'); ?>
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
                        <section id="treatment-solutions">
                              <h2 class="h500"><?php echo $headline04 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($procedures as $service) { ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="faq"><?php echo $faq_url_label ?></a>
                        </section>
                        <section id="skin-guide">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Hudguide</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="<?php echo $skinguide_url_title ?>"><?php echo $skinguide_url_label ?></a>
                        </section>
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
                                                <?php include('../widgets/related-problem-card/related-problem-card.php'); ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>