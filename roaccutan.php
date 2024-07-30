<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$article = new SkinGuideArticle(
    url: 'roaccutan.php',
    url_title: 'Roaccutan',
    title: 'Roaccutan',
    subtitle: 'Här förklarar vi vad roaccutan är, varför det används och synliggör för- och nackdelar med medicinen.',
    problem: 'Roaccutan',
    description: "Här förklarar vi vad roaccutan är, varför det används och synliggör för- och nackdelar med medicinen.",
    image_small: 'bilder/hudguide/426x324/roaccutan.jpg',
    image_large: 'bilder/hudguide/872x456/roaccutan.jpg',
    image_alt: 'Roaccutan',
    image_title: 'Roaccutan',
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/roaccutan.php" />

    <title class="l10n">Information om acnemedicinen Roaccutan | AcneSpecialisten</title>
    <meta name="title" content="Information om acnemedicinen Roaccutan | AcneSpecialisten" class="l10n">
    <meta name="description" content="Roaccutan är en acne medicin. Här hittar du mer information om roaccutan och dess biverkningar, vi erbjuder effektiv behandling utan roaccutan." class="l10n">
    <meta name="keywords" content="accutane, roaccutan, akne medicin, accutane svenska, roaccutane, roacutan, isotretinoin före efter, acne medicin, medicin mot akne, akne kräm recept, antibiotika mot akne, biverkningar roaccutan, roaccutan biverkningar, accutane sweden, akne tabletter, antibiotika mot akne resultat, roaccutan fass" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudguide/category/subcategory/article/article.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <section id="desktop-breadcrumbs" class="is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            </section>
            <div id="article-wrapper">
                <section id="metadata">
                    <h1 id="article-title"><?php echo $article->title ?></h1>
                    <h3 id="article-subtitle"><?php echo $article->subtitle ?></h3>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $article->image_large ?>">
                        <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" title="<?php echo $article->title ?>" width="360" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons" class="is-hidden">
                    <div id="nav-buttons-container">
                        <div class="scroll-button is-hidden" id="scroll-prev">
                            <button class="round-medium grey">
                                <?php icon('arrow-left') ?>
                            </button>
                        </div>
                        <div class="scroll-button is-hidden" id="scroll-next">
                            <button class="round-medium grey">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <div id="nav-buttons-scroller">
                            <div class="flex-row">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content">
                    <h2 class="nav-anchor">Översikt</h2>
                    <h3>Vad är roaccutan?</h3>
                    <p>
                        Acnemedicinen roaccutan tillhör en grupp av läkemedel som kallas för retinoider. Preparatet har flera benämningar såsom accutane och roaccutane på engelska, och det är inte ovanligt att det kallas roccutan eller roacutan på Svenska. De är besläktade med A-vitamin, ett vitamin som du bär på naturligt och är därför viktigt för både huden och kroppen i viss mängd. Läkemedlet roaccutan används främst vid mycket svår acne och är ett av de få läkemedel som faktiskt visat sig ha effekt på acnebenägen hy. Det lanserades av Hoffman-La Roche under 1980-talet.
                    </p>
                    <p>
                        En behandling pågår normalt mellan 16 och 24 veckor. Medicinen är paketerad i form av röd-bruna gelatinkapslar eller tabletter som du äter dagligen. Roaccutan är inte receptfritt utan skrivs ut av legitimerade läkare under särskilda förhållanden.
                    </p>
                    <h3>Vilken effekt har roaccutan?</h3>
                    <ol>
                        <li>
                            Roaccutans exakta påverkan när det kommer till cellnivå är fortfarande okänd. Däremot visar flera studier att det framkallar något som heter apoptos, alltså celldöd, i bland annat cellerna som finns i dina talgkörtlar. Men det är inte bara dina celler som påverkas av acnemedicinen roaccutan. Anledningen till att den är så effektiv mot just acne, är för att den klarar av att påverka alla de faktorer som gör att acne bildas i huden. <a href="acne.php">Här kan du läsa mer om acne.</a>
                        </li>
                        <li>
                            Med medicinen roaccutan minskar talgkörtlarnas storlek och då i sin tur också talgproduktionen. Eftersom talgproduktionen reduceras minskar också antalet av den bakterie, propionibacterium acnes, som resulterar i acne. Den kan nämligen inte leva utan talg. Preparatet har också en antiinflammatorisk effekt och är starkt avfjällande på huden. A-vitamin må vara viktigt för din kropp och din hud, men den torkar också ut rejält.
                        </li>
                        <li>
                            Med tanke på preparatets positiva resultat när det kommer till att reducera acne i vissa fall så låter väl inte roaccutan som en allt för tokig idé kanske. Vad man däremot bör veta är att medicinen inte är vidare snäll mot resten av kroppen. I processen att bli kvitt acnen med roaccutan tillkommer det en rad biverkningar.
                        </li>
                    </ol>

                    <h2 class="nav-anchor">De vanligaste biverkningarna</h2>

                    <!-- FAQ -->
                    <div class="faq">
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Mycket torr hud</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                A-vitamin torkar ut huden.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Ömtålig hud</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Du skall undvika vaxning och annan kraftfullare behandling av huden i ett halvår efter avslutad roaccutankur.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Ljuskänslig hud</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Du bör hålla dig försiktig i närheten av stark solexponering.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Torra slemhinnor</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Även synsvårigheter kan förekomma.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Ögoninflammationer</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Även synsvårigheter kan förekomma.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Försämrat mörkerseende</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Kan inträffa plötsligt och bilkörning eller användande av tex. maskiner på natten kan påverkas.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Förhöjning av triglycerid nivåerna.</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Alltså fettet i blodet. Läkare håller koll på detta via blodprov både innan och under kuren.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Mag- och tarm-påverkan </span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Du kan drabbas av bland annat kräkningar och ändtarms-inflammationer
                            </div>
                        </div>
                    </div>

                    <h3 class="nav-anchor">Användande av roaccutan</h3>
                    <ul>
                        <li>
                            Det är mot alla rekommendationer att använda roaccutan i fall om graviditet. Läkemedlet orsakar svåra fosterskador vilket också kan resultera i kroppsliga missbildningar och hjärnskada på barnet. Inom både EU och USA finns det därför krav på att fertila kvinnor måste använda sig av minst ett effektivt preventivmedel som kan hämma ägglossningen. Däremot kan det inte överföras från män vid befruktning. Det skadar alltså inte männens spermie-produktion eller dess kvalité. Varken män eller kvinnor som använder roaccutan är tillåtna att donera blod under behandlingen.
                        </li>
                        <li>
                            Roccutan är fettlösligt och lagras därför i kroppens fettdepåer i upp till en månad efter att du avslutat din behandling. Det gör att risken för att drabbas av en eller flera av de kända biverkningarna blir ännu större. I vissa sällsynta fall kan biverkningarna bli permanenta.
                        </li>
                        <li>
                            Eftersom acne inte går att bota är risken även stor att din acne kommer åter - trots att du gått på roaccutan en eller flera gånger. Därför vore det allra bästa att hitta ett hållbart alternativ som på sikt inte bara reducerar acnen utan även håller den borta utan en rad negativa biverkningar. Vi rekommenderar därför att du provar vår metod i första hand, eller om du redan provat roaccutan med upplevt att acnen kommit tillbaka. Vi arbetar med en unik trestegs-metod som bygger på att identifiera och reducera hudproblem och långsiktigt arbeta med en hudvårdsrutin som håller problemen borta. Och det gör vi utan allvarliga biverkningar.
                        </li>
                        <li>
                            Börja med att <a href="gratis-hudkonsultation.php">boka en kostnadsfri hudkonsultation</a> hos oss, så tar vi tillsammans det första steget mot en för dig problemfri hy.
                        </li>
                    </ul>

                    <h2 class="nav-anchor">Andra biverkningar</h2>

                    <!-- FAQ -->
                    <div class="faq">
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Led och muskelvärk</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Din normala träningsrutin kan komma att påverkas och du kanske inte klarar av samma saker som innan.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Neurologiska biverkningar</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Huvudvärk och yrsel.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Leverskador</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Preparatet roaccutan bryts ned i levern. Man bör därför undvika alkohol under behandlingen.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Förhöjt blodsocker</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                I sällsynta fall kan det orsaka diabetes.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Depression</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                I sällsynta fall även självmordstankar.
                            </div>
                        </div>
                    </div>

                    <h2 class="nav-anchor">Vanliga frågor</h2>

                    <!-- FAQ -->
                    <div class="faq">
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Är roaccutan farligt?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Det finns ingenting som garanterar att du inte drabbas av någon eller några biverkningar. Roaccutan har en rad negativa biverkningar som man bör läsa igenom, och noggrant överväga, innan man börjar använda medicinen.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Hjälper medicinen roaccutan mot acne?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Roaccutan har visat sig vara ett av få läkemedel som har en positiv effekt på acnebenägen hy. Däremot finns det ingenting som garanterar att acnen kommer hålla sig borta för alltid bara för att du använt roaccutan en eller flera gånger. Acne beror på anlagoch ingenting man kan bota. Därför kan acnen komma tillbaka senare i livet efter att man är färdig med sin roaccutankur.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Varför ska man använda er metod istället?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Roaccutan har visat sig vara ett av få läkemedel som har en positiv effekt på acnebenägen hy. Däremot finns det ingenting som garanterar att acnen kommer hålla sig borta för alltid bara för att du använt roaccutan en eller flera gånger. Acne beror på anlagoch ingenting man kan bota. Därför kan acnen komma tillbaka senare i livet efter att man är färdig med sin roaccutankur.
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <section class="large-margin" id="cta-banner">
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
                    <div class="h500 l10n">Frågor & svar</div>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Våra hudterapeuter</div>
                    <a href="hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="hudguide/category/subcategory/article/article.js"></script>
</body>

</html>