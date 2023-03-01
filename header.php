<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/reset.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/fonts.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/variables.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
</head>

<body <?php body_class(); ?>>
    <header id="header-main">
        <div class="logo-container">
            <?php the_custom_logo(); ?>
        </div>
        <nav class="main-menu">
            <?php
            wp_nav_menu(array(
                'menu' => 'menu-navegacao',
                'menu_id' => 'menu-principal'
            ));
            ?>
            <a class="contact-button" href="http://" target="_blank" rel="noopener noreferrer">Fale Conosco</a>
        </nav>
        <nav class="menu-responsive active-nav">
            <div class="menu-responsive-hamburger-toggle">
                <img class="menu-hamburger-icon" src="/wp-content/uploads/2023/03/icon-menu.png" alt="menu-hamburger">
            </div>
            <?php
            wp_nav_menu(array(
                'menu' => 'menu-navegacao',
                'menu_id' => 'menu-principal'
            ));
            ?>
        </nav>
    </header>