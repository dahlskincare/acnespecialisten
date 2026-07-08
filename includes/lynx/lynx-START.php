<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX START — router & invarianter (LÄS DENNA FÖRST, alltid)

```
▣ MANIFEST
KIND          REGEL — stabil. Router · §-KARTA · §0–§0.4 · invarianter. **Bär ingen status; den bor i `lynx-status`.**
LADDA-NÄR     ALLTID, först. Denna fil säger vad du ska ladda härnäst.
KANONISK-FÖR  §-KARTAN (resolvern) · prime-direktivet · sessions-ritualen (§0.1) · en-i-taget (§0.3) · dispatch-snutten (§0.4) · Aldrig-listan · rollfördelningen · state-synk-principen · struktur-kartan
PEKAR-PÅ      lynx-status = VAR VI STÅR (LÄGE + §11.1) · lynx-backlog = TODO (§8/§9/§12) · lynx-rewrite = hantverket · lynx-models = modellen · lynx-data = rådata + §14 · lynx-log = historik
```

## ▶ ROUTER — vad ska du göra? (läs bara det du behöver)
| Uppgift | Läs |
|---|---|
| **Var står vi? Status på en sida?** | **`lynx-status.php`** — enda statuscellen (LÄGE + §11.1) |
| **Skriva om en sida** | denna fil (läge+invarianter) → `lynx-backlog.php` (claima i §12, läs sidans rad) → `lynx-rewrite.php` (formel/husröst/ramar/SEO/checklista/process/§13) → sidans facit i `lynx-examples.php` |
| **Analysera mätdata / förfina modeller** | denna fil → `lynx-models.php` (SCORE/AIQ/mät-loop/bevakning) → rådata i `lynx-score.php` · `lynx-examples.php` · `lynx-questions.php` |
| **Spara inkommen LYNX-data** | **§14 SPARA-RECEPT** överst i `lynx-data.php` (save-first) → rätt kolumnfil |
| **Kolla vad som är gjort / vad som är öppet** | `lynx-status.php` (status) + `lynx-backlog.php` (§8 sidkarta · §9 TODO · §12 claims) |
| **Slå upp ett beslut/varför** | `lynx-log.php` (arbetslogg) |


**Filkarta (hela LYNX-setet):** `lynx-START` (denna: router/invarianter/§-KARTA) · **`lynx-status` (LÄGE + §11.1 — ENDA statuscellen)** · `lynx-backlog` (sidkarta/TODO/claims) · `lynx-rewrite` (omskrivnings-hantverk) · `lynx-models` (modeller/mät) · `lynx-log` (historik) · `lynx-log-archive` (gammal historik) · RÅDATA: `lynx-data` (Pages+kolumndefs) · `lynx-score` (SCORE) · `lynx-examples` (AI COPY-facit) · `lynx-questions` (AIQ) · `lynx-gaps` (gaps).
---

## ▶ START HÄR — för en ny Claude utan kontext
Säger användaren *"vi fortsätter med LYNX-uppgifterna"* eller klistrar in LYNX-data? Du är rätt. Kolla routern ovan, ladda bara det uppgiftstypen kräver.

**⚠️ Planen är ITERATIV och aldrig "klar".** Behandla den som ett levande dokument: hittar du en lucka, en oklarhet eller en bättre modell — **uppdatera filen och logga i §11.** "Klar med en sida" ≠ "klar med planen"; setupen förfinas löpande så länge sidor körs.

**🚦 Prime-direktiv (det ägaren annars måste säga till varje ny Claude): ÄVEN ARBETET är iterativt — små steg, inte stora omskrivningar.** Nya exekutorer skriver nästan alltid om för mycket. Därför, **innan du sparar en ändring: fråga dig själv OCH ägaren "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer när mät-loopen (§10) visar att det krävs, men bortskuren substans är svår att få tillbaka. Behåll varje block, varje list-punkt och varje sakpoäng; **räkna punkterna före/efter** (§13.D). Längden får bli kortare *eller* längre — det som skadar är att ta bort för mycket på en gång (§13.O). Det här är den enskilt viktigaste vanan; den slår alla stilregler nedan.

**📥 Facit-flöde (så mätdata kommer in — LYNX saknar export):** ägaren klistrar in LYNX-facit som skärmbild eller text. **Avgör alltid FÖRST vad syftet är** — han säger inte alltid rakt ut. **(a) Per sida** = riktat facit → spara baseline, kör §7 på sidan. **(b) Bunt** = många sidors kolumndata → diffa mot AKTUELLT LÄGE i `lynx-data`.
**Oavsett läge: SPARA FÖRST, agera sen.** Hela proceduren — rätt kolumnfil, NYTT/ÄNDRAT-klassningen, skärmbilds-principen — står i **§14 SPARA-RECEPT (`lynx-data.php`, kanonisk)**. Agera aldrig på facit utan att först spara: det är vår enda mätkälla.


- **Uppdrag (pågår tills allt är klart):** skriv om sidor som LYNX flaggar för AI COPY (SIGNIFICANT/MODERATE) så varje textblock når **minst SLIGHT** (HUMAN där blocket naturligt tillåter, §1.1) och läser som människa, **utan att tappa sökord/ranking**. **Slutmål: LYNX helt grönt/korrekt** på alla signaler — AI COPY först → FAQPage-schema (AI QUESTIONS) → `$rich_product` (PAGE TYPE/P. PRICE) → gap-punkter → sedan löpande. **Status & nästa sida:** §9 (TODO), §11 (logg/baseline), §12 (claims).
- **Trigger per sida: hämta ALLTID sidans NUVARANDE LYNX per-block-status FÖRST, innan du redigerar** — inte "lär modellen en gång och kör resten på egen bedömning"; dra in LYNX för varje sida. Följ §7: spara baseline (§11) → **prioritera 🔴/🟠/🟥 (skriv om dem), men se ÄVEN över 🔵/🟢 med LÄTT HAND** (bara tydliga fixar: typo, grammatik, tappat sökord, uppenbar tell; INGEN stilistisk över-omskrivning av OK-block = v3-felet, §1.3) enligt §2 + §4 + §5 → kör §3 + §6 + §13 → logga (§11) → committa + pusha **`staging`**. *(Saknas facit: gissa med §1.3-modellen (±1-band, ej facit), lämna hellre vid SLIGHT↔MODERATE-tvivel.)*
- **Arbetssätt:** fixa just de AI-tells vi kartlagt (§1.1), målinriktat och steg för steg. Största spaken: **led öppningen med mekanism** (§2). Detaljerna i §13.O — prime-direktivet ovan säger resten och står EN gång.
- **Rollfördelning:** du fixar sidor + pushar `staging`; användaren verifierar + pushar `main`. **Rör aldrig `main`.** LYNX ser bara live, så effekt mäts efter användarens main-push + LYNX-refresh.
- **Rådata:** en fil per LYNX-kolumn (ägarbeslut 2 juli) — **filkarta överst i `lynx-data.php`**, som också bär §14 SPARA-RECEPT.
- **Aldrig:** medicin/cancer-påståenden · aktiva ingredienser · em-streck · hudterapeutnamn · korta ner sidor (täthet = substans, §13.N) · tappa målfraser (§6) · röra delade widgets/mallar.

---

### §-KARTA — RESOLVERN (KANONISK CELL)
**Var bor vilket §?** Detta block är den enda källan. Uppdatera HÄR när ett § flyttar, ingen annanstans. *(Kartan är exakt härledbar ur filernas egna rubriker — mätt 8 juli, 33/33. Skriv ändå aldrig en detektor som vaktar den: det vore att vakta en dubblett, se §9.)*

```
§0, §0.1, §0.2, §0.3, §0.4      → lynx-START     arkitektur · SESSIONS-RITUALEN · användning · en-i-taget · dispatch
§14                             → lynx-data      SPARA-RECEPT (save-first vid inkommen dump)
§8, §8.1, §9, §9.0, §9.1, §9.2, §9.3, §12 → lynx-backlog   sidkarta · gap-beslut · TODO · prio · FYNDLÅDAN · PARKERAT-META · claims
§1, §1.1, §1.3, §1.4            → lynx-rewrite   bedömningsmodellen
§2, §3, §4, §4.1, §4.2, §5, §6, §7, §13 → lynx-rewrite   formel · checklista · husröst · ramar/juridik · SEO-skydd · process · skyddsregler
§1.2, §1.5, §10, §10.0          → lynx-models    SCORE · AIQ · mät-loop · SEO-vakt
§11.1                           → lynx-status      bevakningslistan (per-sida STATUS)
§11                             → lynx-log      arbetslogg (HISTORIK)
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
| **AKTIV** | Levande. Re-läs alltid; lita aldrig på minnet av den. | **`lynx-status`** · `lynx-backlog` · `lynx-data` · `lynx-examples` · `lynx-gaps` · `lynx-questions` |
| **HISTORIK** | Append-only. **Uppdateras aldrig retroaktivt** — dess §-referenser avser strukturen vid postens datum. Får inte styra beslut. | `lynx-log` · `lynx-log-archive` · `lynx-data-archive` · `lynx-examples-archive` |

**Ladda bara det uppgiftstypen kräver** (routern överst är den korta versionen):
| Uppgift | Celler |
|---|---|
| Orientera / "var är vi" | **`lynx-status`** |
| Vad är gjort / vad är nästa | START + `lynx-backlog` |
| LYNX-dump kommer in | **§14 SPARA-RECEPT** (`lynx-data`) → rätt kolumnfil → `lynx-log` (POST-MALLEN) |
| SCORE-/AIQ-fråga | `lynx-models` (+ `lynx-score` för härledningen) |
| Skriva om en sida | `lynx-backlog` (claima i §12, läs sidans rad) + `lynx-rewrite` + sidans facit i `lynx-examples` |
| Logga utfall | `lynx-log` §11, POST-MALLEN |

### Statusdisciplin — en kanonisk cell per statusklass (8 juli)
**Lagen gäller även status — och status är det som ruttnar, för det är status som ändras.** Den 6 juli sa sex sidor "väntar main-push" medan LÄGE sa "live på main". Ingen märkte det på en vecka.

| Statusklass | KANONISK CELL |
|---|---|
| Per-sida mätstatus: MÄTT/OMÄTT · FÖRE-baseline · prediktion | **`lynx-status`** §11.1 |
| Är sidan LIVE på main? | **`lynx-status`** §11.1, kolumnen "Main-push" |
| Senaste LYNX-värde per sida × vy | **`lynx-data`** AKTUELLT LÄGE |
| Arbetsstatus: klar · i kö · öppna rester | **`lynx-backlog`** §8/§9 |

**Från 8 juli bor status i EN fil: `lynx-status`.** LÄGE-bannern och §11.1-tabellen ligger där tillsammans, så en människa ser läget utan att öppna fyra filer — **och det finns inget att synka mellan filer.** Det var ägarens beslut, och det stänger den sista sömmen: den 6 juli sa sex sidor "väntar main-push" medan bannern sa "live", i två olika filer. Nu kan de inte göra det.

**Kvar att städa (§9.3):** `lynx-backlog`, `lynx-data` och `lynx-examples` bär fortfarande varsin återgivning av MÄTT/OMÄTT. **Ser du en: ta bort den och peka på `lynx-status`.** Vid konflikt vinner cellen, aldrig återgivningen.

**Ändrar du en status: greppa filsetet efter den GAMLA formuleringen och synka alla förekomster** (§0.2 state-synk-principen). Det görs för hand. Ett skript försökte göra det 8 juli och kunde bara känna igen tre exakta strängar — *"väntar på main-push"* med ett inskjutet ord passerade tyst (§9, V5). **Ögat som letar efter meningen slår en nål som letar efter en sträng.**

**Två fällor som kostat oss tid, båda strukturella:**
1. **En öppen tråd får aldrig ha loggen som enda bärare.** Loggen är historik. Skapa §9-raden i `lynx-backlog` först, länka sen.
2. **En pekare som namnger en fil bryts när filen flyttar; en ren `§9` gör det inte** — §-KARTAN är resolvern. Skriv paragraf-numret naket. Skriv aldrig "§N i `<filnamn>`": filen kan flytta, numret gör det inte.

*(Öppen, parkerad: produktifieringen — separera SIGNAL / HANTVERK / SAJTPROFIL, `SCOPE`-taggen bredvid `KIND`. Se `lynx-backlog` §9 Parkerat.)*

---

## 0.1 SESSIONS-RITUALEN — kolla, fråga, spara (ägarbeslut 8 juli)

### ▶ VID START — säg hej FÖRST, sedan tre steg

**Innan du kör ett enda kommando: skriv en kort rad till ägaren.** Hälsa och säg vad du gör härnäst — att du kollar att ingen annan är igång och läser läget innan du visar kön. Två meningar räcker.

Varför regeln finns (ägarbesked 8 juli): ritualen är tre tysta verktygsanrop. Utan en rad först ser ägaren bara filer öppnas och vet inte om du förstod uppgiften eller redan börjat ändra något. **Han ska aldrig behöva gissa vad som pågår i hans eget repo.**

1. **Kolla att du är ensam.** `git status` (rent?) + **§12 i `lynx-backlog`** (är någon annan igång?). Ser du osparat jobb du inte känner igen → stanna och fråga ägaren (§0.3).
2. **Läs `lynx-status.php`** (var vi står) och §9 (TODO). Där står vad som är **öppet** — inte vad som är bestämt.
3. **Visa ÖPPNINGSLISTAN och fråga vad han vill göra.** Ägaren väljer; du föreslår. Han svarar antingen på listan **eller skickar en uppgift direkt**, ofta inklistrad LYNX-data. Kommer data: **§14 SPARA-RECEPT först, agera sen.**

#### ▶ ÖPPNINGSLISTAN — formatet ägaren bad om (ägarbeslut 8 juli)
Hälsningen är redan sagd (se ovan). Här kommer resultatet: en rad om att repot är rent, sedan **EN enda löpande numrering hela vägen ned** — grupprubrikerna bryter inte numret. Först allt öppet ur §9, sist vad du kan göra. Två listor som båda börjar på 1 krockar; det var felet ägaren pekade på.

**Generera listan ur §9 varje gång — skriv aldrig av den hit.** §9 är cellen; den här filen säger bara hur den ska visas. En kopia av kön i START vore precis den återgivning §0 förbjuder, och den skulle ruttna första gången en rad kryssas.

Grupper i ordning, med sina etiketter intakta: **Sidarbete** · **Väntar på dig** (ägar-beställningar) · **Mätning och bevakning** · **Parkerat** · **Fyndlådan** · sist **Vad jag kan göra**, som fortsätter på nästa lediga nummer.

**Spärren gäller i listan.** §9.3-metat får **en rad under Parkerat, med sin etikett "bara på din begäran"** — aldrig utbrutet i egna numrerade alternativ, aldrig högt upp. Listan är en **orientering, inte en meny**: den säger vad som finns, inte vad du föreslår att han väljer. Skillnaden är hela §0.1.

**Vad jag kan göra** (KANONISK CELL — står bara här, härled inget ur routern):
ta emot LYNX-data (§14 först, agera sen) · skriva om en sida (§7) · micro-fix på ett enskilt block · svep över flera filer i egen commit (juridik/språk) · fixa buggar i siddata (§13.K) · analysera mätdata och förfina modellen (§10) · slå upp ett beslut och varför i `lynx-log` · committa och pusha `staging` — **aldrig `main`**.

> ### 🚧 SPÄRREN — varför den ser ut så här (ägarbeslut 8 juli)
> **Arbete på LYNX-filerna själva föreslås ALDRIG.** Verktyg, struktur, städning, revisioner: allt sådant bor i **§9.3 PARKERAT-META** och tas därifrån **bara om ägaren ber om det med egna ord.** Kön i §9 innehåller sidor.
>
> **Varför inte bara en regel till:** §0.1 innehöll redan *"ett fynd är inte ett uppdrag"* och *"ett verktyg är inte ett mål"*. Båda skrevs 8 juli. Båda bröts 8 juli. **En regel du ska komma ihåg är inte ett skydd** — det står i den här filen, och det gäller den här filen. Driften kom inte ur att någon glömde en regel; den kom ur att **ett meta-projekt stod "FÖRST I KÖN" och därför erbjöds ägaren som ett alternativ bland andra.** Ta bort seedet, inte symptomet.
>
> **Utfallstestet, mätbart på fem sekunder — kör det innan du säger att sessionen gick bra:** `git diff --stat` över sessionens commits. **Rör diffen bara `includes/lynx/` har uppdraget inte flyttat sig.** Det är inte förbjudet. Men säg det rakt ut till ägaren i stället för att låta tre gröna commits se ut som framsteg.

*(Här stod till 8 juli en fjärde startpunkt: kör tre mekaniska checkar. De är raderade — §9.)*

### ▶ UNDER ARBETET — ETT FYND ÄR INTE ETT UPPDRAG (ägarbeslut 8 juli)
**Du kommer att hitta saker. Det är bra — och det är inte det du blev ombedd att göra.**

Hittar du något äkta mitt i en uppgift: **skriv EN rad i §9.2 FYNDLÅDAN, säg EN mening till ägaren, fortsätt med uppgiften.** Utreder gör du bara om han säger till. En tråd som parkeras förlorar ingenting; en uppgift som överges halvvägs gör det. Lådan är default — **ett fynd tas ur den bara genom ägarbeslut**, aldrig för att det kändes viktigt i stunden. *(Varför en §9-rad och inte en logg-post: §0:s två strukturella fällor.)*

**Ett verktyg är inte ett mål.** Får du en snabbare metod — fler agenter, ett bredare svep, en ny modell — är det tillstånd att göra **den valda uppgiften** fortare. Det är aldrig tillstånd att välja en större uppgift. Fråga innan du breddar, särskilt när frågan var liten: glappet mellan "städa en rad" och "revidera verktygen" är där ägaren slutar lita på att scopet håller.

**Står det en arbetsmetod i en projektfil binder den**, även när ett glänsande alternativ finns. *(`§9.0`: "ETT steg i taget med ägar-avstämning emellan · INGA agent-utskick" — läst och förbigången samma dag den här regeln skrevs.)*

> **Varför regeln finns.** 8 juli: uppgiften var en halvtimme (städa §9.0:s dubblerade steg 7/8). På vägen dit hittades en död detektor — ett verkligt fynd. I stället för en §9-rad skickades **21 agenter** för att revidera samtliga detektorer i alla tre skripten. Fyndet var äkta; hanteringen var fel. **Uppgiftens andra halva — §9.0:s fyra raderingsbeslut — blev aldrig påbörjad.** Ägaren fick bevaka scopet själv, vilket är hans ord: *"därför måste jag kolla när det växer."* Prime-direktivets *"nya exekutorer skriver nästan alltid om för mycket"* handlar om text; det beskriver scope lika väl.

**Frågan att ställa innan du bygger något som vaktar arbetet:** *vad är det som ändras, och ändras det fortfarande?* Vaktar verktyget ett pass som redan är genomfört är det skuld, inte skydd — det skriver grönt och lär nästa session falsk tillit. Det var därför de tre checkarna raderades 8 juli (§9). **Sidorna är uppdraget. Filerna är arbetsmaterial. Verktyg kring filerna är tredje ledet, och nästan alltid fel svar.**

### ✅ VID SLUT — spara och pusha, alltid
**Varje uppgift avslutas med commit + `git push` på `staging`.** Osparat arbete är den enda förlust som är oåterkallelig. **Rör aldrig `main`** — ägaren pushar dit.

Vid **sidarbete** gäller dessutom före commit: §13.E · §7.4b · §6:s fras-koll. De skyddar ranking och juridik — det enda som faktiskt kan skada något utanför de här filerna.

*(Ingen mekanisk slutcheck finns längre. Se §9 CHECK-REVISIONEN för varför: de tre checkarna vaktade §9.0:s omstrukturering, den är gjord, och de bevisades rapportera grönt på ett filset där 97 % av innehållet var borta. Bokföringsmissar lagas nästa session; en tappad ändring kan inte lagas.)*

**Om `.py`-filer:** allt LYNX-arbete stannar i `includes/lynx/*.php` — inga andra filtyper i repot, inga git-hooks, ingen git-konfiguration (ägarbeslut 8 juli). Behöver du ett engångsskript: lägg det i en temp-katalog utanför projektet och kasta det.

---

## 0.2 Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. *(Arbetslistan, gap-besluten och sidprion bor i `lynx-backlog.php`.)* Skriv om de **LYNX-flaggade blocken (🔴/🟠/🟥)**; se över 🔵/🟢 med lätt hand (typo/grammatik/tappat sökord/uppenbar tell) och bedöm sidan som HELHET (§13.D). Enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§11) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **de mest flaggade blocken först** (🟥/🔴 före 🟠); lämna 🔵/🟢 (lätt hand, §13.D).

**State-synk-principen (bevisad 2× den 2 juli):** när ett tillstånd eller en modellslutsats ändras — **greppa filsetet efter den GAMLA frasen** (t.ex. "väntar main-push") och synka ALLA förekomster, även bannern och tabellerna; det är dem en ny session litar på. Iterativa påbyggnader lämnar annars döda imperativ kvar. **Greppa på flera formuleringar, inte en** — samma sak sägs på fem sätt, och det var precis där ett skript gick bet (§9, V5).

**Skrivkonvention datum (ägarbesked 7 juli):** i egen text skrivs månaden ut — "2 juli", inte "2 jul" ("vi skriver så mycket så vi kan lika gärna skriva ut hela månaden"; juni/juli förkortas inte på svenska). Ordagranna LYNX-citat ("Last update: 06 Jul") transkriberas verbatim. Gäller framåt direkt; retroaktivt svep av gamla poster = §9-TODO.

**Vad som hör hemma i den här filen (så vi inte rutar in oss):** generella principer, inte engångsiakttagelser. Dyker det upp något på en enskild sida — t.ex. "behövs kommat här?" — är det ett omdöme i stunden, inte en ny regel. Innan en regel läggs till: hjälper den på fler sidor, eller låser den bara fast oss? Hellre få principer + omdöme än en växande lista mikroregler. *(Den gamla komma-efter-sökfras-regeln i §6 var just en sådan över-specificering — den föddes ur ett enskilt "kommat behövdes inte" och togs bort.)*

---

## 0.3 Kör bara 1 Claude i taget (parallellt fungerar inte)
**Beslut 2026-07-01:** kör **en** instans åt gången. Parallellt testades (ipl-rosacea på en andra terminal) och krockar: även när två Claude jobbar på *olika* sidor tvingas båda skriva i samma **processfiler** — §11-loggen, §12, `lynx-data.php`, `lynx-examples.php`, backlog-statusen (§8/§9). Sido-isoleringen räcker inte när själva processen delar filer (kollision på både playbooken och lynx-examples 1 jul, löst manuellt utan dataförlust men onödigt kört). Så: en i taget.

Filsetet är självbärande — en ny Claude utan kontext läser START först (router → rätt fil) och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — dessa filer gäller.)

Regler:
1. **Läs denna START-fil (router/läge/invarianter) + §12 i `lynx-backlog.php` (status) först; slå upp `lynx-log` vid behov.** På annan dator: `git pull` innan du börjar.
2. **Du ska vara ENSAM — kontrollera det först.** Kör `git status` (finns ändrade/ostaged filer du inte själv rört?), kolla §12 i `lynx-backlog.php` (aktiv rad?) och senaste §11-logg/commits — hela ritualen står i §0.1. Ser du tecken på en annan instans, eller osparat jobb du inte känner igen → **stanna och fråga ägaren** innan du rör något. Anta aldrig att du är ensam.
3. **Markera vad du jobbar med i §12 (`lynx-backlog.php`) innan du börjar** (sida · status · tid); töm raden när du är klar (logga i §11). Så ser nästa session var förra slutade.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (`lynx-log`) + §12 (`lynx-backlog`) när du är klar, sen `git push`.
6. Följ §2–§6 exakt, så blir rösten enhetlig.

---

## 0.4 Standing dispatch-instruktion — klistra in när du startar en ny exekutor-Claude
Så ägaren slipper upprepa samma sak varje gång. Kopiera detta i första meddelandet till en ny exekutor-Claude:

> Läs `includes/lynx/lynx-START.php` först (läge + router + regler), gå sen till `lynx-rewrite.php` för hantverket och hämta sidans facit i `lynx-examples.php`. Detta är en **iterativ process: små steg, inte stora omskrivningar.** Vi kör 1 Claude i taget — kolla först (`git status` + §12) att ingen annan är igång, markera sen din sida i §12, be mig om sidans LYNX-facit (per-block), följ §7. **Innan du sparar ändringar, fråga dig själv och mig: "ändrar jag för mycket?"** Ta hellre bort för lite — vi kan alltid kapa mer senare. Behåll varje block, list-punkt och sakpoäng; räkna punkterna före/efter (§13.D). Rör aldrig delade widgets/mallar (§6/§8) eller en sida någon annan claimat.

---

## ▶ ARBETET BOR I `lynx-backlog.php`
**§12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.0 fil-optimeringspasset · §9.1 prioriterad backlog** flyttade dit 8 juli (§9.0 steg 7) så den här filen kan vara en tunn dispatcher.

**Innan du rör något:** `git status` → läs **§12 i `lynx-backlog.php`** (är någon annan igång?) → skriv in din rad. Är raden ifylld när du trodde du var ensam — **stanna och fråga ägaren** (§0.1 regel 2).

---

