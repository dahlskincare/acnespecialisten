<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX AI COPY — per-block-facit (AKTIV facit-bank)

```
▣ MANIFEST
KIND          AKTIV — nya facit läggs till vid varje leverans; betygen ändras aldrig retroaktivt (LYNX-rådata).
LADDA-NÄR     innan en sida skrivs om (hämta sidans facit + ev. rewrite-spec) · när nytt per-block-facit kommer in · vid backport
KANONISK-FÖR  LYNX per-block-facit per sida · EFTER-facit + backport-lärdomar · aktiva rewrite-specar
PEKAR-PÅ      lynx-rewrite §1.1/§1.3/§1.4 = bedömningsmodellen · lynx-examples-arkiv = superseded modellarbete + FÖRE-facit för MÄTTA sidor · lynx-backlog = prio
```

> Växande samling av LYNX per-block-facit. Varje bedömt stycke bidrar till helhetsbilden av bedömningsmodellen (§1.1 i `includes/lynx/lynx-rewrite.php`). **Fyll på** med nya facit (sida + datum). När vi skrivit om ett block och fått ny LYNX-refresh: logga **före→efter** längst ned så vi validerar och finjusterar modellen. Snippets är förkortade — full text finns i sidans `.php` / git-historik.
>
> Betyg (5 tiers, LYNX rådata): 🟥 EXTREME · 🔴 SIGNIFICANT · 🟠 MODERATE · 🔵 SLIGHT · 🟢 HUMAN. Betyg = LYNX-FAKTA (bevaras för omtolkning). Why-tag = vår TOLKNING/hypotes (kan ändras när modellen lär sig nytt).

## /acne.php — 22 Apr 2026 (SLIGHT-referens, samma ämne som acne-ansikte)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| "Här förklarar vi vad som kännetecknar akne…" | 🔴 | meta-scaffolding |
| "Akne består av papler och pustler… finnar som vi ofta säger…" | 🟠 | leder med vad-det-är + gloss, men ej full mekanism |
| "Akne orsakas av… kroppen försvarar sig då med en inflammation, och det är just detta som syns" | 🔵 | **full mekanism + payoff** |
| "Akne är vanligast bland tonåringar… oavsett kön… det är viktigt att behandla" | 🔴 | demografisk skal-öppning + importans |
| "Akne kan uppstå på flera delar av kroppen…" | 🔴 | cirkulär/skal-öppning |
| "Akne är en hudåkomma som kan drabba både ungdomar och vuxna… Oavsett ålder är det viktigt att förstå" | 🔴 | skal + importans |
| "Akne kan variera i svårighetsgrad… Det är viktigt att diagnostisera…" | 🔴 | importans-filler |
| "Yttre faktorer… sol, friktion, kosmetika, mediciner…" | 🔵 | kort + konkret lista |
| "Svarta pormaskar är mörka prickar som bildas av talg…" | 🔵 | kort definition + mekanism |
| "Papler är små, röda inflammerade blemmor…" | 🔵 | kort definition + plats |
| "Noduler är stora, smärtsamma blemmor… **större än 5 mm** i diameter…" | 🟢 | kort + konkret mått |
| "Vi tar före bilder på din hud och rekommenderar…" | 🔵 | konkreta vi-handlingar |
| "En avancerad laserbehandling erbjuder en effektiv lösning…" | 🔴 | marknads-superlativ öppning |
| "Genom att välja Acnespecialisten får du rätt akne vård…" | 🔵 | kort marknad (längd-modifierare upp) |
| "Du som vill ha det som är bäst mot akne… över 30 års erfarenhet…" | 🔴 | lång marknadsföring (siffra begravd) |
| "Du bör besöka Acnespecialisten när… Tveka inte att kontakta oss…" | 🔴 | lång CTA-boilerplate |
| Omdöme "Hade testat allt innan…" | 🔵 | omdöme (generiskt) |
| Omdöme "Super fin personal… gått där i 2-3 år…" | 🟢 | omdöme + personlig detalj |

**Fullständig acne.php-facit mottagen 2026-07-01 — BEKRÄFTAR ovanstående 22 apr-betyg** (stark modell-validering: alla citerade referensblock stämmer). Tillägg som saknades i tabellen ovan: "Akne kan uppträda på olika områden… hormonella/kläder/sol" 🔴 · "En effektiv ansiktsbehandling fokuserar på att extrahera orenheter…" 🔵 · "Bölder: Stora, varfyllda… ofta större än 5 mm" 🟢 · "För att effektivt bekämpa… daglig behandling med rätt produkter" 🔵 · "Acneärr uppstår i form av gropar…" 🔵 · "Välj Acnespecialisten innan du går till en läkare…" 🔴.
**VIKTIGT:** acne.php är vår husröst-/modell-REFERENS men har **~10 🔴-block på sidnivå** (intro-scaffolding "Här förklarar vi", demografisk-skal "vanligast bland tonåringar… oavsett kön", importans "det är viktigt att", marknads-CTA "Du som vill ha det bäst… 30 år" / "Tveka inte att kontakta"). Dess **🔵/🟢-block är de validerade referensblocken att EMULERA/LÄMNA** (full mekanism-payoff, definitioner, Noduler/Bölder med "5 mm"-mått, konkreta vi-handlingar). Rubriken "SLIGHT-referens" avser alltså block-nivå, inte sidnivå. **Rewrite-mål:** de ~10 🔴 (KW116 huvudsida = hög prio); lämna 🔵/🟢.

*(FÖRE-facit acne-ansikte 22 apr → `lynx-examples-arkiv.php`. Sidan är MÄTT; FÖRE-motsvarigheten står i EFTER-tabellen nedan.)*

## /acne-ansikte.php — 05 Jul 2026 — ✅ EFTER REWRITE (FÖRSTA EFTER-FACITET; sidnivå 🔴→🔵 SLIGHT; dump möjligen partiell — FAQ-block ej synliga)
| Block (snippet, EFTER-text) | Betyg | FÖRE-motsvarighet (22 apr) → tolkning |
|---|---|---|
| Intro "Akne i ansiktet sätter sig där talgkörtlarna är som tätast: i pannan, på näsan… För många påverkar den både huden och självkänslan. Det viktiga att komma ihåg är att den går att behandla. Här går vi igenom…" | 🟠 | banner 🔴 (empati+meta) → 🟠. ENDA kvarvarande flaggan: konkret krok men empati-/importans-mitt + "Här går vi igenom"-skylt ackumulerar (§1.3-gradienten ✓) |
| "Akne i ansiktet syns som pormaskar, finnar, papler och pustler… Bakterier samlas i den igentäppta poren och utlöser en inflammation. Det är inflammationen som syns som en röd, öm finne, och därför sitter akne oftast där talgkörtlarna är som flest…" | 🔵 | "påverkar miljontals" 🔴 → 🔵: full mekanism-vandring + kausal payoff |
| "Bakom akne i ansiktet ligger framför allt hormoner och ärftlighet… De får talgkörtlarna att producera mer talg… hudens benägenhet att överproducera talg till stor del är ärftlig." | 🔵 | "orsakas av flera faktorer som samverkar" 🔴 → 🔵: konkret orsaks-öppning + mekanism |
| "Plötslig akne i ansiktet utan att du brukar ha hudproblem beror nästan alltid på en hormonell svängning. Puberteten, menstruationscykeln… Stress spär på genom att höja kroppens kortisol…" | 🔵 | "Plötslig akne… frustrerande… flera faktorer" 🔴 → 🔵: rakt kausalt svar |
| "Var akne sitter i ansiktet hänger ihop med var talgkörtlarna är som flest: pannan, näsan, kinderna, hakan och käklinjen. Utbrotten ser olika ut beroende på område… Nedan tittar vi närmare på varje område." | 🟢 | "kan uppträda på flera olika sätt" 🔴 → 🟢 HUMAN: konkret + varierad skylt — skylten i sig fäller inte! |
| "Det finns ingen universallösning för akne i ansiktet. Vi läser av hur djupt utbrotten sitter och anpassar behandlingen efter det, och oftast ger en kombination av metoder bäst resultat." | 🔵 | "När det kommer till att behandla… ingen universallösning" 🟠 → 🔵: vi-handling istället för fyllnad |
| "Daglig behandling med rätt produkter hjälper till att bekämpa och förebygga akne. Våra produkter håller huden i balans…" | 🔵 | 🔵 → 🔵 (lätt hand, stabil) |
| Omdöme "Hade testat allt innan…" | 🔵 | 🔵 = orörd, stabil över refresh |
| Omdöme "Super fin personal… ca 2-3 år…" | 🟢 | 🟢 = orörd, stabil över refresh |

**FÖRE→EFTER-summering:** 22 apr **6🔴/1🟠/2🔵/1🟢** (n=10, medel 2,2) → 5 jul **0🔴/1🟠/6🔵/2🟢** (n=9 synliga, medel 0,89) → **badge 🔴 SIGNIFICANT → 🔵 SLIGHT.** §1.4-medel träffar (0,89 < 1,5 → 🔵 ✓ — modellens FÖRSTA EFTER-validering, preliminär tills ev. FAQ-block levererats). "Att leva med svår akne…"-blocket (🔴 22 apr) syns inte i EFTER-dumpen — omskrivet/struket eller utanför bild; be om resten. **Modellfynd:** (1) mekanism-öppning + payoff = 🔴→🔵 över hela linjen — §1.1 nyckel 1 nu KAUSALT belagd (vi ändrade öppningen, betyget flyttade), inte bara korrelation; (2) intro-blocket följer §2-formeln (konkret krok + skylt) men landar 🟠 — det som fäller är empati-/importans-meningarna FÖRE skylten ("För många påverkar den…", "Det viktiga att komma ihåg…"), jfr 🟢-blocket vars skylt "Nedan tittar vi närmare…" inte fällde; (3) omdömen + produktblock stabila över refresh = brusfria referenspunkter.

## /ipl-rosacea.php — 29 Apr 2026 (MODERATE-sida)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| "IPL, som står för Intensivt Pulserande Ljus… verkar genom att rikta in sig på de små blodkärlen" | 🔵 | gloss + mekanism |
| "IPL för rosacea… hjälper inte bara till att minska rodnad… utan kan även… många kunder upplever omfattande förbättringar" | 🔴 | "inte bara X utan Y" + marknad |
| "Att förbereda sig… börjar med en noggrann konsultation hos en erfaren hudterapeut" | 🟠 | konsultations-boilerplate + lite prep |
| "För att förbereda din hud… det är viktigt att du undviker solning… retinol, starka syror…" | 🔴 | importans-öppning + mångordig |
| "IPL-behandling mot rosacea är en speciell procedur… vi rengör din hud… ögonen skyddas med glasögon" | 🔵 | konkret steg-för-steg |
| "Vår IPL-enhet ställs in… Under behandlingen appliceras korta, intensiva ljuspulser…" | 🔴 | generisk procedur |
| "Efter behandlingen kan området kännas varmt… liknar en mild solbränna… synliga över tid" | 🔴 | hedgy/generisk |
| "Eftervården är en viktig del… det viktigt att du inte rör området…" | 🟠 | konkret + filler |
| "Under de första dagarna… rekommenderas det att du undviker stark fysisk ansträngning…" | 🔴 | passiv filler + lång |
| "Följ noga de eftervårdsinstruktioner… tveka inte att kontakta din klinik" | 🔵 | kort instruktion |
| "Vi utför IPL mot rosacea med Alma Rejuve DyeVL och Alma Harmony XL…" | 🟢 | namngivna maskiner |

## /dermapen.php — 23 Apr 2026 (SLIGHT-sida)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| "Vi är Sveriges ledande klinik på Dermapen 4, den senaste tekniken…" | 🔵 | namngiven teknik + konkreta fördelar |
| "Dermapen är en framstående… avancerade mikronålar för att skapa precisa mikrokanaler…" | 🔵 | mild marknad men full mekanism |
| "Denna digitala… kan behandla en rad hudåkommor, inklusive rynkor, ärr, stora porer…" | 🔵 | namngivna tillstånd + mekanism |
| "Att förbereda sig… detaljerad konsultation… perfekt anpassad för dina unika hudvårdsbehov" | 🔴 | konsult-boilerplate + **fluff-svans** |
| "För optimala resultat bör huden inte vara solbränd… fullständig vägledning…" | 🟠 | konkret + fluff-svans |
| "När du kommer till en av våra kliniker… grundlig rengöring… sterila nålar… mikroskopiska hål" | 🔵 | konkret steg-för-steg |
| "Dessa mikro-skador stimulerar hudens egen läkningsförmåga… kollagen och elastin…" | 🔵 | mekanism |
| "Ta din dermapenbehandling till nästa nivå med PRX-T33… PRX-syran penetrerar djupare…" | 🟠 | marknad-öppning + mekanism |
| "Lägg endast till **1000 kr** för att behandla ett helt extra område…" | 🟢 | kort + konkret siffra |
| "Eftervården spelar en stor roll… håll området rent… avstå smink första dygnet" | 🔵 | korta konkreta instruktioner |
| "För att underlätta läkningen bör du undvika intensiv träning, bastubad…" | 🔵 | konkreta instruktioner |
| "Följ de instruktioner för eftervård… uppnå dina hudvårdsambitioner" | 🔴 | CTA-boilerplate + fluff-svans |

## /acnebehandling.php — 29 Apr 2026 (står som 🔵 SLIGHT i inventeringen, men har 3 🔴-block)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| Banner "Här har vi samlat de **bästa** aknebehandlingarna för att **effektivt ta bort** akne… skräddarsy en behandlingsplan" | 🔴 | marknads-superlativ öppning (bästa/effektivt) + retorisk fråga + generisk |
| "Att behandla och ta bort akne är **ingen quickfix**. På AcneSpecialisten använder vi vår expertis…" | 🔵 | ärlighet-före-hype-öppning (§4.1-keeper) + konkreta vi-handlingar |
| "Vår första prioritet är att få bort inflammationen och finnarna, de huvudsakliga orsakerna till ärrbildning…" | 🔵 | konkret prioritet + mekanism (inflammation→ärr) + vi-lösningar |
| "Första steget… kartlägga din aknetyp… Förebilder tas… personlig hudterapeut följer med…" | 🔵 | konkreta processteg trots mild fluff-svans ("konsekvent omsorg anpassad efter dina specifika behov") |
| "När din aknetyp har identifierats, inleder vi fas två: behandling av den aktiva aknen…" | 🔵 | konkret process/fas trots milt "maximera resultaten" |
| "Ansiktsbehandling mot acne är en djuprengöring… rengöring, ångning… klämma finnarna… mask och kräm" | 🔵 | konkret steg-för-steg-procedur (jfr ipl-rosacea SLIGHT-steg) |
| "Laserbehandling mot akne **fungerar genom att** använda ljusenergi… tränger ner… reducerar talgproduktionen… dödar bakterier" | 🔵 | **mekanism-öppning** + gloss; kort |
| "Kemisk peeling är en **effektiv behandling** mot akne… syran exfolierar… Genom att stimulera… textur, få bort finnar och jämnare hudton" | 🔴 | **marknad-superlativ öppning ("effektiv")** + rule-of-three fluff-svans — trots mekanism i mitten |
| "Microneedling kan döda aknebakterien (Cutibacterium acnes)… vilket… vilket… Kombinationen av dessa… bidrar till att… få bort akne" | 🔴 | **full mekanism men ändå 🔴**: lång + staplade "vilket"-kedjor + cirkulär summeringssvans |
| "Att förebygga hudproblemet är en viktig del av processen… daglig hudvårdsrutin med specifika produkter…" | 🔵 | konkret rutin trots mild importans-filler |
| Omdöme "Hade testat allt innan…" | 🔵 | omdöme (generiskt) — identiskt med acne.php-facit |
| Omdöme "Super fin personal… gått där i 2-3 år…" | 🟢 | omdöme + personlig detalj — identiskt med acne.php-facit |

**Lärdomar (facit → §1.1):**
- **Starkaste bekräftelsen på "öppningen avgör":** laser (mekanism-öppning "fungerar genom att…") = 🔵 vs kemisk peeling (marknad-öppning "är en effektiv behandling…") = 🔴 — samma blocktyp (behandlingskort), bara öppningen skiljer.
- **Ny nyans att backporta till §1.1 efter fler facit:** microneedling har full mekanism + gloss men blev ändå 🔴 → mekanism räcker inte om blocket är långt med staplade "vilket"-kedjor + en cirkulär summeringssvans ("Kombinationen av dessa… få bort akne"). Längd + summeringssvans kan lyfta ett mekanism-block till 🔴.
- Omdömena 🔵/🟢 är ordagrant samma som acne.php → modellen stabil på omdömen.
- Sidnivå ≠ block-facit: sidan står som 🔵 SLIGHT i lynx-data-inventeringen men har 3 🔴-block → verifiera sidans page-level AI COPY-flagga vid tillfälle.

**AI QUESTIONS (synliga FAQ-titlar, för Fas 2 / FAQPage — inga AI COPY-betyg i vyn):** Hur många behandlingar behövs? · Finns det en risk att min akne återkommer? · Vilken är den bästa aknebehandling ni erbjuder? · Gör aknebehandlingen ont? · Vad ska jag tänka på innan behandlingen? · Vad ska jag tänka på efter behandling? · Hemmavård efter behandlingen?

## FÖRE-facit per block — de 3 sidor vi skrev om 1 jul (RÅDATA, bevaras för omtolkning)
> LYNX per-block-betyg på **ORIGINALtexten** (LYNX-analys 22–29 apr; har INTE sett våra 1 jul-omskrivningar än — EFTER-värden kommer efter main-push + refresh). Betyg = FAKTA. "Min FÖRE-gissning" = prediktionsliggaren (§10). Detta är facit att score:a mot. **NY tier: 🟥 EXTREME.**

*(FÖRE-facit behandla-pigmentflackar 25 apr → `lynx-examples-arkiv.php`. Sidan är MÄTT; FÖRE-kolumnen finns i EFTER-tabellen.)*

### /hudproblem/hudforandringar/ — 22 Apr 2026 (SIGNIFICANT-tung)
| Block (utdrag) | LYNX (rå) | Min gissning | Träff |
|---|---|---|---|
| Banner "… brett spektrum av tillstånd, från födelsermäken …" | 🔵 SLIGHT | 🟠 ~55 | ~ lätt över |
| Vad-content "… godartade och elaktartade, vi behandlar endast …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| Varför-content "Hudförändringars uppkomst kan vara **en produkt av flera olika faktorer** …" | 🔴 SIGNIFICANT | 🔴 ~75 | ✓ |
| Vem-content "Nästan alla människor kommer vid något skede …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| Var-content "… uppstå överallt … **beroende på en kombination** …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| $type-intro "… uppstå av **många olika anledningar** …" | 🔴 SIGNIFICANT | 🟠 ~60 | ~ under |
| $service "Under en konsultation … **Vi tar före-bilder** …" | 🔵 SLIGHT | 🔵 (lämnad) | ✓ |
| Artikel1 "Hudförändringar är **en oundviklig del av våra liv** …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| Artikel2 "**Att navigera i världen av** hudförändringar …" | 🔴 SIGNIFICANT | 🔴 ~80 | ✓ |
| FAQ "Är vissa personer mer benägna …" | 🔵 SLIGHT | — | ✓ |
| Omdömen | 🔵 / 🟢 | — | ✓ |

### /ytliga-blodkarl.php — 29 Apr 2026 (SIGNIFICANT-tung)
| Block (utdrag) | LYNX (rå) | Min gissning | Träff |
|---|---|---|---|
| Banner "Ytliga blodkärl, som kan visa sig som spindelkärl … Vi förklarar hur och varför …" | 🔵 SLIGHT | 🔵 (lämnad medvetet) | ✓ bra kall |
| **Vad-content** "Ytliga blodkärl är små, utvidgade blodkärl som ligger nära hudytan … **De kan variera i storlek och form** … **utesluta eventuella bakomliggande problem**" | 🔴 SIGNIFICANT | "leder med mekanism → lämna" | ❌ **MISS – under-behandlad (bara komma+länk)** |
| Varför-content "**Förekomsten av** ytliga blodkärl … **en rad olika faktorer**" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Vem-content "**Det är en missuppfattning** att endast äldre …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Var-content "… även kallade spindelkärl … **beroende på en rad faktorer**" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| $service "Vid ett personligt möte … **Vi tar före-bilder** …" | 🔵 SLIGHT | 🔵 | ✓ |
| IPL-kort "IPL … **är en effektiv metod** för att behandla ytliga blodkärl …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Artikel1-content "Ytliga blodkärl är **en vanlig hudåkomma** som kan drabba personer i alla åldrar …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Artikel1-extended "Hos en hudterapeut … **skräddarsydd behandlingsplan**. Då utförs …" | 🔵 SLIGHT | (omskriven ändå) | ~ över |
| Artikel2-content "**Om du letar efter en effektiv och långsiktig lösning** … **det självklara valet**" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Artikel2-extended "Vi använder oss av **de senaste metoderna och teknologierna** …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| Artikel2-para3 "… **de mest avancerade och effektiva behandlingarna** …" | 🟠 MODERATE | 🔴 | ~ över (var MODERATE) |
| Omdömen | 🔵 / 🟢 | — | ✓ |

### Lärdomar (HYPOTESER — validera, ruta inte in §0/§5)
1. **🟥 EXTREME (ny, värst).** Enda facit: behandla-pigment microneedling. Mönster: mekanism **+ keyword-stuffing** ("pigmentfläckar" ×4) + staplade "vilket"-kedjor + längd. EXTREME ≈ mättad SIGNIFICANT (repetition/stuffing är extra-spaken).
2. **Renaste signalen — samma behandling, motsatt betyg (kräver acnebehandling som motexempel):** LASER-kortet är 🔵 SLIGHT på acnebehandling (mekanism-öppning "fungerar genom att…", magert) men 🔴 SIGNIFICANT på behandla-pigment (marknads-öppning "är en mycket effektiv metod" + ackumulerad fluff). → **Betyget styrs av öppningens framing + ACKUMULERAD marknad/hedge/filler över blocket — inte behandlingstypen.** Det förklarar acnebehandlings "många SLIGHT" vs de nya sidornas "många SIGNIFICANT".
3. **Marknadsord i öppningen är inte dödsstöt om blocket är kort + praktiskt.** behandla-pigment banner + $about-1 hade "de mest effektiva metoderna" men blev 🔵 SLIGHT — för att de är korta och svänger snabbt till konkret CTA ("boka konsultation / vi skapar en plan"), utan fluff-ackumulering. → korrigerar min senaste överbetoning "marknads-öppning = alltid 🔴".
4. **Modellen: öppningens framing sätter golvet, fluff-ackumulering × längd höjer graden.** Mekanism-öppning + magert = SLIGHT-golv (acnebehandling-korten). Marknads-öppning + ackumulering = 🔴/🟥 (behandla-pigment-korten). Definitions-öppning + lång + hedge-svans = 🔴 (ytliga Vad-content, trots mini-mekanism).
5. **Mina FÖRE-fel:** övergissade korta praktiska block (banner/about-1 = SLIGHT), undergissade behandlingskort (mekanism vilseledde mig → de var 🔴/🟥 pga fluff-ackumulering), och missbedömde ytliga Vad-content som "redan bra". Modellen bäst på tillstånds-prosa (hudforandringar ~9/9, ytliga ~11/12), sämst på behandlingskort + korta praktiska block (behandla-pigment ~5/11).
6. **Omdömen stabila** (SLIGHT/HUMAN identiskt över alla sidor).

### ÅTGÄRD (skarpt, från facit)
- **ytliga Vad-content var 🔴 SIGNIFICANT men fick bara komma+länk** → behöver riktig de-AI (led med konkret, korta hedge-svansen "utesluta eventuella bakomliggande problem", stryk "variera i storlek och form"). Föreslås som följd-commit.
- Övriga 🔴/🟥-block bedöms adekvat behandlade i 1 jul-omskrivningen (öppningar + fluff-ackumulering + microneedling-repetition kapade).

### 🎯 /behandla-pigmentflackar.php — EFTER-facit "Last update: 07 Jul 2026" (mottaget 7 jul 12:41 — FÖRSTA kompletta per-block-EFTER på en Fas 1-sida; badge 🔴→🔵 SLIGHT samma dag)
> Färsk crawl av VÅR text (live sedan 1 jul, PR #236). FÖRE = 25 apr-tabellen ovan (8🔴/1🟥/3🔵/1🟢, n=13, medel 2,38).

| Block (EFTER-text, snippet) | FÖRE | EFTER | Kommentar |
|---|---|---|---|
| Banner "Vi behandlar och tar bort pigmentfläckar med IPL, laser, kemisk peeling, microneedling och CryoPen… boka en kostnadsfri hudkonsultation så vägleder vi dig" | 🔵 | 🔵 | omskriven ändå — höll |
| "Att ta bort pigmentfläckar handlar om att bryta ner det pigment som samlats i huden… metoder som laser, IPL och kemisk peeling… kostnadsfri hudkonsultation… behandlingsplan" ($about-1) | 🔵 | 🔵 | mekanism-öppning höll |
| "Under konsultationen går vi igenom dina behov och väljer rätt behandling… Målet är en jämnare hudton." ($about-2) | 🔴 | 🟠 | +1 men EJ 🔵: kort men ABSTRAKTA vi-handlingar ("går igenom dina behov") — saknar före-bilder-konkretionen |
| "Först behöver vi förstå din hud… Vi tar före-bilder för att följa dina framsteg… Boka gratis konsultation" ($define) | 🔴 | 🔵 | ✓ konkreta vi-handlingar-receptet |
| "När vi har identifierat dina pigmentfläckar inleder vi behandlingen… kemisk peeling stockholm, laserbehandling och microneedling…" ($treat) | 🔴 | 🔵 | ✓ (intern länk-frasen kvar) |
| IPL-kort "…(Intensivt Pulserande Ljus)… ljusenergi som tränger djupt in i huden… bryter ner melanin, vilket minskar synligheten… jämnare hudton" | 🔴 | 🟠 | +1 men EJ 🔵: mekanism finns men generik ("tränger djupt in") + payoff-parafras |
| Kemisk peeling-kort "…syror för att avlägsna det yttersta hudlagret. Denna process främjar cellförnyelse… stimulera hudens naturliga förnyelseprocess… jämnare hudton" | 🔴 | 🔴 | ✗ OFÖRÄNDRAD — processabstraktion ("främjar cellförnyelse") ≠ mekanism; 3 staplade payoff-parafraser |
| Laser-kort "…sända ut ljuspulser som bryter ner pigmentet i fläckarna… riktar vi lasern specifikt… hålla nere obehag och återhämtningstid" | 🔴 | 🔵 | ✓✓ mekanism + konkret trade-off-svans = receptet |
| Microneedling-kort "…små mikronålar som skapar mikroskopiska kanaler… kollagen och elastin, vilket reducerar… aktiva ingredienser att tränga djupare" | 🟥 | 🔴 | +1 (stuffingen kapad) men kvar: vilket-kedjor + payoff-parafraser ×3 + "aktiva ingredienser"-svans |
| CryoPen-kort "…applicerar extrem kyla på pigmentfläckarna, vilket bryter ner dem… minimalt invasiv, med lite obehag och ingen återhämtningstid" | 🔴 | 🔵 | ✓✓ samma recept som laser-kortet |
| Omdöme 1 / Omdöme 2 | 🔵/🟢 | 🔵/🟢 | stabila |
| FAQ-rad "Hur många behandlingar behövs för att se resultat vid pigmentfläcksbehandling?" | – | 🔵 | ny betygsatt FAQ-rad (FAQ-spaken §1.4 bekräftad igen) |
| *(FÖRE-blocket $about-3 "dedikerade team… bästa möjliga vården")* | 🔴 | *(borttaget)* | marknadssvansen ströks 1 jul — blocket finns inte längre |

**Räkning EFTER: 2🔴/2🟠/8🔵/1🟢 (n=13) → medel 1,38 → pred 🔵 = badge SLIGHT ✓** (§1.4 träffar på EFTER-data; FÖRE-missen 2,38→badge 🔴 kvarstår som gammal-facit-anomali). **FÖRE→EFTER: 9 flaggade → 5 nådde 🔵, 2 blev 🟠, 2 kvar 🔴** — sidnivåmålet nått men blockmålet (§7: alla 🔴/🟠 → minst 🔵) INTE helt.
**Backport-lärdomar (§10):** (1) **Behandlingskortens vinnar-recept = mekanism-verb + KONKRET trade-off-svans** ("hålla nere obehag och återhämtningstid" / "lite obehag, ingen återhämtningstid") — laser + CryoPen 🔴→🔵. (2) **Processabstraktion fäller**: "främjar cellförnyelse/stimulerar naturliga förnyelseprocess/förbättrar struktur och utseende" är parafras-payoffs, inte mekanism (kemisk-kortet 🔴 kvar) — ge taktil bild + EN payoff. (3) **"vilket"-kedjor + payoff-parafraser ×3 håller kvar micro-kortet på 🔴** trots kapad stuffing. (4) **Korta konsult-block kräver KONKRETA vi-handlingar** ("går igenom dina behov" 🟠 vs "vi tar före-bilder" 🔵 — nu belagt inom samma sida). **→ micro-fix-kandidat: 4 block (kemisk/micro-korten + $about-2 + IPL-kortet); sidan är MÄTT så §13.G-frysningen är hävd.**

## /hudbehandlingar/ipl/ — 22 Apr 2026 (MODERATE-sida, Fas 3) — METOD-CHECK (modell vs facit, FÖRE omskrivning)
> Blind-ish test: modell-regel → prediktion → LYNX-facit. Rik mix = bra kalibreringstest. Betyg = LYNX-fakta.

| # | Block (utdrag) | Modell-prediktion | LYNX (rå) | Träff |
|---|---|---|---|---|
| 1 | Banner "Vi erbjuder **den bästa** IPL… **garanterar** resultat… pigmentfläckar, ytliga kärl eller ojämn hudton" | 🔴 (marknad-öppning) | 🟠 MODERATE | −1 (namnger 3 tillstånd → mildare) |
| 2 | "IPL, som står för… rikta in sig på **melanin**… **hemoglobin**… särskilt **effektiv**…" | 🔵/🟠 (gloss+mekanism) | 🔴 SIGNIFICANT | +1 (längd + "effektiv"-svans + rule-of-three) |
| 3 | "IPL-teknologin är **mångsidig**… **en rad** hudproblem… **populär**…" | 🔴 | 🔴 | ✓ |
| 4 | "Inför en IPL… **det är viktigt att** följa några grundläggande steg… optimala resultat" | 🔴 | 🔴 | ✓ |
| 5 | "För att förbereda huden bör du undvika solning… retinol…" (lång+boilerplate-svans) | 🔴 | 🔴 | ✓ |
| 6 | "IPL behandling är en **effektiv metod**… rengöras grundligt… skydd på ögon" | 🔵/🟠 | 🟠 MODERATE | ✓ |
| 7 | "Vår IPL-enhet justeras… korta, intensiva pulser… omvandlar ljusenergin till värme…" | 🔴 | 🔴 | ✓ |
| 8 | "Efter behandlingen… mild solbränna… utvecklas över tid…" | 🔴 | 🔴 | ✓ |
| 9 | "En **mångsidig och effektiv** behandlingsmetod… utforska…" (kort) | 🟠 | 🟠 | ✓ |
| 10 | "**Effektiv** behandling av rosacea med vår **avancerade** IPL-teknik… målinriktade ljuspulser…" (kort) | 🟠 | 🟠 | ✓ |
| 11 | "**Effektiv** IPL… minska ytliga blodkärl… selektivt… klarare hudton. Läs mer" (kort+konkret) | 🔵 | 🔵 SLIGHT | ✓ |
| 12 | "Minska och ta bort pigmentfläckar… idealisk för att effektivt… jämnare hudton. Läs mer" (kort+konkret) | 🔵 | 🔵 SLIGHT | ✓ |
| 13 | "Behandla melasma effektivt med laser… selektivt… märkbar förbättring. Läs mer" (kort) | 🔵 | 🟠 MODERATE | −1 (vagare + "med laser" på IPL-sida) |
| 14 | "Eftervården… är **avgörande** för **bästa** resultat… **viktigt att** du undviker röra…" (lång) | 🟠 | 🔴 SIGNIFICANT | +1 (bästa/avgörande/effektiv-öppning + längd) |
| 15 | "Under de första dagarna… undvika intensiv fysisk aktivitet, bastu… hög SPF…" (konkret, lång) | 🟠 | 🟠 MODERATE | ✓ |
| 16 | "Se till att följa… eftervårdsinstruktioner… **tveka inte att kontakta kliniken**" (kort, direkt) | 🔵 | 🟢 HUMAN | −1 (kort+direkt+mänsklig ton → HUMAN) |
| 17–19 | Omdömen ("Josefin som behandlare… 2 månader… :)") | 🟢 | 🟢 HUMAN | ✓ |

**Resultat:** ~11/16 exakt tier, resten ±1 (ingen vild miss). Bäst på procedur/eftervård-mittsidan (7/8), fuzzy på 🔵↔🟠-gränsen.

**Nya signaler (förbättrar uppskattningen):**
1. **"Läs mer om X"-mini-kort** (kort action-öppning + EN konkret nytta + länk) = 🔵 SLIGHT; blir 🟠 om nyttan är vag ("märkbar förbättring"). Ny blocktyp.
2. **Banner som namnger konkreta tillstånd** = 🟠, inte 🔴, trots "bästa/garanterar".
3. **Gloss+mekanism → 🔴 om blocket är långt + marknads-svans** ("särskilt effektiv" + rule-of-three); jfr ipl-rosaceas KORTA gloss = 🔵. Bekräftar ackumulering × längd.
4. **Eftervård, samma sektion, motsatt betyg:** lång + "avgörande/bästa/effektiv"-öppning = 🔴 (blk 14); kort + direkt = 🟢 HUMAN (blk 16).
5. **HUMAN** = korta, direkta, "mänskligt röstade" instruktioner + omdömen med namn/tidsdetalj.

*(FÖRE-facit om-oss 22 apr + v3-blindtestets resultat → `lynx-examples-arkiv.php`. Sidan är MÄTT; FÖRE-motsvarigheten står i EFTER-tabellen nedan.)*

## /om-oss.php — 05 Jul 2026 — ✅ EFTER REWRITE (ANDRA EFTER-FACITET; 0 flaggade block synliga; badge ej synlig i dumpen men sidan borta ur MODERATE-gruppen → SLIGHT implicerat)
| Block (snippet, EFTER-text) | Betyg | FÖRE-motsvarighet (22 apr) → tolkning |
|---|---|---|
| "AcneSpecialisten använder en fyrstegsmetod för hudvård, som börjar med en gratis konsultation… avslutar med att reparera skadad hud, inklusive ärr…" | 🔵 | O02 🔵 → 🔵 (orörd, stabil) |
| "På AcneSpecialisten erbjuder vi en omfattande lösning… personlig hudterapeut (PT)… fotograferar vi din hud för att tydligt kunna jämföra framstegen…" (×2 nära-dubbletter, BÅDA betygsatta) | 🔵🔵 | O03 🔵×2 → 🔵×2 (orörda; dubbletten alltjämt synlig i LYNX) |
| "Vår metod tar hela vägen: vi identifierar och behandlar hudproblemet, hjälper dig att förebygga det och reparerar huden efteråt. Behandlingsplanen anpassas efter din hudtyp." | 🔵 | O04 🟠 ("inte bara X utan även Y" + skräddarsydd) → 🔵: rak vi-process |
| "Sedan vår start 1994 har vi stolt hjälpt flera hundra tusen personer… kontinuerlig lärande och förfining…" | 🔵 | O05 🔵 → 🔵 (stabil; historik-prosa mild, §1.3 regel 6 ✓) |
| "Varje hudterapeut i teamet är certifierad med en SHR-godkänd utbildning (Svenska hudterapeuters riksorganisation). Det betyder att behandlingarna följer branschens standarder och utförs av utbildad personal." | 🔵 | **O06 🔴 → 🔵**: "garanterar högsta möjliga/mest effektiva"-svansen borta — credentialen bär nu själv |
| "Vi kombinerar lång erfarenhet med moderna tekniker och maskiner… rutinerade och uppdaterade på det senaste… beprövad kunskap men använder dagens metoder." | 🔵 | **O07 🔴 → 🔵**: "årtiondens erfarenhet/senaste innovationerna/optimala resultat"-marknaden ersatt |
| "Vi har tre kliniker i Stockholm: på Strandvägen, Södermalm och i Sundbyberg. Var du än befinner dig i staden finns vi nära… Boka på den klinik som ligger närmast dig." | 🔵 | **O08 🔴 → 🔵**: klinik-konkretionen LEDER nu (förr begravd i "förstår vi vikten av"-marknad) |
| "Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter." | 🔵 | O09 🔵 → 🔵 (stabil) |
| Omdöme "Hade testat allt innan…" | 🔵 | O10 🔵 → 🔵 (stabil) |
| Omdöme "Super fin personal… ca 2-3 år…" | 🟢 | O11 🟢 → 🟢 (stabil) |

**FÖRE→EFTER-summering:** 22 apr **3🔴/2🟠/6🔵/1🟢** (n=14 m. dubbletter, medel 1,64–1,85) → 5 jul **0🔴/0🟠/10🔵/1🟢** (synliga, medel 0,91). Banner-blocket (O01 🟠, "unik och effektiv fyrstegsmetod… utan remiss") syns INTE i EFTER-dumpen — utanför bild eller borttaget ur analysen; FAQ-svaren (5 titlar synliga) obetygsatta i dumpen → be om resten. **Alla tre 🔴 gick till 🔵 + O04 🟠→🔵 = prediktionen träffade.** **Modellfynd:** (1) samma mönster som acne-ansikte — konkretion-leder-öppningen gör jobbet (§1.1 nyckel 1, andra kausala belägget); (2) O08-läxan bekräftad baklänges: 22 apr fälldes blocket TROTS 3 namngivna kliniker (längd+marknad dominerade) — nu räddar samma konkretion blocket när marknaden är borta; (3) omdömen + orörda 🔵 stabila över refresh (andra sidan i rad = replikerat). **OBS vyernas oberoende:** AI Copy-vyn färsk (5 jul) men SCORE-analysen 79 dagar gammal (Overall 17, AI STYLE 20 — se `lynx-score.php`) → sidnivå-SCORE i Pages-tabellen kan vara STALE bredvid färsk AI Copy.

*(SCORE-modellens reverse-engineering (1 juli), MEDIAN-hypotesen och blindtest 1 → `lynx-examples-arkiv.php`. SUPERSEDED: SCORE-härledningen bor i `lynx-score` SLUTLÄGE; sidnivåmodellen är MEDEL, inte median — `lynx-rewrite` §1.4.)*

## /microneedling.php — facit 22 Apr 2026, mottaget 2 jul (Tier 3, EJ omskriven — FÖRE-facit)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Som ledande experter… toppmodern… kickstartas produktionen av kollagen – ett avgörande protein…" | 🔵 | marknadsord men mekanism+gloss direkt (v5 regel 2) |
| "…effektiv och revolutionerande behandlingsmetod… 16 tunna medicinska engångsnålar… djup penetration av… serum" | 🔴 | dubbel marknads-öppning fäller trots konkret siffra |
| "Den digitala microneedling-tekniken… smärtfritt alternativ till laser… åldrande hud, ärrbildningar, ojämn hudton" | 🔵 | konkret jämförelse + namngivna tillstånd |
| "Förberedelse… noggrann konsultation… omfattande undersökning… skräddarsydd behandlingsplan som är optimerad" | 🔴 | konsult-boilerplate + fluff-svans (= dermapen-mönstret) |
| "Innan behandlingen är det viktigt att huden inte är solbränd… undvika starka… syror" | 🟠 | konkret prep + importans-filler |
| "…avancerad hudförnyande… När du anländer… rengöras grundligt för att avlägsna makeup" | 🔵 | vi-handlingar bär trots marknadsord |
| "Vår speciellt utformade maskin… sterila nålar… reparationsmekanism… serum… maximera… rodnad normalt… strålande hy" | 🔴 | lång + fluff-ackumulering + svans (mekanism räddar inte) |
| "En mångsidig behandling… en rad hudproblem… vilket är effektivt" | 🔵 | kort (längd-modifierare ner) trots vaghet |
| "Mångsidig behandling lämplig för olika delar av ansiktet och kroppen." | 🟢 | kort en-radare |
| "Microneedling behandlar… hela ansiktet eller på utvalda zoner." | 🔵 | kort + konkret |
| "Efter en microneedlingbehandling… flera viktiga steg… kritiskt att undvika… 24 timmarna" | 🔴 | importans-öppning + lång (= ipl-eftervårdsmönstret) |
| "Under de första dagarna… bastu… Solskydd av yttersta vikt… hög SPF… milda produkter" | 🟠 | konkret men lång + importans |
| "Följ noggrant… tveka inte att kontakta… regelbunden microneedling kur rekommenderas" | 🔵 | kort direkt (ipl-motsvarigheten fick 🟢 — fuzzy gräns) |
| "Vi använder Dermapen och Exceed… modernaste och mest effektiva… på markanden." | 🟢 | kort + namngivna maskiner (§1.1 nyckel 3) trots superlativ + STAVFEL "markanden" |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |

**Median-check (§1.4):** 4🔴/2🟠/7🔵/3🟢 (n=16) → median 🔵 = sidnivå SLIGHT ✓ (inventeringen). **Obetygsatt:** H2, "Se alla omdömen Se alla omdömen" (dubblett), 7 FAQ-titlar (Fas 2-underlag). **Rewrite-ammo:** typo "markanden"→"marknaden" (🟢-block, lätt hand); "microneedling kur" finns i eftervårdsblocket men gap:en vill ha den i hero/paketpris-sektionen; exosomer-gap = VÄNTAR (§9).

### 🔧 REWRITE-SPEC microneedling.php (AKTIV — läs HELA innan du rör en bokstav)
> Rewriten har försökts **två gånger och rullats tillbaka två gånger**: 2 juli (ägarbeslut: statistiken först) och **8 juli (§7.4b-granskningen underkände den)**. Block-planen nedan är fortfarande giltig. Fällorna under den är verifierade, inte hypotetiska — de kommer ur den granskning som fällde försök 2. Raderas när sidan är omskriven och godkänd.

#### ⛔ FÄLLORNA — sex ALLVARLIGA fynd ur §7.4b 8 juli (tre oberoende granskare, 232k tokens)
1. **§5-BROTT PÅ RAD 64, i en mening du kommer att redigera.** `"ett smärtfritt alternativ ... och erbjuder minimala risker för biverkningar"`. §5 förbjuder ordet **"smärtfritt"** ordagrant och förbjuder riskfritt-intryck (KO-praxis). Meta-descriptionen (rad 7) har `✓Smärtfritt`. **Kör §3-checklistans riskfritt-fråga på VARJE block.** *(Sajtbrett: 12 filer, egen §9-tråd.)*
2. **`process-p2`: strök du "maximera hudens upptagningsförmåga" OCH "stimulera förnyelseprocessen"?** Det är TVÅ distinkta syften med serumet. Ersätt dem inte med `"medan de fortfarande är öppna"` — det påståendet gör sidan aldrig. §13.D + §13.O.
3. **`prep-p1`: konsultationen identifierar "specifika behov OCH hudtillstånd".** Två saker. Hitta inte på `"vilka produkter du använder idag"` — det står ingenstans.
4. **`prep-p2` bär ett PROAKTIVT löfte:** *"Din hudterapeut kommer att ge dig all information du behöver."* Invertera det inte till reaktivt (*"svarar om du frågar"*). Kliniken slutar då lova något.
5. **`aftercare-p2` och `desc-p1` bär HEDGAR som är juridik, inte fluff:** `kan öka` (svullnad) · `kan vara extra skadlig` (UV) · `syftar till att förbättra`. Stryk dem inte. `"förbättrar"` är ett obetingat effektlöfte (§5). `aftercare-p1`:s `"normalt"` är §4.1:s keeper *biverkning som bevis på effekt* — behåll det, och mildra inte `svullen` till `lite svullen`.
6. **BANNERN (facit 🔵): lägger du till kur-meningen MÅSTE du också ta öppningen.** `"Som ledande experter ... toppmodern behandling"` är marknadssuperlativ. En blind bedömare gav blocket **SIGNIFICANT (konf 72)** efter att en mening lagts till utan att öppningen rörts — §1.1 nyckel 1: *fluff-ackumulering × längd höjer graden*. Antingen de-AI:a hela bannern, eller lägg kur-meningen någon annanstans. *(Ägaren erbjöd bannern 8 juli; den som gör det behöver inte fråga igen.)*

#### ⚠️ Sju gränsfall att inte upprepa
- **Kur-poängen får bara stå på ETT ställe.** Den finns redan i `aftercare-p3` (🔵, orörd per spec). Lägger du den i bannern OCH säger `"hur många gånger du behöver komma"` i `prep-p1` står den tre gånger. §3: ingen poäng upprepad mellan block.
- **`desc-p1` och `process-p2` beskriver samma mekanism.** Skriv du båda mot mekanism-mallen blir de nästan ordagrant lika. Differentiera: `desc-p1` = vad behandlingen ÄR, `process-p2` = vad som händer i rummet.
- **Mekanismen på sidan är att SKADAN triggar kollagensvaret** (rad 20 + rad 83), inte att kanalerna gör det. Låt inte kanalerna orsaka cellförnyelsen.
- **Komma-täthet.** Försök 2 sänkte ordantalet 20 % i de rörda raderna men ADDERADE fem komman (4,4 → 6,8 per 100 ord). Räkna komman, inte bara ord.
- **Språk:** `avstå smink` → `avstå FRÅN smink`. `maskin för ... nålar genom huden` läses som *maskin avsedd för nålar* (garden-path). `Kanalerna gör två saker:` är translationese + list-scaffold i prosa (§2: bunden prosa).
- **`Samtidigt ... medan`** = pleonasm.
- **`din microneedling session`** är särskrivning + anglicism, men frasen fanns FÖRE — rör den bara om du rör meningen ändå.

#### 📌 Orörda block: notera, skriv inte om (facit 🔵/🟢 — §13.D: facit trumfar tyckande)
`$floating_box` (`innovativ och effektiv`, `adressera`) · `$types_description` (satsfragment, `vilket är effektivt`) · `$service_brands_text` (`vilket` → `som`; obelagt superlativ `de modernaste och mest effektiva ... på marknaden`) · FAQ-svaren (`skräddarsy`, `Intressant nog`) · `$description_title` (*Hur fungerar metoden?*) dubblerar article-titeln (*Hur går behandlingen till?*) — den strukturella orsaken till innehållsdubbleringen.
**Äkta bugg, egen §9-tråd:** kortet *Microneedling mot Pigmentfläckar* visar `mogen-hy.webp` med alt `Microneedling för Pigmentfläckar`. Rätt bildfil finns.

#### ✅ Det som FUNGERADE i försök 2 (återanvänd)
Alla sex 🔴/🟠-block predikterades **SLIGHT** av en blind bedömare som inte såg facit — målet nåddes. `§6`-fras-kollen var grön (0 av 8 målfraser tappade). Em-strecket borta. `inklusive men inte begränsat till` → `till exempel`. Passiv → aktiv imperativ i eftervård och förberedelse. Kur-meningens siffror är verifierade mot `procedures` (3 behandlingar 7995 kr, 5 behandlingar 10995 kr).

#### 🎯 FÄRSK FÖRE-BASELINE (8 juli 10:55, timmar före försök 2)
VALUE 66 · SCORE **60** (var 50) · GAPS 0⚡/1💡 · AI COPY 🔵 SLIGHT · AIQ OK · P.PRICE HIGHEST · KW 63. Block-facit 22 april: 4🔴/2🟠/7🔵/3🟢 (n=16, medel 1,44). **Sidnivå väntas stanna 🔵** — detta är en SCORE-vinst, inte en flagg-vinst (§1.4). *(WORDS/CLICKS ej synliga i vyn → §10.0 punkt 3 ouppfylld.)*

**Block-plan (11 punkter):** (1) banner: tankstreck→komma + NY kur-mening för §8.1-gapet ("Bäst resultat ger en microneedling kur på 3 eller 5 behandlingar, eftersom kollagenet byggs upp gradvis mellan behandlingarna"); (2) desc-p1 🔴: mekanism-öppning, behåll 16-nålar/tusentals-kanaler/serum/alla-hudtyper, döda ", vilket möjliggör"; (3) desc-p2 🔵 lätt hand: "inklusive men inte begränsat till"→"till exempel" (translationese); (4) prep-p1 🔴: konsult-boilerplate→konkreta vi-handlingar; (5) prep-p2 🟠: aktiv imperativ ("Kom inte solbränd..."), importans+svans bort; (6) process-p2 🔴: "speciellt utformade"/"maximera"/strålande-svans bort, grammatikfel "slussas in kanalerna" rättas, rodnad-är-normalt behålls; (7) aftercare-p1 🔴: importans-öppningen (ren meta) bort, imperativ, 24-timmar/smink/smutsiga-händer kvar; (8) aftercare-p2 🟠: "undvika"→"Undvik", "bastu, och"→"bastu och", "av yttersta vikt"/"rekommenderas att" bort, SPF/milda-produkter/fuktbalans kvar; (9) brands: typo "markanden"→"marknaden"; (10) kort-grammatik: "våra resultatinriktade microneedlingbehandling"→"vår...", "bristningarnas utseendet"→"utseende"; (11) FAQ §1.5: topp-frågan "Vad är microneedling bra för?" (score 25, OK) — svaret kompletteras med pigmentfläckar/bristningar/aktiv acne (sidans egna behandlingar); FAQ-typo "micronnedling"→"microneedling" (typon BRYTER sökordsfrasen "microneedling resultat"). Aftercare-p3 🔵 med "microneedling kur" lämnas orörd.

## /portomning.php — facit 24 Jun 2026, mottaget 2 jul (EJ omskriven — FÖRE-facit; färskaste facit-datumet hittills)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Portömning är en effektiv ansiktsbehandling som tömmer porerna på talg… ansiktet,ryggen eller bröstet." | 🔵 | konkret vad+var trots "effektiv" ×2 (TYPO: mellanslag saknas "ansiktet,ryggen") |
| "…utformad för att djuprengöra porerna genom att noggrant extrahera komedoner (svarta och vita pormaskar)… skonsam och effektiv lösning… idealisk…" | 🔵 | mekanism + gloss bär; marknadssvansen fäller inte här |
| "…noggrann ansiktsbehandling… varsamt rengörs… peelingtvätt som exfolierar och tar bort döda hudceller." | 🔵 | konkret steg-för-steg |
| "Efter rengöring tillämpas en ångbehandling med hjälp av en Vapozon… lansett (liten nål)…" | 🔵 | namngiven maskin + gloss + konkret |
| "Sedan applicerar vi en lugnande lermask… viktig för hudens återhämtning… inte bara att rengöra porerna utan också att återställa…" | 🟠 | konkret start men importans + antites-svans |
| "Pormaskar kan uppstå överallt på kroppen där det finns porer. Vi utför därför inte bara behandlingen i ansiktet utan även på brötstet och på ryggen." | 🟢 | kort + rak (TYPO "brötstet"; antites utan att fällas — kort block) |
| "Efter en portömning är det viktigt att ge huden den omsorg den behöver… anpassad hudvårdsrutin… engagerade i att stödja dig… optimal hudhälsa." | 🟠 | importans-öppning + boilerplate-svans, lång |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |

**Median-check (§1.4):** 2🟠/5🔵/2🟢 (n=9) → median 🔵 = sidnivå SLIGHT ✓. **Obetygsatt:** H2, 5 FAQ-titlar (hemma? · hur ofta? · kommer pormaskarna tillbaka? · hur snabbt resultat? · behövs vid få pormaskar?). **Rewrite-ammo:** typos "ansiktet,ryggen" + "brötstet"; 🟠-blocken = importans-öppningar + svansar.

## /acne-rygg.php — facit 25 Apr 2026, mottaget 2 jul (EJ omskriven — FÖRE-facit; husröst-referens för "bacne"-blocket)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| "Akne på ryggen kan vara svårare att behandla på grund av dess läge, men vi har samlat den information… Upptäck hur du…" | 🟠 | meta/scensättning men konkret ämnespoäng |
| "Akne på ryggen, även kallad 'bacne'… Precis som ansiktsakne… hårsäckarna täpps till… inflammation och finnar." | 🔵 | §4-husröstblocket — mekanism + alias ✓ |
| "För att effektivt hantera… viktigt att förstå dess orsaker. Hormonella förändringar, genetik, svett och friktion… bestå av… specialiseradekan…" | 🔵 | konkretiseringen räddar importans-öppningen (GRAMMATIKFEL live: "bestå av", "specialiseradekan") |
| "Ryggakne är en hudåkomma som påminner om ansiktsakne… hög koncentration av talgkörtlar och stora porer…" | 🔵 | definition + mekanism + plats |
| "Akne på ryggen kan variera från milda utslag till grov akne… viktigt att förstå att ryggakne är ett vanligt problem… alla åldrar, särskilt tonåringar…" | 🔴 | skal/svårighetsgrad + demografi + importans (= acne.php-mönstret) |
| "Ryggakne orsakas av flera olika faktorer. En viktig faktor är överproduktion av talg… blockera porerna, vilket leder till…" | 🔵 | **nyans: "flera olika faktorer"-öppning fäller INTE när konkretiseringen kommer direkt i mening 2** |
| "Friktion från tighta kläder, tunga ryggsäckar och olika sportsutrustningar…" | 🔵 | konkret uppräkning |
| "Akne i nacken och på axlarna uppstår av liknande orsaker… inkluderar:" | 🔵 | kort intro till lista |
| "Att få bort akne på ryggen kan vara en utmanande process, men med rätt strategi… Här kommer några konkreta tips…" | 🔵 | acknowledge + skylt |
| "Vi har över 30 års erfarenhet av att behandla akne på ryggen använder vi metoder…" | 🔵 | siffra bär (GRAMMATIKFEL live: satsbygget trasigt) |
| "Det finns flera avancerade behandlingar… Här är några av de mest effektiva metoderna:" | 🔴 | **kort MEN "flera avancerade"+"mest effektiva" utan konkret pivot → 🔴 (bekräftar v5 regel 2 undantag nedåt)** |
| "En av nycklarna… rätt produkter… mycket effektiva… bästa produkterna… antibakteriella egenskaper, vilket kan vara skonsammare…" | 🔴 | staplad produkt-marknad utan konkretion |
| "Se till att produkterna… har följande egenskaper: Förebygger… Behandlar… Reducerar… Reparerar…" | 🔵 | konkret kravlista |
| "Daglig behandling med rätt produkter är avgörande… speciellt utformade… Boka konsultation Köp produkter" | 🔵 | kort + CTA-pivot räddar marknadsorden |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |

**Median-check (§1.4):** 3🔴/1🟠/11🔵/1🟢 (n=16) → median 🔵 = sidnivå SLIGHT ✓. **Obetygsatt:** "Även känt som"-alias, CTA-knappar, "Från 1495 kr". **Rewrite-ammo:** 2 grammatikfel live (blk 6 + 13); gap-texterna (ryggakne-synonymer = GÖR; hårvård/sängkläder-tips = försiktig lifestyle, §8.1).

## /seborroisk-keratos.php — facit 25 Apr 2026, mottaget 2 jul (EJ omskriven — FÖRE-facit)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "…även kallat åldersvårtor… godartade hudtillväxter… På denna sida går vi igenom… mest effektiva… skonsamma och moderna tekniker…" | 🔵 | alias+definition bär trots meta+marknad (mildare än acne-ansiktes banner) |
| "…vårtlika, bruna till svarta upphöjda fläckar… några millimeter till flera centimeter… bröstet, ryggen, ansiktet eller halsen… utom handflator och fotsulor." | 🔴 | **konkret definition men LÅNG utan mekanism → 🔴 (= ytliga Vad-content-mönstret)** |
| "…utvecklas vanligtvis hos äldre vuxna och är helt ofarliga… klia eller bli irriterade… friktion från kläder eller smycken." | 🔵 | kort + konkret |
| "Orsaken… är inte helt klarlagd, men det finns flera faktorer som tros bidra… Genetiska faktorer spelar också en viktig roll…" | 🔴 | hedge-öppning + "spelar en viktig roll" (AI-vokab §5) |
| "UV-strålning… har också föreslagits som en möjlig bidragande faktor… ingen exakt utlösare… oavsett hudtyp eller livsstil." | 🟠 | hedge-stapel men konkret faktor |
| "AcneSpecialisten erbjuder avancerade behandlingar… laserterapi och kryoterapi… personligt anpassad behandlingsplan…" | 🟠 | marknad + namngivna metoder blandat |
| "Vid en konsultation… undersökning av din hy… före-bilder… Cryopen eller andra skonsamma metoder…" | 🔵 | konkreta vi-handlingar + namngiven maskin |
| "CryoPen är en innovativ behandling som använder kryoterapi för att målinriktat och effektiv behandling… Boka konsultation" | 🔵 | namngiven metod + CTA-pivot (GRAMMATIKFEL live: "för att målinriktat och effektiv behandling") |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |
| FAQ-svar "Hur skiljer sig seborroisk keratos från vårtor och åldersfläckar?" | 🟢 | FAQ-svar kan nå HUMAN |
| FAQ-svar "Finns det några risker eller biverkningar…?" | 🟢 | FAQ-svar kan nå HUMAN |

**Median-check (§1.4):** 2🔴/2🟠/5🔵/3🟢 (n=12) → median 🔵 = sidnivå SLIGHT ✓. **Obetygsatt:** H1, "Även känt som Hudförändringar", "0 2"-artefakt, "20 min", "Från 1995 kr", övriga FAQ-titlar. **Rewrite-ammo:** grammatikfel i CryoPen-blocket; 🔴-blocken = lång definition utan mekanism + hedge-öppning.

## /mogen-hy.php — facit 22 Apr 2026, mottaget 2 jul (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT — bekräftat 13:03-dumpen: scrollbar i botten, listan slutar med obetygsatt FAQ-titel "Varför får man rynkor när man blir äldre?")
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Mogen hy visar tecken på åldrande såsom rynkor, fina linjer och slapp hy. Denna sida fokuserar på att förstå orsakerna…" | 🔵 | kort + konkret uppräkning; meta-"Denna sida" fäller inte kort block |
| "Mogen hy är en term som oftast används… rynkor, fina linjer, förlust av spänst och elasticitet… tunnare… behålla fukt, vilket leder till torrhet… läka snabbt efter skador." | 🔴 | konkret uppräkning men LÅNG definition + vilket-kedja (= sebo/ytliga Vad-content-mönstret) |
| "Mogen hy är en oundviklig del av den naturliga åldringsprocessen, men vad är de bakomliggande orsakerna? … kollagenproduktionen… vilket i sin tur ger upphov till rynkor… talgproduktion… självläkningsförmåga…" | 🔴 | full mekanism (kollagen/talg) men lång + retorisk fråga-scaffolding + vilket-kedjor — mekanism räddar inte längd (§1.1 nyckel 1) |
| "Alla människor kommer oundvikligen att uppleva mogen hy… Genetik spelar en avgörande roll… gråa hår eller skallighet… Medan vi inte kan ändra våra gener…" | 🔴 | demografiskt skal + "spelar en avgörande roll" + truism-svans (GRAMMATIKFEL live: "en genetiska anlag") |
| "När vi talar om var på kroppen man får mogen hy… Ansiktet är det mest uppenbara… runt ögonen, munnen och på pannan. Halsen och dekolletaget… tunnare hud…" | 🔴 | konkreta platser men lång + scensättningsöppning "När vi talar om" + fluff i båda ändar |
| "Vid ett personligt möte med en hudterapeut utförs en djupgående analys… före-bilder… skräddarsydd behandlingsplan. Läs mer om konsultation" | 🔵 | korta vi-handlingar + CTA-pivot |
| "Mogen hy med tecken på åldrande… påverka självkänslan och orsaka obehag… ingen 'minsta gräns' för när det är lämpligt att söka professionell hudvård." | 🔴 | känslo-/importans-prosa utan mekanism (GRAMMATIKFEL live: "att din åldrande börjar påverka") |
| "Hos en hudspecialist kan du få en personlig konsultation… djuprengöring och återfuktning till… laser och hudföryngring… aldrig för tidigt eller för sent…" | 🟠 | konsult-boilerplate + pep-svans; konkreta metodnamn håller den på 🟠 |
| "Letar du efter effektiv behandling… mer än tre decenniers erfarenhet… skräddarsydd behandlingsplan… följer dig noga…" | 🔵 | siffra (tre decennier) + direkt tilltal bär trots marknadsord (TYPO live: "elasticitet.Hos" utan mellanslag) |
| "Att välja AcneSpecialisten betyder inte bara tillgång till den mest avancerade behandlingen… djupa kunskap, engagemang och långvariga erfarenhet…" | 🔵 | kort brand-block — längden räddar "inte bara"-antitesen (TYPO live: "huvårdsmål") |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |
| FAQ-titel "Kan miljöfaktorer, som luftfuktighet och föroreningar, påverka mogen hy mer än yngre hy?" | 🟢 | betygsatt FAQ-titel (ovanligt — de flesta titlar obetygsatta) |
| FAQ-titel "Är det möjligt att förhindra vissa tecken på åldrande, eller handlar det mest om att hantera dem när de uppstår?" | 🟢 | betygsatt FAQ-titel |

**Median-check (§1.4) — ⚠️ FÖRSTA BEKRÄFTADE MISSEN (modellen nu 10/11):** facit komplett (13:03-dumpen): 5🔴/1🟠/5🔵/3🟢 (n=14) → median 🔵 = SLIGHT, men sidnivån = 🟠 MODERATE. Enda kvarvarande brasklapp: responsiva dubbletter syns inte i facit-vyn (men det gjorde de inte på de 10 träffarna heller). **NY MEDEL-HYPOTES (registrerad 2 jul em):** viktat medel (🟢=0 🔵=1 🟠=2 🔴=3) = 22/14 = **1,57 → avrundat mot värre = 🟠 ✓**; medel träffar också de 4 andra sidorna med kända counts: micro 1,44→🔵 ✓, porto 1,00→🔵 ✓, acne-rygg 1,38→🔵 ✓, sebo 1,25→🔵 ✓. **TODO (§9): räkna om de 6 äldre valideringssidorna (acne.php, acnebehandling, om-oss, ipl, behandla-pigment, hudforandringar) med medel-modellen — passar alla → §1.4 uppgraderas median→medel.** **Obetygsatt:** "Även känt som Åldrande hy Ålderstecken" (alias), rubrikerna "Äldre"/"Händer", "Från 5595 kr", FAQ-titlarna "Vad menas med termen…", "Vid vilken ålder…", "Hur påverkar hormonella…", "Vilken roll spelar genetik…", "Varför får man rynkor…". **Rewrite-ammo:** 2 grammatikfel live ("en genetiska anlag", "din åldrande") + 2 typos ("elasticitet.Hos", "huvårdsmål"); 🔴-blocken = långa definitioner/orsaksprosa med scaffolding-öppningar och fluff-svansar — mekanikinnehållet (kollagen, talg, platser) finns redan och kan bäras över i tätare form.

## /solskadad-hy.php — facit 23 Apr 2026, mottaget 2 jul em (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT, 3 dumpar t.o.m. FAQ-titlarna)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Om du har märkt av tecken på solskadad hy, såsom solfläckar eller förändrad hudtextur… boka en kostnadsfri konsultation…" | 🔵 | acknowledge + konkreta tecken + CTA-pivot (nyckel 5) trots "effektiva behandlingar" |
| "Även känt som Pigmentfläckar Pigmenteringar" | – | obetygsatt (alias-rad, dubblett-artefakt) |
| "Solskadad hud kännetecknas ofta av mörka fläckar, ojämn hudton, melasma och ibland förtjockad eller läderartad textur… vanligare hos äldre…" | 🟠 | konkreta tecken men demografisk svans |
| "På AcneSpecialisten erbjuder vi flera behandlingsalternativ… ljusbaserade behandlingar, kemiska peelingar och mikrodermabrasion… förbättra hudens övergripande utseende och hälsa" | 🔴 | namngivna metoder räddar inte generisk erbjudande-ram + vag svans |
| "0 2" | 🔵 | artefakt-block (siffror) — LYNX betygsätter det ändå |
| "Solskadad hud är vanligast på områden som ofta utsätts för sol… melanin, hudens naturliga färgämne… hudens åldrande bidrar också…" | 🔴 | mekanism+gloss finns men lång + "Ytterligare faktorer"-stapel (ackumulering, nyckel 4) |
| "För att förebygga solskadad hud är det kritiskt att använda solskydd med hög SPF… är också avgörande för att minska risken… förbättrar hudens totala utseende och hälsa" | 🔴 | importans-öppning ("kritiskt") + vag svans *(transkriptionsrättelse 2 jul: dumpen lästes fel som "kan också avgörande" — verklig text "är också avgörande" är korrekt svenska, INGET grammatikfel)* |
| "Solskadad hud är ett vanligt ålderstecken… påverkar ditt självförtroende… lämpligt att söka professionell hjälp… En hudterapeut kan även erbjuda rådgivning…" | 🔴 | hedge-stapel + importans, ingen mekanism (ipl-rosacea Inför-p2-mönstret) |
| "AcneSpecialisten utmärker sig som en föregångare inom hudvårdsbranschen… toppmoderna behandlingsmetoder… inte bara adressera… utan också förebygga…" | 🔴 | ren marknads-stapel + antites |
| "Behandlingar hos AcneSpecialisten… djupgående förståelse… senaste teknologin… avancerade metoder och högkvalitativa produkter… optimala resultat… dedikerat tillvägagångssätt…" | 🔴 | maximal marknads-/fluff-ackumulering |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil (samma betyg på alla sidor) |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |

**Räkning:** 6🔴/1🟠/3🔵/1🟢 (n=11). **§1.4-check:** MEDEL = (18+2+3+0)/11 ≈ **2,09 → 🟠 ✓** (sidnivå MODERATE); MEDIAN = 6:e av 11 = **🔴 ✗** — median MISSAR, medel träffar. **Obetygsatt:** alias-raden + 5 FAQ-titlar (Vad är solskadad hud… / Hur bokar jag… / Vilka behandlingar är mest effektiva… / Hur lång tid… / Kan alla hudtyper…). **Rewrite-ammo:** 6🔴 är alla marknads-/importans-tunga → stor de-AI-yta. *(Tidigare noterat "grammatikfel" var transkriptionsfel — texten är korrekt.)*

## /rhinophyma-rosacea.php — facit 22 Apr 2026, mottaget 2 jul em (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT, 4 dumpar t.o.m. FAQ)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| "Utforska vad som kännetecknar rhinophyma rosacea… kronisk inflammation och förtjockning av huden på näsan… potatisnäsa eller portvinsnäsa. Vi diskuterar varför…" | 🔵 | konkret definition + vardagsalias (potatisnäsa) bär trots "Utforska"-öppning |
| "Rhinophyma rosacea är en särskilt svår form… signifikant förtjockning och rödhet… ojämn, knölig yta… mer frekvent hos män, särskilt de som är mitt i livet eller äldre" | 🔴 | lång definition utan mekanism (ytliga/sebo-mönstret) + demografisk svans |
| "Orsaken till rhinophyma rosacea är genetisk… i allvarligare fall leda till andningssvårigheter… Här hittar du våra resultat i form av rosacea bilder på näsan." | 🔵 | orsak + konkret payoff + skylt; live-typo "genetiskto" **FIXAD 2 jul** |
| (Näsa) "Rosacea på näsan är en särskild och avancerad form… Detta tillstånd uppträder uteslutande på näsan och är känt för att gradvis förändra dess form…" | 🔴 | marknadsord + importans-svans *(transkriptionsrättelse 2 jul: meningen var HEL — dumpen lästes fel; enda felet var "Denna tillstånd", FIXAT 2 jul)* |
| "För att förstå ditt specifika tillstånd… är en konsultation med en hudterapeut nödvändig. En hudterapeut kan ge en personlig bedömning och rekommendera en behandlingsplan…" | 🔴 | konsult-boilerplate (dermapen-/micro-mönstret) |
| "Om du upplever några tecken… är det viktigt att omedelbart söka professionell hjälp. Tidiga stadier kan vara svåra att skilja… ignorera symtomen kan leda till att tillståndet förvärras" | 🔴 | importans-öppning + hedge |
| "En tidig konsultation hos en hudterapeut är avgörande… Ju tidigare… desto större är chansen… minska eventuella psykologiska påfrestningar… professionell rådgivning och behandling nyckeln…" | 🔴 | importans-stapel + lång + boilerplate-svans |
| "Om du söker en expert… är AcneSpecialisten det självklara valet. Med vårt engagemang för kvalitet och vår omfattande erfarenhet inom avancerad hudvård…" | 🟠 | ren marknad men kort → MODERATE (jfr bristningar-motsvarigheten som fick 🔵 MED 30-års-siffra) |
| "På AcneSpecialisten använder vi oss av de senaste och mest avancerade behandlingsmetoderna… minimera symptomen och förbättra både utseendet och funktionen…" | 🟠 | marknads-stapel men konkret mål-svans |
| "När du väljer att besöka AcneSpecialisten… inte bara tillgång till skräddarsydda behandlingsplaner, utan också en partner i din hudvårdsresa… holistisk behandlingsansats… bästa möjliga vård" | 🔴 | antites + partner/resa-boilerplate + fluff i båda ändar |
| "Vid ett personligt möte med en specialist på rosacea utförs en undersökning av din hud. Vi tar före-bilder… Läs mer om hudkonsultation" | 🔵 | konkreta vi-handlingar (före-bilder) — samma block 🔵 även på bristningar |
| "Från 1495 kr" / "Från 1995 kr" | – | obetygsatta prisrader |
| "För att effektivt behandla och förebygga rosacea är daglig behandling med rätt produkter avgörande. Våra rosacea-produkter är speciellt utformade…" | 🔴 | importans + "speciellt utformade" (§5-vokab), ingen konkretion |
| "Rosacea är en kronisk hudåkomma… Intense Pulsed Light (IPL) kan användas… minska rodnad och synliga blodkärl. Klicka här…" | 🔴 | namngiven metod räcker inte: staplade CTA:er + generisk ram |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |
| FAQ-rad "På vilka sätt skiljer sig rhinophyma från andra hudtillstånd som påverkar näsan?" | 🔵 | FÖRSTA gången FAQ-rader syns med egna betyg (även microderm + bristningar) |

**Räkning:** 8🔴/2🟠/5🔵/1🟢 (n=16). **§1.4-check:** MEDEL = (24+4+5+0)/16 ≈ **2,06 → 🟠 ✓**; MEDIAN = 8:e/9:e av 16 = 🟠/🔴-gränsfall → mot värre = **🔴 ✗** — median missar igen. **Rewrite-ammo:** tyngsta 🔴-ytan = konsult-/importans-boilerplate ×3 i rad. *(Språkfel FIXADE 2 jul: "genetiskto"→"genetisk", "Denna tillstånd"→"Detta tillstånd"; tidigare påstått "grammatikhaveri" i Näsa-blocket var transkriptionsfel.)*

**RE-SCAN "Last update: 06 Jul" (mottagen 7 jul, 4 dumpar) — SAMMA MÖNSTER SOM PIGMENTFLACKAR: gammal text, INTE ett EFTER-facit:** crawlen läste pre-wave-2-produktionen (2 jul 16:09 – 6 jul 16:08): blocken visar 2 jul-språkfixarna ("genetisk", "Detta tillstånd") men INTE V2-rewriten a98bd687 (grep: "mer frekvent hos män", "särskild och avancerad form", "det självklara valet" m.fl. finns inte kvar i filen). **Alla 16 block EXAKT samma tier som 22 apr-facitet ovan (8🔴/2🟠/5🔵/1🟢, block för block avstämt)** → determinism-replikation #4 — inkl. de 2 typo-fixade blocken som behöll sina tiers ("genetiskto"→"genetisk" i 🔵-orsaksblocket, "Denna"→"Detta" i 🔴-Näsa-blocket) ⇒ **rena typo-fixar flyttar inte betyg** (nu belagt på 2 sidor, 4 block). FAQ-raden "På vilka sätt skiljer sig…" fick 🔵 igen ✓. **V2:ns EFTER-facit väntar på NÄSTA refresh; prediktionen 🟠→🔵 står kvar omätt.**

## /microdermabrasion.php — facit 25 Jun 2026, mottaget 2 jul em (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| "MicroDermabrasion på AcneSpecialisten är en effektiv behandlingsmetod för att föryngra och vitalisera huden… slipa bort det yttersta lagret av döda hudceller… är framtagen för att kickstarta… övergripande kvalitet" | 🔴 | marknads-öppning + mekanism finns men lång + vilket-kedjor + svans (behandla-pigment-mönstret) |
| "MicroDermabrasion är en noggrant utformad behandling… skonsam men effektiv mekanisk exfoliering… inleds med en grundlig rengöring… Detta steg är viktigt för att förbereda huden" | 🔴 | marknadsord + importans-svans |
| "Nästa steg i processen är själva slipningen, där vi använder ett hudslipningsmunstycke… mikrokristaller och en diamantspets… främjar cellförnyelse och förbättrar hudens textur och lyster" | 🔵 | konkret process + namngivna verktyg (diamantspets) bär (nyckel 5, porto-mönstret) |
| "Efter exfolieringen appliceras specifika serum… hyaluronsyra, antioxidanter och vitaminer… lugnande mask och en återfuktande kräm för att maximera… skydda den från yttre påverkan" | 🔴 | konkreta ingredienser räddar inte: passiv + "maximera" + fluff-svans |
| "När du förbereder dig för din Microdermabrasion-behandling… är det viktigt att ta vissa steg… kostnadsfri konsultation… Vår prioritet är att du känner dig helt trygg…" | 🔴 | importans-öppning + konsult-boilerplate + trygghets-svans |
| "Efter en Microdermabrasion-behandling är det essentiellt att du följer våra eftervårdsinstruktioner… Det är viktigt att… skydda huden från solen… solskydd med hög SPF" | 🔴 | dubbel importans-öppning (essentiellt + viktigt) trots konkret SPF-slut (ipl-eftervårdsmönstret) |
| "Om du har några frågor eller behöver ytterligare rådgivning… alltid välkommen att kontakta oss… stödja dig i din resa mot en friskare och mer strålande hud" | 🟠 | kort kontakt-CTA men resa/strålande-svans |
| "Utöver Microdermabrasion jobbar vi även med HydraFacial som är en typ av HydroDermabrasion." | 🟢 | kort en-radare + namngiven behandling (nyckel 3) |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |
| FAQ-rad "Vad är de huvudsakliga fördelarna med Microdermabrasion jämfört med andra hudvårdsbehandlingar?" | 🔵 | FAQ-rad med eget betyg |

**Räkning:** 5🔴/1🟠/3🔵/2🟢 (n=11). **§1.4-check:** MEDEL = (15+2+3+0)/11 ≈ **1,82 → 🟠 ✓**; MEDIAN = 6:e av 11 = **🟠 ✓** — båda träffar. **Obetygsatt:** sektionsrubrik + 4 FAQ-titlar (Är microdermabrasion bra mot ärr? / Hur snabbt ser man resultat… / Är det säkert att göra… på regelbunden basis? / Kan… behandla specifika hudåkommor?). **Bevaka:** AIQ GOOD→OK-tråden (§9) fortfarande öppen — AI Overview-detaljen för sidan INTE levererad än.

## /hudproblem/bristningar/ — facit 22 Apr 2026, mottaget 2 jul em (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT + SCORE-breakdown i lynx-data)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Bristningar är linjer på huden som uppstår när huden tänjs ut snabbt. På den här sidan förklarar vi varför…" | 🔵 | rak definition + skylt |
| "Även känt som Striae Stretchmarks" | – | obetygsatt alias-rad |
| "Bristningar, vetenskapligt benämnda som striae… bindväv under huden tänjs ut över sin flexibilitetsgräns… kollagen och elastinfibrer… räfflad eller gropig…" | 🔴 | mekanism+gloss finns men MYCKET lång + staplade delresonemang (längd+ackumulering, nyckel 4) |
| "Bristningar, även kända som striae, uppstår när huden sträcks ut snabbare än vad den kan anpassa sig… Det finns flera anledningar… inklusive:" | 🔴 | upprepar förra blockets poäng + "flera anledningar"-lista-scaffold |
| (Åldre) "Bristningar skiljer inte mellan kön, ålder eller hudtyp; de kan påverka nästan vem som helst. Dock är vissa grupper mer benägna… kvinnor… graviditet… Ungdomar… puberteten…" | 🔴 | demografisk skal-öppning (hård 🔴-markör) trots konkreta exempel |
| (Kroppen) "Bristningar kan dyka upp på nästan vilken del av kroppen som helst, men det finns vissa områden… buken… graviditet… brösten… mjölkproduktion" | 🔴 | cirkulär öppning ("nästan vilken del som helst") + lång |
| "Vid ett personligt möte med en specialist på bristningar utförs en undersökning av din hy. Vi tar före-bilder… Läs mer om gratis hudkonsultation" | 🔵 | konkreta vi-handlingar (samma block 🔵 på rhinophyma) |
| "Bristningar är en av de vanligaste hudförändringarna som kan påverka både kvinnor och män, oavsett ålder. Även om de är helt ofarliga… överväga professionell behandling" | 🔴 | demografisk skal-öppning + hedge |
| "En hudterapeut kan bedöma svårighetsgraden… nya och röda eller gamla och ljusa… tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent…" | 🟠 | konkret mitt (röda/ljusa) men importans + boilerplate-svans |
| "Letar du efter en effektiv lösning för dina bristningar? AcneSpecialisten står som det självklara valet. Med mer än 30 års expertis… few eller omfattande…" | 🔵 | marknad MEN fråge-öppning + 30-års-SIFFRA + pivot → 🔵 (jfr rhinophyma-motsvarigheten UTAN siffra = 🟠 — siffran gör skillnaden, nyckel 3/5) |
| "Vi använder oss av de senaste behandlingsteknikerna för att effektivt reducera och eliminera… Vår passion, expertis och långa erfarenhet gör oss till det självklara valet…" | 🔴 | marknads-stapel + dubbla "självklara valet" |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |
| FAQ-rad "Vilka är de vanligaste områdena på kroppen som är mer benägna att utveckla bristningar?" | 🔵 | FAQ-rad med eget betyg |

**Räkning:** 6🔴/1🟠/5🔵/1🟢 (n=13). **§1.4-check:** MEDEL = (18+2+5+0)/13 ≈ **1,92 → 🟠 ✓**; MEDIAN = 7:e av 13 = **🟠 ✓** — båda träffar. **Obetygsatt:** alias-raden + 5 FAQ-titlar (graviditet / män och kvinnor / förändras utseende över tid / riskfaktorer / farliga eller skadliga). **Rewrite-ammo:** två nästan identiska definitionsblock (slå INTE ihop utan ägarbeslut — §13.D); "det självklara valet" ×2.

## /pigmentflackar.php — facit 22 Apr 2026, mottaget 2 jul 14:22 (MODERATE-vågen §8, KW244 = största kvarvarande sidan, EJ omskriven — FÖRE-facit; KOMPLETT, 5 dumpar t.o.m. FAQ)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| "Pigmentfläckar, inklusive åldersfläckar eller hyperpigmentering, beror på ökad produktion av melanin. På denna sida dyker vi djupare in i… översikt över behandlingsmetoder…" | 🟠 | melanin-mekanism direkt men meta-skylt-svans ("På denna sida…") |
| "Pigmentfläckar, kända som mörka hudfläckar… överproduktion av melanin, hudens naturliga pigment. Fläckarna kan variera i färg, storlek och form och kan finnas var som helst… påverka huden estetiskt och känslomässigt…" | 🔴 | definition + gloss räddar inte: "variera/var som helst"-cirkularitet + känslo-svans (lång definition utan kausal vandring) |
| "Pigmentfläckar eller pigmentförändringar uppstår när melanin produceras ojämnt… solskador, åldrande, hormonella obalanser eller vissa mediciner… kan bli permanenta om de inte behandlas korrekt" | 🔴 | orsakslista utan mekanism-vandring + hedge-svans |
| (Äldre) "…ett fenomen som inte begränsas till en viss ålder, kön eller hudton. Individer med mörkare hud… familjehistoria… Hormonella förändringar, som de som kan inträffa under graviditet…" | 🔴 | demografisk skal-öppning (hård 🔴-markör, samma som bristningar/acne-rygg) |
| (Händer) "Pigmentfläckar, eller hudfläckar, uppstår ofta i ansiktet… mörk fläck på överläpp, kinder och panna. Exponering för solen utan ordentligt skydd kan snabbt leda till…" | 🔵 | konkreta zoner (överläpp/kinder/panna) + rak orsak |
| "0 2" | – | HÄR obetygsatt (fick 🔵 på solskadad — artefakt-brus, ingen operativ betydelse) |
| "Pigmentfläckar kan orsakas av en mängd yttre faktorer som solens UV-strålning… Förståelsen för dessa faktorer är avgörande för…" | 🔴 | "en mängd yttre faktorer"-öppning + importans-svans; upprepar dessutom orsaksblocket ovan |
| "Färgen på en pigmentfläck kan avslöja mycket om dess orsak och typ. Bruna fläckar är ofta kopplade till… röda eller rosa kan indikera inflammation. Svarta… Blå eller grå…" | 🟠 | konkret färg-taxonomi men "kräver professionell bedömning"-hedge + katalogform utan mekanism |
| "Pigmentfläckar kan uppstå på olika delar av kroppen… Platsen kan ibland ge insikt i orsaken… Bedömning… baserat på område hjälper till att förstå underliggande faktorer och ger riktning för skräddarsydd behandling." | 🔴 | cirkulär öppning + "skräddarsydd"-svans (§5-vokab) |
| "Under en personlig konsultation med en specialist inom pigmenteringar… genomförs en detaljerad analys… Vi fotograferar de berörda områdena och går igenom dina mål…" | 🔵 | konkreta vi-handlingar (fotograferar) — samma mönster 🔵 på rhinophyma/bristningar (nu 3 sidor) |
| "Kemisk peeling är en beprövad metod som förnyar och förbättrar hudens yta… exfoliera och ta bort det yttersta hudlagret… Läs mer om kemisk peeling" | 🔴 | kort behandlingskort med MARKNADS-öppning ("beprövad… förnyar och förbättrar") utan pivot (v5 regel 2) |
| "Laserbehandling mot ojämn pigmentering använder precisa ljusstrålar för att bryta ned överdriven pigmentering… Läs mer om laser" | 🔵 | kort kort med MEKANISM-öppning (ljusstrålar bryter ned) — jfr kemisk-kortet: öppningen avgör även på 2-meningarskort |
| "Microneedling är en avancerad teknik som används för att behandla och förbättra hudens utseende… Läs mer om microneedling" | 🔴 | "avancerad teknik"-öppning, noll konkretion (acne laser-korts-mönstret) |
| "Pigmentfläckar, även kända som hyperpigmentering, kan visa sig på huden av olika skäl… estetisk olägenhet… är det dags att överväga behandlingsalternativ." | 🔴 | tredje repetitionen av orsaks-definitionen + "dags att överväga"-CTA-hedge; OBS live-språkfel "naturlig åldrande" |
| "Om du har fläckar som du redan vet är godartade men som du finner störande, kan en konsultation… Det bör noteras att på vår klinik behandlar vi endast estetiska aspekter…" | 🔵 | ärlig kosmetisk-ram + konkret pivot; OBS live-typo "AcneSpecialistem" |
| "Att välja rätt klinik… är avgörande för önskat resultat, och Acnespecialisten är verkligen en framstående aktör… skräddarsydda behandlingsplaner som speglar just dina specifika behov…" | 🟠 | marknads-stapel men "utbildats… identifiera och anpassa"-konkretion i mitten |
| "Kombinationen av vår omfattande erfarenhet och den senaste teknologin… garanterar att du får den mest effektiva och säkra behandlingen… finns det ingen bättre plats än Acnespecialisten." | 🟠 | garanterar/mest effektiva-marknad + "ingen bättre plats"-svans (kort nog att stanna 🟠) |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |

**Räkning:** 8🔴/4🟠/5🔵/1🟢 (n=18). **§1.4-check:** MEDEL = (24+8+5+0)/18 ≈ **2,06 → 🟠 ✓**; MEDIAN = 9:e/10:e av 18 = 🟠/🟠 = **🟠 ✓**. **Badge-mattem:** 🔵 kräver summa ≤26 → skala bort 11 poäng ≈ **5–6 🔴→🔵-fixar** (störst jobb av alla MODERATE-sidor — men KW244 = störst payoff). **Obetygsatt:** alias-raden, "0 2", "Solfläckar & åldersfläckar"-rubrik, 2 prisrader (Från 2595 kr), 6 FAQ-titlar (…fräknar?). **Rewrite-ammo:** live-typo "AcneSpecialistem"; "naturlig åldrande"; orsaks-definitionen upprepas i 3–4 block (siloing INOM sidan — slå ej ihop utan ägarbeslut, §13.D); kemisk-/microneedling-korten = billiga mekanism-öppningsfixar (laser-kortet är facit-mall).

**RE-SCAN "Last update: 06 Jul" (mottagen 7 jul, 6 dumpar) — GAMMAL TEXT OMANALYSERAD, INTE ett EFTER-facit:** omanalysen (som gjorde raden blank) kom tillbaka, men AI Copy-vyn läste PRE-WAVE-2-texten — grep-verifierat: "avancerad teknik", "På denna sida dyker vi djupare", demografi-öppningen m.fl. finns INTE i V2:an. **Crawlen DATERAD via git-arkeologi:** de scannade blocken innehåller 2 jul-språkfixarna ("naturligt åldrande", "AcneSpecialisten" — live på produktion från 2 jul 16:09 via PR #238) men INTE V2-rewriten (main-merge 1683f85d 6 jul 16:08) → **crawlfönster 2 jul 16:09 – 6 jul 16:08; "LYNX ser bara live" HÅLLER** (ingen staging-läcka). **Alla 18 block fick EXAKT samma tier som 22 apr-facitet ovan (8🔴/4🟠/5🔵/1🟢, block för block avstämt)** → determinism-replikation #3: en HEL 18-blockssida, NY scan (22 apr → 6 jul) på nästan samma text = identiska betyg — och de 2 typo-fixade blocken ("naturligt åldrande"-🔴:an, "AcneSpecialisten"-🔵:an) behöll sina tiers ⇒ **rena typo-fixar flyttar inte betyg** (samma fynd på rhinophyma nedan). Stärker (a) gamla facit gäller för orörd text, (b) betygsflytt = textändring, inte scan-brus. **Bekräftar också mätprincipen (lynx-score #0): "Last update" efter vår push ≠ EFTER-mätning.** **V2:ns EFTER-facit väntar på NÄSTA AI Copy-refresh (crawl efter 6 jul 16:08); FÖRE→EFTER-prediktionen (🟠→🔵) står kvar omätt.**

## /hudproblem/oonskat-har/ — facit 29 Apr 2026, mottaget 2 jul 14:22 (MODERATE-vågen §8, sista facit-luckan — vågen nu KOMPLETT 7/7; EJ omskriven — FÖRE-facit)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| Banner "Oönskat hår kan påverka olika delar av kroppen och ansiktet. Denna sida utforskar de underliggande orsakerna… och de olika metoder som finns tillgängliga för hårborttagning." | 🔵 | kort + rak skylt |
| "Oönskat hår är oftast normal, kliniskt känt som hirsutism… Det kan variera i textur från mjukt och fjunigt till grovt och tjockt… ben, armar och underarmar… ansiktet, ryggen eller bröstet." | 🟠 | fack-gloss (hirsutism) + konkreta zoner men lång + "variera"-katalog; OBS live-grammatikfel "är oftast normal" |
| "Oönskat hår uppstår av en mängd olika skäl, både genetiska och hormonella (PCOS). Hårväxt regleras till stor del av hormoner… snarare en genetisk benägenhet…" | 🔴 | "en mängd olika skäl"-öppning + hedge-avslut (trots PCOS-konkretion — gradient: fluff i båda ändar) |
| "Oönskat hår kan drabba människor av alla kön och åldrar… Till att börja med är genetik… Hormonella förändringar spelar också en avgörande roll… graviditet, klimakteriet…" | 🔴 | demografisk skal-öppning + "spelar en avgörande roll" (§5-vokab); OBS trasig sista mening ("När östrogennivåerna sjunker och påverkan… kan bli mer framträdande") |
| (Kroppen) "Oönskat hår kan växa på nästan vilken del av kroppen som helst. Ett av de vanligaste områdena… ansiktet. Detta omfattar överläppen, kinderna, hakan och området mellan näsan." | 🟠 | cirkulär öppning men konkreta zoner direkt (gradient → 🟠); OBS trasig fras "området mellan näsan" |
| "Vid ett personligt möte med en hårborttagningsspecialist utförs en undersökning… Vi rekommenderar en lämplig laserbehandling, samt skräddarsyr en behandlingsplan… Läs mer om gratis konsultation" | 🔵 | konkreta vi-handlingar — mönstret nu belagt på 4 sidor (rhinophyma/bristningar/pigmentflackar/oonskat-har) |
| "Avancerad laserbehandling… Lasertekniken riktar sig mot hårstråets melanin, vilket förstör hårsäcken och förhindrar framtida hårväxt. Läs mer om laser" | 🔵 | mekanism (melanin→hårsäck) bär trots "Avancerad"-öppning (nyckel 5: konkretion direkt) |
| "Att bli av med oönskad hårväxt kan vara en utmaning som påverkar självkänslan negativt. Många förlitar sig på tillfälliga lösningar som rakning eller vaxning… inaktiverar hårfolliklarna med ljusenergi…" | 🔴 | känslo-skal-öppning + lång trots mekanism-slut *(transkriptionsrättelse 2 jul: "hårfolliklarna" är korrekt stavat i filen — inget stavfel)* |
| "Att välja professionell hjälp… är ett viktigt steg mot förbättrad självbild och välbefinnande… inte bara en investering i ditt utseende utan även i din livskvalitet… Det är avgörande att välja en erfaren specialist… optimala och tillfredsställande resultat." | 🔴 | importans + antites + marknads-svans (full stapel) |
| "AcneSpecialisten är en pålitlig partner när det kommer till… de senaste teknologierna… toppmodern behandling med personlig service… uppnå en slät och hårfri hud…" | 🔴 | "när det kommer till" (§5-vokab) + marknads-stapel; OBS trasig mening ("Vår erfarenhet och användning av… för att du ska få…" — verb saknas) |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |
| FAQ-rad "Vilka är de mest effektiva professionella behandlingarna för att permanent minska oönskat hår?" | 🟢 | FÖRSTA 🟢 HUMAN på en FAQ-rad (tidigare 🔵 ×3 sidor) |

**Räkning:** 5🔴/2🟠/4🔵/2🟢 (n=13). **§1.4-check:** MEDEL = (15+4+4+0)/13 ≈ **1,77 → 🟠 ✓**; MEDIAN = 7:e av 13 = **🟠 ✓**. **Badge-mattem:** 🔵 kräver summa ≤19 → skala bort 4 poäng ≈ **2 🔴→🔵-fixar** (näst billigast efter mogen-hy). **Obetygsatt:** sektionsrubriker, prisrad (Från 995 kr), 4 FAQ-titlar. **Rewrite-ammo:** 4 live-språkfel **ALLA FIXADE 2 jul** (trasig hirsutism-mening, "området mellan näsan"→"runt näsan", östrogen-meningen, verblös partner-mening + "dina individuella hår och hudtyp"→"din individuella hår- och hudtyp"). *("hårfollikelarna" var transkriptionsfel — stavningen var redan korrekt.)*

*(§1.4-konsolideringen, MODELLANALYS 2 juli (A–D) och blindtest 3 + 4 → `lynx-examples-arkiv.php`. Allt ratificerat: §1.4-gråzonen och v5-gradienten står i `lynx-rewrite`; §1.2 i `lynx-models` (härledningen i `lynx-score`).)*

## Rewrite-resultat (fyll på efter LYNX-refresh — validerar/finjusterar modellen)
| Sida | Block | Före | Efter (ny LYNX) | Vad vi ändrade | Datum |
|---|---|---|---|---|---|
| ipl-rosacea.php | 7 block (5🔴+2🟠 av 11); desc-p2, Inför-p1/p2, Process-p2/p3, Eftervård-p1/p2 | 🔴/🟠 | *(LIVE 1 juli; väntar LYNX-refresh — status: `lynx-models` §11.1)* | de-AI: öppningar→mekanism/aktiv imperativ, antites "inte bara X utan Y"/marknadssvans/importans/passiv bort; 3 interna länkar + sökord behållna. Workflow-predikt (15 agenter): **alla 7 → SLIGHT**, sidnivå-median → SLIGHT (§1.4). A/B: bryter AI STYLE-taket 25? | 2026-07-01 |
| *(fler fylls i när resultat kommer)* | | | | | |
