<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$path_segments = array(
    new PathSegment('Kontakt', '/kontakt.php'),
);

$salons = array(
    new Salon(
        title: 'Östermalm',
        image_small: 'bilder/kontakt/mobile/ostermalm.webp',
        image_large: 'bilder/kontakt/desktop/ostermalm.webp',
        address: 'Strandvägen 7 <br>114 51 Stockholm</br>',
        description: '',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'ostermalm@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
    new Salon(
        title: 'Södermalm',
        image_small: 'bilder/kontakt/mobile/sodermalm.webp',
        image_large: 'bilder/kontakt/desktop/sodermalm.webp',
        address: 'Hornsgatan 47 <br>118 49 Stockholm</br>',
        description: '',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'sodermalm@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
    new Salon(
        title: 'Sundbyberg',
        image_small: 'bilder/kontakt/mobile/sundbyberg.webp',
        image_large: 'bilder/kontakt/desktop/sundbyberg.webp',
        address: 'Sturegatan 32 <br>172 31 Sundbyberg</br>',
        description: '',
        opening_hours_weekdays: '07:00 - 21:00',
        opening_hours_weekends: 'Enligt bokning',
        email: 'sundbyberg@acnespecialisten.se',
        phone: '08296101',
        coordinates: '',
    ),
);


?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/kontakt.php" />

    <title class="l10n">Kontakta AcneSpecialisten på Södermalm, Östermalm och Sundbyberg</title>
    <meta name="title" content="Kontakta AcneSpecialisten på Södermalm, Östermalm och Sundbyberg" class="l10n">
    <meta name="description" content="Här hittar du öppettider, kontaktinformation och adress till våra hudvårdssalonger på Södermalm, Östermalm och i Sundbyberg." class="l10n">
    <meta name="keywords" content="kontakt acnespecialisten, hudvårdssalong, hudvårdssalong stockholm" class="l10n">
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/kontakt/contact.css">

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/organization.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/local_business.php');
    ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="l10n">Kontakt</h1>
                    <p class="l10n">Välkommen att kontakta oss på AcneSpecialisten, här hittar du våra hudvårdssalonger i Stockholm! Vi strävar efter att svara på alla förfrågningar inom en arbetsdag. För din bekvämlighet kan du nå oss genom vårt kontaktformulär, via telefon, e-post, eller direkt via chatten som du hittar nere i högra hörnet av vår webbsida. Vi ser fram emot att höra från dig och våra <a class="b200 underline color-deep-sea-400" href="/" title="Mer information om hudterapeuter i Stockholm">hudterapeuter i Stockholm</a> är redo att hjälpa dig med dina hudvårdsbehov.</p>
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
                            <span>kundservice@acnespecialisten.se</span>
                        </div>
                        <a href="mailto:kundservice@acnespecialisten.se" class="button b200 outline expand l10n" title="Skicka ett mejl">Skicka ett mejl</a>
                    </div>
                    <div class="is-hidden-touch flex-row mt-xl">
                        <div>
                            <strong class="h200 l10n">Telefon&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="tel: 08 29 61 01" title="08 29 61 01">08 29 61 01</a>
                        </div>
                        <div class="ml-xxl">
                            <strong class="h200 l10n">E-post&nbsp;</strong>
                            <a class="h200 color-deep-sea-400" href="mailto:kundservice@acnespecialisten.se" title="kundservice@acnespecialisten.se">kundservice@acnespecialisten.se</a>
                        </div>
                    </div>
                </section>
                <?php if (array_key_exists('message', $_GET)) {
                    $category = $_GET['category'];
                    $name = $_GET['name'];
                    $email = $_GET['email'];
                    $phone = $_GET['phone'];
                    $message = $_GET['message'];


                    $curl = curl_init();

                    $payload = array(
                        "ticket_type_id" => 17,
                        "contacts" => array(
                            array(
                                "email" => $email,
                            )
                        ),
                        "ticket_attributes" => array(
                            "_default_title_" => $category,
                            "_default_description_" => $message,
                            "Name" => $name,
                            "Email" => $email,
                            "Phone" => $phone,
                        ),
                        "custom_attributes" => array(
                            "brand" => "AcneSpecialisten",
                        ),
                    );

                    curl_setopt_array($curl, [
                        CURLOPT_HTTPHEADER => [
                            "Authorization: Bearer " . $_ENV['INTERCOM_ACCESS_TOKEN'],
                            "Content-Type: application/json",
                            "Intercom-Version: 2.12"
                        ],
                        CURLOPT_POSTFIELDS => json_encode($payload),
                        CURLOPT_URL => "https://api.intercom.io/tickets",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CUSTOMREQUEST => "POST",
                    ]);

                    $response = curl_exec($curl);
                    $error = curl_error($curl);

                    curl_close($curl);

                    if ($error) {
                        die("cURL Error #:" . $error);
                    }
                ?>
                    <section id="confirmation">
                        <div id="confirmation-banner">
                            <div>
                                <div class="h400 l10n">Ditt meddelande har skickats</div>
                                <div class="p200 mt-xxs l10n">Vi kommer att svara dig så snart vi kan.</div>
                            </div>
                            <a href="kontakt.php" class="is-hidden-touch" title="Skicka igen">Skicka igen</a>
                            <a href="kontakt.php" class="is-hidden-desktop button outline white expand mt-xl" title="Skicka igen">Skicka igen</a>
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
                                                <input type="radio" name="category" value="örgent" />
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="column is-one-third">
                                            <label class="radio">
                                                <span class="l10n">Annat</span>
                                                <input type="radio" checked name="category" value="other" />
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
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>

            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut/" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script type="text/javascript" src="includes/scripts/forms.js"></script>
    <script>
        // remove all get parameters from url
        if (window.location.search) {
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    </script>
</body>

</html>