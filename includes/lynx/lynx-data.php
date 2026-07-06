<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX-data (manuell export) — NAV-FIL: Pages-inventeringar + sidregister + filkarta

> **📁 FILKARTA (uppdaterad 6 jul — playbooken SPLITTRAD per arbetsläge; läs BARA det uppgiften kräver):**
> **▶ NY SESSION: läs `lynx-START.php` FÖRST — den har LÄGE + router + regler + backlog.**
> - **INSTRUKTIONER:** `lynx-START.php` (nav/läge/router/backlog §8-9/claims §12) · `lynx-rewrite.php` (omskrivnings-hantverk: §1.1/1.3/1.4 bedömning, §2 formel, §3 checklista, §4 husröst, §5 ramar+juridik, §6 SEO-skydd, §7 process, §13 skyddsregler) · `lynx-models.php` (§1.2 SCORE-modell, §1.5 AIQ, §10 mät-loop, §11.1 bevakning) · `lynx-logg.php` (arbetslogg §11) · `lynx-log-arkiv.php` (äldre poster) · `lynx-copy-playbook.php` (bara en vägvisar-stub numera).
> - **RÅDATA (denna filgrupp):**
> - **`lynx-data.php` (denna fil)** — Pages-LISTAN: inventerings-snapshots (VALUE/PT/SCORE/GAPS/AICOPY/AIQ/P.PRICE/KW/WORDS/CLICKS/STATUS per sida), officiella kolumn-definitioner, sidregister (i LYNX/saknas/ej i repo), beställningssedel.
> - **`lynx-examples.php`** — AI COPY-kolumnen: per-block-facit per sida + blindtest + modellvalideringar (§1.1/§1.3/§1.4-underlag).
> - **`lynx-questions.php`** — AI QUESTIONS-kolumnen: AI Overview Ranking-frågelistor per sida (§1.5-underlag; Fas 2-spec).
> - **`lynx-score.php`** — SCORE-kolumnen: alla SCORE-nedbrytningar + SCORE-modellens härledning + online-verifiering (§1.2-underlag).
> - **`lynx-gaps.php`** — GAPS-kolumnen: gap-texter per sida (besluten bor i `lynx-START.php` §8.1).
>
> LYNX saknar exportfunktion, så detta är vår **manuella databas** över LYNX Pages-data. Mata in ny data vid varje refresh (ny daterad snapshot) så vi kan jämföra FÖRE/EFTER. *Transkriberat från skärmdumpar — verifiera mot LYNX vid hårda beslut.*
> **Data-hantering (princip 2026-07-01):** spara ALLT ägaren skickar (sidnivå + block + SCORE-breakdown + AI QUESTIONS) här/​i `lynx-examples.php` som underlag. Vid **ny scanning: diffa mot sparad data** → vad ändrades, vad förbättrades/försämrades, vad bör åtgärdas. **Påminn ägaren om att skicka uppdateringar** om de dröjer (vi kan inte polla LYNX själva).

## OFFICIELLA KOLUMN-DEFINITIONER (LYNX-tooltips, mottagna 2 jul 15:00 — ersätter våra gissningar)
| Kolumn | Officiell definition (ordagrant ur tooltip) | Modell-implikation |
|---|---|---|
| **VALUE** | "How this page's value compares to your other pages (higher is better)." | Internt RELATIVT värde — ok för prio, ej absolut. |
| **PAGE TYPE** | "The structural or content category of the page (e.g., homepage, article, product)." | Bekräftar §13.I-tolkningen. |
| **GAPS** | "Actionable optimization opportunities and content gaps compared to top-ranking competitors." | ⚠️ KONKURRENT-relativa → gaps kan dyka upp/rensas när KONKURRENTBILDEN ändras, inte bara när vi agerar (attribueringsvakt för GAPS-rensnings-tråden). |
| **AI COPY** | "Estimated level of AI-generated content on this page. Levels: Human, Slight, Moderate, Significant, Extreme." | Sidnivå = SKATTAD NIVÅ av AI-genererat innehåll på sidan — en helsides-skattning, INTE definierad som aggregat av block-betygen → §1.4:s medel/median är PROXYS för en underliggande kontinuerlig nivå (förklarar strukturellt varför 2,08 kan bli 🔴 och 2,09 🟠). |
| **AI QUESTIONS** | "How well this page answers common user questions for the topic based on Google SERP. Levels: Very Poor, Poor, OK, Good, Very Good." | Bekräftar §1.5 (frågorna kommer från Google SERP); full skala har även Very Poor/Very Good (aldrig sedda hos oss — homepage POOR = näst sämst). |
| **P. PRICE** | "Perceived price level for this page vs market in Google search results. Lower = cheaper. Levels: Very High, High, Average, Low, Very Low." | OMTOLKNING: uppfattat prisläge MOT MARKNADEN i Googles sökresultat — inte bara "schema saknas". ipl-rosacea HIGHEST = uppfattas dyrast vs marknaden. "–" = inget pris uppfattat → §13.I-spåret (Offer-schema) ger Google ett pris att läsa. |
| **EG SCORE** | "Engagement Score: Composite engagement score from page-level user behavior (visits, time, interactions). Higher is better." | NY omodellerad kolumn — hittills "–" i alla dumpar; bevaka när den fylls. |
| **KW** | "Keywords: Number of keywords with this page set as the landing page." | Bekräftar tolkningen. |
| **WORDS** | "Estimated word count of the page's main content." | Main content-orräkning (kan förklara viktning i sidnivå-AI COPY). |
| **CLICKS** | "Number of times users clicked your site from Google Search." | Äkta GSC-klick (homepage 382, acne.php 4). |
| **STATUS** | "Page's HTTP code and indexability (e.g., 200, 301, 404)." | 200 = ok; behandlingar.php-redirecten borde visa 301 vid omscan. |

*(SCORE-kolumnens tooltip ingick inte i leveransen — be om den vid tillfälle.)*

## Snapshot 2026-07-06 EM (13:04–13:20, 7 dumpar) — SCORE-nedbrytningar (→ lynx-score) + AICOPY-avstämning: ALLA 11 flaggade sidor omskrivna
> Ägaren skickade 4 SCORE-popups (rhinophyma 74, ytliga 74, ipl-rosacea 60, microneedling 60 + hudforandringar 17 gammal) → nedbrytningar + modellslutsatser i `lynx-score.php` (CQ/EEAT-badge frikopplad från subs; AI STYLE ute ur Overall; EEAT ej copy-spak). microneedling AIQ-lista (6 jul) → `lynx-questions.php`. **Metodprincip (ägaren): LYNX uppdaterar i STEG — blank sida = pågående omanalys (pigmentflackar löst), attribution kräver observerad delta (§11.1).**

**AICOPY-flagg-listan 13:20 (AI COPY-kolumnen synlig) — 11 sidor kvar (var 14): acne-ansikte + om-oss LÄMNAT (→ SLIGHT, mätta 5 jul); pigmentflackar BLANK (omanalyseras). ALLA 11 kvarvarande ÄR OMSKRIVNA av oss:**

| URL | VALUE | SCORE (färsk?) | GAPS | AICOPY | Vår status |
|---|---|---|---|---|---|
| behandla-pigmentflackar | 10 | – | –/– | SIGNIFICANT | ✅ LIVE main 1 jul → väntar badge-refresh |
| hudforandringar | 10 | 17 (gammal 79d) | 3/2 | SIGNIFICANT | ✅ LIVE main 1 jul → väntar refresh |
| ytliga-blodkarl | 39 | **74 färsk** | 0/0 | SIGNIFICANT | ✅ LIVE main 1 jul; SCORE färsk/badge stale → väntar badge-refresh |
| hudbehandlingar/ipl | 35 | – | –/– | MODERATE | ✅ LIVE main 1 jul → väntar refresh |
| bristningar | 18 | **63 färsk** (FÖRE) | 0/0 | MODERATE | ✅ omskriven 6 jul → STAGING (⛔ GSC-gate) |
| oonskat-har | 11 | – | –/– | MODERATE | ✅ omskriven 3 jul → STAGING |
| ipl-rosacea | 55 | **60 färsk** | 0/0 | MODERATE | ✅ LIVE main 1 jul; SCORE färsk/badge stale → väntar badge-refresh |
| microdermabrasion | 30 | – | –/– | MODERATE | ✅ omskriven 3 jul → STAGING |
| mogen-hy | 11 | – | –/– | MODERATE | ✅ omskriven 2 jul → STAGING |
| rhinophyma-rosacea | 34 | **74 färsk** (FÖRE) | 0/0 | MODERATE | ✅ omskriven 6 jul → STAGING (⛔ GSC-gate) |
| solskadad-hy | 32 | – | –/– | MODERATE | ✅ omskriven 6 jul → STAGING (⛔ GSC-gate) |

**Avstämning: 0 oförda flagg-sidor.** 5 LIVE på main (väntar LYNX badge-refresh — badge-vyn släpar efter SCORE, "vyer oberoende" §11.1), 6 på STAGING (väntar GSC-gate → main-push). Nästa mät-milstolpe = badge-refresh på de 5 live (blir EFTER-mätningar #3–7 efter acne-ansikte + om-oss). Inget nytt skrivarbete behövs på flagg-listan; kvarvarande Fas 3 = pigmentflackar (när den kommer tillbaka ur omanalys).

## Snapshot 2026-07-06 (07:51, 5 dumpar) — 🎉 FÖRSTA EFTER-MÄTNINGEN: acne-ansikte refreshad → SLIGHT
> Ägaren skickade AICOPY-filtrerad Pages-vy (tabellen skuren nedtill vid homepage-raden) + AI Copy per-block-vy för acne-ansikte (**"Last update: 05 Jul, 2026"** = färsk analys) + separat acne-ansikte-rad. **Huvudfynd: acne-ansikte 🔴 SIGNIFICANT → 🔵 SLIGHT** — första omskrivna sidan LYNX mätt om (EFTER-facit i `lynx-examples.php`). Refreshen är RULLANDE/partiell: ytliga-blodkarl + ipl-rosacea har FÄRSK SCORE men gamla AI COPY-badges; hudforandringar/behandla-pigment helt orefreshade.

**Diff mot 2 jul:**
- **acne-ansikte: 🔴 → 🔵 SLIGHT** · VAL 32→28 · KW 57→52 · AIQ OK · SCORE fortfarande "–". Per-block EFTER (9 synliga): **0🔴/1🟠/6🔵/2🟢**, medel 0,89 → 🔵 ✓ (§1.4:s första EFTER-validering).
- **Färska nya-skalan-SCORE utan badge-refresh:** ytliga-blodkarl 22→**74** (omskriven live — rewrite + ny skala oskiljbara) · ipl-rosacea 39→**60** (dito) · bristningar 18→**63** · rhinophyma 10→**74** (två senare EJ omskrivna = ren omskalning → **färska FÖRE-baselines för Fas 3-kön**). Endast Overall, inga breakdowns (§1.2-testprotokollet fortfarande obesvarat).
- **om-oss + pigmentflackar SAKNAS i MODERATE-gruppen** (alfabetisk sortering: hålet sitter mellan mogen-hy och rhinophyma) → möjlig tier-flytt (om-oss = omskriven live!) ELLER skuren dump — **raderna beställda av ägaren; avgör inte än.**
- Oförändrat: hudforandringar (🔴, SCORE 17, GAPS 3/2) · behandla-pigment (🔴, AIQ GOOD) · microdermabrasion AIQ OK (fortsatt nedgraderad) · homepage 🔵/POOR/SCORE 28/GAPS 0/0.
- **KW-drift sajtbred, även på orörda sidor** (homepage 298→287, solskadad 31→33 UPP) → ej attribuerbar till våra ändringar; bevaka (§13.F), ingen åtgärd.

| URL | VAL →6 jul | SCORE →6 jul | GAPS | AICOPY | AIQ | P.PRICE | KW →6 jul | Klass |
|---|---|---|---|---|---|---|---|---|
| **/acne-ansikte.php** | 32(30 jun)→**28** | –→– | –/– | **🔵 SLIGHT (var 🔴)** | OK | – | 57→**52** | ✅ **REFRESHAD 5 jul — badge-flytt 2 steg** |
| /behandla-pigmentflackar.php | 14(30 jun)→10 | –→– | –/– | 🔴 SIGNIFICANT | GOOD | – | 16→13 | OFÖRÄNDRAD badge (omskriven live, ej refreshad) |
| /hudproblem/hudforandringar/ | 10→10 | 17→17 | 3/2 | 🔴 SIGNIFICANT | OK | – | 7→7 | OFÖRÄNDRAT (omskriven live, ej refreshad) |
| /ytliga-blodkarl.php | 36→39 | 22→**74** | 0/0 | 🔴 SIGNIFICANT | OK | – | 168→159 | **FÄRSK SCORE, badge EJ refreshad** (omskriven live) |
| /hudbehandlingar/ipl/ | 34→35 | –→– | –/– | 🟠 MODERATE | OK | HIGH | 18→18 | oförändrat (omskriven live, ej refreshad) |
| /hudproblem/bristningar/ | 18→18 | 18→**63** | 0/0 | 🟠 MODERATE | OK | – | 67→67 | **FÄRSK SCORE (ej omskriven = ny FÖRE-baseline)** |
| /hudproblem/oonskat-har/ | 11→11 | –→– | –/– | 🟠 MODERATE | OK | – | 16→15 | oförändrat (rewrite väntar main-push) |
| /ipl-rosacea.php | 55→55 | 39→**60** | 0/0 | 🟠 MODERATE | OK | HIGHEST | 20→18 | **FÄRSK SCORE, badge EJ refreshad** (omskriven live) |
| /microdermabrasion.php | 30→30 | –→– | –/– | 🟠 MODERATE | OK | MID | 6→6 | oförändrat (rewrite väntar main-push) |
| /mogen-hy.php | 12→11 | –→– | –/– | 🟠 MODERATE | OK | – | 9→9 | oförändrat (rewrite väntar main-push) |
| /rhinophyma-rosacea.php | 34→34 | 10→**74** | 0/0 | 🟠 MODERATE | OK | – | 47→47 | **FÄRSK SCORE (ej omskriven = ny FÖRE-baseline)** |
| /solskadad-hy.php | 30→32 | –→– | –/– | 🟠 MODERATE | OK | – | 31→**33** | oförändrat (KW UPP) |
| /behandlingar.php | 14→14 | –→– | –/– | 🔵 SLIGHT | OK | – | 0→0 | redirect-rad, oförändrad |
| / (Homepage) | 41→42 | 28→28 | 0/0 | 🔵 SLIGHT | POOR | – | 298→287 | oförändrat |

*(om-oss + pigmentflackar ej synliga i dumpen — beställda. Tabellen skuren under homepage-raden; fler SLIGHT-rader kan finnas.)*

### Leverans 2 (08:11, 5 dumpar) — om-oss LÖST (andra EFTER-facitet); pigmentflackar-mysteriet SKÄRPT
> Alfabetisk Pages-vy (m→p-spannet, AICOPY-filter aktivt) + om-oss SCORE-popup + GAPS-popup + AI Copy-vyn för om-oss (**"Last update: 05 Jul, 2026"** = färsk).

- **om-oss.php: ANDRA EFTER-MÄTNINGEN** — per-block 5 jul: **0🔴/0🟠/10🔵/1🟢 synliga** (FÖRE 22 apr: 3🔴/2🟠/6🔵/1🟢) → EFTER-facit i `lynx-examples.php`. Badge-kolumnen ej synlig i dumpen (popup skymde) men sidan är borta ur MODERATE-gruppen + 0 flaggade block → **SLIGHT implicerat; be om badge-raden för bekräftelse.** Rad-data: VAL 7 · SCORE 17 · GAPS 2/2.
- **om-oss SCORE-nedbrytning (FÖRSTA — men GAMMAL: "Analyzed 79 days ago" ≈ 18 apr):** Overall 17 · CQ 57 · EEAT 59 · **AI STYLE 20 = lägsta uppmätta** → `lynx-score.php`; multiplikativa formeln nu 7/7. **Viktigt metodfynd: AI Copy-vyn (5 jul) och SCORE-analysen (apr) refreshar OBEROENDE** → Pages-SCORE kan vara stale bredvid färsk AI Copy (förklarar också ytliga-blodkarls omvända läge: färsk SCORE 74, stale badge).
- **om-oss GAPS-popup:** samma 3 punkter som sparats 2 jul (remiss/vårdkö HIGH · hudläkare-skillnad HIGH · prisinfo MEDIUM) — oförändrade, redan i `lynx-gaps.php` (4:e punkten fortfarande osedd).
- **⚠️ pigmentflackar.php SAKNAS ÄVEN i alfabetisk vy** — hålet syns tydligt mellan /permanent-harborttagning.php och /pormaskar.php → sidan verkar ha åkt UR AICOPY-filtret helt (badge tömd/omanalys?), inte bara flyttat grupp. **Beställt: URL-sök "pigmentflackar" i Pages + dess AI Copy-vy** (KW 244-sidan — viktig för Fas 3-prio).
- Nya rader (m→p-spannet): milierbehandling VAL 49 · mjalleksem 24 · perioral-dermatit 32 · permanent-harborttagning 16 · **pormaskar 40, SCORE 76, GAPS 1/0** (ny färsk topp-SCORE?) · pormaskar-rygg 38 · porrengoring 48 · portomning 65, SCORE 60 (som 2 jul) · postinflammatorisk-hyperpigmentering 38.

## Snapshot 2026-07-02 EM (13:41–14:22) — 6 MODERATE-facit + HELSAJTS-inventering (31 dumpar totalt)
> **Tillägg 14:20–14:22:** zoom-dump som löste homepage-/redirect-frågorna (inarbetat i sidregistret nedan) + per-block-facit för **pigmentflackar (22 apr)** och **oonskat-har (29 apr)** → `lynx-examples.php`. **MODERATE-vågen därmed facit-komplett (7/7).**
> Ägaren skickade (a) per-block-facit för **solskadad-hy (23 apr), rhinophyma-rosacea (22 apr), microdermabrasion (25 jun), hudproblem/bristningar (22 apr)** — fulltext i `lynx-examples.php`; (b) AICOPY-sorterad Pages-vy med SCORE-popup; (c) **helsajts-inventering i 5 dumpar** (AICOPY-sorterad, alfabetisk inom grupp). **Ägarbesked:** "räkna ner till studentrabatt — från botox och ner är bara drafts och annat som inte används" → allt under gränsen EXKLUDERAS ur backlog. **Ägarbesked 2:** ALLA sidor som finns i LYNX ska gås igenom (vissa redan gjorda, resten framöver).

**Viktigaste diffen mot sparad data:** AICOPY-flagg-listan **OFÖRÄNDRAD** (4 SIGNIFICANT + 10 MODERATE = samma som 30 jun) → **fortfarande INGEN LYNX-refresh på de 8 omskrivna sidorna** (§11.1-bevakningen öppen). Synliga SCORE i flagg-gruppen (mest gamla analyser): hudforandringar 17 · ytliga-blodkarl 22 · bristningar **18** · ipl-rosacea 39 · om-oss 17 · pigmentflackar 35 · rhinophyma 10 · solskadad-hy 30 · mogen-hy ~12(osäker).

**bristningar SCORE-nedbrytning** → `lynx-score.php` (gammal skala, passar multiplikativa formeln 6/6). **om-oss gap-popup** → `lynx-gaps.php`.

### SIDREGISTER (ägar-beställt 2 jul em): sidor I LYNX vs sidor SOM SAKNAS
Metod: URL-kolumnen ur de 5 inventerings-dumparna korsad mot repots publika sidor (`find`-lista 2 jul; repo = källa för vad som existerar — suddiga läsningar upplösta mot repot, t.ex. "atersfiska-arr"→atrofiska-arr.php, "millerbehandling"→milierbehandling.php, "prasentkort"→presentkort.php, "/ipl.php"→ipl-acne.php, "/priser.php"→/priser/).

**A. I LYNX OCH i repot (≈112 sidor — hela genomgångs-listan; ✅ = omskriven/live):**
- *Flaggade (4 SIG + 10 MOD):* acne-ansikte✅ · behandla-pigmentflackar✅ · hudproblem/hudforandringar/✅ · ytliga-blodkarl✅ | hudbehandlingar/ipl/✅ · om-oss✅ · ipl-rosacea✅ | hudproblem/bristningar/ (facit✅) · hudproblem/oonskat-har/ (facit✅ 14:22) · microdermabrasion (facit✅) · mogen-hy (facit✅) · pigmentflackar (facit✅ 14:22) · rhinophyma-rosacea (facit✅) · solskadad-hy (facit✅)
- *Rot-sidor (SLIGHT/HUMAN-grupperna):* acne✅ · acnearr · acnebehandling · acne-brost · acne-myter · acne-rygg (facit✅) · acne-scars · acne-vulgaris · aldersflackar · alma-harmony-xl-pro · alma-hybrid-co2-laser · ansiktsbehandlingar · atrofiska-arr · behandla-acnearr · behandla-finnar-arr · behandla-stora-porer · blandhy · blodprickar · cryopen · cystisk-acne · dermapen · djuprengoring · elevbehandlingar · fet-hy · finnar · finnar-ansikte · finnar-arr · finnar-behandling · finnar-brost · finnar-gravid · finnar-rygg · fodelsemarken · fragor-svar · franchise · gratis-hudkonsultation · hormonell-acne · hudflikar · hydrafacial · inflammation-acne · infuzion · ipl-acne · ipl-pigmentflackar · ipl-ytliga-blodkarl · kemisk-peeling · kemisk-peeling-acne · klamma-finnar · komedoner · kontakt · laser-acne · laser-acnearr · laser-arr · mallorca-acne · melasma · metoden · microneedling (facit✅) · microneedling-acne · microneedling-acnearr · microneedling-stora-porer · milier · milierbehandling · mjalleksem · not-found · online-konsultation · ordlista · perioral-dermatit · permanent-harborttagning · pormaskar · pormaskar-rygg · porrengoring · portomning (facit✅) · postinflammatorisk-hyperpigmentering · presentkort · problemhy · prx-t33 · recensioner-omdomen · resultat · resultat-acne · resultat-acnearr · resultat-finnar-arr · resultat-pormaskar · resultat-rosacea · resultat-stora-porer · resultat-ytliga-blodkarl · roaccutan · rosacea · rosaceabehandling · seborre · seborroisk-keratos (facit✅) · stora-porer · stress-acne · stress-finnar · svarta-pormaskar · tonarsacne · torr-hy · vakuumsug-pormaskar · vita-pormaskar · vuxenacne
- *Katalog-sidor:* hudbehandlingar/ · hudbehandlingar/ansiktsbehandling/akne/ · hudbehandlingar/ansiktsbehandling/hudterapeutens-val/ · hudbehandlingar/dermabrasion/ · hudbehandlingar/estetiska-injektionsbehandlingar/ · hudbehandlingar/estetiska-injektionsbehandlingar/fillers/ · hudbehandlingar/laser-mot-hudproblem/ · hudbehandlingar/pormaskar/ · hudbehandlingar/skinbooster/ · hudbehandlingar/vaxning/ · hudguide/ · hudproblem/ · hudproblem/operations-skadearr/ · hudterapeut/ · priser/ · studentrabatt/ · varumarken/ · varumarken/dual-injector/ · varumarken/exceed/ · varumarken/fraction-co2/ · varumarken/rejuve-dye-vl/ · varumarken/skin-tech/ · varumarken/soprano-ice/ · varumarken/splendor-x/

**B. SAKNAS i LYNX-dumparna men FINNS i repot (HÅLL UTKIK — be LYNX/ägaren verifiera):**
1. `/varumarken/hifu/` — NYLIGEN tillagd sida (commit d3257a9a) → LYNX har inte indexerat än. Bevaka att den dyker upp.
2. `/avbokningspolicy.php` — fanns "blank" i 30 jun-datan; syntes inte i det alfabetiska spannet (blank badge sorterar troligen under gränsen).
3. `/karriar.php` — samma som ovan.
4. `/hudbehandlingar/ansiktsbehandling/rosacea/` — ⚠️ osäker: bara 2 av repots 3 ansiktsbehandling-undersidor syntes i dumpen (akne + hudterapeutens-val).
5. ~~`/` (homepage)~~ **LÖST 2 jul 14:20 (zoom-dump):** homepage FINNS i LYNX, låg direkt under behandlingar-raden. Rad-data: VAL 41 · SCORE **28** (oförändrad) · GAPS **⚡0/💡0** (bekräftar rensningen 3/2→0/0 igen) · AI COPY **SLIGHT (sidnivå — homepage är alltså INTE flaggad; arbetet där = SCORE-/AIQ-vinst)** · AIQ **POOR** (enda sidan) · P.PRICE – · KW **298** (30 jun: 296) · 223 ord · 382 clicks · 200. *(Samma dump: /acne.php VAL 25 · SCORE 39 = gammal analys kvar · GAPS 2/1 · SLIGHT · OK · KW 114 · 1354 ord · 4 clicks.)*

**C. I LYNX men INTE i repot (utred/städa):**
1. `/varumarken/powerlite-photonova/` (VAL ~17) — finns på live/LYNX men saknas i repot → borttagen sida som lever kvar live, eller repo-lucka?
2. `/behandlingar.php` — **LÖST (ägarbesked 2 jul): redirect till `/hudbehandlingar/`.** Rad-data (zoom-dump): VAL 14 · SCORE – · SLIGHT · AIQ OK · KW 0 · 275 ord · 200. Ingen egen copy att åtgärda — innehållet ägs av /hudbehandlingar/; kvarstår i registret som redirect-rad.
3. Allt NEDANFÖR `/studentrabatt/` (botox m.m., STATUS DRAFT) — drafts/oanvänt per ägarbesked → ingår EJ i genomgången.

## Snapshot 2026-07-02 — PARTIELL (riktad färsk analys av microneedling.php + synliga grannrader)
> Ägaren körde färsk analys på microneedling.php ("Analyzed 2 minutes ago") och skickade Pages-rader + SCORE-nedbrytning + AI Copy-facit (facit-datum 22 apr = originaltext, sparat i `lynx-examples.php`) + gap-texter. **INGEN bekräftad sajtbred refresh** — §11.1-bevakningssidorna syns inte i dumpen (utom ipl-rosacea, oförändrad 39).

| URL | VAL 30 jun→2 jul | SCORE 30 jun→2 jul | GAPS 30 jun→2 jul | Klass |
|---|---|---|---|---|
| /microneedling.php | 66→**67** | 28→**50** | 2/0→**1/1** | ÄNDRAT (färsk analys, nedbrytning nedan) |
| /portomning.php | 65→66 | 37→**60** | 0/0→0/0 | ÄNDRAT |
| /seborroisk-keratos.php | 60→63 | 0→**74** | 1/2→0/0 | ÄNDRAT |
| /acne-rygg.php | 63→64 | 0→0 | 1/2→2/0 | GAPS ändrade |
| /blodprickar.php | 59→59 | 17→17 | 1/1→0/0 | GAPS ändrade |
| /djuprengoring.php | 56→57 | 0→0 | 0/1→0/0 | ~oförändrat |
| /cystisk-acne.php | 58→56 | 0→0 | – | ~oförändrat |
| /ipl-rosacea.php | 54→55 | **39→39** | – | OFÖRÄNDRAT (§11.1-bevakad — EFTER-värde ej här än) |
| /resultat-rosacea.php | 54→53 | 0→0 | – | ~oförändrat |
| /mallorca-acne.php | 51→53 | 25→25 | – | ~oförändrat |

**microneedling.php SCORE-nedbrytning (färsk, ⚠️ anomali) + färska breakdowns (porto/sebo/acne-rygg) + modellimplikationer** → `lynx-score.php`. **Gap-texter (microneedling, acne-rygg)** → `lynx-gaps.php`. **AI Overview Ranking-listor (micro/porto/acne-rygg/sebo/mogen-hy/homepage/acne-ansikte)** → `lynx-questions.php`.

**Pages-tabell, AICOPY-filter (2 jul — TREDJE leveransen samma dag; medföljde mogen-hy-facitet → `lynx-examples.php`).** Diff mot 30 jun-inventeringen. **Huvudfynd: INGEN refresh på de omskrivna sidorna** — hudforandringar/ytliga-blodkarl/om-oss/ipl-rosacea/ipl står kvar på gamla tiers+SCORE (bevakningen §11.1 fortsatt öppen). Små VAL/KW-drifter = brus. Riktiga ändringar: **GAPS rensade** på ytliga-blodkarl (2/2→0/0) + ipl-rosacea (2/1→0/0) + **homepage (3/2→0/0, kompletterad i 12:59-dumpen)**, och **microdermabrasion AIQ GOOD→OK** (försämrad).

| URL | VAL 30 jun→2 jul | SCORE | GAPS | AICOPY | AIQ | P.PRICE | KW | Klass |
|---|---|---|---|---|---|---|---|---|
| /hudproblem/hudforandringar/ | 10→10 | 17→17 | 3/2→3/2 | 🔴 SIGNIFICANT | OK | – | 8→7 | OFÖRÄNDRAT (omskriven live, ej refreshad) |
| /ytliga-blodkarl.php | 42→**36** | 22→22 | 2/2→**0/0** | 🔴 SIGNIFICANT | OK | – | 172→168 | GAPS RENSADE; tier/SCORE ej refreshade (omskriven) |
| /hudbehandlingar/ipl/ | 35→34 | –→– | –/– | 🟠 MODERATE | OK | HIGH | 19→18 | ~oförändrat (omskriven, ej refreshad) |
| /hudproblem/bristningar/ | 18→18 | 18→18 | 0/0→0/0 | 🟠 MODERATE | OK | – | 66→67 | oförändrat |
| /hudproblem/oonskat-har/ | 11→11 | –→– | –/– | 🟠 MODERATE | OK | – | 16→16 | oförändrat |
| /ipl-rosacea.php | 54→55 | 39→39 | 2/1→**0/0** | 🟠 MODERATE | OK | HIGHEST | 20→20 | GAPS RENSADE; tier ej refreshad (omskriven) |
| /microdermabrasion.php | 31→30 | –→– | –/– | 🟠 MODERATE | **GOOD→OK** | MID | 6→6 | AIQ FÖRSÄMRAD |
| /mogen-hy.php | 11→12 | –→– | –/– | 🟠 MODERATE | OK | – | 10→9 | oförändrat; **per-block-facit sparat 2 jul → `lynx-examples.php`** |
| /om-oss.php | 8→7 | 17→17 | 2/2→2/2 | 🟠 MODERATE | OK | – | 3→2 | OFÖRÄNDRAT (omskriven, ej refreshad) |
| /pigmentflackar.php | 35→34 | 35→35 | 0/0→0/0 | 🟠 MODERATE | OK | – | 244→237 | oförändrat |
| /rhinophyma-rosacea.php | 34→34 | 10→10 | 0/0→0/0 | 🟠 MODERATE | OK | – | 46→47 | oförändrat |
| /solskadad-hy.php | 31→30 | –→– | –/– | 🟠 MODERATE | OK | – | 30→31 | oförändrat |
| /behandlingar.php | 13→14 | –→– | –/– | 🔵 SLIGHT | OK | – | 0→0 | oförändrat |
| / (Homepage) | 41→41 | 28→28 | 3/2→**0/0** | 🔵 SLIGHT | **POOR** | – | 296→298 | GAPS RENSADE; enda AIQ POOR på sajten — Tier 1-etta §9.1 |

## Snapshot 2026-06-30 — komplett inventering (före omskrivningar)

### 🔴 SIGNIFICANT (4) — PRIO 1 (skrivs om nu)
| URL | VAL | PT | SCORE | GAPS | AIQ | P.PRICE | KW |
|---|---|---|---|---|---|---|---|
| /ytliga-blodkarl.php | 42 | – | 22 | 2/2 | OK | – | 172 |
| /acne-ansikte.php | 32 | – | – | –/– | OK | – | 57 |
| /behandla-pigmentflackar.php | 14 | – | – | –/– | GOOD | – | 16 |
| /hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | OK | – | 8 |

### Score-komponenter (detaljnedbrytning) → FLYTTAD till `lynx-score.php`
30 jun-nedbrytningarna (hudforandringar 17, ytliga-blodkarl 22, toppsidorna A/B/C à 39 med acne.php = kolumn A bekräftad) + läsningen/hypoteserna ligger nu i `lynx-score.php` (gamla-skalan-sektionen).

### 🟠 MODERATE (10) — PRIO 2 (nästa våg)
| URL | VAL | PT | SCORE | GAPS | AIQ | P.PRICE | KW |
|---|---|---|---|---|---|---|---|
| /pigmentflackar.php | 35 | – | 35 | 0/0 | OK | – | 244 |
| /hudproblem/bristningar/ | 18 | – | 18 | 0/0 | OK | – | 66 |
| /rhinophyma-rosacea.php | 34 | – | 10 | 0/0 | OK | – | 46 |
| /solskadad-hy.php | 31 | – | – | –/– | OK | – | 30 |
| /ipl-rosacea.php | 54 | – | 39 | 2/1 | OK | HIGHEST | 20 |
| /hudbehandlingar/ipl/ | 35 | – | – | –/– | OK | HIGH | 19 |
| /hudproblem/oonskat-har/ | 11 | – | – | –/– | OK | – | 16 |
| /mogen-hy.php | 11 | – | – | –/– | OK | – | 10 |
| /microdermabrasion.php | 31 | – | – | –/– | GOOD | MID | 6 |
| /om-oss.php | 8 | – | 17 | 2/2 | OK | – | 3 |

### 🟢 HUMAN (11) — enkla/utility-sidor, ton-referens (ej rik-prosa-förebild)
| URL | VAL | SCORE | AIQ | KW |
|---|---|---|---|---|
| /acne-myter.php | 24 | – | POOR | 8 |
| /fragor-svar.php | 22 | 36 | OK | 9 |
| /elevbehandlingar.php | 11 | 18 | OK | 4 |
| /recensioner-omdomen.php | 0 | – | OK | 3 |
| /online-konsultation.php | 12 | – | OK | 2 |
| /studentrabatt/ | 18 | – | POOR | 2 |
| /hudguide/ | 16 | – | POOR | 1 |
| /franchise.php | 6 | – | OK | 0 |
| /not-found.php | 7 | – | POOR | 0 |
| /ordlista.php | 4 | – | OK | 0 |
| /priser/ | 4 | – | POOR | 0 |

### 🔵 SLIGHT (~75) — mestadels klara; sorterat KW desc. Hög KW + låg/0 SCORE = framtida uppsida.
| URL | VAL | PT | SCORE | GAPS | AIQ | KW |
|---|---|---|---|---|---|---|
| /rosacea.php | 24 | – | – | –/– | OK | 221 |
| /perioral-dermatit.php | 34 | – | – | –/– | OK | 194 |
| /blodprickar.php | 59 | Service | 17 | 1/1 | OK | 175 |
| /milier.php | 42 | Service | 37 | 2/2 | OK | 173 |
| /seborre.php | 35 | – | – | –/– | OK | 168 |
| /pormaskar.php | 39 | Service | 32 | 0/0 | OK | 128 |
| /acnearr.php | 42 | Service | 0 | 3/1 | OK | 127 |
| /acne.php | 24 | Service | 39 | 3/2 | OK | 116 |
| /seborroisk-keratos.php | 60 | Service | 0 | 1/2 | GOOD | 110 |
| /hudflikar.php | 40 | – | 28 | 3/1 | OK | 105 |
| /finnar.php | 22 | – | – | –/– | OK | 101 |
| /permanent-harborttagning.php | 16 | – | – | –/– | OK | 71 |
| /microneedling.php | 66 | – | 28 | 2/0 | OK | 70 |
| /finnar-rygg.php | 46 | – | 17 | 2/1 | OK | 67 |
| /fodelsemarken.php | 31 | – | – | –/– | OK | 66 |
| /stora-porer.php | 49 | Service | 0 | 2/1 | OK | 60 |
| /fet-hy.php | 17 | – | 15 | 0/0 | OK | 57 |
| /roaccutan.php | 50 | Service | 23 | 2/3 | POOR | 57 |
| /cryopen.php | 43 | – | 21 | 0/0 | OK | 55 |
| /alma-hybrid-co2-laser.php | 28 | – | 14 | 2/2 | OK | 55 |
| /dermapen.php | 39 | Service | 31 | 2/1 | OK | 54 |
| /kemisk-peeling.php | 40 | – | 10 | 3/2 | OK | 53 |
| /acne-rygg.php | 63 | Service | 0 | 1/2 | OK | 51 |
| /finnar-gravid.php | 43 | – | 22 | 3/1 | OK | 44 |
| /behandla-stora-porer.php | 43 | Service | 39 | 2/1 | OK | 42 |
| /acne-brost.php | 47 | – | 36 | 2/3 | OK | 41 |
| /inflammation-acne.php | 33 | – | – | –/– | OK | 40 |
| /hormonell-acne.php | 24 | – | 35 | 3/2 | OK | 38 |
| /milierbehandling.php | 45 | – | – | 0/2 | OK | 34 |
| /hudbehandlingar/laser-mot-hudproblem/ | 15 | – | 16 | 0/0 | OK | 31 |
| /melasma.php | 31 | – | 23 | 3/1 | OK | 27 |
| /hudbehandlingar/skinbooster/ | 24 | – | – | –/– | OK | 27 |
| /mjalleksem.php | 25 | – | – | –/– | OK | 28 |
| /portomning.php | 65 | Service | 37 | 0/0 | OK | 28 |
| /hudproblem/operations-skadearr/ | 10 | – | – | –/– | OK | 25 |
| /ipl-ytliga-blodkarl.php | 30 | – | – | –/– | OK | 24 |
| /vuxenacne.php | 37 | – | – | –/– | OK | 24 |
| /cystisk-acne.php | 58 | Service | 0 | 0/2 | OK | 23 |
| /prx-t33.php | 22 | – | – | –/– | OK | 23 |
| /postinflammatorisk-hyperpigmentering.php | 37 | – | – | –/– | GOOD | 22 |
| /behandla-acnearr.php | 39 | – | – | –/– | OK | 19 |
| /atrofiska-arr.php | 40 | – | – | –/– | OK | 18 |
| /hudbehandlingar/estetiska-injektionsbehandlingar/ (fillers) | 8 | – | – | –/– | OK | 18 |
| /varumarken/splendor-x/ | 30 | Brand | – | –/– | OK | 16 |
| /ansiktsbehandlingar.php | 20 | – | – | –/– | OK | 15 |
| /acne-scars.php | 23 | – | – | –/– | OK | 15 |
| /blandhy.php | 11 | – | 24 | 0/0 | OK | 15 |
| /hydrafacial.php | 46 | – | 20 | 2/0 | OK | 15 |
| /klamma-finnar.php | 12 | – | – | –/– | OK | 15 |
| /infuzion.php | 23 | – | – | –/– | OK | 14 |
| /finnar-arr.php | 14 | – | 9 | 0/0 | OK | 14 |
| /varumarken/fraction-co2/ | 9 | Brand | – | –/– | OK | 14 |
| /finnar-brost.php | 21 | – | 11 | 2/2 | OK | 13 |
| /ipl-pigmentflackar.php | 34 | – | – | –/– | OK | 13 |
| /varumarken/soprano-ice/ | 10 | Brand | 22 | 2/1 | OK | 13 |
| /hudterapeut/ | 27 | – | – | –/– | OK | 13 |
| /microneedling-acnearr.php | 51 | Service | 0 | 0/2 | OK | 12 |
| /mallorca-acne.php | 51 | – | 25 | 0/0 | OK | 11 |
| /laser-acne.php | 31 | – | – | –/– | OK | 11 |
| /pormaskar-rygg.php | 38 | – | – | –/– | OK | 11 |
| /djuprengoring.php | 56 | Service | 0 | 0/1 | OK | 9 |
| /gratis-hudkonsultation.php | 33 | – | – | –/– | OK | 9 |
| /porrengoring.php | 43 | – | – | –/– | OK | 9 |
| /komedoner.php | 25 | – | – | –/– | OK | 8 |
| /rosaceabehandling.php | 19 | – | 25 | 2/2 | OK | 8 |
| /aldersflackar.php | 23 | – | – | –/– | OK | 7 |
| /hudbehandlingar/ansiktsbehandling/rosacea/ | 10 | – | – | –/– | OK | 7 |
| /vita-pormaskar.php | 39 | – | 16 | 2/2 | OK | 7 |
| /hudproblem/ | 26 | – | 2 | 0/0 | OK | 7 |
| /acnebehandling.php | 12 | – | – | –/– | OK | 6 |
| /alma-harmony-xl-pro.php | 23 | – | – | –/– | OK | 6 |
| /laser-arr.php | 14 | – | – | –/– | OK | 6 |
| /microneedling-acne.php | 37 | – | – | –/– | GOOD | 6 |
| /hudbehandlingar/pormaskar/ | 8 | – | – | –/– | OK | 6 |
| /hudbehandlingar/estetiska-injektionsbehandlingar/ | 8 | – | – | –/– | OK | 6 |
| /hudbehandlingar/vaxning/ | 9 | – | – | –/– | OK | 6 |
| /presentkort.php | 19 | – | – | –/– | OK | 5 |
| /problemhy.php | 21 | – | – | –/– | OK | 5 |
| /ipl-acne.php | 18 | – | 11 | 2/3 | OK | 4 |
| /varumarken/skin-tech/ | 14 | Brand | 11 | 0/0 | GOOD | 4 |
| /hudbehandlingar/dermabrasion/ | 25 | – | – | –/– | OK | 4 |
| /hudbehandlingar/ansiktsbehandling/akne/ | 9 | – | – | –/– | OK | 3 |
| /kontakt.php | 26 | Contact | – | –/– | POOR | 2 |
| /microneedling-stora-porer.php | 32 | – | – | –/– | OK | 2 |
| /resultat-finnar-arr.php | 26 | – | – | –/– | OK | 2 |
| /resultat-ytliga-blodkarl.php | 10 | – | – | –/– | POOR | 2 |
| /varumarken/rejuve-dye-vl/ | 22 | Brand | 12 | 0/0 | OK | 2 |
| /finnar-ansikte.php | 11 | – | – | –/– | OK | 1 |
| /finnar-behandling.php | 23 | – | – | –/– | OK | 1 |
| /metoden.php | 7 | – | – | –/– | OK | 1 |
| /behandla-finnar-arr.php | 8 | – | – | –/– | OK | 1 |
| /resultat-pormaskar.php | 22 | – | – | –/– | POOR | 1 |
| /varumarken/powerlite-photonova/ | 12 | Brand | – | –/– | OK | 1 |
| /resultat.php | 15 | – | 9 | 0/0 | POOR | 0 |
| /resultat-acne.php | 34 | – | 12 | 2/2 | OK | 0 |
| /resultat-acnearr.php | 15 | – | 35 | 0/0 | OK | 0 |
| /resultat-stora-porer.php | 18 | – | – | –/– | OK | 0 |
| /resultat-rosacea.php | 54 | Case study | 0 | 1/2 | OK | 6 |
| /acne-vulgaris.php | 10 | – | – | –/– | OK | 0 |
| /behandlingar.php | 13 | – | – | –/– | OK | 0 |
| /kemisk-peeling-acne.php | 8 | – | – | –/– | OK | 0 |
| /laser-acnearr.php | 19 | – | – | –/– | OK | 0 |
| /hudbehandlingar/ansiktsbehandling/hudterapeutens-val/ | 4 | – | – | –/– | OK | 0 |
| / (Homepage) | 41 | Homepage | 28 | 3/2 | POOR | 296 |

## Status — datan vi har idag (2026-06-30)
Detta är informationen som lagts in hittills. Är en sida eller ett fält blankt betyder det bara att datan inte matats in än — vi uppdaterar när mer kommer.
- Utan AI COPY-data idag: `avbokningspolicy.php`, `karriar.php` (blanka tills vidare).

## Prio-signaler (input till framtida prioriteringslista)
- **Prio 1:** de 4 SIGNIFICANT (störst: ytliga-blodkarl KW172).
- **Prio 2:** de 10 MODERATE (störst: pigmentflackar KW244).
- **Prio 3 (SLIGHT men hög uppsida):** hög KW + låg/0 SCORE eller öppna GAPS, t.ex. rosacea (221, SCORE –), perioral-dermatit (194, –), blodprickar (175, 17), milier (173, 37), seborre (168, –), pormaskar (128, 32), acnearr (127, SCORE 0), seborroisk-keratos (110, 0), hudflikar (105, 28), finnar (101, –).
- **PAGE TYPE/P.PRICE "–"** på nästan alla → bekräftar schema-spåret (§13.I i playbook): generiskt fallback-Product utan Offer.

## Datainventering — vad vi HAR och vad vi VILL HA (beställningssedel)
LYNX saknar export; ägaren matar in skärmdumpar på begäran. Den här listan = vad vi kan efterfråga efter behov. ✅ har · 🟡 delvis · ❌ saknas · ❓ okänt.

**HAR:**
- ✅ Full Pages-inventering (~100 sidor): VALUE, PAGE TYPE, SCORE, GAPS (⚡/💡 antal), AI COPY, AI QUESTIONS, P.PRICE, KW (tabellerna ovan).
- ✅ SCORE-komponenter för 5 sidor: 2 mål (hudforandringar 17, ytliga-blodkarl 22) + 3 sajt-topp (39×3).
- ✅ AI COPY per-block-facit för acne-ansikte (10 block) + enstaka andra (`lynx-examples.php`).
- ✅ Gap-text (⚡/💡) för ytliga-blodkarl + hudforandringar (playbook §8.1).

**VILL HA (prioriterat — be om skärmdump när sidan blir aktuell):**
1. 🟡 **SCORE-komponenter för resten av prio-sidorna** — bekräfta först om acne-ansikte/behandla-pigmentflackar har en breakdown bakom "–" (eller om "–" = ej analyserad); sen de 10 MODERATE; + fler sajt-topp för att stärka tak-modellen.
2. 🟡 **Fler komponent→Overall-datapunkter** → så vi kan **reverse-engineera viktningen** (hur CQ + E-E-A-T + AI STYLE blir Overall). Just nu fastnar 3 sidor på exakt 39 trots CQ 56–68 → tyder på att AI STYLE väger tungt / agerar tak. Analogt med hur §1.1 reverse-engineerades.
3. 🟡 **AI QUESTIONS-detalj** — de faktiska frågorna LYNX vill se besvarade. **HAR för 7 sidor (micro/porto/acne-rygg/sebo/mogen-hy/homepage/acne-ansikte → `lynx-questions.php`)**; be om fler när respektive sida blir aktuell. Krävs för FAQPage (Fas 2).
4. ❌ **AI COPY per-block-rating** för de 3 övriga SIGNIFICANT + MODERATE-vågen (vilka block är 🔴/🟠/🔵).
5. ❌ **Gap-text för fler sidor** (⚡ innehåll / 💡 keyword) när vi tar dem.
6. ❌ **Faktiska sökord-rankningar (positioner)** per sida, inte bara KW-antal → för att mäta §6 ranking-skydd efter deploy.
7. ❌ **"Analyzed X days ago" + refresh-kadens** per sida → veta hur färsk varje datapunkt är och när EFTER-värden väntas.
8. ❓ **EG SCORE-kolumnen** — alltid "–" i våra dumpar; vad mäter den? (lågprio)

Modellen (§1.2) skärps mest av punkt 1–2. Be om data i den ordning sidorna blir aktuella.
