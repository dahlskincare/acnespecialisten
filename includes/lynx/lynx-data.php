<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX DATA — AKTUELLT LÄGE per sida · kolumndefinitioner · sidregister · beställningssedel

```
▣ MANIFEST
KIND          AKTIV: AKTUELLT LÄGE-tabellen + beställningssedeln    REGEL: §14 SPARA-RECEPT + kolumndefinitionerna
LADDA-NÄR     en LYNX-dump kommer in (§14) · "vad är senaste värdet för sida X?" · baseline före rewrite
KANONISK-FÖR  §14 SPARA-RECEPT · AKTUELLT LÄGE per sida × vy · officiella kolumndefinitioner · sidregistret · beställningssedeln
PEKAR-PÅ      lynx-data-archive = snapshots verbatim · lynx-examples/score/questions/gaps = kolumnfilerna · lynx-backlog = TODO
```


> **📁 FILKARTA — RÅDATA (kanonisk här; instruktionsfiler & router: `lynx-START.php`):**
> - **`lynx-data.php` (denna)** — AKTUELLT LÄGE-tabellen (senaste värde per sida × vy, daterat) · baseline-register · officiella kolumndefinitioner · sidregister · beställningssedel.
> - **`lynx-examples.php`** — AI COPY per-block-facit per sida. · **`lynx-questions.php`** — AIQ-frågelistor. · **`lynx-score.php`** — SCORE-nedbrytningar + modellhärledning. · **`lynx-gaps.php`** — gap-texter (beslut i `lynx-backlog.php` §8.1).
> - **`lynx-data-archive.php`** — historiska Pages-snapshots verbatim (30 juni-fullinventeringen = gamla skalans FÖRE-baseline för hela sajten).
>
## §14 SPARA-RECEPT — inkommen LYNX-dump (KANONISK CELL; routern i lynx-START pekar hit)
> **save-first, ägarbeslut 2 juli — agera ALDRIG på facit utan att först spara. Det är vår enda mätkälla; LYNX saknar export.**
>
> **Avgör alltid FÖRST vad syftet är — ägaren säger inte alltid rakt ut.**
> 1. Avgör syftet: **(a) per sida** (riktat facit → spara + kör §7 på sidan) eller **(b) bunt-inventering** (→ diffa mot AKTUELLT LÄGE).
> 2. **SPARA VERBATIM i rätt kolumnfil:** Pages-rader → ny daterad sektion överst i `lynx-data-archive.php` · per-block-facit → examples · frågelistor → questions · SCORE-nedbrytningar → score · gap-texter → gaps.
> 3. Uppdatera berörda celler i AKTUELLT LÄGE (regler under tabellen) + klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen `lynx-models` §10, FÖRE→EFTER + validera modellen; ny sida → baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara — LYNX kanske inte refreshat än). → **EN loggpost** i `lynx-log.php` (mall där).
> 4. Öppna §9-TODO i `lynx-backlog.php` för det som ska åtgärdas.
> **Skärmbilds-principen (ägarbesked 2 juli):** dumpar är av naturen PARTIELLA — jobba med det som syns, fråga riktat efter resten; läs HELA bilden (grannrader/kolumner/badges); förändring i kanten mot sparad data → egen §9-tråd. Vi kan inte polla LYNX — **påminn ägaren om uppdateringar** om de dröjer.

## OFFICIELLA KOLUMN-DEFINITIONER (LYNX-tooltips, mottagna 2 jul 15:00 — ersätter våra gissningar)
| Kolumn | Officiell definition (ordagrant ur tooltip) | Modell-implikation |
|---|---|---|
| **VALUE** | "How this page's value compares to your other pages (higher is better)." | Internt RELATIVT värde — ok för prio, ej absolut. |
| **PAGE TYPE** | "The structural or content category of the page (e.g., homepage, article, product)." | Bekräftar §13.I-tolkningen. |
| **GAPS** | "Actionable optimization opportunities and content gaps compared to top-ranking competitors." | ⚠️ KONKURRENT-relativa → gaps kan dyka upp/rensas när KONKURRENTBILDEN ändras, inte bara när vi agerar (attribueringsvakt för GAPS-tråden §9). |
| **AI COPY** | "Estimated level of AI-generated content on this page. Levels: Human, Slight, Moderate, Significant, Extreme." | Sidnivå = SKATTAD NIVÅ av AI-genererat innehåll — helsides-skattning, INTE aggregat av block-betygen → §1.4:s medel är PROXY. |
| **AI QUESTIONS** | "How well this page answers common user questions for the topic based on Google SERP. Levels: Very Poor, Poor, OK, Good, Very Good." | Bekräftar §1.5 (SERP-bas); Very Poor/Very Good sällsynta hos oss. |
| **P. PRICE** | "Perceived price level for this page vs market in Google search results. Lower = cheaper. Levels: Very High, High, Average, Low, Very Low." | Uppfattat prisläge MOT MARKNADEN i SERP; "–" = inget pris uppfattat → §13.I-spåret (Offer-schema). |
| **EG SCORE** | "Engagement Score: Composite engagement score from page-level user behavior (visits, time, interactions). Higher is better." | Omodellerad — hittills "–" överallt; bevaka när den fylls. |
| **KW** | "Keywords: Number of keywords with this page set as the landing page." | Bekräftar tolkningen. |
| **WORDS** | "Estimated word count of the page's main content." | Main content-räkning. |
| **CLICKS** | "Number of times users clicked your site from Google Search." | Äkta GSC-klick. |
| **STATUS** | "Page's HTTP code and indexability (e.g., 200, 301, 404)." | 200 = ok; behandlingar.php-redirecten = 301 (bekräftat 7 juli 13:58 ✓). |

*(SCORE-kolumnens tooltip ingick inte i leveransen — be om den vid tillfälle. AI FEATURES-kolumnen (toggle, sedd 7 juli) odokumenterad — tooltip beställd, se beställningssedeln #9.)*

## AKTUELLT LÄGE (senaste kända värde per sida × vy — datumet är del av värdet)
> **Mätprincip (§11.1):** LYNX uppdaterar per (sida × vy), aldrig i sajt-svep → en rads celler kan ha olika ålder. **"Sedd"-kolumnen daterar hela raden; celler med avvikande ålder får egen notering.** Markörer: **`FÖRE:`** = fryst baseline, skrivs ALDRIG över — ny avvikande mätning skrivs som `FÖRE:x → y ·datum` + mät-loop §10 · **`⟳`** = vyn blank i senaste dump = omanalys pågår (senaste kända värde står kvar; ägarbesked 7 juli: be EJ om omkörning) · **(stale)** på AI COPY-badge = crawlen äldre än vår live-text · år 2026 implicit i datum.
> **Uppdateringsregler vid ny dump:** samma värde → uppdatera bara Sedd-datumet · nytt värde → skriv nya värdet (gamla finns i arkiv + git) · blank där värde funnits → lägg `⟳datum` (skriv ALDRIG över värde med blank) · kolumn ej synlig i dumpen → rör inte cellen · **Status/not ändras bara vid statusbyte** — prosa/prediktioner bor i §11.1 och loggen. **Sida som saknas i tabellen = ingen data efter 30 juni** → se 30 juni-inventeringen i arkivet.

**Flagg-gruppen (AI COPY ≥ MODERATE i senaste vyn):**
| URL | VAL | SCORE | AI COPY | AIQ | GAPS ⚡/💡 | KW | WORDS | CLICKS | P.PRICE | Sedd | Not (status: §11.1) |
|---|---|---|---|---|---|---|---|---|---|---|---|
| /hudproblem/hudforandringar/ | 10 | 17 (analys ~18/4) | 🔴 SIGNIFICANT (stale) | OK | 3/2 | 7 | 968 | 0 | – | 10/7 08:42 | → §11.1 |
| /ytliga-blodkarl.php | 41 | **74 färsk** (6/7) | 🔴 SIGNIFICANT (stale) | OK | 0/0 | 151 | 919 | 51 | – | 10/7 08:42 | → §11.1. **Öppet:** väntar badge-refresh |
| /hudbehandlingar/ipl/ | 34 | ⟳10/7 (aldrig färsk) | 🟠 MODERATE (stale) | OK | –/– | 17 | 1 006 | 13 | HIGH | 10/7 08:42 | → §11.1 |
| /hudproblem/bristningar/ | 19 | **FÖRE:63** (6/7 färsk) | 🟠 MODERATE (pre-rewrite) | OK | 0/0 | 69 | 791 | 2 | – | 10/7 08:42 | → §11.1 |
| /hudproblem/oonskat-har/ | 11 | ⟳10/7 | 🟠 MODERATE (stale) | OK | –/– | 11 | 759 | 0 | – | 10/7 08:42 | → §11.1 |
| /ipl-rosacea.php | 54 | **60 färsk** (6/7) | 🟠 MODERATE (stale) | OK | 3/1 (texter: lynx-gaps) | 18 | 823 | 10 | HIGHEST | 10/7 08:42 | → §11.1. **Öppet:** väntar badge-refresh (oförändrad 8/7 16:54 → 10/7 08:42) |
| /microdermabrasion.php | 29 | 50 (2/7) ⟳10/7 | 🟠 MODERATE (stale) | OK | –/– | 5 | 536 | 3 | LOWEST (var MID) | 10/7 08:42 | → §11.1 |
| /pigmentflackar.php | 32 | **FÖRE:73** (7/7; AI STYLE 55) | 🟠 MODERATE ⟳ (8/7: raden tillbaka i Pages men cellen skymd; **10/7 08:42: SAKNAS i MODERATE-blocket i AICOPY-sorterad vy — badge-flytt ELLER omanalys; SLIGHT-delen trunkerad ⇒ badgen fortfarande OLÄST**) | OK | 0/0 | 232 | 946 | 19 | – | 8/7 18:13 (VAL/SCORE) | → §11.1 (logg #14) |
| /rhinophyma-rosacea.php | 35 | **74 (8/7 18:13 — men PRE-V2-crawl, se nedan)** | **🔵 SLIGHT** (8/7 18:11, *"Last update: 08 Jul"* = V2-text ✓) | OK | 0/0 | 46 | 788 | 15 | – | 8/7 18:13 | → §11.1. **SCORE-vyn har EJ läst V2:** alla 13 delvärden identiska med FÖRE, tredje replikationen ⇒ `"Analyzed just now"` ≠ färsk crawl (`lynx-score` slutsats E). **AI STYLE 70 är fortfarande ett FÖRE.** |
| /solskadad-hy.php | 31 (8/7) | – (omanalys) | **🔵 SLIGHT** (8/7) | OK | –/– | 33 | 560 | 5 | – | 8/7 | → §11.1 |
| /mogen-hy.php | 10 (8/7) | – (omanalys) | **🔵 SLIGHT** (8/7) | OK | –/– | 8 | | | – | 8/7 | → §11.1. 13:58-frånvaron 7/7 var inte badge-flytt utan omanalys — bekräftat |
| /om-oss.php | 7 (6/7) | 17 (analys apr) | 🔵 implicerat (borta ur MODERATE 6/7; badge-bekräftelse beställd) | OK | 2/2 | 2 | | | – | 6/7 | → §11.1. **Öppet:** badge-bekräftelse |

**Övriga sidor med data efter 30 juni (alfabetiskt):**
| URL | VAL | SCORE | AI COPY | AIQ | GAPS ⚡/💡 | KW | WORDS | CLICKS | P.PRICE | Sedd | Not (status: §11.1) |
|---|---|---|---|---|---|---|---|---|---|---|---|
| / (homepage) | 41 | **65 färsk** | 🔵 SLIGHT | POOR | 0/0 | 286 | 223 | 381 | – | 10/7 08:42 | ORÖRD — Tier 1 #1 (§9.1) |
| /acne.php | 29 | **47 färsk** | 🔵 | OK | 2/1 | 102 | 1 354 | 5 | – | 10/7 08:42 | → §11.1 (10 🔴-block omskrivna) |
| /acne-ansikte.php | 31 | – | 🔵 (crawl 5/7) | OK | –/– | 52 | 461 | 6 | – | 10/7 08:42 | → §11.1 (intro-experimentet har egen delrad där) |
| /acnearr.php | 41 | **74 färsk** (0→74) | 🔵 | OK | 1/0 | 122 | 964 | 78 | – | 10/7 08:42 | ORÖRD — Tier 2; näst mest klickade |
| /acnebehandling.php | 12 | – | 🔵 | OK | | 6 | 765 | 0 | – | 10/7 08:42 | ORÖRD (facit ✅) |
| /acne-brost.php | 50 | 73 | 🔵 | OK | 2/1 | 45 | 326 | 21 | – | 8/7 18:13 | ORÖRD |
| /acne-myter.php | 25 | – | 🟢 HUMAN | OK | | 8 | 130 | 1 | – | 7/7 | ORÖRD (utility) |
| /acne-rygg.php | 61 | **69 färsk** (0→69) | 🔵 | OK | 2/1 | 46 | 638 | 51 | – | 8/7 18:13 | Fas 3b-kö (facit ✅) |
| /acne-scars.php | 27 | – | 🔵 | OK | | 15 | 350 | 3 | – | 7/7 | ORÖRD |
| /acne-vulgaris.php | 9 | – | 🔵 | OK | | 0 | 246 | 0 | – | 7/7 | ORÖRD |
| /aldersflackar.php | 22 | – | 🔵 | OK | | 10 | 472 | 5 | – | 7/7 | ORÖRD |
| /alma-harmony-xl-pro.php | 21 | – | 🔵 | OK | | 5 | 984 | 2 | HIGHEST | 7/7 | ORÖRD |
| /alma-hybrid-co2-laser.php | 27 | **60 färsk** | 🔵 | OK | 2/1 | 55 | 1 424 | 7 | MID | 7/7 | ORÖRD |
| /ansiktsbehandlingar.php | 21 | – | 🔵 | OK | | 15 | 966 | 1 | HIGHEST | 7/7 | ORÖRD |
| /atrofiska-arr.php | 42 | – | 🔵 | OK | | 18 | 448 | 14 | – | 7/7 | ORÖRD |
| /behandla-acnearr.php | 42 | – | 🔵 | OK | | 15 | 630 | 7 | – | 7/7 | ORÖRD |
| /behandla-finnar-arr.php | 9 (var 8) | – | 🔵 | OK | | 2 | 687 | 0 | – | 10/7 16:22 | ORÖRD |
| /behandla-pigmentflackar.php | 10 | – (aldrig satt) | 🔵 (crawl 7/7 av VÅR text) | GOOD | –/– | 13 | 532 | 0 | – | 10/7 16:22 | → §11.1. **Öppet:** färsk SCORE + 4 micro-fix-block |
| /behandla-stora-porer.php | 46 | **63 färsk** | 🔵 | OK | 1/1 | 39 | | | – | 10/7 16:22 | ORÖRD |
| /behandlingar.php | 14 | – | 🔵 | OK | –/– | 0 | 275 | 1 | – | 10/7 08:42 | Redirect → /hudbehandlingar/; **STATUS 301 ✓** |
| /blandhy.php | 11 | **24 färsk** | | | | | | | | 10/7 16:22 | Första data efter 30/6 (AICOPY-vyn b–f; endast VAL/SCORE synliga). **Lägsta-klassen (jfr roaccutan/melasma 23) — nedbrytning vid tillfälle** |
| /blodprickar.php | 59 | 75 | 🔵 | OK | 2/1 | 169 | | | – | 10/7 16:22 | ORÖRD — Tier 2. **SCORE-popup 10/7 → `lynx-score`** (AI STYLE 85/Human-like 85) |
| /cryopen.php | 42 | **60 färsk** | | | | | | | | 10/7 16:22 | Första data efter 30/6. **SCORE-popup 10/7 → `lynx-score`** (CQ-anomalin replikerad · AI STYLE 85/Human-like 85) |
| /cystisk-acne.php | 59 (var 58) | 70 | 🔵 | OK | 0/0 | 21 | | | – | 10/7 16:22 | ORÖRD |
| /dermapen.php | 43 | **60 färsk** | | | | | | | | 10/7 16:22 | Första data efter 30/6 (AICOPY-vyn; endast VAL/SCORE synliga) |
| /djuprengoring.php | 55 | 75 | 🔵 | OK | 1/1 | 7 | | | HIGH | 10/7 16:22 | ORÖRD |
| /elevbehandlingar.php | 10 | 18 | 🟢 HUMAN | OK | 0/0 | 4 | | | HIGHEST | 7/7 | ORÖRD |
| /fet-hy.php | 17 | **60 färsk** | | | | | | | | 10/7 16:22 | Första data efter 30/6 (AICOPY-vyn; endast VAL/SCORE synliga) |
| /finnar-ansikte.php | 12 | – | | | | | | | | 10/7 16:22 | Första data efter 30/6 (AICOPY-vyn; endast VAL/SCORE synliga) |
| /finnar-behandling.php | 24 | – | 🔵 | OK | | 5 | 621 | 0 | – | 7/7 | ORÖRD |
| /finnar-brost.php | 20 | **72 färsk** | 🔵 | OK | 0/2 | 10 | 375 | 1 | – | 7/7 | ORÖRD |
| /finnar-gravid.php | 39 | **69 färsk** | 🔵 | OK | 3/0 | 42 | 811 | 20 | – | 7/7 | ORÖRD |
| /finnar.php | 19 | – | | | | | | | | 10/7 16:22 | Första data efter 30/6 (AICOPY-vyn; endast VAL/SCORE synliga) |
| /fodelsemarken.php | 31 | – | 🔵 | OK | | 58 | 513 | 24 | – | 7/7 | ORÖRD |
| /fragor-svar.php | 22 | **56 färsk** | 🟢 HUMAN | **POOR (var OK)** | 0/0 | 8 | 114 | 1 | – | 7/7 | §9-tråd: AIQ-försämring (wave 2-sida, EJ attribuerad) |
| /hormonell-acne.php | 34 | **70 färsk** | 🔵 | OK | 2/2 | 37 | 335 | 0 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /hudbehandlingar/ | 10 | – | 🔵 | OK | | 13 | | | – | 7/7 | ORÖRD |
| /hudbehandlingar/ansiktsbehandling/akne/ | 8 | – | 🔵 | OK | | 2 | | | HIGHEST | 7/7 | ORÖRD |
| /hudbehandlingar/ansiktsbehandling/hudterapeutens-val/ | 4 | – | 🔵 | OK | | 0 | | | HIGHEST | 7/7 | ORÖRD |
| /hudbehandlingar/ansiktsbehandling/rosacea/ | 11 | – | 🔵 | OK | | 6 | | | HIGHEST | 7/7 | ORÖRD (fanns EJ i tidigare dumpar — sidregister B4 löst?) |
| /hudbehandlingar/dermabrasion/ | 25 | – | 🔵 | OK | | 4 | 711 | 5 | LOWEST | 7/7 | ORÖRD |
| /hudbehandlingar/estetiska-injektionsbehandlingar/ | 8 | – | 🔵 | OK | | 7 | | | LOWEST | 7/7 | ORÖRD |
| /hudbehandlingar/estetiska-injektionsbehandlingar/fillers/ | 8 | – | 🔵 | OK | | 16 | | | HIGHEST | 7/7 | ORÖRD (rad-mappning 12:37 osäker) |
| /hudbehandlingar/laser-mot-hudproblem/ | 15 | **60 färsk** | 🔵 | OK | 2/1 | 27 | | | HIGH | 7/7 | ORÖRD |
| /hudbehandlingar/pormaskar/ | 8 | – | 🔵 | OK | | 4 | | | – | 7/7 | ORÖRD |
| /hudbehandlingar/skinbooster/ | 24 | – | 🔵 | OK | | 27 | 862 | 3 | HIGHEST | 7/7 | ORÖRD |
| /hudbehandlingar/vaxning/ | 9 | – | 🔵 | OK | | 7 | | | HIGH | 7/7 | ORÖRD |
| /hudproblem/ | 26 | **60 färsk** | 🔵 | OK | 0/0 | 5 | 731 | 0 | – | 7/7 | ORÖRD |
| /hudterapeut/ | 26 | – | 🔵 | OK | | 12 | 194 | 11 | – | 7/7 | ORÖRD |
| /hydrafacial.php | 59 | 63 | 🔵 | OK | 0/0 | 14 | | | HIGHEST | 8/7 18:13 | ORÖRD |
| /infuzion.php | 22 | – | 🔵 | OK | | 14 | 477 | 2 | HIGHEST | 7/7 | ORÖRD |
| /inflammation-acne.php | 31 | – | 🔵 | OK | | 42 | 342 | 6 | – | 7/7 | ORÖRD |
| /ipl-pigmentflackar.php | 33 | – | 🔵 | OK | | 14 | 856 | 2 | HIGHEST | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /ipl-ytliga-blodkarl.php | 28 | – | 🔵 | OK | | 23 | 888 | 2 | – | 7/7 | ORÖRD |
| /kemisk-peeling.php | 29 | **60 färsk** | 🔵 | OK | 2/1 | 51 | 1 327 | 10 | HIGHEST | 7/7 | ORÖRD |
| /komedoner.php | 37 | – | 🔵 | OK | | 5 | 708 | 0 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /kontakt.php | 25 | 60 | 🔵 | POOR | 0/0 | 2 | 152 | 12 | – | 7/7 | ORÖRD (utility) |
| /laser-acne.php | 28 | – | 🔵 | OK | | 9 | 253 | 3 | LOWEST | 7/7 | ORÖRD |
| /mallorca-acne.php | 53 | 68 | 🔵 | OK | 0/0 | 11 | | | – | 8/7 18:13 | ORÖRD |
| /melasma.php | 31 | 23 (färsk-låg) | 🔵 | OK | 0/2 | 27 | 583 | 10 | – | 7/7 | ORÖRD; låg-änden — nedbrytning beställd (lynx-score) |
| /microneedling.php | 44 (var 66 8/7) | **FÖRE:60 färsk** (8/7; popup-bekräftad 10/7) | 🔵 | OK | 0/1 | 63 | | | HIGHEST | 10/7 09:40 (VAL/SCORE) | Fas 3b-kö. **⛔-förvillkoret UPPFYLLT 10/7 09:40: komplett SCORE-popup → `lynx-score`** (AI STYLE-FÖRE 60). REWRITE-SPEC i `lynx-examples` |
| /microneedling-acne.php | 41 | – | 🔵 | GOOD | | 6 | 299 | 7 | HIGHEST | 10/7 09:40 (VAL) | ORÖRD |
| /microneedling-acnearr.php | 48 | **60 färsk** (10/7) | | | | | | | | 10/7 09:40 (VAL/SCORE) | ORÖRD — ny rad; övriga kolumner skymda av popupen |
| /microneedling-stora-porer.php | 29 | – | 🔵 | OK | | 3 | 267 | 2 | HIGHEST | 10/7 09:40 (VAL) | ORÖRD |
| /milier.php | 39 | 75 | 🔵 | OK | 0/0 | 164 | 841 | 35 | – | 7/7 | ORÖRD — Tier 2 |
| /milierbehandling.php | 50 | **60 färsk** (8/7; var –) | 🔵 | OK | 0/0 | 33 | | | – | 8/7 18:13 | ORÖRD — SCORE satte sig själv (mätregel 5) |
| **"missing localized" [DRAFT]** | 27 | – | – | – | | **616** | | 0 | – | 7/7 | **§9-tråd: vad är raden?** (enda med AI FEATURES AV) |
| /mjalleksem.php | 24 | – | 🔵 | OK | | 28 | 751 | 2 | – | 7/7 | ORÖRD |
| /perioral-dermatit.php | 32 | – | 🔵 | OK | | 179 | 881 | 16 | – | 8/7 18:13 (VAL/SCORE) | Tier 1 #4 (facit saknas) |
| /permanent-harborttagning.php | 16 (6/7) | – | 🔵 | OK | | 71 (30/6) | | | – | 6/7 | ORÖRD |
| /pormaskar.php | 49 | 76 | 🔵 | OK | 1/0 | 124 | | | – | 7/7 | ORÖRD — Tier 2 |
| /pormaskar-rygg.php | 36 | – | 🔵 | OK | | 12 | 357 | 12 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /porrengoring.php | 48 (6/7) | – | 🔵 | OK | | 9 (30/6) | | | – | 6/7 | ORÖRD |
| /portomning.php | 65 | 60 | 🔵 | OK | 0/0 | 23 | | | HIGHEST | 8/7 18:13 | Fas 3b-kö (facit ✅) |
| /postinflammatorisk-hyperpigmentering.php | 38 | – | 🔵 | GOOD | | 21 | 560 | 5 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /presentkort.php | 19 | – | 🔵 | OK | | 3 | 283 | 0 | – | 7/7 | ORÖRD |
| /problemhy.php | 21 | – | 🔵 | OK | | 5 | 972 | 2 | – | 7/7 | ORÖRD |
| /prx-t33.php | 21 | – | 🔵 | OK | | 20 | 765 | 3 | LOWEST | 7/7 | ORÖRD |
| /resultat-acne.php | 35 | **55 färsk** | 🔵 | OK | 0/0 | 0 | 224 | 0 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD (utility) |
| /resultat-finnar-arr.php | 26 | – | 🔵 | OK | | 2 | 235 | 0 | – | 7/7 | ORÖRD |
| /resultat-pormaskar.php | 24 | – | 🔵 | POOR | | 2 | 236 | 3 | – | 7/7 | ORÖRD |
| /resultat-rosacea.php | 50 | 44 | 🔵 | OK | 0/0 | 6 | | | – | 8/7 18:13 | ORÖRD |
| /roaccutan.php | 50 | 23 (färsk-låg) | 🔵 | OK | 0/0 | 57 | | | – | 7/7 | ORÖRD (§5-juridik-guard); låg-änden |
| /rosacea.php | 27 | – | 🔵 | OK | | 201 | 941 | 5 | – | 7/7 | Tier 1 #3 (facit saknas); KW-drift 221→201 |
| /seborre.php | 36 | – | 🔵 | OK | | 161 | 939 | 10 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD — Tier 2 |
| /seborroisk-keratos.php | 64 | 74 | 🔵 | GOOD | 0/0 | 107 | | | – | 8/7 18:13 | Fas 3b-kö (facit ✅) |
| /stress-acne.php | 37 | – | 🔵 | OK | | 12 | 582 | 5 | – | 7/7 | ORÖRD |
| /stress-finnar.php | 25 | 67 | 🔵 | OK | 0/0 | 19 | 476 | 2 | – | 7/7 | ORÖRD |
| /tonarsacne.php | 36 | **70 färsk** | 🔵 | OK | 0/0 | 14 | 312 | 3 | – | 8/7 18:13 (VAL/SCORE) | ORÖRD |
| /torr-hy.php | 30 | **74 färsk** | 🔵 | OK | 0/0 | 152 | 1 107 | 16 | – | 7/7 | ORÖRD |
| /vakuumsug-pormaskar.php | 31 | **60 färsk** | 🔵 | OK | 0/0 | 6 | 270 | 0 | HIGHEST | 7/7 | ORÖRD |
| /varumarken/splendor-x/ | 30 | **79 färsk — SAJT-TOPP** | 🔵 | OK | 0/0 | 16 | 707 | 9 | HIGH | 7/7 | ORÖRD (Brand; över 75–77-taket — lynx-score E ✓) |
| /vita-pormaskar.php | 40 | **70 färsk** | 🔵 | OK | 0/0 | 9 | 347 | 3 | – | 7/7 | ORÖRD |
| /vuxenacne.php | 39 | – | 🔵 | OK | | 21 | 382 | 4 | – | 7/7 | ORÖRD |

*Senast inmatad dump: **8 juli kl. 10:45** — AICOPY-vy, 13 rader, skuren (rådata + fynd i `lynx-data-archive.php`). **Fyra sidor har lämnat MODERATE; SLIGHT-raderna ej sedda → ingen attribution ännu** (§9-tråd).*
*Föregående: 7 juli kl. 14:16 (fynd i logg #16).*

## BASELINE-REGISTER (öppna mätningar — en rad per FÖRE som väntar på EFTER; arkiveras först när mätningen är STÄNGD)
> Kanonisk mättabell med prediktioner = **§11.1**. Detta register skyddar FÖRE-värdena som inte får egen tabellcell. Gamla skalans FÖRE för EJ omskrivna sidor = 30 juni-inventeringen i arkivet (jämför ALDRIG gammal↔färsk, §11.1).

- **KW/WORDS/CLICKS-FÖRE, hela flagg-gruppen** = cellvärdena daterade 7/7 13:58 ovan (§10.0 punkt 2–3, krävs för GSC-passet).
- **AI STYLE-FÖRE (färsk skala):** pigmentflackar **55** · rhinophyma **70** (7 juli, lynx-score) — jämför vid post-6 juli-crawl.
- **SCORE-FÖRE (färsk skala):** bristningar **63** (6/7) · pigmentflackar **73** (7/7) · rhinophyma **74** (6+7/7) · microdermabrasion **50** (2/7) · microneedling **50** (2/7) → **60** (8/7; **komplett popup-nedbrytning 10/7 09:40 → `lynx-score`, AI STYLE-FÖRE 60**).
- **Block-medel-FÖRE (facit, → lynx-examples):** bristningar 1,92 · mogen-hy 1,57 · oonskat-har 1,77 · microdermabrasion 1,82 · pigmentflackar 2,06 · solskadad/rhinophyma (facit apr) — prediktion 🟠→🔵 för samtliga (§11.1).
- **acne-ansikte intro-experimentet:** intro-blocket 🟠 (5/7-facit) → prediktion 🔵 — dömer §2-intro-hypotesen (§11.1).
- **EFTER-mätningar hittills (metoden 3/3):** acne-ansikte 🔴→🔵 (5/7) · om-oss 0 flagg (5/7) · behandla-pigmentflackar 🔴→🔵 + per-block 2,38→1,38 (7/7).

## SIDREGISTER (ägar-beställt 2 juli): sidor I LYNX vs sidor SOM SAKNAS
**Ägarbesked 2 juli (scope):** (1) **ALLA sidor i LYNX ska gås igenom** — vissa gjorda, resten framöver. (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS.** (3) Metod: URL-kolumnen ur inventerings-dumpar korsad mot repots publika sidor (repo = källa; suddiga läsningar upplösta mot repot).

**A. I LYNX OCH i repot (≈112 sidor — hela genomgångs-listan):** flaggade 14 (alla ✅ omskrivna + live) + rot-sidor + katalog-sidor — full lista i arkivets 2 juli-version (oförändrad); aktuell status per sida i AKTUELLT LÄGE ovan + `lynx-backlog.php` §8/§9.

**B. SAKNAS i LYNX-dumparna men FINNS i repot (håll utkik):**
1. `/varumarken/hifu/` — nyligen tillagd (d3257a9a) → bevaka att LYNX indexerar den.
2. `/avbokningspolicy.php` + 3. `/karriar.php` — "blanka" 30 juni; syns inte i vyerna.
4. `/hudbehandlingar/ansiktsbehandling/rosacea/` — **SEDD 7 juli 12:37 (VAL 11)** → troligen löst; verifiera vid nästa fullvy.

**C. I LYNX men INTE i repot (utred/städa):**
1. `/varumarken/powerlite-photonova/` (SCORE 88 = sajtens högsta) — lever på live utan repo-källa → §9-utredning.
2. `/behandlingar.php` — LÖST: redirect till `/hudbehandlingar/` (STATUS 301 bekräftad 7 juli).
3. **"missing localized" [DRAFT]-raden (KW 616)** — NY 7 juli → §9-utredning (LYNX-systemrad?).

## Beställningssedel — vad vi HAR och VILL HA (LYNX saknar export; ägaren matar in på begäran)
**HAR (pekare):** Pages-inventeringar 30 juni + juli-banden (arkivet + AKTUELLT LÄGE) · 13+ färska SCORE-nedbrytningar + modell LÖST (lynx-score) · per-block-facit för HELA flagg-listan + Fas 3b-kön + 3 EFTER-facit (lynx-examples) · AIQ-listor 7 sidor (lynx-questions) · gap-texter (lynx-gaps).

**VILL HA (be när sidan/frågan blir aktuell):**
1. 🟡 SCORE-nedbrytningar: låg-änden (roaccutan 23/melasma 23) + splendor-x-popupen (79 — skärper E-mönstret) + **SCORE-kolumnens tooltip**.
2. ✅ ~~komponent→Overall-viktningen~~ — LÖST: Overall = medel(CQ-badge, EEAT-badge), 15/15 (lynx-score A).
3. 🟡 AIQ-detalj: **fragor-svar (OK→POOR, §9-tråd)** · microdermabrasion (GOOD→OK-frågan) · oonskat-har (saknas helt).
4. 🟡 per-block-facit: Tier 1-SLIGHT (rosacea, perioral-dermatit) före rewrite + EFTER-facit löpande när crawlen tar wave 2.
5. ❌ Gap-texter vid behov (ipl-rosacea 💡-suggestionens text saknas — "View gap details").
6. ❌ Faktiska sökords-POSITIONER per sida (för §6-ranking-skydd; GSC är facit).
7. ❌ "Analyzed X ago" + refresh-kadens per vy (mätprincipen kräver datum per cell).
8. ❓ EG SCORE — fortfarande "–" överallt; bevaka.
9. ❓ **AI FEATURES-kolumnen (NY 7 juli):** toggle, PÅ på alla utom DRAFT-raden — be om tooltip (vad styr den?).
