<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$salons = array(
    new Salon(
        title: 'Sundbyberg',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        address: 'Sturegatan 32, 172 31 Sundbyberg',
        description: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments.",
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'According to booking',
        email: 'sundbyberg@acnespecialisten.se',
        phone: '123456',
        coordinates: '1231231212312312'
    ),
    new Salon(
        title: 'Sundbyberg',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        address: 'Sturegatan 32, 172 31 Sundbyberg',
        description: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments.",
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'According to booking',
        email: 'sundbyberg@acnespecialisten.se',
        phone: '123456',
        coordinates: '1231231212312312'
    ),
);


?>
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
    <link rel="stylesheet" href="/kontakt/contact.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="l10n">Contact us</h1>
                    <p class="l10n">At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.</p>
                </section>
                <section id="contact-details">
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
                    </div>
                    <div class="is-hidden-touch flex-row mt-xl">
                        <div>
                            <strong class="h200 l10n">Phone&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="tel: 08 29 61 01">08 29 61 01</a>
                        </div>
                        <div class="ml-xxl">
                            <strong class="h200 l10n">Email&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="mailto:kund@acnespecialisten.se">kund@acnespecialisten.se</a>
                        </div>
                    </div>
                </section>
                <?php if (array_key_exists('message', $_GET)) {
                    $to = "kund@acnespecialisten.se";
                    $subject = "Acnespecialisten form";
                    $message = "
                    <html>
                    <head>
                    <title>Acnespecialisten form</title>
                    </head>
                    <body>                        
                        <table>
                            <tr>
                                <td>Category:</td>
                                <td>" . $_GET['category'] . "</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>" . $_GET['name'] . "</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>" . $_GET['email'] . "</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>" . $_GET['phone'] . "</td>
                            </tr>
                            <tr>
                                <td>Message:</td>
                                <td>" . $_GET['message'] . "</td>
                            </tr>    
                        </table>
                    </body>
                    </html>
                    ";

                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: Acnespecialisten <auto@acnespecialisten.com>' . "\r\n";
                    mail($to, $subject, $message, $headers);
                ?>
                    <section id="confirmation">
                        <div id="confirmation-banner">
                            <div>
                                <div class="h400 l10n">Your message has been sent</div>
                                <div class="p200 mt-xxs l10n">We will contact you as soon as possible.</div>
                            </div>
                            <a href="contact" class="is-hidden-touch">Resend</a>
                            <a href="contact" class="is-hidden-desktop button outline white expand mt-xl">Resend</a>
                        </div>
                    </section>
                <?php } else {  ?>
                    <section id="form">
                        <!-- TOUCH -->
                        <div class="is-hidden-desktop">
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
                                <input type="text" name="name" placeholder="Your name" required />
                                <label for="email" class="mt-xl">
                                    <span class="l10n">Email</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <input type="email" name="email" placeholder="your@email.com" required />
                                <label for="phone" class="mt-xl">
                                    <span class="l10n">Phone</span>
                                </label>
                                <input type="phone" name="phone" placeholder="084 123 456" />
                                <label for="message" class="mt-xl">
                                    <span class="l10n">Message</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <textarea class="l10n" name="message" rows="8" placeholder="Your message" required></textarea>
                                <input type="submit" class="button b200 expand" value="Send a message" />
                            </form>
                        </div>
                        <!-- DESKTOP -->
                        <div class="is-hidden-touch">
                            <form action="">
                                <label for="category">
                                    <span class="l10n">What do you need help with?</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <div class="columns">
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">New booking</span>
                                            <input type="radio" name="category" value="new_booking" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">Questions about treatment</span>
                                            <input type="radio" name="category" value="treatment" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">Collaborations</span>
                                            <input type="radio" name="category" value="collaborations" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-m">
                                    <div class="columns">
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Change / Cancel treatment</span>
                                                <input type="radio" name="category" value="cancel" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Urgent matters</span>
                                                <input type="radio" name="category" value="urgent" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Other</span>
                                                <input type="radio" name="category" value="other" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <label for="name" class="mt-xl">
                                    <span class="l10n">Full name</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <input type="text" name="name" placeholder="Your name" required />
                                <div class="columns is-variable is-3">
                                    <div class="column">
                                        <label for="email" class="mt-xl">
                                            <span class="l10n">Email</span>
                                            <span class="color-deep-sea-400">*</span>
                                        </label>
                                        <input type="email" name="email" placeholder="your@email.com" required />
                                    </div>
                                    <div class="column">
                                        <label for="phone" class="mt-xl">
                                            <span class="l10n">Phone</span>
                                        </label>
                                        <input type="phone" name="phone" placeholder="084 123 456" />
                                    </div>
                                </div>
                                <label for="message" class="mt-xl">
                                    <span class="l10n">Message</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <textarea class="l10n" name="message" rows="8" placeholder="Your message" required></textarea>
                                <input type="submit" class="button b200" value="Send a message" />
                            </form>
                        </div>
                    </section>
                <?php } ?>
                <section id="salon-cards">
                    <?php foreach ($salons as $salon) { ?>
                        <div class="large-margin">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/salon_card/salon_card.php') ?>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
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
                    <h2 class="big l10n">Questions & answers</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
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
                    <h2 class="big l10n">Our specialists</h2>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
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
    <script type="text/javascript" src="includes/scripts/forms.js"></script>
</body>

</html>