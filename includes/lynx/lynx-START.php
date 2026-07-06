<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX START — nav, läge & backlog (LÄS DENNA FÖRST, alltid)

## ▶ ROUTER — vad ska du göra? (läs bara det du behöver)
| Uppgift | Läs |
|---|---|
| **Skriva om en sida** | denna fil (läge+regler+backlog) → `lynx-rewrite.php` (formel/husröst/ramar/SEO/checklista/process/§13) → sidans facit i `lynx-examples.php` |
| **Analysera mätdata / förfina modeller** | denna fil → `lynx-models.php` (SCORE/AIQ/mät-loop/bevakning) → rådata i `lynx-score.php` · `lynx-examples.php` · `lynx-questions.php` |
| **Spara inkommen LYNX-data** | filkarta överst i `lynx-data.php` → rätt kolumnfil (save-first, §0) |
| **Kolla vad som är gjort / nästa** | §8/§9 nedan (backlog) + `lynx-logg.php` (historik) |
| **Slå upp ett beslut/varför** | `lynx-logg.php` (arbetslogg) |


**Filkarta (hela LYNX-setet):** `lynx-START` (denna: nav/läge/backlog) · `lynx-rewrite` (omskrivnings-hantverk) · `lynx-models` (modeller/mät) · `lynx-logg` (historik) · `lynx-log-arkiv` (gammal historik) · RÅDATA: `lynx-data` (Pages+kolumndefs) · `lynx-score` (SCORE) · `lynx-examples` (AI COPY-facit) · `lynx-questions` (AIQ) · `lynx-gaps` (gaps).
---

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **DEN HÄR filen (lynx-START) din startpunkt — läs den, kolla ROUTERN överst, och gå sen till rätt fil för uppgiften** (`lynx-rewrite` för omskrivning, `lynx-models` för mät-analys). Ladda inte allt på en gång.

**⚠️ Planen är ITERATIV och aldrig "klar".** Vi har trott den färdig minst två gånger (senast igår vid lunch) och ändå hittat luckor och byggt vidare. Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren **klistrar in LYNX-facit** (skärmbild/text) — men **avgör alltid FÖRST vad syftet är**, ägaren säger inte alltid rakt ut. Två lägen: **(a) Per sida (riktat)** = facit för en sida vi jobbar på → spara baseline + kör §7 på just den sidan. **(b) Bunt statistik (inventering)** = många sidors kolumn-data på en gång → **diffa mot `lynx-data.php`** och klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen §10, FÖRE→EFTER + validera modell; nya sidor → uppdatera baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara, ingen åtgärd — LYNX kanske inte refreshat än). **Oavsett läge: SPARA FÖRST, agera sen** — spara rådatan i rätt KOLUMNFIL (filkarta i `lynx-data.php`; ägarbeslut 2 jul): per-block-facit → `lynx-examples.php` · frågelistor → `lynx-questions.php` · SCORE-nedbrytningar → `lynx-score.php` · gap-texter → `lynx-gaps.php` · Pages-rader/inventeringar → `lynx-data.php`; notera FÖRE→EFTER. Agera sen (rewrite/prio/mätning §10) och **gör en TODO (§9) för det som ska åtgärdas**. Agera aldrig på facit utan att först spara; det är vår enda mätkälla. **Skärmbilds-principen (ägarbesked 2 jul):** (1) skärmbilder är av naturen PARTIELLA — jobba med det som syns, fråga riktat efter det som saknas, behandla inte trunkering som blocker; (2) läs HELA bilden — snappa upp omkringliggande data utanför det vi pratar om (grannrader, kolumner, badges); (3) visar omkringliggande data en FÖRÄNDRING mot sparad data → öppna en ny TODO-tråd i §9 (exempel 2 jul: GAPS-rensningen + microdermabrasion AIQ, upptäckta i kanten av en mogen-hy-leverans).

> **🟢 LÄGE 2026-07-06 em** *(ny session: läs denna banner → routern överst → rätt fil för din uppgift; backlog §8/§9 nedan)*
> - **📁 FILSTRUKTUR SPLITTRAD 6 jul:** läs `lynx-rewrite` för omskrivning, `lynx-models` för mät-analys, `lynx-logg` för historik. Denna fil = nav/läge/backlog. (Detaljer: lynx-logg 6 jul #10.)
> - **Mål:** LYNX grönt **utan att skada ranking/trafik**. **RAMEN (verifierad 6 jul):** spaken är SUBSTANS-kvalitet; AI COPY-flaggan är PROXY, Google straffar ej AI-text (lynx-rewrite §1). **SCORE ska INTE jagas** — tak ~75-77 på våra sidtyper, EEAT-badge låst 60 (lynx-score/models).
> - **Mätt (refresh 5 jul — metoden funkar):** acne-ansikte 🔴→🔵 SLIGHT + om-oss 0 flaggade block. §1.1 nyckel 1 kausalbelagd. SCORE-modellen LÖST via 13 nedbrytningar (lynx-score).
> - **Live på main:** 8 sidor (PR #236). **På staging, väntar main-push:** mogen-hy, oonskat-har, microdermabrasion, **bristningar, solskadad-hy, rhinophyma-rosacea** (alla 6 Fas 3 klara + §7.4b/workflow-verifierade) + språkfel-svep, milier-pris, Google Meet, d3ce9162.
> - **SEO-vakt §10.0 = SENARE process (ägarbeslut 6 jul):** GSC + Ahrefs görs som eget pass senare (LYNX-prioritet nu pga refresh-fördröjning). Gaten blockerar inte längre; main-push är ägarens beslut. KW-vakt löpande via LYNX-data kvarstår.
> - **Nästa arbete:** pigmentflackar (✅ paus hävd — blank var omanalys; kör när den kommer tillbaka m. facit) → microneedling (block-plan lynx-logg 2 jul) → Tier 1-SLIGHT (rosacea/perioral-dermatit, facit saknas). Alla Fas 3-MODERATE klara.
> - **Öppna ägar-beställningar:** pigmentflackar-raden + AI Copy-vy när den kommit tillbaka · om-oss badge-rad · acne-ansikte FAQ-facitrest · AI Copy-datum för de 3 kvarvarande SIGNIFICANT · (GSC/Ahrefs = eget senare pass) · boilerplate-sweep "Akne Specialiserade Hudterapeuter" (27 filer — timing-beslut).
> - **Varningar/regler:** 1 Claude i taget (§0.1) · save-first i rätt kolumnfil (filkarta i `lynx-data`) · ny LYNX-skala → färsk-mot-färsk · **attribution kräver observerad delta, ej deploy-timing** (lynx-models §11.1) · Fas 3-facit REDAN sparat — be inte igen.
>
> *(Banner-regel 6 jul: LÄGE hålls som punktlista, max ~8 rader. Nya detaljer går till §8/§9/§11/§11.1 — här uppdateras bara STATUSBYTEN. Prosaväggen som stod här förut leder till skumläsning; §11 6 jul #6.)*

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt (kalibrerat 2026-06-30, skärpt 2026-07-01 — läs §13.O):** vi har kartlagt vad LYNX läser som AI (§1.1/§1.2) och fixar **just de tells, målinriktat och steg för steg** — utan att förstöra sökord eller substans (§6). Jobba i **små steg**: några få ändringar → visa ägaren → mät (§10) → iterera. **Ta inte bort substans** (block, list-punkter, poäng, sökord, claims); längden får bli kortare *eller* längre. Största spaken: **led öppningen med mekanism** (§2/§1.1). **Ta INTE bort hela stycken/listor i ett svep** — ägaren har stoppat det två gånger. Lägg inte till påståenden sidan inte stöder. Testa på staging (§7.6).
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata** (LYNX saknar export): en fil per LYNX-kolumn så sessioner bara läser det som behövs (ägarbeslut 2 jul) — **filkarta överst i `includes/lynx/lynx-data.php`** (Pages-listan där; AI COPY → lynx-examples · AI QUESTIONS → lynx-questions · SCORE → lynx-score · GAPS → lynx-gaps). Fyll på vid varje refresh.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

> Nav-fil för uppdraget att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. **Denna fil (lynx-START) är ingången** — LÄGE, router, regler, TODO + status bor här (vi använder ingen task-tracker). Hantverket bor i `lynx-rewrite`, modellerna i `lynx-models`, historiken i `lynx-logg`. En ny Claude utan kontext läser START först, sen rätt fil per router (se §0.1 — kör 1 i taget). Splittrad 2026-07-06.

**Innehåll:** §0 använda filen · §0.1 kör 1 i taget · §1 hävstången · §1.1 bedömningsmodell · §1.2 score-modellen · §1.3 prediktions-rubrik · §1.4 medel-modellen · §1.5 AI questions-modellen · §2 formeln · §3 checklista · §4 husröst · §4.1 utökad husröst · §4.2 kund-tilltal & extern best practice · §5 ramar (inkl. juridik) · §6 SEO-skydd · §7 process · §8 backlog · §8.1 per-sida gaps · §9 TODO · §10 justeringsloop · §11 logg + baseline · §11.1 bevakningslista · §12 claims · §13 skyddsregler

---

## 0. Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**; se över 🔵/🟢 med lätt hand (typo/grammatik/tappat sökord/uppenbar tell) och bedöm sidan som HELHET (§13.D). Enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§11) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **de mest flaggade blocken först** (🟥/🔴 före 🟠); lämna 🔵/🟢 (lätt hand, §13.D).

**Vad som hör hemma i den här filen (så vi inte rutar in oss):** generella principer, inte engångsiakttagelser. Dyker det upp något på en enskild sida — t.ex. "behövs kommat här?" — är det ett omdöme i stunden, inte en ny regel. Innan en regel läggs till: hjälper den på fler sidor, eller låser den bara fast oss? Hellre få principer + omdöme än en växande lista mikroregler. *(Den gamla komma-efter-sökfras-regeln i §6 var just en sådan över-specificering — den föddes ur ett enskilt "kommat behövdes inte" och togs bort.)*

---

## 0.1 Kör bara 1 Claude i taget (parallellt fungerar inte)
**Beslut 2026-07-01:** kör **en** instans åt gången. Parallellt testades (ipl-rosacea på en andra terminal) och krockar: även när två Claude jobbar på *olika* sidor tvingas båda skriva i samma **processfiler** — §11-loggen, §12, `lynx-data.php`, `lynx-examples.php`, backlog-statusen (§8/§9). Sido-isoleringen räcker inte när själva processen delar filer (kollision på både playbooken och lynx-examples 1 jul, löst manuellt utan dataförlust men onödigt kört). Så: en i taget.

Filsetet är självbärande — en ny Claude utan kontext läser START först (router → rätt fil) och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — dessa filer gäller.)

Regler:
1. **Läs denna START-fil (läge/router/regler/backlog) + §12 (status) först; slå upp `lynx-logg` vid behov.** På annan dator: `git pull` innan du börjar.
2. **Du ska vara ENSAM — kontrollera det först.** Kör `git status` (finns ändrade/ostaged filer du inte själv rört?), kolla §12 (aktiv rad?) och senaste §11-logg/commits. Ser du tecken på en annan instans, eller osparat jobb du inte känner igen → **stanna och fråga ägaren** innan du rör något. Anta aldrig att du är ensam.
3. **Markera vad du jobbar med i §12 innan du börjar** (sida · status · tid); töm raden när du är klar (logga i §11). Så ser nästa session var förra slutade.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (vad/varför) + §12 (status) när du är klar, sen `git push`.
6. Följ §2–§6 exakt, så blir rösten enhetlig.

---

## 0.2 Standing dispatch-instruktion — klistra in när du startar en ny exekutor-Claude
Så ägaren slipper upprepa samma sak varje gång. Kopiera detta i första meddelandet till en ny exekutor-Claude:

> Läs `includes/lynx/lynx-START.php` först (läge + router + regler), gå sen till `lynx-rewrite.php` för hantverket och hämta sidans facit i `lynx-examples.php`. Detta är en **iterativ process: små steg, inte stora omskrivningar.** Vi kör 1 Claude i taget — kolla först (`git status` + §12) att ingen annan är igång, markera sen din sida i §12, be mig om sidans LYNX-facit (per-block), följ §7. **Innan du sparar ändringar, fråga dig själv och mig: "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer senare. Behåll varje block, list-punkt och sakpoäng; räkna punkterna före/efter (§13.D). Rör aldrig delade widgets/mallar (§6/§8) eller en sida någon annan claimat.

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**SIGNIFICANT — alla ✅ KLARA (staging/main):**
- `acne-ansikte.php` — ✅ KLAR + **MÄTT 6 jul: 🔴→🔵 SLIGHT** (kvar: intro-blockets 🟠 = micro-fix-kandidat; se §11 6 jul)
- `ytliga-blodkarl.php` — ✅ KLAR (omskriven steg för steg → main, LIVE 1 jul; se §9/§11/§11.1)
- `behandla-pigmentflackar.php` — ✅ KLAR (bonus, KW16; de-AI:ad → main, LIVE 1 jul)
- `hudproblem/hudforandringar/index.php` — ✅ KLAR (hub; de-AI:ad → main, LIVE 1 jul; H1 i sep. commit; debug-rad-fix d3ce9162 väntar main-push)

**MODERATE-vågen:** ✅ KLARA (9/10): `om-oss.php` (**MÄTT 6 jul: 0 flaggade block**), `hudbehandlingar/ipl/`, `ipl-rosacea.php` (LIVE, väntar refresh), `mogen-hy.php` (staging), `hudproblem/oonskat-har/` (staging), `microdermabrasion.php` (staging), `hudproblem/bristningar/` (omskriven 6 jul → staging), **`solskadad-hy.php` (omskriven 6 jul → staging; workflow-verifierad 7/7 grönt)**, **`rhinophyma-rosacea.php` (omskriven 6 jul → staging; workflow+juridik-verifierad)**. **KVAR (1):** `pigmentflackar.php` **(FACIT ✅ 2 jul: 8🔴/4🟠/5🔵/1🟢, KW244 — störst payoff; PAUSAD: blank/omanalys, kör när den kommer tillbaka i filtret m. färskt facit)**. Alla facit i `lynx-examples.php`.

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

### 8.1 Per-sida gap-punkter (LYNX-förslag) + beslut
Från LYNX "Quick wins / Recommended improvements". Beslut enligt §5 (kosmetiskt, siloing).

**ytliga-blodkarl.php**
- HIGH Fördjupning om Rosacea → **GÖR: länk** till rosacea-sidan (kort omnämnande, ingen rosacea-text här).
- HIGH Tydliggör när man ska söka medicinsk vård (1177) → **SKIP** (medicinskt — vi håller kosmetiskt).
- MEDIUM Utesluta hudcancer (basalcellscancer) → **SKIP** (medicinskt).
- MEDIUM Egenvård/lindring i hemmet → **GÖR (vänd till konvertering):** förklara ärligt att ytliga blodkärl *inte* går att behandla hemma — de kräver IPL på klinik. Svarar på sökintentionen och leder till vår behandling. *Generell princip: när det ärliga svaret är "ingen hemmakur", säg det och förklara vår lösning istället för att skippa frågan.*

**hudproblem/hudforandringar/index.php**
- HIGH H1 och titel saknar primärt sökord → **GÖR** (sökord i H1/titel; behåll övriga sökord).
- HIGH För brett fokus på generella hudförändringar → **GÖR inom hub-scope** (tydligare fokus, men sidan är en kategori-hub).
- HIGH Tydligare riktlinjer för när man ska söka vård → **SKIP** (medicinskt).

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

**Setup**
- [x] Färdigställ setup & playbook (formel, husröst, ramar, SEO-skydd, §13-skyddsregler, lynx-data.php).

**Fas 1 — SIGNIFICANT-sidorna**
- [x] `acne-ansikte.php` — omskriven (hela sidan), minimal-diff (§13.O); sökord/claims bevarade → main, LIVE.
- [x] `ytliga-blodkarl.php` (KW172) — omskriven steg för steg (öppningar + summeringar bort + gap-punkter §8.1) → main, LIVE 1 jul. Bortkommenterade $type_categories/$symptoms orörda (bilder saknas).
- [x] `behandla-pigmentflackar.php` — de-AI:ad (öppningar + marknadssvansar bort), long-tail hållen → main, LIVE 1 jul.
- [x] `hudforandringar/index.php` — de-AI:ad (hub-register, öppningar + svansar + stavfel) → main, LIVE 1 jul; H1-sökord i separat commit (§13.H); debug-rad-fix d3ce9162 väntar main-push.

**Fas 2 — Schema**
*(Attribuerings-disciplin §13.G/H: rör INTE de 8 mätsidorna med schema förrän deras FÖRE→EFTER är mätt — börja schema-spåret på sidor utanför mätkohorten.)*
- [ ] FAQPage JSON-LD från `$faq_categories` (efter de 4 sidorna) — realistiskt scope (§13.J) + FAQ-svar i husröst.
- [ ] **Fas 2-kandidat #1: acne-ansikte.php** (ägarbesked 2 jul: "rimliga frågor, kika på när vi når den fasen") — ON-TOPIC frågelista i `lynx-questions.php` med topp-gap: käklinje-klustret ~56 samlade poäng på POOR/– ("Varför får man finnar på käklinjen?" score 21) trots att sidan HAR käklinje-zonsektion → svara i frågans varför-/vad-betyder-FORM (§1.5 H2). ⚠️ Sidan är FRYST mätsida (§13.G) — vänta tills FÖRE→EFTER är mätt.
- [ ] PAGE TYPE/P. PRICE: sätt `$rich_product` per sida med Offer (§13.I) — separat schemaspår.

**Fas 3 — MODERATE-vågen = AI COPY-flagg-uppdraget (🔴 SIGNIFICANT klart i Fas 1; här fixas alla 🟠 MODERATE; facit-komplett 7/7 sedan 2 jul em)**
*Fix-antal = §1.4-estimat för badge-flytt till 🔵 (gråzons-förbehåll); §7 kräver ändå alla 🔴/🟠-block åtgärdade. Ordning nedan = billigast först; pigmentflackar (KW244) kan lyftas först om payoff prioriteras.*
- [x] `om-oss.php` — ✅ KLAR (LIVE på main, väntar refresh)
- [x] `hudbehandlingar/ipl/` — ✅ KLAR (LIVE, väntar refresh)
- [x] `ipl-rosacea.php` — ✅ KLAR (LIVE, väntar refresh)
- [x] `mogen-hy.php` — ✅ OMSKRIVEN 2 jul em (alla 5🔴+1🟠 + typos/buggar; §7.4b-verifierad, 5 fynd åtgärdade; prediktion 🟠→🔵) → staging, väntar main-push
- [x] `hudproblem/oonskat-har/` — ✅ OMSKRIVEN 3 jul (5🔴+2🟠 + lätt hand FAQ/alt-titles; §7.4b-verifierad 3 agenter; prediktion 🟠→🔵; ÄGAR-FRÅGA "underarmar"=armhålor? öppen i §11) → staging, väntar main-push
- [x] `microdermabrasion.php` — ✅ OMSKRIVEN 3 jul (5🔴+1🟠 + lätt hand $model/FAQ/alt; §7.4b-verifierad; prediktion 🟠→🔵; kortpriser rättade till 2595/6995/9995 kr + diamantspets samma dag; AIQ GOOD→OK-frågedetaljen fortfarande obesvarad) → staging, väntar main-push
- [x] `hudproblem/bristningar/` — ✅ OMSKRIVEN 6 jul (6🔴+1🟠 + lätt hand extended/FAQ/kort; definitionsdubbletten DIFFERENTIERAD, ej ihopslagen — §13.D respekterad; §7.4b-verifierad 3 agenter, 0 allvarliga; prediktion 🟠→🔵) → staging, väntar ⛔ GSC-gate + main-push (§11 6 jul #7)
- [x] `solskadad-hy.php` — ✅ OMSKRIVEN 6 jul (6🔴+1🟠 + lätt hand; workflow-verifierad 8 granskare, tier 7/7 grönt inkl. 2 HUMAN; prediktion 🟠→🔵) → staging, väntar main-push
- [x] `rhinophyma-rosacea.php` — ✅ OMSKRIVEN 6 jul (8🔴+2🟠 + hela FAQ:n de-AI:ad; workflow + juridik-agent, 0 allvarliga, gränsfall hedgade; prediktion 🟠→🔵) → staging, väntar main-push
- [ ] `pigmentflackar.php` (2,06, n=18 → ≈5–6 fixar; **KW244 = störst payoff**; **3 typos FIXADE 2 jul**; orsaks-definition ×3–4 block) — **✅ MYSTERIET LÖST 6 jul em (ägarbesked): sidan var BLANK för att den OMANALYSERADES i steg (inte tier-flytt) — kommer tillbaka med nytt resultat. INGEN paus-orsak kvar; kör när den dyker upp igen i filtret med färskt facit. Be om dess nya rad + AI Copy-vy när den landat.**

Körs facit-drivet löpande — **ej grindat efter Fas 2-schemat** (fristående spår). Prioordning även i **§9.1**.

**Bevaka — trådar öppnade från omkringliggande skärmbildsdata (§0-principen, 2 jul)**
- [ ] **⛔ GSC-KOLL (SEO-vakten §10.0 — GATE för nästa main-push; ägar-uppgift):** dra Search Console-data för de 8 live-sidorna (klick/visningar/snittposition per sida, ~4 v före vs efter 1 jul). Grön → main-pusha mogen-hy/oonskat-har/microdermabrasion; röd → §13.F-rollback + obduktion. Bakgrund: omskrivna sidor tappade KW mer än orörda i 6 jul-scanen (behandla-pigment −19 %).
- [ ] **ÄRR-FRÅN-FINNAR-BOILERPLATE-LÄCKA (ägar-flaggat 6 jul — dokumentera för ärr-processen):** ärr-mallens copy-paste läcker på FEL ämne. På `pigmentflackar.php` (fixat 6 jul under omskrivningen): FAQ-kategorirubrik "Allt du behöver veta om ärr av finnar" → "...pigmentfläckar", `$specialist_url_title` "inriktning mot ärr bildade av finnar" → "specialiserade på pigmentfläckar". Strängarna "ärr av finnar/ärr bildade av finnar/fläckar från finnar" finns i **3 filer** (grep): `finnar-arr.php` + `behandla-finnar-arr.php` (ÄRR-sidor — RÄTT ämne, men kolla särskrivning/Title-Case när de görs i LYNX-processen) + `pigmentflackar.php` (var FEL, nu fixat). **När vi når ärr-/finnar-arr-sidorna i backloggen (§9.1 Tier — acnearr KW127 SCORE0, finnar-arr, behandla-finnar-arr, laser-acnearr m.fl.): granska att deras egen boilerplate är ämnesrätt OCH att den inte läckt vidare till andra sidor.** Samma klass som "Akne Specialiserade"-läckan nedan. **Öppen widget-fråga (pigmentflackar):** relaterade-problem-kortet "Åldersfläckar" länkar till `/solskadad-hy.php` (ej `/aldersflackar.php` som finns) — url_title/alt fixade, men url-destinationen lämnad orörd (kan vara medveten silo-koppling åldersfläckar=solskador); bekräfta med ägaren.
- [ ] **MALL-BOILERPLATE-LÄCKA `$specialist_url_title = "Akne Specialiserade Hudterapeuter"` (upptäckt 6 jul av ägaren; §7.4b-workflow flaggade det på solskadad-hy):** title-attribut på "se alla specialister"-länken, **27 filer** har exakt strängen (grep-verifierat). Två klasser: (a) **4 icke-akne-sidor där titeln är ÄMNESFEL** — `aldersflackar.php`, `atrofiska-arr.php`, `melasma.php`, `milier.php`; (b) 23 akne-sidor där den är ämnesrätt men särskriven ("Akne Specialiserade" → "aknespecialiserade") + engelsk Title Case. **Bedömning:** title-attribut = siddata (§13.K, säkert att ändra) och INTE ett textblock LYNX betygsätter för AI COPY → ingen attributionsrisk, men det är ett äkta språkfel. **RÖRDES EJ 6 jul** (27-filers sweep bryter en-sida-i-taget + kräver ägarbeslut om timing). Solskadad-hy redan rättad ("Hudterapeuter specialiserade på pigmentbehandlingar"). **ÄGARBESLUT:** (a) svep alla 27 i ETT separat språk-pass (som språkfel-svepet 2 jul, egen commit, ofarligt för attribution), (b) bara de 4 ämnesfel-sidorna, eller (c) låt ligga. **Bevaka även:** samma mall läcker troligen fler engelsk-Title-Case-title-attribut (brand-titlar "Microneedling Verktyg", "Kryoterapi Verktyg" hittades på rhinophyma/bristningar) — kolla vid sweepen.
- [ ] **GAPS-rensningen 2 jul:** ytliga-blodkarl 2/2→0/0, ipl-rosacea 2/1→0/0, homepage 3/2→0/0 — utan att sidorna refreshats (tiers/SCORE står stilla). Verifiera vid nästa scan: äkta rensning (gap-texterna lösta/borttagna av LYNX) eller scan-artefakt? Påverkar §8.1-gapbesluten för de sidorna. **Tooltip-insikt 2 jul 15:00: GAPS är KONKURRENT-relativa** ("compared to top-ranking competitors") → rensning/nya gaps kan bero på ändrad konkurrentbild, inte våra åtgärder — attribuera aldrig GAPS-förändringar till oss utan att läsa gap-texterna.
- [ ] **microdermabrasion AIQ GOOD→OK** (försämrad 30 jun→2 jul utan våra ändringar) — kolla AI QUESTIONS-detaljen när facit hämtas för sidan (§1.5-modellen: vilken fråga tappade GOOD?).
- [x] **§1.4 medel-omräkning — GJORD (modellanalysen 2 jul em):** medel FÖLL på 3 av 6 äldre (acne.php 1,75→🟠 vs 🔵 · behandla-pigment 2,3→🟠 vs 🔴 · hudforandringar 2,08→🟠 vs 🔴) → §1.4 nedgraderad till ARBETSMODELL med gråzon 1,9–2,4 (medel 14/17 = median 14/17, disjunkta missar). Full tabell + fällda alternativ-modeller i lynx-examples.
- [ ] **BESTÄLLNING (avgör §1.4-frågan):** be ägaren köra FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan — testar om orapporterade FAQ-svar/versionsskillnad förklarar konflikten. Kombinera med §1.2-beställningen (2–3 färska SCORE-breakdowns varav minst en med AI STYLE beräknad) — **NYTT 6 jul: prioritera ytliga-blodkärls färska nedbrytning (SCORE 74, post-rewrite = AI STYLE-spakens A/B-test, snabbare än att vänta på acne.php).**
- [x] **Homepage-raden i AICOPY-vyn — LÖST 2 jul 14:20 (zoom-dump + ägarbesked):** homepage `/` FINNS i LYNX (VAL 41 · SCORE 28 · GAPS 0/0 · **AI COPY SLIGHT** · AIQ POOR · KW 298); `/behandlingar.php` = **redirect till /hudbehandlingar/** (KW 0 — ingen egen copy att åtgärda). Rad-data i lynx-data. Följd: homepage är INTE AI COPY-flaggad → dess uppsida är SCORE + AIQ (enda POOR-sidan), inte flagg-vinst.
- [ ] **`/varumarken/powerlite-photonova/`:** finns i LYNX/live men INTE i repot — utred (borttagen sida som lever kvar på live? redirect behövs?).
- [ ] **`/varumarken/hifu/`:** nyligen tillagd sida som ännu inte syns i LYNX — bevaka att den indexeras.
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation — bekräftade oförändrade 6 jul) — be om den när om-oss-gapsen ska åtgärdas; §8.1-beslut för om-oss tas då (remiss-/hudläkare-vinkeln är redan sidans positionering → trolig GÖR inom §5, men beslut väntar 4:e punkten + badge-bekräftelsen).
- [ ] **pigmentflackar.php borta ur AICOPY-filtret (6 jul)** — saknas även i alfabetisk vy (ej omskriven av oss → ej vår förtjänst). URL-sök i Pages + AI Copy-vy beställd av ägaren; Fas 3-/Tier 1-prion för sidan PAUSAD tills löst.

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**
- [ ] `microneedling.php` (KW70, SCORE 50 färsk; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1). **Rewrite ÅTERRULLAD 2 jul (ägarbesked) — färdig block-plan i §11-posten em #2. 5 språkfel/typos FIXADE separat 2 jul em** (markanden, micronnedling-FAQ:n, slussas-in-kanalerna, våra→vår, utseendet) — kvar: enbart de-AI-omskrivningen.
- [ ] `portomning.php` (KW28, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51, SCORE 0 = trasig analys, be om omkörning; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).
- [x] ~~`mogen-hy.php`~~ — **STALE DUBBLETTRAD (upptäckt 6 jul):** sidan omskrevs 2 jul inkl. språkfelen (se Fas 3-raden [x] ovan + §11 2 jul em #7); låg kvar öppen här av misstag. "Vad betyder hy?"-gapet medvetet lämnat (ägarbeslut 2 jul).

**Löpande / avslut**
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [ ] **Gå igenom `hudproblem/hudforandringar/index.php` (mall-review)** — en pre-existerande död debug-rad (`$types_url`, rad 777) läckte en synlig PHP-warning på live (nu borttagen). Kontrollera om mallen har mer cruft/latenta buggar: andra utkommenterade `<?php echo $var ?>`, odefinierade variabler, gamla debug-rester. *(Temporär TODO här tills sidan är genomgången.)*
- [x] (Löst) Filerna är `.php` med `<?php exit;` → renderas tomma på webben; behöver inte raderas.

**Parkerat / väntar externt**
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
blodprickar (175, SCORE17) · milier (173, 37) · seborre (168, –) · pormaskar (128, 32) · acnearr (127, **SCORE0** = trolig trasig analys §1.2, +gaps) · **acne.php (116 — FACIT ✅ MOTTAGEN 1 jul: ~10 🔴-block, redo; husröst-REFERENS → LÄMNA dess 🔵/🟢-block)** · **seborroisk-keratos (110, 74 färsk — FACIT ✅ 2 jul, i Fas 3b-kön)** · hudflikar (105, 28) · finnar (101, silo).

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · **microneedling (FACIT ✅ 2 jul — Fas 3b-kön)** · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · **acne-rygg (FACIT ✅ 2 jul — Fas 3b-kön; SCORE 0 = trasig analys)** · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠)~~ ✅ LIVE, väntar refresh · ~~oonskat-har (🟠)~~ ✅ omskriven → staging · ~~mogen-hy (🟠)~~ ✅ omskriven → staging · ~~microdermabrasion (🟠)~~ ✅ omskriven → staging.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

**Scope-beslut (ägarbesked 2 jul em):** (1) **ALLA sidor som finns i LYNX ska gås igenom** — vissa redan gjorda, resten framöver; komplett sidregister (i LYNX / saknas i LYNX / i LYNX men ej i repot) i `lynx-data.php` under "Snapshot 2026-07-02 EM". (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS** ur genomgången. (3) Sidor som saknas i LYNX (homepage-raden?, varumarken/hifu/, avbokningspolicy, karriar, ev. ansiktsbehandling/rosacea/) = håll utkik vid framtida scans (bevakningstrådar §9).

*(Full 5-tier-lista med alla ~100 sidor + noter genererad 2026-07-01; härledbar ur `lynx-data.php`.)*

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| `solskadad-hy.php` + `rhinophyma-rosacea.php` (Fas 3 #8+#9, körs i samma pass) | pågår | 6 jul em |

---

