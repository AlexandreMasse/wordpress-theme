

<?php get_header(); ?> <!-- Appel à l’entête -->

<main id="articles" class="unit-70 row">

    <h1><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>

    <!-- teste s'il y a des posts-->
    <?php if(have_posts()) : ?>
        <!-- boucle tant qu'il y a des articles -->
        <!-- chaque article lu, la boucle récupère ses informations grâce à la fonction the_post()-->
        <?php while(have_posts()) : the_post(); ?>
            <!-- Chaque article est inséré dans un élément article -->
            <article>
                <header class="titre-article">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <!-- Le titre de l’article est affiché dans un élément header à l’aide de la fonction the_title() -->
                            <?php the_title(); ?>
                        </a>
                    </h2>
                   <p><strong><?php the_date()?></strong></p>
                </header>

                <?php if(has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php endif; ?>
                <!-- extrait de l’article est affiché-->
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile;
        the_posts_pagination();
        ?>

    <?php endif; ?>

</main>

<aside class="unit-30">

    <?php $requete = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'ignore_sticky_posts' => true
    )); ?>

    <?php if ($requete->have_posts()) : ?>
        <h2>3 articles au hasard</h2>
    <ul>
        <?php while ($requete->have_posts()) : $requete->the_post(); ?>
                <li class="titre-article">
                    <a href="<?php the_permalink(); ?>">
                        <!-- Le titre de l’article est affiché dans un élément header à l’aide de la fonction the_title() -->
                        <?php the_title();?>
                    </a>
                </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    <?php wp_reset_query(); ?>


    <?php get_sidebar(); ?> <!-- Appel à la barre latérale -->
</aside>

<?php get_footer(); ?> <!-- Appel au footer -->
