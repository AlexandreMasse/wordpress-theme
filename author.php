

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
                <!-- extrait de l’article est affiché-->
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile;
        the_posts_pagination();
        ?>

    <?php endif; ?>
</main>

<aside class="unit-30">
    <h2>A propos de l'auteur</h2>
    <p class="auteur-nom">
        <?php echo get_the_author(); ?>
    </p>
    <p class="auteur-description">
        <?php the_author_meta( 'description' ); ?>
    </p>
    <p>
        <span class="libelle">Son courriel</span> :
        <?php echo the_author_meta('user_email'); ?>.
    </p>
    <p>
        <span class="libelle">Son site web</span> :
        <?php echo the_author_meta('user_url'); ?>.
    </p>
    <p>
        <?php the_author(); ?> a écrit <?php echo
        get_the_author_posts(); ?> articles dans ce site.
    </p>
</aside>

<?php get_footer(); ?> <!-- Appel au footer -->
