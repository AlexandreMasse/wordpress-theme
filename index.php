<?php get_header(); ?> <!-- Appel à l’entête -->

<main id="articles" class="unit-70">
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
                </header>
                <!-- Le contenu de l’article est affiché avec la fonction the_content().-->
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<aside class="unit-30">
    <?php get_sidebar(); ?> <!-- Appel à la barre latérale -->
</aside>

<?php get_footer(); ?> <!-- Appel au footer -->
