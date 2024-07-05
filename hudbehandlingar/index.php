<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
class Treatment
{
    public function __construct($label, $url, $url_title)
    {
        $this->label = $label;
        $this->url = $url;
        $this->url_title = $url_title;
    }
    public string $label;
    public string $url;
    public string $url_title;
}
class ServiceCategory
{
    public function __construct($url, $label, $content, $image_small, $image_large, $image_alt, $image_title, $services, $booking_url, $booking_url_title, $consultation_url, $consultation_url_title, $consultation_url_label = '', $booking_url_label = '', $read_more_label = 'Läs mer', $read_more_title = 'Läs mer')
    {
        $this->url = $url;
        $this->label = $label;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->services = $services;
        $this->booking_url = $booking_url;
        $this->booking_url_title = $booking_url_title;
        $this->consultation_url = $consultation_url;
        $this->consultation_url_title = $consultation_url_title;
        $this->consultation_url_label = $consultation_url_label;
        $this->booking_url_label = $booking_url_label;
        $this->read_more_label = $read_more_label;
        $this->read_more_title = $read_more_title;
    }
    public string $url;
    public string $label;
    public string $content;
    public string $image_small;
    public string $image_large;
    public string $image_alt;
    public string $image_title;
    public array $services;
    public ?string $booking_url;
    public ?string $booking_url_title;
    public ?string $booking_url_label;
    public ?string $consultation_url;
    public ?string $consultation_url_title;
    public ?string $consultation_url_label;
    public string $read_more_label;
    public string $read_more_title;
}

$green_banner_content = new GreenBannerContent(
    title: 'Hudbehandlingar',
    description: 'Vi erbjuder ett brett utbud av hudbehandlingar anpassade för alla typer av hudproblem. Våra tjänster inkluderar ansiktsbehandlingar som djuprengör hudens porer, avancerade kemiska peelingar för hudföryngring, och laser hudbehandling för att effektivt behandla olika hudtillstånd.',
    description_extended: 'Vi förstår att varje hud är unik. Därför erbjuder vi skräddarsydda behandlingar för att uppfylla dina specifika behov. Våra erfarna hudterapeuter använder de senaste teknikerna och metoderna för att ge dig de bästa möjliga resultaten. Boka en tid hos oss för att upptäcka hur vi kan hjälpa dig.',
);

$treatments = array(
    new Treatment(
        label: 'Ansiktsbehandling Problemhy',
        url: '/problemhy.php',
        url_title: 'Läs mer om ansiktsbehandlingar mot problemhy'
    ),
    new Treatment(
        label: 'Laser',
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        url_title: 'Läs mer om laser'
    ),
    new Treatment(
        label: 'Microneedling',
        url: '/microneedling.php',
        url_title: 'Läs mer om microneedling'
    ),
    new Treatment(
        label: 'Frysbehandling',
        url: '/cryopen.php',
        url_title: 'Läs mer om frysbehandling'
    ),
    new Treatment(
        label: 'Kemisk Peeling',
        url: '/kemisk-peeling.php',
        url_title: 'Läs mer om kemisk peeling'
    ),
    new Treatment(
        label: 'Injektioner',
        url: '/hudbehandlingar/estetiska-injektionsbehandlingar/',
        url_title: 'Läs mer om Injektionsbehandlingar'
    ),
    new Treatment(
        label: 'Klassiska Ansiktsbehandlingar',
        url: '/ansiktsbehandlingar.php',
        url_title: 'Läs mer om klassiska ansiktsbehandlingar'
    ),
    new Treatment(
        label: 'IPL',
        url: '/hudbehandlingar/ipl/',
        url_title: 'Läs mer om ipl'
    ),
    new Treatment(
        label: 'Dermabrasion',
        url: '/hudbehandlingar/dermabrasion/',
        url_title: 'Läs mer om Dermabrasion'
    ),
    new Treatment(
        label: 'Permanent Hårborttagning',
        url: '/permanent-harborttagning.php',
        url_title: 'Läs mer om Permanent Hårobrttagning'
    ),
    new Treatment(
        label: 'Skinbooster',
        url: '/hudbehandlingar/skinbooster/',
        url_title: 'Läs mer om skinbooster'
    ),
    new Treatment(
        label: 'Hudkonsultation',
        url: '/gratis-hudkonsultation.php',
        url_title: 'Läs mer om gratis hudkonsultation'
    ),
);

$people_search_for_title = "Populära alternativ";

$people_search_for = array(
    new Treatment(
        label: 'Aknebehandlingar',
        url: '/acnebehandling.php',
        url_title: 'Läs mer om aknebehandlingar'
    ),
    new Treatment(
        label: 'Akneärr behandlingar',
        url: '/behandla-acnearr.php',
        url_title: 'Läs mer om akneärr behandlingar'
    ),
    new Treatment(
        label: 'Rosaceabehandlingar',
        url: '/rosaceabehandling.php',
        url_title: 'Läs mer om rosaceabehandlingar'
    ),
    new Treatment(
        label: 'Portömning',
        url: '/portomning.php',
        url_title: 'Läs mer om portömning'
    ),
    new Treatment(
        label: 'Dermapen',
        url: '/dermapen.php',
        url_title: 'Läs mer om dermapen'
    ),
    new Treatment(
        label: 'Milierbehandling',
        url: '/milierbehandling.php',
        url_title: 'Läs mer om milierbehandling'
    ),
    new Treatment(
        label: 'HydraFacial',
        url: '/hydrafacial.php',
        url_title: 'Läs mer om HydraFacial'
    ),
    new Treatment(
        label: 'Hudterapeutens val',
        url: '/hudbehandlingar/ansiktsbehandling/hudterapeutens-val/',
        url_title: 'Läs mer om hudterapeutens val'
    ),
    new Treatment(
        label: 'PRX-T33',
        url: '/prx-t33.php',
        url_title: 'Läs mer om PRX-T33'
    ),
    new Treatment(
        label: 'Dermabrasion',
        url: '/hudbehandlingar/dermabrasion/',
        url_title: 'Läs mer om dermabrasion'
    ),
    new Treatment(
        label: 'CO2 laser',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Läs mer om CO2 laser'
    ),
    new Treatment(
        label: 'Porrengöring',
        url: '/porrengoring.php',
        url_title: 'Läs mer om porrengöring'
    ),
    new Treatment(
        label: 'Djuprengöring',
        url: '/djuprengoring.php',
        url_title: 'Läs mer om djuprengöring'
    ),
    new Treatment(
        label: 'Fillers',
        url: '/hudbehandlingar/estetiska-injektionsbehandlingar/fillers/',
        url_title: 'Läs mer om fillers'
    ),
);


$service_categories = array(
    new ServiceCategory(
        url: '/problemhy.php',
        label: 'Ansiktsbehandling mot problemhy',
        content: 'Ansiktsbehandlingar mot problemhy såsom akne, rosacea och pormaskar med mera. Med noggrant utvalda produkter och tekniker rengör och återställer vi din hud, och förebygger framtida hudproblem.',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/424x324/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Ansiktsbehandlingar mot problemhy',
        image_alt: 'Kvinna som får ansiktsbehandling mot sin problemhy',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem',
        booking_url_title: 'Boka tid för ansiktsbehandling mot problemhy',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Skin_Consultation&Consultationwhat=EMPTY',
        consultation_url_title: 'Boka tid för hudkonsultation mot problemhy',
        consultation_url_label: 'Boka Konsultation',
        booking_url_label: 'Boka Behandling',
        services: array(
            new Treatment(
                url: '/hudbehandlingar/ansiktsbehandling/akne',
                label: 'Aknebehandling',
                url_title: 'Läs mer om aknebehandling',
            ),
            new Treatment(
                url: '/portomning.php',
                label: 'Portömning',
                url_title: 'Läs mer om portömning',
            ),
            new Treatment(
                url: '/hudbehandlingar/ansiktsbehandling/rosacea/',
                label: 'Rosaceabehandling',
                url_title: 'Läs mer om rosaceabehandling',
            ),
            new Treatment(
                url: '/milierbehandling.php',
                label: 'Milierbehandling',
                url_title: 'Läs mer om milierbehandling',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om ansiktsbehandlingar mot problemhy'
    ),
    new ServiceCategory(
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        label: 'Laser mot hudproblem',
        content: 'Laserbehandlingar mot hudproblem som använder koncentrerade ljusstrålar för att målriktat behandla olika typer av ärr och pigmentfläckar. Dessa behandlingar kan ge dramatiska förbättringar i hudens utseende och textur.',
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/424x324/laser-mot-problemhy.webp',
        image_title: 'Laser mot hudproblem',
        image_alt: 'Kvinna som får laserbehandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem',
        booking_url_title: 'Boka tid för laserbehandling mot hudproblem',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_title: 'Boka konsultation för laserbehandling mot hudproblem',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/alma-hybrid-co2-laser.php',
                label: 'Alma Hybrid CO2',
                url_title: 'Läs mer om Alma Hybrid CO2',
            ),
            new Treatment(
                url: '/alma-harmony-xl-pro.php',
                label: 'Alma Harmony XL Pro',
                url_title: 'Läs mer om Alma Harmony XL Pro',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om laserbehandling mot hudproblem'
    ),
    new ServiceCategory(
        url: '/microneedling.php',
        label: 'Microneedling',
        content: 'Microneedling är en behandling där små nålar används för att skapa mikroskopiska hål i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta leder till en fastare, jämnare och fräschare hud.',
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/424x324/microneedling.webp',
        image_title: 'Microneedling',
        image_alt: 'Kvinna som får microneedlingbehandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling',
        booking_url_title: 'Boka tid för microneedlingbehandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_title: 'Boka konsultation för microneedling',
        consultation_url_label: 'Boka Konsultation',
        booking_url_label: 'Boka Behandling',
        services: array(
            new Treatment(
                url: '/dermapen.php',
                label: 'Dermapen',
                url_title: 'Läs mer om dermapen',
            ),
            new Treatment(
                url: '/varumarken/exceed/',
                label: 'Exceed',
                url_title: 'Läs mer om exceed',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om microneedling'
    ),
    new ServiceCategory(
        url: '/hudbehandlingar/ipl',
        label: 'IPL',
        content: 'IPL-behandlingar använder intensivt pulserande ljus för att behandla en rad hudproblem, inklusive pigmentfläckar, ytliga blodkärl och rosacea. Denna teknik förbättrar även hudens textur och ton.',
        image_small: '/bilder/hudbehandlingar/200x200/ipl.webp',
        image_large: '/bilder/hudbehandlingar/424x324/ipl.webp',
        image_title: 'IPL-behandling',
        image_alt: 'Kvinna som får IPL-behandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl',
        booking_url_title: 'Boka tid för IPL-behandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
        consultation_url_title: 'Boka konsultation för IPL-behandling',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/ipl-rosacea.php',
                label: 'Mot Rosacea',
                url_title: 'Läs mer om IPL mot Rosacea',
            ),
            new Treatment(
                url: '/ipl-ytliga-blodkarl.php',
                label: 'Mot Ytliga Blodkärl',
                url_title: 'Läs mer om IPL mot Ytliga Blodkärl',
            ),
            new Treatment(
                url: '/ipl-pigmentflackar.php',
                label: 'Mot Pigmentfläckar',
                url_title: 'Läs mer om IPL mot Pigmentfläckar',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om IPL'
    ),
    new ServiceCategory(
        url: '/kemisk-peeling.php',
        label: 'Kemisk Peeling',
        content: 'Kemisk peeling innebär applicering av syror på huden för att exfoliera huden och avlägsna gammal hud och döda hudceller. Detta stimulerar hudens förnyelseprocess, vilket leder till ny hudyta som är mjukare, klarare och jämnare.',
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/424x324/kemisk-peeling.webp',
        image_title: 'Kemisk peeling',
        image_alt: 'Man som får kemisk peeling behandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling',
        booking_url_title: 'Boka kemisk peeling behandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_title: 'Boka konsultation för kemisk peeling',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/varumarken/skin-tech/',
                label: 'Skin Tech',
                url_title: 'Läs mer om Skin Tech',
            ),
            new Treatment(
                url: '/prx-t33.php',
                label: 'PRX-T33',
                url_title: 'Läs mer om PRX-T33',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om kemisk peeling'
    ),
    new ServiceCategory(
        url: '/ansiktsbehandlingar.php',
        label: 'Klassiska ansiktsbehandlingar',
        content: 'Klassiska ansiktsbehandlingar är tidlösa och grundläggande skönhetsbehandlingar som främjar allmän hudhälsa. De inkluderar rengöring, exfoliering, ånga, ansiktsmask och LED-terapi, och är anpassade för att passa olika hudtyper och behov.',
        image_small: '/bilder/hudbehandlingar/200x200/klassiska-ansiktsbehandlingar.webp',
        image_large: '/bilder/hudbehandlingar/424x324/klassiska-ansiktsbehandlingar.webp',
        image_title: 'Klassiska ansiktsbehandlingar',
        image_alt: 'Man som får en klassisk ansiktsbehadnling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=facialClassic',
        booking_url_title: 'Boka tid för klassiska ansiktsbehandlingar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Skin_Consultation&Consultationwhat=EMPTY',
        consultation_url_title: 'Boka konsultation för klassiska ansiktsbehandlingar',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/hudbehandlingar/ansiktsbehandling/hudterapeutens-val/',
                label: 'Hudterapeutens val',
                url_title: 'Läs mer om hudterapeutens val',
            ),
            new Treatment(
                url: '/porrengoring.php',
                label: 'Portömning',
                url_title: 'Läs mer om portömning',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om klassisk ansiktsbehandling'
    ),
    new ServiceCategory(
        url: '/hudbehandlingar/dermabrasion/',
        label: 'Dermabrasion',
        content: 'Dermabrasion är en icke-invasiv behandling som använder vätska eller mikrokristaller för att försiktigt exfoliera hudens yttre lager. Denna process främjar hudens förnyelse, minskar fina linjer, och ger en jämnare hudton och textur.',
        image_small: '/bilder/hudbehandlingar/200x200/dermabrasion.webp',
        image_large: '/bilder/hudbehandlingar/424x324/dermabrasion.webp',
        image_title: 'Dermabration',
        image_alt: 'Kvinna som får dermabrasion behandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=dermabrasion',
        booking_url_title: 'Boka tid för dermabration',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_HydroDermabrasion',
        consultation_url_title: 'Boka konsultation för dermabrasion',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/hydrafacial.php',
                label: 'HydraFacial',
                url_title: 'Läs mer om Hydrafacial',
            ),
            new Treatment(
                url: '/microdermabrasion.php',
                label: 'Microdermabrasion',
                url_title: 'Läs mer om Microdermabrasion',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om dermabrasion'
    ),
    new ServiceCategory(
        url: '/cryopen.php',
        label: 'Frysbehandling',
        content: 'Frysbehandling med CryoPen, innebär att man använder extrema kyla för att ta bort olika typer hudförändringar, inklusive födelsemärken, leverfläckar, hudflikar och fibrom.',
        image_small: '/bilder/hudbehandlingar/200x200/frysbehandling.webp',
        image_large: '/bilder/hudbehandlingar/424x324/frysbehandling.webp',
        image_title: 'Frysbehandling med CryoPen',
        image_alt: 'Kvinna som får frysbehandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
        booking_url_title: 'Boka tid för frysbehandling med CryoPen',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_title: 'Boka konsultation för frysbehandling med CryoPen',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/cryopen.php',
                label: 'CryoPen',
                url_title: 'Läs mer om cryopen',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om frysbehandling'
    ),
    new ServiceCategory(
        url: '/permanent-harborttagning.php',
        label: 'Permanent Hårborttagning',
        content: 'Laserbaserad hårborttagning erbjuder en permanent lösning för att effektivt ta bort oönskat hår från alla kroppsområden. Säg farväl till daglig rakning och välkomna slät, hårfri hud. Denna behandling är anpassad för olika hud- och hårfärger.',
        image_small: '/bilder/hudbehandlingar/200x200/permanent-harborttagning.webp',
        image_large: '/bilder/hudbehandlingar/424x324/permanent-harborttagning.webp',
        image_title: 'Permanent Hårborttagning',
        image_alt: 'Kvinna som får permanent hårborttagning i armhålan',
        booking_url: 'https://acnespecialisten.se/book?flow=laserHair',
        booking_url_title: 'Boka tid för permanent hårborttagning med laser',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
        consultation_url_title: 'Boka konsultation för permanent hårborttagning',
        booking_url_label: 'Boka Behandling',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/varumarken/splendor-x/',
                label: 'Splendor X',
                url_title: 'Läs mer om Splendor X',
            ),
            new Treatment(
                url: '/varumarken/soprano-ice/',
                label: 'Soprano Ice',
                url_title: 'Läs mer om Soprano Ice',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om permanent hårborttagning'
    ),
    new ServiceCategory(
        url: '/hudbehandlingar/skinbooster/',
        label: 'Skinbooster',
        content: 'Skinboosters är injektionsbehandlingar som ger intensiv återfuktning och näring till huden. Hyaluronsyra och andra aktiva ingredienser slussas in i huden för att förbättra dess elasticitet, struktur och lyster.',
        image_small: '/bilder/hudbehandlingar/200x200/skinbooster.webp',
        image_large: '/bilder/hudbehandlingar/424x324/skinbooster.webp',
        image_title: 'Skinbooster',
        image_alt: 'Kvinna som får skinbooster behandling i ansiktet',
        booking_url: 'https://acnespecialisten.se/book?flow=infuzion',
        booking_url_title: 'Boka tid för skinbooster behandling',
        booking_url_label: 'Boka behandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Infuzion',
        consultation_url_title: 'Boka konsultation för skinbooster',
        consultation_url_label: 'Boka Konsultation',
        services: array(
            new Treatment(
                url: '/infuzion.php',
                label: 'Infuzion',
                url_title: 'Läs mer om Infuzion',
            ),
        ),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om skinbooster'
    ),
    new ServiceCategory(
        url: '/gratis-hudkonsultation.php',
        label: 'Gratis Hudkonsultation',
        content: 'Under vår kostnadsfria hudkonsultation får du träffa en av våra hudterapeuter på kliniken eller digitalt. Vi utför en noggran hudanalys för att identifiera ditt hudproblem och rekommendera rätt behandlingar och produkter som passar just din hy.',
        image_small: '/bilder/hudbehandlingar/200x200/gratis-hudkonsultation.webp',
        image_large: '/bilder/hudbehandlingar/424x324/gratis-hudkonsultation.webp',
        image_title: 'Gratis Hudkonsultation',
        image_alt: 'Kvinna som får en gratis hudkonsultation av en hudterapeut',
        booking_url: null,
        booking_url_title: null,
        booking_url_label: null,
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation',
        consultation_url_title: 'Boka tid för gratis hudkonsultation',
        consultation_url_label: 'Boka konsultation',
        services: array(),
        read_more_label: 'Läs mer',
        read_more_title: 'Läs mer om gratis hudkonsultation'
    ),
);

$path_segments = array(
    new PathSegment('Hudbehandlingar', '/hudbehandlingar'),
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/" />
      
    <title class="l10n">Hudbehandling i Stockholm - AcneSpecialisten</title>
    <meta name="title" content="Hudbehandling i Stockholm - AcneSpecialisten" class="l10n">
    <meta name="description" content="Boka hudbehandling hos AcneSpecialisten i Stockholm. Effektiva och skräddarsydda hudbehandlingar för varje hudtyp. Boka gratis hudkonsultation!" class="l10n">
    <meta name="keywords" content="hudbehandling, hudbehandlingar, hudbehandling porer, laser hudbehandling, hudbehandling stockholm" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudbehandlingar/style.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container">
                <div id="treatments">
                    <?php foreach ($treatments as $treatment) { ?>
                        <a class="treatment b200" href="<?php echo $treatment->url ?>" title="<?php echo $treatment->url_title ?>"><?php echo $treatment->label ?></a>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section id="links">
            <div class="container">
                <p class="p100" id="psf-title"><?php echo $people_search_for_title ?></p>
                <div id="psf">
                    <?php foreach ($people_search_for as $treatment) { ?>
                        <a class="psf-treatment" href="<?php echo $treatment->url ?>" title="<?php echo $treatment->url_title ?>"><?php echo $treatment->label ?></a>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section id="cards">
            <div class="container">
                <div class="columns is-multiline is-variable is-3">
                    <?php foreach ($service_categories as $category) { ?>
                        <div class="column is-one-third">
                            <?php include('widgets/service-category-card/service-category-card.php') ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section id="consultation-banner">
            <div class="container">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
            </div>
        </section>
        <section id="results">
            <div class="container">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </div>
        </section>
        <section id="reviews">
            <div class="container">
                <h2 class="big l10n">Omdömen</h2>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">Se alla omdömen</a>
            </div>
        </section>
        <section id="faq">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php $faq_categories = array(
                    'Generellt' => array(
                        new Question(
                            title: 'Hur vet jag vilken behandling som är bäst för mig?',
                            text: '<p class="p200">För att hitta den behandling som passar dig bäst erbjuder vi en kostnadsfri konsultation. Under detta möte får du träffa en av våra erfarna hudterapeuter, som utifrån dina unika hudproblem och mål, skapar en personlig behandlingsplan.</p>'
                        ),
                        new Question(
                            title: 'Vad kan jag förvänta mig efter en hudvårdsbehandling?',
                            text: '<p class="p200">Resultatet varierar beroende på antalet genomförda behandlingar. En enstaka behandling kan göra skillnad, men vi rekommenderar vanligtvis en fullständig behandlingskur. Denna kan omfatta 3-6 sessioner, beroende på vald metod. Vi erbjuder också kurpaket för dessa behandlingsserier.</p>'
                        ),
                        new Question(
                            title: 'Erbjuder ni duobehandlingar?',
                            text: '<p class="p200">Ja, vi kan ordna så att du och en till person får behandlingar parallellt. Detta ger er möjligheten att njuta av våra tjänster tillsammans. Observera dock att vi inte erbjuder behandlingar i samma rum.</p>'
                        ),
                        new Question(
                            title: 'Finns det åldersbegränsningar för några av behandlingarna hos AcneSpecialisten?',
                            text: '<p class="p200">På AcneSpecialisten välkomnar vi kunder i alla åldrar. Vi är medvetna om att hudproblem kan drabba personer i olika åldersgrupper. Våra behandlingsplaner skräddarsys efter individuella behov. För vissa mer intensiva eller maskinbaserade behandlingar kan åldersbegränsningar tillämpas, är du under 18 år måste man alltid ha målsmans godkännande.</p>'
                        ),
                        new Question(
                            title: 'Hur ofta bör jag genomgå en hudvårdsbehandling?',
                            text: '<p class="p200">I din personliga behandlingsplan, som vi tar fram under vår kostnadsfria konsultation, specificerar vi rekommenderade intervaller mellan behandlingarna. Dessa intervaller varierar beroende på vilken typ av behandling du väljer. Vissa behandlingar kan kräva sessioner med en veckas mellanrum, andra var fjärde vecka, och vissa kanske var sjätte vecka. Denna flexibilitet säkerställer att vi kan erbjuda en behandlingsplan som är optimal för just din hudtyp och dina behov.</p>'
                        ),
                    ),

                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </div>
        </section>
        <!--Hudguide-->
        <section id="specialists">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla våra hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $specialists = array(
                    new Specialist(
                        name: 'Cazzandra Lindberg',
                        title: 'Hudterapeut sedan 2018',
                        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                        image_title: 'Hudterapeut Cazzandra Lindberg',
                        image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
                    ),
                    new Specialist(
                        name: 'Veronika Benedik',
                        title: 'Hudterapeut sedan 1999',
                        image: 'images/specialists/large/hudterapeut-veronika.webp',
                        image_title: 'Hudterapeut Veronika Benedik',
                        image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
                    ),
                    new Specialist(
                        name: 'Julia Eklund',
                        title: 'Hudterapeut sedan 2021',
                        image: 'images/specialists/large/hudterapeut-julia.webp',
                        image_title: 'Hudterapeut Julia Eklund',
                        image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
                    ),
                    new Specialist(
                        name: 'Vilma Libom',
                        title: 'Hudterapeut sedan 2022',
                        image: 'images/specialists/large/hudterapeut-vilma.webp',
                        image_title: 'Hudterapeut Vilma Libom',
                        image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
                    ),
                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla våra hudterapeuter">Se alla våra hudterapeuter</a>
            </div>
        </section>
        <section id="brands">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </div>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>