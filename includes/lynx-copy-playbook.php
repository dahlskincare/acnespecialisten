<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX Copy Playbook — AcneSpecialisten

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **den här filen ditt enda underlag — läs hela top-to-bottom först.**

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **När LYNX-info droppas för en sida = din trigger.** Följ §7: spara baseline (§11) → skriv om **alla textblock på sidan** (inte bara de LYNX-flaggade — §13.D) enligt §2 (formel) + §4 (husröst) + §5 (ramar) → kör §3 (checklista) + §6 (SEO-skydd) + §13 (skyddsregler) → logga (§11) → committa + pusha **`staging`**.
- **Arbetssätt (kalibrerat 2026-06-30, skärpt 2026-07-01 — läs §13.O):** vi har kartlagt vad LYNX läser som AI (§1.1/§1.2) och fixar **just de tells, målinriktat och steg för steg** — utan att förstöra sökord eller substans (§6). Jobba i **små steg**: några få ändringar → visa ägaren → mät (§10) → iterera. **Ta inte bort substans** (block, list-punkter, poäng, sökord, claims); längden får bli kortare *eller* längre. Största spaken: **led öppningen med mekanism** (§2/§1.1). **Ta INTE bort hela stycken/listor i ett svep** — ägaren har stoppat det två gånger. Lägg inte till påståenden sidan inte stöder. Testa på staging (§7.6).
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata** (LYNX saknar export): `includes/lynx-data.php` — fyll på vid varje refresh.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

> Kanonisk arbetsfil för att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. Utgå alltid från den här filen — den är **självbärande och enda källan till sanning** (vi använder inte task-tracker; TODO + status bor här). En ny Claude utan kontext ska kunna läsa den top-to-bottom och börja jobba (se §0.1 för parallellt arbete). Senast uppdaterad: 2026-06-30.

**Innehåll:** §0 använda filen · §0.1 parallellt arbete · §1 hävstången · §1.1 bedömningsmodell · §1.2 score-modellen · §2 formeln · §3 checklista · §4 husröst · §4.1 utökad husröst · §5 ramar · §6 SEO-skydd · §7 process · §8 backlog · §8.1 per-sida gaps · §9 TODO · §10 justeringsloop · §11 logg + baseline · §11.1 bevakningslista · §12 claims · §13 skyddsregler

---

## 0. Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. Skriv om **alla textblock på sidan** (inte bara de LYNX-flaggade — §13.D) enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§11) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **SIGNIFICANT först**, men gör hela sidan klar medan vi ändå är där.

**Vad som hör hemma i den här filen (så vi inte rutar in oss):** generella principer, inte engångsiakttagelser. Dyker det upp något på en enskild sida — t.ex. "behövs kommat här?" — är det ett omdöme i stunden, inte en ny regel. Innan en regel läggs till: hjälper den på fler sidor, eller låser den bara fast oss? Hellre få principer + omdöme än en växande lista mikroregler. *(Den gamla komma-efter-sökfras-regeln i §6 var just en sådan över-specificering — den föddes ur ett enskilt "kommat behövdes inte" och togs bort.)*

---

## 0.1 Parallellt arbete (flera Claude samtidigt)
Filen är självbärande — en ny Claude utan kontext läser den top-to-bottom och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — den här filen gäller.)

Koordinationsregler så två instanser inte krockar:
1. **Läs hela filen + §11 (arbetslogg) + §12 (claims) först.** På annan dator: `git pull` innan du börjar.
2. **Claima sidan i §12 innan du rör den** (sida · terminal/namn · status). En sida = en ägare. Rör aldrig en sida någon annan claimat.
3. **Aldrig två instanser i samma fil samtidigt.** Fördela per sida — olika sidor är olika `.php`-filer.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (vad/varför) + §12 (status) när du är klar; `git push` om ni är på olika datorer.
6. Följ §2–§6 exakt, så blir rösten enhetlig oavsett vem som skriver.

---

## 1. Hävstången (varför vissa sidor är SLIGHT och andra SIGNIFICANT)
Samma mall, samma ämne — ändå läser `acne.php` som människa (SLIGHT) och `acne-ansikte.php` som AI (SIGNIFICANT). Skillnaden är **informationstäthet**, inte längd, säljton eller komma-antal.
- SIGNIFICANT öppnar med **fyllnad** (tom skala, cirkulärt, marknadsföring, "det är viktigt att").
- SLIGHT/HUMAN leder med **konkret täthet** — hela modellen i §1.1.

---

## 1.1 Bedömningsmodellen — vad LYNX rimligtvis bedömer (validerad mot per-block-facit)
Axeln = **fyllnad/mall ↔ rak konkret täthet**. Bekräftat mot facit på acne.php, acne-ansikte, ipl-rosacea. LYNX betygsätter **alla** textblock på sidan, inte bara synliga.

- **🔴 SIGNIFICANT** — fyllnad utan täthet. **Öppningen dominerar:** skal-öppning ("påverkar miljontals", "vanligast bland… oavsett kön"), cirkulär ("kan uppstå på flera sätt/delar"), marknads-superlativ ("avancerad… effektiv lösning", "experter"), importans-filler ("det är viktigt att", "viktigt att förstå att"), meta-scaffolding ("Här förklarar vi…"), "inte bara X utan Y". → SIGNIFICANT oavsett hur bra resten är; lång marknadstext förstärker.
- **🟠 MODERATE** — fyllnadsöppning MEN en äkta poäng. Även "led med vad det ÄR + gloss" landar här om det inte byggs ut till full mekanism (jfr acne.php "Akne består av papler och pustler…" = MODERATE).
- **🔵 SLIGHT** — **full, tät mekanism-vandring med kausal payoff** ("…porerna täpps till, bakterier samlas, kroppen svarar med en inflammation, och det är just detta som syns"), ELLER kort + genomgående konkret (definition + plats; konkreta yttre faktorer; konkreta vi-handlingar "vi tar bilder, rengör huden, skyddar ögonen").
- **🟢 HUMAN** — kort + specifik + självsäker: en konkret **siffra/mått** ("större än 5 mm"), namngiven maskin ("Alma Rejuve DyeVL"), eller äkta omdöme med personlig detalj ("gått där i 2-3 år").

**Fyra nycklar:** (1) Öppningen avgör mest — byt fyllnadsöppning mot mekanism/konkret. (2) SLIGHT-ribban är hög — hela blocket måste vara tätt, halvkonkret = MODERATE. (3) Kort + konkret siffra/namn → HUMAN ("Lägg till 1000 kr…", "större än 5 mm", "Dermapen 4"); längd är modifierare. (4) **Fluff-svansen** drar ner ett annars konkret block ("perfekt anpassad för dina unika behov", "uppnå dina hudvårdsambitioner", "säkerställa en trygg upplevelse") — och det gäller även en **cirkulär summeringssvans som bara upprepar vad blocket redan sagt, även utan ordet "Sammanfattningsvis"** (facit: microneedling på acnebehandling — full mekanism men 🔴 pga längd + "Kombinationen av dessa… få bort akne"-svans). Korta, konkreta instruktioner (eftervård: "håll rent, avstå smink första dygnet") klarar SLIGHT även med ett milt "det är viktigt att".

**Mål:** rework allt som är 🔴 SIGNIFICANT eller 🟠 MODERATE → **minst 🔵 SLIGHT**. 🔵/🟢 lämnas orörda. 🟢 HUMAN nås bara på naturligt korta block (definition med siffra, namngiven maskin, kort erbjudande, omdöme) — **tvinga aldrig ner ett förklarande block i längd för att jaga HUMAN** (krockar med §13.N). För förklarande prosa är SLIGHT målet.

**Modell-referens:** `acne.php` är samma ämne som acne-ansikte fast i SLIGHT/MODERATE-version — modellera omskrivningar direkt på dess SLIGHT-block. Alla per-block-facit (sida + datum) loggas i **`includes/lynx-examples.php`** — växande korpus; fyll på vid nya facit, och logga före→efter när resultat kommer.

---

## 1.2 SCORE-modellen — komponenter, sajt-tak & copy-spakar (prediktiv, validera mot refresh)
SCORE (0–100) ≠ AI COPY-flaggan men lyfts av samma jobb. Komponenter: **CONTENT QUALITY** (Base, Depth, Evidence, Language, Readability) + **E-E-A-T** (Experience, Expertise, Authority, Trust) + **AI STYLE** (Human-like). Baselines + sajt-tak (rådata) i `lynx-data.php`.

**Sajt-taket (stora insikten, hypotes):** hela sajten taklar ~**SCORE 39**; taket beror på att **AI STYLE/Human-like ligger 25–30 ÖVERALLT** — även de tre bästa sidorna (acne.php, behandla-stora-porer, ipl-rosacea), som har Depth 75–81 + E-E-A-T 83–85. Gammal AI-copy håller nere alla. **De-AI-omskrivningen är enda spaken som kan bryta 39 — ingen sida har gjort det än → otestad uppsida.** Därför är copy prio 1, inte schema.

**Prediktiv spak-karta (copy-drag → komponent den flyttar).** Använd för att förutse score-effekt FÖRE refresh (analogt med §1.1 för AI COPY):
| Komponent (baseline→topp) | ↑ av (skriv så här) | ↓ av (undvik) |
|---|---|---|
| **AI STYLE** 25→30 | §2-formel, §4-husröst, §1.1-täthet; konkret öppning, varierad puls, inline-gloss | AI-vokab/em-streck (§5), filler-öppning, staplade hedges, marknads-superlativ |
| **Evidence** 11–46 | siffror, tidsram, namngiven mekanism/organism (factual §5), "Från X kr", 30 år, namngivna maskiner | vaga kvantifierare, superlativ utan tal |
| **Depth** 67–81 | full kausal mekanism-vandring, flera delaspekter, bunden prosa | korta ner, fet-etikett-listor (§13.D/N) |
| **Readability** 40–65 | puls (kort+lång), gloss av fackord, tydlig struktur | enbart långa meningar, staccato |
| **E-E-A-T** 49→85 | förstahands-klinik ("vi tar bilder/rengör"), 30 år, namngivna maskiner/brands | mest strukturellt → **rör inte widgets** (specialister/resultat/recensioner bär detta) |
| **Language** 52→80 | idiomatisk svenska, rätt register | translationese, AI-vokab |

**No-regression (KRITISKT — "utan negativa konsekvenser på annat"):** spakarna är JOINT, inte fristående. Lyft AI STYLE + Evidence **utan att sänka** Depth, E-E-A-T eller sökord/ranking. Vanliga fällor: jaga Human-like genom att korta bort substans → sänker Depth (§13.N); stripa "fackord" → sänker Evidence; skriva om rubriker → tappar sökord (§6). **Regel: varje ändring ska vara ≥0 på alla komponenter och >0 på minst en.** Optimera aldrig en komponent på en annans bekostnad.

*(acne-ansikte + behandla-pigmentflackar har SCORE "–" → kör på AI COPY + formel. Modellen är en hypotes — mät, förfina och backporta enligt §10 när refreshen kommer.)*

---

## 2. Formeln: **Krok → Mekanism → Skylt**
1. **Krok** — öppna med en *konkret komponent*, inte abstrakt skala. Första substantivet ska vara något läsaren kan se (papler, gropar, fläckar, "bacne"). Aldrig "Det finns flera…/Det är viktigt att…/När det kommer till…/påverkar miljontals…". **Gäller även varje list-punkt:** led med mekanismen/det konkreta, inte "[rubrik] kan spela en roll vid…".
   - Ofta **fusera Krok + Mekanism** i mening ett (orsaken bunden på komponenten).
2. **Mekanism** — gå igenom orsaken steg för steg med kausala bindeord (*vilket leder till, på grund av, eftersom, vilket i sin tur, detta resulterar i*). Lägg minst **en taktil verb/bild eller inline-parentes-förklaring per begrepp** (t.ex. *kollagen (ett protein som håller huden elastisk)*, *"äter upp"*, *som en månkrater*). Täthet = bunden prosa, **aldrig** fet-etikett-punktlistor.
3. **Skylt** — avsluta intro med en konkret hänvisning till innehållet under, **varierad** mellan systerblock (aldrig samma "Här går vi igenom…" två gånger). Fråge-scaffolden (Vad/Varför/Vem/Var) kan själv vara skylten.

**Empati-lager (för tillståndssidor):** acknowledge-then-reassure + av-skamning ("oavsett ålder/kön") + mjuk genetik-hedge ("om… finns det en risk"). Mekanism + empati = tillståndssidans register.

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
- [ ] Kosmetiskt: inga medicinska/diagnos-påståenden, ingen hudcancer, inga aktiva ingredienser/organismer?
- [ ] Klinik-"vi", inga hudterapeutnamn?
- [ ] Stannar på sidans eget ämne; grannämnen löses med **länk**?
- [ ] **Sökorden bevarade** (se §6)?
- [ ] Skylt varierad mot systerblock; CTA är en "resa", inte "boka tid"?

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
Aldrig bara "boka tid". Forma CTA:n som en resa med en namngiven vinst, och variera varje gång. Återkommande form = inbjudan + kostnadsfri konsultation + namngiven destination:
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
- **Reassurance-beat** (kort hopp-mening som bryter rytmen): *"Det viktiga att komma ihåg är att huden kan behandlas."*
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

---

## 5. Låsta ramar (gäller alla sidor)
- **Kosmetiskt** — **lägg inte till** nya medicinska/diagnos-påståenden, hudcancer eller "sök läkare/medicinsk vård" (LYNX YMYL-gap). **MEN: befintligt sidinnehåll är godkänt** — strippa inte godkänd formulering (t.ex. "undvika kraftfulla läkemedel med biverkningar" = OK kosmetisk-spår-positionering). Befintliga sidor är referensen för *vad vi får säga* (innehåll + tillåtna påståenden). Hänvisa till **vår klinik/hudterapeut** är OK.
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
- **Reglerna är heuristiker, inte stela lagar.** Använd omdöme — befintligt godkänt innehåll och en genuint bättre formulering trumfar en regel som inte tillför i sammanhanget. Vi rutar inte in oss.

---

## 6. ⚠️ SEO-skydd — bryt inte sökord/ranking
Sidorna rankar redan på sökord. Omskrivningen får höja kvaliteten **utan att ta bort signalerna som funkar**:
- **Bevara primärt sökord + viktiga varianter** i `$seo_title`, H1, H2:er och brödtext. Skriv aldrig bort sökordet ur sidan (t.ex. "akne i ansiktet" måste finnas kvar). Hur frasen interpunkteras (komma efter eller ej) är en **rytmfråga (§3), inte SEO** — ett komma bryter inte Googles frasmatchning. Behåll bara frasen i texten.
- **Rör `$seo_title` / `$seo_description` försiktigt** — om du ändrar, behåll sökordet och förbättra bara. **`$seo_keywords` är en lagring** av sidans sökord (Google ignorerar taggen) — ta aldrig bort termer där, även dubbletter får stå.
- **Ändra ALDRIG filnamn/URL** (dödar ranking + kräver redirect).
- **Radera inte hela sektioner** som bär rankande innehåll — komprimera prosan, behåll ämnestäckningen.
- **Behåll interna länkar, priser, boknings-URL:er och CTA-länkar.** Lägg till nya länkar (t.ex. rosacea) utan att ta bort befintliga.
- **Sökords-/fras-koll (mekanisk, obligatorisk).** Vissa meningar är skrivna *just* för att ranka en fras (t.ex. "akne på hakan", "akne på kinderna", per-zon-/per-orsak-rubriker). Innan du skriver om ett block: notera fraserna i det (särskilt de som matchar `$seo_keywords`). Efter ändringen: grep:a sidan och bekräfta att varje fras finns kvar — eller flyttats medvetet (siloing). Tappa aldrig en målfras av misstag.
- **Bara innehåll i sidans `.php`** — inga mall-/widget-ändringar (se §8 om widgets).
- **En sida i taget på `staging`**, granska `git diff` innan merge.
- **Verifiera efteråt:** LYNX-refresh + håll koll på ranking; logga i §11.

---

## 7. Arbetsprocess per sida
1. **Spara LYNX-baseline** för sidan i §11 (AI COPY, SCORE, GAPS, AI QUESTIONS, PAGE TYPE, P. PRICE, KW, ev. RANK) — innan något ändras.
2. LYNX-info klistras in; identifiera primärt sökord + intent (bonus → long-tail).
3. Skriv om **alla textblocktyper på sidan** (§13.D) — inte bara de LYNX-flaggade — enligt §2–§4; kör §3-checklistan + §6 SEO-skydd.
4. Lös gap-punkter inom ramarna (grannämne → länk; ingen medicin/cancer).
5. Logga i §11 (baseline + vad/varför). Följ Definition of Done (§13.E).
6. **Push `staging` → TESTA att sidan gick upp:** hämta staging-URL:en (`https://www.acnespecialisten-staging.minoch.com/<sida>`) och bekräfta **HTTP 200 + renderad HTML** (inte blankt/500) samt att sökord/claims syns i svaret. Fångar PHP-strängfel (§13.C). En sida är inte klar förrän den verifierat laddar. **OBS: staging-deploy har ~minuters lag** — poll:a tills *din* ändring faktiskt syns i svaret (grep efter en ny formulering), inte bara tills 200 kommer.
7. Promota till prod (§13.A) → vänta på LYNX-refresh → utvärdera (§10).

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**SIGNIFICANT (tung omskrivning, nu):**
- `acne-ansikte.php` — ✅ KLAR (omskriven hela sidan → staging, väntar main-push; se §9/§11/§11.1)
- `ytliga-blodkarl.php` — ✅ KLAR (omskriven steg för steg → staging, väntar main-push; se §9/§11/§11.1)
- `behandla-pigmentflackar.php` — ✅ KLAR (bonus, KW16; de-AI:ad → staging, väntar main-push)
- `hudproblem/hudforandringar/index.php` — ✅ KLAR (hub; de-AI:ad → staging, väntar main-push; H1 i sep. commit)

**MODERATE (nästa våg, 10 st):** `pigmentflackar.php` (KW244), `ipl-rosacea.php`, `rhinophyma-rosacea.php`, `microdermabrasion.php`, `mogen-hy.php`, `solskadad-hy.php`, `om-oss.php`, `hudbehandlingar/ipl/`, `hudproblem/bristningar/`, `hudproblem/oonskat-har/`.

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

### 8.1 Per-sida gap-punkter (LYNX-förslag) + beslut
Från LYNX "Quick wins / Recommended improvements". Beslut enligt §5 (kosmetiskt, siloing).

**ytliga-blodkarl.php**
- HIGH Fördjupning om Rosacea → **GÖR: länk** till rosacea-sidan (kort omnämnande, ingen rosacea-text här).
- HIGH Tydliggör när man ska söka medicinsk vård (1177) → **SKIP** (medicinskt — vi håller kosmetiskt).
- MEDIUM Utesluta hudcancer (basalcellscancer) → **SKIP** (medicinskt).
- MEDIUM Egenvård/lindring i hemmet → **GÖR (vänd till konvertering):** förklara ärligt att ytliga blodkärl *inte* går att behandla hemma — de kräver IPL på klinik. Svarar på sökintentionen och leder till vår behandling. *Generell princip: när det ärliga svaret är "ingen hemmakur", säg det och förklara vår lösning istället för att skippa frågan.*

**hudproblem/hudforandringar/index.php**
- HIGH H1 och titel saknar primärt sökord → **GÖR** (sökord i H1/titel; behåll övriga sökord).
- HIGH För brett fokus på generella hudförändringar → **GÖR inom hub-scope** (tydligare fokus, men sidan är en kategori-hub).
- HIGH Tydligare riktlinjer för när man ska söka vård → **SKIP** (medicinskt).

**seborroisk-keratos.php** (SLIGHT — frivilliga förbättringar)
- HIGH För brett fokus → **GÖR: smalna av** till seborroisk keratos (mjällvårtor).
- MEDIUM Information om skrapning (curettage) → **GÖR: nämn + jämför** med våra metoder (Laser/CryoPen), kosmetiskt ramat.

**acne-ansikte.php / behandla-pigmentflackar.php:** inga LYNX gap-punkter (GAPS = ⚡-/💡-); bara AI COPY-omskrivning.

---

## 9. TODO (denna fil är källan — ingen task-tracker)
Kryssa här. Start/stopp-vänligt: status = §9 + §11 (logg) + §12 (claims). Per-sida gap-detaljer i §8.1.

**Setup**
- [x] Färdigställ setup & playbook (formel, husröst, ramar, SEO-skydd, §13-skyddsregler, lynx-data.php).

**Fas 1 — SIGNIFICANT-sidorna**
- [x] `acne-ansikte.php` — omskriven (hela sidan), minimal-diff (§13.O); sökord/claims bevarade → staging, väntar main-push.
- [x] `ytliga-blodkarl.php` (KW172) — omskriven steg för steg (öppningar + summeringar bort + gap-punkter §8.1) → staging, väntar main-push. Bortkommenterade $type_categories/$symptoms orörda (bilder saknas).
- [x] `behandla-pigmentflackar.php` — de-AI:ad (öppningar + marknadssvansar bort), long-tail hållen → staging, väntar main-push.
- [x] `hudforandringar/index.php` — de-AI:ad (hub-register, öppningar + svansar + stavfel) → staging; H1-sökord i separat commit (§13.H).

**Fas 2 — Schema**
- [ ] FAQPage JSON-LD från `$faq_categories` (efter de 4 sidorna) — realistiskt scope (§13.J) + FAQ-svar i husröst.
- [ ] PAGE TYPE/P. PRICE: sätt `$rich_product` per sida med Offer (§13.I) — separat schemaspår.

**Fas 3 — MODERATE-vågen** (efter schema)
- [ ] 10 MODERATE-sidor (§8): pigmentflackar.php (KW244), ipl-rosacea, rhinophyma-rosacea, microdermabrasion, mogen-hy, solskadad-hy, om-oss, hudbehandlingar/ipl, bristningar, oonskat-har. *(seborroisk-keratos är SLIGHT, ej MODERATE — gap-förslagen i §8.1 är frivilliga.)*

**Löpande / avslut**
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [x] (Löst) Filerna är `.php` med `<?php exit;` → renderas tomma på webben; behöver inte raderas.

**Parkerat**
- [P] Dubbel `title`-attribut i widgets (§8 — beslut: skippa).

---

## 10. Justeringsloop & prediktiv mät-loop (efter LYNX-refresh)
**Mät-loopen (så modellen i §1.1/§1.2 förbättras, inte bara sidorna).** Data kommer på delay (LYNX skannar live, refreshar långsamt) — därför **prediktera före, mät efter**:
1. **Före** (vid omskrivning): logga i §11 vilka komponenter vi tror rör sig och varför (t.ex. "AI STYLE ↑↑ de-AI; Evidence ↑ 30år+Från-pris+mekanismtal; Depth = hållen; sökord = hållna").
2. **Efter refresh:** logga faktisk delta per komponent (FÖRE→EFTER ur lynx-data.php).
3. **Jämför:** stämde prediktionen? Var missade modellen? Notera prediktionsfelet.
4. **Förfina** §1.1/§1.2 utifrån felet (modellen är hypotes — vi rutar inte in oss, §0/§5).
5. **Backporta:** när modellen blir bättre → lista vad som nu bör fixas på **redan gjorda/gröna sidor** (samma spak som visat sig funka). Lägg i §9 Löpande.

**Per-signal-respons:**
- **Fortf. SIGNIFICANT/MODERATE?** → nästa lager block (extended "Läs mer", MODERATE-block), mer mekanism/gloss/evidens.
- **AI QUESTIONS ej GOOD?** → FAQ-innehåll + FAQPage-schema (§9 Fas 2).
- **PAGE TYPE/P. PRICE "–"?** → generiskt fallback-Product utan Offer; sätt `$rich_product` per sida.
- **SLIGHT + SCORE nära/över 39?** → vi bröt taket; dokumentera VAD som gjorde det och backporta (§10 steg 5).
- Uppdatera §9 + denna fil + lynx-data.php när vi lär oss vad som flyttar nålen.

---

## 11. Arbetslogg (vad vi gjort + varför)
Korrelera mot LYNX-refresh. Senaste först. Spara alltid **LYNX-baseline** (FÖRE-värden) per sida så vi kan utvärdera vad ändringen gjorde. Logga även en **prediktion** per omskrivning (vilka SCORE-komponenter vi tror rör sig + varför, §10 steg 1) så vi kan mäta modellens träffsäkerhet när EFTER-värden kommer. All rå LYNX-data (alla sidor, alla kolumner) sparas i **`includes/lynx-data.php`** — vår manuella "export" eftersom LYNX saknar exportfunktion. Uppdatera den vid varje refresh.

### LYNX-baseline — de 4 SIGNIFICANT-sidorna (2026-06-30, före ändring)
| Sida | VALUE | PAGE TYPE | SCORE | GAPS ⚡/💡 | AI COPY | AI QUESTIONS | P. PRICE | KW |
|------|-------|-----------|-------|-----------|---------|--------------|----------|----|
| acne-ansikte.php | 32 | – | – | –/– | SIGNIFICANT | OK | – | 57 |
| ytliga-blodkarl.php | 42 | – | 22 | 2/2 | SIGNIFICANT | OK | – | 172 |
| behandla-pigmentflackar.php | 14 | – | – | –/– | SIGNIFICANT | GOOD | – | 16 |
| hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | SIGNIFICANT | OK | – | 8 |

### 2026-07-01 — `hudproblem/hudforandringar/index.php` (hub, KW8) — OMSKRIVEN, klar → staging
**Gjort (AI COPY):** Hub-register (§13.L). Öppningar ledda med konkret (Vad/Varför/Vem/Var + banner + $type-intro), fyra summeringssvansar bort (Vad/Varför/Vem/Var-extended — "Sammanfattningsvis"/"För att sammanfatta"), artikel 1+2 av-marknadsförda (namngav laser/CryoPen). Stavfel rättade: "födelsermäken"→"födelsemärken", "elaktartade"→"elakartade", "behandlingsplans"→"behandlingsplan". Hub-fokus skärpt till **godartade** hudförändringar (gap §8.1 #2). Bevarat: 14 typnamn i typ-listan, interna länkar (blodprickar/seborroisk-keratos), alla FAQ + **ärliga medicinska brasklappar** ("vi diagnostiserar inte" / "kontakta vårdcentral"), mekanism-kort (CryoPen/laser). Sökord grep-verifierade (hudförändringar 86, typnamn intakta). 0 råa apostrofer (§13.C).
**H1-gap (§8.1 #1, §13.H):** banner-H1 "Hudförändringar" → "Ta bort hudförändringar" i SEPARAT commit (så effekten kan attribueras). **Söka-vård-gap (§8.1 #3):** SKIP (medicinskt).
**Prediktion:** SIGNIFICANT→SLIGHT; AI STYLE ↑ (öppningar+svansar), Evidence ↑ (namngivna behandlingar), sökord =.

### 2026-07-01 — `behandla-pigmentflackar.php` (bonus, KW16) — OMSKRIVEN, klar → staging
**Gjort:** Hela sidan de-AI:ad steg för steg (banner + $about + $define + $treat + 5 behandlingskort). Öppningar ledda med mekanism/konkret (banner → namngivna metoder; $about → "bryta ner pigment"; laser-kortet → ljuspulser-mekanism i stället för "mycket effektiv metod"); marknadssvansar bort ($about para 3 "dedikerade team… bästa möjliga vården", fluff-svansar i IPL/laser/CryoPen-korten); marknadsord bort (de mest effektiva, skräddarsydda, avancerad laserteknologi, snabbt och effektivt). Bevarat: metodnamn (IPL/kemisk peeling/laser/microneedling/CryoPen), intern länk ("kemisk peeling stockholm" → /kemisk-peeling.php), priser (5× "Från 1995 kr"), melanin, FAQ (redan konkret/GOOD), frysta meta ($seo_title/$seo_keywords §13.H). Bonussida-disciplin (§13.M): höll long-tail "behandla/ta bort pigmentfläckar", jagade inte huvudtermen. 0 råa apostrofer (§13.C).
**Prediktionsliggare (§10 / modellmål — block-gissning FÖRE refresh, scoras mot LYNX sen):** banner 🔴→🔵 ~80% · $about 🔴→🔵 ~75% · $define 🟠→🔵 ~60% · $treat 🔴→🔵 ~70% · laser-kort 🔴→🔵 ~75% · IPL/kemisk/micro/cryo 🟠→🔵 ~55% · FAQ 🔵 (orört). Sida SIGNIFICANT→SLIGHT förväntat; AI STYLE ↑ + Evidence ↑ (namngivna metoder), sökord =.

### 2026-07-01 — `ytliga-blodkarl.php` — OMSKRIVEN (steg för steg), klar → staging
**Gjort:** Hela sidan svept med den kalibrerade minimal-metoden, block för block med ägar-godkännande: (1) öppningarna ledda med mekanism/konkret (Varför, Vem, Var, Vad-extended, Varför-extended, Vem-extended); (2) tre rena summeringsstycken bort (Varför-/Vem-/Var-extended — microneedling-mönstret); (3) marknadsord bort (effektiv/skräddarsyr/"det självklara valet"/"de mest avancerade"); (4) grammatik (dem→de, "en kosmetisk"→"ett kosmetiskt"); (5) gap-punkter §8.1: rosacea inline-länk, FAQ "förebygga" rättad från åderbråcks-råd → ansiktsrelevant, hemmavård-vinkel + namngivna maskiner (Alma Rejuve Dye-VL/Harmony XL Pro) i artiklarna. Varje mening/poäng bevarad utom rena dubbletter; sökord grep-verifierade (näsan 10, kinderna 7, näsvingarna/näsryggen, rosacea, IPL, brustna/spindelkärl); 0 råa apostrofer (§13.C).
**Prediktion (§10 steg 1):** AI STYLE ↑ (öppningar + borttagna summeringssvansar = §1.1 största spakar), Evidence ↑ (namngivna maskiner), Depth = (poäng kvar), E-E-A-T/sökord =. Förväntad SIGNIFICANT → SLIGHT på de omskrivna blocken. Testar öppnings-spaken från acnebehandling-facit i skarpt läge.
**Process:** kalibrerat efter att försök #1 stoppades — den här gången steg för steg, ett block i taget med godkännande; ägaren nöjd ("detta är bra").

### 2026-07-01 — `ytliga-blodkarl.php` — försök #1 RULLAT TILLBAKA (tog bort för mycket)
**Vad hände:** Påbörjade ett block-svep och skrev om hela stycken (tog bort flera stycken, slog ihop meningar) i Vad/Varför/Vem — ägaren stoppade direkt: "för stora förändringar". `git checkout -- ytliga-blodkarl.php` återställde sidan till original; inget kvar i arbetsträdet på sidan (bara playbook). **Rotorsak:** tolkade "svep alla block" (§13.D) som licens att skriva om varje block i ett svep, i stället för små, målinriktade steg. **Kollade acne-ansikte (som ägaren bad om):** listorna där är faktiskt intakta live — 20 `<li>`, alla besvär-etiketter kvar (Panna/Kinder/Haka/Näsa/Käklinje/Hals, Hormoner/Stress/Preventivmedel/Yttre m.fl.); förra listförlusten fångades före commit. **Åtgärd:** §13.O + START HÄR-bullet omskrivna till den enkla principen (ta inte bort substans, längden fri, steg för steg). En först tillagd "RÖR-INTE-TEST"-mikroregel togs bort igen som för instängande + otydlig (§0/§5 — vi rutar inte in oss). Baseline (§11-tabellen) oförändrad — sidan aldrig deployad. **Nästa gång:** små målinriktade steg mot just de LYNX-AI-tells vi kartlagt (§1.1); visa ägaren varje steg; skydda sökord (§6).

### 2026-06-30 — `acne-ansikte.php` — omskriven (hela sidan klar), väntar main-push
**Gjort:** Hela sidan omskriven med minimal diff (§13.O): bara tydligaste AI-tells bort (marknadsord avancerad/effektiv/skräddarsydd/speciell/avgörande, boilerplate "du är inte ensam", meta-scaffolding, fyllnadssvansar) + värsta komma-splitsarna. Struktur, summeringar, alla poänger, sökord, claims (**Cutibacterium kvar**), priser och länkar intakta — grep-verifierat. Inget unikt innehåll tappat.
**Prediktion (§10 steg 1):** AI STYLE ↑ (mindre fyllnad/marknadsord + Orsaker-öppningarna ledda med mekanism = §1.1:s största spak), Evidence/Depth = (substans kvar), sökord/E-E-A-T =. Förväntad landning SIGNIFICANT → MODERATE/SLIGHT. Listformatet behållet med flit — mäter om LYNX straffar en ren lista eller bara en utfylld.
**Process-lärdomar (inbakat i playbook):** §13.O minimal-diff (ta bort LITE, iterera, kan även lägga till/rätta); §13.D döm efter sektionens syfte (uppräkning → behåll lista, slå inte ihop poänger); §13.N info ≠ längd, bonussidor får vara kortare; §3 komma stryks rakt av.

### 2026-06-30 — Playbook-städning (avlägsna över-specificering)
**Gjort:** (1) Tog bort §6-regeln "komma efter sökfras matchar exakt-frasen sämre" — falsk SEO-grund + fastlåsande; ersatt med rytm-hänvisning (§3) + "behåll frasen i texten". (2) La in §0-vakt: bara generella principer hör hemma i filen, engångsiakttagelser är omdöme i stunden. (3) Slog ihop §3:s tre komma-punkter till en, med "enklaste fixen = stryk onödigt komma, omformulera bara vid behov". (4) Rättade motsägelsen "flaggade block" vs "alla block" på flera ställen (§0/§7/§13.D): **hela sidan är arbetslistan, inte LYNX:s flagg-lista** — det var den motsägelsen som lät en tidigare session fastna i "får bara röra flaggade block". (5) Skärpte uppdraget överst: mål = LYNX **helt grönt/korrekt**, varje textblock minst SLIGHT/HUMAN (rättade vilseledande "SIGNIFICANT → MODERATE"). **Varför:** ägaren var nöjd med acne-ansikte och fixen var bara att stryka extra komman utan omformulering — regeln var en överreaktion på ett engångsfall. Princip: vi rutar inte in oss (§5). Minnesfil [[comma-ai-tell]] uppdaterad i linje med detta.

### 2026-06-30 — `acne-ansikte.php` (SIGNIFICANT) — OMSKRIVEN, väntar LYNX-refresh
**Gjort:** Skrev om de **7 flaggade blocken** (banner + Vad/Varför/Orsaker/När/Var = SIGNIFICANT, Hur = MODERATE) → SLIGHT-mål, varierade öppningar, ingen upprepad ", och"-fog, befintliga claims/sökord bevarade. Regler reviderade: organism-namn/ingredienser factual OK (§5), komma-efter-sökfras mjukad till riktlinje (§6), "heuristiker inte stela lagar" (§5). **Cutibacterium acnes STANNAR** (godkänt befintligt — bakteriens namn). LYNX-vyn (3 nya bilder 30 jun) = **samma 10 block**, inga gömda extra. Logga före/efter i lynx-examples.php när LYNX uppdaterats.
**Status:** hela sidan omskriven och klar — se posten överst.
**Tidigare:** Provomskrivningarna nedan **rullades tillbaka till original** eftersom vi finslipade formel/ramar under tiden (täthet = substans inte kortare §13.N · sökordsbevarande §6 · helt block-svep §13.D). Görs om i ETT rent svep med färdig playbook. LYNX-baseline ovan gäller fortfarande. Att ta med i omskrivningen (lärdomar + checklista):
- Täthet = SUBSTANS, inte kortare text (§13.N). Bevara alla målfraser (§6).
- Block att svepa: banner-description (rad 27), alla ProblemTrivia `content` (rad 62, 70, 82, 101, 117, 141) **och** deras `extended_content`, avslutande CTA (rad 149).
- `extended_content` är bold-label-listor (rad 84–92, 103–109, 119–133, 143–147) → gör om till bunden prosa (§13.D).
- **Behåll** *Cutibacterium acnes* (rad ~72) — godkänt befintligt. Pris → "Från 1595 kr" (rad 220). Konkret image_alt (rad 21). CTA utan "…, så går vi igenom…".
- `$seo_keywords` (rad 10) lämnas orört (sökordslagring).

---

## 11.1 Bevakningslista — sidor som väntar på LYNX-refresh (mät-loopen, §10 steg 2)
LYNX skannar bara LIVE och refreshar med delay — **mätklockan startar när ägaren pushar `main`**, inte vid staging. Vi kan inte polla LYNX (ingen export/API); ägaren droppar ny skärmdump när LYNX uppdaterat, då mäter vi delta mot FÖRE-baseline + prediktion. Listan = vad vi väntar på, så inget glöms.

| Sida | Staging-push | Main-push (mätstart) | FÖRE-baseline | Prediktion (§10 steg 1) | Senaste LYNX-analys | Status |
|---|---|---|---|---|---|---|
| acne-ansikte.php | 2026-06-30 | **2026-06-30 (LIVE)** | SCORE "–", AI COPY SIGNIFICANT, KW57 | AI STYLE ↑, Depth/Evidence/sökord = | – | live på main 30 jun, verifierad 200 + nytt innehåll → **bevaka LYNX-refresh** |
| ytliga-blodkarl.php | 2026-07-01 | *(väntar)* | SCORE 22, AI COPY SIGNIFICANT, KW172 | AI STYLE ↑ (öppningar+summeringar bort), Evidence ↑ (namngivna maskiner), Depth/E-E-A-T/sökord = | – | omskriven steg för steg → staging; **inväntar main-push + LYNX-refresh** |
| behandla-pigmentflackar.php | 2026-07-01 | *(väntar)* | AI COPY SIGNIFICANT, SCORE –, AIQ GOOD, KW16 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑ (metoder), sökord = | – | de-AI:ad → staging; **inväntar main-push + LYNX-refresh** |
| hudforandringar/index.php | 2026-07-01 | *(väntar)* | AI COPY SIGNIFICANT, SCORE 17, GAPS 3/2, KW8 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑, sökord = | – | de-AI:ad + H1-sökord (sep. commit) → staging; **inväntar main-push + LYNX-refresh** |

När en rad refreshats: mät (§10 steg 2–3), logga EFTER i §11 + lynx-data.php, förfina modellen (steg 4), backporta (steg 5), töm raden.

---

## 12. Pågående arbete / claims
Claima en sida här **innan** du rör den. Töm raden när den är klar (logga istället i §11). Detta är den delade "låsningen" mellan parallella Claude-sessioner.

| Sida | Ägare (terminal/namn) | Status | Tid |
|------|------------------------|--------|-----|
| *(ingen aktiv claim — ytliga-blodkarl klar, se §11-loggen + bevakningslistan §11.1)* | | | |

---

## 13. Skyddsregler & mätning (från plan-granskningen)
**A. Produktion vs staging (VIKTIGAST).** LYNX skannar LIVE-sajten (`main` → produktionshost `acnespecialisten.se`). **Process:** arbeta på `staging` → push `staging` (→ temp-staging) → ägaren verifierar att sidan fungerar → push/merge `main` (→ live). **LYNX ser bara live**, så mät effekt från **main-deploy-datum**, inte staging-edit. (Att merga `staging`→`main` är ofarligt trots att staging ligger efter main — main får bara våra nya commits.) **Rollfördelning:** assistenten fixar sidor + commitar + pushar `staging`; ägaren verifierar och pushar `main` (assistenten rör aldrig main).

**B. Filerna är INTE webb-läsbara (löst).** `lynx-copy-playbook.php` + `lynx-data.php` börjar med `<?php exit; ?>` → servern kör dem och returnerar **tomt** om någon öppnar URL:en. Vi läser dem i editor/git. Inget behov av deploy-exkludering eller radering. (Verifiera vid behov: öppna `/includes/lynx-copy-playbook.php` på temp-staging → ska vara tom.)

**C. PHP-strängsäkerhet.** Copy ligger i enkel-citerade PHP-strängar (`content: '...'`). Ett rått apostrof (`'`) eller backslash kraschar sidan (500). Regel: inga råa apostrofer/backslash i copy — omformulera eller använd typografiskt `’`. (Dubbla citattecken och `$` är säkra.) `php -l` som CI-gate vore robust.

**D. Svep ALLA textblock, inte bara intro — och inte bara de LYNX-flaggade.** LYNX betygsätter all renderad text och visar sällan en flagga per block, så **LYNX:s flagg-lista är inte arbetslistan — hela sidan är det** (texten ska dessutom vara bra för Google oavsett vad LYNX råkar visa). Block som redan är genuint tighta/SLIGHT kan lämnas (§1.1), men utgå från hela sidan, inte flagg-listan. Obligatoriskt per sida: (1) grön banner-description, (2) ProblemTrivia content, (3) ProblemTrivia extended_content ("Läs mer" — ofta fet-etikett-listor → de-fluffa; prosa om det var utfylld prosa, stramad lista om sektionens syfte är uppräkning, se nedan), (4) service-/behandlingskort, (5) FAQ-svar. "Klar" = alla blocktyper klarar §3. **Bevara varje distinkt punkt — döm efter sektionens SYFTE (kräver helhetsblick, inte block-för-block).** Är sektionens hela poäng att räkna upp poster med beskrivning (varningstecken, ansiktszoner, behandlingsmetoder) → **behåll posterna distinkta; en stramad, de-fluffad lista är då helt rätt, inte en nödlösning.** Var "listan" i själva verket utfylld prosa → gör om till bunden prosa. Oavsett vilket: döda etikett-filler-formatet och fyllnaden men **slå aldrig ihop två poänger till en vagare mening eller tappa någon.** Räkna punkterna före/efter — antalet ska stämma (ex: "fysisk smärta" och "utebliven förbättring" är två tecken, inte ett). Det här är ett skäl till att vi läser HELA sidan: bara så vet vi en sektions syfte.

**E. Definition of Done.** `git diff` rör bara mål-`.php` (+ logg); deploy grön; **sidan testad på staging-URL → HTTP 200 + renderad HTML (inte blankt/500, §13.C) §7.6**; sökord finns kvar (grep); LYNX-baseline + ändring loggad i §11. Först då töms claim i §12.

**F. Baseline + rollback.** Spara sidans LYNX-stats FÖRE ändring (§11). Per-sidans commit = revert-enhet. Trigger: tappar sidan i LYNX RANK / sökord efter prod-deploy → `git revert` av den commiten, utvärdera sen.

**G. Mät en kohort i taget.** Skeppa de 4 SIGNIFICANT, vänta på LYNX-refresh, utvärdera, sen MODERATE-vågen. Notera säsong (kliniken är säsongsbetonad) i §11.

**H. Frys titel/H1/meta under brödtext-omskrivning.** Ändra dem i separat commit om de behöver sökord (t.ex. hudforandringar) — annars går effekten inte att attribuera.

**I. PAGE TYPE / P. PRICE "–".** Kommer av generiskt fallback-Product utan Offer. Separat schemaspår: sätt `$rich_product` per sida (pris från "Från X kr"). Sekundärt mot AI COPY.

**J. FAQPage-schema (§9 Fas 2) realistiskt.** Kosmetisk klinik får troligen inga rich results; markera bara upp Q&A som syns på sidan och är kosmetisk; värdet är innehåll/LYNX, inte stjärnor. AI QUESTIONS drivs av synligt Q&A-innehåll först, schema sen.

**K. Bild-alt/title** ska vara konkret + sökordsbärande (inte "Bild som illustrerar…"). Ligger i siddata → säkert att ändra.

**L. Hub-sidor (hudforandringar)** har eget register: konkreta exempel, orientera, lättare mekanism, **länka ut** till barnsidorna; håll kosmetiskt.

**M. Tunna bonussidor:** täthet från djupare mekanism på sidans egen long-tail — aldrig padding eller huvudterm. Går det inte: acceptera SLIGHT och logga det.

**N. Täthet = SUBSTANS — och skilj INFO från LÄNGD.** De-fluff (bort med fyllnad + dubbletter) kortar texten utan att tappa information; det är rätt. **Bonus-/sökordssidor (acne-ansikte m.fl.) får vara kortare** än primärsidorna. På **primärsidor (acne.php)** håller vi full längd, men via **mer substans** (mekanism, gloss, exempel, Evidence), aldrig via bibehållen filler. **Tappa aldrig en unik poäng eller målfras (§6) — bara dubbletter och fyllnad får gå** (§13.D: räkna punkterna). Undvik CTA-konstruktionen "Boka konsultation, så går vi igenom…" (läses som AI) — skriv CTA:n rakt.

**O. Minimal diff = steg för steg, ta INTE bort substans (default-läge för all omskrivning).** "Minimal" är hur §1.1/§1.2-modellen säger att vi ändrar i det HÄR skedet: en liten, försiktig första åtgärd, inte en genomskrivning. (Det här är en princip, inte en mikroregel — vi rutar inte in oss, §0/§5.)

**Det enkla rättesnöret:** längden spelar ingen roll — texten får bli kortare *eller* längre. Det som gör skada är att **ta bort för mycket på en gång**: hela stycken, listor eller sakpoänger. Behåll varje block, varje list-punkt och varje poäng. En ren summering/dubblett får trimmas, men då som ETT medvetet litet steg ägaren ser — aldrig som del av ett svep där flera stycken försvinner samtidigt.

**Jobba steg för steg, inte i ett svep.** Några få små ändringar → visa för ägaren → iterera. Ägaren ska kunna följa varje steg; ett helt omskrivet sidsvep går varken att granska eller attribuera. Så tappade både acne-ansikte-listan (igår, fångad före commit) och ytliga-blodkarl (idag, rullad tillbaka som "för stora förändringar") substans.

**Största spaken med minst risk (§1.1):** led öppningen — och varje list-punkt — med den konkreta mekanismen i stället för en generisk uppvärmning ("X kan spela en stor roll vid…"). Oftast är det den enda ändring ett block behöver i första passet.

Gör minsta möjliga ändring som plockar bort de *tydligaste* AI-tells och fyllnaden (marknadssuperlativ, ren boilerplate, värsta komma-splitsarna). **Behåll struktur, listor, summerande/avslutande stycken, alla poänger och det mesta av ordalydelsen — skriv inte om hela block.** Säkrare att ta bort för lite än för mycket: vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren ton/poäng är svår att få tillbaka. Stora omskrivningar läses som "för stor skillnad" och går inte att attribuera. Rätt info på rätt ställe — utgå från helheten (§13.D). Justeringar kan lika gärna **lägga till saknad info eller rätta fel** som ta bort — poängen är *små, mätbara steg* mot mindre AI, inte att bara kapa. **Inom minimal: prioritera öppningarna.** Den enda spak värd att gå utöver ren ordtrimning är att **led varje block och varje list-punkt med den konkreta mekanismen**, inte en generisk uppvärmning ("X kan spela en stor roll vid…"). §1.1: öppningen avgör mest → högsta ROI per ändrat ord, lägst risk. Listformat/punkter/summeringar behålls (mäts separat).
