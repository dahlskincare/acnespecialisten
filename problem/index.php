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
      public function __construct($label, $url, $consultation_url, $booking_url, $image_small, $image_medium, $image_large, $info)
      {
            $this->label = $label;
            $this->url = $url;
            $this->consultation_url = $consultation_url;
            $this->booking_url = $booking_url;
            $this->image_small = $image_small;
            $this->image_medium = $image_medium;
            $this->image_large = $image_large;
            $this->info = $info;
      }
      public string $label;
      public string $url;
      public string $consultation_url;
      public string $booking_url;
      public string $image_small;
      public string $image_medium;
      public string $image_large;
      public string $info;
}

$problems['akne'] = new Problem(
      label: 'Akne',
      url: 'problem/akne',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/acne.jpg',
      image_medium: 'images/problems/medium/acne.jpg',
      image_large: 'images/problems/large/acne.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['aknearr'] = new Problem(
      label: 'Akneärr',
      url: 'problem/aknearr',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/acne-scars.jpg',
      image_medium: 'images/problems/medium/acne-scars.jpg',
      image_large: 'images/problems/large/acne-scars.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['pormaskar'] = new Problem(
      label: 'Pormaskar',
      url: 'problem/pormaskar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/comedones.jpg',
      image_medium: 'images/problems/medium/comedones.jpg',
      image_large: 'images/problems/large/comedones.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['rosacea'] = new Problem(
      label: 'Rosacea',
      url: 'problem/rosacea',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/rosacea.jpg',
      image_medium: 'images/problems/medium/rosacea.jpg',
      image_large: 'images/problems/large/rosacea.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['seborre'] = new Problem(
      label: 'Seborré',
      url: 'problem/seborre',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/seborrhea.jpg',
      image_medium: 'images/problems/medium/seborrhea.jpg',
      image_large: 'images/problems/large/seborrhea.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['perioral-dermatit'] = new Problem(
      label: 'Perioral dermatit',
      url: 'problem/perioral-dermatitis',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/perioral-dermatitis.jpg',
      image_medium: 'images/problems/medium/perioral-dermatitis.jpg',
      image_large: 'images/problems/large/perioral-dermatitis.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['stora-porer'] = new Problem(
      label: 'Stora porer',
      url: 'problem/stora-porer',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/large-pores.jpg',
      image_medium: 'images/problems/medium/large-pores.jpg',
      image_large: 'images/problems/large/large-pores.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['pigmentflackar'] = new Problem(
      label: 'Pigmentfläckar',
      url: 'problem/pigmentflackar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/pigmentation.jpg',
      image_medium: 'images/problems/medium/pigmentation.jpg',
      image_large: 'images/problems/large/pigmentation.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['blandhy'] = new Problem(
      label: 'Blandhy',
      url: 'problem/blandhy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/oily-combination-skin.jpg',
      image_medium: 'images/problems/medium/oily-combination-skin.jpg',
      image_large: 'images/problems/large/oily-combination-skin.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['torr-kanslig-hy'] = new Problem(
      label: 'Torr & Känslig hy',
      url: 'problem/torr-kanslig-hy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/dry-and-sensitive-skin.jpg',
      image_medium: 'images/problems/medium/dry-and-sensitive-skin.jpg',
      image_large: 'images/problems/large/dry-and-sensitive-skin.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['mogen-hy'] = new Problem(
      label: 'Mogen Hy',
      url: 'problem/mogen-hy',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/mature-skin.jpg',
      image_medium: 'images/problems/medium/mature-skin.jpg',
      image_large: 'images/problems/large/mature-skin.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['milier'] = new Problem(
      label: 'Milier',
      url: 'problem/milier',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/milier.jpg',
      image_medium: 'images/problems/medium/milier.jpg',
      image_large: 'images/problems/large/milier.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['ytliga-blodkarl'] = new Problem(
      label: 'Ytliga Blodkärl',
      url: 'problem/ytliga-blodkarl',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/visible-blood-vessels.jpg',
      image_medium: 'images/problems/medium/visible-blood-vessels.jpg',
      image_large: 'images/problems/large/visible-blood-vessels.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['hudforandringar'] = new Problem(
      label: 'Hudförändringar',
      url: 'problem/hudforandringar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/skin-imperfections.jpg',
      image_medium: 'images/problems/medium/skin-imperfections.jpg',
      image_large: 'images/problems/large/skin-imperfections.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['finnar'] = new Problem(
      label: 'Finnar',
      url: 'problem/finnar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/pimples.jpg',
      image_medium: 'images/problems/medium/pimples.jpg',
      image_large: 'images/problems/large/pimples.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['bristningar'] = new Problem(
      label: 'Bristningar',
      url: 'problem/bristningar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/stretch-marks.jpg',
      image_medium: 'images/problems/medium/stretch-marks.jpg',
      image_large: 'images/problems/large/stretch-marks.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['operations-arr'] = new Problem(
      label: 'Operations & Skadeärr',
      url: 'problem/operations-arr',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/operational-scars.jpg',
      image_medium: 'images/problems/medium/operational-scars.jpg',
      image_large: 'images/problems/large/operational-scars.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['oonskad-harvaxt'] = new Problem(
      label: 'Oönskat hår',
      url: 'problem/oonskad-harvaxt',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/unwanted-hair.jpg',
      image_medium: 'images/problems/medium/unwanted-hair.jpg',
      image_large: 'images/problems/large/unwanted-hair.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);
$problems['arr-fran-finnar'] = new Problem(
      label: 'Ärr från finnar',
      url: 'problem/arr-fran-finnar',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: 'https://www.bokadirekt.se',
      image_small: 'images/problems/small/scars-from-pimples.jpg',
      image_medium: 'images/problems/medium/scars-from-pimples.jpg',
      image_large: 'images/problems/large/scars-from-pimples.jpg',
      info: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...'
);

$problem_areas = array(
      new ProblemArea(
            label: 'Face',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Body',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Chest',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Eyes',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Lips',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Hair',
            icon: 'area-face',
            problem_ids: array('operations-arr')
      ),
      new ProblemArea(
            label: 'Back',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Shoulders',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Neckline',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
      new ProblemArea(
            label: 'Neck',
            icon: 'area-face',
            problem_ids: array('akne', 'aknearr', 'pormaskar', 'rosacea', 'seborre', 'perioral-dermatit', 'stora-porer', 'pigmentflackar', 'blandhy', 'torr-kanslig-hy', 'mogen-hy', 'milier', 'ytliga-blodkarl', 'hudforandringar', 'finnar', 'bristningar', 'operations-arr', 'oonskad-harvaxt', 'arr-fran-finnar')
      ),
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Självklara valet mot Hudproblem</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="problem/problems.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner" class="sticky-badges-target">
                  <div id="banner-green">
                        <div class="container l10n">
                              <div class="is-hidden-desktop">
                                    <h1 class="h600 l10n">Hudproblem</h1>
                                    <p class="p200 mt-xs">
                                          <span id="problems-banner-collapsed" class="l10n">
                                                Hudproblem som akne, rosacea, pormaskar och finnar kan påverka individer i alla åldrar och orsaka obehag, nedsatt självkänsla och försämrad livskvalitet. På Acnespecialisten arbetar vi med att behandla och förbättra problemhy genom att erbjuda skräddarsydda lösningar och behandlingar för varje enskild kund. Vi erbjuder en rad behandlingsmetoder och tekniker anpassade för att hantera olika hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har:
                                                <span class="l10n underline h200" onclick="Problems.onReadMoreClick()">read more</span>
                                          </span>
                                          <span id="problems-banner-expanded" class="l10n is-hidden">
                                                Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål. Boka din gratis hudkonsultation idag och ta det första steget mot en friskare och mer välmående hud.
                                          </span>
                                    </p>
                                    <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Få gratis konsultation</a>
                              </div>
                              <div class="is-hidden-touch" id="banner-green-desktop">
                                    <div class="flex-row justify-end">
                                          <div class="mt-xl mb-xs">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                                    <div class="flex-row align-end">
                                          <div id="skin-problems-header-column">
                                                <h1 class="h600 mt-xs l10n">Hudproblem</h1>
                                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Get a free consultation</a>
                                          </div>
                                          <div class="l10n">
                                                Hudproblem som akne, rosacea, pormaskar och finnar kan påverka individer i alla åldrar och orsaka obehag, nedsatt självkänsla och försämrad livskvalitet. På Acnespecialisten arbetar vi med att behandla och förbättra problemhy genom att erbjuda skräddarsydda lösningar och behandlingar för varje enskild kund. Vi erbjuder en rad behandlingsmetoder och tekniker anpassade för att hantera olika hudproblem. För att veta mer om de olika problemen och hur vi kan hjälpa dig, klicka på det problem du misstänker att du har:
                                          </div>
                                          <div class="ml-xl4 l10n">
                                                Om du är osäker på vilket hudproblem du har eller vilken behandling som skulle passa dig bäst, rekommenderar vi att du bokar en kostnadsfri hudkonsultation. Under konsultationen kommer en av våra erfarna hudterapeuter att undersöka din hud, identifiera eventuella problem och rekommendera en behandlingsplan som passar dina specifika behov och mål. Boka din gratis hudkonsultation idag och ta det första steget mot en friskare och mer välmående hud.
                                          </div>

                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-m is-hidden-desktop">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                        <div class="container" id="filters-touch-container">
                              <div id="filters-touch" class="mt-m">
                                    <?php foreach ($problem_areas as $problem_area) { ?>
                                          <div class=" filter-item" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                                <?php icon($problem_area->icon) ?>
                                                <div class="b100 filter-item-label l10n">
                                                      <?php echo $problem_area->label ?>
                                                </div>
                                          </div>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
                  <div class="container">
                        <div id="filters-desktop" class="is-hidden-touch">
                              <div id="filter-items">
                                    <?php foreach ($problem_areas as $problem_area) { ?>
                                          <div class="filter-item" onclick="showProblems('<?php echo join(',', $problem_area->problem_ids) ?>'); highlight(this); ">
                                                <?php icon($problem_area->icon) ?>
                                                <div class="b100 filter-item-label l10n">
                                                      <?php echo $problem_area->label ?>
                                                </div>
                                          </div>
                                    <?php } ?>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-previous">
                                    <button class="round-large grey">
                                          <?php icon('arrow-left') ?>
                                    </button>
                              </div>
                              <div class="filter-button is-hidden" id="filter-button-next">
                                    <button class="round-large grey">
                                          <?php icon('arrow-right') ?>
                                    </button>
                              </div>
                        </div>
                        <div class="mt-xl">
                              <div class="columns is-multiline" id="banner-problem-areas">
                                    <?php foreach ($problems as $id => $problem) { ?>
                                          <div class="column is-one-fifth is-hidden" data-id="<?php echo $id ?>">
                                                <a href="<?php echo $problem->url ?>" class="button b200 grey expand l10n"><?php echo $problem->label ?></a>
                                          </div>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </section>
            <section id="cards">
                  <div class="container">
                        <div class="columns is-multiline is-variable is-3">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-third">
                                          <div class="problem-area-card" id="card-<?php echo $id ?>">
                                                <div class="picture">
                                                      <picture>
                                                            <source media="(max-width: 799px)" srcset="<?php echo $problem->image_medium ?>">
                                                            <source media="(min-width: 800px)" srcset="<?php echo $problem->image_large ?>">
                                                            <img src="<?php echo $problem->image_large ?>" alt="<?php echo $problem->label ?>" width="424" height="324" />
                                                      </picture>
                                                </div>
                                                <div class="problem-area-card-content">
                                                      <h3>
                                                            <a href="<?php echo $problem->url ?>" class="h300"><?php echo $problem->label ?></a>
                                                      </h3>
                                                      <p class="mt-xs">
                                                            <?php echo $problem->info ?>
                                                      </p>
                                                      <div class="is-hidden-tablet">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button outline expand l10n">
                                                                  View problem details
                                                            </a>
                                                            <hr>
                                                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Get a free consultation</a>
                                                            <!-- TODO: procedure link -->
                                                            <a href="#" class="mt-s button expand l10n">Select a procedure</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>" class="mt-m button text compact l10n">Read more</a>
                                                            <hr>
                                                            <div class="columns is-multiline">
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button expand l10n">Get a free
                                                                              consultation</a>
                                                                  </div>
                                                                  <div class="column mt-xxs is-full is-half-widescreen">
                                                                        <!-- TODO: procedure link -->
                                                                        <a href="#" target="_blank" class="button expand l10n">Select procedure</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </section>
            <section id="consultation-banner">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
                  </div>
            </section>
            <section id="results">
                  <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php'); ?>
                  </div>
            </section>
            <section id="reviews">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Reviews</h2>
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
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
                  </div>
            </section>
            <section id="faq">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Questions & answers</h2>
                              <a href="faq" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all questions</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
                  </div>
            </section>
            <section id="skin-guide">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Skin guide</h2>
                              <a href="skin-guide" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all articles</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
                  </div>
            </section>
            <section id="specialists">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Our specialists</h2>
                              <a href="specialists" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all specialists</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php
                        $specialists = array(
                              new Specialist(
                                    name: 'Cazzandra Lindberg',
                                    title: 'Hudterapeut sedan 2015',
                                    image_small: 'images/specialists/small/specialist-1.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-cazzandra.webp'
                              ),
                              new Specialist(
                                    name: 'Veronika Benedik',
                                    title: 'Hudterapeut sedan 1999',
                                    image_small: 'images/specialists/small/specialist-2.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-veronika.webp'
                              ),
                              new Specialist(
                                    name: 'Amira Maqboul',
                                    title: 'Hudterapeut sedan 2017',
                                    image_small: 'images/specialists/small/specialist-3.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-amira.webp'
                              ),
                              new Specialist(
                                    name: 'Vilma Libom',
                                    title: 'Hudterapeut sedan 2019',
                                    image_small: 'images/specialists/small/specialist-4.jpg',
                                    image_large: 'images/specialists/large/hudterapeut-vilma.webp'
                              )
                        );
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
                  </div>
            </section>
            <section id="brands">
                  <div class="container">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Brands we use</h2>
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">View all brands</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
                  </div>
            </section>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="problem/problems.js"></script>
</body>

</html>