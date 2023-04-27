<?php
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

    <!-- Default imports (metadata, fonts, google analytics etc) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/gift-cards/gift-cards.css">
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
                        <source media="(max-width: 799px)" srcset="gift-cards/small.webp">
                        <source media="(min-width: 800px)" srcset="gift-cards/large.webp">
                        <img src="gift-cards/small.webp" alt="About us" width="360" height="274" />
                    </picture>
                </section>
                <section id="steps">
                    <div class="is-hidden-desktop">
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <h2 class="l10n">Swish money</h2>
                            </div>
                            <div class="gc-text l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
                            <hr />
                            <div id="swish-title">
                                <?php icon('swish-24') ?>
                                <span class="l10n">Our swish number</span>
                            </div>
                            <div id="swish-number-button">
                                <span>123 618 05 41</span>
                                <div id="swish-number-copy">
                                    <span class="l10n">Copy</span>
                                    <?php icon('copy') ?>
                                </div>
                            </div>
                            <a href="swish://paymentrequest?token=blablabla&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fgift-cards%3Fpaid%3D1" class="button outline expand l10n">Open Swish app</a>
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
                                    <a href="gift-cards" class="button white outline expand mt-xl">Resend</a>
                                </div>
                            <?php } else { ?>
                                <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                                <button class="mt-m outline expand l10n" onclick="openConfirmForm(this, '#small-form')">Confirm</button>
                                <form action="gift-cards/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="small-form">
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
                                    <label for="" class="mt-xl" id="screenshot-label">
                                        <span class="l10n">Payment screenshot</span>
                                        <span class="color-deep-sea-400">*</span>
                                    </label>
                                    <div class="p100">Add a screenshot of your money transfer.</div>
                                    <input class="button outline mt-m expand" type="file" required accept="image/png, image/jpeg" name="file" />
                                    <hr />
                                    <label class="checkbox">
                                        <span>I want a physical card also</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check"></span>
                                    </label>
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
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Swish money</h2>
                                    <div class="l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
                                </div>
                                <div class="gc-info" id="swish-info">
                                    <?php icon('swish-24') ?>
                                    <a href="swish://paymentrequest?token=blablabla&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fgift-cards%3Fpaid%3D1">123 618 05 41</a>
                                </div>
                            </div>
                        </div>
                        <div class="gift-card-step" id="step-2-large">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Confirmation</h2>
                                    <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                                </div>
                                <?php if (!form_completed()) { ?>
                                    <div class="gc-info">
                                        <button class="outline b200 l10n" onclick="openConfirmForm(this, '#large-form')">Confirm</button>
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
                                        <a href="gift-cards" class="button white outline">Resend</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <form action="gift-cards/?sent=1" enctype="multipart/form-data" method="POST" class="is-hidden" id="large-form">
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
                                        <span>I want a physical card also</span>
                                        <input type="checkbox" name="physical" />
                                        <span class="check"></span>
                                    </label>
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
                    <p>hello</p>
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
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
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
    <script src="gift-cards/gift-cards.js"></script>

</body>

</html>