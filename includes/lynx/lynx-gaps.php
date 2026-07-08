<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX GAPS — gap-texter per sida (kolumnfil)

```
▣ MANIFEST
KIND          AKTIV — rådata. Gap-texter per sida; besluten bor i lynx-backlog §8.1.
LADDA-NÄR     gap-arbete på en specifik sida
KANONISK-FÖR  LYNX gap-texter verbatim (⚡ quick wins / 💡 suggestions)
PEKAR-PÅ      lynx-backlog §8.1 = besluten · GAPS är KONKURRENT-relativa → attribuera aldrig förändringar till oss utan att läsa gap-texterna
```


> **GAPS-kolumnens datafil** (filkarta i `lynx-data.php`). Officiell kolumndefinition: *"Actionable optimization opportunities and content gaps compared to top-ranking competitors."* — dvs. **KONKURRENT-relativa**: gaps kan dyka upp/rensas när konkurrentbilden ändras, inte bara när vi agerar → attribuera aldrig GAPS-förändringar till oss utan att läsa gap-texterna. Kolumnformat i Pages-vyn: ⚡ quick wins / 💡 suggestions (antal). **BESLUTEN per gap bor i playbook §8.1** (kosmetisk-ram §5, siloing) — här ligger rådatan/texterna. Be om gap-text när en sida med GAPS >0 blir aktuell (§7 steg 4).

## Gap-texter (mottagna)

**microneedling.php (2 jul):**
- ⚡ LOW (quick win): integrera sökordet **"microneedling kur"** i herosektionen — paketpriser för 3/5 behandlingar visas där men frasen används inte för att förklara vikten av upprepade behandlingar. *(OBS: frasen finns redan i eftervårdsblocket — gapet gäller hero-/prissektionen.)* → Beslut §8.1: GÖR vid rewrite.
- 💡 HIGH (rec. improvement): **"Kombinationsbehandlingar med Exosomer och Polynukleotider"** — toppkonkurrenter (Akademikliniken, Nordiska Kliniken) lyfter fram dessa. **Beslut: VÄNTAR — kliniken erbjuder inte exosomer än; ägaren planerar introducera → §9-TODO gated på lansering (§5: inga behandlingar vi inte har).**

**acne-rygg.php (2 jul — 2 quick wins, 0 suggestions):**
- ⚡ LOW: lägg till specifika tips om hårvårdsprodukter och sängkläder. → Beslut §8.1: GÖR med lätt hand (inga produktnamn/ingredienser §5).
- ⚡ LOW: integrera synonymerna "ryggakne" och "rygg akne". → Beslut §8.1: GÖR (grep-koll §6).

**ipl-rosacea.php (7 jul, popup "3 Quick wins - 1 Suggestions" — NYA gaps efter 2 jul-rensningen 2/1→0/0→nu 3/1; konkurrent-relativa, attribuera ej):**
- ⚡ HIGH: "Hantering av oro för tillfällig försämring" — riskinfo-/eftervårdsvinkel; ligger nära §4.2 (riskinfo är copy-vänlig) och §5-juridiken (ärliga reaktioner) → trolig GÖR, beslut ej fattat.
- ⚡ LOW: "Information om triggerfaktorer för rosacea" — triggers ägs av rosacea.php (siloing §5) → trolig länk/kort omnämnande, beslut ej fattat.
- ⚡ LOW: "Förtydligande av kostnadsfaktorer och behandlingsbehov" — pris/antal behandlingar; "Från"-pris-ramen (§5) → trolig GÖR, beslut ej fattat.
- 💡 (1 suggestion — texten ej synlig i popupen, be om "View gap details" när gap-arbetet blir aktuellt.)

**om-oss.php (2 jul em, popup "2 Quick wins - 2 Suggestions" — ⚠️ anchor: om-oss-raden markerad, GAPS 2/2 matchar; 4:e punkten ej synlig i dumpen, be om den vid om-oss-gap-arbete):**
- HIGH: "Förtydliga fördelen med att slippa remiss och vårdkö".
- HIGH: "Tydliggör skillnaden mot en hudläkare tidigt".
- MEDIUM: "Prisinformation och kostnadsjämförelse".
- (4:e punkten okänd.)

**ytliga-blodkarl.php + hudproblem/hudforandringar/ (30 jun):** gap-texter + beslut i playbook **§8.1** (rosacea-länk GÖR · 1177/hudcancer SKIP · hemmavård→konvertering GÖR · H1-sökord GÖR · hub-fokus GÖR · söka-vård SKIP).

**seborroisk-keratos.php (30 jun, LYNX flaggar ej längre — GAPS 0/0 på 2 jul-scanen):** smalna av till seborroisk keratos GÖR · curettage-jämförelse GÖR (kosmetiskt ramat) — kvarstår som frivilliga förbättringar (§8.1).

## Bevakning
- **GAPS-rensningen 2 jul** (ytliga-blodkarl 2/2→0/0 · ipl-rosacea 2/1→0/0 · homepage 3/2→0/0 utan refresh av tiers/SCORE): äkta rensning eller konkurrent-/scan-artefakt? → §9-bevakningstråd; läs gap-texterna vid nästa scan innan attribuering.
- Sidor med GAPS >0 utan sparad gap-text (30 jun-inventeringen): acnearr 3/1 · acne.php 3/2 · hudflikar 3/1 · finnar-rygg 2/1 · roaccutan 2/3 · kemisk-peeling 3/2 · finnar-gravid 3/1 · behandla-stora-porer 2/1 · acne-brost 2/3 · hormonell-acne 3/2 · melasma 3/1 · milier 2/2 · blodprickar 1/1 (→0/0 2 jul) · m.fl. — be om text när sidan tas.
