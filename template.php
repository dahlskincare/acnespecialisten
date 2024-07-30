<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="" />
      
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">Acnespecialisten</title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">
      <meta property="og:title" content="Acnespecialisten" />
      <meta property="og:description" content="" class="l10n" />
      <meta property="og:image" content="images/about-desktop.jpg" />
      <meta property="twitter:title" content="Acnespecialisten" />
      <meta property="twitter:description" content="" class="l10n" />
      <meta property="twitter:image" content="images/about-desktop.jpg" />

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

      <!-- Default imports (metadata, fonts, google analytics etc) -->
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

      <!-- This stylesheet should be included only on pages with the default style and layout. -->
      <link rel="stylesheet" href="/styles/default-layout.css">

      <!-- 
            TODO: Create a css file with custom styles specific to the new page. 
            The css file should be have the same name and be put in the same folder 
            as the php file (my-folder/my-new-page.php -> my-new-page.css, etc).
      -->
      <link rel="stylesheet" href="/[FOLDER NAME HERE]/[FILENAME HERE].css">
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <!-- TODO: Page Content Here -->
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>