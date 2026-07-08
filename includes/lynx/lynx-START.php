<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX START — router, läge & invarianter (LÄS DENNA FÖRST, alltid)

```
▣ MANIFEST
KIND          REGEL: router · §-KARTA · §0/§0.1/§0.2 · invarianter        AKTIV: LÄGE-bannern
LADDA-NÄR     ALLTID, först. Denna fil säger vad du ska ladda härnäst.
KANONISK-FÖR  §-KARTAN (resolvern) · LÄGE · prime-direktivet · en-i-taget (§0.1) · dispatch-snutten (§0.2) · Aldrig-listan · rollfördelningen · state-synk-principen · struktur-kartan
PEKAR-PÅ      lynx-backlog = arbetet (§8/§9/§12) · lynx-rewrite = hantverket · lynx-models = mät · lynx-data = rådata + §14 · lynx-logg = historik
```

## ▶ ROUTER — vad ska du göra? (läs bara det du behöver)
| Uppgift | Läs |
|---|---|
| **Skriva om en sida** | denna fil (läge+invarianter) → `lynx-backlog.php` (claima i §12, läs sidans rad) → `lynx-rewrite.php` (formel/husröst/ramar/SEO/checklista/process/§13) → sidans facit i `lynx-examples.php` |
| **Analysera mätdata / förfina modeller** | denna fil → `lynx-models.php` (SCORE/AIQ/mät-loop/bevakning) → rådata i `lynx-score.php` · `lynx-examples.php` · `lynx-questions.php` |
| **Spara inkommen LYNX-data** | **§14 SPARA-RECEPT** överst i `lynx-data.php` (save-first) → rätt kolumnfil |
| **Kolla vad som är gjort / nästa** | `lynx-backlog.php` (§8 sidkarta · §9 TODO · §12 claims) + `lynx-logg.php` (historik) |
| **Slå upp ett beslut/varför** | `lynx-logg.php` (arbetslogg) |


**Filkarta (hela LYNX-setet):** `lynx-START` (denna: router/läge/invarianter/§-KARTA) · `lynx-backlog` (sidkarta/TODO/claims) · `lynx-rewrite` (omskrivnings-hantverk) · `lynx-models` (modeller/mät) · `lynx-logg` (historik) · `lynx-log-arkiv` (gammal historik) · `lynx-verktyg` (de tre mekaniska checkarna) · RÅDATA: `lynx-data` (Pages+kolumndefs) · `lynx-score` (SCORE) · `lynx-examples` (AI COPY-facit) · `lynx-questions` (AIQ) · `lynx-gaps` (gaps).
---

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Du är rätt. Kolla routern ovan, ladda bara det uppgiftstypen kräver.

**⚠️ Planen är ITERATIV och aldrig "klar".** Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren klistrar in LYNX-facit som skärmbild eller text. **Avgör alltid FÖRST vad syftet är** — han säger inte alltid rakt ut. **(a) Per sida** = riktat facit → spara baseline, kör §7 på sidan. **(b) Bunt** = många sidors kolumndata → diffa mot AKTUELLT LÄGE i `lynx-data`.
**Oavsett läge: SPARA FÖRST, agera sen.** Hela proceduren — rätt kolumnfil, NYTT/ÄNDRAT-klassningen, skärmbilds-principen — står i **§14 SPARA-RECEPT (`lynx-data.php`, kanonisk)**. Agera aldrig på facit utan att först spara: det är vår enda mätkälla.

> **🟢 LÄGE 2026-07-08** *(ny session: läs denna banner → routern överst → rätt fil för din uppgift; arbetet i `lynx-backlog.php`)*
> - **Mål:** LYNX grönt **utan att skada ranking/trafik**. **RAMEN (verifierad 6 jul):** spaken är SUBSTANS-kvalitet; AI COPY-flaggan är PROXY, Google straffar ej AI-text (lynx-rewrite §1). **SCORE ska INTE jagas** — tak ~75-77 på våra sidtyper, EEAT-badge låst 60 (lynx-score/models).
> - **🎯 Mätt: 6/6 — varje prediktion har träffat.** acne-ansikte 🔴→🔵 · behandla-pigmentflackar 🔴→🔵 (tvåstegs-hopp) · om-oss 🔵 (badge bekräftad 8 juli) · **mogen-hy · solskadad-hy · rhinophyma-rosacea alla 🟠→🔵 den 8 juli.** §1.1 nyckel 1 kausalbelagd. Kvar: pigmentflackar (omanalys) + **AI STYLE-testet på rhinophyma — beställ SCORE-popupen.** *(Cache — kanonisk cell: `lynx-models` §11.1.)*
> - **✅ ALLA flagg-sidor LIVE PÅ MAIN.** Wave 2 (6 Fas 3 + pigmentflackar + småfixar: milier-pris, Google Meet, d3ce9162) **pushad till main 6 jul (ägarbeslut) → VERIFIERAD LIVE PÅ PRODUKTION**: alla 20 ändrade sidor HTTP 200, 0 PHP-fel, nytt innehåll bekräftat (logg #13 produktions-verifiering; staging-kontrollen arkiverad, `lynx-log-arkiv` 6 juli #12). §10.0 GSC-gaten passerad på ägarbeslut. **Kvar på dessa = passiv mät-uppföljning (LYNX-refresh + GSC), ej blockerande.**
> - **SEO-vakt §10.0 = SENARE process (ägarbeslut 6 jul):** GSC + Ahrefs görs som eget pass senare (LYNX-prioritet nu pga refresh-fördröjning). Gaten blockerar inte längre; main-push är ägarens beslut. KW-vakt löpande via LYNX-data kvarstår.
> - **pigmentflackar + rhinophyma re-scannade 7 jul (logg #14):** båda "Last update 06 Jul"-vyerna läste PRE-WAVE-2-texten (crawl daterad 2 jul 16:09–6 jul 16:08 via git) — 18/18 + 16/16 block identiska med gamla faciten (determinism #3+#4; typo-fixar flyttar inte betyg) → **V2-rewriterna fortfarande OMÄTTA; EFTER-facit väntar nästa refresh (crawl efter 6 jul 16:08).** SCORE: pigment 73 = medel(84,60) ✓; AI STYLE-FÖRE-baselines satta (pigment 55, rhino 70).
> - **✅ FIL-OPTIMERINGSPASSET §9.0 KLART 8 juli (steg 1–10).** Arkitekturen är ratificerad och permanentad i §0: lagen **"ett fakta = en cell, celler pekar — återger aldrig"**, KIND-taggar och `▣ MANIFEST` på alla filer. Kvar: ägarens slutgranskning + två raderingsbeslut (stubben, underlagsfilen) + ett innehållsbeslut (`lynx-score` HISTORIK-prosan). **Statusdisciplin (8 juli): kanonisk cell per statusklass, LÄGE = cache — kör `statuskoll.py` före varje main-push.** **Nästa arbete: microneedling (Fas 3b) — REWRITE-SPEC i `lynx-examples`.**
> - **Nästa SIDARBETE (efter passet):** microneedling (block-plan lynx-logg 2 jul em #2; typos redan fixade — kvar = de-AI) → övriga Fas 3b (portomning/acne-rygg/seborroisk-keratos, facit finns) → Tier 1-SLIGHT (rosacea/perioral-dermatit, facit saknas).
> - **Öppna ägar-beställningar:** om-oss badge-rad · acne-ansikte FAQ-facitrest · AI Copy-datum för de 3 kvarvarande SIGNIFICANT · (GSC/Ahrefs = eget senare pass) · boilerplate-sweep "Akne Specialiserade Hudterapeuter" (27 filer — timing-beslut).
> - **Varningar/regler:** 1 Claude i taget (§0.1) · save-first i rätt kolumnfil (filkarta i `lynx-data`) · ny LYNX-skala → färsk-mot-färsk · **attribution kräver observerad delta, ej deploy-timing** · **LYNX uppdaterar per (sida × vy), aldrig i sajt-svep — datera varje cell, EFTER-data droppar in löpande** (lynx-models §11.1) · Fas 3-facit REDAN sparat — be inte igen.
>
> *(Banner-regel 6 jul: LÄGE hålls som punktlista, max ~8 rader. Nya detaljer går till §8/§9/§11/§11.1 — här uppdateras bara STATUSBYTEN. Prosaväggen som stod här förut leder till skumläsning; `lynx-log-arkiv` 6 juli #6.)*

- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt:** fixa just de AI-tells vi kartlagt (§1.1), målinriktat och steg för steg. Största spaken: **led öppningen med mekanism** (§2). Detaljerna i §13.O — prime-direktivet ovan säger resten och står EN gång.
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata:** en fil per LYNX-kolumn (ägarbeslut 2 juli) — **filkarta överst i `lynx-data.php`**, som också bär §14 SPARA-RECEPT.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

### §-KARTA — RESOLVERN (KANONISK CELL)
**Var bor vilket §?** Detta block är den enda källan. Pekar-censusen (`§9.0`) **parsar det** i stället för att hålla en egen kopia — en resolver som dubbleras driftar, och då bevakar verktyget en karta som inte längre gäller. Uppdatera HÄR när ett § flyttar, ingen annanstans.

```
§0, §0.1, §0.2, §0.3            → lynx-START     arkitektur · användning · en-i-taget · dispatch
§14                             → lynx-data      SPARA-RECEPT (save-first vid inkommen dump)
§8, §8.1, §9, §9.0, §9.1, §12   → lynx-backlog   sidkarta · gap-beslut · TODO · prio · claims   [flyttade dit 8 juli]
§1, §1.1, §1.3, §1.4            → lynx-rewrite   bedömningsmodellen
§2, §3, §4, §4.1, §4.2, §5, §6, §7, §13 → lynx-rewrite   formel · checklista · husröst · ramar/juridik · SEO-skydd · process · skyddsregler
§1.2, §1.5, §10, §10.0, §11.1   → lynx-models    SCORE · AIQ · mät-loop · SEO-vakt · bevakning
§11                             → lynx-logg      arbetslogg (HISTORIK)
```
*(Splittrad 2026-07-06. HISTORIK-filer får inte uppdateras retroaktivt — deras §-referenser avser strukturen vid postens datum; se header-raden i respektive arkivfil.)*

---

## 0. Filsetets arkitektur (ratificerad 2026-07-08 — läs en gång, sen räcker manifesten)

**LAGEN: ett fakta = en cell. Uppgifter laddar celler. En cell upprepar aldrig en annan — den pekar.**
Sync-drift uppstår när samma sanning står på två ställen. Skriv den EN gång, låt allt annat peka dit. Det är den enda regel i det här setet som gör en hel felklass omöjlig i stället för bara upptäckbar.

**Varje fil bär ett `▣ MANIFEST` överst:** `KIND` (hur du ska lita på den) · `LADDA-NÄR` · `KANONISK-FÖR` · `PEKAR-PÅ`. Läs manifestet, inte filen, när du letar.

| KIND | Betyder | Filer |
|---|---|---|
| **REGEL** | Stabil. Ändras bara när data motsäger den. Behöver inte re-läsas varje session. | `lynx-rewrite` · `lynx-models` · `lynx-score` (SLUTLÄGE) |
| **AKTIV** | Levande. Re-läs alltid; lita aldrig på minnet av den. | `lynx-backlog` · `lynx-data` · `lynx-examples` · `lynx-gaps` · `lynx-questions` · LÄGE-bannern |
| **HISTORIK** | Append-only. **Uppdateras aldrig retroaktivt** — dess §-referenser avser strukturen vid postens datum. Får inte styra beslut. | `lynx-logg` · `lynx-log-arkiv` · `lynx-data-arkiv` · `lynx-examples-arkiv` |

**Ladda bara det uppgiftstypen kräver** (routern överst är den korta versionen):
| Uppgift | Celler |
|---|---|
| Orientera / "var är vi" | START |
| Vad är gjort / vad är nästa | START + `lynx-backlog` |
| LYNX-dump kommer in | **§14 SPARA-RECEPT** (`lynx-data`) → rätt kolumnfil → `lynx-logg` (POST-MALLEN) |
| SCORE-/AIQ-fråga | `lynx-models` (+ `lynx-score` för härledningen) |
| Skriva om en sida | `lynx-backlog` (claima i §12, läs sidans rad) + `lynx-rewrite` + sidans facit i `lynx-examples` |
| Logga utfall | `lynx-logg` §11, POST-MALLEN |

### Statusdisciplin — en kanonisk cell per statusklass (8 juli)
**Lagen gäller även status — och status är det som ruttnar, för det är status som ändras.** Den 6 juli sa sex sidor "väntar main-push" medan LÄGE sa "live på main". Ingen märkte det på en vecka.

| Statusklass | KANONISK CELL |
|---|---|
| Per-sida mätstatus: MÄTT/OMÄTT · FÖRE-baseline · prediktion | **`lynx-models` §11.1** |
| Är sidan LIVE på main? | **`lynx-models` §11.1**, kolumnen "Main-push" |
| Senaste LYNX-värde per sida × vy | **`lynx-data`** AKTUELLT LÄGE |
| Arbetsstatus: klar · i kö · öppna rester | **`lynx-backlog`** §8/§9 |

**LÄGE-bannern och backloggens sammanfattningar är CACHE.** De får återge status, för en människa vill se läget utan att öppna fyra filer. **Men vid konflikt vinner cellen, aldrig cachen.** Ser du en konflikt: rätta cachen, kör `statuskoll.py`, och lita aldrig på att du var den enda som läste fel.

**Larmet: `statuskoll.py` (i `lynx-verktyg.php`).** Läser den kanoniska cellen och larmar om någon aktiv cell säger emot. Verifierar också att varje omskriven sida HAR en §11.1-rad, och att §-KARTAN pekar på filer som faktiskt bär §:et. **Kör den efter varje statusbyte och alltid före en main-push.** Den hade fångat 6 juli-driften samma dag den uppstod — och när den kördes första gången, 8 juli, hittade den två stale states som överlevt hela städpasset: §10.0 höll tre sidor "på staging" som varit live i två dagar, och rewrite-resultat-tabellen sa "väntar main-push" om en sida live sedan 1 juli.

**Två fällor som kostat oss tid, båda strukturella:**
1. **En öppen tråd får aldrig ha loggen som enda bärare.** Loggen är historik. Skapa §9-raden i `lynx-backlog` först, länka sen.
2. **En pekare som namnger en fil bryts när filen flyttar; en ren `§9` gör det inte** — §-KARTAN är resolvern. Skriv paragraf-numret naket. Skriv aldrig "§N i `<filnamn>`": filen kan flytta, numret gör det inte.

*(Öppen, parkerad: produktifieringen — separera SIGNAL / HANTVERK / SAJTPROFIL, `SCOPE`-taggen bredvid `KIND`. Se `lynx-backlog` §9 Parkerat.)*

---

## 0.1 Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. *(Arbetslistan, gap-besluten och sidprion bor i `lynx-backlog.php`.)* Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**; se över 🔵/🟢 med lätt hand (typo/grammatik/tappat sökord/uppenbar tell) och bedöm sidan som HELHET (§13.D). Enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§11) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **de mest flaggade blocken först** (🟥/🔴 före 🟠); lämna 🔵/🟢 (lätt hand, §13.D).

**State-synk-principen (bevisad 2× den 2 juli):** när ett tillstånd eller en modellslutsats ändras — **greppa filsetet efter den GAMLA frasen** (t.ex. "väntar main-push") och synka ALLA förekomster, även bannern och tabellerna; det är dem en ny session litar på. Iterativa påbyggnader lämnar annars döda imperativ kvar. **Kör `statuskoll.py` efteråt** — den gör grepandet mekaniskt i stället för att förlita sig på att du kom ihåg alla formuleringar.

**Skrivkonvention datum (ägarbesked 7 juli):** i egen text skrivs månaden ut — "2 juli", inte "2 jul" ("vi skriver så mycket så vi kan lika gärna skriva ut hela månaden"; juni/juli förkortas inte på svenska). Ordagranna LYNX-citat ("Last update: 06 Jul") transkriberas verbatim. Gäller framåt direkt; retroaktivt svep av gamla poster = §9-TODO.

**Vad som hör hemma i den här filen (så vi inte rutar in oss):** generella principer, inte engångsiakttagelser. Dyker det upp något på en enskild sida — t.ex. "behövs kommat här?" — är det ett omdöme i stunden, inte en ny regel. Innan en regel läggs till: hjälper den på fler sidor, eller låser den bara fast oss? Hellre få principer + omdöme än en växande lista mikroregler. *(Den gamla komma-efter-sökfras-regeln i §6 var just en sådan över-specificering — den föddes ur ett enskilt "kommat behövdes inte" och togs bort.)*

---

## 0.2 Kör bara 1 Claude i taget (parallellt fungerar inte)
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

## 0.3 Standing dispatch-instruktion — klistra in när du startar en ny exekutor-Claude
Så ägaren slipper upprepa samma sak varje gång. Kopiera detta i första meddelandet till en ny exekutor-Claude:

> Läs `includes/lynx/lynx-START.php` först (läge + router + regler), gå sen till `lynx-rewrite.php` för hantverket och hämta sidans facit i `lynx-examples.php`. Detta är en **iterativ process: små steg, inte stora omskrivningar.** Vi kör 1 Claude i taget — kolla först (`git status` + §12) att ingen annan är igång, markera sen din sida i §12, be mig om sidans LYNX-facit (per-block), följ §7. **Innan du sparar ändringar, fråga dig själv och mig: "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer senare. Behåll varje block, list-punkt och sakpoäng; räkna punkterna före/efter (§13.D). Rör aldrig delade widgets/mallar (§6/§8) eller en sida någon annan claimat.

---

## ▶ ARBETET BOR I `lynx-backlog.php`
**§12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.0 fil-optimeringspasset · §9.1 prioriterad backlog** flyttade dit 8 juli (§9.0 steg 7) så den här filen kan vara en tunn dispatcher.

**Innan du rör något:** `git status` → läs **§12 i `lynx-backlog.php`** (är någon annan igång?) → skriv in din rad. Är raden ifylld när du trodde du var ensam — **stanna och fråga ägaren** (§0.1 regel 2).

---

