<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX LOG — arbetslogg (händelsehistorik, senaste först)

```
▣ MANIFEST
KIND          HISTORIK — append-only, aldrig retroaktivt uppdaterad. INGEN öppen tråd får ha loggen som enda bärare.
LADDA-NÄR     "vad beslutades om X, och varför?" — sällan. Aldrig för att veta nuläget (det bor i lynx-START LÄGE + lynx-backlog).
KANONISK-FÖR  §11 arbetsloggen: händelsehistorik + POST-MALLEN + arkiv-policyn R1–R6
PEKAR-PÅ      lynx-log-archive = äldre poster (fulltext) · lynx-backlog = öppna trådar · lynx-status = mätstatus (§11.1)
```

> Vad vi gjort + varför, per session. Referens/historik — läs vid behov (t.ex. "vad beslutades om X?"). Äldre poster arkiveras till `lynx-log-archive.php`. State/nästa-steg bor i `lynx-START.php`, inte här.


> **⚠️ §-referenser i denna fil avser filstrukturen vid postens datum.** Sedan 8 juli bor **§8, §8.1, §9, §9.0, §9.1 och §12 i `lynx-backlog.php`** (ej lynx-START). §-KARTAN i `lynx-START.php` är resolvern. Historik uppdateras aldrig retroaktivt.

## 11. Arbetslogg (vad vi gjort + varför)
Senaste först. Korrelera mot LYNX-refresh. Per omskrivning: spara **FÖRE-baseline** + **prediktion** (§10 steg 1) så modellens träffsäkerhet kan mätas när EFTER kommer. **All rå LYNX-data bor i KOLUMNFILERNA** (filkarta överst i **`includes/lynx/lynx-data.php`**) — loggen bär händelsen, inte datan.

### 📋 POST-MALL (obligatorisk från 2026-07-08 — max ~8 rader / ~900 tecken per post)
```
### ÅÅÅÅ-MM-DD #N — [rubrik, max 120 tecken: nyckelfynd eller leverabel, inga bisatser]
**In:** 1 rad — vad kom in/gjordes; dumpar → vilken rådatafil ("sparad FÖRST → lynx-data 14:16").
**Fynd:** max 5 punkter à 1 rad. Varje punkt SLUTAR med en tagg:
   [ÖPPEN → §9-rad] · [RATIFICERAD → fil/§] · [STÄNGD] · [BASELINE → §11.1]
**Åtgärd:** 1 rad — vilka filer uppdaterades + nästa steg.
**Kontroll:** 1 rad — vad kördes + utfall (SLUTKONTROLLEN, §0.1 VID SLUT; siffror räknade ur diffen). Obligatorisk från 10 juli.
**Baseline/prediktion** (endast sid-poster): 1 rad — FÖRE-siffror + förväntat EFTER (kanonisk kopia i §11.1).
```
**Hårda ramar:** (1) blockdetaljer per omskrivning loggas ALDRIG i posten — git-diffen och `lynx-examples` äger dem; (2) §13.E-kvittensen skrivs som EN rad ("kvittens grön: sökord / punkt-count / streck"), grep-siffrorna går i commit-meddelandet; (3) en regel- eller modelländring beskrivs i REGELFILEN — posten får bara pekaren, aldrig samma prosa två gånger; (4) **en öppen tråd får ALDRIG ha loggen som enda bärare** — skapa §9-raden först, länka sen; (5) **Kontroll-raden är obligatorisk** (SLUTKONTROLLEN, §0.1) — en post utan den är ofullständig.

### 🗄️ Arkiv-policy (beslutad 2026-07-02, skärpt 2026-07-08)
Fulltext flyttas till **`includes/lynx/lynx-log-archive.php`**; kvar här blir en enrads-referens (format: `- DATUM #N kärnrubrik — utfall; öppet kvar: X (→ §9-rad)`). Syfte: en session behöver bara de senaste posterna.
- **R1 (sid-poster):** arkiveras FÖRST när sidans §11.1-rad är MÄTT och stängd (EFTER loggat, modellen förfinad, backport listad). Aldrig före — FÖRE-baseline + prediktion behövs i mät-loopen.
- **R2 (process-/modell-/leveransposter):** arkiveras så snart innehållet är **ratificerat i en regelfil eller ersatt av nyare post** — de bär inga baselines och behöver inte vänta på mätning. **Förkrav:** öppna deltrådar flyttade till §9, operativa regler till regelfil, korspekare uppdaterade.
- **R3 (verifieringsposter):** arkiveras när en senare post verifierar samma sak på högre nivå (staging-kontroll ersätts av produktions-verifiering).
- **R4 (städpass-trigger):** loggen hålls under ~30 kB / ~15 aktiva poster. Över det: kör städpass innan nästa session börjar arbeta.
- **R5/R6:** enrads-referensen stryks helt när dess sista öppna deltråd stängts — git + arkivet har fulltext.

### LYNX-baseline — de 4 SIGNIFICANT-sidorna (2026-06-30, före ändring)
| Sida | VALUE | PAGE TYPE | SCORE | GAPS ⚡/💡 | AI COPY | AI QUESTIONS | P. PRICE | KW |
|------|-------|-----------|-------|-----------|---------|--------------|----------|----|
| acne-ansikte.php | 32 | – | – | –/– | SIGNIFICANT | OK | – | 57 |
| ytliga-blodkarl.php | 42 | – | 22 | 2/2 | SIGNIFICANT | OK | – | 172 |
| behandla-pigmentflackar.php | 14 | – | – | –/– | SIGNIFICANT | GOOD | – | 16 |
| hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | SIGNIFICANT | OK | – | 8 |

### 2026-07-10 #69 — Ägaren levererade de skymda kolumnerna (16:36 + 16:37–38): stjärnsystemet validerat direkt · roaccutan AIQ POOR · blodprickar = mest klickade sidan · finnar-arr SCORE 9.
**In:** Tre skärmbilder: b–f-segmentet utan popup (16:36, alla kolumner) + VALUE-sorterad vy i två delar (16:37–38, vänster med URL + höger-scrollad med WORDS/CLICKS/STATUS; radmatchning på gemensamma fält, entydig 13/13). **Sparade FÖRST → `lynx-data-archive` (två sektioner).**
**Fynd:**
- **Stjärnsystemet bevisade sig på första försöket:** cystisk-acne KW 21*→19 (den markerade cellen HADE ändrats) · behandla-finnar-arr:s * löstes som oförändrade; WORDS/CLICKS där fortfarande osedda → * kvar. [STÄNGD]
- **AIQ-drift på ORÖRDA sidor, fjärde/femte exemplet: roaccutan OK→POOR · seborroisk-keratos GOOD→OK** → AIQ-bevaka-raden uppdaterad; attribuera aldrig utan §1.5-frågelista. [ÖPPEN → §9-rad]
- **blodprickar CLICKS 549 = sajtens mest klickade sida** (över homepage 381; KW 171) — Tier 2-prion stärkt. **KW rör sig mellan renderingar** (167 kl. 16:36 → 171 kl. 16:38, samma sida) — läs KW som ±brus, aldrig ensam signal. [STÄNGD]
- **finnar-arr SCORE 9 färsk = sajtens lägsta** (nedbrytning → beställningssedeln med blandhy 24). ipl-rosacea MODERATE står kvar (10:e observationen). STATUS 200 + AI FEATURES PÅ + EG "–" på alla 26 sedda rader. [ÖPPEN → beställningssedeln]
**Åtgärd:** `lynx-data-archive` (2 sektioner) · `lynx-data` (26 rader uppdaterade/fyllda + finnar-arr ny; beställningssedel #1) · `lynx-backlog` (AIQ-raden) · denna post.
**Kontroll:** transkription omläst mot alla tre bilderna (radmatchningen verifierad via KW+SCORE+GAPS-tripplar); stat läses i separat anrop före commit-meddelandet.

### 2026-07-10 #68 — LYNX-dump 16:22 sparad: 🆕 "Human-like Score" som AI STYLE-delsiffra · CQ-anomalin replikerad på cryopen · AI STYLE 85 på två orörda sidor.
**In:** Två ägar-skärmbilder 16:22 (AICOPY-vyn b–f + SCORE-popups blodprickar/cryopen). **Sparade FÖRST → `lynx-data-archive` (12 rader) + `lynx-score` (popuparna verbatim) 16:4x.**
**Fynd:**
- 🆕 AI STYLE bär numera delsiffran **"Human-like Score"** (85/85 på båda = speglar badgen, n=2) — första gången synlig i UI:t; taxonomin externa verifieringen antog är bekräftad. [RATIFICERAD → lynx-score-sektionen]
- CQ-badge-anomalin (badge 60 vs subs 92/95/94) replikerad på cryopen, med Depth/Evidence-raderna saknade i popupen; EEAT-klampen 60 ✓ på båda. Slutsats A ✓ på cryopen; blodprickar-popupens Overall skymd (rad 75 vs medel 73,5 — noterat, ej attribuerat). [STÄNGD]
- AI STYLE 85 på två ORÖRDA sidor = näst högst uppmätt — orörd copy kan ligga högt. [STÄNGD]
- Celler: NYTT blandhy **24** (lägsta-klassen — nedbrytning vid tillfälle) · cryopen/dermapen/fet-hy 60 · finnar/finnar-ansikte "–" · ÄNDRAT VAL-drift ±1 (behandla-finnar-arr, cystisk-acne) · OFÖRÄNDRAT övriga 4. Ingen rad är en omskriven sida → ingen mät-loop triggad. [STÄNGD]
**Åtgärd:** `lynx-data-archive` · `lynx-score` · `lynx-data` (6 rader uppdaterade + 6 nya) · denna post.
**Kontroll:** transkriptionen läst EN gång till mot båda bilderna före commit (§0.1 steg 3) — 12 listrader + 2×13 popup-värden stämmer; popup-Overall blodprickar markerad (?); stat läst i separat anrop före commit-meddelandet.
**Addendum (ägarfråga samma session):** inga celler blankades — de 6 befintliga radernas skymda kolumner behölls orörda ("kolumn ej synlig → rör inte cellen"); de 6 nya radernas tomma celler = "aldrig sedd efter 30/6" (gamla värden i arkivinventeringen). Ägarens heuristik ratificerad i uppdateringsreglerna (`lynx-data`), BÅDA halvorna: synliga värden oförändrade ⇒ skymda troligen också · synliga värden ÄNDRADE ⇒ ny `*`-markör på Sedd-datumet (skymda rimligen förändrade men okända; senast kända värden står kvar). Dagens två VAL-drift-rader (behandla-finnar-arr, cystisk-acne) fick markören — **skärpt till CELLNIVÅ på ägarbesked:** `*` sitter på varje skymd cells värde (inte på Sedd), så varje siffra bär sin egen trovärdighet och framtida jämförelser kan välja bara betrodda värden. Ramprincipen ratificerad ovanför AKTUELLT LÄGE: exporten är imperfekt → bästa möjliga bild med kända glapp; beslut som kräver säkerhet föregås av riktad färsk verifiering.

### 2026-07-10 #67 — HELSAJTSSVEP före ledigheten på ägarfråga ("100% säker?"): 137/137 sitemap-sidor HTTP 200, 0 PHP-fel — sajten lämnas fullverifierad.
**In:** Ägarfråga om fullständig säkerhet. Svar genom mätning: samtliga sitemap-URL:er testade mot produktionen (inte bara de ändrade sidorna).
**Fynd:**
- 137/137 sidor HTTP 200 med 0 PHP-fel i utdata (Warning/Notice/Fatal/Parse/Deprecated). Tillsammans med #65/#66: alla ändringstyper innehållsverifierade, 15/15 lynx-filer tomma. [STÄNGD]
- Redovisade gränser för garantin: bokningsflödet är extern tjänst (länkar/prisklasser verifierade, ej genomklickade) · orört innehåll orört · hosting-drift utanför repot; inget deployas under frånvaron. [STÄNGD]
- Metodnot: första svepet fick 000 på allt — macOS-sed strök inte `<loc>`-taggarna (`\?` ogiltigt i BRE; `-E`-flaggan krävs). Kontrollen som räknar OK-rader fångade det direkt. [STÄNGD]
**Åtgärd:** denna post. Main orörd (2 bokförings-commits släpar till nästa merge). Ägaren ledig 3 veckor — läget i `lynx-status` gäller.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — 1 lynx-fil; stat läst i separat anrop före commit-meddelandet.

### 2026-07-10 #66 — CryoPen-återbesöket 295 kr BEKRÄFTAT (ägar-skärmbild av hela prislistan) — Milier/CryoPen-tråden från 2 juli helt stängd.
**In:** Ägar-skärmbild 16:12, bokningssystemets CryoPen-lista (transkriberad här som prisfacit): **behandling** 1 st 1995 · 2–3 st 2995 · 4–6 st 3995 · 7–10 st 4995 · 11–20 st 7995 · 21–50 st 15995 kr · **återbesök** 1 st 295 · 2–3 st 395 · 4–6 st 495 · 7–10 st 695 · 20 st 1995 · 50 st 2995 kr.
**Fynd:**
- Återbesök 1 st = 295 kr ⇒ FAQ-meningen på `hudforandringar` stämmer (frågan avser EN åldersvårta). Sista öppna siffran ur 2 juli-beställningen stängd; §9-raden kryssad. [STÄNGD]
- Sajtens alla CryoPen-prisfält ("Från 1995 kr": cryopen, hudflikar, fodelsemarken, blodprickar, seborroisk-keratos) = 1 st-priset ✓ konsistenta. Listan sparad här som facit för från-pris-surveyn (§9.2). [STÄNGD]
**Åtgärd:** `lynx-backlog` (§9-raden kryssad) · denna post. Inga sidfiler rörda — allt stämde.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — 2 lynx-filer; stat läses i SEPARAT anrop före commit-meddelandet (#65-erratans regel).

### 2026-07-10 #65 — Andra main-pushen (PR #242) produktions-verifierad: alla dagens prisfixar live — sista passet före ägarens 3-veckorsledighet.
**In:** Ägarbesked "pushat till main, kolla så allt fungerar" (merge 3847792e, 0 commits saknas).
**Fynd:**
- Live-svep 6/6 ändrade sidor: HTTP 200, 0 PHP-fel. Hudterapeutens val renderar nya priser (PriceClass_4 ×6 · Spara 990/3980 ×5 vardera; gamla mönster 0). Hudforandringar-FAQ:n renderar "från 1995"/"första behandlingen 1995" (×2 vardera), inga 1595 kvar. Lynx-filer 0 bytes (stickprov 4). [STÄNGD]
- Hero-fältet "Från 1995 kr" renderas inte heller på hudterapeutens-val-mallen — konsistent med 799-upptäckten; survey-raden i §9.2 täcker frågan. [ÖPPEN → §9.2-rad]
- Öppet efter ledigheten: CryoPen-återbesöket 295 kr (obekräftat, §9-raden) · från-pris-survey · smärtfritt-passet · microneedling-rewriten (AI STYLE-testet armerat, väntar nu på LYNX-refresh av dagens sidor). [ÖPPEN → §9]
**Åtgärd:** denna post. Main = staging t.o.m. b272cd37; endast denna bokförings-post släpar till nästa merge.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — 1 lynx-fil; stat läst efter sista editen, före commit-meddelandet.
**Errata (samma session):** bokförings-committen ce79e1fa skrev "10+/0−" mot faktiska 9+/0− — TREDJE gången i dag stat och meddelande skrevs i samma svep (#62-erratan, sen igen). Roten är buntningen, inte slarvet: steget "läs stat" och steget "skriv meddelande" måste vara TVÅ verktygsanrop. Detta errata-commit görs så.

### 2026-07-10 #64 — Milier-verifieringen stängd + CryoPen-FAQ:n rättad (ägarbesked: "milier stämmer, cryopen är från 1995kr").
**In:** Ägar-verifiering mot bokningssystemet, svar på 2 juli-beställningen.
**Fynd:**
- Milier bekräftade: enstaka 495 kr + paket 1595/3995/4995 — sajten stämmer, inget ändras. [STÄNGD]
- CryoPen från 1995 kr ⇒ FAQ-svaret "Vad kostar det att ta bort en åldersvårta?" på `hudforandringar` bar gamla priset på TVÅ ställen i samma mening (från 1595 · första behandlingen 1595) — båda → 1995. Enda förekomsten i repot (grep); cryopen.php + seborroisk-keratos.php redan rätt. [STÄNGD]
- Kvar EN siffra ur 2 juli-beställningen: CryoPen-återbesöket 295 kr/åldersvårta — obekräftat, frågan ställd till ägaren. [ÖPPEN → §9-raden]
**Åtgärd:** `hudproblem/hudforandringar/index.php` · §9-raden uppdaterad · denna post. Väntar: ägarens merge → live-svep.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — 1 sidfil 2 rättade tal i samma FAQ-text + 2 lynx-filer; stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #63 — Från-priset 799→999 kr på fyra sidor (ägarbeslut): konventionen förklarad — per behandling i 5-paketet; 799 var före höjningen.
**In:** Ägarbesked: *"från 799 kr ska nog bli från 999 kr och beror på höjning av priset på 5 behandlingar … även om det inte syns ska sidan vara korrekt för ai."*
**Fynd:**
- Konventionen: från-pris = per behandling i 5-packet. 799×5 = 3995 = gamla 5-packpriset; efter höjningen till 4995 → 999. Paketkorten på sidorna stämde alltså redan — bara från-fältet släpade. Fältet renderas inte men rättas ändå (korrekt för AI). §9.2-raden 799 kr stängd genom fixen. [STÄNGD]
- Survey: ~150 `Från X kr`-fält sajtbrett med obekräftad konvention/färskhet (t.ex. hudterapeutens-val 1995 = styckpris; per konventionen 1199?) — eget pass efter ledigheten. [ÖPPEN → §9.2-rad]
**Åtgärd:** `porrengoring` + `djuprengoring` + akne- + rosacea-undersidorna (commit cfd7ef62) · §9.2 (799-raden stängd, survey-rad ny) · denna post. Väntar: ägarens merge → live-svep.
**Kontroll:** grupperad diff 4+/4− symmetrisk (ett mönster, fyra filer); stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #62 — Prisfix Hudterapeutens val på ägar-rapport: undersidan låg kvar på gamla prisklassen — text OCH boknings-URL:er rättade.
**In:** Ägar-skärmbild av bokningssystemets prislista (Hudterapeutens Val 1995 kr/70 min) + rapport "fel pris". Bilden läst direkt; ej LYNX-data.
**Fynd:**
- Undersidan sa 1595 kr (hero + 2 block) med paket byggda på gamla priset OCH boknings-URL:er på PriceClass_3; översikten `ansiktsbehandlingar.php` stämde redan (1995/4995/5995, PriceClass_4). Rättat 1 fil 15+/15−: styck 1995 · 3-paket 4995 · spara omräknat 990/3980 · PriceClass_3→4 (6 URL:er). [STÄNGD]
- Korskoll av skärmbildens övriga 7 rader mot översikten: 8/8 stämmer. Sidofynd: "Från 799 kr" i hero på akne-/rosacea-undersidorna matchar ingen bokningsrad. [ÖPPEN → §9.2-rad]
- display_errors-raden nyanserad med ägarens bedömning 10 juli: lynx-URL:erna besöks aldrig och är oviktiga; radens kvarvarande motiv är fel på riktiga kundsidor. [ÖPPEN → §9.2-rad]
**Åtgärd:** `hudterapeutens-val/index.php` (commit 479e33dd) · §9.2-rad (799 kr) · denna post. Väntar: ägarens merge → live-verifiering.
**Kontroll:** grupperad diff 15+/15− exakt symmetrisk (varje minusrad har sin plusrad); staging-render verifierad efter deploy (16 träffar nya priser, 0 gamla); stat läst efter sista editen, före commit-meddelandet.
**Errata (samma session):** bokförings-committen c8473055 skrev "11+/0−" mot faktiska 10+/0− — stat och meddelande skrevs i samma svep i stället för i ordning (§0.1 steg 2-brottet från #49, upprepat). Talen i denna post är kontrollräknade efteråt.

### 2026-07-10 #61 — Ägarens main-push produktions-verifierad: svepen + parse-fixen live — ägaren ledig 3 veckor.
**In:** Ägarbesked *"nu har jag pushat till main, bevaka"* (merge 2960def5). Ingen LYNX-data.
**Fynd:**
- Live-svep: 64/64 ändrade sidor HTTP 200 + 0 PHP-fel; nya strängar renderar (3 meta · specialist-titlar · Dermapen/CryoPen · microneedling-bilden); gamla mönster 0 träffar. [STÄNGD]
- Lynx-filerna 15/15 = 0 bytes på live — publika parse-felet på gamla START BORTA; spökfilerna (3 gamla namn) tomma. §9.2-radens display_errors-symptom synkat (§0.2); felklassen står kvar som öppen rad. [ÖPPEN → §9.2-rad]
- Main saknar endast bokförings-commits (lynx-only) — går med i nästa ordinarie merge. Mätklockan: svepen är attribut-/meta-nivå, inga §11.1-rader ändras. [STÄNGD]
**Åtgärd:** `lynx-status` (ny LÄGE-bullet: svepen live + ägaren ledig 3 veckor) · `lynx-backlog` (§9.2-synk) · denna post.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — alla radmönster avsedda; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #60 — Parse-fällan neutraliserad på ägarbeslut ("OK vi kör") — staging helt ren, redo för ägarens merge.
**In:** Ägar-OK på #59-rekommendationen. Ingen LYNX-data.
**Fynd:**
- Arkivrad 200 neutraliserad ("exit-vaktade filer" + avstegsnot på raden enligt VENTILEN — HISTORIK-ändring på ägarbegäran, commit 42226c4a). [STÄNGD]
- Efter staging-deploy: arkivfilen 191→0 bytes; helkoll 15/15 lynx-filer svarar 0 bytes. §9.2-radens (a) klar; (b) regelrad i START + tur-parsande rader kvarstår. [ÖPPEN → §9.2-rad]
**Åtgärd:** `lynx-log-archive` (rad 200) · `lynx-backlog` (§9.2-raden) · denna post. Ägaren pushade main medan posten skrevs — nästa: live-svep (64 sidor + lynx-filerna + gamla START-felet).
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — alla radmönster avsedda; staging-verifiering 15/15 = 0 bytes; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #59 — Main-push-undersökning inför 3 veckors frånvaro: diffen ren och staging-verifierad — GO med EN reservation (parse-fällan i arkivfilen).
**In:** Ägar-uppdrag: är staging→main säkert att pusha? (3 veckors ledighet, inget får gå sönder.) Ingen LYNX-data.
**Fynd:**
- Innehållsdiffen = exakt de fyra kända svepen (Dermapen/CryoPen-attribut · specialist_url_title · 3 meta · microneedling-bildfixen) + lynx-filerna; main har NOLL eget innehåll — 107 main-commits är enbart PR-merges från staging. Microneedlings återrullade rewrite är INTE med. [STÄNGD]
- Alla 64 ändrade sidor verifierade på staging: HTTP 200, 0 PHP-fel i utdata, nya strängar renderar, gamla mönster 0 träffar; deploy-pipelines identiska (zip + unzip -o — raderar aldrig, spökfiler kvarstår exit-vaktade). [STÄNGD]
- Live visar i dag publikt parse error på gamla START (display_errors PÅ, serverns hemkatalog i klartext) — mergen LAGAR den. [ÖPPEN → §9.2-rad]
- Men `lynx-log-archive` rad 200 citerar php-öppningstaggen bokstavligt och fäller filen på samma sätt — mergen INFÖR ett nytt publikt parse error på motsvarande URL om raden inte neutraliseras först (HISTORIK = ägarbeslut). [ÖPPEN → §9.2-rad]
**Åtgärd:** 2 nya §9.2-rader (display_errors · parse-fällan) · denna post. Rekommendation: neutralisera arkivrad 200 → merga → verifiera live med samma 64-sidorssvep.
**Kontroll:** grupperad diff läst (mönstret `^(\+\+\+|---) `) — alla radmönster avsedda, 2 lynx-filer; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #58 — Femte intro-incidenten trots #57-förenklingen — ägarbeslut: intro-problemet parkerat i §9.3, tas upp senare.
**In:** Ägarbesked efter ny testsession (ingen LYNX-data): hälsningen uteblir fortfarande — *"lägg den på to do till senare".*
**Fynd/beslut:**
- Två regelfixar samma dag (#56/#57) ändrade beteendet men inte utfallet — felet bedöms sitta i terminalens visning av text kring verktygsanrop, inte i ritualtexten. Vidare utredning stoppad på ägarbeslut. [STÄNGD]
- Ny §9.3-rad INTRO-RENDERINGEN med nästa steg när den tas upp (verifiera listhälsningen · annars rapportera visningsbuggen till Anthropic). §0.1 står kvar som bästa försök. [ÖPPEN → §9.3-rad]
**Åtgärd:** `lynx-backlog` (§9.3-rad) · denna post. Inga sidfiler rörda.
**Kontroll:** grupperad diff läst (korrigerade mönstret `^(\+\+\+|---) `, §9.2-raden om det är öppen) — alla radmönster avsedda, 2 lynx-filer; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #57 — Fjärde intro-incidenten: testsessionen tyst igen — ägarbeslut: tidshälsningen SKROTAD, vanlig hälsning + information räcker.
**In:** Ägar-test 11:15 (skärmbild av ny parallell sessionsstart — ingen LYNX-data): ingen hälsning före verktygsanropen trots #56-regeln. Ägarens beslut: *"det blev för komplicerat så vi skippar tidsgrejen … vanlig hälsning och information".*
**Fynd/beslut:**
- Fyra incidenter, fyra olika vägar (hoppad · `date`-buntning · svald av terminalen · tyst testsession) — tidskravet var den gemensamma komplexiteten: det tvingade in `date` före första raden. [STÄNGD]
- §0.1 förenklad: vanlig hälsning + info som första textrad, inget `date`, ingen tidsvariant; ÖPPNINGSLISTAN (turens sista meddelande, visas alltid) öppnar med samma hälsning. [RATIFICERAD → §0.1]
**Åtgärd:** `lynx-START` (§0.1 VID START + ÖPPNINGSLISTAN-raden) · denna post. Inga sidfiler rörda. Ägaren testar vid nästa sessionsstart.
**Kontroll:** grupperad diff läst (korrigerade mönstret `^(\+\+\+|---) `, §9.2-raden om det är öppen) — alla radmönster avsedda, 2 lynx-filer; state-synk-grep på "tidshälsning"/"tid på dygnet"/"God morgon" = 0 döda referenser kvar; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #56 — Tredje intro-incidenten: hälsningen skrevs enligt regel men visades aldrig — hej:et flyttat till sessionens FÖRSTA rad, tidshälsningen till öppningslistan.
**In:** Ägar-rapport 11:03 (skärmbild av sessionsstarten — ingen LYNX-data, inget att spara): ingen hälsning syntes, *"intron fungerar inte"* — tredje gången.
**Fynd/beslut:**
- Hälsningen FANNS i konversationen (efter `date`, före `git status`, exakt enligt #55-regeln) men nådde aldrig terminalen — text mitt i en verktygskedja garanteras inte visas; pålitligt är bara turens FÖRSTA och SISTA meddelande. Rotorsaken var alltså visningen, inte beteendet — därför hjälpte inte #53/#55-skärpningarna. [STÄNGD]
- §0.1 VID START omskriven: neutralt hej som sessionens allra första rad före ALLA verktygsanrop · tidshälsningen öppnar ÖPPNINGSLISTAN (turens sista meddelande, visas alltid) · `date`-ensam-kravet borttaget (skyddade en ordning som inte längre bär hälsningen). [RATIFICERAD → §0.1]
**Åtgärd:** `lynx-START` (§0.1 VID START + ÖPPNINGSLISTAN-raden) · denna post. Inga sidfiler rörda.
**Kontroll:** grupperad diff läst (korrigerade mönstret `^(\+\+\+|---) `, §9.2-raden om det är öppen) — alla radmönster avsedda, 2 lynx-filer; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #55 — Ritual-skärpning på ägar-rättelse: `date` körs ENSAM före hälsningen — kontrollen börjar inte förrän hej är sagt.
**In:** Ägar-rättelse vid sessionsstart 10:55 (ingen mätdata): han fick bara datum/tid och sedan kördes kontrollen — hälsningen kom efter kommandona.
**Fynd/beslut:**
- Rotorsak: §0.1 sa "inget kommando före raden" MEN "kolla klockan med `date`" — exekutorn löste motsägelsen genom att bunta `date` + `git status` i ett svep. [STÄNGD]
- §0.1 VID START skärpt med exakt ordning: läs START → `date` ensam → hälsa → först därefter steg 1–3. `date` är hälsningens enda tillåtna förberedelse. [RATIFICERAD → §0.1]
**Åtgärd:** `lynx-START` (§0.1) · denna post. Inga sidfiler rörda; öppningslistan från 10:56 gäller — ägaren har ännu inte valt uppgift.
**Kontroll:** grupperad diff läst (korrigerade mönstret `^(\+\+\+|---) ` pga §9.2-fyndet) — alla radmönster avsedda, 2 lynx-filer; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #54 — Avbrotts-ordningen ratificerad i §0.1: inget försvinner, men inkastat är inte prio — det tas efteråt.
**In:** Ägarbekräftelse på #53-förslaget + principen med egna ord: han ser/kommer på saker medan exekutorn jobbar; inget får försvinna, men de utförs efteråt. Ingen mätdata.
**Fynd/beslut:**
- Fyra steg ratificerade (fånga först: data → §14, idé/uppgift → §9.2 · säg EN rad · slutför pågående till säker punkt · ta det nya sen). Regeln bor i §0.1 UNDER ARBETET; posten pekar bara. [RATIFICERAD → §0.1]
- Fyndlåde-raden stängd; kvar öppna i §9.2: SLUTKONTROLL-grepen · Dependabot. [STÄNGD]
**Åtgärd:** `lynx-START` (§0.1 nytt block) · `lynx-backlog` (§9.2-raden ut, stängd-parentesen uppdaterad) · denna post.
**Kontroll:** grupperad diff läst (körd med korrigerade mönstret — det ratificerade döljer bullet-rader, §9.2-raden om det är öppen) — alla radmönster avsedda; slutlig stat läst efter sista editen, före commit-meddelandet.

### 2026-07-10 #53 — Ritualen skärpt på ägar-rättelse: tidshälsning + fyndlåde-format med lösningsförslag; avbrotts-ordningen saknades → förslag i §9.2.
**In:** Ägar-rättelser vid sessionsstart 10:40 (ingen mätdata): hälsningen föll bort · fynd OCH förslag ska till §9.2 med vad-det-är + lösningsförslag · en bit av förra sessionens diskussion kom aldrig med.
**Fynd/beslut:**
- §0.1 VID START skärpt: hälsa utifrån tid på dygnet (`date`, gissa inte) + säg att du kontrollerar, läser läget och sedan presenterar alternativen. [RATIFICERAD → §0.1]
- §9.2-formatet skärpt: `vad det är — var det syns — mitt förslag på lösning`; även egna förslag parkeras i lådan för klump-beslut. [RATIFICERAD → §9.2]
- "avbrott/avbryt" = 0 grep-träffar i filsetet — avbrotts-ordningen kom aldrig med (SLUTKONTROLLEN kom med, #49). Förslag skrivet, väntar ägarbeslut. [ÖPPEN → §9.2-rad]
- Kontrollen fångade eget fynd: grupperings-grepen döljer bullet-rader (`^[+-]{2}` matchar även "+- "), 4/14 plusrader osynliga — avstämt mot stat i två räknevägar. [ÖPPEN → §9.2-rad]
**Åtgärd:** `lynx-START` (§0.1) · `lynx-backlog` (§9.2 format + ny rad + §12-notisen) · denna post. Inga sidfiler rörda.
**Kontroll:** grupperad diff läst — alla radmönster avsedda (3 lynx-filer, inga sidfiler); slutlig stat läst efter sista editen, före commit-meddelandet; siffrorna dit ur staten.

### 2026-07-10 #52 — R4-städpasset: 27 poster arkiverade, loggen 119,7→71,2 kB; sid-poster med öppna §11.1-rader står kvar (R1).
**In:** Ägarval (*"1 och 2 av dina förslag"* — detta var 2; passet ägar-beställt 8 juli, §9.3). Ingen mätdata.
**Fynd/beslut:**
- 27 poster → arkivet enligt R2/R3: processposterna 7–8 juli (#17–#22, #24–#40) · dumpposterna #15–#16 · wave 2-verifieringen #13 · block-planen em #2 (superseded av REWRITE-SPEC:en i `lynx-examples`). Enrads-referenser kvar i listan nederst. [STÄNGD]
- **R1 håller kvar 25 poster** (dagens #44–#52, #41–#43, #23 + sid-poster vars §11.1-rader är omätta eller har öppna rester) — loggen ligger över 30 kB-målet tills mätningarna stänger raderna; nytt pass då. [RATIFICERAD → arkiv-parentesen nederst]
**Åtgärd:** `lynx-log` (27 block ut, 27 referenser in) · `lynx-log-archive` (fulltext i daterad sektion överst) · `lynx-backlog` (§9.3-raden ✅ · §12 tömd).
**Kontroll:** varje arkiverad rubrik grep-verifierad = exakt 1× i arkivet, 0× i loggen (27/27) · byte-avstämning: 119 699 − 51 781 (flyttat) + 3 297 (referenser) = 71 215 ✓ · arkivet 47 246 + 51 781 + 308 (intro) = 99 335 ✓ · rubrik-count 61→34 · ett minnestal ("68 kB") fångat och rättat till mätta 71 före push.

### 2026-07-10 #51 — Dermapen-logotyp-svepet: 53 filer rättade, fyndlådan tom.
**In:** Ägarval (*"efter detta ska vi göra 1 och 2 av dina förslag"* — detta var 1). Ingen mätdata.
**Fynd:** `image_alt: 'Dermapen Brand Logo'` → `'Dermapen logotyp'` i 53 filer — syskonloggornas "X logotyp"-mönster; siddata §13.K, ingen attributionsrisk. 0 träffar kvar. [STÄNGD]
**Åtgärd:** 53 sidfiler (commit c801c09a) · lynx-backlog (§9.2-raden stängd). Härnäst på ägarval: R4-städpasset (förslag 2).
**Kontroll:** grupperad diff = exakt ett mönster åt varje håll (53+/53−); grep 0 kvar sajtbrett; slutlig stat läst före commit-meddelandet.

### 2026-07-10 #50 — Första Ahrefs-datan in: 3 för långa meta descriptions kortade (riktad fix; GSC/Ahrefs-passet fortsatt parkerat).
**In:** Två Ahrefs Site Audit-bilder 10:12 ("Meta description too long"; crawl-historik: 2 URL:er sedan 4 maj → 3 från ca 15 juni; senaste crawl 6 juli). Ingen LYNX-data.
**Fynd/beslut:**
- Alla tre kortade: presentkort 181→**129** tecken (ägarens formulering efter två underkända förslag — *poängen är ATT kortet kan fås hemskickat, inte processen*) · kemisk-peeling 189→**132** (alla metodnamn kvar) · varumarken/hifu 175→**151** (SMAS/kollagen kvar). §13.H: egna meta-commits (6ca0bf6d + 1f1d83cd). [STÄNGD]
- Ingen av sidorna är LYNX-omskriven → ingen attributionsrisk. Hifu dök upp i issuen ~15 juni = sidans tillkomst; Ahrefs crawlar den (LYNX-bevakan §9 står kvar). [STÄNGD]
**Åtgärd:** presentkort.php · kemisk-peeling.php · varumarken/hifu/index.php. Ahrefs-issuens innehåll dokumenterat här (tråden stängd i samma session — loggen är inte enda bäraren av något öppet).
**Kontroll:** teckenlängder räknade före/efter per meta; grupperad diff = enbart meta-rader; slutlig stat läst före varje commit-meddelande (3+/3− resp. 1+/1−); §6-koll: "digitalt presentkort"/"hudvård" · "kemisk peeling" · "HIFU ultraljud" kvar i nya texterna.

### 2026-07-10 #49 — SLUTKONTROLLEN grundnivå ratificerad: kontroll före varje push, siffror ur diffen; fördjupningen parkerad i §9.3.
**In:** Ägarbeslut efter dubbelkoll-fyndet (#47-räknefelet): *"lägg in grundläggande kontroll och lägg resten på to do".* Fulla förslaget presenterades och godkändes i grundnivå.
**Fynd/beslut:**
- Grundnivån = grupperad diff före push · siffror räknas ur diffen, aldrig ur minnet (tvåvägs-räkning) · dump-transkription omläses mot bilden. Utfallet skrivs som obligatorisk Kontroll-rad i varje post. [RATIFICERAD → §0.1 VID SLUT + POST-MALLEN ram 5]
- Skillnaden mot de raderade checkarna står utskriven i §0.1: per-uppgift, färsk härledning, inget tillstånd som kan ruttna — ingen stående detektor, inga skript i repot. [RATIFICERAD → §0.1]
- Fördjupningen (§13.P-katalogen A–D + självkontrollens gräns) medvetet uppskjuten av ägaren. [ÖPPEN → §9.3]
**Åtgärd:** `lynx-START` (§0.1 VID SLUT + parentesen omskriven) · `lynx-log` (POST-MALLEN + ram 5) · `lynx-backlog` (§9.3-rad). Inga sidfiler rörda.
**Kontroll:** grupperad diff över 3 lynx-filer + diff-stat — **fångade direkt ett eget fel: §9.3-editen hade ERSATT raden om §9.0:s två kvarvarande ägarbeslut i stället för att lägga till (1+/1− där 2+/1− var avsett) — återställd före push.** Övriga radmönster avsedda; state-synk-grep "slutcheck": kvarvarande träffar är HISTORIK + korrekt historia; §-KARTAN oförändrad.
**Errata (samma dag):** ratificerings-committens meddelande (9d54ed9f) skrev "23+/5−"; slutliga diffen var **22+/4−** — talet formulerades innan sista diff-staten lästes. Pushad historik skrivs inte om; regeln fick ordningsklausulen i §0.1 steg 2 av just detta.

### 2026-07-10 #48 — ⛔-förvillkoret UPPFYLLT: microneedlings kompletta SCORE-popup levererad — AI STYLE-FÖRE 60, testet armerat.
**In:** Ägar-dump 09:40 (SCORE-popup för microneedling + Pages-vyn URL-filtrerad "microneedling"). Sparad FÖRST → `lynx-score` (13 delvärden) · `lynx-data-archive` (09:40-snapshot) · AKTUELLT LÄGE (4 rader).
**Fynd:**
- **Komplett FÖRE-fingeravtryck FÖRE main-push:** Overall 60 · CQ 60 [88/88/83/95/92] · EEAT 60 [85/80/85/90] · **AI STYLE 60**. Sidan orörd på live ⇒ giltigt FÖRE oavsett crawl-datum. Efter rewrite: rör sig en delsiffra → crawlen ny → AI STYLE giltigt EFTER. [RATIFICERAD → `lynx-score` + §11.1]
- Overall 60 = medel(60,60) ✓ slutsats A nu 16/16 · **CQ-anomalin består** (badge 60 vs subs-medel 89,2; slutsats C) — rättas den bör Overall hoppa ~75 av sig själv, ej copy-attribuerbart. [STÄNGD → `lynx-score`]
- microneedling-acnearr SCORE 60 färsk (ny rad) · micro-VALUE 66→44 · **dubblettrader med trailing slash i Pages-vyn** → ny bevaka-rad. [ÖPPEN → §9]
**Åtgärd:** `lynx-score` · `lynx-data-archive` · `lynx-data` · `lynx-status` (§11.1 + LÄGE: testet armerat) · `lynx-backlog` (⛔→✅ redo för rewrite · AI STYLE-raden · bevaka-rad). Inga sidfiler rörda.

### 2026-07-10 #47 — Sweep del 2 på ägarval: §9.2-restfynden svepta (25 + 59 filer totalt); ett nytt fynd parkerat med föreslagen fix.
**In:** Ägaren: *"ja fortsätt sweep om du tror det behövs, föreslå fix och lägg dem i din fyndlåda"* — restfynden exekverade, nya fynd parkeras i stället för att utföras. Ingen mätdata.
**Fynd:**
- 25 `$specialist_url_title`-filer rättade *(stod först "24" — rättat samma dag vid ägarbeställd dubbelkoll; diffen räknar 25 titelrader i del 2)*: ämnessidor → "Hudterapeuter specialiserade på X"; typos (Specialisserade/specialisterade) + versalisering fixade; nakna varianten fick minimal casing-fix ("Specialiserade hudterapeuter" ×5); 3 lämnade korrekta ("Se alla hudterapeuter" m.fl.). [STÄNGD]
- Verktyg-bildtitlarna svepta sajtbrett: Dermapen (53) + CryoPen (11) → svensk sammanskrivning. 0 felmönster kvar (grep). [STÄNGD]
- **Nytt fynd, PARKERAT per ägarens instruktion:** `image_alt: 'Dermapen Brand Logo'` på engelska i 53 filer — föreslagen fix `'Dermapen logotyp'` (syskonen använder "X logotyp"). [ÖPPEN → §9.2]
**Åtgärd:** 59 sidfiler (egen commit 7ca56e95) · lynx-backlog (§9.2 två rader stängda + en ny, ärr-radens not, §12 tömd). Titel-/alt-attribut = siddata §13.K → ingen attributionsrisk.

### 2026-07-10 #46 — Ägarvald sweep: $specialist_url_title rättad i 27 filer; kartläggningen fann ≈25 varianter till + två Verktyg-bildtitlar.
**In:** Ägaren valde §9-raden MALL-BOILERPLATE-LÄCKA (öppningslistans punkt 15), full sweep. Ingen mätdata.
**Fynd:**
- 23 aknesidor → "Aknespecialiserade hudterapeuter"; ämnesfel: aldersflackar + melasma → "…specialiserade på pigmentbehandlingar" (solskadad-hy-prejudikatet), atrofiska-arr → "…på ärrbehandlingar", milier → "…på borttagning av milier". 0 träffar kvar (grep). Titel-attribut = siddata §13.K → ingen attributionsrisk. [STÄNGD]
- **"Bevaka även"-kollen:** ≈25 FLER `$specialist_url_title`-varianter sajtbrett med samma felklass (särskrivning/Title Case/typos "Specialisserade"+"specialisterade"/trasig grammatik) + boilerplate-bildtitlarna "Dermapen - Microneedling Verktyg…" (53 filer) och "CryoPen - Kryoterapi Verktyg…" (11 filer). Ett fynd är inte ett uppdrag — parkerat. [ÖPPEN → §9.2, två rader]
**Åtgärd:** 27 sidfiler (egen commit ed50bc76) · lynx-backlog (§9-raden stängd, §9.2 +2 rader, §12 tömd) · lynx-status (beställnings-bulleten synkad).

### 2026-07-10 #45 — Ägarval ur öppningslistan: bildbuggen på microneedling-kortet rättad; mellanslags-fyndet var LYNX-extraktionsartefakt.
**In:** Ägaren valde punkt 26 (fyndlådan: mellanslag före punkt, rhinophyma) + 3 (bildbugg microneedling-kortet). Ingen mätdata.
**Fynd:**
- Pigmentfläckar-kortet på microneedling.php pekade på mogen-hy.webp (dubblett av Rynkor-kortets bild); rättat till pigmentflackar.webp 102x102+200x200 (båda git-spårade ✓) — siddata §13.K, alt/title var redan rätt, ingen copy rörd. [STÄNGD]
- Mellanslaget före punkt finns INTE i källan eller live (`näsan</a>.` curl-verifierad mot produktion; staging = main för filen) ⇒ **LYNX textextraktion infogar mellanslag när inline-länk strippas — Language-fynd i block-text kräver käll-koll före fix.** [STÄNGD → not i `lynx-examples`]
**Åtgärd:** microneedling.php (2 rader, egen commit 39d35509) · lynx-backlog (§9-buggraden + §9.2-raden stängda) · lynx-examples (artefakt-noten). microneedling fortsatt EJ OMSKRIVEN — ⛔-förvillkoret (hela SCORE-popupen) orört och gäller före main-push.

### 2026-07-10 #44 — Femte dumpen utan badge-flytt: flagg-gruppen står stilla, pigmentflackar fortfarande oläst.
**In:** Ägar-dump 08:42 (AICOPY-sorterad Pages-vy, 13 rader, trunkerad i SLIGHT-delen). Sparad FÖRST → `lynx-data-archive` 08:42-snapshot + AKTUELLT LÄGE (13 rader).
**Fynd:**
- **Flagg-gruppen IDENTISK med 8 juli** (2 SIGNIFICANT + 5 MODERATE, samma badges och SCORE) — femte observationen; ytliga-blodkarl nu 9 dygn stale. "Last update"-beställningen kvarstår som diskriminator. [ÖPPEN → §9 ägar-beställning]
- **pigmentflackar SAKNAS i MODERATE-blocket trots AICOPY-sortering** — badge-flytt ELLER omanalys; SLIGHT-delen var trunkerad ⇒ badgen fortfarande OLÄST. Frånvaro ≠ SLIGHT. [ÖPPEN → §9-bevakaraden uppdaterad]
- Endast drift i övrigt: KW −1…−5 på sex sidor (+1 acnearr, +2 bristningar) · VALUE bristningar 18→19, acne-ansikte 27→31 · SCORE oförändrade där synliga. [STÄNGD]
**Åtgärd:** `lynx-data-archive` (snapshot) · `lynx-data` (13 rader) · `lynx-status` (LÄGE-datum + flagg-bullet) · `lynx-backlog` (pigment-raden). Ingen mät-loop utlöst — inga badge-/SCORE-byten.

### 2026-07-08 #43 — VENTILEN införd i §0: reglerna binder exekutorn, inte ägaren. Fyra drift-fel rättade.
**In:** Ägar-beställd regelöversyn efter strukturändringarna (*"kan du se över våra regler snabbt"*). Ingen mätdata. Inget ändrades förrän ägaren godkänt punkt för punkt.
**Fynd:**
- **§0 saknade en ventil.** Bad ägaren om något en "aldrig"-regel förbjöd stod exekutorn inför ett omöjligt val: vägra honom, eller lyda och lämna en oförklarad motsägelse. **Ägarens tre villkor, hans ord:** du följer alltid reglerna · du frångår dem på hans begäran · du får be om att frångå dem och förklara varför. [RATIFICERAD → §0 VENTILEN]
- **`§11.1`-pekaren var död på 14 ställen.** §11.1 flyttade till `lynx-status` 8 juli, men fjorton celler sa fortfarande `lynx-models §11.1` — inklusive `lynx-status` själv, som skickade läsaren till en annan fil för att läsa sig själv, och `lynx-models`, som pekade på sig själv om något den inte längre bär. **§0 förbjuder redan "§N i `<filnamn>`". Regeln bröts fjorton gånger, alltså gällde den inte.** Fixen är att stryka filnamnet, inte att byta det. 11 rättade · 3 lämnade (daterade HISTORIK-poster). [STÄNGD]
- **`lynx-START` §0 bar ett dött imperativ:** *"Kvar att städa: tre filer bär återgivningar av MÄTT/OMÄTT"* — medan §9.3 sa att de ströks 8 juli. Nästa session hade skickats att jaga spöken. Precis felklassen §0.2 varnar för. [STÄNGD]
- **Mätregel-räkningen var fel, och felet var mitt eget från idag:** jag lade till mätregel 6 utan att röra rubriken *"fem lager — alla fem gäller"*. Två celler räknade fel i sex timmar. **Ett tillägg är också en state-synk.** [STÄNGD]
**Åtgärd:** `lynx-START` (VENTILEN i §0 + KIND-tabellen och §-KARTA-fotnoten synkade mot den + döda imperativet ersatt) · `lynx-status` · `lynx-score` · `lynx-models` · `lynx-data` · `lynx-backlog` · `lynx-log` (14 pekare + mätregel-räkningen). Inga sidfiler rörda. **Utfallstest (§0.1): diffen ligger helt i `includes/lynx/` — uppdraget flyttade sig inte. Denna gång var det beställt.**

### 2026-07-08 #42 — Följden av mätregel 6: vår egen "SCORE-determinism" var aldrig belagd, och testet står på fel sida.
**In:** Ingen ny data. Genomgång av vad #41 medför för tidigare slutsatser (ägarfråga: *"har vi lärt oss något nytt som bör noteras?"*).
**Fynd:**
- **RÄTTELSE: "SCORE-determinism på oförändrad crawl ✓" (7 juli-sektionen) följer inte.** En cachad analys visad tre gånger är inte tre analyser. Vi har aldrig sett SCORE köra om samma text. *(AI COPY-determinismen ÄR belagd — determinism #5 var en ny crawl.)* [RATIFICERAD → `lynx-score` slutsats F]
- **Fällan: en sida vid SCORE-taket kan aldrig bevisas färsk.** Diskriminatorn kräver att en delsiffra rör sig; rhinophyma har inget som kan röra sig (Language 95, Readability 90, EEAT klampad). **Ju bättre sidan är, desto mindre mätbar.** [RATIFICERAD → `lynx-score` slutsats G]
- **⇒ AI STYLE-testet hör hemma på en sida med GOLV.** `microneedling` skrivs om härnäst och saknar popup-nedbrytning. **Hela popupen FÖRE main-push = färskhetsdetektorn.** Kan inte tas i efterhand. [ÖPPEN → §9 ägar-beställning]
- **Prövad och förkastad:** att AI STYLE ändå ingår i Overall med ~3 % vikt (väckt av att medel(CQ,EEAT) systematiskt undskattar +1…+1,5). Viktad formel träffar fyra sidor exakt men **faller på hudflikar**, och vikterna anpassades till två av dem. Slutsats D står. Nedskriven så nästa session slipper resan. [STÄNGD]
**Åtgärd:** `lynx-score` (slutsats F + G + den förkastade hypotesen; 7 juli-raden struken med rättelse) · `lynx-backlog` (beställning: microneedlings hela popup före rewrite; rhinophyma utpekad som fel testsida). Inga sidfiler rörda, ingen ny data.

### 2026-07-08 #41 — AI STYLE-testet levererat och obesvarat: SCORE-vyn läste gammal text. Samtidigt kom sidans kompletta EFTER-facit.
**In:** Ägar-dumpar 18:11 (AI Copy per sida, 5 skärmbilder) + 18:13 (SCORE-popup + 2 Pages-fönster), alla rhinophyma-rosacea. Sparade FÖRST → `lynx-examples` (EFTER-facit) · `lynx-score` (popupen) · `lynx-data-archive` (Pages verbatim) · AKTUELLT LÄGE (24 rader).
**Fynd:**
- **SCORE-popupen replikerade ALLA 13 delvärden bit-identiskt** (3:e gången: 6/7/8 juli). Language 95 orört trots språkfixar, Evidence 76 trots namngivna metoder ⇒ crawlen är pre-V2. **`"Analyzed just now"` daterar renderingen, inte crawlen.** [RATIFICERAD → `lynx-status` mätregel 6 · `lynx-score` slutsats E]
- **AI STYLE 70→70 får INTE läsas som "de-AI flyttar inte AI STYLE".** Det vore attribution på stale crawl (mätregel 4). Diskriminator: när en delsiffra rör sig är crawlen ny. [ÖPPEN → §9]
- **Samma sida, samma minut, två vyer, två crawlar:** AI Copy läste V2 (*"Last update: 08 Jul"*, grep-verifierad), SCORE läste pre-V2. Mätregel 3 i sin skarpaste form — och motsatt lutning mot ytliga-blodkarl. [RATIFICERAD → mätregel 6]
- **🎯 KOMPLETT FÖRE→EFTER per-block-facit, det första på en V2-rewrite:** 8🔴/2🟠/5🔵/1🟢 → 0🔴/2🟠/12🔵/2🟢, medel 2,06→1,00. Prediktionen träffade på block- OCH sidnivå. 5 orörda block höll exakt tier (determinism #5). [BASELINE → §11.1]
- **Tre hantverksfynd, alla i `lynx-examples`:** konkret empati läser 🟢 medan empati-vaddering läser AI (block #7, sidans enda tresteg) · 30-års-siffran kausalbelagd cross-page, riktad enblocks-verifiering av bristningar-gissningen · definitionsprosa fastnar på 🟠 även mekanism-ledd (block #2+#4 = micro-fix-kandidat). [ÖPPEN → §9]
**Åtgärd:** `lynx-examples` (EFTER-facit + 4 lärdomar) · `lynx-score` (popup + slutsats E) · `lynx-data-archive` (18:13-snapshot) · `lynx-data` (24 rader; `milierbehandling` SCORE –→60 = mätregel 5 igen) · `lynx-status` (LÄGE, §11.1, mätregel 6) · `lynx-backlog` (AI STYLE-raden omskriven, micro-fix-rad, §9.2-fynd). **Inga sidfiler rörda — diffen ligger helt i `includes/lynx/` (§0.1 utfallstest): uppdraget flyttade sig inte, men mätkorpusen växte.**

### 2026-07-08 #23 — 🎯 TRE EFTER-MÄTNINGAR PÅ EN GÅNG: mogen-hy · solskadad-hy · rhinophyma alla 🟠→🔵. Metoden 6/6. om-oss-badgen bekräftad.
**In:** 12 skärmdumpar (10:45 + 10:55–10:57), komplett AICOPY-vy SIGNIFICANT→HUMAN. Sparat FÖRST verbatim → `lynx-data-archive` (två snapshots). Beställningen från den skurna 10:45-vyn besvarad.
**Fynd:**
- **EFTER-MÄTNING #4/#5/#6: `mogen-hy` · `solskadad-hy` · `rhinophyma-rosacea` alla 🟠 → 🔵 SLIGHT.** Observerad delta (mätregel 4): rhinophyma bekräftades 🟠 så sent som 7 juli, då crawlen ännu läste PRE-V2-texten (logg #14). **Alla tre prediktioner träffade. Metoden nu 6/6 på mätta omskrivna sidor.** solskadad-hy låg dessutom mitt i §1.4:s gråzon (FÖRE-medel 2,09) och landade som förutsagt. [BASELINE → §11.1]
- **`om-oss` badge BEKRÄFTAD 🔵** — beställningen från 6 juli besvarad. om-oss räknas nu in i §1.4-statistiken (EFTER-medel 0,91 → pred 🔵 ✓). [STÄNGD]
- **`pigmentflackar` SAKNAS HELT i vyn** — inte i någon grupp. Pågående omanalys, tom badge. Tredje gången mönstret upprepas. **Frånvaro ≠ SLIGHT: bekräftat.** Att inte attribuera på 10:45-dumpen var rätt. V2 fortfarande OMÄTT. [ÖPPEN → §9]
- **⚠️ AI STYLE-TESTET ÄR FORTFARANDE ÖPPET.** rhinophymas Overall är 74 både FÖRE och EFTER — men AI STYLE ingår inte i Overall (lynx-score slutsats D), så Overall säger ingenting. Rhinophyma är den enda sidan med färsk FÖRE-baseline på nya skalan (SCORE 74 · **AI STYLE 70**) tagen innan vår text gick live. **Beställ SCORE-popupen.** [ÖPPEN → §9]
- **`microneedling` fick en färsk FÖRE-baseline timmar före rewriten:** VALUE 66 · SCORE 60 (var 50) · GAPS 0⚡/1💡 · 🔵 · AIQ OK · P.PRICE HIGHEST · KW 63. WORDS/CLICKS syns inte i denna vy → §10.0 punkt 3 ouppfylld. [BASELINE → §11.1]
- **`statuskoll.py` bevisade sig.** Jag uppdaterade den kanoniska cellen (§11.1) och larmet namngav omedelbart fyra cacher som ljög — i backlog och lynx-data. Jag hade glömt varenda en. Det larmade även på min egen nyskrivna §9-rad, som nämnde tre MÄTTA sidor och ordet OMÄTT (om en fjärde) på samma rad. Raden delades; checken tystades inte. [STÄNGD]
**Åtgärd:** kanonisk cell + alla cacher synkade; §9-tråden ersatt av AI STYLE-testet. Verifiering: statuskoll 4/4 · pekarkoll 0 trasiga. **Kvar öppet:** AI STYLE-popupen (rhinophyma) · pigmentflackars rad · ytliga-blodkärls badge (SCORE 74, badge SIGNIFICANT — väntat, vyerna refreshar oberoende, ägarbekräftat).

### 2026-07-07 #14 — pigmentflackar + rhinophyma re-scannade: BÅDA läste PRE-WAVE-2-texten (V2 omätt) · determinism #3+#4 · EFTER-mätning #3 · AI STYLE-FÖRE-baselines satta
**In:** 22 skärmdumpar 12:15–12:42, allt sparat FÖRST → `lynx-score` / `lynx-examples` / `lynx-data` (snapshot 7 juli; rådumpar i `lynx-data-archive`). Stänger §9-beställningen "pigmentflackar-raden + AI Copy-vy". *(Komprimerad 8 juli; fulltexten med all crawl-forensik finns i git-historiken, ej i arkivet — posten är AKTIV, inte arkiverad.)*
**Fynd:**
- **Båda AI Copy-re-scannerna ("Last update: 06 Jul") läste GAMLA texten.** Blocken har 2 juli-språkfixarna men inte V2-rewriterna (main-merge 1683f85d 6 juli 16:08) ⇒ **crawlfönster 2 juli 16:09 – 6 juli 16:08; V2-omskrivningarna är fortfarande OMÄTTA**, prediktionerna 🟠→🔵 står öppna. [ÖPPEN → §11.1 + §9 Fas 3]
- **Determinism-replikation #3+#4:** pigmentflackar 18/18 + rhinophyma 16/16 block fick exakt samma tier som faciten 2,5 månader tidigare, inkl. 4 typo-fixade block ⇒ **per-block-betyg är deterministiska; rena typo-fixar flyttar inte betyg; betygsflytt = substansändring.** [RATIFICERAD → lynx-rewrite §1.1, lynx-score #0]
- **SCORE:** pigmentflackar 73 = medel(84,60) ✓ (prediktor-formeln 14/14) · rhinophyma-popupen = identisk replika av 6 juli (74/85/60/70) = determinism på oförändrad crawl. **AI STYLE-FÖRE-baselines på färska skalan: pigmentflackar 55** (näst lägst på sajten — första synliga korrelationen AI STYLE ↔ flagg-tyngd) **· rhinophyma 70.** [BASELINE → §11.1]
- 🎯 **EFTER-MÄTNING #3 — behandla-pigmentflackar 🔴 SIGNIFICANT → 🔵 SLIGHT** (tvåstegs-hopp förbi 🟠; observerad delta på vår text ⇒ attribuerbar; metoden 3/3). Per-block 25 apr medel **2,38 → 7 juli 1,38** (2🔴/2🟠/8🔵/1🟢): 5 av 9 flaggade nådde 🔵, men kemisk-kortet 🔴 kvar, micro-kortet 🟥→🔴, $about-2 + IPL-kortet 🟠 ⇒ **sidnivåmålet nått, blockmålet inte helt: micro-fix-kandidat 4 block, frysningen hävd.** Backport-lärdomarna (kortens vinnar-recept, konsult-blockens vi-handlingar) i `lynx-examples` EFTER-sektionen. [ÖPPEN → §9]
- **Två ägarbesked:** SCORE 0/blank = pågående omanalys, inte "trasig" · datum skrivs ut i egen text ("2 juli", ej "2 jul"; LYNX-citat verbatim). Kringdata: ipl-rosacea GAPS 0/0→3⚡/1💡 (rensningen ej permanent) · acne-rygg SCORE 0→69 · gammal→färsk-skala-hoppen är GLOBALA (homepage 28→65 orörd) — jämför aldrig gammal-FÖRE mot färsk-EFTER. [RATIFICERAD → lynx-score #0 + START §0; ÖPPEN → §9 GAPS-tråden]
**Åtgärd:** ingen sidändring (V2 är vår bästa gissning tills EFTER-facit kommer). Ägarbeskedet "uppdateringsenheten är (sida × vy), inte sajten" inarbetat med matris-belägget i lynx-models §11.1 + lynx-score #0 + LÄGE. §9-tråden "pigmentflackar borta ur AICOPY-filtret" STÄNGD. Nästa aktiva arbete oförändrat: microneedling.php (Fas 3b, block-plan i posten 2 juli em #2). *(Ägaren aviserade ultracode-effort för kommande sessioner; för §9.0-passet gäller dock ägar-feedbacken 7 juli: inga agent-utskick.)*

### 2026-07-06 #11 — `pigmentflackar.php` OMSKRIVEN (MODERATE-vågen #10, SISTA) → HELA FLAGG-LISTAN KLAR + process-läxa om att kapa
**pigmentflackar (facit 2 jul, KW244 = största MODERATE):** skrev om 8🔴+4🟠. Orsaks-dubbletten (upprepad i 4 block) DIFFERENTIERAD: Varför äger mekanismen, Baserat-på-orsak/område = kategori-ingresser till bild-listorna, När-söka-artikeln slutar upprepa orsaker. Demografiska skal → konkreta öppningar (Vem öppnar med hormoner ej hudton — ägar-feedback), marknads-/importans-fyllnad → mekanism, 3× identisk sälj-boilerplate i extended → 3 OLIKA (metoder / solens roll / plats-hänsyn). Melanom-säkerhetsrad återinförd icke-diagnostiskt ("fläck som ändrar färg/form/storlek → läkare"). Buggfixar: FAQ-rubrik "ärr av finnar"→pigmentfläckar, relaterade-korts url_title/alt (leverfläck-stavning), IPL-kort-syftningsfel, "Det bör noteras"→"Observera", laser-kort de-AI:at, "Baserat på Färg"→gemena.
**⚠️ PROCESS-LÄXA (ägaren stoppade mig):** V1 kapade sidan −456 ord (−11%) genom att stryka extended-sälj-stycken + slå ihop → ägaren: "känns som vi tar bort ganska mycket info?". **Rätt insikt: pigmentflackar = PRIMÄRSIDA (§13.N) → håll full längd via SUBSTANS, kapa inte.** Ägarbeslut: "börja om från början". V2 återställd från HEAD + omgjord disciplinerat: byt fyllnad mot mekanism, håll längd, variera dubbletter istället för att stryka. V2 = −6,6% (mest avdubblering + fyllnad; §7.4b-diff bekräftade 0 UNIKT resonemang tappat; sökfraser bevarade — "bruna fläckar på kroppen" tappades vid en språkfix och återinfördes). **Ägar-kriterium ratificerat: ordminskning OK så länge inget resonemang/sökord/sökfras tappas.**
**§7.4b (workflow, 2 omgångar):** V1-verifiering (4 granskare) → 4 allvarliga (Vem-extended orsaks-upprepning, FAQ-rubrik-ärr, CTA-boilerplate ×3, alt-språkfel) + juridik (melanom-säkerhet borttagen — återinförd). V2-verifiering (3 granskare) → 0 resonemang tappat; upptäckte att JAG infört behandlings-idé-upprepning i 6 block → de-dubblerad till 1. **Kvar för städpass:** FAQ-sektionen (AI-holdout, ej facit-flaggad), typtitel-versalisering, ärr-boilerplate-sweep (§9).
**MILSTOLPE:** hela den ursprungliga LYNX-flagg-listan (4 SIGNIFICANT + 10 MODERATE = 14 sidor) är nu omskriven. 8 live på main (2 mätta → SLIGHT), 6 på staging (väntar main-push). Nästa: LYNX-refresh-mätning per §11.1 + Tier 1-SLIGHT (rosacea/perioral-dermatit, facit saknas).

### 2026-07-06 #8 — Fas 3 #8+#9: `solskadad-hy.php` + `rhinophyma-rosacea.php` OMSKRIVNA + SCORE-MODELLEN LÖST
**solskadad-hy (MODERATE-vågen #8):** 6🔴+1🟠 de-AI:ade (UV→melanin-mekanism, demografiskt skal bort, 30-års-pivot); workflow-verifierad (8 granskare, tier 7/7 grönt inkl. 2 HUMAN) → staging. **rhinophyma-rosacea (#9):** 8🔴+2🟠 (konsult-boilerplate ×3 → konkret, hela FAQ:n de-AI:ad, orsak-motsägelse harmoniserad); workflow + juridik-agent (0 allvarliga, alla gränsfall hedgade) → staging. Båda staging-verifierade (HTTP 200 + nya fraser). **SCORE-modellen löst via 13 färska nedbrytningar** (rådata+härledning i `lynx-score.php`): Overall≈medel(CQ-badge,EEAT-badge) 13/13; AI STYLE ute ur Overall; EEAT-badge=60 på nästan allt (bara /varumarken/ 78-88); SCORE-tak ~75-77 på våra sidtyper → **jaga ej SCORE, AI COPY+AIQ är spaken.** **pigmentflackar-mysteriet löst** (ägarbesked: blank = pågående omanalys i steg, ej tier-flytt). Ägar-mätprincip: attribution kräver observerad delta, ej deploy-timing. **Boilerplate-fynd:** "Akne Specialiserade Hudterapeuter" (title-attr) läcker på 27 filer, 4 ämnesfel (aldersflackar/atrofiska-arr/melasma/milier) — loggat som eget §9-spår, ägarbeslut om sweep-timing väntar.

### 2026-07-06 #7 — `hudproblem/bristningar/` OMSKRIVEN (MODERATE-vågen #7) + lärdoms-justeringar acne-ansikte & mogen-hy
**bristningar (facit 22 apr, §7 full process):** skrev om 6🔴+1🟠: **Vad** (lång definition → stramad kausal vandring, alla poänger kvar inkl. färgresa/räfflad yta), **Varför** (definitionsdubbletten → orsaks-ingång "Huden klarar att tänjas, men bara i en viss takt"; **differentierings-beslutet taget autonomt** — AskUserQuestion ställd men obesvarad → valde rekommenderade "behåll båda, differentiera", inom §13.D då endast IHOPSLAGNING krävde ägarbeslut; dubblett-aliaset "även kända som striae" struket), **Vem** (demografiskt skal → gravida/tonåringar leder, "vem som helst" sist), **Var** (cirkulär → buken/brösten leder, "var som helst" sist; foster-detaljen dedupad mot Vem), **artikel 1 p1** (skal → ofarliga+självkänsla+krämer/oljor-konkretion), **artikel 1 p2** (🟠: "tveka inte"-boilerplate bort, "varken för tidigt eller för sent"-trösten RAK per §4.2 — bedömar-/kritiker-konflikt löst till substansens fördel), **artikel 2 p2** (marknads-stapel + "självklara valet" #2 → namngivna metoder CO2-laser/Dermapen/kemisk peeling = Evidence-spak). Lätt hand: laser-kortet (acne.php-🔴-mönstret "avancerad… effektiv lösning" → mekanism-öppning), Behandla-steget ("effektiva" + "snabbt och säkert"-löftet bort per §5-juridik), konsultation "hy"→"hud", 3 extended-block (koherensfelet "Denna störning", translationese "för bristningar att dyka upp"/"källa till självmedvetenhet"→"besväras", kan-staplar, Oxford-komma, felkomma, genetik-dubbletten mot Varför-listan trimmad, ofarliga-summeringen ×4→×3), FAQ (svars-först på riskfaktorfrågan §4.2 + 3 språkfel), ikonen "Aldre"→"Äldre", h2 "Våra hudterapeut"→"hudterapeuter". Meta-description "det"→"dem" i SEPARAT commit (§13.H).
**§7.4b (3 agenter):** blind bedömare: 2🟢/3🔵 + 2 🟠-gränsfall (artikelblocken, konf 60–65 → ordnivå-skärpningar; frihets-CTA:n BEHÅLLEN — kritikern hyllade samma mening som §4.2-ton). Diff-granskare: **0 ALLVARLIGA**, 9 gränsfall → alla åtgärdade (claim-mjukningar "hör till de vanligaste"/"påverkar", Alma Hybrid-parentesen → generisk "CO2-laser" då Fraction CO2 också listas). Helhetskritiker: extended-/FAQ-fynden (fixade); resultat-widgeten visar akne-/rosacea-/ärrbilder under "resultat för bristningar" = ägar-fråga (widget-data, rörs ej §6).
**acne-ansikte (mätt sida, upplåst) — ENBLOCKS-EXPERIMENT:** intro-🟠 fixad: importans-wrappern bort ("…självkänslan, men den går att behandla") + Här→Nedan-skylt; "Slutligen"-tic i Plötslig-extended. Prediktion: intro 🟠→🔵 vid nästa refresh — dömer §2-intro-hypotesen.
**mogen-hy (staging — LYNX har aldrig sett versionen):** 3× "Slutligen" + "Emellertid" + dubbla importans-wrappers + "hjälpa individer"→du-form i extended-block; hedgar återställda ×2 efter diff-granskning. **§13.D-läxa: obetygsatt block ≠ granskningsfritt — extended-blocken missades i rewriten för att facit inte betygsatt dem.**
**§13.E-kvittens:** sökord: bristningar 253→241 (mättad, −12 = avfluffade dubbletter), striae 4→3 (medveten dubblett-strykning, alias kvar ×2), stretchmarks 2→2, "akne i ansiktet" 20→20, "mogen hy" 113→112 (mättad); 0 råa apostrofer; 0 em-/en-streck (rad 84-strecket FIXAT); punkt-count FÖRE=EFTER med 4 motiverade dubblett-trimmar (rad 85-summeringen ×4→×3, "tveka inte", laser-kortets marknadsmening, mor/syster-exemplet); staging verifierad HTTP 200 + nya fraser på ALLA 3 sidor (3:e pollen).
**Prediktion (§10 steg 1):** bristningar block-medel FÖRE 1,92 (n=13) → EFTER ~0,8–1,0 → **sidnivå 🟠→🔵 SLIGHT** (§1.4-estimat: 3 fixar krävdes, 7 gjorda). SCORE: färsk FÖRE-baseline 63 (ny skala) → AI STYLE ↑, Language ↑, Evidence ↑ (namngivna metoder), Depth/sökord =.
**Ägar-frågorna STÄNGDA samma dag (besked 6 jul):** (1) resultat-widgeten är MEDVETEN — ärren är de närmaste resultatbevisen vi har (bristningar är en ärrtyp); flagga inte igen. (2) Alma Hybrid och Fraction CO2 = båda CO2-lasrar men OLIKA maskiner, båda används mot bristningar. **SLUTLIGT ägarbeslut (6 jul, tredje vändan): prosan hålls GENERISK** — "CO2-laser, microneedling och kemisk peeling" utan maskinnamn, för konsekvens (vi namnger inte Dermapen för microneedling i prosa); varumärkes-widgeten på sidan bär maskinnamnen. Evidence-trade-off medveten: maskinnamn i prosa är en §1.2-spak (ipl-rosaceas maskin-block = 🟢-facit) — återbesöks BARA om blockets refresh-betyg visar att det behövs, då med ägarfråga först.

### 2026-07-06 #2 — ANDRA EFTER-MÄTNINGEN: om-oss 0 flaggade block (refresh 5 jul) + första om-oss-SCORE-nedbrytningen + pigmentflackar-mysteriet skärpt
**Inkommet (5 dumpar 08:11, save-first → lynx-data leverans 2 + lynx-examples + lynx-score):** alfabetisk Pages-vy (m→p), om-oss SCORE- + GAPS-popup, om-oss AI Copy-vy ("Last update: 05 Jul, 2026").
**Mätning:** om-oss per-block FÖRE 3🔴/2🟠/6🔵/1🟢 → EFTER **0🔴/0🟠/10🔵/1🟢** (synliga; medel ~0,91). Alla tre 🔴 (SHR/erfarenhet/kliniker) → 🔵 + O04 🟠→🔵 = prediktionen träffade; orörda 🔵/🟢 stabila (replikerat från acne-ansikte). **Badge ej direkt synlig i dumpen** (popup skymde kolumnen) men borta ur MODERATE-gruppen + 0 flaggade block → SLIGHT implicerat; **badge-raden beställd som formalitet.** O01-bannern + FAQ-betygen syns inte — be om resten. **O08-läxan bekräftad baklänges:** samma 3 namngivna kliniker som 22 apr fälldes av längd+marknad räddar nu blocket när marknaden är borta (§1.1 nyckel 1, tredje kausala belägget).
**Metodfynd — vyerna refreshar OBEROENDE:** om-oss AI Copy-vy = färsk (5 jul) men SCORE-analysen = "Analyzed 79 days ago" (april). Ytliga-blodkärl har omvända läget (färsk SCORE 74, stale badge) → **Pages-radens kolumner kan ha olika ålder; kolla alltid analysdatum per vy innan FÖRE→EFTER-slutsats** (svarar på gårdagens öppna fråga 3 i princip — datum per sida kvarstår att se).
**Första om-oss-SCORE-nedbrytningen (gammal skala, → lynx-score):** Overall 17 = CQ 57 × EEAT 59 × **AI STYLE 20** / 3640 = 18,5 ≈ ✓ → **multiplikativa formeln 7/7.** AI STYLE 20 = LÄGSTA uppmätta (spannet nu 20–30).
**⚠️ pigmentflackar-mysteriet SKÄRPT:** saknas ÄVEN i alfabetiska vyn (hålet mellan permanent-harborttagning och pormaskar) → verkar ha åkt UR AICOPY-filtret helt (tömd badge/pågående omanalys?), inte bara bytt grupp. **Beställt: URL-sök i Pages + AI Copy-vyn** — KW 244-sidan, styr Fas 3-prio; rör inte pigmentflackar-planeringen förrän detta är löst.
**GAPS-popup om-oss:** samma 3 punkter som 2 jul (redan i lynx-gaps, oförändrade).

### 2026-07-06 — 🎉 FÖRSTA EFTER-MÄTNINGEN: acne-ansikte 🔴 SIGNIFICANT → 🔵 SLIGHT (LYNX-refresh 5 jul, rullande/partiell)
**Inkommet (5 dumpar 07:51, save-first → snapshot i `lynx-data.php` + EFTER-facit i `lynx-examples.php`):** AICOPY-filtrerad Pages-vy + per-block AI Copy-vy för acne-ansikte ("Last update: 05 Jul, 2026").
**Mätning (§10 steg 2–3):** acne-ansikte **SIGNIFICANT → SLIGHT (badge-flytt 2 steg)** · per-block synligt: FÖRE 6🔴/1🟠/2🔵/1🟢 (medel 2,2) → EFTER **0🔴/1🟠/6🔵/2🟢** (medel 0,89) · VAL 32→28 · KW 57→52 · AIQ OK oförändrad · SCORE fortfarande "–". Prediktionen (block-gissningar 🔴/🟠→🔵) TRÄFFADE. **§1.4-medel EFTER-validerad första gången** (0,89 < 1,5 → 🔵 ✓, preliminär tills ev. FAQ-block levererats). **§1.1 nyckel 1 nu KAUSALT belagd:** alla mekanism-omskrivna block gick 🔴→🔵, områdes-blocket 🔴→🟢 — vi ändrade öppningen, betyget flyttade.
**Kvarvarande flagga (micro-fix-kandidat — sidan är MÄTT och får röras igen):** intro-blocket 🔴→🟠, inte 🔵: följer §2-formeln men "För många påverkar den både huden och självkänslan" + "Det viktiga att komma ihåg är att den går att behandla" + "Här går vi igenom"-skylt = ackumulering (§1.3-gradienten ✓). Jfr 🟢-blocket "Nedan tittar vi närmare på varje område" — skylt fäller inte ensam, det är empati-/importans-meningarna före. **Backport-hypotes (§10 steg 5, EJ regel än — 1 sida):** granska intro-/bannerblocken på övriga omskrivna sidor efter samma empati-/importans-mitt när deras refresh kommit.
**Refreshen är RULLANDE:** ytliga-blodkarl SCORE 22→**74** FÄRSK men badge kvar 🔴 (AI Copy-vyn troligen ej omkörd — datum beställt) · ipl-rosacea SCORE 39→**60** dito (badge kvar 🟠) · hudforandringar + behandla-pigment helt orefreshade. **Bonus: bristningar 18→63 + rhinophyma 10→74 = FÄRSKA nya-skalan-FÖRE-baselines för Fas 3-kön** (ej omskrivna = ren omskalning; endast Overall, inga breakdowns → §1.2-testprotokollet fortfarande öppet).
**Öppna frågor (ägaren):** (1) **om-oss + pigmentflackar saknas i dumpens MODERATE-grupp** (alfabetiskt hål mellan mogen-hy och rhinophyma) — tier-flytt eller skuren bild? Skicka raderna. (2) acne-ansikte: fanns fler block under omdömena (FAQ-svar)? Skicka resten för komplett §1.4-poäng. (3) AI Copy-vyns "Last update"-datum för ytliga-blodkarl/hudforandringar/behandla-pigment — är deras SIGNIFICANT stale eller äkta EFTER-kvarstående?
**KW-drift sajtbred** (homepage −11, ytliga −9, acne-ansikte −5, solskadad +2) — även på orörda sidor → ej attribuerbar; bevaka (§13.F), ingen åtgärd.

### 2026-07-03 #2 — `microdermabrasion.php` OMSKRIVEN (MODERATE-vågen #6) — facit-guidad de-AI, §7.4b-verifierad; pris + verktyg rättade efter ägar-facit
**Gjort (facit 25 jun, §7 full process):** skrev om 5🔴+1🟠: **Vad-är-texten** (🔴: marknads-öppning→"hudslipning som föryngrar huden genom att kickstarta dess egen förnyelse" + mekanism; cirkulär summeringssvans bort efter bedömar-fynd), **process p1** (🔴: "noggrant utformad"-marknad + importans-svans→konkret steg-öppning "Behandlingen börjar med en grundlig rengöring"; sökordet återinfört i brödtexten efter diff-granskning), **process p3** (🔴: passiv→aktiv vi, "maximera" bort; serum-syftet återinfört efter diff-granskning), **förberedelse** (🔴: importans-öppning + konsult-boilerplate + trygghets-svans→konkreta vi-handlingar; "erbjuder vi" ÅTERSTÄLLT efter diff-fynd — "börjar vi med" var skärpt processlöfte; ogrundad "hud i bästa skick"-kausalitet ersatt med "hur du förbereder din hud", grundat i går-igenom-allt-claimet), **eftervård p1** (🔴: dubbel importans→imperativ + tidsfönster; "bästa möjliga resultat"-svans→"Hur väl du följer eftervården påverkar också hur bra slutresultatet blir"), **eftervård p2** (🟠: resa/strålande-svansen struken = facit-flaggad fluff; kontakt-CTA:n kvar). Lätt hand (obetygsatta block): $model-kortet ("denna teknik"→vi-röst, "uppmuntrar"-anglicism bort), FAQ1 kongruens ("effektivt"→"effektiv"), FAQ2 ("rekommenderas sessioner"-passiv→"rekommenderar vi behandlingar", "dramatiska"/"progressiv"-anglicismer bort), FAQ4 ("skräddarsys"→"anpassas", §5), FAQ5 ("utan aggressivitet"→"utan att vara aggressiv" — facit-🔵 rad, endast språk), alt/title-typon "Microdermabrasiona ansiktsbehandlingar"→"Microdermabrasion-ansiktsbehandling".
**§7.4b-verifiering (3 agenter):** (i) blind bedömare: block 2/3/6 = 🔵 direkt; block 1/4/5 🟠-gränsfall (konfidens 55) → svans-trimmar på ordnivå (ej omskrivning — §13.O-disciplin). (ii) adversariell diff-granskare: 0 allvarliga, 6 gränsfall → ALLA åtgärdade ("föryngra" åter, "ansiktsbehandling" åter i alt, serum-syftet åter, "erbjuder" åter, hudskick-kausaliteten grundad, huvudsökordet åter i process-brödtext). (iii) helhetskritiker: språkfynd fixade (ovan); process p2 + FAQ5-antitesen lämnade (facit-🔵); specialists alt-variation + results-widget = sajtmönster, lämnade.
**Pris + verktyg (helhetskritiker-fynd, LÖSTA 3 jul em):** kortets prislista var fel — rättad till bokningssystemets 2595/6995/9995 kr (Spara 790/2980 kr; ägar-skärmbild = facit), så båda prislistorna + "Från 2595 kr" stämmer nu överens. "diamantborste"→"diamantspets" i $model-kortet (uppslag: diamantspets är den etablerade termen — diamantklätt munstycke; "borste" förekommer inte i branschen). oonskat-har-frågan om "underarmar" stängd: ägarbesked = nedre delen av armarna, korrekt svenska, ingen ändring.
**§1.5-not:** AIQ GOOD→OK-bevakningen (§9) fortfarande öppen — AI Overview-frågedetaljen för sidan ALDRIG levererad; be ägaren (vilken fråga tappade GOOD?).
**§13.E-kvittens:** sökord grep: microdermabrasion 64→62 (ordet åter i process-brödtexten), mikrodermabrasion 1→1, hudslipning 3→4, exfoliering 2→2, diamantspets 1→1, hyaluronsyra 1→1, föryngrar åter (0→1), ansiktsbehandling åter (2); punkt-count FÖRE=EFTER (1 medveten trim: resa/strålande-svansen = facit-flaggad fluff i 🟠-blocket); 0 råa apostrofer/backslash; 0 em-/tankstreck; diff rör bara microdermabrasion.php (+ playbook).
**Prediktion (§10 steg 1):** block-medel FÖRE 1,82 (5🔴/1🟠/3🔵/2🟢, n=11) → EFTER förväntat ~0,9–1,1 → **sidnivå 🟠→🔵 SLIGHT (§1.4-estimat: 2 fixar krävdes, 6 gjorda)**. SCORE: AI STYLE ↑, Language ↑ (kongruens/anglicism-fixar), Evidence = (kortpriserna rättade till bokningssystemets), Depth/E-E-A-T/sökord =.

### 2026-07-03 — `hudproblem/oonskat-har/` OMSKRIVEN (MODERATE-vågen #5) — facit-guidad de-AI, §7.4b-verifierad
**Gjort (facit 29 apr, §7 full process):** skrev om 5🔴+2🟠: **Vad-content** (🟠: stramad + hirsutism-motsägelsen rättad — "Den överdrivna formen kallas kliniskt för hirsutism"; termen likställs inte längre med normal hårväxt), **Varför-content** (🔴: "en mängd olika skäl"→"framför allt av två skäl: hormoner och gener" + mekanism; "nödvändigtvis" ÅTERINFÖRD efter diff-granskning), **Vem-content** (🔴: demografiskt skal→genetik-hedge-öppning i husröst, "spelar en avgörande roll" bort, av-skamning flyttad till slutet "drabba alla, oavsett kön och ålder"), **Var-content** (🟠: ansiktszonerna leder, "var som helst"-poängen flyttad sist som brygga), **artikel 1 p1+p2** (🔴×2: rakning/vaxning-konkretion leder; importans/antites/marknads-svans bort; rak CTA "Börja med en kostnadsfri konsultation" per §13.N), **artikel 2** (🔴: "pålitlig partner när det kommer till"/toppmodern bort → namngivna lasrar Splendor X + Soprano Ice = Evidence-spak). Lätt hand: FAQ-typo "önsksvärt", FAQ3 "viktigt att konsultera med"→"rådgör med", 3 Oxford-komman (Varför-ext, FAQ4, FAQ5), "Denna X"-parallellism ×2 + translationese ("tjänar biologiska syften"→"fyller en biologisk funktion", "för estetiska skäl"→"av"), titel rad 92 "effektiva laser"→"effektiv", 3 trasiga alt/title-sammansättningar ("oönskat hårhantering/hårbehandling"→"behandling av oönskat hår").
**§7.4b-verifiering (3 agenter):** (i) blind bedömare: Varför + Var = 🔵 direkt; Vad + artikel1-p2 predikterades 🔴 → åtgärdade (Vad stramad, p2 fick konkret CTA-pivot); svansar på a1p1/a2 trimmade. (ii) adversariell diff-granskare: 0 allvarliga, 7 gränsfall → 3 åtgärdade ("nödvändigtvis" åter, "vissa steroider" åter, "ofta i samband med"→"Det händer till exempel i samband med"), resten skippade motiverat (nedan). (iii) helhetskritiker: äkta språkfynd fixade (ovan); banner-/laser-korts-/konsult-korts-kritik SKIPPAD — facit=🔵 trumfar agenttyckande (§13.D).
**Medvetna trimmar (§13.D-motiverade):** Varför-ext summeringssvans ("mängden, texturen och färgen varierar…") struken = 4:e förekomsten av variations-poängen på sidan (Vad äger den; var importans-framad); "ger ett bestående resultat" (a1p1) = inom-blocks-dubblett av "tar bort håret permanent"; "på det sätt som passar dig bäst" (a2) = §5 individualiserings-fluff.
**Skippat (motiverat):** "vanligt estetiskt bekymmer" (normalisering täcks av av-skamningen); "två skäl"-insnävningen OK ("framför allt" + extended listar mediciner/sjukdomar/kosmetika); pre-existerande dubbletter över extended-blocken (graviditet/klimakteriet, mediciner ×3, subjektivitet, zonlistor) lämnade per §13.O (sveprisk); FAQ4/FAQ5-spänningen (formellt korrekt).
**"underarmar"-frågan (granskar-misstanke om felöversatt "underarms"=armhålor — STÄNGD 3 jul em):** ägarbesked = underarmar är nedre delen av armarna, korrekt svenska. Ingen ändring.
**§1.5-not (§7.4a):** AI Overview-frågelista för oonskat-har SAKNAS i lynx-questions (aldrig levererad) — be ägaren om den vid nästa dump-runda; FAQ-svaren fick ändå språkfixar.
**§13.E-kvittens:** sökord grep: oönskat hår 52→50 (mättad sida, alla målfraser kvar), oönskad hårväxt 3→2, hårborttagning 21→21, laserhårborttagning 4→4, hirsutism 1→1, permanent 13→13, PCOS 2→2; punkt-count per block FÖRE=EFTER (3 medvetna trimmar motiverade ovan); 0 råa apostrofer/backslash; 0 em-/tankstreck; diff rör bara index.php (+ playbook).
**Prediktion (§10 steg 1):** block-medel FÖRE 1,77 (5🔴/2🟠/4🔵/2🟢, n=13) → EFTER förväntat ~0,9–1,1 → **sidnivå 🟠→🔵 SLIGHT (AI COPY-flagg-vinst; §1.4-estimatet krävde 2 fixar, 7 gjorda)**. SCORE: AI STYLE ↑, Language ↑ (typo-/grammatikfixar), Evidence ↑ (namngivna lasrar i artikel 2), Depth/E-E-A-T/sökord =.

### 2026-07-02 em #7 — `mogen-hy.php` OMSKRIVEN (MODERATE-vågen #4) + språkfel-svep på 4 kösidor + transkriptionsrättelser
**mogen-hy (facit-guidad, §7 full process):** skrev om de 5🔴+1🟠 (Vad/Varför/Vem/Var-content + artikel 1 p1/p2) → mekanism-/konkret-ledda, kapade retorisk fråga, demografiskt skal, "När vi talar om"-scensättning, konsult-boilerplate + pep-svansar. Lätt hand på 🔵: 2 typos fixade ("elasticitet.Hos", "huvårdsmål"). Obetygsatta buggar fixade (§13.D-helhetsläsning): trasig mening "Hos får du"→"Hos oss får du" (Identifiera-kortet), en-dash i Var-extended, "allmänna hälsa"→"allmän hälsa", grammatik "en genetiska anlag"→"ett genetiskt anlag". **Ägarbeslut under arbetet:** §1.5-gapet "Vad betyder hy?" (score 24) lämnas MEDVETET — ordförklaring hör inte hemma i termen-FAQ:n ("ingen frågar vad hy betyder"); FAQ-svaret fick i stället varierad öppning + kolon→"Tecknen inkluderar" (undvek parallellism mot Vad-blocket).
**§7.4b-verifiering (2 agenter):** (i) blind bedömare: omskrivna block = 3×SLIGHT (60/75/70) + 3×MODERATE (60/55/60) — alla i målband, ingen SIGNIFICANT kvar. (ii) adversariell diff-granskare: **5 äkta fynd, ALLA åtgärdade** — återställde "vill helt enkelt förbättra hudens utseende"-skälet + "aldrig för sent"-halvan; strök opåstådd gener=när/yttre=hur-snabbt-dikotomi (nu "Generna styr mycket av när… Yttre faktorer som sol och livsstil påverkar också hur tidigt och hur tydligt…"); "syns först"→"syns tydligast" + "ligger inte långt efter"→"är också utsatta" (opåstådd tidsordning); "för många påverkar"→"för vissa kan de påverka" (skärpt claim). Gränsfall åtgärdade: torrhets-dubblett struken, "Här kommer"→"Här uppstår". Skippat (motiverat): "det är just detta som syns"-payoff behålls (§4-signaturdrag, facit-🔵 på acne.php).
**§13.E-kvittens:** sökord grep-verifierade (mogen hy 113, rynkor 27, fina linjer 19, åldersfläckar 6, hudens åldrande 7); punkt-count per block FÖRE=EFTER (2 medvetna dubblett-strykningar återställda/motiverade ovan); 0 råa apostrofer/backslash; 0 tank-/em-streck i filen; diff rör bara mogen-hy.php.
**Prediktion (§10 steg 1):** block-medel FÖRE 1,57 (5🔴/1🟠/5🔵/3🟢) → EFTER förväntat ~0,9–1,1 → **sidnivå 🟠→🔵 SLIGHT (AI COPY-flagg-vinst, vågens billigaste)**. SCORE: AI STYLE ↑, Language ↑ (5 språkfixar), Depth/E-E-A-T/sökord =.
**Språkfel-svep 4 kösidor (ägarbesked: "fixa felen nu, AI-uppgiften imorgon"):** rhinophyma ("genetiskto"→"genetisk", "Denna tillstånd"→"Detta") · oonskat-har (4 fel: trasig hirsutism-mening, östrogen-meningen, "området mellan näsan"→"runt näsan", verblös partner-mening + "din individuella hår- och hudtyp") · pigmentflackar ("AcneSpecialistem"→"AcneSpecialisten", "naturlig åldrande"→"naturligt", "behov.Det"→mellanslag) · microneedling ("markanden"→"marknaden", FAQ-typon "micronnedling" som BRÖT sökordsfrasen, "slussas in kanalerna"→"in i kanalerna", "våra…behandling"→"vår", "utseendet"→"utseende"). **Endast språk — ingen de-AI (görs imorgon, attribuerbart per sida).**
**Transkriptionsrättelser i lynx-examples (datahygien):** 3 tidigare noterade "fel" fanns INTE i filerna (solskadad "kan också avgörande" = felläst, texten korrekt; rhinophyma Näsa-"grammatikhaveriet" = felläst, meningen hel; oonskat "hårfollikelarna" = redan rättstavat) — facit-tabellerna korrigerade. **Lärdom: skärmdumps-transkription av brödtext är opålitlig på detaljnivå — verifiera språkfel mot FILEN innan de läggs i rewrite-ammo.**

### 2026-07-01 — `ipl-rosacea.php` (MODERATE, Fas 3, KW20, SCORE 39, P.PRICE HIGHEST) — FACIT-GUIDAD de-AI, klar → staging
**Gjort (facit 29 apr, v4 §1.3 + adversariellt workflow-verifierad):** Skrev om de 7 block facit rated 🔴/🟠 (desc-p2 "inte bara X utan Y"+marknadssvans; Inför-p1 konsult-boilerplate; Inför-p2 "det är viktigt att"+lång; Process-p2 passiv/generisk procedur; Process-p3 hedge-stapel+boilerplate-svans; Eftervård-p1 importans-filler; Eftervård-p2 passiv "rekommenderas det att"+lång) → ledde med mekanism/konkret + aktiv imperativ, kapade antites/marknad/importans/passiv. **LÄMNADE de 4 🔵/🟢** (desc-p1, Process-p1, Eftervård-p3, Märken-raden) — facit=OK (§13.D-disciplin). Bevarat: 3 interna länkar (rosacea/rosaceabehandling/ipl-ytliga-blodkarl), alla priser, sökord (rosacea 127, IPL 67, "IPL-behandling mot rosacea" 6, rodnad, blodkärl, ytliga blodkärl, pigment), frysta meta. 0 em-streck/råa apostrofer (§13.C; php-lint saknas lokalt → verifieras på staging).
**Ägar-kalibrering mitt i:** ägaren frågade "rätt mängd eller för mycket?" → visade diff → svar: "rätt mängd, fortsätt". (Denna = executor-terminalen; planner-terminalen körde plan-review parallellt, se nästa post.)
**Workflow-verifiering (15 agenter, adversariell — predikt + diff-check + helhetskritiker):** alla 7 block predikterade **SLIGHT** (mål nått). Fixade 4 äkta fynd: process-p2 "bryts ner" (överdrog vs facit "minskar framträdande") mjukad + "efter din hud"-dubblett (delad med desc-p2) bort + "IPL-enheten" åter; Eftervård-p1 redundant rodnad (täcks av Process-p3) trimmad, svullnad behållen; Eftervård-p2 "regelbundet" åter; Process-p3 IPL-sökord åter. Skippade (motiverat): "tappad eftervårds-instruktion" på Inför/Process = boilerplate som Eftervård-sektionen äger (siloing); vaga svansar täcks av kvarlämnad desc-p1.
**§1.4:** MODERATE-sida, median flyttad → förväntad **sidnivå SLIGHT (AI COPY-flagg-vinst)**. **Prediktion (§10 steg 1):** AI STYLE ↑↑ (öppningar+antites+marknad+passiv = största spaken), Evidence = (namngivna maskiner i orört Märken-block), Depth = (alla poäng kvar), E-E-A-T/sökord =. FÖRE-baseline: SCORE 39 / CQ 68 / Evidence 46 / E-E-A-T 85 / **AI STYLE 25** (topsite-kolumn C, `lynx-data.php`). **A/B-test:** bryter de-AI AI STYLE-taket 25?

### 2026-07-01 — `acne.php` (HUVUDSIDA / husröst-REFERENS, KW116, SCORE 39) — 🔴-block omskrivna, klar → staging
**Gjort (facit-guidad, v4):** Skrev om de **10 🔴 SIGNIFICANT-blocken** (banner-scaffolding "Här förklarar vi"; Vem/Var/ålders-/svårighetsgrad-/område-block = demografisk-skal + importans; laser-marknad "avancerad… effektiv lösning"; artikel-CTA "Du som vill ha det bäst… 30 år" / "Tveka inte" / "Välj innan läkare") → ledde med mekanism/konkret, kapade scaffolding/importans/marknad. **LÄMNADE husröst-referensblocken orörda** (full-mekanism-payoff, "Noduler >5 mm" 🟢, definitionerna, "Akne består av papler…" 🟠, vi-handlingar, FAQ) — de ÄR modellen vi emulerar. Bevarat: sökord + 2 inline-länkar (acne-vulgaris, acne-ansikte) + frysta meta. 0 råa apostrofer. (1 "Tveka inte" kvar i obetygsatt FAQ — lämnad.)
**§1.4:** sidnivå = 🔵 SLIGHT (median), så detta **sänker inte AI COPY-flaggan** men lyfter **SCORE** (mål: AI STYLE 30↑ + Evidence 11↑; Depth 77/E-E-A-T 84 hålls). **Prediktion:** AI STYLE ↑, Evidence ↑, Depth/E-E-A-T/sökord =. FÖRE-SCORE (68 dgr): 39/CQ56/Ev11/AISTYLE30 (= kolumn A, `lynx-data.php`).

### 2026-07-01 — `om-oss.php` (MODERATE, KW3) — OMSKRIVEN AUTONOMT (facit-guidad), klar → staging
**Gjort (facit-guidad v4, medan ägaren borta — utan pauser):** Skrev om de facit-flaggade blocken (O01 intro 🟠, O04 unik-helhet-bullet 🟠, O06 SHR-bullet 🔴, O07 "modern hudvård" 🔴, O08 tre-kliniker 🔴) — ledde konkret, kapade marknad (unik och effektiv/"det självklara valet"/"inte bara X utan Y"/optimala resultat/bästa möjliga). **Responsiva dubbletter (O07/O08 desktop+mobil-varianter) hållna i synk.** **Lämnade 🔵/🟢** (O02/O03 fyrstegs, O05 1994, O09 CTA, omdömen — facit=OK). **Såg över resten (lätt hand):** obetygsatt FAQ Q1 hade "det självklara valet" → lätt-fixad; resten av FAQ lämnad (obetygsad, ej över-rörd autonomt). Bevarat: klinik-namn (Strandvägen/Södermalm/Sundbyberg), inline-länkar (/, /metoden.php), 30 år/1994/SHR/fyrstegsmetod, frysta H1/meta. En-strecket i body bort. 0 råa apostrofer.
**Helhetskoll:** dubblett-varianter synkade, sökordsspridning bevarad. **Prediktion:** 🔴/🟠 → SLIGHT/MODERATE; 🔵/🟢 oförändrade. Första sidan gjord helt autonomt enligt fastställd facit-driven process.

### 2026-07-01 — `hudbehandlingar/ipl/index.php` (MODERATE, Fas 3, KW19) — OMSKRIVEN MED FACIT, klar → staging
**Gjort (facit-guidad, v4 §1.3):** Första sidan omskriven MED per-block-facit (22 apr) i handen. Skrev om de 13 block som var 🔴/🟠 (banner, Vad-är-IPL ×2, Förberedelser ×2, Process ×3, typ-intro, rosacea/melasma-kort, eftervård ×2) — ledde med mekanism/konkret, kapade marknad (bästa/avancerad/garanterar/"effektiv metod"/mångsidig/maximera/"särskilt effektiv"), fixade grammatik ("eller ta bort blodkärlen"→"och kärlen"). **LÄMNADE de 3 🔵/🟢** (ytliga+pigment-kort SLIGHT, eftervård-slutinstruktion HUMAN) + omdömen — facit=OK, v4-disciplin (rör inte det som är bra; undvik v3:s onödiga omskrivning). En "mångsidig" kvar i obetygsatt FAQ-svar (lämnad). Bevarat: sökord (hudföryngring/pigmentfläckar/ytliga blodkärl/rosacea/melasma/melanin/hemoglobin/laser), priser, interna länkar, frysta meta. 0 råa apostrofer.
**Prediktion:** 🔴/🟠 → SLIGHT/MODERATE; 🔵/🟢 oförändrade. Bevis på att facit-i-handen ger precis riktning utan över-omskrivning.

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
**Följd-fix (facit-driven, 2026-07-01):** LYNX FÖRE-facit (29 apr) visade att Vad-content faktiskt var 🔴 SIGNIFICANT — jag hade under-behandlat den ("bedömde leder redan med mekanism", gav bara komma+länk). Gjorde riktig de-AI: konkret öppning + hedge-svansen ("utesluta eventuella bakomliggande problem") och "variera i storlek och form" bort. Lärdom: definitions-öppning + lång + hedge-svans = 🔴 trots mini-mekanism (§1.1 nyckel 1). Se `lynx-examples.php`.

### 2026-06-30 — `acne-ansikte.php` — omskriven (hela sidan klar), väntar main-push
**Gjort:** Hela sidan omskriven med minimal diff (§13.O): bara tydligaste AI-tells bort (marknadsord avancerad/effektiv/skräddarsydd/speciell/avgörande, boilerplate "du är inte ensam", meta-scaffolding, fyllnadssvansar) + värsta komma-splitsarna. Struktur, summeringar, alla poänger, sökord, claims (**Cutibacterium kvar**), priser och länkar intakta — grep-verifierat. Inget unikt innehåll tappat.
**Prediktion (§10 steg 1):** AI STYLE ↑ (mindre fyllnad/marknadsord + Orsaker-öppningarna ledda med mekanism = §1.1:s största spak), Evidence/Depth = (substans kvar), sökord/E-E-A-T =. Förväntad landning SIGNIFICANT → MODERATE/SLIGHT. Listformatet behållet med flit — mäter om LYNX straffar en ren lista eller bara en utfylld.
**Process-lärdomar (inbakat i playbook):** §13.O minimal-diff (ta bort LITE, iterera, kan även lägga till/rätta); §13.D döm efter sektionens syfte (uppräkning → behåll lista, slå inte ihop poänger); §13.N info ≠ längd, bonussidor får vara kortare; §3 komma stryks rakt av.

### Arkiverade poster → `includes/lynx/lynx-log-archive.php` (fulltext där)
*(R4-städpasset 10 juli, logg #52: 27 poster arkiverade enligt R2/R3 — referenser nedan. Sid-poster med omätta/ostängda §11.1-rader står kvar ovan, R1.)*
- 2026-07-08 #40 Flagg-dumpen 16:54 = dublett av 10:45 — alla sju flaggade redan omskrivna; väntelista, inte arbetskö. Ratificerat i `lynx-status` LÄGE.
- 2026-07-08 #39 Fyndlådefyndet §13.O-styckeräkningen avgjort: fem stycken, ingen substans förlorad.
- 2026-07-08 #38 §9 grupperad för startritualen; öppen tråd räddad ur arkivet (oonskat-har-AIQ → §9-rad).
- 2026-07-08 #37 Filnamnen → engelska (log/archive/status), 98 referenser synkade.
- 2026-07-08 #36 Återgivningarna strukna (19 st) — status bor bara i `lynx-status`; invarianten i §0.
- 2026-07-08 #35 `lynx-status.php` skapad — EN statuscell (ägar-idé); ratificerat i §0.
- 2026-07-08 #34 §9.0 SLUTFÖRT; stubben + underlagsfilen raderade. Fulltext även i backlog-archive.
- 2026-07-08 #33 CHECK-REVISIONEN STÄNGD — de tre checkarna raderade (ägarbeslut); skälen i §9-stängningsblocket.
- 2026-07-08 #32 Check-revisionen steg 1: 9/9 hypoteser — noloss godkände skal där 97 % var borta.
- 2026-07-08 #31 Check-revisionen h3–h5: fasad passerar verktygsintegriteten; nålar skrivna mot incidenter.
- 2026-07-08 #30 Check-revisionen h2: resolvern blind för borttagen kartrad; pekarkoll täckte.
- 2026-07-08 #29 Check-revisionen h1: motsägelse-nålen fångar strängen, inte faktumet.
- 2026-07-08 #28 §9.0-dubbletten städad; fyra detektorer i #27:s egna checkar kunde inte bli röda.
- 2026-07-08 #27 Felklass-genomgången: fem nya tysta gröna; grinden kunde bara fällas av en av tre checkar.
- 2026-07-08 #26 Sessions-ritualen införd — ratificerad i §0.1 (slut-grinden senare raderad, se #33).
- 2026-07-08 #25 Felklassen namngiven: "en verifiering som kan passera utan att verifiera" — bor i §0.1.
- 2026-07-08 #24 microneedling-rewriten UNDERKÄND (§7.4b) + återrullad 2:a gången; självgraderad kvittens = processfelet → §13.E skärpt; fällorna i REWRITE-SPEC:en (`lynx-examples`). Öppet kvar: själva rewriten (§9-raden).
- 2026-07-08 #22 Statusdisciplinen: kanonisk cell per statusklass — ratificerad i §0/`lynx-status`; statuskoll.py raderad (#33).
- 2026-07-08 #21 §9.0 steg 7–10: START-splitten + examples-splitten; arkitekturen permanentad i §0.
- 2026-07-08 #20 §9.0 steg 5+6 klara; EEAT-sakfel i mekanism-texten rättat (modellen i `lynx-score`).
- 2026-07-08 #19 Mål-arkitekturen ratificerad av ägaren (fyra ändringar) — bor i §0.
- 2026-07-08 #18 Loggpost-MALL + arkiv-policy R1–R6 införda; 23 poster arkiverade (loggen 87→57 kB).
- 2026-07-07 #17 Fil-optimeringspasset startat; `lynx-data` → AKTUELLT LÄGE-tabellen (ägar-godkänd).
- 2026-07-07 #16 Pages-dumpar 14:16: splendor-x 79 bryter taket (→ `lynx-score`) · fragor-svar AIQ OK→POOR (§9-tråd) · 11 färska SCORE → `lynx-data`.
- 2026-07-07 #15 Full AICOPY-vy 13:58: pigment-badge MODERATE kvar · behandlingar.php 301 ✓ · acnearr SCORE 0→74 — data i `lynx-data`.
- 2026-07-06 #13 WAVE 2 pushad till main + PRODUKTIONS-VERIFIERAD (20 sidor HTTP 200, 0 PHP-fel) — mätstart 6 juli; datumen i §11.1.
- 2026-07-02 em #2 microneedling-BLOCK-PLANEN — superseded: REWRITE-SPEC:en kanonisk i `lynx-examples` (efter andra återrullningen).

*(Föregående pass 8 juli: 23 poster enligt R2/R3 — allt ratificerat i regelfil eller ersatt av nyare post; öppna deltrådar låg redan i §9 eller flyttades dit 7 juli. Sid-poster med omätta baselines rördes ej, R1.)*
- 2026-07-06 #12 Kontrollpass av 20 ändrade sidor — ALLT GRÖNT (HTTP 200, 0 PHP-fel; §6 fras-koll: 0 rankande fras tappad). Ersatt av #13:s produktions-verifiering (R3); fras-koll-siffrorna = forensik om KW-vakten larmar.
- 2026-07-06 #10 Filstrukturen splittrad per arbetsläge (START/rewrite/models/logg) — ratificerad; öppet kvar: SCORE-tolkningen bor i lynx-score, ev. flytt till models (→ §9.0 steg 6).
- 2026-07-06 #9 Online-verifiering av modellslutsatserna (5 research-agenter) — fulldata i `lynx-score` "EXTERN VERIFIERING"; RAMEN (substans = spak, AI COPY = proxy) → rewrite §1; YMYL-korrigeringen → §5.
- 2026-07-06 #6 SEO-vakt §10.0 + banner-sanering — §10.0 i lynx-models, banner-regeln i START LÄGE-fotnoten; öppet kvar: GSC-uppföljningen inkl. KW-bakgrunden −19 % (→ §9 GSC-KOLL).
- 2026-07-06 #5 Extern best-practice-import (Google people-first, Konsumentverket, klarspråk) — ratificerad i rewrite §4.2 + §5-juridikblocket; käll-URL:erna flyttade dit 7 juli.
- 2026-07-06 #4 Helplans-granskning: 3 äkta motsägelser mot facit fixade (§4.1-keepern, CTA-guidningen, §2 skylt-observationen) + stale state synkad. OBS: postens pigmentflackar-PAUS är HÄVD.
- 2026-07-06 #3 Modellsynk efter EFTER-mätningarna — §1.1 nyckel 1 kausal + replikerad, orörda block behåller tier, vyerna refreshar oberoende, AI STYLE-spannet 20↔30; intro-hypotesen → rewrite §2.
- 2026-07-02 kväll #8 Lynx-filerna flyttade till `includes/lynx/` + mogen-hy staging-verifierad — ratificerat; verifieringen ersatt av #12/#13.
- 2026-07-02 em #6 Filstruktur per kolumn (questions/score/gaps skapade) + acne-ansikte-frågelistan — filkartan i lynx-data; homepage-AIQ-beslutet ratificerat i lynx-models H7.
- 2026-07-02 em #5 Officiella kolumn-definitioner (11 LYNX-tooltips) — tabellen bor i `lynx-data`; modellkonsekvenserna inskrivna i §1.4/§1.5/§13.I + GAPS-tråden.
- 2026-07-02 em #4 Modellanalys: §1.4 → arbetsmodell med gråzon 1,9–2,4, §1.2 stärkt, §1.3 out-of-sample-validerad, §1.1-minimalparet — ratificerat; milier-/CryoPen-prisfrågan flyttad till §9 Bevaka.
- 2026-07-02 em #3 MODERATE-vågens facit komplett (pigmentflackar + oonskat-har) + homepage-/redirect-frågorna lösta — facit i lynx-examples, slutsatsen i §9.1 Tier 1.
- 2026-07-02 em #2 STOR-leverans (4 facit + helsajts-inventering + §1.4 median→MEDEL) — arkiverad DELVIS; **microneedling-block-planen står kvar aktiv i posten ovan.**
- 2026-07-02 em (mogen-hy KOMPLETT) Facit bekräftat + AI Overview-lista (27 frågor) → §1.4:s första miss + medel-hypotesen + §1.5 H6 — ratificerat, medel-hypotesen avgjord av em #2.
- 2026-07-02 (mogen-hy-facit, ENDAST SPARAD) Preliminär trunkerings-varning — helt ersatt av KOMPLETT-posten samma dag.
- 2026-07-02 Konsistens-audit (2 granskare, 18 fynd → 10 äkta fixade) — fixarna ratificerade; state-synk-principen flyttad till lynx-START §0.
- 2026-07-02 Blindtest 4: §1.3 v5+gradient mätbart bättre (57–62 % exakt, ±1 89–92 %) — gradienten skärpt i §1.3; fulldata i lynx-examples.
- 2026-07-02 AI QUESTIONS-detalj (4 sidor) → ny §1.5-modell H1–H5 — ratificerad i lynx-models §1.5; frågelistorna i lynx-questions.
- 2026-07-02 Modellöversyn på POSITIV-datan → §1.1 nyckel 5 (ackumulering fäller, inte enstaka fras), §1.3-gradienten, §1.4 additions-spaken — allt ratificerat.
- 2026-07-02 STOR facit-leverans (4 sidor) + färska SCORE-analyser → §1.2 OMPRÖVAS, 39-taket brutet, färsk-mot-färsk-regeln. OBS: postens "SCORE 0 = trasig analys" är KORRIGERAT (0/blank = pågående omanalys, lynx-score #0).
- 2026-07-02 Optimeringarna a–e genomförda (§7.4b, arkiv-policyn, facit-kön, blindtest 3, Fas 2-attribueringsvakten) — alla ratificerade samma dag.
- 2026-07-02 Process-review efter modellbytet (Fable 5): inga regeländringar; state-synken av main-pushen — principen bor nu i START §0.
- 2026-07-01 Ägaren pushade main → produktion LIVE (mätstart), 8 sidor verifierade; $types_url-buggen fångad + fixad. Ersatt av #13-milstolpen (R3), fixen bekräftad live i #12/#13.
- 2026-07-01 Beslut: kör 1 Claude i taget — ratificerat i §0.1/§12.
- 2026-07-01 Plan-review (planerare/exekutor) — facit-flöde/save-first/§0.2-dispatch ratificerade; autonom-kvittens = §13.E; "frys modellbygge tills första mätningen" gäller fortfarande.
- 2026-07-01 ytliga-blodkarl försök #1 rullat tillbaka ("för stora förändringar") — lärdomen kodifierad i §13.O.
- 2026-06-30 Playbook-städning (över-specificering bort) — ratificerat i §0/§3/§5/§6.
- 2026-06-30 acne-ansikte första omskrivningspost + provomskrivnings-checklista — ersatt av "hela sidan klar"-posten ovan.

---

