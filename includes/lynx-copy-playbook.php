<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX Copy Playbook — AcneSpecialisten

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **den här filen ditt enda underlag — läs hela top-to-bottom först.**

**⚠️ Planen är ITERATIV och aldrig "klar".** Vi har trott den färdig minst två gånger (senast igår vid lunch) och ändå hittat luckor och byggt vidare. Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren **klistrar in LYNX-facit** (skärmbild/text) — men **avgör alltid FÖRST vad syftet är**, ägaren säger inte alltid rakt ut. Två lägen: **(a) Per sida (riktat)** = facit för en sida vi jobbar på → spara baseline + kör §7 på just den sidan. **(b) Bunt statistik (inventering)** = många sidors kolumn-data på en gång → **diffa mot `lynx-data.php`** och klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen §10, FÖRE→EFTER + validera modell; nya sidor → uppdatera baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara, ingen åtgärd — LYNX kanske inte refreshat än). **Oavsett läge: SPARA FÖRST, agera sen** — spara rådatan i rätt KOLUMNFIL (filkarta i `lynx-data.php`; ägarbeslut 2 jul): per-block-facit → `lynx-examples.php` · frågelistor → `lynx-questions.php` · SCORE-nedbrytningar → `lynx-score.php` · gap-texter → `lynx-gaps.php` · Pages-rader/inventeringar → `lynx-data.php`; notera FÖRE→EFTER. Agera sen (rewrite/prio/mätning §10) och **gör en TODO (§9) för det som ska åtgärdas**. Agera aldrig på facit utan att först spara; det är vår enda mätkälla. **Skärmbilds-principen (ägarbesked 2 jul):** (1) skärmbilder är av naturen PARTIELLA — jobba med det som syns, fråga riktat efter det som saknas, behandla inte trunkering som blocker; (2) läs HELA bilden — snappa upp omkringliggande data utanför det vi pratar om (grannrader, kolumner, badges); (3) visar omkringliggande data en FÖRÄNDRING mot sparad data → öppna en ny TODO-tråd i §9 (exempel 2 jul: GAPS-rensningen + microdermabrasion AIQ, upptäckta i kanten av en mogen-hy-leverans).

> **🟢 LÄGE 2026-07-02 (ny session startar här):** **8 sidor omskrivna och LIVE på main** (PR #236 mergad, git-verifierat 2 jul): acne-ansikte, ytliga-blodkarl, behandla-pigmentflackar, hudforandringar, hudbehandlingar/ipl, om-oss, acne.php, ipl-rosacea. Alla facit-guidade (§13.D). **På staging väntar main-push:** d3ce9162 (hudforandringar död debug-rad — enda SIDÄNDRINGEN) + dagens playbook-/datacommits (2 jul: state-synk, optimeringar a–e, blindtest 3+4, 4 sidors facit, §1.5) — de senare är ofarliga för LYNX (`<?php exit`-filer), men main-pushen rensar debug-raden på produktion. **Kör 1 Claude i taget (§0.1) — parallellt övergivet.** **Modeller byggda:** AI COPY-rubrik v5+gradient (§1.3, ±1-band; blindtest 3+4 körda 2 jul: 57–62 % exakt på regressionsset, gradienten skärpt), sidnivå=MEDEL av block med GRÅZON 1,9–2,4 (§1.4, korrigerad av modellanalysen 2 jul em: medel 14/17, median 14/17 på disjunkta missar — avgörande test beställt), AI QUESTIONS §1.5 (NY, hypotes), SCORE §1.2 (OMPRÖVAS — testprotokoll registrerat; gammal-skala-formeln nu 6/6 via bristningar). **Process-optimeringar 2 jul:** §7.4b adversariell verifiering standard, arkiv-policy §11 (`lynx-log-arkiv.php`), facit-kö §9.1, Fas 2-attribueringsvakt §9. **Väntar på:** LYNX-refresh → kör mät-loopen (§10): mät FÖRE→EFTER per §11.1-bevakningslistan, validera modellerna (acne.php = A/B-test av SCORE/AI STYLE-spaken). **Nästa arbete (ägar-styrt 2 jul em):** statistiken 2 jul em SAMMANSTÄLLD (4 nya MODERATE-facit: solskadad-hy, rhinophyma, microdermabrasion, bristningar + helsajts-inventering + sidregister — allt i lynx-data/lynx-examples). **Microneedling-rewriten PÅBÖRJADES 2 jul em men ÅTERRULLADES på ägarbesked ("statistik först, den gör vi sen")** — block-plan bevarad i §11; starta INTE om den utan ägarens klartecken. **Facit-klara köer:** Fas 3b (§9: microneedling, portomning, acne-rygg, seborroisk-keratos, mogen-hy) + **MODERATE-vågen KOMPLETT 7/7** (§8: rhinophyma, microdermabrasion, solskadad-hy, bristningar + pigmentflackar KW244 & oonskat-har mottagna 2 jul 14:22). **Facit SAKNAS bara för** Tier 1-SLIGHT-sidorna (rosacea 221, perioral-dermatit 194; homepage bekräftad SLIGHT/POOR 14:20 — ej flaggad, uppsidan är SCORE+AIQ). Per-block-facit + frågelistor finns REDAN sparade för kö-sidorna — be inte om dem igen; följ §7 inkl. 4b-verifiering (1 bedömare) och §8.1-gapbesluten; de 8 mätsidorna är FRYSTA tills LYNX mätt dem (§10 steg 5-backport därefter). **⚠️ Mätvarning 2 jul:** LYNX verkar ha ny version/skala — §1.2 OMPRÖVAS (SCORE 0 = trasig analys; 39-taket brutet utan våra ändringar); jämför färsk-mot-färsk, inte mot 30 jun-baselines (§11.1). §1.4 = medel-ARBETSMODELL med gråzon 1,9–2,4 (modellanalys 2 jul em: medel 14/17 = median 14/17, disjunkta missar); modellöversyn på positiv-datan gjord 2 jul (§1.1 nyckel 5, §1.3-gradient, §1.4 additions-spak); §1.3 v5 out-of-sample-validerad (blindtest 5: 55 % exakt / 90 % ±1). **Data-princip:** spara allt ägaren skickar i rätt KOLUMNFIL (filkarta överst i `lynx-data.php` — ägarbeslut 2 jul: lynx-examples=AI COPY · lynx-questions=AIQ · lynx-score=SCORE · lynx-gaps=GAPS · lynx-data=Pages-listan), diffa vid ny scan, påminn om uppdateringar.

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt (kalibrerat 2026-06-30, skärpt 2026-07-01 — läs §13.O):** vi har kartlagt vad LYNX läser som AI (§1.1/§1.2) och fixar **just de tells, målinriktat och steg för steg** — utan att förstöra sökord eller substans (§6). Jobba i **små steg**: några få ändringar → visa ägaren → mät (§10) → iterera. **Ta inte bort substans** (block, list-punkter, poäng, sökord, claims); längden får bli kortare *eller* längre. Största spaken: **led öppningen med mekanism** (§2/§1.1). **Ta INTE bort hela stycken/listor i ett svep** — ägaren har stoppat det två gånger. Lägg inte till påståenden sidan inte stöder. Testa på staging (§7.6).
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata** (LYNX saknar export): en fil per LYNX-kolumn så sessioner bara läser det som behövs (ägarbeslut 2 jul) — **filkarta överst i `includes/lynx-data.php`** (Pages-listan där; AI COPY → lynx-examples · AI QUESTIONS → lynx-questions · SCORE → lynx-score · GAPS → lynx-gaps). Fyll på vid varje refresh.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

> Kanonisk arbetsfil för att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. Utgå alltid från den här filen — den är **självbärande och enda källan till sanning** (vi använder inte task-tracker; TODO + status bor här). En ny Claude utan kontext ska kunna läsa den top-to-bottom och börja jobba (se §0.1 — kör 1 i taget). Senast uppdaterad: 2026-07-02.

**Innehåll:** §0 använda filen · §0.1 kör 1 i taget · §1 hävstången · §1.1 bedömningsmodell · §1.2 score-modellen · §1.3 prediktions-rubrik · §1.4 medel-modellen · §1.5 AI questions-modellen · §2 formeln · §3 checklista · §4 husröst · §4.1 utökad husröst · §5 ramar · §6 SEO-skydd · §7 process · §8 backlog · §8.1 per-sida gaps · §9 TODO · §10 justeringsloop · §11 logg + baseline · §11.1 bevakningslista · §12 claims · §13 skyddsregler

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

Filen är självbärande — en ny Claude utan kontext läser den top-to-bottom och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — den här filen gäller.)

Regler:
1. **Läs hela filen + §11 (arbetslogg) + §12 (status) först.** På annan dator: `git pull` innan du börjar.
2. **Du ska vara ENSAM — kontrollera det först.** Kör `git status` (finns ändrade/ostaged filer du inte själv rört?), kolla §12 (aktiv rad?) och senaste §11-logg/commits. Ser du tecken på en annan instans, eller osparat jobb du inte känner igen → **stanna och fråga ägaren** innan du rör något. Anta aldrig att du är ensam.
3. **Markera vad du jobbar med i §12 innan du börjar** (sida · status · tid); töm raden när du är klar (logga i §11). Så ser nästa session var förra slutade.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (vad/varför) + §12 (status) när du är klar, sen `git push`.
6. Följ §2–§6 exakt, så blir rösten enhetlig.

---

## 0.2 Standing dispatch-instruktion — klistra in när du startar en ny exekutor-Claude
Så ägaren slipper upprepa samma sak varje gång. Kopiera detta i första meddelandet till en ny exekutor-Claude:

> Läs `includes/lynx-copy-playbook.php` top-to-bottom innan du rör något — den är hela ditt underlag. Detta är en **iterativ process: små steg, inte stora omskrivningar.** Vi kör 1 Claude i taget — kolla först (`git status` + §12) att ingen annan är igång, markera sen din sida i §12, be mig om sidans LYNX-facit (per-block), följ §7. **Innan du sparar ändringar, fråga dig själv och mig: "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer senare. Behåll varje block, list-punkt och sakpoäng; räkna punkterna före/efter (§13.D). Rör aldrig delade widgets/mallar (§6/§8) eller en sida någon annan claimat.

---

## 1. Hävstången (varför vissa sidor är SLIGHT och andra SIGNIFICANT)
Samma mall, samma ämne — ändå läser `acne.php` som människa (SLIGHT) och `acne-ansikte.php` som AI (SIGNIFICANT). Skillnaden är **informationstäthet**, inte längd, säljton eller komma-antal.
- SIGNIFICANT öppnar med **fyllnad** (tom skala, cirkulärt, marknadsföring, "det är viktigt att").
- SLIGHT/HUMAN leder med **konkret täthet** — hela modellen i §1.1.

---

## 1.1 Bedömningsmodellen — vad LYNX rimligtvis bedömer (validerad mot per-block-facit)
Axeln = **fyllnad/mall ↔ rak konkret täthet**. Bekräftat mot facit på acne.php, acne-ansikte, ipl-rosacea. LYNX betygsätter **alla** textblock på sidan, inte bara synliga.

- **🟥 EXTREME** — mest mättade fyllnaden: block som utöver marknad/mekanism även **stuffar sökordet** (samma term ~×4) + staplar "vilket"-kedjor + är långt. Sällsynt; enda facit hittills = microneedling-kortet på behandla-pigment (se `lynx-examples.php`). Åtgärd = som SIGNIFICANT + kap repetitionen/keyword-stuffingen.
- **🔴 SIGNIFICANT** — fyllnad utan täthet. **Öppningen dominerar:** skal-öppning ("påverkar miljontals", "vanligast bland… oavsett kön"), cirkulär ("kan uppstå på flera sätt/delar"), marknads-superlativ ("avancerad… effektiv lösning", "experter"), importans-filler ("det är viktigt att", "viktigt att förstå att"), meta-scaffolding ("Här förklarar vi…"), "inte bara X utan Y". → SIGNIFICANT oavsett hur bra resten är; lång marknadstext förstärker.
- **🟠 MODERATE** — fyllnadsöppning MEN en äkta poäng. Även "led med vad det ÄR + gloss" landar här om det inte byggs ut till full mekanism (jfr acne.php "Akne består av papler och pustler…" = MODERATE).
- **🔵 SLIGHT** — **full, tät mekanism-vandring med kausal payoff** ("…porerna täpps till, bakterier samlas, kroppen svarar med en inflammation, och det är just detta som syns"), ELLER kort + genomgående konkret (definition + plats; konkreta yttre faktorer; konkreta vi-handlingar "vi tar bilder, rengör huden, skyddar ögonen").
- **🟢 HUMAN** — kort + specifik + självsäker: en konkret **siffra/mått** ("större än 5 mm"), namngiven maskin ("Alma Rejuve DyeVL"), eller äkta omdöme med personlig detalj ("gått där i 2-3 år").

**Fem nycklar:** (1) Öppningen sätter GOLVET (mekanism/konkret vs fyllnad/marknad — *tolka via nyckel 5: en enstaka mild fras är ingen fyllnadsöppning om konkretionen kommer direkt*), MEN **fluff-ackumulering × längd höjer graden** — ett kort praktiskt block klarar SLIGHT även med ett marknadsord (facit: behandla-pigment banner/about-1 = SLIGHT trots "de mest effektiva"), ett långt block med staplad marknad/hedge blir 🔴/🟥 trots mekanism (behandlingskorten). Byt fyllnadsöppning mot mekanism/konkret OCH kapa fluff-ackumuleringen. *(Samma behandling kan få olika betyg: laser-kortet = SLIGHT på acnebehandling, SIGNIFICANT på behandla-pigment — se `lynx-examples.php`.)* (2) SLIGHT-ribban är hög — hela blocket måste vara tätt, halvkonkret = MODERATE. (3) Kort + konkret siffra/namn → HUMAN ("Lägg till 1000 kr…", "större än 5 mm", "Dermapen 4"); längd är modifierare. (4) **Fluff-svansen** drar ner ett annars konkret block ("perfekt anpassad för dina unika behov", "uppnå dina hudvårdsambitioner", "säkerställa en trygg upplevelse") — och det gäller även en **cirkulär summeringssvans som bara upprepar vad blocket redan sagt, även utan ordet "Sammanfattningsvis"** (facit: microneedling på acnebehandling — full mekanism men 🔴 pga längd + "Kombinationen av dessa… få bort akne"-svans). Korta, konkreta instruktioner (eftervård: "håll rent, avstå smink första dygnet") klarar SLIGHT även med ett milt "det är viktigt att". **(5) Positiv-data-nycklar (2 jul — första SLIGHT-tunga facitet: micro/porto/acne-rygg/sebo, 23🔵/9🟢 av 53 block):** en ENSTAKA fyllnads-/importansfras fäller INTE ett block — det är ackumuleringen som fäller. Fyllnadsfras + **konkretion direkt i mening 1–2** = 🔵 (acne-rygg: "flera olika faktorer" → talg-mekanism i mening 2 = 🔵; "viktigt att förstå dess orsaker" → hormoner/genetik/svett/friktion = 🔵); fyllnadsfras + mer fyllnad = 🔴 (acne.php/acne-rygg demografi-blocken). Konkreta **process-/stegblock tål flera marknadsord** (portomning: nästan allt 🔵 trots effektiv/skonsam/idealisk — Vapozon, lansett, peelingtvätt bär). **CTA-pivot-räddningen gäller även behandlingskort** (acne-rygg "Daglig behandling… Boka konsultation" 🔵, sebo CryoPen-kortet 🔵 — nu belagt på 3 sidor). **FAQ-svar kan nå 🟢** (sebo ×2) → Fas 2-FAQ i husröst är även en AI COPY-/medel-spak (§1.4). **🔵↔🟢-gränsen är brus utan operativ betydelse** — båda = lämna (§13.D); lägg ingen prediktionsmöda där.

**Mål:** rework allt som är 🔴 SIGNIFICANT eller 🟠 MODERATE → **minst 🔵 SLIGHT**. 🔵/🟢 skrivs inte om stilistiskt men ses över med lätt hand (tydliga fixar: typo/grammatik/tappat sökord/uppenbar tell — ej över-omskrivning, §13.D/§1.3). 🟢 HUMAN nås bara på naturligt korta block (definition med siffra, namngiven maskin, kort erbjudande, omdöme) — **tvinga aldrig ner ett förklarande block i längd för att jaga HUMAN** (krockar med §13.N). För förklarande prosa är SLIGHT målet.

**Modell-referens:** `acne.php` är samma ämne som acne-ansikte fast i SLIGHT/MODERATE-version — modellera omskrivningar direkt på dess SLIGHT-block. Alla per-block-facit (sida + datum) loggas i **`includes/lynx-examples.php`** — växande korpus; fyll på vid nya facit, och logga före→efter när resultat kommer.

---

## 1.2 SCORE-modellen — komponenter, sajt-tak & copy-spakar (prediktiv, validera mot refresh)
**⚠️ OMPRÖVAS (2026-07-02, fyra färska analyser — rådata i lynx-data-snapshot 2 jul, resonemang i §11):** (1) **SCORE 0 = trasig/tom analys**, inte dålig sida (acne-rygg = 0 på ALLA komponenter; seborroisk 0→74 vid omkörning) → re-analysera 0-sidor innan slutsats. (2) **"39-taket" brutet UTAN våra ändringar** (seborroisk 74, portomning 60, microneedling 50) → LYNX verkar ha ny version/skala; **30 jun-baselines EJ jämförbara med färska analyser — mät färsk-mot-färsk.** (3) **AI STYLE 0 på färska analyser = troligen "ej beräknad än"** (AI Copy-vyn äldre datum; seborroisk fick 50 = första uppmätta >30). (4) **Aggregeringen ser ändrad ut:** EEAT-badge 60 ≠ sub-medel 81–85 på färska; Overall ≈ medel(CQ-badge, EEAT-badge) passar micro+porto, nästan sebo. (5) **Positivt riktmärke:** sebo 74 (CQ 85, AI 50) + portos CQ-subs 95–98 visar att konkret procedur-copy skårar högt på nya skalan — samma copy-egenskaper som ger 🔵-block ger högt CQ. (6) **Möjligt att AI STYLE inte längre ingår i Overall** — medel(CQ, EEAT) passar micro (50) + porto (60) exakt, sebo 72,5 vs 74; stämmer det krymper de-AI:s SCORE-payoff och de-AI-värdet ligger i AI COPY-flaggan + CQ. Avgörs med fler färska breakdowns. (7) **Gammal-skala-analyser fortsätter passa multiplikativa formeln — nu 6/6:** bristningar (Analyzed 78 days ago) Overall 18 ≈ CQ 52 × EEAT 50 × AI 25 / 3640 = 17,9 (modellanalysen 2 jul em) → versionsbytes-hypotesen stärkt: GAMLA analyser = multiplikativa, FÄRSKA ≈ medel(CQ,EEAT). **Bygg INGEN ny formel förrän fler färska breakdowns finns (§10); multiplikations-modellen nedan beskriver 30 jun-datan och står kvar som historik/hypotes.**
**Falsifierbart testprotokoll (registrerat 2 jul, FÖRE nästa data — §10 steg 1):** för nästa färska breakdowns ägaren skickar predikterar vi: (a) sida med AI STYLE 0 → **Overall = avrundat medel(CQ-badge, EEAT-badge) ±2** (facit hittills: micro 50 vs 50,5 ✓, porto 60 vs 60 ✓); (b) sida med AI STYLE >0 avgör AI-frågan: Overall ≈ medel(CQ,EEAT) → AI ingår EJ i Overall; Overall ≈ medel(CQ,EEAT,AI) → AI ingår (sebo: 74 vs 72,5 vs 65 → lutar EJ); (c) 0-sidor som omanalyseras → kommer tillbaka >0 med fulla komponenter. **Beställning till ägaren: färsk analys på 2–3 sidor, varav minst en där AI STYLE hunnit beräknas.**

*— Allt nedan i §1.2 är 30 jun-analysen. Läs genom ⚠️-linsen ovan: spak-prioriteringar och imperativ härur ("bryt 39", "master-spak", marginalkalkyler) är preliminära tills testprotokollet dömt. —*

SCORE (0–100) ≠ AI COPY-flaggan men lyfts av samma jobb. Komponenter: **CONTENT QUALITY** (Base, Depth, Evidence, Language, Readability) + **E-E-A-T** (Experience, Expertise, Authority, Trust) + **AI STYLE** (Human-like). Alla nedbrytningar (rådata, färska + gamla skalan) i **`lynx-score.php`**.

**Aggregeringsmodell för 30 JUN-DATAN (reverse-engineerad 2026-07-01, passade 5/5 dåvarande datapunkter inom ±1–2 p — OMPRÖVAS, se ⚠️ ovan):** **Overall ≈ CONTENT QUALITY × E-E-A-T × AI STYLE / ~3640** — MULTIPLIKATIVT, inte viktat medel. Bevis: hudforandringars Overall 17 ligger UNDER dess lägsta block (AI 25); ett medel kan aldrig hamna under sitt minsta värde → linjärt uteslutet. CQ = medel av sina 5 subs, E-E-A-T = medel av sina 4. K≈3640 (±5% brus). Fakta om varje komponent + full härledning i `lynx-examples.php`.
**AI STYLE är INTE ett hårt tak (korrigerar tidigare hypotes):** det är en **multiplikativ faktor** (0,25–0,30 skalar ner hela Overall ~70–75%). Motbevis mot cap: ipl-rosacea når 39 med AI STYLE bara 25 (via CQ 68 + E-E-A-T 85). AI STYLE är största spaken enbart för att det är LÄGST som ANDEL på nästan varje sida. **Elasticitet = 1 för alla tre** → generella regeln: höj sidans lägsta-som-andel-block. Överallt = AI STYLE → **de-AI = sajtbred master-spak**; på mål-sidor är E-E-A-T (49–58) näst lägst = andra spaken. 39-taket = produkten av tre medelmåttiga faktorer + ingen sida kombinerar topp-CQ+topp-EEAT+topp-AI. **Bryt 39 = höj AI STYLE** (acne 30→60 → Overall ~78).
**⚠️ Otestad hävstång:** AI STYLE varierar bara 25↔30 i datan → dess uppsida är modell-EXTRAPOLATION, ej empiriskt bevisad. **acne.php-omskrivningen (1 jul) = det avgörande A/B-testet** — mät AI STYLE + Overall vid nästa refresh; håller inte Overall≈CQ·EEAT·AI/3640 → justera modellen (§10).
**acne.php SCORE-fixplan (marginalräknat):** dOverall/dAI = 56·84/3640 = **+1,29 Overall per +1 AI STYLE** (störst; PRIMÄR = de-AI, redan gjort på 🔴-blocken). +1 Evidence = 0,14 Overall (Evidence 11→50 = +5,4) = SEKUNDÄR. Kompoundning: AI 30→50 + Evidence 11→50 → ~74 Overall (≈dubblat). NO-REGRESSION: rör ej Depth 77 / E-E-A-T 84.
**⚠️ Evidence-höjning MÅSTE filtreras genom §5:** OK = verifierbara siffror/tidsramar/priser ("Från X kr", "30 år", antal behandlingar, namngivna maskiner/brands, "12–22% kvinnor/3% män"), "senast uppdaterad"-datum, namngivna specialister (widget) + SHR-cert. INTE OK = medicinska studie-citat/rådgivning, uppfunna siffror, "granskad av hudläkare" (vi är hudterapeuter), garanterade resultat (YMYL). → höj Evidence med KLINIK-fakta, inte medicinska påståenden.

**Prediktiv spak-karta (copy-drag → komponent den flyttar).** Använd för att förutse score-effekt FÖRE refresh (analogt med §1.1 för AI COPY):
| Komponent (baseline→topp) | ↑ av (skriv så här) | ↓ av (undvik) |
|---|---|---|
| **AI STYLE** 25→30 | §2-formel, §4-husröst, §1.1-täthet; konkret öppning, varierad puls, inline-gloss | AI-vokab/em-streck (§5), filler-öppning, staplade hedges, marknads-superlativ |
| **Evidence** 11–46 | siffror, tidsram, namngiven mekanism/organism (factual §5), "Från X kr", 30 år, namngivna maskiner | vaga kvantifierare, superlativ utan tal |
| **Depth** 67–81 | full kausal mekanism-vandring, flera delaspekter, bunden prosa | korta ner, fet-etikett-listor (§13.D/N) |
| **Readability** 40–65 | puls (kort+lång), gloss av fackord, tydlig struktur | enbart långa meningar, staccato |
| **E-E-A-T** 49→85 | förstahands-klinik ("vi tar bilder/rengör"), 30 år, namngivna maskiner/brands | mest strukturellt → **rör inte widgets** (specialister/resultat/recensioner bär detta) |
| **Language** 52→80 | idiomatisk svenska, rätt register | translationese, AI-vokab |

**No-regression (KRITISKT — "utan negativa konsekvenser på annat"):** spakarna är JOINT, inte fristående. Lyft AI STYLE + Evidence **utan att sänka** Depth, E-E-A-T eller sökord/ranking. Vanliga fällor: jaga Human-like genom att korta bort substans → sänker Depth (§13.N); stripa "fackord" → sänker Evidence; skriva om rubriker → tappar sökord (§6). **Regel: varje ändring ska vara ≥0 på alla komponenter och >0 på minst en.** Optimera aldrig en komponent på en annans bekostnad.

*(acne-ansikte + behandla-pigmentflackar har SCORE "–" → kör på AI COPY + formel. Modellen är en hypotes — mät, förfina och backporta enligt §10 när refreshen kommer.)*

---

## 1.3 Prediktions-rubrik (operationell) — v5: en **±1-TIER-BAND-modell**
Gissa en blocks AI COPY-tier (🟥 EXTREME > 🔴 SIGNIFICANT > 🟠 MODERATE > 🔵 SLIGHT > 🟢 HUMAN). **Tre ofuskade blindtest (betyg dolda):** ipl 16/24 exakt (v2-rubrik), om-oss 4/11 exakt (v3 — ÖVERkorrigerade), 37-block hårdladdat set 13–16/37 exakt / 84–89 % ±1 (v4 + Fable 5, 2 jul — 3 oberoende bedömare nästan identiska → missarna var systematiska RUBRIK-luckor, alla redan dokumenterade i §1.1; v5 = §1.3 synkad med §1.1, ingen ny tuning; full data i `lynx-examples.php`). **Blindtest 5 (2 jul em — första ÄKTA out-of-sample: 20 block ur de 6 nya MODERATE-faciten, 1 färsk bedömare, facit dolt): 55 % exakt / 90 % ±1 / binärt jobb-vs-OK 15/20** — v5 generaliserar i nivå med regressionsseten (semi-holdout-farhågan 38 % motbevisad); 2-stegsmissarna = UNDERgissad marknad/passiv på behandlingsblock (regeln fanns, tillämpningen brast), båda konfidens ≤55 → <65-flaggan fångar dem. Ingen regeländring (data i `lynx-examples.php`). **Slutsats: exakt tier är BRUS** (LYNX:s mid-tier-gränser är luddiga + sid-kontext-beroende — "om oss"-prosa mildare än behandlings-prosa). **Det pålitliga är ±1-bandet.** Använd modellen som ett **band** ("troligen SLIGHT–MODERATE"), inte en exakt etikett. **Vi slutar mikro-tuna per sida** (v2↔v3 pendlade = overfit); ändra bara om ett mönster upprepas över ≥2 sidor.

**Procedur:**
1. **Omdöme** → HUMAN ENDAST med konkret personlig detalj (namn/tid, "gått där 2-3 år"); **generiskt omdöme → SLIGHT** — även med känslo-story utan namn/tid ("var skeptisk… blev bättre").
2. **Kort (1–2 meningar), icke-omdöme** → **SLIGHT** som default (CTA "Boka…", kort instruktion, definition, en konkret nytta + "Läs mer"). **Undantag uppåt (§1.1 nyckel 3):** kort + konkret **siffra/mått/namngiven maskin** ("större än 5 mm", "1000 kr", "Alma Rejuve DyeVL") eller kort direkt mänskligt röstad instruktion → **HUMAN**; kort CTA UTAN siffra/namn förblir SLIGHT (O09-läxan). **Undantag nedåt:** kort är inget frikort — tät marknads-öppning utan konkret pivot ("X är en avancerad… effektiv lösning") → **SIGNIFICANT** trots 2 meningar (acne laser-kortet); med snabb konkret CTA-pivot ("boka en kostnadsfri konsultation") kan kort marknad stanna SLIGHT (behandla-pigment-bannern; 2 jul belagt även för behandlingskort: acne-rygg "Daglig behandling…", sebo CryoPen). **Fluff-svans** ("uppnå dina hudvårdsambitioner", cirkulär summering) lyfter även ett kort/konkret block → SIGNIFICANT (dermapen eftervård-p3).
3. **≥3 meningar — öppningen sätter tyngdpunkten:**
   - konkret/mekanism/action/process/historik-öppning → **SLIGHT–MODERATE**; → SIGNIFICANT ENDAST om den avslutas med en TÄT hög marknadssuperlativ ("mest effektiva/garanterar/optimala resultat").
   - marknads-superlativ-öppning → **MODERATE**; → SIGNIFICANT om tät marknad staplas igenom (flera superlativ + upprepat "inte bara X utan Y"). *(Blindtest 3: marknadstunga behandlingsblock undergissades genomgående ett steg — facit är HÅRDARE mot marknad än man tror; luta åt SIGNIFICANT vid tvekan på behandlingsprosa.)*
   - importans/hedge/scensättning/**meta-scaffolding** ("det är viktigt att", "en rad olika faktorer", "Att navigera i…", "förstår vi vikten av", **"Här förklarar vi…"/"På denna sida går vi igenom…"**) → **SIGNIFICANT som default — men gradienten nedan avgör.** **Gradient (2 jul, SKÄRPT efter blindtest 4):** räkna fyllnad vs konkretion **över HELA blocket**, inte frasen i sig. EN mild fras + konkretion direkt (mening 1–2) + REN avslutning → **SLIGHT** (acne-rygg ×2, dermapen eftervård-p1); fras + konkretion men även lätt svans → **MODERATE** (microneedling-prep, portomning-lermask); **→ SIGNIFICANT trots konkret mitt vid: staplade fraser i öppningen (2–3: "avgörande… bästa… effektiv"), fluff i BÅDA ändar (skal-öppning + importans-svans), lång + boilerplate-svans, eller hedge-stapel + AI-vokab ("spelar en viktig roll")** (ipl-eftervård, acne-demografi, ipl-rosacea Inför-p2, sebo-orsaken — blindtest 4:s fyra nya missar). **Demografisk skal-öppning räddas ALDRIG av gradienten** (hård 🔴-markör).
4. **LÄNGD = SVAG modifierare, inte stark spak.** "Om oss"/process/historik-prosa graderas milt (stannar SLIGHT/MODERATE även vid 3–5 meningar). *(v3 översköt detta → hade fått oss att skriva om SLIGHT-block i onödan.)* **MEN: lång definition UTAN mekanism → SIGNIFICANT trots konkretion** (belagt 2 sidor: ytliga Vad-content, sebo-definitionen) — konkretion räcker inte på långa block, de behöver kausal mekanism.
5. **EXTREME** om blocket keyword-stuffar (samma term ~×4) + staplar "vilket"-kedjor + är långt — **räkna förekomsterna faktiskt** (behandla-pigment microneedling missades så). Stuffing UTAN vilket-kedjor/längd stannar 🔴 (ipl-rosacea desc-p2: IPL ×6 men facit 🔴).
6. **Kontext:** behandlings-/tillståndsprosa hårdare; "om oss"/historik/process mildare.

**Konfidens:** svag men användbar varningssignal — i test 3 låg nästan alla 2-stegs-missar på konfidens ≤60; **<65 = flagga, hämta facit.** (Test 2 hade dock högkonfidenta missar → aldrig facit-ersättning.)

**För SYFTET (vad ska skrivas om):** ±1 räcker för att skilja "behöver jobb" (🔴/🟠) från "OK" (🔵/🟢). Men vid **SLIGHT↔MODERATE-gränsen: hämta facit hellre än att skriva om** (v3 hade skrivit om 3 SLIGHT-block i onödan = "rör inte det som är OK", §13.O).

---

## 1.4 Sidnivå ≈ MEDEL av block-tiers — ARBETSMODELL MED GRÅZON (korrigerad av modellanalysen 2 jul em)
LYNX ger både **sidnivå-AI COPY** (Pages-listan) och **per-block-facit** (AI Copy-vyn). **Arbetsmodell: sidnivå ≈ VIKTAT MEDEL av alla betygsatta block** (🟢=0, 🔵=1, 🟠=2, 🔴=3, 🟥=4; standardavrundning där exakt ,5 rundar uppåt — 2,09 rundar NED till 🟠). **Facit-ställning 2 jul em: medel 14/17, median 14/17 — på DISJUNKTA missmängder** (modellanalysen, `lynx-examples.php`): medel är **perfekt på de 11 färska kompletta faciten** (micro 1,44🔵 · porto 1,00🔵 · acne-rygg 1,38🔵 · sebo 1,25🔵 · mogen-hy 1,57🟠 · microderm 1,82🟠 · bristningar 1,92🟠 · rhinophyma 2,06🟠 · solskadad 2,09🟠 · pigmentflackar 2,06🟠 · oonskat-har 1,77🟠) men **missar 3 av de 6 äldre** (acne.php 1,75→🟠 men badge 🔵; behandla-pigment 2,3→🟠 men 🔴; hudforandringar 2,08→🟠 men 🔴); median har spegelvänd profil (6/6 äldre, 8/11 nya). **Killer-observation: hudforandringar 2,08→🔴 men solskadad 2,09→🟠** ⇒ badgen är INTE en ren funktion av blockens tier-mix — okänd faktor kvarstår (kandidater: betygsatta men orapporterade FAQ-svar, äldre ~counts, LYNX-versionsskillnad mellan badge- och blockdata; alternativa aggregeringar testade och fällda — se analysen). **Regler:** (1) medel <1,5 → förvänta 🔵; (2) **1,9–2,4 = GRÅZON** — både 🟠 och 🔴 observerade, prediktera inte hårt där; (3) block-fix-räkningar = ESTIMAT, inte garantier; (4) modellen styr FÖRVÄNTAN/prio — arbetsmängden per sida styrs av §7 (fixa alla 🔴/🟠) oavsett; (5) räkna betygsatta FAQ-rader i n när de syns. **Avgörs av (beställd, §9):** färsk analys där sidnivå-badge + KOMPLETT per-block-lista (inkl. FAQ-svar) kommer ur SAMMA scan. **Strukturell förklaring (officiell tooltip 2 jul 15:00):** sidnivå-badgen definieras som *"Estimated level of AI-generated content on this page"* — en HELSIDES-skattning av en kontinuerlig nivå, INTE ett aggregat av block-betygen. Block-tiers är samma underliggande signal diskretiserad per block → medel/median är PROXYS, och två sidor med nästan samma tier-mix kan legitimt hamna på olika badge (t.ex. via textmängds-viktning — WORDS). Det är därför gråzonen finns och inte går att räkna bort.

**Förklarar paradoxen** "SLIGHT-sida med många 🔴-block": sidnivån är MEDLET, inte värsta blocket (acne.php har ~10 🔴 men ännu fler korta 🔵-definitioner + 🟢-omdömen → medel under 1,5 → 🔵).

**Strategisk implikation (styr prio + förväntan) — medel-logik ger RÄKNEBAR väg till badge-byte (⚠️ ESTIMAT, gråzons-förbehållet ovan gäller):**
- **Sänk SIDNIVÅN = sänk MEDLET under gränsen** (🔵-badge kräver medel <1,5; 🟠 <2,5). Varje 🔴→🔵-fix sänker summan med 2 poäng → **räkna per sida hur många block-fixar som krävs**: mogen-hy 1,57 (n=14) = 1 fixat 🔴 räcker (→1,43) · oonskat-har 1,77 (n=13) = 2 · microdermabrasion 1,82 (n=11) = 2 · bristningar 1,92 (n=13) = 3 · rhinophyma 2,06 (n=16) = 5 · solskadad-hy 2,09 (n=11) = 3–4 · pigmentflackar 2,06 (n=18) = 5–6 (störst jobb men KW244 = störst payoff). Siffrorna = MINIMUM för badge-flytt enligt modellen; §7 kräver ändå att ALLA 🔴/🟠 åtgärdas — estimatet styr förväntan, inte scope.
- **Även 🔵-sidor sänker sitt medel av 🔴-fixar** (skillnad mot median-logiken) — men badgen ändras bara vid gränspassage; den synliga vinsten där är SCORE (AI STYLE — §1.2 OMPRÖVAS) + blockkvalitet.
- **Prio-konsekvens:** 🔴/🟠-sidor nära gränsen (mogen-hy!) → billig AI COPY-flagg-vinst; 🔵-sidor → SCORE-vinst. Båda mot "LYNX grönt".
- **Medlet flyttas även genom ADDITION (2 jul, positiv-data):** korta konkreta block (FAQ-svar i husröst, "Från X kr"-rader, maskin-rader, definitioner) är naturliga 🔵/🟢 — att LÄGGA TILL äkta sådana block drar medlet nedåt utan att röra befintlig prosa (varje nytt 🔵 på en 2,0-sida sänker snittet). Belagt: porto/acne-rygg/sebo är 🔵-sidor trots 2–4 🔴-block, för att många korta konkreta block skyddar medlet strukturellt. → **Fas 2 (FAQ-svar) är därmed också en AI COPY-flagg-spak, inte bara AI QUESTIONS.** §13.N-vakt: bara äkta innehåll, aldrig padding.

## 1.5 AI QUESTIONS / AI Overview-modellen (NY 2026-07-02 — hypotes byggd på 5 sidors data; SERP-basen BEKRÄFTAD av officiell tooltip 2 jul 15:00)
**Officiell definition (tooltip):** *"How well this page answers common user questions for the topic based on Google SERP. Levels: Very Poor, Poor, OK, Good, Very Good."* — frågorna kommer alltså från Google SERP (bekräftar modellen nedan); full skala har även Very Poor/Very Good (aldrig sedda hos oss; homepage POOR = näst sämst). LYNX-vyn **"AI Overview Ranking"** per sida listar frågorna sidan borde äga i AI-overviews: **SCORE** = frågans vikt (högst först), **OPTIMIZED** = hur väl sidan besvarar frågan idag (**GOOD** > OK > **POOR**; "–" = ingen status). Sidnivå-kolumnen AIQ aggregerar troligen denna vy. Rådata per sida i **`lynx-questions.php`** (2 jul: micro/porto/acne-rygg/sebo/mogen-hy/homepage/acne-ansikte).

**Hypoteser (H1–H5 — validera mot fler sidor + refresh, §10):**
- **H1 — FAQ-titel räcker inte för GOOD:** micro har frågan "Vad är microneedling bra för?" som egen FAQ-titel (score 25) men får bara OK → GOOD kräver ett RAKT konkret svar, inte att frågan finns som rubrik.
- **H2 — svaret måste matcha frågans FORM:** acne-ryggs alla "hur får man bort"-varianter = GOOD (sidan är en hur-guide med konkreta steg) medan orsaksfrågorna = OK trots orsakssektioner. Hur→steg, varför→mekanism/orsak, kostar→pris med siffra.
- **H3 — grannfrågor besvaras på ÄGARSIDAN:** frågor som "Vilken behandling är bäst mot pigmentfläckar?" (dyker upp på micro) och "Vad är MicroDermabrasion?" tillhör andra sidors silo → kort svar + intern länk, aldrig duplicering (§5).
- **H4 — hemma-frågorna är återkommande topp** (porto "hemma" 13+5, sebo "själv/hemma" 18+4, micro "hemma") → ärligt "ingen hemmakur"-svar + klinikpivot = ytliga-blodkarl-principen (§8.1) som standard-FAQ-vinkel.
- **H5 — YMYL-angränsande frågor kan nå GOOD inom kosmetisk ram:** sebo "Kan seborroisk keratos bli cancer?" = GOOD utan medicinsk rådgivning (godartade-ramen + hänvisning) → §5-ramen hindrar inte GOOD.
- **H7 — frågelistan följer sidans LANDING-KEYWORDS, inte sidans innehåll (NY 2 jul 15:05, homepage = första beviset):** homepage (KW 298, landar brett) får hela sajtens ämnesuniversum i sin lista — portömning, milier-pris, HydraFacial, laser-acneärr osv. — trots att inget av det är startsidans innehåll. Följd: **en bred landningssida ska INTE besvara alla sina listfrågor själv** (ägarens instinkt 2 jul, korrekt per H3/silo §5); frågan ägs av silosidan, startsidan äger bara varumärkes-/förtroendefrågorna ("Är Acnespecialisten bra?" = GOOD ✓) + ev. remiss-familjen (om-oss-gapen). Startsidans POOR-badge är därmed delvis STRUKTURELL. **VERY POOR-data (första någonsin):** alla 5 = pris-/hållbarhetsfrågor ("Vad kostar portömning/milier/hydrafacial?", "Hur länge håller portömning/HydraFacial/infuzion?") → förstärker H2: kostar→siffra-svar saknas; billigaste vinsterna ligger på SILOSIDORNA (FAQ-svar med "Från X kr"), inte på startsidan.
- **H6 — POOR = fråga utan innehåll på sidan, inte dåligt svar (NY 2 jul em, mogen-hy = första POOR-datan):** mogen-hys 3 POOR är alla off-topic för sidans innehåll (magnesium→finnar, koreansk hudvård, förkortningen "HI") → POOR verkar betyda "AI Overview kopplar frågan till sidan men sidan saknar svar helt". Sid-badgen tål enstaka POOR: mogen-hy = OK trots 3 POOR + 0 GOOD (även första sidan utan någon GOOD); homepage är enda sidan med badge POOR. **Åtgärda INTE off-topic-POOR med innehåll som bryter silon (§5/H3)** — magnesium/koreaner hör inte hemma på mogen-hy; däremot är topp-frågan "Vad betyder hy?" (score 24, bara OK) ett äkta svars-gap i frågans form (H2).

**Operativt (koppla in i §7 + Fas 2):** vid rewrite/FAQ-arbete: (1) hämta sidans AI Overview Ranking; (2) topp-SCORE-frågor utan GOOD → ge ett rakt svar i frågans form (FAQ-svar i husröst — kan nå 🟢 per §1.1 nyckel 5 → **trippelvinst: AI QUESTIONS + medel §1.4 + AI STYLE**); (3) grannfrågor → länk till ägarsidan; (4) logga FÖRE-status (GOOD/OK/–) per fråga för mätloopen.

## 2. Formeln: **Krok → Mekanism → Skylt**
1. **Krok** — öppna med en *konkret komponent*, inte abstrakt skala. Första substantivet ska vara något läsaren kan se (papler, gropar, fläckar, "bacne"). Aldrig "Det finns flera…/Det är viktigt att…/När det kommer till…/påverkar miljontals…". **Gäller även varje list-punkt:** led med mekanismen/det konkreta, inte "[rubrik] kan spela en roll vid…".
   - Ofta **fusera Krok + Mekanism** i mening ett (orsaken bunden på komponenten).
2. **Mekanism** — gå igenom orsaken steg för steg med kausala bindeord (*vilket leder till, på grund av, eftersom, vilket i sin tur, detta resulterar i*). Lägg minst **en taktil verb/bild eller inline-parentes-förklaring per begrepp** (t.ex. *kollagen (ett protein som håller huden elastisk)*, *"äter upp"*, *som en månkrater*). Täthet = bunden prosa, **aldrig** fet-etikett-punktlistor.
3. **Skylt** — avsluta intro med en konkret hänvisning till innehållet under, **varierad** mellan systerblock (aldrig samma "Här går vi igenom…" två gånger). Fråge-scaffolden (Vad/Varför/Vem/Var) kan själv vara skylten.

**Empati-lager (för tillståndssidor):** acknowledge-then-reassure + av-skamning ("oavsett ålder/kön") + mjuk genetik-hedge ("om… finns det en risk"). Mekanism + empati = tillståndssidans register.

**Puls:** bryt långa kausala meningar med en kort fristående sats (5–8 ord) minst en gång per sektion.

---

## 3. Checklista (kör varje block)
- [ ] Konkret komponent-öppning, inte tom skala/scensättning?
- [ ] Minst en mekanism bunden med kausalt bindeord?
- [ ] Minst en inline-gloss eller taktil bild per begrepp?
- [ ] Bunden prosa, **inte** `<ul><li><strong>Etikett:</strong>…`-inventering?
- [ ] **Varje distinkt punkt kvar?** Lista→prosa får inte slå ihop eller tappa poänger — räkna punkterna före/efter (tecken, zoner, orsaker). De-fluffa orden, inte poängerna (§13.D).
- [ ] Puls: en kort + en lång mening; inga 3 i rad i samma längd; ingen staccato?
- [ ] **Naturlig komma-rytm, inte AI-mönster.** Standard: **stryk onödiga komman rakt av — även enstaka.** Ett komma före "och"/"så att" som binder två satser kan nästan alltid bort utan att något tappas. **Reformulera** (inte bara stryk) när satsen kräver det: en löst tillagd **"X, vilket Y"**-resultatsats delas hellre i två meningar — en av de tydligaste AI-tells; men "vilket" *mitt i* en tät kausalkedja är OK (§2/§4). Undvik även staplade korrelativ-komman och inskjutna **dubbel-komma-bisatser** ("X, en aside, Y"). Aldrig staccato; äkta "och"-listor/uppräkningar orörda.
- [ ] **Aktivt och direkt** ("undvik solning två veckor innan"), inte passivt/hedgat ("det rekommenderas att du undviker solning")?
- [ ] **Varierad öppning mot systerblock** — inte varje block börjar "Akne i ansiktet…" (upprepad öppning = AI-parallellism)?
- [ ] **Ingen poäng upprepad mellan block** (samma orsak, t.ex. hormonell, sägs en gång — inte i tre block)?
- [ ] Inga staplade "kan"; ingen "[antal] olika [X]"-padding?
- [ ] Minst en verifierbar siffra/tidsram istället för superlativ? (pris med "Från")
- [ ] **Inga em-streck**; ingen svensk AI-vokabulär (se §5)?
- [ ] Kosmetiskt: inga medicinska/diagnos-påståenden, ingen hudcancer, inga aktiva ingredienser/organismer?
- [ ] Klinik-"vi", inga hudterapeutnamn?
- [ ] Stannar på sidans eget ämne; grannämnen löses med **länk**?
- [ ] **Sökorden bevarade** (se §6)?
- [ ] Skylt varierad mot systerblock; CTA är en "resa", inte "boka tid"?

---

## 4. Husrösten (grundad i våra egna SLIGHT-sidor)
**Sammanfattning:** Våra bästa sidor låter som en erfaren hudterapeut som förklarar akne för *en* orolig person över ett bord — inte ett varumärke som sänder till en marknad. Mening ett namnger något konkret och binder orsaken direkt. Mekanismen går steg för steg. Varje fackord får en vardaglig gloss på en gång. Rytmen andas (långa meningar bryts av korta). Värme via acknowledge-then-reassure. Alltid "vi"/"du", aldrig namngiven terapeut. Siffror bär trovärdigheten så texten slipper skryta.

### Signaturdrag (med riktiga exempel)
- **Fusera Krok+Mekanism i mening ett:** *"Akne består av bland annat papler och pustler, som är en ärftlig och hormonell hudsjukdom som uppstår när talgproduktionen i hudens porer ökar."* (acne.php:65)
- **Alias som apposition mellan komman:** *"Acneärr, även kallat postakne, är märken eller förändringar som blir kvar på huden efter att inflammationer från akne har läkt."* (acnearr.php:54)
- **Kausal payoff med pekare:** *"Kroppen försvarar sig då med en inflammation, och det är just detta som syns på huden i form av akne."* (acne.php:73)
- **Visceralt, citat-markerat verb:** *"den aggressiva fettsyran från finnarna som fräter ner och \"äter upp\" den omkringliggande huden."* (acnearr.php:63)
- **Inline-gloss av fackord:** *"kollagen (ett protein som hjälper till att hålla huden jämn och elastisk)"* (acnearr.php:64)
- **Sinnlig analogi istället för adjektiv:** *"ett oregelbundet utseende som en månkrater"* (acnearr.php:161)
- **Puls (lång → kort):** *"Ryggen är särskilt utsatt på grund av sin höga koncentration av talgkörtlar och stora porer. Detta gör den mer benägen att utveckla akne."* (acne-rygg.php:72)
- **Acknowledge-then-reassure:** *"Akne på ryggen, även kallad \"bacne,\" kan vara både frustrerande och smärtsamt."* (acne-rygg.php:57)
- **Baslinje-sen-men:** *"Huden behöver en viss mängd talg för att hålla sig mjuk och smidig, men vid överproduktion…"* (acne.php:65)
- **Av-skamning:** *"det spelar ingen roll om det är en tjej eller kille, kvinna eller man, alla kan drabbas."* (acne-brost.php:309)
- **"vilket i sin tur"-kedja:** *"…en ökning av mängden talg (olja) …, vilket i sin tur kan täppa till porerna och skapa en miljö där bakterier trivs."* (acne-brost.php:72)
- **Lär det okända via det kända (stödjer siloing):** *"Precis som ansiktsakne uppstår ryggakne när hårsäckarna täpps till…"* (acne-rygg.php:57)
- **Siffra bunden till handling, aldrig skryt:** *"På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla acneärr."* (acnearr.php:294)
- **Mjuk genetik-hedge:** *"Om dina föräldrar eller nära släktingar har haft problem med akne, finns det en risk att du också kan drabbas."* (acne-brost.php:74)

### Öppnings-bank (mallar)
- Komponent + bunden orsak: *"[Tillstånd] består av bland annat [synliga komponenter], som är en ärftlig och hormonell hudsjukdom som uppstår när [orsak]."*
- Alias-i-komman: *"[Term], även kallat [vardagsnamn], är [vad det är] som [uppstår/blir kvar] efter att [process]."*
- Känsla-först + smeknamn: *"[Tillstånd], även kallad \"[smeknamn],\" kan vara både frustrerande och [obehag]. Precis som [bekant variant] uppstår [tillståndet] när [mekanism]."*
- Baslinje-sen-men: *"Huden behöver [normal funktion] för att [nytta], men vid [störning] [problemet uppstår]."*
- Acknowledge-then-reassure: *"Oavsett ålder kan det vara en källa till obehag. Men med rätt kunskap och behandling går det att hantera och minska [tillståndet]."*

### CTA-stil
Aldrig bara "boka tid". Forma CTA:n som en resa med en namngiven vinst, och variera varje gång. Återkommande form = inbjudan + kostnadsfri konsultation + namngiven destination:
- *"Kontakta oss för en kostnadsfri konsultation och börja din resa mot en ärrfri och slät hud idag!"* (acnearr.php:86)
- *"Din resa med oss börjar med en kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall…"* (acnearr.php:286)
- Mitt-på-sidan-skyltar = konkreta vi-handlingar: *"Vi tar bilder och rekommenderar en skräddarsydd behandlingsplan…"* (acne-brost.php:137)

### Härma INTE
- Inte tunnheten/längden i de enkla HUMAN-sidorna (acne-myter, fragor-svar, ordlista, hudguide) — ta bara deras *ton*.
- Inte FAQ:ns ett-ords-verdikt ("Nej," / "Absolut,") i brödtext (blir staccato).
- Inte myter-sidans tvärsäkra "Detta är helt fel." eller refräng-trick i mekanism-prosa.
- Inte startsidans varumärkes-superlativ ("det självklara valet") på tillståndssidor — låna bara dess verifierbara siffror och vi-löften.

### 4.1 Utökad husröst — från huvudsidorna (filtrerat mot §1.1-modellen)
Plockat från acne/rosacea/microneedling/alma-hybrid (sidor ägaren gillar). OBS: sidorna är inte 100 % — nedan är bara det som *också* klarar modellen; skip-listan är 🔴-mönster som ändå förekommer där.

**Nya keepers:**
- **Empati förankrad i en KONKRET situation** (inte generisk "du är inte ensam"): *"Vi förstår att det kan vara frustrerande när akne plötsligt dyker upp, särskilt inför ett bröllop eller en skolavslutning."*
- **Reassurance-beat** (kort hopp-mening som bryter rytmen): *"Det viktiga att komma ihåg är att huden kan behandlas."*
- **Ärlighet före hype**: *"Det finns ingen quickfix när det gäller akne."*
- **Ärlig brasklapp + pivot**: *"Den exakta orsaken är fortfarande något forskare försöker förstå, men det är tydligt att genetiken spelar en central roll."*
- **Verifierbar siffra istället för "många"**: *"drabbar cirka 12–22 % av kvinnor och 3 % av män"* (endast om siffran stämmer).
- **Nytta = liv/frihet, inte hud-mått**: *"så att du slipper anpassa ditt liv efter din hy."*
- **"Om det här är du"-trigger**: *"Om din rosacea hindrar dig från att leva fullt ut, är det dags att…"*
- **Biverkning som bevis på effekt**: *"En viss rodnad är normalt och visar att hudens läkningsprocess har börjat."*
- **Eftervård med namngiven anledning (då/för att) + tidsfönster**: *"Undvik sol veckorna före, då det påverkar resultatet", "sminka inte de första 24 timmarna".*
- **"För dig som" + vardagsmoment**: *"för dig som vill ha en snabb förbättring, klart under en lunchrast."*
- **Kombo med inline-"som"-gloss**: *"kombinerar ablativ laser, som bränner hudytan, med icke-ablativ laser, som verkar under huden."*
- **Gloss: vardagsord först, fackterm i parentes**: *"olja (sebum)"*; vardagsalias: *"rhinophyma (potatisnäsa)", "finnar som vi ofta säger i dagligt tal".*
- **Levande verb**: *"får aknen att blomma upp", "fettsyran fortsätter fräta på huden".*

**Skippa (🔴-mönster — även om det står på en gillad sida):**
- "…är en **avancerad/effektiv/revolutionerande** behandlingsmetod" (marknadsadjektiv).
- "…är **vanligast bland [grupp], oavsett kön och hudtyp**" (demografisk skal-öppning).
- "**expertpartner i kampen mot…**", "uppnå en klarare och friskare hud" (generisk marknad).
- Platt "Nej"-myt-bust hör hemma i **FAQ**, inte brödtext (staccato).
- *(OBS: "undvika kraftfulla läkemedel" är INTE skip — det är godkänt befintligt innehåll, se §5.)*

---

## 5. Låsta ramar (gäller alla sidor)
- **Kosmetiskt** — **lägg inte till** nya medicinska/diagnos-påståenden, hudcancer eller "sök läkare/medicinsk vård" (LYNX YMYL-gap). **MEN: befintligt sidinnehåll är godkänt** — strippa inte godkänd formulering (t.ex. "undvika kraftfulla läkemedel med biverkningar" = OK kosmetisk-spår-positionering). Befintliga sidor är referensen för *vad vi får säga* (innehåll + tillåtna påståenden). Hänvisa till **vår klinik/hudterapeut** är OK.
- **Organism-namn & ingredienser = factual OK** (finns på godkända sidor: "Cutibacterium acnes", AHA/BHA/salicylsyra på kemisk-peeling). På *tillståndssidor* (acne) pivotera dock inte till "använd ingrediens X" som lösningen — ramen är ärftlig/hormonell + klinikbehandling. Strippa aldrig godkänt befintligt.
- **Kost minimal**, akne ramas som ärftlig/hormonell.
- **Inga em-streck** (uppfattas som ett AI-tell). Omformulera.
- Undvik svensk AI-vokabulär & marknads-fluff:
  - Connective-filler: *"spelar en avgörande roll", "i takt med att", "när det kommer till", "ta del av", "i en värld där", "maximera/optimera", "i dagens samhälle"*.
  - Marknadsadjektiv: *"avancerad", "framstående", "effektiv lösning", "optimal", "ledande", "speciellt utformad", "skräddarsydd", "revolutionerande", "toppmodern"*.
  - Sammanfattnings-/avslutnings-tics: *"Sammanfattningsvis", "Slutligen", "I korthet", "Avslutningsvis", "En sak är säker"*.
  - Antitesen *"inte bara X utan (också) Y"* — max 1 per sida.
  - Individualiserings-fluff: *"anpassad efter just dina behov", "perfekt anpassad för dina unika hudvårdsbehov"*.
- **Klinik-"vi"**, aldrig hudterapeutens namn. **"Du"-tilltal.**
- **Siloing:** grannämne (t.ex. rosacea) → kort omnämnande + **intern länk** till den sidan, aldrig dubblerat innehåll.
- **Huvud- vs bonussidor:** huvudtermen bor på huvudsidan (t.ex. "akne"→acne.php, "pigmentfläckar"→pigmentflackar.php). Bonussidor håller sig till sin long-tail och tävlar inte om huvudtermen.
- **Siffror** bara om verifierbara på sidan eller internt bekräftade; pris med "Från".
- **Reglerna är heuristiker, inte stela lagar.** Använd omdöme — befintligt godkänt innehåll och en genuint bättre formulering trumfar en regel som inte tillför i sammanhanget. Vi rutar inte in oss.

---

## 6. ⚠️ SEO-skydd — bryt inte sökord/ranking
Sidorna rankar redan på sökord. Omskrivningen får höja kvaliteten **utan att ta bort signalerna som funkar**:
- **Bevara primärt sökord + viktiga varianter** i `$seo_title`, H1, H2:er och brödtext. Skriv aldrig bort sökordet ur sidan (t.ex. "akne i ansiktet" måste finnas kvar). Hur frasen interpunkteras (komma efter eller ej) är en **rytmfråga (§3), inte SEO** — ett komma bryter inte Googles frasmatchning. Behåll bara frasen i texten.
- **Rör `$seo_title` / `$seo_description` försiktigt** — om du ändrar, behåll sökordet och förbättra bara. **`$seo_keywords` är en lagring** av sidans sökord (Google ignorerar taggen) — ta aldrig bort termer där, även dubbletter får stå.
- **Ändra ALDRIG filnamn/URL** (dödar ranking + kräver redirect).
- **Radera inte hela sektioner** som bär rankande innehåll — komprimera prosan, behåll ämnestäckningen.
- **Behåll interna länkar, priser, boknings-URL:er och CTA-länkar.** Lägg till nya länkar (t.ex. rosacea) utan att ta bort befintliga.
- **Sökords-/fras-koll (mekanisk, obligatorisk).** Vissa meningar är skrivna *just* för att ranka en fras (t.ex. "akne på hakan", "akne på kinderna", per-zon-/per-orsak-rubriker). Innan du skriver om ett block: notera fraserna i det (särskilt de som matchar `$seo_keywords`). Efter ändringen: grep:a sidan och bekräfta att varje fras finns kvar — eller flyttats medvetet (siloing). Tappa aldrig en målfras av misstag.
- **Bara innehåll i sidans `.php`** — inga mall-/widget-ändringar (se §8 om widgets).
- **En sida i taget på `staging`**, granska `git diff` innan merge.
- **Verifiera efteråt:** LYNX-refresh + håll koll på ranking; logga i §11.

---

## 7. Arbetsprocess per sida
0. **Claima sidan i §12** (§0.1 — kontrollera först att du är ensam: `git status` + §12 + senaste §11/commits).
1. **Spara LYNX-baseline** för sidan i §11 (AI COPY, SCORE, GAPS, AI QUESTIONS, PAGE TYPE, P. PRICE, KW, ev. RANK) — innan något ändras. *(Obs §1.2-omprövningen: SCORE 0 = trolig trasig analys → be ägaren köra om hellre än att logga 0 som baseline.)*
2. **Ägaren klistrar in LYNX-facit → SPARA rådatan FÖRST** i rätt kolumnfil (filkarta i `lynx-data.php`: per-block → lynx-examples · frågor → lynx-questions · SCORE → lynx-score · gaps → lynx-gaps · Pages-rader → lynx-data; diffa mot förra scan). Identifiera sen primärt sökord + intent (bonus → long-tail). Agera aldrig på facit utan att spara det först (§0 Facit-flöde). **Finns facit REDAN sparat (t.ex. Fas 3b-sidorna: facit + frågelistor + gap-texter ligger i lynx-examples/lynx-data sedan 2 jul) — verifiera att det är komplett och gå direkt vidare; be inte om det igen.**
3. Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**, se över 🔵/🟢 med lätt hand + bedöm sidan som HELHET (§13.D) — enligt §2–§4; kör §3-checklistan + §6 SEO-skydd.
4. Lös gap-punkter inom ramarna (grannämne → länk; ingen medicin/cancer) — **fattade beslut per sida står i §8.1; följ dem.**
4a. **§1.5-koll (AI Overview-frågorna):** notera sidans frågelista + FÖRE-status (GOOD/OK/–) i §11; förbättra BEFINTLIGA FAQ-/textsvar i husröst så topp-SCORE-frågor besvaras rakt i frågans form (hur→steg, varför→mekanism, kostar→siffra); grannfrågor → länk till ägarsidan. NYA frågor/svar hör till Fas 2, inte rewriten.
4b. **Adversariell verifiering (standard vid autonomt arbete; frivillig när ägaren granskar varje steg):** innan commit, kör färska agenter utan kontext mot omskrivningen — (i) §1.3-predikt per omskrivet block (mål: 🔵-band; **1 bedömare räcker** — blindtest 3 visade att 3 oberoende bedömare svarar nästan identiskt), (ii) diff-granskning av substans (punkt-count före/efter, tappade poänger/målfraser, §13.D/§6), (iii) en helhetskritiker (flöde, dubbletter över block, sid-kontext). Åtgärda äkta fynd; motivera skippade i §11. *(Etablerat på ipl-rosacea 1 jul: 15 agenter → 4 äkta fynd fixade; standardiserat + bantat 2 jul.)*
5. Logga i §11 (baseline + vad/varför + **prediktion per omskrivning, §10 steg 1**). Följ Definition of Done (§13.E) — inkl. att tömma §12-claimen när allt är klart.
6. **Push `staging` → TESTA att sidan gick upp:** hämta staging-URL:en (`https://www.acnespecialisten-staging.minoch.com/<sida>`) och bekräfta **HTTP 200 + renderad HTML** (inte blankt/500) samt att sökord/claims syns i svaret. Fångar PHP-strängfel (§13.C). En sida är inte klar förrän den verifierat laddar. **OBS: staging-deploy har ~minuters lag** — poll:a tills *din* ändring faktiskt syns i svaret (grep efter en ny formulering), inte bara tills 200 kommer.
7. Promota till prod (§13.A) → vänta på LYNX-refresh → utvärdera (§10).

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**SIGNIFICANT — alla ✅ KLARA (staging/main):**
- `acne-ansikte.php` — ✅ KLAR (omskriven hela sidan → main, LIVE; se §9/§11/§11.1)
- `ytliga-blodkarl.php` — ✅ KLAR (omskriven steg för steg → main, LIVE 1 jul; se §9/§11/§11.1)
- `behandla-pigmentflackar.php` — ✅ KLAR (bonus, KW16; de-AI:ad → main, LIVE 1 jul)
- `hudproblem/hudforandringar/index.php` — ✅ KLAR (hub; de-AI:ad → main, LIVE 1 jul; H1 i sep. commit; debug-rad-fix d3ce9162 väntar main-push)

**MODERATE-vågen:** ✅ KLARA: `om-oss.php`, `hudbehandlingar/ipl/`, `ipl-rosacea.php` (KW20, P.PRICE HIGHEST, SCORE 39 — facit-driven + workflow-verifierad). **KVAR (7) — FACIT KOMPLETT för alla 7 (2 jul em):** `pigmentflackar.php` **(FACIT ✅ 2 jul 14:22: 8🔴/4🟠/5🔵/1🟢, KW244 — typo "AcneSpecialistem" live)**, `hudproblem/oonskat-har/` **(FACIT ✅ 2 jul 14:22: 5🔴/2🟠/4🔵/2🟢 — 4 live-språkfel)**, `rhinophyma-rosacea.php` **(FACIT ✅ 2 jul em: 8🔴/2🟠/5🔵/1🟢 + 2 live-grammatikfel)**, `microdermabrasion.php` **(FACIT ✅ 2 jul em: 5🔴/1🟠/3🔵/2🟢)**, `mogen-hy.php` **(FACIT ✅ KOMPLETT 2 jul: 5🔴/1🟠/5🔵/3🟢)**, `solskadad-hy.php` **(FACIT ✅ 2 jul em: 6🔴/1🟠/3🔵/1🟢 + 1 live-grammatikfel)**, `hudproblem/bristningar/` **(FACIT ✅ 2 jul em: 6🔴/1🟠/5🔵/1🟢)**. Alla facit i `lynx-examples.php`. (Prioordning: §9.1.)

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

**Fas 3 — MODERATE-vågen** (efter schema)
- [~] MODERATE-vågen: ✅ om-oss + hudbehandlingar/ipl + ipl-rosacea klara; **7 kvar** (§8). Körs facit-drivet löpande när per-block-facit finns — **ej grindat efter Fas 2-schemat** (fristående spår; Fas 3b-kön går först). Prioordning: **§9.1**.

**Bevaka — trådar öppnade från omkringliggande skärmbildsdata (§0-principen, 2 jul)**
- [ ] **GAPS-rensningen 2 jul:** ytliga-blodkarl 2/2→0/0, ipl-rosacea 2/1→0/0, homepage 3/2→0/0 — utan att sidorna refreshats (tiers/SCORE står stilla). Verifiera vid nästa scan: äkta rensning (gap-texterna lösta/borttagna av LYNX) eller scan-artefakt? Påverkar §8.1-gapbesluten för de sidorna. **Tooltip-insikt 2 jul 15:00: GAPS är KONKURRENT-relativa** ("compared to top-ranking competitors") → rensning/nya gaps kan bero på ändrad konkurrentbild, inte våra åtgärder — attribuera aldrig GAPS-förändringar till oss utan att läsa gap-texterna.
- [ ] **microdermabrasion AIQ GOOD→OK** (försämrad 30 jun→2 jul utan våra ändringar) — kolla AI QUESTIONS-detaljen när facit hämtas för sidan (§1.5-modellen: vilken fråga tappade GOOD?).
- [x] **§1.4 medel-omräkning — GJORD (modellanalysen 2 jul em):** medel FÖLL på 3 av 6 äldre (acne.php 1,75→🟠 vs 🔵 · behandla-pigment 2,3→🟠 vs 🔴 · hudforandringar 2,08→🟠 vs 🔴) → §1.4 nedgraderad till ARBETSMODELL med gråzon 1,9–2,4 (medel 14/17 = median 14/17, disjunkta missar). Full tabell + fällda alternativ-modeller i lynx-examples.
- [ ] **BESTÄLLNING (avgör §1.4-frågan):** be ägaren köra FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan — testar om orapporterade FAQ-svar/versionsskillnad förklarar konflikten. Kombinera med §1.2-beställningen (2–3 färska SCORE-breakdowns varav minst en med AI STYLE beräknad).
- [x] **Homepage-raden i AICOPY-vyn — LÖST 2 jul 14:20 (zoom-dump + ägarbesked):** homepage `/` FINNS i LYNX (VAL 41 · SCORE 28 · GAPS 0/0 · **AI COPY SLIGHT** · AIQ POOR · KW 298); `/behandlingar.php` = **redirect till /hudbehandlingar/** (KW 0 — ingen egen copy att åtgärda). Rad-data i lynx-data. Följd: homepage är INTE AI COPY-flaggad → dess uppsida är SCORE + AIQ (enda POOR-sidan), inte flagg-vinst.
- [ ] **`/varumarken/powerlite-photonova/`:** finns i LYNX/live men INTE i repot — utred (borttagen sida som lever kvar på live? redirect behövs?).
- [ ] **`/varumarken/hifu/`:** nyligen tillagd sida som ännu inte syns i LYNX — bevaka att den indexeras.
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation) — be om den när om-oss-gapsen ska åtgärdas.

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**
- [ ] `microneedling.php` (KW70, SCORE 50 färsk; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1) + typo "markanden". **PÅBÖRJAD 2 jul em men ÅTERRULLAD på ägarbesked ("statistik först, den gör vi sen") — `git checkout` kört, inga ändringar kvar; färdig block-plan i §11-posten (återanvänd vid omstart).**
- [ ] `portomning.php` (KW28, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51, SCORE 0 = trasig analys, be om omkörning; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).
- [ ] `mogen-hy.php` (KW9, MODERATE-vågen §8; facit 22 apr KOMPLETT mottaget 2 jul: 5🔴/1🟠/5🔵/3🟢 + AI Overview-lista 27 frågor i lynx-data) — de-AI + 2 grammatikfel + 2 typos live; "Vad betyder hy?"-gapet (§1.5 H2/H6); sidan = §1.4:s första median-miss (se lynx-examples).

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
2. `pigmentflackar.php` — KW244, 🟠 MODERATE **(FACIT ✅ 2 jul 14:22 — medel 2,06, 5–6 🔴→🔵-fixar till 🔵-badge)**. Största MODERATE; pigment-huvudsida (silo mot behandla-pigmentflackar).
3. `rosacea.php` — KW221, 🔵 SLIGHT, SCORE –. Rosacea-huvudsida.
4. `perioral-dermatit.php` — KW194, 🔵, SCORE –.

**Tier 2 — hög-KW SLIGHT, låg/0 SCORE + gaps (enskilda block kan vara 🔴):**
blodprickar (175, SCORE17) · milier (173, 37) · seborre (168, –) · pormaskar (128, 32) · acnearr (127, **SCORE0** = trolig trasig analys §1.2, +gaps) · **acne.php (116 — FACIT ✅ MOTTAGEN 1 jul: ~10 🔴-block, redo; husröst-REFERENS → LÄMNA dess 🔵/🟢-block)** · **seborroisk-keratos (110, 74 färsk — FACIT ✅ 2 jul, i Fas 3b-kön)** · hudflikar (105, 28) · finnar (101, silo).

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · **microneedling (FACIT ✅ 2 jul — Fas 3b-kön)** · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · **acne-rygg (FACIT ✅ 2 jul — Fas 3b-kön; SCORE 0 = trasig analys)** · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠, P.PRICE HIGHEST)~~ ✅ KLAR → staging · **oonskat-har (🟠)** · **mogen-hy (🟠, FACIT ✅ 2 jul — Fas 3b-kön)** · **microdermabrasion (🟠)**.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

**Scope-beslut (ägarbesked 2 jul em):** (1) **ALLA sidor som finns i LYNX ska gås igenom** — vissa redan gjorda, resten framöver; komplett sidregister (i LYNX / saknas i LYNX / i LYNX men ej i repot) i `lynx-data.php` under "Snapshot 2026-07-02 EM". (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS** ur genomgången. (3) Sidor som saknas i LYNX (homepage-raden?, varumarken/hifu/, avbokningspolicy, karriar, ev. ansiktsbehandling/rosacea/) = håll utkik vid framtida scans (bevakningstrådar §9).

*(Full 5-tier-lista med alla ~100 sidor + noter genererad 2026-07-01; härledbar ur `lynx-data.php`.)*

## 10. Justeringsloop & prediktiv mät-loop (efter LYNX-refresh)
**Mät-loopen (så modellen i §1.1/§1.2 förbättras, inte bara sidorna).** Data kommer på delay (LYNX skannar live, refreshar långsamt) — därför **prediktera före, mät efter**:
1. **Före** (vid omskrivning): logga i §11 vilka komponenter vi tror rör sig och varför (t.ex. "AI STYLE ↑↑ de-AI; Evidence ↑ 30år+Från-pris+mekanismtal; Depth = hållen; sökord = hållna").
2. **Efter refresh:** logga faktisk delta per komponent (FÖRE→EFTER ur lynx-data.php).
3. **Jämför:** stämde prediktionen? Var missade modellen? Notera prediktionsfelet.
4. **Förfina** §1.1/§1.2 utifrån felet (modellen är hypotes — vi rutar inte in oss, §0/§5).
5. **Backporta:** när modellen blir bättre → lista vad som nu bör fixas på **redan gjorda/gröna sidor** (samma spak som visat sig funka). Lägg i §9 Löpande.

**Per-signal-respons:**
- **Fortf. SIGNIFICANT/MODERATE?** → nästa lager block (extended "Läs mer", MODERATE-block), mer mekanism/gloss/evidens.
- **AI QUESTIONS ej GOOD?** → FAQ-innehåll + FAQPage-schema (§9 Fas 2).
- **PAGE TYPE/P. PRICE "–"?** → generiskt fallback-Product utan Offer; sätt `$rich_product` per sida.
- **SLIGHT + SCORE nära/över 39?** → vi bröt taket; dokumentera VAD som gjorde det och backporta (§10 steg 5).
- Uppdatera §9 + denna fil + lynx-data.php när vi lär oss vad som flyttar nålen.

---

## 11. Arbetslogg (vad vi gjort + varför)
Korrelera mot LYNX-refresh. Senaste först. Spara alltid **LYNX-baseline** (FÖRE-värden) per sida så vi kan utvärdera vad ändringen gjorde. Logga även en **prediktion** per omskrivning (vilka SCORE-komponenter vi tror rör sig + varför, §10 steg 1) så vi kan mäta modellens träffsäkerhet när EFTER-värden kommer. All rå LYNX-data sparas i KOLUMNFILERNA (filkarta överst i **`includes/lynx-data.php`**) — vår manuella "export" eftersom LYNX saknar exportfunktion. Uppdatera vid varje refresh.

**Arkiv-policy (beslutad 2026-07-02):** när en §11.1-rad är MÄTT och stängd (EFTER loggat, modellen förfinad, backport listad) flyttas radens §11-poster till **`includes/lynx-log-arkiv.php`** — kvar här blir en enrads-referens. Arkivera ALDRIG före mätning (FÖRE-baseline + prediktioner behövs i mät-loopen). Syfte: playbooken läses top-to-bottom varje session och ska hållas läsbar.

### LYNX-baseline — de 4 SIGNIFICANT-sidorna (2026-06-30, före ändring)
| Sida | VALUE | PAGE TYPE | SCORE | GAPS ⚡/💡 | AI COPY | AI QUESTIONS | P. PRICE | KW |
|------|-------|-----------|-------|-----------|---------|--------------|----------|----|
| acne-ansikte.php | 32 | – | – | –/– | SIGNIFICANT | OK | – | 57 |
| ytliga-blodkarl.php | 42 | – | 22 | 2/2 | SIGNIFICANT | OK | – | 172 |
| behandla-pigmentflackar.php | 14 | – | – | –/– | SIGNIFICANT | GOOD | – | 16 |
| hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | SIGNIFICANT | OK | – | 8 |

### 2026-07-02 em #6 — Filstruktur per kolumn (ägar-beställd) + acne-ansikte-frågelistan + homepage-AIQ-beslutet
**Filrefaktor (ägaren: "en fil för varje kolumn så att hela projektet inte blir för stort och att vi kan läsa in de sektioner som behövs"):** skapade **`lynx-questions.php`** (AIQ-frågelistor, 7 sidor), **`lynx-score.php`** (alla SCORE-nedbrytningar, färska + gamla skalan), **`lynx-gaps.php`** (gap-texter; besluten kvar i §8.1); `lynx-data.php` = NAV-FIL med filkarta + Pages-inventeringar/sidregister/kolumn-definitioner/beställningssedel; `lynx-examples.php` = AI COPY-kolumnens fil (oförändrat innehåll). Flyttade sektioner ersatta med pekare; operativa referenser i playbooken synkade (§0, facit-flödet, §7.2, §1.2, §1.5, §11-intro, LÄGE). Äldre §11-poster pekar på gamla platser = historik, filkartan reder ut.
**acne-ansikte AI Overview-lista mottagen (15:12, 27+ frågor → lynx-questions):** ON-TOPIC i kontrast till homepage (H7-kontrastpar!) — zon-frågorna ÄR sidans ämne. Topp-gap: **käklinje-klustret ~56 samlade poäng på POOR/–** trots att sidan har käklinje-sektion → H2 (svaret finns inte i varför-/vad-betyder-form). Fas 2-kandidat #1 (§9) — men FRYST tills mätningen är klar (§13.G). Magnesium-frågan POOR = samma off-topic som mogen-hy (H6 ✓ andra belägget).
**Homepage-AIQ-beslut (ägaren + H7 eniga):** startsidan ska INTE besvara silo-frågorna i sin lista — den äger varumärkes-/förtroendefrågorna + ev. remiss-familjen; silosidorna äger resten. VERY POOR-frågorna (pris/hållbarhet) = billiga FAQ-vinster på respektive SILOSIDA i Fas 2.

### 2026-07-02 em #5 — Officiella kolumn-definitioner mottagna (11 tooltips) → gissningar ersatta
**Inkommet (11 dumpar 15:00, save-first → tabell i lynx-data):** LYNX egna tooltip-texter för VALUE, PAGE TYPE, GAPS, AI COPY, AI QUESTIONS, P.PRICE, EG SCORE, KW, WORDS, CLICKS, STATUS (SCORE-tooltippen saknades — beställd). **Modellkonsekvenser:** (1) **AI COPY sidnivå = "Estimated level of AI-generated content on this page"** — helsides-skattning av kontinuerlig nivå, EJ definierad som aggregat av block-betyg → §1.4:s medel/median = proxys; gråzonen är strukturell, inte databrist (inskrivet i §1.4). (2) **AI QUESTIONS "based on Google SERP"** — §1.5-modellens SERP-bas BEKRÄFTAD; skalan har även Very Poor/Very Good. (3) **GAPS = "compared to top-ranking competitors"** — konkurrent-relativa → GAPS-förändringar får inte attribueras till oss utan gap-texterna (bevakningstråden uppdaterad). (4) **P.PRICE = uppfattat prisläge vs marknaden** ("Lower = cheaper") → ipl-rosacea HIGHEST = uppfattas dyrast i segmentet (ägar-diskussion; §13.I uppdaterad). (5) **EG SCORE** = ny engagemangs-kolumn (visits/time/interactions), hittills tom — bevaka. (6) VALUE = internt relativt; KW = keywords med sidan som landing page; CLICKS = GSC-klick.

### 2026-07-02 em #4 — MODELLANALYS (ägar-beställd före sidarbetet): §1.4 korrigerad, §1.2 stärkt, §1.3 out-of-sample-validerad
**Uppdrag:** "kör en analys av våra modeller och se om den nya informationen lärt oss något." Full analys i `lynx-examples.php` (sektion "MODELLANALYS 2026-07-02"). Fyra resultat:
**(A) §1.4 KORRIGERAD — dagens "medel 11/11" höll inte:** omräkningen av de 6 äldre sidorna (öppen §9-TODO, nu gjord) fällde medel på 3 (acne.php 1,75→pred 🟠, badge 🔵 · behandla-pigment 2,3→🟠, badge 🔴 · hudforandringar 2,08→🟠, badge 🔴). Ställning: **medel 14/17 = median 14/17 på DISJUNKTA missmängder** — 1 jul-sessionen (förkastade snittet) och 2 jul-sessionen (uppgraderade till snittet) hade båda rätt på sin data och generaliserade för snabbt. **Killer: hudforandringar 2,08→🔴 vs solskadad 2,09→🟠** ⇒ badgen ej ren funktion av tier-mixen; alternativ (typvärde, andels-tröskel, ordviktning, exkl. omdömen, ceiling) testade och fällda. §1.4 nedgraderad till arbetsmodell med **gråzon 1,9–2,4**; block-fix-räkningar = estimat; avgörande test BESTÄLLT (§9: färsk same-scan badge + komplett blocklista inkl. FAQ-svar).
**(B) §1.2 stärkt:** bristningar-breakdownen (78 dgr gammal) passar multiplikativa formeln exakt (52×50×25/3640 = 17,9 ≈ 18) → **6/6 på gamla analyser**, medan färska passar medel(CQ,EEAT) → versionsbytes-hypotesen stärkt. Testprotokollet står.
**(C) §1.3 v5 out-of-sample-validerad (blindtest 5):** 20 block ur de 6 nya MODERATE-faciten, 1 färsk bedömare, facit dolt → **55 % exakt / 90 % ±1 / binärt 15/20** — generaliserar (semi-holdout-farhågan 38 % motbevisad). 2-stegsmissar = undergissad marknad/passiv på behandlingsblock, båda konfidens ≤55 → <65-flaggan fångar. Ingen regeländring.
**(D) §1.1-minimalpar (starkaste nyckel 3/5-belägget):** "självklara valet"-blocket i tre versioner — ytliga (utan siffra, lång) 🔴 · rhinophyma (utan siffra, kort) 🟠 · bristningar (med "30 års expertis" + fråge-öppning) 🔵. Nästan identisk öppning, siffran/konkretionen flyttar två steg.
**Bonus (ägar-uppgift):** felaktigt pris 295 kr → 495 kr för enstaka milier-borttagning fixat på milier.php + milierbehandling.php (grep över hela sajten: övriga 295 kr-träffar = vaxning ×3, elevbehandlingar brynform+färg, CryoPen-återbesök på hudforandringar — bedömda utanför scope "milier och andra extraktioner"; CryoPen-priset + milier-paketpriset 1295 kr flaggade till ägaren för verifiering).

### 2026-07-02 em #3 — MODERATE-vågen facit-KOMPLETT (pigmentflackar + oonskat-har) + homepage-/redirect-frågorna lösta
**Inkommet (zoom-dump 14:20 + 9 dumpar 14:22, save-first):** (1) **Homepage-frågan LÖST:** `/` finns i LYNX (VAL 41 · SCORE 28 · GAPS 0/0 · **AI COPY SLIGHT — ej flaggad** · AIQ POOR · KW 298); `/behandlingar.php` = **redirect till /hudbehandlingar/** (ägarbesked; KW 0 → ingen åtgärd, redirect-rad i registret). §9-tråden stängd, §9.1 Tier 1 uppdaterad (homepage-vinst = SCORE+AIQ, ej flagg). (2) **Per-block-facit pigmentflackar.php** (22 apr; 8🔴/4🟠/5🔵/1🟢, n=18, medel 2,06→🟠 ✓) + **hudproblem/oonskat-har/** (29 apr; 5🔴/2🟠/4🔵/2🟢, n=13, medel 1,77→🟠 ✓) → lynx-examples. **MODERATE-vågen har nu facit för ALLA 7 sidor.** §1.4-medel nu **11/11** (median 14/17). Rewrite-ammo: pigmentflackar-typon "AcneSpecialistem" + 3× upprepad orsaks-definition; oonskat-har har 4 trasiga meningar live (mest trasig svenska hittills). Kort-mönstret bekräftat 3:e gången: behandlingskortets ÖPPNING avgör (mekanism 🔵 vs marknad 🔴). Först 🟢 HUMAN på FAQ-rad (oonskat-har).

### 2026-07-02 em #2 — STOR-leverans: 4 MODERATE-facit + HELSAJTS-inventering + sidregister; §1.4 → MEDEL; microneedling påbörjad→ÅTERRULLAD
**Microneedling (Fas 3b):** rewriten PÅBÖRJADES enligt LÄGE-instruktionen (claim §12, facit verifierat, ~7 av 11 planerade ändringar gjorda) men ägaren beordrade mitt i: *"vi ska sammanställa statistiken först, rulla tillbaka microneedling så gör vi den sen"* → `git checkout -- microneedling.php`, claim tömd. **Bevarad block-plan (återanvänd vid omstart):** (1) banner: tankstreck→komma + NY kur-mening för §8.1-gapet ("Bäst resultat ger en microneedling kur på 3 eller 5 behandlingar, eftersom kollagenet byggs upp gradvis mellan behandlingarna"); (2) desc-p1 🔴: mekanism-öppning, behåll 16-nålar/tusentals-kanaler/serum/alla-hudtyper, döda ", vilket möjliggör"; (3) desc-p2 🔵 lätt hand: "inklusive men inte begränsat till"→"till exempel" (translationese); (4) prep-p1 🔴: konsult-boilerplate→konkreta vi-handlingar; (5) prep-p2 🟠: aktiv imperativ ("Kom inte solbränd..."), importans+svans bort; (6) process-p2 🔴: "speciellt utformade"/"maximera"/strålande-svans bort, grammatikfel "slussas in kanalerna" rättas, rodnad-är-normalt behålls; (7) aftercare-p1 🔴: importans-öppningen (ren meta) bort, imperativ, 24-timmar/smink/smutsiga-händer kvar; (8) aftercare-p2 🟠: "undvika"→"Undvik", "bastu, och"→"bastu och", "av yttersta vikt"/"rekommenderas att" bort, SPF/milda-produkter/fuktbalans kvar; (9) brands: typo "markanden"→"marknaden"; (10) kort-grammatik: "våra resultatinriktade microneedlingbehandling"→"vår...", "bristningarnas utseendet"→"utseende"; (11) FAQ §1.5: topp-frågan "Vad är microneedling bra för?" (score 25, OK) — svaret kompletteras med pigmentfläckar/bristningar/aktiv acne (sidans egna behandlingar); FAQ-typo "micronnedling"→"microneedling" (typon BRYTER sökordsfrasen "microneedling resultat"). Aftercare-p3 🔵 med "microneedling kur" lämnas orörd.
**Leverans (21 dumpar, save-first §0):** (1) **Per-block-facit ×4** → lynx-examples: solskadad-hy 6🔴/1🟠/3🔵/1🟢 · rhinophyma 8🔴/2🟠/5🔵/1🟢 (2 live-grammatikhaverier, bl.a. trasig mening i Näsa-blocket) · microdermabrasion 5🔴/1🟠/3🔵/2🟢 · bristningar 6🔴/1🟠/5🔵/1🟢. MODERATE-vågen har nu facit för 5/7 — SAKNAS: pigmentflackar + oonskat-har. (2) **§1.4 UPPGRADERAD median→MEDEL** (nya datan avgjorde: medel 4/4, median 2/4 — totalt medel 9/9, median 12/15; avrundningsregeln preciserad: standardavrundning, ,5 uppåt). (3) **Helsajts-inventering** (5 dumpar): AICOPY-flaggorna OFÖRÄNDRADE → ingen refresh på de 8 omskrivna än; **sidregister byggt** (ägar-beställt: alla LYNX-sidor ska gås igenom) — i-LYNX-lista + saknas-lista + i-LYNX-men-ej-i-repot i lynx-data; **scope: allt under /studentrabatt/ = drafts, exkluderas** (ägarbesked). (4) Nya bevakningstrådar (§9): homepage-raden/rad 15, powerlite-photonova (i LYNX, ej i repot), hifu (ny, ej i LYNX än), om-oss gap-popupens 4:e punkt. (5) bristningar SCORE 18-breakdown (78 dgr gammal) + om-oss gap-texter (remiss/vårdkö, hudläkar-skillnad, prisinfo) → lynx-data.
**Modell-observationer (nya facit, ej kodifierade — §1.3:s ≥2-sidor-regel):** "det självklara valet"-block MED 30-års-siffra + fråge-öppning = 🔵 (bristningar) vs UTAN siffra = 🟠 (rhinophyma) → siffran/pivoten gör skillnaden (stödjer nyckel 3/5). FAQ-rader kan bära EGNA betyg (🔵 ×3 sidor — första gången). Artefakt-block betygsätts ("0 2" = 🔵 på solskadad).

### 2026-07-02 em — mogen-hy KOMPLETT: facit bekräftat + AI Overview-lista (27 frågor) → §1.4 första missen + medel-hypotes + §1.5 H6
**Inkommet (3 dumpar 13:03, save-first):** (1) **Slutet av blocklistan** (scrollbar i botten — inget saknades): facitet VAR komplett, sista blocket = obetygsatt FAQ-titel. → §1.4-mismatchen STÅR: median 🔵 vs sidnivå 🟠 = modellens FÖRSTA miss (**10/11**). **Medel-hypotes registrerad** (viktat medel avrundat mot värre → 🟠 ✓ på mogen-hy, träffar även de 4 nya facit-sidorna) — omräkning av de 6 äldre = §9-TODO. (2) **AI Overview Ranking mogen-hy (27 frågor)** → lynx-data: första sidan med POOR-frågor (3 st, alla off-topic) och första utan GOOD → **ny §1.5 H6** (POOR = inget svar alls, inte dåligt svar; off-topic-POOR åtgärdas ej — silovakt §5); äkta gap = "Vad betyder hy?" (score 24, OK).

### 2026-07-02 — mogen-hy-facit + AICOPY-Pages-lista mottagen (tredje leveransen idag; ENDAST SPARAD, inget agerat — låg usage i sessionen)
**Inkommet (6 skärmdumpar, save-first §0):** (1) **Per-block-facit /mogen-hy.php** (22 apr-text) → `lynx-examples.php`: synligt 5🔴/1🟠/5🔵/3🟢 (n=14) — **⚠️ möjligen TRUNKERAT** (dumparna slutar mitt i FAQ-listan) → **be ägaren om resten innan §1.4-statistiken röres**; median på synliga block = 🔵 men sidnivå = 🟠 → FÖRSTA möjliga §1.4-mismatchen, PRELIMINÄR tills komplett facit. Rewrite-ammo: 2 grammatikfel + 2 typos live. (2) **Pages-tabell AICOPY-filter (13 rader)** → `lynx-data.php`: ingen refresh på omskrivna sidor (§11.1-bevakningen fortsatt öppen); GAPS rensade på ytliga-blodkarl + ipl-rosacea; microdermabrasion AIQ GOOD→OK. **Åtgärd nästa session:** mogen-hy in i facit-kön (§9), komplett blocklista beställd.

### 2026-07-02 — Konsistens-audit (ägar-beställd, 2 oberoende granskare): 18 fynd → 10 äkta fixade, 8 avfärdade
**Kontext:** ägaren misstänkte interna logiska fel efter många iterationer. Två granskare svepte hela filen med olika linser.
**Status-linsen (8 fynd, 5 äkta):** pigmentflackar KW238→244 (3 ställen; lynx-data = källa) · §9 Fas 1-raden för hudforandringar hade missats i morgonens state-synk ("→ staging" trots LIVE — samma felklass igen!) · §11.1-raden fick debug-rad-not · §8.1 sebo-status uppdaterad (OBS: 2 jul-scanen visar GAPS 0/0 — LYNX flaggar inte längre gap-punkterna; besluten kvarstår frivilliga) · Fas 3 "parallellt"→"löpande" (§0.1-vokabulär).
**Modell-linsen (10 fynd, 5 äkta):** §1.2-brödtexten sa fortfarande "VALIDERAD" + imperativ ("Bryt 39 = höj AI STYLE") trots OMPRÖVAS → rubrik mjukad till 30 jun-modell + HISTORIK-divider infogad över hela brödtexten · "Fyra nycklar" var fem → rättat + nyckel 1 fick tolknings-pekare till nyckel 5 · §1.3 regel 3 sa "SIGNIFICANT." blankt före gradienten → "SIGNIFICANT som default — gradienten avgör" · §1.4 "AI STYLE-taket" → "-komponenten (§1.2 OMPRÖVAS)". Avfärdade: block- vs sidnivå-"paradoxen" (§1.4 förklarar den uttryckligen), tak-vs-spak (olika begrepp), median-flagga vs no-regression-SCORE (olika dimensioner), m.fl.
**Lärdom (generell princip, ej mikroregel):** iterativa påbyggnader lämnar gamla IMPERATIV kvar när nya data underkänner premissen — vid varje modellrevision: greppa filen efter modellens nyckelfraser och tagga/uppdatera ALLA förekomster (samma princip som state-synk-regeln från i morse, nu bevisad två gånger samma dag).

### 2026-07-02 — Blindtest 4 (ägar-beställt test av förbättrade modeller): AI-modellen mätbart bättre + gradienten skärpt
**Upplägg:** 2 färska bedömare med v5+gradient-rubriken; 37 regressions-block (identiska med test 3) + 16 semi-holdout (ociterade block från de 4 nya sidorna). **Resultat: regression 57–62 % exakt (upp från 35–43 % med v4), ±1 89–92 %; 4 av 5 gamla tvåstegsmissar FIXADE** (meta-scaffolding, mild-importans, fluff-svans, kort+marknad; EXTREME-räkningen kvarstår hos 1 av 2). Semi-holdout: 38 % exakt / 88 % ±1. **Ny systematisk miss hittad + fixad direkt:** gradienten förlät fluff så fort konkretion fanns någonstans — facit räknar över HELA blocket → §1.3-gradienten skärpt (staplade öppningsfraser / fluff i båda ändar / lång+svans → 🔴; demografisk skal räddas aldrig). **SCORE-modellen kan inte testas lokalt** (bara LYNX producerar breakdowns) — falsifierbart protokoll registrerat i §1.2, testas mot nästa färska nedbrytningar ägaren skickar. Äkta out-of-sample-validering = första nya facit-sidan. Full data: `lynx-examples.php`.

### 2026-07-02 — AI QUESTIONS-detalj mottagen (4 sidor) → NY §1.5-modell (hypotes)
**Inkommet (4 skärmdumpar, sparade i lynx-data FÖRST):** "AI Overview Ranking" för micro/porto/acne-rygg/sebo — 14 frågor per sida med SCORE-viktning + OPTIMIZED-status (beställningssedel punkt 3 → 🟡). **Ny §1.5** med H1–H5: FAQ-titel räcker inte för GOOD (micro score-25-frågan är sidans FAQ-titel men bara OK); svaret måste matcha frågans form (acne-ryggs hur-varianter GOOD, orsaksfrågor OK); grannfrågor → ägarsida + länk (§5); hemma-frågor = återkommande topp → ärlig "ingen hemmakur" + klinikpivot; YMYL-angränsande kan nå GOOD i kosmetisk ram (sebo cancer-frågan). **Operativ följd: FAQ-svar = trippelspak (AI QUESTIONS + median §1.4 + AI STYLE) → Fas 2:s värde höjs ytterligare; Fas 3b-sidorna har nu sina frågelistor som svars-spec.** TOC kompletterad (§1.3–§1.5 saknades).

### 2026-07-02 — Modellöversyn på POSITIV-datan (ägar-beställd): §1.1 nyckel 5, §1.3-gradient, §1.4 additions-spak
**Kontext:** korpusen var negativ-tung (facit mest från SIGNIFICANT-sidor vi skrev om); de 4 nya faciten är SLIGHT-tunga (23🔵/9🟢 av 53 block) = första systematiska bilden av vad som HÅLLER block gröna.
**Uppdaterat (allt belagt på ≥2 sidor):** (1) **§1.1 nyckel 5:** en enstaka fyllnads-/importansfras fäller inte — ackumuleringen fäller; fyllnadsfras + konkretion direkt i mening 1–2 = 🔵; konkreta processblock tål flera marknadsord (portomning); CTA-pivot-räddningen gäller även behandlingskort (3 sidor); FAQ-svar kan nå 🟢; 🔵↔🟢 = brus utan operativ betydelse. (2) **§1.3 regel 3 → gradient:** importansfras + konkretion direkt = SLIGHT · + svans = MODERATE · + generiskt = SIGNIFICANT ("räkna fyllnad vs konkretion, inte frasen"). (3) **§1.4 additions-spaken:** medianen flyttas även genom att LÄGGA TILL korta konkreta block (FAQ-svar/pris/maskin-rader) → **Fas 2 är också en AI COPY-flagg-spak**, inte bara AI QUESTIONS (§13.N-vakt: äkta innehåll, ej padding). (4) **§1.2 +2 observationer:** konkret procedur-copy skårar högt på nya skalan (sebo CQ85/AI50, porto subs 95–98); möjligt att AI STYLE inte längre ingår i Overall (medel(CQ,EEAT) passar 2/3 exakt) — skulle krympa de-AI:s SCORE-payoff; avgörs med fler breakdowns.
**Ej ändrat:** §1.2-formeln (fortsatt OMPRÖVAS — ingen ny formel på 4 punkter), ±1-bandregeln, facit-först, §13-skydden. Noterat men EJ kodifierat (1 sida): antites i kort konkret block fäller inte (portomning 🟢-blocket).
**Strategisk följd:** rewrite-jobbet på 🔵-sidor (Fas 3b) = kirurgi på 2–4 🔴-block + typos, INTE genomskrivning — sidornas struktur skyddar redan medianen.

### 2026-07-02 — STOR facit-leverans (4 sidor) + färska SCORE-analyser → §1.2 OMPRÖVAS, §1.4 nu 10/10
**Inkommet (15 skärmdumpar; allt sparat i lynx-data + lynx-examples FÖRST per §0):** per-block-facit för **microneedling** (22 apr: 4🔴/2🟠/7🔵/3🟢), **portomning** (24 jun: 2🟠/5🔵/2🟢), **acne-rygg** (25 apr: 3🔴/1🟠/11🔵/1🟢), **seborroisk-keratos** (25 apr: 2🔴/2🟠/5🔵/3🟢) + färska SCORE-nedbrytningar (micro 50, porto 60, sebo **74 med AI STYLE 50**) + acne-rygg SCORE 0 = ALLA komponenter 0 + gap-texter (micro ×2, acne-rygg ×2, exosomer-gapet).
**Modellfynd:** (1) **SCORE 0 = trasig/tom analys** → omkörning krävs innan bedömning. (2) **"39-taket" brutet utan våra ändringar** → ny LYNX-version/skala trolig; 30 jun-baselines EJ jämförbara — mät färsk-mot-färsk (§11.1-varning tillagd). (3) AI STYLE 0 på färska = troligen obereäknad; sebo 50 = första uppmätta >30. (4) Aggregering ändrad/oklar (EEAT-badge 60 ≠ sub-medel; Overall ≈ medel(CQ,EEAT) passar 2,5/3) → **§1.2 markerad OMPRÖVAS; ingen ny formel förrän fler färska breakdowns.** (5) **§1.4 median: 4 nya träffar → 10/10** — vår starkaste modell. *(HISTORIK: 10/11 sedan mogen-hy-missen 2 jul em → medel-hypotes, §1.4.)* (6) §1.1/§1.3-stöd i nya facit: sebo lång-definition-utan-mekanism = 🔴 (ytliga-mönstret ✓); acne-rygg kort+marknad utan pivot = 🔴 (v5 regel 2 ✓); **ny nyans: "flera olika faktorer"-öppning fäller INTE när konkretiseringen kommer direkt i mening 2** (acne-rygg 🔵 — noterad, ej regeländring än, §1.3:s ≥2-sidor-regel).
**Beslut (ägarens, 2 jul):** micro + porto togs först (högst VALUE i default-sortering), acne-rygg + sebo också klara; **denna session = data + modellöversyn, sidfixarna görs i SEPARAT session** → **Fas 3b-kö skapad i §9** (4 sidor med rewrite-ammo: 5 live-typos/grammatikfel + §8.1-gapbeslut). **Exosomer-TODO** tillagd i §9 (gated på klinikens lansering). Fler sidor aviserade från ägaren.

### 2026-07-02 — Optimeringarna genomförda (a–e) + blindtest 3 → §1.3 v5
**Gjort (ägarens grönt ljus på alla fem förslagen):** (a) **§7.4b** adversariell verifiering standardiserad (bantad: 1 bedömare räcker, se nedan); (b) **arkiv-policy** i §11 + `lynx-log-arkiv.php` skapad; 5 ratificerade/ersatta §11-poster arkiverade (~8,5 kB — playbooken krymper vidare mot ~55–60 kB när mätrundan stänger sid-posterna); (c) **facit-kö** inskriven i §9.1; (d) **blindtest 3** kört (nedan); (e) **Fas 2-attribueringsvakt** i §9.
**Blindtest 3 (Fable 5 + v4-rubrik, ofuskat):** 37 block ur korpusen (fulltext ur git pre-rewrite `b017daf2`; 1🟥/13🔴/8🟠/10🔵/5🟢), MEDVETET hårdladdat med kända fällor; 3 oberoende bedömare fick bara rubrik + text. **Resultat: 13–16/37 exakt (35–43 %), 31–33/37 ±1 (84–89 %); bedömarna nästan identiska → hög reproducerbarhet, missarna = systematiska v4-luckor** (alla redan i §1.1 men ej transkriberade till §1.3): meta-scaffolding-öppning, fluff-svans på kort block, kort+marknad utan pivot, mild importans i konkret instruktionsblock (ska INTE lyfta), EXTREME-stuffing ej räknad, kort+siffra/namn→HUMAN saknades. → **§1.3 uppdaterad till v5 = synkad med §1.1** (ingen per-sida-tuning; §1.3:s egen ≥2-sidor-regel uppfylld). Beslutsregeln oförändrad: ±1-band, facit-först, konfidens <65 = hämta facit. Full data: `lynx-examples.php`.

### 2026-07-02 — Process-review (modellbyte till Fable 5) + state-synk: main-pushen var redan gjord
**Kontext:** ägaren bad om en översyn av LYNX-processen efter byte till Fable 5.
**Fynd + fix (gjort):** playbookens state-markörer var osynkade — §11-loggen sa "main pushad + produktion verifierad (1 jul)" medan LÄGE-bannern, §8, §9 och §11.1-tabellraderna fortfarande sa "väntar main-push". Git-verifierat 2 jul: origin/main = PR #236 → **alla 8 sidor LIVE**; enda commit kvar på staging = d3ce9162 (hudforandringar död debug-rad). Synkade LÄGE + §8 + §9 + §11.1-raderna. Rotorsak: sessionen som loggade main-pushen uppdaterade §11 + §11.1-rubriken men inte raderna/bannern. **Princip framåt: när ett tillstånd ändras, greppa filen efter den gamla frasen (t.ex. "väntar main-push") och synka ALLA förekomster** — bannern/tabellen är det en ny session litar på.
**Process-bedömning (Fable 5): inga regeländringar.** Skyddsreglerna (§13) och facit-först behålls — de kodar verkliga incidenter, inte modellsvaghet; flaskhalsen just nu är LYNX-refresh-data, inte modellkapacitet. Rör inte §1.1–§1.4/§1.2 före första mätningen (omätta hypoteser, §10).
**Föreslaget (väntar grönt ljus, ej gjort):** (a) standardisera adversariell workflow-verifiering (ipl-rosacea-upplägget, fångade 4 äkta fynd) som frivilligt §7-steg för autonomt gjorda sidor; (b) arkiv-policy: när en §11.1-rad är MÄTT och stängd flyttas dess §11-poster till en `lynx-log-arkiv.php` (playbooken är ~82 kB och läses top-to-bottom varje session; arkivera först EFTER mätning — FÖRE-data + prediktioner behövs i mät-loopen); (c) facit-kö: ägaren klistrar in per-block-facit för 2–3 Tier 1-sidor i förväg så sessioner inte blockeras på väntan; (d) frivilligt blindtest-rebaseline av §1.3-prediktorn med Fable 5 mot lynx-examples-korpusen (kan skärpa ±1-bandet; facit-först gäller oavsett); (e) attribuerings-disciplin: håll Fas 2-schema borta från de 8 mätsidorna tills refreshen är mätt (§13.G/H).

### 2026-07-01 — Ägaren pushade MAIN → produktion LIVE (mätstart) + produktions-verifiering
**Milstolpe:** ägaren pushade `main` → alla omskrivna sidor är nu LIVE på produktion (`acnespecialisten.se`). **Mätklockan startar nu** (§10 / §11.1) — nästa steg är LYNX-refresh, sen mät FÖRE→EFTER.
**Produktions-verifiering (8 sidor):** 7/8 rena — HTTP 200, renderat, PHP ok, nytt innehåll live (acne, acne-ansikte, ytliga-blodkarl, behandla-pigmentflackar, om-oss, ipl-rosacea, hudbehandlingar/ipl).
**1 bugg fångad + fixad:** `hudproblem/hudforandringar/index.php` läckte en synlig `Warning: Undefined variable $types_url` (rad 777 = död `<!--<?php echo $types_url ?>-->`-debugrad → hela raden borttagen). **Pre-existerande** (git -S visar gammal commit `06d18987`, ej vår de-AI/H1-rewrite). Fix på staging → **väntar ägarens nästa main-push** för att rensa på produktion.

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

### Arkiverade poster → `includes/lynx-log-arkiv.php` (fulltext där)
- 2026-07-01 Beslut: kör 1 Claude i taget — ratificerat i §0.1/§12.
- 2026-07-01 Plan-review (planerare/exekutor) — facit-flöde/save-first/§0.2-dispatch ratificerade; autonom-kvittens = §13.E; "frys modellbygge tills första mätningen" gäller fortfarande.
- 2026-07-01 ytliga-blodkarl försök #1 rullat tillbaka ("för stora förändringar") — lärdomen kodifierad i §13.O.
- 2026-06-30 Playbook-städning (över-specificering bort) — ratificerat i §0/§3/§5/§6.
- 2026-06-30 acne-ansikte första omskrivningspost + provomskrivnings-checklista — ersatt av "hela sidan klar"-posten ovan.

---

## 11.1 Bevakningslista — sidor som väntar på LYNX-refresh (mät-loopen, §10 steg 2)
LYNX skannar bara LIVE och refreshar med delay — **mätklockan startar när ägaren pushar `main`**, inte vid staging. Vi kan inte polla LYNX (ingen export/API); ägaren droppar ny skärmdump när LYNX uppdaterat, då mäter vi delta mot FÖRE-baseline + prediktion. Listan = vad vi väntar på, så inget glöms. **▶ 2026-07-01: ägaren pushade main → mätstart igång för alla rader nedan; produktion verifierad (se §11-loggen överst; hudforandringar-warning fixad, väntar nästa main-push).**
**⚠️ 2026-07-02 — mätregeln skärpt:** LYNX verkar ha ny version/skala (§1.2 OMPRÖVAS: SCORE 0 = trasig analys, 39-taket brutet utan våra ändringar, aggregering ändrad). **Jämför INTE färska analyser rakt av mot FÖRE-baselines från 30 jun** — vid refresh: läs FÖRE-värdet som osäkert, väg per-block-AI COPY (stabil vy) tyngre än SCORE-deltan, och be ägaren köra FÄRSK analys som ny baseline där det går.

| Sida | Staging-push | Main-push (mätstart) | FÖRE-baseline | Prediktion (§10 steg 1) | Senaste LYNX-analys | Status |
|---|---|---|---|---|---|---|
| acne-ansikte.php | 2026-06-30 | **2026-06-30 (LIVE)** | SCORE "–", AI COPY SIGNIFICANT, KW57 | AI STYLE ↑, Depth/Evidence/sökord = | – | live på main 30 jun, verifierad 200 + nytt innehåll → **bevaka LYNX-refresh** |
| ytliga-blodkarl.php | 2026-07-01 | **2026-07-01 (LIVE)** | SCORE 22, AI COPY SIGNIFICANT, KW172 | AI STYLE ↑ (öppningar+summeringar bort), Evidence ↑ (namngivna maskiner), Depth/E-E-A-T/sökord = | – | omskriven steg för steg → staging; live på main (PR #236); **väntar LYNX-refresh** |
| behandla-pigmentflackar.php | 2026-07-01 | **2026-07-01 (LIVE)** | AI COPY SIGNIFICANT, SCORE –, AIQ GOOD, KW16 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑ (metoder), sökord = | – | de-AI:ad → staging; live på main (PR #236); **väntar LYNX-refresh** |
| hudforandringar/index.php | 2026-07-01 | **2026-07-01 (LIVE)** | AI COPY SIGNIFICANT, SCORE 17, GAPS 3/2, KW8 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑, sökord = | – | de-AI:ad + H1-sökord (sep. commit) → staging; live på main (PR #236), debug-rad-fix d3ce9162 väntar main-push; **väntar LYNX-refresh** |
| hudbehandlingar/ipl/ | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, SCORE –, P.PRICE HIGH, KW19; per-block-facit 22 apr | 13× 🔴/🟠→SLIGHT/MOD; 3× 🔵/🟢 orörda | – | facit-guidad de-AI (Fas 3) → staging; live på main (PR #236); **väntar LYNX-refresh** |
| om-oss.php | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, VAL 8, SCORE 17, KW3; per-block-facit 22 apr | O01/O04 🟠 + O06/O07/O08 🔴 → SLIGHT/MOD; 🔵/🟢 orörda | – | facit-guidad de-AI (autonomt) → staging; live på main (PR #236); **väntar LYNX-refresh** |
| acne.php | 2026-07-01 | **2026-07-01 (LIVE)** | 🔵 SLIGHT sidnivå, SCORE 39 (Depth77/Ev11/**AISTYLE30**), KW116; block-facit 22 apr | AI STYLE ↑ + Evidence ↑ (sidnivå kvar SLIGHT §1.4); Depth/E-E-A-T = | – | 10 🔴-block omskrivna (husröst-ref lämnad) → staging; live på main (PR #236); **väntar LYNX-refresh** |
| ipl-rosacea.php | 2026-07-01 | **2026-07-01 (LIVE)** | MODERATE, SCORE 39 (CQ68/Ev46/EEAT85/**AISTYLE25**), P.PRICE HIGHEST, KW20; per-block-facit 29 apr | 7× 🔴/🟠→SLIGHT (median→SLIGHT §1.4); AI STYLE ↑↑, Depth/Evidence/E-E-A-T/sökord = | – | facit-guidad de-AI (Fas 3) + adversariellt workflow-verifierad → staging (verifierad 200 + nytt innehåll live); live på main (PR #236); **väntar LYNX-refresh** (kosmetisk title-attr-typo rad 64 `rosaceabehandlingr`→`rosaceabehandling` fixad) |

När en rad refreshats: mät (§10 steg 2–3), logga EFTER i §11 + lynx-data.php, förfina modellen (steg 4), backporta (steg 5), töm raden.

---

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *(ingen pågående sida — statistik-sammanställning 2 jul em klar; microneedling-rewrite PÅBÖRJAD men ÅTERRULLAD på ägarbesked "statistik först, den gör vi sen" — `git checkout` kört, inga sidändringar kvar; block-plan finns i §11-posten)* | | |

*Historik: 1 jul kördes ipl-rosacea på en andra terminal parallellt utan markör här → kollision på delade processfiler (playbook + lynx-examples), löst manuellt. Slutsats: §0.1 "kör 1 i taget". Sidan klar → staging.*

---

## 13. Skyddsregler & mätning (från plan-granskningen)
**A. Produktion vs staging (VIKTIGAST).** LYNX skannar LIVE-sajten (`main` → produktionshost `acnespecialisten.se`). **Process:** arbeta på `staging` → push `staging` (→ temp-staging) → ägaren verifierar att sidan fungerar → push/merge `main` (→ live). **LYNX ser bara live**, så mät effekt från **main-deploy-datum**, inte staging-edit. (Att merga `staging`→`main` är ofarligt trots att staging ligger efter main — main får bara våra nya commits.) **Rollfördelning:** assistenten fixar sidor + commitar + pushar `staging`; ägaren verifierar och pushar `main` (assistenten rör aldrig main).

**B. Filerna är INTE webb-läsbara (löst).** `lynx-copy-playbook.php` + `lynx-data.php` börjar med `<?php exit; ?>` → servern kör dem och returnerar **tomt** om någon öppnar URL:en. Vi läser dem i editor/git. Inget behov av deploy-exkludering eller radering. (Verifiera vid behov: öppna `/includes/lynx-copy-playbook.php` på temp-staging → ska vara tom.)

**C. PHP-strängsäkerhet.** Copy ligger i enkel-citerade PHP-strängar (`content: '...'`). Ett rått apostrof (`'`) eller backslash kraschar sidan (500). Regel: inga råa apostrofer/backslash i copy — omformulera eller använd typografiskt `’`. (Dubbla citattecken och `$` är säkra.) `php -l` som CI-gate vore robust **på servern** — men **`php` finns INTE i Claude-skalet på denna maskin (ej i PATH, ej i /opt/homebrew|/usr/local|/usr/bin per 2026-07-01), så du kan inte linta lokalt; verifiera i stället via staging-deploy (§7.6).**

**D. Läs ALLA blocktyper — REWRITE är FACIT-DRIVEN, men lämna inte resten oöverskådad (uppdaterat 2026-07-01).** När vi har LYNX per-block-facit (AI Copy-vyn ger ett betyg per block): **skriv om 🔴/🟠/🟥 (prioritet), OCH se även över 🔵/🟢 med lätt hand** — bara tydliga fixar (typo, grammatik, tappat sökord, uppenbar tell), INTE stilistisk över-omskrivning av OK-block (v3-felet, §1.3, "rör inte det som är bra"). Utan per-block-facit: utgå från hela sidan + §1.3-modellen, lämna hellre vid SLIGHT↔MODERATE-tvivel. *(Gamla "svep alla oavsett flagga" gällde när vi bara hade sid-nivå-flagga; nu finns per-block-facit → prioritera efter den, men ignorera inte resten.)* **Bedöm ALLTID sidan som HELHET** — flöde mellan block, dubbletter/upprepning över block, sökordsspridning, att ett 🔵-block inte skaver i sitt sammanhang. Fastna inte i isolerad block-läsning: facit prioriterar, men helheten avgör. Obligatoriskt per sida: (1) grön banner-description, (2) ProblemTrivia content, (3) ProblemTrivia extended_content ("Läs mer" — ofta fet-etikett-listor → de-fluffa; prosa om det var utfylld prosa, stramad lista om sektionens syfte är uppräkning, se nedan), (4) service-/behandlingskort, (5) FAQ-svar. "Klar" = alla blocktyper klarar §3. **Bevara varje distinkt punkt — döm efter sektionens SYFTE (kräver helhetsblick, inte block-för-block).** Är sektionens hela poäng att räkna upp poster med beskrivning (varningstecken, ansiktszoner, behandlingsmetoder) → **behåll posterna distinkta; en stramad, de-fluffad lista är då helt rätt, inte en nödlösning.** Var "listan" i själva verket utfylld prosa → gör om till bunden prosa. Oavsett vilket: döda etikett-filler-formatet och fyllnaden men **slå aldrig ihop två poänger till en vagare mening eller tappa någon.** Räkna punkterna före/efter — antalet ska stämma (ex: "fysisk smärta" och "utebliven förbättring" är två tecken, inte ett). Det här är ett skäl till att vi läser HELA sidan: bara så vet vi en sektions syfte.

**E. Definition of Done.** `git diff` rör bara mål-`.php` (+ logg); deploy grön; **sidan testad på staging-URL → HTTP 200 + renderad HTML (inte blankt/500, §13.C) §7.6**; sökord finns kvar (grep); LYNX-baseline + ändring loggad i §11. Först då töms claim i §12.

**Autonom-kvittens (obligatorisk när ingen ägare följer varje steg — annars är sidan inte klar).** §13.O:s "visa ägaren varje steg" finns inte för en autonom exekutor, så klistra in detta i §11-loggen per sida; det gör "ändrade jag för mycket?" (START HÄR) mätbart i efterhand:
- **Punkt-count:** block/`<li>`/sakpoänger FÖRE = EFTER per omskrivet block (§13.D). Blev det färre → motivera varje borttagen (ren dubblett/fyllnad) eller återställ.
- **Sökord:** `grep` bekräftar att varje målfras (§6) finns kvar.
- **PHP:** inga råa apostrofer/backslash i copy-strängar (§13.C). *(OBS: `php -l` går INTE lokalt — `php` saknas i Claude-skalet på denna maskin; verifiera syntax via staging-deploy istället: HTTP 200 + renderad HTML, inte 500.)*
- **Live:** staging HTTP 200 + grep på en NY formulering syns i svaret (§7.6).

**F. Baseline + rollback.** Spara sidans LYNX-stats FÖRE ändring (§11). Per-sidans commit = revert-enhet. Trigger: tappar sidan i LYNX RANK / sökord efter prod-deploy → `git revert` av den commiten, utvärdera sen.

**G. Mät en kohort i taget.** Skeppa de 4 SIGNIFICANT, vänta på LYNX-refresh, utvärdera, sen MODERATE-vågen. Notera säsong (kliniken är säsongsbetonad) i §11.

**H. Frys titel/H1/meta under brödtext-omskrivning.** Ändra dem i separat commit om de behöver sökord (t.ex. hudforandringar) — annars går effekten inte att attribuera.

**I. PAGE TYPE / P. PRICE "–".** Kommer av generiskt fallback-Product utan Offer. Separat schemaspår: sätt `$rich_product` per sida (pris från "Från X kr"). Sekundärt mot AI COPY. **Officiell P.PRICE-definition (tooltip 2 jul 15:00):** *"Perceived price level for this page vs market in Google search results. Lower = cheaper. Levels: Very High, High, Average, Low, Very Low."* — dvs. UPPFATTAT prisläge mot MARKNADEN, inte bara schema-status. ipl-rosaceas HIGHEST = Google uppfattar oss som dyrast i segmentet (värt ägar-diskussion: är det önskat premium-läge eller fel signal?); "–" = inget pris uppfattat → Offer-schemat ger Google ett pris att läsa.

**J. FAQPage-schema (§9 Fas 2) realistiskt.** Kosmetisk klinik får troligen inga rich results; markera bara upp Q&A som syns på sidan och är kosmetisk; värdet är innehåll/LYNX, inte stjärnor. AI QUESTIONS drivs av synligt Q&A-innehåll först, schema sen.

**K. Bild-alt/title** ska vara konkret + sökordsbärande (inte "Bild som illustrerar…"). Ligger i siddata → säkert att ändra.

**L. Hub-sidor (hudforandringar)** har eget register: konkreta exempel, orientera, lättare mekanism, **länka ut** till barnsidorna; håll kosmetiskt.

**M. Tunna bonussidor:** täthet från djupare mekanism på sidans egen long-tail — aldrig padding eller huvudterm. Går det inte: acceptera SLIGHT och logga det.

**N. Täthet = SUBSTANS — och skilj INFO från LÄNGD.** De-fluff (bort med fyllnad + dubbletter) kortar texten utan att tappa information; det är rätt. **Bonus-/sökordssidor (acne-ansikte m.fl.) får vara kortare** än primärsidorna. På **primärsidor (acne.php)** håller vi full längd, men via **mer substans** (mekanism, gloss, exempel, Evidence), aldrig via bibehållen filler. **Tappa aldrig en unik poäng eller målfras (§6) — bara dubbletter och fyllnad får gå** (§13.D: räkna punkterna). Undvik CTA-konstruktionen "Boka konsultation, så går vi igenom…" (läses som AI) — skriv CTA:n rakt.

**O. Minimal diff = steg för steg, ta INTE bort substans (default-läge för all omskrivning).** "Minimal" är hur §1.1/§1.2-modellen säger att vi ändrar i det HÄR skedet: en liten, försiktig första åtgärd, inte en genomskrivning. (Det här är en princip, inte en mikroregel — vi rutar inte in oss, §0/§5.)

**Det enkla rättesnöret:** längden spelar ingen roll — texten får bli kortare *eller* längre. Det som gör skada är att **ta bort för mycket på en gång**: hela stycken, listor eller sakpoänger. Behåll varje block, varje list-punkt och varje poäng. En ren summering/dubblett får trimmas, men då som ETT medvetet litet steg ägaren ser — aldrig som del av ett svep där flera stycken försvinner samtidigt.

**Jobba steg för steg, inte i ett svep.** Några få små ändringar → visa för ägaren → iterera. Ägaren ska kunna följa varje steg; ett helt omskrivet sidsvep går varken att granska eller attribuera. Så tappade både acne-ansikte-listan (igår, fångad före commit) och ytliga-blodkarl (idag, rullad tillbaka som "för stora förändringar") substans.

**Största spaken med minst risk (§1.1):** led öppningen — och varje list-punkt — med den konkreta mekanismen i stället för en generisk uppvärmning ("X kan spela en stor roll vid…"). Oftast är det den enda ändring ett block behöver i första passet.

Gör minsta möjliga ändring som plockar bort de *tydligaste* AI-tells och fyllnaden (marknadssuperlativ, ren boilerplate, värsta komma-splitsarna). **Behåll struktur, listor, summerande/avslutande stycken, alla poänger och det mesta av ordalydelsen — skriv inte om hela block.** Säkrare att ta bort för lite än för mycket: vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren ton/poäng är svår att få tillbaka. Stora omskrivningar läses som "för stor skillnad" och går inte att attribuera. Rätt info på rätt ställe — utgå från helheten (§13.D). Justeringar kan lika gärna **lägga till saknad info eller rätta fel** som ta bort — poängen är *små, mätbara steg* mot mindre AI, inte att bara kapa. **Inom minimal: prioritera öppningarna.** Den enda spak värd att gå utöver ren ordtrimning är att **led varje block och varje list-punkt med den konkreta mekanismen**, inte en generisk uppvärmning ("X kan spela en stor roll vid…"). §1.1 nyckel 1: öppningen sätter golvet (fluff-ackumulering × längd höjer graden) → högsta ROI/lägst risk per ändrat ord. Listformat/punkter/summeringar behålls (mäts separat).
