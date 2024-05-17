<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/link.php');

class ColabOption
{
    public function __construct($icon, $title, $content)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->content = $content;
    }

    public string $icon;
    public string $title;
    public string $content;
}


$hero_title = "Start own / Franchise";
$hero_content = "We at AcneSpecialisten offer different types of franchise collaborations, depending on what suits you best. You can rent a place in an already existing clinic or in different ways open your own, and eventually develop it. Apply below to become part of our concept - but with yourself as the boss!";
$hero_image_small = 'https://via.placeholder.com/358x274.webp';
$hero_image_large = 'https://via.placeholder.com/872x456.webp';
$hero_image_alt = 'An image showing a franchise';
$hero_image_title = 'Start own franchise';

$colab_title = "Different types of collaboration";
$colab_options = [
    new ColabOption(
        icon: "franchise-independent",
        title: "Work independently in our clinic",
        content: "Rent a place in one of our already existing clinics. In a fixed monthly cost, you get to share space and everything the clinic offers, but you are still your own.",
    ),
    new ColabOption(
        icon: "franchise-own",
        title: "Open your own clinic",
        content: "Perhaps you have worked with us before and are ready to take the next step? With the help of our business and our concept, you can open your own clinic.",
    ),
    new ColabOption(
        icon: "franchise-staffed",
        title: "Open your clinic with staff",
        content: "Have you perhaps already tried operating with us or previously ran a clinic and want to expand? Open a clinic with our concept with enough space to hire your own staff.",
    ),
    new ColabOption(
        icon: "franchise-boost",
        title: "Boost your clinic",
        content: "Develop your already existing clinic with the help of our concept at Acnespecialisten.",
    ),
];


$application_link = new Link(label: "Send an Application", url: "#", title: "Click here to apply");

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/franchise/franchise.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <div class="container" id="narrow-content">
            <section id="hero">
                <h1><?php echo $hero_title ?></h1>
                <div id="hero-content"><?php echo $hero_content ?></div>
                <div>
                    <a href="<?php echo $application_link->url ?>" title="<?php echo $application_link->title ?>" class="button b200 expand"><?php echo $application_link->label ?></a>
                </div>
                <picture>
                    <source media="(max-width: 449px)" srcset="<?php echo $hero_image_small ?>">
                    <source media="(min-width: 450px)" srcset="<?php echo $hero_image_large ?>">
                    <img src="<?php echo $hero_image_small ?>" alt="<?php echo $hero_image_alt ?>" title="<?php echo $hero_image_title ?>" />
                </picture>
            </section>
            <section id="collaboration-types">
                <h2><?php echo $colab_title ?></h2>
                <div id="colab-options">
                    <?php foreach ($colab_options as $colab_option) { ?>
                        <div class="colab-option">
                            <?php icon($colab_option->icon) ?>
                            <h3><?php echo $colab_option->title ?></h3>
                            <div class="colab-content"><?php echo $colab_option->content ?></div>
                        </div>
                    <?php } ?>
                </div>
                <div>
                    <a href="<?php echo $application_link->url ?>" title="<?php echo $application_link->title ?>" class="button outline expand"><?php echo $application_link->label ?></a>
                </div>
            </section>
            <section id=" concept">
            </section>
            <section id="banner"></section>
            <section id="perks"></section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>