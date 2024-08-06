<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php');
$path_segments = [
    new PathSegment('Studentrabatt', '/studentrabatt/'),
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/studentrabatt/" />

    <title class="l10n">Studentrabatt | AcneSpecialisten</title>
    <meta name="title" content="Studentrabatt | AcneSpecialisten" class="l10n">
    <meta name="description" content="Vi erbjuder 20% rabatt på alla våra ansiktsbehandlingar för dig som är student eller som inte fyllt 18 ännu." class="l10n">
    <meta name="keywords" content="studentrabatt" class="l10n">
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
                    <h1 class="l10n">Studentrabatt & ungdomsrabatt - 20%</h1>
                    <p class="l10n">Vi erbjuder 20% rabatt på alla våra ansiktsbehandlingar för dig som är student eller som inte fyllt 18 ännu. Allt du behöver göra är att boka behandling hos någon av våra hudterapeuter och sedan uppvisa ditt mecenatkort via appen så drar vi av 20% på ditt besök.</p>
                    <a href="/hudbehandlingar/" class="button expand l10n" title="Boka behandling">Se behandlingar</a>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="/bilder/studentrabatt/mobile/banner.webp">
                        <source media="(min-width: 800px)" srcset="/bilder/studentrabatt/desktop/banner.webp">
                        <img src="/bilder/studentrabatt/mobile/banner.webp" alt="Studentrabatt" title="Studentrabatt" width="360" height="274" />
                    </picture>
                </section>
                <section id="flyers">
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Alla våra ansiktsbehandlingar</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/studentrabatt/mobile/slide-1.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/studentrabatt/desktop/slide-1.webp">
                            <img src="/bilder/studentrabatt/mobile/slide-1.webp" alt="Alla våra hudvårdsbehandlingar" title="Alla våra hudvårdsbehandlingar" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Alla våra ansiktsbehandlingar</div>
                            <div class="gcf-text l10n">
                                Studentrabatten går att använda på alla våra ansiktsbehandlingar för problemhy och klassiska ansiktsbehandlingar.
                            </div>
                            <a href="/hudbehandlingar/" class="mt-xl button b200 outline expand auto-width" title="Boka behandling">Se behandlingar</a>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Alla våra kliniker</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="/bilder/studentrabatt/mobile/slide-2.webp">
                            <source media="(min-width: 1024px)" srcset="/bilder/studentrabatt/desktop/slide-2.webp">
                            <img src="/bilder/studentrabatt/mobile/slide-2.webp" alt="Alla Våra Kliniker" title="Alla våra kliniker" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Alla våra kliniker</div>
                            <div class="gcf-text l10n">
                                Studentrabatten kan användas på alla våra kliniker för både enskilda ansiktsbehandlingar och kurer.
                            </div>

                            <a href="/hudbehandlingar/" class="mt-xl button b200 outline expand auto-width" title="Boka behandling">Se behandlingar</a>
                        </div>

                    </div>

                </section>

                <section id="approach">
                    <h2 class="h500 l10n">Metoden</h2>
                    <hr class="mt-xl mb-xl3 is-hidden-mobile">
                    <div class="columns is-variable is-2">
                        <div class="column">
                            <div class="treatment-step-card-widget">
                                <div>
                                    <div class="treatment-step-title">
                                        <div class="index-circle">
                                            <span>0</span>
                                            <span>1</span>
                                        </div>
                                        <div>Identifiera</div>
                                    </div>
                                    <div class="treatment-step-content">Din hudvårdsresa börjar med en gratis hudkonsultation på klinik eller online. Under besöket får du träffa en av våra hudterapeuter som analyserar din hudtyp och skapar en personlig behandlingpslan för just dig.</div>
                                </div>
                                <a href="gratis-hudkonsultation.php" class="button grey expand is-hidden-tablet" title="Boka gratis en konsultation">Boka en gratis konsultation</a>
                                <a href="gratis-hudkonsultation.php" class="button b200 text compact is-hidden-mobile" title="Boka en gratis konsultation">Boka en gratis konsultation</a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="treatment-step-card-widget">
                                <div>
                                    <div class="treatment-step-title">
                                        <div class="index-circle">
                                            <span>0</span>
                                            <span>2</span>
                                        </div>
                                        <div>Behandla</div>
                                    </div>
                                    <div class="treatment-step-content">När vi identifierat dina hudproblem utför vi den behandlng som passar bäst för just ditt hudtillstånd. Behandlingsmetod väljs ut baserat på dina individuella behov.</div>
                                </div>
                                <a href="/hudbehandlingar/" class="button grey expand is-hidden-tablet" title="Se våra behandlingar">Se våra behandlingar</a>
                                <a href="/hudbehandlingar/" class="button b200 text compact is-hidden-mobile" title="Se våra behandlingar">Se våra behandlingar</a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="treatment-step-card-widget">
                                <div>
                                    <div class="treatment-step-title">
                                        <div class="index-circle">
                                            <span>0</span>
                                            <span>3</span>
                                        </div>
                                        <div>Förebygg</div>
                                    </div>
                                    <div class="treatment-step-content">Vi ger dig skräddarsydd hudvårdsrutin och rekommenderar högkvalitativa hudvårdsprodukter som är anpassade för att behandla och förebygga ditt hudproblem.</div>
                                </div>
                                <a href="https://dahlskincare.se" class="button grey expand is-hidden-tablet" title="Se produkterna">Se produkterna</a>
                                <a href="https://dahlskincare.se" class="button b200 text compact is-hidden-mobile" title="Boka gratis konsultation">Se produkterna</a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="treatment-step-card-widget">
                                <div>
                                    <div class="treatment-step-title">
                                        <div class="index-circle">
                                            <span>0</span>
                                            <span>4</span>
                                        </div>
                                        <div>Reparera</div>
                                    </div>
                                    <div class="treatment-step-content">När du blivit av med ditt hudproblem är det dags att återställa de skador som orsakats på din hy såsom ärr och pigmenteringar. Vi erbjuder de senaste metoderna för att reparera och återställa din hy.</div>
                                </div>
                                <a href="behandla-acnearr.php" class="button grey expand is-hidden-tablet" title="Läs mer om eftervård">Läs mer om eftervård</a>
                                <a href="behandla-acnearr.php" class="button b200 text compact is-hidden-mobile" title="Läs mer om eftervård">Läs mer om eftervård</a>
                            </div>
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