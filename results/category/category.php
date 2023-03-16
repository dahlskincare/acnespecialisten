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
    <link rel="stylesheet" href="/results/category/category.css">
</head>

<?php
$consultation_url = '';

$specialists = array(
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg')
);

$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

if ($rs = $conn->query(sprintf("SELECT * FROM result_category WHERE id = '%s' LIMIT 1", $_GET['id']))) {
    if ($rs->num_rows == 1) {

        $row = $rs->fetch_assoc();
        $result_category = new ResultCategory(
            id: $row['id'],
            title: $row['title'] . '<br />results',
            description_1: $row['description_1'],
            description_2: $row['description_2'],
            results: array()
        );
    } else {
        http_response_code(404);
        die('Page not found');
    }
} else {
    die($conn->error);
}

if ($rs = $conn->query(sprintf("SELECT COUNT(id) AS cnt FROM result_customer WHERE result_category_id = '%s'", $result_category->id))) {
    $num_result_customers = $rs->fetch_assoc()['cnt'];
    $rs->free_result();
} else {
    die($conn->error);
}
if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
if (isset($_GET['pagesize'])) {
    $pagesize = $_GET['pagesize'];
} else {
    $pagesize = 2;
}
$pages = ceil($num_result_customers / $pagesize);

$all_procedures = array();
if ($rs = $conn->query("SELECT * FROM result_procedure")) {
    foreach ($rs as $row) {
        $all_procedures[$row['id']] = new ResultProcedure(id: $row['id'], image: $row['image'], name: $row['name'], count: $row['count']);
    }
    $rs->free_result();
} else {
    die($conn->error);
}

$query = "SELECT customer.*, 
    treatment.id AS treatment_id, treatment.duration AS treatment_duration,
    employee.name AS employee_name, employee.image AS employee_image,
    product.name AS product_name, product.image AS product_image,    
    JSON_ARRAYAGG(ix.result_procedure_id) AS procedure_ids
    FROM result_customer AS customer
    INNER JOIN result_treatment AS treatment ON treatment.id = customer.result_treatment_id
    INNER JOIN result_employee AS employee ON employee.id = treatment.result_employee_id
    INNER JOIN result_product AS product ON product.id = treatment.result_product_id    
    INNER JOIN ix_result_treatment_procedure AS ix ON ix.result_treatment_id = treatment.id
    WHERE customer.result_category_id = '%s'
    GROUP BY customer.id
    ORDER BY id ASC
    LIMIT %d, %d";

if ($rs = $conn->query(sprintf($query, $result_category->id, ($page - 1) * $pagesize, $pagesize))) {
    foreach ($rs as $row) {
        $before_images = json_decode($row['before_images']);
        $after_images = json_decode($row['after_images']);
        $customer = new ResultCustomer(
            id: $row['id'],
            slider_image_before_small: $row['image_before_small'],
            slider_image_after_small: $row['image_after_small'],
            slider_image_before_large: $row['image_before_large'],
            slider_image_after_large: $row['image_after_large'],
            age: $row['age'],
            gender: $row['gender'],
            problem: $row['problem'],
            type: $row['type'],
            treatment: new ResultTreatment(
                id: $row['treatment_id'],
                duration: $row['treatment_duration'],
                procedures: array(),
                product: new ResultProduct(
                    image: $row['product_image'],
                    name: $row['product_name']
                ),
                employee: new ResultEmployee(
                    image: $row['employee_image'],
                    name: $row['employee_name']
                ),
                visits: array()
            ),
            before_images: new ResultImages(
                image_left_small: $before_images->image_left_small,
                image_right_small: $before_images->image_right_small,
                image_left_large: $before_images->image_left_large,
                image_right_large: $before_images->image_right_large
            ),
            after_images: new ResultImages(
                image_left_small: $after_images->image_left_small,
                image_right_small: $after_images->image_right_small,
                image_left_large: $after_images->image_left_large,
                image_right_large: $after_images->image_right_large
            )
        );
        // Populate procedures
        foreach (json_decode($row['procedure_ids']) as $id) {
            array_push($customer->treatment->procedures, $all_procedures[$id]);
        }

        // Populate visits
        if ($result = $conn->query("SELECT * FROM result_visit WHERE result_treatment_id = " . $customer->treatment->id)) {
            foreach ($result as $visit) {
                $images = json_decode($visit['images']);

                array_push($customer->treatment->visits, new ResultVisit(
                    id: $visit['id'],
                    date: $visit['date'],
                    images: new ResultImages(
                        image_left_small: $images->image_left_small,
                        image_right_small: $images->image_right_small,
                        image_left_large: $images->image_left_large,
                        image_right_large: $images->image_right_large
                    ),
                    title: $visit['title'],
                    description: $visit['description'],
                    read_more_url: $visit['read_more_url'],
                    read_more_label: $visit['read_more_label']
                ));
            }

            $result->free_result();
        } else {
            die($conn->error);
        }
        array_push($result_category->results, $customer);
    }
    $rs->free_result();
} else {
    die($conn->error);
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
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs"><?php echo $result_category->title ?></h1>
                        <div class="mt-xs">
                            <div class="p200"><?php echo $result_category->description_1 ?></div>
                            <div class="p200 mt-m"><?php echo $result_category->description_2 ?></div>
                        </div>
                        <a href="<?php echo $consultation_url ?>" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                    </div>
                    <div class="is-hidden-touch" id="banner-green-desktop">
                        <div class="flex-row justify-space-between">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                            <div class="mt-xl mb-xs">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                        <div class="flex-row align-end">
                            <div id="skin-problems-header-column">
                                <h1 class="h600 mt-xs"><?php echo $result_category->title ?></h1>
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
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($result_category->results as $result_customer) { ?>
                    <?php include('../widgets/result_customer_card/result_customer_card.php'); ?>
                <?php } ?>
                <?php if ($pagesize < $num_result_customers) { ?>
                    <div id="show-more">
                        <a class="button b200 expand l10n" href="/results?page=1&pagesize=<?php echo $pagesize * 2 ?>">Show more</a>
                    </div>
                <?php } ?>
                <div id="paginator">
                    <?php include('../widgets/paginator/paginator.php'); ?>
                </div>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Ready to start your own journey?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Questions & answers</div>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Our specialists</div>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>