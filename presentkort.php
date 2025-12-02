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
    <meta name="description" content="Ge bort skönhet med ett digitalt presentkort. Perfekt för hudvård, ansiktsbehandlingar och mer. Skicka kärlek online med ett klick!" class="l10n">
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
                            <div class="gc-text l10n">Skicka valfritt belopp till 123 010 64 43 som du vill sätta in på presentkortet.</div>
                        </div>
                        <div class="gift-card-step" id="step-2-small">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <h2 class="l10n">Skicka in</h2>
                            </div>
                            <div class="gc-text l10n">Skicka i din information och bifoga en skärmbild på Swish bekräftelsen till info@acnespecialisten.se</div>
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
                                    <div class="l10n">Skicka valfritt belopp till 123 010 64 43 som du vill sätta in på presentkortet.</div>
                                </div>
                            </div>
                        </div>
                        <div class=" gift-card-step" id="step-2-large">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Skicka in</h2>
                                    <div class="gc-text l10n">Skicka i din information och bifoga en skärmbild på Swish bekräftelsen till info@acnespecialisten.se</div>
                                </div>
                            </div>
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
                            <img loading="lazy" src="/bilder/presentkort/mobile/slide-1.webp" alt="Välj Belopp eller Behandling" title="Välj Belopp eller Behandling" width="358" height="272" />
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