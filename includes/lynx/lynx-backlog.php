<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX BACKLOG — sidkarta, gap-beslut, TODO & claims (vi använder ingen task-tracker)

```
▣ MANIFEST
KIND          AKTIV — ändras varje session (status, TODO, claims). Re-läs ALLTID; lita aldrig på minnet av den.
LADDA-NÄR     "vad är gjort / vad är nästa" · innan du börjar på en sida (claima i §12) · när en ny TODO öppnas
KANONISK-FÖR  §12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.0 fil-optimeringspasset · §9.1 prioriterad backlog
PEKAR-PÅ      lynx-status = STATUS (LÄGE + §11.1) · lynx-START = router/invarianter/§-KARTA · lynx-rewrite = hantverket · lynx-models = modellen · lynx-log = historik · lynx-data = rådata
```

> **Utbruten ur `lynx-START.php` 8 juli (§9.0 steg 7)** så START kan vara en tunn dispatcher. START bär läget och invarianterna; denna fil bär arbetet. **Öppnar du en ny tråd — skriv den HÄR, aldrig bara i loggen eller i en konversation** (POST-MALLENS ram 4, `lynx-log` §11).

---

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *(tom — ingen är igång)* CHECK-REVISIONEN stängd 8 juli, checkarna raderade (§9, logg #29–#33). **Kön i §9 är öppen — ägaren väljer.** | – | – |

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**HELA FLAGG-LISTAN KLAR: 4 SIGNIFICANT + 10 MODERATE omskrivna, produktions-verifierade 6 juli** (logg #11–#13; per-sida-historiken bor i `lynx-log`). Alla facit i `lynx-examples`. Per-sida-status + öppna rester: §9 Fas 1/Fas 3 nedan.

**Öppna rester på de MÄTTA sidorna:** acne-ansikte intro-blockets 🟠 (micro-fix-kandidat) · behandla-pigmentflackar 4 block (micro-fix-kandidat, frysning hävd) · om-oss badge-bekräftelse.
**Kvar för framtida städpass:** pigmentflackar FAQ-sektion (AI-holdout, ej facit-flaggad) + typtitel-versalisering · ärr-boilerplate-sweep (§9).

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

### 8.1 Per-sida gap-punkter (LYNX-förslag) + beslut
Från LYNX "Quick wins / Recommended improvements". Beslut enligt §5 (kosmetiskt, siloing).

**GENOMFÖRDA:** `ytliga-blodkarl.php` (rosacea-länk + hemmavård-vinkeln; 1177-/hudcancer-punkterna SKIP = medicinskt) · `hudproblem/hudforandringar/index.php` (H1-sökord + hub-fokus; söka-vård SKIP). Gap-texterna i `lynx-gaps`. **Den återanvändbara skrivprincipen som föddes här — "när det ärliga svaret är ingen hemmakur, säg det och led till vår lösning" — bor nu i `lynx-rewrite` §5.**

**seborroisk-keratos.php** (facit ✅ 2 jul — i Fas 3b-kön; OBS: 2 jul-scanen visar GAPS 0/0, LYNX flaggar inte längre punkterna nedan → besluten kvarstår som frivilliga förbättringar; skrapnings-frågan är GOOD i §1.5-listan)
- HIGH För brett fokus → **GÖR: smalna av** till seborroisk keratos (mjällvårtor).
- MEDIUM Information om skrapning (curettage) → **GÖR: nämn + jämför** med våra metoder (Laser/CryoPen), kosmetiskt ramat.

**microneedling.php** (facit ✅ 2 jul; gap-texter 2 jul)
- LOW ⚡ "microneedling kur" i herosektionen → **GÖR vid rewrite** (frasen finns redan i eftervårdsblocket; integrera naturligt vid paketpriserna, §6-koll).
- HIGH 💡 Kombinationsbehandlingar Exosomer + Polynukleotider → **VÄNTAR på kliniken** (§9-TODO gated på lansering; §5: inga behandlingar vi inte erbjuder).

**acne-rygg.php** (facit ✅ 2 jul; gap-texter 2 jul)
- LOW ⚡ Tips om hårvårdsprodukter och sängkläder → **GÖR med lätt hand** (generiska livsstilsråd i stil med befintlig friktions-text: tvätta sängkläder, skölj bort hårprodukter — INGA ingredienser/produktnamn §5; håll kort).
- LOW ⚡ Synonymer "ryggakne" + "rygg akne" → **GÖR** (integrera naturligt i brödtext; grep-koll §6 att befintliga fraser hålls).

**acne-ansikte.php / behandla-pigmentflackar.php:** inga LYNX gap-punkter (GAPS = ⚡-/💡-); bara AI COPY-omskrivning.

---

## 9. TODO (denna fil är källan — ingen task-tracker)
Kryssa här. Start/stopp-vänligt: status = §9 + §11 (logg) + §12 (claims). Per-sida gap-detaljer i §8.1.

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

**✅ §9.0 SLUTFÖRT 8 juli.** Stubben och underlagsfilen raderade (se steg 9–10). Kvar, parkerat och ej brådskande: `lynx-score` HISTORIK-prosan · filnamnskonventionen — båda i §9.3.

---

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

**Bevaka — trådar öppnade från omkringliggande skärmbildsdata (§0-principen, 2 jul)**
- [x] **FELKLASS-GENOMGÅNGEN 8 juli: "en verifiering som kan passera utan att verifiera".** Elva incidenter, alla samma form. **Nio satt i de tre checkarna — de raderades samma dag (§9 överst).** Kvar, för att de gäller arbetet och inte verktygen:
  - **Självgraderad §13.E-kvittens lät en text med §5-brott passera ägargranskning.** → §13.E skärpt; §7.4b körs **före** godkännande, inte efter. Gäller alltjämt.
  - **Boten som skrevs, och som föll:** *"varje detektor måste bevisligen kunna bli röd — 14/14 mutationer."* De 14 testade **14 fall, inte varje detektor.** Ett mätt påstående om 14 saker lästes som ett påstående om alla. **Täckningen redovisades aldrig, bara träffarna.** Den lärdomen överlevde verktygen och bor i §0.1.
  - **Heredoc:** citera alltid avgränsaren — `<<'EOF'`, aldrig `<<EOF`. Utan fnuttar tolkar skalet innehållet först och kodblocket töms tyst. Gäller varje engångsskript.
  - *(Ägarbeslut 8 juli: ingen pre-commit-hook. Allt LYNX-arbete stannar i `includes/lynx/*.php` — ingen ny filtyp, ingen git-konfiguration. Spara och pusha alltid.)*
  *(Den fullständiga incident-tabellen beskrev buggar i raderad kod. Den ligger i git-historiken; skälen i logg #26–#28.)*

- [ ] **⚖️ §5-BROTT LIVE PÅ PRODUKTION: ordet "smärtfritt" i 12 filer (upptäckt 8 juli av §7.4b-granskaren).** §5:s juridikblock förbjuder ordagrant *"Inga 'helt riskfritt', 'smärtfritt', 'garanterat resultat'"* och *"Aldrig riskfritt-intryck — utelämnad riskinformation = vilseledande marknadsföring (KO-praxis)"*. Regeringsuppdraget juni 2026 = skärpning på väg. **Filer:** `infuzion` · `permanent-harborttagning` · `dermapen` · `hudflikar` · `ytliga-blodkarl` · `microneedling` (brödtext rad 64 **+ meta rad 7 `✓Smärtfritt`**) · `rosaceabehandling` · `varumarken/index` · `prx-t33` · `varumarken/splendor-x` · `varumarken/soprano-ice` · `hudbehandlingar/skinbooster`. **ÄGARBESLUT:** eget juridik-pass (som språkfel-svepet 2 juli, egen commit) eller per sida vid rewrite? Meta-descriptions kräver separat commit (§13.H). **Ersättning enligt §4.2:** riskinfo är copy-vänlig — säg vad som faktiskt händer ("de flesta beskriver behandlingen som lätt stickande; huden är röd i ett till två dygn") i stället för att påstå frånvaro av smärta.
- [ ] **BUGG: `microneedling.php`-kortet "Microneedling mot Pigmentfläckar" visar fel bild** (upptäckt av §3:s copy-paste-rest-koll, 8 juli). `image_small/large` pekar på `mogen-hy.webp`, alt/title säger *"Microneedling för Pigmentfläckar"*. Samma bildfil används av kortet direkt ovanför (*Rynkor & Fina Linjer*). Rätt filer finns: `bilder/hudproblem/{102x102,200x200}/pigmentflackar.webp`. Siddata (§13.K) → säkert att rätta. Ta det när microneedling skrivs om.
- [ ] ***AI STYLE-TESTET — det viktigaste öppna mätvärdet (öppnat 8 juli).** `rhinophyma-rosacea` är den ENDA sidan med en färsk FÖRE-baseline på nya skalan (SCORE 74 · **AI STYLE 70**) tagen innan vår text gick live. Overall är 74 både före och efter — men **AI STYLE ingår inte i Overall** (lynx-score slutsats D), så Overall säger ingenting. **Beställ SCORE-popupen.** Rör sig AI STYLE är de-AI-hävstången bevisad; står den stilla är §1.2:s AI STYLE-antagande ren extrapolation.
- [ ] **`pigmentflackar` — V2 väntar fortfarande på mätning.** Sidan saknades HELT i AICOPY-vyn 8 juli (ej i någon grupp) = pågående omanalys, tom badge. Tredje gången mönstret upprepas. Beställ raden + SCORE-popupen när den kommer tillbaka (AI STYLE-FÖRE 55, sajtens näst lägsta).
- [x] ~~Beställning: SLIGHT-raderna ur AICOPY-vyn~~ — **LEVERERAD 8 juli.** Mätningen står i `lynx-models` §11.1; rådata i `lynx-data-archive`.
- [ ] **GSC-KOLL (SEO-vakten §10.0 — nu POST-LIVE-mätning, ej längre gate; ägar-uppgift):** ⚠️ gaten PASSERADES på ägarbeslut 6 jul (hela wave 2 pushad till main, §13.A = ägarens beslut). Dra därför Search Console-data som UPPFÖLJNING (klick/visningar/snittposition per sida, ~4 v före vs efter) på ALLA nu-live omskrivna sidor. Röd → §13.F-rollback + obduktion. Bakgrund: omskrivna sidor tappade KW mer än orörda i 6 jul-scanen (behandla-pigment −19 %). **Sker under/efter semester — inget blockerar nästa sida.**
- [ ] **ÄRR-FRÅN-FINNAR-BOILERPLATE-LÄCKA (ägar-flaggat 6 jul — dokumentera för ärr-processen):** ärr-mallens copy-paste läcker på FEL ämne. På `pigmentflackar.php` (fixat 6 jul under omskrivningen): FAQ-kategorirubrik "Allt du behöver veta om ärr av finnar" → "...pigmentfläckar", `$specialist_url_title` "inriktning mot ärr bildade av finnar" → "specialiserade på pigmentfläckar". Strängarna "ärr av finnar/ärr bildade av finnar/fläckar från finnar" finns i **3 filer** (grep): `finnar-arr.php` + `behandla-finnar-arr.php` (ÄRR-sidor — RÄTT ämne, men kolla särskrivning/Title-Case när de görs i LYNX-processen) + `pigmentflackar.php` (var FEL, nu fixat). **När vi når ärr-/finnar-arr-sidorna i backloggen (§9.1 Tier — acnearr KW127 SCORE0, finnar-arr, behandla-finnar-arr, laser-acnearr m.fl.): granska att deras egen boilerplate är ämnesrätt OCH att den inte läckt vidare till andra sidor.** Samma klass som "Akne Specialiserade"-läckan nedan. **Öppen widget-fråga (pigmentflackar):** relaterade-problem-kortet "Åldersfläckar" länkar till `/solskadad-hy.php` (ej `/aldersflackar.php` som finns) — url_title/alt fixade, men url-destinationen lämnad orörd (kan vara medveten silo-koppling åldersfläckar=solskador); bekräfta med ägaren.
- [ ] **MALL-BOILERPLATE-LÄCKA `$specialist_url_title = "Akne Specialiserade Hudterapeuter"` (upptäckt 6 jul av ägaren; §7.4b-workflow flaggade det på solskadad-hy):** title-attribut på "se alla specialister"-länken, **27 filer** har exakt strängen (grep-verifierat). Två klasser: (a) **4 icke-akne-sidor där titeln är ÄMNESFEL** — `aldersflackar.php`, `atrofiska-arr.php`, `melasma.php`, `milier.php`; (b) 23 akne-sidor där den är ämnesrätt men särskriven ("Akne Specialiserade" → "aknespecialiserade") + engelsk Title Case. **Bedömning:** title-attribut = siddata (§13.K, säkert att ändra) och INTE ett textblock LYNX betygsätter för AI COPY → ingen attributionsrisk, men det är ett äkta språkfel. **RÖRDES EJ 6 jul** (27-filers sweep bryter en-sida-i-taget + kräver ägarbeslut om timing). Solskadad-hy redan rättad ("Hudterapeuter specialiserade på pigmentbehandlingar"). **ÄGARBESLUT:** (a) svep alla 27 i ETT separat språk-pass (som språkfel-svepet 2 jul, egen commit, ofarligt för attribution), (b) bara de 4 ämnesfel-sidorna, eller (c) låt ligga. **Bevaka även:** samma mall läcker troligen fler engelsk-Title-Case-title-attribut (brand-titlar "Microneedling Verktyg", "Kryoterapi Verktyg" hittades på rhinophyma/bristningar) — kolla vid sweepen.
- [ ] **GAPS-rensningen 2 jul:** ytliga-blodkarl 2/2→0/0, ipl-rosacea 2/1→0/0, homepage 3/2→0/0 — utan att sidorna refreshats (tiers/SCORE står stilla). Verifiera vid nästa scan: äkta rensning (gap-texterna lösta/borttagna av LYNX) eller scan-artefakt? Påverkar §8.1-gapbesluten för de sidorna. **Tooltip-insikt 2 jul 15:00: GAPS är KONKURRENT-relativa** ("compared to top-ranking competitors") → rensning/nya gaps kan bero på ändrad konkurrentbild, inte våra åtgärder — attribuera aldrig GAPS-förändringar till oss utan att läsa gap-texterna. **UPPDATERING 7 jul (logg #14): ipl-rosacea GAPS TILLBAKA, nu 3⚡/1💡** — rensningen var inte permanent (stärker konkurrent-relativa tolkningen). Gap-texterna MOTTAGNA 12:42 (→ lynx-gaps, preliminärbedömda: oro-för-försämring HIGH trolig GÖR · triggers → rosacea-länk · kostnadsfaktorer trolig GÖR); 💡-suggestionens text saknas — be om "View gap details" när gap-arbetet blir aktuellt. §8.1-beslut ej fattade. **7 juli 13:58: även acnearr GAPS 3/1→1/0 på orörd sida** — ytterligare belägg för rörliga/konkurrent-relativa GAPS.
- [ ] **microdermabrasion AIQ GOOD→OK** (försämrad 30 jun→2 jul utan våra ändringar) — kolla AI QUESTIONS-detaljen när facit hämtas för sidan (§1.5-modellen: vilken fråga tappade GOOD?).
- [ ] **fragor-svar AIQ OK→POOR (7 juli 14:16; SCORE 36→56 färsk samtidigt):** sidan ÄR wave 2-ändrad (FaceTime→Google Meet, live 6 juli) men ändringen är minimal och AIQ är SERP-baserad → trolig extern/omskalnings-effekt, EJ attribuerad. Be om §1.5-frågelistan för fragor-svar vid tillfälle — vilken fråga föll? (Sidan är HUMAN-badgad, 114 ord — FAQ-hubben; POOR här kan vara AIQ-uppsida när Fas 2-schemat körs.)
- [ ] **Milier-/CryoPen-priser (öppen ägar-verifiering — flyttad hit från logg 2 juli em #4):** enstaka milier-borttagning rättades till 495 kr, men **CryoPen-återbesökspriset (hudforandringar) + milier-paketpriset 1295 kr väntar fortfarande ägarens verifiering** mot bokningssystemet.
- [ ] **"missing localized"-DRAFT-raden (7 juli 14:16, ofiltrerad Pages-vy, VALUE 27):** KW **616**(!) · CLICKS 0 · ingen URL · enda raden med AI FEATURES-toggeln AV · WORDS/STATUS tomma. Troligen LYNX-systemrad för sökord utan mappad/lokaliserad sida — **fråga ägaren/LYNX vad den är**; 616 KW är för mycket för att ignorera om det är riktiga icke-mappade sökord (jfr sidregister B — saknade sidor).
- [ ] **BESTÄLLNING (avgör §1.4-frågan):** be ägaren köra FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan — testar om orapporterade FAQ-svar/versionsskillnad förklarar konflikten. Kombinera med §1.2-beställningen (2–3 färska SCORE-breakdowns varav minst en med AI STYLE beräknad) — **NYTT 6 jul: prioritera ytliga-blodkärls färska nedbrytning (SCORE 74, post-rewrite = AI STYLE-spakens A/B-test, snabbare än att vänta på acne.php).**
- [ ] **`/varumarken/powerlite-photonova/`:** finns i LYNX/live men INTE i repot — utred (borttagen sida som lever kvar på live? redirect behövs?).
- [ ] **`/varumarken/hifu/`:** tillagd före 2 juli 2026, syns ännu inte i LYNX — bevaka att den indexeras.
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation — bekräftade oförändrade 6 jul) — be om den när om-oss-gapsen ska åtgärdas; §8.1-beslut för om-oss tas då (remiss-/hudläkare-vinkeln är redan sidans positionering → trolig GÖR inom §5, men beslut väntar 4:e punkten + badge-bekräftelsen).

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**
- [ ] `microneedling.php` (färsk FÖRE 8 juli: SCORE **60**, KW 63, 🔵; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1). **⚠️ ÅTERRULLAD TVÅ GÅNGER: 2 juli (ägarbeslut, statistiken först) och 8 juli (§7.4b-granskningen underkände — §5-brott, tappad substans, påhittade påståenden).** Läs **hela REWRITE-SPEC:en i `lynx-examples`** innan du börjar: block-plan + sex verifierade fällor + sju gränsfall. 5 språkfel/typos redan fixade 2 juli em.
- [ ] `portomning.php` (KW28, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51→46; SCORE 0 var pågående omanalys/indexering → 69 färsk 7 jul, satte sig själv — ägarbesked 7 jul: 0/blank = LYNX uppdaterar, inte fel; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).

**Löpande / avslut**
- [ ] **Datum-svep i LYNX-filerna (ägarbeställd TODO 7 juli):** skriv ut månadsnamnen retroaktivt i alla egna datum ("2 jul"→"2 juli", "30 jun"→"30 juni" osv.) — mekaniskt städpass i egen commit när det passar; ordagranna LYNX-citat ("Last update: 06 Jul", "Analyzed X ago") lämnas verbatim. Konventionen framåt är redan aktiv (§0).
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [ ] **Gå igenom `hudproblem/hudforandringar/index.php` (mall-review)** — en pre-existerande död debug-rad (`$types_url`, rad 777) läckte en synlig PHP-warning på live (nu borttagen). Kontrollera om mallen har mer cruft/latenta buggar: andra utkommenterade `<?php echo $var ?>`, odefinierade variabler, gamla debug-rester. *(Temporär TODO här tills sidan är genomgången.)*

**Parkerat / väntar externt**
- [x] **NAMNKONVENTION — ÄGARBESLUT 8 juli: engelska filnamn.** Genomfört: `lynx-logg` → `lynx-log` · `lynx-log-arkiv` → `lynx-log-archive` · `lynx-data-arkiv` → `lynx-data-archive` · `lynx-examples-arkiv` → `lynx-examples-archive`. Samma pass: `lynx-lage` → `lynx-status`. 98 referenser uppdaterade, §-KARTAN 33/33 grön. **Kvar, parkerat i §9.3:** `lynx-`-prefixet (bakar in leverantören i varje filnamn — hör ihop med produktifierings-beslutet) · versaliseringen i `lynx-START` (enda filen med versaler).
- [P] **PRODUKTIFIERING — flera signaler + flera domäner (ägar-idé 8 juli, PARKERAD tills LYNX-arbetet är klart).** Målet på sikt: setupen blir ett textskrivar-verktyg som kan lyftas in på andra sajter — först LYNX-komponenten, sedan GSC, Ahrefs m.fl. **Vad som krävs:** filsetet blandar idag tre saker som då måste separeras — (a) **SIGNAL-adaptern** (LYNX-specifik: kolumndefs, badges, SCORE-formeln, skärmbilds-intaget; engångs per verktyg), (b) **HANTVERKET** (portabelt = själva produkten: formeln, checklistan, AI-tellsen, mät-disciplinen prediktera→mät→förfina→backporta, arkiv-policyn, "ett fakta = en cell"), (c) **SAJTPROFILEN** (per kund: husröst, juridisk ram MFL/PIL/estetiklagen, silo-karta, brandfakta 30 år/SHR/1994, förbudslistan). Idag ligger de om vartannat — §5 blandar em-streck (hantverk), medicinska påståenden (sajtprofil) och roaccutan-guarden (enskild sida); §1.1/§1.3 är rena LYNX-artefakter (per-block-tiers finns inte i GSC). **Billig förberedelse när vi ändå rör filerna:** lägg en ANDRA axel bredvid KIND — `SCOPE: CRAFT | SITE | SIGNAL` — så blir framtida extraktion en grep i stället för en omskrivning. **Två beslut som blir dyrare med tiden:** `lynx-`-prefixet bakar in leverantören i varje filnamn; §-numren (arv från monolit-playbooken) är redan orsaken till trasiga pekare vid varje flytt → namngivna ankare (`#formeln`, `#seo-skydd`) överlever flyttar. **⚠️ Ärlighet:** bedömningsmodellen är kalibrerad på EN korpus, ETT språk, EN bransch (blindtest 57–62 % exakt på vår copy; 3 av 14 omskrivna sidor mätta). Generalisera METODEN, inte MODELLEN, förrän en andra sajt bekräftat den.
- [P] Dubbel `title`-attribut i widgets (§8 — beslut: skippa).
- [V] **Exosomer + polynukleotider (kombinationsbehandlingar) på microneedling.php** — LYNX HIGH-gap 2 jul (konkurrenter: Akademikliniken, Nordiska Kliniken lyfter det); **väntar på att kliniken lanserar behandlingen** (ägaren 2 jul: "vi ska introducera exosomer"). När den finns: eget kort/block på microneedling.php i husröst (§4) inom §5-ramarna + silo-beslut om ev. egen sida. Skriv INGET innan ägaren bekräftar att tjänsten är live.

---

## 9.1 Prioriterad helsides-backlog (hela sajten, 2026-07-01)
Från LYNX-inventeringen (`lynx-data.php` + Pages-listan). Prio = AI COPY-svårighet × KW × SCORE/GAPS-uppsida. **Process per sida:** hämta per-block-facit FÖRST → facit-driven rewrite (§13.D). **Facit-kö:** ägaren kan klistra in facit för 2–3 sidor i förväg — spara alla direkt (save-first, §0) och beta av i prio-ordning, så blockeras ingen session på väntan. Minns §1.4: 🔴/🟠-sidor ger AI COPY-flagg-vinst; 🔵-sidor ger SCORE-vinst.

**Tier 1 — störst KW + uppsida (GÖR FÖRST):**
1. `/` (Homepage) — KW298, **AI COPY SLIGHT (ej flaggad — bekräftat 2 jul 14:20)**, AIQ POOR (enda POOR-sidan), SCORE28, GAPS 0/0 (rensade). Störst enskild uppsida — men vinsten är SCORE + AI QUESTIONS, inte flagg. Skydda E-E-A-T-widgets.
2. `pigmentflackar.php` — KW244, 🟠 MODERATE **(FACIT ✅ 2 jul 14:22 — medel 2,06, 5–6 🔴→🔵-fixar till 🔵-badge)**. Största MODERATE; pigment-huvudsida (silo mot behandla-pigmentflackar). **✅ Paus HÄVD 6 jul em: blank-läget var pågående omanalys (ägarbesked), ej tier-flytt — kör när sidan + färskt facit dyker upp igen.**
3. `rosacea.php` — KW221, 🔵 SLIGHT, SCORE –. Rosacea-huvudsida.
4. `perioral-dermatit.php` — KW194, 🔵, SCORE –.

**Tier 2 — hög-KW SLIGHT, låg/0 SCORE + gaps (enskilda block kan vara 🔴):**
blodprickar (175, SCORE17) · milier (173, 37) · seborre (168, –) · pormaskar (128, 32) · acnearr (121, SCORE 0→**74 färsk 7 juli** — omanalysen satte sig själv, tredje belägget; GAPS 3/1→1/0; CLICKS 78 = näst mest klickade sidan) · **acne.php (116 — FACIT ✅ MOTTAGEN 1 jul: ~10 🔴-block, redo; husröst-REFERENS → LÄMNA dess 🔵/🟢-block)** · **seborroisk-keratos (110, 74 färsk — FACIT ✅ 2 jul, i Fas 3b-kön)** · hudflikar (105, 28) · finnar (101, silo).

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · **microneedling (FACIT ✅ 2 jul — Fas 3b-kön)** · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · **acne-rygg (FACIT ✅ 2 jul — Fas 3b-kön; SCORE 0 var omanalys → 69 färsk 7 jul)** · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠)~~ ✅ · ~~oonskat-har (🟠)~~ ✅ · ~~mogen-hy (🟠)~~ ✅ · ~~microdermabrasion (🟠)~~ ✅.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

**Scope-beslut (ägarbesked 2 jul em):** (1) **ALLA sidor som finns i LYNX ska gås igenom** — vissa redan gjorda, resten framöver; komplett sidregister (i LYNX / saknas i LYNX / i LYNX men ej i repot) i `lynx-data.php` under "Snapshot 2026-07-02 EM". (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS** ur genomgången. (3) Sidor som saknas i LYNX (homepage-raden?, varumarken/hifu/, avbokningspolicy, karriar, ev. ansiktsbehandling/rosacea/) = håll utkik vid framtida scans (bevakningstrådar §9).

*(Full 5-tier-lista med alla ~100 sidor + noter genererad 2026-07-01; härledbar ur `lynx-data.php`.)*

---

## 9.2 FYNDLÅDAN — upptäckt under arbetet, parkerat för senare (ägarbeslut 8 juli)
**Hit går allt du snubblar på medan du gör något annat.** Regeln står i §0.1 ▶ UNDER ARBETET: skriv EN rad här, säg EN mening till ägaren, fortsätt med uppgiften. **Lådan är default. Ett fynd tas ur den bara genom ägarbeslut** — aldrig för att det kändes viktigt i stunden.

Skillnaden mot de andra listorna: **§9.0/Fas-listorna = planerat arbete** · **Bevaka = trådar öppnade av inkommen mätdata** · **§9.2 = sidofynd.** Ett sidofynd som ägaren prioriterar flyttas härifrån till rätt lista och får en rad i §11. Ett som aldrig prioriteras ligger kvar — det kostar en rad och skyddar mot att samma sak upptäcks tre gånger.

**Format:** en rad. `[allvarlighet] fyndet — var det syns — vad som skulle krävas.` Bevis hör hemma i raden, inte i en utredning.

- [ ] **[LOW] §9.0 steg 8: specen sa "§13.O:s *tre* stycken → ett", utfallsraden säger "*fyra* stycken → ett".** Båda bevarade i steg 8-raden. Ingen vet i efterhand vilken som räknade rätt; §13.O är redan ett stycke. Kosmetiskt.

*(Tomma rader tas aldrig bort med motiveringen "verkar inte viktigt". De tas bort när fyndet är åtgärdat eller när ägaren avfärdar det — och då med en rad i §11.)*

---

## 9.3 PARKERAT-META — arbete på LYNX-filerna själva (ägarbeslut 8 juli)
**Detta föreslås ALDRIG vid sessionsstart.** Det ligger här tills ägaren ber om det med egna ord. Kön i §9 innehåller **sidor**; verktyg, struktur, städning och revisioner innehåller den inte.

**Varför lådan finns:** den 8 juli stod ett meta-projekt som *"FÖRST I KÖN"* i §9. En ny Claude läste kön, erbjöd projektet som ett alternativ bland andra, ägaren valde ur listan — och hela sessionen gick till verktyg. Ingen regel bröts av slarv; **seedet låg i filen innan sessionen började.** §0.1 hade redan *"ett fynd är inte ett uppdrag"* och *"ett verktyg är inte ett mål"*. Båda skrivna samma dag, båda brutna samma dag. **Skyddet måste vara strukturellt, inte något du ska minnas.**

**Utfallstestet (§0.1):** rör sessionens `git diff --stat` bara `includes/lynx/` har uppdraget inte flyttat sig. Säg det rakt ut i stället för att låta gröna commits se ut som framsteg.

- [ ] §9.0:s **två kvarvarande** ägarbeslut: `lynx-score` HISTORIK-prosan · filnamnskonventionen. *(Stubben och underlagsfilen raderade 8 juli.)*
- [x] **✅ EN ENDA STATUSCELL — GENOMFÖRD 8 juli (ägar-idé, ägarbeslut).** `lynx-status.php` skapad: LÄGE-bannern (ur START) + §11.1 (ur `lynx-models`), båda verbatim. `lynx-START` och `lynx-models` är nu rena `KIND: REGEL`. Status bor på ett ställe.
  **✅ ÅTERGIVNINGARNA BORTA 8 juli.** 19 strykningar i `lynx-backlog` (per-sida-listan + Tier 3), `lynx-data` (Status-kolumnen → `Not (status: §11.1)`) och `lynx-examples`. **Invarianten som nu gäller och som är testad:** *ingen fil utom `lynx-status` påstår om en sida att den är LIVE eller MÄTT/OMÄTT.* Rå LYNX-data per (sida × vy) rördes inte — det är mätkorpusen, inte en dubblett.

- [ ] Produktifieringen: separera SIGNAL / HANTVERK / SAJTPROFIL, `SCOPE`-tagg bredvid `KIND`.
- [ ] Datum-svepet: gamla poster skriver "2 jul", konventionen säger "2 juli" (§0.2). Retroaktivt, kosmetiskt.

*(Tillkommer något här: skriv EN rad, gå vidare. Ta aldrig något härifrån utan att ägaren ber om det.)*
