<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php';

$path_segments = [
    new PathSegment('Presentkort', 'presentkort.php'),
];

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <style>
        html {
            scroll-behavior: smooth;
        }

        div#content {
            margin: 0 auto;
            max-width: 872px;
        }

        div#content section#title {
            margin-top: 24px;
        }

        div#content section#title h1 {
            font-family: "DM Serif Text", serif;
            font-size: 40px;
            line-height: 48px;
            letter-spacing: -0.02em;
            font-weight: 400;
        }

        @media screen and (min-width: 1024px) {
            div#content section#title h1 {
                font-family: "DM Serif Text", serif;
                font-size: 56px;
                line-height: 64px;
                letter-spacing: -0.02em;
                font-weight: 400;
            }
        }

        div#content section#title p {
            font-family: "Inter", sans-serif;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -0.02em;
            font-weight: 400;
            margin-top: 8px;
        }

        @media screen and (min-width: 1024px) {
            div#content section#title p {
                font-family: "Inter", sans-serif;
                font-size: 16px;
                line-height: 24px;
                letter-spacing: -0.02em;
                font-weight: 400;
            }
        }

        div#content section#title .button {
            margin-top: 24px;
        }

        @media screen and (min-width: 1024px) {
            div#content section#title {
                margin-top: 56px;
            }

            div#content section#title p {
                margin-top: 12px;
            }

            div#content section#title .button {
                width: auto;
            }
        }

        div#content section#image {
            margin-top: 24px;
            font-size: 0;
        }

        div#content section#image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media screen and (min-width: 1024px) {
            div#content section#image {
                margin-top: 40px;
            }
        }
    </style>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/presentkort/gift-cards.css">

    <link rel="canonical" href="https://www.acnespecialisten.se/presentkort.php" />

    <title class="l10n">Digitalt presentkort på hudvård & skönhet</title>
    <meta name="title" content="Digitalt presentkort på hudvård & skönhet" class="l10n">
    <meta name="description" content="Ge bort ett digitalt presentkort på hudvård från AcneSpecialisten. Köp i kliniken, online via Bokadirekt eller få det hemskickat." class="l10n">
    <meta name="keywords" content="presentkort, presentkort hudvård, digitalt presentkort, skicka digitalt presentkort, presentkort online, skicka presentkort online" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>


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
                    <p class="l10n">Ge bort en omtänksam gåva med ett presentkort på hudvård från AcneSpecialisten. Du kan köpa presentkort på plats på någon av våra kliniker eller online. Online köper du enkelt via Bokadirekt genom att klicka på din närmaste klinik nedan. Vill du få presentkortet fysiskt hemskickat hör du av dig till vår <a href="kontakt.php">kundtjänst</a>, så skickar vi ett presentkort med valt belopp eller behandling.</p>
                    <div class="button b200 expand" onclick="document.querySelector('#steps').scrollIntoView()">Köp ett presentkort</div>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="/bilder/presentkort/mobile/banner.webp">
                        <source media="(min-width: 800px)" srcset="/bilder/presentkort/desktop/banner.webp">
                        <img src="presentkort/small.webp" alt="Presentkort" title="Presentkort" width="360" height="274" />
                    </picture>
                </section>
                <section id="steps">
                    <h2 class="l10n">Välj klinik</h2>
                    <p class="gc-text l10n">Klicka på din närmaste klinik för att köpa presentkortet via Bokadirekt.</p>
                    <div id="clinic-selector">
                        <a href="https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539/giftcard/checkout" class="button b200 expand l10n" target="_blank" rel="noopener">Östermalm</a>
                        <a href="https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-135540/giftcard/checkout" class="button b200 expand l10n" target="_blank" rel="noopener">Södermalm</a>
                        <a href="https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-135394/giftcard/checkout" class="button b200 expand l10n" target="_blank" rel="noopener">Sundbyberg</a>
                    </div>
                </section>
                <section id="flyers">
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Köp på plats eller få det hemskickat</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/presentkort/mobile/slide-1.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/presentkort/desktop/slide-1.webp">
                            <img loading="lazy" src="/bilder/presentkort/mobile/slide-1.webp" alt="Köp presentkort på plats eller få det hemskickat" title="Köp presentkort på plats eller få det hemskickat" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Köp på plats eller få det hemskickat</div>
                            <div class="gcf-text l10n">
                                Du är varmt välkommen att köpa presentkort på plats på någon av våra kliniker. Vill du hellre få presentkortet fysiskt hemskickat hör du av dig till vår <a href="kontakt.php">kundtjänst</a>, så skickar vi ett presentkort med det belopp eller den behandling du väljer.
                            </div>
                            <button class="outline b200 expand l10n" onclick="document.querySelector('#steps').scrollIntoView()">Beställ ett presentkort</button>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Fungerar på alla våra kliniker</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/presentkort/mobile/slide-2.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/presentkort/desktop/slide-2.webp">
                            <img loading="lazy" src="/bilder/presentkort/mobile/slide-2.webp" alt="Fungerar på Alla Våra Kliniker" title="Fungerar på alla våra kliniker" width="358" height="272" />
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
                        <span class="l10n">Se fler frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se fler frågor">Se fler frågor</a>
            </section>

            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="hudterapeut/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut/" title="Se alla specialister">Se alla specialister</a>
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

</body>

</html>