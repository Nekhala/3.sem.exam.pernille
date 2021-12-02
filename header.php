<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>"><strong>Pernille</strong> Dalmar</a>
            </h1>

            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>

                </ul>
            </nav>

            </div>
        </div>
        </header>
