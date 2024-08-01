<?php
require 'vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php';

$path_segments = [
    new PathSegment('Presentkort', 'presentkort.php'),
];

use Ramsey\Uuid\Uuid;

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

$phone_no = '1232335198';

class Payee
{
    public function __construct($value, $editable)
    {
        $this->value = $value;
        $this->editable = $editable;
    }

    public string $value;
    public bool $editable;
}

class Amount
{
    public function __construct($value, $editable)
    {
        $this->value = $value;
        $this->editable = $editable;
    }

    public int $value;
    public bool $editable;
}

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
    $from = 'Acnespecialisten <hej@acnespecialisten.se>';
    $to = "presentkort@acnespecialisten.se";
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
} else {
    $amount = array_key_exists('amount', $_GET) ? $_GET['amount'] : '1000';
    $uuid4 = Uuid::uuid4();
    $id = str_replace('-', '', strtoupper($uuid4));
    $url = "https://cpc.getswish.net/swish-cpcapi/api/v2/paymentrequests/" . $id;
    $clientCert = $_SERVER['DOCUMENT_ROOT'] . "/../.ssl/cert.pem";
    //$clientCert = $_ENV['SWISH_SSL_FOLDER'] . "/cert.p12";
    //$rootCert = $_ENV['SWISH_SSL_FOLDER'] . "/Swish_TLS_RootCA.pem";
    $pwd = "Mammamia123";

    $data = [
        "payeePaymentReference" => $id,
        "callbackUrl" => "https://acnespecialisten.se/presentkort?paid=1",
        //"payerAlias" => "4671234768",
        "payeeAlias" => $phone_no,
        "amount" => intval($amount),
        "currency" => "SEK",
        "message" => "Presentkort Acnespecialisten"
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_SSLCERT, $clientCert);
    //curl_setopt($ch, CURLOPT_SSLCERTTYPE, "P12");
    curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $pwd);
    //curl_setopt($ch, CURLOPT_CAINFO, $rootCert);

    $response = curl_exec($ch);
    if ($response === false) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }

    $token = substr($response, strpos($response, "PaymentRequestToken: ") + strlen("PaymentRequestToken: "), 32);

    curl_close($ch);

    $json_data = json_encode(array(
        "format" => "png",
        "size" => 300,
        "transparent" => true,
        "payee" => new Payee($phone_no, false),
        "amount" => new Amount(intval($amount), true),
    ));
    $ch = curl_init('https://mpc.getswish.net/qrg-swish/api/v1/prefilled');

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
    $response = curl_exec($ch);
    if ($response === false) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }
    $qr_image_desktop = 'data:image/png;base64,' . base64_encode($response);

    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/presentkort.php" />

    <title class="l10n">Digitalt presentkort på hudvård & skönhet</title>
    <meta name="title" content="Digitalt presentkort på hudvård & skönhet" class="l10n">
    <meta name="description" content="Ge bort skönhet med ett digitalt presentkort. Perfekt för hudvård, ansiktsbehandlingar och mer. Skicka kärlek online med ett klick!" class="l10n">
    <meta name="keywords" content="presentkort, presentkort hudvård, digitalt presentkort, skicka digitalt presentkort, presentkort online, skicka presentkort online" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/presentkort/gift-cards.css">
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
                    <h1 class="l10n">Presentkort</h1>
                    <p class="l10n">Ge bort en omtänksam gåva med ett presentkort på hudvårdfrån AcneSpecialisten. Nu kan du enkelt skicka en uppskattad present utan att besöka kliniken. Swisha oss det valda beloppet eller ange önskad behandling, och vi skickar ett vackert utformat presentkort direkt till dig eller mottagaren. Våra presentkort är en flexibel gåva som ger mottagaren friheten att välja bland våra många hudvårdsbehandlingar eller kvalitetsprodukter, perfekt för att visa att du bryr dig.</p>
                    <div class="button b200 expand" onclick="document.querySelector('#steps').scrollIntoView()">Köp ett presentkort</div>
                    <div class="button outline b200 expand" onclick="document.querySelector('#terms-modal-overlay').classList.remove('is-hidden')">Allmänna villkor</div>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="/bilder/presentkort/mobile/banner.webp">
                        <source media="(min-width: 800px)" srcset="/bilder/presentkort/desktop/banner.webp">
                        <img src="presentkort/small.webp" alt="Presentkort" title="Presentkort" width="360" height="274" />
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
                                <a href="swish://paymentrequest?token=<?php echo $token ?>&callbackurl=https%3A%2F%2Facnespecialisten.se%2Fpresentkort%3Fpaid%3D1" class="button outline expand l10n" title="Open Swish app">Öppna Swish-appen</a>
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
                            <div class="gc-text l10n">Vi skickar ett digitalt presentkort online till dig inom 1 dag. Vi skickar även presentkortet fysiskt via posten enligt önskemål, detta tar normalt 2-3 dagar.</div>
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
                                        <div class="mt-s h200"><?php echo $phone_no ?></div>
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
                        <div class="h500 is-hidden-desktop l10n">Välj belopp eller behandling</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/presentkort/mobile/slide-1.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/presentkort/desktop/slide-1.webp">
                            <img src="/bilder/presentkort/mobile/slide-1.webp" alt="Välj Belopp eller Behandling" title="Välj Belopp eller Behandling" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Välj belopp eller behandling</div>
                            <div class="gcf-text l10n">
                                På AcneSpecialisten ger vi dig flexibiliteten att skräddarsy ditt presentkort. Du kan välja att antingen ange ett specifikt belopp eller namnge en särskild behandling som du önskar ge bort. Detta gör våra presentkort till en personlig och uppskattad gåva, anpassad efter mottagarens behov och önskemål.
                            </div>
                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Beställ ett presentkort</button>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Fungerar på alla våra kliniker</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/presentkort/mobile/slide-2.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/presentkort/desktop/slide-2.webp">
                            <img src="/bilder/presentkort/mobile/slide-2.webp" alt="Fungerar på Alla Våra Kliniker" title="Fungerar på alla våra kliniker" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Fungerar på alla våra kliniker</div>
                            <div class="gcf-text l10n">
                                Våra presentkort är utformade för ultimat flexibilitet och kan användas på alla AcneSpecialistens kliniker. Oavsett vilken av våra lokaler mottagaren väljer att besöka, kan presentkortet lösas in hos någon av våra kvalificerade hudterapeuter. Presentkortet kan användas för alla våra expertbehandlingar vilket ger mottagaren friheten att välja den upplevelse som passar dem bäst.
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
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>

            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla specialister">Se alla specialister</a>
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

    <div id="terms-modal-overlay" class="is-hidden">
        <div id="terms-modal">
            <h2>Presentkortsvillkor</h2>
            <ul class="p100">
                <li><strong>Giltighetstid:</strong>
                    <span>Presentkortet är giltigt i 1 år från köpdatumet.</span>
                </li>
                <li>
                    <strong>Återbetalningspolicy:</strong>
                    <span>En ångerrätt på 30 dagar efter köpdatumet tillämpas.</span>
                </li>
                <li>
                    <strong>Inlösen:</strong>
                    <span>Presentkortet kan inte bytas in mot kontanter.</span>
                </li>
                <li>
                    <strong>Leveransform:</strong>
                    <span>Presentkortet levereras digitalt och eller fysiskt via post om så önskas.</span>
                </li>
                <li>
                    <strong>Moms:</strong>
                    <span>Inget moms tillkommer på värdet av presentkortet.</span>
                </li>
                <li>
                    <strong>Kontaktinformation:</strong>
                    <span>Fullständig kontaktinformation finns på vår kontaktsida, inklusive e-post och telefonnummer.</span>
                </li>
            </ul>
            <p>Presentkortet kan användas för tjänster hos någon av våra kliniker. För ytterligare information och detaljer, vänligen referera till våra presentkortsvillkor på hemsidan.</p>
            <p>AcneSpecialisten Sverige AB</p>
            <p>Organisationsnummer: 556530-0695</p>
            <button class="button round-small outline" onclick="document.querySelector('#terms-modal-overlay').classList.add('is-hidden')"><?php icon('close') ?></button>
        </div>
    </div>

</body>

</html>