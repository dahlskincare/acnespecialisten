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

$category_links = array(
    'acne' => 'Acne',
    'acne-scars' => 'Acne scars',
    'comedones' => 'Comedones',
    'rosacea' => 'Rosacea',
    'seborrhea' => 'Seborrhea',
    'perioral-dermatitis' => 'Perioral Dermatitis',
    'large-pores' => 'Large pores',
    'mature-skin' => 'Mature skin',
    'pigmentation' => 'Pigmentation',
    'milier' => 'Milier'
);

$result_category =
    new ResultCategory(
        id: 'all',
        title: 'Customer results',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array(
            new ResultCustomer(
                id: 123,
                image_before_small: 'https://via.placeholder.com/178x238.webm',
                image_after_small: 'https://via.placeholder.com/178x238.webm',
                image_before_large: 'https://via.placeholder.com/372x496.webm',
                image_after_large: 'https://via.placeholder.com/372x496.webm',
                age: 24,
                gender: 'Female',
                problem: 'Acne',
                type: 'Severe',
                treatment: new ResultTreatment(
                    id: 1,
                    duration: '3 months',
                    procedures: array(
                        new ResultProcedure(id: 1, image: 'https://via.placeholder.com/102x102.webm', name: 'Problem skin facials', count: '5 times'),
                        new ResultProcedure(id: 2, image: 'https://via.placeholder.com/102x102.webm', name: 'Laser for problem skin', count: '2 times')
                    ),
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
                            id: 1,
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
                            id: 2,
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
    );

$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
if ($result = $conn->query("SELECT * FROM result_category")) {
    echo "Returned rows: " . $result->num_rows;
    foreach ($result as $row) {
        echo $row['id'];
    }
    $result->free_result();
}

$conn->close();
?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <h1 class="h600 mt-xs"><?php echo $result_category->title ?></h1>
                        <div class="mt-xs">
                            <p class="p200"><?php echo $result_category->description_1 ?></p>
                            <p class="p200 mt-m"><?php echo $result_category->description_2 ?></p>
                        </div>
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
                                <h1 id="page-title-desktop" class="h600 mt-xs"><?php echo $result_category->title ?></h1>
                                <a href="<?php echo $consultation_url ?>" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="p200">
                                <?php echo $result_category->description_1 ?>
                            </div>
                            <div class="p200 ml-xl4">
                                <?php echo $result_category->description_2 ?>
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
                    <?php foreach ($category_links as $link_id => $link_label) { ?>
                        <div class="filter-item">
                            <div class="b100 filter-item-label l10n">
                                <?php echo $link_label ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="container is-hidden-touch">
                <div id="filters-desktop">
                    <div id="filter-items">
                        <?php foreach ($category_links as $link_id => $link_label) { ?>
                            <div class="filter-item">
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $link_label ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-previous">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-next">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($result_category->results as $result_customer) { ?>
                    <?php include('widgets/result_customer_card/result_customer_card.php'); ?>
                <?php } ?>
                <div id="show-more">
                    <button class="b200 expand l10n">Show more</button>
                </div>
                <?php include('widgets/paginator/paginator.php'); ?>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="results/results.js"></script>
</body>

</html>