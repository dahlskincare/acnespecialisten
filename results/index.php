<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Customer results</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/results/style.css">
</head>

<?php
$consultation_url = '';
$result_categories = array(
    new ResultCategory(
        id: 'acne',
        title: 'Acne',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'acne-scars',
        title: 'Acne scars',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array(
            new ResultCustomer(
                id: '123',
                image_before_small: 'https://via.placeholder.com/178x238.webm',
                image_after_small: 'https://via.placeholder.com/178x238.webm',
                image_before_large: 'https://via.placeholder.com/372x496.webm',
                image_after_large: 'https://via.placeholder.com/372x496.webm',
                age: 24,
                gender: 'Female',
                problem: 'Acne',
                type: 'Severe',
                treatment: new ResultTreatment(
                    duration: '50 minutes',
                    procedures: array(),
                    product: new ResultProduct(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Product bundle for light acne'
                    ),
                    employee: new ResultEmployee(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Leslie Alexander'
                    ),
                    visits: array(
                        new ResultVisit(
                            date: 'Nov 30, 2022',
                            images: new ResultImages(
                                image_left_small: 'https://via.placeholder.com/175x235.webm',
                                image_right_small: 'https://via.placeholder.com/175x235.webm',
                                image_left_large: 'https://via.placeholder.com/320x426.webm',
                                image_right_large: 'https://via.placeholder.com/320x426.webm',
                            ),
                            title: 'First free consultation',
                            description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',
                            read_more_url: 'https://dahlskincare.com/skin-consultation',
                            read_more_label: 'Get a free consultation'
                        ),
                        new ResultVisit(
                            date: 'Dec 24, 2022',
                            images: new ResultImages(
                                image_left_small: 'https://via.placeholder.com/175x235.webm',
                                image_right_small: 'https://via.placeholder.com/175x235.webm',
                                image_left_large: 'https://via.placeholder.com/320x426.webm',
                                image_right_large: 'https://via.placeholder.com/320x426.webm',
                            ),
                            title: 'Results after first problem skin facials',
                            description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',
                            read_more_url: '/services/facials',
                            read_more_label: 'Read more about facials'
                        )
                    )
                )
            )
        )
    ),
    new ResultCategory(
        id: 'comedones',
        title: 'Comedones',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'rosacea',
        title: 'Rosacea',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'seborrhea',
        title: 'Seborrhea',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'perioral-dermatitis',
        title: 'Perioral dermatitis',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'large-pores',
        title: 'Large pores',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'mature-skin',
        title: 'Mature skin',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'pigmentation',
        title: 'Pigmentation',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    ),
    new ResultCategory(
        id: 'milier',
        title: 'Milier',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    )
)
?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <h1 class="h600 mt-xs l10n">Customer results</h1>
                        <p class="p200 mt-xs l10n">
                            In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                        </p>
                        <a href="<?php echo $consultation_url ?>" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
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
                                <h1 class="h600 mt-xs l10n">Customer<br />results</h1>
                                <a href="<?php echo $consultation_url ?>" class="button b200 white mt-xl">Get a free consultation</a>
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

            <div class="container mt-m is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
            <div class="container mt-m is-hidden-desktop" id="filters-touch-container">
                <div id="filters-touch">
                    <?php foreach ($result_categories as $result_category) { ?>
                        <div class="filter-item">
                            <div class="b100 filter-item-label l10n">
                                <?php echo $result_category->title ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="container is-hidden-touch">
                <div id="filters-desktop">
                    <div id="filter-items">
                        <?php foreach ($result_categories as $result_category) { ?>
                            <div class="filter-item">
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $result_category->title ?>
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
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>