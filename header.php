<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>

        <div>
        <div id="logo">
            <a  href = "<?php echo home_url()?>">
            <img src = "<?php echo get_site_icon_url() ?>">
               </a>
        </div>
        </div>
       
    </header>

    <div id="content">
        <!-- Le reste du contenu de la page va ici -->
