<?php
/*
 * Template name: Page à propos
 */
?>

<?php get_header(); ?> <!-- Appel à l’entête -->
<main class="unit-70">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
            <header>
                <h2>Page personnalisée à propos</h2>
            </header>
            <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</main>


<aside class="unit-30">
    <?php the_post_thumbnail(); ?>
    <?php get_sidebar(); ?> <!-- Appel à la barre latérale -->
</aside>

<?php get_footer(); ?> <!-- Appel au pied de page -->