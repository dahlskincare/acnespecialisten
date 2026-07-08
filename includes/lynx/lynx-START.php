<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX START — nav, läge & backlog (LÄS DENNA FÖRST, alltid)

## ▶ ROUTER — vad ska du göra? (läs bara det du behöver)
| Uppgift | Läs |
|---|---|
| **Skriva om en sida** | denna fil (läge+regler+backlog) → `lynx-rewrite.php` (formel/husröst/ramar/SEO/checklista/process/§13) → sidans facit i `lynx-examples.php` |
| **Analysera mätdata / förfina modeller** | denna fil → `lynx-models.php` (SCORE/AIQ/mät-loop/bevakning) → rådata i `lynx-score.php` · `lynx-examples.php` · `lynx-questions.php` |
| **Spara inkommen LYNX-data** | SPARA-RECEPTET överst i `lynx-data.php` (save-first) → rätt kolumnfil |
| **Kolla vad som är gjort / nästa** | §8/§9 nedan (backlog) + `lynx-logg.php` (historik) |
| **Slå upp ett beslut/varför** | `lynx-logg.php` (arbetslogg) |


**Filkarta (hela LYNX-setet):** `lynx-START` (denna: nav/läge/backlog) · `lynx-rewrite` (omskrivnings-hantverk) · `lynx-models` (modeller/mät) · `lynx-logg` (historik) · `lynx-log-arkiv` (gammal historik) · RÅDATA: `lynx-data` (Pages+kolumndefs) · `lynx-score` (SCORE) · `lynx-examples` (AI COPY-facit) · `lynx-questions` (AIQ) · `lynx-gaps` (gaps).
---

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren typ *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Då är **DEN HÄR filen (lynx-START) din startpunkt — läs den, kolla ROUTERN överst, och gå sen till rätt fil för uppgiften** (`lynx-rewrite` för omskrivning, `lynx-models` för mät-analys). Ladda inte allt på en gång.

**⚠️ Planen är ITERATIV och aldrig "klar".** Vi har trott den färdig minst två gånger (senast igår vid lunch) och ändå hittat luckor och byggt vidare. Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren **klistrar in LYNX-facit** (skärmbild/text) — men **avgör alltid FÖRST vad syftet är**, ägaren säger inte alltid rakt ut. Två lägen: **(a) Per sida (riktat)** = facit för en sida vi jobbar på → spara baseline + kör §7 på just den sidan. **(b) Bunt statistik (inventering)** = många sidors kolumn-data på en gång → **diffa mot `lynx-data.php`** och klassa varje rad: **NYTT/ÄNDRAT** (efter en main-push = mätdata → kör mät-loopen §10, FÖRE→EFTER + validera modell; nya sidor → uppdatera baseline + prio §9.1) vs **OFÖRÄNDRAT** (notera bara, ingen åtgärd — LYNX kanske inte refreshat än). **Oavsett läge: SPARA FÖRST, agera sen** — spara rådatan i rätt KOLUMNFIL (filkarta i `lynx-data.php`; ägarbeslut 2 jul): per-block-facit → `lynx-examples.php` · frågelistor → `lynx-questions.php` · SCORE-nedbrytningar → `lynx-score.php` · gap-texter → `lynx-gaps.php` · Pages-rader/inventeringar → `lynx-data.php`; notera FÖRE→EFTER. Agera sen (rewrite/prio/mätning §10) och **gör en TODO (§9) för det som ska åtgärdas**. Agera aldrig på facit utan att först spara; det är vår enda mätkälla. **Skärmbilds-principen (ägarbesked 2 jul):** (1) skärmbilder är av naturen PARTIELLA — jobba med det som syns, fråga riktat efter det som saknas, behandla inte trunkering som blocker; (2) läs HELA bilden — snappa upp omkringliggande data utanför det vi pratar om (grannrader, kolumner, badges); (3) visar omkringliggande data en FÖRÄNDRING mot sparad data → öppna en ny TODO-tråd i §9 (exempel 2 jul: GAPS-rensningen + microdermabrasion AIQ, upptäckta i kanten av en mogen-hy-leverans).

> **🟢 LÄGE 2026-07-08** *(ny session: läs denna banner → routern överst → rätt fil för din uppgift; backlog §8/§9 nedan)*
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

> Nav-fil för uppdraget att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. **Denna fil (lynx-START) är ingången** — LÄGE, router, regler, TODO + status bor här (vi använder ingen task-tracker). Hantverket bor i `lynx-rewrite`, modellerna i `lynx-models`, historiken i `lynx-logg`. En ny Claude utan kontext läser START först, sen rätt fil per router (se §0.1 — kör 1 i taget). Splittrad 2026-07-06.

### §-KARTA — RESOLVERN (KANONISK CELL)
**Var bor vilket §?** Detta block är den enda källan. Pekar-censusen (`§9.0`) **parsar det** i stället för att hålla en egen kopia — en resolver som dubbleras driftar, och då bevakar verktyget en karta som inte längre gäller. Uppdatera HÄR när ett § flyttar, ingen annanstans.

```
§0, §0.1, §0.2                  → lynx-START     nav · en-i-taget · dispatch
§8, §8.1, §9, §9.0, §9.1, §12   → lynx-START     backlog · gaps · TODO · prio · claims   [FLYTTAR → lynx-backlog vid §9.0 steg 7]
§1, §1.1, §1.3, §1.4            → lynx-rewrite   bedömningsmodellen
§2, §3, §4, §4.1, §4.2, §5, §6, §7, §13 → lynx-rewrite   formel · checklista · husröst · ramar/juridik · SEO-skydd · process · skyddsregler
§1.2, §1.5, §10, §10.0, §11.1   → lynx-models    SCORE · AIQ · mät-loop · SEO-vakt · bevakning
§11                             → lynx-logg      arbetslogg (HISTORIK)
```
*(Splittrad 2026-07-06. HISTORIK-filer får inte uppdateras retroaktivt — deras §-referenser avser strukturen vid postens datum; se header-raden i respektive arkivfil.)*

---

## 0. Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**; se över 🔵/🟢 med lätt hand (typo/grammatik/tappat sökord/uppenbar tell) och bedöm sidan som HELHET (§13.D). Enligt **Formeln** (§2) och **Husrösten** (§4).
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
- `behandla-pigmentflackar.php` — ✅ KLAR + **MÄTT 7 jul: 🔴→🔵 SLIGHT** (tvåstegs-hopp; bonus, KW16→13; logg #14)
- `hudproblem/hudforandringar/index.php` — ✅ KLAR (hub; de-AI:ad → main, LIVE 1 jul; H1 i sep. commit; debug-rad-fixen d3ce9162 LIVE på produktion (logg #13))

**MODERATE-vågen: ✅ KLAR 10/10 (6 jul em):** om-oss (**MÄTT: 0 flaggade block**), hudbehandlingar/ipl, ipl-rosacea (LIVE, väntar refresh), mogen-hy, oonskat-har, microdermabrasion, bristningar, solskadad-hy, rhinophyma-rosacea, **`pigmentflackar.php` (SISTA — omskriven 6 jul → staging; KW244; omgjord V1→V2 efter ägar-feedback om att inte kapa; workflow-verifierad, 0 resonemang tappat)**. **HELA DEN URSPRUNGLIGA FLAGG-LISTAN (4 SIGNIFICANT + 10 MODERATE) ÄR NU OMSKRIVEN OCH LIVE PÅ MAIN (verifierad på produktion 6 jul, logg #13).** Alla facit i `lynx-examples.php`. **Kvar för framtida städpass:** pigmentflackar FAQ-sektion (AI-holdout, ej facit-flaggad) + typtitel-versalisering; ärr-boilerplate-sweep (§9-spår).

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
- [x] **6. KLAR 8 juli (autonomt)** — lynx-score → KIND per sektion (REGEL SLUTLÄGE-tabell A–F · AKTIV rådata · HISTORIK superseded+gamla skalan, med varning för TRE falsifierade påståenden). Batteri 40/40. **⚠️ ÄGARBESLUT VID STEG 10: filen växte 26,3→37,6 kB** — A–F:s ursprungsprosa behållen i HISTORIK (bär öppna trådar); att stryka den är informationsförlust och ditt beslut. *(Ursprunglig spec:* slutsatserna A–F → kompakt slutläges-tabell (utan korrigeringshistorik); arkivera gamla-skalans sektion + 2 juli-sektionen (sammanfattningsrader kvar: formeln 7/7, datapunkterna, acne.php no-regression-subs); fixa models rad 3-pekaren (beslut: härledningen BOR i lynx-score; models §1.2 = operativa sammanfattningen) + models stale "klampas på hälsosidor"-formulering. **KIND per sektion:** härledningen = REGEL, nedbrytnings-rådatan = AKTIV.*)
- [ ] **7. START → tunn dispatcher + NY `lynx-backlog.php`** (störst läsvinst; ägarbeslut 8 juli). **START behåller:** router (med laddnings-receptet), LÄGE ≤8 rader, invarianter (prime-direktivet EN gång, §0.1, Aldrig-listan, rollfördelningen, state-synk-principen), §0.2-dispatchen, struktur-kartan. **Flyttar till `lynx-backlog.php` (AKTIV):** §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.1 tier-listan · §12 claims. **Samtidigt:** facit-flödesväggen (rad 24) → 4–5 rader + pekare till spara-receptet i lynx-data (som får ett stabilt §-nummer så routern kan träffa det); §8/§9 KLAR-rader → enradare med logg-pekare (öppna rester bevaras: oonskat-har-ägarfrågan, micro-AIQ-detaljen, pigment V2-prediktion + AI STYLE 55); lösta [x]-bevakningstrådar arkiveras; Bevaka-trådarna → beslutspunkt + öppen fråga (historik → logg); avduplicera prime-direktiv/filkarta (står 3–5 ggr). ⚠️ **Pekar-baseline mätt 8 juli FÖRE steg 7** (underlaget): 49 pekare i 7 filer måste redigeras (AKTIV 34 · REGEL 15); historikens 101 löses med EN header-rad per arkivfil (får ej uppdateras retroaktivt); 130 sitter i filer som raderas. 0 redan-trasiga §-refs i FÖRE-läget → allt som går sönder efter steg 7 är orsakat av steg 7. Kör censusen igen med `--efter` och jämför.
- [ ] **8. lynx-rewrite — ENDAST formatkomprimering** (inga regeländringar). *No-loss-batteri 8 FÄRDIGT (22 checkar, validerat).* §1.1-väggen → 5 punktrader; §1.3-ingressens blindtest-saga → 5 operativa slutsatser + pekare till examples; §1.4 → ~8 rader (öppna beställningar oavkortade); §13.O:s tre stycken → ett (spak-regeln EN gång); §13.D → punktlista. §2–§7, §4-banken, §5-juridiken, §3-checklistan RÖRS EJ.
- [ ] **9. lynx-examples-splitten + småfiler** (632 rader = dolda jätten). *No-loss-batteri 9 FÄRDIGT (10 checkar, validerat: fångar borttaget facit + borttagen Räkning-rad).* blindtest 1/3/4 + MODELLANALYS 2 juli + median-hypotesen + FÖRE-tabellerna för de 3 MÄTTA sidorna (FÖRE-tiers finns i EFTER-tabellernas kolumn) → ny `lynx-examples-arkiv.php` (HISTORIK); ALLA facit för omätta/kösidor kvar i `examples-aktiv`. **+ Ägarbeslut 8 juli: microneedlings block-plan flyttas hit ur logg em #2**, in under sidans facit-sektion (loggen blir därmed ren HISTORIK — inget operativt beror på den). **Stubben `lynx-copy-playbook.php` RADERAS** (ej kortas). Censusen 8 juli: endast **3 omnämnanden blockerar** — START ×1, rewrite ×2 (log-arkiv täcks av sin header-rad, underlaget raderas). SERP-drift-regeln (questions rad 13) → models §1.5; gaps/questions-analysparenteser → pekare (rålistorna orörda).
- [ ] **10. Slutverifiering + permanentning:** **skriv struktur-kartan (triad × domän + laddnings-recept + "ett fakta = en cell"-lagen) i START §0** — annars dör den med underlagsfilen. Front-matter-manifest på ALLA filer. No-loss-koll mot underlags-filens MÅSTE-BEHÅLLAS-listor; **kör pekar-censusen med `--efter` och diffa mot FÖRE-baselinen** (måste bli 0 kvarvarande i AKTIV+REGEL, 0 §-refs utan ägare, 0 refs till raderade filer); header-rad på plats i varje HISTORIK-fil; loggpost enligt nya mallen; radera `lynx-optimering-underlag.php`; push.

**Setup**
- [x] Färdigställ setup & playbook (formel, husröst, ramar, SEO-skydd, §13-skyddsregler, lynx-data.php).

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
- [x] `om-oss.php` — ✅ KLAR (LIVE på main, väntar refresh)
- [x] `hudbehandlingar/ipl/` — ✅ KLAR (LIVE, väntar refresh)
- [x] `ipl-rosacea.php` — ✅ KLAR (LIVE, väntar refresh)
- [x] `mogen-hy.php` — ✅ OMSKRIVEN 2 jul em (alla 5🔴+1🟠 + typos/buggar; §7.4b-verifierad, 5 fynd åtgärdade; prediktion 🟠→🔵) → main, LIVE 6 juli (logg #13); väntar LYNX-refresh
- [x] `hudproblem/oonskat-har/` — ✅ OMSKRIVEN 3 jul (5🔴+2🟠 + lätt hand FAQ/alt-titles; §7.4b-verifierad 3 agenter; prediktion 🟠→🔵; ägar-frågan "underarmar" STÄNGD 3 juli: korrekt svenska, ingen ändring) → main, LIVE 6 juli (logg #13); väntar LYNX-refresh
- [x] `microdermabrasion.php` — ✅ OMSKRIVEN 3 jul (5🔴+1🟠 + lätt hand $model/FAQ/alt; §7.4b-verifierad; prediktion 🟠→🔵; kortpriser rättade till 2595/6995/9995 kr + diamantspets samma dag; AIQ GOOD→OK-frågedetaljen fortfarande obesvarad) → main, LIVE 6 juli (logg #13); väntar LYNX-refresh
- [x] `hudproblem/bristningar/` — ✅ OMSKRIVEN 6 jul (6🔴+1🟠 + lätt hand extended/FAQ/kort; definitionsdubbletten DIFFERENTIERAD, ej ihopslagen — §13.D respekterad; §7.4b-verifierad 3 agenter, 0 allvarliga; prediktion 🟠→🔵) → main, LIVE 6 juli (gaten passerad på ägarbeslut, logg #13); väntar LYNX-refresh (§11 6 jul #7)
- [x] `solskadad-hy.php` — ✅ OMSKRIVEN 6 jul (6🔴+1🟠 + lätt hand; workflow-verifierad 8 granskare, tier 7/7 grönt inkl. 2 HUMAN; prediktion 🟠→🔵) → main, LIVE 6 juli (logg #13); väntar LYNX-refresh
- [x] `rhinophyma-rosacea.php` — ✅ OMSKRIVEN 6 jul (8🔴+2🟠 + hela FAQ:n de-AI:ad; workflow + juridik-agent, 0 allvarliga, gränsfall hedgade; prediktion 🟠→🔵) → main, LIVE 6 juli (logg #13); väntar LYNX-refresh
- [x] `pigmentflackar.php` — ✅ OMSKRIVEN 6 jul em (8🔴+4🟠, KW244, SISTA MODERATE; orsaks-dubbletten differentierad; omgjord V1→V2 efter ägar-feedback "kapa inte info" → längd-disciplin, 0 resonemang tappat, sökfraser bevarade; §7.4b workflow-verifierad; melanom-säkerhetsrad + buggfixar) → main, LIVE 6 jul (logg #13). **Re-scanen 7 jul läste GAMLA texten (logg #14) → V2 OMÄTT; vid NÄSTA AI Copy-refresh: mät FÖRE→EFTER (prediktion 🟠→🔵) + jämför AI STYLE mot 55-baselinen.**

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
- [x] **§1.4 medel-omräkning — GJORD (modellanalysen 2 jul em):** medel FÖLL på 3 av 6 äldre (acne.php 1,75→🟠 vs 🔵 · behandla-pigment 2,3→🟠 vs 🔴 · hudforandringar 2,08→🟠 vs 🔴) → §1.4 nedgraderad till ARBETSMODELL med gråzon 1,9–2,4 (medel 14/17 = median 14/17, disjunkta missar). Full tabell + fällda alternativ-modeller i lynx-examples.
- [ ] **BESTÄLLNING (avgör §1.4-frågan):** be ägaren köra FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan — testar om orapporterade FAQ-svar/versionsskillnad förklarar konflikten. Kombinera med §1.2-beställningen (2–3 färska SCORE-breakdowns varav minst en med AI STYLE beräknad) — **NYTT 6 jul: prioritera ytliga-blodkärls färska nedbrytning (SCORE 74, post-rewrite = AI STYLE-spakens A/B-test, snabbare än att vänta på acne.php).**
- [x] **Homepage-raden i AICOPY-vyn — LÖST 2 jul 14:20 (zoom-dump + ägarbesked):** homepage `/` FINNS i LYNX (VAL 41 · SCORE 28 · GAPS 0/0 · **AI COPY SLIGHT** · AIQ POOR · KW 298); `/behandlingar.php` = **redirect till /hudbehandlingar/** (KW 0 — ingen egen copy att åtgärda). Rad-data i lynx-data. Följd: homepage är INTE AI COPY-flaggad → dess uppsida är SCORE + AIQ (enda POOR-sidan), inte flagg-vinst.
- [ ] **`/varumarken/powerlite-photonova/`:** finns i LYNX/live men INTE i repot — utred (borttagen sida som lever kvar på live? redirect behövs?).
- [ ] **`/varumarken/hifu/`:** nyligen tillagd sida som ännu inte syns i LYNX — bevaka att den indexeras.
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation — bekräftade oförändrade 6 jul) — be om den när om-oss-gapsen ska åtgärdas; §8.1-beslut för om-oss tas då (remiss-/hudläkare-vinkeln är redan sidans positionering → trolig GÖR inom §5, men beslut väntar 4:e punkten + badge-bekräftelsen).
- [x] **pigmentflackar.php borta ur AICOPY-filtret — LÖST 7 jul (logg #14):** raden TILLBAKA (VALUE 32 · SCORE 73 färsk); blank-läget var mycket riktigt pågående omanalys (ägarens metodprincip bekräftad). MEN: re-scanen läste gamla pre-deploy-texten → V2:ns EFTER-facit väntar fortfarande på nästa AI Copy-refresh (badge-kolumnen var dessutom skymd av popupen — okänd). Kvarvarande bevakning ligger på Fas 3-raden i §9.

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**
- [ ] `microneedling.php` (KW70, SCORE 50 färsk; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1). **Rewrite ÅTERRULLAD 2 jul (ägarbesked) — färdig block-plan i §11-posten em #2. 5 språkfel/typos FIXADE separat 2 jul em** (markanden, micronnedling-FAQ:n, slussas-in-kanalerna, våra→vår, utseendet) — kvar: enbart de-AI-omskrivningen.
- [ ] `portomning.php` (KW28, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51→46; SCORE 0 var pågående omanalys/indexering → 69 färsk 7 jul, satte sig själv — ägarbesked 7 jul: 0/blank = LYNX uppdaterar, inte fel; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).
- [x] ~~`mogen-hy.php`~~ — **STALE DUBBLETTRAD (upptäckt 6 jul):** sidan omskrevs 2 jul inkl. språkfelen (se Fas 3-raden [x] ovan + §11 2 jul em #7); låg kvar öppen här av misstag. "Vad betyder hy?"-gapet medvetet lämnat (ägarbeslut 2 jul).

**Löpande / avslut**
- [ ] **Datum-svep i LYNX-filerna (ägarbeställd TODO 7 juli):** skriv ut månadsnamnen retroaktivt i alla egna datum ("2 jul"→"2 juli", "30 jun"→"30 juni" osv.) — mekaniskt städpass i egen commit när det passar; ordagranna LYNX-citat ("Last update: 06 Jul", "Analyzed X ago") lämnas verbatim. Konventionen framåt är redan aktiv (§0).
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [ ] **Gå igenom `hudproblem/hudforandringar/index.php` (mall-review)** — en pre-existerande död debug-rad (`$types_url`, rad 777) läckte en synlig PHP-warning på live (nu borttagen). Kontrollera om mallen har mer cruft/latenta buggar: andra utkommenterade `<?php echo $var ?>`, odefinierade variabler, gamla debug-rester. *(Temporär TODO här tills sidan är genomgången.)*
- [x] (Löst) Filerna är `.php` med `<?php exit;` → renderas tomma på webben; behöver inte raderas.

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

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *FIL-OPTIMERINGSPASSET §9.0 — steg 1–6 klara (5+6 autonomt 8 juli). NÄSTA: steg 7 = START-splitten + `lynx-backlog.php` — **kräver ägaren i rummet** (destruktivt, 50 pekare). Spec + batterier i `lynx-optimering-underlag.php`.* | pågående | 8 juli |

---

