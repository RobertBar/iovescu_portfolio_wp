<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">
    
    
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
    <section class="container mt-20 mb-20">
        <div class="row justify-content-center">
            <img id="logo" src="<?php echo get_template_directory_uri() ?>/assets/img/DI-LOGO-2.png" alt="">
        </div>
    </section>

    <section id="main-navigation" class="container mt-20 mb-20">
        <div class="row justify-content-center">
            <nav>
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' =>     'primary',
                        'menu_class' =>         'list-inline',
                        'container' =>          false,
                        'fallback_cb' =>        false,
                        'depth' =>              1
                    ));
                }
                ?>
            </nav>
        </div>
    </section>

    <div class="separator"></div>