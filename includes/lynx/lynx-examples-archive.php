<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX EXAMPLES — ARKIV (superseded modellarbete + FÖRE-facit för MÄTTA sidor)

```
▣ MANIFEST
KIND          HISTORIK — append-only, uppdateras aldrig retroaktivt.
LADDA-NÄR     nästan aldrig. Endast vid forensik: "hur kom vi fram till §1.4?", "vad sa blindtest 3?", "vad var FÖRE-tiern?"
KANONISK-FÖR  ingenting. Gällande modeller: lynx-rewrite §1.1/§1.3/§1.4 · lynx-score SLUTLÄGE · lynx-models §1.5
PEKAR-PÅ      lynx-examples = aktiva facit (omätta + kösidor) · lynx-rewrite = bedömningsmodellen · lynx-score = SCORE
```

> **⚠️ Inget här nere får styra beslut.** Utflyttat ur `lynx-examples.php` 8 juli (§9.0 steg 9) så den aktiva facit-filen bara bär det en rewrite-session behöver. **Superseded sedan dess:** MEDIAN-hypotesen (sidnivå = MEDEL, inte median — `lynx-rewrite` §1.4) · SCORE-reverse-engineeringen från 1 juli (ersatt av 15 färska nedbrytningar, `lynx-score` SLUTLÄGE) · blindtest 1 och 3 (v2/v4-rubriker, ersatta av v5).
> **Men här bor också FÖRE-facit för de tre MÄTTA sidorna** (acne-ansikte, behandla-pigmentflackar, om-oss). De är LYNX-rådata och bevaras för omtolkning — deras FÖRE-tier står också i respektive EFTER-tabell i den aktiva filen.
> **§-referenser här avser filstrukturen vid postens datum.** Sedan 8 juli bor §8/§9/§12 i `lynx-backlog.php`; §-KARTAN i `lynx-START.php` är resolvern.

---

## /acne-ansikte.php — 22 Apr 2026 (SIGNIFICANT — sidan vi skriver om)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| Banner "Att ha akne i ansiktet kan vara både påfrestande… Men du är inte ensam… På denna sida kommer vi utforska" | 🔴 | empati + meta |
| "Akne i ansiktet är en vanlig hudåkomma som påverkar miljontals…" | 🔴 | skal-öppning |
| "Akne i ansiktet orsakas av flera faktorer som samverkar…" | 🔴 | fyllnadsöppning |
| "Plötslig akne i ansiktet kan vara både frustrerande… Det finns flera faktorer…" | 🔴 | empati + fyllnad |
| "Att leva med svår akne kan vara extremt påfrestande både fysiskt och känslomässigt…" | 🔴 | empati-utfyllnad |
| "Akne i ansiktet kan uppträda på flera olika sätt, beroende på typ…" | 🔴 | cirkulär |
| "När det kommer till att behandla akne i ansiktet… ingen universallösning" | 🟠 | fyllnad + en nugget |
| "Daglig behandling med rätt produkter är avgörande…" | 🔵 | kort produktblock |
| Omdöme "Hade testat allt innan…" | 🔵 | omdöme |
| Omdöme "Super fin personal…" | 🟢 | omdöme + detalj |



---

### /behandla-pigmentflackar.php — 25 Apr 2026 (SIGNIFICANT/EXTREME-tung)
| Block (utdrag) | LYNX (rå) | Min gissning | Träff |
|---|---|---|---|
| Banner "Vi erbjuder **de mest effektiva metoderna** … boka en kostnadsfri hudkonsultation" | 🔵 SLIGHT | 🔴 ~80 | ❌ övergissning |
| $about-1 "Att behandla … **kräver noggrannhet och expertis**. Vi använder **de mest effektiva och moderna** metoderna …" | 🔵 SLIGHT | 🔴 ~75 | ❌ övergissning |
| $about-2 "Under konsultationen … bestämmer **den bästa åtgärden** …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| $about-3 "Genom hela behandlingsprocessen … **dedikerade team** … **bästa möjliga vården** …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| $define "För att kunna hjälpa dig … **är det viktigt att** vi förstår …" | 🔴 SIGNIFICANT | 🟠 ~60 | ~ undergissning |
| $treat "… **en rad olika metoder som är skräddarsydda** … **Dessa effektiva metoder** …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| IPL-kort "… **för att effektivt reducera** … **Vår noggranna behandling säkerställer** …" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Kemisk peeling-kort "Kemisk peeling **behandlar effektivt** …" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Laser-kort "Laserbehandling **är en mycket effektiv metod** … **avancerad laserteknologi** … **maximera resultatet** … **snabb och precis lösning**" | 🔴 SIGNIFICANT | 🔴 ~75 | ✓ |
| **Microneedling-kort** "… effektiv metod … **vilket** … **vilket** … Dessutom … **djupare penetration av aktiva ingredienser, vilket ytterligare** … (pigmentfläckar ×4)" | 🟥 **EXTREME** | 🟠 ~55 | ❌❌ stor miss |
| CryoPen-kort "… extrem kyla … **både effektiv och minimalt invasiv** … **snabb och precis lösning**" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Omdöme "Hade testat allt innan…" | 🔵 SLIGHT | — | ✓ |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 HUMAN | — | ✓ |



---

## /om-oss.php — 22 Apr 2026 (MODERATE-sida) — RÅDATA + v3-blindtestets facit
> "Om oss"-marknadsprosa. Betyg = LYNX-fakta. Denna sidas block var v3-blindtestets FÄRSKA testset (aldrig kört genom modellen före testet).

| Block (utdrag) | LYNX (rå) |
|---|---|
| "…under 30 år utvecklat en **unik och effektiv** fyrstegsmetod… **skräddarsydda** hudvårdsrutiner… ditt alternativ till hudläkare utan remiss" (5 mening) | 🟠 MODERATE |
| "AcneSpecialisten använder en fyrstegsmetod… gratis konsultation… reparera skadad hud… komplett lösning från diagnos till reparation" (3 mening, process) | 🔵 SLIGHT |
| "…omfattande lösning… personlig hudterapeut (PT)… **fotograferar vi din hud** för att jämföra framstegen" (×2 nära-dubbletter) | 🔵 SLIGHT |
| "…dedikerade till att ge dig en helhetslösning… beprövade metod… **inte bara** identifierar… **utan även**… skräddarsydd behandlingsplan" | 🟠 MODERATE |
| "**Sedan vår start 1994** har vi stolt hjälpt **flera hundra tusen** personer…" (siffra/historik) | 🔵 SLIGHT |
| "Varje specialist… certifierad hudterapeut med **SHR-godkänd** utbildning… **garanterar högsta möjliga kvalitet**… **mest effektiva och säkra**" | 🔴 SIGNIFICANT |
| "…förenar vi **årtiondens erfarenhet**… **de senaste innovationerna**… **inte bara**… **utan också**… **optimala resultat**" (4 mening, tung marknad) | 🔴 SIGNIFICANT |
| "…förstår vi vikten av tillgänglighet… tre kliniker: **Strandvägen, Södermalm, Sundbyberg**… **bästa möjliga vård**… skräddarsydd" (6 mening) | 🔴 SIGNIFICANT |
| "Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter." (1 mening, CTA) | 🔵 SLIGHT |
| Omdöme "Hade testat allt innan…" | 🔵 SLIGHT |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 HUMAN |

**Facit-signaler (tolkning):** (a) **siffra/historik** ("Sedan 1994… hundra tusen") håller ett annars marknads-block på 🔵. (b) **Konkret credential rescuear INTE** ("SHR-godkänd" → ändå 🔴 pga "garanterar högsta möjliga/mest effektiva"-svans). (c) **Namnger 3 kliniker men LÅNG + marknad → 🔴** (längd dominerar över namn-konkretionen — bekräftar v3). (d) process-block utan marknads-svans = 🔵.
**AI QUESTIONS (FAQ, för Fas 2):** Hur länge har AcneSpecialisten funnits? · Vad erbjuder AcneSpecialisten? · Kan alla besöka AcneSpecialisten? · Är ni hudläkare? · Vad gör AcneSpecialisten unikt?
**v3-BLINDTEST-RESULTAT (om-oss, 3 agenter, ofuskat): 4/11 exakt, 11/11 inom ±1.** v3 ÖVERkorrigerade: O01–O05 gissades ETT steg för hårt (SLIGHT→MODERATE, MODERATE→SIGNIFICANT); O09 (CTA "Boka…") + O10 (generiskt omdöme) gissades HUMAN men var SLIGHT. Rätt: O06/O07/O08 (SIGNIFICANT), O11 (HUMAN). **Lärdom: exakt tier = brus, ±1 = signalen (97% över båda testen); v3:s längd-push för aggressiv + "kort→HUMAN" för generös → v4 (playbook §1.3). Vi slutar mikro-tuna per sida (v2↔v3 pendlade = overfit).**



---

## SCORE-modellen — fakta + reverse-engineering (2026-07-01, workflow)
**LYNX = internt/bespoke verktyg** (finns ej publikt; buntar tre dokumenterade koncept). Googles E-E-A-T är ett rater-ramverk, INTE en publik metrik → LYNX-siffran är en proxy.

**Aggregering (validerat 5/5): Overall ≈ CONTENT QUALITY × E-E-A-T × AI STYLE / ~3640** (MULTIPLIKATIVT). Bevis: hudforandringar Overall 17 < lägsta block (25). CQ = medel av 5 subs, EEAT = medel av 4 subs. AI STYLE = multiplikativ faktor (0,25–0,30), ej cap (ipl-rosacea = 39 med AI 25). ⚠️ AI STYLE varierar bara 25↔30 → uppsidan otestad; acne.php = A/B-test.

**Komponentfakta (hur höja):**
- **Base Quality** — people-first, svara på sökintentionen tidigt, ingen dublett/thin.
- **Depth** (acne 77, skydda) — täck ämnet end-to-end, H2/H3, intern silo-länkning; djup = fokus, ej padding.
- **Evidence** (acne **11**, svagast) — evidens-densitet: siffror, tidsramar, namngivna källor/maskiner, datum, credentials. Störst headroom. **(Filtrera genom §5 — se playbook §1.2: klinik-fakta, ej medicinska citat.)**
- **Language** — grammatik/naturlig röst (komma-tell).
- **Readability** — Flesch 60+ (korta meningar, enkla ord). ⚠️ spänning mot AI STYLE: variera LÄNGD men håll ORDEN enkla.
- **Experience** — förstahands: äkta före/efter, hur en behandling känns, omdömen.
- **Expertise** — namngiven granskare/credentials (widget: specialister, SHR).
- **Authority** — mest off-page (backlänkar); on-page: cert/affiliationer + topical cluster.
- **Trust** (viktigast) — HTTPS, riktig företagsinfo, ärliga claims (ej garantera resultat = YMYL-flagga).
- **AI STYLE / Human-like** (acne **30**) — = AI-detektorernas invers: PERPLEXITY (ordval-oförutsägbarhet) + BURSTINESS (meningslängds-variation). Höj: variera meningslängd, döda filler, konkreta detaljer/anekdoter, mindre komma-täthet. = vår de-AI-omskrivning.

Evidence + AI STYLE förstärker varandra (cit. siffror + klinik-anekdoter lyfter båda + Experience/Trust). ~20 källor loggade i workflow-outputen. Full härledning + marginalmatte: `lynx-score.php`; operativ sammanfattning i lynx-models §1.2.

## Sidnivå ↔ block-nivå: MEDIAN-hypotesen (reverse-engineerat 2026-07-01)
LYNX sidnivå-AI COPY (Pages-listan) vs vår per-block-facit. **Hypotes: sidnivå = MEDIAN-tiern av alla renderade block** (sorterat 🟢→🟥; responsiva dubbletter räknas; gränsfall rundar uppåt). Validerat **6/6**:

| Sida | 🟥 | 🔴 | 🟠 | 🔵 | 🟢 | n≈ | median | LYNX sidnivå |
|---|---|---|---|---|---|---|---|---|
| acne.php | 0 | ~10 | 1 | ~11 | ~3 | 25 | 🔵 | SLIGHT ✓ |
| acnebehandling | 0 | 3 | 0 | 7 | 2 | 12 | 🔵 | SLIGHT ✓ |
| om-oss | 0 | 3 | 2 | 6 | 1 | 14* | 🟠 | MODERATE ✓ |
| hudbehandlingar/ipl | 0 | ~7 | ~5 | 2 | ~5 | 19 | 🟠 | MODERATE ✓ |
| behandla-pigment | 1 | 8 | 0 | 3 | 1 | 13 | 🔴 | SIGNIFICANT ✓ |
| hudforandringar | 0 | ~7 | 0 | ~4 | 1 | 12 | 🔴 | SIGNIFICANT ✓ |

*om-oss: responsiva dubbletter (O07/O08 ×2) räknas → median landar på 🟠-sidan av 🔵/🟠-gränsen.
**Slutsats:** sidnivån = MEDIANEN, inte max eller snitt (snitt föll fel: acne.php snitt ~1,7 → skulle bli MODERATE, men facit = SLIGHT; median 🔵 stämmer). Konsekvens: sänk sidnivån genom att flytta medianen (playbook §1.4). Validera vidare när fler sidor får facit.

## Blindtest av prediktionsrubriken — 2026-07-01 (ofuskat: 3 färska agenter, betyg dolda)
24 block (balanserat över 5 tiers, 5 sidor), agenterna fick BARA texten + rubriken (§1.3), scoring i script mot dold facit.
- **Resultat: 16/24 exakt (67%), 23/24 inom ±1 tier.** Agent 1/2/3 = 16/16/17 exakt — reproducerbart.
- **Konfidens kalibrerad:** träffar conf ~75–96, missar ~52–68 → lita ≥75, flagga <65.
- **Missar (mönster = längd underviktad):** B02 (lång IPL-gloss + "särskilt effektiv"-svans → agenter SLIGHT, facit SIGNIFICANT; enda 2-stegs-missen); B10/B15/B20 (eftervård underskattad); B19 (lång marknads-banner → SIGNIFICANT); B11 (kort direkt instruktion → HUMAN, ej SLIGHT); B06 EXTREME → SIGNIFICANT (granne).
- **Åtgärd:** rubriken skärpt till v3 (§1.3) — längd + ackumulering väger tyngre; validera på NÄSTA färska sida (ej re-run på samma 24 = overfit).



---

## §1.4-KONSOLIDERING efter 2 jul em-leveranserna (6 nya MODERATE-facit: 13:41- + 14:22-dumparna)
> ⚠️ **KORRIGERAD av modellanalysen samma dag (nästa sektion):** "medel 11/11" nedan gällde bara de NYA kompletta faciten — omräkningen av de 6 äldre sidorna fällde medel på 3 av dem. Läs nästa sektion för gällande läge (medel 14/17, median 14/17, disjunkta missar).

**MEDEL-modellen träffar 6/6 nya** (microderm 1,82→🟠 ✓ · bristningar 1,92→🟠 ✓ · rhinophyma 2,06→🟠 ✓ · solskadad 2,09→🟠 ✓ · pigmentflackar 2,06→🟠 ✓ · oonskat-har 1,77→🟠 ✓); **MEDIAN missar 2** (solskadad 🔴 ✗, rhinophyma gränsfall→🔴 ✗). **Avrundningsregeln preciserad av nya datan:** "avrunda mot värre" = STANDARDAVRUNDNING där exakt ,5 rundar uppåt — 2,06/2,09 rundar NED till 🟠 (tak-tolkning/ceiling hade gett 🔴 ✗✗). **Sekundärt mönster (nu ≥3 sidor):** korta behandlingskort avgörs av ÖPPNINGEN — mekanism-öppning 🔵 (pigment-laser, oonskat-laser) vs marknads-öppning 🔴 (pigment-kemisk/micro, acne-laser) — redan kodifierat i §1.3 regel 2; "konkreta vi-handlingar"-konsultblocket = 🔵 på 4 sidor (rhinophyma/bristningar/pigmentflackar/oonskat-har).

## MODELLANALYS 2026-07-02 (ägar-beställd, före sidarbetet) — §1.4-konflikten, §1.2-bekräftelse, blindtest 5
**Uppdrag:** "kör en analys av våra modeller och se om den nya informationen lärt oss något" — systematisk test av §1.1–§1.5 mot ALLT 2 jul-data, inkl. den öppna §9-TODO:n (medel-omräkning av de 6 äldre sidorna).

### A. §1.4 — medel-omräkningen av de 6 äldre sidorna FÄLLER "medel 11/11"
Omräknat med exakta tabell-counts ur denna fil (🟢0/🔵1/🟠2/🔴3/🟥4, standardavrundning):
| Sida | Counts (🔴/🟠/🔵/🟢) | n | Medel | Medel-pred | Badge (facit) | Medel | Median |
|---|---|---|---|---|---|---|---|
| acne.php (inkl. 2 jul-tillägg) | 10/1/10/3 | 24 | 1,75 | 🟠 | 🔵 SLIGHT | ✗ | ✓ |
| acnebehandling | 3/0/7/2 | 12 | 1,33 | 🔵 | 🔵 SLIGHT | ✓ | ✓ |
| om-oss (utan/med resp. dubbletter) | 3/2/5/1 | 11–13 | 1,64–1,85 | 🟠 | 🟠 MODERATE | ✓ | ✓ |
| hudbehandlingar/ipl | 7/6/2/4 | 19 | 1,84 | 🟠 | 🟠 MODERATE | ✓ | ✓ |
| behandla-pigment (1🟥+8🔴/0/3/1) | — | 13 | 2,31–2,38 | 🟠 | 🔴 SIGNIFICANT | ✗ | ✓ |
| hudforandringar | 7/0/4/1 | 12 | 2,08 | 🟠 | 🔴 SIGNIFICANT | ✗ | ✓ |

**Ställning: MEDEL 14/17 · MEDIAN 14/17 — på DISJUNKTA missmängder.** Medel missar där badgen är extrem (acne.php 🔵, behandla-pigment/hudforandringar 🔴); median missar där badgen är mittig (mogen-hy/solskadad/rhinophyma 🟠). 1 jul-analysen hade alltså RÄTT i att förkasta snittet för sin data ("acne.php snitt 1,7 → MODERATE, facit SLIGHT") — och 2 jul-uppgraderingen hade rätt för SIN data. Båda generaliserade för snabbt.
**Killer-observationen:** hudforandringar medel **2,08 → 🔴** men solskadad **2,09 → 🟠** / pigmentflackar **2,06 → 🟠** / rhinophyma **2,06 → 🟠**. Nästan identiska medel, olika badge ⇒ **sidnivå-badgen är INTE en ren funktion av de betygsatta blockens tier-mix.** Testade alternativ som också faller: typvärde (ipl ✗), andel-🔴-tröskel (acne.php 40 % 🔵 vs om-oss 25 % 🟠 ✗), exkludera omdömen (acne.php/hudforandringar kvarstår ✗), ordlängds-viktning (fel riktning för acne.php ✗), ceiling-avrundning (fäller 4 nya ✗).
**Kandidat-förklaringar (oavgjorda):** (a) orapporterade betygsatta block — sebo-facitet visade att FAQ-SVAR kan bäras betyg; acne.php:s stora FAQ syns inte i dess facit-dump och ~12 st 🔵/🟢-FAQ-svar skulle ge medel ~1,4 → 🔵 ✓ (men samma hypotes FÖRVÄRRAR hudforandringar); (b) äldre counts approximativa ("~"); (c) analysdatum/LYNX-version skiljer badge- och blockdata åt. **Avgörande test (beställning till ägaren, §9):** kör FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan.
**Operativ konsekvens:** medel = bästa arbetsmodell för FÖRVÄNTAN (perfekt på färska kompletta facit), men (1) **1,9–2,4 är GRÅZON** (🟠 eller 🔴 båda observerade), (2) block-fix-räkningarna ("1 fix → 🔵") är ESTIMAT, inte garantier, (3) arbetsmängden per sida styrs av §7 (fixa alla 🔴/🟠), inte av modellen — modellen styr bara förväntan/prio.

### B. §1.2 — bristningar-nedbrytningen BEKRÄFTAR multiplikativa formeln på gammal-skala-analyser (6/6)
bristningar (Analyzed **78 days ago** = gammal skala): CQ ~52 × E-E-A-T ~50 × AI STYLE 25 / 3640 = **17,9 ≈ Overall 18 ✓** (transkription ± några enheter, träffen robust). → Multiplikativa modellen nu **6/6 på gamla analyser**, samtidigt som färska analyser passar medel(CQ,EEAT) (micro 50 ✓, porto 60 ✓). Stärker hypotesen: **LYNX bytte version/aggregering** — gamla analyser multiplikativa, färska ≈ medel utan AI STYLE. §1.2-testprotokollet (registrerat 2 jul) står oförändrat och avgörs av nästa färska breakdowns.

### C. §1.3 — BLINDTEST 5 (första ÄKTA out-of-sample: 20 block ur de 6 nya MODERATE-faciten, 1 färsk bedömare, v5-rubrik, facit dolt)
**Resultat: 11/20 exakt (55 %) · 18/20 inom ±1 (90 %)** — i nivå med regressionssetet (57–62 %) och KLART över semi-holdout-farhågan (38 %) → **v5 generaliserar; ingen regeländring behövs.** Binärt syfte-test (jobb 🔴/🟠 vs OK 🔵/🟢): 15/20.
Miss-mönster: **båda 2-stegsmissarna = UNDERgissade 🔴** (pigment kemisk-kortet: marknads-öppning på kort kort → agenten föll för kort→SLIGHT-defaulten trots regel 2; microderm serum-blocket: passiv "appliceras" + "maximera" + svans) — regeln finns, tillämpningen brast; båda hade konfidens ≤55 → **<65-flaggan fångar dem ✓**. 3 övergissningar på 🔵 (+1): rhino-intro ("Utforska…"-meta lästes för hårt), rhino-orsaken, solskadad-kännetecknas (−1 på 🟠). Kalibrering: 7 träffar hade konfidens ≥55, alla ≥70-gissningar (4 st) var träff eller ±1.
Facit-rådata: 1🔵✓ · 2🟠→SLIGHT · 3🔴→MOD · 4🔵→MOD · 5🟠→SIG · 6🔴✓ · 7🔵→MOD · 8🔵✓ · 9🟢✓ · 10🔴→SLIGHT❌2 · 11🟠→SIG · 12🔵✓ · 13🟠✓ · 14🔴✓ · 15🔵✓ · 16🔴→SLIGHT❌2 · 17🟠✓ · 18🔵✓ · 19🔵✓ · 20🟠→SIG.

### D. §1.1/§1.5 — bekräftelser + 1 nytt minimalpar (inget kodifieras nytt utöver §1.4-korrektionen)
- **Minimalpar "självklara valet" (3 sidor):** ytliga Artikel2 "Om du letar efter en effektiv och långsiktig lösning… det självklara valet" = 🔴 · rhinophyma-motsvarigheten utan siffra = 🟠 · bristningar "Letar du efter en effektiv lösning…? …självklara valet. Med mer än **30 års expertis**… få eller omfattande…" = 🔵. Nästan identisk öppning — siffran + konkretionen flyttar TVÅ steg → starkaste enskilda belägget för nyckel 3/5 hittills.
- Demografisk skal-öppning = 🔴 bekräftad ×3 nya (bristningar-åldre, pigment-äldre, oonskat-drabba); lång definition utan mekanism = 🔴 ×2 nya (pigment-mörka-hudfläckar, rhino-svår-form); kort kort avgörs av öppning ×4 sidor.
- §1.5: homepage = enda AIQ POOR-badgen, samtidigt AI COPY 🔵 och GAPS 0/0 → AIQ-badgen är OBEROENDE av AI COPY/GAPS (stödjer att AIQ aggregerar frågelistan, H6-familjen). Ingen ny frågedata → H1–H6 oförändrade.
- Betygsatta FAQ-RADER förekommer (🔵 ×3 sidor, 🟢 ×1) → räkna dem i n för §1.4-medel när de syns.

## Blindtest 3 — 2026-07-02 (Fable 5 + v4-rubrik → v5; ofuskat: 3 färska bedömare, betyg dolda)
37 block ur korpusen ovan (fulltext ur git `b017daf2` = pre-rewrite-versionen som LYNX betygsatte; 1🟥/13🔴/8🟠/10🔵/5🟢). Setet MEDVETET hårdladdat med kända fällor (fluff-svansar, kort+marknad, meta-scaffolding, mild-importans-instruktioner) — därför EJ rakt jämförbart med test 1 (67 % exakt på balanserat set). Bedömarna fick BARA v4-rubriken + blocktext + sid-/sektionskontext.

**Resultat:** bedömare 1/2/3 = 14/16/13 exakt (38/43/35 %), 33/32/31 inom ±1 (89/86/84 %). Konsensus (majoritet): 14/37 exakt, 32/37 ±1, 5 tvåstegs-missar. **Inter-bedömar-samstämmighet ~90 % → missarna är RUBRIK-systematik, inte brus (Fable 5 mycket reproducerbar → 1 bedömare räcker operativt, §7.4b).**

| # | Block | Facit | Konsensus | Träff |
|---|---|---|---|---|
| T01 | acne banner "Här förklarar vi…" | 🔴 | 🔵 | ❌2 meta-scaffolding saknades i v4 |
| T02 | dermapen eftervård-p1 "viktigt att hålla rent" | 🔵 | 🔴 | ❌2 mild importans i konkret block ska EJ lyfta |
| T03 | ipl Vad-är-IPL-p1 (gloss+`effektiv`-svans) | 🔴 | 🟠 | ±1 |
| T04 | om-oss 1994-historik | 🔵 | 🟠 | ±1 |
| T05 | ipl-rosacea desc-p2 (IPL ×6, "inte bara X utan Y") | 🔴 | 🟥 | ±1 stuffing ensam ≠ EXTREME |
| T06 | acnebehandling laser (mekanism-öppning) | 🔵 | 🔵 | ✓ |
| T07 | behandla-pigment microneedling | 🟥 | 🟠 | ❌2 stuffing ej räknad |
| T08 | acne-ansikte "Hur behandlar man" | 🟠 | 🔴 | ±1 |
| T09 | ipl eftervård-p3 (kort direkt) | 🟢 | 🔵 | ±1 |
| T10 | acne Varför (full mekanism-payoff) | 🔵 | 🟠 | ±1 |
| T11 | dermapen förberedelse-p1 (boilerplate+fluff-svans) | 🔴 | 🔴 | ✓ |
| T12 | ipl-rosacea Inför-p1 (konsult-boilerplate) | 🟠 | 🔴 | ±1 |
| T13 | ipl banner ("bästa… garanterar") | 🟠 | 🔴 | ±1 |
| T14 | acne omdöme generiskt ("var skeptisk…") | 🔵 | 🟢 | ±1 känslo-story ≠ personlig detalj |
| T15 | behandla-pigment banner (marknad+CTA-pivot) | 🔵 | 🟠 | ±1 kända fällan |
| T16 | om-oss SHR ("garanterar högsta…") | 🔴 | 🔴 | ✓ |
| T17 | dermapen "1000 kr"-rad | 🟢 | 🔵 | ±1 kort+siffra→HUMAN saknades i v4 |
| T18 | ipl-rosacea desc-p1 (kort gloss+mekanism) | 🔵 | 🟠 | ±1 |
| T19 | ipl eftervård-p1 ("avgörande… bästa") | 🔴 | 🔴 | ✓ |
| T20 | acne Vem (demografisk skal+importans) | 🔴 | 🟠 | ±1 |
| T21 | dermapen PRX (marknad-öppning+mekanism) | 🟠 | 🟠 | ✓ |
| T22 | acnebehandling kemisk peeling (marknad-öppning) | 🔴 | 🟠 | ±1 |
| T23 | acne-ansikte banner (empati+meta) | 🔴 | 🔴 | ✓ |
| T24 | ipl mini-kort ytliga ("Läs mer") | 🔵 | 🔵 | ✓ |
| T25 | acne pormaskar-definition | 🔵 | 🔵 | ✓ |
| T26 | ipl-rosacea Inför-p2 (importans+lång) | 🔴 | 🟠 | ±1 |
| T27 | om-oss intro | 🟠 | 🟠 | ✓ |
| T28 | ipl Vad-är-IPL-p2 ("mångsidig… en rad") | 🔴 | 🟠 | ±1 |
| T29 | acne omdöme "2-3 år" | 🟢 | 🟢 | ✓ |
| T30 | dermapen eftervård-p3 (CTA+"hudvårdsambitioner") | 🔴 | 🔵 | ❌2 fluff-svans på kort block saknades i v4 |
| T31 | dermapen förberedelse-p2 ("optimala resultat") | 🟠 | 🟠 | ✓ |
| T32 | ipl eftervård-p2 (konkret, lång) | 🟠 | 🟠 | ✓ |
| T33 | acne laser-kort ("avancerad… effektiv lösning", 2 men.) | 🔴 | 🔵 | ❌2 kort+marknad utan pivot saknades i v4 |
| T34 | ipl-rosacea maskin-rad (Alma-namn) | 🟢 | 🔵 | ±1 kort+namn→HUMAN saknades i v4 |
| T35 | acne Vad-är-akne (vad-det-är+gloss) | 🟠 | 🟠 | ✓ |
| T36 | dermapen eftervård-p2 (konkreta instruktioner) | 🔵 | 🔵 | ✓ |
| T37 | acne Noduler ">5 mm"-definition | 🟢 | 🔵 | ±1 kort+mått→HUMAN saknades i v4 |

**Mönster (→ v5, playbook §1.3):** (1) De 5 tvåstegs-missarna = v4-rubriken saknade §1.1-nyanser som redan var dokumenterade: meta-scaffolding-öppning, fluff-svans lyfter kort block, kort+tät marknad utan pivot → 🔴, mild importans i konkret instruktionsblock lyfter INTE, EXTREME kräver faktisk räkning. (2) Marknadstunga behandlingsblock undergissades genomgående ett steg → facit hårdare mot marknad än intuitionen; luta åt 🔴 på behandlingsprosa. (3) Alla korta 🟢-block (siffra/mått/maskinnamn/direkt instruktion) gissades 🔵 → v4:s "kort→SLIGHT, EJ HUMAN" var en överkorrigering av O09/O10; v5 återinför §1.1 nyckel 3 med siffra/namn-kravet. (4) Konfidens: tvåstegs-missarna låg ≤60 (utom en 75:a) → <65 = hämta facit. (5) Fable 5-reproducerbarheten gör §7.4b-verifieringen billigare: 1 bedömare i stället för panel.

## Blindtest 4 — 2026-07-02 (v5 + gradient; 2 bedömare; 37 regression + 16 semi-holdout)
Test av de förbättrade modellerna (ägar-beställt). Bedömarna fick v5-rubriken MED gradient + §1.1-nyckel-5-tilläggen.
- **Regression (samma 37 block som test 3): 21–23/37 exakt (57–62 %, upp från 35–43 % med v4), 33–34/37 ±1 (89–92 %).** 4 av 5 gamla konsensus-tvåstegsmissar FIXADE (T01 meta-scaffolding, T02 mild-importans-instruktion, T30 fluff-svans, T33 kort+marknad). T07 EXTREME kvarstår hos 1 av 2 (stuffing räknas fortfarande inte spontant).
- **Semi-holdout (16 EJ regel-citerade block från micro/porto/acne-rygg/sebo): 6/16 exakt (38 %), 14/16 ±1 (88 %).**
- **NY systematisk miss (bägge bedömare, 4 block): gradienten förlät för mycket.** T19 ipl-eftervård (staplade öppningsfraser "avgörande… bästa… effektiv"), T20 acne-demografi (skal-öppning + importans-svans), N05 sebo-orsaken (hedge-stapel + "spelar en viktig roll"), N16 micro-maskin (lång mekanism + marknads-svans) — alla predikterades 🔵 men facit 🔴. Mönster: **konkretion NÅGONSTANS räcker inte — fluffen ska räknas över hela blocket (öppning + svans).** → Gradienten skärpt i §1.3 (staplade öppningsfraser / fluff i båda ändar / lång+svans → 🔴; demografisk skal räddas aldrig).
- **Netto: mätbart bättre modell** (57–62 % vs 35–43 % exakt på identiskt set), och kvarvarande missar tillhör samma kända familj (ackumuleringsviktning), inga nya blinda fläckar. ±1-bandet stabilt. Nästa validering: första FÄRSKA facit-sidan (äkta out-of-sample, §1.3-doktrinen).

