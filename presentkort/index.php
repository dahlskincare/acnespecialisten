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
                    <h1 class="l10n">Gift cards</h1>
                    <p class="l10n">Buy gift card and give as a gift to someone you care about. Gift cards are valid for all procedures in all our clinics and are valid for 1 year from the date of receipt.</p>
                    <div class="button b200 expand" onclick="document.querySelector('#steps').scrollIntoView()">Order a gift card</div>
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
                                <h2 class="l10n">Swish money</h2>
                            </div>
                            <div class="gc-text l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
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
                                <a href="swish://paymentrequest?token=<?php echo $client->createPaymentRequest($pr)->paymentRequestToken ?>&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fpresentkort%3Fpaid%3D1" class="button outline expand l10n" title="Open Swish app">Open Swish app</a>
                            <?php } ?>
                        </div>
                        <div class="gift-card-step" id="step-2-small">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <h2 class="l10n">Confirmation</h2>
                            </div>
                            <?php if (form_completed()) { ?>
                                <div class="confirmation-banner mt-m">
                                    <div class="h400 l10n">Your confirmation has been sent</div>
                                    <div class="p200 mt-xxs l10n">We will contact you as soon as possible.</div>
                                    <a href="presentkort" class="button white outline expand mt-xl" title="Resend">Resend</a>
                                </div>
                            <?php } else { ?>
                                <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                                <button class="mt-m outline expand l10n" id="small-form-button" onclick="openConfirmForm(this, '#small-form')">Confirm</button>
                                <form action="presentkort/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="small-form">
                                    <hr />
                                    <label for="firstname">
                                        <span class="l10n">First name</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="text" name="firstname" placeholder="Anette" required />
                                    <label for="lastname" class="mt-xl">
                                        <span class="l10n">Last name</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="text" name="lastname" placeholder="Black " required />
                                    <label for="email" class="mt-xl">
                                        <span class="l10n">Recipient email</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="email" name="email" placeholder="example@email.com" required />
                                    <label for="phone" class="mt-xl l10">Phone number</label>
                                    <input type="phone" name="phone" placeholder="08 123 456" />
                                    <label class="mt-xl" id="screenshot-label">
                                        <span class="l10n">Payment screenshot</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <div class="p100">Add a screenshot of your money transfer.</div>
                                    <input class="button outline mt-m expand" type="file" required accept="image/png, image/jpeg" name="file" />
                                    <hr />
                                    <label class="checkbox">
                                        <span onclick="onPhysicalChange(this)">I want a physical card also</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check" onclick="onPhysicalChange(this)"></span>
                                    </label>
                                    <div class="physicalAddressDetails is-hidden">
                                        <div class="physicalAddressDetails is-hidden">
                                            <label for="street1" class="mt-xl">
                                                <span class="l10n">Address line 1</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="street1" placeholder="Street, house, apartment..." />
                                            <label for="street2" class="mt-xl">
                                                <span class="l10n">Address line 2</span>
                                            </label>
                                            <input type="text" name="street2" placeholder="Office number, floor, room..." />
                                            <div class="columns is-variable is-3">
                                                <div class="column">
                                                    <label for="zip" class="mt-xl">
                                                        <span class="l10n">Postal code</span>
                                                        <span class="color-deep-sea-400">*</span>
                                                    </label>
                                                    <input type="text" name="zip" placeholder="12345" />
                                                </div>
                                                <div class="column">
                                                    <label for="city" class="mt-xl">
                                                        <span class="l10n">Town or city</span>
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
                                <h2 class="l10n">Get your gift card</h2>
                            </div>
                            <div class="gc-text l10n">We will send you an electronic version of the gift card on your email and, if you wish, a physical gift card to your address, usually it takes up to 2 days.</div>
                        </div>
                    </div>
                    <div class="is-hidden-touch">
                        <div class="gift-card-step" id="step-1-large">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Swish money</h2>
                                    <div class="l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
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
                                    <h2 class="l10n">Confirmation</h2>
                                    <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                                </div>
                                <?php if (!form_completed()) { ?>
                                    <div class="gc-info">
                                        <button class="outline b200 l10n" id="large-form-button" onclick="openConfirmForm(this, '#large-form')">Confirm</button>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if (form_completed()) { ?>
                                <hr />
                                <div class="confirmation-banner">
                                    <div class="flex-row align-center justify-space-between">
                                        <div>
                                            <div class="h400 l10n">Your confirmation has been sent</div>
                                            <div class="p200 mt-xxs l10n">We will contact you as soon as possible.</div>
                                        </div>
                                        <a href="presentkort" class="button white outline" title="Resend">Resend</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <form action="presentkort/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="large-form">
                                    <hr />
                                    <div class="columns is-variable is-3">
                                        <div class="column">
                                            <label for="firstname">
                                                <span class="l10n">First name</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="firstname" placeholder="Annette" required />
                                        </div>
                                        <div class="column">
                                            <label for="lastname">
                                                <span class="l10n">Last name</span>
                                                <span class="color-deep-sea-400">*</span>
                                            </label>
                                            <input type="text" name="lastname" placeholder="Black" required />
                                        </div>
                                    </div>
                                    <label for="email" class="mt-xl">
                                        <span class="l10n">Recipient email</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <input type="email" name="email" placeholder="example@email.com" required />
                                    <label for="phone" class="mt-xl l10">Phone number</label>
                                    <input type="phone" name="phone" placeholder="08 123 456" />
                                    <label for="" class="mt-xl" id="screenshot-label">
                                        <span class="l10n">Payment screenshot</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <div id="upload-area" ondrop="onFileDrop(event)" ondragover="event.preventDefault()">
                                        <div class="p100 l10n">Add a screenshot of your money transfer.</div>
                                        <div>
                                            <div class="button outline l10n" id="upload-button" onclick="document.querySelector('#upload-input').click()">Upload a photo</div>
                                            <input type="file" id="upload-input" onchange="onFileChange(event)" required accept="image/png, image/jpeg" name="file" />
                                        </div>
                                    </div>
                                    <hr />
                                    <label class="checkbox">
                                        <span onclick="onPhysicalChange(this)">I want a physical card also</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check" onclick="onPhysicalChange(this)"></span>
                                    </label>
                                    <div class="physicalAddressDetails is-hidden">
                                        <label for="street1" class="mt-xl">
                                            <span class="l10n">Address line 1</span>
                                            <span class="color-deep-sea-400">*</span>
                                        </label>
                                        <input type="text" name="street1" placeholder="Street, house, apartment..." />
                                        <label for="street2" class="mt-xl">
                                            <span class="l10n">Address line 2</span>
                                        </label>
                                        <input type="text" name="street2" placeholder="Office number, floor, room..." />
                                        <div class="columns is-variable is-3">
                                            <div class="column">
                                                <label for="zip" class="mt-xl">
                                                    <span class="l10n">Postal code</span>
                                                    <span class="color-deep-sea-400">*</span>
                                                </label>
                                                <input type="text" name="zip" placeholder="12345" />
                                            </div>
                                            <div class="column">
                                                <label for="city" class="mt-xl">
                                                    <span class="l10n">Town or city</span>
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
                                    <h2 class="l10n">Get your gift card</h2>
                                    <div class="l10n">We will send you an electronic version of the gift card on your email and, if you wish, a physical gift card to your address, usually it takes up to 2 days.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="flyers">
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Gift to someone you <br />care about</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="https://via.placeholder.com/358x272.webp">
                            <source media="(min-width: 1024px)" srcset="https://via.placeholder.com/424x526.webp">
                            <img src="https://via.placeholder.com/358x272.webp" alt="Gift to someone" title="Gift to someone" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Gift to someone <br />you care about</div>
                            <div class="gcf-text l10n">
                                Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                            </div>
                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Order a gift card</button>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Gift to someone you <br />care about</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="https://via.placeholder.com/358x272.webp">
                            <source media="(min-width: 1024px)" srcset="https://via.placeholder.com/424x526.webp">
                            <img src="https://via.placeholder.com/358x272.webp" alt="Gift to someone" title="Gift to someone" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Gift to someone <br />you care about</div>
                            <div class="gcf-text l10n">
                                Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                            </div>
                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Order a gift card</button>
                        </div>

                    </div>
                </section>
            </div>
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                </div>
            </section>
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
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
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
                    <a href="specialister" class="button compact text is-hidden-mobile">
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
    <script src="presentkort/gift-cards.js"></script>

</body>

</html>