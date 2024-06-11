
<footer>

<div class="container-footer">

    <div class="footer-logo">
        <a href="#hero">
            <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.png') ?>" alt="logo">
        </a>
    </div>

    <div class="intro-footer">

        <p>
            <span>jc dev&code</span> met son expertise à votre service pour créer votre site vitrine ou e-commerce.
        </p>

        <div class="social-footer">

            <a href="https://www.facebook.com/share/Arm8kamBYB2VWFAD/">
                <i class="fab fa-facebook">

                </i>
            </a>

            <a href="https://www.instagram.com/jcdevandcode?igsh=NmI3cXNpOHI3ZTRj">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://x.com/jcdevandcode">
                <i class="fab fa-twitter"></i>
            </a>

        </div>
    </div>

    <div class="bloc-services">

        <h2><span>S</span>ervices</h2>

        <ul>

            <li><a href="#">Sites vitrine</a></li>
            <li><a href="#">Sites e-commerce</a></li>
            <li><a href="#">SEO - Référencement naturel</a></li>
            <li><a href="#">Branding </a></li>

        </ul>
    </div>

    <div class="bloc-contact">

        <h2><span>C</span>ontact</h2>

        <div class="info-contact">

            <div class="footer-social-icon">
                <i class="fas fa-phone"></i>
            </div>

            <div class="footer-social-info">
                <p>06.61.24.65.20</p>
            </div>
        </div>

        <div class="info-contact">
            <div class="footer-social-icon">
                <i class="fas fa-envelope"></i>
            </div>

            <div class="footer-social-info">
                <p>contact@jcdevandcode.fr</p>
            </div>
        </div>

        <div class="info-contact">

            <div class="footer-social-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>

            <div class="footer-social-info">
                <p>80 Impasse des Vignes, 01290 GRIEGES </p>
            </div>

        </div>
    </div>
</div>

<div class="footer-bottom">

    <div class="copyright">

        <p>&#169; Copyright 2024 <span>jc dev&code</span>. Tous droits résérvés</p>
    </div>

    <div class="legale-notices">
        <ul>
            <li><a href="<?= home_url('/mentions-legales') ?>">Mentions légales - </a></li>
            <li><a href="<?= home_url('/politique-de-confidentialite') ?>">Politique de confidentialité</a></li>
        </ul>
    </div>

</div>

</footer>


</body>

</html>


<?php
// STEP E4 THEME gestion du footer de la page html par wp
wp_footer();