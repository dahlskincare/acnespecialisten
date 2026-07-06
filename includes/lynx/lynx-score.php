<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX SCORE — nedbrytningar per sida (kolumnfil)

> **SCORE-kolumnens datafil** (filkarta i `lynx-data.php`). Innehåller alla SCORE-nedbrytningar (Overall · CONTENT QUALITY [Base/Depth/Evidence/Language/Readability] · E-E-A-T [Experience/Expertise/Authority/Trust] · AI STYLE [Human-like]). Tolkningsmodell: playbook **§1.2 (OMPRÖVAS)** — ⚠️ LYNX verkar ha bytt version/skala: **GAMLA analyser** ("Analyzed >30 days ago") passar multiplikativa formeln Overall ≈ CQ×EEAT×AI/3640 (6/6); **FÄRSKA analyser** passar ≈ medel(CQ-badge, EEAT-badge). Jämför ALDRIG färsk mot gammal (mätregel §11.1). SCORE 0 = trasig/tom analys → be om omkörning. (SCORE-kolumnens officiella tooltip saknas ännu — beställd.)

## Färska analyser (6 jul 2026, "Analyzed just now") — 🎯 FÖRSTA RIKTIGA AI STYLE-DATAN (>30) + EEAT-anomalin bekräftad
> Ägaren skickade 2 SCORE-popups, båda Overall **74**, båda "Analyzed just now". De två sidorna med SCORE 74 i listan = **rhinophyma-rosacea** (skärmbild 1, raden highlightad) + **ytliga-blodkarl** (skärmbild 2, andra 74:an). ⚠️ Skärmbild 2:s rad-highlight ej 100 % läsbar → tilldelning bekräftas med ägaren, men sub-profilen stödjer den (se nedan).

| Komponent | rhinophyma (74) EJ omskr.¹ | ytliga-blodkarl (74) OMSKR.² | ipl-rosacea (60) OMSKR.³ | hudforandringar (17) GAMMAL⁴ |
|---|---|---|---|---|
| **Overall** | **74** | **74** | **60** | **17** |
| CONTENT QUALITY (badge) | 85 | 86 | **60** | 52 |
| – Base Quality | 85 | 85 | 88 | 46 |
| – Depth | 84 | 91 | 88 | 69 |
| – Evidence | 76 | 74 | 82 | 31 |
| – Language | 95 | 92 | 95 | 52 |
| – Readability | 90 | 88 | 92 | 40 |
| CQ sub-medel | ≈86 | ≈86 | **≈89** | ≈48 |
| E-E-A-T (badge) | **60** | **60** | **60** | 49 |
| – Experience | 85 | 85 | 85 | 35 |
| – Expertise | 80 | 80 | 80 | 55 |
| – Authority | 80 | 75 | 85 | 45 |
| – Trust | 85 | 85 | 90 | 60 |
| EEAT sub-medel | ≈82,5 | ≈81 | ≈85 | ≈49 |
| **AI STYLE** | **70** | **75** | **75** | **25** |

¹ rhinophyma: min de-AI på STAGING (ej live) → LYNX läste GAMLA texten = **FÖRE-baseline nya skalan**. Main-push + omanalys → ren FÖRE→EFTER.
² ytliga-blodkarl: omskriven PR #236 (live 1 jul) = **EFTER**. Gammal-skala-FÖRE (30 jun) 22/CQ52/EEAT58/AI25 — ej jämförbar (skalbyte).
³ ipl-rosacea: omskriven PR #236 (live 1 jul) = **EFTER**. Gammal-skala-FÖRE 39. ⚠️ **CQ-badge 60 trots CQ-subs-medel 89** = den avgörande anomalin (se slutsats 3).
⁴ hudforandringar: "Analyzed 79 days ago" = GAMMAL (ej refreshad sedan omskrivningen) → FÖRE-text/gammal skala; multiplikativ 52×49×25/3640 = 17,5 ≈ 17 ✓.

**+ microneedling.php (60, "just now" 6 jul — KOMPLETT nu, 2 jul-anomalin satt sig):** Overall 60 · CQ-badge **60** (Base 92, Depth 94, Evidence 70, Language 95, Readability 90 = sub-medel **88,2**) · EEAT-badge **60** (Exp 85, Expertis 80, Auth 85, Trust 90 = 85) · AI STYLE **75**. **2:a exakta bekräftelsen av CQ-frikopplingen** (CQ-badge 60 vs subs 88 — precis som ipl-rosacea) OCH **60 = medel(60,60) EXAKT** OCH **AI 75 ute ur Overall**. Dessutom: 2 jul hade micro Base 0/Language 0/AI 0/Overall 50 (partiell) → 6 jul komplett → **bekräftar "SCORE 0/nollor = ofullständig analys som sätter sig", inte dålig sida.** (Sidoräkning m-spannet: milierbehandling **0** = trasig, be om omkörning · milier 75 · mallorca-acne 68 · melasma 23 · om-oss 17 gammal.)

**🎯 MODELLSLUTSATSER 6 jul (§1.2-testprotokollet BESVARAT):**
0. **⚠️ MÄTPRINCIP (ägaren 6 jul — GÄLLER ALL FÖRE→EFTER):** LYNX uppdaterar i STEG, oberoende av våra deploys — en sida/vy/kolumn kan vara BLANK medan den omanalyseras (pigmentfläckar-mysteriet = detta, INTE tier-flytt) och komma tillbaka med nytt värde. **En "Analyzed just now" är INTE bevis på före ELLER efter vår ändring** — den kan lika gärna vara gammal text omanalyserad. **Attribuera FÖRE→EFTER ENDAST när vi har två analyser med FAKTISKT OLIKA värden (en gammal + en ny som skiljer sig).** Anta aldrig "nästa analys efter min push = EFTER" — vänta på observerad delta. Därför är nedan-tabellens "EFTER"-etiketter PROVISORISKA: sidorna är analyser av nuvarande live-text, men utan matchande färsk-skala-FÖRE kan deltat inte attribueras till oss.
1. **Overall = medel(CQ-badge, EEAT-badge) — nu 6/6 färska, ipl-rosacea + micro EXAKT:** rhino medel(85,60)=72,5≈74 · ytliga medel(86,60)=73≈74 · **ipl-rosacea medel(60,60)=60 EXAKT** · **micro medel(60,60)=60 EXAKT** · (porto 60 · sebo 72,5). **Färsk-formeln bekräftad — badge-medlet styr Overall, inte sub-medlet.**
2. **AI STYLE ingår EJ i Overall (avgjort av ipl-rosacea + micro):** båda har AI STYLE 75 men Overall 60 = medel(60,60) UTAN AI. Vore AI med: medel(60,60,75)=65≠60. **AI STYLE utesluts ur Overall.** ⇒ de-AI:ns Overall-payoff går INTE via AI STYLE — AI STYLE-vinsten realiseras i AI COPY-flaggan (§1.1) + som egen kolumn.
3. **🔴🔴 DEN STORA UPPTÄCKTEN — CQ-badge OCH EEAT-badge är FRIKOPPLADE från subvärdena på färska analyser (nu 2 CQ-belägg):** ipl-rosacea CQ-badge **60** vs subs-medel **89**; micro CQ-badge **60** vs subs-medel **88** — badgen ~29 punkter UNDER subsen på BÅDA. EEAT-badge = **60 på alla 6 färska** trots subs-medel 81–85. **De CQ/EEAT-badgevärden som styr Overall är INTE medel av subvärdena — subsen är en separat granulär vy.** Förklarar varför Overall kan vara 60 på en sida med subvärden 82–95. **KRITISK följd: att höja subvärden via copy (Language/Evidence/Readability) höjer INTE garanterat CQ-badgen → SCORE-Overall-payoffen av de-AI är OSÄKER, troligen liten.** Vår bevisade vinst ligger i AI COPY-flaggan (§1.1, kausal 6 jul) + AIQ (§1.5), inte i SCORE-Overall. *(Varför CQ-badge 60 på ipl/micro men 85–86 på rhino/ytliga vid liknande subs = OKÄNT. Notera: ipl/micro Overall = 60, rhino/ytliga = 74 → CQ-badge ser ut att FÖLJA Overall snarare än subsen. Kan betyda att popupens CQ/EEAT-badge egentligen visar en Overall-härledd siffra, inte en oberoende komponent. BEVAKA.)*
4. **EEAT är INTE en copy-spak (bekräftat):** EEAT-badge sitter på 60 på var enda färsk sida oavsett innehåll → §1.2:s gamla "E-E-A-T näst lägst = andra spaken efter AI STYLE" STRYKS. Bärs troligen av delade widgets (specialister/recensioner/trust) = sajtkonstant. Rör aldrig copy för att jaga EEAT.
5. **AI STYLE nya skalan = 50–75 (när beräknad):** sebo 50 · rhino 70 (ej omskr.) · ytliga/ipl 75 (omskr.). Gamla skalans 20–30 var ANNAN skala (hudforandringar 25 = gammal). Svag riktning: omskrivna sidor 75 vs ej-omskriven 70 (+5), men rhino ligger redan högt före vår de-AI → **rhinos main-push blir det rena FÖRE→EFTER-testet av de-AI→AI STYLE.**
6. **Evidence = CQ:s lägsta sub (74–82) — enda tydliga CQ-sub-spaken kvar** (Language 92–95, Readability 88–92, Base 85–88, Depth 84–91 nära tak). Men se slutsats 3: sub-höjning ≠ badge-höjning, så även Evidence-payoffen är osäker. Höj Evidence för substansens skull (§5-filtrerat: 30-år, namngivna maskiner, Från-pris), inte för garanterad SCORE.

## Färska analyser (2 jul 2026, "Analyzed 2 minutes ago")

**microneedling.php — ⚠️ ANOMALI, troligen PARTIELL/pågående analys:**
Overall **50** · CQ 41 (Base **0**, Depth **89**, Evidence **76**, Language **0**, Readability **0**) · E-E-A-T 60 (Exp 85, Expertis 80, Auth 85, Trust **90**) · AI STYLE **0** (Human-like **0**).
⚠️ Tre skäl att misstänka partiell data: (1) Overall 50 med AI STYLE 0 motsäger gamla §1.2-formeln (produkten ger 0); (2) CQ 41 ≠ medel av sina subs (33); (3) nollorna sitter på komponenter som har värden på alla andra sidor. **→ be ägaren om ny skärmdump när analysen satt sig; justera INTE §1.2 på denna datapunkt.** (Depth 89 + Evidence 76 = högsta uppmätta hittills om de står sig. Overall 50 ≈ medel(41, 60) = 50,5 ✓ färsk-formeln.)

**Fler färska nedbrytningar (2 jul; micro/porto/sebo färska, acne-rygg "31 days ago"):**
| Komponent | portomning (60) | seborroisk-keratos (74) | acne-rygg (0) |
|---|---|---|---|
| CONTENT QUALITY | 60 | 85 | 0 |
| – Base Quality | 95 | 85 | 0 |
| – Depth | 93 | 84 | 0 |
| – Evidence | 81 | 74 | 0 |
| – Language | 96 | 95 | 0 |
| – Readability | 98 | 90 | 0 |
| E-E-A-T | 60 | 60 | 0 |
| – Experience | 85 | 85 | 0 |
| – Expertise | 80 | 80 | 0 |
| – Authority | 85 | 75 | 0 |
| – Trust | 90 | 85 | 0 |
| AI STYLE (Human-like) | 0 | **50** | 0 |

**Modellimplikationer 2 jul (→ §1.2 OMPRÖVAS, resonemang i playbook §11):**
1. **SCORE 0 = trasig/tom analys, inte dålig sida** (acne-rygg 0 på ALLT; seborroisk 0→74 vid omkörning) → re-analysera 0-sidor innan slutsats (acnearr, stora-porer, cystisk-acne, djuprengoring, resultat-*, microneedling-acnearr m.fl.).
2. **"39-taket" brutet UTAN våra ändringar** (sebo 74, porto 60, micro 50) → ny version/skala; 30 jun-baselines EJ jämförbara — mät färsk-mot-färsk.
3. **AI STYLE 0 på färska = troligen "ej beräknad än"**; sebo 50 = första uppmätta >30.
4. **Aggregering ändrad/oklar på färska:** EEAT-badge 60 ≠ sub-medel 81–85; Overall ≈ medel(CQ-badge, EEAT-badge) passar micro+porto, nästan sebo (72,5 vs 74). Samla fler färska breakdowns innan ny formel (§10) — testprotokoll i §1.2.

## Gamla analyser (multiplikativa formeln Overall ≈ CQ×EEAT×AI/3640 — 7/7)

**om-oss.php — 6 jul-dump, "Analyzed 79 days ago" (≈ 18 apr, gamla skalan — FÖRSTA om-oss-nedbrytningen):**
Overall **17** · CQ **57** (Base 58, Depth 63, Evidence 46, Language 68, Readability 50) · E-E-A-T **59** (Experience 60, Expertise 55, Authority 60, Trust 60) · AI STYLE **20** (Human-like 20). **Formel-check: 57×59×20/3640 = 18,5 vs 17 — inom tidigare tolerans (±1–2 p) → 7:e valideringen.** ⚠️ **AI STYLE 20 = LÄGSTA uppmätta** (spannet var 25–30) — om-oss gamla marknadsprosa (3🔴-block) hade sajtens sämsta human-like; konsistent med multiplikativa modellen (medioker CQ/EEAT × 0,20 → 17). OBS: SCORE-analysen är från APRIL medan sidans AI Copy-vy är refreshad 5 JUL — vyerna refreshar OBEROENDE (belägg för rullande refresh, playbook §11 6 jul #2).

**hudproblem/bristningar/ — 2 jul-dump, "Analyzed 78 days ago" (⚠️ transkription ± några enheter, liten skärmdump):**
Overall **18** · CQ ~52 (Base ~64, Depth ~43, Evidence ~44, Language ~50, Readability ~45) · E-E-A-T ~50 (subs ~44–50) · AI STYLE **25** (Human-like 25). **Formel-check (modellanalysen 2 jul em): 52×50×25/3640 = 17,9 ≈ 18 ✓** — 6:e valideringen av gamla formeln.

**Våra 2 SIGNIFICANT-mål med SCORE (30 jun; acne-ansikte + behandla-pigmentflackar visar "–" = ingen nedbrytning):**
| Komponent | hudforandringar (17) | ytliga-blodkarl (22) |
|---|---|---|
| CONTENT QUALITY | 52 | 52 |
| – Base Quality | 46 | 54 |
| – Depth | 69 | 67 |
| – Evidence | 31 | 24 |
| – Language | 52 | 58 |
| – Readability | 40 | 50 |
| E-E-A-T | 49 | 58 |
| – Experience | 35 | 50 |
| – Expertise | 55 | 60 |
| – Authority | 45 | 60 |
| – Trust | 60 | 60 |
| AI STYLE (Human-like) | 25 | 25 |

**Sajtens 3 toppsidor 30 jun — SCORE 39 = dåvarande sajt-max** (A/B/C = analys 55/49/60 dgr sedan):
> **BEKRÄFTAT 2026-07-01: kolumn A = acne.php** (Overall 39 · CQ 56 [Base65/Depth77/Evidence11/Language65/Read60] · E-E-A-T 84 [Exp85/Expertis85/Auth80/Trust85] · AI STYLE 30). acne.php-omskrivningen (10 🔴-block, 1 jul) siktar på **AI STYLE (30) + Evidence (11)** utan att sänka Depth 77 / E-E-A-T 84 (§1.2 no-regression). FÖRE-baseline att mäta mot. Kolumn C = trolig ipl-rosacea (CQ 68/Ev 46/EEAT 85/AI 25 = ipl-rosaceas kända FÖRE-baseline).
| Komponent | A (55d) = acne.php | B (49d) | C (60d) |
|---|---|---|---|
| **Overall** | **39** | **39** | **39** |
| CONTENT QUALITY | 56 | 58 | 68 |
| – Base Quality | 65 | 65 | 70 |
| – Depth | 77 | 75 | 81 |
| – Evidence | 11 | 22 | 46 |
| – Language | 65 | 80 | 75 |
| – Readability | 60 | 55 | 65 |
| E-E-A-T | 84 | 83 | 85 |
| – Experience | 85 | 85 | 85 |
| – Expertise | 85 | 80 | 85 |
| – Authority | 80 | 80 | 85 |
| – Trust | 85 | 85 | 85 |
| AI STYLE (Human-like) | 30 | 30 | 25 |

**Läsning av 30 jun-datan (hypoteser, formulerade FÖRE versionsbytes-upptäckten — läs genom §1.2-OMPRÖVAS-linsen):**
1. Dåvarande tak ~39 berodde på att AI STYLE satt 25–30 överallt → de-AI = spaken. *(Färska datan visar 50–74 utan våra ändringar → taket var version-/skal-bundet.)*
2. Evidence näst tyngst (11–46 även på topp) → siffror, tidsram, mekanism-steg, "Från X kr", 30 år.
3. Depth (75–81) + E-E-A-T (83–85) = toppsidornas styrka → skydda (§13.N; widgets).
4. Målsidorna lägre på E-E-A-T (49–58) → förstahands-klinik (Experience), recensioner/resultat (Trust), 30 år/maskiner (Authority).
