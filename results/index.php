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
        id: '',
        title: 'Customer results',
        description_1: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        description_2: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
        results: array()
    );

$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

if ($rs = $conn->query("SELECT id FROM result_customer")) {
    $num_result_customers = $rs->num_rows;
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
    $pagesize = 6;
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
    GROUP BY customer.id
    ORDER BY id ASC
    LIMIT %d, %d";

if ($rs = $conn->query(sprintf($query, ($page - 1) * $pagesize, $pagesize))) {
    foreach ($rs as $row) {
        $customer = new ResultCustomer(
            id: $row['id'],
            image_before_small: $row['image_before_small'],
            image_after_small: $row['image_after_small'],
            image_before_large: $row['image_before_large'],
            image_after_large: $row['image_after_large'],
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
                <?php if ($pagesize < $num_result_customers) { ?>
                    <div id="show-more">
                        <a class="button b200 expand l10n" href="/results?page=1&pagesize=<?php echo $pagesize * 2 ?>">Show more</a>
                    </div>
                <?php } ?>
                <div id="paginator">
                    <?php include('widgets/paginator/paginator.php'); ?>
                </div>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script scustomer="results/results.js"></script>
</body>

</html>