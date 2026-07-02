<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX-data (manuell export)

> LYNX saknar exportfunktion, så detta är vår **manuella databas** över LYNX Pages-data. Mata in ny data vid varje refresh (ny daterad snapshot) så vi kan jämföra FÖRE/EFTER. Hör ihop med `includes/lynx-copy-playbook.php`. Kolumner: VAL (value), PT (page type), SCORE, GAPS (⚡innehåll/💡keyword), AICOPY, AIQ, P.PRICE, KW. *Transkriberat från skärmdumpar 2026-06-30 — verifiera mot LYNX vid hårda beslut.*
> **Data-hantering (princip 2026-07-01):** spara ALLT ägaren skickar (sidnivå + block + SCORE-breakdown + AI QUESTIONS) här/​i `lynx-examples.php` som underlag. Vid **ny scanning: diffa mot sparad data** → vad ändrades, vad förbättrades/försämrades, vad bör åtgärdas. **Påminn ägaren om att skicka uppdateringar** om de dröjer (vi kan inte polla LYNX själva).

## Snapshot 2026-07-02 — PARTIELL (riktad färsk analys av microneedling.php + synliga grannrader)
> Ägaren körde färsk analys på microneedling.php ("Analyzed 2 minutes ago") och skickade Pages-rader + SCORE-nedbrytning + AI Copy-facit (facit-datum 22 apr = originaltext, sparat i `lynx-examples.php`) + gap-texter. **INGEN bekräftad sajtbred refresh** — §11.1-bevakningssidorna syns inte i dumpen (utom ipl-rosacea, oförändrad 39).

| URL | VAL 30 jun→2 jul | SCORE 30 jun→2 jul | GAPS 30 jun→2 jul | Klass |
|---|---|---|---|---|
| /microneedling.php | 66→**67** | 28→**50** | 2/0→**1/1** | ÄNDRAT (färsk analys, nedbrytning nedan) |
| /portomning.php | 65→66 | 37→**60** | 0/0→0/0 | ÄNDRAT |
| /seborroisk-keratos.php | 60→63 | 0→**74** | 1/2→0/0 | ÄNDRAT |
| /acne-rygg.php | 63→64 | 0→0 | 1/2→2/0 | GAPS ändrade |
| /blodprickar.php | 59→59 | 17→17 | 1/1→0/0 | GAPS ändrade |
| /djuprengoring.php | 56→57 | 0→0 | 0/1→0/0 | ~oförändrat |
| /cystisk-acne.php | 58→56 | 0→0 | – | ~oförändrat |
| /ipl-rosacea.php | 54→55 | **39→39** | – | OFÖRÄNDRAT (§11.1-bevakad — EFTER-värde ej här än) |
| /resultat-rosacea.php | 54→53 | 0→0 | – | ~oförändrat |
| /mallorca-acne.php | 51→53 | 25→25 | – | ~oförändrat |

**microneedling.php SCORE-nedbrytning (färsk 2 jul) — ⚠️ ANOMALI, troligen PARTIELL/pågående analys:**
Overall **50** · CQ 41 (Base **0**, Depth **89**, Evidence **76**, Language **0**, Readability **0**) · E-E-A-T 60 (Exp 85, Expertis 80, Auth 85, Trust **90**) · AI STYLE **0** (Human-like **0**).
⚠️ Tre skäl att misstänka partiell data: (1) Overall 50 med AI STYLE 0 motsäger §1.2-formeln (produkten ger 0); (2) CQ 41 ≠ medel av sina subs (33); (3) nollorna sitter på komponenter som har värden på alla andra sidor. **→ be ägaren om ny skärmdump när analysen satt sig; justera INTE §1.2 på denna datapunkt.** (Depth 89 + Evidence 76 = högsta uppmätta hittills om de står sig.)

**Gap-texter microneedling.php (2 jul):**
- ⚡ LOW (quick win): integrera sökordet **"microneedling kur"** i herosektionen — paketpriser för 3/5 behandlingar visas där men frasen används inte för att förklara vikten av upprepade behandlingar. *(OBS: frasen finns redan i eftervårdsblocket — gapet gäller hero-/prissektionen.)*
- 💡 HIGH (rec. improvement): **"Kombinationsbehandlingar med Exosomer och Polynukleotider"** — toppkonkurrenter (Akademikliniken, Nordiska Kliniken) lyfter fram dessa. **Beslut: VÄNTAR — kliniken erbjuder inte exosomer än; ägaren planerar introducera → §9-TODO gated på lansering (§5: inga behandlingar vi inte har).**

**Fler färska SCORE-nedbrytningar (2 jul; micro/porto/sebo "Analyzed 2 minutes ago", acne-rygg "31 days ago"):**
| Komponent | portomning (60) | seborroisk-keratos (74) | acne-rygg (0) |
|---|---|---|---|
| CONTENT QUALITY | 60 | 85 | 0 |
| – Base Quality | 95 | 85 | 0 |
| – Depth | 93 | 84 | 0 |
| – Evidence | 81 | 74 | 0 |
| – Language | 96 | 95 | 0 |
| – Readability | 98 | 90 | 0 |
| E-E-A-T | 60 | 60 | 0 |
| – Experience | 85 | 85 | 0 |
| – Expertise | 80 | 80 | 0 |
| – Authority | 85 | 75 | 0 |
| – Trust | 90 | 85 | 0 |
| AI STYLE (Human-like) | 0 | **50** | 0 |

**Modellimplikationer 2 jul (→ §1.2 OMPRÖVAS, se playbook §11-loggen):**
1. **SCORE 0 = trasig/tom analys, inte dålig sida.** acne-rygg = 0 på ALLA komponenter (gammal analys); seborroisk gick 0→74 vid omkörning. → Re-analysera alla 0-sidor innan bedömning (acnearr, stora-porer, cystisk-acne, djuprengoring, resultat-*, microneedling-acnearr m.fl.).
2. **"39-taket" brutet UTAN våra ändringar:** seborroisk 74, portomning 60, microneedling 50. LYNX verkar ha ny version/skala (alt. var gamla värden stale). **30 jun-baselines är EJ jämförbara med färska analyser — mätregel: FÖRE→EFTER kräver färsk-mot-färsk.**
3. **AI STYLE 0 på 3 av 4 färska** trots äldre AI Copy-datum → troligen "ej beräknad än", inte äkta nolla. Seborroisk fick **50** = första uppmätta värdet över 30.
4. **Aggregeringen ändrad/oklar på färska analyser:** E-E-A-T-badge = 60 på alla tre trots sub-medel 81–85 (30 jun-datan hade badge = sub-medel); portomning CQ-badge 60 trots sub-medel 92,6. Overall ≈ medel(CQ-badge, EEAT-badge) passar micro 50 + porto 60 och nästan sebo (72,5 vs 74). **För få datapunkter — samla fler färska breakdowns innan ny formel (§10); tvinga inte fram en modell ur brus.**

**Gap-texter acne-rygg.php (2 jul — 2 quick wins, 0 suggestions):**
- ⚡ LOW: lägg till specifika tips om hårvårdsprodukter och sängkläder.
- ⚡ LOW: integrera synonymerna "ryggakne" och "rygg akne".

## Snapshot 2026-06-30 — komplett inventering (före omskrivningar)

### 🔴 SIGNIFICANT (4) — PRIO 1 (skrivs om nu)
| URL | VAL | PT | SCORE | GAPS | AIQ | P.PRICE | KW |
|---|---|---|---|---|---|---|---|
| /ytliga-blodkarl.php | 42 | – | 22 | 2/2 | OK | – | 172 |
| /acne-ansikte.php | 32 | – | – | –/– | OK | – | 57 |
| /behandla-pigmentflackar.php | 14 | – | – | –/– | GOOD | – | 16 |
| /hudproblem/hudforandringar/ | 10 | – | 17 | 3/2 | OK | – | 8 |

### Score-komponenter (detaljnedbrytning) — baseline + sajt-tak
SCORE (0–100) = CONTENT QUALITY (Base, Depth, Evidence, Language, Readability) + E-E-A-T (Experience, Expertise, Authority, Trust) + AI STYLE (Human-like). Skärmdumpar 2026-06-30, LYNX-analys 49–79 dgr sedan = FÖRE våra ändringar.

**Våra 2 SIGNIFICANT-mål som har SCORE** (acne-ansikte + behandla-pigmentflackar visar SCORE "–" → ingen nedbrytning):
| Komponent | hudforandringar (17) | ytliga-blodkarl (22) |
|---|---|---|
| CONTENT QUALITY | 52 | 52 |
| – Base Quality | 46 | 54 |
| – Depth | 69 | 67 |
| – Evidence | 31 | 24 |
| – Language | 52 | 58 |
| – Readability | 40 | 50 |
| E-E-A-T | 49 | 58 |
| – Experience | 35 | 50 |
| – Expertise | 55 | 60 |
| – Authority | 45 | 60 |
| – Trust | 60 | 60 |
| AI STYLE (Human-like) | 25 | 25 |

**Sajtens 3 toppsidor — SCORE 39 = HÖGSTA på hela sajten** (acne.php, behandla-stora-porer.php, ipl-rosacea.php; exakt bild→sida ej säker från beskärning, A/B/C = analys 55/49/60 dgr sedan):
> **BEKRÄFTAT 2026-07-01: kolumn A = acne.php** (exakt matchning: Overall 39 · CQ 56 [Base65/Depth77/Evidence11/Language65/Read60] · E-E-A-T 84 [Exp85/Expertis85/Auth80/Trust85] · AI STYLE 30; analyserad 68 dgr sedan). acne.php-omskrivningen (10 🔴-block, 1 jul) siktar på **AI STYLE (30) + Evidence (11)** utan att sänka Depth 77 / E-E-A-T 84 (§1.2 no-regression). FÖRE-baseline att mäta mot.
| Komponent | A (55d) | B (49d) | C (60d) |
|---|---|---|---|
| **Overall** | **39** | **39** | **39** |
| CONTENT QUALITY | 56 | 58 | 68 |
| – Base Quality | 65 | 65 | 70 |
| – Depth | 77 | 75 | 81 |
| – Evidence | 11 | 22 | 46 |
| – Language | 65 | 80 | 75 |
| – Readability | 60 | 55 | 65 |
| E-E-A-T | 84 | 83 | 85 |
| – Experience | 85 | 85 | 85 |
| – Expertise | 85 | 80 | 85 |
| – Authority | 80 | 80 | 85 |
| – Trust | 85 | 85 | 85 |
| AI STYLE (Human-like) | 30 | 30 | 25 |

**Läsning (hypotes, validera efter refresh):**
1. **Hela sajten taklar ~39**, och taket beror på att **AI STYLE/Human-like sitter 25–30 ÖVERALLT** — även på bästa sidorna (gammal AI-copy). Vår de-AI-omskrivning är enda spaken som kan bryta taket; **ingen sida har gjort det än → otestad uppsida.**
2. **Evidence näst tyngst** (11–46 även på topp) → konkret bevis: siffror, tidsram, mekanism-steg, "Från X kr", 30 år.
3. **Depth (75–81) + E-E-A-T (83–85) = toppsidornas styrka → skydda** (korta inte, §13.N; behåll specialist-/resultat-/recensions-widgets som bär E-E-A-T).
4. Våra mål ligger lägre på E-E-A-T (49–58 mot 83–85) → väg in förstahands-klinik (Experience), recensioner/resultat (Trust), 30 år/maskiner (Authority).

### 🟠 MODERATE (10) — PRIO 2 (nästa våg)
| URL | VAL | PT | SCORE | GAPS | AIQ | P.PRICE | KW |
|---|---|---|---|---|---|---|---|
| /pigmentflackar.php | 35 | – | 35 | 0/0 | OK | – | 244 |
| /hudproblem/bristningar/ | 18 | – | 18 | 0/0 | OK | – | 66 |
| /rhinophyma-rosacea.php | 34 | – | 10 | 0/0 | OK | – | 46 |
| /solskadad-hy.php | 31 | – | – | –/– | OK | – | 30 |
| /ipl-rosacea.php | 54 | – | 39 | 2/1 | OK | HIGHEST | 20 |
| /hudbehandlingar/ipl/ | 35 | – | – | –/– | OK | HIGH | 19 |
| /hudproblem/oonskat-har/ | 11 | – | – | –/– | OK | – | 16 |
| /mogen-hy.php | 11 | – | – | –/– | OK | – | 10 |
| /microdermabrasion.php | 31 | – | – | –/– | GOOD | MID | 6 |
| /om-oss.php | 8 | – | 17 | 2/2 | OK | – | 3 |

### 🟢 HUMAN (11) — enkla/utility-sidor, ton-referens (ej rik-prosa-förebild)
| URL | VAL | SCORE | AIQ | KW |
|---|---|---|---|---|
| /acne-myter.php | 24 | – | POOR | 8 |
| /fragor-svar.php | 22 | 36 | OK | 9 |
| /elevbehandlingar.php | 11 | 18 | OK | 4 |
| /recensioner-omdomen.php | 0 | – | OK | 3 |
| /online-konsultation.php | 12 | – | OK | 2 |
| /studentrabatt/ | 18 | – | POOR | 2 |
| /hudguide/ | 16 | – | POOR | 1 |
| /franchise.php | 6 | – | OK | 0 |
| /not-found.php | 7 | – | POOR | 0 |
| /ordlista.php | 4 | – | OK | 0 |
| /priser/ | 4 | – | POOR | 0 |

### 🔵 SLIGHT (~75) — mestadels klara; sorterat KW desc. Hög KW + låg/0 SCORE = framtida uppsida.
| URL | VAL | PT | SCORE | GAPS | AIQ | KW |
|---|---|---|---|---|---|---|
| /rosacea.php | 24 | – | – | –/– | OK | 221 |
| /perioral-dermatit.php | 34 | – | – | –/– | OK | 194 |
| /blodprickar.php | 59 | Service | 17 | 1/1 | OK | 175 |
| /milier.php | 42 | Service | 37 | 2/2 | OK | 173 |
| /seborre.php | 35 | – | – | –/– | OK | 168 |
| /pormaskar.php | 39 | Service | 32 | 0/0 | OK | 128 |
| /acnearr.php | 42 | Service | 0 | 3/1 | OK | 127 |
| /acne.php | 24 | Service | 39 | 3/2 | OK | 116 |
| /seborroisk-keratos.php | 60 | Service | 0 | 1/2 | GOOD | 110 |
| /hudflikar.php | 40 | – | 28 | 3/1 | OK | 105 |
| /finnar.php | 22 | – | – | –/– | OK | 101 |
| /permanent-harborttagning.php | 16 | – | – | –/– | OK | 71 |
| /microneedling.php | 66 | – | 28 | 2/0 | OK | 70 |
| /finnar-rygg.php | 46 | – | 17 | 2/1 | OK | 67 |
| /fodelsemarken.php | 31 | – | – | –/– | OK | 66 |
| /stora-porer.php | 49 | Service | 0 | 2/1 | OK | 60 |
| /fet-hy.php | 17 | – | 15 | 0/0 | OK | 57 |
| /roaccutan.php | 50 | Service | 23 | 2/3 | POOR | 57 |
| /cryopen.php | 43 | – | 21 | 0/0 | OK | 55 |
| /alma-hybrid-co2-laser.php | 28 | – | 14 | 2/2 | OK | 55 |
| /dermapen.php | 39 | Service | 31 | 2/1 | OK | 54 |
| /kemisk-peeling.php | 40 | – | 10 | 3/2 | OK | 53 |
| /acne-rygg.php | 63 | Service | 0 | 1/2 | OK | 51 |
| /finnar-gravid.php | 43 | – | 22 | 3/1 | OK | 44 |
| /behandla-stora-porer.php | 43 | Service | 39 | 2/1 | OK | 42 |
| /acne-brost.php | 47 | – | 36 | 2/3 | OK | 41 |
| /inflammation-acne.php | 33 | – | – | –/– | OK | 40 |
| /hormonell-acne.php | 24 | – | 35 | 3/2 | OK | 38 |
| /milierbehandling.php | 45 | – | – | 0/2 | OK | 34 |
| /hudbehandlingar/laser-mot-hudproblem/ | 15 | – | 16 | 0/0 | OK | 31 |
| /melasma.php | 31 | – | 23 | 3/1 | OK | 27 |
| /hudbehandlingar/skinbooster/ | 24 | – | – | –/– | OK | 27 |
| /mjalleksem.php | 25 | – | – | –/– | OK | 28 |
| /portomning.php | 65 | Service | 37 | 0/0 | OK | 28 |
| /hudproblem/operations-skadearr/ | 10 | – | – | –/– | OK | 25 |
| /ipl-ytliga-blodkarl.php | 30 | – | – | –/– | OK | 24 |
| /vuxenacne.php | 37 | – | – | –/– | OK | 24 |
| /cystisk-acne.php | 58 | Service | 0 | 0/2 | OK | 23 |
| /prx-t33.php | 22 | – | – | –/– | OK | 23 |
| /postinflammatorisk-hyperpigmentering.php | 37 | – | – | –/– | GOOD | 22 |
| /behandla-acnearr.php | 39 | – | – | –/– | OK | 19 |
| /atrofiska-arr.php | 40 | – | – | –/– | OK | 18 |
| /hudbehandlingar/estetiska-injektionsbehandlingar/ (fillers) | 8 | – | – | –/– | OK | 18 |
| /varumarken/splendor-x/ | 30 | Brand | – | –/– | OK | 16 |
| /ansiktsbehandlingar.php | 20 | – | – | –/– | OK | 15 |
| /acne-scars.php | 23 | – | – | –/– | OK | 15 |
| /blandhy.php | 11 | – | 24 | 0/0 | OK | 15 |
| /hydrafacial.php | 46 | – | 20 | 2/0 | OK | 15 |
| /klamma-finnar.php | 12 | – | – | –/– | OK | 15 |
| /infuzion.php | 23 | – | – | –/– | OK | 14 |
| /finnar-arr.php | 14 | – | 9 | 0/0 | OK | 14 |
| /varumarken/fraction-co2/ | 9 | Brand | – | –/– | OK | 14 |
| /finnar-brost.php | 21 | – | 11 | 2/2 | OK | 13 |
| /ipl-pigmentflackar.php | 34 | – | – | –/– | OK | 13 |
| /varumarken/soprano-ice/ | 10 | Brand | 22 | 2/1 | OK | 13 |
| /hudterapeut/ | 27 | – | – | –/– | OK | 13 |
| /microneedling-acnearr.php | 51 | Service | 0 | 0/2 | OK | 12 |
| /mallorca-acne.php | 51 | – | 25 | 0/0 | OK | 11 |
| /laser-acne.php | 31 | – | – | –/– | OK | 11 |
| /pormaskar-rygg.php | 38 | – | – | –/– | OK | 11 |
| /djuprengoring.php | 56 | Service | 0 | 0/1 | OK | 9 |
| /gratis-hudkonsultation.php | 33 | – | – | –/– | OK | 9 |
| /porrengoring.php | 43 | – | – | –/– | OK | 9 |
| /komedoner.php | 25 | – | – | –/– | OK | 8 |
| /rosaceabehandling.php | 19 | – | 25 | 2/2 | OK | 8 |
| /aldersflackar.php | 23 | – | – | –/– | OK | 7 |
| /hudbehandlingar/ansiktsbehandling/rosacea/ | 10 | – | – | –/– | OK | 7 |
| /vita-pormaskar.php | 39 | – | 16 | 2/2 | OK | 7 |
| /hudproblem/ | 26 | – | 2 | 0/0 | OK | 7 |
| /acnebehandling.php | 12 | – | – | –/– | OK | 6 |
| /alma-harmony-xl-pro.php | 23 | – | – | –/– | OK | 6 |
| /laser-arr.php | 14 | – | – | –/– | OK | 6 |
| /microneedling-acne.php | 37 | – | – | –/– | GOOD | 6 |
| /hudbehandlingar/pormaskar/ | 8 | – | – | –/– | OK | 6 |
| /hudbehandlingar/estetiska-injektionsbehandlingar/ | 8 | – | – | –/– | OK | 6 |
| /hudbehandlingar/vaxning/ | 9 | – | – | –/– | OK | 6 |
| /presentkort.php | 19 | – | – | –/– | OK | 5 |
| /problemhy.php | 21 | – | – | –/– | OK | 5 |
| /ipl-acne.php | 18 | – | 11 | 2/3 | OK | 4 |
| /varumarken/skin-tech/ | 14 | Brand | 11 | 0/0 | GOOD | 4 |
| /hudbehandlingar/dermabrasion/ | 25 | – | – | –/– | OK | 4 |
| /hudbehandlingar/ansiktsbehandling/akne/ | 9 | – | – | –/– | OK | 3 |
| /kontakt.php | 26 | Contact | – | –/– | POOR | 2 |
| /microneedling-stora-porer.php | 32 | – | – | –/– | OK | 2 |
| /resultat-finnar-arr.php | 26 | – | – | –/– | OK | 2 |
| /resultat-ytliga-blodkarl.php | 10 | – | – | –/– | POOR | 2 |
| /varumarken/rejuve-dye-vl/ | 22 | Brand | 12 | 0/0 | OK | 2 |
| /finnar-ansikte.php | 11 | – | – | –/– | OK | 1 |
| /finnar-behandling.php | 23 | – | – | –/– | OK | 1 |
| /metoden.php | 7 | – | – | –/– | OK | 1 |
| /behandla-finnar-arr.php | 8 | – | – | –/– | OK | 1 |
| /resultat-pormaskar.php | 22 | – | – | –/– | POOR | 1 |
| /varumarken/powerlite-photonova/ | 12 | Brand | – | –/– | OK | 1 |
| /resultat.php | 15 | – | 9 | 0/0 | POOR | 0 |
| /resultat-acne.php | 34 | – | 12 | 2/2 | OK | 0 |
| /resultat-acnearr.php | 15 | – | 35 | 0/0 | OK | 0 |
| /resultat-stora-porer.php | 18 | – | – | –/– | OK | 0 |
| /resultat-rosacea.php | 54 | Case study | 0 | 1/2 | OK | 6 |
| /acne-vulgaris.php | 10 | – | – | –/– | OK | 0 |
| /behandlingar.php | 13 | – | – | –/– | OK | 0 |
| /kemisk-peeling-acne.php | 8 | – | – | –/– | OK | 0 |
| /laser-acnearr.php | 19 | – | – | –/– | OK | 0 |
| /hudbehandlingar/ansiktsbehandling/hudterapeutens-val/ | 4 | – | – | –/– | OK | 0 |
| / (Homepage) | 41 | Homepage | 28 | 3/2 | POOR | 296 |

## Status — datan vi har idag (2026-06-30)
Detta är informationen som lagts in hittills. Är en sida eller ett fält blankt betyder det bara att datan inte matats in än — vi uppdaterar när mer kommer.
- Utan AI COPY-data idag: `avbokningspolicy.php`, `karriar.php` (blanka tills vidare).

## Prio-signaler (input till framtida prioriteringslista)
- **Prio 1:** de 4 SIGNIFICANT (störst: ytliga-blodkarl KW172).
- **Prio 2:** de 10 MODERATE (störst: pigmentflackar KW244).
- **Prio 3 (SLIGHT men hög uppsida):** hög KW + låg/0 SCORE eller öppna GAPS, t.ex. rosacea (221, SCORE –), perioral-dermatit (194, –), blodprickar (175, 17), milier (173, 37), seborre (168, –), pormaskar (128, 32), acnearr (127, SCORE 0), seborroisk-keratos (110, 0), hudflikar (105, 28), finnar (101, –).
- **PAGE TYPE/P.PRICE "–"** på nästan alla → bekräftar schema-spåret (§13.I i playbook): generiskt fallback-Product utan Offer.

## Datainventering — vad vi HAR och vad vi VILL HA (beställningssedel)
LYNX saknar export; ägaren matar in skärmdumpar på begäran. Den här listan = vad vi kan efterfråga efter behov. ✅ har · 🟡 delvis · ❌ saknas · ❓ okänt.

**HAR:**
- ✅ Full Pages-inventering (~100 sidor): VALUE, PAGE TYPE, SCORE, GAPS (⚡/💡 antal), AI COPY, AI QUESTIONS, P.PRICE, KW (tabellerna ovan).
- ✅ SCORE-komponenter för 5 sidor: 2 mål (hudforandringar 17, ytliga-blodkarl 22) + 3 sajt-topp (39×3).
- ✅ AI COPY per-block-facit för acne-ansikte (10 block) + enstaka andra (`lynx-examples.php`).
- ✅ Gap-text (⚡/💡) för ytliga-blodkarl + hudforandringar (playbook §8.1).

**VILL HA (prioriterat — be om skärmdump när sidan blir aktuell):**
1. 🟡 **SCORE-komponenter för resten av prio-sidorna** — bekräfta först om acne-ansikte/behandla-pigmentflackar har en breakdown bakom "–" (eller om "–" = ej analyserad); sen de 10 MODERATE; + fler sajt-topp för att stärka tak-modellen.
2. 🟡 **Fler komponent→Overall-datapunkter** → så vi kan **reverse-engineera viktningen** (hur CQ + E-E-A-T + AI STYLE blir Overall). Just nu fastnar 3 sidor på exakt 39 trots CQ 56–68 → tyder på att AI STYLE väger tungt / agerar tak. Analogt med hur §1.1 reverse-engineerades.
3. ❌ **AI QUESTIONS-detalj** — de faktiska frågorna LYNX vill se besvarade (vi har bara OK/GOOD/POOR). Krävs för FAQPage (Fas 2).
4. ❌ **AI COPY per-block-rating** för de 3 övriga SIGNIFICANT + MODERATE-vågen (vilka block är 🔴/🟠/🔵).
5. ❌ **Gap-text för fler sidor** (⚡ innehåll / 💡 keyword) när vi tar dem.
6. ❌ **Faktiska sökord-rankningar (positioner)** per sida, inte bara KW-antal → för att mäta §6 ranking-skydd efter deploy.
7. ❌ **"Analyzed X days ago" + refresh-kadens** per sida → veta hur färsk varje datapunkt är och när EFTER-värden väntas.
8. ❓ **EG SCORE-kolumnen** — alltid "–" i våra dumpar; vad mäter den? (lågprio)

Modellen (§1.2) skärps mest av punkt 1–2. Be om data i den ordning sidorna blir aktuella.
