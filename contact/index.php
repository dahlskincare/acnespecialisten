<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Contact us</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/contact/contact.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <div class="container">
            <section id="title">
                <h1 class="l10n">Contact us</h1>
                <p class="l10n">At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.</p>
            </section>
            <section id="form-section">
                <div class="is-hidden-desktop">
                    <div class="p200">
                        <strong class="l10n">Phone&nbsp;</strong>
                        <span>08 29 61 01</span>
                    </div>
                    <a href="tel:08-29 61 01" class="button b200 outline expand l10n">Call us</a>
                    <div class="p200">
                        <strong class="l10n">Email&nbsp;</strong>
                        <span>kund@acnespecialisten.se</span>
                    </div>
                    <a href="mailto:kund@acnespecialisten.se" class="button b200 outline expand l10n">Send an email</a>
                    <div id="form">
                        <label for="category">
                            <span class="l10n">What do you need help with?</span>
                            <span class="asterisk">*</span>
                        </label>
                        <div class="select-wrapper">
                            <select name="category">
                                <option value="new_booking">New booking</option>
                                <option value="treatment">Questions about treatment</option>
                                <option value="collaborations">Collaborations</option>
                                <option value="cancel">Change / cancel treatment</option>
                                <option value="urgent">Urgent matters</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="is-hidden-touch"></div>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script type="text/javascript" src="includes/scripts/forms.js"></script>
</body>

</html>