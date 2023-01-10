<html>

<head>
    <title>Acnespecialisten</title>
    <?php include('includes/head.php'); ?>
    <style>
        body {
            margin: 0;
        }

        h2 {
            margin-bottom: 4px;
        }

        .section {
            padding: 24px;
        }


        .section.green {
            color: white;
            background-color: #117158;
        }
    </style>
</head>

<body>
    <h1>Buttons</h1>
    <div class="section">
        <h2>Regular</h2>
        <div class="button b200">Large</div>
        <div class="button">Normal</div>
        <div class="button b50">Small</div>
    </div>
    <div class="section">
        <h2>Outline</h2>
        <div class="button outline b200">Large</div>
        <div class="button outline">Normal</div>
        <div class="button outline b50">Small</div>
    </div>
    <div class="section">
        <h2>Text</h2>
        <div class="button text b200">Large</div>
        <div class="button text">Normal</div>
        <div class="button text b50 disabled">Small (disabled)</div>
    </div>

    <div class="section">
        <h2>Disabled</h2>
        <div class="button disabled b200">Large</div>
        <div class="button disabled">Normal</div>
        <div class="button disabled b50">Small</div>
    </div>
    <div class="section">
        <h2>Icon</h2>
        <div class="button b200">
            <?php icon("placeholder") ?>
            <span>Large</span>
        </div>
        <div class="button text">
            <span>Normal</span>
            <?php icon("placeholder") ?>
        </div>
        <div class="button outline b50">
            <?php icon("placeholder") ?>
            <span>Small</span>
        </div>
    </div>
    <div class="section green">
        <h2>Contained white</h2>
        <div class="button white b200">
            <?php icon("placeholder") ?>
            <span>Large</span>
        </div>
        <div class="button white">
            <span>Normal</span>
        </div>
        <div class="button white disabled b50">
            <span>Small</span>
        </div>
    </div>
    <div class="section">
        <h2>Contained grey</h2>
        <div class="button grey b200">
            <?php icon("placeholder") ?>
            <span>Large</span>
        </div>
        <div class="button grey">
            <span>Normal</span>
        </div>
        <div class="button grey disabled b50">
            <span>Small</span>
        </div>
    </div>
</body>

</html>