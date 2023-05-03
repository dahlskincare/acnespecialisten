<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten | Brands</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
      <link rel="stylesheet" href="/styles/default-layout.css">
      <link rel="stylesheet" href="/brands/style.css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <div class="container">
                  <?php
                  $brand = new Brand(
                        label: 'Alma',
                        image: 'https://via.placeholder.com/116x80.webp',
                        photo: 'https://via.placeholder.com/424x324.webp',
                        title: 'Alma - Hybrid (CO2)',
                        subtitle: 'Laser for problem skin',
                        description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal personal meeting with a skin specialist, your skin...',
                        url: 'url',
                        booking_url: 'treatment_url',
                        consultation_url: 'consultation_url'
                  );
                  include('widgets/brand_card/brand_card.php');
                  ?>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>