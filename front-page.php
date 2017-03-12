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

    <h2>Articles récents</h2>

    <?php $requete = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 5
    )); ?>

    <?php if ($requete->have_posts()) : ?>
        <ul>
            <?php while ($requete->have_posts()) : $requete->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <?php wp_reset_query(); ?>




</aside>

<?php get_footer(); ?> <!-- Appel au footer -->
