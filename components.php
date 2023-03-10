<?php
$lang = 'en';
?>

<html>

<head>
    <title>Acnespecialisten</title>
    <?php include('includes/head.php'); ?>
    <style>
        h1.section-title {
            margin-left: 24px;
            margin-top: 32px;
        }

        h2.section-title {
            margin-left: 24px;
            margin-top: 32px;
        }

        .section {
            padding: 12px 24px;
            display: flex;
            align-items: center;
        }

        .section.green {
            color: white;
            background-color: #117158;
        }

        .button {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <h1 class="section-title">Consultation banner</h1>
    <hr>
    <div class="section">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
    </div>
    <h1 class="section-title">Textfields</h1>
    <hr>
    <h2 class="section-title">Regular</h2>
    <div class="section">
        <div class="textfield">
            <?php icon("placeholder") ?>
            <input type="text"
                   placeholder="Placeholder text" />
            <?php icon("placeholder") ?>
        </div>
    </div>
    <h2 class="section-title">Dense</h2>
    <div class="section">
        <div class="textfield dense">
            <input type="text"
                   placeholder="Hello!">
        </div>
    </div>
    <h1 class="section-title">Buttons</h1>
    <hr>
    <h2 class="section-title">Regular</h2>
    <div class="section">
        <div class="button b300">XL</div>
        <div class="button b300 small-text">XL (small-text)</div>
        <div class="button b200">Large</div>
        <div class="button">Normal</div>
        <div class="button b50">Small</div>
        <div class="button disabled">
            <div class="spinner"></div>
        </div>
        <div class="button">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">White</h2>
    <div class="section green">
        <div class="button white b300">XL</div>
        <div class="button white b300 small-text">XL (small-text)</div>
        <div class="button white b200">
            <span>Large</span>
        </div>
        <div class="button white">
            <span>Normal</span>
        </div>
        <div class="button white b50">
            <span>Small</span>
        </div>
        <div class="button white disabled">Disabled</div>
        <div class="button white">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button white">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button white">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">Grey</h2>
    <div class="section">
        <div class="button grey b300">
            <?php icon('placeholder') ?>
            <span>XL</span>
        </div>
        <div class="button grey b300 small-text">XL (small-text)</div>
        <div class="button grey b200">
            <span>Large</span>
        </div>
        <div class="button grey">
            <span>Normal</span>
        </div>
        <div class="button grey b50">
            <span>Small</span>
        </div>
        <div class="button grey disabled">Disabled</div>
        <div class="button grey">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button grey">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey">
            <div class="spinner"></div>
        </div>
    </div>

    <h2 class="section-title">Outline Green</h2>
    <div class="section">
        <div class="button outline b300">XL</div>
        <div class="button outline b300 small-text">XL (small-text)</div>
        <div class="button outline b200">Large</div>
        <div class="button outline">Normal</div>
        <div class="button outline b50">Small</div>
        <div class="button outline disabled">Disabled</div>
        <div class="button outline">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button outline">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button outline">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">Outline White</h2>
    <div class="section green">
        <div class="button outline white b300">XL</div>
        <div class="button outline white b300 small-text">XL (small-text)</div>
        <div class="button outline white b200">Large</div>
        <div class="button outline white">Normal</div>
        <div class="button outline white b50">Small</div>
        <div class="button outline white disabled">Disabled</div>
        <div class="button outline white">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button outline white">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button outline white">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">Text</h2>
    <div class="section">
        <div class="button text b200">Large</div>
        <div class="button text">Normal</div>
        <div class="button text disabled">Disabled</div>
        <div class="button text">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button text">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button text elevation-medium">Elevated</div>
        <div class="button text">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">Text Grey</h2>
    <div class="section">
        <div class="button text grey b200">Large</div>
        <div class="button text grey">Normal</div>
        <div class="button text grey disabled">Disabled</div>
        <div class="button text grey">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button text grey">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
    </div>
    <h2 class="section-title">Text Light</h2>
    <div class="section">
        <div class="button text light b200">Large</div>
        <div class="button text light">Normal</div>
        <div class="button text light disabled">Disabled</div>
        <div class="button light text">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button text light">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
    </div>
    <h2 class="section-title">Text Light Grey</h2>
    <div class="section">
        <div class="button text light grey b200">Large</div>
        <div class="button text light grey">Normal</div>
        <div class="button text light grey disabled">Disabled</div>
        <div class="button text light grey">
            <?php icon("placeholder") ?>
            <span>Icon</span>
        </div>
        <div class="button text light grey">
            <span>Trailing Icon</span>
            <?php icon("placeholder") ?>
        </div>
    </div>
    <h2 class="section-title">Regular Round</h2>
    <div class="section">
        <div class="button round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button disabled round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button disabled round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button disabled round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button round-large">
            <div class="spinner"></div>
        </div>
        <div class="button round-medium">
            <div class="spinner"></div>
        </div>
        <div class="button round-small">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">Grey Round</h2>
    <div class="section">
        <div class="button grey round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey disabled round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey disabled round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey disabled round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button grey round-large">
            <div class="spinner"></div>
        </div>
        <div class="button grey round-medium">
            <div class="spinner"></div>
        </div>
        <div class="button grey round-small">
            <div class="spinner"></div>
        </div>
    </div>
    <h2 class="section-title">White Round</h2>
    <div class="section green">
        <div class="button white round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white disabled round-large">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white disabled round-medium">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white disabled round-small">
            <?php icon("placeholder") ?>
        </div>
        <div class="button white round-large">
            <div class="spinner"></div>
        </div>
        <div class="button white round-medium">
            <div class="spinner"></div>
        </div>
        <div class="button white round-small">
            <div class="spinner"></div>
        </div>
    </div>
</body>

</html>