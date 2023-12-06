<?php

use HelmutSchneider\Swish\Client;
use HelmutSchneider\Swish\PaymentRequest;

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

function form_completed()
{
    return array_key_exists('firstname', $_POST) && array_key_exists('lastname', $_POST) && array_key_exists('email', $_POST) && array_key_exists('phone', $_POST) && array_key_exists('file', $_FILES);
}

if (form_completed()) {
    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $physical = array_key_exists('physical', $_POST) ? 'yes' : 'no';
    $street1 = array_key_exists('street1', $_POST) ? $_POST['street1'] : '';
    $street2 = array_key_exists('street2', $_POST) ? $_POST['street2'] : '';
    $zip = array_key_exists('zip', $_POST) ? $_POST['zip'] : '';
    $city = array_key_exists('city', $_POST) ? $_POST['city'] : '';
    $file = $_FILES['file'];
    $file_type = $file['type'];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_content = file_get_contents($file_tmp_name);
    $from = 'Acnespecialisten <auto@acnespecialisten.com>';
    $to = "kund@acnespecialisten.se";
    $subject = "Acnespecialisten gift card";
    $boundary = uniqid('np');  // Boundary string for multipart message
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=$boundary\r\n";
    $html_content = "
                    <html>
                    <head>
                    <title>Acnespecialisten gift card</title>
                    </head>
                    <body>                        
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td>" . $name . "</td>
                            </tr>                            
                            <tr>
                                <td>Email:</td>
                                <td>" . $email . "</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>" . $phone . "</td>
                            </tr>
                            <tr>
                                <td>Physical card:</td>
                                <td>" . $physical . "</td>
                            </tr>    
                            <tr>
                                <td>Address line 1:</td>
                                <td>" . $street1 . "</td>
                            </tr>
                            <tr>
                                <td>Address line 2:</td>
                                <td>" . $street2 . "</td>
                            </tr>
                            <tr>
                                <td>Postal code:</td>
                                <td>" . $zip . "</td>
                            </tr>
                            <tr>
                                <td>Town or city:</td>
                                <td>" . $city . "</td>
                        </table>
                    </body>
                    </html>
                    ";

    // Create message body
    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= "$html_content\r\n\r\n";
    $message .= "--$boundary\r\n";
    $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
    $message .= chunk_split(base64_encode($file_content)) . "\r\n";
    $message .= "--$boundary--\r\n";
    mail($to, $subject, $message, $headers);
} else {;
    $rootCert = $_ENV['SWISH_SSL_FOLDER'] . '/Swish_TLS_RootCA.pem';
    $clientCert = [$_ENV['SWISH_SSL_FOLDER'] . '/swish_certificate.pem', 'lok13rum'];
    $client = Client::make($rootCert, $clientCert);

    $amount = array_key_exists('amount', $_GET) ? $_GET['amount'] : '1000';
    $pr = new PaymentRequest([
        'callbackUrl' => 'https://acnespecialisten.se/presentkort?paid=1',
        'payeePaymentReference' => uniqid(),
        'payeeAlias' => '1230886689',
        'amount' => intval($amount),
        'message' => 'Presentkort Acnespecialisten',
    ]);

    $data = array(
        "format" => "svg",
        "size" => "300",
        "border" => "0",
        "transparent" => "true",
        "token" => $client->createPaymentRequest($pr)->paymentRequestToken,
    );
    $json_data = json_encode($data);
    $ch = curl_init("https://mpc.getswish.net/qrg-swish/api/v1/commerce");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json_data)
        )
    );
    $qr_image = curl_exec($ch);
    curl_close($ch);


    $json_data = json_encode(array(
        "payee" => "123 08 866 89",
    ));
    $ch = curl_init("https://api.swish.nu/qr/v2/prefilled");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json_data)
        )
    );
    $qr_image_desktop = 'data:image/png;base64,' . base64_encode(curl_exec($ch));
    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Gift cards</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/presentkort/gift-cards.css">
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
                    <h1 class="l10n">Presentkort</h1>
                    <p class="l10n">Ge bort en omtänksam gåva med ett presentkort från Acnespecialisten. Nu kan du enkelt skicka en uppskattad present utan att besöka kliniken. Swisha oss det valda beloppet eller ange önskad behandling, och vi skickar ett vackert utformat presentkort direkt till dig eller mottagaren. Våra presentkort är en flexibel gåva som ger mottagaren friheten att välja bland våra många hudvårdsbehandlingar eller kvalitetsprodukter, perfekt för att visa att du bryr dig.</p>
                    <div class="button b200 expand" onclick="document.querySelector('#steps').scrollIntoView()">Köp ett presentkort</div>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="presentkort/small.webp">
                        <source media="(min-width: 800px)" srcset="presentkort/large.webp">
                        <img src="presentkort/small.webp" alt="Gift cards" title="Gift cards" width="360" height="274" />
                    </picture>
                </section>
                <section id="steps">
                    <div class="is-hidden-desktop">
                        <div class="gift-card-step" id="step-1-small">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <h2 class="l10n">Swisha önskat belopp</h2>
                            </div>
                            <div class="gc-text l10n">Skicka valfritt belopp som du vill sätta in på presentkortet.</div>
                            <?php if (!form_completed()) { ?>
                                <form class="mt-xs">
                                    <div class="select-wrapper">
                                        <select name="swish-amount" id="swish-amount" onchange="onAmountChange(event)" value="<?php echo $amount ?>">
                                            <option value="500" <?php if ($amount == "500") echo "selected" ?>>500 kr</option>
                                            <option value="1000" <?php if ($amount == "1000") echo "selected" ?>>1000 kr</option>
                                            <option value="1500" <?php if ($amount == "1500") echo "selected" ?>>1500 kr</option>
                                            <option value="2000" <?php if ($amount == "2000") echo "selected" ?>>2000 kr</option>
                                            <option value="2500" <?php if ($amount == "2500") echo "selected" ?>>2500 kr</option>
                                            <option value="3000" <?php if ($amount == "3000") echo "selected" ?>>3000 kr</option>
                                        </select>
                                    </div>
                                </form>
                                <hr />
                                <a href="swish://paymentrequest?token=<?php echo $client->createPaymentRequest($pr)->paymentRequestToken ?>&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fpresentkort%3Fpaid%3D1" class="button outline expand l10n" title="Open Swish app">Öppna Swish-appen</a>
                            <?php } ?>
                        </div>
                        <div class="gift-card-step" id="step-2-small">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <h2 class="l10n">Bekräftelse</h2>
                            </div>
                            <?php if (form_completed()) { ?>
                                <div class="confirmation-banner mt-m">
                                    <div class="h400 l10n">Din beställning har skickats</div>
                                    <div class="p200 mt-xxs l10n">Vi skickar presentkortet så snart vi kan.</div>
                                    <a href="presentkort" class="button white outline expand mt-xl" title="Skicka igen">Skicka igen</a>
                                </div>
                            <?php } else { ?>
                                <div class="gc-text l10n">Fyll i din information och bifoga en skärmbild på Swish bekräftelsen.</div>
                                <button class="mt-m outline expand l10n" id="small-form-button" onclick="openConfirmForm(this, '#small-form')">Bekräfta</button>
                                <form action="presentkort/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="small-form">
                                    <hr />
                                    <label for="firstname">
                                        <span class="l10n">Förnamn</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="text" name="firstname" placeholder="Anette" required />
                                    <label for="lastname" class="mt-xl">
                                        <span class="l10n">Efternamn</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="text" name="lastname" placeholder="Black " required />
                                    <label for="email" class="mt-xl">
                                        <span class="l10n">E-post</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="email" name="email" placeholder="din@epost.se" required />
                                    <label for="phone" class="mt-xl l10">Telefonnummer</label>
                                    <input type="phone" name="phone" placeholder="08 123 456" />
                                    <label class="mt-xl" id="screenshot-label">
                                        <span class="l10n">Betalningsbekräftelse</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <div class="p100">Skicka en skärmbild på din Swish bekräftelse.</div>
                                    <input class="button outline mt-m expand" type="file" required accept="image/png, image/jpeg" name="file" />
                                    <hr />
                                    <label class="checkbox">
                                        <span onclick="onPhysicalChange(this)">Jag vill ha ett fysiskt presentkort</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check" onclick="onPhysicalChange(this)"></span>
                                    </label>
                                    <div class="physicalAddressDetails is-hidden">
                                        <div class="physicalAddressDetails is-hidden">
                                            <label for="street1" class="mt-xl">
                                                <span class="l10n">Adress 1</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="street1" placeholder="Street, house, apartment..." />
                                            <label for="street2" class="mt-xl">
                                                <span class="l10n">Adress 2</span>
                                            </label>
                                            <input type="text" name="street2" placeholder="Office number, floor, room..." />
                                            <div class="columns is-variable is-3">
                                                <div class="column">
                                                    <label for="zip" class="mt-xl">
                                                        <span class="l10n">Postkod</span>
                                                        <span class="color-deep-sea-400">*</span>
                                                    </label>
                                                    <input type="text" name="zip" placeholder="12345" />
                                                </div>
                                                <div class="column">
                                                    <label for="city" class="mt-xl">
                                                        <span class="l10n">Stad</span>
                                                        <span class="color-deep-sea-400">*</span>
                                                    </label>
                                                    <input type="text" name="city" placeholder="City" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <input type="submit" class="button b200 expand" value="Send confirmation" />
                                </form>
                            <?php } ?>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">03</div>
                                <h2 class="l10n">Få ditt presentkort</h2>
                            </div>
                            <div class="gc-text l10n">Vi skickar ett digitalt presentkort till dig inom 1 dag. Vi skickar även presentkortet fysiskt via posten enligt önskemål, detta tar normalt 2-3 dagar.</div>
                        </div>
                    </div>
                    <div class="is-hidden-touch">
                        <div class="gift-card-step" id="step-1-large">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Swisha önskat belopp</h2>
                                    <div class="l10n">Skicka valfritt belopp som du vill sätta in på presentkortet.</div>
                                </div>
                                <?php if (!form_completed()) { ?>
                                    <div id="qr-image">
                                        <img src="<?php echo $qr_image_desktop ?>" alt="QR" title="QR">
                                        <div class="mt-s h200">123 08 866 89</div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class=" gift-card-step" id="step-2-large">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Bekräftelse</h2>
                                    <div class="gc-text l10n">Fyll i din information och bifoga en skärmbild på Swish bekräftelsen.</div>
                                </div>
                                <?php if (!form_completed()) { ?>
                                    <div class="gc-info">
                                        <button class="outline b200 l10n" id="large-form-button" onclick="openConfirmForm(this, '#large-form')">Bekräfta</button>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if (form_completed()) { ?>
                                <hr />
                                <div class="confirmation-banner">
                                    <div class="flex-row align-center justify-space-between">
                                        <div>
                                            <div class="h400 l10n">Din beställning har skickats</div>
                                            <div class="p200 mt-xxs l10n">Vi skickar presentkortet så snart vi kan.</div>
                                        </div>
                                        <a href="presentkort" class="button white outline" title="Skicka igen">Skicka igen</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <form action="presentkort/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="large-form">
                                    <hr />
                                    <div class="columns is-variable is-3">
                                        <div class="column">
                                            <label for="firstname">
                                                <span class="l10n">Förnamn</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="firstname" placeholder="Annette" required />
                                        </div>
                                        <div class="column">
                                            <label for="lastname">
                                                <span class="l10n">Efternamn</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="lastname" placeholder="Black" required />
                                        </div>
                                    </div>
                                    <label for="email" class="mt-xl">
                                        <span class="l10n">E-post</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="email" name="email" placeholder="example@email.com" required />
                                    <label for="phone" class="mt-xl l10">Telefonnummer</label>
                                    <input type="phone" name="phone" placeholder="08 123 456" />
                                    <label for="" class="mt-xl" id="screenshot-label">
                                        <span class="l10n">Betalningsbekräftelse</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <div id="upload-area" ondrop="onFileDrop(event)" ondragover="event.preventDefault()">
                                        <div class="p100 l10n">Skicka en skärmbild på din Swish bekräftelse.</div>
                                        <div>
                                            <div class="button outline l10n" id="upload-button" onclick="document.querySelector('#upload-input').click()">Ladda upp en skärmbild</div>
                                            <input type="file" id="upload-input" onchange="onFileChange(event)" required accept="image/png, image/jpeg" name="file" />
                                        </div>
                                    </div>
                                    <hr />
                                    <label class="checkbox">
                                        <span onclick="onPhysicalChange(this)">Jag vill ha ett fysiskt presentkort</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check" onclick="onPhysicalChange(this)"></span>
                                    </label>
                                    <div class="physicalAddressDetails is-hidden">
                                        <label for="street1" class="mt-xl">
                                            <span class="l10n">Adressrad 1</span>
                                            <span class="color-deep-sea-400">*</span>
                                        </label>
                                        <input type="text" name="street1" placeholder="Street, house, apartment..." />
                                        <label for="street2" class="mt-xl">
                                            <span class="l10n">Adressrad 2</span>
                                        </label>
                                        <input type="text" name="street2" placeholder="Office number, floor, room..." />
                                        <div class="columns is-variable is-3">
                                            <div class="column">
                                                <label for="zip" class="mt-xl">
                                                    <span class="l10n">Postkod</span>
                                                    <span class="color-deep-sea-400">*</span>
                                                </label>
                                                <input type="text" name="zip" placeholder="12345" />
                                            </div>
                                            <div class="column">
                                                <label for="city" class="mt-xl">
                                                    <span class="l10n">Stad</span>
                                                    <span class="color-deep-sea-400">*</span>
                                                </label>
                                                <input type="text" name="city" placeholder="Black" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <input type="submit" class="button b200" value="Send confirmation" />
                                </form>
                            <?php } ?>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">03</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Få ditt presentkort</h2>
                                    <div class="l10n">Vi skickar ett digitalt presentkort till dig inom 1 dag. Vi skickar även presentkortet fysiskt via posten enligt önskemål, detta tar normalt 2-3 dagar.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="flyers">
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Ge ett presentkort <br />till någon som du bryr dig om</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="https://via.placeholder.com/358x272.webp">
                            <source media="(min-width: 1024px)" srcset="https://via.placeholder.com/424x526.webp">
                            <img src="https://via.placeholder.com/358x272.webp" alt="Gift to someone" title="Gift to someone" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Välj Belopp eller Behandling</div>
                            <div class="gcf-text l10n">
                                På AcneSpecialisten ger vi dig flexibiliteten att skräddarsy ditt presentkort. Du kan välja att antingen ange ett specifikt belopp eller namnge en särskild behandling som du önskar ge bort. Detta gör våra presentkort till en personlig och uppskattad gåva, anpassad efter mottagarens behov och önskemål. Oavsett om det är en lyxig ansiktsbehandling eller ett bidrag till deras favoritprodukter, blir ditt presentkort en tankefull gest.
                            </div>
                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Beställ ett presentkort</button>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Gift to someone you care about</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="https://via.placeholder.com/358x272.webp">
                            <source media="(min-width: 1024px)" srcset="https://via.placeholder.com/424x526.webp">
                            <img src="https://via.placeholder.com/358x272.webp" alt="Gift to someone" title="Gift to someone" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Fungerar på Alla Våra Kliniker</div>
                            <div class="gcf-text l10n">
                                Våra presentkort är utformade för ultimat flexibilitet och kan användas på alla AcneSpecialistens kliniker. Oavsett vilken av våra lokaler mottagaren väljer att besöka, kan presentkortet lösas in hos någon av våra kvalificerade hudterapeuter. Presentkortet kan användas för både våra expertbehandlingar och vårt sortiment av högkvalitativa hudvårdsprodukter, vilket ger mottagaren friheten att välja den upplevelse som passar dem bäst.
                            </div>

                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Beställ ett presentkort</button>
                        </div>

                    </div>
                </section>
            </div>
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Omdömens</div>
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
                            <span class="l10n">Se alla omdömen</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
            </section>
            <!--Hudguide-->
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="Se alla specialister">Se alla specialister</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="presentkort/gift-cards.js"></script>

</body>

</html>