<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX MODELS — modeller, mätning & tolkning (läs DENNA vid mät-analys/modellförfining)

```
▣ MANIFEST
KIND          REGEL — stabil. Ändras bara när data motsäger modellen. **Bär ingen status; §11.1 flyttade till `lynx-status` 8 juli.**
LADDA-NÄR     mät-analys · modellförfining · SCORE-/AIQ-fråga · prediktion före rewrite
KANONISK-FÖR  SCORE-modellens OPERATIVA slutsats (§1.2) · AI QUESTIONS-modellen (§1.5) · mät-loopen (§10) · SEO-vakten (§10.0)
PEKAR-PÅ      lynx-status = §11.1 bevakningslistan (status) · lynx-score = SCORE-härledning + rådata + superseded modell-lager · lynx-rewrite = §1.1/§1.3/§1.4 bedömning · lynx-data = Pages/AKTUELLT LÄGE · lynx-log = §11
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
1. **GSC-GATE före main-push:** ingen ny våg promotas till main förrän ägaren dragit GSC-data för FÖRRA vågens sidor (klick/visningar/snittposition per sida, ~4 veckor före vs efter deploy) och den visar ingen skada. Ingen skada → pusha nästa våg, upprepa per våg. Skada → §13.F-rollback på drabbad sida + obduktion i §11 + pausa alla main-pushar tills orsaken är förstådd.
   *(⚠️ **Gaten blockerar inte just nu** — ägarbeslut 6 juli: hela wave 2 pushades till main, och GSC/Ahrefs görs som ett eget senare pass. Regeln står kvar för NÄSTA våg. Sidstatus: `lynx-models` §11.1 — återge den aldrig här.)*
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
