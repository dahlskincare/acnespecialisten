<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$salons = array(
    new Salon(
        title: 'Strandvägen',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        address: 'Strandvägen 7, 114 51 Stockholm',
        description: 'Belägen i en av Stockholms mest exklusiva och natursköna områden, vår klinik på Strandvägen erbjuder en avkopplande miljö där du kan njuta av våra behandlingar. Omringad av den klassiska arkitekturen och nära till vattnet, ger denna plats en lugnande upplevelse för våra kunder.',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'kund@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
    new Salon(
        title: 'Södermalm',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        address: 'Hornsgatan 47, 118 49 Stockholm',
        description: 'Vår klinik på Hornsgatan är perfekt placerad i hjärtat av det livfulla Södermalm. Här kombinerar vi högklassig hudvård med den energiska atmosfären i en av Stockholms mest kreativa och dynamiska stadsdelar.',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'kund@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
    new Salon(
        title: 'Sundbyberg',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        address: 'Sturegatan 32, 172 31 Sundbyberg',
        description: 'Mitt i det charmiga Sundbyberg, erbjuder vår klinik på Sturegatan en lugn och välkomnande miljö. Här kan du dra nytta av våra expertbehandlingar samtidigt som du njuter av småstadskänslan, med nära tillgång till lokala caféer och butiker.',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'kund@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
);


?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">AcneSpecialisten | Kontakt</title>
    <meta name="description" content="Kontakta Acnespecialisten för professionell hudvård och rådgivning. Våra experter är redo att hjälpa dig med dina hudvårdsbehov på våra kliniker i Stockholm. Besök oss eller kontakta oss idag." class="l10n">
    <meta name="title" content="Kontakta Acnespecialisten | Expertis inom Hudvård" class="l10n">
    <meta name="keywords" content="kontakta Acnespecialisten, hudvårdsexperter, hudklinik, professionell hudvård, Acnespecialisten Stockholm, hudvårdsrådgivning" class="l10n">

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
                    <h1 class="l10n">Kontakt</h1>
                    <p class="l10n">Vi på AcneSpecialisten har under 30 års tid utvecklat en unik behandlingsmetod för att effektivt behandla många olika sorters problemhy.</p>
                </section>
                <section id="contact-details">
                    <div class="is-hidden-desktop">
                        <div class="p200">
                            <strong class="l10n">Telefon&nbsp;</strong>
                            <span>08 29 61 01</span>
                        </div>
                        <a href="tel:08-29 61 01" class="button b200 outline expand l10n" title="Ring oss">Ring oss</a>
                        <div class="p200">
                            <strong class="l10n">E-post&nbsp;</strong>
                            <span>kund@acnespecialisten.se</span>
                        </div>
                        <a href="mailto:kund@acnespecialisten.se" class="button b200 outline expand l10n" title="Skicka ett mejl">Skicka ett mejl</a>
                    </div>
                    <div class="is-hidden-touch flex-row mt-xl">
                        <div>
                            <strong class="h200 l10n">Telefon&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="tel: 08 29 61 01" title="08 29 61 01">08 29 61 01</a>
                        </div>
                        <div class="ml-xxl">
                            <strong class="h200 l10n">E-post&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="mailto:kund@acnespecialisten.se" title="kund@acnespecialisten.se">kund@acnespecialisten.se</a>
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
                                <div class="h400 l10n">Ditt meddelande har skickats</div>
                                <div class="p200 mt-xxs l10n">Vi kommer att svara dig så snart vi kan.</div>
                            </div>
                            <a href="kontakt" class="is-hidden-touch" title="Resend">Skicka igen</a>
                            <a href="kontakt" class="is-hidden-desktop button outline white expand mt-xl" title="Resend">Skicka igen</a>
                        </div>
                    </section>
                <?php } else {  ?>
                    <section id="form">
                        <!-- TOUCH -->
                        <div class="is-hidden-desktop">
                            <form action="">
                                <label for="category">
                                    <span class="l10n">Vad vill du ha hjälp med?</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <div class="select-wrapper">
                                    <select name="category">
                                        <option value="new_booking" class="l10n">Ny bokning</option>
                                        <option value="treatment" class="l10n">Frågor om behandling</option>
                                        <option value="collaborations" class="l10n">Samarbete</option>
                                        <option value="cancel" class="l10n">Bokning/Avbokning</option>
                                        <option value="urgent" class="l10n">Brådskande</option>
                                        <option value="other" class="l10n">Annat</option>
                                    </select>
                                </div>
                                <label for="name" class="mt-xl">
                                    <span class="l10n">Namn</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <input type="text" name="name" placeholder="Ditt namn" required />
                                <label for="email" class="mt-xl">
                                    <span class="l10n">E-post</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <input type="email" name="email" placeholder="din@epost.se" required />
                                <label for="phone" class="mt-xl">
                                    <span class="l10n">Telefonnummer</span>
                                </label>
                                <input type="phone" name="phone" placeholder="070 123 45 67" />
                                <label for="message" class="mt-xl">
                                    <span class="l10n">Meddelande</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <textarea class="l10n" name="message" rows="8" placeholder="Ditt meddelande" required></textarea>
                                <input type="submit" class="button b200 expand" value="Skicka meddelande" />
                            </form>
                        </div>
                        <!-- DESKTOP -->
                        <div class="is-hidden-touch">
                            <form action="">
                                <label for="category">
                                    <span class="l10n">Vad vill du ha hjälp med?</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <div class="columns">
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">Ny bokning</span>
                                            <input type="radio" name="category" value="new_booking" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">Frågor om behandling</span>
                                            <input type="radio" name="category" value="treatment" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="column is-one-third">
                                        <label class="radio">
                                            <span class="l10n">Samarbete</span>
                                            <input type="radio" name="category" value="collaborations" />
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-m">
                                    <div class="columns">
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Bokning/Avbokning</span>
                                                <input type="radio" name="category" value="cancel" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Brådskande</span>
                                                <input type="radio" name="category" value="urgent" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Annat</span>
                                                <input type="radio" name="category" value="other" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <label for="name" class="mt-xl">
                                    <span class="l10n">Namn</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <input type="text" name="name" placeholder="Ditt namn" required />
                                <div class="columns is-variable is-3">
                                    <div class="column">
                                        <label for="email" class="mt-xl">
                                            <span class="l10n">E-post</span>
                                            <span class="color-deep-sea-400">*</span>
                                        </label>
                                        <input type="email" name="email" placeholder="din@epost.se" required />
                                    </div>
                                    <div class="column">
                                        <label for="phone" class="mt-xl">
                                            <span class="l10n">Telefonnummer</span>
                                        </label>
                                        <input type="phone" name="phone" placeholder="070 123 45 67" />
                                    </div>
                                </div>
                                <label for="message" class="mt-xl">
                                    <span class="l10n">Meddelande</span>
                                    <span class="color-deep-sea-400">*</span>
                                </label>
                                <textarea class="l10n" name="message" rows="8" placeholder="Ditt meddelande" required></textarea>
                                <input type="submit" class="button b200" value="Skicka meddelande" />
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
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide" title="View all articles">View all articles</a>
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
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="View all specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script type="text/javascript" src="includes/scripts/forms.js"></script>
</body>

</html>