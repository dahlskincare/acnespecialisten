<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/link.php');

class Option
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

class Clinic
{
    public function __construct($logo_url, $logo_alt, $logo_title, $headline, $content, $treatments, $application_link)
    {
        $this->logo_url = $logo_url;
        $this->logo_alt = $logo_alt;
        $this->logo_title = $logo_title;
        $this->headline = $headline;
        $this->content = $content;
        $this->treatments = $treatments;
        $this->application_link = $application_link;
    }


    public string $logo_url;
    public string $logo_alt;
    public string $logo_title;
    public string $headline;
    public string $content;
    public array $treatments;
    public Link $application_link;
}


$hero_title = "Start own / Franchise";
$hero_content = "We at AcneSpecialisten offer different types of franchise collaborations, depending on what suits you best. You can rent a place in an already existing clinic or in different ways open your own, and eventually develop it. Apply below to become part of our concept - but with yourself as the boss!";
$hero_image_small = '/images/franchise_touch.webp';
$hero_image_large = '/images/franchise_desktop.webp';
$hero_image_alt = 'An image showing a franchise';
$hero_image_title = 'Start own franchise';

$colab_title = "Different types of collaboration";
$colab_options = [
    new Option(
        icon: "franchise-independent",
        title: "Work independently in our clinic",
        content: "Rent a place in one of our already existing clinics. In a fixed monthly cost, you get to share space and everything the clinic offers, but you are still your own.",
    ),
    new Option(
        icon: "franchise-own",
        title: "Open your own clinic",
        content: "Perhaps you have worked with us before and are ready to take the next step? With the help of our business and our concept, you can open your own clinic.",
    ),
    new Option(
        icon: "franchise-staffed",
        title: "Open your clinic with staff",
        content: "Have you perhaps already tried operating with us or previously ran a clinic and want to expand? Open a clinic with our concept with enough space to hire your own staff.",
    ),
    new Option(
        icon: "franchise-boost",
        title: "Boost your clinic",
        content: "Develop your already existing clinic with the help of our concept at Acnespecialisten.",
    ),
];

$concept_title = "Our clinic concept";
$concept_image_small = "/images/concept_touch.webp";
$concept_image_large = "/images/concept_desktop.webp";
$concept_image_alt = "Concept image";
$concept_image_title = "Our clinic concept";
$concept_text = "One, or maybe both? You can choose to use either the concept we run at Acnespecialisten or Sweden's Beauty Center. But you can also choose both. It obviously depends on what you find most suitable for you and your plan. Below you will find information about how the activities look like:";

$clinics = [
    new Clinic(
        logo_url: "/images/logo-green.svg",
        logo_alt: "Acnespecialisten logo",
        logo_title: "Acnespecialisten",
        headline: "The Acne Specialist treat problem skin",
        content: "At Acnespecialisten, we work according to a three-step method where the customer is the focus. Free skin consultation followed by recommended treatment. We help the customer find the right skin care routine with our products from DAHL Skincare. System where the customer can contact their personal skin therapist for any concerns.",
        treatments: [
            new Link(label: 'Treatment for acne', url: "acnebehandling.php", title: "Read more about acne treatment"),
            new Link(label: 'Treatment for acne', url: "acnebehandling.php", title: "Read more about acne treatment"),
        ],
        application_link: new Link(label: "Send an application", url: "", title: "Click here to send an application"),
    ),
    new Clinic(
        logo_url: "/images/logo-ssc.svg",
        logo_alt: "Sveriges skönhetscenter logo",
        logo_title: "Sveriges skönhetscenter",
        headline: "The Acne Specialist treat problem skin",
        content: "At Acnespecialisten, we work according to a three-step method where the customer is the focus. Free skin consultation followed by recommended treatment. We help the customer find the right skin care routine with our products from DAHL Skincare. System where the customer can contact their personal skin therapist for any concerns.",
        treatments: [
            new Link(label: 'Treatment for acne', url: "acnebehandling.php", title: "Read more about acne treatment"),
            new Link(label: 'Treatment for acne', url: "acnebehandling.php", title: "Read more about acne treatment"),
            new Link(label: 'Treatment for acne', url: "acnebehandling.php", title: "Read more about acne treatment"),
        ],
        application_link: new Link(label: "Send an application", url: "", title: "Click here to send an application"),
    )
];

$banner_title = "Risk free";
$banner_content = "As a franchisee with us, you do not take any unnecessary risks. We work according to a pay as you grow concept, consignment. This means you get products for your business for free and don't pay for them until you've sold. That way, you don't have to spend money on products that you don't know for sure that you will get rid of.";
$banner_image_small = "/images/handshake_touch.webp";
$banner_image_large = "/images/handshake_desktop.webp";
$banner_image_alt = "Handshake";
$banner_image_title = "Risk free";

$perks_title = "You focus on treatments.<br />We take care of the rest!";
$perks_left = [
    'customer-service' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'training' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'opinion' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'salary-system' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'accounting' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'failed-visit' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'website' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'all-in-one' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
];

$perks_right = [
    'marketing' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'treatment-package' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'booking-system' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'customer-journal' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'business' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'gift-cards' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
    'products' => new Option(icon: "close", title: "Customer service", content: "You don't have to keep the books yourself, just make sure to get all the papers out. We make sure that everything is done correctly - from bookkeeping to taxes and fees. It's simply nothing you need to think about."),
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
                    <img src="<?php echo $hero_image_small ?>" alt="<?php echo $hero_image_alt ?>" width="358" height="272" title="<?php echo $hero_image_title ?>" />
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
                    <a href="<?php echo $application_link->url ?>" title="<?php echo $application_link->title ?>" class="button b200 outline expand"><?php echo $application_link->label ?></a>
                </div>
            </section>
            <section id="concept">
                <h2><?php echo $concept_title ?></h2>
                <picture>
                    <source media="(max-width: 449px)" srcset="<?php echo $concept_image_small ?>">
                    <source media="(min-width: 450px)" srcset="<?php echo $concept_image_large ?>">
                    <img src="<?php echo $concept_image_small ?>" alt="<?php echo $concept_image_alt ?>" width="358" height="272" title="<?php echo $concept_image_title ?>" />
                </picture>
                <div id="concept-content"><?php echo $concept_text ?></div>
                <div id="clinic-flags">
                    <?php foreach ($clinics as $clinic) { ?>
                        <div class="clinic-flag">
                            <div class="clinic-header">
                                <img src="<?php echo $clinic->logo_url ?>" alt="<?php echo $clinic->logo_alt ?>" title="<?php echo $clinic->logo_title ?>" />
                            </div>
                            <h3><?php echo $clinic->headline ?></h3>
                            <div class="clinic-content"><?php echo $clinic->content ?></div>
                            <h3 class="l10n">Direction</h3>
                            <div class="clinic-treatments">
                                <?php foreach ($clinic->treatments as $treatment) { ?>
                                    <a href="<?php echo $treatment->url ?>" class="button grey expand">
                                        <?php echo $treatment->label ?>
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="clinic-application-button">
                                <a href="<?php echo $application_link->url ?>" class="button b200 outline expand" title="<?php echo $application_link->title ?>"><?php echo $application_link->label ?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <section id="banner">
                <div id="banner-image">
                    <h2 class="is-hidden-desktop"><?php echo $banner_title ?></h2>
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $banner_image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $banner_image_large ?>">
                        <img src="<?php echo $banner_image_small ?>" alt="<?php echo $banner_image_alt ?>" width="358" height="272" title="<?php echo $banner_image_title ?>" />
                    </picture>
                </div>
                <div id="banner-content">
                    <h2 class="is-hidden-touch"><?php echo $banner_title ?></h2>
                    <div id="banner-text"><?php echo $banner_content ?></div>
                    <div id="banner-application-link">
                        <a href="<?php echo $application_link->url ?>" class="button b200 outline expand" title="<?php echo $application_link->title ?>"><?php echo $application_link->label ?></a>
                    </div>
                </div>
            </section>
            <section id="perks">
                <h2><?php echo $perks_title ?></h2>
                <div id="perks-flex">

                    <div id="perks-left">
                        <?php foreach ($perks_left as $perk) { ?>
                            <div class="perk" onclick="this.classList.toggle('expanded')">
                                <div class="perk-header">
                                    <div class="perk-header-left">
                                        <?php icon($perk->icon); ?>
                                        <span class="perk-title"><?php echo $perk->title ?></span>
                                    </div>
                                    <div class="perk-toggle">
                                        <?php icon('add') ?>
                                    </div>
                                </div>
                                <div class="perk-content"><?php echo $perk->content ?></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="perks-right">
                        <?php foreach ($perks_right as $perk) { ?>
                            <div class="perk" onclick="this.classList.toggle('expanded')">
                                <div class="perk-header">
                                    <div class="perk-header-left">
                                        <?php icon($perk->icon); ?>
                                        <span class="perk-title"><?php echo $perk->title ?></span>
                                    </div>
                                    <div class="perk-toggle">
                                        <?php icon('add') ?>
                                    </div>
                                </div>
                                <div class="perk-content"><?php echo $perk->content ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="perks-application-button">
                    <a href="<?php echo $application_link->url ?>" class="button b200 outline expand" title="<?php echo $application_link->title ?>"><?php echo $application_link->label ?></a>
                </div>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>