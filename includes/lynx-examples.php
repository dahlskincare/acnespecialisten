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

## Rewrite-resultat (fyll på efter LYNX-refresh — validerar/finjusterar modellen)
| Sida | Block | Före | Efter (ny LYNX) | Vad vi ändrade | Datum |
|---|---|---|---|---|---|
| ipl-rosacea.php | 7 block (5🔴+2🟠 av 11); desc-p2, Inför-p1/p2, Process-p2/p3, Eftervård-p1/p2 | 🔴/🟠 | *(väntar main-push + refresh)* | de-AI: öppningar→mekanism/aktiv imperativ, antites "inte bara X utan Y"/marknadssvans/importans/passiv bort; 3 interna länkar + sökord behållna. Workflow-predikt (15 agenter): **alla 7 → SLIGHT**, sidnivå-median → SLIGHT (§1.4). A/B: bryter AI STYLE-taket 25? | 2026-07-01 |
| *(fler fylls i när resultat kommer)* | | | | | |
