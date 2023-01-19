<!DOCTYPE html>
<html lang="en">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten</title>
      <meta name="description"
            content="Acnespecialisten is the best etc..."
            class="l10n">
      <meta name="title"
            content="Acnespecialisten"
            class="l10n">
      <meta name="keywords"
            content="Acne, specialisten"
            class="l10n">

      <?php include('includes/head.php'); ?>

      <link rel="stylesheet"
            href="styles/default-layout.css">

      <link rel="stylesheet"
            href="/index.css">
</head>

<body>
      <?php include('includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-background">
                        <div class="container">
                              <h1 class="big l10n">Skin specialists</h1>
                        </div>
                  </div>
                  <div class="container">
                        <div class="banner-bar elevation-medium is-hidden-desktop"
                             id="banner-bar-small">
                              <a href="https://dahlskincare.com/skin-consultation"
                                 target="_blank">
                                    <button class="white">
                                          <span class="l10n">Get a free consultation</span>
                                          <?php icon('link-external') ?>
                                    </button>
                              </a>
                              <div id="banner-bar-cols">
                                    <div>
                                          <span class="h500">4,8</span>
                                          <?php icon('trustpilot') ?>
                                          <div class="p200 l10n">on Trustpilot</div>
                                    </div>
                                    <div>
                                          <span class="h500">30+</span>
                                          <div class="p200 l10n">years</div>
                                    </div>
                                    <div>
                                          <span class="h500">200k+</span>
                                          <div class="p200 l10n">clients</div>
                                    </div>
                              </div>
                        </div>
                        <div class="banner-bar elevation-medium is-hidden-touch"
                             id="banner-bar-large">
                              <div id="banner-bar-cols">
                                    <div class="flex-aligner">
                                          <span class="h500">4,8</span>
                                          <div>
                                                <?php icon('trustpilot') ?>
                                                <?php icon('trustpilot') ?>
                                                <?php icon('trustpilot') ?>
                                                <?php icon('trustpilot') ?>
                                                <?php icon('trustpilot') ?>
                                                <div class="p200 l10n">Trustpilot score</div>
                                          </div>
                                    </div>
                                    <div class="flex-aligner">
                                          <span class="h500">30+</span>
                                          <div>
                                                <div class="h400 l10n">years</div>
                                                <div class="p200 l10n">on the market</div>
                                          </div>
                                    </div>
                                    <div class="flex-aligner">
                                          <span class="h500 l10n">200k+</span>
                                          <div>
                                                <div class="h400 l10n">clients</div>
                                                <div class="p200 l10n">were satisfied</div>
                                          </div>
                                    </div>
                                    <a href="https://dahlskincare.com/skin-consultation"
                                       target="_blank">
                                          <button class="white">
                                                <span class="l10n">Get a free consultation</span>
                                                <?php icon('link-external') ?>
                                          </button>
                                    </a>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="problems">
                  <div class="is-hidden-widescreen"
                       id="problems-small">
                        <div class="container">
                              <h2 class="big l10n">Problems</h2>
                              <div class="columns is-mobile">
                                    <div class="column is-one-third">
                                          <a href="problems/acne.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/acne.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Acne">
                                                      <div class="button text compact black l10n">Acne</div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="column is-one-third">
                                          <a href="problems/acne-scars.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/acne-scars.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Acne scars">
                                                      <div class="button text compact black l10n">Acne scars</div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="column is-one-third">
                                          <a href="problems/rosacea.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/rosacea.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Rosacea">
                                                      <div class="button text compact black l10n">Rosacea</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                              <div class="columns is-mobile">
                                    <div class="column is-one-third">
                                          <a href="problems/pigmentation.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/pigmentation.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Pigmentation">
                                                      <div class="button text compact black l10n">Pigmentation</div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="column is-one-third">
                                          <a href="problems/large-pores.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/large-pores.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Large pores">
                                                      <div class="button text compact black l10n">Large pores</div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="column is-one-third">
                                          <a href="problems/mature-skin.php">
                                                <div class="problem-card">
                                                      <img src="images/problems/small/mature-skin.jpg"
                                                           width="114"
                                                           height="140"
                                                           alt="Mature skin">
                                                      <div class="button text compact black l10n">Mature skin</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                              <a href="problems.php"
                                 class="mt-xl button outline expand">
                                    <span class="l10n">View all problems</span>
                                    <?php icon('link-external') ?>
                              </a>
                        </div>
                  </div>
                  <div class="is-hidden-touch"
                       id="problems-large">
                        <div class="container">
                              <h2 class="big l10n">Problems</h2>
                              <div class="mt-xl"
                                   id="problem-cards">
                                    <a href="problems/acne.php"
                                       class="problem-card">
                                          <div class="button white text black">
                                                <span class="l10n">Acne</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-acne"></div>
                                    </a>
                                    <a href="problems/acne-scars.php"
                                       class="problem-card">
                                          <div class="button white text black">
                                                <span class="l10n">Acne scars</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-acne-scars"></div>
                                    </a>
                                    <a href="problems/rosacea.php"
                                       class="problem-card">
                                          <div class="button white text black">
                                                <span class="l10n">Rosacea</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-rosacea"></div>
                                    </a>
                                    <a href="problems/pigmentation.php"
                                       class="problem-card">
                                          <div class="button white text black">
                                                <span class="l10n">Pigmentation</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-pigmentation"></div>
                                    </a>
                                    <a href="problems/large-pores.php"
                                       class="problem-card">
                                          <div class="button white text black">
                                                <span class="l10n">Large pores</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-large-pores"></div>
                                    </a>
                                    <a href="problems.php"
                                       class="problem-card"
                                       id="problem-card-other">
                                          <div class="button white text black">
                                                <span class="l10n">View all problems</span>
                                                <?php icon('link-external') ?>
                                          </div>
                                          <div class="background-image image-other">
                                                <div>+17</div>
                                          </div>
                                    </a>
                                    <div class="image-frame image-frame1"></div>
                                    <div class="image-frame image-frame2"></div>
                              </div>
                        </div>
                  </div>
            </section>
      </main>
      <?php include('includes/footer.php'); ?>
</body>

</html>