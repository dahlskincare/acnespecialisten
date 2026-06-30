# LYNX Copy Playbook — AcneSpecialisten

> Kanonisk arbetsfil för att skriva om sidor som LYNX flaggar för **AI COPY** (SIGNIFICANT/MODERATE) så de läser som människa, utan att tappa sökord eller ranking. Utgå alltid från den här filen — den är **självbärande och enda källan till sanning**; en ny Claude utan kontext ska kunna läsa den top-to-bottom och börja jobba (se §0.1 för parallellt arbete). Senast uppdaterad: 2026-06-30.

---

## 0. Så här använder vi filen
1. LYNX-info kommer in för en sida (AI COPY-block + ev. gap-punkter).
2. Skriv om de flaggade blocken enligt **Formeln** (§2) och **Husrösten** (§4).
3. Kör varje block mot **Checklistan** (§3) och **SEO-skyddet** (§6).
4. Logga vad som gjorts i **Arbetsloggen** (§9) med resonemang.
5. Efter LYNX-refresh: använd **Justeringsloopen** (§10).

Prioritet: **SIGNIFICANT först**, men gör hela sidan klar medan vi ändå är där.

---

## 0.1 Parallellt arbete (flera Claude samtidigt)
Filen är självbärande — en ny Claude utan kontext läser den top-to-bottom och kan börja. (Lokala personliga minnesfiler kan spegla samma sak, men lita inte på dem på andra datorer — den här filen gäller.)

Koordinationsregler så två instanser inte krockar:
1. **Läs hela filen + §11 (arbetslogg) + §12 (claims) först.** På annan dator: `git pull` innan du börjar.
2. **Claima sidan i §12 innan du rör den** (sida · terminal/namn · status). En sida = en ägare. Rör aldrig en sida någon annan claimat.
3. **Aldrig två instanser i samma fil samtidigt.** Fördela per sida — olika sidor är olika `.php`-filer.
4. **Rör inte delade widgets/mallar** (§6/§8) — påverkar alla sidor.
5. **Jobba på `staging`, små commits per sida.** Uppdatera §11 (vad/varför) + §12 (status) när du är klar; `git push` om ni är på olika datorer.
6. Följ §2–§6 exakt, så blir rösten enhetlig oavsett vem som skriver.

---

## 1. Hävstången (varför vissa sidor är SLIGHT och andra SIGNIFICANT)
Samma mall, samma ämne — ändå läser `acne.php` som människa (SLIGHT) och `acne-ansikte.php` som AI (SIGNIFICANT). Skillnaden är **informationstäthet**, inte längd, säljton eller komma-antal.
- SLIGHT öppnar med **vad tillståndet ÄR** (papler, gropar) och binder orsaken direkt.
- SIGNIFICANT öppnar med **tom skala** ("påverkar miljontals människor").

---

## 2. Formeln: **Krok → Mekanism → Skylt**
1. **Krok** — öppna med en *konkret komponent*, inte abstrakt skala. Första substantivet ska vara något läsaren kan se (papler, gropar, fläckar, "bacne"). Aldrig "Det finns flera…/Det är viktigt att…/När det kommer till…/påverkar miljontals…".
   - Ofta **fusera Krok + Mekanism** i mening ett (orsaken bunden på komponenten).
2. **Mekanism** — gå igenom orsaken steg för steg med kausala bindeord (*vilket leder till, på grund av, eftersom, vilket i sin tur, detta resulterar i*). Lägg minst **en taktil verb/bild eller inline-parentes-förklaring per begrepp** (t.ex. *kollagen (ett protein som håller huden elastisk)*, *"äter upp"*, *som en månkrater*). Täthet = bunden prosa, **aldrig** fet-etikett-punktlistor.
3. **Skylt** — avsluta intro med en konkret hänvisning till innehållet under, **varierad** mellan systerblock (aldrig samma "Här går vi igenom…" två gånger). Fråge-scaffolden (Vad/Varför/Vem/Var) kan själv vara skylten.

**Empati-lager (för tillståndssidor):** acknowledge-then-reassure + av-skamning ("oavsett ålder/kön") + mjuk genetik-hedge ("om… finns det en risk"). Mekanism + empati = tillståndssidans register.

**Puls:** bryt långa kausala meningar med en kort fristående sats (5–8 ord) minst en gång per sektion.

---

## 3. Checklista (kör varje block)
- [ ] Konkret komponent-öppning, inte tom skala/scensättning?
- [ ] Minst en mekanism bunden med kausalt bindeord?
- [ ] Minst en inline-gloss eller taktil bild per begrepp?
- [ ] Bunden prosa, **inte** `<ul><li><strong>Etikett:</strong>…`-inventering?
- [ ] Puls: en kort + en lång mening; inga 3 i rad i samma längd; ingen staccato?
- [ ] ≤1 korrelativ-komma per mening; inga 3+ hopkedjade bisatser; "och"-listor orörda?
- [ ] Inga staplade "kan"; ingen "[antal] olika [X]"-padding?
- [ ] Minst en verifierbar siffra/tidsram istället för superlativ? (pris med "Från")
- [ ] **Inga em-streck**; ingen svensk AI-vokabulär (se §5)?
- [ ] Kosmetiskt: inga medicinska/diagnos-påståenden, ingen hudcancer, inga aktiva ingredienser/organismer?
- [ ] Klinik-"vi", inga hudterapeutnamn?
- [ ] Stannar på sidans eget ämne; grannämnen löses med **länk**?
- [ ] **Sökorden bevarade** (se §6)?
- [ ] Skylt varierad mot systerblock; CTA är en "resa", inte "boka tid"?

---

## 4. Husrösten (grundad i våra egna SLIGHT-sidor)
**Sammanfattning:** Våra bästa sidor låter som en erfaren hudterapeut som förklarar akne för *en* orolig person över ett bord — inte ett varumärke som sänder till en marknad. Mening ett namnger något konkret och binder orsaken direkt. Mekanismen går steg för steg. Varje fackord får en vardaglig gloss på en gång. Rytmen andas (långa meningar bryts av korta). Värme via acknowledge-then-reassure. Alltid "vi"/"du", aldrig namngiven terapeut. Siffror bär trovärdigheten så texten slipper skryta.

### Signaturdrag (med riktiga exempel)
- **Fusera Krok+Mekanism i mening ett:** *"Akne består av bland annat papler och pustler, som är en ärftlig och hormonell hudsjukdom som uppstår när talgproduktionen i hudens porer ökar."* (acne.php:65)
- **Alias som apposition mellan komman:** *"Acneärr, även kallat postakne, är märken eller förändringar som blir kvar på huden efter att inflammationer från akne har läkt."* (acnearr.php:54)
- **Kausal payoff med pekare:** *"Kroppen försvarar sig då med en inflammation, och det är just detta som syns på huden i form av akne."* (acne.php:73)
- **Visceralt, citat-markerat verb:** *"den aggressiva fettsyran från finnarna som fräter ner och \"äter upp\" den omkringliggande huden."* (acnearr.php:63)
- **Inline-gloss av fackord:** *"kollagen (ett protein som hjälper till att hålla huden jämn och elastisk)"* (acnearr.php:64)
- **Sinnlig analogi istället för adjektiv:** *"ett oregelbundet utseende som en månkrater"* (acnearr.php:161)
- **Puls (lång → kort):** *"Ryggen är särskilt utsatt på grund av sin höga koncentration av talgkörtlar och stora porer. Detta gör den mer benägen att utveckla akne."* (acne-rygg.php:72)
- **Acknowledge-then-reassure:** *"Akne på ryggen, även kallad \"bacne,\" kan vara både frustrerande och smärtsamt."* (acne-rygg.php:57)
- **Baslinje-sen-men:** *"Huden behöver en viss mängd talg för att hålla sig mjuk och smidig, men vid överproduktion…"* (acne.php:65)
- **Av-skamning:** *"det spelar ingen roll om det är en tjej eller kille, kvinna eller man, alla kan drabbas."* (acne-brost.php:309)
- **"vilket i sin tur"-kedja:** *"…en ökning av mängden talg (olja) …, vilket i sin tur kan täppa till porerna och skapa en miljö där bakterier trivs."* (acne-brost.php:72)
- **Lär det okända via det kända (stödjer siloing):** *"Precis som ansiktsakne uppstår ryggakne när hårsäckarna täpps till…"* (acne-rygg.php:57)
- **Siffra bunden till handling, aldrig skryt:** *"På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla acneärr."* (acnearr.php:294)
- **Mjuk genetik-hedge:** *"Om dina föräldrar eller nära släktingar har haft problem med akne, finns det en risk att du också kan drabbas."* (acne-brost.php:74)

### Öppnings-bank (mallar)
- Komponent + bunden orsak: *"[Tillstånd] består av bland annat [synliga komponenter], som är en ärftlig och hormonell hudsjukdom som uppstår när [orsak]."*
- Alias-i-komman: *"[Term], även kallat [vardagsnamn], är [vad det är] som [uppstår/blir kvar] efter att [process]."*
- Känsla-först + smeknamn: *"[Tillstånd], även kallad \"[smeknamn],\" kan vara både frustrerande och [obehag]. Precis som [bekant variant] uppstår [tillståndet] när [mekanism]."*
- Baslinje-sen-men: *"Huden behöver [normal funktion] för att [nytta], men vid [störning] [problemet uppstår]."*
- Acknowledge-then-reassure: *"Oavsett ålder kan det vara en källa till obehag. Men med rätt kunskap och behandling går det att hantera och minska [tillståndet]."*

### CTA-stil
Aldrig bara "boka tid". Forma CTA:n som en resa med en namngiven vinst, och variera varje gång. Återkommande form = inbjudan + kostnadsfri konsultation + namngiven destination:
- *"Kontakta oss för en kostnadsfri konsultation och börja din resa mot en ärrfri och slät hud idag!"* (acnearr.php:86)
- *"Din resa med oss börjar med en kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall…"* (acnearr.php:286)
- Mitt-på-sidan-skyltar = konkreta vi-handlingar: *"Vi tar bilder och rekommenderar en skräddarsydd behandlingsplan…"* (acne-brost.php:137)

### Härma INTE
- Inte tunnheten/längden i de enkla HUMAN-sidorna (acne-myter, fragor-svar, ordlista, hudguide) — ta bara deras *ton*.
- Inte FAQ:ns ett-ords-verdikt ("Nej," / "Absolut,") i brödtext (blir staccato).
- Inte myter-sidans tvärsäkra "Detta är helt fel." eller refräng-trick i mekanism-prosa.
- Inte startsidans varumärkes-superlativ ("det självklara valet") på tillståndssidor — låna bara dess verifierbara siffror och vi-löften.

---

## 5. Låsta ramar (gäller alla sidor)
- **Kosmetiskt** — inga medicinska/diagnos-påståenden, ingen hudcancer, inget "sök läkare/medicinsk vård". (Att hänvisa till **vår klinik/hudterapeut** är OK — det är kosmetiskt/kommersiellt.)
- **Inga aktiva ingredienser eller namngivna organismer** (t.ex. inte "Cutibacterium acnes").
- **Kost minimal**, akne ramas som ärftlig/hormonell.
- **Inga em-streck** (uppfattas som ett AI-tell). Omformulera.
- Undvik svensk AI-vokabulär: *"spelar en avgörande roll", "i takt med att", "när det kommer till", "ta del av", "i en värld där", "maximera/optimera", "i dagens samhälle"*.
- **Klinik-"vi"**, aldrig hudterapeutens namn. **"Du"-tilltal.**
- **Siloing:** grannämne (t.ex. rosacea) → kort omnämnande + **intern länk** till den sidan, aldrig dubblerat innehåll.
- **Huvud- vs bonussidor:** huvudtermen bor på huvudsidan (t.ex. "akne"→acne.php, "pigmentfläckar"→pigmentflackar.php). Bonussidor håller sig till sin long-tail och tävlar inte om huvudtermen.
- **Siffror** bara om verifierbara på sidan eller internt bekräftade; pris med "Från".

---

## 6. ⚠️ SEO-skydd — bryt inte sökord/ranking
Sidorna rankar redan på sökord. Omskrivningen får höja kvaliteten **utan att ta bort signalerna som funkar**:
- **Bevara primärt sökord + viktiga varianter** i `$seo_title`, H1, H2:er och brödtext. Skriv aldrig bort sökordet ur sidan (t.ex. "akne i ansiktet" måste finnas kvar).
- **Rör `$seo_title` / `$seo_description` / `$seo_keywords` försiktigt** — om du ändrar, behåll sökordet och förbättra bara.
- **Ändra ALDRIG filnamn/URL** (dödar ranking + kräver redirect).
- **Radera inte hela sektioner** som bär rankande innehåll — komprimera prosan, behåll ämnestäckningen.
- **Behåll interna länkar, priser, boknings-URL:er och CTA-länkar.** Lägg till nya länkar (t.ex. rosacea) utan att ta bort befintliga.
- **Bara innehåll i sidans `.php`** — inga mall-/widget-ändringar (se §8 om widgets).
- **En sida i taget på `staging`**, granska `git diff` innan merge.
- **Verifiera efteråt:** LYNX-refresh + håll koll på ranking; logga i §9.

---

## 7. Arbetsprocess per sida
1. LYNX AI COPY-block + gap-punkter klistras in.
2. Identifiera primärt sökord + intent (bonus → long-tail).
3. Skriv om flaggade block enligt §2–§4, kör §3 + §6.
4. Lös gap-punkter inom ramarna (grannämne → länk; ingen medicin/cancer).
5. Logga i §9. Vänta på LYNX-refresh → §10.

---

## 8. Sidkarta & backlog (LYNX AI COPY)
**SIGNIFICANT (tung omskrivning, nu):**
- `acne-ansikte.php` — pågår (3 block klara)
- `ytliga-blodkarl.php` (KW172, störst)
- `behandla-pigmentflackar.php` (bonus, KW16)
- `hudproblem/hudforandringar/index.php` (hub)

**MODERATE (nästa våg):** `pigmentflackar.php` (KW244), `ipl-rosacea.php`, `rhinophyma-rosacea.php`, `microdermabrasion.php`, `mogen-hy.php`, `solskadad-hy.php`, `om-oss.php`, `hudbehandlingar/ipl/`, `hudproblem/bristningar/`, `hudproblem/oonskat-har/`, `seborroisk-keratos.php` (smalna fokus + curettage vs Laser/CryoPen).

**SLIGHT (mestadels klara):** majoriteten (`acne.php`, `acnearr.php`, `acne-rygg.php`, `acne-brost.php`, startsidan m.fl.) — lättputs vid behov; använd som röstreferens.

**Widget-bugg (PARKERAD):** 20 dubbla `title`-attribut i 5 service-card-widgets. Verklig men ofarlig (webbläsaren ignorerar dubbletten). Beslut: lämna delade widgets orörda för att inte introducera risk. Ta upp endast på begäran.

---

## 9. TODO (spåras även i task-listan)
- [~] #1 Färdigställ setup & denna playbook *(pågår)*
- [~] #2 `acne-ansikte.php` — 3 SIGNIFICANT-block klara; kvar nedan
- [ ] #3 `ytliga-blodkarl.php` — formel + rosacea→länk
- [ ] #4 `behandla-pigmentflackar.php` — formel
- [ ] #5 `hudforandringar/index.php` — formel + H1/titel-sökord
- [ ] #6 FAQPage JSON-LD (efter #2–5)
- [ ] #7 MODERATE-vågen (efter #6)
- [ ] #8 LYNX justeringsloop (löpande)
- [P] #9 Dubbel title-attribut (parkerad)

---

## 10. Justeringsloop (efter LYNX-refresh)
- **Fortf. SIGNIFICANT/MODERATE?** → ta nästa lager block (extended "Läs mer"-text, MODERATE-block), öka mekanism-/gloss-tätheten.
- **AI QUESTIONS fortf. OK (ej GOOD)?** → FAQ-innehåll + FAQPage-schema (#6).
- **PAGE TYPE/P. PRICE "-"?** → kommer av generiskt fallback-Product-schema utan Offer; separat schemaspår (sätt `$rich_product` per sida).
- **SLIGHT?** → klar, lättputs bara.
- Uppdatera §9 + denna fil när vi lär oss vad som flyttar nålen.

---

## 11. Arbetslogg (vad vi gjort + varför)
Korrelera mot LYNX-refresh. Senaste först.

### 2026-06-30 — `acne-ansikte.php` (SIGNIFICANT) — pågår
**Gjort:** Skrev om de 3 SIGNIFICANT intro-blocken (ProblemTrivia):
- rad 82 "Orsaker till plötslig akne", rad 101 "När du ska söka hjälp", rad 117 "Var i ansiktet akne uppstår".
- Block 3:s skylt varierad (tog bort upprepad "Här går vi igenom…").
**Varför:** Tog bort tomma öppningar + empati-utfyllnad, ledde med mekanism, band kausalt, bantade komman till idiomatiska, varierade pulsen. Sökordet "akne i ansiktet" + områdesvarianter bevarade.
**Kvar för 100%:** MODERATE-block (rad 141) · boilerplate "du är inte ensam" (rad 27 + 149) · ta bort organismen "Cutibacterium acnes" (rad 72) · pris "1595 kr" → "Från 1595 kr" (rad 220) · överväg fet-etikett-punktlistor → bunden prosa (rad 84–90, 103–109, 119–129, 143–147).

---

## 12. Pågående arbete / claims
Claima en sida här **innan** du rör den. Töm raden när den är klar (logga istället i §11). Detta är den delade "låsningen" mellan parallella Claude-sessioner.

| Sida | Ägare (terminal/namn) | Status | Tid |
|------|------------------------|--------|-----|
| acne-ansikte.php | huvudsession | SIGNIFICANT-block klara, resten kvar | 2026-06-30 |
