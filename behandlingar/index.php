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
    public function __construct($id, $label, $content, $image_small, $image_large, $image_alt, $image_title, $services, $booking_url, $booking_url_title, $consultation_url, $consultation_url_title, $consultation_url_label = '', $booking_url_label = '', $read_more_label = 'Läs mer')
    {
        $this->id = $id;
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
    }
    public string $id;
    public string $label;
    public string $content;
    public string $image_small;
    public string $image_large;
    public string $image_alt;
    public string $image_title;
    public array $services;
    public string $booking_url;
    public string $booking_url_title;
    public string $consultation_url;
    public string $consultation_url_title;
    public string $booking_url_label;
    public string $consultation_url_label;
    public string $read_more_label;
}

$green_banner_content = new GreenBannerContent(
    title: 'Behandlingar',
    description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
    description_extended: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
    button_url: 'gratis-hudkonsultation',
    button_label: 'Boka en gratis konsultation'
);

$treatments = array(
    new Treatment(
        label: 'Ansiktsbehandlingar mot Problemhy',
        url: 'behandlingar/ansiktsbehandlingar-problemhy',
        url_title: 'Läs mer om ansiktsbehandlingar mot problemhy'
    ),
    new Treatment(
        label: 'Klassiska Ansiktsbehandlingar',
        url: 'behandlingar/ansiktsbehandlingar-klassiska',
        url_title: 'TODO'
    ),
    new Treatment(
        label: 'Microdemabrasion',
        url: 'behandlingar/microdemabrasion',
        url_title: 'Läs mer om microdemabrasion'
    ),
    new Treatment(
        label: 'Frysbehandling',
        url: 'behandlingar/frysbehandling',
        url_title: 'Läs mer om frysbehandling'
    ),
    new Treatment(
        label: 'Injektionsbehandlingar',
        url: 'behandlingar/injektionsbehandlingar',
        url_title: 'Läs mer om injektionsbehandlingar'
    ),
    new Treatment(
        label: 'IPL',
        url: 'behandlingar/ipl',
        url_title: 'Läs mer om ipl'
    ),
    new Treatment(
        label: 'Kemisk Peeling',
        url: 'behandlingar/kemisk-peeling',
        url_title: 'Läs mer om kemisk peeling'
    ),
    new Treatment(
        label: 'Laser mot Problemhy',
        url: 'behandlingar/laser-mot-problemhy',
        url_title: 'Läs mer om'
    ),
    new Treatment(
        label: 'Microneedling',
        url: 'behandlingar/microneedling',
        url_title: 'Läs mer om microneedling'
    ),
    new Treatment(
        label: 'Permanent Hårborttagning',
        url: 'behandlingar/permanent-harborttagning',
        url_title: 'Läs mer om Permanent Hårobrttagning'
    ),
    new Treatment(
        label: 'Skinbooster',
        url: 'behandlingar/skinbooster',
        url_title: 'Läs mer om skinbooster'
    ),
    new Treatment(
        label: 'Gratis Hudkonsultation',
        url: 'gratis-hudkonsultation',
        url_title: 'Läs mer om gratis hudkonsultation'
    ),
);

$people_search_for_title = "Populära alternativ";

$people_search_for = array(
    new Treatment(
        label: 'Ansiktsbehandling mot akne',
        url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-akne',
        url_title: 'Läs mer om ansiktsbehandling mot akne'
    ),
    new Treatment(
        label: 'Splendor X',
        url: 'varumarken/splendor-x',
        url_title: 'Läs mer om Splendor X'
    ),
    new Treatment(
        label: 'Soprano Ice',
        url: 'varumarken/alma/soprano-ice',
        url_title: 'Läs mer om Soprano Ice'
    ),
);


$service_categories = array(
    new ServiceCategory(
        id: 'ansiktsbehandlingar-problemhy',
        label: 'Ansiktsbehandlingar mot problemhy',
        content: 'Dessa ansiktsbehandlingar är specialutformade för att ta itu med problemhy, såsom acne, rosacea och blandhy. Genom att använda noggrant utvalda produkter och tekniker, hjälper dessa behandlingar till att rengöra, lugna och återställa huden, samtidigt som de förebygger framtida hudproblem.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Ansiktsbehandlingar för problemhy',
        image_title: 'Ansiktsbehandlingar för problemhy',
        services: array(
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-akne',
                url_label: 'Mot Akne',
                url_title: 'Läs mer om acnebehandling',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-pormaskar',
                url_label: 'Mot Pormaskar',
                url_title: 'Läs mer om porrengöring',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-rosacea',
                url_label: 'Mot Rosacea',
                url_title: 'Läs mer om rosaceabehandling',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-milier',
                url_label: 'Mot Milier',
                url_title: 'Läs mer om milierbehandling',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?problem=acne',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?problem=acne',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'ansiksbehandlingar-klassiska',
        label: 'Klassiska ansiktsbehandlingar',
        content: 'Klassiska ansiktsbehandlingar är tidlösa och grundläggande skönhetsbehandlingar som främjar allmän hudhälsa. De inkluderar rengöring, exfoliering, ånga, masker och massage, och är anpassade för att passa olika hudtyper och behov.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Classic facials',
        image_title: 'Classic facials',
        services: array(
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-klassiska/hudterapeutens-val',
                url_label: 'Hudterapeutens val',
                url_title: 'Läs mer om hudterapeutens val',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=classicFacials',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?service=classicFacials',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'dermabrasion',
        label: 'Dermabrasion',
        content: 'Microdermabrasion är en icke-invasiv behandling som använder mikrokristaller för att försiktigt exfoliera hudens yttre lager. Denna process främjar hudens förnyelse, minskar fina linjer, och ger en jämnare hudton och textur.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Dermabration',
        image_title: 'Dermabration',
        services: array(
            new Service(
                url: '/varumarken/hydrafacial',
                url_label: 'HydraFacial',
                url_title: 'Läs mer om Hydrafacial',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: '/varumarken/microdermabrasion',
                url_label: 'Microdermabrasion',
                url_title: 'Läs mer om Microdermabrasion',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=dermabration',
        booking_url_title: 'Boka tid för dermabration',
        consultation_url: 'consultation-booking?service=dermabration',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'frysbehandling',
        label: 'Frysbehandling',
        content: 'Frysbehandling, eller kryoterapi, innebär att man använder extrema kyla för att behandla olika hudproblem, inklusive födelsemärken och fibrom.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'FreezeTreat',
        image_title: 'FreezeTreat',
        services: array(
            new Service(
                url: '/varumarken/cryopen',
                url_label: 'CryoPen',
                url_title: 'Läs mer om cryopen',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=freezeTreat',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?service=freezeTreat',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'injektionsbehandlingar',
        label: 'Injektionsbehandlingar',
        content: 'Injektionsbehandlingar minskar rynkor och fina linjer, samt ge volym och kontur till ansiktet. Dessa behandlingar erbjuder snabba och märkbara resultat med minimal återhämtningstid.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Injections',
        image_title: 'Injections',
        services: array(
            new Service(
                url: '/varumarken/fillers',
                url_label: 'Fillers',
                url_title: 'Läs mer om fillers',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=injections',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?service=injections',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'ipl',
        label: 'IPL',
        content: 'IPL-behandlingar använder intensivt pulserande ljus för att behandla en rad hudproblem, inklusive pigmentfläckar, ytliga blodkärl och rosacea. Denna teknik kan också förbättra hudens övergripande textur och ton.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'IPL',
        image_title: 'IPL',
        services: array(
            new Service(
                url: 'behandlingar/ipl/ipl-rosacea',
                url_label: 'Mot Rosacea',
                url_title: 'Läs mer om IPL Rosacea',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: 'behandlingar/ipl/ipl-ytliga-blodkarl',
                url_label: 'Mot Ytliga Blodkärl',
                url_title: 'Läs mer om IPL Ytliga Blodkärl',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: 'behandlingar/ipl/ipl-pigmentflackar',
                url_label: 'Mot Pigmentfläckar',
                url_title: 'Läs mer om IPL Pigmentfläckar',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=ipl',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?service=ipl',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'kemisk-peeling',
        label: 'Kemisk Peeling',
        content: 'Kemisk peeling innebär applicering av en kemisk lösning på huden för att avlägsna de döda hudcellerna från ytan. Detta stimulerar hudens förnyelseprocess, vilket leder till mjukare, klarare och jämnare hud.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Chemical peeling',
        image_title: 'Chemical peeling',
        services: array(
            new Service(
                url: '/varumarken/skin-tech',
                url_label: 'Skin Tech',
                url_title: 'Läs mer om Skin Tech',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: '/varumarken/prx-t33',
                url_label: 'PRX-T33',
                url_title: 'Läs mer om PRX-T33',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=chemicalPeeling',
        booking_url_title: 'Boka tid för kemisk peeling',
        consultation_url: 'consultation-booking?service=chemicalPeeling',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'laser-mot-problemhy',
        label: 'Laser mot Problemhy',
        content: 'Laserbehandlingar mot problemhy använder koncentrerade ljusstrålar för att målriktat behandla hudproblem som acneärr, hyperpigmentering och texturproblem. Dessa behandlingar kan ge dramatiska förbättringar i hudens utseende.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Laser mot Problemhy',
        image_title: 'Laser mot Problemhy',
        services: array(
            new Service(
                url: '/varumarken/alma/hybrid',
                url_label: 'Alma Hybrid',
                url_title: 'Läs mer om Alma Hybrid',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: '/varumarken/alma/harmony-xl-pro',
                url_label: 'Alma Harmony XL Pro',
                url_title: 'Läs mer om Alma Harmony XL Pro',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=laser',
        booking_url_title: 'Boka tid för problemhud',
        consultation_url: 'consultation-booking?service=laser',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'microneedling',
        label: 'Microneedling',
        content: 'Microneedling är en procedur där små nålar används för att skapa mikroskopiska punkteringar i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta leder till en fastare, jämnare och fräschare hud.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Microneedling',
        image_title: 'Microneedling',
        services: array(
            new Service(
                url: '/varumarken/dermapen',
                url_label: 'Dermapen',
                url_title: 'Läs mer om dermapen',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: '/varumarken/exceed',
                url_label: 'Exceed',
                url_title: 'Läs mer om exceed',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=microneedling',
        booking_url_title: 'Boka tid för ansiktsbehandling',
        consultation_url: 'consultation-booking?service=microneedling',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    
    new ServiceCategory(
        id: 'permanent-harborttagning',
        label: 'Permanent Hårborttagning',
        content: 'Permanent hårborttagning erbjuder en långvarig lösning för att minska oönskad hårväxt på kroppen. Denna behandling är effektiv för olika hud- och hårfärger och ger en slät och hårfri hud.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Laser for hair removal',
        image_title: 'Laser for hair removal',
        services: array(
            new Service(
                url: '/varumarken/splendor-x',
                url_label: 'Splendor X',
                url_title: 'Läs mer om Splendor X',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
            new Service(
                url: '/varumarken/alma/soprano-ice',
                url_label: 'Soprano Ice',
                url_title: 'Läs mer om Soprano Ice',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=laser',
        booking_url_title: 'Boka tid för hårborttagning',
        consultation_url: 'consultation-booking?service=laser',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url_label: 'Boka tid',
        consultation_url_label: 'Boka hudkonsultation'
    ),
    new ServiceCategory(
        id: 'skinbooster',
        label: 'Skinbooster',
        content: 'Skinboosters är injektionsbehandlingar som ger intensiv återfuktning och näring till huden. De innehåller hyaluronsyra och andra aktiva ingredienser som förbättrar hudens elasticitet, struktur och lyster.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Skinbooster',
        image_title: 'Skinbooster',
        services: array(
            new Service(
                url: '/varumarken/infuzion',
                url_label: 'Infuzion',
                url_title: 'Läs mer om Infuzion',
                title: '',
                duration: '',
                price: '',
                content: '',
                image_small: '',
                image_large: '',
                image_alt: '',
                image_title: '',
                consultation_url: '',
                consultation_url_label: '',
                consultation_url_title: '',
                booking_url: '',
                booking_url_label: '',
                booking_url_title: '',
            ),
        ),
        booking_url: 'treatment-booking?service=skinBooster',
        booking_url_title: 'Boka tid för skinbooster',
        booking_url_label: 'Boka tid',
        consultation_url: 'consultation-booking?service=skinBooster',
        consultation_url_title: 'Boka tid för hudkonsultation',
        consultation_url_label: 'Boka hudkonsultation',
    ),
    new ServiceCategory(
        id: 'gratis-hudkonsultation',
        label: 'Gratis Hudkonsultation',
        content: 'En gratis hudkonsultation ger en möjlighet att träffa en hudvårdsexpert och diskutera dina hudvårdsbehov och mål. Under konsultationen kan du få anpassade rekommendationer för behandlingar och produkter som passar just din hudtyp.',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Gratis Hudkonsultation',
        image_title: 'Gratis Hudkonsultation',
        services: array(
        ),
        booking_url: 'treatment-booking?service=skinBooster',
        booking_url_title: 'Boka tid för skinbooster',
        booking_url_label: 'Boka tid',
        consultation_url: 'consultation-booking?service=skinBooster',
        consultation_url_title: 'Boka tid för hudkonsultation',
        consultation_url_label: 'Boka hudkonsultation',
    ),
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Services</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="behandlingar/style.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
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
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Omdömen</h2>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                            <span class="l10n">Se alla omdömen</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">Se alla omdömen</a>
            </div>
        </section>
        <section id="faq">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
            </div>
        </section>
        <!--Hudguide-->
        <section id="specialists">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla våra specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $specialists = array(
                    new Specialist(
                        name: 'Cazzandra Lindberg',
                        title: 'Hudterapeut sedan 2015',
                        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
                        image_alt: 'Cazzandra Lindberg',
                        image_title: 'Cazzandra Lindberg'
                    ),
                    new Specialist(
                        name: 'Veronika Benedik',
                        title: 'Hudterapeut sedan 1999',
                        image: 'images/specialists/large/hudterapeut-veronika.webp',
                        image_alt: 'Veronika Benedik',
                        image_title: 'Veronika Benedik'
                    ),
                    new Specialist(
                        name: 'Julia Eklund',
                        title: 'Hudterapeut sedan 2017',
                        image: 'images/specialists/large/hudterapeut-julia.webp',
                        image_alt: 'Julia Eklund',
                        image_title: 'Julia Eklund',
                    ),
                    new Specialist(
                        name: 'Vilma Libom',
                        title: 'Hudterapeut sedan 2019',
                        image: 'images/specialists/large/hudterapeut-vilma.webp',
                        image_alt: 'Vilma Libom',
                        image_title: 'Vilma Libom'
                    )
                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists" title="Se alla våra specialister">Se alla våra specialister</a>
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