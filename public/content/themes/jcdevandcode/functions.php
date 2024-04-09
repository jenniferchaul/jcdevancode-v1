<?php


add_action(
    'after_setup_theme', // nom de l'event
    'jcdevandcode_initializeTheme' //nom de la fonction
);

if (!function_exists('jcdevandcode_initializeTheme')) {
    function jcdevandcode_initializeTheme()
    {
        // DOC add_theme_support : https://developer.wordpress.org/reference/functions/add_theme_support/
        // nous laissons wordpress gérer la balise <title> de notre thème
        add_theme_support('title-tag');

        // les posts de notre thème peuvent avoir une image de mise en avant
        add_theme_support('post-thumbnails');

        // le thème peut gérer des menus
        add_theme_support('menus');
    }
};



// chargement des assets du thème
add_action(
    'wp_enqueue_scripts', // event pour charger nos assets
    function() {
        wp_enqueue_style(
            'jcdevandcode-styles', // identifiant de notre fichier css
            // wordpress nous calcule le chemin vers le fichier assets/css/style.css
            get_theme_file_uri('assets/scss/style.css')
        );


        // DOC wp_enqueue_script https://developer.wordpress.org/reference/functions/wp_enqueue_script/
        wp_enqueue_script(
            'category-js', // nom du script
            get_theme_file_uri('assets/js/category.js'),
            [], // category.js n'a pas besoin d'autre javascript pour fonctionner
            '1.0.0', // version de notre javascript
            true // la balise script sera injectée dans le footer
        );
    }

    
);