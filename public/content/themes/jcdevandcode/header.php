<!DOCTYPE html>
<html lang="fr">

<head>

<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="a3b84b19-08bb-4af4-9838-b13c190fa88a" data-blockingmode="auto" type="text/javascript"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RQWLYNRNKS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RQWLYNRNKS');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur freelance : sites vitrines, e-commerce, SEO et branding. Transformez votre présence en ligne avec jc dev&code. Contactez-nous !
">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Développeur Freelance près de Mâcon | Sites Vitrine & E-commerce">
    <meta property="og:description" content="Développeur freelance près de Mâcon, expert en création de sites vitrines, e-commerce, SEO et branding. Contactez-nous pour un devis gratuit.">
    <meta property="og:image" content="<?= get_theme_file_uri('assets/images/img_hero.png') ?>">
    <meta property="og:url" content="<?= home_url() ?>">
    <meta property="og:type" content="website">

    <!-- Styles and Fonts -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="content/themes/jcdevandcode/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "jc dev&code",
      "url": "<?= home_url() ?>",
      "logo": "<?= get_theme_file_uri('assets/images/logo.png') ?>",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+33661246520",
        "contactType": "Customer Service",
        "email": "contact@jcdevandcode.fr"
      },
      "sameAs": [
        "https://www.facebook.com/share/Arm8kamBYB2VWFAD/",
        "https://www.instagram.com/jcdevandcode?igsh=NmI3cXNpOHI3ZTRj",
        "https://x.com/jcdevandcode"
      ]
    }
    </script>
    

</head>

<body>

    <div class="btn">
        <img src="<?= get_theme_file_uri('assets/images/arrow.png') ?>" alt="arrow-scroll">

    </div>

    <header>

        <nav class="navbar">
            <div class="container">
                <a class="logo" href="<?= home_url('/#hero') ?>">
                    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.png') ?>" alt="logo">
                </a>

                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link underline active" href="<?= home_url('/#hero') ?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline services-menu" href="#">Services <span><i class="fas fa-angle-down"></i></span> </a>
                            <div class="sub-menu">
                                <ul>
                                    <li><a href="<?= home_url('/sites-vitrine') ?>">Sites vitrine</a></li>
                                    <li><a href="<?= home_url('/sites-ecommerce') ?>">Site e-commerce</a></li>
                                    <li><a href="<?= home_url('/seo') ?>">SEO - Référencement naturel</a></li>
                                    <li><a href="<?= home_url('/branding') ?>">Branding</a></li>
                                </ul>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline" href="<?= home_url('/#projects') ?>">Réalisations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline" href="<?= home_url('/#faq') ?>">F.A.Q.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline" href="<?= home_url('/#contact') ?>">Contact</a>
                        </li>
                        <li class="nav-item"><a class="nav-link mail" href="mailto:contact@jcdevandcode.fr">contact@jcdevandcode.fr</a> </li>
                        <li class="nav-item"><a class="nav-link phone" href="tel:+33661246520">06 61 24 65 20</a></li>
                    </ul>
                </div>

                <a class="toggle" href="#">
                    <img class="img-toggle menu-icon" src="<?= get_theme_file_uri('assets/images/menu.png') ?>" alt="icon menu">
                    <img class="img-toggle close-icon" src="<?= get_theme_file_uri('assets/images/crossburger.png') ?>" alt="icon cross">
                </a>
            </div>
        </nav>
    </header>

    <?php

    wp_head();
