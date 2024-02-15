<?php if (!isset($reviews)) {
    $reviews = array(
        new Review(
            brand: 'Trustpilot',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily',
            stars: 5,
            logo_url: 'images/brands/bokadirekt-small.svg'
      ),
    );
} ?>

<div class="reviews-widget">
    <div id="reviews-scroller">
        <div id="reviews-container">
            <?php foreach ($reviews as $review) { ?>
                <div class="review-box <?php if (isset($reviews_narrow) && $reviews_narrow == true) {
                                            echo 'review-box-half';
                                        } else {
                                            echo 'review-box-quarter';
                                        }
                                        ?>">
                    <div class="review-box-top">
                        <div class="review-box-icons">
                            <?php for ($i = 0; $i < $review->stars; $i++) {
                                icon('star');
                            } ?>
                        </div>
                        <img src="<?php echo $review->logo_url ?>" width="102" height="26" alt="<?php echo $review->brand ?>" title="<?php echo $review->brand ?>" />
                    </div>
                    <h3 class=" review-box-title h200"><?php echo $review->title ?></h3>
                    <p class="review-box-text p200"><?php echo $review->text ?></p>
                    <p class="review-box-signature p200"><?php echo $review->signature ?></p>
                </div>
            <?php } ?>
            <div id="padder"></div>
        </div>
    </div>
    <div class="review-brands">
        <div class="review-brand">
            <img src="images/brands/google.svg" alt="Google" title="Google" width="80" height="26">
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">5.0 / 5</span>
                </div>
                <p>366 omdömen</p>
            </div>

        </div>
        <div class="review-brand">
            <img src="images/brands/trustpilot.svg" alt="Trustpilot" title="Trustpilot" width=" 107" height="27" />
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">4.8 / 5</span>
                </div>
                <p>565 omdömen</p>
            </div>
        </div>
        <div class="review-brand">
            <img src="images/brands/bokadirekt.svg" alt="Bokadirekt" title="Bokadirekt" width="128" height="19" />
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">4.8 / 5</span>
                </div>
                <p>11 171 omdömen</p>
            </div>
        </div>
    </div>
</div>
<script src="includes/widgets/reviews/reviews.js"></script>