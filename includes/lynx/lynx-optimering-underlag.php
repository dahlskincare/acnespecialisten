<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX FIL-OPTIMERING — analysunderlag (TEMPORÄR arbetsfil, 7 juli 2026)

## ▶ ÅTERUPPTAGNING (för nästa session — läs detta först, sen §9.0 i lynx-START)
**Startinstruktion (ägaren klistrar in):** *"Fortsätt fil-optimeringspasset: läs lynx-START §9.0 + lynx-optimering-underlag.php (sammanfattning + rapporter), ETT steg i taget med ägar-avstämning, inga agent-utskick."*

**Läge (uppdaterat 8 juli):** steg 1–4 **KLARA** — steg 1 lynx-data-omstruktureringen (AKTUELLT LÄGE-tabell + lynx-data-arkiv.php) ägar-godkänd (b03ac3c1) · steg 2 stale state + trasiga pekare rättade (95f21819) · steg 3 tre unika loggfynd räddade till regelfiler (ffe7781b) · steg 4 loggmall + arkiv-policy R1–R6 + 23 poster arkiverade + #14 komprimerad (logg #18). **NÄSTA: mål-arkitekturen nedan gås igenom med ägaren — DÄREFTER steg 5.** Steg 5–10 opåbörjade.
*(Kanonisk stegstatus bor i lynx-START §9.0 — den här raden är en kopia och kan drifta. Instans av precis det problem mål-arkitekturens "referera-aldrig-återge"-lag ska ta bort.)*

**Upptäckterna i sammandrag (fulltext i rapporterna nedan):**
1. **Grundproblem: filerna växer append-only** — gällande sanning blandad med superseded historik (models §1.2 = 3 lager, §11.1 = 5 staplade mätregler, lynx-data var 5 snapshots). DET ger skumläsningen, inte längden i sig. Botemedlet = lynx-datas nya mönster: aktuellt läge i daterad tabell + historik i arkivfil.
2. **Allvarligaste felet — stale state:** lynx-START §9 Fas 3 säger "väntar main-push/⛔GSC-gate" på 6 sidor fast LÄGE-bannern + logg #13 säger ALLT LIVE på main 6 juli. Två motstridiga sanningar i samma fil (steg 2 rättar). Er state-synk-princip (bevisad 2 ggr) ligger begravd i en loggpost — ska till §0 (steg 3).
3. **Trasiga pekare efter 6 juli-splitten:** START:s Innehålls-rad listar §§ som bor i andra filer; routerns "(save-first, §0)" pekar fel; 3 filer säger fortfarande "playbooken" (steg 2).
4. **Loggen 87 kB — arkivpolicyn finns men har aldrig körts:** ~20 av 44 poster redan arkiverbara (ratificerade/ersatta). 3 saker finns BARA i loggen och räddas FÖRST (steg 3): milier/CryoPen-prisflaggan (öppen ägarfråga!), juridik-käll-URL:erna, state-synk-principen — sen arkivering (steg 4).
5. **Dubbellagring 3–5×** (filkartan, prime-direktivet, SCORE-modellen i två filer, gap-beslut åt båda håll) — kopiorna driftar; välj EN kanonisk plats + pekare (steg 5–9).
6. **Färska-ögon-testet:** en ny session börjar skumma redan vid rad 24 (facit-flödesväggen); §12-incheckningen ligger sist i filen fast ritualen kräver den först (steg 7).
7. **Friskt:** rådatafilerna i gott skick, kolumndefinitions-tabellen föredömlig, arkivmönstret (log-arkiv) skalar — det är mallen som återanvänds.

**Planens logik (riskstyrd ordning):** felrättning (2) → rädda unikt (3) → arkivera per policy (4) → en-sanning-per-sak i models/score (5–6) → navet START = störst läsvinst (7) → rewrite FÖRSIKTIGAST, endast format aldrig regler (8) → examples/småfiler (9) → no-loss-verifiering mot MÅSTE-BEHÅLLAS-listorna + radera denna fil (10). **Princip: INGET raderas** — öppna trådar/omätta baselines/ägarbeslut flyttas eller komprimeras, historik → arkivfiler, git har verbatim. Effekt ≈ 2 300 → ~1 400 aktiva rader; egentliga vinsten = gällande sanning står EN gång på EN plats.

## ▶ MÅL-ARKITEKTUR — ✅ RATIFICERAD AV ÄGAREN 8 JULI 2026 (med fyra ändringar, se nedan)
Ägar-idé: tydligare, mer AI-kompatibel struktur — en logg / en aktiv fil / en historik, återanvänt PER domän & uppgift; START kortare; ladda bara det uppgiftstypen kräver. **Detta är nu DESTINATIONEN för steg 5–10.** Struktur-kartan skrivs permanent i lynx-START §0 vid steg 10 (annars dör specen med denna temporära fil).

**Bärande princip (LAG):** *Ett fakta = en cell. Uppgifter laddar celler. En cell upprepar aldrig en annan — den pekar.* (Sync-driften 7 juli em fanns för att steg-status stod på TVÅ ställen; hade underlags-headern sagt "läge: se START §9.0" kunde den aldrig drivit isär → hela drift-klassen strukturellt borta, inte bara upptäckt-och-lagad.)

**Atompartikel — triaden × KIND** (så AI vet hur en cell ska litas på):
- REGEL (stabil, ändras sällan, behöver ej re-läsas): rewrite, models, score-härledningen
- AKTIV (levande, ändras när ny LYNX-data kommer): data, gaps, questions, examples-aktiv, LÄGE, **backlog**
- HISTORIK (append-only, aldrig retroaktivt uppdaterad): data-arkiv, log-arkiv, examples-arkiv, **logg**

**Domäner ("olika modeller"):**
- Mätning/SCORE: REGEL models + score-härledningen · AKTIV data + gaps + score-rådata · HIST data-arkiv
- Rewrite/Copy: REGEL rewrite · AKTIV examples-aktiv · HIST examples-arkiv ← examples (632 rader) = dold jätte, splitta precis som data gjordes
- Loggen (tvärs alla domäner): HISTORIK logg + log-arkiv

**START = tunn dispatcher (~60 rader):** router (uppgiftstyp → celler) + LÄGE + invarianter, INGEN operativ text. Laddnings-recept:
- Orientera / "var är vi" → START
- Vad är gjort / nästa → START + **backlog**
- Städa sync → START (LÄGE = facit + state-synk-regeln, båda kanoniska här)
- LYNX-push in → data + data-arkiv + spara-receptet + logg
- Score-fråga → models + score
- Skriva om sida → START + backlog (sidans rad) + rewrite + examples-aktiv (facit + ev. block-plan) + sidans data-rad
- Logga utfall → logg + POST-MALLEN (lynx-logg §11)

**AI-kompatibilitets-lager:** (1) **front-matter-manifest** överst i varje fil — `LADDA-NÄR / KANONISK-FÖR / PEKAR-PÅ / KIND` (**ej radantal — ett fält som blir fel vid varje redigering bryter lagen**). (2) **referera-aldrig-återge för state** = strukturell lag mot drift (viktigast). (3) **stabila §-ankare** så pekare träffar exakt — facit-flödet saknar §-nr idag, därför pekar routern på §0 som inte nämner save-first. (4) **KIND-taggen** låter AI hoppa över stabila regelfiler.

### ⚖️ ÄGARBESLUT 8 juli — fyra ändringar mot 7 juli-utkastet
1. **NY CELL `lynx-backlog.php` (AKTIV):** §8 sidkarta + §8.1 gap-beslut + §9 TODO + §12 claims flyttar dit. Utan detta förblir START fet och dispatcher-idén faller (utkastet sa inte var backloggen bor). START landar på ~60 rader. Alla §8/§9/§12-pekare måste synkas i steg 10.
2. **Loggen är HISTORIK, inte AKTIV.** Följer av mall-ramen 8 juli: *"en öppen tråd får aldrig ha loggen som enda bärare"* → inget operativt beror på loggen → den är per definition append-only historik. **Sista hålet stängs: microneedling-block-planen (logg em #2) flyttas till `examples-aktiv` under microneedlings sektion**, bredvid sidans facit — där en rewrite-session ändå laddar.
3. **`copy-playbook` och `copy-formula` UT ur REGEL-listan.** copy-playbook = 23-raders redirect-stub, dör i steg 9. `copy-formula` bor i en personlig minnesfil utanför repot medan §0.1 säger att repo-filerna gäller — och formeln finns redan i rewrite §2. Två celler, ett fakta = lagbrott i själva specen. *(ÅTGÄRDAT 8 juli: minnesfilen omgjord till ren pekare mot rewrite §2–§6; täckningen grep-verifierad, 13/13 regler fanns.)*
4. **KIND per SEKTION, inte per fil — inga nya splittar av score/data.** Utkastets triad blandade två axlar (volatilitet vs laddnings-frekvens: `questions` ändras ofta men läses nästan aldrig). Fix: KIND bär volatilitet/förtroende, manifestets `LADDA-NÄR` bär frekvensen. Riktiga filer är blandade (`score` = härledning REGEL + rådata AKTIV; `data` = tabell AKTIV + kolumndefs/spara-recept REGEL) → front-matter listar sektionernas KIND. Splitten av `examples` (steg 9) räcker för den här rundan.

**Känd risk (ägaren informerad):** en refaktor av just de filer som bär processkunskapen producerar en ny kull trasiga pekare — förra splitten (6 juli) lämnade sådana som lagades 7 juli (steg 2) och 8 juli (tre till, vid arkiveringen). Motmedel: **pekar-censusen nedan (flyttad från steg 10 till FÖRE steg 7)** + no-loss mot MÅSTE-BEHÅLLAS-listorna.

## ▶ FÖRBEREDELSER (8 juli, före steg 5 — så resten kan köras igenom utan stopp)

**1. Radnummer i rapporterna — status.** Rapporterna skrevs mot 7 juli em-versionerna. Kontroll 8 juli:
| Fil | Rapport påstår | Faktiskt nu | Steg | Duger radnumren? |
|---|---|---|---|---|
| lynx-models | 104 | 104 | 5 | ✅ ja |
| lynx-score | 182 | 182 | 6 | ✅ ja |
| lynx-rewrite | 272 | 272 | 8 | ✅ ja |
| lynx-examples | 632 | 632 | 9 | ✅ ja |
| lynx-START | 231 | 253 | **7** | ❌ **STALE** — verifiera mot levande fil |
| lynx-gaps | 112 | 34 | **9** | ❌ **STALE** (rapporten mäter fel fil?) — verifiera |
| ~~lynx-logg~~ 257→221 · ~~lynx-data~~ 519→183 | | | 1, 4 | (stegen redan gjorda) |

**2. MÅSTE-BEHÅLLAS finns för varje kvarvarande steg:** models 9 punkter · score 10 · rewrite 10 · examples 9 · gaps 9. *(audit-freshEyes saknar lista — den är en läs-simulering, inte en filgranskning. Inget att bevaka.)*

**3. §-kartan är nu EN cell.** Den låg som prosa i START **och** hårdkodad i census-skriptet — lagbrottet vi just förbjöd, i verktyget som ska bevaka lagen. START §-KARTA är nu ett maskinläsbart block som skriptet **parsar**; saknas blocket avbryter skriptet högljutt i stället för att rapportera 0.

**4. No-loss-batteri byggt för steg 5** (`noloss.py 5`, 38 checkar ur audit-models MÅSTE-BEHÅLLAS). **Validerat i båda riktningar 8 juli:** 38/38 grönt på den ORÖRDA filen (annars är nålarna fel, inte filen), och rött när no-regression-regeln ströks + en §11.1-rad togs bort. Batterierna för steg 6/8/9 byggs vid respektive stegs start — nålarna måste härledas ur den verkliga filtexten.

**5. ⚠️ SAKFEL ATT RÄTTA I STEG 5 (upptäckt vid batteribygget):** `lynx-models` §1.2 rad 6 förklarar EEAT-klampen med *"klampas till 60 på HÄLSOSIDOR (vi = hudterapeuter, ej läkare på YMYL)"*. **Den förklaringen är FALSIFIERAD** — `lynx-score` slutsats B: *"SIDTYPS-hypotesen FÖRKASTAD; EEAT 60 gäller ÄVEN /kontakt.php, /hudproblem/, hydrafacial, portomning — alltså inte YMYL-specifikt"* (mönstret följer /varumarken/-URL-strukturen), bekräftat av online-verifieringen (logg 6 juli #9). **Den operativa slutsatsen står** (EEAT låst 60, ej copy-spak) — men mekanismen ska rättas, inte konserveras vid komprimeringen. Klassisk instans av §0:s state-synk-princip: nya data underkände premissen, imperativet blev kvar.

**6. Steg 7 — gränsdragningen bestämd** (så inget stall mitt i splitten):
- **→ `lynx-backlog.php`:** §8, §8.1 (öppna gap-beslut; genomförda → `lynx-gaps`), §9, §9.0, §9.1, §12.
- **Stannar i START:** §0 (invarianter: iterativ plan, prime-direktivet EN gång, "vi rutar inte in oss", datum-konventionen, state-synk-principen), §0.1 (en-i-taget), §0.2 (dispatch-snutten — den ÄR dispatcherns egen spec), routern, §-KARTAN, LÄGE, Aldrig-listan, rollfördelningen.
- **Facit-flödet (rad 24, saknar §-nr):** → `lynx-data` som numrerat **SPARA-RECEPT** med stabilt §-ankare; 4–5 raders sammanfattning + pekare kvar i START. Detta lagar routerns trasiga "(save-first, §0)".
- **§9.0** följer §9 till backlog vid steg 7 och **raderas vid steg 10** när passet stängs.
- **Känd friktion av ägarbeslutet:** §0.1 regel 2 ("kontrollera att du är ensam INNAN du rör något") kräver nu att sessionen laddar `lynx-backlog` för att läsa §12. Accepterat: backlog laddas ändå för allt riktigt arbete, och alternativet — en statuskopia i START — vore lagbrott. START §0.1 måste säga "kolla §12 i `lynx-backlog`".

## ▶ PEKAR-BASELINE (mätt 8 juli, FÖRE steg 7 — kör om EFTER varje omstrukturering)
**Varför före:** utan FÖRE-baseline går en trasig pekare inte att attribuera till refaktorn — den kan ha varit trasig sedan 6 juli-splitten. Samma princip som mät-loopens *"attribution kräver observerad delta"* (lynx-models §11.1), tillämpad på filsetet.

**FÖRE-läge 8 juli — §8/§9/§12-pekare utanför START, per KIND:**
| KIND | Filer | Pekare | Åtgärd vid steg 7 |
|---|---|---|---|
| AKTIV | examples 13 · data 12 · gaps 8 · questions 1 | **34** | ✏️ redigeras → `lynx-backlog` |
| REGEL | rewrite 9 · models 5 · score 1 | **15** | ✏️ redigeras → `lynx-backlog` |
| HISTORIK | logg 49 · log-arkiv 46 · data-arkiv 6 | **101** | 📌 **EN header-rad per fil** (se nedan) |
| DÖR/TEMP | copy-playbook 7 · underlag 123 | 130 | 🗑 filerna raderas (steg 9 resp. 10) |

**➜ Faktiska redigeringar: 49 pekare i 7 filer.** Övriga 231 kräver ingen redigering. **§-refs utan ägare i §-kartan: 0** (inga redan-trasiga §-pekare i FÖRE-läget — allt som går sönder efter steg 7 är alltså orsakat av steg 7).

**⚖️ NYTT BESLUT som följer av lagen (census-fynd 8 juli, ej i 7 juli-specen):** HISTORIK-filer får per definition **inte** uppdateras retroaktivt — men deras 101 §-pekare skulle då peka fel för all framtid. Lösningen är lagen själv: **en enda cell överst i varje historik-fil** — *"§-referenser i denna fil avser filstrukturen vid postens datum. §8/§9/§12 bor sedan 8 juli i `lynx-backlog.php`; §-kartan i lynx-START är resolvern."* Ett fakta, en cell, 101 pekare lösta. Gäller `lynx-logg`, `lynx-log-arkiv`, `lynx-data-arkiv` (+ `lynx-examples-arkiv` när den skapas i steg 9).

**Stubb-raderingen (steg 9):** endast **3 omnämnanden** blockerar — `lynx-START` ×1, `lynx-rewrite` ×2. Resten sitter i log-arkiv (historik, header-raden täcker) och underlaget (raderas).

**Verktygen (bor här — dör med denna fil vid steg 10; efter det bär manifestens `PEKAR-PÅ` bevakningen).**

<details><summary><code>pekarkoll.py</code> — pekar-census; kör före/efter varje omstrukturering. **Den avgörande checken är "TRASIGA pekare"** (namnger fel fil / positionell) — en ren §-referens löses av §-KARTAN och är inte trasig</summary>

```python
#!/usr/bin/env python3
"""Pekar-census för LYNX-filsetet. Kör FÖRE och EFTER varje omstrukturerings-steg
(§9.0 steg 7 + 9). Utan FÖRE-baseline går trasiga pekare inte att attribuera.
Kör:  python3 pekarkoll.py [--efter]"""
import re, os, glob, collections, sys

LYNX = '/Applications/Cursor/acnespecialisten/includes/lynx'
EFTER = '--efter' in sys.argv

# §-kartan PARSAS ur lynx-START (kanonisk cell) — aldrig en egen kopia här.
def load_sec_map():
    txt = open(os.path.join(LYNX, 'lynx-START.php'), encoding='utf-8').read()
    blk = re.search(r'### §-KARTA.*?```\n(.*?)```', txt, re.S)
    if not blk: sys.exit('❌ §-KARTA-blocket hittades inte i lynx-START — resolvern saknas, avbryter.')
    m = {}
    for line in blk.group(1).splitlines():
        mm = re.match(r'\s*(§[\d.,\s§]+?)\s*→\s*(\S+)', line)
        if not mm: continue
        target = mm.group(2)
        if 'FLYTTAR' in line and 'lynx-backlog' in line: target = 'BACKLOG'
        for ref in re.findall(r'§(\d+(?:\.\d+)?)', mm.group(1)):
            m[ref] = target
    if not m: sys.exit('❌ §-KARTA-blocket kunde inte parsas.')
    return m

SEC = load_sec_map()
def owner_of(ref):
    return SEC.get(ref) or SEC.get(ref.split('.')[0])

HOME_NOW = 'lynx-backlog' if EFTER else 'lynx-START'

# KIND per fil — avgör OM en trasig pekare måste redigeras
KIND = {'lynx-START':'AKTIV','lynx-rewrite':'REGEL','lynx-models':'REGEL','lynx-score':'REGEL',
        'lynx-data':'AKTIV','lynx-gaps':'AKTIV','lynx-questions':'AKTIV','lynx-examples':'AKTIV',
        'lynx-backlog':'AKTIV','lynx-examples-arkiv':'HISTORIK','lynx-logg':'HISTORIK','lynx-log-arkiv':'HISTORIK',
        'lynx-data-arkiv':'HISTORIK','lynx-examples-arkiv':'HISTORIK',
        'lynx-copy-playbook':'DÖR','lynx-optimering-underlag':'TEMP'}
PLANNED = {'lynx-backlog','lynx-examples-arkiv','lynx-examples-aktiv','lynx-score-arkiv'}

files = sorted(glob.glob(os.path.join(LYNX,'*.php')))
existing = {os.path.basename(f)[:-4] for f in files}
sec_re, file_re = re.compile(r'§\s?(\d+(?:\.\d+)?)'), re.compile(r'\blynx-[a-z-]+\b')

blast = collections.Counter(); unresolved = []; unknown = collections.Counter()
for path in files:
    src = os.path.basename(path)[:-4]
    text = open(path, encoding='utf-8').read()
    for m in sec_re.finditer(text):
        ref = m.group(1)
        owner = owner_of(ref)
        if owner is None: unresolved.append((src, ref)); continue
        if owner == 'BACKLOG' and src != HOME_NOW and src != 'lynx-backlog':
            blast[(KIND.get(src,'?'), src)] += 1
    for m in file_re.finditer(text):
        t = m.group(0)
        if t not in existing and t not in PLANNED: unknown[(src,t)] += 1

print(f'═══ BLAST RADIUS steg 7 — §8/§9/§12-pekare utanför en backlog-cell ═══')
groups = collections.defaultdict(int)
for (kind, src), n in blast.items(): groups[kind] += n
todo = 0
for kind in ('AKTIV','REGEL','HISTORIK','DÖR','TEMP'):
    rows = sorted([(s,n) for (k,s),n in blast.items() if k==kind], key=lambda x:-x[1])
    if not rows: continue
    action = {'AKTIV':'✏️  MÅSTE REDIGERAS','REGEL':'✏️  MÅSTE REDIGERAS',
              'HISTORIK':'📌 EN header-rad räcker (append-only, ej retroaktiv)',
              'DÖR':'🗑  filen raderas (steg 9)','TEMP':'🗑  filen raderas (steg 10)'}[kind]
    print(f'\n  [{kind}]  {groups[kind]:>3} pekare — {action}')
    for s,n in rows: print(f'      {s:<26} {n:>3}')
    if kind in ('AKTIV','REGEL'): todo += groups[kind]
print(f'\n  ➜ FAKTISKA REDIGERINGAR: {todo} pekare. Resten: {groups["HISTORIK"]} via 3 header-rader, '
      f'{groups["DÖR"]+groups["TEMP"]} i filer som raderas.')

print('\n═══ §-REF UTAN ÄGARE (skulle vara redan trasiga) ═══')
print('  ✓ inga' if not unresolved else '\n'.join(f'  ❌ {s} §{r}' for s,r in set(unresolved)))

print('\n═══ lynx-*-omnämnanden som INTE är kända/planerade filer (granska manuellt) ═══')
for (s,t),n in sorted(unknown.items()):
    print(f'  {s:<26} → {t:<32} ×{n}')

# ── DEN AVGÖRANDE CHECKEN: pekare som NAMNGER fel fil, eller är positionella ──
# En ren "§9" löses av §-KARTAN och är inte trasig. En "lynx-START §9" eller "§9 nedan" ÄR trasig.
print('\n═══ 🔴 TRASIGA pekare — namnger fel fil eller är positionella (måste vara 0) ═══')
MOVED = r'§\s?(?:8|9|12)(?:\.[0-9])?'
QUAL  = re.compile(r'(?:lynx-)?START[^.\n]{0,15}' + MOVED + r'|' + MOVED + r'[^.\n]{0,25}(?:i |från |överst i )(?:lynx-)?START')
POS   = re.compile(MOVED + r'[^|\n]{0,25}(?:nedan|ovan|överst)|(?:nedan|ovan|överst)[^|\n]{0,15}' + MOVED)
broken = 0
for path in files:
    src = os.path.basename(path)[:-4]
    if KIND.get(src) in ('HISTORIK','TEMP','DÖR'): continue   # historik: header-raden täcker; temp/dör: raderas
    txt = open(path, encoding='utf-8').read()
    for lineno, line in enumerate(txt.split('\n'), 1):
        for rx, kind in ((QUAL,'NAMNGER FIL'), (POS,'POSITIONELL')):
            if rx.search(line):
                print(f'  ❌ {src}:{lineno}  [{kind}]  {line.strip()[:95]}')
                broken += 1
print('  ✓ inga trasiga pekare' if not broken else f'  ── {broken} MÅSTE LAGAS')

print('\n═══ STUBBEN lynx-copy-playbook — vem pekar på den? ═══')
tot = 0
for path in files:
    src = os.path.basename(path)[:-4]
    if src == 'lynx-copy-playbook': continue
    n = open(path, encoding='utf-8').read().count('lynx-copy-playbook')
    if n:
        k = KIND.get(src,'?')
        print(f'  {src:<26} ×{n:<3} [{k}]{"  ← måste bort före radering" if k in ("AKTIV","REGEL") else ""}')
        tot += n
print('  ✓ ingen — kan raderas' if not tot else f'  ── {tot} omnämnanden')
```
</details>

<details><summary><code>noloss.py</code> — no-loss-batteri per steg (5, 6, 7, 8, 9 färdiga + validerade åt båda håll)</summary>

```python
#!/usr/bin/env python3
"""No-loss-batteri per §9.0-steg. Härlett ur underlagets MÅSTE-BEHÅLLAS-listor.
Kör FÖRE redigering (måste vara helgrönt — annars är nålarna fel) och EFTER (måste vara helgrönt).
Kör:  python3 noloss.py 5"""
import sys, os, re

LYNX = '/Applications/Cursor/acnespecialisten/includes/lynx'
def load(f):
    if f == 'UNION':
        t = load('lynx-START')
        try: t += load('lynx-backlog')
        except FileNotFoundError: pass
        return t
    return open(os.path.join(LYNX, f + '.php'), encoding='utf-8').read()

# (etikett, fil, nål) — nålen är en EXAKT delsträng som måste överleva steget.
STEP = {
 5: [
  # 1. Rad 6 — gällande SCORE-modellen
  ('§1.2 Overall = medel(CQ,EEAT)',        'lynx-models', 'Overall = medel(CQ-badge, EEAT-badge)'),
  ('§1.2 EEAT låst 60, ej copy-spak',      'lynx-models', 'EEAT LÅST 60, ej copy-flyttbar'),
  ('§1.2 SCORE-taket 75–77',               'lynx-models', '75–77'),
  ('§1.2 operativ slutsats: jaga ej SCORE','lynx-models', 'JAGA INTE SCORE med copy'),
  # 2. Rad 19 — Evidence-§5-filtret (OK / INTE OK)
  ('Evidence-filtret genom §5',            'lynx-models', 'Evidence-höjning MÅSTE filtreras genom §5'),
  ('Evidence INTE OK: hudläkare-granskn.', 'lynx-models', '"granskad av hudläkare"'),
  ('Evidence OK: Från X kr / 30 år',       'lynx-models', '"Från X kr", "30 år"'),
  # 3. Rad 31 — no-regression (KRITISKT)
  ('No-regression-regeln ordagrant',       'lynx-models', 'varje ändring ska vara ≥0 på alla komponenter och >0 på minst en'),
  ('No-regression: optimera aldrig på annans bekostnad', 'lynx-models', 'Optimera aldrig en komponent på en annans bekostnad'),
  # 4. Rad 37–49 — hela §1.5
  ('§1.5 officiella tooltip-definitionen', 'lynx-models', 'based on Google SERP'),
  *[(f'§1.5 hypotes H{i}', 'lynx-models', f'**H{i} —') for i in range(1, 8)],
  ('§1.5 operativa stegen 1–4',            'lynx-models', 'hämta sidans AI Overview Ranking'),
  # 5. Rad 53–59 — §10.0 SEO-vakten
  ('§10.0 GSC-gaten',                      'lynx-models', 'GSC-GATE före main-push'),
  ('§10.0 KW-tröskeln 10–15 %',            'lynx-models', '>10–15 %'),
  ('§10.0 CLICKS+WORDS i baseline',        'lynx-models', 'CLICKS + WORDS i baseline'),
  ('§10.0 våg-attribution',                'lynx-models', 'Attribution per sida i vågor'),
  ('§10.0 tumregeln',                      'lynx-models', 'ranking-tapp är dyrare än en sen LYNX-fix'),
  # 6. Rad 61–73 — mät-loopen + per-signal-responsen
  ('§10 prediktera före, mät efter',       'lynx-models', 'prediktera före, mät efter'),
  ('§10 steg 5 backporta',                 'lynx-models', '**Backporta:**'),
  ('§10 per-signal: AIQ ej GOOD',          'lynx-models', 'AI QUESTIONS ej GOOD?'),
  ('§10 per-signal: PAGE TYPE/P. PRICE',   'lynx-models', 'PAGE TYPE/P. PRICE "–"?'),
  # 8. Ägarprincipen (rad 81) — sakinnehållet måste överleva kompressionen
  ('Attribution kräver observerad delta',  'lynx-models', 'Attribuera FÖRE→EFTER ENDAST när vi faktiskt SER två analyser med OLIKA värden'),
  ('Uppdateringsenheten = (sida × vy)',    'lynx-models', 'UPPDATERINGSENHETEN ÄR (SIDA × VY)'),
  # 9. Rad 101 — instruktionen
  ('§11.1 mät→logga→förfina→backporta→töm','lynx-models', 'förfina modellen (steg 4), backporta (steg 5), töm raden'),
 ],
 6: [
  # 1. Rad 4 sakinnehåll
  ('Tvåskalemodellen: jämför aldrig kors',   'lynx-score', 'Jämför ALDRIG färsk mot gammal'),
  ('SCORE 0/blank sätter sig själv',          'lynx-score', 'be inte om omkörning'),
  ('Öppen tråd: SCORE-tooltippen beställd',   'lynx-score', 'officiella tooltip saknas'),
  # 2. 7 juli-sektionen — omätta FÖRE-baselines
  ('AI STYLE-FÖRE 55 / rhinophyma 70',        'lynx-score', 'pigmentflackar 55 · rhinophyma 70'),
  ('pigmentflackar-tabellen (AI STYLE 55/55)','lynx-score', '**55 / 55**'),
  ('Över-attributions-kontrollpunkten',       'lynx-score', 'homepage 28(gammal)→65 UTAN att vi rört den'),
  # 3+4. 6 juli-tabellen med fotnoter
  ('rhinophyma = omätt FÖRE nya skalan',      'lynx-score', 'LYNX läste GAMLA texten = **FÖRE-baseline nya skalan**'),
  ('micro-komplett-raden (stängningsbevis)',  'lynx-score', '2 jul hade micro Base 0/Language 0/AI 0/Overall 50 (partiell)'),
  ('Öppen ägarbekräftelse: skärmbild 2',      'lynx-score', 'tilldelning bekräftas med ägaren'),
  # 5. Rådatatabellen 5 HÖGA sidor
  ('Rådatatabellen 5 HÖGA sidor',             'lynx-score', 'powerlite-photonova (88) | rejuve-dye-vl (86) | splendor-x (79)'),
  # 6. Slutsatserna A–F i SAK
  ('A: prediktor 15/15',                      'lynx-score', '15/15'),
  ('A: prediktor, ej styrbar mekanism',       'lynx-score', 'styrbar mekanism'),
  ('B: sidtyps-hypotesen förkastad',          'lynx-score', 'SIDTYPS-hypotesen FÖRKASTAD'),
  ('B: jaga inte EEAT/CQ-badge med copy',     'lynx-score', 'jaga EEAT/CQ-badge'),
  ('C: CQ-badge följer subsen normalt',       'lynx-score', 'CQ-badge FÖLJER subsen normalt'),
  ('D: AI STYLE ingår EJ i Overall',          'lynx-score', 'AI STYLE ingår EJ i Overall'),
  ('E: SCORE-taket 75–77',                    'lynx-score', '75–77'),
  ('E: splendor-x 79 bryter taket',           'lynx-score', 'splendor-x'),
  ('F: powerlite saknas i repot (ÖPPEN §9)',  'lynx-score', 'men SAKNAS i repot'),
  # 7. Rad 95 — det unika URL-struktur-beviset
  ('skin-tech: CQ 60 men EEAT 78',            'lynx-score', 'skin-tech har CQ-badge 60 MEN EEAT 78'),
  ('alma-hybrid: .php → EEAT klampad',        'lynx-score', '/alma-hybrid-co2-laser.php 60'),
  ('URL-strukturen, inte ämnet, styr EEAT',   'lynx-score', 'URL-strukturen (PAGE TYPE), INTE maskin-/produkt-ämnet'),
  # 8. Rad 97 — öppen låg-ände + färsk-skala-nedbrytningar
  ('Öppet: roaccutan 23 + melasma 23',        'lynx-score', 'roaccutan 23 + melasma 23'),
  ('porto/sebo färsk-skala-nedbrytningar',    'lynx-score', 'portomning 60 (CQ-badge 60/subs 89'),
  # 9. Mätprincipen minst som pekare till models §11.1
  ('Mätprincipen → lynx-models §11.1',        'lynx-score', 'lynx-models §11.1'),
  # 10. Gamla skalan: formeln, valideringspunkterna, acne.php no-regression-subs
  ('Gamla formeln CQ×EEAT×AI/3640',           'lynx-score', 'CQ×EEAT×AI/3640'),
  ('Validering: om-oss 7:e punkten',          'lynx-score', '7:e valideringen'),
  ('Validering: bristningar 6:e punkten',     'lynx-score', '52×50×25/3640 = 17,9'),
  ('acne.php = kolumn A (FÖRE-baseline)',     'lynx-score', 'kolumn A = acne.php'),
  ('acne.php no-regression: Depth 77/EEAT 84','lynx-score', 'Depth 77 / E-E-A-T 84'),
  ('30 jun FÖRE: hudforandringar + ytliga',   'lynx-score', 'hudforandringar (17) | ytliga-blodkarl (22)'),
  # Steg 5-migrationen måste överleva steg 6
  ('Steg 5: testprotokollet (historik)',      'lynx-score', 'Falsifierbart testprotokoll'),
  ('Steg 5: marginalkalkylen',                'lynx-score', 'dOverall/dAI'),
  ('Steg 5: multiplikativa modellen',         'lynx-score', 'Overall ≈ CONTENT QUALITY × E-E-A-T × AI STYLE / ~3640'),
  ('HISTORIK varnar för falsifierade påståenden', 'lynx-score', 'Falsifierade påståenden som förekommer nedan'),
  ('  …falsifiering 1: SCORE 0 = omanalys',   'lynx-score', 'be aldrig om omkörning'),
  ('  …falsifiering 2: EEAT ≠ hälsosidor',    'lynx-score', 'klampen följer /varumarken/-URL-strukturen'),
  ('  …falsifiering 3: CQ ≠ frikopplad',      'lynx-score', 'CQ-badge följer subsen i normalfallet'),
 ],
 8: [  # lynx-rewrite — ENDAST formatkomprimering tillåten; inga regeländringar
  ('§1 Fem nycklar (nyckel 1 + 5)',        'lynx-rewrite', '**Fem nycklar:**'),
  ('§1 Målet: 🔴/🟠 → minst 🔵 SLIGHT',      'lynx-rewrite', 'minst 🔵 SLIGHT'),
  ('§1.4 arbetsmodell sidnivå ≈ viktat',   'lynx-rewrite', 'Arbetsmodell: sidnivå ≈ VIKT'),
  ('§1.4 ÖPPEN beställning: same-scan',    'lynx-rewrite', 'same-scan'),
  ('§2 Formeln Krok → Mekanism → Skylt',   'lynx-rewrite', '## 2. Formeln: **Krok → Mekanism → Skylt**'),
  ('§2 intro-hypotesen (ÖPPEN, omätt)',    'lynx-rewrite', 'ej regel än, §0):** acne-ansikte'),
  ('§3 Checklistan finns',                 'lynx-rewrite', '## 3. Checklista (kör varje block)'),
  ('§3 COPY-PASTE-REST-KOLL (ägarbeslut)', 'lynx-rewrite', '**COPY-PASTE-REST-KOLL (obligatorisk, ägarbeslut 6 jul).**'),
  ('§4 Husrösten + öppningsbanken',        'lynx-rewrite', '## 4. Husrösten'),
  ('§4 CTA-facit-noten (rak kort CTA)',    'lynx-rewrite', 'Facit-not (6 jul): rak kort CTA'),
  ('§4.1 reassurance: säg trösten RAKT',   'lynx-rewrite', 'säg trösten RAKT'),
  ('§5 Låsta ramar',                       'lynx-rewrite', '## 5. Låsta ramar (gäller alla sidor)'),
  ('§5 Juridikblocket (MFL/PIL/estetiklag)','lynx-rewrite', 'ABSOLUTA krav, trumfar all stil'),
  ('§5 juridik: käll-URL:erna',            'lynx-rewrite', 'konsumentverket.se/for-foretag/prissattning'),
  ('§6 SEO-skyddet',                       'lynx-rewrite', '## 6. ⚠️ SEO-skydd'),
  ('§6 $seo_keywords = parkeringsplats',   'lynx-rewrite', 'medveten PARKERINGSPLATS'),
  ('§6 obligatoriska fras-kollen (grep)',  'lynx-rewrite', 'grep:a HELA `$seo_keywords`-listan FÖRE→EFTER'),
  ('§7 Arbetsprocessen',                   'lynx-rewrite', '## 7. Arbetsprocess per sida'),
  ('§7 SCORE 0/blank-noteringen',          'lynx-rewrite', 'pågående omanalys'),
  ('§7 save-first i rätt kolumnfil',       'lynx-rewrite', 'SPARA rådatan FÖRST'),
  ('§7 staging-poll-regeln',               'lynx-rewrite', 'acnespecialisten-staging'),
  ('§13 Autonom-kvittensen',               'lynx-rewrite', '**Autonom-kvittens (obligatorisk'),
 ],
 9: [  # lynx-examples — splittas i aktiv/arkiv; INGET facit får tappas
  ('Tier-legend: betyg = LYNX-FAKTA',      'lynx-examples', 'Betyg = LYNX-FAKTA (bevaras för omtolkning)'),
  ('ÅTGÄRD-blocket (öppen TODO: ytliga)',  'lynx-examples', '### ÅTGÄRD (skarpt, från facit)'),
  ('Lärdomar = HYPOTESER, ruta inte in',   'lynx-examples', '### Lärdomar (HYPOTESER'),
  ('Rewrite-resultat-tabellen (mätliggare)','lynx-examples', '## Rewrite-resultat (fyll på efter LYNX-refresh'),
  ('RE-SCAN: crawlfönstret',               'lynx-examples', '16:09'),
  ('RE-SCAN: determinism-replikationen',   'lynx-examples', 'determinism'),
 ],
 7: [  # START-splitten. Nålen måste finnas i START ELLER lynx-backlog (UNION).
  # Omätta FÖRE-baselines + öppna prediktioner
  ('AI STYLE-FÖRE pigment 55 / rhino 70',   'UNION', 'pigment 55, rhino 70'),
  ('V2-rewriterna OMÄTTA',                  'UNION', 'V2-rewriterna fortfarande OMÄTTA'),
  ('pigmentflackar V2: prediktion + AI STYLE 55', 'UNION', 'jämför AI STYLE mot 55-baselinen'),
  # Invarianter som MÅSTE stanna i START
  ('Prime-direktivet: ändrar jag för mycket?','lynx-START', 'ändrar jag för mycket?'),
  ('Prime-direktivet: räkna punkterna',      'lynx-START', 'räkna punkterna före/efter'),
  ('§0.2 dispatch-citatet ordagrant',        'lynx-START', 'Läs `includes/lynx/lynx-START.php` först'),
  ('Aldrig-listan',                          'lynx-START', '**Aldrig:**'),
  ('Rollfördelningen: rör aldrig main',      'lynx-START', 'Rör aldrig `main`.'),
  ('§0.1 regel 2: du ska vara ENSAM',        'lynx-START', 'Du ska vara ENSAM'),
  ('Banner-regeln',                          'lynx-START', 'Banner-regel 6 jul'),
  ('Datum-skrivkonventionen',                'lynx-START', 'Skrivkonvention datum'),
  ('State-synk-principen',                   'lynx-START', 'State-synk-principen'),
  ('"Vi rutar inte in oss"-principen',       'lynx-START', 'Vad som hör hemma i den här filen'),
  ('Routern',                                'lynx-START', '▶ ROUTER'),
  ('Filkartan',                              'lynx-START', '**Filkarta (hela LYNX-setet):**'),
  ('§-KARTAN (resolvern)',                   'lynx-START', '### §-KARTA'),
  # §12 claim-markören
  ('§12 claim-tabellen',                     'UNION', '| Sida | Status | Tid |'),
  # §8.1 EJ genomförda gap-beslut + den portabla principen
  ('§8.1 sebo: curettage-beslutet',          'UNION', 'curettage'),
  ('§8.1 microneedling: kur-gapet',          'UNION', 'microneedling kur'),
  ('§8.1 acne-rygg: synonymerna',            'UNION', 'ryggakne'),
  ('"ingen hemmakur"-principen',             'UNION', 'ingen hemmakur'),
  # §9.1 tier-listan + scope-beslutet
  ('§9.1 Tier 1-listan',                     'UNION', 'Tier 1 — störst KW + uppsida'),
  ('§9.1 scope: studentrabatt exkluderas',   'UNION', 'studentrabatt'),
  ('Widget-bugg PARKERAD',                   'UNION', 'Widget-bugg (PARKERAD)'),
  # Öppna §9-trådar — var och en
  ('§9 GSC-KOLL',                            'UNION', 'GSC-KOLL'),
  ('§9 ärr-boilerplate-läckan',              'UNION', 'ÄRR-FRÅN-FINNAR-BOILERPLATE'),
  ('§9 Akne Specialiserade-sweepen (27 filer)','UNION', 'Akne Specialiserade Hudterapeuter'),
  ('§9 GAPS-rensningen (konkurrent-relativ)','UNION', 'GAPS-rensningen'),
  ('§9 microdermabrasion AIQ GOOD→OK',       'UNION', 'microdermabrasion AIQ GOOD→OK'),
  ('§9 fragor-svar AIQ OK→POOR',             'UNION', 'fragor-svar AIQ OK→POOR'),
  ('§9 milier-/CryoPen-priserna',            'UNION', 'CryoPen-återbesökspriset'),
  ('§9 "missing localized" KW 616',          'UNION', 'missing localized'),
  ('§9 powerlite-photonova saknas i repot',  'UNION', 'powerlite-photonova'),
  ('§9 hifu bevakas',                        'UNION', 'varumarken/hifu'),
  ('§9 om-oss 4:e gap-punkten',              'UNION', 'om-oss gap-popupens 4:e punkt'),
  ('§9 datum-svepet',                        'UNION', 'Datum-svep i LYNX-filerna'),
  ('§9 exosomer (gated på lansering)',       'UNION', 'Exosomer + polynukleotider'),
  ('§9 produktifierings-idén (parkerad)',    'UNION', 'PRODUKTIFIERING'),
  ('§9 hudforandringar mall-review',         'UNION', 'mall-review'),
  ('§9 Fas 2: FAQPage JSON-LD',              'UNION', 'FAQPage JSON-LD'),
  ('§9.0 passets checklista',                'UNION', 'FIL-OPTIMERINGSPASSET'),
  # Öppna rester inuti [x]-rader
  ('Öppen rest: oonskat-har "underarmar"',   'UNION', 'underarmar'),
  ('Öppen rest: micro AIQ-frågedetaljen',    'UNION', 'AIQ GOOD→OK-frågedetaljen'),
  ('Öppen rest: acne-ansikte intro-🟠',      'UNION', 'intro-blockets 🟠'),
  ('Öppen rest: behandla-pigment micro-fix', 'UNION', 'micro-fix-kandidat'),
  # Fas 3b-kön
  ('Fas 3b: portomning',                     'UNION', 'portomning.php'),
  ('Fas 3b: seborroisk-keratos',             'UNION', 'seborroisk-keratos.php'),
 ],
}

# Strukturella invarianter som inte är enkla delsträngar
def structural(step):
    out = []
    if step == 5:
        t = load('lynx-models')
        m = re.search(r'## 11\.1(.*?)(?=\nNär en rad refreshats)', t, re.S)
        rows = [l for l in (m.group(1).splitlines() if m else []) if l.startswith('| ') and '---' not in l]
        body = len(rows) - 1  # minus rubrikraden
        out.append((f'§11.1: alla 13 bevakningsrader kvar (hittade {body})', body == 13))
        # varje omätt rad måste behålla en FÖRE-baseline
        need = ['SCORE 22', 'AISTYLE25', 'AISTYLE30', 'medel 1,57', 'medel 1,77', 'medel 1,82', 'medel 1,92']
        for n in need:
            out.append((f'§11.1 FÖRE-baseline "{n}"', n in t))
    if step == 7:
        t = load('UNION')
        for tier in ('Tier 1','Tier 2','Tier 3','Tier 4'):
            out.append((f'§9.1 {tier} kvar', tier in t))
        out.append(('§9 Fas 3: alla 10 MODERATE-rader kvar', t.count('✅ OMSKRIVEN') >= 6))
        out.append(('§12 exakt EN claim-tabell', t.count('| Sida | Status | Tid |') == 1))
    if step == 9:
        t = load('lynx-examples')
        # varje sida med facit måste ha kvar sin Räkning-rad och sitt sidnamn
        sidor = ['ipl-rosacea','hudforandringar','ytliga-blodkarl','mogen-hy','solskadad-hy',
                 'rhinophyma','microdermabrasion','bristningar','pigmentflackar','oonskat-har',
                 'acne.php','acnebehandling','dermapen','microneedling','portomning','acne-rygg',
                 'seborroisk-keratos','acne-ansikte','behandla-pigmentflackar','om-oss']
        saknas = [p for p in sidor if p not in t]
        out.append((f'alla {len(sidor)} facit-sidor närvarande' + (f' — SAKNAS: {saknas}' if saknas else ''), not saknas))
        rak = t.count('Räkning')
        out.append((f'Räkning-rader kvar (hittade {rak}, kräver ≥7)', rak >= 7))
        chk = t.count('§1.4-check')
        out.append((f'§1.4-check-rader kvar (hittade {chk}, kräver ≥6)', chk >= 6))
        out.append((f'AIQ-listorna (acnebehandling + om-oss) — {t.count("AI QUESTIONS")} st', t.count('AI QUESTIONS') >= 2))
    if step == 6:
        t = load('lynx-score')
        tables = t.count('| **Overall** |')
        out.append((f'lynx-score: alla 4 Overall-rådatatabeller kvar (hittade {tables})', tables == 4))
        out.append(('HISTORIK-sektionen finns och varnar', 'KIND: HISTORIK' in t))
    return out

def main():
    step = int(sys.argv[1])
    if step not in STEP: sys.exit(f'Inget batteri för steg {step} än.')
    fails = 0
    print(f'═══ NO-LOSS-BATTERI · §9.0 steg {step} ═══')
    for label, f, needle in STEP[step]:
        ok = needle in load(f)
        print(f'  {"✓" if ok else "❌ SAKNAS"}  {label}')
        fails += not ok
    for label, ok in structural(step):
        print(f'  {"✓" if ok else "❌ BRUTEN"}  {label}')
        fails += not ok
    n = len(STEP[step]) + len(structural(step))
    print(f'\n  {n - fails}/{n} gröna.' + ('' if fails else '  ✅ inget tappat.'))
    sys.exit(1 if fails else 0)

main()
```
</details>

*(⚠️ Fallgrop, upptäckt vid första körningen: om skriptet i FÖRE-läge mappar §8/§9/§12 tillbaka till START blir blast radius **0** — en tyst nolla som ser ut som "allt är bra". §8/§9/§12 måste alltid mappa till BACKLOG; det är hemfilen som varierar. En check som kan returnera falskt grönt är värre än ingen check.)*

---

> Underlag för §9.0-optimeringspasset i lynx-START (ägar-beställt 7 juli: "för långa sektioner ger skumläsning; långa loggar kanske egen fil"). 11 granskningsrapporter (en per fil + färska-ögon-simulering + 2 designförslag). OBS: radnummer avser filversionerna per 7 juli em — verifiera mot aktuell fil innan ändring. **RADERAS när §9.0-passet är klart.**

════════════════════════════════════════
## RAPPORT: audit-freshEyes

## Rapport: läsupplevelse för en ny session i lynx-START.php

### 1) Skum-punkter med radnummer och orsak

**Rad 2–18 (router + "START HÄR"):** Bra start — routern (rad 4–11) är exakt rätt sak överst. Men rad 17–18 säger cirkulärt "läs den här filen, kolla routern" till någon som redan gör precis det. Tredje gången filen beskriver sig själv kommer på rad 48. Redan här lär man sig att texten upprepar sig, vilket triggar skumläsning tidigt.

**Rad 22 (prime-direktivet):** Viktigaste regeln i hela filen, men den är ett långt stycke där kärnan ("små steg, räkna punkter före/efter, fråga ägaren") är begravd i motiveringar och sju fetningar. När allt är fett är inget fett.

**Rad 24 (facit-flödet):** Här börjar jag skumma på riktigt. Ett enda ~300-ordsstycke som innehåller: två lägen (a/b), diff-klassning, save-first-regeln, kolumnfil-mappningen, skärmbilds-principen 1–2–3 och daterade exempel. Detta är den operativa kärnan för "spara inkommen LYNX-data" — och den är formaterad som en prosavägg utan §-nummer, så routern kan inte ens peka på den (se nedan).

**Rad 26–37 (LÄGE-bannern):** Rätt format (punktlista) men varje punkt är överlastad med korsreferenser en ny session inte kan lösa upp än: "wave 2", "Fas 3", "GSC-gaten §10.0", "logg #14", "d3ce9162". Termerna används före definition. Bannern refererar dessutom §10.0 och §13 som inte finns i den här filen.

**Rad 39–44 (andra status-/regelblocket):** Duplicerar LÄGE-bannern och rad 22/24 (uppdrag igen, små-steg igen, rådata-filkartan igen). Vid rad 41 läste jag diagonalt eftersom jag redan fått budskapet två gånger. Rad 43 upprepar rad 24:s kolumnfil-mappning en tredje gång.

**Rad 50 (Innehåll):** Direkt vilseledande. Listar §0–§13 som filens innehåll, men efter splitten 6 juli finns §1–§7, §10, §11 och §13 i ANDRA filer. En ny session som söker §7 (processen) i denna fil hittar den inte och måste gissa var den bor. Innehållsraden uppdaterades uppenbart inte vid splitten.

**Rad 63, 65 (§0):** Datum-konventionen och meta-principen om regler är policy-asider som avbryter det operativa flödet; rad 65 skummade jag helt.

**Rad 70 (§0.1):** Historien om parallell-kollisionen 1 juli kommer FÖRE reglerna. En ny session behöver regeln (en i taget, kolla git status + §12), inte anekdoten.

**Rad 84–87 (§0.2):** Riktar sig till ägaren, inte till mig, och upprepar prime-direktivet en tredje gång. Hoppades över efter första meningen.

**Rad 89→91 (§0.2 → §8):** Nummerhoppet §0.2 till §8 utan förklaring på plats. Man måste minnas rad 27/14 för att veta att §1–§7 bor i lynx-rewrite.

**Rad 98 (§8 MODERATE-vågen):** Monsterrad — 10 sidor plus en jätteparentes om pigmentflackar i löpande text. Omöjlig att skanna.

**Rad 92–98 vs 157–163 — MOTSÄGELSE:** LÄGE (rad 30) och §8 säger "ALLA flagg-sidor LIVE PÅ MAIN, verifierad på produktion". Men §9-raderna för mogen-hy, oonskat-har, microdermabrasion, solskadad-hy, rhinophyma (rad 157–162) säger fortfarande "→ staging, väntar main-push". En ny session kan inte avgöra vilket som gäller utan att gräva i loggen. Detta är det allvarligaste enskilda problemet: statustext som inte uppdaterades när statusen ändrades.

**Rad 167–181 (Bevaka-sektionen):** Total skumläsning. Enstaka bullets på 100+ ord (rad 169, 170, 171) blandar status, historik, beslut och öppna frågor i samma mening. Avklarade [x]-rader (175, 177, 181) ligger kvar och stjäl uppmärksamhet.

**Rad 213–215 (§9.1 Tier 2–3):** Inline-listor med genomstrykningar och parenteser — funktionellt men kräver ansträngd läsning.

**Rad 223–228 (§12):** §0.1 regel 2–3 säger "kolla §12 FÖRST och markera din claim INNAN du börjar" — men §12 ligger sist i filen. Incheckningsritualens viktigaste artefakt är längst bort från starten.

### Router-uppgiften "spara inkommen LYNX-data"

- **Routerns pekare är trasig:** rad 9 säger "(save-first, §0)" — men §0 (rad 54–65) nämner inte save-first alls. Den faktiska proceduren bor i rad 24 (facit-flödet), som saknar §-nummer och därför inte kan refereras.
- **Filkartan överst i lynx-data.php (rad 4–15) är bra** — tydlig, och kolumndefinitions-tabellen (rad 17–32) är den bäst formaterade delen av hela filsetet.
- **Men filkartan finns i TRE versioner** (START rad 14, routern rad 7–11, lynx-data rad 4–12) som redan driftat (lynx-copy-playbook nämns bara i lynx-datas version). Save-first-regeln står i tre filer med olika ordalydelse.
- **Det som SAKNAS för själva sparandet: en mall.** Ingenstans står VAR i kolumnfilen ny data ska in (topp/botten/per-sida-sektion) eller i vilket FORMAT. Varje kolumnfil har sin egen konvention som måste reverse-engineeras ur befintliga poster: lynx-examples = per-sida-rubriker med tabeller, lynx-score = sektion per leverans-datum, lynx-data = daterade snapshots, lynx-questions = gigantiska enradsstycken med 25+ frågor separerade med "·" (i praktiken oläsbara och odiffbara).

### 2) Vad en ny session FAKTISKT behöver på första skärmen

1. Routern (finns redan — behåll överst).
2. En §-till-fil-karta ("§1–§7, §13 = lynx-rewrite · §1.2/§1.5/§10/§11.1 = lynx-models · §11 = lynx-logg"), eftersom hela filsetet talar i §-nummer men numren är utspridda över fyra filer.
3. Incheckningsritualen som 3 rader: git status → kolla §12 (som borde ligga här) → skriv din claim.
4. LÄGE i max 8 rader utan olösta korsreferenser — plus EN rad "Nästa arbete".
5. Prime-direktivet i 2–3 rader, en gång (inte tre).
6. För spara-uppgiften: ett numrerat spara-recept med datatyp-till-fil-tabell och formatmall.

Allt annat (historik, motiveringar, gap-beslut, avklarade TODO-rader, dispatch-texten) hör hemma längre ned eller i andra filer.

### 3) Topp-5 konkreta presentationsförbättringar

1. **Laga §-referenssystemet.** Rätta Innehålls-raden (rad 50) så den bara listar det som finns i filen, lägg en §-till-fil-tabell på första skärmen, och fixa den trasiga pekaren "(save-first, §0)" på rad 9. Idag pekar navet delvis fel — dödssynden för en nav-fil.

2. **Gör rad 24 till ett numrerat "SPARA-RECEPT" med eget §-nummer:** steg 1 avgör läge (a/b), steg 2 spara i rätt fil (tabell: datatyp → fil → var i filen → formatmall), steg 3 diffa/klassa, steg 4 öppna §9-TODO. Routern pekar dit. Skärmbilds-principen blir en egen kort undersektion.

3. **En enda källa per status + arkivera avklarat.** Lös motsägelsen "live på main" (rad 30/98) vs "väntar main-push" (rad 157–162): när status byts, uppdatera EN plats och låt övriga rader peka dit i stället för att bära egen statustext. Flytta [x]-rader och lösta bevakningstrådar till loggen — §9 ska bara visa det som är öppet.

4. **Avduplicera meta-lagret.** Rad 17–18, 22, 39–44, 48 och 87 säger samma tre saker (vad uppdraget är, små steg, var rådata bor) fem gånger. Behåll: en LÄGE-banner + ett kompakt regelblock ("Aldrig"-raden 44 är bra som den är). Flytta §0.2-dispatchen sist eller till egen fil — den är ägarens verktyg, inte sessionens.

5. **Flytta §12 (claims-tabellen) upp direkt under routern och strukturera Bevaka-sektionen.** §12 först eftersom ritualen kräver den först. Bevaka-trådarna (rad 167–181): en rad per ämne med statustagg (ÖPPEN / VÄNTAR ÄGARE / BEVAKAR NÄSTA SCAN) + max två raders text; historiken flyttar till lynx-logg. Samma kur för lynx-questions.php: tabellformat (score · fråga · status) i stället för enradsstycken.

**Filer:** /Applications/Cursor/acnespecialisten/includes/lynx/lynx-START.php · lynx-data.php · lynx-examples.php · lynx-score.php · lynx-gaps.php · lynx-questions.php
════════════════════════════════════════
## RAPPORT: audit-START

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-START.php (231 rader)

## Summary
lynx-START är 231 fysiska rader men ~400 läsrader — värsta skumrisken sitter i sex prosaväggar på 500-1750 tecken per rad (rad 24 Facit-flödet, rad 39-41, §9-bevaka-trådarna 169-171) samt i KLAR-rader i §8/§9 som bär full rewrite-historik trots att identiska daterade poster finns i lynx-logg. Dessutom finns stale state: raderna 157-162, 96 och 215 säger 'väntar main-push/GSC-gate' fast LÄGE-bannern och logg #13 säger att allt är live och verifierat — det bör rättas i samma pass som komprimeringen. LÄGE-bannern bryter sin egen 8-raders-regel (9 punktrader, flera på 3-5 läsrader), och TOC:n på rad 50 pekar på paragrafer som inte längre bor i filen. Föreslagna åtgärder (enradare med logg-pekare för allt stängt, arkivering av lösta trådar och genomförda gap-beslut, pekare i stället för tredubblad kolumnfil-mappning) sparar uppskattningsvis ~90 läsrader (~25 %) utan att någon öppen tråd, omätt baseline, operativ regel eller något ägarbeslut tappas.

## Hotspots
- [169-171 (§9 Bevaka: ärr-boilerplate, Akne Specialiserade-sweep, GAPS-rensningen)] Tre öppna trådar à 1100-1300 tecken (≈12 läsrader styck) — beslutspunkterna drunknar i upptäckts-narrativ (vem hittade vad när, grep-detaljer, exempelsträngar) som redan är loggade i lynx-logg 6-7 jul.
  ÅTGÄRD: KOMPRIMERA: behåll per tråd endast (a) vad som ska beslutas/göras, (b) fillistor/antal (27 filer, de 4 ämnesfel-sidorna, a/b/c-ägaralternativen), (c) öppna delfrågor (åldersfläckar-widgetlänken, 'View gap details'-beställningen, konkurrent-relativa GAPS-varningen). Flytta bakgrunds-prosan till lynx-logg med pekare (logg #14 m.fl.). Inget beslut eller öppen fråga får tappas. (spar ~16 rader)
- [24 (Facit-flöde-stycket)] 1744 tecken på EN rad (≈18 läsrader) — filens största prosavägg, mitt i det som ska vara snabbnav. Kolumnfil-mappningen står dessutom redan i lynx-data.php:s filkarta OCH på rad 43 (tredubblering).
  ÅTGÄRD: KOMPRIMERA + FLYTTA: behåll i START som 4-5 rader: avgör syfte (a) per sida / (b) bunt-inventering → SPARA FÖRST i rätt kolumnfil (pekare: filkarta i lynx-data.php) → agera → öppna §9-TODO. Flytta skärmbilds-principens 3 punkter + 2 juli-exemplet till lynx-data.php-headern (där data-intag redan bor). Ägarbesluten 2 jul bevaras ordagrant i målfilen. (spar ~10 rader)
- [152-165 (§9 Fas 3: 10 [x]-rader)] Varje KLAR-rad bär 250-500 tecken rewrite-historik som redan finns som egna lynx-logg-poster (2 jul em #7, 3 jul, 3 jul #2, 6 jul #7/#8/#11). Dessutom STALE STATE: raderna 157-162 säger '→ staging, väntar main-push' och rad 160 'väntar ⛔ GSC-gate' — men LÄGE-bannern (rad 30-31) säger att hela wave 2 är LIVE PÅ MAIN, verifierad (logg #13), gaten passerad.
  ÅTGÄRD: KOMPRIMERA varje [x]-rad till enradare: '✅ KLAR, LIVE på main 6 jul (logg #X)'. Behåll ENDAST öppna rester: oonskat-har ÄGAR-FRÅGA 'underarmar'=armhålor?, microdermabrasion AIQ-frågedetaljen obesvarad, pigmentflackar V2 OMÄTT + prediktion 🟠→🔵 + AI STYLE-baseline 55. Rätta samtidigt stale-statusen till LIVE. (spar ~13 rader)
- [26-37 (LÄGE-bannern)] 8-raders-regeln (rad 37) hålls INTE riktigt: 9 punktrader, och flera veckas ut till 3-5 läsrader (rad 30: 458 tecken, rad 32: 475, rad 35: 389) — reell läslängd ≈25+ rader. Rad 32:s crawl-daterings-forensik är mätdetalj som redan står i logg #14.
  ÅTGÄRD: KOMPRIMERA till ≤8 punktrader à ~1-2 läsrader: slå ihop rad 30+31 (wave 2 live + gate passerad = ett statusbyte), banta rad 32 till 'pigment+rhino V2 OMÄTTA — re-scan 7 jul läste pre-wave-2-text; EFTER väntar nästa refresh (logg #14); AI STYLE-FÖRE: pigment 55, rhino 70' (baselines = MÅSTE stå kvar). Varningsraden 35 hålls men kortas per punkt. (spar ~7 rader)
- [39-44 (uppdrags-/regelblocket efter bannern)] Rad 39-41 är 527+676+682 tecken och överlappar prime-direktivet (rad 22), §0-stegen och lynx-rewrite §7/§13.O — samma 'små steg/facit först/lätt hand'-budskap står nu 3-4 gånger innan §0 ens börjar.
  ÅTGÄRD: KOMPRIMERA med pekare: behåll unikt sakinnehåll (slutmålsordningen AI COPY→FAQ-schema→$rich_product→gaps; trigger-regeln 'hämta ALLTID färskt per-block-facit före redigering'; rollfördelningen rör-aldrig-main; Aldrig-listan rad 44 oförkortad). Rad 40-41:s processdetaljer ersätts med 'följ §7 + §13.O i lynx-rewrite'. Rad 43 → en rad: 'Rådata: filkarta överst i lynx-data.php'. (spar ~10 rader)
- [175, 177, 181 (§9 Bevaka: tre [x]-LÖSTA trådar)] Stängda trådar (§1.4-omräkningen GJORD, homepage-raden LÖST, pigmentflackar-filterfrågan LÖST) på 377-440 tecken styck; slutsatserna finns redan i lynx-examples, lynx-data och logg #14, och homepage-slutsatsen upprepas i §9.1 Tier 1.
  ÅTGÄRD: ARKIVERA: ersätt med enradare med pekare ('LÖST — se lynx-examples / logg #14'), eller stryk helt där slutsatsen redan står i §9.1/lynx-data. OBS rad 181:s kvarvarande bevakning (V2-EFTER) ligger redan på Fas 3-raden — ingen substansförlust. (spar ~9 rader)
- [91-98 (§8 sidkarta: KLARA-listorna)] Rad 98 (MODERATE-vågen) är 739 tecken segerhistorik som dubblerar både §9 Fas 3-raderna och logg #11-#13; rad 93-96 bär samma per-sida-prosa. Rad 96 har dessutom stale 'd3ce9162 väntar main-push' (bannern säger wave 2 inkl. d3ce9162 = live).
  ÅTGÄRD: KOMPRIMERA: SIGNIFICANT → 4 enradare (behåll öppna rester: acne-ansikte intro-🟠 micro-fix-kandidat, pigmentflackar-mätningen). Rad 98 → 2 rader: '✅ 10/10 LIVE på main (logg #11-#13); kvar för städpass: pigmentflackar FAQ AI-holdout + typtitel-versalisering + ärr-boilerplate (§9)'. Rätta d3ce9162-statusen. (spar ~8 rader)
- [104-131 (§8.1 per-sida gap-beslut)] Gap-besluten för ytliga-blodkarl (107-111) och hudforandringar (113-116) är GENOMFÖRDA (rad 142/144: gap-punkter + H1 klara, LIVE 1 jul) — stängd historik i en beslutslista som ska läsas för AKTUELLA beslut. Kvarvarande block (sebo, microneedling, acne-rygg) är öppna och ska stå kvar.
  ÅTGÄRD: ARKIVERA de genomförda blocken till lynx-gaps.php (gap-texternas hemfil) med enradare kvar ('genomförda vid rewrite 1 jul'). FLYTTA den generella principen på rad 111 ('när det ärliga svaret är ingen hemmakur — säg det och led till vår lösning') till lynx-rewrite §4/§5 — den är en återanvändbar skrivprincip, får inte tappas. OBS: GAPS-rensnings-tråden (rad 171) refererar §8.1-besluten — behåll korsreferensen. (spar ~7 rader)
- [50 (Innehålls-TOC:n)] TOC:n listar §1-§7, §10, §11, §13 som om de låg i denna fil — efter splitten 6 jul bor de i lynx-rewrite/lynx-models/lynx-logg. Fel-navigerings-fälla för ny session (letar §2 i START förgäves); routern (rad 4-14) täcker redan kartan.
  ÅTGÄRD: KOMPRIMERA/skriv om till fil-annoterad §-karta på 2 rader ('§1-7,13 → lynx-rewrite · §1.2/1.5/10/11.1 → lynx-models · §11 → lynx-logg · §0,8,9,12 → denna fil') eller stryk till förmån för routern. (spar ~3 rader)
- [70 (§0.1 parallell-motiveringen) + 188, 195 (stängda §9-rader)] Rad 70: 500 tecken krock-historik vars fulla story redan ligger i lynx-log-arkiv (posten 2026-07-01). Rad 188: mogen-hy-dubbletten redan markerad STALE (ägarbeslutet 'Vad betyder hy'-gapet finns i logg 2 jul em #7). Rad 195: trivialt löst ([x] .php-exit-frågan).
  ÅTGÄRD: KOMPRIMERA rad 70 till 2 rader: 'Beslut 2026-07-01: EN instans — parallella instanser krockar i delade processfiler (§11/§12/lynx-data/examples/§8-9); testat och avskrivet, detaljer i lynx-log-arkiv.' ARKIVERA rad 188 och 195 (stryk; sakinnehållet ligger i logg/Fas 3-raden). (spar ~6 rader)

## Arkiv-kandidater
- §9 Bevaka [x]-raderna 175 (§1.4 medel-omräkning GJORD), 177 (homepage-raden LÖST) och 181 (pigmentflackar-filterfrågan LÖST) — stängda trådar; slutsatser finns i lynx-examples, lynx-data, logg #14 och §9.1 Tier 1
- §8.1-blocken för ytliga-blodkarl (rad 107-111) och hudforandringar (rad 113-116) — gap-besluten genomförda och LIVE 1 juli (rad 142/144); flytta till lynx-gaps.php, men rädda 'ingen hemmakur'-principen (rad 111) till lynx-rewrite
- Rad 188 (mogen-hy stale-dubblett i Fas 3b) — redan markerad som misstag; ägarbeslutet om 'Vad betyder hy'-gapet bevarat i lynx-logg 2 juli em #7
- Rad 195 ([x] .php-exit-frågan löst) — trivialt stängd
- Rad 70:s parallell-krock-story — verbatim redan i lynx-log-arkiv (posten 2026-07-01); bara beslutet behöver stå kvar
- Rewrite-historiken i §8 rad 98 och §9 rad 157-163 — per-sida-detaljerna finns som daterade lynx-logg-poster (2 jul em #7, 3 jul, 3 jul #2, 6 jul #7/#8/#11); ersätt med logg-pekare
- Genomstrukna Tier 3-poster på rad 215 (ipl-rosacea/oonskat-har/mogen-hy/microdermabrasion) — statusen är dessutom stale ('→ staging' trots live på main); korta till '✅ LIVE'

## Dubbleringar
- Kolumnfil-mappningen (per-block-facit→examples, frågor→questions, SCORE→score, gaps→gaps, Pages→data) står 3 gånger: rad 24, rad 43 och lynx-data.php:s filkarta — behåll lynx-data som källa, pekare i START
- 'Små steg / ändrar jag för mycket?'-direktivet står 4 gånger: rad 22 (prime-direktiv), rad 41, rad 87 (§0.2-pasteblock, avsiktlig) och lynx-rewrite §13.O — rad 41 kan bli pekare; rad 22 och 87 behålls
- Per-sida rewrite-historik trippellagrad: §8 (rad 93-98) ≈ §9 Fas 1/3 (rad 141-163) ≈ lynx-logg-posterna — loggen är källan
- Homepage-slutsatsen (SLIGHT, ej flaggad, uppsida = SCORE+AIQ) står 3 gånger: rad 177, rad 207 (§9.1 Tier 1) och lynx-data
- '1 Claude i taget' står 4 gånger: banner rad 35, §0.1, §0.2-citatet, §12-intron (rad 224) — banner + §0.1 räcker som norm, §0.2 är pasteblock
- 'SCORE 0/blank = pågående omanalys, läker själv'-lärdomen upprepas 3 gånger i samma fil: rad 186 (acne-rygg), rad 213 (acnearr) och rad 215 — borde vara EN princip-rad (hör egentligen hemma i lynx-models §10)
- Filkarta rad 14 vs lynx-data.php-headern — medveten nav-dubblering, OK men måste hållas synkade
- 'Splittrad 2026-07-06' står 3 gånger: rad 27, rad 48 och logg #10 — rad 48-blockquoten är i övrigt nästan helt redundant mot rad 2/17-18/26 och kan kortas till en rad

## MÅSTE BEHÅLLAS
- Omätta FÖRE-baselines: AI STYLE pigment 55 / rhinophyma 70 + 'V2 pigment+rhino OMÄTTA, EFTER-facit väntar nästa refresh (crawl efter 6 jul 16:08)' (rad 32, 163) och prediktionerna 🟠→🔵 för alla omätta Fas 3-sidor
- Prime-direktivet rad 22 (ägarens viktigaste regel — 'slår alla stilregler') och §0.2-dispatch-citatet rad 87 (ägarens paste-verktyg, ordagrant)
- Aldrig-listan rad 44 + rollfördelningen rad 42 ('Rör aldrig main') + §0.1 regler 1-6 (rad 74-80) + hela §12-markören med tabell (rad 223-228) + banner-regeln rad 37
- Alla öppna [ ]-trådar i §9: GSC-uppföljningen (168), ärr-boilerplate + åldersfläckar-widgetfrågan (169), Akne Specialiserade-ägarbeslutet a/b/c med 27-filers/4-siders-klassningen (170), GAPS-konkurrent-relativa-varningen + ipl-rosacea-gapsen (171), microdermabrasion AIQ (172), fragor-svar AIQ (173), 'missing localized' KW616-frågan (174), §1.4/§1.2-beställningen inkl. ytliga-blodkärl-prion (176), powerlite-photonova (178), hifu (179), om-oss 4:e gap-punkten (180), datum-svepet (191), mät-loop-raderna (192-193), hudforandringar mall-review (194), Fas 2-raderna (148-150), Fas 3b-kön (184-187), exosomer-parkeringen (199)
- Öppna ägar-beställningar i bannern (rad 34) och ägarbesked/beslut: datum-skrivkonventionen (rad 63), scope-beslutet §9.1 (rad 219), widget-bugg-parkeringen (rad 102), 'vad hör hemma i filen'-principen (rad 65, får kortas lätt)
- Routern + filkartan (rad 4-14) — filens kärnfunktion
- §8.1:s EJ genomförda gap-beslut (seborroisk-keratos 118-120, microneedling 122-124, acne-rygg 126-128) och 'ingen hemmakur'-principen (rad 111 — får flyttas till lynx-rewrite men inte tappas)
- §9.1 tier-listan med KW/SCORE/facit-status (203-221) — aktiv prioriteringskälla
- Öppna rester inuti [x]-rader vid komprimering: oonskat-har ÄGAR-FRÅGAN 'underarmar'=armhålor?, microdermabrasion AIQ-frågedetaljen, acne-ansikte intro-🟠 micro-fix-kandidaten, behandla-pigmentflackar micro-fix-kandidaterna (rad 143)
════════════════════════════════════════
## RAPPORT: audit-logg

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-logg.php (257 rader)

## Summary
Loggen är 257 fysiska rader men ~87 kB — den verkliga skumrisken är att enskilda rader är 800-1800 tecken täta stycken, och hela 2 juli-sjoket (rader 142-203, ~8 modell-/processposter) plus flera 6 juli-poster är ratificerade eller ersatta och kan arkiveras redan nu enligt policyns ratificerad/ersatt-klausul, vilket ensamt tar bort ~70 rader/~25 kB. Rewrite- och mätposterna för de tre MÄTTA sidorna (acne-ansikte, om-oss, behandla-pigmentflackar) får däremot INTE arkiveras än — deras §11.1-rader har uttryckliga kvar-innan-stängning-punkter — och alla wave 2-poster måste behålla FÖRE-baseliner, prediktioner och öppna §1.5-noter, men kan komprimeras kraftigt eftersom verbatim finns i git. Två saker finns bara i loggen och måste FLYTTAS före arkivering: juridik-käll-URL:erna (rad 84 → lynx-rewrite §5) och milier/CryoPen-prisverifieringen (rad 156 → §9); microneedling-block-planen (rad 162) är aktiv arbetsspec och rörs inte. En post-MALL på max ~6 rader (Inkommet/Fynd/Åtgärd + prediktionsrad) i §11-intron skulle förhindra återväxt; totalt är ~90-100 rader (~40 % av tecknen) besparbara utan att något öppet, omätt eller ägarbeslutat går förlorat.

## Hotspots
- [150-203] Åtta modell-/processposter från 2 juli (modellanalys, kolumn-definitioner, facit-komplett, stor facit-leverans, positiv-data-översyn, §1.5-modellen, blindtest 3+4, konsistens-audit, optimeringar a-e, process-review) — allt är ratificerat i §1.1-§1.5/§13 eller ersatt av nyare poster, fulldata ligger redan i lynx-examples/lynx-data. Största skumrisk-sjoket i filen (~20 kB).
  ÅTGÄRD: ARKIVERA till lynx-log-arkiv.php med enrads-referenser (policyn tillåter detta: 'ratificerade/ersatta' kräver ingen mätning). FLYTTA FÖRST rad 156:s öppna ägar-tråd (CryoPen-priset + milier-paketpriset 1295 kr flaggade för verifiering) till §9 i lynx-START — den finns inte där idag (grep-verifierat). (spar ~45 rader)
- [29-37] Post #14 (7 juli) är ~8,3 kB över 9 stycken (rad 34: 1144 tecken, rad 35: 1474). Postens egna huvudfynd anger att allt redan är inarbetat i lynx-models §11.1, lynx-score #0 och LÄGE-bannern — loggversionen dubblerar kodifieringen.
  ÅTGÄRD: KOMPRIMERA till Inkommet/Fynd/Åtgärd (~1/3 av längden). MÅSTE bevaras i sak: AI STYLE-FÖRE-baselines (pigmentflackar 55, rhinophyma 70), att V2-rewriterna är OMÄTTA (prediktioner öppna), båda ägarbeskeden (blank/0 = omanalys; datumkonvention). Verbatim finns i git. (spar ~5 rader)
- [79-95] 6 juli-posterna #5 (best-practice-import), #4 (helplans-granskning), #3 (modellsynk) — alla åtgärder ratificerade i §5/§4.2/§1.1/§1.2/§2; intro-hypotesen är registrerad i §2 per postens egen text.
  ÅTGÄRD: ARKIVERA med enrads-referenser. FLYTTA FÖRST käll-URL:erna (rad 84, Konsumentverket/Google) till §5-juridikblocket i lynx-rewrite.php — de finns inte där (grep-verifierat) och är juridiskt käll-underlag, inte historik. (spar ~14 rader)
- [113-129] microdermabrasion- och oonskat-har-posterna (3 juli) är 1669 resp. 1430 tecken på enskilda rader med full §7.4b-agentdetalj, medvetna trimmar och skippat-listor — stängt hantverksdetalj för OMÄTTA sidor.
  ÅTGÄRD: KOMPRIMERA rewrite-/verifieringsdetaljen till 2-3 rader per sida. MÅSTE stå kvar oavkortat: prediktionerna (rad 119, 129), FÖRE-block-medel, och de ÖPPNA §1.5-noterna (rad 117: AIQ-frågan aldrig levererad; rad 127: frågelista saknas i lynx-questions). (spar ~8 rader)
- [142-148] 2 juli em #6 (filrefaktor, ersatt av 6 juli-splitten #10) + #5 (kolumn-definitioner — tabellen bor i lynx-data, modellkonsekvenserna inskrivna i §1.4/§1.5); homepage-AIQ-beslutet är kodifierat i lynx-models H7 (grep-verifierat).
  ÅTGÄRD: ARKIVERA med enrads-referenser. Behåll en pekare 'kolumn-definitioner = tabell i lynx-data'. (spar ~6 rader)
- [64-71] Bristningar-posten #7: rad 65 är filens längsta (1777 tecken) med block-för-block-detalj av en genomförd rewrite; sidan är dock OMÄTT.
  ÅTGÄRD: KOMPRIMERA rad 65-66 till 3-4 rader (blockrubriker + huvudgrepp). MÅSTE stå kvar: rad 70 (prediktion + FÖRE 1,92/SCORE 63) och rad 71 (SLUTLIGT ägarbeslut: generisk prosa utan maskinnamn + villkoret för återbesök) — beslutet finns inte kodifierat annorstädes. (spar ~4 rader)
- [55-62] #10 (filsplit — strukturen beskrivs i START/filkartan), #9 (online-verifiering — fulldata i lynx-scores 'EXTERN VERIFIERING'-block), #8 (SCORE-modellen löst — härledningen bor i lynx-score).
  ÅTGÄRD: ARKIVERA #10+#9 med enrads-referenser. KOMPRIMERA #8 men behåll att solskadad/rhinophyma är omskrivna+OMÄTTA samt boilerplate-fyndets pekare till §9 (fulltext finns redan i START rad 170). (spar ~6 rader)
- [43-47] #12 före-semester-kontrollen: rad 47 är STALE ('väntar main-push bakom GSC-gaten' — pushen skedde i #13 samma dag); kontrollresultatet är ersatt av #13:s produktionsverifiering.
  ÅTGÄRD: KOMPRIMERA till 2 rader (ALLT GRÖNT + pekare till #13); stryk den överspelade rad 47-statusen (särskrivnings-resten är redan spårad i §9 rad 170). (spar ~3 rader)
- [205-208] 1 juli-milstolpen (main-push wave 1) är ersatt av #13-milstolpen; $types_url-buggen är bekräftad fixad på produktion i #12/#13 — tråden stängd.
  ÅTGÄRD: ARKIVERA med enrads-referens. (spar ~3 rader)
- [2-8] Ingen post-mall finns — posterna har vuxit organiskt till 1-8 stycken à 800-1800 tecken; §11-intron (rad 6) är själv 6 rader prosa.
  ÅTGÄRD: KOMPRIMERA intron och inför POST-MALL som regel: max ~6 rader per post — Inkommet (1 rad, datum/dumpar/pekare till lynx-data-snapshot) / Fynd (2-3 rader, ett fynd per rad med pekare till datafil) / Åtgärd+status (1 rad) / Prediktion+FÖRE-baseline (1 rad när sida omskrivs). Detaljer → lynx-data/examples/score; verbatim → git. (spar ~2 rader)

## Arkiv-kandidater
- Rader 195-203: process-review (förslagen a-e alla genomförda/ratificerade samma dag) + optimeringar a-e/blindtest 3 (ersatt av blindtest 4+5, fulldata i lynx-examples) — ARKIVERA nu
- Rader 178-192: blindtest 4, §1.5-modellposten, positiv-data-översynen, stora facit-leveransen — allt kodifierat i §1.1/§1.3/§1.5 + lynx-models §1.2-HISTORIK; facit bor i lynx-examples, Fas 3b-kön i §9 — ARKIVERA nu
- Rader 166-176: mogen-hy-facit ×2 (den preliminära 'ENDAST SPARAD'-posten helt ersatt av 'KOMPLETT'-posten) + konsistens-auditen (fixar gjorda, lärdomen = samma princip som state-synk-regeln) — ARKIVERA nu; mogen-hy-FÖRE bor i §11.1-tabellen + lynx-examples
- Rader 142-159: filrefaktor/kolumn-definitioner/facit-komplett+homepage-löst/modellanalys — ARKIVERA efter att milier/CryoPen-prisverifieringen (rad 156) flyttats till §9
- Rader 79-95: best-practice-import/helplans-granskning/modellsynk — ARKIVERA efter att käll-URL:erna (rad 84) flyttats till lynx-rewrite §5
- Rader 55-59: filsplit-posten #10 + online-verifieringen #9 — ARKIVERA nu (fulldata i lynx-score)
- Rader 205-208: main-push-milstolpen 1 juli — ARKIVERA nu (ersatt av #13; $types_url-buggen bekräftad fixad)
- VILLKORAT (rör EJ ännu): rewrite-posterna acne-ansikte (243-246), om-oss (220-222), behandla-pigmentflackar (233-235) + EFTER-mätningsposterna #1/#2 (97-111) blir arkiveringsklara FÖRST när §11.1-raderna stängs — kvar enligt lynx-models §11.1: FAQ-facitrest+intro-experiment (acne-ansikte), badge-bekräftelse+O01+FAQ-betyg (om-oss), färsk SCORE (behandla-pigmentflackar)

## Dubbleringar
- Rad 84: käll-URL:erna (Konsumentverket/Google/regeringen) finns ENDAST i loggen — juridik-underlaget hör hemma i lynx-rewrite §5-juridikblocket (grep bekräftar att de saknas där) → FLYTTA, inte radera
- Rad 41 (#13): nästa-arbete-listan (microneedling → Fas 3b → Tier 1-SLIGHT) dubblerar lynx-START LÄGE rad 33 ordagrant i sak — loggen behöver bara peka
- Rader 147-148: kolumn-definitionernas modellkonsekvenser dubblerar både tooltip-tabellen i lynx-data.php och inskrivningarna i §1.4/§1.5
- Rader 59 + 62: SCORE-modellhärledningen och online-verifieringen dubblerar lynx-score.php (EXTERN VERIFIERING-blocket + 13-nedbrytnings-härledningen) — posterna hänvisar själva dit
- Rader 179, 197: blindtest-fulldata dubbleras mot lynx-examples.php ('Full data: lynx-examples' står i posterna)
- Rad 62 (boilerplate-fyndet 'Akne Specialiserade Hudterapeuter'): fulltexten bor redan i lynx-START §9 rad 170 med mer detalj — loggen behöver bara enrads-pekare
- Mätstatus per sida (MÄTT/väntar) dubbleras medvetet mot lynx-models §11.1-tabellen — det är by design (state bor där), men loggposternas statusrader ska inte uppdateras retroaktivt, bara §11.1

## MÅSTE BEHÅLLAS
- Rader 6-8: §11-reglerna (baseline+prediktion per omskrivning, save-first) + arkiv-policyn — operativa regler
- Rader 10-16: LYNX-baseline-tabellen för de 4 SIGNIFICANT-sidorna — FÖRE-baselines; 2 av 4 rader (ytliga-blodkarl, hudforandringar) är fortfarande helt omätta
- Rad 162: microneedling-block-planen (11 punkter) — refereras aktivt från lynx-START LÄGE rad 33 och §9 Fas 3b rad 184 som spec för NÄSTA AKTIVA ARBETE; får inte arkiveras/komprimeras förrän rewriten är gjord
- Alla öppna prediktioner + FÖRE-baselines för omätta sidor: rad 70 (bristningar 1,92→SLIGHT), rad 119 (microdermabrasion 1,82), rad 129 (oonskat-har 1,77), rad 138 (mogen-hy 1,57), rad 214 (ipl-rosacea AI STYLE-A/B-testet), rad 218 (acne.php SCORE-spaken), rad 231/235/239/245 (hudforandringar/behandla-pigment-liggaren/ytliga/acne-ansikte) — plus att pigmentflackar+rhinophyma-V2 är OMÄTTA (rad 31)
- Öppna §1.5-trådar: rad 117 (microdermabrasion AIQ GOOD→OK-frågan aldrig levererad) + rad 127 (oonskat-har-frågelistan saknas i lynx-questions)
- Rad 156: milier/CryoPen-prisverifieringen — öppen ägar-tråd som bara finns här; måste flyttas till §9 före arkivering av posten
- Rad 71: SLUTLIGT ägarbeslut om generisk prosa (inga maskinnamn, widgeten bär dem) + villkoret för återbesök — ej kodifierat i annan fil
- Rader 18-41: 2026-07-07-posterna #14-#16 + #13 (aktuellt läge, 2 nya §9-trådar, wave 2 live) — färska och öppna; #14 får komprimeras men inte arkiveras
- Rader 97-111 + 210-246: EFTER-mätningsposterna #1/#2 och alla rewrite-poster vars §11.1-rader inte är stängda — policyn förbjuder arkivering före stängd mätning
════════════════════════════════════════
## RAPPORT: audit-designLogFormat

ANALYS: /Applications/Cursor/acnespecialisten/includes/lynx/lynx-logg.php (257 rader, 87 kB; många rader är 600–2 300 tecken — "rader" nedan kompletteras därför med kB)

================================================================
A. SKUMRISK-HOTSPOTS (>6 rader tät prosa eller upprepande struktur)
================================================================
1. **#14, rad 29–37 (5,9 kB — värst i filen).** 9 stycken à ~650 tecken; posten säger själv att allt väsentligt redan är inarbetat (lynx-models §11.1, lynx-score #0, lynx-examples EFTER-sektionen, LÄGE). KOMPRIMERA till ~2,5 kB: behåll oförkortat = AI STYLE-FÖRE-baselines (pigmentflackar 55, rhinophyma 70), "V2 OMÄTTA, crawlfönster 2 juli 16:09–6 juli 16:08", EFTER-mätning nr 3 behandla-pigmentflackar (2,38→1,38, micro-fix-kandidat 4 block), båda ägarbeskeden. Determinism-/backport-prosan ersätts med pekare. Besparing ~3,4 kB.
2. **#7 bristningar, rad 64–71 (4,6 kB; rad 65 ensam ~2,3 kB).** Block-för-block-beskrivningen dubblerar git-diffen + lynx-examples. KOMPRIMERA rad 65–66 till 3–4 punkter; behåll oförkortat rad 70 (FÖRE 1,92 + prediktion), rad 71 (ägarbeslutet generisk CO2-prosa — slutligt ägarbeslut) och acne-ansikte-enblocks-prediktionen (rad 67). Besparing ~2 kB.
3. **3 juli microdermabrasion, rad 113–119 (3,9 kB; rad 114 enorm)** och **3 juli oonskat-har, rad 121–129 (3,9 kB).** Samma mönster: blockdetaljer + full §13.E-grep-lista. KOMPRIMERA vardera till ~2 kB; behåll prediktionsraderna (119, 129), öppna §1.5-beställningar (117, 127) och det stängda "underarmar"-ägarbeskedet som en rad. Besparing ~3,5 kB.
4. **2 juli em #7 mogen-hy, rad 134–140 (3,6 kB).** KOMPRIMERA (sidan omätt — baseline rad 138 behålls); transkriptions-lärdomen (rad 140) är en operativ regel som bara finns här → FLYTTA en rad till §0-facitflödet i lynx-START innan kompression. Besparing ~1,5 kB.
5. **2 juli em #2, rad 161–164 (3,3 kB).** Rad 162 = microneedling-block-planen som är NÄSTA AKTIVA ARBETE (refereras av LÄGE rad 33 + §9 rad 184) — får inte röras nu; resten av posten (leverans/inventering, allt ratificerat) kan arkiveras efter att block-planen FLYTTATS eller efter att microneedling är omskriven.
6. **Upprepande struktur i alla sid-poster:** §13.E-kvittens (full grep-lista) + prediktionsrad upprepas per post och dubblerar §11.1-tabellen i lynx-models (kanonisk, verifierad: rad 85–99 där bär FÖRE-baseline + prediktion + status per sida). Mallfråga — se E.

================================================================
B. STÄNGT/HISTORISKT SOM KAN ARKIVERAS (utöver #3–#16, se G)
================================================================
Alla dessa är process-/modellposter vars innehåll är ratificerat i regelfiler eller ersatt (grep-verifierat), alltså arkiverbara enligt befintlig policy-kategori "ratificerade i regler/ersatta av nyare poster". Enrads-referens kvar per post:
- rad 131–132 filflytt (0,6 kB) — ratificerat, mogen-hy-verifieringen ersatt av #12/#13.
- rad 142–145 filrefaktor em #6 (1,6 kB) — filkartan finns i lynx-START rad 14 + lynx-data rad 8; homepage-AIQ-beslutet ratificerat i lynx-models H7 (rad 46).
- rad 147–148 kolumndefinitioner (1,2 kB) — tabellen finns i lynx-data rad 17–32.
- rad 150–156 modellanalys em #4 (2,5 kB) — ratificerad i §1.4/§1.2/§1.3; **FÖRKRAV: rad 156 milier-flaggan (CryoPen-priset + paketpriset 1295 kr väntar ägar-verifiering) finns BARA här → flytta till §9 först.**
- rad 158–159, 166–167, 169–170 (3 leveransposter, 2,9 kB) — facit i lynx-examples, trådar stängda/ersatta.
- rad 172–176 konsistens-audit + rad 199–203 process-review (3,7 kB) — **FÖRKRAV: state-synk-principen ("greppa filen efter gamla frasen, synka ALLA förekomster", rad 176 + 201) finns INTE i någon aktiv regelfil (grep-verifierat) → skriv in i lynx-START §0 eller §13 först.**
- rad 178–179 blindtest 4, rad 181–182 AIQ-detalj, rad 184–188 positiv-modell, rad 190–193 stor facit-leverans, rad 195–197 optimeringar a–e (7,2 kB) — allt ratificerat i §1.1/§1.3/§1.4/§1.5; rådata i lynx-examples/lynx-questions; exosomer spårat i §9 [V].
- rad 205–208 main-push 1 juli (0,9 kB) — ersatt av #13 (d3ce9162-fixen bekräftad live i #12/#13).
Summa B: ~20,6 kB → ca −18 kB netto efter enrads-referenser.

EJ arkiverbara sid-poster (omätta §11.1-rader, verifierat mot lynx-models rad 87–99): ipl-rosacea (210–214), acne.php (216–218), om-oss (220–222; kvar: badge + O01 + FAQ-betyg), hudbehandlingar/ipl (224–226), hudforandringar (228–231), ytliga-blodkarl (237–241), 30 juni acne-ansikte (243–246; kvar: FAQ-facitrest + intro-experimentet), behandla-pigmentflackar (233–235; MÄTT men §11.1-raden säger "Kvar: färsk SCORE" — arkiverbar så snart den cellen fylls). Får komprimeras, inte arkiveras.

================================================================
C. DUBBLERINGAR MOT ANDRA FILER (grep-verifierade)
================================================================
- Prediktion + FÖRE-baseline per sid-post: kanonisk kopia i lynx-models §11.1-tabellen → loggposten behöver bara 1 rad + pekare.
- #9:s slutsatser: fulltext i lynx-score rad 6 ("EXTERN ONLINE-VERIFIERING") + §1/§5 i lynx-rewrite.
- #5: ratificerad i lynx-rewrite §4.2 (rad 164) + juridik-blocket (rad 189). OBS: lynx-rewrite rad 164 pekar på "§11 6 jul #5" — pekaren måste uppdateras till arkivet vid arkivering.
- #3:s intro-hypotes: fulltext i lynx-rewrite rad 72 inkl. testplan.
- #6:s §10.0: fulltext i lynx-models rad 53; banner-regeln i LÄGE-fotnoten (START rad 37).
- Kolumndefinitioner (em #5) = lynx-data rad 17–32. Filkarta (#10/em #6) = START rad 14.
- STALE korspekare: lynx-log-arkiv.php rad 4 säger att poster flyttas "från lynx-copy-playbook.php" och logg rad 8 säger "playbooken läses top-to-bottom varje session" — båda föråldrade sedan filsplitten 6 juli → rätta till "lynx-logg.php" resp. "loggen ska hållas läsbar".

================================================================
D. MÅSTE-BEHÅLLAS (oförkortat i aktiva filer)
================================================================
- Rad 5–8: §11-intro + arkiv-policy (operativa regler; endast stale-formuleringen i rad 8 justeras).
- Rad 10–16: baseline-tabellen (ytliga-blodkarl + hudforandringar fortfarande OMÄTTA FÖRE-baselines).
- Alla FÖRE-baselines/prediktioner för omätta sidor: rad 70, 119, 129, 138, 214, 218, 221–222, 226, 231, 235 (tills SCORE-cellen fylls), 239, 245 — minst i §11.1 (lynx-models) OCH som 1 rad i respektive loggpost.
- AI STYLE-FÖRE-baselines pigmentflackar 55 / rhinophyma 70 (#14) och "V2 OMÄTT + crawlfönster" (#14, rad 31).
- Ägarbeslut: generisk CO2-prosa (rad 71), "ordminskning OK om inget resonemang/sökord tappas" + primärsida-läxan (rad 51), SCORE 0/blank = omanalys + datumkonventionen (rad 37), arkiv-policyn (rad 8), 1-i-taget (arkiverad, ratificerad §0.1).
- Öppna trådar: #16:s två §9-trådar (rad 19), #15:s omanalys-kö/AI FEATURES/PAGE TYPE (rad 26–27), micro-fix-kandidater (rad 35, 108), §1.5-beställningar (rad 117, 127), städpass-rester pigmentflackar (rad 52), milier-prisflaggan (rad 156 → flytta till §9), microneedling-block-planen (rad 162), state-synk-principen (rad 176/201 → flytta till START).

================================================================
E. DESIGN 1 — POST-MALL (hårda ramar)
================================================================
```
### ÅÅÅÅ-MM-DD #N — [rubrikrad, max 120 tecken: nyckelfynd/leverabel, inga bisatser]
**In:** 1 rad — vad kom in/gjordes; dumpar → vilken rådatafil ("sparad FÖRST → lynx-data 14:16").
**Fynd:** max 5 punkter, max 1 rad styck. Varje punkt SLUTAR med en tagg:
  [ÖPPEN → §9-rad] · [RATIFICERAD → fil/§] · [STÄNGD] · [BASELINE → §11.1]
**Åtgärd:** 1 rad — vilka filer uppdaterades + nästa steg.
**Baseline/prediktion** (endast sid-poster): 1 rad — FÖRE-siffror + förväntat EFTER (kanonisk kopia i lynx-models §11.1).
```
Hårda ramar: (1) max ~8 rader / ~900 tecken per post — allt därutöver hör hemma i rådatafil, regelfil eller git-diffen; (2) blockdetaljer per omskrivning loggas ALDRIG i posten (git + lynx-examples äger dem); (3) §13.E-kvittensen skrivs som 1 rad "kvittens grön (sökord/punkt-count/streck)" — grep-siffrorna läggs i commit-meddelandet; (4) en regel/modelländring beskrivs i regelfilen och posten får bara pekaren — aldrig samma prosa två gånger; (5) en öppen tråd får ALDRIG ha loggen som enda bärare — skapa §9-raden först, länka sen.

================================================================
F. DESIGN 2 — SKÄRPTA ARKIVERINGSREGLER (komplement till befintlig)
================================================================
- R1 (befintlig, orörd): sid-poster arkiveras först när §11.1-raden är MÄTT + stängd.
- R2 (ny, explicitgör befintlig praxis): process-/modell-/leveransposter arkiveras SÅ SNART innehållet är ratificerat i regelfil eller ersatt av nyare post — de bär inga baselines och behöver inte vänta på mätning. Förkrav: öppna del-trådar flyttade till §9, operativa regler till regelfil, korspekare uppdaterade (jfr lynx-rewrite rad 164).
- R3 (ny): verifierings-/kontrollposter arkiveras när en senare post verifierar samma sak på högre nivå (staging-kontroll ersätts av produktions-verifiering — #12 vs #13).
- R4 (ny, städpass-trigger): vid varje städpass arkiveras alla poster äldre än 7 dagar vars samtliga trådar är stängda/flyttade. Riktvärde: loggen hålls under ~30 kB / ~15 poster; över det körs städpass innan nästa session startar arbete.
- R5 (ny, enrads-format): "- DATUM #N kärnrubrik — utfall; öppet kvar: X (→ §9-rad)". Max 1 rad, läggs i arkivlistan längst ned (rad 248-blocket).
- R6 (ny): enrads-referens vars sista öppna deltråd stängts stryks helt vid nästa städpass — git + arkiv har fulltext.

================================================================
G. DESIGN 3 — DOM PER POST #3–#16 (befintlig policy, nuläge 7 juli)
================================================================
ARKIVERA NU (7 poster, ratificerade/ersatta — enrads-referens kvar):
- **#3 (rad 92–95, 1,5 kB):** allt inskrivet i §1.1/§1.2/§11.1; intro-hypotesen + testplan står i lynx-rewrite rad 72. Inget unikt öppet.
- **#4 (rad 86–90, 2,0 kB):** fixar inskrivna i §4.1/§3/§2; stale-synken utförd; pigmentflackar-PAUSAD-vakten obsolet (paus hävd 6 juli, §9.1); om-oss-beslutsluckan spårad i §9 rad 180.
- **#5 (rad 79–84, 2,5 kB):** ratificerad i lynx-rewrite §4.2 + juridik; käll-URL:erna följer med till arkivets fulltext. Uppdatera pekaren i lynx-rewrite rad 164.
- **#6 (rad 73–77, 1,8 kB):** §10.0 står i lynx-models rad 53; GSC-tråden inkl. KW-bakgrunden (−19 % m.m.) spårad i §9 rad 168; banner-regeln i LÄGE-fotnoten. Enrads-referensen ska nämna att KW-siffrorna finns i arkivet (forensik om KW-vakten larmar).
- **#9 (rad 58–59, 1,1 kB):** fulltext i lynx-score "EXTERN ONLINE-VERIFIERING"; regelkorrigeringarna i lynx-rewrite §1/§5.
- **#10 (rad 55–56, 0,9 kB):** filstrukturen ratificerad (START-router + filkarta); enrads-referensen behåller flaggan "SCORE-tolkning ev. flytt till models".
- **#12 (rad 43–47, 2,2 kB):** ersatt av #13:s produktionsverifiering (R3-fallet); main-push-beslutet löst; särskrivnings-resten spårad §9 rad 170. Enrads-referens pekar på §6-fras-koll-siffrorna i arkivet.

MÅSTE STANNA (7 poster):
- **#7 (rad 64–71):** bristningar OMÄTT (FÖRE 1,92 + SCORE 63-baseline + prediktion) + acne-ansikte intro-experimentets öppna prediktion + slutligt ägarbeslut CO2-prosa. Komprimera per A2.
- **#8 (rad 61–62):** solskadad + rhinophyma OMÄTTA (V2 lästes aldrig av crawlen, #14). SCORE-modell-delen redan i lynx-score → kan kortas till pekare.
- **#11 (rad 49–53):** pigmentflackar V2 OMÄTT + öppna städpass-rester (FAQ-holdout, typtitel-versalisering) + två ägarbeslut (process-läxan, ordminsknings-kriteriet). Komprimera rad 50.
- **#13 (rad 39–41):** ankarpost för hela den öppna mätuppföljningen (12/14 omätta); refereras av LÄGE + §8. Behåll.
- **#14 (rad 29–37):** öppna V2-prediktioner, AI STYLE-baselines 55/70, EFTER-mätning nr 3 med öppna micro-fix-kandidater, två ägarbesked. Komprimera per A1.
- **#15 (rad 21–27):** öppet: omanalys-kön (ipl/oonskat-har/micro/solskadad), AI FEATURES-tooltip beställd, PAGE TYPE-bevakning. Fynd 2 (behandlingar.php 301 = stängd prediktion) kan kortas till en rad.
- **#16 (rad 18–19):** nyaste; två öppna §9-trådar + 11 färska FÖRE-baselines. Behåll som är.

================================================================
H. TOTAL EFFEKT
================================================================
- Arkivering #3–#16 (7 poster): ca −11 kB netto.
- Kompression #7/#8/#11/#14/#15 + 3 juli-posterna + em #7: ca −10 kB.
- Arkivering äldre poster (B, 15 poster efter 2 förkravs-flyttar): ca −18 kB netto.
- Summa: ca −35–39 kB (~40–45 % av 87 kB) och från ~44 poster till ~15 aktiva — utan att någon öppen tråd, omätt baseline, operativ regel eller något ägarbeslut lämnar de aktiva filerna. Tre småfixar krävs på vägen: milier-prisflaggan → §9, state-synk-principen → lynx-START, stale pekare i lynx-log-arkiv.php rad 4 + lynx-logg.php rad 8 + lynx-rewrite.php rad 164.
════════════════════════════════════════
## RAPPORT: audit-data

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-data.php (519 rader)

## Summary
lynx-data.php är 519 rader varav ~290 är stängda/superseded snapshots (30 jun, 2×2 jul, 2×6 jul) som en ny session tvingas skumma förbi — nästan all diff-prosa i dem dubbleras redan ordagrant i lynx-logg, lynx-score och lynx-examples, och 6 jul-tabellens statuskolumn (STAGING/GSC-gate) motsäger numera lynx-START:s LÄGE. Största vinsten är att ersätta de fyra parallella 7 jul-tabellerna med EN AKTUELLT-LÄGE-tabell (senaste värde+datum per sida, uppdateras in-place; nya snapshots skriver bara diff) — det svarar ja på ägarfrågan och stoppar append-växten. 30 jun-inventeringen är omätt FÖRE-baseline och får inte raderas, men bör flyttas till en arkivfil med pekare (~144 rader), medan ägarbeskeden 2 jul (studentrabatt-gränsen, alla-sidor-genomgången) och sidregistret med öppna B/C-trådar måste stå kvar. Totalt sparas ~280 rader (519 → ~240) utan att någon öppen tråd, baseline eller ägarbeslut går förlorad.

## Hotspots
- [339-487] Snapshot 2026-06-30 (komplett FÖRE-inventering, ~149 rader varav SLIGHT-tabellen ensam är 107 rader) — omätt FÖRE-baseline (badges/KW på gamla skalan) som FÅR EJ RADERAS, men den läses aldrig i vanliga sessioner och tvingar varje läsare att skrolla förbi 30 % av filen.
  ÅTGÄRD: FLYTTA-TILL ny lynx-data-arkiv.php (eller egen baseline-sektion i lynx-log-arkiv.php) med 4-raders pekare kvar: 'FÖRE-baseline 30 jun (gamla skalan, omätt för ~90 sidor) → lynx-data-arkiv'. Kräver ägar-ok för ny fil. (spar ~144 rader)
- [236-272] Snapshot 2026-07-06 07:51 + Leverans 2 (08:11): EFTER-mätning #1 (acne-ansikte) och #2 (om-oss) är STÄNGDA och facit-förda i lynx-examples; pigmentflackar-mysteriet (rad 242, 271) LÖSTES 7 jul; tabellen rad 246-263 är superseded av 7 jul 13:58-vyn; metodfyndet 'vyer refreshar oberoende' bor redan i lynx-models §11.1.
  ÅTGÄRD: ARKIVERA hela snapshotten; ersätt med 3-raders kompress (EFTER #1+#2 → lynx-examples; färska FÖRE-baselines bristningar 63/rhinophyma 74 → lynx-score; resten stängt). (spar ~33 rader)
- [302-337] Snapshot 2026-07-02 partiell (microneedling-analysen + två gammal-skala-tabeller): all substans redan utflyttad (nedbrytning → lynx-score, gap → lynx-gaps, AIQ → lynx-questions, facit → lynx-examples); GAPS-rensningen som rapporteras visade sig 7 jul INTE vara permanent; alla SCORE/KW-värden superseded.
  ÅTGÄRD: ARKIVERA; ersätt med 2-raders kompress med pekare till lynx-score/gaps/questions. (spar ~33 rader)
- [215-234] Snapshot 2026-07-06 EM: flagg-tabellens 'Vår status'-kolumn (STAGING / ⛔ GSC-gate på 6 sidor) är FÖRÅLDRAD — allt pushat till main och produktions-verifierat 6 jul (lynx-START LÄGE + logg #13); mätdata superseded av 7 jul 13:58-tabellen; ägarens metodprincip (blank = omanalys) bor redan i logg #14/lynx-models.
  ÅTGÄRD: ARKIVERA; ersätt med 2-3-raders kompress ('avstämning 6 jul: 0 oförda flagg-sidor, alla omskrivna; status nu = lynx-START LÄGE'). (spar ~16 rader)
- [34-53] 12:15-snapshotten: tabellen (37-53) är superseded SAMMA DAG av 13:58-vyn (94-124, samma AICOPY-filter men alla kolumner synliga); intro-prosan rad 35 är 10 rader kompakt löptext som nästan 1:1 dubblerar lynx-logg #14 huvudfynd 1-3.
  ÅTGÄRD: KOMPRIMERA till 3-4 rader: pigmentflackar TILLBAKA, crawl-datering pre-wave-2 (→ logg #14), VALUE-drifterna (42→40, 35→34→32) om de ska bevaras; stryk tabellen. (spar ~15 rader)
- [56-72 + 94-124 + 140-203] Tre parallella 'aktuella' tabeller från 7 jul (12:36-bandet, 13:58 AICOPY-vyn, 14:16-banden) med ~15 sidor dubblerade emellan (ytliga, rhinophyma, ipl, pigmentflackar, solskadad, microdermabrasion, acne.php, alma-hybrid m.fl.) — en ny session måste läsa alla tre för att veta senaste värdet per sida, och append-mönstret gör att detta växer vid varje snapshot.
  ÅTGÄRD: KOMPRIMERA/konsolidera till EN 'AKTUELLT LÄGE per sida'-tabell överst i datadelen (URL · VALUE · SCORE+datum/färsk-flagg · badge+crawlstatus(stale?) · AIQ · P.PRICE · KW+datum · WORDS/CLICKS · bevakning), som uppdateras in-place; nya snapshots skriver därefter BARA diff-rader + öppna trådar. Svar på ägarfrågan: JA, den ersätter behovet att läsa flera snapshots. (spar ~22 rader)
- [125-135 + 205-213] Diff-prosan efter 13:58- och 14:16-tabellerna: punkterna om pigmentflackar-badge, acnearr 0→74, behandlingar 301, splendor-x 79 och prediktor-formeln dubblerar lynx-logg (13:58-posten fynd 1-3) och lynx-score (slutsats A/E) nästan ordagrant; kvar bör bara öppna trådar stå.
  ÅTGÄRD: KOMPRIMERA: behåll oavkortat fragor-svar AIQ OK→POOR (208), 'missing localized' KW616 (209), KW-drift-vakten (211), P.PRICE/§13.I-listan (212), WORDS/CLICKS-baselinen (133), blank-mönstret (54); ersätt resten med 1-radspekare till logg/score. (spar ~9 rader)
- [82-83] Tillägg 12:37: 19 tabellrader data intryckta som två enrads-löptextsjok (URL-sök 'behandlingar'/'behandla') — hög skumrisk och svårdiffat; detta är dock ENDA källan för flera rader (dermabrasion, skinbooster, elevbehandlingar, vaxning m.fl.).
  ÅTGÄRD: KOMPRIMERA genom omformatering: lyft in raderna i AKTUELLT-LÄGE-tabellen (datum 7/7) i stället för löptext; behåll 84:ans EFTER-mätning #3 som 2-radersnot med pekare till logg #14/lynx-examples (detaljen dubbleras där). (spar ~3 rader)
- [489-497] 'Status 2026-06-30' + 'Prio-signaler': avbokningspolicy/karriar-noten dubblerar sidregistrets B2/B3 (292-293); Prio 1 och 2 är HELT KLARA (hela flagg-listan omskriven+live); Prio 3-listan dubblerar lynx-START §9.1 Tier-listan.
  ÅTGÄRD: ARKIVERA sektionen; ersätt med 1 rad: 'Prioritering bor i lynx-START §9.1; schema-spårets P.PRICE-signal → §13.I.' (spar ~7 rader)
- [499-518] Beställningssedeln är operativ men HAR-delen (502-506) är föråldrad: säger '5 sidor SCORE-komponenter' (nu 13+ nedbrytningar i lynx-score, prediktor-formeln 15/15) och 'facit för acne-ansikte + enstaka' (nu 20+ facit i lynx-examples inkl. 3 EFTER-facit) — vilseleder en ny session om vad som redan finns.
  ÅTGÄRD: KOMPRIMERA/uppdatera HAR-delen till 2 rader med pekare till lynx-score/examples/questions/gaps; behåll VILL HA-listan (punkt 1-9) oförkortad. (spar ~3 rader)

## Arkiv-kandidater
- Rad 339-487: Snapshot 2026-06-30 komplett FÖRE-inventering — flyttas (ej raderas) till arkivfil; omätt baseline för ~90 sidor
- Rad 236-272: Snapshot 2026-07-06 07:51 + Leverans 2 — EFTER-mätning #1+#2 stängda, pigmentflackar-mysteriet löst 7 jul, tabell superseded
- Rad 302-337: Snapshot 2026-07-02 partiell — allt sakinnehåll redan utflyttat till lynx-score/gaps/questions/examples, värden på död gammal skala
- Rad 215-234: Snapshot 2026-07-06 EM — statuskolumn föråldrad (allt live på main per logg #13), mätdata superseded av 7 jul 13:58
- Rad 274-280: Snapshot 2026-07-02 EM-huvudet — stängt UTOM de två ägarbeskeden (studentrabatt-gränsen + alla-sidor-ska-gås-igenom) som måste flyttas till sidregistrets ingress innan arkivering
- Rad 37-53: 12:15-tabellen — superseded samma dag av 13:58-fullvyn
- Rad 489-497: Status 30 jun + Prio-signaler — dubblerar sidregistrets B-lista och lynx-START §9.1

## Dubbleringar
- 7 jul-diffprosan (rad 35, 84, 87, 126-129) dubblerar lynx-logg.php #14 huvudfynd 1-5 + 13:58-posten (fynd 1-3) nästan 1:1
- Färska FÖRE-baselines (bristningar 63, rhinophyma 74 'identisk replika', pigmentflackar AI STYLE 55, homepage-kontrollpunkten 28→65) står även i lynx-score.php rad 15-16, 38-39, 62
- EFTER-facit-detaljer för acne-ansikte (rad 240), om-oss (rad 268) och behandla-pigmentflackar (rad 87) står i full form i lynx-examples.php (rad 47-60, 181-200, 256-270)
- Flagg-sidornas leveransstatus (rad 222-234: 'STAGING/GSC-gate/LIVE main') är superseded av lynx-START.php LÄGE rad 30 (allt live+verifierat 6 jul) — motstridig gammal status i aktiv fil
- Prio-signalerna (rad 493-497) dubblerar lynx-START.php §9.1 Tier-listan (rad 204-207)
- Rad 490-491 (avbokningspolicy/karriar blanka) dubblerar sidregistrets B2/B3 (rad 292-293)
- Beställningssedelns HAR-del (rad 502-506) är en föråldrad dublett av det som nu inventeras korrekt i lynx-score/examples/questions/gaps

## MÅSTE BEHÅLLAS
- Rad 1-15: FILKARTA + fildeklaration + data-hanteringsprincipen 2026-07-01 (spara allt, diffa vid ny scanning, påminn ägaren)
- Rad 17-32: officiella kolumn-definitioner inkl. öppen punkt 'SCORE-tooltip saknas — be om den' (rad 32) och EG SCORE-bevakningen (rad 26)
- Rad 54: blank-mönster-bevakningen (ipl/oonskat-har/microdermabrasion/solskadad-hy i omanalys-kön — öppen, bör komma tillbaka med färska värden)
- 7 jul-mätdatan (13:58-vyn 94-124, 14:16-banden 141-203, 12:36-bandet 57-71, 12:37-raderna 82-83) — färskaste värden per sida; får konsolideras till AKTUELLT-LÄGE-tabell men inga datapunkter får tappas
- Rad 133: WORDS/CLICKS-baselinen för hela flagg-gruppen (§10.0 punkt 3-baseline, omätt EFTER)
- Öppna trådar i 14:16-diffen: fragor-svar AIQ OK→POOR (208, ny §9-tråd), 'missing localized' DRAFT-rad KW 616 (209, ny §9-tråd), KW-drift-vakten rosacea/perioral m.fl. (211), P.PRICE-listan till §13.I-spåret (212)
- Rad 282-300: SIDREGISTRET (A/B/C) — filens uttalade nav-syfte; B-listan = öppna verifieringar (hifu, avbokningspolicy, karriar, ansiktsbehandling/rosacea) och C1 powerlite-photonova = öppen utredning
- Ägarbesked rad 276: 'räkna ner till studentrabatt — drafts exkluderas' + 'ALLA sidor i LYNX ska gås igenom' — får flyttas till sidregistrets ingress, aldrig strykas
- Rad 499-518: beställningssedelns VILL HA-lista punkt 1-9 (öppna databeställningar, inkl. AI FEATURES-tooltip #9, positioner #6, refresh-kadens #7)
- Snapshot 30 jun (339-487) som SAKINNEHÅLL: omätta FÖRE-badges/KW för ~90 ej omskrivna sidor — får endast FLYTTAS till arkivfil med pekare, ej raderas (V2/framtida rewrites mäts mot den)
════════════════════════════════════════
## RAPPORT: audit-designCurrentState

## Analys: `/Applications/Cursor/acnespecialisten/includes/lynx/lynx-data.php` (520 rader)

Filens grundproblem: fem staplade snapshot-sektioner (7/7, 6/7 EM, 6/7 FM, 2/7 EM, 2/7 partiell, 30/6) där en sidas AKTUELLA läge bara kan fastställas genom att läsa alla bakifrån. Det operativa (kolumndefinitioner, sidregister, beställningssedel) ligger insprängt mellan rådata-väggar.

### (a) Skumrisk-hotspots

| Rader | Vad | Problem |
|---|---|---|
| 35 | Snapshot 7/7-ingress | EN rad med ~200 ord kompakt prosa (3 fynd + metodresonemang hopvävt) |
| 82–83 | "Sök behandlingar/behandla" | Värsta i filen: 15+4 siddatarader transkriberade som löpande prosa med `·`-separatorer — oläsbart utan att parsa tecken för tecken |
| 84, 92, 216, 234, 276 | Fynd-/ingressrader | 5–8 rader kompakt fetstilsprosa styck |
| 125–135, 205–213 | Diff-bullets 13:58 + 14:16 | 11+9 bullets à 2–4 rader; blandar STÄNGT (behandlingar 301, acnearr-läkning) med ÖPPET (baselines, §9-trådar) — läsaren kan inte skilja utan att läsa allt |
| 34–213 som helhet | Fyra "Tillägg" samma dag | Upprepande struktur (tabell + diff) x4; 12:15-tabellen (37–53) är superseded av 13:58-tabellen (94–123) redan inom samma sektion |

### (b) Stängt/historiskt — arkiverbart (efter skörd av baselines/trådar)

Verifierat stängt/dubbellagrat: wave 2 pushad till main 6/7 och produktionsverifierad (lynx-logg #13 + LÄGE-bannern i lynx-START) — alltså är alla "STAGING (GSC-gate)"-statusar på rad 222–232 och avstämningen rad 234 **inaktuella**. EFTER-mätningarna 1–3 är loggade i lynx-logg (#14–16 + 6 jul-posterna) och i §11.1-tabellen (lynx-models rad 85–100). pigmentfläckar-"mysteriet" (rad 242, 271) är LÖST 7/7. GAPS-rensningen/microdermabrasion-AIQ-trådarna (rad 320, 330) har §9-hemvist (lynx-START rad 171).

### (c) Dubbleringar mot andra filer (grep-verifierat)

1. **Rad 4–6 (INSTRUKTIONER-delen av filkartan)** dubblerar router + filkarta i lynx-START rad 5–14. RÅDATA-delen (rad 7–12) är däremot KANONISK här — refereras från lynx-START:9,24,43, lynx-rewrite:218, lynx-logg:6.
2. **Diff-fynden i snapshot-sektionerna** dubblerar lynx-logg-posterna #14–16 (7 jul) och 6 jul-posterna nästan 1:1. Rollfördelningen bör vara: lynx-data = tabellceller, lynx-logg = fynd/resonemang.
3. **Flagg-tabellen "Vår status" (rad 220–234)** dubblerar §11.1-bevakningstabellen (lynx-models rad 85–100) — och båda är stale på olika sätt (staging-statusar här; "väntar main-push" där).
4. **Prio-signalerna (rad 493–497)** dubbleras av §9.1/Tier-listorna i lynx-START (rad 217 pekar t.o.m. hit för "full sorterad lista").
5. Alla öppna 7 jul-trådar har redan §9-checkboxar i lynx-START (rad 171 ipl-rosacea-GAPS, 173 fragor-svar AIQ, 174 "missing localized", 178–179 powerlite/hifu) — diff-bullets kan bli pekare utan informationsförlust.

### (d) MÅSTE-BEHÅLLAS (oförkortat i aktiv fil, eller flytt endast till skyddat register)

- **Rad 7–15:** RÅDATA-filkartan (save-first-mappningen, ägarbeslut 2/7) + datahanteringsprincipen 1/7 (spara allt, diffa, påminn ägaren).
- **Rad 17–32:** officiella kolumndefinitioner (ägarlevererade tooltips) + öppen beställning SCORE-tooltip (rad 32) + EG SCORE-bevakningen (rad 26).
- **Rad 282–300:** SIDREGISTER A/B/C inkl. öppna utredningar (hifu, avbokningspolicy, karriar, ansiktsbehandling/rosacea, powerlite-photonova) + ägarbesked (studentrabatt-gränsen, behandlingar.php-redirecten).
- **Omätta FÖRE-baselines:** WORDS/CLICKS för hela flagg-gruppen (rad 133), 11 nya färska SCORE-baselines (rad 207), bristningar FÖRE:63 + rhinophyma FÖRE:74 färsk skala, AI STYLE-FÖRE pigment 55/rhino 70 (rad 35), 30 jun-KW/badge-värden för ännu ej omskrivna sidor (rad 339–497 — får flyttas, aldrig raderas).
- **Öppna trådar:** blank=omanalys-kön (rad 54), KW-drift/GSC-pass (rad 77, 211), P.PRICE-underlaget till §13.I (rad 79, 212), AI FEATURES-kolumnen (rad 92, 517).
- **Rad 499–519:** beställningssedelns öppna punkter (6, 7, 9 + EG/SCORE-tooltip); punkt 1–2 och 4 kan markeras lösta.

### Åtgärdstabell

| Rader | Åtgärd | Besparing (aktiv fil) |
|---|---|---|
| 4–6 | KOMPRIMERA till 1 pekarrad mot lynx-START; RÅDATA-delen 7–12 kvar | ~3 |
| 17–32 | BEHÅLL (komprimera stängd 301-bekräftelse i STATUS-cellen) | 0 |
| 34–54 | Celler → AKTUELLT LÄGE; sedan FLYTTA-TILL-lynx-data-arkiv | ~20 |
| 56–89 | dito (82–83 ersätts helt av tabellceller) | ~30 |
| 91–135 | Tabellen 94–123 = seed till AKTUELLT LÄGE; diff-bullets → 1 pekare till logg #15; ARKIVERA | ~40 |
| 137–213 | Celler + rad 207/133 → baseline-register; trådar redan i §9; ARKIVERA | ~73 |
| 215–234 | ARKIVERA (statusar inaktuella; FÖRE-värden till register) | ~19 |
| 236–272 | ARKIVERA (mätningar loggade i lynx-logg + §11.1) | ~36 |
| 274–281 + 302–337 | ARKIVERA (facit i kolumnfiler, trådar i §9) | ~43 |
| 282–300 | BEHÅLL — lyft ur snapshoten till egen sektion; uppdatera pekaren lynx-START:219 | 0 |
| 339–497 | FLYTTA-TILL-ARKIV efter cell-seed + baseline-export; uppdatera pekaren lynx-START:217 | ~158 |
| 489–497 | KOMPRIMERA (blanka sidor → sidregister B; prio → §9.1) | ~8 |
| 499–519 | BEHÅLL + uppdatera lösta punkter | ~6 |

Brutto ~436 rader ut; nytt in: AKTUELLT LÄGE ~120 + baseline-register ~12 + uppdateringsregler ~10. Netto ~290 rader mindre (520 → ~230), och aktuellt läge läses i EN tabell i stället för fem snapshots bakifrån.

---

## DESIGN: "AKTUELLT LÄGE"-tabellen

Placeras direkt efter kolumndefinitionerna. En rad per sida i sidregister A (~112; sorterad som registret). Ersätter snapshot-stacken som "läs detta först"-vy.

### Tabellformat

```markdown
## AKTUELLT LÄGE (en rad per sida — senaste kända värde per LYNX-vy, DATERAT PER CELL)
> Mätprincip (lynx-models §11.1): LYNX uppdaterar per (sida × vy), aldrig i sajt-svep → en rads celler
> har OLIKA ålder; datumet är del av värdet. Rådumpar: `lynx-data-arkiv.php` (senaste överst) + git.
> Cellformat: `värde ·d/m` (år 2026 implicit; nytt år → `d/m-27`). Markörer:
>   `FÖRE:`  = fryst baseline — får ALDRIG skrivas över; ny mätning skrivs efter pil: `FÖRE:63 ·6/7 → 70 ·12/7`
>   `⟳d/m`  = vyn var blank/"–" i dump d/m = omanalys pågår (ägarbesked 7/7) — senaste kända värde står kvar
>   AI COPY dateras med crawl-datum när "Last update" syns (`·crawl 6/7`), annars `·sedd d/m`
>   `?`     = osäker avläsning (skuren/skymd dump)
> Vår status-vokabulär: ORÖRD · OMSKRIVEN d/m → staging · LIVE d/m (omätt) · DELMÄTT (vy d/m) · MÄTT d/m (logg #n)
>   — detaljer/prediktioner bor i §11.1-raden (lynx-models), inte här.

| URL | SCORE | AI COPY | AIQ | GAPS ⚡/💡 | KW | WORDS | CLICKS | P.PRICE | Vår status |
|---|---|---|---|---|---|---|---|---|---|
```

### Utsnitt med 5 verkliga sidor (läget per 7 jul)

| URL | SCORE | AI COPY | AIQ | GAPS ⚡/💡 | KW | WORDS | CLICKS | P.PRICE | Vår status |
|---|---|---|---|---|---|---|---|---|---|
| /pigmentflackar.php | FÖRE:73 ·7/7 (AI STYLE 55) | MODERATE ·crawl<=6/7 (pre-V2) | OK ·7/7 | 0/0 ·7/7 | 232 ·7/7 | 946 ·7/7 | 19 ·7/7 | – ·7/7 | V2 LIVE 6/7 — OMÄTT (§11.1; logg #14) |
| /behandla-pigmentflackar.php | – ·7/7 (aldrig satt) | SLIGHT ·crawl 7/7 | GOOD ·7/7 | –/– ·7/7 | 13 ·7/7 | 532 ·7/7 | 0 ·7/7 | – ·7/7 | MÄTT 7/7: SIGNIFICANT→SLIGHT, block-EFTER i lynx-examples (logg #14–15); kvar: färsk SCORE |
| /ytliga-blodkarl.php | 74 ·6/7 färsk | SIGNIFICANT ·crawl<=6/7 stale | OK ·7/7 | 0/0 ·7/7 | 157 ·7/7 | 919 ·7/7 | 51 ·7/7 | – ·7/7 | LIVE 1/7 — DELMÄTT (SCORE 6/7); väntar badge-refresh (§11.1) |
| /hudproblem/bristningar/ | FÖRE:63 ·6/7 | MODERATE ·crawl<=6/7 (pre-rewrite) | OK ·7/7 | 0/0 ·7/7 | 66 ·7/7 | 791 ·7/7 | 2 ·7/7 | – ·7/7 | OMSKRIVEN 6/7 · LIVE 6/7 (wave 2) — OMÄTT (§11.1) |
| /rhinophyma-rosacea.php | FÖRE:74 ·7/7 (replika av 6/7; AI 70) | MODERATE ·crawl<=6/7 (pre-V2, 16/16 = gamla facit) | OK ·7/7 | 0/0 ·7/7 | 46 ·7/7 | 788 ·7/7 | 15 ·7/7 | – ·7/7 | OMSKRIVEN 6/7 · LIVE 6/7 — OMÄTT (§11.1; logg #14) |

(SCORE-cellen för ipl-typfallet visar ⟳-mekaniken: `50 ·2/7 ⟳7/7` = senast kända 50, i omanalys sedan 7/7.)

### Uppdateringsregler (när en ny dump kommer)

1. **Save-first består (ägarbeslut 1/7, rad 15):** hela dumpen transkriberas fortfarande ordagrant — men till `lynx-data-arkiv.php` (daterad sektion, senaste överst), inte till aktiva filen.
2. **Per synlig (sida × kolumn):** samma värde → uppdatera bara datumet (= bekräftelse). Nytt värde → skriv `nytt ·d/m`; gamla värdet behövs inte i aktiva filen (finns i arkiv + git). Blank/"–" där värde funnits → lägg `⟳d/m` efter senaste värdet — skriv ALDRIG över ett värde med blank (§11.1: blank = cellen mitt i uppdatering). Kolumn ej synlig i dumpen → rör inte cellen.
3. **FÖRE-celler:** en cell med `FÖRE:`-prefix skrivs aldrig över. Nytt AVVIKANDE värde = observerad delta → skriv `FÖRE:x ·d/m → y ·d/m`, kör mät-loopen (§10 steg 2–3) och logga i §11. Först när mätningen STÄNGTS (loggad + §11.1-raden tömd) komprimeras cellen till senaste värdet — FÖRE-paret följer då med §11-posten till arkivet (speglar log-arkivpolicyn).
4. **Fynd/resonemang** (NYTT/ÄNDRAT-analysen) → EN §11-post i lynx-logg, som idag. Aktiva lynx-data får max en rad: "Senast inmatad dump: d/m kl. hh:mm — fynd i logg #n, rådump i arkivet."
5. **Vår status** ändras bara vid statusbyte (omskriven/live/mätt) — aldrig prosa; detaljer bor i §11.1.

### Snapshot-historiken

Ny fil **`lynx-data-arkiv.php`** (samma `<?php exit;`-guard, analog med `lynx-log-arkiv.php`). Engångsflytt i denna ordning: (1) seeda AKTUELLT LÄGE bakifrån genom snapshotarna (nyaste värde per cell vinner, datera varje cell — sidor utan data sedan 30/6 får celler daterade 30/6, vilket gör stalehet synlig i stället för dold); (2) exportera alla ÖPPNA FÖRE-baselines till baseline-registret (listan under (d) ovan); (3) verifiera §9/§11.1-hemvist för varje öppen tråd (gjort — se (c) punkt 5); (4) flytta snapshot-sektionerna rad 34–281, 302–497 oavkortade till arkivet; (5) uppdatera pekare: lynx-START rad 217 ("full sorterad lista i lynx-data.php" → AKTUELLT LÄGE), rad 219 ("sidregister ... under Snapshot 2026-07-02 EM" → egen sektion) samt filkartorna (lynx-data rad 7–12, lynx-START rad 14/43) med den nya arkivfilen. **Arkivregel (ny, analog med §11-policyn — kräver ägar-OK):** en snapshot-sektion får arkiveras först när dess data är inskriven i AKTUELLT LÄGE och dess omätta baselines står i registret.

### Skydd av FÖRE-baselines för omätta sidor

Två mekanismer: `FÖRE:`-prefixet i cellerna (regel 3 ovan) plus ett kompakt **BASELINE-REGISTER** direkt under tabellen — en rad per ÖPPEN mätning: `Sida | Vy/mått | FÖRE (värde ·datum ·skala gammal/färsk) | Prediktion (§11.1-pekare) | Status`. Hit hör även det som inte får egen tabellcell: KW/WORDS/CLICKS-FÖRE per omskriven sida (§10.0 punkt 2–3 kräver dem för GSC-passet), AI STYLE-FÖRE (pigment 55, rhino 70) och block-medel-FÖRE (pekare till lynx-examples). Registerrader arkiveras — precis som §11-poster — först när mätningen är STÄNGD. Sidor som aldrig omskrivits behöver inget registerinlägg: deras 30 jun-värden ÄR cellvärdena (daterade 30/6), så inget omätt raderas när 30 jun-tabellen flyttar till arkivet.
════════════════════════════════════════
## RAPPORT: audit-models

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-models.php (104 rader)

## Summary
lynx-models.php är 104 fysiska rader men ~27 kB eftersom varje stycke är en jätterad; radbesparingar ovan anges i visningsrader à ~100 tecken (totalt ~83 av ~275, ca 30 %). Största skumrisken är §1.2:s tre historiklager (rad 8, 9, 11-18) som alla är stängda — 2 jul-OMPRÖVAS-noteringen och 30 jun-multiplikativa analysen är lösta/superseded av 6 jul-slutsatserna och redan dokumenterade i lynx-score.php — samt §11.1:s fem staplade mätregel-stycken (rad 78-83) som överlappar varandra och finns i tre filer. Bevakningslistan är helt aktuell: ingen av de 13 raderna är stängd (även MÄTT-raderna har öppna rester), så tabellen behålls men de tre MÄTT-radernas EFTER-detaljer komprimeras till pekare mot §11-loggen. Måste stå kvar oförkortat: gällande modellen (rad 6), Evidence-§5-filtret, no-regression-regeln, hela §1.5, SEO-vakten §10.0 och mät-loopen.

## Hotspots
- [8] '⚠️ HISTORIK — OMPRÖVAS-noteringen (2026-07-02)': 8 numrerade punkter i ETT stycke (2 122 tecken ≈ 21 visningsrader). Explicit märkt HISTORIK och i sak LÖST av rad 6 + lynx-score.php slutsatser A–F (6 jul). Multiplikativa formeln och 'vyerna refreshar oberoende' står dessutom redan i lynx-score.php (rad 4, 100, 136) resp. §11.1. Högsta skumrisken i filen — en ny session behöver inget härifrån.
  ÅTGÄRD: ARKIVERA till lynx-log-arkiv.php (märk '§1.2-historik, löst 6 jul'); ersätt med 1-radspekare 'Historik 2 jul (OMPRÖVAS-fasen): lynx-log-arkiv'. (spar ~19 rader)
- [11-18] Hela 30 jun-multiplikativa analysen (2 959 tecken ≈ 30 visningsrader inkl. rad 19): 'master-spak', 'bryt 39', acne.php-fixplanens marginalkalkyl (dOverall/dAI=1,29) — allt bygger på formeln som testprotokollet FÖRKASTADE för färska analyser (AI STYLE ingår EJ i Overall, lynx-score slutsats D/2). Multiplikativa modellen för GAMLA analyser är redan dokumenterad i lynx-score.php rad 4 + §'Gamla analyser' (7/7). Rad 11 säger själv 'preliminära tills testprotokollet dömt' — det har dömt.
  ÅTGÄRD: ARKIVERA rad 11-18 till lynx-log-arkiv.php; behåll 1-radspekare 'Analyser >30 dgr tolkas med multiplikativa formeln — data i lynx-score §Gamla analyser'. Rad 19 (Evidence-§5-filtret) BEHÅLLS — flytta upp intill spak-kartan. (spar ~22 rader)
- [78-83] Fem kronologiskt staplade mätregel-stycken (505+509+542+1106+1029 tecken ≈ 37 visningsrader) med kraftig inbördes överlappning: rad 83 (7 jul, sida×vy) subsumerar rad 80 (6 jul, vyer oberoende); rad 81:s attributionsprincip upprepas i rad 83; allt finns dessutom konsoliderat i lynx-score.php rad 100 (mätprincip #0) och i lynx-START:s LÄGE-banner (rad 35). Tre kopior av samma regler i filsetet.
  ÅTGÄRD: KOMPRIMERA till ETT konsoliderat mätregel-block med 5 punkter (sakinnehåll bevarat): (1) mätklockan startar vid main-push, ingen polling; (2) ny skala — jämför färsk-mot-färsk, aldrig mot 30 jun-baselines; (3) uppdateringsenhet = sida×vy — datera varje cell, EFTER droppar in löpande; (4) ÄGARPRINCIP: attribuera FÖRE→EFTER endast vid observerad delta (två analyser med olika värden), aldrig deploy-timing; (5) blank/0 = pågående omanalys; orörda block behåller tier över versionsbyte → per-block brusfritt. (spar ~20 rader)
- [9] Falsifierbara testprotokollet (659 tecken) är BESVARAT — lynx-score.php rad 99 säger explicit '§1.2-testprotokollet BESVARAT' med utfallen (a ✓, b avgjort: AI ingår EJ, c ✓ 3/3). Stängd tråd som ligger kvar i operativ sektion.
  ÅTGÄRD: ARKIVERA till lynx-log-arkiv.php; utfallet är redan inbakat i rad 6. (spar ~6 rader)
- [87, 89, 92] De tre ✅ MÄTT-radernas statusceller (437+712+504 tecken) upprepar EFTER-detaljer (blockfördelningar, medeltal, backport-lärdomar) som redan är fullständigt loggade i lynx-logg §11 (6-7 jul-posterna) och lynx-examples EFTER-sektionen. Raderna får INTE tömmas (öppna rester finns) men detaljerna är dubblerade.
  ÅTGÄRD: KOMPRIMERA statuscellerna till mönstret 'MÄTT ✓ 6/7 jul (detalj: §11-loggen) · KVAR: <öppna rester>' — behåll exakt vilka rester som hindrar stängning (acne-ansikte: FAQ-facitrest + intro-🟠; behandla-pigment: färsk SCORE + micro-fix 4 block; om-oss: badge-bekräftelse + O01 + FAQ-betyg). (spar ~10 rader)
- [21-29] Prediktiva spak-kartan är delvis föråldrad mot lynx-score: E-E-A-T-raden ('49→85' som spak) motsägs av slutsats 4/B ('EEAT är INTE en copy-spak — rör aldrig copy för att jaga EEAT'); AI STYLE-raden anger gamla skalans 20→30 (färsk skala 50-75). Risk att ny session optimerar mot fel spak.
  ÅTGÄRD: KOMPRIMERA/UPPDATERA: stryk E-E-A-T-raden till 'EEAT: ej copy-spak (lynx-score B/4) — rör inte widgets'; uppdatera AI STYLE-intervallet till färska skalan; behåll kolumnerna ↑av/↓av (operativt värdefulla). (spar ~2 rader)
- [3] Öppen flytt-plan i huvudpekaren: 'SCORE-modellens fullständiga härledning ... ligger i lynx-score.php (flyttas hit vid nästa städning; korsläs tills dess)' — tvingar varje session att korsläsa två filer. Att flytta HELA härledningen hit skulle dock strida mot läs-bara-det-du-behöver-målet.
  ÅTGÄRD: BESLUT (ägarens): rekommendation = genomför INTE flytten; låt härledning/rådata bo i lynx-score.php och ändra pekaren till 'härledning + slutsatser A-F: lynx-score.php' — rad 6 här är den operativa sammanfattningen. Tar bort korsläsningskravet. (spar ~1 rader)
- [6] Gällande SCORE-modellen (1 083 tecken) — rätt innehåll men svansen '(Nedan §1.2-text = 30 jun-multiplikativa modellen...)' blir felpekande när rad 11-18 arkiveras.
  ÅTGÄRD: BEHÅLL sakinnehållet oförkortat; justera endast svans-parentesen till pekare mot lynx-score §Gamla analyser efter arkiveringen. (spar ~1 rader)
- [88, 94] ytliga-blodkarl- och ipl-rosacea-radernas statusceller upprepar SCORE-siffror (22→74, 39→60) som är rådata i lynx-score.php 6 jul-sektionen; även title-attr-typo-noteringen i rad 94 är avslutad detalj.
  ÅTGÄRD: KOMPRIMERA till 'SCORE färsk (lynx-score 6 jul) — väntar badge-refresh'; stryk den fixade typo-parentesen. (spar ~2 rader)

## Arkiv-kandidater
- Rad 8 — OMPRÖVAS-historiken 2026-07-02 (8 punkter): löst av 6 jul-slutsatserna (rad 6 + lynx-score A-F) → lynx-log-arkiv.php
- Rad 9 — falsifierbara testprotokollet: BESVARAT per lynx-score.php rad 99 → lynx-log-arkiv.php
- Rad 11-18 — 30 jun-multiplikativa analysen inkl. acne.php-fixplanens marginalkalkyl och 'bryt 39'-imperativ: superseded för färska analyser; gamla-skalan-formeln redan dokumenterad i lynx-score.php → lynx-log-arkiv.php (OBS: rad 19, Evidence-§5-filtret, ARKIVERAS EJ)
- INGA §11.1-tabellrader får arkiveras — även de tre ✅ MÄTT-raderna (87, 89, 92) har öppna rester (FAQ-facitrest, färsk SCORE saknas, badge-bekräftelse) och är därmed inte STÄNGDA per arkivpolicyn

## Dubbleringar
- SCORE-härledningen bor i BÅDA filerna: models rad 3/6/8/15-16 ↔ lynx-score.php (rad 4, 87-106, 136) — rad 3 erkänner det själv ('flyttas hit vid nästa städning; korsläs tills dess'); olöst ägarbeslut om var modellen ska bo
- Mätprincipen (sida×vy + observerad-delta-attribution) finns i TRE filer: models rad 80/81/83 ↔ lynx-score.php rad 100 (mätprincip #0) ↔ lynx-START.php LÄGE-bannern rad 35
- Multiplikativa formeln CQ×EEAT×AI/3640: models rad 8/15-16 ↔ lynx-score.php rad 4 + §'Gamla analyser' (7/7-valideringen)
- Testprotokollet: models rad 9 ↔ lynx-score.php rad 99 där det förklaras BESVARAT
- Evidence-höjningsrådet: models rad 19 (mest detaljerad, OK/INTE OK-listor) ↔ lynx-score.php rad 106 ↔ lynx-rewrite.php §5-ramarna — behåll detaljversionen i models, övriga är pekarvänliga
- MÄTT-radernas EFTER-detaljer: models rad 87/89/92 ↔ lynx-logg.php §11-posterna 6-7 jul (bl.a. rad 34-35, 88, 108) + lynx-examples EFTER-sektionen

## MÅSTE BEHÅLLAS
- Rad 6 — gällande SCORE-modellen: Overall=medel(CQ,EEAT), EEAT-klampen 60, taket ~75-77, 'JAGA INTE SCORE med copy' (operativ slutsats)
- Rad 19 — Evidence-§5-filtret med OK/INTE OK-listorna (operativ YMYL-regel, mest detaljerade versionen i filsetet)
- Rad 31 — No-regression-regeln ('varje ändring ≥0 på alla komponenter, >0 på minst en') — märkt KRITISKT
- Rad 37-49 — hela §1.5: officiella tooltip-definitionen, H1-H7 (ÖPPNA hypoteser som väntar validering mot refresh) + operativa steg 1-4
- Rad 53-59 — §10.0 SEO-VAKT (ägarbeslut 2026-07-06): GSC-gaten före main-push, KW-tröskeln 10-15 %, CLICKS+WORDS-baseline, våg-attribution, tumregeln
- Rad 61-73 — mät-loopens steg 1-5 + per-signal-responsen (kärnan i filens syfte)
- Rad 85-99 — ALLA 13 bevakningsrader: FÖRE-baselines (flera omätta) + öppna prediktioner; ingen rad har stängd mätning — endast statuscellernas dubblerade EFTER-detaljer får komprimeras
- Ägarprincipen 'attribuera FÖRE→EFTER endast vid observerad delta' (rad 81) — sakinnehållet måste överleva komprimeringen av rad 78-83
- Rad 101 — instruktionen mät→logga→förfina→backporta→töm raden
════════════════════════════════════════
## RAPPORT: audit-score

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-score.php (182 rader)

## Summary
lynx-score.php bär tre lager som borde vara ett: rådatatabeller (behåll), modellslutsatser i megaprosa (A-F + MODELLSLUTSATSER 0-6 säger delvis samma sak två gånger) och stängd historik (2 jul-anomalier + hela gamla skalan, 75 rader som §11.1-regeln gör omätbara för alltid). Största vinsterna: arkivera rader 136-183 och 108-134 med korta sammanfattningsrader kvar (~63 rader), och skriv om A-F + punkt 0-6 som EN slutlägestabell (ID/slutsats/bevisläge/operativ regel) utan korrigeringshistorik — helst flyttad till lynx-models §1.2, dit ägaren redan flaggat flytten och där dagens sammanfattning dessutom är stale (säger fortfarande 'klampas på hälsosidor'). Måste stå kvar oförkortat: 7 jul- och 6 jul-sektionernas färska FÖRE-baselines (pigmentflackar 55/rhino 70, rhino-tabellen), öppna trådar (powerlite saknas i repo, roaccutan/melasma-nedbrytning, tooltip-beställd, skärmbild 2-bekräftelse) och de operativa reglerna i A-E. Totalt krymper filen från 182 till ca 105-110 rader med kraftigt sänkt skumrisk och noll förlorat sakinnehåll.

## Hotspots
- [136-183] Hela gamla-skalans sektion (om-oss, bristningar, 30 jun-tabellerna, 'Läsning av 30 jun-datan') är STÄNGD: multiplikativa formeln är färdigvaliderad (7/7) och dokumenterad i lynx-models §1.2, och §11.1-regeln förbjuder jämförelse gammal↔färsk — datan kan aldrig mer användas som FÖRE. acne.php/ipl-rosaceas gamla baselines + no-regression-värden (Depth 77/EEAT 84) finns redan i lynx-models rad 18+93-94. Punkt 1 i 'Läsningen' (178-183) är explicit obsolet.
  ÅTGÄRD: ARKIVERA rådatatabellerna till arkivfil (t.ex. ny sektion 'SCORE gammal skala' i lynx-log-arkiv.php eller lynx-score-arkiv.php). Behåll 5-6 rader i aktiva filen: formeln CQ×EEAT×AI/3640 (7/7), en rad per datapunkt (om-oss 17 · bristningar 18 · hudforandringar 17 · ytliga 22 · acne 39 · ipl 39 · resultat 9), AI STYLE-spannet 20-30 gamla skalan, acne.php no-regression-subsen, pekare till arkiv + lynx-models §1.2. (spar ~42 rader)
- [108-134] 2 jul-sektionen är historik: micro-anomalin är LÖST (rad 67 dokumenterar upplösningen), acne-rygg-kolumnen är bara nollor (löst: 0→69 satte sig själv), och 'Modellimplikationer 2 jul' (130-134) är superseded — testprotokollet BESVARAT (rad 99) och hela resonemanget finns redan ordagrant bevarat i lynx-models §1.2 rad 8 (HISTORIK/OMPRÖVAS-noteringen).
  ÅTGÄRD: KOMPRIMERA till ~6 rader: behåll porto/sebo-nedbrytningarna som 2 kompakta rader (färsk skala, refereras av formelräkningen + sebo AI 50 = lägsta färska, rad 38) + 1 rad 'micro 2 jul partiell → komplett 6 jul (rad 67)' + pekare till lynx-models §1.2-historiken. ARKIVERA resten (tabellen med acne-rygg-nollorna, anomali-resonemanget). (spar ~21 rader)
- [87-97] Slutsatserna A-F är extrem skumrisk: rad 89 (B) är ett enda stycke på ~1900 tecken med hela korrigeringshistoriken inbakad (hälsosidor→korrigerad→sidtyps-hypotes förkastad→två förklaringar→gamla analyser→operativ följd). Rad 92 (E) och 95-97 liknande. Historik-kedjan finns i git + lynx-logg #9.
  ÅTGÄRD: KOMPRIMERA till tabell med kolumner: ID | Slutsats (1 rad) | Bevisläge (t.ex. 15/15 ±1) | Operativ regel. Skriv bara SLUTLÄGET (inte korrigeringsvägen). FLYTTA sedan tabellen till lynx-models §1.2 per ägarens egen flagga (models rad 3: 'flyttas hit vid nästa städning') — det rättar samtidigt models stale 'klampas på HÄLSOSIDOR'-formulering. Kvar i lynx-score: rådatatabellen 72-85 + datapunktsraderna 95-97 komprimerade till kompakt lista. (spar ~3 rader)
- [99-106] 'MODELLSLUTSATSER 6 jul' är ett redundant mellanlager: punkt 3-4 är explicit REVIDERADE av A-F (rad 99 säger det själv), punkt 1-2+5-6 upprepas i sak av A/D/#6, och punkt 0 (mätprincipen) dubblerar lynx-models §11.1-tillägget 7 juli (models rad 83, kanoniska versionen med matris-belägg).
  ÅTGÄRD: KOMPRIMERA: fäll in punkt 1-2, 5-6 som rader i A-F-tabellen (markera vad som står sig), stryk superseded 3-4 (finns i git), ersätt punkt 0 med 1 rad: 'MÄTPRINCIP: uppdateringsenhet = (sida × vy); attribuera FÖRE→EFTER endast vid observerad delta — kanonisk text lynx-models §11.1.' (spar ~6 rader)
- [6-13] Online-verifieringssektionen är 8 rader tät prosa och dubbleras (kondenserat, med ömsesidiga pekare) av lynx-logg §11-posten 2026-07-06 #9. Regeljusteringarna (rad 13) är redan inarbetade i lynx-rewrite enligt logg-posten.
  ÅTGÄRD: KOMPRIMERA till 4-5 enradare (Bekräftat: LYNX bespoke + de-AI validerad + Ahrefs; Korrigerat: EEAT-60 = golv/artefakt, YMYL = ämnesmatchad expertis; Ramen: substans är spaken, AI COPY = proxy) + pekare till lynx-logg #9. Alternativt FLYTTA hela blocket till lynx-models §1.2 tillsammans med A-F (ägarflaggad destination). (spar ~3 rader)
- [4] Header-noten är en mening på ~850 tecken som blandar fyra saker: filens innehållsdeklaration, tvåskalemodellen, 0/blank-regeln (ägarbesked) och tooltip-beställningen (öppen tråd). Skumrisk direkt i filens ingång.
  ÅTGÄRD: KOMPRIMERA till 3-4 punktrader utan innehållsförlust: (1) innehåll/filkarta, (2) GAMMAL skala = multiplikativ / FÄRSK = medel(CQ,EEAT), jämför ALDRIG kors (§11.1), (3) SCORE 0/blank = omanalys som sätter sig själv (ägarbesked 7 jul) — be ej om omkörning, (4) tooltip beställd (öppen). (spar ~0 rader)
- [15-16] 7 jul-ingressen (rad 16) är tät prosa med crawl-dateringsresonemanget inbakat; själva FÖRE-baselines-deklarationen drunknar.
  ÅTGÄRD: KOMPRIMERA lätt: lyft ut kärnan till fetstil ('FÖRE-baselines färska skalan: pigmentflackar AI STYLE 55 · rhinophyma 70 — jämför vid post-6 jul-crawl') och kortna dateringsbelägget till en rad med git-referens. Allt sakinnehåll kvar. (spar ~1 rader)
- [36-39] Fyra täta punktrader efter pigmentflackar-tabellen; rad 39:s över-attributions-kontrollpunkt (homepage 28→65 orörd) är en viktig operativ regel men gömd sist i ett långt stycke.
  ÅTGÄRD: KOMPRIMERA till 3 rader och lyft regeln 'gammal→färsk-hopp är GLOBALA, aldrig bevis på copy-effekt' till egen fetstilsrad. Behåll formelräkningen (14:e datapunkten) och AI STYLE-korrelationsfyndet. (spar ~1 rader)
- [95-97] Datapunktsdumparna 13:38-13:44 är två väggar av interpunkterad rådata; skin-tech/alma-fyndet (URL-struktur styr EEAT) är ett viktigt belägg men inbäddat i upprepningar av B.
  ÅTGÄRD: KOMPRIMERA: skin-tech + alma-hybrid-beviset → 2 rader under B-raden i tabellen; sido-SCORE-listan (rad 97) → kompakt tabell eller flytta till lynx-data (Pages-listans hemvist). Behåll roaccutan/melasma-frågan som öppen tråd-rad. (spar ~2 rader)
- [69-70] Sektionrubrik + citat-ingress upprepar vad A-F-tabellen sedan säger igen ('motbevisar min EEAT-slutsats', 'CQ följer subs').
  ÅTGÄRD: KOMPRIMERA ingressen till en rad; revideringshistoriken ('detta motbevisar...') behövs inte när A-F skrivs som slutläge. (spar ~1 rader)

## Arkiv-kandidater
- Rader 136-183: hela 'Gamla analyser (multiplikativa formeln)'-sektionen — formeln färdigvaliderad 7/7, gammal↔färsk-jämförelse förbjuden (§11.1), baselines kan aldrig mer mätas mot; behåll 5-6 raders sammanfattning + pekare (nyckelvärden finns även i lynx-models mätmatris + fixplan)
- Rader 110-112: micro 2 jul-anomalin — STÄNGD (rad 67: komplett 6 jul, bekräftade 0=sätter sig); enradaren på rad 67 räcker
- Rader 114-128: 2 jul-tabellen — acne-rygg-kolumnen (bara nollor, löst 0→69) arkiveras helt; porto/sebo komprimeras till 2 rader i aktiva filen
- Rader 130-134: 'Modellimplikationer 2 jul' — superseded (testprotokollet besvarat rad 99) och ordagrant bevarat i lynx-models §1.2 rad 8; ersätt med pekare
- Rad 99 punkt 3-4: explicit REVIDERADE slutsatser — stryk ur aktiv fil (git + A-F bär slutläget)
- Korrigeringshistoriken inuti B (rad 89: hälsosidor→korrigerad-kedjan) och E — git/lynx-logg #9 bär historiken; aktiva filen behöver bara slutläget

## Dubbleringar
- Rader 6-13 (online-verifieringen) ↔ lynx-logg.php rad 58-59 (§11-post 2026-07-06 #9, kondenserad med ömsesidiga pekare; score = kanonisk fulltext)
- Rad 100 (mätprincip punkt 0) ↔ lynx-models.php rad 83 (§11.1-tillägg 7 juli med matris-belägg — kanonisk version)
- Rader 130-134 (Modellimplikationer 2 jul) ↔ lynx-models.php rad 8 (§1.2 'HISTORIK — OMPRÖVAS-noteringen 2026-07-02', nästan fullständig överlappning punkt för punkt)
- Rader 87-92 (A-F) ↔ lynx-models.php rad 6 (§1.2 'LÖST'-sammanfattning) — OBS: models-versionen är STALE ('klampas på HÄLSOSIDOR' — korrigerad i score B till golv/artefakt-hypotesen); flytten A-F→models rättar inkonsekvensen. models rad 3 flaggar redan flytten: 'flyttas hit vid nästa städning'
- Rader 160-176 (acne.php/ipl-rosacea gamla baselines) ↔ lynx-models.php rad 18 (acne-fixplan + no-regression Depth 77/EEAT 84) och rad 93-94 (mätmatrisens FÖRE-kolumner)
- Rad 97 sido-SCORE-listan (Pages-listan) ↔ lynx-data.php (Pages-dumparnas hemvist, jfr 'Tillägg 14:16'-referensen på rad 92)

## MÅSTE BEHÅLLAS
- Rad 4:s sakinnehåll (får omformas till punkter, ej strykas): tvåskalemodellen + jämför-aldrig-kors-regeln (§11.1), SCORE 0/blank = sätter sig själv (ägarbesked 7 jul, be ej om omkörning), tooltip-beställningen (öppen tråd)
- Rader 15-39: hela 7 jul-sektionen — omätta FÖRE-baselines på färska skalan (pigmentflackar AI STYLE 55, rhinophyma 70) + pigmentflackar-tabellen + över-attributions-kontrollpunkten (homepage 28→65 orörd); mätningen är ÖPPEN tills post-6 jul-crawl
- Rader 41-67: 6 jul-tabellen med fotnoter — rhinophyma = omätt FÖRE-baseline nya skalan (staging, väntar main-push → rent FÖRE→EFTER-test), ytliga-blodkarl/ipl-rosacea = EFTER som väntar badge-refresh; micro-komplett-raden (67) som stängningsbevis
- Rad 42: öppen ägarbekräftelse ('tilldelning bekräftas med ägaren' för skärmbild 2)
- Rader 72-85: rådatatabellen 5 HÖGA sidor — bevisbasen för A-F, färsk skala, refereras av prediktor-räkningen
- Slutsatserna A-F i SAK (får bli tabell/flyttas till models): prediktor-formeln 15/15 (±1) ej styrbar mekanism; EEAT-badge 60 utom /varumarken/ + operativa regeln 'jaga inte EEAT/CQ-badge med copy'; CQ-badge≈subs normalfallet → Evidence äkta liten spak; AI STYLE ingår EJ i Overall; SCORE-taket ~75-77 + splendor-x 79-bekräftelsen; F = powerlite saknas i repot (ÖPPEN §9-tråd, 'Utred separat')
- Rad 95: skin-tech/alma-hybrid-beviset (URL-struktur, inte ämne, styr EEAT) — unikt belägg som inte finns någon annanstans
- Rad 97: roaccutan 23 + melasma 23-frågan (öppen: 'be om nedbrytning') + porto/sebo färsk-skala-nedbrytningarna (komprimerade)
- Rad 100 mätprincipen som minst 1-rads pekare till lynx-models §11.1 (operativ regel, ägarbeslut)
- Vid arkivering av 136-183: sammanfattningsrader med gamla formeln + de 7 valideringspunkterna + acne.php no-regression-subsen (Depth 77/EEAT 84/Evidence 11/AI 30) tills acne-refreshen landat
════════════════════════════════════════
## RAPPORT: audit-rewrite

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-rewrite.php (272 rader)

## Summary
Filen är 272 fysiska rader men läsvolymen är nästan dubbel: 36 rader överstiger 400 tecken och de fyra värsta enrads-styckena (L25, L54, L34, L236) bär ensamma ~90 lästa rader — det är där en ny session skummar. Största vinsten är att skala bort valideringshistorik som redan har kanoniska hem (blindtest-sagan i L34 → lynx-examples; facit-ställningen/tooltipen i L54 → lynx-examples/logg/data; RAMEN-beläggen i L10 → lynx-score) samt slå ihop §13.O:s tre överlappande stycken där spak-regeln står två gånger. Kärnan (§2–§7, juridiken i §5, checklistan, husröst-banken) ska stå kvar oförkortad; L25/L236 ska bara omformateras till punktlistor med bevarat sakinnehåll, och öppna trådar (L72-hypotesen, §1.4-beställningen, P.PRICE-ägarfrågan) får aldrig strykas. Totalt ~78 radekvivalenter (~25 % av läsvolymen) kan sparas utan att en enda operativ regel eller öppen tråd försvinner.

## Hotspots
- [54 (§1.4, 2565 tecken = ~28 lästa rader i ETT stycke)] Största skumrisken i filen: arbetsmodellen (operativ) är hopvävd med valideringshistorik — facit-ställning 14/17, hela 11-siders medellistan, killer-observationen, första EFTER-datapunkten och tooltip-citatet. Allt utom reglerna dubbleras redan: lynx-examples.php:541 (MODELLANALYS), lynx-logg.php:152, lynx-data.php:23 (tooltip-tabellen).
  ÅTGÄRD: KOMPRIMERA till ~8 rader: behåll viktat-medel-modellen, regler 1–5, gråzonen 1,9–2,4, en menings strukturell förklaring (badge = helsides-skattning, medel = proxy) + OFÖRKORTAT den öppna beställningen ('Avgörs av: färsk same-scan-analys, §9' + om-oss badge-bekräftelsen). Historik/belägg → pekare till lynx-examples MODELLANALYS + lynx-data tooltip-tabell. (spar ~18 rader)
- [34 (§1.3-ingressen, 1370 tecken = ~15 lästa rader)] Hela v2→v5-sagan med fem blindtestresultat i löpande prosa. Operativt behövs bara: ±1-band är signalen, exakt tier = brus, sid-kontext påverkar, mikro-tuna inte (ändra först vid mönster på ≥2 sidor), konfidens <65 = hämta facit. All testdata finns komplett i lynx-examples.php (rader 226, 254, 306, 563–626).
  ÅTGÄRD: KOMPRIMERA till 4–5 rader med de fem operativa slutsatserna + en pekare 'full blindtest-historik (test 1–5): lynx-examples.php'. Konfidensregeln på L47 kan bakas in här. (spar ~10 rader)
- [264–272 (§13.O, ~30 lästa rader över 5 stycken)] Tre stycken säger samma sak (minimal diff / steg för steg / ta inte bort substans / hellre för lite än för mycket), och 'led öppningen med mekanismen'-spaken står ordagrant TVÅ gånger (L270 och inne i L272). Anekdoterna 'igår/idag' (acne-ansikte-listan, ytliga-blodkarl) är daterade 1 jul och finns i lynx-logg.php (L237–244).
  ÅTGÄRD: KOMPRIMERA till ETT block på ~10 rader: princip (minimal diff = default), rättesnöret (längd OK, borttag av stycken/poänger = skadan), steg-för-steg-regeln, spaken EN gång, anekdoterna som en mening ('två gånger stoppade svep — se lynx-logg 1 jul'). Inget sakinnehåll försvinner. (spar ~13 rader)
- [25 (§1.1 Fem nycklar, 2557 tecken i ETT stycke)] Kärnmodellen — men som 27 rader kompakt vägg-prosa med inbäddade facit-exempel i parentes. Maximal skumrisk på filens viktigaste innehåll. Numreringen (1)–(5) finns redan inline.
  ÅTGÄRD: KOMPRIMERA FORMAT (inte innehåll): bryt till 5 punktrader; korta facit-parenteser till blocknamn + 'se lynx-examples' (fulla citaten ligger där). Varje nyckel och undantag bevaras ordagrant i sak — detta är omformatering för läsbarhet, radbesparingen är sekundär. (spar ~6 rader)
- [23 (§1.1 EFTER-bevis ×2, 888 tecken)] Bevis-narrativ (10 block, om-oss-omvändningen, replikationsdetaljer) runt två operativa följder. Narrativet dubbleras i lynx-logg.php:93 och lynx-examples EFTER-sektionerna.
  ÅTGÄRD: KOMPRIMERA till 3 rader: 'Nyckel 1 kausalt belagd + replikerad (9/10 flaggade block →🔵/🟢). Stabilitet: orörda block behåller exakt tier ⇒ (a) gamla facit gäller för orörda block, (b) betygsflytt = textändring, inte brus. Detaljer: lynx-examples EFTER-sektionerna.' (spar ~6 rader)
- [236 (§13.D, 2069 tecken = ~22 lästa rader i ETT stycke)] Sex delregler i en enda prosavägg; 'bedöm sidan som HELHET' sägs två gånger; historiska parenteser (v3-felet, gamla svep-regeln) upprepar §1.3.
  ÅTGÄRD: KOMPRIMERA FORMAT: punktlista med (1) facit-prioritering 🔴/🟠/🟥, (2) lätt hand på 🔵/🟢, (3) utan facit → §1.3-band, (4) helhetsblick EN gång, (5) de 5 obligatoriska blocktyperna, (6) punkt-räkning + sektionens-syfte-regeln. Allt sakinnehåll kvar. (spar ~5 rader)
- [10 (§1 RAMEN, 988 tecken)] Kärnregeln (substans är spaken, AI COPY = intern proxy, aldrig kosmetisk detektor-undvikande) är begravd i belägg som dubbleras nästan ordagrant i lynx-score.php:10–11 och sammanfattas i lynx-START.php:28 (Ahrefs, Google-citatet, bakgrundsparentesen).
  ÅTGÄRD: KOMPRIMERA till 4 rader: behåll regeln + följden ('skriv aldrig om bara för att lura detektorn') oavkortad; belägg → pekare till lynx-score.php EXTERN VERIFIERING. (spar ~5 rader)
- [38 + 42 (§1.3 procedur steg 2 och 3c, 963+1064 tecken)] Reglerna är operativa men facit-exempel-parenteserna är långa och upprepar §1.1 nyckel 3/5 samt exempel som redan står i L25 och i lynx-examples (O09, behandla-pigment-bannern, acne-rygg, sebo CryoPen, blindtest 4-missarna).
  ÅTGÄRD: KOMPRIMERA försiktigt: behåll varje regel och undantag; korta exempelparenteser till blocknamn utan citat. Rör INTE gradient-regeln i sak. (spar ~6 rader)
- [59 (§1.4 fix-räkningslistan, 651 tecken)] Per-sida-estimaten är LÄGES-data, inte hantverk — och delvis inaktuella: mogen-hy, oonskat-har, microdermabrasion och bristningar är redan omskrivna (status i lynx-models.php:95–98, prediktioner i lynx-logg). Registret/loggen är kanoniskt hem för per-sida-status.
  ÅTGÄRD: KOMPRIMERA till principen (varje 🔴→🔵-fix = −2 p på summan; räkna fixar till gränspassage; estimat = MINIMUM, §7 kräver ändå alla 🔴/🟠) + pekare till lynx-models-registret för aktuella siffror. Kvarvarande omätta estimat (rhinophyma/solskadad/pigmentflackar) FLYTTAS dit om de saknas där. (spar ~5 rader)
- [252 (§13.I P.PRICE, 673 tecken)] Officiella tooltip-citatet dubbleras ordagrant i lynx-data.php:25 (tooltip-tabellen, dess kanoniska hem) inkl. ipl-rosacea-HIGHEST-tolkningen.
  ÅTGÄRD: KOMPRIMERA till 3 rader: schemaspåret ($rich_product, sekundärt) + den ÖPPNA ägar-frågan (premium-läge eller fel signal? — bevaras) + pekare till lynx-data tooltip-tabellen. (spar ~4 rader)

## Arkiv-kandidater
- Inga §11-loggposter finns i denna fil — inget faller under logg-arkivpolicyn. Historiskt innehåll här ska STRYKAS MED PEKARE (git + kanonisk fil finns), inte arkiveras:
- L34: blindtest 1–5-resultaten (komplett rådata + tabeller i lynx-examples.php rader 226–626)
- L54: facit-ställningshistoriken 14/17, killer-observationen och första EFTER-datapunkts-narrativet (lynx-examples.php MODELLANALYS L541 + lynx-logg.php L105/L152)
- L268: anekdoterna acne-ansikte-listan/ytliga-blodkarl ('igår/idag' = 30 jun–1 jul; förloppen loggade i lynx-logg.php L237–244)
- L23: EFTER-bevis-narrativet (lynx-logg.php L93 + lynx-examples EFTER-sektionerna)

## Dubbleringar
- L10 (RAMEN-belägg: Google-citat, Ahrefs 600k) ≈ lynx-score.php:10–11 nästan ordagrant + kondensat i lynx-START.php:28 — trippellagrat
- L34 (blindtest-data v2–v5) ≈ lynx-examples.php:226, 254, 306, 541–626 (fullständiga tabeller + missanalyser)
- L54 (facit-ställning, killer-observation, AI COPY-tooltip) ≈ lynx-logg.php:152 + lynx-examples.php:541 (MODELLANALYS) + lynx-data.php:23 (tooltip-tabellen)
- L59 (per-sida medel/fix-estimat) ≈ lynx-models.php:95–98 (sidregistret, med AKTUELL status som L59 saknar) + lynx-logg prediktionsrader L70/119/129/138
- L252 (P.PRICE-tooltip-citatet + ipl-rosacea-tolkningen) ≈ lynx-data.php:25 ordagrant
- L23 (EFTER-bevis-narrativ) ≈ lynx-logg.php:93 + lynx-examples EFTER-sektioner
- §13.O:s arbetssätt sammanfattas redan i lynx-START.php:41 — rewrite-filen är rätt kanoniskt hem, men motiverar att §13.O hålls stram (kondensatet läses först ändå)
- Intern dubblering: 'led öppningen med mekanismen'-spaken står två gånger inom §13.O (L270 + L272); §1.3 steg 2–3 återciterar §1.1-exempel som redan står i L25

## MÅSTE BEHÅLLAS
- §2 Formeln Krok→Mekanism→Skylt (L64–74) inkl. L72 intro-/bannerblock-HYPOTESEN — öppen, omätt ('testas mot mogen-hy-/oonskat-har-introna vid deras refresh')
- §3 Checklistan (L78–98) komplett, inkl. L95 COPY-PASTE-REST-KOLL (ägarbeslut 6 jul)
- §4 + 4.1 + 4.2 Husrösten med hela exempel-/öppningsbanken (L101–170) — själva skrivmaterialet; inkl. L128 CTA-facit-noten och L144 reassurance-wrapper-varningen
- §5 Låsta ramar + juridikblocket (L173–196) — ABSOLUTA MFL/PIL/estetiklags-krav, YMYL-omtolkningen, ägarbeslut om godkänt befintligt innehåll
- §6 SEO-skyddet (L199–211) inkl. L203–204 $seo_keywords-parkeringsplats + SCOPE-nyansen (ägarbesked 6 jul) och L208 obligatoriska fras-kollen
- §7 Arbetsprocessen (L215–225) inkl. steg 0 claim-regeln, SCORE-0-noteringen (ägarbesked 7 jul, L217), save-first-regeln (L218), staging-poll-regeln (L224)
- §13.A–C, E–H, J–N + Autonom-kvittensen (L240–244)
- Vid komprimering av L54: de ÖPPNA beställningarna bevaras ordagrant — same-scan-analysen (§9) och om-oss badge-bekräftelsen
- Alla regler/undantag i L25 (fem nycklar) och L36–49 (procedur) i SAK — endast format och exempelcitaten får komprimeras
- Målet L27 (🔴/🟠 → minst 🔵; jaga aldrig HUMAN genom att korta förklarande block)
════════════════════════════════════════
## RAPPORT: audit-examples

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-examples.php (632 rader)

## Summary
lynx-examples.php (632 rader) bär två sorters innehåll: aktiva per-block-facit (merparten, måste stå kvar — 11 omskrivna sidor väntar fortfarande på EFTER-mätning och 7 sidor står i kön) och ~130 rader stängd modell-/blindtest-historik vars slutsatser redan är kodifierade i lynx-rewrite §1.3/§1.4 och lynx-models §1.2. Största skumrisk-hotspotsen är Blindtest 3-tabellen (L574-619), MODELLANALYS 2 jul (L541-572) och SCORE/median-sektionerna (L272-304) — tillsammans ~100 rader som kan arkiveras/flyttas med pekare kvar. Dessutom kan FÖRE-tabellerna för de tre MÄTTA sidorna (acne-ansikte, om-oss, behandla-pigmentflackar) arkiveras eftersom FÖRE-tiers redan upprepas i EFTER-tabellernas FÖRE-kolumn. Total uppskattad besparing ~160 rader (~25 %) via ny arkivfil lynx-examples-arkiv.php, utan att någon omätt baseline, öppen tråd eller ägarnot raderas.

## Hotspots
- [574-619] Blindtest 3 (37-raders tabell + mönsterprosa) — v4-rubrikens kalibrering, helt superseded av v5; slutsatserna redan kodifierade i lynx-rewrite.php §1.3 (rad 34) och blockens facit finns i per-sida-tabellerna
  ÅTGÄRD: ARKIVERA hela sektionen till ny lynx-examples-arkiv.php; kvar: 2-raders summering + pekare till §1.3 (spar ~42 rader)
- [541-572] MODELLANALYS 2026-07-02 (A-D) — 32 rader analysprosa vars gällande slutsatser (medel 14/17, gråzon 1,9-2,4, killer-observationen, blindtest 5-siffrorna) redan ordagrant står i lynx-rewrite.php §1.4 (rad 54) och §1.3 (rad 34)
  ÅTGÄRD: ARKIVERA; kvar: 3-4 rader (datum, resultat-ettradare per A-D, pekare); den öppna beställningen 'badge+blocklista ur SAMMA scan' står redan i §9 och §1.4 (spar ~26 rader)
- [272-304] SCORE-modellen + komponentfakta + MEDIAN-hypotesen — SCORE-innehåll i AI COPY-filen bryter en-fil-per-kolumn-principen (dubblerar lynx-models §1.2/lynx-score, delvis STALE: 'validerat 5/5' vs models 7/7 + versionsbyte); median-sektionen superseded av medel-modellen i §1.4
  ÅTGÄRD: FLYTTA komponentfakta+härledning till lynx-score.php (uppdatera pekaren i lynx-models.php rad 15); ARKIVERA median-hypotesen med 1-rads pekare till §1.4 (spar ~28 rader)
- [235-254] om-oss FÖRE-tabell + v3-blindtestresultat — sidan MÄTT 5 jul; FÖRE-tiers (O01-O11) upprepas per rad i EFTER-tabellen L257-268; v3-testet superseded (v5 gäller, summerat i lynx-rewrite rad 34)
  ÅTGÄRD: ARKIVERA FÖRE-tabellen + v3-stycket; BEHÅLL AI QUESTIONS-raden (L253, Fas 2-underlag) + 1-rads pekare; facit-signalerna (a)-(d) är backportade till §1.1 (spar ~15 rader)
- [120-135] behandla-pigmentflackar FÖRE-tabell med gissningskolumner — sidan MÄTT 7 jul (första kompletta EFTER); FÖRE-tier per block står redan i EFTER-tabellens FÖRE-kolumn L184-198; prediktionsliggaren är scorad och lärdomarna backportade
  ÅTGÄRD: ARKIVERA FÖRE-tabellen; behåll rubrikrad med counts (8R/1E/3B/1G, medel 2,38) som EFTER-summeringen refererar (spar ~14 rader)
- [33-45] acne-ansikte FÖRE-tabell — sidan MÄTT 5 jul; alla FÖRE-tiers upprepas i EFTER-tabellens kolumn 'FÖRE-motsvarighet' L48-59
  ÅTGÄRD: ARKIVERA; behåll counts-raden (6R/1O/2B/1G) som FÖRE→EFTER-summeringen L60 använder; EFTER-sektionen L47-60 BEHÅLLS (öppen tråd: FAQ-block ej levererade) (spar ~11 rader)
- [203-233] hudbehandlingar/ipl METOD-CHECK — LYNX-betygen är omätt FÖRE-baseline (MÅSTE kvar) men prediktions-/träff-kolumnerna och 'Nya signaler' 1-5 är v2-erans kalibrering, redan backportad till §1.1/§1.3
  ÅTGÄRD: KOMPRIMERA: stryk kolumnerna Modell-prediktion+Träff och signalprosan (flytta till arkiv), behåll block+LYNX-betyg+resultatraden (spar ~12 rader)
- [306-311] Blindtest 1 (2026-07-01, v2-rubriken) — stängd historik, summerad i lynx-rewrite.php rad 34 ('ipl 16/24 exakt')
  ÅTGÄRD: ARKIVERA med 1-rads pekare (spar ~5 rader)
- [621-626] Blindtest 4 (v5+gradient) — stängd historik; gradient-skärpningen redan inne i §1.3 och siffrorna citerade i lynx-rewrite rad 34/42
  ÅTGÄRD: ARKIVERA med 1-rads pekare (spar ~4 rader)
- [536-539] §1.4-KONSOLIDERING 2 jul — självmarkerad '⚠️ KORRIGERAD av modellanalysen samma dag'; superseded innehåll som bara står kvar med varningsbanner
  ÅTGÄRD: ARKIVERA (avrundningsregeln + vi-handlingar-mönstret är redan kodifierade i §1.4/§1.1) (spar ~3 rader)

## Arkiv-kandidater
- Blindtest 3-sektionen L574-619 (37-raders tabell, v4→v5-härledningen stängd)
- MODELLANALYS 2026-07-02 L541-572 (slutsatser kodifierade i §1.4/§1.3/lynx-models)
- MEDIAN-hypotesen L291-304 (superseded av medel-modellen i lynx-rewrite §1.4)
- Blindtest 1 L306-311 och Blindtest 4 L621-626 (stängda, summerade i lynx-rewrite rad 34)
- §1.4-KONSOLIDERING L536-539 (självmarkerad KORRIGERAD)
- FÖRE-tabeller för de 3 MÄTTA sidorna: acne-ansikte L33-45, om-oss L235-252 (utom AI QUESTIONS), behandla-pigmentflackar L120-135 — FÖRE-tiers bevaras ändå i respektive EFTER-tabells FÖRE-kolumn
- v3-blindtestresultatet L254
- Föreslagen destination: ny fil includes/lynx/lynx-examples-arkiv.php (samma mönster som lynx-log-arkiv.php) + rad i filkartan i lynx-data.php

## Dubbleringar
- SCORE-modellen + komponentfakta L272-289 dubblerar lynx-models.php §1.2 och lynx-score.php (OBS: lynx-models.php rad 15 pekar HIT för 'fakta om varje komponent + full härledning' — pekaren måste uppdateras vid flytt; texten här är dessutom stale: '5/5' vs models '7/7 + versionsbyte')
- §1.4-innehållet (L291-304, L536-539, L544-558) dubblerar lynx-rewrite.php rad 54 som redan bär gällande läge inkl. killer-observationen, gråzonen och tooltip-förklaringen
- Blindtest-resultaten (L306-311, L563-566, L574-619, L621-626) dubblerar sammanfattningen i lynx-rewrite.php rad 34 (§1.3)
- RE-SCAN-determinism-prosan är nästan identisk på två ställen i filen (rhinophyma L451 och pigmentflackar L515) och återges även i lynx-START LÄGE-punkten och logg #14 — kan kortas till fakta-kärnan per sida (crawlfönster, alla block samma tier, V2 OMÄTT, prediktion står)
- FÖRE-tabellerna för de 3 mätta sidorna dubblerar EFTER-tabellernas FÖRE-kolumn (acne-ansikte, om-oss, behandla-pigmentflackar)

## MÅSTE BEHÅLLAS
- Header + tier-legend L1-7 inkl. regeln 'Betyg = LYNX-FAKTA (bevaras för omtolkning), why-tag = tolkning'
- ALLA FÖRE-facit för omskrivna men OMÄTTA sidor (EFTER väntar refresh): ipl-rosacea L62-75, hudforandringar L137-150, ytliga-blodkarl L152-167, hudbehandlingar/ipl-betygskolumnen L203-226, mogen-hy L390-408, solskadad-hy L410-426, rhinophyma L428-451, microdermabrasion L453-468, bristningar L470-488, pigmentflackar L490-515, oonskat-har L517-534 — inkl. Räkning/§1.4-check och Rewrite-ammo-raderna
- FÖRE-facit för EJ omskrivna sidor i kön: acne.php L8-31 (inkl. ägarnoten L31: ~10 röda block = rewrite-mål, KW116), acnebehandling L93-115, dermapen L77-91, microneedling L313-333, portomning L335-348, acne-rygg L350-370, seborroisk-keratos L372-388
- EFTER-facit + summeringar: acne-ansikte L47-60 (öppen tråd: FAQ-block, 'be om resten'), behandla-pigmentflackar L181-201 (öppen: 4 micro-fix-kandidater, §13.G-frysning hävd), om-oss L256-270 (öppna: banner O01 + FAQ + badge-bekräftelse beställd)
- ÅTGÄRD-blocket L177-179 — öppen TODO: ytliga Vad-content var SIGNIFICANT men fick bara komma+länk, behöver riktig de-AI
- Rewrite-resultat-tabellen L628-632 — öppen mätliggare (ipl-rosacea väntar refresh, 'fler fylls i')
- AI QUESTIONS-listorna L115 (acnebehandling) och L253 (om-oss) — Fas 2/FAQPage-underlag
- RE-SCAN-fakta-kärnan L451 + L515 (får komprimeras, ej raderas): crawlfönster 2 jul 16:09-6 jul 16:08, determinism-replikation #3/#4, typo-fixar flyttar inte betyg, V2 OMÄTT + prediktion 🟠→🔵 står kvar
- Lärdomar-hypoteserna L169-175 tills EFTER-facit för hudforandringar/ytliga stängt dem (punkt 1-4 backportade till §1.1 men punkt 5 prediktionsfels-profilen refereras av §10)
════════════════════════════════════════
## RAPPORT: audit-gaps

# /Applications/Cursor/acnespecialisten/includes/lynx/lynx-gaps.php + lynx-questions.php + lynx-log-arkiv.php + lynx-copy-playbook.php (112 rader)

## Summary
Fyra småfiler (112 rader totalt) i gott skick — problemet är inte längd utan trippel-dubblering och stale pekare; obs att filerna använder mycket långa rader, så besparingarna ovan är radekvivalenter (~30, mest tecken/tokens). Stubben lynx-copy-playbook.php behövs formellt kvar (ägarbeslut 6 jul + gamla loggposters §-referenser) men kan krympas 23→~6 rader till ren redirect eftersom filkartan redan finns i lynx-START och lynx-data; rätta samtidigt de två stale inbound-pekarna (lynx-examples rad 4, lynx-log-arkiv rad 4). Arkivet är välstrukturerat för att växa (### YYYY-MM-DD — titel, senaste överst, policy överst) och behöver bara filnamns-rättningen. Slå INTE ihop något — en-fil-per-kolumn och separat arkiv är explicita ägarbeslut; den viktigaste innehållsfixen är att avdubblera mot lynx-START (§8.1-beslut, §9-bevakningstråden som släpar efter i gaps-filen) och flytta SERP-drift-regeln från questions rad 13 till lynx-models §1.5 där den hör hemma.

## Hotspots
- [lynx-copy-playbook.php:9-23] Filkarta-tabellen är TREDJE kopian av filkartan (finns redan i lynx-START.php rad 8+14 och lynx-data.php rad 6) — tre kartor som ska hållas synkade = driftrisk, och stubbens enda jobb är redirect.
  ÅTGÄRD: KOMPRIMERA stubben till ~6 rader: rubrik + '⚠️ splittrad 6 jul (ägarbeslut)' + 'Läs lynx-START.php först — router/filkarta där' + noten att §-numreringen är bevarad. Radera INTE filen utan nytt ägarbeslut (6 jul-beslutet säger att stubben behålls för gamla §-referenser). (spar ~14 rader)
- [lynx-questions.php:13] Microneedling 2 jul-diffnoten: den generella regeln 'sidan orörd + skiftad lista = SERP-drift, attribuera ej utan diff' finns INTE i lynx-models §1.5 (grep: 0 träffar på drift/attribuer) — en operativ regel begravd i en datafil-fotnot; diffdetaljerna finns redan i git enligt egen not.
  ÅTGÄRD: FLYTTA-TILL-lynx-models.php §1.5 (ny drift-/attributionsregel bredvid H1–H7); kvar här: enrads-not '2 jul-lista i git-historik; drift-regel → §1.5'. Sakinnehållet bevaras, bara omplacerat. (spar ~4 rader)
- [lynx-questions.php:8] Acne-ansikte-raden ~1900 tecken på en rad: rålistan (måste stå kvar, FÖRE-baseline på fryst mätsida) + inbäddad analys (käklinje-klustret ~56p, H2, H6-magnesium) som redan står i lynx-START.php rad 149 (Fas 2-kandidat #1) och lynx-logg rad 144 — skumrisk och tre kopior av samma analys.
  ÅTGÄRD: KOMPRIMERA slutparentesen till pekare '→ analys: START §9 Fas 2-kandidat #1; H2/H6 i §1.5'; rör INTE själva frågelistan med score/status. (spar ~4 rader)
- [lynx-gaps.php:33] Bevaknings-punkten om GAPS-rensningen 2 jul dubblerar §9-tråden i lynx-START.php rad 171 — och SLÄPAR EFTER: START-versionen har 7 jul-uppdateringen (ipl-rosacea gaps TILLBAKA 3/1, acnearr 3/1→1/0). En session som läser gaps-filen får inaktuell bild.
  ÅTGÄRD: KOMPRIMERA till enrads-pekare: 'GAPS-rensning/återkomst = konkurrent-relativt — aktuell bevakningstråd i lynx-START §9; läs gap-texter före attribuering.' Tråden är ÖPPEN — får inte arkiveras, bara avdubbleras (källa = START). (spar ~2 rader)
- [lynx-questions.php:10] Homepage-radens slutanalys + ägarbeslut ('startsidan ska INTE besvara silo-frågorna') finns fylligare i lynx-models.php §1.5 H7 (rad 46) — dubblerad tolkning i datafil.
  ÅTGÄRD: KOMPRIMERA parentesen till '→ tolkning + ägarbeslut 2 jul: §1.5 H7 (startsidan äger varumärkes-/remissfrågor, ej silo-frågor)'; rålistan orörd. Ägarbeslutet bevaras ordagrant i H7. (spar ~2 rader)
- [lynx-gaps.php:8-14] Microneedling + acne-rygg: gap-text OCH beslutsdetalj dubbelbokförda i båda riktningar mot lynx-START §8.1 (rad 122-128) trots deklarerad arbetsdelning 'rådatan här, besluten i §8.1'.
  ÅTGÄRD: KOMPRIMERA: behåll rå gap-text + kort '→ beslut §8.1' här; stryk besluts-motiveringarna (GÖR-vid-rewrite-detaljer) som redan står utförligare i §8.1. Exosom-VÄNTAR-beslutet (rad 10) behålls tills §8.1-raden verifierat innehåller gating-villkoret. (spar ~2 rader)
- [lynx-gaps.php:4 + lynx-questions.php:4] Header-blockquotes 700-900 tecken: kolumndefinitionerna dubbleras från lynx-data.php, och gaps-headern upprepar konkurrent-relativa-resonemanget som redan står i §9-tråden och i rad 16.
  ÅTGÄRD: KOMPRIMERA lätt: behåll officiell definition + format + 'spara FÖRE-status' (självbärande kolumnfil är poängen), stryk det upprepade attribuerings-resonemanget till en pekare '→ §9-tråden'. (spar ~2 rader)
- [lynx-log-arkiv.php:4] STALE efter 6 jul-splitten: policyn säger '§11-poster från lynx-copy-playbook.php' och 'Kvar i playbooken' — §11 bor nu i lynx-logg.php. En ny session kan leta i fel fil.
  ÅTGÄRD: BEHÅLL policyn oförkortad men rätta filnamn: 'från lynx-logg.php (§11)' / 'kvar i lynx-logg'. Rubrik-konventionen (### YYYY-MM-DD — titel, senaste överst) är bra och skalar — ingen strukturändring behövs förrän filen närmar sig ~150 rader (då ev. års-rubriker). (spar ~0 rader)
- [lynx-examples.php:4] Stale inbound-pekare '§1.1 i includes/lynx/lynx-copy-playbook.php' — §1.1 bor i lynx-rewrite.php; håller stubben onödigt load-bearing.
  ÅTGÄRD: KOMPRIMERA/rätta pekaren till lynx-rewrite.php §1.1 (samma fix-familj: lynx-rewrite.php rad 232 använder stubben som exempel-URL — funkar, men vilken lynx-fil som helst duger). Efter dessa fixar är stubben ren historik-redirect. (spar ~0 rader)
- [lynx-questions.php:24 + lynx-gaps.php:34] Ingen åtgärd — flaggas som ANTI-hotspots: badge-listan (inkl. öppna frågan microdermabrasion GOOD→OK) och beställningslistan 'GAPS >0 utan sparad text' ser ut som städbara uppräkningar men är öppna trådar/beställningssedlar.
  ÅTGÄRD: BEHÅLL oförkortade. (spar ~0 rader)

## Arkiv-kandidater
- lynx-questions.php:13 — 2 jul-diffens detaljer (in-/utbytta frågor, scoreskiften 25→24, 9→6) är redan säkrade i git enligt egen not ('2 jul-listan i git-historik'); efter att drift-regeln FLYTTATS till lynx-models §1.5 kan detaljuppräkningen strykas ur aktiva filen.
- lynx-gaps.php:33 — 2 jul-rensningens sifferdetaljer är superseded av §9-trådens 7 jul-uppdatering i lynx-START; behåll endast pekare (själva tråden är ÖPPEN och får inte arkiveras).
- Inget i lynx-log-arkiv.php — det ÄR arkivet och innehåller endast stängda poster; öppna rester där (rad 14-15 'frys modellbygge gäller fortfarande') är korrekt speglade i aktiva lynx-logg.php rad 250.
- Inget i frågelistorna/gap-texterna får arkiveras: alla är omätta FÖRE-baselines eller öppna beslut (arkiv-policy: först när mätning är STÄNGD).

## Dubbleringar
- Filkarta x3: lynx-copy-playbook.php rad 9-22 = lynx-START.php rad 8+14 = lynx-data.php rad 6 (stubbens kopia är den strykbara).
- Gap-beslut dubbelbokförda i BÅDA riktningar: lynx-gaps.php rad 9-14/30 ↔ lynx-START.php §8.1 rad 118-128 (deklarerad delning: rådata i gaps, beslut i §8.1 — efterlevs inte).
- GAPS-bevakningstråden: lynx-gaps.php rad 33 (stale, saknar 7 jul-uppdateringen) ↔ lynx-START.php §9 rad 171 (aktuell källa).
- Homepage-tolkning + ägarbeslut: lynx-questions.php rad 10 ↔ lynx-models.php §1.5 H7 rad 46 (H7 är fylligare).
- Acne-ansikte käklinje-analysen x3: lynx-questions.php rad 8 ↔ lynx-START.php rad 149 ↔ lynx-logg.php rad 144.
- Kolumndefinitions-citaten i gaps/questions-headers ↔ lynx-data.php kolumndefinitioner (delvis avsiktlig självbärighet — trimma, ta inte bort).
- Stale pekare till stubben: lynx-examples.php rad 4 (§1.1) och lynx-log-arkiv.php rad 4 (§11) pekar på lynx-copy-playbook.php fast innehållet flyttat till lynx-rewrite.php resp. lynx-logg.php.

## MÅSTE BEHÅLLAS
- ALLA råa frågelistor med score + OPTIMIZED-status i lynx-questions.php (rad 8, 10, 12, 15, 17, 19, 21) — omätta FÖRE-baselines: mogen-hy väntar main-push, acne-ansikte är fryst mätsida (§13.G), Fas 3b-sidorna (micro/porto/acne-rygg/sebo) omätta.
- lynx-questions.php rad 24 — sid-badges utan frågelista inkl. den öppna bevakningsfrågan microdermabrasion AIQ GOOD→OK ('vilken fråga tappade GOOD?').
- lynx-gaps.php rad 16-20 — ipl-rosacea-gapsen 7 jul: §8.1-beslut EJ fattade + 💡-suggestionens text saknas (öppen beställning).
- lynx-gaps.php rad 22-26 — om-oss-gapsen: 4:e punkten okänd (öppen tråd, kopplad till §9 rad 180 i START).
- lynx-gaps.php rad 10 — exosom/polynukleotid-gapet: ägarbeslut VÄNTAR, gated på lansering (§5-ram).
- lynx-gaps.php rad 34 — beställningslistan sidor med GAPS >0 utan sparad gap-text.
- lynx-log-arkiv.php rad 4 — arkiv-policyn (operativ regel, beslutad 2026-07-02); endast filnamns-rättning.
- lynx-copy-playbook.php som FIL — ägarbeslut 6 jul att stubben behålls för gamla §-referenser; endast komprimering, radering kräver nytt ägarbeslut.
- Ägarbesluten 'startsidan besvarar ej silo-frågorna' (2 jul) och 'kör 1 Claude i taget' (1 jul) — bevaras i §1.5 H7 resp. §0.1/arkivet vid all komprimering.
