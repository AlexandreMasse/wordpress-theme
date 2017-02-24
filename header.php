<!doctype html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?> " >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="--><?php //bloginfo('stylesheet_url'); ?><!--">-->
<!--    <title> --><?php //bloginfo('name'); ?><!-- - --><?php //bloginfo('description'); ?><!-- </title>-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <header class="units-row">

        <?php wp_nav_menu(array(
            'theme_location' => 'meta',
            'container_class' => 'menu meta unit-100',
            'container' => 'nav',
            'menu_class' => '',
            'menu_id' => ''
        )); ?>

        <h1 class="unit-100"><a href="<?php echo home_url(); ?>" ><?php bloginfo('name'); ?></a></h1>

        <?php wp_nav_menu(array(
            'theme_location' => 'principal',
            'container_class' => 'menu principal unit-100',
            'container' => 'nav',
            'menu_class' => '',
            'menu_id' => ''
        )); ?>

    </header>


    <div id="contenu" class="units-row">

