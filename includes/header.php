<div id="mobile-nav-overlay" onclick="HeaderTouch.toggleMenu()">
    <nav onclick="event.stopImmediatePropagation()">
        <div id="mobile-nav-head">
            <div></div>
            <a href="/">
                <img src="images/logo-green.svg" alt="Acnespecialisten logo" title="Acnespecialisten logo" width="139" height="25" />
            </a>
            <div onclick="HeaderTouch.toggleMenu()"><?php icon('close') ?></div>
        </div>
        <div id="mobile-nav-links">
            <a href="problem" class="mobile-nav-link l10n">Problem</a>
            <a href="priser" class="mobile-nav-link l10n">Priser</a>
            <a href="behandlingar" class="mobile-nav-link l10n">Behandlingar</a>
            <a href="resultat" class="mobile-nav-link l10n">Resultat</a>
            <a href="varumarken" class="mobile-nav-link l10n">Varumärken</a>
            <a href="kontakt" class="mobile-nav-link l10n">Kontakt</a>
        </div>
        <div id="mobile-expansion-panels">
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Företag</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="om-oss" class="l10n">Om oss</a>
                    <a href="metod" class="l10n">Vår metod</a>
                    <a href="specialister" class="l10n">Våra specialister</a>
                    <a href="https://skonhetsgruppen.teamtailor.com" rel="nofollow" title="Teamtailor" target="_blank" class="l10n">Karriär</a>
                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Kundtjänst</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="faq" class="l10n">Frågor & Svar</a>
                    <a href="ordlista" class="l10n">Ordlista</a>
                    <a href="hudguide" class="l10n">Hudguide</a>
                    <a href="kontakt" class="l10n">Kontakt</a>
                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="HeaderTouch.toggleExpanded(this)">
                    <div class="ep-label l10n">Community</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="resultat" class="l10n">Resultat</a>
                    <a href="presentkort" class="l10n">Presentkort</a>
                    <a href="hudkonsultation" class="l10n">Gratis konsultation</a>
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
            <a href="https://dahlskincare.com/profile/start" target="_blank" class="button outline b200 expand l10n">Login</a>
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
                            <li class="l10n">Företag</li>
                            <li><a href="om-oss" class="l10n">Om oss</a></li>
                            <li><a href="metod" class="l10n">Vår metod</a></li>
                            <li><a href="specialister" class="l10n">Våra specialister</a></li>
                            <li><a href="https://skonhetsgruppen.teamtailor.com" target="_blank" rel="nofollow" title="Teamtailor" class="l10n">Karriär</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="l10n">Kundtjänst</li>
                            <li><a href="faq" class="l10n">Frågor & Svar</a></li>
                            <li><a href="avbokningspolicy" class="l10n">Avbokning</a></li>
                            <li><a href="ordlista" class="l10n">Ordlista</a></li>
                            <li><a href="hudguide" class="l10n">Hudguide</a></li>
                            <li><a href="kontakt" class="l10n">Kontakt</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="l10n">Community</li>
                            <li><a href="resultat" class="l10n">Resultat</a></li>
                            <li><a href="presentkort" class="l10n">Presentkort</a></li>
                            <li><a href="konsultation" class="l10n">Gratis konsultation</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <div id="desktop-login-box">
                            <div id="dl-profile-icon"><?php icon('profile') ?></div>
                            <div class="l10n" id="dl-profile-text">Logga in för att se dina rekomendationer samt chatta med din personliga hudterapeut</div>
                            <a href="https://dahlskincare.com/profile/start" target="_blank" class="button outline expand l10n">Login</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>
<header>
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
            <div id="left">
                <a href="/" id="logo">
                    <img src="images/logo-green.svg" alt="Acnespecialisten logo" title="Acnespecialisten logo" width="160" height="28" />
                </a>
                <nav>
                    <ul>
                        <li><a href="problem" class="h100 l10n">Problem</a></li>
                        <li><a href="behandlingar" class="h100 l10n">Behandlingar</a></li>
                        <li><a href="varumarken" class="h100 l10n">Varumärken</a></li>
                        <li><a href="om-oss" class="h100 l10n">Om oss</a></li>
                        <li><a href="priser" class="h100 l10n">Priser</a></li>
                        <li><a href="kontakt" class="h100 l10n">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
            <div id="actions">
                <a class="button text l10n" href="hudkonsultation">Boka gratis konsultation</a>
                <div onclick="HeaderDesktop.toggleMenu()">
                    <?php icon("bars") ?>
                </div>
            </div>
        </div>
    </div>
    <script src="includes/header.js"></script>
</header>