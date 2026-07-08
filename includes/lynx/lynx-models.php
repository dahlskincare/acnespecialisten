<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX MODELS — modeller, mätning & tolkning (läs DENNA vid mät-analys/modellförfining)

```
▣ MANIFEST
KIND          REGEL: §1.2 · §1.5 · §10 · §10.0        AKTIV: §11.1 (bevakningslistan — ändras vid varje refresh)
LADDA-NÄR     mät-analys · modellförfining · SCORE-/AIQ-fråga · prediktion före rewrite
KANONISK-FÖR  SCORE-modellens OPERATIVA slutsats (§1.2) · AI QUESTIONS-modellen (§1.5) · mät-loopen (§10) · SEO-vakten (§10.0) · bevakningslistan (§11.1)
PEKAR-PÅ      lynx-score = SCORE-härledning + rådata + superseded modell-lager · lynx-rewrite = §1.1/§1.3/§1.4 bedömning · lynx-data = Pages/AKTUELLT LÄGE · lynx-logg = §11
```

> Tolkningen av rådatan: SCORE-modellen (§1.2), AI QUESTIONS-modellen (§1.5), mät-loopen (§10) + SEO-vakten (§10.0), bevakningslistan (§11.1). Bedömningsmodellen (§1.1/1.3/1.4) som används VID omskrivning bor i `lynx-rewrite.php`. Rådata: `lynx-score.php` (SCORE-nedbrytningar), `lynx-examples.php` (facit), `lynx-questions.php` (AIQ). **Härledningen, 6 juli-slutsatserna, online-verifieringen och de superseded modell-lagren bor i `lynx-score.php` — ett fakta, en cell. §1.2 här = den operativa sammanfattningen.**

## 1.2 SCORE-modellen — OPERATIV SAMMANFATTNING (härledning + historik: `lynx-score.php`)
**✅ LÖST 2026-07-06** (9 färska nedbrytningar; prediktor-formeln 15/15 efter splendor-x — full härledning + rådata i `lynx-score.php`):
- **Overall = medel(CQ-badge, EEAT-badge)** på färska analyser; AI STYLE ingår EJ. Det är en **prediktor, inte en styrbar mekanism** (online-verifierat 6 juli).
- **EEAT-badge = 60 på i stort sett hela sajten**; bara /varumarken/-sidor når 78–88. ⚠️ **Den gamla förklaringen ("klampas på HÄLSOSIDOR — vi är hudterapeuter, ej läkare på YMYL") är FALSIFIERAD** — `lynx-score` slutsats B + online-verifieringen visar att 60 gäller ÄVEN /kontakt.php, /hudproblem/, hydrafacial och portomning; mönstret följer **/varumarken/-URL-strukturen**, inte ämnet. Oavsett orsak står den operativa slutsatsen: **på våra sidor är EEAT LÅST 60, ej copy-flyttbar.**
- **CQ-badge ≈ CQ-subs-medel i normalfallet** (7/9; ipl/micro var "ej fullt satt"-anomalier) → **Evidence** (CQ:s lägsta sub, 70–82) är en ÄKTA men liten spak; Language/Readability/Depth ligger nära tak.
- **SCORE-Overall-TAK ≈ 75–77** för våra sidtyper (medel(~90 CQ, 60 EEAT)); våra bästa omskrivna (74–78) ligger REDAN vid taket. *(splendor-x 79 = /varumarken/ — bekräftar att taket är EEAT-drivet.)*
- **⇒ Operativ slutsats: JAGA INTE SCORE med copy.** Den bevisade vinsten är AI COPY-flaggan (§1.1, kausalt belagd) + AIQ (§1.5). Rör aldrig copy för att flytta EEAT- eller CQ-badge — antingen låsta, eller så rör de sig av sig själva när LYNX uppdaterar.

**Två skalor — jämför ALDRIG kors:** GAMLA analyser ("Analyzed >30 days ago") passar den multiplikativa 30 juni-modellen (Overall ≈ CQ×EEAT×AI STYLE / 3640, 7/7); FÄRSKA passar medel(CQ,EEAT). Mät **färsk-mot-färsk** (§11.1 mätregel 1). *(Den multiplikativa modellen, dess härledning, marginalkalkylerna och 2 juli:s OMPRÖVAS-lager + det numera besvarade testprotokollet är SUPERSEDED och ligger som HISTORIK i `lynx-score.php`. De ska inte styra beslut.)*

**Öppet A/B-test (dömer om AI STYLE-hävstången är verklig eller ren extrapolation):** `acne.php` fick 10 🔴-block omskrivna 1 juli. FÖRE (68 dgr, gamla skalan): **Overall 39 · Depth 77 · E-E-A-T 84 · Evidence 11 · AI STYLE 30**. Mät AI STYLE + Overall vid nästa refresh. **NO-REGRESSION: rör inte Depth 77 eller E-E-A-T 84.** *(AI STYLE varierade bara 20↔30 i gamla datan — uppsidan är modell-extrapolation, ej empiriskt bevisad. På färska skalan ligger AI STYLE 50–75.)*

**Öppen beställning (§9):** 2–3 färska breakdowns från ägaren, varav minst en där AI STYLE hunnit beräknas.

SCORE (0–100) ≠ AI COPY-flaggan men lyfts av samma jobb. Komponenter: **CONTENT QUALITY** (Base, Depth, Evidence, Language, Readability) + **E-E-A-T** (Experience, Expertise, Authority, Trust) + **AI STYLE** (Human-like). Alla nedbrytningar (rådata, färska + gamla skalan) i **`lynx-score.php`**.

**⚠️ Evidence-höjning MÅSTE filtreras genom §5:** OK = verifierbara siffror/tidsramar/priser ("Från X kr", "30 år", antal behandlingar, namngivna maskiner/brands, "12–22% kvinnor/3% män"), "senast uppdaterad"-datum, namngivna specialister (widget) + SHR-cert. INTE OK = medicinska studie-citat/rådgivning, uppfunna siffror, "granskad av hudläkare" (vi är hudterapeuter), garanterade resultat (YMYL). → höj Evidence med KLINIK-fakta, inte medicinska påståenden.

**Prediktiv spak-karta (copy-drag → komponent den flyttar).** Använd för att förutse score-effekt FÖRE refresh (analogt med §1.1 för AI COPY):
| Komponent (baseline→topp) | ↑ av (skriv så här) | ↓ av (undvik) |
|---|---|---|
| **AI STYLE** *(gamla skalan 20→30; färska 50–75)* | §2-formel, §4-husröst, §1.1-täthet; konkret öppning, varierad puls, inline-gloss | AI-vokab/em-streck (§5), filler-öppning, staplade hedges, marknads-superlativ |
| **Evidence** 11–46 | siffror, tidsram, namngiven mekanism/organism (factual §5), "Från X kr", 30 år, namngivna maskiner | vaga kvantifierare, superlativ utan tal |
| **Depth** 67–81 | full kausal mekanism-vandring, flera delaspekter, bunden prosa | korta ner, fet-etikett-listor (§13.D/N) |
| **Readability** 40–65 | puls (kort+lång), gloss av fackord, tydlig struktur | enbart långa meningar, staccato |
| **E-E-A-T** ⛔ **EJ COPY-SPAK** | badge LÅST 60 på våra sidor (§1.2) — subsen rör sig men badgen följer inte. Strukturellt/off-page. | **rör inte widgets** (specialister/resultat/recensioner bär detta); skriv aldrig copy för att flytta EEAT |
| **Language** 52→80 | idiomatisk svenska, rätt register | translationese, AI-vokab |

**No-regression (KRITISKT — "utan negativa konsekvenser på annat"):** spakarna är JOINT, inte fristående. Lyft AI STYLE + Evidence **utan att sänka** Depth, E-E-A-T eller sökord/ranking. Vanliga fällor: jaga Human-like genom att korta bort substans → sänker Depth (§13.N); stripa "fackord" → sänker Evidence; skriva om rubriker → tappar sökord (§6). **Regel: varje ändring ska vara ≥0 på alla komponenter och >0 på minst en.** Optimera aldrig en komponent på en annans bekostnad.

*(acne-ansikte + behandla-pigmentflackar har SCORE "–" → kör på AI COPY + formel. Modellen är en hypotes — mät, förfina och backporta enligt §10 när refreshen kommer.)*

---

## 1.5 AI QUESTIONS / AI Overview-modellen (NY 2026-07-02 — hypotes byggd på 5 sidors data; SERP-basen BEKRÄFTAD av officiell tooltip 2 jul 15:00)
**Officiell definition (tooltip):** *"How well this page answers common user questions for the topic based on Google SERP. Levels: Very Poor, Poor, OK, Good, Very Good."* — frågorna kommer alltså från Google SERP (bekräftar modellen nedan); full skala har även Very Poor/Very Good (aldrig sedda hos oss; homepage POOR = näst sämst). LYNX-vyn **"AI Overview Ranking"** per sida listar frågorna sidan borde äga i AI-overviews: **SCORE** = frågans vikt (högst först), **OPTIMIZED** = hur väl sidan besvarar frågan idag (**GOOD** > OK > **POOR**; "–" = ingen status). Sidnivå-kolumnen AIQ aggregerar troligen denna vy. Rådata per sida i **`lynx-questions.php`** (2 jul: micro/porto/acne-rygg/sebo/mogen-hy/homepage/acne-ansikte).

**Hypoteser (H1–H5 — validera mot fler sidor + refresh, §10):**
- **H1 — FAQ-titel räcker inte för GOOD:** micro har frågan "Vad är microneedling bra för?" som egen FAQ-titel (score 25) men får bara OK → GOOD kräver ett RAKT konkret svar, inte att frågan finns som rubrik.
- **H2 — svaret måste matcha frågans FORM:** acne-ryggs alla "hur får man bort"-varianter = GOOD (sidan är en hur-guide med konkreta steg) medan orsaksfrågorna = OK trots orsakssektioner. Hur→steg, varför→mekanism/orsak, kostar→pris med siffra.
- **H3 — grannfrågor besvaras på ÄGARSIDAN:** frågor som "Vilken behandling är bäst mot pigmentfläckar?" (dyker upp på micro) och "Vad är MicroDermabrasion?" tillhör andra sidors silo → kort svar + intern länk, aldrig duplicering (§5).
- **H4 — hemma-frågorna är återkommande topp** (porto "hemma" 13+5, sebo "själv/hemma" 18+4, micro "hemma") → ärligt "ingen hemmakur"-svar + klinikpivot = ytliga-blodkarl-principen (§8.1) som standard-FAQ-vinkel.
- **H5 — YMYL-angränsande frågor kan nå GOOD inom kosmetisk ram:** sebo "Kan seborroisk keratos bli cancer?" = GOOD utan medicinsk rådgivning (godartade-ramen + hänvisning) → §5-ramen hindrar inte GOOD.
- **H7 — frågelistan följer sidans LANDING-KEYWORDS, inte sidans innehåll (NY 2 jul 15:05, homepage = första beviset):** homepage (KW 298, landar brett) får hela sajtens ämnesuniversum i sin lista — portömning, milier-pris, HydraFacial, laser-acneärr osv. — trots att inget av det är startsidans innehåll. Följd: **en bred landningssida ska INTE besvara alla sina listfrågor själv** (ägarens instinkt 2 jul, korrekt per H3/silo §5); frågan ägs av silosidan, startsidan äger bara varumärkes-/förtroendefrågorna ("Är Acnespecialisten bra?" = GOOD ✓) + ev. remiss-familjen (om-oss-gapen). Startsidans POOR-badge är därmed delvis STRUKTURELL. **VERY POOR-data (första någonsin):** alla 5 = pris-/hållbarhetsfrågor ("Vad kostar portömning/milier/hydrafacial?", "Hur länge håller portömning/HydraFacial/infuzion?") → förstärker H2: kostar→siffra-svar saknas; billigaste vinsterna ligger på SILOSIDORNA (FAQ-svar med "Från X kr"), inte på startsidan.
- **H6 — POOR = fråga utan innehåll på sidan, inte dåligt svar (NY 2 jul em, mogen-hy = första POOR-datan):** mogen-hys 3 POOR är alla off-topic för sidans innehåll (magnesium→finnar, koreansk hudvård, förkortningen "HI") → POOR verkar betyda "AI Overview kopplar frågan till sidan men sidan saknar svar helt". Sid-badgen tål enstaka POOR: mogen-hy = OK trots 3 POOR + 0 GOOD (även första sidan utan någon GOOD); homepage är enda sidan med badge POOR. **Åtgärda INTE off-topic-POOR med innehåll som bryter silon (§5/H3)** — magnesium/koreaner hör inte hemma på mogen-hy; däremot är topp-frågan "Vad betyder hy?" (score 24, bara OK) ett äkta svars-gap i frågans form (H2).

**⚠️ SERP-DRIFT — attribuera aldrig AIQ-förändringar till oss utan diff (belagt microneedling 2 juli):** frågelistan och dess scores drev (topp-frågan 25→24, frågor byttes in/ut) på en sida vi **inte rört**. Eftersom AIQ är SERP-baserad kan listan ändras för att Google ändrats, inte för att vår text ändrats. **Samma disciplin som för GAPS (konkurrent-relativa): läs frågelistans diff innan någon slutsats — annars är förändringen inte vår.** Rådata + diffar i `lynx-questions.php`.

**Operativt (koppla in i §7 + Fas 2):** vid rewrite/FAQ-arbete: (1) hämta sidans AI Overview Ranking; (2) topp-SCORE-frågor utan GOOD → ge ett rakt svar i frågans form (FAQ-svar i husröst — kan nå 🟢 per §1.1 nyckel 5 → **trippelvinst: AI QUESTIONS + medel §1.4 + AI STYLE**); (3) grannfrågor → länk till ägarsidan; (4) logga FÖRE-status (GOOD/OK/–) per fråga för mätloopen.

## 10. Justeringsloop & prediktiv mät-loop (efter LYNX-refresh)

### 10.0 ⛔ SEO-VAKT — LYNX-fix får ALDRIG köpas med ranking-/trafiktapp (ägarbeslut 2026-07-06)
Målet (§0) är LYNX grönt **utan skada på övriga signaler**. LYNX KW-kolumn är bara en skugga — **Google Search Console är facit.** Bakgrund: 6 jul-datan visade att omskrivna sidor tappat KW mer än orörda (behandla-pigment −19 %, acne-ansikte −9 %, ytliga −8 % vs orörda ±0–4 %) — inte konklusivt (litet urval, KW-brus, säsong) men tillräckligt för hård vakt:
1. **GSC-GATE före main-push:** inga nya rewrites promotas till main förrän ägaren dragit GSC-data för FÖRRA vågens sidor (klick/visningar/snittposition per sida, ~4 veckor före vs efter deploy) och den visar ingen skada. **Första kollen: de 8 sidorna från PR #236 (live 30 jun–1 jul) — gaten håller mogen-hy/oonskat-har/microdermabrasion på staging tills den är grön.** Ingen skada → pusha nästa våg, upprepa per våg. Skada → §13.F-rollback på drabbad sida + obduktion i §11 + pausa alla main-pushar tills orsaken är förstådd.
2. **KW-vakt per scan:** logga KW per omskriven sida vid varje Pages-dump (lynx-data). **Tröskel: sidan tappar >10–15 % medan sajtmedianen ligger stilla → flagga i §11 och utred VILKA fraser som föll** (grep §6-målfraserna mot sidan: finns frasen kvar i texten är tappet inte textens fel; saknas den = §6-miss → återinför omedelbart; be annars om sidans GSC-frågelista).
3. **CLICKS + WORDS i baseline:** §7 steg 1 loggar även CLICKS (GSC-klick via LYNX) och WORDS per sida — utan FÖRE-värden går trafikskada inte att bevisa eller frikänna.
4. **Attribution per sida i vågor (ersätter kohort-regeln, §13.G):** per-sida-commits + stabila block-betyg (§1.1) ger LYNX-attribution per sida; RANKING-attribution skyddas av att vi pushar i vågor och kör GSC-gaten mellan vågorna.
**Tumregel: ranking-tapp är dyrare än en sen LYNX-fix — vid tvekan, vänta med main-push.**

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
- **SLIGHT + SCORE nära/över 39?** → vi bröt taket; dokumentera VAD som gjorde det och backporta (§10 steg 5). *(OBS: 39-taket avser GAMLA skalan — färska analyser ligger 50–76 utan våra ändringar, §1.2; jämför färsk-mot-färsk.)*
- Uppdatera §9 + denna fil + lynx-data.php när vi lär oss vad som flyttar nålen.

---

## 11.1 Bevakningslista — sidor som väntar på LYNX-refresh (mät-loopen, §10 steg 2)
LYNX skannar bara LIVE och refreshar med delay — **mätklockan startar när ägaren pushar `main`**, inte vid staging. Vi kan inte polla LYNX (ingen export/API); ägaren droppar ny skärmdump när LYNX uppdaterat, då mäter vi delta mot FÖRE-baseline + prediktion. Listan = vad vi väntar på, så inget glöms. **▶ Mätklockan går för alla rader nedan.** Wave 1 live 30 juni–1 juli, wave 2 live 6 juli — allt produktions-verifierat (logg #13), inklusive hudforandringar-warningen (d3ce9162).
**⚠️ MÄTREGLERNA (fem lager, konsoliderade 8 juli — alla fem gäller samtidigt):**
1. **Färsk-mot-färsk.** LYNX bytte version/skala kring 2 juli (39-taket brutet utan våra ändringar). Jämför ALDRIG en färsk analys mot en 30 juni-baseline — läs FÖRE-värdet som osäkert, väg per-block-AI COPY (stabil vy) tyngre än SCORE-deltan, be om färsk FÖRE där det går.
2. **Datera varje cell.** Vyerna refreshar OBEROENDE: om-oss hade färsk AI Copy (5 juli) men april-gammal SCORE; ytliga-blodkärl omvänt (färsk SCORE 74, stale badge). Läs "Last update" (AI Copy-vyn) och "Analyzed X ago" (SCORE-popupen) **per vy** innan någon FÖRE→EFTER-slutsats.
3. **UPPDATERINGSENHETEN ÄR (SIDA × VY), inte sajten** (ägarbesked 7 juli; matris-belagt samma dag: fem sidor, fem olika kombinationer). En färsk vy på en sida säger INGET om andra vyer eller andra sidor. EFTER-data droppar in löpande, sida för sida → bevaka kontinuerligt i stället för att vänta på "en stor refresh".
4. **Attribuera FÖRE→EFTER ENDAST när vi faktiskt SER två analyser med OLIKA värden** (en gammal + en ny som skiljer sig). En "Analyzed just now" bevisar varken före eller efter vår ändring — den kan lika gärna vara gammal text omanalyserad. Anta ALDRIG att "nästa analys efter min main-push = EFTER min ändring".
5. **Blank/0 = cellen är mitt i sin uppdatering** (ägarbesked 7 juli), inte trasig. Den sätter sig själv (acne-rygg 0→69, sebo 0→74, acnearr 0→74 — alla utan omkörning). Logga aldrig 0 som baseline; be aldrig om omkörning; läs av nästa dump.

**Positiv följd (belagt på 2 sidor):** orörda block behåller exakt tier över en refresh → per-block-jämförelser är brusfria även över LYNX-versionsbytet (§1.1). Därför är per-block-facit vår pålitligaste mätsignal, och gamla facit gäller för orörda block.

| Sida | Staging-push | Main-push (mätstart) | FÖRE-baseline | Prediktion (§10 steg 1) | Senaste LYNX-analys | Status |
|---|---|---|---|---|---|---|
| acne-ansikte.php | 2026-06-30 | **2026-06-30 (LIVE)** | SCORE "–", AI COPY SIGNIFICANT, KW57; block 6🔴/1🟠/2🔵/1🟢 (22 apr) | AI STYLE ↑, Depth/Evidence/sökord = | **05 jul 2026** | ✅ **MÄTT 6 juli: 🔴→🔵 SLIGHT** (block EFTER 0🔴/1🟠/6🔵/2🟢; logg #1). **Kvar innan raden stängs:** FAQ-facitresten + intro-blockets 🟠 (micro-fix-kandidat) |
| ytliga-blodkarl.php | 2026-07-01 | **2026-07-01 (LIVE)** | SCORE 22, AI COPY SIGNIFICANT, KW172 | AI STYLE ↑ (öppningar+summeringar bort), Evidence ↑ (namngivna maskiner), Depth/E-E-A-T/sökord = | SCORE färsk (6 jul-dump); AI Copy-vyn ? | live på main (PR #236); **6 jul: SCORE 22→74 FÄRSK men badge kvar 🔴 — AI Copy-datum beställt; väntar badge-refresh** |
| behandla-pigmentflackar.php | 2026-07-01 | **2026-07-01 (LIVE)** | AI COPY SIGNIFICANT, SCORE –, AIQ GOOD, KW16; block 25 apr: 8🔴/1🟥/3🔵/1🟢 (medel 2,38) | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑ (metoder), sökord = | **AI Copy-vyn "Last update: 07 Jul"** (färsk crawl av vår text) | ✅ **MÄTT 7 juli: 🔴→🔵 SLIGHT, tvåstegs-hopp** (per-block medel 2,38→1,38; §1.4-pred ✓; logg #14). Backport-lärdomar i lynx-examples EFTER-sektionen. **Kvar innan raden stängs:** micro-fix-kandidat 4 block (kemisk-kortet 🔴, micro-kortet 🔴, $about-2 + IPL-kortet 🟠 — frysningen hävd) + färsk SCORE |
| hudforandringar/index.php | 2026-07-01 | **2026-07-01 (LIVE)** | AI COPY SIGNIFICANT, SCORE 17, GAPS 3/2, KW8 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑, sökord = | – | de-AI:ad + H1-sökord (sep. commit) → staging; live på main (PR #236), debug-rad-fixen d3ce9162 LIVE på produktion (logg #13); **väntar LYNX-refresh** |
| hudbehandlingar/ipl/ | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, SCORE –, P.PRICE HIGH, KW19; per-block-facit 22 apr | 13× 🔴/🟠→SLIGHT/MOD; 3× 🔵/🟢 orörda | – | facit-guidad de-AI (Fas 3) → staging; live på main (PR #236); **väntar LYNX-refresh** |
| om-oss.php | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, VAL 8, SCORE 17, KW3; block 22 apr: 3🔴/2🟠/6🔵/1🟢 | O01/O04 🟠 + O06/O07/O08 🔴 → SLIGHT/MOD; 🔵/🟢 orörda | **05 jul 2026 (AI Copy); SCORE-analys apr (79 dgr)** | ✅ **MÄTT 6 juli: 0 flaggade block** (EFTER 0🔴/0🟠/10🔵/1🟢 — alla 🔴→🔵; logg #2). Badge ej synlig i dumpen, SLIGHT implicerat. **Kvar innan raden stängs:** badge-bekräftelse + O01-bannern + FAQ-betygen |
| acne.php | 2026-07-01 | **2026-07-01 (LIVE)** | 🔵 SLIGHT sidnivå, SCORE 39 (Depth77/Ev11/**AISTYLE30**), KW116; block-facit 22 apr | AI STYLE ↑ + Evidence ↑ (sidnivå kvar SLIGHT §1.4); Depth/E-E-A-T = | – | 10 🔴-block omskrivna (husröst-ref lämnad) → staging; live på main (PR #236); **väntar LYNX-refresh** |
| ipl-rosacea.php | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, SCORE 39 (CQ68/Ev46/EEAT85/**AISTYLE25**), P.PRICE HIGHEST, KW20; per-block-facit 29 apr | 7× 🔴/🟠→SLIGHT (median→SLIGHT §1.4); AI STYLE ↑↑, Depth/Evidence/E-E-A-T/sökord = | SCORE färsk (6 jul-dump); AI Copy-vyn ? | live på main (PR #236); **6 jul: SCORE 39→60 FÄRSK men badge kvar 🟠 — väntar badge-refresh** (kosmetisk title-attr-typo rad 64 `rosaceabehandlingr`→`rosaceabehandling` fixad) |
| mogen-hy.php | 2026-07-02 | **2026-07-06 (LIVE, logg #13)** | 🟠 MODERATE, SCORE – (gammal 12?), KW9; per-block-facit 22 apr KOMPLETT (5🔴/1🟠/5🔵/3🟢, medel 1,57); AIQ OK (27-frågelista i lynx-questions) | 6 omskrivna block → 🔵-band (bedömar-predikt 3×SLIGHT+3×MODERATE); block-medel →~1,0 → **sidnivå 🟠→🔵**; AI STYLE ↑, Language ↑ (5 språkfixar), Depth/sökord = | – | omskriven + §7.4b-verifierad (5 fynd åtgärdade) → staging 2 jul em; **LIVE på main 6 juli — väntar LYNX-refresh** |
| hudproblem/oonskat-har/ | 2026-07-03 | **2026-07-06 (LIVE, logg #13)** | 🟠 MODERATE; per-block-facit 29 apr (5🔴/2🟠/4🔵/2🟢, medel 1,77); AIQ-frågelista SAKNAS (be ägaren) | 7 omskrivna block → 🔵-band; block-medel →~1,0 → **sidnivå 🟠→🔵**; AI STYLE ↑, Language ↑ (typo/grammatik/alt-titles), Evidence ↑ (Splendor X + Soprano Ice namngivna), Depth/sökord = | – | omskriven + §7.4b-verifierad (3 agenter) → staging 3 jul (verifierad 200 + ny fras); **LIVE på main 6 juli — väntar LYNX-refresh** |
| microdermabrasion.php | 2026-07-03 | **2026-07-06 (LIVE, logg #13)** | 🟠 MODERATE, SCORE 50 färsk, AIQ OK (GOOD→OK-tråden öppen, frågedetalj saknas); per-block-facit 25 jun (5🔴/1🟠/3🔵/2🟢, medel 1,82) | 6 omskrivna block → 🔵-band; block-medel →~1,0 → **sidnivå 🟠→🔵**; AI STYLE ↑, Language ↑ (kongruens/anglicismer), Evidence =, Depth/sökord = | – | omskriven + §7.4b-verifierad (3 agenter) → staging 3 jul (verifierad 200 + ny fras); kortpriser rättade 3 jul em; **LIVE på main 6 juli — väntar LYNX-refresh** |
| hudproblem/bristningar/ | 2026-07-06 | **2026-07-06 (LIVE — gaten passerad på ägarbeslut, logg #13)** | 🟠 MODERATE, SCORE 18 gammal/**63 FÄRSK 6 jul** (ny skala, ren FÖRE-baseline), KW67, CLICKS/WORDS ur nästa dump; block-facit 22 apr: 6🔴/1🟠/5🔵/1🟢 (medel 1,92) | 7 omskrivna block → 🔵-band (bedömare: 2🟢/3🔵/2 🟠-gräns); medel →~0,9 → **sidnivå 🟠→🔵**; AI STYLE ↑, Language ↑, Evidence ↑ (namngivna metoder), Depth/sökord = | – | omskriven + §7.4b-verifierad (3 agenter, 0 allvarliga) → staging 6 jul (verifierad 200 + ny fras); **LIVE på main 6 juli — väntar LYNX-refresh** (§11 6 jul #7) |
| acne-ansikte.php INTRO-EXPERIMENT | 2026-07-06 | **2026-07-06 (LIVE — gaten passerad på ägarbeslut, logg #13)** | intro-blocket 🟠 (EFTER-facit 5 jul); sidbadge 🔵 | intro 🟠→🔵 (importans-wrapper bort + Nedan-skylt) — **dömer §2-intro-hypotesen**; sidbadge kvar 🔵 | – | enblocks-fix → staging 6 jul (verifierad 200 + ny fras); renaste experimentet hittills — 1 block ändrat på mätt sida |

När en rad refreshats: mät (§10 steg 2–3), logga EFTER i §11 + lynx-data.php, förfina modellen (steg 4), backporta (steg 5), töm raden.

---

