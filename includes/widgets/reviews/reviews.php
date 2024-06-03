<?php
$icon_registry = [
    'Google' => ['google-star-empty', 'google-star-half', 'google-star'],
    'Trustpilot' => ['trustpilot-green-empty', 'trustpilot-green-half', 'trustpilot-green'],
    'Bokadirekt' => ['bokadirekt-star-empty', 'bokadirekt-star-half', 'bokadirekt-star']
];

$logo_registry = [
    'Google' => 'images/brands/google-small.svg',
    'Trustpilot' => 'images/brands/trustpilot.svg',
    'Bokadirekt' => 'images/brands/bokadirekt-small.svg',
];

if (!isset($show_review_banners_header)) {
    $show_review_banners_header = true;
}

class ReviewPlatform
{
    public function __construct(
        string $logo_url,
        string $logo_alt,
        string $logo_title,
        Link $link,
        float $rating,
        array $icons,
    ) {
        $this->logo_url = $logo_url;
        $this->logo_alt = $logo_alt;
        $this->logo_title = $logo_title;
        $this->link = $link;
        $this->rating = $rating;

        $this->full_stars = array_fill(0, floor($rating), $icons[2]);
        $this->half_stars = $rating - floor($rating) > 0.5 ? [$icons[1]] : [];
        $this->empty_stars = array_fill(0, 5 - count($this->full_stars) - count($this->half_stars), $icons[0]);
    }

    public string $logo_url;
    public string $logo_alt;
    public string $logo_title;
    public Link $link;
    public float $rating;
    public int $reviews;
    public array $full_stars = [];
    public array $half_stars = [];
    public array $empty_stars = [];
}

$review_platforms =
    array(
        new ReviewPlatform(
            logo_url: 'images/brands/google.svg',
            logo_alt: 'Google',
            logo_title: 'Google',
            link: new Link('383 omdömen', 'https://www.google.com/search?client=safari&sca_esv=3f074e5da93b5e88&rls=en&q=AcneSpecialisten+recension&uds=ADvngMgdL8BcAQ_9RiOWqU9OSDC-iMKgi4kjbMoNYYpGIraw7caTcpPl53DZGRwyPR6b_ddEuBu4Man3bnxSwLuDVqYkLxHk3Zho23neGtU4KO7PZOcjBPa5UYJ4vXH-i1F-bVQZY1s-wGSH5_EQ28L2fx_LFnJxkwIy6eJHuiLREhW_dPoY8M1ZKVKLQv-R_5hPnQ22v8HNLqhIXETM8ZVBv5OluEpDz4nN7Wgu-FdWuvvAkJtza0Tz6Bc3OizXEbIVgqFO5-x0JbztAY--ag_SaVTIDxwyDtjIBnmKARmJxJvydkKYjiT89MICLPRF3LqAw4vM6qoLuR5liUwXB-gVTR_d8w5Iig&sa=X&ved=2ahUKEwjq6PjKwr-GAxXvSFUIHaNsAM0QxKsJegQIFxAB&ictx=0&biw=2329&bih=1267&dpr=2', 'Google Omdömen'),
            rating: 4.8,
            icons: $icon_registry['Google'],
        ),
        new ReviewPlatform(
            logo_url: 'images/brands/trustpilot.svg',
            logo_alt: 'Trustpilot',
            logo_title: 'Trustpilot',
            rating: 4.8,
            link: new Link('638 omdömen', 'https://se.trustpilot.com/review/acnespecialisten.se', 'Trustpilot Omdömen'),
            icons: $icon_registry['Trustpilot'],
        ),
        new ReviewPlatform(
            logo_url: 'images/brands/bokadirekt.svg',
            logo_alt: 'Bokadirekt',
            logo_title: 'Bokadirekt',
            link: new Link('18 136 omdömen', 'https://www.bokadirekt.se/acnespecialisten/var', 'Bokadirekt Omdömen'),
            rating: 4.8,
            icons: $icon_registry['Bokadirekt'],
        )
    );

$total_reviews = '19 157 omdömen totalt';

if (!isset($reviews)) {
    $reviews = array(
        new Review(
            brand: 'Trustpilot',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: $logo_registry['Trustpilot'],
        ),
        new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: $logo_registry['Google'],
        ),
        new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily',
            stars: 5,
            logo_url: $logo_registry['Bokadirekt'],
        ),
    );
} ?>

<div class="reviews-widget">
    <div class="rev-platform-cards">
        <?php foreach ($review_platforms as $platform) { ?>
            <div class="rev-platform-card">
                <div class="rpc-image">
                    <img src="<?php echo $platform->logo_url ?>" alt="<?php echo $platform->logo_url ?>" width="100" height="28" />
                </div>
                <div class="rpc-stars">
                    <?php
                    foreach ($platform->full_stars as $icon) {
                        icon($icon);
                    }
                    foreach ($platform->half_stars as $icon) {
                        icon($icon);
                    }
                    foreach ($platform->empty_stars as $icon) {
                        icon($icon);
                    }
                    ?>
                </div>
                <div class="rpc-info">
                    <strong><?php echo $platform->rating ?> / 5</strong>
                    <span class="l10n">based on</span>
                    <a href="<?php echo $platform->link->url ?>" title="<?php echo $platform->link->title ?>" target="_blank">
                        <?php echo $platform->link->label ?>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php if ($show_review_banners_header) { ?>
        <div class="review-banners-header">
            <h3 class="total-reviews-title"><?php echo $total_reviews ?></h3>
            <a href="/recensioner-omdomen.php" title="Se alla omdömen" class="button text l10n">
                <span class="l10n">Se alla omdömen</span>
                <?php icon('navigate-next') ?>
            </a>
        </div>
    <?php } ?>
    <div class="review-banners">
        <?php
        foreach ($reviews as $review) {
            $stars_filled = array_fill(0, $review->stars, $icon_registry[$review->brand][2]);
            $stars_empty = array_fill(0, 5 - $review->stars, $icon_registry[$review->brand][0]);
        ?>
            <div class="rbt is-hidden-desktop">
                <div class="rbt-top">
                    <div class="rbt-top-left">
                        <h4><?php echo $review->signature ?></h4>
                        <div><?php echo $review->stars ?>/5 rating</div>
                    </div>
                    <div class="rbt-top-right">
                        <?php
                        foreach ($stars_filled as $icon) {
                            icon($icon);
                        }
                        foreach ($stars_empty as $icon) {
                            icon($icon);
                        }
                        ?>
                    </div>
                </div>
                <div class="rbt-middle">
                    <h4>
                        <?php if (isset($review->link)) { ?>
                            <a href="<?php echo $review->link->url ?>" title="<?php echo $review->link->title ?>" target="_blank"><?php echo $review->title ?></a>
                        <?php } else {
                            echo $review->title;
                        } ?>
                    </h4>
                    <p><?php echo $review->text ?></p>
                </div>
                <div class="rbt-bottom">
                    <img src="<?php echo $review->logo_url ?>" alt="<?php echo $review->brand ?>" title="<?php echo $review->brand ?>" width="100" height="24" />
                </div>
            </div>
            <div class="rbd is-hidden-touch">
                <div class="rbd-left">
                    <h4><?php echo $review->signature ?></h4>
                    <div class="rbd-stars">
                        <?php
                        foreach ($stars_filled as $icon) {
                            icon($icon);
                        }
                        foreach ($stars_empty as $icon) {
                            icon($icon);
                        }
                        ?>
                    </div>
                    <div class="rbd-rating"><?php echo $review->stars ?>/5 rating</div>
                </div>
                <div class="rbd-middle">
                    <h4>
                        <?php if (isset($review->link)) { ?>
                            <a href="<?php echo $review->link->url ?>" title="<?php echo $review->link->title ?>" target="_blank"><?php echo $review->title ?></a>
                        <?php } else {
                            echo $review->title;
                        } ?>
                    </h4>
                    <p><?php echo $review->text ?></p>
                </div>
                <div class="rbd-right">
                    <img src="<?php echo $review->logo_url ?>" alt="<?php echo $review->brand ?>" title="<?php echo $review->brand ?>" width="100" height="24" />
                </div>
            </div>
        <?php } ?>
    </div>
</div>