<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            X
            <?php
                // show primary menu
                wp_nav_menu(['menu' => 'primary']);
            ?>
        </header>
