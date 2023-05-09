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
    public function __construct($id, $label, $content, $image_small, $image_large, $services, $booking_url, $consultation_url)
    {
        $this->id = $id;
        $this->label = $label;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->services = $services;
        $this->booking_url = $booking_url;
        $this->consultation_url = $consultation_url;
    }
    public string $id;
    public string $label;
    public string $content;
    public string $image_small;
    public string $image_large;
    public array $services;
    public string $booking_url;
    public string $consultation_url;
}

$service_categories = array(
    new ServiceCategory(
        id: 'ansiktsbehandlingar-problemhy',
        label: 'Ansiktsbehandlingar för problemhy',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'acne-treatment',
                title: 'Acne treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'pore-cleanse',
                title: 'Pore cleanse',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'milier-treatment',
                title: 'Milier treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'rosacea-treatment',
                title: 'Rosacea treatment',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'classic-facials',
        label: 'Classic facials',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'skin-therapist-choice',
                title: 'Skin therapist choice',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'microneedling',
        label: 'Microneedling',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'dermapen',
                title: 'Dermapen',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'micro-injector',
                title: 'Micro injector',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'injections',
        label: 'Injections',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'botox',
                title: 'Botox',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'fillers',
                title: 'Fillers',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'freeze-treat',
        label: 'FreezeTreat',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'cryopen',
                title: 'Cryopen',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'ipl',
        label: 'IPL',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'alma-rejuve',
                title: 'Alma Rejuve',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'photonova',
                title: 'PhotoNova / Powerlight',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'laser-for-hair-removal',
        label: 'Laser for hair removal',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'soprano-ice',
                title: 'Soprano Ice',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'splendor-x',
                title: 'Splendor X',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'laser-for-problem-skin',
        label: 'Laser for problem skin',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'alma-hybrid',
                title: 'Alma Hybrid',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'chemical peeling',
        label: 'Chemical peeling',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'skintech',
                title: 'Skintech',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
            new Service(
                id: 'prx-t33',
                title: 'PRX-T33',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'dermabration',
        label: 'Dermabration',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'hydrafacial',
                title: 'Hydrafacial',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
    ),
    new ServiceCategory(
        id: 'skinbooster',
        label: 'Skinbooster',
        content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
        image_small: 'https://via.placeholder.com/200x200',
        image_large: 'https://via.placeholder.com/424x324.jpg',
        services: array(
            new Service(
                id: 'infuzion',
                title: 'Infuzion',
                duration: '50 min',
                price: '100 kr',
                content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...',
                image_small: 'https://via.placeholder.com/200x200.jpg',
                image_large: 'https://via.placeholder.com/424x324.jpg',
                consultation_url: 'https://dahlskincare.com/skin-consultation',
                booking_url: 'https://bokadirekt.se'
            ),
        ),
        booking_url: 'bokadirekt.se',
        consultation_url: 'bokadirekt.se/consultation'
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
                button_url: 'https://dahlskincare.com/consultation',
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
                                <a class="h200" href="behandlingar/<?php echo $service_categories[$i]->id ?>"><?php echo $service_categories[$i]->label ?></a>
                            </p>
                            <?php foreach ($service_categories[$i]->services as $service) { ?>
                                <p class="p200 service-label"><a href="behandlingar/<?php echo $service_categories[$i]->id ?>/<?php echo $service->id ?>"><?php echo $service->title ?></a></p>
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
                        <a href="reviews" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="omdomen">View all reviews</a>
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
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
                        image_small: 'images/specialists/small/specialist-1.jpg',
                        image_large: 'images/specialists/large/hudterapeut-cazzandra.webp'
                    ),
                    new Specialist(
                        name: 'Veronika Benedik',
                        title: 'Hudterapeut sedan 1999',
                        image_small: 'images/specialists/small/specialist-2.jpg',
                        image_large: 'images/specialists/large/hudterapeut-veronika.webp'
                    ),
                    new Specialist(
                        name: 'Amira Maqboul',
                        title: 'Hudterapeut sedan 2017',
                        image_small: 'images/specialists/small/specialist-3.jpg',
                        image_large: 'images/specialists/large/hudterapeut-amira.webp'
                    ),
                    new Specialist(
                        name: 'Vilma Libom',
                        title: 'Hudterapeut sedan 2019',
                        image_small: 'images/specialists/small/specialist-4.jpg',
                        image_large: 'images/specialists/large/hudterapeut-vilma.webp'
                    )
                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
            </div>
        </section>
        <section id="brands">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
            </div>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="behandlingar/services.js"></script>
</body>

</html>