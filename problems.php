<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<?php
class ProblemArea
{
      public function __construct($label, $icon, $problem_ids)
      {
            $this->label = $label;
            $this->icon = $icon;
            $this->problem_ids = $problem_ids;
      }

      public string $label;
      public string $icon;
      public array $problem_ids;
}

class Problem
{
      public function __construct($label, $url)
      {
            $this->label = $label;
            $this->url = $url;
      }
      public string $label;
      public string $url;
}

if ($lang == 'sv') {
      $problems['acne'] = new Problem('Akne', 'problems/acne.php');
      $problems['acne-scars'] = new Problem('Akneärr', 'problems/acne-scars.php');
      $problems['comedones'] = new Problem('Pormaskar', 'problems/comedones.php');
      $problems['rosacea'] = new Problem('Rosacea', 'problems/rosacea.php');
      $problems['seborrhea'] = new Problem('Seborré', 'problems/seborrhea.php');
      $problems['perioral-dermatitis'] = new Problem('Perioral dermatit', 'problems/perioral-dermatitis.php');
      $problems['large-pores'] = new Problem('Förstorade porer', 'problems/large-pores.php');
      $problems['pigmentation'] = new Problem('Pigmentering', 'problems/pigmentation.php');
      $problems['oily-combination-skin'] = new Problem('Fet hy', 'problems/oily-combination-skin.php');
      $problems['dry-and-sensitive-skin'] = new Problem('Torr hy', 'problems/dry-and-sensitive-skin.php');
      $problems['mature-skin'] = new Problem('Åldrande hy', 'problems/mature-skin.php');
      $problems['milier'] = new Problem('Milier', 'problems/milier.php');
      $problems['visible-blood-vessels'] = new Problem('Synliga blodkärl', 'problems/visible-blood-vessels.php');
      $problems['skin-inperfections'] = new Problem('hudskador', 'problems/skin-inperfections.php');
      $problems['pimples'] = new Problem('Finnar', 'problems/pimples.php');
      $problems['stretch-marks'] = new Problem('Bristningar', 'problems/stretch-marks.php');
      $problems['operational-scars'] = new Problem('Operationsärr', 'problems/operational-scars.php');
      $problems['unwanted-hair'] = new Problem('Oönskad hårväxt', 'problems/unwanted-hair.php');
      $problems['scars-from-pimples'] = new Problem('Ärr från finnar', 'problems/scars-from-pimples.php');
      $problem_areas[] = new ProblemArea('Ansikte', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Kropp', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
      $problem_areas[] = new ProblemArea('Bröst', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Ögon', 'images/problem-areas/eyes.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Läppar', 'images/problem-areas/lips.png', array('unwanted-hair'));
      $problem_areas[] = new ProblemArea('Hår', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Rygg', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Axlar', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Käklinje', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Nacke', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
} else {
      $problems['acne'] = new Problem('Acne', 'problems/acne.php');
      $problems['acne-scars'] = new Problem('Acne scars', 'problems/acne-scars.php');
      $problems['comedones'] = new Problem('Comedones', 'problems/comedones.php');
      $problems['rosacea'] = new Problem('Rosacea', 'problems/rosacea.php');
      $problems['seborrhea'] = new Problem('Seborrhea', 'problems/seborrhea.php');
      $problems['perioral-dermatitis'] = new Problem('Perioral dermatitis', 'problems/perioral-dermatitis.php');
      $problems['large-pores'] = new Problem('Large pores', 'problems/large-pores.php');
      $problems['pigmentation'] = new Problem('Pigmentation', 'problems/pigmentation.php');
      $problems['oily-combination-skin'] = new Problem('Oily combination skin', 'problems/oily-combination-skin.php');
      $problems['dry-and-sensitive-skin'] = new Problem('Dry and sensitive skin', 'problems/dry-and-sensitive-skin.php');
      $problems['mature-skin'] = new Problem('Mature skin', 'problems/mature-skin.php');
      $problems['milier'] = new Problem('Milier', 'problems/milier.php');
      $problems['visible-blood-vessels'] = new Problem('Visible blood vessels', 'problems/visible-blood-vessels.php');
      $problems['skin-inperfections'] = new Problem('Skin imperfections', 'problems/skin-inperfections.php');
      $problems['pimples'] = new Problem('Pimples', 'problems/pimples.php');
      $problems['stretch-marks'] = new Problem('Strech marks', 'problems/stretch-marks.php');
      $problems['operational-scars'] = new Problem('Operational scars', 'problems/operational-scars.php');
      $problems['unwanted-hair'] = new Problem('Unwanted hair', 'problems/unwanted-hair.php');
      $problems['scars-from-pimples'] = new Problem('Scars from pipmles', 'problems/scars-from-pimples.php');
      $problem_areas[] = new ProblemArea('Face', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Body', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
      $problem_areas[] = new ProblemArea('Chest', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Eyes', 'images/problem-areas/eyes.png', array('rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Lips', 'images/problem-areas/lips.png', array('unwanted-hair'));
      $problem_areas[] = new ProblemArea('Hair', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Back', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Shoulders', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Neckline', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Neck', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-inperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Problems</title>
      <meta name="description"
            content=""
            class="l10n">
      <meta name="title"
            content=""
            class="l10n">
      <meta name="keywords"
            content=""
            class="l10n">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet"
            href="/styles/default-layout.css">
      <link rel="stylesheet"
            href="problems.css">
      <script src="problems.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div id="banner-green">
                        <div class="container l10n">
                              <div class="is-hidden-desktop">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                    <h1 class="h600 mt-xs l10n">Skin problems</h2>
                                          <p class="p200 mt-xs">
                                                <span id="problems-banner-collapsed"
                                                      class="l10n">
                                                      In a personal meeting with a skin specialist, your skin type is
                                                      examined
                                                      and
                                                      identified. We take pre-photos of your skin, recommend. In a
                                                      personal
                                                      meeting
                                                      with a
                                                      skin specialist, your skin type is examined and identified. We
                                                      take
                                                      pre-photos
                                                      of
                                                      your skin, recommend. In a personal meeting with a skin
                                                      specialist, your
                                                      skin
                                                      type
                                                      is examined and identified In a personal meeting with a skin
                                                      specialist,
                                                      your
                                                      skinonal...
                                                      <span class="l10n underline"
                                                            onclick="onReadMoreClick()">read more</span>
                                                </span>
                                                <span id="problems-banner-expanded"
                                                      class="l10n is-hidden">
                                                      In a personal meeting with a skin specialist, your skin type is
                                                      examined and identified. We take pre-photos of your skin,
                                                      recommend. In
                                                      a
                                                      personal
                                                      meeting with a skin specialist, your skin type is examined and
                                                      identified. We
                                                      take
                                                      pre-photos of your skin, recommend. In a personal meeting with a
                                                      skin
                                                      specialist,
                                                      your
                                                      skin type is examined and identified In a personal meeting with a
                                                      skin
                                                      specialist,
                                                      your
                                                      skinonal.

                                                      In a personal meeting with a skin specialist, your skin type is
                                                      examined
                                                      and
                                                      identified. We take pre-photos of your skin, recommend. In a
                                                      personal
                                                      meeting
                                                      with a
                                                      skin specialist, your skin type is examined and identified. We
                                                      take
                                                      pre-photos
                                                      of
                                                      your skin, recommend. In a personal meeting with a skin
                                                      specialist, your
                                                      skin
                                                      type
                                                      is examined and identified In a personal meeting with a skin
                                                      specialist,
                                                      your
                                                      skinonal.
                                                </span>
                                          </p>
                                          <a href="https://dahlskincare.com/skin-consultation"
                                             target="_blank"
                                             class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                                          <div class="chips mt-xl">
                                                <div class="chip">
                                                      <?php icon('trustpilot') ?>
                                                      <span class="l10n">4,8 on Trustpilot</span>
                                                </div>
                                                <div class="chip">
                                                      <span class="l10n">30 years</span>
                                                </div>
                                                <div class="chip">
                                                      <span class="l10n">200k+ clients</span>
                                                </div>
                                          </div>
                              </div>
                              <div class="is-hidden-touch"
                                   id="banner-green-desktop">
                                    <div class="flex-row justify-space-between">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                          <div class="chips mt-xl">
                                                <div class="chip">
                                                      <?php icon('trustpilot') ?>
                                                      <span class="l10n">4,8 on Trustpilot</span>
                                                </div>
                                                <div class="chip">
                                                      <span class="l10n">30 years</span>
                                                </div>
                                                <div class="chip">
                                                      <span class="l10n">200k+ clients</span>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="flex-row align-end">
                                          <div id="skin-problems-header-column">
                                                <h1 class="h600 mt-xs l10n">Skin<br />problems</h1>
                                                <a href="https://dahlskincare.com/skin-consultation"
                                                   class="button b200 white mt-xl">Get a free consultation</a>
                                          </div>
                                          <div class="l10n">
                                                In a personal meeting with a skin specialist, your skin type is
                                                examined
                                                and
                                                identified. We take pre-photos of your skin, recommend. In a
                                                personal
                                                meeting
                                                with a
                                                skin specialist, your skin type is examined and identified. We
                                                take
                                                pre-photos
                                                of
                                                your skin, recommend. In a personal meeting with a skin
                                                specialist, your
                                                skin
                                                type
                                                is examined and identified In a personal meeting with a skin
                                                specialist,
                                                your
                                                skinonal
                                          </div>
                                          <div class="ml-xl4 l10n">
                                                In a personal meeting with a skin specialist, your skin type is
                                                examined
                                                and
                                                identified. We take pre-photos of your skin, recommend. In a
                                                personal
                                                meeting
                                                with a
                                                skin specialist, your skin type is examined and identified. We
                                                take
                                                pre-photos
                                                of
                                                your skin, recommend. In a personal meeting with a skin
                                                specialist, your
                                                skin
                                                type
                                                is examined and identified In a personal meeting with a skin
                                                specialist,
                                                your
                                                skinonal
                                          </div>

                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="container">
                        <div id="banner-problem-area-filters"
                             class="carousel l10n">
                              <?php foreach ($problem_areas as $problem_area) { ?>
                                    <div class="banner-problem-area"
                                         onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                          <img src="<?php echo $problem_area->icon ?>"
                                               alt="icon"
                                               width="32"
                                               height="32">
                                          <div class="b100 l10n">
                                                <?php echo $problem_area->label ?>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                        <div id="banner-problem-areas">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <a href="<?php echo $problem->url ?>"
                                       class="button b200 grey expand is-hidden l10n"
                                       data-id="<?php echo $id ?>"><?php echo $problem->label ?></a>
                              <?php } ?>
                        </div>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script>showProblems('ALL')</script>
</body>

</html>