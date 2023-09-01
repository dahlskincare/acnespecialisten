<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
class ProblemArea
{
    public function __construct($label, $icon, $problem_ids)
    {
        $this->label = $label;
        $this->icon = $icon;
        $this->problem_ids = $problem_ids;
    }

    public string $label;
    public string $icon;
    public array $problem_ids;
}

$problem_areas = array(
    new ProblemArea(
        label: 'Ansikte',
        icon: 'area-face',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Kropp',
        icon: 'area-body',
        problem_ids: array('acne', 'acne-scars', 'comedones')
    ),
    new ProblemArea(
        label: 'Bröst',
        icon: 'area-chest',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Ögon',
        icon: 'area-eyes',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Läppar',
        icon: 'area-lips',
        problem_ids: array('unwanted-hair')
    ),
    new ProblemArea(
        label: 'Hår',
        icon: 'area-hair',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Rygg',
        icon: 'area-back',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Axlar',
        icon: 'area-shoulders',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Käklinje',
        icon: 'area-neckline',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    ),
    new ProblemArea(
        label: 'Nacke',
        icon: 'area-neck',
        problem_ids: array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')
    )
);

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

$service_categories = array(
    new ServiceCategory(
        id: 'ansiktsbehandlingar-problemhy',
        label: 'Ansiktsbehandlingar för problemhy',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Ansiktsbehandlingar för problemhy',
        image_title: 'Ansiktsbehandlingar för problemhy',
        services: array(
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/acne-treatment',
                url_label: 'Läs mer',
                url_title: 'Läs mer om acnebehandling',
                title: 'Acne treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Acne treatment',
                image_title: 'Acne treatment',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'treatment-booking?problem=acne',
                booking_url_label: 'Boka tid för acnebehandling',
                booking_url_title: 'Boka tid för acnebehandling',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/pore-cleanse',
                url_label: 'Läs mer',
                url_title: 'Läs mer om porrengöring',
                title: 'Pore cleanse',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Pore cleanse',
                image_title: 'Pore cleanse',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för porrengöring',
                booking_url_title: 'Boka tid för porrengöring',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/milier-treatment',
                url_label: 'Läs mer',
                url_title: 'Läs mer om milierbehandling',
                title: 'Milier treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Milier treatment',
                image_title: 'Milier treatment',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för milierbehandling',
                booking_url_title: 'Boka tid för milierbehandling',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-problemhy/rosacea-treatment',
                url_label: 'Läs mer',
                url_title: 'Läs mer om rosaceabehandling',
                title: 'Rosacea treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Rosacea treatment',
                image_title: 'Rosacea treatment',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för rosaceabehandling',
                booking_url_title: 'Boka tid för rosaceabehandling',
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
        id: 'classic-facials',
        label: 'Classic facials',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Classic facials',
        image_title: 'Classic facials',
        services: array(
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-klassiska/skin-therapist-choice',
                url_label: 'Läs mer',
                url_title: 'Läs mer om hudterapeutens val',
                title: 'Skin therapist choice',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Skin therapist choice',
                image_title: 'Skin therapist choice',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för hudterapeutens val',
                booking_url_title: 'Boka tid för hudterapeutens val',
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
        id: 'microneedling',
        label: 'Microneedling',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Microneedling',
        image_title: 'Microneedling',
        services: array(
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-microneedling/dermapen',
                url_label: 'Läs mer',
                url_title: 'Läs mer om dermapen',
                title: 'Dermapen',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Dermapen',
                image_title: 'Dermapen',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för dermapen',
                booking_url_title: 'Boka tid för dermapen',
            ),
            new Service(
                url: 'behandlingar/ansiktsbehandlingar-microneedling/micro-injector',
                url_label: 'Läs mer',
                url_title: 'Läs mer om micro injector',
                title: 'Micro injector',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Micro injector',
                image_title: 'Micro injector',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för micro injector',
                booking_url_title: 'Boka tid för micro injector',
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
        id: 'injections',
        label: 'Injections',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Injections',
        image_title: 'Injections',
        services: array(
            new Service(
                url: 'behandlingar/injections/botox',
                url_label: 'Läs mer',
                url_title: 'Läs mer om botox',
                title: 'Botox',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Botox',
                image_title: 'Botox',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för botox',
                booking_url_title: 'Boka tid för botox',
            ),
            new Service(
                url: 'behandlingar/injections/fillers',
                url_label: 'Läs mer',
                url_title: 'Läs mer om fillers',
                title: 'Fillers',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Fillers',
                image_title: 'Fillers',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för fillers',
                booking_url_title: 'Boka tid för fillers',
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
        id: 'freeze-treat',
        label: 'FreezeTreat',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'FreezeTreat',
        image_title: 'FreezeTreat',
        services: array(
            new Service(
                url: 'behandlingar/freeze-treat/cryopen',
                url_label: 'Läs mer',
                url_title: 'Läs mer om cryopen',
                title: 'Cryopen',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Cryopen',
                image_title: 'Cryopen',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för cryopen',
                booking_url_title: 'Boka tid för cryopen',
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
        id: 'ipl',
        label: 'IPL',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'IPL',
        image_title: 'IPL',
        services: array(
            new Service(
                url: 'behandlingar/ipl/alma-rejuve',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Alma Rejuve',
                title: 'Alma Rejuve',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Alma Rejuve',
                image_title: 'Alma Rejuve',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Alma Rejuve',
                booking_url_title: 'Boka tid för Alma Rejuve',
            ),
            new Service(
                url: 'behandlingar/ipl/photonova',
                url_label: 'Läs mer',
                url_title: 'Läs mer om PhotoNova / Powerlight',
                title: 'PhotoNova / Powerlight',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'PhotoNova / Powerlight',
                image_title: 'PhotoNova / Powerlight',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för PhotoNova / Powerlight',
                booking_url_title: 'Boka tid för PhotoNova / Powerlight',
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
        id: 'laser-for-hair-removal',
        label: 'Laser for hair removal',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Laser for hair removal',
        image_title: 'Laser for hair removal',
        services: array(
            new Service(
                url: 'behandlingar/laser-for-hair-removal/soprano-ice',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Soprano Ice',
                title: 'Soprano Ice',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Soprano Ice',
                image_title: 'Soprano Ice',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Soprano Ice',
                booking_url_title: 'Boka tid för Soprano Ice',
            ),
            new Service(
                url: 'behandlingar/laser-for-hair-removal/splendor-x',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Splendor X',
                title: 'Splendor X',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Splendor X',
                image_title: 'Splendor X',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Splendor X',
                booking_url_title: 'Boka tid för Splendor X',
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
        id: 'laser-for-problem-skin',
        label: 'Laser for problem skin',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Laser for problem skin',
        image_title: 'Laser for problem skin',
        services: array(
            new Service(
                url: 'behandlingar/laser-for-problem-skin/alma-hybrid',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Alma Hybrid',
                title: 'Alma Hybrid',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Alma Hybrid',
                image_title: 'Alma Hybrid',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Alma Hybrid',
                booking_url_title: 'Boka tid för Alma Hybrid',
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
        id: 'chemical peeling',
        label: 'Chemical peeling',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Chemical peeling',
        image_title: 'Chemical peeling',
        services: array(
            new Service(
                url: 'behandlingar/chemical-peeling/skintech',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Skintech',
                title: 'Skintech',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Skintech',
                image_title: 'Skintech',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Skintech',
                booking_url_title: 'Boka tid för Skintech',
            ),
            new Service(
                url: 'behandlingar/chemical-peeling/prx-t33',
                url_label: 'Läs mer',
                url_title: 'Läs mer om PRX-T33',
                title: 'PRX-T33',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'PRX-T33',
                image_title: 'PRX-T33',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för PRX-T33',
                booking_url_title: 'Boka tid för PRX-T33',
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
        id: 'dermabration',
        label: 'Dermabration',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Dermabration',
        image_title: 'Dermabration',
        services: array(
            new Service(
                url: 'behandlingar/dermabration/hydrafacial',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Hydrafacial',
                title: 'Hydrafacial',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Hydrafacial',
                image_title: 'Hydrafacial',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Hydrafacial',
                booking_url_title: 'Boka tid för Hydrafacial',
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
        id: 'skinbooster',
        label: 'Skinbooster',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        image_alt: 'Skinbooster',
        image_title: 'Skinbooster',
        services: array(
            new Service(
                url: 'behandlingar/skinbooster/infuzion',
                url_label: 'Läs mer',
                url_title: 'Läs mer om Infuzion',
                title: 'Infuzion',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                image_alt: 'Infuzion',
                image_title: 'Infuzion',
                consultation_url: 'hudkonsultation',
                consultation_url_label: 'Boka tid för hudkonsultation',
                consultation_url_title: 'Boka tid för hudkonsultation',
                booking_url: 'https://bokadirekt.se',
                booking_url_label: 'Boka tid för Infuzion',
                booking_url_title: 'Boka tid för Infuzion',
            ),
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
            $green_banner_content = new GreenBannerContent(
                title: 'Behandlingar',
                description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                description_extended: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                button_url: 'hudkonsultation',
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container">
                <div id="filters-desktop" class="is-hidden-touch">
                    <div id="filter-items">
                        <?php foreach ($problem_areas as $problem_area) { ?>
                            <div class="filter-item">
                                <?php icon($problem_area->icon) ?>
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $problem_area->label ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-previous">
                        <button class="round-large grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-next">
                        <button class="round-large grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="links">
            <div class="container">
                <div id="item-container">
                    <?php for ($i = 0; $i < count($service_categories); $i++) { ?>
                        <div class="item" id="item-<?php echo $i ?>">
                            <p>
                                <a class="h200" href="behandlingar/<?php echo $service_categories[$i]->id ?>" title="<?php echo $service_categories[$i]->label ?>"><?php echo $service_categories[$i]->label ?></a>
                            </p>
                            <?php foreach ($service_categories[$i]->services as $service) { ?>
                                <p class="p200 service-label"><a href="<?php echo $service->url ?>" title="<?php echo $service->url_title ?>" title="<?php echo $service->title ?>"><?php echo $service->title ?></a></p>
                            <?php } ?>
                        </div>
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
                    <h2 class="big l10n">Reviews</h2>
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
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
            </div>
        </section>
        <section id="faq">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Questions & answers</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
            </div>
        </section>
        <section id="skin-guide">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Skin guide</h2>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide" title="View all articles">View all articles</a>
            </div>
        </section>
        <section id="specialists">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Our specialists</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
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
                        name: 'Amira Maqboul',
                        title: 'Hudterapeut sedan 2017',
                        image: 'images/specialists/large/hudterapeut-amira.webp',
                        image_alt: 'Amira Maqboul',
                        image_title: 'Amira Maqboul',
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists" title="View all specialists">View all specialists</a>
            </div>
        </section>
        <section id="brands">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </div>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="behandlingar/services.js"></script>
</body>

</html>