<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX BACKLOG — sidkarta, gap-beslut, TODO & claims (vi använder ingen task-tracker)

```
▣ MANIFEST
KIND          AKTIV — ändras varje session (status, TODO, claims). Re-läs ALLTID; lita aldrig på minnet av den.
LADDA-NÄR     "vad är gjort / vad är nästa" · innan du börjar på en sida (claima i §12) · när en ny TODO öppnas
KANONISK-FÖR  §12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.0 fil-optimeringspasset · §9.1 prioriterad backlog
PEKAR-PÅ      lynx-START = router/LÄGE/invarianter/§-KARTA · lynx-rewrite = hantverket · lynx-models = mät · lynx-logg = historik · lynx-data = rådata
```

> **Utbruten ur `lynx-START.php` 8 juli (§9.0 steg 7)** så START kan vara en tunn dispatcher. START bär läget och invarianterna; denna fil bär arbetet. **Öppnar du en ny tråd — skriv den HÄR, aldrig bara i loggen eller i en konversation** (POST-MALLENS ram 4, `lynx-logg` §11).

---

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *FIL-OPTIMERINGSPASSET §9.0 — steg 1–6 klara (5+6 autonomt 8 juli). NÄSTA: steg 7 = START-splitten + `lynx-backlog.php` — **kräver ägaren i rummet** (destruktivt, 50 pekare). Spec + batterier i `lynx-optimering-underlag.php`.* | pågående | 8 juli |

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**HELA FLAGG-LISTAN KLAR: 4 SIGNIFICANT + 10 MODERATE omskrivna, alla LIVE på main och produktions-verifierade 6 juli** (logg #11–#13; per-sida-historiken bor i `lynx-logg`). Alla facit i `lynx-examples`. Per-sida-status + öppna rester: §9 Fas 1/Fas 3 nedan.

**Öppna rester på de MÄTTA sidorna:** acne-ansikte intro-blockets 🟠 (micro-fix-kandidat) · behandla-pigmentflackar 4 block (micro-fix-kandidat, frysning hävd) · om-oss badge-bekräftelse.
**Kvar för framtida städpass:** pigmentflackar FAQ-sektion (AI-holdout, ej facit-flaggad) + typtitel-versalisering · ärr-boilerplate-sweep (§9).

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

### 8.1 Per-sida gap-punkter (LYNX-förslag) + beslut
Från LYNX "Quick wins / Recommended improvements". Beslut enligt §5 (kosmetiskt, siloing).

**GENOMFÖRDA (LIVE 1 juli):** `ytliga-blodkarl.php` (rosacea-länk + hemmavård-vinkeln; 1177-/hudcancer-punkterna SKIP = medicinskt) · `hudproblem/hudforandringar/index.php` (H1-sökord + hub-fokus; söka-vård SKIP). Gap-texterna i `lynx-gaps`. **Den återanvändbara skrivprincipen som föddes här — "när det ärliga svaret är ingen hemmakur, säg det och led till vår lösning" — bor nu i `lynx-rewrite` §5.**

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

### 9.0 FIL-OPTIMERINGSPASSET (ägar-beställt 7 juli — "för långa sektioner skummas; långa loggar kanske egen fil")
**Arbetssätt (ägar-feedback 7 juli):** ETT steg i taget med ägar-avstämning emellan · INGA agent-utskick (vanligt läge, usage-hänsyn) · fullständigt analysunderlag med radnummer + MÅSTE-BEHÅLLAS-listor i **`lynx-optimering-underlag.php`** (temporär fil — radera när passet är klart). Princip: inget raderas — öppna trådar/omätta baselines/ägarbeslut flyttas eller komprimeras, historik → arkivfiler (git har alltid verbatim).

**▶ DESTINATION — mål-arkitekturen ✅ RATIFICERAD av ägaren 8 juli.** Triad **KIND = REGEL/AKTIV/HISTORIK** (deklarerad PER SEKTION i ett front-matter-manifest: `LADDA-NÄR / KANONISK-FÖR / PEKAR-PÅ / KIND`) × domän (mätning · rewrite · logg). **START = tunn dispatcher, ~60 rader: router + LÄGE + invarianter, ingen operativ text.** Strukturell lag: **"ett fakta = en cell; celler pekar, återger aldrig."**
> **Ägarändringar mot 7 juli-utkastet:** (1) **NY cell `lynx-backlog.php` (AKTIV)** = §8 + §8.1 + §9 + §12 — utan den förblir START fet. (2) **Loggen är HISTORIK**, inte AKTIV; microneedling-block-planen flyttas till `examples-aktiv` = sista "logg som enda bärare"-hålet. (3) copy-playbook-stubben dör; `copy-formula`-minnesfilen → ren pekare mot rewrite §2–§6 *(gjort 8 juli, 13/13 regler grep-verifierade)*. (4) Inga splittar av score/data — blandade filer deklarerar KIND per sektion.
> **Full spec + laddnings-recept + känd risk: `lynx-optimering-underlag.php` (MÅL-ARKITEKTUR, överst). Skrivs permanent i §0 vid steg 10 — annars dör den med underlagsfilen.**

- [x] **1. Ägarbeslut: lynx-data-omstruktureringen GODKÄND (ägaren 7 juli)** — AKTUELLT LÄGE-tabell + baseline-register i lynx-data.php, snapshots verbatim → lynx-data-arkiv.php (519→183 rader). Mönstret aktivt-läge+arkivfil = mall för resten av passet.
- [x] **2. KLAR 7 juli — stale state + trasiga pekare rättade:** §9 Fas 3-raderna säger "väntar main-push/⛔GSC-gate" på 6 sidor fast ALLT är LIVE på main sedan 6 juli (logg #13) — även §8 (d3ce9162) + §9.1 Tier 3; TOC-raden ("Innehåll:") listar §§ som flyttat till rewrite/models/logg vid splitten; routerns "(save-first, §0)"-pekare; lynx-log-arkiv + logg-intron säger "playbooken"; lynx-examples rad 4 pekar på stubben.
- [x] **3. KLAR 7 juli — 3 unika saker flyttade ur loggen** (förkrav för steg 4 uppfyllt): milier-/CryoPen-prisverifieringen (öppen ägar-tråd, post 2 juli em #4) → §9 Bevaka · juridik-käll-URL:erna (post 6 juli #5) → lynx-rewrite §5 · state-synk-principen ("greppa gamla frasen, synka ALLA förekomster") → §0.
- [x] **4. KLAR 8 juli — loggmall + arkivering:** POST-MALL (max ~8 rader, taggade fynd) + arkiv-policy **R1–R6** i §11-intron · **23 poster arkiverade** (6 juli #3/#4/#5/#6/#9/#10/#12 + hela 2 juli-sjoket + 1 juli main-push) → `lynx-log-arkiv`, enradare kvar · #14 komprimerad · korspekare lagade (rewrite §4.2, lynx-score ×4, lynx-examples). Sid-poster med omätta baselines orörda (R1); em #2:s microneedling-block-plan kvar aktiv. **Loggen 87→57 kB (−34 %); resten = R1-skyddade poster + kompression i steg 5–9.**
- [x] **5. KLAR 8 juli (autonomt)** — lynx-models → operativ REGEL-cell; EEAT-mekanismen rättad (falsifierad "hälsosidor/YMYL"-förklaring); superseded lager → lynx-score HISTORIK; §11.1:s fem mätregler → ETT 5-punktsblock; första manifestet satt. Batteri 38/38. *(Ursprunglig spec:* arkivera §1.2:s superseded historiklager (OMPRÖVAS-noteringen, 30 juni-multiplikativa analysen, besvarade testprotokollet) → pekare; konsolidera §11.1:s FEM staplade ⚠️-mätregelstycken till ETT 5-punktsblock; spak-kartan: EEAT = ej copy-spak, AI STYLE-intervall färska skalan; MÄTT-radernas statusceller → kort + logg-pekare. Evidence-§5-filtret + no-regression + §1.5 + §10.0 RÖRS EJ.*)
- [x] **7. KLAR 8 juli** — 7a: START → tunn dispatcher (254→111 rader) + NY `lynx-backlog.php`; resolvern + 3 historik-headers; 0 trasiga pekare. 7b: START-prosan 50,1→15,2 kB (−70 %); facit-flödet → §14 SPARA-RECEPT i lynx-data (lagar routerns trasiga "(save-first, §0)"); prime-direktivet står nu EN gång; backlog komprimerad; "ingen hemmakur"-principen → rewrite §5. Batteri 7: 54/54.
- [x] **8. KLAR 8 juli** — lynx-rewrite formatkomprimerad −6 %, **0 regeländringar**. §1.1-väggen → 5 punktrader · §1.3 blindtest-sagan → 5 slutsatser · §1.4 → punktlista (öppna beställningar ordagrant) · §13.D → punktlista · §13.O fyra stycken → ett. §2–§7 orörda. Batteri 8: 22/22.
- [x] **6. KLAR 8 juli (autonomt)** — lynx-score → KIND per sektion (REGEL SLUTLÄGE-tabell A–F · AKTIV rådata · HISTORIK superseded+gamla skalan, med varning för TRE falsifierade påståenden). Batteri 40/40. **⚠️ ÄGARBESLUT VID STEG 10: filen växte 26,3→37,6 kB** — A–F:s ursprungsprosa behållen i HISTORIK (bär öppna trådar); att stryka den är informationsförlust och ditt beslut. *(Ursprunglig spec:* slutsatserna A–F → kompakt slutläges-tabell (utan korrigeringshistorik); arkivera gamla-skalans sektion + 2 juli-sektionen (sammanfattningsrader kvar: formeln 7/7, datapunkterna, acne.php no-regression-subs); fixa models rad 3-pekaren (beslut: härledningen BOR i lynx-score; models §1.2 = operativa sammanfattningen) + models stale "klampas på hälsosidor"-formulering. **KIND per sektion:** härledningen = REGEL, nedbrytnings-rådatan = AKTIV.*)
- [ ] **7. START → tunn dispatcher + NY `lynx-backlog.php`** (störst läsvinst; ägarbeslut 8 juli). **START behåller:** router (med laddnings-receptet), LÄGE ≤8 rader, invarianter (prime-direktivet EN gång, §0.1, Aldrig-listan, rollfördelningen, state-synk-principen), §0.2-dispatchen, struktur-kartan. **Flyttar till `lynx-backlog.php` (AKTIV):** §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.1 tier-listan · §12 claims. **Samtidigt:** facit-flödesväggen (rad 24) → 4–5 rader + pekare till spara-receptet i lynx-data (som får ett stabilt §-nummer så routern kan träffa det); §8/§9 KLAR-rader → enradare med logg-pekare (öppna rester bevaras: oonskat-har-ägarfrågan, micro-AIQ-detaljen, pigment V2-prediktion + AI STYLE 55); lösta [x]-bevakningstrådar arkiveras; Bevaka-trådarna → beslutspunkt + öppen fråga (historik → logg); avduplicera prime-direktiv/filkarta (står 3–5 ggr). ⚠️ **Pekar-baseline mätt 8 juli FÖRE steg 7** (underlaget): 49 pekare i 7 filer måste redigeras (AKTIV 34 · REGEL 15); historikens 101 löses med EN header-rad per arkivfil (får ej uppdateras retroaktivt); 130 sitter i filer som raderas. 0 redan-trasiga §-refs i FÖRE-läget → allt som går sönder efter steg 7 är orsakat av steg 7. Kör censusen igen med `--efter` och jämför.
- [ ] **8. lynx-rewrite — ENDAST formatkomprimering** (inga regeländringar). *No-loss-batteri 8 FÄRDIGT (22 checkar, validerat).* §1.1-väggen → 5 punktrader; §1.3-ingressens blindtest-saga → 5 operativa slutsatser + pekare till examples; §1.4 → ~8 rader (öppna beställningar oavkortade); §13.O:s tre stycken → ett (spak-regeln EN gång); §13.D → punktlista. §2–§7, §4-banken, §5-juridiken, §3-checklistan RÖRS EJ.
- [ ] **9. lynx-examples-splitten + småfiler** (632 rader = dolda jätten). *No-loss-batteri 9 FÄRDIGT (10 checkar, validerat: fångar borttaget facit + borttagen Räkning-rad).* blindtest 1/3/4 + MODELLANALYS 2 juli + median-hypotesen + FÖRE-tabellerna för de 3 MÄTTA sidorna (FÖRE-tiers finns i EFTER-tabellernas kolumn) → ny `lynx-examples-arkiv.php` (HISTORIK); ALLA facit för omätta/kösidor kvar i `examples-aktiv`. **+ Ägarbeslut 8 juli: microneedlings block-plan flyttas hit ur logg em #2**, in under sidans facit-sektion (loggen blir därmed ren HISTORIK — inget operativt beror på den). **Stubben `lynx-copy-playbook.php` RADERAS** (ej kortas). Censusen 8 juli: endast **3 omnämnanden blockerar** — START ×1, rewrite ×2 (log-arkiv täcks av sin header-rad, underlaget raderas). SERP-drift-regeln (questions rad 13) → models §1.5; gaps/questions-analysparenteser → pekare (rålistorna orörda).
- [ ] **10. Slutverifiering + permanentning:** **skriv struktur-kartan (triad × domän + laddnings-recept + "ett fakta = en cell"-lagen) i START §0** — annars dör den med underlagsfilen. Front-matter-manifest på ALLA filer. No-loss-koll mot underlags-filens MÅSTE-BEHÅLLAS-listor; **kör pekar-censusen med `--efter` och diffa mot FÖRE-baselinen** (måste bli 0 kvarvarande i AKTIV+REGEL, 0 §-refs utan ägare, 0 refs till raderade filer); header-rad på plats i varje HISTORIK-fil; loggpost enligt nya mallen; radera `lynx-optimering-underlag.php`; push.

**Setup**

**Fas 1 — SIGNIFICANT-sidorna**
- [x] `acne-ansikte.php` — omskriven (hela sidan), minimal-diff (§13.O); sökord/claims bevarade → main, LIVE.
- [x] `ytliga-blodkarl.php` (KW172) — omskriven steg för steg (öppningar + summeringar bort + gap-punkter §8.1) → main, LIVE 1 jul. Bortkommenterade $type_categories/$symptoms orörda (bilder saknas).
- [x] `behandla-pigmentflackar.php` — de-AI:ad (öppningar + marknadssvansar bort), long-tail hållen → main, LIVE 1 jul. **MÄTT 7 jul: badge 🔴→🔵 + per-block-EFTER 2,38→1,38 (lynx-examples); micro-fix-kandidat: kemisk-/micro-korten (🔴 kvar) + $about-2/IPL-kortet (🟠).**
- [x] `hudforandringar/index.php` — de-AI:ad (hub-register, öppningar + svansar + stavfel) → main, LIVE 1 jul; H1-sökord i separat commit (§13.H); debug-rad-fixen d3ce9162 LIVE på produktion (logg #13).

**Fas 2 — Schema**
*(Attribuerings-disciplin §13.G/H: rör INTE de 8 mätsidorna med schema förrän deras FÖRE→EFTER är mätt — börja schema-spåret på sidor utanför mätkohorten.)*
- [ ] FAQPage JSON-LD från `$faq_categories` (efter de 4 sidorna) — realistiskt scope (§13.J) + FAQ-svar i husröst.
- [ ] **Fas 2-kandidat #1: acne-ansikte.php** (ägarbesked 2 jul: "rimliga frågor, kika på när vi når den fasen") — ON-TOPIC frågelista i `lynx-questions.php` med topp-gap: käklinje-klustret ~56 samlade poäng på POOR/– ("Varför får man finnar på käklinjen?" score 21) trots att sidan HAR käklinje-zonsektion → svara i frågans varför-/vad-betyder-FORM (§1.5 H2). ⚠️ Sidan är FRYST mätsida (§13.G) — vänta tills FÖRE→EFTER är mätt.
- [ ] PAGE TYPE/P. PRICE: sätt `$rich_product` per sida med Offer (§13.I) — separat schemaspår.

**Fas 3 — MODERATE-vågen = AI COPY-flagg-uppdraget (🔴 SIGNIFICANT klart i Fas 1; här fixas alla 🟠 MODERATE; facit-komplett 7/7 sedan 2 jul em)**
*Fix-antal = §1.4-estimat för badge-flytt till 🔵 (gråzons-förbehåll); §7 kräver ändå alla 🔴/🟠-block åtgärdade. Ordning nedan = billigast först; pigmentflackar (KW244) kan lyftas först om payoff prioriteras.*
- [x] `om-oss.php` — LIVE på main. **Öppet:** badge-bekräftelse + O01-bannern + FAQ-betygen.
- [x] `hudbehandlingar/ipl/` — LIVE. Väntar LYNX-refresh.
- [x] `ipl-rosacea.php` — LIVE. **Öppet:** SCORE 39→60 färsk men badge kvar 🟠; AI STYLE-A/B-testet (FÖRE 25).
- [x] `mogen-hy.php` — LIVE 6 juli. Prediktion 🟠→🔵 (FÖRE-medel 1,57); väntar refresh. "Vad betyder hy?"-gapet medvetet lämnat (ägarbeslut 2 juli).
- [x] `hudproblem/oonskat-har/` — LIVE 6 juli. Prediktion 🟠→🔵 (1,77). Ägar-frågan "underarmar" STÄNGD 3 juli: korrekt svenska, ingen ändring. **Öppet:** AIQ-frågelistan saknas i `lynx-questions`.
- [x] `microdermabrasion.php` — LIVE 6 juli. Prediktion 🟠→🔵 (1,82). **Öppet:** AIQ GOOD→OK-frågedetaljen fortfarande obesvarad.
- [x] `hudproblem/bristningar/` — LIVE 6 juli. Prediktion 🟠→🔵 (1,92; färsk SCORE-FÖRE 63).
- [x] `solskadad-hy.php` — LIVE 6 juli. Prediktion 🟠→🔵.
- [x] `rhinophyma-rosacea.php` — LIVE 6 juli. Prediktion 🟠→🔵. **Öppet:** V2 OMÄTT (crawlen ≤6 juli läste gamla texten); AI STYLE-FÖRE 70.
- [x] `pigmentflackar.php` — LIVE 6 juli (KW244, sista MODERATE; V1→V2 efter ägar-feedback "kapa inte info"). **Öppet: V2 OMÄTT** — vid NÄSTA AI Copy-refresh: mät FÖRE→EFTER (prediktion 🟠→🔵) + jämför AI STYLE mot 55-baselinen.

Körs facit-drivet löpande — **ej grindat efter Fas 2-schemat** (fristående spår). Prioordning även i **§9.1**.

**Bevaka — trådar öppnade från omkringliggande skärmbildsdata (§0-principen, 2 jul)**
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
- [ ] **`/varumarken/hifu/`:** nyligen tillagd sida som ännu inte syns i LYNX — bevaka att den indexeras.
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation — bekräftade oförändrade 6 jul) — be om den när om-oss-gapsen ska åtgärdas; §8.1-beslut för om-oss tas då (remiss-/hudläkare-vinkeln är redan sidans positionering → trolig GÖR inom §5, men beslut väntar 4:e punkten + badge-bekräftelsen).

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**
- [ ] `microneedling.php` (KW70, SCORE 50 färsk; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1). **Rewrite ÅTERRULLAD 2 jul (ägarbesked) — färdig block-plan i §11-posten em #2. 5 språkfel/typos FIXADE separat 2 jul em** (markanden, micronnedling-FAQ:n, slussas-in-kanalerna, våra→vår, utseendet) — kvar: enbart de-AI-omskrivningen.
- [ ] `portomning.php` (KW28, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51→46; SCORE 0 var pågående omanalys/indexering → 69 färsk 7 jul, satte sig själv — ägarbesked 7 jul: 0/blank = LYNX uppdaterar, inte fel; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).

**Löpande / avslut**
- [ ] **Datum-svep i LYNX-filerna (ägarbeställd TODO 7 juli):** skriv ut månadsnamnen retroaktivt i alla egna datum ("2 jul"→"2 juli", "30 jun"→"30 juni" osv.) — mekaniskt städpass i egen commit när det passar; ordagranna LYNX-citat ("Last update: 06 Jul", "Analyzed X ago") lämnas verbatim. Konventionen framåt är redan aktiv (§0).
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [ ] **Gå igenom `hudproblem/hudforandringar/index.php` (mall-review)** — en pre-existerande död debug-rad (`$types_url`, rad 777) läckte en synlig PHP-warning på live (nu borttagen). Kontrollera om mallen har mer cruft/latenta buggar: andra utkommenterade `<?php echo $var ?>`, odefinierade variabler, gamla debug-rester. *(Temporär TODO här tills sidan är genomgången.)*

**Parkerat / väntar externt**
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

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · **microneedling (FACIT ✅ 2 jul — Fas 3b-kön)** · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · **acne-rygg (FACIT ✅ 2 jul — Fas 3b-kön; SCORE 0 var omanalys → 69 färsk 7 jul)** · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠)~~ ✅ LIVE, väntar refresh · ~~oonskat-har (🟠)~~ ✅ LIVE 6 juli · ~~mogen-hy (🟠)~~ ✅ LIVE 6 juli · ~~microdermabrasion (🟠)~~ ✅ LIVE 6 juli.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

**Scope-beslut (ägarbesked 2 jul em):** (1) **ALLA sidor som finns i LYNX ska gås igenom** — vissa redan gjorda, resten framöver; komplett sidregister (i LYNX / saknas i LYNX / i LYNX men ej i repot) i `lynx-data.php` under "Snapshot 2026-07-02 EM". (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS** ur genomgången. (3) Sidor som saknas i LYNX (homepage-raden?, varumarken/hifu/, avbokningspolicy, karriar, ev. ansiktsbehandling/rosacea/) = håll utkik vid framtida scans (bevakningstrådar §9).

*(Full 5-tier-lista med alla ~100 sidor + noter genererad 2026-07-01; härledbar ur `lynx-data.php`.)*
