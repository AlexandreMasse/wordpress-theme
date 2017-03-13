<?php get_header(); ?> <!-- Appel à l’entête -->

<main class="row">
    <div class="col col-12">

        <h2>Recherche</h2>
        <?php get_search_form()?>


        <h2>Les 3 articles les plus récents</h2>

        <?php $requete = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true
        )); ?>

        <?php if ($requete->have_posts()) : ?>

            <?php while ($requete->have_posts()) : $requete->the_post(); ?>
                <article>
                    <header class="titre-article">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <!-- Le titre de l’article est affiché dans un élément header à l’aide de la fonction the_title() -->
                                <?php the_title();?>
                            </a>
                        </h2>
                    </header>
                    <!-- extrait de l’article est affiché-->
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Lire la suite...</a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>


</main>


<?php get_footer(); ?> <!-- Appel au footer -->
