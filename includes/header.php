<nav class="is-hidden-desktop" id="mobile-nav">
    <p>hello</p>
</nav>
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
                <?php icon("search") ?>
                <?php icon("bars") ?>
            </div>
        </div>
    </div>
    <script src="includes/header.js"></script>
</header>