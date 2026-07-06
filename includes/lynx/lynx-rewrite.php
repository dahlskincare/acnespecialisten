<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX REWRITE — hantverket (läs DENNA när du ska skriva om en sida)
> Allt du behöver för att skriva om ett textblock: bedömningsmodellen (vad LYNX läser som AI), formeln, husrösten, ramarna+juridiken, SEO-skyddet, checklistan, processen och skyddsreglerna. **Läs `lynx-START.php` FÖRST** (läge + router + regler). Modell-FORSKNINGEN + SCORE/AIQ/mät bor i `lynx-models.php`. Rådata: `lynx-examples.php` (facit) m.fl. (filkarta i `lynx-data.php`).

## 1. Hävstången (varför vissa sidor är SLIGHT och andra SIGNIFICANT)
Samma mall, samma ämne — ändå läser `acne.php` som människa (SLIGHT) och `acne-ansikte.php` som AI (SIGNIFICANT). Skillnaden är **informationstäthet**, inte längd, säljton eller komma-antal.
- SIGNIFICANT öppnar med **fyllnad** (tom skala, cirkulärt, marknadsföring, "det är viktigt att").
- SLIGHT/HUMAN leder med **konkret täthet** — hela modellen i §1.1.

**⚠️ RAMEN FÖR HELA UPPDRAGET (online-verifierad 6 jul):** den egentliga hävstången är **SUBSTANS-/kvalitetslyftet** (konkret mekanism, gloss av fackord, verifierbara siffror, ärlighet, du-tilltal) — INTE att "av-AI:a" texten kosmetiskt. Google belönar kvalitet oavsett produktionssätt och **straffar inte AI-text i sig** ("rewarding high-quality content, however it is produced"; Ahrefs ~600k sidor: ingen negativ AI↔ranking-koppling). **AI COPY-flaggan (§1.1) är en intern PROXY för substans-kvalitet — en bra mätsticka, inte en Google-signal.** Följd: skriv aldrig om bara för att byta fraser/syntax och lura detektorn utan att tillföra verkligt värde (kosmetisk detektor-undvikande ger noll SEO-vinst). Vår metod undviker fällan eftersom den tillför mekanism/fakta. *(Bakgrund: LYNX = bespoke-verktyg, SCORE-formeln overifierbar; de-AI-metodiken validerad mot både AI-detektering och Googles people-first — se `lynx-score.php` + `lynx-logg.php` 6 jul.)*

---

## 1.1 Bedömningsmodellen — vad LYNX rimligtvis bedömer (validerad mot per-block-facit)
Axeln = **fyllnad/mall ↔ rak konkret täthet**. Bekräftat mot facit på acne.php, acne-ansikte, ipl-rosacea. LYNX betygsätter **alla** textblock på sidan, inte bara synliga.

- **🟥 EXTREME** — mest mättade fyllnaden: block som utöver marknad/mekanism även **stuffar sökordet** (samma term ~×4) + staplar "vilket"-kedjor + är långt. Sällsynt; enda facit hittills = microneedling-kortet på behandla-pigment (se `lynx-examples.php`). Åtgärd = som SIGNIFICANT + kap repetitionen/keyword-stuffingen.
- **🔴 SIGNIFICANT** — fyllnad utan täthet. **Öppningen dominerar:** skal-öppning ("påverkar miljontals", "vanligast bland… oavsett kön"), cirkulär ("kan uppstå på flera sätt/delar"), marknads-superlativ ("avancerad… effektiv lösning", "experter"), importans-filler ("det är viktigt att", "viktigt att förstå att"), meta-scaffolding ("Här förklarar vi…"), "inte bara X utan Y". → SIGNIFICANT oavsett hur bra resten är; lång marknadstext förstärker.
- **🟠 MODERATE** — fyllnadsöppning MEN en äkta poäng. Även "led med vad det ÄR + gloss" landar här om det inte byggs ut till full mekanism (jfr acne.php "Akne består av papler och pustler…" = MODERATE).
- **🔵 SLIGHT** — **full, tät mekanism-vandring med kausal payoff** ("…porerna täpps till, bakterier samlas, kroppen svarar med en inflammation, och det är just detta som syns"), ELLER kort + genomgående konkret (definition + plats; konkreta yttre faktorer; konkreta vi-handlingar "vi tar bilder, rengör huden, skyddar ögonen").
- **🟢 HUMAN** — kort + specifik + självsäker: en konkret **siffra/mått** ("större än 5 mm"), namngiven maskin ("Alma Rejuve DyeVL"), eller äkta omdöme med personlig detalj ("gått där i 2-3 år").

**✅ EFTER-bevis ×2 (acne-ansikte + om-oss, refresh 5 jul — nyckel 1 KAUSALT belagd och REPLIKERAD):** 10 omskrivna flaggade block mätta → **9 nådde 🔵/🟢, 1 stannade 🟠** (acne-ansiktes intro, se §2-varningen). Vi ändrade öppningarna, betygen flyttade — på två oberoende sidor; t.o.m. omvändningen belagd (om-oss klinik-blocket: samma 3 namngivna kliniker fälldes i april av längd+marknad, räddar blocket när marknaden är borta). **Stabilitet (lika viktig lärdom):** de ~10 ORÖRDA 🔵/🟢-blocken behöll EXAKT tier över refresh på båda sidorna → per-block-betygen är deterministiska för oförändrad text. Följder: (a) **gamla facit gäller för orörda block** — kösidornas sparade facit behöver inte hämtas om; (b) **betygsflytt är attribuerbar till textändring**, inte re-scoring-brus. Detaljer i `lynx-examples.php` (EFTER-sektionerna).

**Fem nycklar:** (1) Öppningen sätter GOLVET (mekanism/konkret vs fyllnad/marknad — *tolka via nyckel 5: en enstaka mild fras är ingen fyllnadsöppning om konkretionen kommer direkt*), MEN **fluff-ackumulering × längd höjer graden** — ett kort praktiskt block klarar SLIGHT även med ett marknadsord (facit: behandla-pigment banner/about-1 = SLIGHT trots "de mest effektiva"), ett långt block med staplad marknad/hedge blir 🔴/🟥 trots mekanism (behandlingskorten). Byt fyllnadsöppning mot mekanism/konkret OCH kapa fluff-ackumuleringen. *(Samma behandling kan få olika betyg: laser-kortet = SLIGHT på acnebehandling, SIGNIFICANT på behandla-pigment — se `lynx-examples.php`.)* (2) SLIGHT-ribban är hög — hela blocket måste vara tätt, halvkonkret = MODERATE. (3) Kort + konkret siffra/namn → HUMAN ("Lägg till 1000 kr…", "större än 5 mm", "Dermapen 4"); längd är modifierare. (4) **Fluff-svansen** drar ner ett annars konkret block ("perfekt anpassad för dina unika behov", "uppnå dina hudvårdsambitioner", "säkerställa en trygg upplevelse") — och det gäller även en **cirkulär summeringssvans som bara upprepar vad blocket redan sagt, även utan ordet "Sammanfattningsvis"** (facit: microneedling på acnebehandling — full mekanism men 🔴 pga längd + "Kombinationen av dessa… få bort akne"-svans). Korta, konkreta instruktioner (eftervård: "håll rent, avstå smink första dygnet") klarar SLIGHT även med ett milt "det är viktigt att". **(5) Positiv-data-nycklar (2 jul — första SLIGHT-tunga facitet: micro/porto/acne-rygg/sebo, 23🔵/9🟢 av 53 block):** en ENSTAKA fyllnads-/importansfras fäller INTE ett block — det är ackumuleringen som fäller. Fyllnadsfras + **konkretion direkt i mening 1–2** = 🔵 (acne-rygg: "flera olika faktorer" → talg-mekanism i mening 2 = 🔵; "viktigt att förstå dess orsaker" → hormoner/genetik/svett/friktion = 🔵); fyllnadsfras + mer fyllnad = 🔴 (acne.php/acne-rygg demografi-blocken). Konkreta **process-/stegblock tål flera marknadsord** (portomning: nästan allt 🔵 trots effektiv/skonsam/idealisk — Vapozon, lansett, peelingtvätt bär). **CTA-pivot-räddningen gäller även behandlingskort** (acne-rygg "Daglig behandling… Boka konsultation" 🔵, sebo CryoPen-kortet 🔵 — nu belagt på 3 sidor). **FAQ-svar kan nå 🟢** (sebo ×2) → Fas 2-FAQ i husröst är även en AI COPY-/medel-spak (§1.4). **🔵↔🟢-gränsen är brus utan operativ betydelse** — båda = lämna (§13.D); lägg ingen prediktionsmöda där.

**Mål:** rework allt som är 🔴 SIGNIFICANT eller 🟠 MODERATE → **minst 🔵 SLIGHT**. 🔵/🟢 skrivs inte om stilistiskt men ses över med lätt hand (tydliga fixar: typo/grammatik/tappat sökord/uppenbar tell — ej över-omskrivning, §13.D/§1.3). 🟢 HUMAN nås bara på naturligt korta block (definition med siffra, namngiven maskin, kort erbjudande, omdöme) — **tvinga aldrig ner ett förklarande block i längd för att jaga HUMAN** (krockar med §13.N). För förklarande prosa är SLIGHT målet.

**Modell-referens:** `acne.php` är samma ämne som acne-ansikte fast i SLIGHT/MODERATE-version — modellera omskrivningar direkt på dess SLIGHT-block. Alla per-block-facit (sida + datum) loggas i **`includes/lynx/lynx-examples.php`** — växande korpus; fyll på vid nya facit, och logga före→efter när resultat kommer.

---

## 1.3 Prediktions-rubrik (operationell) — v5: en **±1-TIER-BAND-modell**
Gissa en blocks AI COPY-tier (🟥 EXTREME > 🔴 SIGNIFICANT > 🟠 MODERATE > 🔵 SLIGHT > 🟢 HUMAN). **Tre ofuskade blindtest (betyg dolda):** ipl 16/24 exakt (v2-rubrik), om-oss 4/11 exakt (v3 — ÖVERkorrigerade), 37-block hårdladdat set 13–16/37 exakt / 84–89 % ±1 (v4 + Fable 5, 2 jul — 3 oberoende bedömare nästan identiska → missarna var systematiska RUBRIK-luckor, alla redan dokumenterade i §1.1; v5 = §1.3 synkad med §1.1, ingen ny tuning; full data i `lynx-examples.php`). **Blindtest 5 (2 jul em — första ÄKTA out-of-sample: 20 block ur de 6 nya MODERATE-faciten, 1 färsk bedömare, facit dolt): 55 % exakt / 90 % ±1 / binärt jobb-vs-OK 15/20** — v5 generaliserar i nivå med regressionsseten (semi-holdout-farhågan 38 % motbevisad); 2-stegsmissarna = UNDERgissad marknad/passiv på behandlingsblock (regeln fanns, tillämpningen brast), båda konfidens ≤55 → <65-flaggan fångar dem. Ingen regeländring (data i `lynx-examples.php`). **Slutsats: exakt tier är BRUS** (LYNX:s mid-tier-gränser är luddiga + sid-kontext-beroende — "om oss"-prosa mildare än behandlings-prosa). **Det pålitliga är ±1-bandet.** Använd modellen som ett **band** ("troligen SLIGHT–MODERATE"), inte en exakt etikett. **Vi slutar mikro-tuna per sida** (v2↔v3 pendlade = overfit); ändra bara om ett mönster upprepas över ≥2 sidor.

**Procedur:**
1. **Omdöme** → HUMAN ENDAST med konkret personlig detalj (namn/tid, "gått där 2-3 år"); **generiskt omdöme → SLIGHT** — även med känslo-story utan namn/tid ("var skeptisk… blev bättre").
2. **Kort (1–2 meningar), icke-omdöme** → **SLIGHT** som default (CTA "Boka…", kort instruktion, definition, en konkret nytta + "Läs mer"). **Undantag uppåt (§1.1 nyckel 3):** kort + konkret **siffra/mått/namngiven maskin** ("större än 5 mm", "1000 kr", "Alma Rejuve DyeVL") eller kort direkt mänskligt röstad instruktion → **HUMAN**; kort CTA UTAN siffra/namn förblir SLIGHT (O09-läxan). **Undantag nedåt:** kort är inget frikort — tät marknads-öppning utan konkret pivot ("X är en avancerad… effektiv lösning") → **SIGNIFICANT** trots 2 meningar (acne laser-kortet); med snabb konkret CTA-pivot ("boka en kostnadsfri konsultation") kan kort marknad stanna SLIGHT (behandla-pigment-bannern; 2 jul belagt även för behandlingskort: acne-rygg "Daglig behandling…", sebo CryoPen). **Fluff-svans** ("uppnå dina hudvårdsambitioner", cirkulär summering) lyfter även ett kort/konkret block → SIGNIFICANT (dermapen eftervård-p3).
3. **≥3 meningar — öppningen sätter tyngdpunkten:**
   - konkret/mekanism/action/process/historik-öppning → **SLIGHT–MODERATE**; → SIGNIFICANT ENDAST om den avslutas med en TÄT hög marknadssuperlativ ("mest effektiva/garanterar/optimala resultat").
   - marknads-superlativ-öppning → **MODERATE**; → SIGNIFICANT om tät marknad staplas igenom (flera superlativ + upprepat "inte bara X utan Y"). *(Blindtest 3: marknadstunga behandlingsblock undergissades genomgående ett steg — facit är HÅRDARE mot marknad än man tror; luta åt SIGNIFICANT vid tvekan på behandlingsprosa.)*
   - importans/hedge/scensättning/**meta-scaffolding** ("det är viktigt att", "en rad olika faktorer", "Att navigera i…", "förstår vi vikten av", **"Här förklarar vi…"/"På denna sida går vi igenom…"**) → **SIGNIFICANT som default — men gradienten nedan avgör.** **Gradient (2 jul, SKÄRPT efter blindtest 4):** räkna fyllnad vs konkretion **över HELA blocket**, inte frasen i sig. EN mild fras + konkretion direkt (mening 1–2) + REN avslutning → **SLIGHT** (acne-rygg ×2, dermapen eftervård-p1); fras + konkretion men även lätt svans → **MODERATE** (microneedling-prep, portomning-lermask); **→ SIGNIFICANT trots konkret mitt vid: staplade fraser i öppningen (2–3: "avgörande… bästa… effektiv"), fluff i BÅDA ändar (skal-öppning + importans-svans), lång + boilerplate-svans, eller hedge-stapel + AI-vokab ("spelar en viktig roll")** (ipl-eftervård, acne-demografi, ipl-rosacea Inför-p2, sebo-orsaken — blindtest 4:s fyra nya missar). **Demografisk skal-öppning räddas ALDRIG av gradienten** (hård 🔴-markör).
4. **LÄNGD = SVAG modifierare, inte stark spak.** "Om oss"/process/historik-prosa graderas milt (stannar SLIGHT/MODERATE även vid 3–5 meningar). *(v3 översköt detta → hade fått oss att skriva om SLIGHT-block i onödan.)* **MEN: lång definition UTAN mekanism → SIGNIFICANT trots konkretion** (belagt 2 sidor: ytliga Vad-content, sebo-definitionen) — konkretion räcker inte på långa block, de behöver kausal mekanism.
5. **EXTREME** om blocket keyword-stuffar (samma term ~×4) + staplar "vilket"-kedjor + är långt — **räkna förekomsterna faktiskt** (behandla-pigment microneedling missades så). Stuffing UTAN vilket-kedjor/längd stannar 🔴 (ipl-rosacea desc-p2: IPL ×6 men facit 🔴).
6. **Kontext:** behandlings-/tillståndsprosa hårdare; "om oss"/historik/process mildare.

**Konfidens:** svag men användbar varningssignal — i test 3 låg nästan alla 2-stegs-missar på konfidens ≤60; **<65 = flagga, hämta facit.** (Test 2 hade dock högkonfidenta missar → aldrig facit-ersättning.)

**För SYFTET (vad ska skrivas om):** ±1 räcker för att skilja "behöver jobb" (🔴/🟠) från "OK" (🔵/🟢). Men vid **SLIGHT↔MODERATE-gränsen: hämta facit hellre än att skriva om** (v3 hade skrivit om 3 SLIGHT-block i onödan = "rör inte det som är OK", §13.O).

---

## 1.4 Sidnivå ≈ MEDEL av block-tiers — ARBETSMODELL MED GRÅZON (korrigerad av modellanalysen 2 jul em)
LYNX ger både **sidnivå-AI COPY** (Pages-listan) och **per-block-facit** (AI Copy-vyn). **Arbetsmodell: sidnivå ≈ VIKTAT MEDEL av alla betygsatta block** (🟢=0, 🔵=1, 🟠=2, 🔴=3, 🟥=4; standardavrundning där exakt ,5 rundar uppåt — 2,09 rundar NED till 🟠). **Facit-ställning 2 jul em: medel 14/17, median 14/17 — på DISJUNKTA missmängder** (modellanalysen, `lynx-examples.php`): medel är **perfekt på de 11 färska kompletta faciten** (micro 1,44🔵 · porto 1,00🔵 · acne-rygg 1,38🔵 · sebo 1,25🔵 · mogen-hy 1,57🟠 · microderm 1,82🟠 · bristningar 1,92🟠 · rhinophyma 2,06🟠 · solskadad 2,09🟠 · pigmentflackar 2,06🟠 · oonskat-har 1,77🟠) men **missar 3 av de 6 äldre** (acne.php 1,75→🟠 men badge 🔵; behandla-pigment 2,3→🟠 men 🔴; hudforandringar 2,08→🟠 men 🔴); median har spegelvänd profil (6/6 äldre, 8/11 nya). **Killer-observation: hudforandringar 2,08→🔴 men solskadad 2,09→🟠** ⇒ badgen är INTE en ren funktion av blockens tier-mix — okänd faktor kvarstår (kandidater: betygsatta men orapporterade FAQ-svar, äldre ~counts, LYNX-versionsskillnad mellan badge- och blockdata; alternativa aggregeringar testade och fällda — se analysen). **Regler:** (1) medel <1,5 → förvänta 🔵; (2) **1,9–2,4 = GRÅZON** — både 🟠 och 🔴 observerade, prediktera inte hårt där; (3) block-fix-räkningar = ESTIMAT, inte garantier; (4) modellen styr FÖRVÄNTAN/prio — arbetsmängden per sida styrs av §7 (fixa alla 🔴/🟠) oavsett; (5) räkna betygsatta FAQ-rader i n när de syns. **Avgörs av (beställd, §9):** färsk analys där sidnivå-badge + KOMPLETT per-block-lista (inkl. FAQ-svar) kommer ur SAMMA scan. **Första EFTER-datapunkten (6 jul, same-scan badge+blocklista!): acne-ansikte omskriven → synligt block-medel 0,89 → pred 🔵, badge SLIGHT ✓** — medel nu 15/18 (preliminär: FAQ-block ev. utanför dumpen). om-oss (EFTER-medel 0,91 → pred 🔵) räknas IN först när badge-raden bekräftats (beställd). **Strukturell förklaring (officiell tooltip 2 jul 15:00):** sidnivå-badgen definieras som *"Estimated level of AI-generated content on this page"* — en HELSIDES-skattning av en kontinuerlig nivå, INTE ett aggregat av block-betygen. Block-tiers är samma underliggande signal diskretiserad per block → medel/median är PROXYS, och två sidor med nästan samma tier-mix kan legitimt hamna på olika badge (t.ex. via textmängds-viktning — WORDS). Det är därför gråzonen finns och inte går att räkna bort.

**Förklarar paradoxen** "SLIGHT-sida med många 🔴-block": sidnivån är MEDLET, inte värsta blocket (acne.php har ~10 🔴 men ännu fler korta 🔵-definitioner + 🟢-omdömen → medel under 1,5 → 🔵).

**Strategisk implikation (styr prio + förväntan) — medel-logik ger RÄKNEBAR väg till badge-byte (⚠️ ESTIMAT, gråzons-förbehållet ovan gäller):**
- **Sänk SIDNIVÅN = sänk MEDLET under gränsen** (🔵-badge kräver medel <1,5; 🟠 <2,5). Varje 🔴→🔵-fix sänker summan med 2 poäng → **räkna per sida hur många block-fixar som krävs**: mogen-hy 1,57 (n=14) = 1 fixat 🔴 räcker (→1,43) · oonskat-har 1,77 (n=13) = 2 · microdermabrasion 1,82 (n=11) = 2 · bristningar 1,92 (n=13) = 3 · rhinophyma 2,06 (n=16) = 5 · solskadad-hy 2,09 (n=11) = 3–4 · pigmentflackar 2,06 (n=18) = 5–6 (störst jobb men KW244 = störst payoff). Siffrorna = MINIMUM för badge-flytt enligt modellen; §7 kräver ändå att ALLA 🔴/🟠 åtgärdas — estimatet styr förväntan, inte scope.
- **Även 🔵-sidor sänker sitt medel av 🔴-fixar** (skillnad mot median-logiken) — men badgen ändras bara vid gränspassage; den synliga vinsten där är SCORE (AI STYLE — §1.2 OMPRÖVAS) + blockkvalitet.
- **Prio-konsekvens:** 🔴/🟠-sidor nära gränsen (mogen-hy!) → billig AI COPY-flagg-vinst; 🔵-sidor → SCORE-vinst. Båda mot "LYNX grönt".
- **Medlet flyttas även genom ADDITION (2 jul, positiv-data):** korta konkreta block (FAQ-svar i husröst, "Från X kr"-rader, maskin-rader, definitioner) är naturliga 🔵/🟢 — att LÄGGA TILL äkta sådana block drar medlet nedåt utan att röra befintlig prosa (varje nytt 🔵 på en 2,0-sida sänker snittet). Belagt: porto/acne-rygg/sebo är 🔵-sidor trots 2–4 🔴-block, för att många korta konkreta block skyddar medlet strukturellt. → **Fas 2 (FAQ-svar) är därmed också en AI COPY-flagg-spak, inte bara AI QUESTIONS.** §13.N-vakt: bara äkta innehåll, aldrig padding.

## 2. Formeln: **Krok → Mekanism → Skylt**
1. **Krok** — öppna med en *konkret komponent*, inte abstrakt skala. Första substantivet ska vara något läsaren kan se (papler, gropar, fläckar, "bacne"). Aldrig "Det finns flera…/Det är viktigt att…/När det kommer till…/påverkar miljontals…". **Gäller även varje list-punkt:** led med mekanismen/det konkreta, inte "[rubrik] kan spela en roll vid…".
   - Ofta **fusera Krok + Mekanism** i mening ett (orsaken bunden på komponenten).
2. **Mekanism** — gå igenom orsaken steg för steg med kausala bindeord (*vilket leder till, på grund av, eftersom, vilket i sin tur, detta resulterar i*). Lägg minst **en taktil verb/bild eller inline-parentes-förklaring per begrepp** (t.ex. *kollagen (ett protein som håller huden elastisk)*, *"äter upp"*, *som en månkrater*). Täthet = bunden prosa, **aldrig** fet-etikett-punktlistor.
3. **Skylt** — avsluta intro med en konkret hänvisning till innehållet under, **varierad** mellan systerblock (aldrig samma "Här går vi igenom…" två gånger). Fråge-scaffolden (Vad/Varför/Vem/Var) kan själv vara skylten. **Facit-observation (6 jul):** den korta rumsliga formen *"Nedan tittar vi närmare på varje område"* satt i ett 🟢-block, medan katalogformen *"Här går vi igenom [X] och [Y]"* ingick i 🟠-introt — föredra den korta rumsliga skylten, särskilt i intron.

**Empati-lager (för tillståndssidor):** acknowledge-then-reassure + av-skamning ("oavsett ålder/kön") + mjuk genetik-hedge ("om… finns det en risk"). Mekanism + empati = tillståndssidans register.

**⚠️ Intro-/bannerblock — skärpt läge (HYPOTES efter första EFTER-mätningen, 1 sida — ej regel än, §0):** acne-ansiktes omskrivna intro var enda blocket av 10 som stannade 🟠: konkret krok, men empati-mening ("För många påverkar den både huden och självkänslan") + importans-fras ("Det viktiga att komma ihåg är att den går att behandla") + "Här går vi igenom"-skylt ackumulerade — medan skylt-blocket "Nedan tittar vi närmare på varje område" nådde 🟢 (skylten i sig fäller inte). Tills fler intron är mätta: **i INTRO-blocket, låt krok + skylt bära; stryk importans-fraser helt och lägg empati-lagret i senare block.** Testas mot mogen-hy-/oonskat-har-introna vid deras refresh.

**Puls:** bryt långa kausala meningar med en kort fristående sats (5–8 ord) minst en gång per sektion.

---

## 3. Checklista (kör varje block)
- [ ] Konkret komponent-öppning, inte tom skala/scensättning?
- [ ] Minst en mekanism bunden med kausalt bindeord?
- [ ] Minst en inline-gloss eller taktil bild per begrepp?
- [ ] Bunden prosa, **inte** `<ul><li><strong>Etikett:</strong>…`-inventering?
- [ ] **Varje distinkt punkt kvar?** Lista→prosa får inte slå ihop eller tappa poänger — räkna punkterna före/efter (tecken, zoner, orsaker). De-fluffa orden, inte poängerna (§13.D).
- [ ] Puls: en kort + en lång mening; inga 3 i rad i samma längd; ingen staccato?
- [ ] **Naturlig komma-rytm, inte AI-mönster.** Standard: **stryk onödiga komman rakt av — även enstaka.** Ett komma före "och"/"så att" som binder två satser kan nästan alltid bort utan att något tappas. **Reformulera** (inte bara stryk) när satsen kräver det: en löst tillagd **"X, vilket Y"**-resultatsats delas hellre i två meningar — en av de tydligaste AI-tells; men "vilket" *mitt i* en tät kausalkedja är OK (§2/§4). Undvik även staplade korrelativ-komman och inskjutna **dubbel-komma-bisatser** ("X, en aside, Y"). Aldrig staccato; äkta "och"-listor/uppräkningar orörda.
- [ ] **Aktivt och direkt** ("undvik solning två veckor innan"), inte passivt/hedgat ("det rekommenderas att du undviker solning")?
- [ ] **Varierad öppning mot systerblock** — inte varje block börjar "Akne i ansiktet…" (upprepad öppning = AI-parallellism)?
- [ ] **Ingen poäng upprepad mellan block** (samma orsak, t.ex. hormonell, sägs en gång — inte i tre block)?
- [ ] Inga staplade "kan"; ingen "[antal] olika [X]"-padding?
- [ ] Minst en verifierbar siffra/tidsram istället för superlativ? (pris med "Från")
- [ ] **Inga em-streck**; ingen svensk AI-vokabulär (se §5)?
- [ ] Kosmetiskt: inga medicinska/diagnos-påståenden, ingen hudcancer, inga aktiva ingredienser/organismer? Inga riskfritt-/garanti-löften eller skam-/rädsle-språk (§5 juridik + §4.2)?
- [ ] Klinik-"vi", inga hudterapeutnamn?
- [ ] Stannar på sidans eget ämne; grannämnen löses med **länk**?
- [ ] **COPY-PASTE-REST-KOLL (obligatorisk, ägarbeslut 6 jul).** Sidmallar återanvänds → rester från ANNAN malltyp läcker ofta. Skanna sidan för: (a) **fel-ämnad boilerplate** (FAQ-kategorirubrik/`$specialist_url_title`/rubriker som talar om annat ämne — t.ex. "ärr av finnar" på en pigmentsida); (b) **felkopplade interna länkar** (`url:` som pekar fel — t.ex. Åldersfläckar-kort → `/solskadad-hy.php` i stället för `/aldersflackar.php`); (c) **fel/kopierade `url_title` & `image_alt/title`** (samma titel på flera kort, alt som beskriver fel bild). **Antingen FIXA direkt (enkelt + säkert, §13.K) ELLER dokumentera som spår i §9** om det är sajtbrett (likt "Akne Specialiserade Hudterapeuter"- + "ärr av finnar"-spåren). Rör aldrig en länk-DESTINATION utan att kolla att målsidan finns/är rätt.
- [ ] **Sökorden bevarade** (se §6)?
- [ ] Skylt varierad mot systerblock; CTA rak + konkret med namngiven vinst (kostnadsfri konsultation), inte bara "boka tid" — och ingen tvingad "resa"-metafor (facit: rak kort CTA = 🔵, §4/§13.N)?

---

## 4. Husrösten (grundad i våra egna SLIGHT-sidor)
**Sammanfattning:** Våra bästa sidor låter som en erfaren hudterapeut som förklarar akne för *en* orolig person över ett bord — inte ett varumärke som sänder till en marknad. Mening ett namnger något konkret och binder orsaken direkt. Mekanismen går steg för steg. Varje fackord får en vardaglig gloss på en gång. Rytmen andas (långa meningar bryts av korta). Värme via acknowledge-then-reassure. Alltid "vi"/"du", aldrig namngiven terapeut. Siffror bär trovärdigheten så texten slipper skryta.

### Signaturdrag (med riktiga exempel)
- **Fusera Krok+Mekanism i mening ett:** *"Akne består av bland annat papler och pustler, som är en ärftlig och hormonell hudsjukdom som uppstår när talgproduktionen i hudens porer ökar."* (acne.php:65)
- **Alias som apposition mellan komman:** *"Acneärr, även kallat postakne, är märken eller förändringar som blir kvar på huden efter att inflammationer från akne har läkt."* (acnearr.php:54)
- **Kausal payoff med pekare:** *"Kroppen försvarar sig då med en inflammation, och det är just detta som syns på huden i form av akne."* (acne.php:73)
- **Visceralt, citat-markerat verb:** *"den aggressiva fettsyran från finnarna som fräter ner och \"äter upp\" den omkringliggande huden."* (acnearr.php:63)
- **Inline-gloss av fackord:** *"kollagen (ett protein som hjälper till att hålla huden jämn och elastisk)"* (acnearr.php:64)
- **Sinnlig analogi istället för adjektiv:** *"ett oregelbundet utseende som en månkrater"* (acnearr.php:161)
- **Puls (lång → kort):** *"Ryggen är särskilt utsatt på grund av sin höga koncentration av talgkörtlar och stora porer. Detta gör den mer benägen att utveckla akne."* (acne-rygg.php:72)
- **Acknowledge-then-reassure:** *"Akne på ryggen, även kallad \"bacne,\" kan vara både frustrerande och smärtsamt."* (acne-rygg.php:57)
- **Baslinje-sen-men:** *"Huden behöver en viss mängd talg för att hålla sig mjuk och smidig, men vid överproduktion…"* (acne.php:65)
- **Av-skamning:** *"det spelar ingen roll om det är en tjej eller kille, kvinna eller man, alla kan drabbas."* (acne-brost.php:309)
- **"vilket i sin tur"-kedja:** *"…en ökning av mängden talg (olja) …, vilket i sin tur kan täppa till porerna och skapa en miljö där bakterier trivs."* (acne-brost.php:72)
- **Lär det okända via det kända (stödjer siloing):** *"Precis som ansiktsakne uppstår ryggakne när hårsäckarna täpps till…"* (acne-rygg.php:57)
- **Siffra bunden till handling, aldrig skryt:** *"På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla acneärr."* (acnearr.php:294)
- **Mjuk genetik-hedge:** *"Om dina föräldrar eller nära släktingar har haft problem med akne, finns det en risk att du också kan drabbas."* (acne-brost.php:74)

### Öppnings-bank (mallar)
- Komponent + bunden orsak: *"[Tillstånd] består av bland annat [synliga komponenter], som är en ärftlig och hormonell hudsjukdom som uppstår när [orsak]."*
- Alias-i-komman: *"[Term], även kallat [vardagsnamn], är [vad det är] som [uppstår/blir kvar] efter att [process]."*
- Känsla-först + smeknamn: *"[Tillstånd], även kallad \"[smeknamn],\" kan vara både frustrerande och [obehag]. Precis som [bekant variant] uppstår [tillståndet] när [mekanism]."*
- Baslinje-sen-men: *"Huden behöver [normal funktion] för att [nytta], men vid [störning] [problemet uppstår]."*
- Acknowledge-then-reassure: *"Oavsett ålder kan det vara en källa till obehag. Men med rätt kunskap och behandling går det att hantera och minska [tillståndet]."*

### CTA-stil
Aldrig bara "boka tid" — ge CTA:n en namngiven vinst, och variera varje gång. **Facit-not (6 jul): rak kort CTA med namngiven vinst är 🔵-belagd** (*"Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter."*, om-oss) — **"resa"-metaforen är valfri variation, aldrig ett krav** (jfr §13.N: skriv CTA:n rakt). Återkommande form = inbjudan + kostnadsfri konsultation + namngiven destination:
- *"Kontakta oss för en kostnadsfri konsultation och börja din resa mot en ärrfri och slät hud idag!"* (acnearr.php:86)
- *"Din resa med oss börjar med en kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall…"* (acnearr.php:286)
- Mitt-på-sidan-skyltar = konkreta vi-handlingar: *"Vi tar bilder och rekommenderar en skräddarsydd behandlingsplan…"* (acne-brost.php:137)

### Härma INTE
- Inte tunnheten/längden i de enkla HUMAN-sidorna (acne-myter, fragor-svar, ordlista, hudguide) — ta bara deras *ton*.
- Inte FAQ:ns ett-ords-verdikt ("Nej," / "Absolut,") i brödtext (blir staccato).
- Inte myter-sidans tvärsäkra "Detta är helt fel." eller refräng-trick i mekanism-prosa.
- Inte startsidans varumärkes-superlativ ("det självklara valet") på tillståndssidor — låna bara dess verifierbara siffror och vi-löften.

### 4.1 Utökad husröst — från huvudsidorna (filtrerat mot §1.1-modellen)
Plockat från acne/rosacea/microneedling/alma-hybrid (sidor ägaren gillar). OBS: sidorna är inte 100 % — nedan är bara det som *också* klarar modellen; skip-listan är 🔴-mönster som ändå förekommer där.

**Nya keepers:**
- **Empati förankrad i en KONKRET situation** (inte generisk "du är inte ensam"): *"Vi förstår att det kan vara frustrerande när akne plötsligt dyker upp, särskilt inför ett bröllop eller en skolavslutning."*
- **Reassurance-beat** (kort hopp-mening som bryter rytmen) — **säg trösten RAKT:** *"Akne i ansiktet går att behandla."* **⚠️ Slå INTE in den i en importans-fras** (*"Det viktiga att komma ihåg är att…"*) — inslagningen är §1.1-importans-filler och pekades ut i acne-ansiktes enda kvarvarande 🟠 (EFTER-facit 6 jul). Innehållet (hopp/behandlbarhet) är keepern; wrappern är tellen.
- **Ärlighet före hype**: *"Det finns ingen quickfix när det gäller akne."*
- **Ärlig brasklapp + pivot**: *"Den exakta orsaken är fortfarande något forskare försöker förstå, men det är tydligt att genetiken spelar en central roll."*
- **Verifierbar siffra istället för "många"**: *"drabbar cirka 12–22 % av kvinnor och 3 % av män"* (endast om siffran stämmer).
- **Nytta = liv/frihet, inte hud-mått**: *"så att du slipper anpassa ditt liv efter din hy."*
- **"Om det här är du"-trigger**: *"Om din rosacea hindrar dig från att leva fullt ut, är det dags att…"*
- **Biverkning som bevis på effekt**: *"En viss rodnad är normalt och visar att hudens läkningsprocess har börjat."*
- **Eftervård med namngiven anledning (då/för att) + tidsfönster**: *"Undvik sol veckorna före, då det påverkar resultatet", "sminka inte de första 24 timmarna".*
- **"För dig som" + vardagsmoment**: *"för dig som vill ha en snabb förbättring, klart under en lunchrast."*
- **Kombo med inline-"som"-gloss**: *"kombinerar ablativ laser, som bränner hudytan, med icke-ablativ laser, som verkar under huden."*
- **Gloss: vardagsord först, fackterm i parentes**: *"olja (sebum)"*; vardagsalias: *"rhinophyma (potatisnäsa)", "finnar som vi ofta säger i dagligt tal".*
- **Levande verb**: *"får aknen att blomma upp", "fettsyran fortsätter fräta på huden".*

**Skippa (🔴-mönster — även om det står på en gillad sida):**
- "…är en **avancerad/effektiv/revolutionerande** behandlingsmetod" (marknadsadjektiv).
- "…är **vanligast bland [grupp], oavsett kön och hudtyp**" (demografisk skal-öppning).
- "**expertpartner i kampen mot…**", "uppnå en klarare och friskare hud" (generisk marknad).
- Platt "Nej"-myt-bust hör hemma i **FAQ**, inte brödtext (staccato).
- *(OBS: "undvika kraftfulla läkemedel" är INTE skip — det är godkänt befintligt innehåll, se §5.)*

### 4.2 Kund-tilltal & extern best practice (importerad 2026-07-06 — Google people-first, Konsumentverket, klarspråk; källor i §11 6 jul #5)
*Status: lagkraven (→ §5 juridik) är ABSOLUTA; resten är extern praxis som inte får krocka med §1.1/§4 — vid konflikt vinner facit-datan.*
- **Skamfritt säljande (av-skamningen upphöjd till princip):** sälj aldrig på skam, rädsla eller brådska — sälj på frihet och kunskap (§4.1 "slipper anpassa ditt liv efter din hy"). Aldrig "pinsam", "kämpa mot din dåliga hy", "äntligen slippa skämmas", "innan det är för sent". Problematisera inte normal hud — pormaskar/porer finns på all hud; säg ärligt vad som är normalt vs behandlingsbart (jfr ärlighets-keepern "ingen quickfix"). Empati = acknowledge (§2), aldrig alarmism.
- **Svars-först i FAQ (klarspråk + §1.5 H2 + featured snippet-praxis):** FAQ-svarets FÖRSTA mening ÄR svaret (siffran, steget, ja/nej med nyans) — förklaringen kommer efter. Rubriker informativa med aktivt verb, aldrig sensationella (Google: "descriptive, non-sensational").
- **Författarskap (medvetet vägval, nu dokumenterat):** Google premierar synliga bylines/credentials; vi kör klinik-"vi" utan terapeutnamn (§5) → vår E-E-A-T bärs på KLINIKNIVÅ: SHR-certifiering, 30 år, namngivna maskiner, "senast uppdaterad"-datum, specialist-/recensionswidgets. Trade-offen är vald — kompensera aldrig med påhittade personer/titlar.
- **Riskinfo är copy-vänlig, inte ett säljhinder:** ärlig eftervård + normala reaktioner i konkret imperativ ("En viss rodnad är normalt och visar att hudens läkningsprocess har börjat", "undvik sol två veckor") uppfyller BÅDE lagkravet (§5 juridik) och LYNX-🔵-mönstret (eftervårds-facit). Skriv riskinfo konkret — aldrig som hedge-stapel.

---

## 5. Låsta ramar (gäller alla sidor)
- **Kosmetiskt** — **lägg inte till** nya medicinska/diagnos-påståenden, hudcancer eller "sök läkare/medicinsk vård" (LYNX YMYL-gap). **MEN: befintligt sidinnehåll är godkänt** — strippa inte godkänd formulering (t.ex. "undvika kraftfulla läkemedel med biverkningar" = OK kosmetisk-spår-positionering). Befintliga sidor är referensen för *vad vi får säga* (innehåll + tillåtna påståenden). Hänvisa till **vår klinik/hudterapeut** är OK.
- **YMYL-expertis = ÄMNESMATCHAD, inte läkartitel (online-verifierad 6 jul):** hälsa är YMYL med höga E-E-A-T-krav, MEN Googles QRG kräver "expertis FÖR ÄMNET" — en **hudterapeut ÄR relevant expert** för de estetiska hudbehandlingar kliniken utför, och **förstahandserfarenhet (Experience) av att utföra dem är en egen E-E-A-T-signal**. Så: redovisa gärna hudterapeut-kompetens + konkret klinik-erfarenhet (30 år, SHR, namngivna maskiner, "vi tar före-bilder/rengör") — det BÄR auktoritet. Medicinsk avsändare/granskning krävs först när innehållet glider mot **diagnos, receptbelagd medicin eller sjukdoms-/behandlingsutfall** — där håller vi kosmetisk ram (§13.I roaccutan-guard). Detta ersätter den gamla trubbiga tolkningen "utan läkare = låg auktoritet".
- **Organism-namn & ingredienser = factual OK** (finns på godkända sidor: "Cutibacterium acnes", AHA/BHA/salicylsyra på kemisk-peeling). På *tillståndssidor* (acne) pivotera dock inte till "använd ingrediens X" som lösningen — ramen är ärftlig/hormonell + klinikbehandling. Strippa aldrig godkänt befintligt.
- **Kost minimal**, akne ramas som ärftlig/hormonell.
- **Inga em-streck** (uppfattas som ett AI-tell). Omformulera.
- Undvik svensk AI-vokabulär & marknads-fluff:
  - Connective-filler: *"spelar en avgörande roll", "i takt med att", "när det kommer till", "ta del av", "i en värld där", "maximera/optimera", "i dagens samhälle"*.
  - Marknadsadjektiv: *"avancerad", "framstående", "effektiv lösning", "optimal", "ledande", "speciellt utformad", "skräddarsydd", "revolutionerande", "toppmodern"*.
  - Sammanfattnings-/avslutnings-tics: *"Sammanfattningsvis", "Slutligen", "I korthet", "Avslutningsvis", "En sak är säker"*.
  - Antitesen *"inte bara X utan (också) Y"* — max 1 per sida.
  - Individualiserings-fluff: *"anpassad efter just dina behov", "perfekt anpassad för dina unika hudvårdsbehov"*.
- **Klinik-"vi"**, aldrig hudterapeutens namn. **"Du"-tilltal.**
- **Siloing:** grannämne (t.ex. rosacea) → kort omnämnande + **intern länk** till den sidan, aldrig dubblerat innehåll.
- **Huvud- vs bonussidor:** huvudtermen bor på huvudsidan (t.ex. "akne"→acne.php, "pigmentfläckar"→pigmentflackar.php). Bonussidor håller sig till sin long-tail och tävlar inte om huvudtermen.
- **Siffror** bara om verifierbara på sidan eller internt bekräftade; pris med "Från".
- **⚖️ Juridik (MFL/PIL/estetiklagen — ABSOLUTA krav, trumfar all stil; tillagt 6 jul efter Konsumentverkets 2025–26-granskningar, skärpt lagstiftning på väg):**
  - **Aldrig riskfritt-intryck.** Utelämnad riskinformation = vilseledande marknadsföring (KO-praxis). Inga "helt riskfritt", "smärtfritt", "garanterat resultat". Normala reaktioner + eftervård nämns ärligt och KONKRET (§4.2 — det är dessutom LYNX-🔵-mönstret).
  - **Före/efter-bilder (resultat-sidorna + widgets):** får inte ge vilseledande helhetsintryck — representativa exempel med konkret kontext ("efter 3 behandlingar"), aldrig löfte om samma resultat. Gäller även TEXTEN runt bilderna vid rewrite.
  - **18-årsgräns för estetiska injektionsbehandlingar:** injektions-copy (fillers m.m.) får aldrig rikta sig mot minderåriga — håll injektionssidorna silo-separerade från tonårs-/elevsidorna (tonarsacne, elevbehandlingar); ingen injektions-CTA där.
  - **Priser:** "Från X kr" = bokningssystemets faktiska pris (princip sedan prisrättningen 3 jul). Paket-"Spara X kr" = jämförelse paket vs styckpris — OK, men framställ aldrig som tidsbegränsad rea; överstruket pris/"kampanj" kräver 30-dagars lägsta pris (7a § prisinformationslagen) — undvik helt i statisk copy.
  - **Receptläkemedel (roaccutan.php):** konsumentreklam för receptbelagda läkemedel är förbjuden — sidan hålls redaktionell/informativ med pivot till våra behandlingar; sälj/rekommendera aldrig läkemedlet. Guard vid rewrite.
- **Reglerna är heuristiker, inte stela lagar.** Använd omdöme — befintligt godkänt innehåll och en genuint bättre formulering trumfar en regel som inte tillför i sammanhanget. Vi rutar inte in oss.

---

## 6. ⚠️ SEO-skydd — bryt inte sökord/ranking
Sidorna rankar redan på sökord. Omskrivningen får höja kvaliteten **utan att ta bort signalerna som funkar**:
- **Bevara primärt sökord + viktiga varianter** i `$seo_title`, H1, H2:er och brödtext. Skriv aldrig bort sökordet ur sidan (t.ex. "akne i ansiktet" måste finnas kvar). Hur frasen interpunkteras (komma efter eller ej) är en **rytmfråga (§3), inte SEO** — ett komma bryter inte Googles frasmatchning. Behåll bara frasen i texten.
- **Rör `$seo_title` / `$seo_description` försiktigt** — om du ändrar, behåll sökordet och förbättra bara.
- **`$seo_keywords` = medveten PARKERINGSPLATS för sidans målsökord OCH målsökfraser (ägarbesked 6 jul).** Google ignorerar meta keywords för ranking, så taggen har begränsad SEO-nytta i sig — därför använder vi den som en plats att *parkera* sidans avsedda sökord och fler-ords-sökfraser (t.ex. "bruna fläckar på kroppen", "pigmentfläckar på överläppen", "melasma överläpp"). **Praktisk konsekvens: `$seo_keywords` är vår FACIT-LISTA över vilka fraser sidan ska ranka på → den är källan för fras-kollen nedan.** Ta aldrig bort termer/fraser där (även dubbletter får stå); rör inte taggen vid omskrivning. Varje FLER-ORDS-fras i taggen ska finnas kvar i BRÖDTEXTEN efter omskrivning (annars tappar sidan frasmatchningen — enskilda ord räcker inte, det är fraserna som rankar).
  - **⚠️ SCOPE-nyans (ägarbesked 6 jul):** en parkerad fras kan ligga UTANFÖR vad kliniken faktiskt behandlar — t.ex. "mörk fläck på läppen" (själva röda läpppartiet behandlas INTE; däremot "pigmentfläckar på överläppen" = huden ovanför, som behandlas). **För sådana icke-behandlingsbara parkerade fraser: bevara dem i taggen (ta ej bort) men BYGG INTE UT brödtext kring dem** — skriv inte innehåll som lovar behandling av något vi inte gör. Brödtexten fokuserar på det kliniken faktiskt behandlar; taggen får rymma bredare long-tail utan att styra copyn.
- **Ändra ALDRIG filnamn/URL** (dödar ranking + kräver redirect).
- **Radera inte hela sektioner** som bär rankande innehåll — komprimera prosan, behåll ämnestäckningen.
- **Behåll interna länkar, priser, boknings-URL:er och CTA-länkar.** Lägg till nya länkar (t.ex. rosacea) utan att ta bort befintliga.
- **Sökords-/fras-koll (mekanisk, obligatorisk) — grep:a HELA `$seo_keywords`-listan FÖRE→EFTER.** Vissa meningar är skrivna *just* för att ranka en fras (t.ex. "akne på hakan", "bruna fläckar på kroppen", per-zon-/per-orsak-rubriker). **Obligatoriskt efter omskrivning: loopa varje FLER-ORDS-fras ur `$seo_keywords` och grep:a den mot filen FÖRE vs EFTER** — varje fras ska stå kvar (≥ lika många förekomster) eller ha flyttats medvetet (siloing). En fras som gått till 0, eller en fras vars antal sjunkit, ska återinföras naturligt i brödtexten (se pigmentflackar 6 jul: "bruna fläckar på kroppen" tappades vid en språkfelsfix och återinfördes). Tappa aldrig en målfras av misstag. *(Enskilda ord kan svänga något; det KRITISKA är att fler-ords-FRASERNA överlever, för det är de som ger frasmatchning.)*
- **Bara innehåll i sidans `.php`** — inga mall-/widget-ändringar (se §8 om widgets).
- **En sida i taget på `staging`**, granska `git diff` innan merge.
- **Verifiera efteråt:** LYNX-refresh + håll koll på ranking; logga i §11.

---

## 7. Arbetsprocess per sida
0. **Claima sidan i §12** (§0.1 — kontrollera först att du är ensam: `git status` + §12 + senaste §11/commits).
1. **Spara LYNX-baseline** för sidan i §11 (AI COPY, SCORE, GAPS, AI QUESTIONS, PAGE TYPE, P. PRICE, KW, **CLICKS + WORDS — krävs för SEO-vakten §10.0**, ev. RANK) — innan något ändras. **Notera ANALYSDATUM PER VY** (AI Copy-vyns "Last update" + SCORE-popupens "Analyzed X ago") — vyerna refreshar oberoende (§11.1-tillägget 6 jul), så radens kolumner kan ha olika ålder. *(Obs §1.2-omprövningen: SCORE 0 = trolig trasig analys → be ägaren köra om hellre än att logga 0 som baseline.)*
2. **Ägaren klistrar in LYNX-facit → SPARA rådatan FÖRST** i rätt kolumnfil (filkarta i `lynx-data.php`: per-block → lynx-examples · frågor → lynx-questions · SCORE → lynx-score · gaps → lynx-gaps · Pages-rader → lynx-data; diffa mot förra scan). Identifiera sen primärt sökord + intent (bonus → long-tail). Agera aldrig på facit utan att spara det först (§0 Facit-flöde). **Finns facit REDAN sparat (t.ex. Fas 3b-sidorna: facit + frågelistor + gap-texter ligger i lynx-examples/lynx-data sedan 2 jul) — verifiera att det är komplett och gå direkt vidare; be inte om det igen.**
3. Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**, se över 🔵/🟢 med lätt hand + bedöm sidan som HELHET (§13.D) — enligt §2–§4; kör §3-checklistan + §6 SEO-skydd.
4. Lös gap-punkter inom ramarna (grannämne → länk; ingen medicin/cancer) — **fattade beslut per sida står i §8.1; följ dem.**
4a. **§1.5-koll (AI Overview-frågorna):** notera sidans frågelista + FÖRE-status (GOOD/OK/–) i §11; förbättra BEFINTLIGA FAQ-/textsvar i husröst så topp-SCORE-frågor besvaras rakt i frågans form (hur→steg, varför→mekanism, kostar→siffra); grannfrågor → länk till ägarsidan. NYA frågor/svar hör till Fas 2, inte rewriten.
4b. **Adversariell verifiering (standard vid autonomt arbete; frivillig när ägaren granskar varje steg):** innan commit, kör färska agenter utan kontext mot omskrivningen — (i) §1.3-predikt per omskrivet block (mål: 🔵-band; **1 bedömare räcker** — blindtest 3 visade att 3 oberoende bedömare svarar nästan identiskt), (ii) diff-granskning av substans (punkt-count före/efter, tappade poänger/målfraser, §13.D/§6), (iii) en helhetskritiker (flöde, dubbletter över block, sid-kontext). Åtgärda äkta fynd; motivera skippade i §11. *(Etablerat på ipl-rosacea 1 jul: 15 agenter → 4 äkta fynd fixade; standardiserat + bantat 2 jul.)*
5. Logga i §11 (baseline + vad/varför + **prediktion per omskrivning, §10 steg 1**). Följ Definition of Done (§13.E) — inkl. att tömma §12-claimen när allt är klart.
6. **Push `staging` → TESTA att sidan gick upp:** hämta staging-URL:en (`https://www.acnespecialisten-staging.minoch.com/<sida>`) och bekräfta **HTTP 200 + renderad HTML** (inte blankt/500) samt att sökord/claims syns i svaret. Fångar PHP-strängfel (§13.C). En sida är inte klar förrän den verifierat laddar. **OBS: staging-deploy har ~minuters lag** — poll:a tills *din* ändring faktiskt syns i svaret (grep efter en ny formulering), inte bara tills 200 kommer.
7. Promota till prod (§13.A) — **⛔ först när §10.0-GSC-gaten är grön för föregående våg** → vänta på LYNX-refresh → utvärdera (§10).

---

## 13. Skyddsregler & mätning (från plan-granskningen)
**A. Produktion vs staging (VIKTIGAST).** LYNX skannar LIVE-sajten (`main` → produktionshost `acnespecialisten.se`). **Process:** arbeta på `staging` → push `staging` (→ temp-staging) → ägaren verifierar att sidan fungerar → push/merge `main` (→ live). **LYNX ser bara live**, så mät effekt från **main-deploy-datum**, inte staging-edit. (Att merga `staging`→`main` är ofarligt trots att staging ligger efter main — main får bara våra nya commits.) **Rollfördelning:** assistenten fixar sidor + commitar + pushar `staging`; ägaren verifierar och pushar `main` (assistenten rör aldrig main).

**B. Filerna är INTE webb-läsbara (löst).** `lynx-copy-playbook.php` + `lynx-data.php` börjar med `<?php exit; ?>` → servern kör dem och returnerar **tomt** om någon öppnar URL:en. Vi läser dem i editor/git. Inget behov av deploy-exkludering eller radering. (Verifiera vid behov: öppna `/includes/lynx/lynx-copy-playbook.php` på temp-staging → ska vara tom.)

**C. PHP-strängsäkerhet.** Copy ligger i enkel-citerade PHP-strängar (`content: '...'`). Ett rått apostrof (`'`) eller backslash kraschar sidan (500). Regel: inga råa apostrofer/backslash i copy — omformulera eller använd typografiskt `’`. (Dubbla citattecken och `$` är säkra.) `php -l` som CI-gate vore robust **på servern** — men **`php` finns INTE i Claude-skalet på denna maskin (ej i PATH, ej i /opt/homebrew|/usr/local|/usr/bin per 2026-07-01), så du kan inte linta lokalt; verifiera i stället via staging-deploy (§7.6).**

**D. Läs ALLA blocktyper — REWRITE är FACIT-DRIVEN, men lämna inte resten oöverskådad (uppdaterat 2026-07-01).** När vi har LYNX per-block-facit (AI Copy-vyn ger ett betyg per block): **skriv om 🔴/🟠/🟥 (prioritet), OCH se även över 🔵/🟢 med lätt hand** — bara tydliga fixar (typo, grammatik, tappat sökord, uppenbar tell), INTE stilistisk över-omskrivning av OK-block (v3-felet, §1.3, "rör inte det som är bra"). Utan per-block-facit: utgå från hela sidan + §1.3-modellen, lämna hellre vid SLIGHT↔MODERATE-tvivel. *(Gamla "svep alla oavsett flagga" gällde när vi bara hade sid-nivå-flagga; nu finns per-block-facit → prioritera efter den, men ignorera inte resten.)* **Bedöm ALLTID sidan som HELHET** — flöde mellan block, dubbletter/upprepning över block, sökordsspridning, att ett 🔵-block inte skaver i sitt sammanhang. Fastna inte i isolerad block-läsning: facit prioriterar, men helheten avgör. Obligatoriskt per sida: (1) grön banner-description, (2) ProblemTrivia content, (3) ProblemTrivia extended_content ("Läs mer" — ofta fet-etikett-listor → de-fluffa; prosa om det var utfylld prosa, stramad lista om sektionens syfte är uppräkning, se nedan), (4) service-/behandlingskort, (5) FAQ-svar. "Klar" = alla blocktyper klarar §3. **Bevara varje distinkt punkt — döm efter sektionens SYFTE (kräver helhetsblick, inte block-för-block).** Är sektionens hela poäng att räkna upp poster med beskrivning (varningstecken, ansiktszoner, behandlingsmetoder) → **behåll posterna distinkta; en stramad, de-fluffad lista är då helt rätt, inte en nödlösning.** Var "listan" i själva verket utfylld prosa → gör om till bunden prosa. Oavsett vilket: döda etikett-filler-formatet och fyllnaden men **slå aldrig ihop två poänger till en vagare mening eller tappa någon.** Räkna punkterna före/efter — antalet ska stämma (ex: "fysisk smärta" och "utebliven förbättring" är två tecken, inte ett). Det här är ett skäl till att vi läser HELA sidan: bara så vet vi en sektions syfte.

**E. Definition of Done.** `git diff` rör bara mål-`.php` (+ logg); deploy grön; **sidan testad på staging-URL → HTTP 200 + renderad HTML (inte blankt/500, §13.C) §7.6**; sökord finns kvar (grep); LYNX-baseline + ändring loggad i §11. Först då töms claim i §12.

**Autonom-kvittens (obligatorisk när ingen ägare följer varje steg — annars är sidan inte klar).** §13.O:s "visa ägaren varje steg" finns inte för en autonom exekutor, så klistra in detta i §11-loggen per sida; det gör "ändrade jag för mycket?" (START HÄR) mätbart i efterhand:
- **Punkt-count:** block/`<li>`/sakpoänger FÖRE = EFTER per omskrivet block (§13.D). Blev det färre → motivera varje borttagen (ren dubblett/fyllnad) eller återställ.
- **Sökord:** `grep` bekräftar att varje målfras (§6) finns kvar.
- **PHP:** inga råa apostrofer/backslash i copy-strängar (§13.C). *(OBS: `php -l` går INTE lokalt — `php` saknas i Claude-skalet på denna maskin; verifiera syntax via staging-deploy istället: HTTP 200 + renderad HTML, inte 500.)*
- **Live:** staging HTTP 200 + grep på en NY formulering syns i svaret (§7.6).

**F. Baseline + rollback.** Spara sidans LYNX-stats FÖRE ändring (§11). Per-sidans commit = revert-enhet. Trigger: tappar sidan i LYNX RANK / sökord efter prod-deploy → `git revert` av den commiten, utvärdera sen.

**G. Pusha i vågor med GSC-gate (uppdaterad 6 jul — ersätter kohort-regeln som i praktiken övergivits).** LYNX-attribution sker per sida (per-sida-commits + stabila block-betyg §1.1); RANKING-attribution skyddas av vågvis main-push med **§10.0-GSC-gaten mellan vågorna**. Notera säsong (kliniken är säsongsbetonad) i §11.

**H. Frys titel/H1/meta under brödtext-omskrivning.** Ändra dem i separat commit om de behöver sökord (t.ex. hudforandringar) — annars går effekten inte att attribuera.

**I. PAGE TYPE / P. PRICE "–".** Kommer av generiskt fallback-Product utan Offer. Separat schemaspår: sätt `$rich_product` per sida (pris från "Från X kr"). Sekundärt mot AI COPY. **Officiell P.PRICE-definition (tooltip 2 jul 15:00):** *"Perceived price level for this page vs market in Google search results. Lower = cheaper. Levels: Very High, High, Average, Low, Very Low."* — dvs. UPPFATTAT prisläge mot MARKNADEN, inte bara schema-status. ipl-rosaceas HIGHEST = Google uppfattar oss som dyrast i segmentet (värt ägar-diskussion: är det önskat premium-läge eller fel signal?); "–" = inget pris uppfattat → Offer-schemat ger Google ett pris att läsa.

**J. FAQPage-schema (§9 Fas 2) realistiskt.** Kosmetisk klinik får troligen inga rich results; markera bara upp Q&A som syns på sidan och är kosmetisk; värdet är innehåll/LYNX, inte stjärnor. AI QUESTIONS drivs av synligt Q&A-innehåll först, schema sen.

**K. Bild-alt/title** ska vara konkret + sökordsbärande (inte "Bild som illustrerar…"). Ligger i siddata → säkert att ändra.

**L. Hub-sidor (hudforandringar)** har eget register: konkreta exempel, orientera, lättare mekanism, **länka ut** till barnsidorna; håll kosmetiskt.

**M. Tunna bonussidor:** täthet från djupare mekanism på sidans egen long-tail — aldrig padding eller huvudterm. Går det inte: acceptera SLIGHT och logga det.

**N. Täthet = SUBSTANS — och skilj INFO från LÄNGD.** De-fluff (bort med fyllnad + dubbletter) kortar texten utan att tappa information; det är rätt. **Bonus-/sökordssidor (acne-ansikte m.fl.) får vara kortare** än primärsidorna. På **primärsidor (acne.php)** håller vi full längd, men via **mer substans** (mekanism, gloss, exempel, Evidence), aldrig via bibehållen filler. **Tappa aldrig en unik poäng eller målfras (§6) — bara dubbletter och fyllnad får gå** (§13.D: räkna punkterna). Undvik CTA-konstruktionen "Boka konsultation, så går vi igenom…" (läses som AI) — skriv CTA:n rakt.

**O. Minimal diff = steg för steg, ta INTE bort substans (default-läge för all omskrivning).** "Minimal" är hur §1.1/§1.2-modellen säger att vi ändrar i det HÄR skedet: en liten, försiktig första åtgärd, inte en genomskrivning. (Det här är en princip, inte en mikroregel — vi rutar inte in oss, §0/§5.)

**Det enkla rättesnöret:** längden spelar ingen roll — texten får bli kortare *eller* längre. Det som gör skada är att **ta bort för mycket på en gång**: hela stycken, listor eller sakpoänger. Behåll varje block, varje list-punkt och varje poäng. En ren summering/dubblett får trimmas, men då som ETT medvetet litet steg ägaren ser — aldrig som del av ett svep där flera stycken försvinner samtidigt.

**Jobba steg för steg, inte i ett svep.** Några få små ändringar → visa för ägaren → iterera. Ägaren ska kunna följa varje steg; ett helt omskrivet sidsvep går varken att granska eller attribuera. Så tappade både acne-ansikte-listan (igår, fångad före commit) och ytliga-blodkarl (idag, rullad tillbaka som "för stora förändringar") substans.

**Största spaken med minst risk (§1.1):** led öppningen — och varje list-punkt — med den konkreta mekanismen i stället för en generisk uppvärmning ("X kan spela en stor roll vid…"). Oftast är det den enda ändring ett block behöver i första passet.

Gör minsta möjliga ändring som plockar bort de *tydligaste* AI-tells och fyllnaden (marknadssuperlativ, ren boilerplate, värsta komma-splitsarna). **Behåll struktur, listor, summerande/avslutande stycken, alla poänger och det mesta av ordalydelsen — skriv inte om hela block.** Säkrare att ta bort för lite än för mycket: vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren ton/poäng är svår att få tillbaka. Stora omskrivningar läses som "för stor skillnad" och går inte att attribuera. Rätt info på rätt ställe — utgå från helheten (§13.D). Justeringar kan lika gärna **lägga till saknad info eller rätta fel** som ta bort — poängen är *små, mätbara steg* mot mindre AI, inte att bara kapa. **Inom minimal: prioritera öppningarna.** Den enda spak värd att gå utöver ren ordtrimning är att **led varje block och varje list-punkt med den konkreta mekanismen**, inte en generisk uppvärmning ("X kan spela en stor roll vid…"). §1.1 nyckel 1: öppningen sätter golvet (fluff-ackumulering × längd höjer graden) → högsta ROI/lägst risk per ändrat ord. Listformat/punkter/summeringar behålls (mäts separat).
