<div id="mobile-nav-overlay" onclick="Header.toggleMenu(false)">
    <nav onclick="event.stopImmediatePropagation()">
        <div id="mobile-nav-head">
            <div></div>
            <a href="">
                <img src="images/logo-green.svg" alt="Acnespecialisten" width="139" height="25" />
            </a>
            <div onclick="Header.toggleMenu(false)"><?php icon('close') ?></div>
        </div>
        <div id="mobile-nav-links">
            <a href="problems" class="mobile-nav-link l10n">Problems</a>
            <a href="prices" class="mobile-nav-link l10n">Prices</a>
            <a href="services" class="mobile-nav-link l10n">Services</a>
            <a href="about" class="mobile-nav-link l10n">About us</a>
            <a href="brands" class="mobile-nav-link l10n">Brands</a>
            <a href="contact" class="mobile-nav-link l10n">Contact</a>
        </div>
        <div id="mobile-expansion-panels">
            <div class="expansion-panel">
                <div class="ep-head" onclick="Header.toggleExpanded(this)">
                    <div class="ep-label l10n">Company</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="about" class="l10n">About us</a>
                    <a href="approach" class="l10n">Our approach</a>
                    <a href="specialists" class="l10n">Specialists</a>
                    <a href="career" class="l10n">Career</a>
                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="Header.toggleExpanded(this)">
                    <div class="ep-label l10n">Support</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="faq" class="l10n">FAQ</a>
                    <a href="glossary" class="l10n">Glossary</a>
                    <a href="skin-guide" class="l10n">Skin guide</a>
                    <a href="contact" class="l10n">Contact</a>
                </div>
            </div>
            <div class="expansion-panel">
                <div class="ep-head" onclick="Header.toggleExpanded(this)">
                    <div class="ep-label l10n">Community</div>
                    <?php icon('arrow-down') ?>
                </div>
                <div class="ep-content">
                    <a href="results" class="l10n">Results</a>
                    <a href="gift-cards" class="l10n">Gift cards</a>
                    <a href="consultation" class="l10n">Free consultation</a>
                </div>
            </div>
        </div>
        <div id="mobile-login-link">
            <div id="ml-head">
                <div id="profile-icon">
                    <?php icon('profile') ?>
                </div>
                <div class="l10n" id="profile-text">Have your personal Acnespecialisten account?</div>
            </div>
            <a href="https://dahlskincare.com/profile/start" target="_blank" class="button outline b200 expand l10n">Login</a>
        </div>
    </nav>
</div>
<header>
    <div class="container">
        <div class="is-hidden-desktop" id="header-small">
            <a href="/">
                <img id="logo" src="images/logo-green.svg" alt="Acnespecialisten" width="139" height="25" />
            </a>
            <div id="menu-button" onclick="Header.toggleMenu(true)">
                <?php icon("bars") ?>
            </div>
        </div>
        <div class="is-hidden-touch" id="header-large">
            <div id="left">
                <a href="/" id="logo">
                    <img src="images/logo-green.svg" alt="Acnespecialisten" width="160" height="28" />
                </a>
                <nav>
                    <ul>
                        <li><a href="problems" class="h100 l10n">Problems</a></li>
                        <li><a href="services" class="h100 l10n">Services</a></li>
                        <li><a href="brands" class="h100 l10n">Brands</a></li>
                        <li><a href="prices" class="h100 l10n">Prices</a></li>
                        <li><a href="contact" class="h100 l10n">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div id="actions">
                <a class="button text l10n" href="https://dahlskincare.com/skin-consultation" target="_blank">Get a free consultation</a>
                <div onclick="Header.toggleMenu(true)">
                    <?php icon("bars") ?>
                </div>
            </div>
        </div>
    </div>
    <script src="includes/header.js"></script>
</header>