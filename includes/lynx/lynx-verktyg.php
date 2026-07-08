<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX VERKTYG — de tre mekaniska checkarna

```
▣ MANIFEST
KIND          VERKTYG (stabil som REGEL). Kopiera ut mellan BEGIN/END-markörerna till en .py-fil och kör.
LADDA-NÄR     vid sessionsstart · efter varje statusbyte · före varje main-push · efter varje omstrukturering
KANONISK-FÖR  statuskoll (divergens + verktygsintegritet) · pekarkoll (trasiga pekare) · noloss (innehållsförlust)
PEKAR-PÅ      lynx-START §0 = statusdisciplinen + arkitekturen · lynx-models §11.1 = den kanoniska statuscellen
```

> ⚠️⚠️ **RÖR INTE AVGRÄNSARNA.** Skripten avgränsas av Python-kommentarer, `# ==== BEGIN x.py ====` / `# ==== END x.py ====`, **inte av markdown-fences.** Skälet: skripten innehåller själva både ``` och `~~~` i sina egna regex (de parsar §-KARTA-blocket och varandras kodblock). Varje fence de känner igen hugger av dem själva. **Det hände två gånger den 8 juli** — först blev `pekarkoll` 564 tecken lång i repot, sedan högg `statuskoll` av sig själv i den funktion som skulle upptäcka just det. **Kravet på en avgränsare: den får inte kunna förekomma i det den avgränsar.**
>
> **Varför verktygen finns.** Tre tysta felklasser: (1) en cell säger emot en annan — 6 juli sa sex sidor "väntar main-push" medan LÄGE sa "live på main"; (2) en pekare pekar på en fil som flyttat; (3) innehåll försvinner i en omstrukturering. Ögat missar alla tre.
>
> **Gyllene regeln: en check som kan returnera tyst grönt är farligare än ingen check.** Alla fem detektorer är negativkontrollerade. **Sänk aldrig en tröskel, gör aldrig en regel mer tillåtande, peka aldrig om en nål, och committa aldrig med en röd check — utan att först bevisa att innehållet lever.** Detta gäller även en check du själv graderar: en självgraderad kvittens är samma felklass (§13.E).

## 1. `statuskoll.py` — säger cellerna samma sak, och går verktygen att köra?
Fem detektorer: motsägelser mot den kanoniska cellen (`lynx-models` §11.1) · dödsfraser härledda ur den · fullständighet (varje omskriven sida måste ha en kanonisk rad) · resolvern (pekar §-KARTAN på filer som bär §:et?) · **verktygsintegritet** (går skripten här nedanför ens att parsa?). **Kör vid sessionsstart och alltid före main-push.**

# ==== BEGIN statuskoll.py ====
#!/usr/bin/env python3
"""STATUSKOLL — divergens-detektor för LYNX-filsetet.

pekarkoll.py svarar på "pekar pekarna rätt?". Det här svarar på den fråga som
faktiskt bet oss den 6 juli: **säger cellerna samma sak?**

Läser status ur den KANONISKA cellen och larmar om någon annan AKTIV/REGEL-cell
påstår motsatsen. Kör efter varje statusbyte, och alltid före en main-push.
"""
import re, os, sys, glob

LYNX = '/Applications/Cursor/acnespecialisten/includes/lynx'
def load(f): return open(os.path.join(LYNX, f), encoding='utf-8').read()

# HISTORIK/TEMP får säga vad de vill — de är frysta ögonblicksbilder.
# lynx-verktyg citerar dödsfraser i sin egen kod — utesluten.
KOLLADE = ['lynx-START.php','lynx-backlog.php','lynx-models.php','lynx-data.php',
           'lynx-score.php','lynx-examples.php','lynx-rewrite.php','lynx-gaps.php','lynx-questions.php']

# ── 1. KANONISK CELL: lynx-models §11.1 ────────────────────────────────────
def kanonisk():
    t = load('lynx-models.php')
    m = re.search(r'## 11\.1(.*?)När en rad refreshats', t, re.S)
    if not m: sys.exit('❌ §11.1 hittades inte i lynx-models — den kanoniska cellen saknas.')
    sidor = {}
    for line in m.group(1).split('\n'):
        if not line.startswith('| ') or '---' in line or line.startswith('| Sida'): continue
        c = [x.strip() for x in line.strip('|').split('|')]
        if len(c) < 7: continue
        namn = c[0]
        if 'INTRO-EXPERIMENT' in namn: continue          # delrad på en sida som redan finns
        slug = namn.replace('/index.php','').replace('.php','').strip('/')
        if slug in ('hudbehandlingar/ipl',): pass         # behåll sökväg, "ipl" är för generiskt
        elif '/' in slug: slug = slug.split('/')[-1]
        sidor[slug] = {
            'live': 'LIVE' in c[2],
            'matt': bool(re.search(r'\bMÄTT\b', c[6])),
            'rad' : namn,
        }
    return sidor

# ── 2. MOTSÄGELSER ─────────────────────────────────────────────────────────
KANONISK_FIL = 'lynx-models.php'   # äger sin egen narrativ; kollas inte mot sig själv

def citerad(line, frasen):
    """En regel som CITERAR en dödsfras är inte en överträdelse. Samma fälla som i
    pekarkoll: checken kan inte skilja regeln från exemplet — så vi lär den."""
    return bool(re.search(r'["\u201c\u201d«»]\s*' + re.escape(frasen), line))

def mentions(line, slug):
    # 'pigmentflackar' får inte matcha inuti 'behandla-pigmentflackar'
    return re.search(r'(?<![\w-])' + re.escape(slug) + r'(?![\w-])', line)

def kolla_motsagelser(sidor):
    fel = []
    for f in KOLLADE:
        for n, line in enumerate(load(f).split('\n'), 1):
            for slug, st in sidor.items():
                if not mentions(line, slug): continue
                if st['matt'] and re.search(r'\bOMÄTT\b', line):
                    fel.append((f, n, slug, 'kanoniskt MÄTT, men raden säger OMÄTT', line))
                if not st['matt'] and re.search(r'\bMÄTT\b', line) and f != 'lynx-models.php':
                    fel.append((f, n, slug, 'kanoniskt OMÄTT, men raden säger MÄTT', line))
                if st['live'] and f != KANONISK_FIL:
                    for frasen in ('väntar main-push', 'hålls på staging', '⛔ GSC-gate'):
                        if frasen in line and not citerad(line, frasen):
                            fel.append((f, n, slug, f'kanoniskt LIVE, men raden säger "{frasen}"', line))
    return fel

# ── 3. HÄRLEDD GLOBAL KOLL: dödsfraser som inte får finnas kvar ────────────
def kolla_dodsfraser(sidor):
    fel = []
    if all(s['live'] for s in sidor.values()):
        for frasen in ('väntar main-push', '⛔ GSC-gate'):
            for f in KOLLADE:
                for n, line in enumerate(load(f).split('\n'), 1):
                    if frasen in line and not citerad(line, frasen):
                        fel.append((f, n, '—', f'alla sidor är LIVE → frasen "{frasen}" är död', line))
    return fel

# ── 4. FULLSTÄNDIGHET: varje omskriven sida måste ha en kanonisk rad ───────
def kolla_fullstandighet(sidor):
    bl = load('lynx-backlog.php')
    omskrivna = re.findall(r'^- \[x\] `([^`]+)`', bl, re.M)
    saknas = []
    for sida in omskrivna:
        slug = sida.replace('/index.php','').replace('.php','').strip('/')
        if slug not in ('hudbehandlingar/ipl',) and '/' in slug: slug = slug.split('/')[-1]
        if slug not in sidor: saknas.append(sida)
    return saknas

# ── 5. RESOLVERN: pekar §-KARTAN på filer som faktiskt bär §:et? ───────────
def kolla_resolvern():
    txt = load('lynx-START.php')
    blk = re.search(r'### §-KARTA.*?```\n(.*?)```', txt, re.S)
    if not blk: return [('lynx-START.php', 0, '§-KARTA-blocket saknas')]
    fel = []
    for line in blk.group(1).splitlines():
        m = re.match(r'\s*(§[\d.,\s§]+?)\s*→\s*(\S+)', line)
        if not m: continue
        mal = m.group(2)
        if mal == 'lynx-backlog': mal = 'lynx-backlog'
        try: filtext = load(mal + '.php')
        except FileNotFoundError:
            fel.append((mal, 0, 'filen finns inte')); continue
        for ref in re.findall(r'§(\d+(?:\.\d+)?)', m.group(1)):
            # rubrik som "## 1.2", "### 8.1", "## §14", "## 0.3"
            if not re.search(r'^#{1,4} (§)?' + re.escape(ref) + r'[\s.]', filtext, re.M):
                fel.append((mal, 0, f'§-KARTAN säger att §{ref} bor här, men ingen rubrik matchar'))
    return fel

# ── 6. VERKTYGSINTEGRITET: går skripten i lynx-verktyg.php ens att köra? ─────
def kolla_verktygen():
    """Repo-kopian är den enda som finns kvar när en session dör. Är den trunkerad
    eller oparsbar är hela skyddet en illusion — och ingenting säger ifrån.

    ⚠️ Avgränsarna är Python-KOMMENTARER, inte markdown-fences. Skripten innehåller
    både ``` och ~~~ i sina egna regex, så varje fence de känner igen hugger av dem
    själva. Det hände två gånger 8 juli, andra gången i just den här funktionen.
    Kravet på en avgränsare: den får inte kunna förekomma i det den avgränsar."""
    import ast
    try: v = load('lynx-verktyg.php')
    except FileNotFoundError: return ['lynx-verktyg.php saknas helt']
    fel = []
    for n in ('statuskoll.py','pekarkoll.py','noloss.py'):
        a, b = f'# ==== BEGIN {n} ====', f'# ==== END {n} ===='
        if a not in v or b not in v:
            fel.append(f'{n}: BEGIN/END-markör saknas'); continue
        kod = v[v.index(a)+len(a):v.index(b)]
        if len(kod) < 3000: fel.append(f'{n}: bara {len(kod)} tecken — trunkerad?')
        try: ast.parse(kod)
        except SyntaxError as e: fel.append(f'{n}: går inte att parsa (rad {e.lineno}: {e.msg})')
    return fel

sidor = kanonisk()
print(f'═══ KANONISK CELL: lynx-models §11.1 — {len(sidor)} sidor ═══')
print(f'   MÄTTA: {", ".join(s for s,v in sidor.items() if v["matt"]) or "—"}')
print(f'   OMÄTTA: {len([1 for v in sidor.values() if not v["matt"]])} st · LIVE: {len([1 for v in sidor.values() if v["live"]])} st')

n = 0
print('\n═══ 🔴 MOTSÄGELSER — en cell säger emot den kanoniska ═══')
for f, ln, slug, why, line in kolla_motsagelser(sidor):
    print(f'  ❌ {f}:{ln}  [{slug}]  {why}\n       {line.strip()[:100]}'); n += 1
print('  ✓ inga' if not n else f'  ── {n} MÅSTE LAGAS')

m = 0
print('\n═══ 🔴 DÖDA FRASER — härlett ur den kanoniska cellen ═══')
for f, ln, _, why, line in kolla_dodsfraser(sidor):
    print(f'  ❌ {f}:{ln}  {why}\n       {line.strip()[:100]}'); m += 1
print('  ✓ inga' if not m else f'  ── {m} MÅSTE LAGAS')

s = kolla_fullstandighet(sidor)
print('\n═══ 🔴 FULLSTÄNDIGHET — omskriven sida utan kanonisk rad ═══')
print('  ✓ alla omskrivna sidor har en §11.1-rad' if not s else '\n'.join(f'  ❌ SAKNAS i §11.1: {x}' for x in s))

r = kolla_resolvern()
print('\n═══ 🔴 RESOLVERN — pekar §-KARTAN på filer som bär §:et? ═══')
print('  ✓ varje § i kartan har en matchande rubrik i sin fil' if not r else '\n'.join(f'  ❌ {a}: {c}' for a,_,c in r))

vk = kolla_verktygen()
print('\n═══ 🔴 VERKTYGSINTEGRITET — går skripten i lynx-verktyg.php att köra? ═══')
print('  ✓ tre kodblock, alla parsar' if not vk else '\n'.join(f'  ❌ {x}' for x in vk))

sys.exit(1 if (n or m or s or r or vk) else 0)

# ==== END statuskoll.py ====

## 2. `pekarkoll.py` — pekar pekarna rätt?
Parsar §-KARTAN ur `lynx-START` (håller aldrig en egen kopia). **Den avgörande checken heter TRASIGA pekare:** en pekare som NAMNGER en fil, eller är positionell ("§9 nedan"), bryts när filen flyttar; ett naket §-nummer gör det inte.

# ==== BEGIN pekarkoll.py ====
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
        'lynx-copy-playbook':'DÖR','lynx-optimering-underlag':'TEMP','lynx-verktyg':'VERKTYG'}
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
    # VERKTYG citerar pekare som exempel i sin egen kod — den äger inga.
    if KIND.get(src) in ('HISTORIK','TEMP','DÖR','VERKTYG'): continue
    txt = open(path, encoding='utf-8').read()
    # En positionell pekare ("§9 nedan") är KORREKT i den fil där §9 faktiskt bor.
    at_home = (src == HOME_NOW)
    rules = ((QUAL,'NAMNGER FIL'),) if at_home else ((QUAL,'NAMNGER FIL'), (POS,'POSITIONELL'))
    for lineno, line in enumerate(txt.split('\n'), 1):
        for rx, kind in rules:
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

# ==== END pekarkoll.py ====

## 3. `noloss.py` — tappade vi något?
Ett batteri per §9.0-steg, härlett ur MÅSTE-BEHÅLLAS-listorna. **Kör FÖRE redigering** — måste vara grönt, annars är nålarna fel, inte filen — **och efter.**

# ==== BEGIN noloss.py ====
#!/usr/bin/env python3
"""No-loss-batteri per §9.0-steg. Härlett ur underlagets MÅSTE-BEHÅLLAS-listor.
Kör FÖRE redigering (måste vara helgrönt — annars är nålarna fel) och EFTER (måste vara helgrönt).
Kör:  python3 noloss.py 5"""
import sys, os, re

LYNX = '/Applications/Cursor/acnespecialisten/includes/lynx'
def load(f):
    if f == 'EXAMPLES_ALL':
        return open(os.path.join(LYNX,'lynx-examples.php'),encoding='utf-8').read() + open(os.path.join(LYNX,'lynx-examples-arkiv.php'),encoding='utf-8').read()
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
  ('pigmentflackar V2: prediktion kvar',      'UNION', 'pred 🟠→🔵'),
  ('pigmentflackar V2: AI STYLE-FÖRE 55',     'UNION', 'AI STYLE mot 55-baselinen'),
  ('pigmentflackar: AI STYLE 55 i kanonisk cell', 'lynx-models', 'AI STYLE-FÖRE 55'),
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
  ('"ingen hemmakur"-principen → rewrite §5','lynx-rewrite', 'Ingen hemmakur'),
  ('  …och backlog pekar dit',              'UNION', 'ingen hemmakur'),
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
        out.append((f'§11.1: minst 16 bevakningsrader (hittade {body})', body >= 16))
        for sida in ('solskadad-hy','rhinophyma-rosacea','pigmentflackar.php','acne-ansikte','om-oss'):
            out.append((f'§11.1 har rad för {sida}', sida in m.group(1)))
        # varje omätt rad måste behålla en FÖRE-baseline
        need = ['SCORE 22', 'AISTYLE25', 'AISTYLE30', 'medel 1,57', 'medel 1,77', 'medel 1,82', 'medel 1,92']
        for n in need:
            out.append((f'§11.1 FÖRE-baseline "{n}"', n in t))
    if step == 7:
        t = load('UNION')
        for tier in ('Tier 1','Tier 2','Tier 3','Tier 4'):
            out.append((f'§9.1 {tier} kvar', tier in t))
        flagg = ['acne-ansikte','ytliga-blodkarl','behandla-pigmentflackar','hudforandringar',
                 'om-oss','hudbehandlingar/ipl','ipl-rosacea','mogen-hy','oonskat-har','microdermabrasion',
                 'bristningar','solskadad-hy','rhinophyma-rosacea','pigmentflackar.php']
        miss = [p for p in flagg if p not in t]
        out.append((f'alla 14 flagg-sidor namngivna' + (f' — SAKNAS: {miss}' if miss else ''), not miss))
        out.append(('§12 exakt EN claim-tabell', t.count('| Sida | Status | Tid |') == 1))
    if step == 9:
        t = load('lynx-examples')
        # varje sida med facit måste ha kvar sin Räkning-rad och sitt sidnamn
        aktiv = load('lynx-examples'); allt = load('EXAMPLES_ALL')
        # OMÄTTA + kösidor: facit MÅSTE ligga kvar i den AKTIVA filen
        maste_aktiv = ['ipl-rosacea','hudforandringar','ytliga-blodkarl','mogen-hy','solskadad-hy',
                       'rhinophyma','microdermabrasion','bristningar','pigmentflackar','oonskat-har',
                       'acne.php','acnebehandling','dermapen','microneedling','portomning','acne-rygg','seborroisk-keratos']
        m = [x for x in maste_aktiv if x not in aktiv]
        out.append((f'alla {len(maste_aktiv)} omätta/kösidors facit i AKTIVA filen' + (f' — SAKNAS: {m}' if m else ''), not m))
        # MÄTTA sidor: EFTER-facit i aktiva filen, FÖRE får bo i arkivet
        for x in ('acne-ansikte','behandla-pigmentflackar','om-oss'):
            out.append((f'{x}: EFTER-facit kvar i AKTIVA filen', 'EFTER' in aktiv and x in aktiv))
        out.append((f'inget facit tappat (aktiv+arkiv): Räkning {allt.count("Räkning")}≥7', allt.count('Räkning') >= 7))
        out.append((f'inget tappat: §1.4-check {allt.count("§1.4-check")}≥6', allt.count('§1.4-check') >= 6))
        out.append(('AIQ-listorna kvar', allt.count('AI QUESTIONS') >= 2))
        out.append(('microneedling REWRITE-SPEC i AKTIVA filen', 'REWRITE-SPEC microneedling' in aktiv))
        out.append(('block-planens 11 punkter kvar', 'micronnedling' in aktiv and 'microneedling kur' in aktiv))
        out.append(('loggen är inte längre enda bärare', 'Block-planen (11 punkter) flyttad' in load('lynx-logg')))
        out.append(('SERP-drift-regeln → lynx-models §1.5', 'SERP-DRIFT' in load('lynx-models')))
        out.append(('examples-arkiv varnar (KIND: HISTORIK)', 'KIND          HISTORIK' in load('lynx-examples-arkiv')))
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

# ==== END noloss.py ====
