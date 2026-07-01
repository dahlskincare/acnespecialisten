<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX Copy Playbook — AcneSpecialisten

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **den här filen ditt enda underlag — läs hela top-to-bottom först.**

**⚠️ Planen är ITERATIV och aldrig "klar".** Vi har trott den färdig minst två gånger (senast igår vid lunch) och ändå hittat luckor och byggt vidare. Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren **klistrar in LYNX-facit** (skärmbild/text) — men **avgör alltid FÖRST vad syftet är**, ägaren säger inte alltid rakt ut. Två lägen: **(a) Per sida (riktat)** = facit för en sida vi jobbar på → spara baseline + kör §7 på just den sidan. **(b) Bunt statistik (inventering)** = många sidors kolumn-data på en gång → **diffa mot `lynx-data.php`** och klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen §10, FÖRE→EFTER + validera modell; nya sidor → uppdatera baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara, ingen åtgärd — LYNX kanske inte refreshat än). **Oavsett läge: SPARA FÖRST, agera sen** — spara rådatan (per-block → `lynx-examples.php`, sid-/kolumndata → `lynx-data.php`, notera FÖRE→EFTER), agera sen (rewrite/prio/mätning §10) och **gör en TODO (§9) för det som ska åtgärdas**. Agera aldrig på facit utan att först spara; det är vår enda mätkälla.

> **🟢 LÄGE 2026-07-01 (ny session startar här):** **8 sidor omskrivna** — acne-ansikte (LIVE på main), + ytliga-blodkarl, behandla-pigmentflackar, hudforandringar, hudbehandlingar/ipl, om-oss, acne.php, **ipl-rosacea** (alla på `staging`, väntar ägarens main-push). Alla facit-guidade (§13.D); ipl-rosacea staging-verifierad (200 + nytt innehåll live). **Kör 1 Claude i taget (§0.1) — parallellt övergivet.** **Modeller byggda:** AI COPY-rubrik v4 (§1.3, ±1-band), sidnivå=MEDIAN av block (§1.4), SCORE=CQ×EEAT×AI/3640 multiplikativt (§1.2, validerat). **Väntar på:** ägarens main-push → LYNX-refresh → kör mät-loopen (§10): mät FÖRE→EFTER per §11.1-bevakningslistan, validera modellerna (acne.php = A/B-test av SCORE/AI STYLE-spaken). **Nästa sidor:** §9.1-backlog, Tier 1 = Homepage (KW296), pigmentflackar (238), rosacea (221), perioral-dermatit (194) — **hämta per-block-facit FÖRST** för var och en. **Data-princip:** spara allt ägaren skickar (lynx-data/examples), diffa vid ny scan, påminn om uppdateringar. Inga öppna trådar; git rent.

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt (kalibrerat 2026-06-30, skärpt 2026-07-01 — läs §13.O):** vi har kartlagt vad LYNX läser som AI (§1.1/§1.2) och fixar **just de tells, målinriktat och steg för steg** — utan att förstöra sökord eller substans (§6). Jobba i **små steg**: några få ändringar → visa ägaren → mät (§10) → iterera. **Ta inte bort substans** (block, list-punkter, poäng, sökord, claims); längden får bli kortare *eller* längre. Största spaken: **led öppningen med mekanism** (§2/§1.1). **Ta INTE bort hela stycken/listor i ett svep** — ägaren har stoppat det två gånger. Lägg inte till påståenden sidan inte stöder. Testa på staging (§7.6).
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata** (LYNX saknar export): `includes/lynx-data.php` — fyll på vid varje refresh.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

> Kanonisk arbetsfil för att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. Utgå alltid från den här filen — den är **självbärande och enda källan till sanning** (vi använder inte task-tracker; TODO + status bor här). En ny Claude utan kontext ska kunna läsa den top-to-bottom och börja jobba (se §0.1 — kör 1 i taget). Senast uppdaterad: 2026-07-01.

**Innehåll:** §0 använda filen · §0.1 kör 1 i taget · §1 hävstången · §1.1 bedömningsmodell · §1.2 score-modellen · §2 formeln · §3 checklista · §4 husröst · §4.1 utökad husröst · §5 ramar · §6 SEO-skydd · §7 process · §8 backlog · §8.1 per-sida gaps · §9 TODO · §10 justeringsloop · §11 logg + baseline · §11.1 bevakningslista · §12 claims · §13 skyddsregler

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

**Fyra nycklar:** (1) Öppningen sätter GOLVET (mekanism/konkret vs fyllnad/marknad), MEN **fluff-ackumulering × längd höjer graden** — ett kort praktiskt block klarar SLIGHT även med ett marknadsord (facit: behandla-pigment banner/about-1 = SLIGHT trots "de mest effektiva"), ett långt block med staplad marknad/hedge blir 🔴/🟥 trots mekanism (behandlingskorten). Byt fyllnadsöppning mot mekanism/konkret OCH kapa fluff-ackumuleringen. *(Samma behandling kan få olika betyg: laser-kortet = SLIGHT på acnebehandling, SIGNIFICANT på behandla-pigment — se `lynx-examples.php`.)* (2) SLIGHT-ribban är hög — hela blocket måste vara tätt, halvkonkret = MODERATE. (3) Kort + konkret siffra/namn → HUMAN ("Lägg till 1000 kr…", "större än 5 mm", "Dermapen 4"); längd är modifierare. (4) **Fluff-svansen** drar ner ett annars konkret block ("perfekt anpassad för dina unika behov", "uppnå dina hudvårdsambitioner", "säkerställa en trygg upplevelse") — och det gäller även en **cirkulär summeringssvans som bara upprepar vad blocket redan sagt, även utan ordet "Sammanfattningsvis"** (facit: microneedling på acnebehandling — full mekanism men 🔴 pga längd + "Kombinationen av dessa… få bort akne"-svans). Korta, konkreta instruktioner (eftervård: "håll rent, avstå smink första dygnet") klarar SLIGHT även med ett milt "det är viktigt att".

**Mål:** rework allt som är 🔴 SIGNIFICANT eller 🟠 MODERATE → **minst 🔵 SLIGHT**. 🔵/🟢 skrivs inte om stilistiskt men ses över med lätt hand (tydliga fixar: typo/grammatik/tappat sökord/uppenbar tell — ej över-omskrivning, §13.D/§1.3). 🟢 HUMAN nås bara på naturligt korta block (definition med siffra, namngiven maskin, kort erbjudande, omdöme) — **tvinga aldrig ner ett förklarande block i längd för att jaga HUMAN** (krockar med §13.N). För förklarande prosa är SLIGHT målet.

**Modell-referens:** `acne.php` är samma ämne som acne-ansikte fast i SLIGHT/MODERATE-version — modellera omskrivningar direkt på dess SLIGHT-block. Alla per-block-facit (sida + datum) loggas i **`includes/lynx-examples.php`** — växande korpus; fyll på vid nya facit, och logga före→efter när resultat kommer.

---

## 1.2 SCORE-modellen — komponenter, sajt-tak & copy-spakar (prediktiv, validera mot refresh)
SCORE (0–100) ≠ AI COPY-flaggan men lyfts av samma jobb. Komponenter: **CONTENT QUALITY** (Base, Depth, Evidence, Language, Readability) + **E-E-A-T** (Experience, Expertise, Authority, Trust) + **AI STYLE** (Human-like). Baselines + sajt-tak (rådata) i `lynx-data.php`.

**VALIDERAD aggregeringsmodell (reverse-engineerat 2026-07-01, passar 5/5 datapunkter inom ±1–2 p):** **Overall ≈ CONTENT QUALITY × E-E-A-T × AI STYLE / ~3640** — MULTIPLIKATIVT, inte viktat medel. Bevis: hudforandringars Overall 17 ligger UNDER dess lägsta block (AI 25); ett medel kan aldrig hamna under sitt minsta värde → linjärt uteslutet. CQ = medel av sina 5 subs, E-E-A-T = medel av sina 4. K≈3640 (±5% brus). Fakta om varje komponent + full härledning i `lynx-examples.php`.
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

## 1.3 Prediktions-rubrik (operationell) — v4: en **±1-TIER-BAND-modell**
Gissa en blocks AI COPY-tier (🟥 EXTREME > 🔴 SIGNIFICANT > 🟠 MODERATE > 🔵 SLIGHT > 🟢 HUMAN). **Två ofuskade blindtest (35 block, betyg dolda):** ipl 16/24 exakt (v2-rubrik), om-oss 4/11 exakt (v3 — ÖVERkorrigerade). **Slutsats: exakt tier är BRUS** (LYNX:s mid-tier-gränser är luddiga + sid-kontext-beroende — "om oss"-prosa mildare än behandlings-prosa). **Det pålitliga är ±1 tier = 34/35 (97%).** Använd modellen som ett **band** ("troligen SLIGHT–MODERATE"), inte en exakt etikett. **Vi slutar mikro-tuna per sida** (v2↔v3 pendlade = overfit); ändra bara om ett mönster upprepas över ≥2 sidor.

**Procedur:**
1. **Omdöme** → HUMAN ENDAST med konkret personlig detalj (namn/tid/känsla, "gått där 2-3 år"); **generiskt omdöme utan detalj → SLIGHT.**
2. **Kort (1–2 meningar), icke-omdöme** (CTA "Boka…", kort instruktion, definition, en konkret nytta + "Läs mer") → **SLIGHT.** *(EJ HUMAN — v4-fix efter O09/O10.)*
3. **≥3 meningar — öppningen sätter tyngdpunkten:**
   - konkret/mekanism/action/process/historik-öppning → **SLIGHT–MODERATE**; → SIGNIFICANT ENDAST om den avslutas med en TÄT hög marknadssuperlativ ("mest effektiva/garanterar/optimala resultat").
   - marknads-superlativ-öppning → **MODERATE**; → SIGNIFICANT om tät marknad staplas igenom (flera superlativ + upprepat "inte bara X utan Y").
   - importans/hedge/scensättning ("det är viktigt att", "en rad olika faktorer", "Att navigera i…", "förstår vi vikten av") → **SIGNIFICANT.**
4. **LÄNGD = SVAG modifierare, inte stark spak.** "Om oss"/process/historik-prosa graderas milt (stannar SLIGHT/MODERATE även vid 3–5 meningar). *(v3 översköt detta → hade fått oss att skriva om SLIGHT-block i onödan.)*
5. **EXTREME** om blocket keyword-stuffar (samma term ~×4) + staplar "vilket"-kedjor + är långt.
6. **Kontext:** behandlings-/tillståndsprosa hårdare; "om oss"/historik/process mildare.

**Konfidens:** löst korrelerad med rätt (test 1) men EJ pålitlig (test 2 hade högkonfidenta HUMAN-missar) → svag signal, inte facit.

**För SYFTET (vad ska skrivas om):** ±1 räcker för att skilja "behöver jobb" (🔴/🟠) från "OK" (🔵/🟢). Men vid **SLIGHT↔MODERATE-gränsen: hämta facit hellre än att skriva om** (v3 hade skrivit om 3 SLIGHT-block i onödan = "rör inte det som är OK", §13.O).

---

## 1.4 Sidnivå ≈ MEDIAN av block-tiers (hur LYNX aggregerar block → sida)
LYNX ger både **sidnivå-AI COPY** (Pages-listan) och **per-block-facit** (AI Copy-vyn). Reverse-engineerat 2026-07-01: **sidnivån ≈ MEDIAN-tiern av alla renderade block** (mittblocket sorterat 🟢→🟥; räkna även responsiva dubbletter; gränsfall rundar mot värre tier). Validerat **6/6** (acne.php median 🔵 = SLIGHT; acnebehandling 🔵 = SLIGHT; om-oss 🟠 = MODERATE; ipl 🟠 = MODERATE; behandla-pigment 🔴 = SIGNIFICANT; hudforandringar 🔴 = SIGNIFICANT). Full härledning i `lynx-examples.php`.

**Förklarar paradoxen** "SLIGHT-sida med många 🔴-block": sidnivån är MEDIANEN, inte värsta blocket (acne.php har ~10 🔴 men ännu fler korta 🔵-definitioner + 🟢-omdömen → median 🔵).

**Strategisk implikation (styr prio + förväntan):**
- **Sänk SIDNIVÅN = flytta MEDIANEN.** På 🟠-sida: fixa 🟠+🔴 → 🔵 så medianen blir 🔵 → sidan 🔵. På 🔴-sida krävs att MÅNGA block fixas.
- **En 🔵-sida sänks INTE av att fixa enstaka 🔴-block** (medianen redan bra), MEN det höjer SCORE (AI STYLE-taket) + blockkvaliteten → gör det för SCORE, inte AI COPY-flaggan.
- **Prio-konsekvens:** 🔴/🟠-sidor → AI COPY-flagg-vinst; 🔵-sidor → SCORE-vinst. Båda mot "LYNX grönt".

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
1. **Spara LYNX-baseline** för sidan i §11 (AI COPY, SCORE, GAPS, AI QUESTIONS, PAGE TYPE, P. PRICE, KW, ev. RANK) — innan något ändras.
2. **Ägaren klistrar in LYNX-facit → SPARA rådatan FÖRST** (per-block → `lynx-examples.php`, sid/kolumn → `lynx-data.php`; diffa mot förra scan). Identifiera sen primärt sökord + intent (bonus → long-tail). Agera aldrig på facit utan att spara det först (§0 Facit-flöde).
3. Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**, se över 🔵/🟢 med lätt hand + bedöm sidan som HELHET (§13.D) — enligt §2–§4; kör §3-checklistan + §6 SEO-skydd.
4. Lös gap-punkter inom ramarna (grannämne → länk; ingen medicin/cancer).
5. Logga i §11 (baseline + vad/varför). Följ Definition of Done (§13.E).
6. **Push `staging` → TESTA att sidan gick upp:** hämta staging-URL:en (`https://www.acnespecialisten-staging.minoch.com/<sida>`) och bekräfta **HTTP 200 + renderad HTML** (inte blankt/500) samt att sökord/claims syns i svaret. Fångar PHP-strängfel (§13.C). En sida är inte klar förrän den verifierat laddar. **OBS: staging-deploy har ~minuters lag** — poll:a tills *din* ändring faktiskt syns i svaret (grep efter en ny formulering), inte bara tills 200 kommer.
7. Promota till prod (§13.A) → vänta på LYNX-refresh → utvärdera (§10).

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**SIGNIFICANT — alla ✅ KLARA (staging/main):**
- `acne-ansikte.php` — ✅ KLAR (omskriven hela sidan → staging, väntar main-push; se §9/§11/§11.1)
- `ytliga-blodkarl.php` — ✅ KLAR (omskriven steg för steg → staging, väntar main-push; se §9/§11/§11.1)
- `behandla-pigmentflackar.php` — ✅ KLAR (bonus, KW16; de-AI:ad → staging, väntar main-push)
- `hudproblem/hudforandringar/index.php` — ✅ KLAR (hub; de-AI:ad → staging, väntar main-push; H1 i sep. commit)

**MODERATE-vågen:** ✅ KLARA: `om-oss.php`, `hudbehandlingar/ipl/`, `ipl-rosacea.php` (KW20, P.PRICE HIGHEST, SCORE 39 — facit-driven + workflow-verifierad). **KVAR (7):** `pigmentflackar.php` (KW238), `rhinophyma-rosacea.php`, `microdermabrasion.php`, `mogen-hy.php`, `solskadad-hy.php`, `hudproblem/bristningar/`, `hudproblem/oonskat-har/`. (Prioordning: §9.1.)

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

**seborroisk-keratos.php** (SLIGHT — frivilliga förbättringar)
- HIGH För brett fokus → **GÖR: smalna av** till seborroisk keratos (mjällvårtor).
- MEDIUM Information om skrapning (curettage) → **GÖR: nämn + jämför** med våra metoder (Laser/CryoPen), kosmetiskt ramat.

**acne-ansikte.php / behandla-pigmentflackar.php:** inga LYNX gap-punkter (GAPS = ⚡-/💡-); bara AI COPY-omskrivning.

---

## 9. TODO (denna fil är källan — ingen task-tracker)
Kryssa här. Start/stopp-vänligt: status = §9 + §11 (logg) + §12 (claims). Per-sida gap-detaljer i §8.1.

**Setup**
- [x] Färdigställ setup & playbook (formel, husröst, ramar, SEO-skydd, §13-skyddsregler, lynx-data.php).

**Fas 1 — SIGNIFICANT-sidorna**
- [x] `acne-ansikte.php` — omskriven (hela sidan), minimal-diff (§13.O); sökord/claims bevarade → staging, väntar main-push.
- [x] `ytliga-blodkarl.php` (KW172) — omskriven steg för steg (öppningar + summeringar bort + gap-punkter §8.1) → staging, väntar main-push. Bortkommenterade $type_categories/$symptoms orörda (bilder saknas).
- [x] `behandla-pigmentflackar.php` — de-AI:ad (öppningar + marknadssvansar bort), long-tail hållen → staging, väntar main-push.
- [x] `hudforandringar/index.php` — de-AI:ad (hub-register, öppningar + svansar + stavfel) → staging; H1-sökord i separat commit (§13.H).

**Fas 2 — Schema**
- [ ] FAQPage JSON-LD från `$faq_categories` (efter de 4 sidorna) — realistiskt scope (§13.J) + FAQ-svar i husröst.
- [ ] PAGE TYPE/P. PRICE: sätt `$rich_product` per sida med Offer (§13.I) — separat schemaspår.

**Fas 3 — MODERATE-vågen** (efter schema)
- [~] MODERATE-vågen: ✅ om-oss + hudbehandlingar/ipl + ipl-rosacea klara; **7 kvar** (§8). Körs facit-drivet parallellt när per-block-facit finns — **ej grindat efter schema** (Fas 2 är ett fristående spår). Prioordning: **§9.1**.

**Löpande / avslut**
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [x] (Löst) Filerna är `.php` med `<?php exit;` → renderas tomma på webben; behöver inte raderas.

**Parkerat**
- [P] Dubbel `title`-attribut i widgets (§8 — beslut: skippa).

---

## 9.1 Prioriterad helsides-backlog (hela sajten, 2026-07-01)
Från LYNX-inventeringen (`lynx-data.php` + Pages-listan). Prio = AI COPY-svårighet × KW × SCORE/GAPS-uppsida. **Process per sida:** hämta per-block-facit FÖRST → facit-driven rewrite (§13.D). Minns §1.4: 🔴/🟠-sidor ger AI COPY-flagg-vinst; 🔵-sidor ger SCORE-vinst.

**Tier 1 — störst KW + uppsida (GÖR FÖRST):**
1. `/` (Homepage) — KW296, AIQ POOR, SCORE28, GAPS3/2. Störst enskild uppsida. Skydda E-E-A-T-widgets.
2. `pigmentflackar.php` — KW238, 🟠 MODERATE. Största MODERATE; pigment-huvudsida (silo mot behandla-pigmentflackar).
3. `rosacea.php` — KW221, 🔵 SLIGHT, SCORE –. Rosacea-huvudsida.
4. `perioral-dermatit.php` — KW194, 🔵, SCORE –.

**Tier 2 — hög-KW SLIGHT, låg/0 SCORE + gaps (enskilda block kan vara 🔴):**
blodprickar (175, SCORE17) · milier (173, 37) · seborre (168, –) · pormaskar (128, 32) · acnearr (127, **SCORE0**+gaps) · **acne.php (116 — FACIT ✅ MOTTAGEN 1 jul: ~10 🔴-block, redo; husröst-REFERENS → LÄMNA dess 🔵/🟢-block)** · seborroisk-keratos (110, **0**) · hudflikar (105, 28) · finnar (101, silo).

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · microneedling · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · acne-rygg (0) · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠, P.PRICE HIGHEST)~~ ✅ KLAR → staging · **oonskat-har (🟠)** · **mogen-hy (🟠)** · **microdermabrasion (🟠)**.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

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
Korrelera mot LYNX-refresh. Senaste först. Spara alltid **LYNX-baseline** (FÖRE-värden) per sida så vi kan utvärdera vad ändringen gjorde. Logga även en **prediktion** per omskrivning (vilka SCORE-komponenter vi tror rör sig + varför, §10 steg 1) så vi kan mäta modellens träffsäkerhet när EFTER-värden kommer. All rå LYNX-data (alla sidor, alla kolumner) sparas i **`includes/lynx-data.php`** — vår manuella "export" eftersom LYNX saknar exportfunktion. Uppdatera den vid varje refresh.

### LYNX-baseline — de 4 SIGNIFICANT-sidorna (2026-06-30, före ändring)
| Sida | VALUE | PAGE TYPE | SCORE | GAPS ⚡/💡 | AI COPY | AI QUESTIONS | P. PRICE | KW |
|------|-------|-----------|-------|-----------|---------|--------------|----------|----|
| acne-ansikte.php | 32 | – | – | –/– | SIGNIFICANT | OK | – | 57 |
| ytliga-blodkarl.php | 42 | – | 22 | 2/2 | SIGNIFICANT | OK | – | 172 |
| behandla-pigmentflackar.php | 14 | – | – | –/– | SIGNIFICANT | GOOD | – | 16 |
| hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | SIGNIFICANT | OK | – | 8 |

### 2026-07-01 — Beslut: kör 1 Claude i taget (parallellt övergivet)
**Gjort:** efter dagens parallell-test (planerare + ipl-rosacea-exekutor i samma arbetsträd) beslutade ägaren att **köra en instans i taget**. Skrev om **§0.1** (parallellt → 1 i taget; motivering: delade processfiler §11/§12/lynx-data/lynx-examples/§8–§9 krockar oavsett sid-isolering) och **§12** (parallell-lås → in-progress-markör; check-and-ask kvar men vänt: "du ska vara ensam — upptäcker du annat → fråga ägaren"). Tog bort worktree-/parallell-maskineriet + "flytta logg ur filen"-förslaget (onödigt när 1 i taget). TOC + §-referenser (rad 24/26) + §0.2-snutten uppdaterade.
**Not:** dagens parallell-kollision löstes utan dataförlust — exekutorns commits (149de875 + 3aa45a31) ovanpå planerarens (a1c5e471); planeraren committade scoped, exekutorn stagade explicit. Bevis på att det GÅR men är onödigt kört.

### 2026-07-01 — `ipl-rosacea.php` (MODERATE, Fas 3, KW20, SCORE 39, P.PRICE HIGHEST) — FACIT-GUIDAD de-AI, klar → staging
**Gjort (facit 29 apr, v4 §1.3 + adversariellt workflow-verifierad):** Skrev om de 7 block facit rated 🔴/🟠 (desc-p2 "inte bara X utan Y"+marknadssvans; Inför-p1 konsult-boilerplate; Inför-p2 "det är viktigt att"+lång; Process-p2 passiv/generisk procedur; Process-p3 hedge-stapel+boilerplate-svans; Eftervård-p1 importans-filler; Eftervård-p2 passiv "rekommenderas det att"+lång) → ledde med mekanism/konkret + aktiv imperativ, kapade antites/marknad/importans/passiv. **LÄMNADE de 4 🔵/🟢** (desc-p1, Process-p1, Eftervård-p3, Märken-raden) — facit=OK (§13.D-disciplin). Bevarat: 3 interna länkar (rosacea/rosaceabehandling/ipl-ytliga-blodkarl), alla priser, sökord (rosacea 127, IPL 67, "IPL-behandling mot rosacea" 6, rodnad, blodkärl, ytliga blodkärl, pigment), frysta meta. 0 em-streck/råa apostrofer (§13.C; php-lint saknas lokalt → verifieras på staging).
**Ägar-kalibrering mitt i:** ägaren frågade "rätt mängd eller för mycket?" → visade diff → svar: "rätt mängd, fortsätt". (Denna = executor-terminalen; planner-terminalen körde plan-review parallellt, se nästa post.)
**Workflow-verifiering (15 agenter, adversariell — predikt + diff-check + helhetskritiker):** alla 7 block predikterade **SLIGHT** (mål nått). Fixade 4 äkta fynd: process-p2 "bryts ner" (överdrog vs facit "minskar framträdande") mjukad + "efter din hud"-dubblett (delad med desc-p2) bort + "IPL-enheten" åter; Eftervård-p1 redundant rodnad (täcks av Process-p3) trimmad, svullnad behållen; Eftervård-p2 "regelbundet" åter; Process-p3 IPL-sökord åter. Skippade (motiverat): "tappad eftervårds-instruktion" på Inför/Process = boilerplate som Eftervård-sektionen äger (siloing); vaga svansar täcks av kvarlämnad desc-p1.
**§1.4:** MODERATE-sida, median flyttad → förväntad **sidnivå SLIGHT (AI COPY-flagg-vinst)**. **Prediktion (§10 steg 1):** AI STYLE ↑↑ (öppningar+antites+marknad+passiv = största spaken), Evidence = (namngivna maskiner i orört Märken-block), Depth = (alla poäng kvar), E-E-A-T/sökord =. FÖRE-baseline: SCORE 39 / CQ 68 / Evidence 46 / E-E-A-T 85 / **AI STYLE 25** (topsite-kolumn C, `lynx-data.php`). **A/B-test:** bryter de-AI AI STYLE-taket 25?

### 2026-07-01 — Plan-review medan exekutor kör (planerare/exekutor-split)
**Kontext:** ägaren kör en **parallell exekutor-terminal på `ipl-rosacea.php`** och bad planeraren se över plan + modeller. Vi trodde LYNX-setupen klar (igår lunch) men den utvecklas vidare → planen är iterativ (nu inskrivet i START HÄR).
**Gjort (låg risk, ägar-riktat):** (1) START HÄR: iterativ-plan-princip + **facit-flöde** (ägaren klistrar in facit → SPARA först i lynx-examples/lynx-data → agera sen) — en lucka ägaren påpekade. (2) §7 steg 2: save-first inskrivet. (3) §12: koordinerings-gap dokumenterat (ipl-rosacea claimades aldrig → claim-tabellen ej självhävdande).
**Föreslaget (väntar grönt ljus, ej gjort):** (a) hårda självkörbara DoD-grindar för AUTONOMA exekutorer — §13.O:s "visa ägaren varje steg" håller inte utan mänsklig blick, ersätt med kvittens i §11 (punkt-count före/efter, grep-bevis på målfraser, `php -l`, staging-200+ny-fras-grep); (b) flytta logg/claim ur den delade filen (merge-konflikt-risk när flera exekutorer kör); (c) standing dispatch-instruktion ägaren klistrar in när en exekutor startas; (d) frys modellbygge tills första LYNX-refreshen mätts; (e) dela playbook i exekutor-kontrakt + planerar-bilaga.
**Modell-status (viktigast):** **noll efter-mätningar än** — §1.1–§1.4 + §1.2 är alla baseline-reverse-engineerade hypoteser, §10-mät-loopen har aldrig körts. 7 sidor väntar på main-push + refresh. Skala inte exekvering på oäkta validering; acne.php = det avgörande A/B-testet.

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

### 2026-07-01 — `ytliga-blodkarl.php` — försök #1 RULLAT TILLBAKA (tog bort för mycket)
**Vad hände:** Påbörjade ett block-svep och skrev om hela stycken (tog bort flera stycken, slog ihop meningar) i Vad/Varför/Vem — ägaren stoppade direkt: "för stora förändringar". `git checkout -- ytliga-blodkarl.php` återställde sidan till original; inget kvar i arbetsträdet på sidan (bara playbook). **Rotorsak:** tolkade "svep alla block" (§13.D) som licens att skriva om varje block i ett svep, i stället för små, målinriktade steg. **Kollade acne-ansikte (som ägaren bad om):** listorna där är faktiskt intakta live — 20 `<li>`, alla besvär-etiketter kvar (Panna/Kinder/Haka/Näsa/Käklinje/Hals, Hormoner/Stress/Preventivmedel/Yttre m.fl.); förra listförlusten fångades före commit. **Åtgärd:** §13.O + START HÄR-bullet omskrivna till den enkla principen (ta inte bort substans, längden fri, steg för steg). En först tillagd "RÖR-INTE-TEST"-mikroregel togs bort igen som för instängande + otydlig (§0/§5 — vi rutar inte in oss). Baseline (§11-tabellen) oförändrad — sidan aldrig deployad. **Nästa gång:** små målinriktade steg mot just de LYNX-AI-tells vi kartlagt (§1.1); visa ägaren varje steg; skydda sökord (§6).

### 2026-06-30 — `acne-ansikte.php` — omskriven (hela sidan klar), väntar main-push
**Gjort:** Hela sidan omskriven med minimal diff (§13.O): bara tydligaste AI-tells bort (marknadsord avancerad/effektiv/skräddarsydd/speciell/avgörande, boilerplate "du är inte ensam", meta-scaffolding, fyllnadssvansar) + värsta komma-splitsarna. Struktur, summeringar, alla poänger, sökord, claims (**Cutibacterium kvar**), priser och länkar intakta — grep-verifierat. Inget unikt innehåll tappat.
**Prediktion (§10 steg 1):** AI STYLE ↑ (mindre fyllnad/marknadsord + Orsaker-öppningarna ledda med mekanism = §1.1:s största spak), Evidence/Depth = (substans kvar), sökord/E-E-A-T =. Förväntad landning SIGNIFICANT → MODERATE/SLIGHT. Listformatet behållet med flit — mäter om LYNX straffar en ren lista eller bara en utfylld.
**Process-lärdomar (inbakat i playbook):** §13.O minimal-diff (ta bort LITE, iterera, kan även lägga till/rätta); §13.D döm efter sektionens syfte (uppräkning → behåll lista, slå inte ihop poänger); §13.N info ≠ längd, bonussidor får vara kortare; §3 komma stryks rakt av.

### 2026-06-30 — Playbook-städning (avlägsna över-specificering)
**Gjort:** (1) Tog bort §6-regeln "komma efter sökfras matchar exakt-frasen sämre" — falsk SEO-grund + fastlåsande; ersatt med rytm-hänvisning (§3) + "behåll frasen i texten". (2) La in §0-vakt: bara generella principer hör hemma i filen, engångsiakttagelser är omdöme i stunden. (3) Slog ihop §3:s tre komma-punkter till en, med "enklaste fixen = stryk onödigt komma, omformulera bara vid behov". (4) Rättade motsägelsen "flaggade block" vs "alla block" på flera ställen (§0/§7/§13.D): **hela sidan är arbetslistan, inte LYNX:s flagg-lista** — det var den motsägelsen som lät en tidigare session fastna i "får bara röra flaggade block". (5) Skärpte uppdraget överst: mål = LYNX **helt grönt/korrekt**, varje textblock minst SLIGHT/HUMAN (rättade vilseledande "SIGNIFICANT → MODERATE"). **Varför:** ägaren var nöjd med acne-ansikte och fixen var bara att stryka extra komman utan omformulering — regeln var en överreaktion på ett engångsfall. Princip: vi rutar inte in oss (§5). Minnesfil [[comma-ai-tell]] uppdaterad i linje med detta.

### 2026-06-30 — `acne-ansikte.php` (SIGNIFICANT) — OMSKRIVEN, väntar LYNX-refresh
**Gjort:** Skrev om de **7 flaggade blocken** (banner + Vad/Varför/Orsaker/När/Var = SIGNIFICANT, Hur = MODERATE) → SLIGHT-mål, varierade öppningar, ingen upprepad ", och"-fog, befintliga claims/sökord bevarade. Regler reviderade: organism-namn/ingredienser factual OK (§5), komma-efter-sökfras mjukad till riktlinje (§6), "heuristiker inte stela lagar" (§5). **Cutibacterium acnes STANNAR** (godkänt befintligt — bakteriens namn). LYNX-vyn (3 nya bilder 30 jun) = **samma 10 block**, inga gömda extra. Logga före/efter i lynx-examples.php när LYNX uppdaterats.
**Status:** hela sidan omskriven och klar — se posten överst.
**Tidigare:** Provomskrivningarna nedan **rullades tillbaka till original** eftersom vi finslipade formel/ramar under tiden (täthet = substans inte kortare §13.N · sökordsbevarande §6 · helt block-svep §13.D). Görs om i ETT rent svep med färdig playbook. LYNX-baseline ovan gäller fortfarande. Att ta med i omskrivningen (lärdomar + checklista):
- Täthet = SUBSTANS, inte kortare text (§13.N). Bevara alla målfraser (§6).
- Block att svepa: banner-description (rad 27), alla ProblemTrivia `content` (rad 62, 70, 82, 101, 117, 141) **och** deras `extended_content`, avslutande CTA (rad 149).
- `extended_content` är bold-label-listor (rad 84–92, 103–109, 119–133, 143–147) → gör om till bunden prosa (§13.D).
- **Behåll** *Cutibacterium acnes* (rad ~72) — godkänt befintligt. Pris → "Från 1595 kr" (rad 220). Konkret image_alt (rad 21). CTA utan "…, så går vi igenom…".
- `$seo_keywords` (rad 10) lämnas orört (sökordslagring).

---

## 11.1 Bevakningslista — sidor som väntar på LYNX-refresh (mät-loopen, §10 steg 2)
LYNX skannar bara LIVE och refreshar med delay — **mätklockan startar när ägaren pushar `main`**, inte vid staging. Vi kan inte polla LYNX (ingen export/API); ägaren droppar ny skärmdump när LYNX uppdaterat, då mäter vi delta mot FÖRE-baseline + prediktion. Listan = vad vi väntar på, så inget glöms.

| Sida | Staging-push | Main-push (mätstart) | FÖRE-baseline | Prediktion (§10 steg 1) | Senaste LYNX-analys | Status |
|---|---|---|---|---|---|---|
| acne-ansikte.php | 2026-06-30 | **2026-06-30 (LIVE)** | SCORE "–", AI COPY SIGNIFICANT, KW57 | AI STYLE ↑, Depth/Evidence/sökord = | – | live på main 30 jun, verifierad 200 + nytt innehåll → **bevaka LYNX-refresh** |
| ytliga-blodkarl.php | 2026-07-01 | *(väntar)* | SCORE 22, AI COPY SIGNIFICANT, KW172 | AI STYLE ↑ (öppningar+summeringar bort), Evidence ↑ (namngivna maskiner), Depth/E-E-A-T/sökord = | – | omskriven steg för steg → staging; **inväntar main-push + LYNX-refresh** |
| behandla-pigmentflackar.php | 2026-07-01 | *(väntar)* | AI COPY SIGNIFICANT, SCORE –, AIQ GOOD, KW16 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑ (metoder), sökord = | – | de-AI:ad → staging; **inväntar main-push + LYNX-refresh** |
| hudforandringar/index.php | 2026-07-01 | *(väntar)* | AI COPY SIGNIFICANT, SCORE 17, GAPS 3/2, KW8 | block-gissningar 🔴/🟠→🔵 (öppningar+svansar), Evidence ↑, sökord = | – | de-AI:ad + H1-sökord (sep. commit) → staging; **inväntar main-push + LYNX-refresh** |
| hudbehandlingar/ipl/ | 2026-07-01 | *(väntar)* | MODERATE, SCORE –, P.PRICE HIGH, KW19; per-block-facit 22 apr | 13× 🔴/🟠→SLIGHT/MOD; 3× 🔵/🟢 orörda | – | facit-guidad de-AI (Fas 3) → staging; **inväntar main-push + LYNX-refresh** |
| om-oss.php | 2026-07-01 | *(väntar)* | MODERATE, VAL 8, SCORE 17, KW3; per-block-facit 22 apr | O01/O04 🟠 + O06/O07/O08 🔴 → SLIGHT/MOD; 🔵/🟢 orörda | – | facit-guidad de-AI (autonomt) → staging; **inväntar main-push + LYNX-refresh** |
| acne.php | 2026-07-01 | *(väntar)* | 🔵 SLIGHT sidnivå, SCORE 39 (Depth77/Ev11/**AISTYLE30**), KW116; block-facit 22 apr | AI STYLE ↑ + Evidence ↑ (sidnivå kvar SLIGHT §1.4); Depth/E-E-A-T = | – | 10 🔴-block omskrivna (husröst-ref lämnad) → staging; **inväntar main-push + LYNX-refresh** |
| ipl-rosacea.php | 2026-07-01 | *(väntar)* | MODERATE, SCORE 39 (CQ68/Ev46/EEAT85/**AISTYLE25**), P.PRICE HIGHEST, KW20; per-block-facit 29 apr | 7× 🔴/🟠→SLIGHT (median→SLIGHT §1.4); AI STYLE ↑↑, Depth/Evidence/E-E-A-T/sökord = | – | facit-guidad de-AI (Fas 3) + adversariellt workflow-verifierad → staging (verifierad 200 + nytt innehåll live); **inväntar main-push + LYNX-refresh** (kosmetisk title-attr-typo rad 64 `rosaceabehandlingr`→`rosaceabehandling` fixad) |

När en rad refreshats: mät (§10 steg 2–3), logga EFTER i §11 + lynx-data.php, förfina modellen (steg 4), backporta (steg 5), töm raden.

---

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *(ingen pågående — allt klart, se §11-loggen + bevakningslistan §11.1)* | | |

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

**I. PAGE TYPE / P. PRICE "–".** Kommer av generiskt fallback-Product utan Offer. Separat schemaspår: sätt `$rich_product` per sida (pris från "Från X kr"). Sekundärt mot AI COPY.

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
