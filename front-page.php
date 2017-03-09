<?php get_header(); ?> <!-- Appel à l’entête -->

<main class="unit-70">
    <!-- teste s'il y a des posts-->
    <?php if(have_posts()) : ?>
        <?php the_post(); ?>
            <article>
                <header class="titre-page">
                    <!-- Le titre de la page est affiché dans un élément header à l’aide de la fonction the_title() -->
                    <h1> <?php the_title(); ?></h1>
                </header>
                <!-- Le contenu de la page est affiché avec la fonction the_content().-->
                <?php the_content(); ?>
            </article>
    <?php endif; ?>
</main>

<aside class="unit-30">
    <?php get_sidebar(); ?> <!-- Appel à la barre latérale -->
</aside>

<?php get_footer(); ?> <!-- Appel au footer -->
