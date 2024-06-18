<?php
get_header(); // Inclut l'en-tête du thème
?>

<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-404 not-found">
                    <img class="img-error" src="<?= get_theme_file_uri('assets/images/404.svg') ?>" alt="image error 404">
                    <!-- Lien vers la page d'accueil -->
                    <p><a href="<?php echo home_url(); ?>">Retour à la page d'accueil</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer(); // Inclut le pied de page du thème
?>
