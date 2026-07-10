<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX BACKLOG — ARKIV (avslutade pass, stängda utredningar)

```
▣ MANIFEST
KIND          HISTORIK — append-only, aldrig retroaktivt uppdaterad. Inget här får styra beslut.
LADDA-NÄR     nästan aldrig. Forensik: "vad var hela resonemanget bakom det avslutade passet X?"
KANONISK-FÖR  ingenting. Fulltext för avslutade poster ur `lynx-backlog`.
PEKAR-PÅ      lynx-backlog = öppet arbete + enrads-stubbar · lynx-log = händelsehistoriken · regelfilerna bär det som ratificerats
```

> **Hit flyttas avslutat arbete ur `lynx-backlog.php`** när ett pass är slutfört eller en utredning stängd. Kvar i `lynx-backlog` blir en stubb med utfallet och en pekare hit. Så innehåller arbetsfilen bara det som återstår (§0: en AKTIV fil bär inte historik).
>
> **Skillnaden mot `lynx-log-archive`:** loggen och dess arkiv dokumenterar **händelserna** — vad vi gjorde, när, och varför. Den här filen och `lynx-backlog` bär **arbetslistan** och dess historia. Samma mönster som `lynx-data`/`lynx-data-archive` och `lynx-examples`/`lynx-examples-archive`.
>
> **⚠️ §-referenser i denna fil avser filstrukturen vid postens datum.** Filnamnen normaliserades till engelska 8 juli (`lynx-backlog` → `lynx-backlog`, `lynx-logg` → `lynx-log`, `arkiv` → `archive`); filernas identitet är oförändrad.

---

### 2026-07-08 — CHECK-REVISIONEN, fulltext (stängd genom radering; se `lynx-log` #29–#33)
*(Flyttad hit ur `lynx-backlog` §9 den 8 juli — avslutat arbete hör inte hemma i en AKTIV fil. §-referenserna avser strukturen den 8 juli.)*

### ✅ STÄNGD — CHECK-REVISIONEN (8 juli · löst genom radering, ägarbeslut)
**Beslut:** `lynx-verktyg.php` raderad, alla tre checkarna borta. Ingen mekanisk grind finns kvar (§0.1).

**Varför, i en mening:** de vaktade §9.0:s omstrukturering — den är gjord — och nio mutationstestade hypoteser visade att deras gröna aldrig var ett mätt påstående.

| # | Vad checken påstod | Vad mutationen visade |
|---|---|---|
| V5 | ingen cell säger emot den kanoniska | fångade tre exakta strängar; `väntar på main-push` (ett inskjutet ord) passerade tyst |
| V6 | skripten går att köra | godkände ett sabotage-skript som skrev `✓` under varje rubrik och returnerade 0 |
| V7 | inga trasiga pekare | letade bara efter pekare till **en** fil, för **tre** § — och bar själv den hårdkodade filnamnspekare den fanns för att förbjuda |
| V8 | regeln lever | frågade HISTORIK, som §0 säger inte får styra beslut |
| V9 | om-oss har EFTER-facit | nöjde sig med en TODO-kommentar |
| V10 | inget tappat | godkände `lynx-rewrite` reducerad från 52 309 till 1 803 tecken |
| V11 | 17 bevakningsrader kvar | accepterade 16; och `pigmentflackar` matchade inuti `behandla-pigmentflackar` |

*(V1–V4 var kända sedan tidigare. T1 och T2 prövades och avfärdades — täckta av en annan check. Fullt underlag med bevis: logg #29–#33, samt git-historiken för `lynx-verktyg.php`.)*

**Diagnosen — det enda som är värt att bära vidare:** varje nål var skriven **mot den incident som avslöjade behovet, inte mot lagen som skulle upprätthållas.** Därför fångade de reprisar och inget annat. En nål mot en lag gör felklassen omöjlig; en nål mot en incident bevisar bara att gårdagens fel inte upprepades ordagrant.

**Vad revisionen faktiskt gav:**
- **En äkta trasig pekare lagad:** `§1.2 i lynx-score` → `lynx-models` (§1.2 bor där; `lynx-score` bär härledningen).
- **§-KARTAN är exakt härledbar ur filernas egna rubriker — 32 av 32, mätt.** Den handskrivna kartan bär noll egen information. Den får stå kvar som mänskligt index. **Skriv aldrig en detektor som vaktar den:** det vore att vakta en dubblett som §0 förbjuder.
- Regeln i §0.1: *vaktar verktyget ett pass som redan är genomfört är det skuld, inte skydd.*

---

---

### 2026-07-08 — §9.0 FIL-OPTIMERINGSPASSET, fulltext (slutfört; se `lynx-log` #26–#34)
*(Flyttad hit ur `lynx-backlog` den 8 juli. Passets utfall är permanentat i §0 och i filsetets struktur.)*

### 9.0 FIL-OPTIMERINGSPASSET (ägar-beställt 7 juli — "för långa sektioner skummas; långa loggar kanske egen fil")
**Arbetssätt (ägar-feedback 7 juli):** ETT steg i taget med ägar-avstämning emellan · INGA agent-utskick (vanligt läge, usage-hänsyn) · fullständigt analysunderlag i en temporär arbetsfil (raderad 8 juli när passet stängdes — git har den verbatim). Princip: inget raderas — öppna trådar/omätta baselines/ägarbeslut flyttas eller komprimeras, historik → arkivfiler (git har alltid verbatim).

**▶ DESTINATION — mål-arkitekturen ✅ RATIFICERAD av ägaren 8 juli.** Triad **KIND = REGEL/AKTIV/HISTORIK** (deklarerad PER SEKTION i ett front-matter-manifest: `LADDA-NÄR / KANONISK-FÖR / PEKAR-PÅ / KIND`) × domän (mätning · rewrite · logg). **START = tunn dispatcher, ~60 rader: router + LÄGE + invarianter, ingen operativ text.** Strukturell lag: **"ett fakta = en cell; celler pekar, återger aldrig."**
> **Ägarändringar mot 7 juli-utkastet:** (1) **NY cell `lynx-backlog.php` (AKTIV)** = §8 + §8.1 + §9 + §12 — utan den förblir START fet. (2) **Loggen är HISTORIK**, inte AKTIV; microneedling-block-planen flyttas till `examples-aktiv` = sista "logg som enda bärare"-hålet. (3) copy-playbook-stubben dör; `copy-formula`-minnesfilen → ren pekare mot rewrite §2–§6 *(gjort 8 juli, 13/13 regler grep-verifierade)*. (4) Inga splittar av score/data — blandade filer deklarerar KIND per sektion.
> **MÅL-ARKITEKTUREN står permanent i §0** (steg 10 gjorde det, precis för att den annars dött med underlagsfilen). Verifierat före raderingen 8 juli: §0 bär lagen, KIND-triaden, manifest-kravet och tunn-dispatcher-principen.

- [x] **1. Ägarbeslut: lynx-data-omstruktureringen GODKÄND (ägaren 7 juli)** — AKTUELLT LÄGE-tabell + baseline-register i lynx-data.php, snapshots verbatim → lynx-data-archive.php (519→183 rader). Mönstret aktivt-läge+arkivfil = mall för resten av passet.
- [x] **2. KLAR 7 juli — stale state + trasiga pekare rättade:** §9 Fas 3-raderna säger "väntar main-push/⛔GSC-gate" på 6 sidor fast ALLT är LIVE på main sedan 6 juli (logg #13) — även §8 (d3ce9162) + §9.1 Tier 3; TOC-raden ("Innehåll:") listar §§ som flyttat till rewrite/models/logg vid splitten; routerns "(save-first, §0)"-pekare; lynx-log-archive + logg-intron säger "playbooken"; lynx-examples rad 4 pekar på stubben.
- [x] **3. KLAR 7 juli — 3 unika saker flyttade ur loggen** (förkrav för steg 4 uppfyllt): milier-/CryoPen-prisverifieringen (öppen ägar-tråd, post 2 juli em #4) → §9 Bevaka · juridik-käll-URL:erna (post 6 juli #5) → lynx-rewrite §5 · state-synk-principen ("greppa gamla frasen, synka ALLA förekomster") → §0.
- [x] **4. KLAR 8 juli — loggmall + arkivering:** POST-MALL (max ~8 rader, taggade fynd) + arkiv-policy **R1–R6** i §11-intron · **23 poster arkiverade** (6 juli #3/#4/#5/#6/#9/#10/#12 + hela 2 juli-sjoket + 1 juli main-push) → `lynx-log-archive`, enradare kvar · #14 komprimerad · korspekare lagade (rewrite §4.2, lynx-score ×4, lynx-examples). Sid-poster med omätta baselines orörda (R1); em #2:s microneedling-block-plan kvar aktiv. **Loggen 87→57 kB (−34 %); resten = R1-skyddade poster + kompression i steg 5–9.**
- [x] **5. KLAR 8 juli (autonomt)** — lynx-models → operativ REGEL-cell; EEAT-mekanismen rättad (falsifierad "hälsosidor/YMYL"-förklaring); superseded lager → lynx-score HISTORIK; §11.1:s fem mätregler → ETT 5-punktsblock; första manifestet satt. Batteri 38/38. *(Ursprunglig spec:* arkivera §1.2:s superseded historiklager (OMPRÖVAS-noteringen, 30 juni-multiplikativa analysen, besvarade testprotokollet) → pekare; konsolidera §11.1:s FEM staplade ⚠️-mätregelstycken till ETT 5-punktsblock; spak-kartan: EEAT = ej copy-spak, AI STYLE-intervall färska skalan; MÄTT-radernas statusceller → kort + logg-pekare. Evidence-§5-filtret + no-regression + §1.5 + §10.0 RÖRS EJ.*)
- [x] **6. KLAR 8 juli (autonomt)** — lynx-score → KIND per sektion (REGEL SLUTLÄGE-tabell A–F · AKTIV rådata · HISTORIK superseded+gamla skalan, med varning för TRE falsifierade påståenden). Batteri 40/40. **⚠️ ÄGARBESLUT VID STEG 10: filen växte 26,3→37,6 kB** — A–F:s ursprungsprosa behållen i HISTORIK (bär öppna trådar); att stryka den är informationsförlust och ditt beslut. *(Ursprunglig spec:* slutsatserna A–F → kompakt slutläges-tabell (utan korrigeringshistorik); arkivera gamla-skalans sektion + 2 juli-sektionen (sammanfattningsrader kvar: formeln 7/7, datapunkterna, acne.php no-regression-subs); fixa models rad 3-pekaren (beslut: härledningen BOR i lynx-score; models §1.2 = operativa sammanfattningen) + models stale "klampas på hälsosidor"-formulering. **KIND per sektion:** härledningen = REGEL, nedbrytnings-rådatan = AKTIV.*)
- [x] **7. KLAR 8 juli** — 7a: START → tunn dispatcher (254→111 rader) + NY `lynx-backlog.php`; resolvern + 3 historik-headers; 0 trasiga pekare. 7b: START-prosan 50,1→15,2 kB (−70 %); facit-flödet → §14 SPARA-RECEPT i lynx-data (lagar routerns trasiga "(save-first, §0)"); prime-direktivet står nu EN gång; backlog komprimerad; "ingen hemmakur"-principen → rewrite §5. Batteri 7: 54/54. *(Ursprunglig spec —* prioriterat som **störst läsvinst**, ägarbeslut 8 juli*:* **START behåller:** router (med laddnings-receptet), LÄGE ≤8 rader, invarianter (prime-direktivet EN gång, §0.1, Aldrig-listan, rollfördelningen, state-synk-principen), §0.2-dispatchen, struktur-kartan. **Flyttar till `lynx-backlog.php` (AKTIV):** §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.1 tier-listan · §12 claims. **Samtidigt:** facit-flödesväggen (rad 24) → 4–5 rader + pekare till spara-receptet i lynx-data (som får ett stabilt §-nummer så routern kan träffa det); §8/§9 KLAR-rader → enradare med logg-pekare (öppna rester bevaras: oonskat-har-ägarfrågan, micro-AIQ-detaljen, pigment V2-prediktion + AI STYLE 55); lösta [x]-bevakningstrådar arkiveras; Bevaka-trådarna → beslutspunkt + öppen fråga (historik → logg); avduplicera prime-direktiv/filkarta (står 3–5 ggr). ⚠️ **Pekar-baseline mätt 8 juli FÖRE steg 7** (underlaget): 49 pekare i 7 filer måste redigeras (AKTIV 34 · REGEL 15); historikens 101 löses med EN header-rad per arkivfil (får ej uppdateras retroaktivt); 130 sitter i filer som raderas. 0 redan-trasiga §-refs i FÖRE-läget → allt som går sönder efter steg 7 är orsakat av steg 7. Kör censusen igen med `--efter` och jämför.*)
  - **🔴 EFTER-JÄMFÖRELSEN OVAN ÄR OGILTIG — upptäckt 8 juli.** `pekarkoll`s blast-radius-detektor **dog i denna commit.** Dess sentinel är strängen `FLYTTAR` i §-KARTA-raden (`if 'FLYTTAR' in line and 'lynx-backlog' in line: target = 'BACKLOG'`). FÖRE steg 7 stod där `[FLYTTAR → …]` (`150863b0`) och detektorn mätte 49. Steg 7 skrev om raden till `→ lynx-backlog … [flyttade dit 8 juli]` — sentinel borta, `owner == 'BACKLOG'` blev oåtkomligt, och sektionen rapporterar sedan dess **0 oavsett innehåll** (mutationstestat: 3 injicerade §-pekare i en REGEL-fil → fortfarande 0). **FÖRE 49 → EFTER 0 är inte en ren migration; det är en död mätare.** Bevis som inte kräver kodläsning: specen säger att historikens pekare ska stå kvar (arkiv får ej uppdateras retroaktivt) — de är **147** idag; detektorn säger 0. **Detektorns nål pekade på en formulering i prosan, och prosan skrevs om.** Samma felklass som resten, ett lager djupare: nålen satt i det den bevakade. → §9 Bevaka.
- [x] **8. KLAR 8 juli** — lynx-rewrite formatkomprimerad −6 %, **0 regeländringar**. §1.1-väggen → 5 punktrader · §1.3 blindtest-sagan → 5 slutsatser · §1.4 → punktlista (öppna beställningar ordagrant) · §13.D → punktlista · §13.O fyra stycken → ett. §2–§7 orörda. Batteri 8: 22/22. *(Ursprunglig spec:* ENDAST formatkomprimering (inga regeländringar). *No-loss-batteri 8 FÄRDIGT (22 checkar, validerat).* §1.1-väggen → 5 punktrader; §1.3-ingressens blindtest-saga → 5 operativa slutsatser + pekare till examples; §1.4 → ~8 rader (öppna beställningar oavkortade); §13.O:s **tre** stycken → ett (spak-regeln EN gång); §13.D → punktlista. §2–§7, §4-banken, §5-juridiken, §3-checklistan RÖRS EJ.*) *(Specen sa "tre stycken", utfallsraden "fyra" — båda bevarade; ingen vet i efterhand vilken som räknade rätt.)*
- [x] **9. KLAR 8 juli** — `lynx-examples` 632→457 rader (−24 %); superseded modellarbete (SCORE-reverse-engineeringen, MEDIAN-hypotesen, blindtest 1/3/4, MODELLANALYS 2 juli, §1.4-konsolideringen) + FÖRE-facit för de 3 MÄTTA sidorna → **ny `lynx-examples-archive.php`** (HISTORIK, 218 rader). Alla facit för omätta/kösidor kvar i aktiva filen. **Microneedlings block-plan flyttad ur `lynx-log` → `lynx-examples` REWRITE-SPEC** = sista hålet där loggen var enda bärare av en aktiv spec. SERP-drift-regeln → `lynx-models` §1.5 (rådatafilen fick pekare). Manifest på examples + examples-arkiv. Batteri 9: 18/18.
  - **✅ STÄNGT 8 juli: stubben `lynx-copy-playbook.php` RADERAD.** Den bar en egen stale filkarta som påstod att START innehöll backlog §8/§9 och claims §12 — de flyttade i steg 7. **En vägvisare som pekar fel är sämre än ingen vägvisare.**

- [x] **10. KLAR 8 juli (utom raderingarna)** — **struktur-kartan permanentad i lynx-START §0** (lagen, KIND-tabellen, laddnings-receptet, de två strukturella fällorna). **`▣ MANIFEST` på alla 14 filer.** Slutverifiering: batterierna 5–9 alla gröna (172 checkar), censusen 0 trasiga pekare, 0 §-refs utan ägare. §-KARTAN utökad med §14 → lynx-data.
  - **✅ STÄNGT 8 juli: `lynx-optimering-underlag.php` RADERAD.** Verifierat före radering: alla nio öppna trådar den bar lever i filsetet, och MÅL-ARKITEKTUREN står i §0. Verifieringsskripten den innehöll är också borta (§9). Git har filen verbatim.
  - **ÖPPET ÄGARBESLUT:** `lynx-score` växte 26,3→37,6 kB — A–F:s ursprungsprosa behållen i HISTORIK för att den bär två öppna trådar (rhinophymas rena FÖRE→EFTER-test av de-AI→AI STYLE; "CQ-badge följer Overall snarare än subsen — BEVAKA"). Att stryka den är informationsförlust.


**Setup**

**Fas 1 — SIGNIFICANT-sidorna**
*(Här står bara ARBETSSTATUS: gjort, och vad som är öppet. **Om en sida är LIVE eller MÄTT står i `lynx-status` §11.1 — enda källan.** Skriv aldrig in det här igen.)*

- [x] `acne-ansikte.php` — omskriven (hela sidan), minimal-diff (§13.O); sökord/claims bevarade.
- [x] `ytliga-blodkarl.php` (KW172) — omskriven steg för steg (öppningar + summeringar bort + gap-punkter §8.1). Bortkommenterade $type_categories/$symptoms orörda (bilder saknas).
- [x] `behandla-pigmentflackar.php` — de-AI:ad (öppningar + marknadssvansar bort), long-tail hållen. **Öppet:** micro-fix-kandidat — kemisk-/micro-korten (🔴 kvar) + $about-2/IPL-kortet (🟠); per-block-EFTER i `lynx-examples`.
- [x] `hudforandringar/index.php` — de-AI:ad (hub-register, öppningar + svansar + stavfel); H1-sökord i separat commit (§13.H); debug-rad-fixen d3ce9162 verifierad på produktion (logg #13).

**Fas 2 — Schema**
*(Attribuerings-disciplin §13.G/H: rör INTE de 8 mätsidorna med schema förrän deras FÖRE→EFTER är mätt — börja schema-spåret på sidor utanför mätkohorten.)*
- [ ] FAQPage JSON-LD från `$faq_categories` (efter de 4 sidorna) — realistiskt scope (§13.J) + FAQ-svar i husröst.
- [ ] **Fas 2-kandidat #1: acne-ansikte.php** (ägarbesked 2 jul: "rimliga frågor, kika på när vi når den fasen") — ON-TOPIC frågelista i `lynx-questions.php` med topp-gap: käklinje-klustret ~56 samlade poäng på POOR/– ("Varför får man finnar på käklinjen?" score 21) trots att sidan HAR käklinje-zonsektion → svara i frågans varför-/vad-betyder-FORM (§1.5 H2). ⚠️ Sidan är FRYST mätsida (§13.G) — vänta tills FÖRE→EFTER är mätt.
- [ ] PAGE TYPE/P. PRICE: sätt `$rich_product` per sida med Offer (§13.I) — separat schemaspår.

**Fas 3 — MODERATE-vågen = AI COPY-flagg-uppdraget (🔴 SIGNIFICANT klart i Fas 1; här fixas alla 🟠 MODERATE; facit-komplett 7/7 sedan 2 jul em)**
*Fix-antal = §1.4-estimat för badge-flytt till 🔵 (gråzons-förbehåll); §7 kräver ändå alla 🔴/🟠-block åtgärdade. Ordning nedan = billigast först; pigmentflackar (KW244) kan lyftas först om payoff prioriteras.*
- [x] `om-oss.php` — ✅ **BADGE BEKRÄFTAD 🔵 (8 juli)**; räknas nu in i §1.4. **Öppet:** O01-bannern + FAQ-betygen.
- [x] `hudbehandlingar/ipl/` — facit-guidad de-AI (Fas 3).
- [x] `ipl-rosacea.php` — omskriven. **Öppet:** SCORE 39→60 färsk men badge kvar 🟠; AI STYLE-A/B-testet (FÖRE 25).
- [x] `mogen-hy.php` — omskriven. **Öppet:** färsk SCORE. "Vad betyder hy?"-gapet medvetet lämnat (ägarbeslut 2 juli).
- [x] `hudproblem/oonskat-har/` — omskriven. Ägar-frågan "underarmar" STÄNGD 3 juli: korrekt svenska, ingen ändring. **Öppet:** AIQ-frågelistan saknas i `lynx-questions`.
- [x] `microdermabrasion.php` — omskriven. **Öppet:** AIQ GOOD→OK-frågedetaljen fortfarande obesvarad.
- [x] `hudproblem/bristningar/` — omskriven (färsk SCORE-FÖRE 63).
- [x] `solskadad-hy.php` — omskriven. **Öppet:** färsk SCORE.
- [x] `rhinophyma-rosacea.php` — omskriven. **Öppet: BESTÄLL SCORE-popupen** — AI STYLE-FÖRE 70; enda rena testet av de-AI → AI STYLE (Overall 74 oförändrad säger inget, AI STYLE ingår ej i Overall).
- [x] `pigmentflackar.php` — de-AI:ad V2 (KW244, sista MODERATE). **Öppet:** vid nästa refresh — mät FÖRE→EFTER + AI STYLE mot 55-baselinen. 8 juli saknades sidan HELT i AICOPY-vyn = pågående omanalys (tredje gången).

Körs facit-drivet löpande — **ej grindat efter Fas 2-schemat** (fristående spår). Prioordning även i **§9.1**.

---
