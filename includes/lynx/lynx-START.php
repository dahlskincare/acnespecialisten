<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX START — nav, läge & backlog (LÄS DENNA FÖRST, alltid)

## ▶ ROUTER — vad ska du göra? (läs bara det du behöver)
| Uppgift | Läs |
|---|---|
| **Skriva om en sida** | denna fil (läge+invarianter) → `lynx-backlog.php` (claima i §12, läs sidans rad) → `lynx-rewrite.php` (formel/husröst/ramar/SEO/checklista/process/§13) → sidans facit i `lynx-examples.php` |
| **Analysera mätdata / förfina modeller** | denna fil → `lynx-models.php` (SCORE/AIQ/mät-loop/bevakning) → rådata i `lynx-score.php` · `lynx-examples.php` · `lynx-questions.php` |
| **Spara inkommen LYNX-data** | SPARA-RECEPTET överst i `lynx-data.php` (save-first) → rätt kolumnfil |
| **Kolla vad som är gjort / nästa** | `lynx-backlog.php` (§8 sidkarta · §9 TODO · §12 claims) + `lynx-logg.php` (historik) |
| **Slå upp ett beslut/varför** | `lynx-logg.php` (arbetslogg) |


**Filkarta (hela LYNX-setet):** `lynx-START` (denna: router/läge/invarianter/§-KARTA) · `lynx-backlog` (sidkarta/TODO/claims) · `lynx-rewrite` (omskrivnings-hantverk) · `lynx-models` (modeller/mät) · `lynx-logg` (historik) · `lynx-log-arkiv` (gammal historik) · RÅDATA: `lynx-data` (Pages+kolumndefs) · `lynx-score` (SCORE) · `lynx-examples` (AI COPY-facit) · `lynx-questions` (AIQ) · `lynx-gaps` (gaps).
---

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **DEN HÄR filen (lynx-START) din startpunkt — läs den, kolla ROUTERN överst, och gå sen till rätt fil för uppgiften** (`lynx-rewrite` för omskrivning, `lynx-models` för mät-analys). Ladda inte allt på en gång.

**⚠️ Planen är ITERATIV och aldrig "klar".** Vi har trott den färdig minst två gånger (senast igår vid lunch) och ändå hittat luckor och byggt vidare. Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren **klistrar in LYNX-facit** (skärmbild/text) — men **avgör alltid FÖRST vad syftet är**, ägaren säger inte alltid rakt ut. Två lägen: **(a) Per sida (riktat)** = facit för en sida vi jobbar på → spara baseline + kör §7 på just den sidan. **(b) Bunt statistik (inventering)** = många sidors kolumn-data på en gång → **diffa mot `lynx-data.php`** och klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen §10, FÖRE→EFTER + validera modell; nya sidor → uppdatera baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara, ingen åtgärd — LYNX kanske inte refreshat än). **Oavsett läge: SPARA FÖRST, agera sen** — spara rådatan i rätt KOLUMNFIL (filkarta i `lynx-data.php`; ägarbeslut 2 jul): per-block-facit → `lynx-examples.php` · frågelistor → `lynx-questions.php` · SCORE-nedbrytningar → `lynx-score.php` · gap-texter → `lynx-gaps.php` · Pages-rader/inventeringar → `lynx-data.php`; notera FÖRE→EFTER. Agera sen (rewrite/prio/mätning §10) och **gör en TODO (§9) för det som ska åtgärdas**. Agera aldrig på facit utan att först spara; det är vår enda mätkälla. **Skärmbilds-principen (ägarbesked 2 jul):** (1) skärmbilder är av naturen PARTIELLA — jobba med det som syns, fråga riktat efter det som saknas, behandla inte trunkering som blocker; (2) läs HELA bilden — snappa upp omkringliggande data utanför det vi pratar om (grannrader, kolumner, badges); (3) visar omkringliggande data en FÖRÄNDRING mot sparad data → öppna en ny TODO-tråd i §9 (exempel 2 jul: GAPS-rensningen + microdermabrasion AIQ, upptäckta i kanten av en mogen-hy-leverans).

> **🟢 LÄGE 2026-07-08** *(ny session: läs denna banner → routern överst → rätt fil för din uppgift; arbetet i `lynx-backlog.php`)*
> - **📁 FILSTRUKTUR SPLITTRAD 6 jul:** läs `lynx-rewrite` för omskrivning, `lynx-models` för mät-analys, `lynx-logg` för historik. Denna fil = nav/läge/backlog. (Detaljer: `lynx-log-arkiv` 6 juli #10.)
> - **Mål:** LYNX grönt **utan att skada ranking/trafik**. **RAMEN (verifierad 6 jul):** spaken är SUBSTANS-kvalitet; AI COPY-flaggan är PROXY, Google straffar ej AI-text (lynx-rewrite §1). **SCORE ska INTE jagas** — tak ~75-77 på våra sidtyper, EEAT-badge låst 60 (lynx-score/models).
> - **Mätt (metoden funkar — 3/3):** acne-ansikte 🔴→🔵 SLIGHT + om-oss 0 flaggade block (5 jul) + **behandla-pigmentflackar 🔴→🔵 SLIGHT (7 jul, tvåstegs-hopp — logg #14)**. §1.1 nyckel 1 kausalbelagd. SCORE-modellen LÖST via 13 nedbrytningar (lynx-score).
> - **✅ ALLA flagg-sidor LIVE PÅ MAIN.** Wave 2 (6 Fas 3 + pigmentflackar + småfixar: milier-pris, Google Meet, d3ce9162) **pushad till main 6 jul (ägarbeslut) → VERIFIERAD LIVE PÅ PRODUKTION**: alla 20 ändrade sidor HTTP 200, 0 PHP-fel, nytt innehåll bekräftat (logg #13 produktions-verifiering; staging-kontrollen arkiverad, `lynx-log-arkiv` 6 juli #12). §10.0 GSC-gaten passerad på ägarbeslut. **Kvar på dessa = passiv mät-uppföljning (LYNX-refresh + GSC), ej blockerande.**
> - **SEO-vakt §10.0 = SENARE process (ägarbeslut 6 jul):** GSC + Ahrefs görs som eget pass senare (LYNX-prioritet nu pga refresh-fördröjning). Gaten blockerar inte längre; main-push är ägarens beslut. KW-vakt löpande via LYNX-data kvarstår.
> - **pigmentflackar + rhinophyma re-scannade 7 jul (logg #14):** båda "Last update 06 Jul"-vyerna läste PRE-WAVE-2-texten (crawl daterad 2 jul 16:09–6 jul 16:08 via git) — 18/18 + 16/16 block identiska med gamla faciten (determinism #3+#4; typo-fixar flyttar inte betyg) → **V2-rewriterna fortfarande OMÄTTA; EFTER-facit väntar nästa refresh (crawl efter 6 jul 16:08).** SCORE: pigment 73 = medel(84,60) ✓; AI STYLE-FÖRE-baselines satta (pigment 55, rhino 70).
> - **🔧 PÅGÅENDE FÖRST: fil-optimeringspasset §9.0** — **steg 1–6 klara** + mål-arkitekturen RATIFICERAD 8 juli (lag: "ett fakta = en cell, celler pekar"; START blir tunn dispatcher, ny `lynx-backlog.php`, loggen = HISTORIK). Batterier för steg 8 + 9 färdigbyggda. **NÄSTA: steg 7 (START-splitten — 50 pekare, kör pekar-censusen `--efter` och diffa).** Arbetssätt: ETT steg i taget med ägar-avstämning, INGA agent-utskick; spec i `lynx-optimering-underlag.php`.
> - **Nästa SIDARBETE (efter passet):** microneedling (block-plan lynx-logg 2 jul em #2; typos redan fixade — kvar = de-AI) → övriga Fas 3b (portomning/acne-rygg/seborroisk-keratos, facit finns) → Tier 1-SLIGHT (rosacea/perioral-dermatit, facit saknas).
> - **Öppna ägar-beställningar:** om-oss badge-rad · acne-ansikte FAQ-facitrest · AI Copy-datum för de 3 kvarvarande SIGNIFICANT · (GSC/Ahrefs = eget senare pass) · boilerplate-sweep "Akne Specialiserade Hudterapeuter" (27 filer — timing-beslut).
> - **Varningar/regler:** 1 Claude i taget (§0.1) · save-first i rätt kolumnfil (filkarta i `lynx-data`) · ny LYNX-skala → färsk-mot-färsk · **attribution kräver observerad delta, ej deploy-timing** · **LYNX uppdaterar per (sida × vy), aldrig i sajt-svep — datera varje cell, EFTER-data droppar in löpande** (lynx-models §11.1) · Fas 3-facit REDAN sparat — be inte igen.
>
> *(Banner-regel 6 jul: LÄGE hålls som punktlista, max ~8 rader. Nya detaljer går till §8/§9/§11/§11.1 — här uppdateras bara STATUSBYTEN. Prosaväggen som stod här förut leder till skumläsning; `lynx-log-arkiv` 6 juli #6.)*

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt (kalibrerat 2026-06-30, skärpt 2026-07-01 — läs §13.O):** vi har kartlagt vad LYNX läser som AI (§1.1/§1.2) och fixar **just de tells, målinriktat och steg för steg** — utan att förstöra sökord eller substans (§6). Jobba i **små steg**: några få ändringar → visa ägaren → mät (§10) → iterera. **Ta inte bort substans** (block, list-punkter, poäng, sökord, claims); längden får bli kortare *eller* längre. Största spaken: **led öppningen med mekanism** (§2/§1.1). **Ta INTE bort hela stycken/listor i ett svep** — ägaren har stoppat det två gånger. Lägg inte till påståenden sidan inte stöder. Testa på staging (§7.6).
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata** (LYNX saknar export): en fil per LYNX-kolumn så sessioner bara läser det som behövs (ägarbeslut 2 jul) — **filkarta överst i `includes/lynx/lynx-data.php`** (Pages-listan där; AI COPY → lynx-examples · AI QUESTIONS → lynx-questions · SCORE → lynx-score · GAPS → lynx-gaps). Fyll på vid varje refresh.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

> Nav-fil för uppdraget att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. **Denna fil (lynx-START) är ingången** — router, LÄGE, invarianter och §-KARTAN bor här; TODO/status/claims i `lynx-backlog.php` (vi använder ingen task-tracker). Hantverket bor i `lynx-rewrite`, modellerna i `lynx-models`, historiken i `lynx-logg`. En ny Claude utan kontext läser START först, sen rätt fil per router (se §0.1 — kör 1 i taget). Splittrad 2026-07-06.

### §-KARTA — RESOLVERN (KANONISK CELL)
**Var bor vilket §?** Detta block är den enda källan. Pekar-censusen (`§9.0`) **parsar det** i stället för att hålla en egen kopia — en resolver som dubbleras driftar, och då bevakar verktyget en karta som inte längre gäller. Uppdatera HÄR när ett § flyttar, ingen annanstans.

```
§0, §0.1, §0.2                  → lynx-START     nav · en-i-taget · dispatch
§8, §8.1, §9, §9.0, §9.1, §12   → lynx-backlog   sidkarta · gap-beslut · TODO · prio · claims   [flyttade dit 8 juli]
§1, §1.1, §1.3, §1.4            → lynx-rewrite   bedömningsmodellen
§2, §3, §4, §4.1, §4.2, §5, §6, §7, §13 → lynx-rewrite   formel · checklista · husröst · ramar/juridik · SEO-skydd · process · skyddsregler
§1.2, §1.5, §10, §10.0, §11.1   → lynx-models    SCORE · AIQ · mät-loop · SEO-vakt · bevakning
§11                             → lynx-logg      arbetslogg (HISTORIK)
```
*(Splittrad 2026-07-06. HISTORIK-filer får inte uppdateras retroaktivt — deras §-referenser avser strukturen vid postens datum; se header-raden i respektive arkivfil.)*

---

## 0. Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. *(Arbetslistan, gap-besluten och sidprion bor i `lynx-backlog.php`.)* Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**; se över 🔵/🟢 med lätt hand (typo/grammatik/tappat sökord/uppenbar tell) och bedöm sidan som HELHET (§13.D). Enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§11) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **de mest flaggade blocken först** (🟥/🔴 före 🟠); lämna 🔵/🟢 (lätt hand, §13.D).

**State-synk-principen (bevisad 2× den 2 juli; flyttad hit från loggen 7 juli):** när ett tillstånd eller en modellslutsats ändras — **greppa filsetet efter den GAMLA frasen** (t.ex. "väntar main-push") och synka ALLA förekomster, även bannern/tabellerna; det är dem en ny session litar på. Iterativa påbyggnader lämnar annars döda imperativ kvar.

**Skrivkonvention datum (ägarbesked 7 juli):** i egen text skrivs månaden ut — "2 juli", inte "2 jul" ("vi skriver så mycket så vi kan lika gärna skriva ut hela månaden"; juni/juli förkortas inte på svenska). Ordagranna LYNX-citat ("Last update: 06 Jul") transkriberas verbatim. Gäller framåt direkt; retroaktivt svep av gamla poster = §9-TODO.

**Vad som hör hemma i den här filen (så vi inte rutar in oss):** generella principer, inte engångsiakttagelser. Dyker det upp något på en enskild sida — t.ex. "behövs kommat här?" — är det ett omdöme i stunden, inte en ny regel. Innan en regel läggs till: hjälper den på fler sidor, eller låser den bara fast oss? Hellre få principer + omdöme än en växande lista mikroregler. *(Den gamla komma-efter-sökfras-regeln i §6 var just en sådan över-specificering — den föddes ur ett enskilt "kommat behövdes inte" och togs bort.)*

---

## 0.1 Kör bara 1 Claude i taget (parallellt fungerar inte)
**Beslut 2026-07-01:** kör **en** instans åt gången. Parallellt testades (ipl-rosacea på en andra terminal) och krockar: även när två Claude jobbar på *olika* sidor tvingas båda skriva i samma **processfiler** — §11-loggen, §12, `lynx-data.php`, `lynx-examples.php`, backlog-statusen (§8/§9). Sido-isoleringen räcker inte när själva processen delar filer (kollision på både playbooken och lynx-examples 1 jul, löst manuellt utan dataförlust men onödigt kört). Så: en i taget.

Filsetet är självbärande — en ny Claude utan kontext läser START först (router → rätt fil) och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — dessa filer gäller.)

Regler:
1. **Läs denna START-fil (router/läge/invarianter) + §12 i `lynx-backlog.php` (status) först; slå upp `lynx-logg` vid behov.** På annan dator: `git pull` innan du börjar.
2. **Du ska vara ENSAM — kontrollera det först.** Kör `git status` (finns ändrade/ostaged filer du inte själv rört?), kolla §12 i `lynx-backlog.php` (aktiv rad?) och senaste §11-logg/commits. Ser du tecken på en annan instans, eller osparat jobb du inte känner igen → **stanna och fråga ägaren** innan du rör något. Anta aldrig att du är ensam.
3. **Markera vad du jobbar med i §12 (`lynx-backlog.php`) innan du börjar** (sida · status · tid); töm raden när du är klar (logga i §11). Så ser nästa session var förra slutade.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (`lynx-logg`) + §12 (`lynx-backlog`) när du är klar, sen `git push`.
6. Följ §2–§6 exakt, så blir rösten enhetlig.

---

## 0.2 Standing dispatch-instruktion — klistra in när du startar en ny exekutor-Claude
Så ägaren slipper upprepa samma sak varje gång. Kopiera detta i första meddelandet till en ny exekutor-Claude:

> Läs `includes/lynx/lynx-START.php` först (läge + router + regler), gå sen till `lynx-rewrite.php` för hantverket och hämta sidans facit i `lynx-examples.php`. Detta är en **iterativ process: små steg, inte stora omskrivningar.** Vi kör 1 Claude i taget — kolla först (`git status` + §12) att ingen annan är igång, markera sen din sida i §12, be mig om sidans LYNX-facit (per-block), följ §7. **Innan du sparar ändringar, fråga dig själv och mig: "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer senare. Behåll varje block, list-punkt och sakpoäng; räkna punkterna före/efter (§13.D). Rör aldrig delade widgets/mallar (§6/§8) eller en sida någon annan claimat.

---

## ▶ ARBETET BOR I `lynx-backlog.php`
**§12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.0 fil-optimeringspasset · §9.1 prioriterad backlog** flyttade dit 8 juli (§9.0 steg 7) så den här filen kan vara en tunn dispatcher.

**Innan du rör något:** `git status` → läs **§12 i `lynx-backlog.php`** (är någon annan igång?) → skriv in din rad. Är raden ifylld när du trodde du var ensam — **stanna och fråga ägaren** (§0.1 regel 2).

---

