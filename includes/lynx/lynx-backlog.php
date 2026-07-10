<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX BACKLOG — sidkarta, gap-beslut, TODO & claims (vi använder ingen task-tracker)

```
▣ MANIFEST
KIND          AKTIV — ändras varje session (status, TODO, claims). Re-läs ALLTID; lita aldrig på minnet av den.
LADDA-NÄR     "vad är gjort / vad är nästa" · innan du börjar på en sida (claima i §12) · när en ny TODO öppnas
KANONISK-FÖR  §12 claims · §8 sidkarta · §8.1 gap-beslut · §9 TODO + Bevaka · §9.1 prioriterad backlog · §9.2 fyndlådan · §9.3 parkerat-meta
PEKAR-PÅ      lynx-backlog-archive = avslutade pass · lynx-status = STATUS (LÄGE + §11.1) · lynx-START = router/invarianter/§-KARTA · lynx-rewrite = hantverket · lynx-models = modellen · lynx-log = historik · lynx-data = rådata
```

> **Utbruten ur `lynx-START.php` 8 juli (§9.0 steg 7)** så START kan vara en tunn dispatcher. START bär läget och invarianterna; denna fil bär arbetet. **Öppnar du en ny tråd — skriv den HÄR, aldrig bara i loggen eller i en konversation** (POST-MALLENS ram 4, `lynx-log` §11).

---

## 12. Pågående arbete (in-progress-markör)
Vi kör **1 Claude i taget** (§0.1), så det här är ingen parallell-lås längre utan en **start/stopp-markör**: skriv in sidan du jobbar med **innan** du börjar, töm raden när den är klar (logga i §11). Så ser nästa session direkt var förra slutade. Hittar du en rad ifylld när du trodde du var ensam → **stanna och fråga ägaren** (§0.1 regel 2).

| Sida | Status | Tid |
|------|--------|-----|
| *(tom — ingen är igång)* Senast 10 juli: fixar + sweep 86 filer + meta-fix + Dermapen-svep + R4-städpass + ritual-skärpning (logg #44–#53). **Kön i §9 är öppen — ägaren väljer.** | – | – |

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**HELA FLAGG-LISTAN KLAR: 4 SIGNIFICANT + 10 MODERATE omskrivna, produktions-verifierade 6 juli** (logg #11–#13; per-sida-historiken bor i `lynx-log`). Alla facit i `lynx-examples`. Per-sida-status + öppna rester: §9 Fas 1/Fas 3 nedan.

**Öppna rester på de MÄTTA sidorna:** acne-ansikte intro-blockets 🟠 (micro-fix-kandidat) · behandla-pigmentflackar 4 block (micro-fix-kandidat, frysning hävd) · om-oss badge-bekräftelse.
**Kvar för framtida städpass:** pigmentflackar FAQ-sektion (AI-holdout, ej facit-flaggad) + typtitel-versalisering · ärr-boilerplate-sweep (§9).

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

### 8.1 Per-sida gap-punkter (LYNX-förslag) + beslut
Från LYNX "Quick wins / Recommended improvements". Beslut enligt §5 (kosmetiskt, siloing).

**GENOMFÖRDA:** `ytliga-blodkarl.php` (rosacea-länk + hemmavård-vinkeln; 1177-/hudcancer-punkterna SKIP = medicinskt) · `hudproblem/hudforandringar/index.php` (H1-sökord + hub-fokus; söka-vård SKIP). Gap-texterna i `lynx-gaps`. **Den återanvändbara skrivprincipen som föddes här — "när det ärliga svaret är ingen hemmakur, säg det och led till vår lösning" — bor nu i `lynx-rewrite` §5.**

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

**Kön är öppen, inte ordnad.** Grupperna säger vad som *får* föreslås vid sessionsstart (§0.1-spärren) — inte vad som är bestämt. **Ägaren väljer.**

---

### ▶ SIDARBETE — det enda som får föreslås vid sessionsstart

- [ ] **⚖️ §5-BROTT LIVE PÅ PRODUKTION: ordet "smärtfritt" i 12 filer (upptäckt 8 juli av §7.4b-granskaren).** §5:s juridikblock förbjuder ordagrant *"Inga 'helt riskfritt', 'smärtfritt', 'garanterat resultat'"* och *"Aldrig riskfritt-intryck — utelämnad riskinformation = vilseledande marknadsföring (KO-praxis)"*. Regeringsuppdraget juni 2026 = skärpning på väg. **Filer:** `infuzion` · `permanent-harborttagning` · `dermapen` · `hudflikar` · `ytliga-blodkarl` · `microneedling` (brödtext rad 64 **+ meta rad 7 `✓Smärtfritt`**) · `rosaceabehandling` · `varumarken/index` · `prx-t33` · `varumarken/splendor-x` · `varumarken/soprano-ice` · `hudbehandlingar/skinbooster`. **ÄGARBESLUT:** eget juridik-pass (som språkfel-svepet 2 juli, egen commit) eller per sida vid rewrite? Meta-descriptions kräver separat commit (§13.H). **Ersättning enligt §4.2:** riskinfo är copy-vänlig — säg vad som faktiskt händer ("de flesta beskriver behandlingen som lätt stickande; huden är röd i ett till två dygn") i stället för att påstå frånvaro av smärta.
- [ ] `microneedling.php` (färsk FÖRE 8 juli: SCORE **60**, KW 63, 🔵; facit 22 apr: 4🔴/2🟠) — de-AI + "microneedling kur"-gapet (§8.1). **⚠️ ÅTERRULLAD TVÅ GÅNGER: 2 juli (ägarbeslut, statistiken först) och 8 juli (§7.4b-granskningen underkände — §5-brott, tappad substans, påhittade påståenden).** Läs **hela REWRITE-SPEC:en i `lynx-examples`** innan du börjar: block-plan + sex verifierade fällor + sju gränsfall. 5 språkfel/typos redan fixade 2 juli em.
  **✅ FÖRVILLKORET UPPFYLLT 10 juli 09:40 — ägaren levererade hela SCORE-popupen** (13 delvärden verbatim i `lynx-score`): Overall 60 = medel(CQ 60, EEAT 60) · CQ-subs 88/88/83/95/92 (badge-anomali, subs-medel 89) · EEAT-subs 85/80/85/90 · **AI STYLE-FÖRE 60.** Fingeravtrycket är nu färskhetsdetektorn: rör sig någon delsiffra efter rewrite + main-push är crawlen bevisligen ny → AI STYLE-värdet giltigt EFTER även om det står stilla (`lynx-score` slutsats G). **Sidan är redo för rewrite** — REWRITE-SPEC:en i `lynx-examples` gäller. *(Sidan är 🔵 → SCORE-vinst, ej flagg-vinst (§1.4); popupen är därför sidans egentliga mätvärde.)*
- [ ] **MICRO-FIX `rhinophyma-rosacea.php` — två block, färskt facit, resten av sidan rörs inte (öppnad 8 juli).** EFTER-facitet visar 0🔴 kvar men **två 🟠 av samma genre**: block #2 (*"Rhinophyma rosacea är en särskilt svår form… talgkörtlar och bindväv…"*) och block #4 (*"Rosacea på näsan kan i sällsynta fall utvecklas till rhinophyma…"*). Båda är definitions-/förloppsprosa, båda fick mekanism i V2 och rörde sig ändå bara 🔴→🟠. **Det renaste tvåblocks-experimentet vi kan köra:** sidan är mätt, badgen är 🔵, och allt annat på sidan är känt. Läs de fyra lärdomarna i `lynx-examples` först — särskilt att §2:s mekanism-spak räcker till ett steg i den här genren, inte två.
- [ ] `portomning.php` (KW **23**, SCORE 60 färsk; facit 24 jun: 2🟠) — lätt pass: importans-öppningar/svansar + typos ("ansiktet,ryggen", "brötstet").
- [ ] `acne-rygg.php` (KW51→46; SCORE 0 var pågående omanalys/indexering → 69 färsk 7 jul, satte sig själv — ägarbesked 7 jul: 0/blank = LYNX uppdaterar, inte fel; facit 25 apr: 3🔴/1🟠) — de-AI + 2 grammatikfel live + gap-punkter (§8.1).
- [ ] `seborroisk-keratos.php` (KW110, SCORE 74 färsk; facit 25 apr: 2🔴/2🟠) — de-AI + grammatikfel (CryoPen-blocket) + §8.1-gaps (smalna av, curettage).

**Löpande / avslut**
- [ ] **Gå igenom `hudproblem/hudforandringar/index.php` (mall-review)** — en pre-existerande död debug-rad (`$types_url`, rad 777) läckte en synlig PHP-warning på live (nu borttagen). Kontrollera om mallen har mer cruft/latenta buggar: andra utkommenterade `<?php echo $var ?>`, odefinierade variabler, gamla debug-rester. *(Temporär TODO här tills sidan är genomgången.)*

**Parkerat / väntar externt**
- [ ] **ÄRR-FRÅN-FINNAR-BOILERPLATE-LÄCKA (ägar-flaggat 6 jul — dokumentera för ärr-processen):** ärr-mallens copy-paste läcker på FEL ämne. På `pigmentflackar.php` (fixat 6 jul under omskrivningen): FAQ-kategorirubrik "Allt du behöver veta om ärr av finnar" → "...pigmentfläckar", `$specialist_url_title` "inriktning mot ärr bildade av finnar" → "specialiserade på pigmentfläckar". Strängarna "ärr av finnar/ärr bildade av finnar/fläckar från finnar" finns i **3 filer** (grep): `finnar-arr.php` + `behandla-finnar-arr.php` (ÄRR-sidor — RÄTT ämne, men kolla särskrivning/Title-Case när de görs i LYNX-processen; deras `$specialist_url_title` rättades redan 10 juli i sweep del 2) + `pigmentflackar.php` (var FEL, nu fixat). **När vi når ärr-/finnar-arr-sidorna i backloggen (§9.1 Tier — acnearr KW127 SCORE0, finnar-arr, behandla-finnar-arr, laser-acnearr m.fl.): granska att deras egen boilerplate är ämnesrätt OCH att den inte läckt vidare till andra sidor.** Samma klass som "Akne Specialiserade"-läckan nedan. **Öppen widget-fråga (pigmentflackar):** relaterade-problem-kortet "Åldersfläckar" länkar till `/solskadad-hy.php` (ej `/aldersflackar.php` som finns) — url_title/alt fixade, men url-destinationen lämnad orörd (kan vara medveten silo-koppling åldersfläckar=solskador); bekräfta med ägaren.
- [x] ~~**MALL-BOILERPLATE-LÄCKA `$specialist_url_title = "Akne Specialiserade Hudterapeuter"` (27 filer)**~~ — ✅ **SVEPT 10 juli på ägarval** (commit ed50bc76, logg #46): 23 aknesidor → "Aknespecialiserade hudterapeuter"; ämnesfel-sidorna aldersflackar + melasma → "Hudterapeuter specialiserade på pigmentbehandlingar" (solskadad-hy-prejudikatet), atrofiska-arr → "…på ärrbehandlingar", milier → "…på borttagning av milier". 0 träffar kvar. **"Bevaka även"-kollen gjordes vid sweepen — fynden (≈25 fler `$specialist_url_title`-varianter + två Verktyg-bildtitlar) ligger i §9.2, väntar ägarbeslut.**

---

### ▶ ÄGAR-BESTÄLLNINGAR — väntar på ägaren, inte på exekutorn

- [ ] ***AI STYLE-TESTET — beställningen LEVERERAD 8 juli 18:13, men testet är fortfarande OBESVARAT.** Popupen gav AI STYLE 70, exakt som FÖRE — **och samtliga övriga 12 delvärden också** (Overall 74, CQ 85, Base 85, Depth 84, Evidence 76, Language 95, Readability 90, EEAT 60, 85/80/80/85). Tredje bit-identiska replikationen. Language stod stilla trots språkfixar; Evidence trots namngivna metoder. **Slutsats: SCORE-vyn har inte läst V2** — `"Analyzed just now"` daterar renderingen, inte crawlen (`lynx-score` slutsats E, ny mätregel 6). **Att läsa 70→70 som "de-AI flyttar inte AI STYLE" vore attribution på stale crawl (mätregel 4).**
  **Vad som återstår — ingen ny beställning, bara tålamod:** skicka SCORE-popupen för `rhinophyma` igen vid tillfälle. **Rör sig NÅGON av de 12 delsiffrorna är crawlen ny, och då är AI STYLE-värdet i den dumpen vårt EFTER.** Be aldrig om omkörning (ägarbesked 7 juli). Samma spärr gäller `pigmentflackar` (AI STYLE-FÖRE 55).
  **⚠️ Men rhinophyma är fel sida för testet** (`lynx-score` slutsats G): den ligger vid SCORE-taket, så ingenting KAN röra sig, så färskheten kan aldrig bevisas där. **✅ 10 juli 09:40: testet ARMERAT på rätt sida — microneedlings kompletta FÖRE-fingeravtryck levererat och sparat (`lynx-score`; AI STYLE-FÖRE 60, golv finns).** Nästa steg är rewriten + main-push; sedan avgör första dumpen där en delsiffra rört sig.
- [ ] **"LAST UPDATE"-DATUM FÖR DE 7 FLAGGADE (öppnad 8 juli 16:54 — ersätter och skärper "AI Copy-datum för de 3 kvarvarande SIGNIFICANT").** Flagg-gruppen är **komplett och oförändrad sedan 10:45**: 2 SIGNIFICANT (`hudforandringar`, `ytliga-blodkarl`) + 5 MODERATE (`hudbehandlingar/ipl`, `bristningar`, `oonskat-har`, `ipl-rosacea`, `microdermabrasion`). **Alla sju är redan omskrivna och live på main** (1 juli resp. 6 juli) → listan är ingen arbetskö utan en väntelista. **Det enda som skiljer de två tolkningarna:** öppna AI Copy-vyn **per sida** och läs *"Last update"*. Ligger datumet FÖRE sidans main-push är badgen stale (vänta, gör inget). Ligger det EFTER har fyra rewrites INTE flyttat badgen medan tre andra gjorde det (mogen-hy · solskadad-hy · rhinophyma) — och då är det §1.1-modellen som ska prövas, inte sidorna skrivas om igen. Pages-listvyn bär inte datumet; det syns bara i per-sida-vyn. **Prioritera `ytliga-blodkarl`** (live sedan 1 juli, SCORE 22→74 färsk medan badgen står kvar på SIGNIFICANT = starkaste indikationen på vy-oberoende, mätregel 2).
  **8 juli 18:11 — stale-tolkningen stärkt, inte bevisad:** `rhinophyma` fick *"Last update: 08 Jul"*, texten var V2 (grep-verifierad) och badgen hade flyttat 🟠→🔵. **När AI Copy-vyn väl läser den nya texten flyttar badgen.** De sju flaggade sidornas badges står alltså kvar för att crawlen är gammal, inte för att rewritesen misslyckades — men **det är fortfarande en slutsats från EN sida**; datumet per sida avgör var och en. *(Notera samtidigt: samma sida hade PRE-V2-crawl i SCORE-vyn samma minut — mätregel 6. Sidan är inte "färsk"; en av dess vyer är det.)*
- [ ] **GSC-KOLL (SEO-vakten §10.0 — nu POST-LIVE-mätning, ej längre gate; ägar-uppgift):** ⚠️ gaten PASSERADES på ägarbeslut 6 jul (hela wave 2 pushad till main, §13.A = ägarens beslut). Dra därför Search Console-data som UPPFÖLJNING (klick/visningar/snittposition per sida, ~4 v före vs efter) på ALLA nu-live omskrivna sidor. Röd → §13.F-rollback + obduktion. Bakgrund: omskrivna sidor tappade KW mer än orörda i 6 jul-scanen (behandla-pigment −19 %). **Kan köras när som helst — blockerar inte nästa sida.**
- [x] ~~**Milier-/CryoPen-priser (öppen ägar-verifiering sedan 2 juli)**~~ — ✅ **HELT STÄNGD 10 juli:** milier bekräftade ("milier stämmer": enstaka 495 kr + 1595/3995/4995) · CryoPen från-pris 1995 kr bekräftat → FAQ-svaret på `hudforandringar` rättat (två 1595→1995, logg #64) · **återbesöket 295 kr bekräftat via ägarens skärmbild av hela CryoPen-prislistan** (transkriberad i logg #66 — användbar som facit för från-pris-surveyn i §9.2).
- [ ] **BESTÄLLNING (avgör §1.4-frågan):** be ägaren köra FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan — testar om orapporterade FAQ-svar/versionsskillnad förklarar konflikten. Kombinera med §1.2-beställningen (2–3 färska SCORE-breakdowns varav minst en med AI STYLE beräknad) — **NYTT 6 jul: prioritera ytliga-blodkärls färska nedbrytning (SCORE 74, post-rewrite = AI STYLE-spakens A/B-test, snabbare än att vänta på acne.php).**
- [ ] **om-oss gap-popupens 4:e punkt** ej synlig i dumpen (2 QW + 2 sugg; 3 lästa: remiss/vårdkö, skillnad mot hudläkare, prisinformation — bekräftade oförändrade 6 jul) — be om den när om-oss-gapsen ska åtgärdas; §8.1-beslut för om-oss tas då (remiss-/hudläkare-vinkeln är redan sidans positionering → trolig GÖR inom §5, men beslut väntar 4:e punkten + badge-bekräftelsen).

**Fas 3b — facit-klara sidor (rewrite i SEPARAT session, ägarbesked 2 jul; alla sidnivå 🔵 → §1.4: SCORE/AI STYLE-vinst, ej flagg-vinst)**

---

### ▶ MÄTNING & BEVAKNING

**Bevaka — trådar öppnade från omkringliggande skärmbildsdata (§0-principen, 2 jul)**

- [ ] **`pigmentflackar` — V2 väntar fortfarande på mätning. En skärmdump räcker nu.** Sidan saknades helt i AICOPY-vyn 8 juli 16:54 (pågående omanalys), men **18:13 är raden tillbaka i Pages-vyn (VALUE 32, SCORE 73) — AI COPY-cellen låg bara bakom SCORE-popupen.** Badgen är alltså inte borta, den är **oläst**. Öppna Pages-vyn utan popup, eller AI Copy-vyn per sida. *(AI STYLE-FÖRE 55 = sajtens näst lägsta; men 7 juli-dumpen saknar Depth ⇒ ofullständigt fingeravtryck, samma spärr som slutsats G.)* **10 juli 08:42: sidan saknas i MODERATE-blocket i AICOPY-sorterad vy — antingen badge-flytt (→ skulle ligga i SLIGHT-delen, som var trunkerad) eller omanalys igen. Frånvaro ≠ SLIGHT — be om SLIGHT-delen av listan eller sidans AI Copy-vy.**
- [ ] **GAPS-rensningen 2 jul:** ytliga-blodkarl 2/2→0/0, ipl-rosacea 2/1→0/0, homepage 3/2→0/0 — utan att sidorna refreshats (tiers/SCORE står stilla). Verifiera vid nästa scan: äkta rensning (gap-texterna lösta/borttagna av LYNX) eller scan-artefakt? Påverkar §8.1-gapbesluten för de sidorna. **Tooltip-insikt 2 jul 15:00: GAPS är KONKURRENT-relativa** ("compared to top-ranking competitors") → rensning/nya gaps kan bero på ändrad konkurrentbild, inte våra åtgärder — attribuera aldrig GAPS-förändringar till oss utan att läsa gap-texterna. **UPPDATERING 7 jul (logg #14): ipl-rosacea GAPS TILLBAKA, nu 3⚡/1💡** — rensningen var inte permanent (stärker konkurrent-relativa tolkningen). Gap-texterna MOTTAGNA 12:42 (→ lynx-gaps, preliminärbedömda: oro-för-försämring HIGH trolig GÖR · triggers → rosacea-länk · kostnadsfaktorer trolig GÖR); 💡-suggestionens text saknas — be om "View gap details" när gap-arbetet blir aktuellt. §8.1-beslut ej fattade. **7 juli 13:58: även acnearr GAPS 3/1→1/0 på orörd sida** — ytterligare belägg för rörliga/konkurrent-relativa GAPS.
- [ ] **microdermabrasion AIQ GOOD→OK** (försämrad 30 jun→2 jul utan våra ändringar) — kolla AI QUESTIONS-detaljen när facit hämtas för sidan (§1.5-modellen: vilken fråga tappade GOOD?).
- [ ] **fragor-svar AIQ OK→POOR (7 juli 14:16; SCORE 36→56 färsk samtidigt):** sidan ÄR wave 2-ändrad (FaceTime→Google Meet, live 6 juli) men ändringen är minimal och AIQ är SERP-baserad → trolig extern/omskalnings-effekt, EJ attribuerad. Be om §1.5-frågelistan för fragor-svar vid tillfälle — vilken fråga föll? (Sidan är HUMAN-badgad, 114 ord — FAQ-hubben; POOR här kan vara AIQ-uppsida när Fas 2-schemat körs.)
- [ ] **"missing localized"-DRAFT-raden (7 juli 14:16, ofiltrerad Pages-vy, VALUE 27):** KW **616**(!) · CLICKS 0 · ingen URL · enda raden med AI FEATURES-toggeln AV · WORDS/STATUS tomma. Troligen LYNX-systemrad för sökord utan mappad/lokaliserad sida — **fråga ägaren/LYNX vad den är**; 616 KW är för mycket för att ignorera om det är riktiga icke-mappade sökord (jfr sidregister B — saknade sidor).
- [ ] **Dubblettrader i Pages-vyn (10 juli 09:40, URL-filtrerad "microneedling"):** `microneedling.php` förekommer 2× + en `/microneedling.php/`-variant med trailing slash; även microneedling-acne/-acnearr dubblerade — alla dubbletter utan VALUE/SCORE. URL-varianter som egna rader = möjlig kanoniserings-/indexeringsfråga (jfr "missing localized"-raden) — fråga ägaren/LYNX; kolla canonical-taggarna på sidorna vid tillfälle.
- [ ] **`/varumarken/powerlite-photonova/`:** finns i LYNX/live men INTE i repot — utred (borttagen sida som lever kvar på live? redirect behövs?).
- [ ] **`/varumarken/hifu/`:** tillagd före 2 juli 2026, syns ännu inte i LYNX — bevaka att den indexeras.
- [ ] LYNX justeringsloop (§10) — läs varje refresh, uppdatera §11 + lynx-data.php.
- [ ] Mät-loop & modell-förfining (§10): prediktera före, mät efter, förfina §1.1/§1.2, **backporta lärdomar till redan gjorda sidor**.
- [ ] **AIQ-frågelistan för `hudproblem/oonskat-har/` saknas i `lynx-questions`.** Öppen tråd från Fas 3-omskrivningen; fram till 8 juli hade arkivet den som enda bärare — det förbjuder §0. Hämta listan vid nästa AIQ-dump.

---

### ▶ PARKERAT — tas bara upp på ägarens begäran

- [P] **PRODUKTIFIERING — flera signaler + flera domäner (ägar-idé 8 juli, PARKERAD tills LYNX-arbetet är klart).** Målet på sikt: setupen blir ett textskrivar-verktyg som kan lyftas in på andra sajter — först LYNX-komponenten, sedan GSC, Ahrefs m.fl. **Vad som krävs:** filsetet blandar idag tre saker som då måste separeras — (a) **SIGNAL-adaptern** (LYNX-specifik: kolumndefs, badges, SCORE-formeln, skärmbilds-intaget; engångs per verktyg), (b) **HANTVERKET** (portabelt = själva produkten: formeln, checklistan, AI-tellsen, mät-disciplinen prediktera→mät→förfina→backporta, arkiv-policyn, "ett fakta = en cell"), (c) **SAJTPROFILEN** (per kund: husröst, juridisk ram MFL/PIL/estetiklagen, silo-karta, brandfakta 30 år/SHR/1994, förbudslistan). Idag ligger de om vartannat — §5 blandar em-streck (hantverk), medicinska påståenden (sajtprofil) och roaccutan-guarden (enskild sida); §1.1/§1.3 är rena LYNX-artefakter (per-block-tiers finns inte i GSC). **Billig förberedelse när vi ändå rör filerna:** lägg en ANDRA axel bredvid KIND — `SCOPE: CRAFT | SITE | SIGNAL` — så blir framtida extraktion en grep i stället för en omskrivning. **Två beslut som blir dyrare med tiden:** `lynx-`-prefixet bakar in leverantören i varje filnamn; §-numren (arv från monolit-playbooken) är redan orsaken till trasiga pekare vid varje flytt → namngivna ankare (`#formeln`, `#seo-skydd`) överlever flyttar. **⚠️ Ärlighet:** bedömningsmodellen är kalibrerad på EN korpus, ETT språk, EN bransch (blindtest 57–62 % exakt på vår copy; 3 av 14 omskrivna sidor mätta). Generalisera METODEN, inte MODELLEN, förrän en andra sajt bekräftat den.
- [P] Dubbel `title`-attribut i widgets (§8 — beslut: skippa).
- [V] **Exosomer + polynukleotider (kombinationsbehandlingar) på microneedling.php** — LYNX HIGH-gap 2 jul (konkurrenter: Akademikliniken, Nordiska Kliniken lyfter det); **väntar på att kliniken lanserar behandlingen** (ägaren 2 jul: "vi ska introducera exosomer"). När den finns: eget kort/block på microneedling.php i husröst (§4) inom §5-ramarna + silo-beslut om ev. egen sida. Skriv INGET innan ägaren bekräftar att tjänsten är live.

---

---

### ▶ STÄNGT 8 juli — står kvar som skäl, inte som uppgifter

### ✅ STÄNGD — CHECK-REVISIONEN (8 juli · löst genom radering, ägarbeslut)
`lynx-verktyg.php` med sina tre checkar raderad. Ingen mekanisk grind finns kvar (§0.1). De vaktade §9.0:s omstrukturering — den är gjord — och nio mutationstestade hypoteser visade att deras gröna aldrig var ett mätt påstående: en av dem godkände ett filset där 97 % av innehållet var borta.

**Två saker överlevde verktygen:** (1) regeln i §0.1 — *vaktar verktyget ett pass som redan är genomfört är det skuld, inte skydd*; (2) §-KARTAN är exakt härledbar ur filernas egna rubriker (32/32, mätt), så **skriv aldrig en detektor som vaktar den** — det vore att vakta en dubblett §0 förbjuder.

*(Fulltext med alla sju fynd och deras mutationsbevis: `lynx-backlog-archive`, 8 juli. Skälen: `lynx-log` #29–#33. Koden: git-historiken för `lynx-verktyg.php`.)*

**✅ §9.0 SLUTFÖRT 8 juli.** Stubben och underlagsfilen raderade (se steg 9–10). Kvar, parkerat och ej brådskande: `lynx-score` HISTORIK-prosan · filnamnskonventionen — båda i §9.3.

---
### 9.0 FIL-OPTIMERINGSPASSET — ✅ SLUTFÖRT 8 juli (steg 1–10 + slutgranskning)
Ägar-beställt 7 juli: *"för långa sektioner skummas; långa loggar kanske egen fil."* Utfall: arkitekturen i §0 (lagen "ett fakta = en cell", KIND-taggar, `▣ MANIFEST`), START som tunn dispatcher, `lynx-status` som enda statuscell. Stubben och underlagsfilen raderade.

**Arbetssättet som gällde och som fortfarande gäller vid varje pass:** ETT steg i taget med ägar-avstämning emellan · INGA agent-utskick · inget raderas utan att först bevisa att innehållet lever någon annanstans.

*(Fulltext — alla tio steg, avvikelserna och besluten: `lynx-backlog-archive`, 8 juli. Utfallen: `lynx-log` #26–#34.)*
- [x] **FELKLASS-GENOMGÅNGEN 8 juli: "en verifiering som kan passera utan att verifiera".** Elva incidenter, alla samma form. **Nio satt i de tre checkarna — de raderades samma dag (§9 överst).** Kvar, för att de gäller arbetet och inte verktygen:
  - **Självgraderad §13.E-kvittens lät en text med §5-brott passera ägargranskning.** → §13.E skärpt; §7.4b körs **före** godkännande, inte efter. Gäller alltjämt.
  - **Boten som skrevs, och som föll:** *"varje detektor måste bevisligen kunna bli röd — 14/14 mutationer."* De 14 testade **14 fall, inte varje detektor.** Ett mätt påstående om 14 saker lästes som ett påstående om alla. **Täckningen redovisades aldrig, bara träffarna.** Den lärdomen överlevde verktygen och bor i §0.1.
  - **Heredoc:** citera alltid avgränsaren — `<<'EOF'`, aldrig `<<EOF`. Utan fnuttar tolkar skalet innehållet först och kodblocket töms tyst. Gäller varje engångsskript.
  - *(Ägarbeslut 8 juli: ingen pre-commit-hook. Allt LYNX-arbete stannar i `includes/lynx/*.php` — ingen ny filtyp, ingen git-konfiguration. Spara och pusha alltid.)*
  *(Den fullständiga incident-tabellen beskrev buggar i raderad kod. Den ligger i git-historiken; skälen i logg #26–#28.)*
- [x] ~~Beställning: SLIGHT-raderna ur AICOPY-vyn~~ — **LEVERERAD 8 juli.** Mätningen står i §11.1; rådata i `lynx-data-archive`.
- [x] **NAMNKONVENTION — ÄGARBESLUT 8 juli: engelska filnamn.** Genomfört: `lynx-logg` → `lynx-log` · `lynx-log-arkiv` → `lynx-log-archive` · `lynx-data-arkiv` → `lynx-data-archive` · `lynx-examples-arkiv` → `lynx-examples-archive`. Samma pass: `lynx-lage` → `lynx-status`. 98 referenser uppdaterade, §-KARTAN 33/33 grön. **Kvar, parkerat i §9.3:** `lynx-`-prefixet (bakar in leverantören i varje filnamn — hör ihop med produktifierings-beslutet) · versaliseringen i `lynx-START` (enda filen med versaler).

## 9.1 Prioriterad helsides-backlog (hela sajten, 2026-07-01)
Från LYNX-inventeringen (`lynx-data.php` + Pages-listan). Prio = AI COPY-svårighet × KW × SCORE/GAPS-uppsida. **Process per sida:** hämta per-block-facit FÖRST → facit-driven rewrite (§13.D). **Facit-kö:** ägaren kan klistra in facit för 2–3 sidor i förväg — spara alla direkt (save-first, §0) och beta av i prio-ordning, så blockeras ingen session på väntan. Minns §1.4: 🔴/🟠-sidor ger AI COPY-flagg-vinst; 🔵-sidor ger SCORE-vinst.

**Tier 1 — störst KW + uppsida (GÖR FÖRST):**
1. `/` (Homepage) — KW298, **AI COPY SLIGHT (ej flaggad — bekräftat 2 jul 14:20)**, AIQ POOR (enda POOR-sidan), SCORE28, GAPS 0/0 (rensade). Störst enskild uppsida — men vinsten är SCORE + AI QUESTIONS, inte flagg. Skydda E-E-A-T-widgets.
2. `pigmentflackar.php` — KW244, 🟠 MODERATE **(FACIT ✅ 2 jul 14:22 — medel 2,06, 5–6 🔴→🔵-fixar till 🔵-badge)**. Största MODERATE; pigment-huvudsida (silo mot behandla-pigmentflackar). **✅ Paus HÄVD 6 jul em: blank-läget var pågående omanalys (ägarbesked), ej tier-flytt — kör när sidan + färskt facit dyker upp igen.**
3. `rosacea.php` — KW221, 🔵 SLIGHT, SCORE –. Rosacea-huvudsida.
4. `perioral-dermatit.php` — KW194, 🔵, SCORE –.

**Tier 2 — hög-KW SLIGHT, låg/0 SCORE + gaps (enskilda block kan vara 🔴):**
blodprickar (175, SCORE17) · milier (173, 37) · seborre (168, –) · pormaskar (128, 32) · acnearr (121, SCORE 0→**74 färsk 7 juli** — omanalysen satte sig själv, tredje belägget; GAPS 3/1→1/0; CLICKS 78 = näst mest klickade sidan) · **acne.php (116 — FACIT ✅ MOTTAGEN 1 jul: ~10 🔴-block, redo; husröst-REFERENS → LÄMNA dess 🔵/🟢-block)** · **seborroisk-keratos (110, 74 färsk — FACIT ✅ 2 jul, i Fas 3b-kön)** · hudflikar (105, 28) · finnar (101, silo).

**Tier 3 — resterande MODERATE + mellan-KW SLIGHT (~KW40–71):** permanent-harborttagning · **microneedling (FACIT ✅ 2 jul — Fas 3b-kön)** · finnar-rygg · **bristningar (🟠)** · fodelsemarken · stora-porer (0) · fet-hy · roaccutan · cryopen · alma-hybrid-co2 · dermapen · kemisk-peeling (gaps) · **acne-rygg (FACIT ✅ 2 jul — Fas 3b-kön; SCORE 0 var omanalys → 69 färsk 7 jul)** · **rhinophyma-rosacea (🟠)** · finnar-gravid · behandla-stora-porer · acne-brost · inflammation-acne · **solskadad-hy (🟠)** · ~~ipl-rosacea (🟠)~~ ✅ · ~~oonskat-har (🟠)~~ ✅ · ~~mogen-hy (🟠)~~ ✅ · ~~microdermabrasion (🟠)~~ ✅.

**Tier 4–5 — lägre-KW SLIGHT + HUMAN utility/brand/resultat (lägst prio, batch):** ~60 sidor KW≤38 (full sorterad lista i `lynx-data.php`). HUMAN-sidor (myter, ordlista, priser, recensioner, hudguide…) = bara lätt städning, ej full omskrivning; skydda Trust-bärande widgets. Blanka (avbokningspolicy, karriar) = be om facit vid behov.

**Scope-beslut (ägarbesked 2 jul em):** (1) **ALLA sidor som finns i LYNX ska gås igenom** — vissa redan gjorda, resten framöver; komplett sidregister (i LYNX / saknas i LYNX / i LYNX men ej i repot) i `lynx-data.php` under "Snapshot 2026-07-02 EM". (2) **Allt nedanför `/studentrabatt/` i LYNX-vyn (botox m.m.) = drafts/oanvänt → EXKLUDERAS** ur genomgången. (3) Sidor som saknas i LYNX (homepage-raden?, varumarken/hifu/, avbokningspolicy, karriar, ev. ansiktsbehandling/rosacea/) = håll utkik vid framtida scans (bevakningstrådar §9).

*(Full 5-tier-lista med alla ~100 sidor + noter genererad 2026-07-01; härledbar ur `lynx-data.php`.)*

---

## 9.2 FYNDLÅDAN — upptäckt under arbetet, parkerat för senare (ägarbeslut 8 juli)
**Hit går allt du snubblar på medan du gör något annat.** Regeln står i §0.1 ▶ UNDER ARBETET: skriv EN rad här, säg EN mening till ägaren, fortsätt med uppgiften. **Lådan är default. Ett fynd tas ur den bara genom ägarbeslut** — aldrig för att det kändes viktigt i stunden.

Skillnaden mot de andra listorna: **§9.0/Fas-listorna = planerat arbete** · **Bevaka = trådar öppnade av inkommen mätdata** · **§9.2 = sidofynd.** Ett sidofynd som ägaren prioriterar flyttas härifrån till rätt lista och får en rad i §11. Ett som aldrig prioriteras ligger kvar — det kostar en rad och skyddar mot att samma sak upptäcks tre gånger.

**Format (skärpt 10 juli på ägarbesked):** en rad. `[allvarlighet] vad det är — var det syns — mitt förslag på lösning.` Raden ska vara effektiv att gå igenom i klump OCH begriplig vid ett senare tillfälle utan sessionens kontext — skriv ut vad fyndet ÄR, inte bara var det sitter, och ge alltid ett lösningsförslag att ta ställning till. **Även egna förslag (process/regler/förbättringar) parkeras här** — allt exekutorn hittar eller föreslår hamnar i lådan så ägaren kan besluta i klump. Bevis hör hemma i raden, inte i en utredning.

- [ ] **[medel, utanför LYNX-scope] 25 Dependabot-sårbarheter på default-branchen (12 höga, 12 medel, 1 låg)** — GitHubs push-svar flaggar dem vid varje push (sett 10 juli, aldrig tidigare bokfört) — gäller beroenden i repot, inte sidcopyn. **Förslag:** ägaren öppnar github.com/dahlskincare/acnespecialisten/security/dependabot och avgör; exekutorn rör inga beroenden utan beställning (LYNX-arbetet stannar i `includes/lynx/` + sidfiler).
- [ ] **[lågt, men den sitter i själva kontrollen] SLUTKONTROLL-receptets grupperings-grep döljer bullet-rader** — §0.1 VID SLUT steg 1 (`grep -vE '^[+-]{2}'`) ska strippa diffens +++/----huvuden men matchar också tillagda/strukna rader som själva börjar med "- " (list-punkter, fyndlåde-rader): 4 av 14 plusrader i #53-passet syntes inte i grupperingen, bara i staten (upptäckt när räknevägarna inte gick ihop). **Förslag:** byt mönstret till `grep -vE '^(\+\+\+|---) '` i §0.1 steg 1 — strippar exakt filhuvudena, behåller bullet-rader; stat-korsräkningen fångade felet nu, men bara för att differensen var stor nog att synas.
- [ ] **[lågt] Från-pris-fälten sajtbrett: konvention och färskhet obekräftade (~150 förekomster, öppnad 10 juli efter 799→999-fixen, logg #63)** — konventionen enligt ägaren: från-priset baseras på paketet (per behandling i 5-packet; 799 var före höjningen 3995→4995). Ovisst hur många av de ~150 `price: 'Från X kr'`-fälten (varav många aldrig renderas — hero-fältet echoas inte på alla mallar) som följer konventionen eller släpar efter prishöjningar; t.ex. `hudterapeutens-val` sattes 10 juli till styckpriset 1995 kr — per konventionen vore det 1199 kr (5995/5) — **förslag:** eget litet pass efter ledigheten: lista alla från-priser mot bokningssystemets paket och rätta i klump; ägaren avgör konventionsfrågan (styckpris vs paketpris per behandling) först.
- [ ] **[medel] PHP-fel renderas publikt på både live och staging (display_errors PÅ)** — live svarade 10 juli med parse error + serverns hemkatalog i klartext på `/includes/lynx/lynx-START.php` (main:s gamla version, rad 192; upptäckt vid main-push-undersökningen). Det konkreta felet LAGADES av 10 juli-mergen (verifierat 0 bytes, logg #61) men felklassen kvarstår för varje framtida fel (samma mekanism som warning-läckan på hudforandringar, logg #13). **Förslag:** be webbhotellet stänga av display_errors i produktion — fel ska till serverloggen, inte till besökaren. **Repo-vägen (.user.ini i webbroten) AVFÖRD på ägarbeslut 10 juli** (*"jag vill inte ändra saker på andra filer än php"*) — lösningen ligger i webbhotellets kontrollpanel (LiteSpeed/PHP 8.4; leta "PHP-inställningar"/"MultiPHP INI Editor" → display_errors = Off) eller hos supporten. Demo-URL så länge: spökfilen `/includes/lynx/lynx-logg.php` på staging-domänen visar felet publikt (lives motsvarighet lagades av 10 juli-mergen).
- [ ] **[medel] php-öppningstaggen i löptext är en parse-fälla i lynx-filerna** — exit-vakten på rad 1 stoppar exekvering men INTE parsning: citerar brödtexten taggen bokstavligt försöker PHP tolka resten. `lynx-log-archive.php` rad 200 fäller hela filen (publikt parse error på staging nu och följer med till live vid merge); arkivets rad 372 + mall-review-raden i §9 ovan + en rad i `lynx-rewrite` parsar av ren tur och är en redigering från att smälla. **Förslag:** (a) ✅ genomförd 10 juli på ägarbeslut (rad 200 neutraliserad + avstegsnot, commit 42226c4a; verifierad efter deploy — 15/15 lynx-filer på staging svarar 0 bytes, logg #60). Kvar: (b) regelrad i START — skriv aldrig taggen bokstavligt i brödtext, skriv "php-öppningstaggen" — samt de tur-parsande raderna (arkivets rad 372 · mall-review-raden i §9 · en rad i `lynx-rewrite`) som står orörda.

*(Senast stängda fynd 10 juli: **avbrotts-ordningen** — ratificerad i §0.1 UNDER ARBETET på ägarbekräftelse, logg #54. Dessförinnan samma dag: Dermapen-logotyp-svepet — `'Dermapen Brand Logo'` → `'Dermapen logotyp'` i 53 filer på ägarval, commit c801c09a, logg #51. Dessförinnan samma dag: §9.2-restfynden från sweepen — 25 `$specialist_url_title`-varianter + Verktyg-bildtitlarna — SVEPTA på ägarval samma dag, commit 7ca56e95, logg #47. Dessförinnan: mellanslaget-före-punkt på rhinophyma — fanns INTE i källan eller live (`näsan</a>.` curl-verifierad mot produktion); LYNX textextraktion infogar mellanslag när inline-länken strippas. Not i `lynx-examples`, logg #45. Dessförinnan 8 juli: §13.O:s styckeräkning, logg #39. Samma dag stängdes bildbuggen på microneedling-kortet — rättad på ägarval, logg #45.)*

*(Tomma rader tas aldrig bort med motiveringen "verkar inte viktigt". De tas bort när fyndet är åtgärdat eller när ägaren avfärdar det — och då med en rad i §11.)*

---

## 9.3 PARKERAT-META — arbete på LYNX-filerna själva (ägarbeslut 8 juli)
**Detta föreslås ALDRIG vid sessionsstart.** Det ligger här tills ägaren ber om det med egna ord. Kön i §9 innehåller **sidor**; verktyg, struktur, städning och revisioner innehåller den inte.

**Varför lådan finns:** den 8 juli stod ett meta-projekt som *"FÖRST I KÖN"* i §9. En ny Claude läste kön, erbjöd projektet som ett alternativ bland andra, ägaren valde ur listan — och hela sessionen gick till verktyg. Ingen regel bröts av slarv; **seedet låg i filen innan sessionen började.** §0.1 hade redan *"ett fynd är inte ett uppdrag"* och *"ett verktyg är inte ett mål"*. Båda skrivna samma dag, båda brutna samma dag. **Skyddet måste vara strukturellt, inte något du ska minnas.**

**Utfallstestet (§0.1):** rör sessionens `git diff --stat` bara `includes/lynx/` har uppdraget inte flyttat sig. Säg det rakt ut i stället för att låta gröna commits se ut som framsteg.

- [x] **✅ R4-STÄDPASSET GENOMFÖRT 10 juli (logg #52):** 27 poster arkiverade enligt R2/R3 med enrads-referenser kvar; loggen 120→71 kB (mätt). **R1 håller kvar 25 poster** (sid-poster med omätta/ostängda §11.1-rader + färska) — loggen ligger därför över 30 kB-målet tills mätningarna stänger raderna; kör nytt pass då. *(Ursprunglig beställning 8 juli:)* `lynx-log` är **107 kB / 48 aktiva poster**; R4 säger *"under ~30 kB / ~15 aktiva poster — över det: kör städpass innan nästa session börjar arbeta."* Imperativet har passerats i flera sessioner utan att någon märkt det. **Arbetet:** arkivera enligt R1–R3 (sid-poster först när §11.1-raden är MÄTT och stängd · process-/modellposter så snart de är ratificerade i en regelfil · verifieringsposter när en senare post verifierar samma sak på högre nivå), lämna enrads-referenser (`- DATUM #N kärnrubrik — utfall; öppet kvar: X`), stryk referensen helt när sista deltråden stängts (R5/R6). **Fulltext flyttas till `lynx-log-archive`, raderas aldrig.**
  ⚠️ **Kontrollera R1 per post innan den flyttas** — flera sid-poster bär FÖRE-baseline + prediktion som mät-loopen fortfarande behöver (`ytliga-blodkarl`, `ipl-rosacea`, `hudforandringar`, `hudbehandlingar/ipl`, `bristningar`, `oonskat-har`, `microdermabrasion`, `acne.php` är alla OMÄTTA). **Post #41–#43 är färska och stannar.** Skälet R4 finns: en logg på 107 kB läses inte, och då tappar den sin enda funktion — *"slå upp ett beslut och varför"*.
- [ ] **INTRO-RENDERINGEN — hälsningen når inte terminalen (parkerad på ägarbeslut 10 juli: *"lägg den på to do till senare"*).** Fem incidenter 10 juli; två regelfixar samma dag (#56 hälsning-först · #57 tidshälsningen skrotad, commits 393dcc9e/2f603144) och hälsningen uteblev ändå i ägar-testerna — felet bedöms sitta i Claude Code-terminalens visning av text kring verktygsanrop, inte i ritualtexten (text mitt i en verktygskedja garanteras inte visas; logg #56). §0.1:s regel står kvar som bästa försök (vanlig hälsning första textraden + samma hälsning öppnar öppningslistan). När den tas upp: verifiera om listmeddelandets hälsning faktiskt visas (turens sista meddelande borde renderas) — visas inte heller den är det en visningsbugg att rapportera till Anthropic (github.com/anthropics/claude-code/issues), inte fler regelskärpningar.
- [ ] **SLUTKONTROLLEN — fördjupningen (ägar-beställd 10 juli, medvetet uppskjuten: "lägg in grundläggande kontroll och lägg resten på to do").** Grundnivån är ratificerad i §0.1 VID SLUT + POST-MALLENS Kontroll-rad (logg #49). Kvar att ta på begäran: **§13.P-katalogen** per uppgiftstyp i `lynx-rewrite` — (A) sidändring: grupperad diff-läsning som tillägg till §13.E · (B) svep: HTTP 200 + innehålls-stickprov ≥3 sidor varav en undermapp, grep 0 på gamla mönstret sajtbrett · (C) datasparning: källspårning per cell (kolumn ej synlig → cell orörd) · (D) bokföring: state-synk-grep + siffra-till-källa — samt utskriven gräns för självkontroll (mekaniska steg fångar räknefel, omläsning fångar mindre; samma huvud kontrollerar).
- [ ] §9.0:s **två kvarvarande** ägarbeslut: `lynx-score` HISTORIK-prosan · filnamnskonventionen. *(Stubben och underlagsfilen raderade 8 juli.)*
- [x] **✅ EN ENDA STATUSCELL — GENOMFÖRD 8 juli (ägar-idé, ägarbeslut).** `lynx-status.php` skapad: LÄGE-bannern (ur START) + §11.1 (ur `lynx-models`), båda verbatim. `lynx-START` och `lynx-models` är nu rena `KIND: REGEL`. Status bor på ett ställe.
  **✅ ÅTERGIVNINGARNA BORTA 8 juli.** 19 strykningar i `lynx-backlog` (per-sida-listan + Tier 3), `lynx-data` (Status-kolumnen → `Not (status: §11.1)`) och `lynx-examples`. **Invarianten som nu gäller och som är testad:** *ingen fil utom `lynx-status` påstår om en sida att den är LIVE eller MÄTT/OMÄTT.* Rå LYNX-data per (sida × vy) rördes inte — det är mätkorpusen, inte en dubblett.

- [ ] Produktifieringen: separera SIGNAL / HANTVERK / SAJTPROFIL, `SCOPE`-tagg bredvid `KIND`.
- [ ] **Datum-svep i LYNX-filerna (ägarbeställd TODO 7 juli):** skriv ut månadsnamnen retroaktivt i alla egna datum ("2 jul"→"2 juli", "30 jun"→"30 juni" osv.) — mekaniskt städpass i egen commit när det passar; ordagranna LYNX-citat ("Last update: 06 Jul", "Analyzed X ago") lämnas verbatim. Konventionen framåt är redan aktiv (§0).

*(Tillkommer något här: skriv EN rad, gå vidare. Ta aldrig något härifrån utan att ägaren ber om det.)*
