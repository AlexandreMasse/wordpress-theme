<!doctype html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?> " >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <h1><a href="<?php echo home_url(); ?>" ><?php bloginfo('name'); ?></a></h1>
    </header>

    <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'principal'
        )); ?>
    </nav>

    <div id="contenu">

