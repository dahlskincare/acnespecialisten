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
                    <form action="">
                        <label for="category">
                            <span class="l10n">What do you need help with?</span>
                            <span class="color-deep-sea-400">*</span>
                        </label>
                        <div class="select-wrapper">
                            <select name="category">
                                <option value="new_booking" class="l10n">New booking</option>
                                <option value="treatment" class="l10n">Questions about treatment</option>
                                <option value="collaborations" class="l10n">Collaborations</option>
                                <option value="cancel" class="l10n">Change / Cancel treatment</option>
                                <option value="urgent" class="l10n">Urgent matters</option>
                                <option value="other" class="l10n">Other</option>
                            </select>
                        </div>
                        <label for="name" class="mt-xl">
                            <span class="l10n">Full name</span>
                            <span class="color-deep-sea-400">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Your name" />
                        <label for="email" class="mt-xl">
                            <span class="l10n">Email</span>
                            <span class="color-deep-sea-400">*</span>
                        </label>
                        <input type="email" name="email" placeholder="your@email.com" />
                        <label for="phone" class="mt-xl">
                            <span class="l10n">Phone</span>
                        </label>
                        <input type="phone" name="phone" placeholder="084 123 456" />
                        <label for="message" class="mt-xl">
                            <span class="l10n">Message</span>
                            <span class="color-deep-sea-400">*</span>
                        </label>
                        <textarea class="l10n" name="message" rows="8" placeholder="Your message"></textarea>
                        <input type="submit" class="button b200 expand" value="Send a message" />
                    </form>
                </div>
                <div class="is-hidden-touch"></div>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script type="text/javascript" src="includes/scripts/forms.js"></script>
</body>

</html>