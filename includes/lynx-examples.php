<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX AI COPY — exempel-korpus (per block, sida + datum)

> Växande samling av LYNX per-block-facit. Varje bedömt stycke bidrar till helhetsbilden av bedömningsmodellen (§1.1 i `includes/lynx-copy-playbook.php`). **Fyll på** med nya facit (sida + datum). När vi skrivit om ett block och fått ny LYNX-refresh: logga **före→efter** längst ned så vi validerar och finjusterar modellen. Snippets är förkortade — full text finns i sidans `.php` / git-historik.
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

## /acne-ansikte.php — 22 Apr 2026 (SIGNIFICANT — sidan vi skriver om)
| Block (snippet) | Betyg | Varför |
|---|---|---|
| Banner "Att ha akne i ansiktet kan vara både påfrestande… Men du är inte ensam… På denna sida kommer vi utforska" | 🔴 | empati + meta |
| "Akne i ansiktet är en vanlig hudåkomma som påverkar miljontals…" | 🔴 | skal-öppning |
| "Akne i ansiktet orsakas av flera faktorer som samverkar…" | 🔴 | fyllnadsöppning |
| "Plötslig akne i ansiktet kan vara både frustrerande… Det finns flera faktorer…" | 🔴 | empati + fyllnad |
| "Att leva med svår akne kan vara extremt påfrestande både fysiskt och känslomässigt…" | 🔴 | empati-utfyllnad |
| "Akne i ansiktet kan uppträda på flera olika sätt, beroende på typ…" | 🔴 | cirkulär |
| "När det kommer till att behandla akne i ansiktet… ingen universallösning" | 🟠 | fyllnad + en nugget |
| "Daglig behandling med rätt produkter är avgörande…" | 🔵 | kort produktblock |
| Omdöme "Hade testat allt innan…" | 🔵 | omdöme |
| Omdöme "Super fin personal…" | 🟢 | omdöme + detalj |

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

### /behandla-pigmentflackar.php — 25 Apr 2026 (SIGNIFICANT/EXTREME-tung)
| Block (utdrag) | LYNX (rå) | Min gissning | Träff |
|---|---|---|---|
| Banner "Vi erbjuder **de mest effektiva metoderna** … boka en kostnadsfri hudkonsultation" | 🔵 SLIGHT | 🔴 ~80 | ❌ övergissning |
| $about-1 "Att behandla … **kräver noggrannhet och expertis**. Vi använder **de mest effektiva och moderna** metoderna …" | 🔵 SLIGHT | 🔴 ~75 | ❌ övergissning |
| $about-2 "Under konsultationen … bestämmer **den bästa åtgärden** …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| $about-3 "Genom hela behandlingsprocessen … **dedikerade team** … **bästa möjliga vården** …" | 🔴 SIGNIFICANT | 🔴 | ✓ |
| $define "För att kunna hjälpa dig … **är det viktigt att** vi förstår …" | 🔴 SIGNIFICANT | 🟠 ~60 | ~ undergissning |
| $treat "… **en rad olika metoder som är skräddarsydda** … **Dessa effektiva metoder** …" | 🔴 SIGNIFICANT | 🔴 ~70 | ✓ |
| IPL-kort "… **för att effektivt reducera** … **Vår noggranna behandling säkerställer** …" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Kemisk peeling-kort "Kemisk peeling **behandlar effektivt** …" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Laser-kort "Laserbehandling **är en mycket effektiv metod** … **avancerad laserteknologi** … **maximera resultatet** … **snabb och precis lösning**" | 🔴 SIGNIFICANT | 🔴 ~75 | ✓ |
| **Microneedling-kort** "… effektiv metod … **vilket** … **vilket** … Dessutom … **djupare penetration av aktiva ingredienser, vilket ytterligare** … (pigmentfläckar ×4)" | 🟥 **EXTREME** | 🟠 ~55 | ❌❌ stor miss |
| CryoPen-kort "… extrem kyla … **både effektiv och minimalt invasiv** … **snabb och precis lösning**" | 🔴 SIGNIFICANT | 🟠 ~55 | ❌ undergissning |
| Omdöme "Hade testat allt innan…" | 🔵 SLIGHT | — | ✓ |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 HUMAN | — | ✓ |

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

## /om-oss.php — 22 Apr 2026 (MODERATE-sida) — RÅDATA + v3-blindtestets facit
> "Om oss"-marknadsprosa. Betyg = LYNX-fakta. Denna sidas block var v3-blindtestets FÄRSKA testset (aldrig kört genom modellen före testet).

| Block (utdrag) | LYNX (rå) |
|---|---|
| "…under 30 år utvecklat en **unik och effektiv** fyrstegsmetod… **skräddarsydda** hudvårdsrutiner… ditt alternativ till hudläkare utan remiss" (5 mening) | 🟠 MODERATE |
| "AcneSpecialisten använder en fyrstegsmetod… gratis konsultation… reparera skadad hud… komplett lösning från diagnos till reparation" (3 mening, process) | 🔵 SLIGHT |
| "…omfattande lösning… personlig hudterapeut (PT)… **fotograferar vi din hud** för att jämföra framstegen" (×2 nära-dubbletter) | 🔵 SLIGHT |
| "…dedikerade till att ge dig en helhetslösning… beprövade metod… **inte bara** identifierar… **utan även**… skräddarsydd behandlingsplan" | 🟠 MODERATE |
| "**Sedan vår start 1994** har vi stolt hjälpt **flera hundra tusen** personer…" (siffra/historik) | 🔵 SLIGHT |
| "Varje specialist… certifierad hudterapeut med **SHR-godkänd** utbildning… **garanterar högsta möjliga kvalitet**… **mest effektiva och säkra**" | 🔴 SIGNIFICANT |
| "…förenar vi **årtiondens erfarenhet**… **de senaste innovationerna**… **inte bara**… **utan också**… **optimala resultat**" (4 mening, tung marknad) | 🔴 SIGNIFICANT |
| "…förstår vi vikten av tillgänglighet… tre kliniker: **Strandvägen, Södermalm, Sundbyberg**… **bästa möjliga vård**… skräddarsydd" (6 mening) | 🔴 SIGNIFICANT |
| "Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter." (1 mening, CTA) | 🔵 SLIGHT |
| Omdöme "Hade testat allt innan…" | 🔵 SLIGHT |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 HUMAN |

**Facit-signaler (tolkning):** (a) **siffra/historik** ("Sedan 1994… hundra tusen") håller ett annars marknads-block på 🔵. (b) **Konkret credential rescuear INTE** ("SHR-godkänd" → ändå 🔴 pga "garanterar högsta möjliga/mest effektiva"-svans). (c) **Namnger 3 kliniker men LÅNG + marknad → 🔴** (längd dominerar över namn-konkretionen — bekräftar v3). (d) process-block utan marknads-svans = 🔵.
**AI QUESTIONS (FAQ, för Fas 2):** Hur länge har AcneSpecialisten funnits? · Vad erbjuder AcneSpecialisten? · Kan alla besöka AcneSpecialisten? · Är ni hudläkare? · Vad gör AcneSpecialisten unikt?
**v3-BLINDTEST-RESULTAT (om-oss, 3 agenter, ofuskat): 4/11 exakt, 11/11 inom ±1.** v3 ÖVERkorrigerade: O01–O05 gissades ETT steg för hårt (SLIGHT→MODERATE, MODERATE→SIGNIFICANT); O09 (CTA "Boka…") + O10 (generiskt omdöme) gissades HUMAN men var SLIGHT. Rätt: O06/O07/O08 (SIGNIFICANT), O11 (HUMAN). **Lärdom: exakt tier = brus, ±1 = signalen (97% över båda testen); v3:s längd-push för aggressiv + "kort→HUMAN" för generös → v4 (playbook §1.3). Vi slutar mikro-tuna per sida (v2↔v3 pendlade = overfit).**

## SCORE-modellen — fakta + reverse-engineering (2026-07-01, workflow)
**LYNX = internt/bespoke verktyg** (finns ej publikt; buntar tre dokumenterade koncept). Googles E-E-A-T är ett rater-ramverk, INTE en publik metrik → LYNX-siffran är en proxy.

**Aggregering (validerat 5/5): Overall ≈ CONTENT QUALITY × E-E-A-T × AI STYLE / ~3640** (MULTIPLIKATIVT). Bevis: hudforandringar Overall 17 < lägsta block (25). CQ = medel av 5 subs, EEAT = medel av 4 subs. AI STYLE = multiplikativ faktor (0,25–0,30), ej cap (ipl-rosacea = 39 med AI 25). ⚠️ AI STYLE varierar bara 25↔30 → uppsidan otestad; acne.php = A/B-test.

**Komponentfakta (hur höja):**
- **Base Quality** — people-first, svara på sökintentionen tidigt, ingen dublett/thin.
- **Depth** (acne 77, skydda) — täck ämnet end-to-end, H2/H3, intern silo-länkning; djup = fokus, ej padding.
- **Evidence** (acne **11**, svagast) — evidens-densitet: siffror, tidsramar, namngivna källor/maskiner, datum, credentials. Störst headroom. **(Filtrera genom §5 — se playbook §1.2: klinik-fakta, ej medicinska citat.)**
- **Language** — grammatik/naturlig röst (komma-tell).
- **Readability** — Flesch 60+ (korta meningar, enkla ord). ⚠️ spänning mot AI STYLE: variera LÄNGD men håll ORDEN enkla.
- **Experience** — förstahands: äkta före/efter, hur en behandling känns, omdömen.
- **Expertise** — namngiven granskare/credentials (widget: specialister, SHR).
- **Authority** — mest off-page (backlänkar); on-page: cert/affiliationer + topical cluster.
- **Trust** (viktigast) — HTTPS, riktig företagsinfo, ärliga claims (ej garantera resultat = YMYL-flagga).
- **AI STYLE / Human-like** (acne **30**) — = AI-detektorernas invers: PERPLEXITY (ordval-oförutsägbarhet) + BURSTINESS (meningslängds-variation). Höj: variera meningslängd, döda filler, konkreta detaljer/anekdoter, mindre komma-täthet. = vår de-AI-omskrivning.

Evidence + AI STYLE förstärker varandra (cit. siffror + klinik-anekdoter lyfter båda + Experience/Trust). ~20 källor loggade i workflow-outputen. Full härledning + marginalmatte: playbook §1.2.

## Sidnivå ↔ block-nivå: MEDIAN-hypotesen (reverse-engineerat 2026-07-01)
LYNX sidnivå-AI COPY (Pages-listan) vs vår per-block-facit. **Hypotes: sidnivå = MEDIAN-tiern av alla renderade block** (sorterat 🟢→🟥; responsiva dubbletter räknas; gränsfall rundar uppåt). Validerat **6/6**:

| Sida | 🟥 | 🔴 | 🟠 | 🔵 | 🟢 | n≈ | median | LYNX sidnivå |
|---|---|---|---|---|---|---|---|---|
| acne.php | 0 | ~10 | 1 | ~11 | ~3 | 25 | 🔵 | SLIGHT ✓ |
| acnebehandling | 0 | 3 | 0 | 7 | 2 | 12 | 🔵 | SLIGHT ✓ |
| om-oss | 0 | 3 | 2 | 6 | 1 | 14* | 🟠 | MODERATE ✓ |
| hudbehandlingar/ipl | 0 | ~7 | ~5 | 2 | ~5 | 19 | 🟠 | MODERATE ✓ |
| behandla-pigment | 1 | 8 | 0 | 3 | 1 | 13 | 🔴 | SIGNIFICANT ✓ |
| hudforandringar | 0 | ~7 | 0 | ~4 | 1 | 12 | 🔴 | SIGNIFICANT ✓ |

*om-oss: responsiva dubbletter (O07/O08 ×2) räknas → median landar på 🟠-sidan av 🔵/🟠-gränsen.
**Slutsats:** sidnivån = MEDIANEN, inte max eller snitt (snitt föll fel: acne.php snitt ~1,7 → skulle bli MODERATE, men facit = SLIGHT; median 🔵 stämmer). Konsekvens: sänk sidnivån genom att flytta medianen (playbook §1.4). Validera vidare när fler sidor får facit.

## Blindtest av prediktionsrubriken — 2026-07-01 (ofuskat: 3 färska agenter, betyg dolda)
24 block (balanserat över 5 tiers, 5 sidor), agenterna fick BARA texten + rubriken (§1.3), scoring i script mot dold facit.
- **Resultat: 16/24 exakt (67%), 23/24 inom ±1 tier.** Agent 1/2/3 = 16/16/17 exakt — reproducerbart.
- **Konfidens kalibrerad:** träffar conf ~75–96, missar ~52–68 → lita ≥75, flagga <65.
- **Missar (mönster = längd underviktad):** B02 (lång IPL-gloss + "särskilt effektiv"-svans → agenter SLIGHT, facit SIGNIFICANT; enda 2-stegs-missen); B10/B15/B20 (eftervård underskattad); B19 (lång marknads-banner → SIGNIFICANT); B11 (kort direkt instruktion → HUMAN, ej SLIGHT); B06 EXTREME → SIGNIFICANT (granne).
- **Åtgärd:** rubriken skärpt till v3 (§1.3) — längd + ackumulering väger tyngre; validera på NÄSTA färska sida (ej re-run på samma 24 = overfit).

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
| "För att förebygga solskadad hud är det kritiskt att använda solskydd med hög SPF… kan också avgörande för att minska risken… förbättrar hudens totala utseende och hälsa" | 🔴 | importans-öppning ("kritiskt") + vag svans; OBS live-grammatikfel "kan också avgörande" (saknar "vara") |
| "Solskadad hud är ett vanligt ålderstecken… påverkar ditt självförtroende… lämpligt att söka professionell hjälp… En hudterapeut kan även erbjuda rådgivning…" | 🔴 | hedge-stapel + importans, ingen mekanism (ipl-rosacea Inför-p2-mönstret) |
| "AcneSpecialisten utmärker sig som en föregångare inom hudvårdsbranschen… toppmoderna behandlingsmetoder… inte bara adressera… utan också förebygga…" | 🔴 | ren marknads-stapel + antites |
| "Behandlingar hos AcneSpecialisten… djupgående förståelse… senaste teknologin… avancerade metoder och högkvalitativa produkter… optimala resultat… dedikerat tillvägagångssätt…" | 🔴 | maximal marknads-/fluff-ackumulering |
| Omdöme "Hade testat allt innan…" | 🔵 | stabil (samma betyg på alla sidor) |
| Omdöme "Super fin personal… 2-3 år…" | 🟢 | stabil |

**Räkning:** 6🔴/1🟠/3🔵/1🟢 (n=11). **§1.4-check:** MEDEL = (18+2+3+0)/11 ≈ **2,09 → 🟠 ✓** (sidnivå MODERATE); MEDIAN = 6:e av 11 = **🔴 ✗** — median MISSAR, medel träffar. **Obetygsatt:** alias-raden + 5 FAQ-titlar (Vad är solskadad hud… / Hur bokar jag… / Vilka behandlingar är mest effektiva… / Hur lång tid… / Kan alla hudtyper…). **Rewrite-ammo:** grammatikfel "kan också avgörande" (saknar "vara"); 6🔴 är alla marknads-/importans-tunga → stor de-AI-yta.

## /rhinophyma-rosacea.php — facit 22 Apr 2026, mottaget 2 jul em (MODERATE-vågen §8, EJ omskriven — FÖRE-facit; KOMPLETT, 4 dumpar t.o.m. FAQ)
| Block (snippet) | Betyg | Varför (tolkning) |
|---|---|---|
| "Utforska vad som kännetecknar rhinophyma rosacea… kronisk inflammation och förtjockning av huden på näsan… potatisnäsa eller portvinsnäsa. Vi diskuterar varför…" | 🔵 | konkret definition + vardagsalias (potatisnäsa) bär trots "Utforska"-öppning |
| "Rhinophyma rosacea är en särskilt svår form… signifikant förtjockning och rödhet… ojämn, knölig yta… mer frekvent hos män, särskilt de som är mitt i livet eller äldre" | 🔴 | lång definition utan mekanism (ytliga/sebo-mönstret) + demografisk svans |
| "Orsaken till rhinophyma rosacea är genetiskt… i allvarligare fall leda till andningssvårigheter… Här hittar du våra resultat i form av rosacea bilder på näsan." | 🔵 | orsak + konkret payoff + skylt; OBS live-grammatikfel "är genetiskt" (→ genetisk) |
| (Näsa) "Rosacea på näsan är en särskild och avancerad form… Denna tillstånd uppträder utvecklas på näsan är ett fall där ett gradvis förändra dess form…" | 🔴 | marknadsord + TRASIG mening (live-grammatikhaveri) + importans-svans |
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

**Räkning:** 8🔴/2🟠/5🔵/1🟢 (n=16). **§1.4-check:** MEDEL = (24+4+5+0)/16 ≈ **2,06 → 🟠 ✓**; MEDIAN = 8:e/9:e av 16 = 🟠/🔴-gränsfall → mot värre = **🔴 ✗** — median missar igen. **Rewrite-ammo:** 2 live-grammatikfel ("är genetiskt", trasiga meningen i Näsa-blocket); tyngsta 🔴-ytan = konsult-/importans-boilerplate ×3 i rad.

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
| "Att bli av med oönskad hårväxt kan vara en utmaning som påverkar självkänslan negativt. Många förlitar sig på tillfälliga lösningar som rakning eller vaxning… inaktiverar hårfollikelarna med ljusenergi…" | 🔴 | känslo-skal-öppning + lång trots mekanism-slut; OBS live-stavfel "hårfollikelarna" |
| "Att välja professionell hjälp… är ett viktigt steg mot förbättrad självbild och välbefinnande… inte bara en investering i ditt utseende utan även i din livskvalitet… Det är avgörande att välja en erfaren specialist… optimala och tillfredsställande resultat." | 🔴 | importans + antites + marknads-svans (full stapel) |
| "AcneSpecialisten är en pålitlig partner när det kommer till… de senaste teknologierna… toppmodern behandling med personlig service… uppnå en slät och hårfri hud…" | 🔴 | "när det kommer till" (§5-vokab) + marknads-stapel; OBS trasig mening ("Vår erfarenhet och användning av… för att du ska få…" — verb saknas) |
| Omdöme 1 | 🔵 | stabil |
| Omdöme 2 | 🟢 | stabil |
| FAQ-rad "Vilka är de mest effektiva professionella behandlingarna för att permanent minska oönskat hår?" | 🟢 | FÖRSTA 🟢 HUMAN på en FAQ-rad (tidigare 🔵 ×3 sidor) |

**Räkning:** 5🔴/2🟠/4🔵/2🟢 (n=13). **§1.4-check:** MEDEL = (15+4+4+0)/13 ≈ **1,77 → 🟠 ✓**; MEDIAN = 7:e av 13 = **🟠 ✓**. **Badge-mattem:** 🔵 kräver summa ≤19 → skala bort 4 poäng ≈ **2 🔴→🔵-fixar** (näst billigast efter mogen-hy). **Obetygsatt:** sektionsrubriker, prisrad (Från 995 kr), 4 FAQ-titlar. **Rewrite-ammo:** 4 live-språkfel ("är oftast normal", "området mellan näsan", östrogen-meningen, "hårfollikelarna" + trasig partner-mening) — ovanligt mycket trasig svenska på denna sida.

## §1.4-KONSOLIDERING efter 2 jul em-leveranserna (6 nya MODERATE-facit: 13:41- + 14:22-dumparna)
> ⚠️ **KORRIGERAD av modellanalysen samma dag (nästa sektion):** "medel 11/11" nedan gällde bara de NYA kompletta faciten — omräkningen av de 6 äldre sidorna fällde medel på 3 av dem. Läs nästa sektion för gällande läge (medel 14/17, median 14/17, disjunkta missar).

**MEDEL-modellen träffar 6/6 nya** (microderm 1,82→🟠 ✓ · bristningar 1,92→🟠 ✓ · rhinophyma 2,06→🟠 ✓ · solskadad 2,09→🟠 ✓ · pigmentflackar 2,06→🟠 ✓ · oonskat-har 1,77→🟠 ✓); **MEDIAN missar 2** (solskadad 🔴 ✗, rhinophyma gränsfall→🔴 ✗). **Avrundningsregeln preciserad av nya datan:** "avrunda mot värre" = STANDARDAVRUNDNING där exakt ,5 rundar uppåt — 2,06/2,09 rundar NED till 🟠 (tak-tolkning/ceiling hade gett 🔴 ✗✗). **Sekundärt mönster (nu ≥3 sidor):** korta behandlingskort avgörs av ÖPPNINGEN — mekanism-öppning 🔵 (pigment-laser, oonskat-laser) vs marknads-öppning 🔴 (pigment-kemisk/micro, acne-laser) — redan kodifierat i §1.3 regel 2; "konkreta vi-handlingar"-konsultblocket = 🔵 på 4 sidor (rhinophyma/bristningar/pigmentflackar/oonskat-har).

## MODELLANALYS 2026-07-02 (ägar-beställd, före sidarbetet) — §1.4-konflikten, §1.2-bekräftelse, blindtest 5
**Uppdrag:** "kör en analys av våra modeller och se om den nya informationen lärt oss något" — systematisk test av §1.1–§1.5 mot ALLT 2 jul-data, inkl. den öppna §9-TODO:n (medel-omräkning av de 6 äldre sidorna).

### A. §1.4 — medel-omräkningen av de 6 äldre sidorna FÄLLER "medel 11/11"
Omräknat med exakta tabell-counts ur denna fil (🟢0/🔵1/🟠2/🔴3/🟥4, standardavrundning):
| Sida | Counts (🔴/🟠/🔵/🟢) | n | Medel | Medel-pred | Badge (facit) | Medel | Median |
|---|---|---|---|---|---|---|---|
| acne.php (inkl. 2 jul-tillägg) | 10/1/10/3 | 24 | 1,75 | 🟠 | 🔵 SLIGHT | ✗ | ✓ |
| acnebehandling | 3/0/7/2 | 12 | 1,33 | 🔵 | 🔵 SLIGHT | ✓ | ✓ |
| om-oss (utan/med resp. dubbletter) | 3/2/5/1 | 11–13 | 1,64–1,85 | 🟠 | 🟠 MODERATE | ✓ | ✓ |
| hudbehandlingar/ipl | 7/6/2/4 | 19 | 1,84 | 🟠 | 🟠 MODERATE | ✓ | ✓ |
| behandla-pigment (1🟥+8🔴/0/3/1) | — | 13 | 2,31–2,38 | 🟠 | 🔴 SIGNIFICANT | ✗ | ✓ |
| hudforandringar | 7/0/4/1 | 12 | 2,08 | 🟠 | 🔴 SIGNIFICANT | ✗ | ✓ |

**Ställning: MEDEL 14/17 · MEDIAN 14/17 — på DISJUNKTA missmängder.** Medel missar där badgen är extrem (acne.php 🔵, behandla-pigment/hudforandringar 🔴); median missar där badgen är mittig (mogen-hy/solskadad/rhinophyma 🟠). 1 jul-analysen hade alltså RÄTT i att förkasta snittet för sin data ("acne.php snitt 1,7 → MODERATE, facit SLIGHT") — och 2 jul-uppgraderingen hade rätt för SIN data. Båda generaliserade för snabbt.
**Killer-observationen:** hudforandringar medel **2,08 → 🔴** men solskadad **2,09 → 🟠** / pigmentflackar **2,06 → 🟠** / rhinophyma **2,06 → 🟠**. Nästan identiska medel, olika badge ⇒ **sidnivå-badgen är INTE en ren funktion av de betygsatta blockens tier-mix.** Testade alternativ som också faller: typvärde (ipl ✗), andel-🔴-tröskel (acne.php 40 % 🔵 vs om-oss 25 % 🟠 ✗), exkludera omdömen (acne.php/hudforandringar kvarstår ✗), ordlängds-viktning (fel riktning för acne.php ✗), ceiling-avrundning (fäller 4 nya ✗).
**Kandidat-förklaringar (oavgjorda):** (a) orapporterade betygsatta block — sebo-facitet visade att FAQ-SVAR kan bäras betyg; acne.php:s stora FAQ syns inte i dess facit-dump och ~12 st 🔵/🟢-FAQ-svar skulle ge medel ~1,4 → 🔵 ✓ (men samma hypotes FÖRVÄRRAR hudforandringar); (b) äldre counts approximativa ("~"); (c) analysdatum/LYNX-version skiljer badge- och blockdata åt. **Avgörande test (beställning till ägaren, §9):** kör FÄRSK analys på 1–2 sidor och skicka sidnivå-badge + KOMPLETT per-block-lista (inkl. expanderade FAQ-svar) ur SAMMA scan.
**Operativ konsekvens:** medel = bästa arbetsmodell för FÖRVÄNTAN (perfekt på färska kompletta facit), men (1) **1,9–2,4 är GRÅZON** (🟠 eller 🔴 båda observerade), (2) block-fix-räkningarna ("1 fix → 🔵") är ESTIMAT, inte garantier, (3) arbetsmängden per sida styrs av §7 (fixa alla 🔴/🟠), inte av modellen — modellen styr bara förväntan/prio.

### B. §1.2 — bristningar-nedbrytningen BEKRÄFTAR multiplikativa formeln på gammal-skala-analyser (6/6)
bristningar (Analyzed **78 days ago** = gammal skala): CQ ~52 × E-E-A-T ~50 × AI STYLE 25 / 3640 = **17,9 ≈ Overall 18 ✓** (transkription ± några enheter, träffen robust). → Multiplikativa modellen nu **6/6 på gamla analyser**, samtidigt som färska analyser passar medel(CQ,EEAT) (micro 50 ✓, porto 60 ✓). Stärker hypotesen: **LYNX bytte version/aggregering** — gamla analyser multiplikativa, färska ≈ medel utan AI STYLE. §1.2-testprotokollet (registrerat 2 jul) står oförändrat och avgörs av nästa färska breakdowns.

### C. §1.3 — BLINDTEST 5 (första ÄKTA out-of-sample: 20 block ur de 6 nya MODERATE-faciten, 1 färsk bedömare, v5-rubrik, facit dolt)
**Resultat: 11/20 exakt (55 %) · 18/20 inom ±1 (90 %)** — i nivå med regressionssetet (57–62 %) och KLART över semi-holdout-farhågan (38 %) → **v5 generaliserar; ingen regeländring behövs.** Binärt syfte-test (jobb 🔴/🟠 vs OK 🔵/🟢): 15/20.
Miss-mönster: **båda 2-stegsmissarna = UNDERgissade 🔴** (pigment kemisk-kortet: marknads-öppning på kort kort → agenten föll för kort→SLIGHT-defaulten trots regel 2; microderm serum-blocket: passiv "appliceras" + "maximera" + svans) — regeln finns, tillämpningen brast; båda hade konfidens ≤55 → **<65-flaggan fångar dem ✓**. 3 övergissningar på 🔵 (+1): rhino-intro ("Utforska…"-meta lästes för hårt), rhino-orsaken, solskadad-kännetecknas (−1 på 🟠). Kalibrering: 7 träffar hade konfidens ≥55, alla ≥70-gissningar (4 st) var träff eller ±1.
Facit-rådata: 1🔵✓ · 2🟠→SLIGHT · 3🔴→MOD · 4🔵→MOD · 5🟠→SIG · 6🔴✓ · 7🔵→MOD · 8🔵✓ · 9🟢✓ · 10🔴→SLIGHT❌2 · 11🟠→SIG · 12🔵✓ · 13🟠✓ · 14🔴✓ · 15🔵✓ · 16🔴→SLIGHT❌2 · 17🟠✓ · 18🔵✓ · 19🔵✓ · 20🟠→SIG.

### D. §1.1/§1.5 — bekräftelser + 1 nytt minimalpar (inget kodifieras nytt utöver §1.4-korrektionen)
- **Minimalpar "självklara valet" (3 sidor):** ytliga Artikel2 "Om du letar efter en effektiv och långsiktig lösning… det självklara valet" = 🔴 · rhinophyma-motsvarigheten utan siffra = 🟠 · bristningar "Letar du efter en effektiv lösning…? …självklara valet. Med mer än **30 års expertis**… få eller omfattande…" = 🔵. Nästan identisk öppning — siffran + konkretionen flyttar TVÅ steg → starkaste enskilda belägget för nyckel 3/5 hittills.
- Demografisk skal-öppning = 🔴 bekräftad ×3 nya (bristningar-åldre, pigment-äldre, oonskat-drabba); lång definition utan mekanism = 🔴 ×2 nya (pigment-mörka-hudfläckar, rhino-svår-form); kort kort avgörs av öppning ×4 sidor.
- §1.5: homepage = enda AIQ POOR-badgen, samtidigt AI COPY 🔵 och GAPS 0/0 → AIQ-badgen är OBEROENDE av AI COPY/GAPS (stödjer att AIQ aggregerar frågelistan, H6-familjen). Ingen ny frågedata → H1–H6 oförändrade.
- Betygsatta FAQ-RADER förekommer (🔵 ×3 sidor, 🟢 ×1) → räkna dem i n för §1.4-medel när de syns.

## Blindtest 3 — 2026-07-02 (Fable 5 + v4-rubrik → v5; ofuskat: 3 färska bedömare, betyg dolda)
37 block ur korpusen ovan (fulltext ur git `b017daf2` = pre-rewrite-versionen som LYNX betygsatte; 1🟥/13🔴/8🟠/10🔵/5🟢). Setet MEDVETET hårdladdat med kända fällor (fluff-svansar, kort+marknad, meta-scaffolding, mild-importans-instruktioner) — därför EJ rakt jämförbart med test 1 (67 % exakt på balanserat set). Bedömarna fick BARA v4-rubriken + blocktext + sid-/sektionskontext.

**Resultat:** bedömare 1/2/3 = 14/16/13 exakt (38/43/35 %), 33/32/31 inom ±1 (89/86/84 %). Konsensus (majoritet): 14/37 exakt, 32/37 ±1, 5 tvåstegs-missar. **Inter-bedömar-samstämmighet ~90 % → missarna är RUBRIK-systematik, inte brus (Fable 5 mycket reproducerbar → 1 bedömare räcker operativt, §7.4b).**

| # | Block | Facit | Konsensus | Träff |
|---|---|---|---|---|
| T01 | acne banner "Här förklarar vi…" | 🔴 | 🔵 | ❌2 meta-scaffolding saknades i v4 |
| T02 | dermapen eftervård-p1 "viktigt att hålla rent" | 🔵 | 🔴 | ❌2 mild importans i konkret block ska EJ lyfta |
| T03 | ipl Vad-är-IPL-p1 (gloss+`effektiv`-svans) | 🔴 | 🟠 | ±1 |
| T04 | om-oss 1994-historik | 🔵 | 🟠 | ±1 |
| T05 | ipl-rosacea desc-p2 (IPL ×6, "inte bara X utan Y") | 🔴 | 🟥 | ±1 stuffing ensam ≠ EXTREME |
| T06 | acnebehandling laser (mekanism-öppning) | 🔵 | 🔵 | ✓ |
| T07 | behandla-pigment microneedling | 🟥 | 🟠 | ❌2 stuffing ej räknad |
| T08 | acne-ansikte "Hur behandlar man" | 🟠 | 🔴 | ±1 |
| T09 | ipl eftervård-p3 (kort direkt) | 🟢 | 🔵 | ±1 |
| T10 | acne Varför (full mekanism-payoff) | 🔵 | 🟠 | ±1 |
| T11 | dermapen förberedelse-p1 (boilerplate+fluff-svans) | 🔴 | 🔴 | ✓ |
| T12 | ipl-rosacea Inför-p1 (konsult-boilerplate) | 🟠 | 🔴 | ±1 |
| T13 | ipl banner ("bästa… garanterar") | 🟠 | 🔴 | ±1 |
| T14 | acne omdöme generiskt ("var skeptisk…") | 🔵 | 🟢 | ±1 känslo-story ≠ personlig detalj |
| T15 | behandla-pigment banner (marknad+CTA-pivot) | 🔵 | 🟠 | ±1 kända fällan |
| T16 | om-oss SHR ("garanterar högsta…") | 🔴 | 🔴 | ✓ |
| T17 | dermapen "1000 kr"-rad | 🟢 | 🔵 | ±1 kort+siffra→HUMAN saknades i v4 |
| T18 | ipl-rosacea desc-p1 (kort gloss+mekanism) | 🔵 | 🟠 | ±1 |
| T19 | ipl eftervård-p1 ("avgörande… bästa") | 🔴 | 🔴 | ✓ |
| T20 | acne Vem (demografisk skal+importans) | 🔴 | 🟠 | ±1 |
| T21 | dermapen PRX (marknad-öppning+mekanism) | 🟠 | 🟠 | ✓ |
| T22 | acnebehandling kemisk peeling (marknad-öppning) | 🔴 | 🟠 | ±1 |
| T23 | acne-ansikte banner (empati+meta) | 🔴 | 🔴 | ✓ |
| T24 | ipl mini-kort ytliga ("Läs mer") | 🔵 | 🔵 | ✓ |
| T25 | acne pormaskar-definition | 🔵 | 🔵 | ✓ |
| T26 | ipl-rosacea Inför-p2 (importans+lång) | 🔴 | 🟠 | ±1 |
| T27 | om-oss intro | 🟠 | 🟠 | ✓ |
| T28 | ipl Vad-är-IPL-p2 ("mångsidig… en rad") | 🔴 | 🟠 | ±1 |
| T29 | acne omdöme "2-3 år" | 🟢 | 🟢 | ✓ |
| T30 | dermapen eftervård-p3 (CTA+"hudvårdsambitioner") | 🔴 | 🔵 | ❌2 fluff-svans på kort block saknades i v4 |
| T31 | dermapen förberedelse-p2 ("optimala resultat") | 🟠 | 🟠 | ✓ |
| T32 | ipl eftervård-p2 (konkret, lång) | 🟠 | 🟠 | ✓ |
| T33 | acne laser-kort ("avancerad… effektiv lösning", 2 men.) | 🔴 | 🔵 | ❌2 kort+marknad utan pivot saknades i v4 |
| T34 | ipl-rosacea maskin-rad (Alma-namn) | 🟢 | 🔵 | ±1 kort+namn→HUMAN saknades i v4 |
| T35 | acne Vad-är-akne (vad-det-är+gloss) | 🟠 | 🟠 | ✓ |
| T36 | dermapen eftervård-p2 (konkreta instruktioner) | 🔵 | 🔵 | ✓ |
| T37 | acne Noduler ">5 mm"-definition | 🟢 | 🔵 | ±1 kort+mått→HUMAN saknades i v4 |

**Mönster (→ v5, playbook §1.3):** (1) De 5 tvåstegs-missarna = v4-rubriken saknade §1.1-nyanser som redan var dokumenterade: meta-scaffolding-öppning, fluff-svans lyfter kort block, kort+tät marknad utan pivot → 🔴, mild importans i konkret instruktionsblock lyfter INTE, EXTREME kräver faktisk räkning. (2) Marknadstunga behandlingsblock undergissades genomgående ett steg → facit hårdare mot marknad än intuitionen; luta åt 🔴 på behandlingsprosa. (3) Alla korta 🟢-block (siffra/mått/maskinnamn/direkt instruktion) gissades 🔵 → v4:s "kort→SLIGHT, EJ HUMAN" var en överkorrigering av O09/O10; v5 återinför §1.1 nyckel 3 med siffra/namn-kravet. (4) Konfidens: tvåstegs-missarna låg ≤60 (utom en 75:a) → <65 = hämta facit. (5) Fable 5-reproducerbarheten gör §7.4b-verifieringen billigare: 1 bedömare i stället för panel.

## Blindtest 4 — 2026-07-02 (v5 + gradient; 2 bedömare; 37 regression + 16 semi-holdout)
Test av de förbättrade modellerna (ägar-beställt). Bedömarna fick v5-rubriken MED gradient + §1.1-nyckel-5-tilläggen.
- **Regression (samma 37 block som test 3): 21–23/37 exakt (57–62 %, upp från 35–43 % med v4), 33–34/37 ±1 (89–92 %).** 4 av 5 gamla konsensus-tvåstegsmissar FIXADE (T01 meta-scaffolding, T02 mild-importans-instruktion, T30 fluff-svans, T33 kort+marknad). T07 EXTREME kvarstår hos 1 av 2 (stuffing räknas fortfarande inte spontant).
- **Semi-holdout (16 EJ regel-citerade block från micro/porto/acne-rygg/sebo): 6/16 exakt (38 %), 14/16 ±1 (88 %).**
- **NY systematisk miss (bägge bedömare, 4 block): gradienten förlät för mycket.** T19 ipl-eftervård (staplade öppningsfraser "avgörande… bästa… effektiv"), T20 acne-demografi (skal-öppning + importans-svans), N05 sebo-orsaken (hedge-stapel + "spelar en viktig roll"), N16 micro-maskin (lång mekanism + marknads-svans) — alla predikterades 🔵 men facit 🔴. Mönster: **konkretion NÅGONSTANS räcker inte — fluffen ska räknas över hela blocket (öppning + svans).** → Gradienten skärpt i §1.3 (staplade öppningsfraser / fluff i båda ändar / lång+svans → 🔴; demografisk skal räddas aldrig).
- **Netto: mätbart bättre modell** (57–62 % vs 35–43 % exakt på identiskt set), och kvarvarande missar tillhör samma kända familj (ackumuleringsviktning), inga nya blinda fläckar. ±1-bandet stabilt. Nästa validering: första FÄRSKA facit-sidan (äkta out-of-sample, §1.3-doktrinen).

## Rewrite-resultat (fyll på efter LYNX-refresh — validerar/finjusterar modellen)
| Sida | Block | Före | Efter (ny LYNX) | Vad vi ändrade | Datum |
|---|---|---|---|---|---|
| ipl-rosacea.php | 7 block (5🔴+2🟠 av 11); desc-p2, Inför-p1/p2, Process-p2/p3, Eftervård-p1/p2 | 🔴/🟠 | *(väntar main-push + refresh)* | de-AI: öppningar→mekanism/aktiv imperativ, antites "inte bara X utan Y"/marknadssvans/importans/passiv bort; 3 interna länkar + sökord behållna. Workflow-predikt (15 agenter): **alla 7 → SLIGHT**, sidnivå-median → SLIGHT (§1.4). A/B: bryter AI STYLE-taket 25? | 2026-07-01 |
| *(fler fylls i när resultat kommer)* | | | | | |
