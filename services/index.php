<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<?php
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

$problem_areas[] = new ProblemArea('Ansikte', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Kropp', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
$problem_areas[] = new ProblemArea('Bröst', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Ögon', 'images/problem-areas/eyes.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Läppar', 'images/problem-areas/lips.png', array('unwanted-hair'));
$problem_areas[] = new ProblemArea('Hår', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Rygg', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Axlar', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Käklinje', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
$problem_areas[] = new ProblemArea('Nacke', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
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
    <script src="problems/problems.js"></script>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs l10n">Services we provide</h1>
                        <p class="p200 mt-xs">
                            <span id="problems-banner-collapsed" class="l10n">
                                In a personal meeting with a skin specialist, your skin type is
                                examined
                                and
                                identified. We take pre-photos of your skin, recommend. In a
                                personal
                                meeting
                                with a
                                skin specialist, your skin type is examined and identified. We
                                take
                                pre-photos
                                of
                                your skin, recommend. In a personal meeting with a skin
                                specialist, your
                                skin
                                type
                                is examined and identified In a personal meeting with a skin
                                specialist,
                                your
                                skinonal...
                                <span class="l10n underline" onclick="onReadMoreClick()">read more</span>
                            </span>
                            <span id="problems-banner-expanded" class="l10n is-hidden">
                                In a personal meeting with a skin specialist, your skin type is
                                examined and identified. We take pre-photos of your skin,
                                recommend. In
                                a
                                personal
                                meeting with a skin specialist, your skin type is examined and
                                identified. We
                                take
                                pre-photos of your skin, recommend. In a personal meeting with a
                                skin
                                specialist,
                                your
                                skin type is examined and identified In a personal meeting with a
                                skin
                                specialist,
                                your
                                skinonal.

                                In a personal meeting with a skin specialist, your skin type is
                                examined
                                and
                                identified. We take pre-photos of your skin, recommend. In a
                                personal
                                meeting
                                with a
                                skin specialist, your skin type is examined and identified. We
                                take
                                pre-photos
                                of
                                your skin, recommend. In a personal meeting with a skin
                                specialist, your
                                skin
                                type
                                is examined and identified In a personal meeting with a skin
                                specialist,
                                your
                                skinonal.
                            </span>
                        </p>
                        <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                        <div class="mt-xl">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
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
                                <h1 class="h600 mt-xs l10n">Services<br />we provide</h1>
                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined
                                and identified. We take pre-photos of your skin, recommend. In a
                                personal meeting with a skin specialist, your skin type is examined and
                                identified. We take pre-photos of your skin, recommend. In a personal
                                meeting with a skin specialist, your skin type is examined and
                                identified In a personal meeting with a skin specialist, your skinonal
                            </div>
                            <div class="ml-xl4 l10n">
                                In a personal meeting with a skin specialist, your skin type is examined
                                and identified. We take pre-photos of your skin, recommend. In a
                                personal meeting with a skin specialist, your skin type is examined and
                                identified. We take pre-photos of your skin, recommend. In a personal
                                meeting with a skin specialist, your skin type is examined and
                                identified In a personal meeting with a skin specialist, your skinonal
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="banner-filters" class="carousel l10n">
                    <?php foreach ($problem_areas as $problem_area) { ?>
                        <div class="banner-problem-area" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                            <img src="<?php echo $problem_area->icon ?>" alt="icon" width="32" height="32">
                            <div class="b100 l10n">
                                <?php echo $problem_area->label ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section id="filters">
            <div class="container">
                <p>hello</p>
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
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container l10n">
                            <?php
                            $before = 'images/results/rosacea-before.webp';
                            $after = 'images/results/rosacea-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container l10n">
                            <?php
                            $before = 'images/results/comedones-before.webp';
                            $after = 'images/results/comedones-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                            }
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
                        if ($lang == 'sv') {
                            $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                        } else {
                            $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                        }
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                        ?>
                    </div>
                    <div class="column l10n">
                        <?php
                        $before = 'images/results/rosacea-before.webp';
                        $after = 'images/results/rosacea-after.webp';
                        if ($lang == 'sv') {
                            $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                        } else {
                            $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                        }
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                        ?>
                    </div>
                    <div class="column l10n">
                        <?php
                        $before = 'images/results/comedones-before.webp';
                        $after = 'images/results/comedones-after.webp';
                        if ($lang == 'sv') {
                            $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                        } else {
                            $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                        }
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
                            <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel')">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#reviews-carousel')">
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
    <script>
        showProblems('ALL')
    </script>
</body>

</html>