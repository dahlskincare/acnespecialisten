<div id="mobile-nav-overlay" onclick="HeaderTouch.toggleMenu()">
    <nav onclick="event.stopImmediatePropagation()">
        <div id="mobile-nav-head">
            <div></div>
            <a href="/">
                <img src="images/logo-green.svg" alt="Acnespecialisten logo" title="Acnespecialisten logo" width="139" height="25" />
            </a>
            <div id="mobile-nav-close" onclick="HeaderTouch.toggleMenu()"><?php icon('close') ?></div>
        </div>
        <div id="mobile-nav-links">
            <a href="/hudproblem/" class="mobile-nav-link l10n" title="Hudproblem">Hudproblem</a>
            <a href="/hudbehandlingar/" class="mobile-nav-link l10n" title="Hudbehandlingar">Behandlingar</a>
            <a href="resultat.php" class="mobile-nav-link l10n" title="Resultat">Resultat</a>
            <a href="/varumarken/" class="mobile-nav-link l10n" title="Varumärken">Varumärken</a>
            <a href="metoden.php" class="mobile-nav-link l10n" title="Vår metod">Vår metod</a>
            <a href="kontakt.php" class="mobile-nav-link l10n" title="Kontakt">Kontakt</a>
        </div>
        <div id="mobile-expansion-panels">
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Information</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="resultat.php" class="l10n" title="Se våra kunders före- och efterbilder">Resultat</a>
                    <a href="/hudguide/" class="l10n" title="Läs mer om allt inom hudvård">Hudguide</a>
                    <a href="ordlista.php" class="l10n" title="Lär dig med om hudvård från A till Ö">Ordlista</a>
                    <a href="/priser/" class="l10n" title="Här hittar du vår prislista">Priser</a>
                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Kundtjänst</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="kontakt.php" class="l10n" title="Kontakta oss via chatt, e-post eller telefon">Kontakt</a>
                    <a href="fragor-svar.php" class="l10n" title="Populära frågor & svar från våra kunder">Frågor & Svar</a>
                    <a href="presentkort.php" class="l10n" title="Köp presentkort hos oss">Presentkort</a>
                    <a href="avbokningspolicy.php" class="l10n" title="Läs mer om vår avbokningspolicy">Avbokning</a>

                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Företag</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="om-oss.php" class="l10n" title="Mer information om oss på AcneSpecialisten">Om oss</a>
                    <a href="metoden.php" class="l10n" title="Lär dig mer om hur vår metod går till">Vår metod</a>
                    <a href="/hudterapeut/" class="l10n" title="Se alla våra specialister och hudterapeuter">Våra hudterapeut</a>
                    <a href="karriar.php" class="l10n" title="Se våra lediga tjänster">Din karriär</a>
                </div>
            </div>
        </div>
        <div id="mobile-login-link">
            <div id="ml-head">
                <div id="profile-icon">
                    <?php icon('profile') ?>
                </div>
                <div class="l10n" id="profile-text">Logga in för att se dina rekomendationer samt chatta med din personliga hudterapeut</div>
            </div>
            <a href="https://dahlskincare.com/profile/start" target="_blank" class="button outline b200 expand l10n" title="Login">Till inloggning</a>
        </div>
    </nav>
</div>
<div id="desktop-nav-overlay" onclick="HeaderDesktop.toggleMenu()">
    <nav onclick="event.stopImmediatePropagation()">
        <div class="container">
            <div id="desktop-nav-overlay-content">
                <div class="columns">
                    <div class="column">
                        <ul>
                            <li class="l10n">Information</li>
                            <li><a href="resultat.php" class="l10n" title="Se våra kunders före- och efterbilder">Resultat</a></li>
                            <li><a href="/hudguide/" class="l10n" title="Läs mer om allt inom hudvård">Hudguide</a></li>
                            <li><a href="ordlista.php" class="l10n" title="Lär dig med om hudvård från A till Ö">Ordlista</a></li>
                            <li><a href="/priser/" class="l10n" title="Här hittar du vår prislista">Priser</a></li>

                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="l10n">Kundtjänst</li>
                            <li><a href="kontakt.php" class="l10n" title="Kontakta oss via chatt, e-post eller telefon">Kontakt</a></li>
                            <li><a href="fragor-svar.php" class="l10n" title="Populära frågor & svar från våra kunder">Frågor & Svar</a></li>
                            <li><a href="presentkort.php" class="l10n" title="Köp presentkort hos oss">Presentkort</a></li>
                            <li><a href="avbokningspolicy.php" class="l10n" title="Läs mer om vår avbokningspolicy">Avbokning</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="l10n">Företag</li>
                            <li><a href="om-oss.php" class="l10n" title="Mer information om oss på AcneSpecialisten">Om oss</a></li>
                            <li><a href="metoden.php" class="l10n" title="Lär dig mer om hur vår metod går till">Vår metod</a></li>
                            <li><a href="/hudterapeut/" class="l10n" title="Se alla våra specialister och hudterapeuter">Våra hudterapeuter</a></li>
                            <li><a href="karriar.php" class="l10n" title="Se våra lediga tjänster">Din karriär</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <div id="desktop-login-box">
                            <div id="dl-profile-icon"><?php icon('profile') ?></div>
                            <div class="l10n" id="dl-profile-text">Logga in för att se dina rekomendationer samt chatta med din personliga hudterapeut</div>
                            <a href="https://dahlskincare.com/profile/start" target="_blank" class="button outline expand l10n" title="Login">Till inloggning</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>
<header>
    <div class="container" id="important-notice-container">
        <div id="important-notice">
            <div class="important-notice-slide">
                <span class="important-notice-highlight">20%</span>
                <span>Studentrabatt</span>
                <a href="studentrabatt/" title="Studentrabatt">Läs mer</a>
            </div>
            <div class="important-notice-slide offscreen-right">
                <span>Gratis hudkonsultation</span>
                <a href="gratis-hudkonsultation.php" title="Gör vår hudkonsultation">Läs mer</a>
            </div>
            <div class="important-notice-slide offscreen-right">
                <span>Presentkort</span>
                <a href="presentkort.php" title="Presentkort">Läs mer</a>
            </div>
            <div class="important-notice-slide-button" id="important-notice-prev" onclick="HeaderDesktop.slidePrev()"><?php icon('navigate-next') ?></div>
            <div class="important-notice-slide-button" id="important-notice-next" onclick="HeaderDesktop.slideNext()"><?php icon('navigate-next') ?></div>
        </div>
    </div>
    <div class="container">
        <div class="is-hidden-desktop" id="header-small">
            <a href="/">
                <img id="logo" src="images/logo-green.svg" alt="Acnespecialisten logo" title="Acnespecialisten logo" width="139" height="25" />
            </a>
            <div id="menu-button" onclick="HeaderTouch.toggleMenu()">
                <?php icon("bars") ?>
            </div>
        </div>
        <div class="is-hidden-touch" id="header-large">
            <a href="/" id="logo">
                <img src="images/logo-green.svg" alt="Acnespecialisten logo" title="Acnespecialisten logo" width="160" height="28" />
            </a>
            <nav>
                <ul>
                    <li><a href="/hudproblem/" class="h100 l10n" title="Hudproblem">Hudproblem</a></li>
                    <li><a href="/hudbehandlingar/" class="h100 l10n" title="Hudbehandlingar">Behandlingar</a></li>
                    <li><a href="varumarken" class="h100 l10n" title="Varumärken">Varumärken</a></li>
                    <li><a href="resultat.php" class="h100 l10n" title="Resultat">Resultat</a></li>
                    <li><a href="metoden.php" class="h100 l10n" title="Vår metod">Vår metod</a></li>
                    <li><a href="kontakt.php" class="h100 l10n" title="Kontakt">Kontakt</a></li>
                </ul>
            </nav>
            <div id="actions">
                <a class="button text l10n" href="gratis-hudkonsultation.php" title="Boka gratis konsultation">Boka gratis konsultation</a>
                <div onclick="HeaderDesktop.toggleMenu()">
                    <div id="hamburger">
                        <div class="btn not-active" id="hamburger-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="includes/header.js"></script>
</header>