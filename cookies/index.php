<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
$nav_buttons = array(
      'about-cookies' => 'About cookies',
      'privacy-policy' => 'Privacy policy',
); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
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
      <link rel="stylesheet" href="/cookies/style.css">

</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <main>
            <section id="banner">
                  <div class="container">
                        <div class="flex-row justify-space-between">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <section id="headers">
                        <h1 class="mt-xl">Cookies & privacy policy</h1>
                        <p class="mt-xs">At Acnespecialisten there is an experienced and well-educated group of doctors
                              with specialist skills and broad experience from the aesthetic and reconstructive industry.</p>
                  </section>
                  <section id="nav-buttons" class="mt-xl">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                  </section>
                  <section id="content">

                        <h2 id="about-cookies">About cookies</h2>

                        <div class="cookies-about-cookies-text">
                              A cookie is a text file that is stored in your browser. We need cookies for our website to function
                              and cookies also make it easier for you to use the internet, as you don't have to start over every
                              time you visit a website. With the help of cookies, a website can therefore remember you and your activity.
                        </div>

                        <h3 class="mt-xl3">
                              What info do we collect through cookies?
                        </h3>

                        <ol>
                              <li class="l10n">When and how long you visited our website</li>
                              <li class="l10n">Which specific and how many pages/articles you visited</li>
                              <li class="l10n">If you have visited our website before</li>
                              <li class="l10n">Your IP number</li>
                        </ol>


                        <h3 class="mt-xl3">About cookies</h3>

                        <p>A cookie is a text file that is stored in your browser. We need cookies for our website
                              to function and cookies also make it easier for you to use the internet,
                              as you don't have to start over every time you visit a website.
                              With the help of cookies, a website can therefore remember you
                              and your activity.</p>

                        <h2 id="privacy-policy">Privacy Policy</h2>

                        <p class="mt-m">
                              The following privacy policy describes how we, AcneSpecialisten.se ("ACNESPECIALISTEN.SE",
                              "we" or "us"), process your personal data when you use AcneSpecialisten.se
                              ("website" or "website"). The policy also describes your rights and how you
                              can use your rights. </p>

                        <p class="mt-xl">
                              As a user of our website, you can always expect us to process your personal data
                              securely. If you have any questions about our privacy policy or about the
                              processing of your personal data, you can alwayscontact us here.

                        </p>

                        <h3 class="mt-xl3">1. Personal data that we collect</h3>

                        <p class="mt-m">
                              When a user visits our website, we may need to collect personal data from the
                              user. We only process personal data to the extent necessary to manage the
                              website's content and provide a functioning website. It is not necessarily
                              the case that we need to collect all of the information mentioned below in
                              your case. For example, we may collect the following categories of personal
                              data about you:
                        </p>

                        <ol>
                              <li>Contact information, such as e-mail address and telephone number.</li>
                              <li>Information about you, such as your name.</li>
                              <li>Your communications with us, such as the information you provide to
                                    us when you contact us via the contact form or use features on our website
                                    such as the doodle board or commenting features.</li>
                              <li>
                                    We collect activity and device information, such as information about browser,
                                    language and operating system, in order to offer a website that is as
                                    customized as possible to your device. Although we usually cannot identify
                                    you using this information, sometimes individuals can be distinguished with
                                    this kind of technical information.

                              </li>
                        </ol>

                        <h3 class="mt-xl3">2. How we collect information about you.</h3>

                        <p class="mt-l">
                              By changing the settings in your browser, you can disable or limit the collection
                              of cookies. You can delete already saved cookies at any time. </p>

                        <p class="mt-l">
                              We use cookies on our website to try to get to know you as a visitor.
                              Cookies are used, for example, to see how you use our website. You can read
                              more about how we use cookies in our cookie policy.
                        </p>

                        <h3 class="mt-xl3">3. How the information about you is used.</h3>

                        <ol>
                              <li>
                                    To communicate with you. We use the personal data (contact details
                                    and other information) you provide to us to communicate with you. Livechat is a
                                    communication tool that offers, among other things, chat and e-mail. Read more
                              </li>
                              <li>
                                    To comply with Swedish laws. We at ACNESPECIALISTEN.SE are obliged to follow Swedish
                                    law, which means that we will process your personal data to the extent required by
                                    Swedish law or other legal obligations.
                              </li>
                              <li>
                                    To protect ACNESPECIALISTEN.SE, you and others. We at ACNESPECIALISTEN.SE can process
                                    your personal data to defend our, your or others' rights or other legitimate interests.
                                    This may be necessary, for example, to protect you and others or to make legal claims.
                              </li>
                              <li>
                                    To collect aggregated statistics for development purposes. We use your personal data to
                                    collect statistics in aggregated form. This means that you cannot be identified through
                                    the data. We use aggregated statistics and device information as a basis to continuously
                                    improve and develop our website. The collection of information takes place with the
                                    support of legitimate interests, such as ACNESPECIALISTEN.SE's interest in improving
                                    and developing the website. Google Analytics is a statistics tool for web pages.Read more.
                              </li>
                              <li>
                                    Google uses your personal data according to their Google Integrity policy (Privacy & Terms)
                                    Read more.
                              </li>
                              <li>
                                    With your permission. We may also use your personal data for purposes other than those
                                    stated above, if you allow us or ask us to do so.
                              </li>
                        </ol>

                        <h3 class="mt-xl3">4. How the data is shared with others</h3>

                        <ol>
                              <li>
                                    People who work with us. Your personal data will be shared with people who work at
                                    ACNESPECIALISTEN.SE, but only with people who need access to the data in order to perform
                                    their tasks, such as communicating with you who left a message via the contact form.
                              </li>
                              <li>
                                    Authorities and in legal contexts. Your personal data may sometimes need to be shared with
                                    authorities, courts and other parties, such as if required by law or in connection with
                                    legal process.
                              </li>
                              <li>
                                    Other parties. We may also share your personal data with other parties,
                                    if you allow us or ask us to do so.
                              </li>
                        </ol>

                        <h3 class="mt-xl3">5. How your data is processed outside the EU/EEA</h3>

                        <p class="mt-l">We at ACNESPECIALISTEN.SE always strive to manage your personal data within the
                              EU/EEA, but sometimes your data may need to be transferred to companies outside
                              the EU/EEA when we use a supplier with a server or seat outside the EU/EEA.</p>

                        <p class="mt-l">
                              You should be aware that other rules may apply regarding the processing of your
                              personal data outside the EU/EEA, which may sometimes result in less protection.
                              However, we always choose our suppliers with care and take the necessary measures
                              to always ensure that your personal data is protected at an adequate level in
                              accordance with GDPR (the General Data Protection Regulation). This means that
                              we are part of the European Commission's standard contract clauses or ensure that
                              the suppliers operate in a country that has an adequate level of protection by the
                              European Commission, or that the company is connected to the Privacy Shield if it
                              operates in the United States.
                        </p>

                        <h3 class="mt-xl3">6. How long we save your data</h3>

                        <p class="mt-l">
                              We will save contact details, opinions and other information you use in your communication with
                              us for as long as we need to handle your case or as long as the communication is ongoing.
                        </p>
                        <p class="mt-l">Personal data that we process with your consent as a legal basis will be
                              deleted if you withdraw your consent. Note, however, that this does not affect our right to
                              process your data before any revocation.</p>

                        <h3 class="mt-xl3">7. Your rights</h3>

                        <ol>
                              <li>
                                    If you believe that we have processed your personal data incorrectly, you have the right to submit a complaint to the Swedish Data Protection Authority (IMY). You can read more about this at Imy.se.
                              </li>
                              <li>If you want ACNESPECIALISTEN.SE to delete or limit your personal data, it may affect or hinder your ability to use the functions on our website. You should be aware that there may be laws that limit or extend your rights, for example legal obligations may prevent or allow us not to delete, disclose or move parts of your data.</li>
                        </ol>

                        <h3 class="mt-xl3">8. Updates to our privacy policy</h3>

                        <p class="mt-l">Our privacy policy may occasionally need to be updated or changed. You will always have access to the latest version of the policy on our website. If we make a major, significant update, you will be notified on the Website or by other appropriate means, so that you have the opportunity to comment on the change before it is implemented. You are also encouraged to read this policy periodically.</p>
                  </section>


            </div>

      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>