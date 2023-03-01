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
    new ProblemArea('Ansikte', 'area-face', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Kropp', 'area-body', array('acne', 'acne-scars', 'comedones')),
    new ProblemArea('Bröst', 'area-chest', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Ögon', 'area-eyes', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Läppar', 'area-lips', array('unwanted-hair')),
    new ProblemArea('Hår', 'area-hair', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Rygg', 'area-back', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Axlar', 'area-shoulders', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Käklinje', 'area-neckline', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples')),
    new ProblemArea('Nacke', 'area-neck', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'))
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
    new ServiceCategory('problem-skin-facials', 'Problem skin facials', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('acne-treatment', 'Acne treatment', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('pore-cleanse', 'Pore cleanse', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('milier-treatment', 'Milier treatment', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('rosacea-treatment', 'Rosacea treatment', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('classic-facials', 'Classic facials', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('skin-therapist-choice', 'Skin therapist choice', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('microneedling', 'Microneedling', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('dermapen', 'Dermapen', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('micro-injector', 'Micro injector', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('injections', 'Injections', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('botox', 'Botox', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('fillers', 'Fillers', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('freeze-treat', 'FreezeTreat', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('cryopen', 'Cryopen', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('ipl', 'IPL', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('alma-rejuve', 'Alma Rejuve', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('photonova', 'PhotoNova / Powerlight', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('laser-for-hair-removal', 'Laser for hair removal', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('soprano-ice', 'Soprano Ice', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('splendor-x', 'Splendor X', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('laser-for-problem-skin', 'Laser for problem skin', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('alma-hybrid', 'Alma Hybrid', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('chemical peeling', 'Chemical peeling', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('skintech', 'Skintech', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
        new Service('prx-t33', 'PRX-T33', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('dermabration', 'Dermabration', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('hydrafacial', 'Hydrafacial', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
    new ServiceCategory('skinbooster', 'Skinbooster', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200', 'https://via.placeholder.com/424x324.jpg', array(
        new Service('infuzion', 'Infuzion', '50 min', '100 kr', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist,  In a personal personal meeting with a skin specialist...', 'https://via.placeholder.com/200x200.jpg', 'https://via.placeholder.com/424x324.jpg', 'https://dahlskincare.com/skin-consultation', 'https://bokadirekt.se'),
    ), 'bokadirekt.se', 'bokadirekt.se/consultation'),
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
    <link rel="stylesheet" href="services/style.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <h1 class="h600 mt-xs l10n">Services we provide</h1>
                        <p class="p200 mt-xs">
                            <span id="problems-banner-collapsed" class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                                <span class="l10n underline" onclick="onReadMoreClick()">read more</span>
                            </span>
                            <span id="problems-banner-expanded" class="l10n is-hidden">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </span>
                        </p>
                        <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                    </div>
                    <div class="is-hidden-touch" id="banner-green-desktop">
                        <div class="flex-row justify-space-between">
                            <div></div>
                            <div class="mt-xl mb-xs">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                        <div class="flex-row align-end">
                            <div id="skin-problems-header-column">
                                <h1 class="h600 mt-xs l10n">Services<br />we provide</h1>
                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </div>
                            <div class="ml-xl4 l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-m is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
                <div class="container" id="filters-touch-container">
                    <div id="filters-touch" class="mt-m">
                        <?php foreach ($problem_areas as $problem_area) { ?>
                            <div class=" filter-item">
                                <?php icon($problem_area->icon) ?>
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $problem_area->label ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
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
                            <p class="h200"><?php echo $service_categories[$i]->label ?></p>
                            <?php foreach ($service_categories[$i]->services as $service) { ?>
                                <p class="p200 service-label"><a href="services/<?php echo $service->id ?>"><?php echo $service->title ?></a></p>
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
            <div class="is-hidden-tablet">
                <div class="container">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Results</h2>
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Carousel.prev('#results-carousel')">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#results-carousel')">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel" id="results-carousel">
                    <div class="slide">
                        <div class="container l10n">
                            <?php
                            $before = 'images/results/acne-before.webp';
                            $after = 'images/results/acne-after.webp';
                            $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container l10n">
                            <?php
                            $before = 'images/results/rosacea-before.webp';
                            $after = 'images/results/rosacea-after.webp';
                            $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container l10n">
                            <?php
                            $before = 'images/results/comedones-before.webp';
                            $after = 'images/results/comedones-after.webp';
                            $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a class="button outline expand l10n" href="results">View all treatment results</a>
                </div>
            </div>
            <div class="container is-hidden-mobile">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Results</h2>
                    <a href="results" class="button compact text">
                        <span class="l10n">View all treatment results</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <div class="columns is-3 is-variable">
                    <div class="column l10n">
                        <?php
                        $before = 'images/results/acne-before.webp';
                        $after = 'images/results/acne-after.webp';
                        $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                        ?>
                    </div>
                    <div class="column l10n">
                        <?php
                        $before = 'images/results/rosacea-before.webp';
                        $after = 'images/results/rosacea-after.webp';
                        $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                        ?>
                    </div>
                    <div class="column l10n">
                        <?php
                        $before = 'images/results/comedones-before.webp';
                        $after = 'images/results/comedones-after.webp';
                        $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="reviews">
            <div class="container">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Reviews</h2>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel', -1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#reviews-carousel', 1)">
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
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
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $specialists = array();
                $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg');
                $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg');
                $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg');
                $specialists[] = new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg');
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
    <script src="services/services.js"></script>
</body>

</html>