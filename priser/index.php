<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Priser</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/priser/prices.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: 'Priser behandlingar',
                description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                description_extended: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                button_url: 'https://dahlskincare.com/consultation',
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container is-hidden-touch">
                <div id="brands-container">
                    <div id="brands">
                        <?php
                        $brands = array(
                            new Brand(
                                label: 'Powerlite',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/powerlite',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                            new Brand(
                                label: 'Dermapen',
                                image: 'https://via.placeholder.com/94x34.webp',
                                url: 'priser/brands/dermapen',
                            ),
                        )
                        ?>
                        <?php foreach ($brands as $brand) { ?>
                            <a href="<?php echo $brand->url ?>">
                                <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->title ?>" width="94" height="34" class="brand" />
                            </a>
                        <?php } ?>
                    </div>
                    <div class="scroll-button is-hidden" id="scroll-button-previous">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="scroll-button is-hidden" id="scroll-button-next">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="priser/prices.js"></script>
</body>

</html>