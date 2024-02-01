<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Ytliga Blodkärl - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om ytliga blodkärl, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'ytliga blodkärl, behandling av ytliga blodkärl, orsaker till ytliga blodkärl, förebygga ytliga blodkärl, ta bort ytliga blodkärl';

$title = 'Ytliga Blodkärl';

$image_small = 'bilder/problem/424x324/ytliga-blodkarl.webp';
$image_large = 'bilder/problem/424x456/ytliga-blodkarl.webp';
$image_title = 'Visar en hud med ytliga blodkärl';
$image_alt = 'Bild som illustrerar hur ytliga blodkärl ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar ytliga blodkärl, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av ytliga blodkärl, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Spindelkärl',
            url: null,
            title: 'Spindelkärl',
      ),
      new Link(
            label: 'Brustna blodkärl',
            url: null,
            title: 'Brustna blodkärl',
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels";
$consultation_url_title = "Gratis Konsultation för Ytliga Blodkärl";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels";
$booking_url_title = "Boka Behandling för Ytliga Blodkärl";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Ytliga Blodkärl";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Behandling för Ytliga Blodkärl";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Ytliga Blodkärl";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling för Ytliga Blodkärl";


$nav_buttons = array(
      'about' => 'Om ytliga blodkärl',
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

$about_title = 'Om ytliga blodkärl';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är ytliga blodkärl?',
            content: '<p class="p200">Ytliga blodkärl är små, utvidgade blodkärl som ligger nära hudytan och blir därför synliga genom huden. Dessa blodkärl tenderar att vara röda, lila eller blå och uppträder ofta i ansiktet, speciellt på näsan, kinderna och runt ögonen. De kan variera i storlek och form men är vanligtvis mindre än 1-3 mm i diameter. Medan ytliga blodkärl oftast är kosmetiskt störande, och inte betraktas som farlika, kan deras närvaro vara en indikator på underliggande hudsjukdomar som rosacea eller andra inflammatoriska tillstånd. Därför kan det vara värt att konsultera en hudterapeut för att utesluta eventuella bakomliggande problem.</p>',
            extended_content: '<p class="p200 mt-xl">Tekniskt sett är dessa synliga blodkärl en form av venös insufficiens, vilket innebär att de små venösa ventilerna inte fungerar optimalt, vilket leder till att blodet har svårigheter att flyta tillbaka till hjärtat. Detta orsakar en ansamling av blod i dessa små kärl, vilket gör dem mer synliga. Dessa kärl behandlas effektivt med hjäpl av IPL som anpassas efter kundens behov, så en individuell konsultation är ofta nödvändig för att fastställa den bästa behandlingsplanen för dig.</p>
            <p class="p200 mt-xl">I korthet, medan ytliga blodkärl i ansiktet vanligtvis är en kosmetisk bekymmer, kan de vara symptom på andra hudåkommor och bör tas på allvar. En medicinsk konsultation kan hjälpa dig att förstå de underliggande orsakerna och de mest effektiva behandlingsalternativen för din situation.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man ytliga blodkärl?',
            content: '<p class="p200">Förekomsten av ytliga blodkärl i ansiktet kan bero på en rad olika faktorer, både inre och yttre. En av de vanligaste orsakerna är genetik. Om andra i din familj har haft problem med synliga blodkärl, är det mer troligt att du också kommer att uppleva det. En annan viktig faktor är ålder. Med tiden förlorar huden sin elasticitet och blir tunnare, vilket gör att blodkärlen under hudytan blir mer framträdande. Hormonella förändringar, särskilt de som inträffar under graviditet, menopaus eller som en bieffekt av hormonell medicinering, kan också vara en bidragande faktor.</p>',
            extended_content: '<p class="p200 mt-xl">Exponering för solens strålar är en annan viktig variabel. UV-strålning kan försvaga kollagenet i huden, vilket gör blodkärlen mer synliga. Därför rekommenderas alltid användning av solskydd, särskilt på områden som är mest exponerade för solen som ansiktet. Livsstilsfaktorer som alkoholkonsumtion och rökning kan också spela en roll. Båda dessa faktorer kan påverka blodcirkulationen och därmed bidra till utvecklingen av synliga blodkärl. Andra möjliga orsaker inkluderar högt blodtryck, som kan sätta extra påfrestning på blodkärlen, och vissa hudåkommor som rosacea, som ofta associeras med förekomst av ytliga blodkärl.</p>
            <p class="p200 mt-xl">Vissa yrken eller aktiviteter som kräver långvarig exponering för hård vind eller kyla kan också förvärra problemet. Dessutom kan kroniska inflammatoriska tillstånd och vissa medicinska behandlingar, som strålning, förvärra eller orsaka uppkomsten av ytliga blodkärl. Sammanfattningsvis, orsakerna till ytliga blodkärl i ansiktet är många och varierande. De kan vara genetiska eller förvärvade, och kan påverkas av allt från din livsstil till din exponering för olika miljöfaktorer. Om du är bekymrad över ytliga blodkärl, är det bäst att konsultera en hudterapeut för att diskutera dina specifika symptom och möjliga behandlingsalternativ.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'kyla-varme' => 'Kyla & Värme', 'mat-dryck' => 'Mat & Dryck')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får ytliga blodkärl?',
            content: '<p class="p200">Det är en missuppfattning att endast äldre personer eller de med vissa hudåkommor får ytliga blodkärl; i verkligheten kan nästan vem som helst drabbas. Dock finns det vissa grupper som löper en högre risk än andra. Genetik spelar en viktig roll i denna fråga. Om det finns en familjehistoria av ytliga blodkärl eller relaterade hudproblem som rosacea, är det större sannolikhet att du också kommer att drabbas. Etnicitet kan också vara en faktor; personer med ljusare hudtyper är oftare drabbade än de med mörkare hudtoner. Ålder är en annan faktor som kan öka sannolikheten för att utveckla dessa synliga blodkärl. Med åldern blir huden tunnare och förlorar sin elasticitet, vilket gör blodkärlen mer framträdande. Hormonella förändringar, som de som sker under graviditet, menopaus eller som en bieffekt av hormonbehandlingar, kan också leda till ytliga blodkärl.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsval som rökning och alkoholkonsumtion kan bidra till utvecklingen av ytliga blodkärl. Dessa faktorer påverkar blodcirkulationen och kan göra blodkärlen mer synliga. Likaså kan långvarig exponering för solen utan adekvat solskydd förvärra tillståndet. Yrkesgrupper som är utsatta för extrema väderförhållanden, som byggarbetare eller utomhusidrottare, löper också en ökad risk. Stress och högt blodtryck har också varit knutna till utvecklingen av ytliga blodkärl.</p>
            <p class="p200 mt-xl">Det är också viktigt att notera att vissa medicinska tillstånd och behandlingar kan göra dig mer benägen att utveckla ytliga blodkärl. Personer med rosacea, en kronisk inflammatorisk hudsjukdom, har högre förekomst av ytliga blodkärl. Detsamma gäller för personer som har genomgått strålbehandling. Sammanfattningsvis är ytliga blodkärl i ansiktet inte diskriminerande när det kommer till vem de drabbar, men vissa grupper har en högre riskfaktor på grund av genetik, ålder, livsstilsval och medicinska tillstånd. Om du tillhör någon av dessa riskgrupper och är orolig för ytliga blodkärl, är det rekommenderat att söka rådgivning från en hudspecialist.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man ytliga blodkärl?',
            content: '<p class="p200">Ytliga blodkärl i ansiktet, även kallade "spindelkärl" eller "brustna blodkärl," är oftast lokaliserade i särskilda områden beroende på en rad faktorer. De är vanligtvis mer synliga på platser där huden är tunn eller där det är ökad blodflöde. Näsan är en vanlig plats för ytliga blodkärl, särskilt runt näsvingarna och på näsryggen. Detta beror ofta på den tunna huden i detta område, samt det faktum att näsan är utsatt för många miljöfaktorer som sol, vind och kyla. Kinderna är ett annat vanligt område där ytliga blodkärl kan uppstå. Detta är delvis på grund av de större blodkärlen som finns i detta område, och de tunna lagren av hud och fett som täcker dem. Kinderna är också utsatta för miljöfaktorer och temperaturförändringar, vilket kan förvärra tillståndet.</p>',
            extended_content: '<p class="p200 mt-xl">Pannan och området runt ögonen är också platser där man kan se ytliga blodkärl. Huden kring ögonen är extremt tunn, och detta område är särskilt känsligt för både interna och externa påverkningar. Detsamma gäller för pannan, som ofta utsätts för solljus och andra miljöfaktorer. Haka och området runt munnen är mindre vanliga platser för ytliga blodkärl, men de kan fortfarande förekomma där. Blodkärl kring munnen kan ibland bli mer framträdande på grund av saker som tandproblem, het mat och dryck, eller hormonella förändringar.</p>
            <p class="p200 mt-xl">Eftersom dessa områden i ansiktet är särskilt utsatta för solskador, är det mycket viktigt att använda solskydd för att minimera risken för ytliga blodkärl. Oavsett var i ansiktet de förekommer, kan ytliga blodkärl vara både estetiskt störande och en indikation på underliggande hudproblem eller medicinska tillstånd. Därför är det viktigt att konsultera en hudspecialist för diagnos och behandlingsalternativ om du märker att de börjar utvecklas.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'nasa' => 'Näsa')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten kopplas du till en personlig hudterapeut som hjälper dig identifiera de ytliga blodkärlen i ditt ansikte och skapar en individuell behandlingsplan.',

            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva behandlingar för ytliga blodkärl, anpassade till din specifika hudtyp och problemområden, så att du snabbt och säkert kan förbättra hudens utseende.',

            url_label: 'Se behandlingar för ytliga blodkärl',
            url: 'ipl-ytliga-blodkarl.php',
            url_title: 'Utforska våra skräddarsydda behandlingar för ytliga blodkärl'
      ),
);
/*
$types_title = 'Olika typer av ytliga blodkärl';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Ytliga blodkärl baserat på ålder',
            content: '<p class="p200">Ytliga blodkärl kan förekomma i olika åldrar men är vanligast bland vuxna och äldre. I yngre år kan de vara kopplade till specifika medicinska tillstånd eller hudirritation. Hos vuxna kan yttre faktorer som solskador och livsstilsval spela en roll. Hos äldre personer är det ofta en naturlig del av hudens åldrande.</p>',
            types: array(
                  new BasedType(
                        title: 'Ytliga blodkärl hos vuxna',
                        subtitle: 'Vanligast över 30 år',

                        image_url: 'images/problems/102x102/blodkarl-vuxna.webp',
                        image_alt: 'Bild av ytliga blodkärl hos vuxna',
                        image_title: 'Ytliga blodkärl hos vuxna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Ytliga blodkärl hos äldre',
                        subtitle: 'Vanligt som en del av hudens åldrande',

                        image_url: 'images/problems/102x102/blodkarl-aldre.webp',
                        image_alt: 'Bild av ytliga blodkärl hos äldre',
                        image_title: 'Ytliga blodkärl hos äldre',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Ytliga blodkärl hos barn och ungdomar',
                        subtitle: 'Ovanligt men inte omöjligt',

                        image_url: 'images/problems/102x102/blodkarl-ungdom.webp',
                        image_alt: 'Bild av ytliga blodkärl hos barn och ungdomar',
                        image_title: 'Ytliga blodkärl hos barn och ungdomar',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Ytliga blodkärl baserat på svårighetsgrad',
            content: '<p class="p200">Ytliga blodkärl kan variera i svårighetsgrad från endast ett eller några få synliga blodkärl till större nätverk av blodkärl som täcker stora områden av huden. I milda fall är de oftast kosmetiska och inte särskilt störande, medan i svårare fall kan de vara kopplade till andra hudåkommor och till och med leda till obehag eller smärta. Det är viktigt att diagnostisera och behandla ytliga blodkärl utifrån deras svårighetsgrad för att säkerställa bästa möjliga behandlingsresultat.</p>',
            types: array(
                  new BasedType(
                        title: 'Milda ytliga blodkärl',
                        subtitle: 'Enstaka eller några få synliga blodkärl',

                        image_url: 'images/problems/102x102/milda-blodkarl.webp',
                        image_alt: 'Bild av milda ytliga blodkärl',
                        image_title: 'Milda ytliga blodkärl exemplifierade',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Medelsvåra ytliga blodkärl',
                        subtitle: 'Flera synliga blodkärl eller mindre nätverk',

                        image_url: 'images/problems/102x102/medelsvara-blodkarl.webp',
                        image_alt: 'Bild av medelsvåra ytliga blodkärl',
                        image_title: 'Medelsvåra ytliga blodkärl exemplifierade',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Svåra ytliga blodkärl',
                        subtitle: 'Stora nätverk av blodkärl eller kopplat till andra hudåkommor',

                        image_url: 'images/problems/102x102/svara-blodkarl.webp',
                        image_alt: 'Bild av svåra ytliga blodkärl',
                        image_title: 'Svåra ytliga blodkärl exemplifierade',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Ytliga blodkärl baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer som sol, temperatur, kosmetika och miljöfaktorer kan ha en betydande inverkan på uppkomsten eller förvärringen av ytliga blodkärl. Exponering för dessa faktorer kan leda till irritation i huden, ökad blodflöde eller svullnad i blodkärlen, vilket resulterar i synliga ytliga blodkärl.</p>',
            types: array(
                  new BasedType(
                        title: 'Solinducerade blodkärl',
                        subtitle: 'Orsakade av solskador',

                        image_url: 'images/problems/102x102/sol-blodkarl.webp',
                        image_alt: 'Bild av solinducerade blodkärl',
                        image_title: 'Exempel på solinducerade blodkärl',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Väderinducerade blodkärl',
                        subtitle: 'Orsakade av extrem kyla eller värme',

                        image_url: 'images/problems/102x102/vader-blodkarl.webp',
                        image_alt: 'Bild av väderinducerade blodkärl',
                        image_title: 'Exempel på väderinducerade blodkärl',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Livsstilsinducerade blodkärl',
                        subtitle: 'Orsakade av livsstilsfaktorer som stress, alkohol och dålig kost',

                        image_url: 'images/problems/102x102/livsstil-blodkarl.webp',
                        image_alt: 'Bild av livsstilsinducerade blodkärl',
                        image_title: 'Exempel på livsstilsinducerade blodkärl',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Ytliga blodkärl baserat på område',
            content: '<p class="p200">Ytliga blodkärl kan uppstå på olika områden i ansiktet. De vanligaste platserna inkluderar näsan, kinderna och pannan. Placeringen kan ibland ge en indikation på orsaken, som kan vara genetisk predisposition, solskador eller andra yttre faktorer som påverkar blodcirkulationen i ansiktet.</p>',
            types: array(
                  new BasedType(
                        title: 'Blodkärl på näsan',
                        subtitle: 'Även kallat Nasal Telangiectasia',

                        image_url: 'images/problems/102x102/blodkarl-nasa.webp',
                        image_alt: 'Bild av blodkärl på näsan',
                        image_title: 'Exempel på blodkärl på näsan',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Blodkärl på kinderna',
                        subtitle: 'Även kallat Cheek Telangiectasia',

                        image_url: 'images/problems/102x102/blodkarl-kinder.webp',
                        image_alt: 'Bild av blodkärl på kinderna',
                        image_title: 'Exempel på blodkärl på kinderna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Blodkärl i pannan',
                        subtitle: 'Även kallat Forehead Telangiectasia',

                        image_url: 'images/problems/102x102/blodkarl-panna.webp',
                        image_alt: 'Bild av blodkärl i pannan',
                        image_title: 'Exempel på blodkärl i pannan',

                        url: null,
                        url_title: null,
                  ),
            )
      ),

);

$symptoms_title = 'Ytliga blodkärl symptom';

$symptoms = array(
      new Symptom(
            name: 'Röda Linjer eller Mönster',
            aka: 'Kända som telangiektasier eller spindelvener',
            content: 'Dessa är små, fina och utsträckta röda blodkärl som framträder i ett spindelnät- eller trädgrensmönster. Vanligtvis synliga på huden, framför allt på näsan och kinderna. De är mestadels ofarliga men kan vara estetiskt störande för många.',
            
            url_label: null,
            url: null,
            url_title: null,
            
            image: 'images/symptoms/102x102/roda-linjer.webp',
            image_alt: 'Bild av röda linjer eller mönster på huden',
            image_title: 'Röda Linjer eller Mönster på Huden'
      ),

      new Symptom(
            name: 'Färgförändringar',
            aka: 'Även kallade vaskulära lesioner',
            content: 'Ytliga blodkärl kan variera i färg från rött till lila eller blåaktigt. Denna färgvarians är oftast påverkad av kärlets djup och tjocklek samt hudens pigmentering.',
            
            url_label: null,
            url: null,
            url_title: null,
            
            image: 'images/symptoms/102x102/fargforandringar.webp',
            image_alt: 'Bild av färgförändringar i blodkärl',
            image_title: 'Färgförändringar i Ytliga Blodkärl'
      ),

      new Symptom(
            name: 'Lokalisering',
            aka: 'Områden där ytliga blodkärl är vanligast',
            content: 'Ytliga blodkärl är mest vanligt förekommande i ansiktet, särskilt på näsan och kinderna. De kan också förekomma runt näsvingarna, på pannan och ibland även runt munnen.',
            
            url_label: null,
            url: null,
            url_title: null,
            
            image: 'images/symptoms/102x102/lokalisering.webp',
            image_alt: 'Bild av områden där ytliga blodkärl är vanligast',
            image_title: 'Lokalisering av Ytliga Blodkärl'
      ),

      new Symptom(
            name: 'Ingen Smärta',
            aka: 'Vanligtvis smärtfria',
            content: 'Ytliga blodkärl är i de flesta fall smärtfria. De kan dock kännas ömt eller vara mer känsliga i kallt väder, men de orsakar sällan någon fysisk obehag.',
            
            url_label: null,
            url: null,
            url_title: null,
            
            image: 'images/symptoms/102x102/smartfri.webp',
            image_alt: 'Bild som illustrerar att ytliga blodkärl är smärtfria',
            image_title: 'Ytliga Blodkärl är Vanligtvis Smärtfria'
      ),
);
*/
$headline01 = "01. Identifiera dina ytliga blodkärl";

$service = new Service(
      title: 'Konsultation för Ytliga Blodkärl',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på ytliga blodkärl utförs en undersökning av ditt tillstånd. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av ytliga blodkärl',
      image_title: 'Konsultation för Ytliga Blodkärl',

      url_label: 'Läs mer om vår konsultation för ytliga blodkärl',
      url: 'ipl-ytliga-blodkarl.php',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för ytliga blodkärl',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ytliga blodkärl',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla ytliga blodkärl";

$services = array(
      new Service(
            title: 'IPL mot Ytliga Blodkärl',
            duration: '50 min',
            price: '2595 kr',
            content: 'IPL (Intensivt Pulserande Ljus) är en effektiv metod för att behandla ytliga blodkärl. Tekniken använder ljusvågor av olika längder för att värma upp och skada blodkärlen, vilket får dem att krympa och försvinna eller bli mindre framträdande. IPL-behandling är en skonsam metod som minskar synligheten av ytliga blodkärl utan att skada den omgivande huden.',

            image_small: 'images/services/200x200/ipl.webp',
            image_large: 'images/services/200x200/ipl.webp',
            image_alt: 'Bild av IPL-behandling mot ytliga blodkärl',
            image_title: 'IPL-behandling mot Ytliga Blodkärl',

            url_label: 'Läs mer om IPL mot ytliga blodkärl',
            url: 'ipl-ytliga-blodkarl.php',
            url_title: 'Klicka här för att läsa mer om IPL-behandling mot ytliga blodkärl',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling mot ytliga blodkärl',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
            booking_url_title: 'Klicka för att boka tid för en IPL-behandling mot ytliga blodkärl'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp för mina ytliga blodkärl?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för mina ytliga blodkärl?',
            image_title: 'När ska jag söka hjälp för mina ytliga blodkärl?',
            content: '<p class="p200">Ytliga blodkärl är en vanlig hudåkomma som kan drabba personer i alla åldrar. För många är det ett kosmetiskt problem som kan påverka självkänslan och det sociala välbefinnandet. Om du känner att dina ytliga blodkärl börjar påverka ditt liv negativt, eller om du har försökt olika behandlingar utan framgång, kan det vara dags att söka professionell hjälp.</p>
            <p class="p200 mt-m">Hos en hudterapeut kan du få en personlig konsultation och en skräddarsydd behandlingsplan. Då utförs en noggrann analys av din hudtyp, diskutera potentiella orsaker till dina ytliga blodkärl och rekommendera den mest effektiva behandlingen för dig. Detta kan inkludera allt från IPL-behandlingar till laserbehandlingar eller andra medicinska ingrepp. Så, om du känner att dina ytliga blodkärl har blivit en belastning, eller om du helt enkelt vill ha en förbättring av din hud, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget och behandla dina ytliga blodkärl.</p>',
      ),
      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina ytliga blodkärl?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina ytliga blodkärl?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina ytliga blodkärl?',
            content: '<p class="p200">Om du letar efter en effektiv och långsiktig lösning på problemet med ytliga blodkärl, är AcneSpecialisten det självklara valet. Trots namnet har vi en bred erfarenhet inom hudvård, inklusive behandling av ytliga blodkärl. Vi erbjuder skräddarsydda lösningar baserade på ditt individuella behov och hudtyp.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att ge dig det bästa möjliga resultatet. Vårt team av kvalificerade hudterapeuter kommer att skapa en individuell behandlingsplan för dig och stödja dig genom hela processen, från konsultation till uppföljning.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten för dina ytliga blodkärl innebär att du får tillgång till de mest avancerade och effektiva behandlingarna som finns. Vi hjälper dig under hela din hudvårdsresa och engagerar oss i att hjälpa dig uppnå och bibehålla en hy du trivs med. Vår kunskap och erfarenhet gör oss till ditt bästa val för behandling av ytliga blodkärl.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="akne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="akne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_title: 'Person som har rosacea',
            image_alt: 'Ansiktet på en person som behandlat rosacea, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat för ytliga blodkärl";


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
      'Generellt om ytliga blodkärl' => array(
            new Question(
                  title: 'Är ytliga blodkärl farliga?',
                  text: '<p class="p200">Ytliga blodkärl är vanligtvis inte farliga och anses oftast vara en estetisk fråga snarare än en medicinsk. Men det är viktigt att inte avfärda dem helt, eftersom de i vissa sällsynta fall kan vara en indikator på underliggande hälsotillstånd som högt blodtryck eller blodsjukdomar. Om du märker en snabb ökning i antalet ytliga blodkärl eller om de förändras i färg eller form, rekommenderar vi att du konsulterar en hudläkare eller annan medicinsk specialist för att utesluta eventuella allvarliga problem.</p>'
            ),
            new Question(
                  title: 'Är ytliga blodkärl genetiskt betingade?',
                  text: '<p class="p200">Ja, det finns starka bevis för att genetik spelar en roll i förekomsten av ytliga blodkärl. Om dina föräldrar eller andra nära släktingar har eller har haft problem med ytliga blodkärl, är det en högre sannolikhet att du också kommer att drabbas. Även om det inte är den enda faktorn, är genetik en viktig komponent att överväga i din riskbedömning och eventuella förebyggande åtgärder.</p>'
            ),
            new Question(
                  title: 'Var på kroppen kan man få ytliga blodkärl?',
                  text: '<p class="p200">Ytliga blodkärl kan dyka upp på olika delar av kroppen men är mest vanliga i ansiktet—särskilt runt näsan och kinderna—och på benen. I vissa fall kan de även förekomma på bröstet, ryggen, och armarna.</p>'
            ),
            new Question(
                  title: 'Kan man förebygga ytliga blodkärl?',
                  text: '<p class="p200">Det finns inga fullständigt säkra metoder för att förebygga utvecklingen av ytliga blodkärl, men det finns flera försiktighetsåtgärder som kan hjälpa. Skydda din hud från stark sol och undvik extrema temperaturförändringar. Det är också bra att undvika exponering för skadliga kemikalier och irritanter.</p>'
            ),
            new Question(
                  title: 'Hur vanliga är ytliga blodkärl?',
                  text: '<p class="p200">Ytliga blodkärl är en mycket vanlig hudåkomma, särskilt bland äldre individer och de med ljusare hudtyper. De är vanligtvis mer uttalade efter 30-årsåldern och kan bli mer framträdande med ytterligare åldrande. Vissa undersökningar visar att upp till 40-50% av vuxna kan uppleva någon form av ytliga blodkärl under sin livstid.</p>'
            ),
            new Question(
                  title: 'Påverkas ytliga blodkärl av livsstilsfaktorer som kost och motion?',
                  text: '<p class="p200">Absolut, livsstilsval kan faktiskt förvärra problemet med ytliga blodkärl. En ohälsosam diet kan leda till viktökning och dålig cirkulation, vilket i sin tur kan förvärra ytliga blodkärl. Å andra sidan kan en balanserad diet och regelbunden motion förbättra blodflödet och potentiellt minska uppkomsten eller svårighetsgraden av ytliga blodkärl. Motion hjälper till att stärka och tonifiera blodkärlen, vilket gör dem mindre sannolika att bli ytliga eller skadade.</p>'
            ),
      ),
      'Behandling mot ytliga blodkärl' => array(
            new Question(
                  title: 'Hur behandlas ytliga blodkärl?',
                  text: '<p class="p200">Ytliga blodkärl behandlas med hjälp av intensivt pulserat ljus, eller IPL. Denna teknologi fungerar genom att sända ut en serie av ljuspulser över en rad olika våglängder som absorberas av de röda blodkärlen. Värmen från ljuset får blodkärlen att koagulera och brytas ner, vilket resulterar i att de gradvis försvinner eller blir mindre framträdande. Eftersom IPL använder en bredare våglängd jämfört med laserterapi, kan det vara mer anpassningsbart och användbart för att behandla olika typer av ytliga blodkärl. IPL betraktas som en icke-invasiv behandlingsform och har därför kortare återhämtningstid jämfört med kirurgiska alternativ.</p>'
            ),
            new Question(
                  title: 'Hur kan jag förhindra att ytliga blodkärl återkommer efter en behandling?',
                  text: '<p class="p200">Även om det inte finns något sätt att garantera att ytliga blodkärl inte kommer tillbaka, finns det förebyggande åtgärder du kan vidta. Detta inkluderar att använda solskydd, undvika extrem värme och kyla, och att hålla huden väl återfuktad. Det är också viktigt att vara uppmärksam på eventuella triggers, som alkohol eller koffein, som kan orsaka utvidgning av blodkärlen och därmed förvärra problemet.</p>'
            ),
            new Question(
                  title: 'Kan jag behandla ytliga blodkärl med hemmabehandlingar?',
                  text: '<p class="p200">Tyvärr saknas en effektiv hemmabehandling för att behandla ytliga blodkärl. Orsaken är att kärlen ligger under hudytan dit hemmavårdsprodukter inte når utan att potentiellt skada huden. Det är alltid bäst att konsultera en hudterapeut för att diskutera dina behandlingsalternativ och för att säkerställa att du får en behandling som är både effektiv och säker för din hudtyp.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till ytliga blodkärl";

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
$skinguide_url_title = "Läs fler guider om ytliga blodkärl";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av ytliga blodkärl',
            image_title: 'Cazzandra Lindberg - Expert på behandling av ytliga blodkärl'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på ytliga blodkärl',
            image_title: 'Veronika Benedik - Specialist inom vård av ytliga blodkärl'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling av ytliga blodkärl',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på ytliga blodkärl'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av ytliga blodkärl',
            image_title: 'Vilma Libom - Expert inom behandling av ytliga blodkärl'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter Specialiserade på Ytliga blodkärl";

$related_problems = array(
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea',
            image_title: 'Rosacea - en hudsjukdom som ofta associeras med ytliga blodkärl',
            url: 'rosacea.php',
            url_title: 'Rosacea'
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
$brands_url_title = "Varumärken för behandling av ytliga blodkärl";

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot ytliga blodkärl" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>