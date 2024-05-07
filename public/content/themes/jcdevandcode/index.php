<!DOCTYPE html>
<html lang="en">

<head>

    <?php get_header(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

</head>

<body>

    <header>

        <nav class="navbar">
            <a class="logo" href="#">
                <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.png') ?>" alt="logo">
            </a>

            <!--src="content/themes/jcdevandcode/assets/images/logo.png"-->

            <div class="navbar-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link underline active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline services-menu" href="#">Services <span><i class="fas fa-angle-down"></i></span> </a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="content/themes/jcdevandcode/vitrine.php">Sites vitrine</a></li>
                                <li><a href="content/themes/jcdevandcode/vitrine.php">Site e-commerce</a></li>
                                <li><a href="#">SEO - Référencement naturel</a></li>
                                <li><a href="#">Branding</a></li>
                            </ul>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="#">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="#">F.A.Q.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="#">Contact</a>
                    </li>
                    <li class="nav-item"><a class="nav-link mail" href="mailto:jcdevandcode@gmail.com">jcdevandcode@gmail.com</a> </li>
                    <li class="nav-item"><a class="nav-link phone" href="tel:+33661246520">06 61 24 65 20</a></li>
                </ul>
            </div>

            <a class="toggle" href="#">
                <img class="img-toggle" src="<?= get_theme_file_uri('assets/images/menu.png') ?>" alt="">
            </a>
        </nav>
    </header>

    <section class="hero">

<div class="hero-social-icon">

    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <!--<a href="#"><i class="fab fa-linkedin-in"></i></a>-->
    <span class="follow-us"> Suivez-nous</span>
</div>
<div class="hero-presentation">

    <h3>Boostez votre présence en ligne</h3>

    <h1>jc dev&code</h1>

    <h2>crée votre <span>site internet</span></h2>


    <h4> Avec notre expertise, vous serez en mesure de vous <span>démarquer</span> et de <br> <span>mettre en valeur</span> votre entreprise
    </h4>

    <div class="hero-buttons">

        <a class="button-item realisations" href="">
            Réalisations
        </a>

        <a class="button-item contact" href="#">
            Contactez-nous
        </a>
    </div>


    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/img_hero.png') ?>" alt="logo-hero">


</div>

<div class="hero-img">
    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/img_hero.png') ?>" alt="logo-hero">
</div>

</section>

<section class="services">

<div class="container-services">

    <div class="first-row">

        <div class="title-services">

            <h2>Services</h2>

            <h3>Spécialiste en développement web et en référencement, <span>jc dev&code</span>

                vous accompagnera de A à Z dans vos projets.</h3>
        </div>

        <div class="card-services vitrine grey">

            <a class="vitrine_link" href="content/themes/jcdevandcode/contact.php">

                <h3>Sites vitrine</h3>

                <p>Création et refonte sur-mesure avec Wordpress ou Symfony</p>

            </a>

        </div>

    </div>


    <div class="second-row">

        <div class="card-services ecommerce white">

            <a class="ecommerce_link" href="#">

                <h3>Sites e-commerce</h3>

                <p>Création et refonte sur mesure avec Woocommerce ou Symfony</p>

            </a>

        </div>

        <div class="card-services seo grey">

            <a class="seo_link" href="#">

                <h3>SEO - Référencement naturel</h3>

                <p>Optimisation de votre visibilité sur Google</p>

            </a>

        </div>

        <div class="card-services branding white">

            <a class="branding_link" href="#">

                <h3>Branding</h3>

                <p>Création de logo, charte graphique</p>

            </a>

        </div>

    </div>

</div>

</section>

<section class="process">

<div class="container-process">

    <div class="title-process">

        <h2>Processus de création</h2>

        <p>Chaque site web que nous concevons est le fruit d'un <span>processus méticuleux</span>. De la première prise de contact jusqu'au déploiement final, nous nous engageons à offrir une <span>expérience transparente et satisfaisante</span> à nos clients. Notre approche repose sur une <span>série d'étapes bien définies</span>, conçues pour garantir la <span>qualité</span>, la <span>pertinence</span> et l'</span>efficacité</span> de chaque projet.</p>

    </div>

    <div class="cards-process">

        <div class="card-process exchange">

            <h3>Echange</h3>

            <p>Prise de contact et échange pour vous apporter la solution la plus adaptée à vos besoins</p>

        </div>

        <div class="card-process estimate ">

            <h3>Devis/cahier des charges</h3>

            <p>Validation du projet et établissement du cahier des charges</p>

        </div>

        <div class="card-process construction">

            <h3>Construction</h3>

            <p>Réalisation du site suivant le cahier des charges. Retours réguliers durant la phase de développement.</p>

        </div>

        <div class="card-process delivery">

            <h3>Livraison</h3>

            <p>Tests et mise en ligne de votre site. Formation dispensée pour gérer votre site en autonomie.</p>

        </div>

    </div>

</div>

</section>

    <?php get_footer(); ?>
</body>

</html>