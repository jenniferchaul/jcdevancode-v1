<?php
/*
Template Name: BRANDING
*/
get_header();
?>


<section id="hero" class="hero">

    <div class="hero-social-icon">

        <a href="https://www.facebook.com/share/Arm8kamBYB2VWFAD/ "><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/jcdevandcode?igsh=NmI3cXNpOHI3ZTRj"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com/company/jc-dev-code"><i class="fab fa-linkedin-in"></i></a>
        <span class="follow-us"> Suivez-nous</span>
    </div>

    <div class="hero-presentation">

        <h3>Boostez votre présence en ligne</h3>

        <h1>branding</h1>

        <h2 style="text-transform: inherit;">Créez une identité visuelle <span>impactante</span></h2>

        <h4>Chez <span>JC Dev&Code</span>, votre marque est bien plus qu'un simple logo. Elle incarne <span>l'âme</span> de votre entreprise et façonne la première impression que vous laissez.
            Nous créons pour vous une <span>identité visuelle forte et cohérente</span>, fidèle à vos valeurs.</h4>

        <div class="hero-buttons">

            <a class="button-item realisations" href="#projects">
                Réalisations
            </a>

            <a class="button-item contact" href="#contact">
                Contact
            </a>
        </div>


        <div class="img-under-button">

            <img class="img-logo" src="<?= get_theme_file_uri('assets/images/www-amico.svg') ?>" alt="logo-hero">

        </div>

    </div>

    <div class="hero-img">
        <img class="img-logo" src="<?= get_theme_file_uri('assets/images/www-amico.svg') ?>" alt="logo-hero">
    </div>

</section>


<section class="branding-section">

    <h2>Nos Services de Branding</h2>

    <div class="img-vitrine">

    <img src="<?= get_theme_file_uri('assets/images/brands-creation-animate.svg') ?>" alt="image creation logo">
    
    </div>


    <div class="branding-services">

        <div>

            <img class="img-services" src="<?= get_theme_file_uri('assets/images/creation_logo.webp') ?>" alt="image creation logo">

        </div>

        <div class="description-services">

            <h3>Création de Logo</h3>

            <p> Nous concevons des logos uniques et mémorables qui capturent l'essence de votre marque. Que vous ayez besoin d'un design modern, minimaliste ou audacieux, nous avons les compétences pour le réaliser.</p>

        </div>
    </div>

    <div class="branding-services reverse">

        <div>

            <img class="img-services" src="<?= get_theme_file_uri('assets/images/charte_graphique.webp') ?>" alt="image creation charte graphique">

        </div>

        <div class="description-services">

            <h3>Charte Graphique</h3>

            <p>
                Pour garantir une cohérence visuelle et une identité de marque harmonisée sur tous vos supports, y compris les publicités numériques, une charte graphique complète est indispensable.</p>

        </div>

    </div>

    <div class="branding-services">

        <div>

            <img class="img-services" src="<?= get_theme_file_uri('assets/images/design_web.webp') ?>" alt="image creation design site web">

        </div>

        <div class="description-services">

            <h3>Design de Site Web</h3>

            <p> Nous concevons des sites web attrayants et intuitifs qui non seulement suscitent l'intérêt de vos visiteurs, mais les engagent aussi durablement, favorisant ainsi leur fidélisation.</p>

        </div>
    </div>

    <div class="branding-services reverse">

<div>

    <img class="img-services" src="<?= get_theme_file_uri('assets/images/marketing.webp') ?>" alt="image creation supports marketing">

</div>

<div class="description-services">

    <h3>Supports Marketing</h3>

    <p>
    Flyers, brochures, cartes de visite – nous vous aidons à produire des supports marketing de qualité qui se démarquent par leur originalité et captent efficacement l'attention de votre audience, en mettant en valeur vos messages de manière percutante et attrayante.</p>

</div>

</div>

</section>


<section class="contact-services">

    <div class="cta">
        <a href="<?= home_url('/#contact') ?>">Contactez-nous pour un Devis</a>
    </div>

</section>



<?php

get_footer(); // Inclut le footer