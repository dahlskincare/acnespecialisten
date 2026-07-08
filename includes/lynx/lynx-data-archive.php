<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX DATA — ARKIV (historiska Pages-snapshots rådumpar, verbatim; senaste överst)

```
▣ MANIFEST
KIND          HISTORIK — append-only, aldrig retroaktivt uppdaterad.
LADDA-NÄR     nästan aldrig. Forensik: "vad stod i 30 juni-inventeringen?", "vad var råvärdet i dumpen 7 juli 14:16?"
KANONISK-FÖR  Pages-snapshots verbatim · 30 juni-fullinventeringen (gamla skalans FÖRE-baseline för ~90 sidor)
PEKAR-PÅ      lynx-data = AKTUELLT LÄGE (gällande värden) · jämför ALDRIG gammal skala mot färsk
```


> **Arkivregel (7 juli, analog med logg-arkivpolicyn):** hit flyttas daterade snapshot-sektioner från `lynx-data.php` när (1) deras data är inskriven i AKTUELLT LÄGE-tabellen och (2) omätta baselines står i baseline-registret. Aktuellt läge + kolumndefinitioner + sidregister + beställningssedel bor i `lynx-data.php`; fynd/resonemang per dump i `lynx-log.php`. **30 juni-inventeringen längst ned = gamla skalans kompletta FÖRE-baseline för hela sajten — raderas aldrig.** Nya dumpar transkriberas VERBATIM hit (ny daterad sektion överst) enligt spara-receptet i `lynx-data.php`.

> **⚠️ §-referenser i denna fil avser filstrukturen vid postens datum.** Sedan 8 juli bor **§8, §8.1, §9, §9.0, §9.1 och §12 i `lynx-backlog.php`** (ej lynx-START). §-KARTAN i `lynx-START.php` är resolvern. Historik uppdateras aldrig retroaktivt.




## Snapshot 2026-07-08 kl. 10:55–10:57 — KOMPLETT AICOPY-vy (11 dumpar, hela listan SIGNIFICANT→HUMAN)
> Ägar-leverans efter beställning i §9. Alfabetisk inom varje AI COPY-grupp. Kolumner: VALUE · PAGE TYPE · SCORE · GAPS ⚡/💡 · AI COPY · AIQ · P.PRICE · EG SCORE · KW.

**SIGNIFICANT (2):** hudforandringar (10 · 17 · 3/2 · OK · KW 7) · ytliga-blodkarl (41 · **74** · 0/0 · OK · KW 157)
**MODERATE (5):** hudbehandlingar/ipl (34 · – · HIGH · KW 18) · bristningar (18 · 63 · 0/0 · KW 67) · oonskat-har (11 · – · KW 13) · ipl-rosacea (54 · 60 · 3/1 · HIGHEST · KW 18) · microdermabrasion (29 · – · LOWEST · KW 6)

**SLIGHT — de fyra bevakade raderna:**
| Sida | VALUE | SCORE | GAPS | AIQ | P.PRICE | KW | Not |
|---|---|---|---|---|---|---|---|
| /mogen-hy.php | 10 | – | –/– | OK | – | 8 | **🟠 → 🔵** |
| /rhinophyma-rosacea.php | 35 | **74** | 0/0 | OK | – | 46 | **🟠 → 🔵**; SCORE identisk med FÖRE (74) |
| /solskadad-hy.php | 31 | – | –/– | OK | – | 33 | **🟠 → 🔵** |
| /pigmentflackar.php | — | — | — | — | — | — | **SAKNAS HELT i vyn** (ej i SIGNIFICANT/MODERATE/SLIGHT/HUMAN) |

**SLIGHT — övriga av intresse:** om-oss (7 · 17 · 2/2 · OK · KW 1) **badge BEKRÄFTAD 🔵** · behandla-pigmentflackar (10 · – · AIQ **GOOD** · KW 13) · acne-ansikte (31 · – · KW 52) · **microneedling (66 · 60 · 0⚡/1💡 · OK · HIGHEST · KW 63)** · portomning (65 · 60 · 0/0 · HIGHEST · KW 25) · acne-rygg (61 · 69 · 2/1 · KW 46) · seborroisk-keratos (64 · 74 · 0/0 · **GOOD** · KW 108) · acne.php (40 · 47 · 2/1 · KW 105) · acnearr (45 · 74 · 1/0 · KW 123) · homepage (41 · 65 · 0/0 · **POOR** · KW 288) · hudflikar (43 · 78 · KW 112) · milier (40 · 75 · KW 164) · blodprickar (59 · 75 · KW 171) · pormaskar (44 · 76 · KW 126) · rosacea (27 · – · KW 199) · perioral-dermatit (32 · – · KW 179) · seborre (36 · – · KW 161) · torr-hy (30 · 74 · KW 152) · **/varumarken/powerlite-photonova/ (18 · 88 · KW 0)** = sajtens högsta SCORE, saknas i repot (§9 slutsats F) · splendor-x (31 · 79) · rejuve-dye-vl (19 · 86) · skin-tech (17 · 66 · AIQ GOOD) · soprano-ice (9 · **22** · 2/1) · roaccutan (49 · 23) · melasma (29 · 23 · 0/2) · blandhy (11 · 24) · finnar-arr (13 · **9**) · resultat.php (14 · 40 · AIQ POOR) · elevbehandlingar (10 · 18)

**HUMAN (11):** acne-myter · elevbehandlingar · **fragor-svar (56 · AIQ POOR)** · franchise · hudguide · not-found · online-konsultation · ordlista · priser (AIQ POOR) · recensioner-omdomen · studentrabatt (AIQ POOR)

**🎯 MÄTNING (mätregel 4 — observerad delta mellan två analyser med olika värden):**
- **mogen-hy 🟠→🔵 · solskadad-hy 🟠→🔵 · rhinophyma-rosacea 🟠→🔵.** Alla tre var 🟠 i sparad data; rhinophyma bekräftades 🟠 så sent som 7 juli då crawlen ännu läste PRE-V2-texten (logg #14). **Prediktionerna träffade. Metoden nu 6/6 på mätta omskrivna sidor.**
- **om-oss badge BEKRÄFTAD 🔵** — beställningen från 6 juli är besvarad. om-oss räknas nu in i §1.4-statistiken (EFTER-medel 0,91 → pred 🔵 ✓).
- **pigmentflackar SAKNAS HELT** — tredje gången mönstret upprepas (6 juli, och nu). Pågående omanalys, tom badge. **V2 fortfarande OMÄTT.** Frånvaro ≠ SLIGHT: bekräftat.
- **rhinophyma SCORE 74 = identiskt med FÖRE-baselinen (6 juli).** Säger INGET om AI STYLE: slutsats D (`lynx-score`) visar att AI STYLE inte ingår i Overall. **AI STYLE-testet kräver SCORE-popupen** (FÖRE 70). Beställ den.
- **microneedling: FÄRSK FÖRE-BASELINE timmar före vår rewrite** — VALUE 66 · SCORE 60 (var 50) · GAPS 0⚡/1💡 · 🔵 SLIGHT · AIQ OK · P.PRICE HIGHEST · KW 63 (var 70). WORDS/CLICKS syns ej i denna vy (§10.0 punkt 3 ouppfylld).


## Snapshot 2026-07-08 kl. 10:45 — AICOPY-filtrerad Pages-vy (13 rader synliga, SKUREN efter /acnebehandling.php)
> Ägar-dump. Sorterad på AI COPY (SIGNIFICANT → MODERATE → SLIGHT). Kolumnen **EG SCORE** nu synlig, "–" överallt. PAGE TYPE "–" på ipl/oonskat-har/microdermabrasion/behandlingar/acne-ansikte/acnebehandling, blank på övriga.

| URL | VALUE | SCORE | GAPS ⚡/💡 | AI COPY | AIQ | P.PRICE | EG | KW |
|---|---|---|---|---|---|---|---|---|
| /hudproblem/hudforandringar/ | 10 | 17 | 3/2 | **SIGNIFICANT** | OK | – | – | 7 |
| /ytliga-blodkarl.php | 41 | **74** | 0/0 | **SIGNIFICANT** | OK | – | – | 157 |
| /hudbehandlingar/ipl/ | 34 | – | –/– | 🟠 MODERATE | OK | HIGH | – | 18 |
| /hudproblem/bristningar/ | 18 | 63 | 0/0 | 🟠 MODERATE | OK | – | – | 67 |
| /hudproblem/oonskat-har/ | 11 | – | –/– | 🟠 MODERATE | OK | – | – | 13 |
| /ipl-rosacea.php | 54 | 60 | 3/1 | 🟠 MODERATE | OK | HIGHEST | – | 18 |
| /microdermabrasion.php | 29 | – | –/– | 🟠 MODERATE | OK | LOWEST | – | 6 |
| /behandlingar.php | 14 | – | –/– | 🔵 SLIGHT | OK | – | – | 0 |
| / (homepage) | 41 | 65 | 0/0 | 🔵 SLIGHT | **POOR** | – | – | 288 |
| /acne.php | 40 | 47 | 2/1 | 🔵 SLIGHT | OK | – | – | 105 |
| /acne-ansikte.php | 31 | – | –/– | 🔵 SLIGHT | OK | – | – | 52 |
| /acnearr.php | 45 | 74 | 1/0 | 🔵 SLIGHT | OK | – | – | 123 |
| /acnebehandling.php | 12 | – | –/– | 🔵 SLIGHT | OK | – | – | 6 |

**🎯 HUVUDFYND — FYRA SIDOR HAR LÄMNAT MODERATE-GRUPPEN.** MODERATE består nu av exakt 5 rader (ipl · bristningar · oonskat-har · ipl-rosacea · microdermabrasion). Frånvarande, alla 🟠 i sparad data: **mogen-hy · solskadad-hy · rhinophyma-rosacea · pigmentflackar.** Eftersom vyn är sorterad på AI COPY och SLIGHT-raderna följer direkt är MODERATE-gruppen komplett — de fyra har alltså flyttat. **MEN vyn är SKUREN efter /acnebehandling.php: vi ser dem inte i SLIGHT-gruppen.** Frånvaro ≠ SLIGHT (pigmentflackar försvann ur samma vy 6 juli under pågående omanalys, logg #14). **Attribuera inget förrän SLIGHT-raderna är sedda** (mätregel 4, `lynx-models` §11.1).

**Övriga diffar mot sparad data:** ytliga-blodkarl SCORE 74 men badge **fortfarande SIGNIFICANT** (badge-refreshen dröjer, öppen tråd) · hudforandringar oförändrad (17 · 3/2 · SIGNIFICANT) · homepage SCORE 28→**65**, AIQ fortfarande POOR (enda POOR-sidan) · acne.php SCORE **47** (färsk) · acnearr 74, GAPS 1/0 · ipl-rosacea GAPS 3/1 kvar · KW-drift nedåt på flera orörda sidor (homepage 298→288, ytliga 159→157, ipl-rosacea 20→18, hudforandringar 8→7) medan acnearr steg 121→123.


## Snapshot 2026-07-07 (12:15–12:28, 11 dumpar) — pigmentflackar TILLBAKA ur omanalysen + rhinophyma re-scan: BÅDA läste PRE-WAVE-2-texten (V2 omätt)
> Ägaren: "vi har fått uppdatering på pigmentfläckar" + rhinophyma-batch + fråga "skiljer de sig från förra? hur står sig våra bedömningar?". **Fynd:** (1) pigmentflackar-raden TILLBAKA i AICOPY-vyn (VALUE 32 · SCORE 73 färsk popup; AI COPY-badgen skymd av popupen — okänd); (2) **BÅDA AI Copy-vyerna "Last update: 06 Jul" läste GAMLA texten — crawlen daterad till 2 jul 16:09–6 jul 16:08 (produktion FÖRE wave 2-mergen; blocken har 2 jul-språkfixarna men inte V2)** → pigmentflackar 18/18 + rhinophyma 16/16 identiska tiers med gamla faciten (determinism-replikation #3+#4; typo-fixar flyttar inte betyg) → **V2-omskrivningarna fortfarande OMÄTTA** (detalj i `lynx-examples.php`); (3) SCORE-popups: pigmentflackar 73 = medel(84,60) ✓ AI STYLE 55 (= FÖRE-baseline) · rhinophyma 74 identisk replika av 6 jul (AI 70) · hudforandringar 17 "79 days ago" oförändrad (subs = redan sparade) → `lynx-score.php`.

**Pages-rader synliga i dumpen (AICOPY-filtret; AI COPY-kolumnen skymd av SCORE-popupen):**
| URL | VALUE | SCORE | Not |
|---|---|---|---|
| /hudproblem/hudforandringar/ | 10 | 17 | oförändrat gammal (79d-analysen) |
| /ytliga-blodkarl.php | 40 | 74 | SCORE som 6 jul; VALUE 42→40 |
| /hudbehandlingar/ipl/ | 34 | – | SCORE blank (omanalys?) |
| /hudproblem/bristningar/ | 18 | **63** | **NY färsk-skala-SCORE** (var 18 gammal; omskriven+live 6 jul — men gammal→färsk ej attribuerbar, se lynx-score) |
| /hudproblem/oonskat-har/ | 11 | – | blank |
| /ipl-rosacea.php | 55 | 60 | som 6 jul |
| /microdermabrasion.php | 30 | – | blank |
| **/pigmentflackar.php** | **32** | **73** | **TILLBAKA** (var blank/omanalys); VALUE 35→34→32 |
| /rhinophyma-rosacea.php | 34 | 74 | som 6 jul (= FÖRE-baseline nya skalan) |
| /solskadad-hy.php | 31 | – | blank |
| /behandlingar.php | 14 | – | tydligt läsbar i 12:26-dumpen — redirect-sidan (KW 0) står alltså i AICOPY-vyn med VALUE 14 (behandla-pigmentflackar är en annan rad, VALUE 10 per 6 jul); mindre bevakning |
| / (homepage) | 41 | **65** | **var 28 (gammal)** — ORÖRD av oss → gammal→färsk-hopp är globala, kontrollpunkt mot över-attribution |
| /acne.php | 29 | 47 | nedersta raden, delvis skuren — VALUE/SCORE osäkra |

**Blank-mönstret:** ipl, oonskat-har, microdermabrasion, solskadad-hy = 4 av wave 2-sidorna har SCORE "–" → troligen i omanalys-kön (samma steg-mekanik som pigmentflackar; ägarens metodprincip 6 jul). Bevaka — de bör komma tillbaka med färska värden.

### Tillägg 12:36 — ofiltrerad Pages-vy, VALUE-band 65–49, ALLA kolumner synliga ("här kom du ville se mer")
| URL | VALUE | SCORE | GAPS ⚡/💡 | AI COPY | AIQ | P.PRICE | EG | KW |
|---|---|---|---|---|---|---|---|---|
| /portomning.php | 65 | 60 | 0/0 | SLIGHT | OK | HIGHEST | – | 27 |
| /seborroisk-keratos.php | 64 | 74 | 0/0 | SLIGHT | GOOD | – | – | 109 |
| /acne-rygg.php | 64 | **69** | 2/1 | SLIGHT | OK | – | – | 46 |
| /blodprickar.php | 59 | 75 | 2/1 | SLIGHT | OK | – | – | 171 |
| /hydrafacial.php | 59 | 63 | 0/0 | SLIGHT | OK | HIGHEST | – | 15 |
| /cystisk-acne.php | 58 | 70 | 0/0 | SLIGHT | OK | – | – | 21 |
| /djuprengoring.php | 56 | 75 | 1/1 | SLIGHT | OK | HIGH | – | 8 |
| /ipl-rosacea.php | 55 | 60 | **3/1** | **MODERATE** | OK | HIGHEST | – | 18 |
| /mallorca-acne.php | 53 | 68 | 0/0 | SLIGHT | OK | – | – | 11 |
| /resultat-rosacea.php | 51 | 44 | 0/0 | SLIGHT | OK | – | – | 6 |
| /acne-brost.php | 50 | 73 | 2/1 | SLIGHT | OK | – | – | 45 |
| /roaccutan.php | 50 | 23 | 0/0 | SLIGHT | OK | – | – | 57 |
| /pormaskar.php | 49 | 76 | 1/0 | SLIGHT | OK | – | – | 124 |

**Diff mot sparad data (NYTT/ÄNDRAT):**
- **acne-rygg SCORE 0 → 69 (LÄKT):** "SCORE 0 = ofullständig analys som sätter sig" nu bekräftad även här (jfr microneedling 2→6 jul) → Fas 3b-radens "be om omkörning" STRUKEN, ingen åtgärd behövs.
- **ipl-rosacea GAPS 0/0 → 3⚡/1💡 (GAPS TILLBAKA):** 2 jul-"rensningen" var alltså inte permanent — stödjer konkurrent-relativa tolkningen (tooltip) eller scan-artefakt. §9-tråden uppdaterad; läs gap-texterna innan någon åtgärd (be om dem vid tillfälle).
- **ipl-rosacea AI COPY = fortfarande MODERATE** (omskriven + live 1 jul) → badge-vyn har ännu inte refreshat mot nya texten (samma läge som pigment/rhino: crawlen ≤6 jul).
- **KW-drift nedåt över hela bandet** (blodprickar 175→171, sebo 110→109, acne-rygg 51→46, portomning 28→27): ambient SERP-rörelse — INTE attribuerbar (sidorna orörda). KW-vakt: inga målfras-tapp att agera på här.
- **OFÖRÄNDRAT:** sebo 74/GOOD, blodprickar 75, roaccutan 23 (låg färsk — tunt/dublett-innehåll-hypotesen kvarstår), pormaskar 76, EG SCORE "–" överallt.
- **P.PRICE-mönster:** behandlingssidor uppfattas dyra (portomning/hydrafacial/ipl-rosacea HIGHEST, djuprengoring HIGH) — §13.I-spåret (Offer-schema) obehandlat.

### Tillägg 12:37 — URL-sök "behandlingar" + "behandla" (alla kolumner) → 🎯 behandla-pigmentflackar 🔴→🔵!
**Sök "behandlingar" (15 rader):** /hudbehandlingar/ipl/ 34 · SCORE– · –/– · **MODERATE (kvar)** · OK · HIGH · KW18 | dermabrasion 25 · – · SLIGHT · LOWEST · KW4 | skinbooster 24 · – · SLIGHT · HIGHEST · KW28 | /ansiktsbehandlingar.php 21 · – · SLIGHT · HIGHEST · KW14 | laser-mot-hudproblem 15 · **SCORE 60** · 2/1 · SLIGHT · HIGH · KW27 | **/behandlingar.php 14 · – · SLIGHT · KW 0** (redirecten HAR alltså egen badge — därför syns den i AICOPY-vyn; löser 12:15-frågetecknet) | ansiktsbehandling/ros… 11 · – · SLIGHT · HIGHEST · KW6 | **/elevbehandlingar.php 10 · SCORE 18 · 0/0 · HUMAN · HIGHEST · KW4** | /hudbehandlingar/ 10 · – · SLIGHT · KW13 | vaxning 9 · SLIGHT · HIGH · KW7 | estetiska-injektionsbe… 8 · SLIGHT · LOWEST · KW7 | ansiktsbehandling/ak… 8 · SLIGHT · HIGHEST · KW2 | hudbehandlingar/pormaskar 8 · SLIGHT · KW4 | estetiska-injektionsbe…(2) 8 · SLIGHT · HIGHEST · KW16 | ansiktsbehandling/hu… 4 · SLIGHT · HIGHEST · KW0. *(AIQ = OK på samtliga.)*
**Sök "behandla" (4 rader):** /behandla-stora-porer.php 46 · **SCORE 63 färsk** · 1/1 · SLIGHT · OK · KW39 | /behandla-acnearr.php 42 · – · SLIGHT · OK · KW15 | **/behandla-pigmentflackar.php 10 · – · –/– · 🔵 SLIGHT · GOOD · KW13** | /behandla-finnar-arr.php 8 · – · SLIGHT · OK · KW2.
**🎯 STÖRSTA FYNDET: /behandla-pigmentflackar.php badge SIGNIFICANT → SLIGHT** — badgen var kvar 🔴 i 6 jul-dumpen 13:20 ("OFÖRÄNDRAD badge") och är nu 🔵 ⇒ badge-refresh skedde 6 jul em–7 jul förmiddag, på VÅR text (live sedan 1 jul) = **observerad delta → EFTER-MÄTNING #3** (acne-ansikte 🔴→🔵 · om-oss 0 flagg · behandla-pigment 🔴→🔵). §11.1-raden uppdaterad (lynx-models). Notera tvåstegs-hoppet 🔴→🔵 (förbi 🟠) — starkaste badge-flytten hittills. **Övrig diff:** hudbehandlingar/ipl badge kvar 🟠 (crawl-lag, samma som ipl-rosacea) · laser-mot-hudproblem + behandla-stora-porer = nya färska SCORE (60/63) · elevbehandlingar HUMAN-badge + SCORE 18 (gammal skala?).

### Tillägg 12:41–12:42 (7 dumpar till) — behandla-pigmentflackar per-block-EFTER + ipl-rosacea gap-texter + SCORE-popup
- **behandla-pigmentflackar AI Copy-vy "Last update: 07 Jul"** = färsk crawl av VÅR text → **komplett per-block-EFTER: 2🔴/2🟠/8🔵/1🟢 (n=13), medel 2,38→1,38, §1.4-pred 🔵 = badge ✓.** Full FÖRE→EFTER-tabell + backport-lärdomar i `lynx-examples.php`. Visar också att LYNX crawlar sida-för-sida i steg: denna sida har 7 jul-crawl medan pigmentflackar/rhinophyma fortfarande har ≤6 jul-crawl → wave 2-sidorna plockas upp löpande.
- **ipl-rosacea gap-popup (3⚡/1💡):** HIGH "Hantering av oro för tillfällig försämring" · LOW "Information om triggerfaktorer för rosacea" · LOW "Förtydligande av kostnadsfaktorer och behandlingsbehov" · 💡-texten ej synlig → sparade + preliminärbedömda i `lynx-gaps.php`.
- **ipl-rosacea SCORE-popup "Analyzed 23 hours ago"** (= 6 jul-analysen): 60 · CQ-badge 60 (Base 88, Depth 88, Evidence 82, Language 95, Readability 92) · EEAT 60 (85/80/85/90) · AI 75/75 — **identisk med sparad 6 jul-data ✓** (bekräftar transkriptionen + CQ-60-anomalin kvarstår).

### Tillägg 13:58 (1 dump) — FULL AICOPY-vy med ALLA kolumner (inkl. WORDS/CLICKS/STATUS): pigmentflackar-badgen SYNLIG = MODERATE KVAR · behandlingar.php 301 · acnearr SCORE 0→74
> Samma AICOPY-filter som 12:15 men nu med hela kolumnraden synlig (VALUE→AI FEATURES), sorterad SIGNIFICANT→MODERATE→SLIGHT; skuren nedtill vid /behandla-pigmentflackar (fler SLIGHT-rader finns under). **Ny kolumn längst till höger: "AI FEATURES" (toggle, PÅ på alla synliga rader)** — odokumenterad, tooltip tillagd i beställningssedeln. PAGE TYPE läses "–"/tomt på samtliga synliga rader (30 juni-inventeringen visade "Service" på t.ex. acnearr/acne-rygg — osäker avläsning i dumpen, bevaka men ingen åtgärd). EG SCORE "–" överallt, AIQ OK överallt utom homepage POOR + behandla-pigmentflackar GOOD.

| URL | VAL | SCORE | GAPS ⚡/💡 | AICOPY | AIQ | P.PRICE | KW | WORDS | CLICKS | STATUS |
|---|---|---|---|---|---|---|---|---|---|---|
| /hudproblem/hudforandringar/ | 10 | 17 | 3/2 | 🔴 SIGNIFICANT | OK | – | 7 | 968 | 0 | 200 |
| /ytliga-blodkarl.php | 40 | 74 | 0/0 | 🔴 SIGNIFICANT | OK | – | 159 | 919 | 51 | 200 |
| /hudbehandlingar/ipl/ | 34 | – | –/– | 🟠 MODERATE | OK | HIGH | 18 | 1 006 | 13 | 200 |
| /hudproblem/bristningar/ | 18 | 63 | 0/0 | 🟠 MODERATE | OK | – | 66 | 791 | 2 | 200 |
| /hudproblem/oonskat-har/ | 11 | – | –/– | 🟠 MODERATE | OK | – | 13 | 759 | 0 | 200 |
| /ipl-rosacea.php | 55 | 60 | 3/1 | 🟠 MODERATE | OK | HIGHEST | 18 | 823 | 10 | 200 |
| /microdermabrasion.php | 30 | – | –/– | 🟠 MODERATE | OK | **LOWEST** | 6 | 536 | 3 | 200 |
| **/pigmentflackar.php** | 32 | 73 | 0/0 | **🟠 MODERATE (badgen nu synlig — KVAR)** | OK | – | 230 | 946 | 19 | 200 |
| /rhinophyma-rosacea.php | 34 | 74 | 0/0 | 🟠 MODERATE | OK | – | 46 | 788 | 15 | 200 |
| /solskadad-hy.php | 31 | – | –/– | 🟠 MODERATE | OK | – | 33 | 560 | 5 | 200 |
| /behandlingar.php | 14 | – | – | 🔵 SLIGHT | OK | – | 0 | 275 | 1 | **301** |
| / (homepage) | 41 | 65 | 0/0 | 🔵 SLIGHT | POOR | – | 287 | 223 | 381 | 200 |
| /acne.php | 29 | 47 | 2/1 | 🔵 SLIGHT | OK | – | 105 | 1 354 | 5 | 200 |
| /acne-ansikte.php | 27 | – | – | 🔵 SLIGHT | OK | – | 52 | 461 | 6 | 200 |
| **/acnearr.php** | 41 | **74 färsk** | **1/0** | 🔵 SLIGHT | OK | – | 121 | 964 | **78** | 200 |
| /acnebehandling.php | 12 | – | – | 🔵 SLIGHT | OK | – | 6 | 765 | 0 | 200 |
| /acne-brost.php | 50 | 73 | 2/1 | 🔵 SLIGHT | OK | – | 45 | 326 | 21 | 200 |
| /acne-rygg.php | 64 | 69 | 2/1 | 🔵 SLIGHT | OK | – | 46 | 638 | 51 | 200 |
| /acne-scars.php | 27 | – | – | 🔵 SLIGHT | OK | – | 15 | 350 | 3 | 200 |
| /acne-vulgaris.php | 9 | – | – | 🔵 SLIGHT | OK | – | 0 | 246 | 0 | 200 |
| /aldersflackar.php | 22 | – | – | 🔵 SLIGHT | OK | – | 10 | 472 | 5 | 200 |
| /alma-harmony-xl-pro.php | 21 | – | – | 🔵 SLIGHT | OK | HIGHEST | 5 | 984 | 2 | 200 |
| /alma-hybrid-co2-laser.php | 27 | **60 färsk** | 2/1 | 🔵 SLIGHT | OK | MID | 55 | 1 424 | 7 | 200 |
| /ansiktsbehandlingar.php | 21 | – | – | 🔵 SLIGHT | OK | HIGHEST | 14 | 966 | 1 | 200 |
| /atrofiska-arr.php | 42 | – | – | 🔵 SLIGHT | OK | – | 18 | 448 | 14 | 200 |
| /behandla-acnearr.php | 42 | – | – | 🔵 SLIGHT | OK | – | 15 | 630 | 7 | 200 |
| /behandla-finnar-arr.php | 8 | – | – | 🔵 SLIGHT | OK | – | 2 | 687 | 0 | 200 |
| /behandla-pigmentflackar.php | 10 | – | –/– | 🔵 SLIGHT | GOOD | – | 13 | 532 | 0 | 200 |

**Diff mot sparad data (NYTT/ÄNDRAT):**
- **🎯 pigmentflackar AI COPY-badge = 🟠 MODERATE KVAR** — 12:15-frågetecknet ("badgen skymd av popupen — okänd") STÄNGT. Helt konsistent med logg #14 huvudfynd 1: crawlen ≤6 juli läste gamla texten → badgen speglar PRE-V2; EFTER väntar nästa färska crawl. Ingen åtgärd.
- **SIGNIFICANT-gruppen = 2 rader (hudforandringar + ytliga-blodkarl)** — första fulla AICOPY-vyn där behandla-pigmentflackar syns i SLIGHT-gruppen (visuell bekräftelse av EFTER-mätning #3, 🔴→🔵).
- **behandlingar.php STATUS 200→301** — kolumndefinitionens prediktion ("redirecten borde visa 301 vid omscan") BEKRÄFTAD; LYNX har omläst redirecten. Stänger den mindre bevakningen från 12:26.
- **acnearr.php SCORE 0→74 färsk + GAPS 3/1→1/0 + KW 127→121 · CLICKS 78** (näst mest klickade efter homepage) — **tredje SCORE-0-läkningen** (acne-rygg 0→69, sebo 0→74 tidigare); §9.1 Tier 2-noten uppdaterad. GAPS-ändringen på orörd sida = ytterligare belägg för rörliga/konkurrent-relativa GAPS (§9-tråden).
- **alma-hybrid-co2-laser SCORE 14(gammal)→60 färsk + GAPS 2/2→2/1** — ny färsk-skala-baseline på orörd sida (samma klass som laser-mot-hudproblem 60/behandla-stora-porer 63 i 12:37).
- **acne.php-raden BEKRÄFTAD** (12:15 var "delvis skuren, osäker"): VAL 29 · SCORE **47 färsk** (var 39 gammal) · GAPS 3/2→2/1 · KW 114→105. Ny FÖRE-baseline (sidan orörd sedan språkfixarna).
- **microdermabrasion P.PRICE MID→LOWEST** — perceptet är marknadsrelativt (tooltip) → ej attribuerbart till oss; noterat för §13.I-spåret.
- **WORDS + CLICKS nu fångade för HELA flagg-gruppen** (§10.0 punkt 3-baseline): hudforandringar 968/0 · ytliga 919/51 · ipl 1 006/13 · bristningar 791/2 · oonskat-har 759/0 · ipl-rosacea 823/10 · micro 536/3 · pigment 946/19 · rhino 788/15 · solskadad 560/5.
- **Ambient drift (ej attribuerbar):** KW: oonskat-har 15→13 · pigment 237→230 · rhino 47→46 · bristningar 67→66 · aldersflackar 7→10 (UPP) · homepage CLICKS 382→381, acne.php CLICKS 4→5. VAL-brus ±1–4 på flera rader.
- **OFÖRÄNDRAT:** SCORE-blank-mönstret kvarstår (ipl/oonskat-har/microdermabrasion/solskadad-hy "–" = omanalys-kön) · homepage 65/POOR · badge-vyerna på övriga live-sidor fortfarande stale (ytliga/hudforandringar 🔴, ipl/ipl-rosacea m.fl. 🟠) · microdermabrasion AIQ OK.

### Tillägg 14:16 (2 dumpar) — OFILTRERAD Pages-vy VALUE-band 40→19 (kompletterar 12:36-bandet 65–49): 15 nya färska SCORE · splendor-x 79 = NY SAJT-TOPP över taket · "missing localized"-DRAFT-rad KW 616 · fragor-svar AIQ OK→POOR
> Fortsättning på inventeringen — ofiltrerad vy sorterad på VALUE fallande, alla kolumner. Banden 65–49 (12:36) + 40–19 (14:16) täcker nu huvuddelen av sajten med färsk data. EG SCORE "–" överallt · STATUS 200 överallt (utom DRAFT-raden, blank) · AI FEATURES-toggeln PÅ på alla riktiga sidor men **AV på DRAFT-raden** → togglen verkar markera aktiva/indexerade sidor (datapunkt till tooltip-beställningen #9). ±1–2 KW-avvikelser mot 13:58-vyn på samma sidor (ytliga 159→157, pigment 230→232, ansiktsbehandlingar 14→15) = vy-/transkriptionsbrus minuter isär, ingen åtgärd.

**Band VALUE 40→29 (14:16:29):**
| URL | VAL | SCORE | GAPS ⚡/💡 | AICOPY | AIQ | P.PRICE | KW | WORDS | CLICKS |
|---|---|---|---|---|---|---|---|---|---|
| /vita-pormaskar.php | 40 | **70 färsk** | 0/0 | SLIGHT | OK | – | 9 | 347 | 3 |
| /ytliga-blodkarl.php | 40 | 74 | 0/0 | 🔴 SIGNIFICANT (stale) | OK | – | 157 | 919 | 51 |
| /vuxenacne.php | 39 | – | –/– | SLIGHT | OK | – | 21 | 382 | 4 |
| /finnar-gravid.php | 39 | **69 färsk** | 3/0 | SLIGHT | OK | – | 42 | 811 | 20 |
| /milier.php | 39 | **75 färsk** | 0/0 | SLIGHT | OK | – | 164 | 841 | 35 |
| /postinflammatorisk-hyperpigmentering | 38 | – | –/– | SLIGHT | GOOD | – | 21 | 560 | 5 |
| /pormaskar-rygg.php | 38 | – | –/– | SLIGHT | OK | – | 12 | 357 | 12 |
| /komedoner.php | 37 | – | –/– | SLIGHT | OK | – | 5 | 708 | 0 |
| /microneedling-acne.php | 37 | – | –/– | SLIGHT | GOOD | HIGHEST | 6 | 299 | 7 |
| /stress-acne.php | 37 | – | –/– | SLIGHT | OK | – | 12 | 582 | 5 |
| /seborre.php | 37 | – | –/– | SLIGHT | OK | – | 161 | 939 | 10 |
| /hormonell-acne.php | 36 | **70 färsk** | 2/2 | SLIGHT | OK | – | 37 | 335 | 0 |
| /resultat-acne.php | 35 | **55 färsk** | 0/0 | SLIGHT | OK | – | 0 | 224 | 0 |
| /rhinophyma-rosacea.php | 34 | 74 | 0/0 | 🟠 MODERATE (stale) | OK | – | 46 | 788 | 15 |
| /hudbehandlingar/ipl/ | 34 | – | –/– | 🟠 MODERATE (stale) | OK | HIGH | 18 | 1 006 | 13 |
| /tonarsacne.php | 34 | **70 färsk (första)** | 0/0 | SLIGHT | OK | – | 14 | 312 | 3 |
| /ipl-pigmentflackar.php | 33 | – | –/– | SLIGHT | OK | HIGHEST | 14 | 856 | 2 |
| /pigmentflackar.php | 32 | 73 | 0/0 | 🟠 MODERATE (stale) | OK | – | 232 | 946 | 19 |
| /melasma.php | 31 | 23 (färsk låg, känd 6 juli) | **0/2** | SLIGHT | OK | – | 27 | 583 | 10 |
| /perioral-dermatit.php | 31 | – | –/– | SLIGHT | OK | – | **179** | 881 | 16 |
| /fodelsemarken.php | 31 | – | –/– | SLIGHT | OK | – | 58 | 513 | 24 |
| /vakuumsug-pormaskar.php | 31 | **60 färsk (första)** | 0/0 | SLIGHT | OK | HIGHEST | 6 | 270 | 0 |
| /inflammation-acne.php | 31 | – | –/– | SLIGHT | OK | – | 42 | 342 | 6 |
| /solskadad-hy.php | 31 | – | –/– | 🟠 MODERATE (stale) | OK | – | 33 | 560 | 5 |
| /torr-hy.php | 30 | **74 färsk (första)** | 0/0 | SLIGHT | OK | – | **152** | 1 107 | 16 |
| **/varumarken/splendor-x/** | 30 | **79 färsk = NY SAJT-TOPP** | 0/0 | SLIGHT | OK | HIGH | 16 | 707 | 9 |
| /microdermabrasion.php | 30 | – | –/– | 🟠 MODERATE (stale) | OK | LOWEST | 6 | 536 | 3 |
| /kemisk-peeling.php | 29 | **60 färsk** | 2/1 | SLIGHT | OK | HIGHEST | 51 | 1 327 | 10 |
| /acne.php | 29 | 47 | 2/1 | SLIGHT | OK | – | 105 | 1 354 | 5 |

**Band VALUE 29→19 (14:16:41; acne.php-raden överlappar):**
| URL | VAL | SCORE | GAPS ⚡/💡 | AICOPY | AIQ | P.PRICE | KW | WORDS | CLICKS |
|---|---|---|---|---|---|---|---|---|---|
| /microneedling-stora-porer.php | 28 | – | –/– | SLIGHT | OK | HIGHEST | 3 | 267 | 2 |
| /laser-acne.php | 28 | – | –/– | SLIGHT | OK | LOWEST | 9 | 253 | 3 |
| /ipl-ytliga-blodkarl.php | 28 | – | –/– | SLIGHT | OK | – | 23 | 888 | 2 |
| /acne-scars.php | 27 | – | –/– | SLIGHT | OK | – | 15 | 350 | 3 |
| /acne-ansikte.php | 27 | – | –/– | SLIGHT | OK | – | 52 | 461 | 6 |
| /alma-hybrid-co2-laser.php | 27 | 60 | 2/1 | SLIGHT | OK | MID | 55 | 1 424 | 7 |
| **"missing localized" [DRAFT]** | 27 | – | –/– | – | – | – | **616** | (tom) | 0 |
| /rosacea.php | 27 | – | –/– | SLIGHT | OK | – | **201** | 941 | 5 |
| /resultat-finnar-arr.php | 26 | – | –/– | SLIGHT | OK | – | 2 | 235 | 0 |
| /hudterapeut/ | 26 | – | –/– | SLIGHT | OK | – | 12 | 194 | 11 |
| /hudproblem/ | 26 | **60 färsk** | 0/0 | SLIGHT | OK | – | 5 | 731 | 0 |
| /stress-finnar.php | 25 | 67 | 0/0 | SLIGHT | OK | – | 19 | 476 | 2 |
| /hudbehandlingar/dermabrasion/ | 25 | – | –/– | SLIGHT | OK | LOWEST | 4 | 711 | 5 |
| /kontakt.php | 25 | 60 | 0/0 | SLIGHT | POOR | – | 2 | 152 | 12 |
| /acne-myter.php | 25 | – | –/– | 🟢 HUMAN | OK | – | 8 | 130 | 1 |
| /resultat-pormaskar.php | 24 | – | –/– | SLIGHT | POOR | – | 2 | 236 | 3 |
| /finnar-behandling.php | 24 | – | –/– | SLIGHT | OK | – | 5 | 621 | 0 |
| /mjalleksem.php | 24 | – | –/– | SLIGHT | OK | – | 28 | 751 | 2 |
| /hudbehandlingar/skinbooster/ | 24 | – | –/– | SLIGHT | OK | HIGHEST | 27 | 862 | 3 |
| /infuzion.php | 22 | – | –/– | SLIGHT | OK | HIGHEST | 14 | 477 | 2 |
| /aldersflackar.php | 22 | – | –/– | SLIGHT | OK | – | 10 | 472 | 5 |
| /fragor-svar.php | 22 | **56 färsk** | 0/0 | 🟢 HUMAN | **POOR (var OK)** | – | 8 | 114 | 1 |
| /alma-harmony-xl-pro.php | 21 | – | –/– | SLIGHT | OK | HIGHEST | 5 | 984 | 2 |
| /prx-t33.php | 21 | – | –/– | SLIGHT | OK | LOWEST | 20 | 765 | 3 |
| /ansiktsbehandlingar.php | 21 | – | –/– | SLIGHT | OK | HIGHEST | 15 | 966 | 1 |
| /problemhy.php | 21 | – | –/– | SLIGHT | OK | – | 5 | 972 | 2 |
| /finnar-brost.php | 20 | **72 färsk** | 0/2 | SLIGHT | OK | – | 10 | 375 | 1 |
| /presentkort.php | 19 | – | –/– | SLIGHT | OK | – | 3 | 283 | 0 |

**Diff mot sparad data (NYTT/ÄNDRAT):**
- **🎯 splendor-x SCORE –→79 färsk = FÖRSTA Overall ÖVER 75–77-taket, på en /varumarken/-sida** — bekräftar lynx-score slutsats E (Brand-sidor når högre tack vare o-klampad EEAT; taket gäller våra service-/problemsidtyper). Dessutom: 6 juli-nedbrytningen gav splendor CQ-badge 75 + EEAT-badge 85 → medel = 80 ≈ 79 ✓ = **prediktor-formeln (slutsats A) nu 15/15 (±1)**. Noterat i `lynx-score.php`.
- **11 nya färska SCORE på orörda sidor (= nya FÖRE-baselines, färsk skala):** vita-pormaskar 16→70 · finnar-gravid 22→69 · hormonell-acne 35→70 · resultat-acne 12→55 · tonarsacne →70 (första) · vakuumsug-pormaskar →60 (första) · torr-hy →74 (första) · splendor-x →79 (första) · kemisk-peeling 10→60 · fragor-svar 36→56 · finnar-brost 11→72. Klustret ~55–75 på service-/problemsidor stödjer takmodellen; låg-änden (resultat-acne 55, kemisk-peeling 60) = tunnare/utility-innehåll. **Redan kända färska (6 juli-listan i lynx-score) — BEKRÄFTADE i Pages-vyn:** milier 75 · hudproblem/ 60 · stress-finnar 67 · kontakt 60 · melasma 23 (färsk-låg).
- **fragor-svar AIQ OK→POOR (FÖRSÄMRAD) + SCORE 36→56 färsk:** sidan ÄR wave 2-ändrad (FaceTime→Google Meet, live 6 juli) men ändringen är minimal och AIQ är SERP-baserad → trolig extern/omskalnings-effekt, EJ attribuerad utan frågelist-detalj. Ny §9-bevakningstråd (be om §1.5-listan: vilken fråga föll?).
- **NY RAD: "missing localized" (DRAFT-tag):** VALUE 27 · KW **616**(!) · CLICKS 0 · ingen URL · enda raden med AI FEATURES-toggeln AV · WORDS/STATUS tomma. Troligen LYNX-systemrad för sökord utan mappad/lokaliserad sida — men 616 KW är för stort för att ignorera om det är riktiga icke-mappade sökord. Ny §9-bevakningstråd (fråga ägaren/LYNX).
- **GAPS-rörelser på orörda sidor (konkurrent-relativa, ingen åtgärd):** vita-pormaskar 2/2→0/0 · milier 2/2→0/0 · finnar-gravid 3/1→3/0 · hormonell-acne 3/2→2/2 · resultat-acne 2/2→0/0 · melasma 3/1→**0/2** · kemisk-peeling 3/2→2/1 · finnar-brost 2/2→0/2.
- **KW-drift Tier 1-/högKW-sidor (orörda, ambient — bevaka i GSC-passet):** rosacea 221→**201** (−9 %) · perioral-dermatit 194→**179** (−8 %) · seborre 168→161 · milier 173→164 · pormaskar-KW ej i bandet. Under KW-vaktströskeln per sida men bred riktning nedåt — samma mönster som 12:36-bandet; fortfarande ej attribuerbart (sidorna orörda).
- **P.PRICE fylls på brett (till §13.I-spåret):** HIGHEST: microneedling-acne · ipl-pigmentflackar · vakuumsug-pormaskar · kemisk-peeling · microneedling-stora-porer · skinbooster · infuzion (+ sedan tidigare alma-harmony/ansiktsbehandlingar) · HIGH: splendor-x · LOWEST: laser-acne · prx-t33 · dermabrasion (+ microdermabrasion).
- **OFÖRÄNDRAT:** alla AI COPY-badges konsistenta med 13:58 (flagg-sidornas badges fortfarande stale/pre-V2) · acne-myter + fragor-svar HUMAN ✓ · kontakt/resultat-pormaskar AIQ POOR ✓ · microneedling-acne + postinflammatorisk AIQ GOOD ✓ · melasma SCORE 23 = gammal kvar.

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

### SIDREGISTER — FLYTTAT till `lynx-data.php` (egen sektion; låg tidigare här i 2 jul EM-snapshotten)
*(AKTUELL version bor i `lynx-data.php` — uppdatera ALDRIG här. 2 juli-versionen bevarad som kommentar nedan, verbatim:)*
<!-- sidregister-versionen per 2 juli:

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
-->

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
