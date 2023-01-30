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

if ($lang == 'sv') {
      $problems['acne'] = new Problem('Akne', 'problems/acne.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne.jpg', 'images/problems/medium/acne.jpg', 'images/problems/large/acne.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['acne-scars'] = new Problem('Akneärr', 'problems/acne-scars.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne-scars.jpg', 'images/problems/medium/acne-scars.jpg', 'images/problems/large/acne-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['comedones'] = new Problem('Pormaskar', 'problems/comedones.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/comedones.jpg', 'images/problems/medium/comedones.jpg', 'images/problems/large/comedones.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['rosacea'] = new Problem('Rosacea', 'problems/rosacea.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/rosacea.jpg', 'images/problems/medium/rosacea.jpg', 'images/problems/large/rosacea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['seborrhea'] = new Problem('Seborré', 'problems/seborrhea.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/seborrhea.jpg', 'images/problems/medium/seborrhea.jpg', 'images/problems/large/seborrhea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['perioral-dermatitis'] = new Problem('Perioral dermatit', 'problems/perioral-dermatitis.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/perioral-dermatitis.jpg', 'images/problems/medium/perioral-dermatitis.jpg', 'images/problems/large/perioral-dermatitis.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['large-pores'] = new Problem('Förstorade porer', 'problems/large-pores.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/large-pores.jpg', 'images/problems/medium/large-pores.jpg', 'images/problems/large/large-pores.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['pigmentation'] = new Problem('Pigmentering', 'problems/pigmentation.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pigmentation.jpg', 'images/problems/medium/pigmentation.jpg', 'images/problems/large/pigmentation.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['oily-combination-skin'] = new Problem('Fet hy', 'problems/oily-combination-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/oily-combination-skin.jpg', 'images/problems/medium/oily-combination-skin.jpg', 'images/problems/large/oily-combination-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['dry-and-sensitive-skin'] = new Problem('Torr hy', 'problems/dry-and-sensitive-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/dry-and-sensitive-skin.jpg', 'images/problems/medium/dry-and-sensitive-skin.jpg', 'images/problems/large/dry-and-sensitive-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['mature-skin'] = new Problem('Åldrande hy', 'problems/mature-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/mature-skin.jpg', 'images/problems/medium/mature-skin.jpg', 'images/problems/large/mature-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['milier'] = new Problem('Milier', 'problems/milier.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/milier.jpg', 'images/problems/medium/milier.jpg', 'images/problems/large/milier.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['visible-blood-vessels'] = new Problem('Synliga blodkärl', 'problems/visible-blood-vessels.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/visible-blood-vessels.jpg', 'images/problems/medium/visible-blood-vessels.jpg', 'images/problems/large/visible-blood-vessels.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['skin-imperfections'] = new Problem('hudskador', 'problems/skin-imperfections.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/skin-imperfections.jpg', 'images/problems/medium/skin-imperfections.jpg', 'images/problems/large/skin-imperfections.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['pimples'] = new Problem('Finnar', 'problems/pimples.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pimples.jpg', 'images/problems/medium/pimples.jpg', 'images/problems/large/pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['stretch-marks'] = new Problem('Bristningar', 'problems/stretch-marks.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/stretch-marks.jpg', 'images/problems/medium/stretch-marks.jpg', 'images/problems/large/stretch-marks.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['operational-scars'] = new Problem('Operationsärr', 'problems/operational-scars.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/operational-scars.jpg', 'images/problems/medium/operational-scars.jpg', 'images/problems/large/operational-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['unwanted-hair'] = new Problem('Oönskad hårväxt', 'problems/unwanted-hair.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/unwanted-hair.jpg', 'images/problems/medium/unwanted-hair.jpg', 'images/problems/large/unwanted-hair.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['scars-from-pimples'] = new Problem('Ärr från finnar', 'problems/scars-from-pimples.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/scars-from-pimples.jpg', 'images/problems/medium/scars-from-pimples.jpg', 'images/problems/large/scars-from-pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problem_areas[] = new ProblemArea('Ansikte', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Kropp', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
      $problem_areas[] = new ProblemArea('Bröst', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Ögon', 'images/problem-areas/eyes.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Läppar', 'images/problem-areas/lips.png', array('unwanted-hair'));
      $problem_areas[] = new ProblemArea('Hår', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Rygg', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Axlar', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Käklinje', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Nacke', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
} else {
      $problems['acne'] = new Problem('Acne', 'problems/acne.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne.jpg', 'images/problems/medium/acne.jpg', 'images/problems/large/acne.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['acne-scars'] = new Problem('Acne scars', 'problems/acne-scars.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/acne-scars.jpg', 'images/problems/medium/acne-scars.jpg', 'images/problems/large/acne-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['comedones'] = new Problem('Comedones', 'problems/comedones.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/comedones.jpg', 'images/problems/medium/comedones.jpg', 'images/problems/large/comedones.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['rosacea'] = new Problem('Rosacea', 'problems/rosacea.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/rosacea.jpg', 'images/problems/medium/rosacea.jpg', 'images/problems/large/rosacea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['seborrhea'] = new Problem('Seborrhea', 'problems/seborrhea.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/seborrhea.jpg', 'images/problems/medium/seborrhea.jpg', 'images/problems/large/seborrhea.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['perioral-dermatitis'] = new Problem('Perioral dermatitis', 'problems/perioral-dermatitis.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/perioral-dermatitis.jpg', 'images/problems/medium/perioral-dermatitis.jpg', 'images/problems/large/perioral-dermatitis.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['large-pores'] = new Problem('Large pores', 'problems/large-pores.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/large-pores.jpg', 'images/problems/medium/large-pores.jpg', 'images/problems/large/large-pores.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['pigmentation'] = new Problem('Pigmentation', 'problems/pigmentation.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pigmentation.jpg', 'images/problems/medium/pigmentation.jpg', 'images/problems/large/pigmentation.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['oily-combination-skin'] = new Problem('Oily & combination skin', 'problems/oily-combination-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/oily-combination-skin.jpg', 'images/problems/medium/oily-combination-skin.jpg', 'images/problems/large/oily-combination-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['dry-and-sensitive-skin'] = new Problem('Dry & sensitive skin', 'problems/dry-and-sensitive-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/dry-and-sensitive-skin.jpg', 'images/problems/medium/dry-and-sensitive-skin.jpg', 'images/problems/large/dry-and-sensitive-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['mature-skin'] = new Problem('Mature skin', 'problems/mature-skin.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/mature-skin.jpg', 'images/problems/medium/mature-skin.jpg', 'images/problems/large/mature-skin.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['milier'] = new Problem('Milier', 'problems/milier.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/milier.jpg', 'images/problems/medium/milier.jpg', 'images/problems/large/milier.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['visible-blood-vessels'] = new Problem('Visible blood vessels', 'problems/visible-blood-vessels.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/visible-blood-vessels.jpg', 'images/problems/medium/visible-blood-vessels.jpg', 'images/problems/large/visible-blood-vessels.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['skin-imperfections'] = new Problem('Skin imperfections', 'problems/skin-imperfections.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/skin-imperfections.jpg', 'images/problems/medium/skin-imperfections.jpg', 'images/problems/large/skin-imperfections.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['pimples'] = new Problem('Pimples', 'problems/pimples.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/pimples.jpg', 'images/problems/medium/pimples.jpg', 'images/problems/large/pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['stretch-marks'] = new Problem('Stretch marks', 'problems/stretch-marks.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/stretch-marks.jpg', 'images/problems/medium/stretch-marks.jpg', 'images/problems/large/stretch-marks.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['operational-scars'] = new Problem('Operational scars', 'problems/operational-scars.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/operational-scars.jpg', 'images/problems/medium/operational-scars.jpg', 'images/problems/large/operational-scars.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['unwanted-hair'] = new Problem('Unwanted hair', 'problems/unwanted-hair.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/unwanted-hair.jpg', 'images/problems/medium/unwanted-hair.jpg', 'images/problems/large/unwanted-hair.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problems['scars-from-pimples'] = new Problem('Scars from pimples', 'problems/scars-from-pimples.php', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se', 'images/problems/small/scars-from-pimples.jpg', 'images/problems/medium/scars-from-pimples.jpg', 'images/problems/large/scars-from-pimples.jpg', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.  In a personal personal meeting with a skin specialist, your skin...');
      $problem_areas[] = new ProblemArea('Face', 'images/problem-areas/face.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Body', 'images/problem-areas/body.png', array('acne', 'acne-scars', 'comedones'));
      $problem_areas[] = new ProblemArea('Chest', 'images/problem-areas/chest.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Eyes', 'images/problem-areas/eyes.png', array('rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Lips', 'images/problem-areas/lips.png', array('unwanted-hair'));
      $problem_areas[] = new ProblemArea('Hair', 'images/problem-areas/hair.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Back', 'images/problem-areas/back.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Shoulders', 'images/problem-areas/shoulders.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Neckline', 'images/problem-areas/neckline.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
      $problem_areas[] = new ProblemArea('Neck', 'images/problem-areas/neck.png', array('acne', 'acne-scars', 'comedones', 'rosacea', 'seborrhea', 'perioral-dermatitis', 'large-pores', 'pigmentation', 'oily-combination-skin', 'dry-and-sensitive-skin', 'mature-skin', 'milier', 'visible-blood-vessels', 'skin-imperfections', 'pimples', 'stretch-marks', 'operational-marks', 'unwanted-hair', 'scars-from-pimples'));
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
                                          <div class="chips mt-xl mb-xs">
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
                        <div class="columns is-multiline"
                             id="banner-problem-areas">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-fifth is-hidden"
                                         data-id="<?php echo $id ?>">
                                          <a href="#card-<?php echo $id ?>"
                                             class="button b200 grey expand l10n"><?php echo $problem->label ?></a>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </section>
            <section id="cards">
                  <div class="container">
                        <div class="columns is-multiline is-variable is-3">
                              <?php foreach ($problems as $id => $problem) { ?>
                                    <div class="column is-one-third">
                                          <div class="problem-area-card"
                                               id="card-<?php echo $id ?>">
                                                <picture>
                                                      <source media="(max-width: 799px)"
                                                              srcset="<?php echo $problem->image_medium ?>">
                                                      <source media="(min-width: 800px)"
                                                              srcset="<?php echo $problem->image_large ?>">
                                                      <img src="<?php echo $problem->image_large ?>"
                                                           alt="<?php echo $problem->label ?>"
                                                           width="424"
                                                           height="324" />
                                                </picture>
                                                <div class="problem-area-card-content">
                                                      <h3 class="h300">
                                                            <?php echo $problem->label ?>
                                                      </h3>
                                                      <p class="mt-xs">
                                                            <?php echo $problem->info ?>
                                                      </p>
                                                      <div class="is-hidden-tablet">
                                                            <a href="<?php echo $problem->url ?>"
                                                               class="mt-m button outline expand l10n">
                                                                  View problem details
                                                            </a>
                                                            <hr>
                                                            <a href="https://www.dahlskincare.com/skin-consultation"
                                                               target="_blank"
                                                               class="button expand l10n">Get a free consultation</a>
                                                            <!-- TODO: procedure link -->
                                                            <a href="#"
                                                               class="mt-s button expand l10n">Select a procedure</a>
                                                      </div>
                                                      <div class="is-hidden-mobile">
                                                            <a href="<?php echo $problem->url ?>"
                                                               class="mt-m button text compact l10n">Read more</a>
                                                            <hr>
                                                            <div class="columns">
                                                                  <div class="column">
                                                                        <a href="https://www.dahlskincare.com/skin-consultation"
                                                                           target="_blank"
                                                                           class="button expand l10n">Get a free
                                                                              consultation</a>
                                                                  </div>
                                                                  <div class="column">
                                                                        <!-- TODO: procedure link -->
                                                                        <a href="#"
                                                                           target="_blank"
                                                                           class="button expand l10n">Select procedure</a>
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
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script>showProblems('ALL')</script>
</body>

</html>