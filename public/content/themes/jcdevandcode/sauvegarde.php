<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

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
            <div class="container">
                <a class="logo" href="#">
                    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.png') ?>" alt="logo">
                </a>

                <!--src="content/themes/jcdevandcode/assets/images/logo.png"-->

                <button id="menu-toggle" class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

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

            </div>
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

    <section class="project">

        <div class="container-project">

            <div class="title-project">

                <h2>Réalisations</h2>

                <p>Nos dernières créations sur-mesure</p>
            </div>

            <div class="cards-project">

                <div class="card-project">

                    <div>

                        <img class="macbook" src="<?= get_theme_file_uri('assets/images/macbook.png') ?>" alt="projet version pc">
                        <img class="iphone" src="<?= get_theme_file_uri('assets/images/iphone.png') ?>" alt="projet version mobile">

                    </div>

                    <div class="detail-project">

                        <h3>jc dev&code</h3>

                        <div class="category-project">#Site vitrine</div>
                        <div class="category-project">#Wordpress</div>

                    </div>

                </div>


                <div class="card-project">

                    <div>

                        <img class="macbook" src="<?= get_theme_file_uri('assets/images/entreveyle.png') ?>" alt="projet version pc">
                        <img class="iphone" src="<?= get_theme_file_uri('assets/images/iphone-entreveyle.png') ?>" alt="projet version mobile">

                    </div>

                    <div class="detail-project">

                        <h3>L'Entre Veyle</h3>

                        <div class="category-project">#Site Vitrine</div>
                        <div class="category-project">#Wordpress</div>

                    </div>

                </div>

                <div class="card-project">

                    <div>

                        <img class="macbook" src="<?= get_theme_file_uri('assets/images/gaming-rivals.png') ?>" alt="projet version pc">
                        <img class="iphone" src="<?= get_theme_file_uri('assets/images/iphone-gaming-rivals.png') ?>" alt="projet version mobile">

                    </div>

                    <div class="detail-project">

                        <h3>Gaming Rivals</h3>

                        <div class="category-project">#Application web</div>
                        <div class="category-project">#Symfony</div>

                    </div>

                </div>

                <div class="card-project">

                    <div>

                        <img class="macbook" src="<?= get_theme_file_uri('assets/images/github.png') ?>" alt="projet version pc">
                        <img class="iphone" src="<?= get_theme_file_uri('assets/images/iphone-github.png') ?>" alt="projet version mobile">

                    </div>


                    <div class="detail-project">

                        <h3>Portfolio</h3>

                        <div class="category-project">#html</div>
                        <div class="category-project">#css</div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="faq">


        <div>

            <h2>F. A. Q.</h2>

            <h3>Nous répondons à vos questions</h3>

            <div class="faq-part">

                <img class="image-faq" src="<?= get_theme_file_uri('assets/images/faq.png') ?>" alt="">


                <div class="questions">

                    <ul>

                        <li>
                            <a class="active close" href="#">
                                Quels sont les services que vous proposez ?
                            </a>
                            <p>
                                Nous proposons une gamme complète de services de création de sites web : Sites vitrine, site e-commerce ou encore application web sur-mesure. Nous offrons également des services de conception graphique, de référencement et de maintenance.
                            </p>
                        </li>


                        <li>
                            <a class="active close" href="#">
                                Quelle est la différence entre un site vitrine et un site e-commerce ?
                            </a>

                            <p>
                                Un site vitrine est conçu pour présenter des informations sur votre entreprise, vos produits ou services, tandis qu'un site e-commerce permet aux utilisateurs d'acheter des produits directement depuis le site. Un site vitrine met l'accent sur la présentation et l'information, tandis qu'un site e-commerce inclut des fonctionnalités de vente en ligne, telles que des paniers d'achat et des paiements en ligne.
                            </p>
                        </li>
                        <li>
                            <a class="active close" href="#">
                                Quels sont les avantages d'avoir un site internet pour mon entreprise ?
                            </a>

                            <p>
                                Un site internet peut augmenter la visibilité de votre entreprise, élargir votre portée géographique, renforcer la crédibilité de votre marque, offrir un canal de communication avec vos clients et générer des ventes ou des prospects.
                            </p>

                        </li>
                        <li>

                            <a class="active close" href="#">
                                Quel est le prix d'un site internet ou d'une application web ?
                            </a>

                            <p>
                                Les coûts de création d'un site internet ou d'une application web dépendent de plusieurs facteurs, y compris la complexité du projet, les fonctionnalités requises et le niveau de personnalisation. Nous offrons des solutions adaptées à différents budgets et nous serions heureux de discuter de vos besoins spécifiques pour vous fournir un devis personnalisé.
                            </p>
                        </li>
                        <li>
                            <a class="active close" href="#">
                                Quelle est la durée moyenne pour la création d'un site web ?
                            </a>
                            <p>
                                La durée de création d'un site web dépend de plusieurs facteurs, tels que la taille et la complexité du projet, ainsi que la disponibilité des ressources. Nous travaillons avec vous pour établir un calendrier réaliste en fonction de vos besoins et de vos délais.
                            </p>
                        </li>
                        <li>
                            <a class="active close" href="#">
                                Quelle est votre politique en matière de protection des données ?
                            </a>
                            <p>
                                Nous prenons la protection des données et la confidentialité très au sérieux. Nous nous conformons aux lois et réglementations en vigueur en matière de protection des données, y compris le RGPD, et nous mettons en place des mesures de sécurité robustes pour protéger vos informations personnelles.
                            </p>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="form">

        <div class="container-form">

            <div class="info-contact">

                <h2>Contactez-nous</h2>

                <p>Vous avez un projet de création de site web ?</p>

                <p>Contactez-nous, par email, téléphone ou via le formulaire ci-contre</p>

                <p>Nous vous fournirons un devis détaillé dans un délai de 48 heures.</p>

            </div>

            <div class="picto-email-avion">

                <img src="<?= get_theme_file_uri('assets/images/email-avion.png') ?>" alt="icone avion email">

            </div>


            <div>

                <form action="process.php" method="POST">
                    <div>
                        <label for="lastname">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                    </div>
                    <div>
                        <label for="firstname">Prénom</label>
                        <input type="text" id="prénom" name="prénom" placeholder="Votre prénom" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre e-mail" required>
                    </div>
                    <div>
                        <label for="telephone">Téléphone</label>
                        <input type="telephone" id="email" name="telephone" placeholder="Votre n° de téléphone" required>
                    </div>
                    <div>
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                    </div>
                    <div class="button-submit">
                        <button type="submit">Soumettre</button>
                    </div>
                </form>

            </div>

        </div>

    </section>

    <footer>

        <div class="container-footer">

            <div class="footer-logo">
                <a href="logo">
                    <img class="img-logo" src="content/themes/jcdevandcode/assets/images/logo.png" alt="logo">
                </a>
            </div>

            <div class="intro-footer">

                <p>
                    <span>jc dev&code</span> met son expertise à votre service <br> pour créer votre site vitrine ou e-commerce.
                </p>

                <div class="social-footer">

                    <a href="">
                        <i class="fab fa-facebook">

                        </i>
                    </a>

                    <a href="">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="">
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
                        <p>jcdevandcode@gmail.com</p>
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
                    <li><a href="">Mentions légales</a></li>
                    <li><a href="">Conditions générales de vente</a></li>
                    <li><a href="">Politique de confidentialité</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <script>
        // Sélectionnez tous les liens de questions
        const questionToggles = document.querySelectorAll('.active');

        // Ajoutez un gestionnaire d'événements à chaque lien
        questionToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                // Empêchez le comportement par défaut du lien (aller vers une autre page)
                e.preventDefault();
                // Sélectionnez le paragraphe suivant (la réponse à la question)
                const answer = this.nextElementSibling;
                // Basculer la visibilité de la réponse
                answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
                this.classList.toggle('open');
                this.classList.toggle('close');
            });
        });
    </script>

</body>

</html>