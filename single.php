<?php get_header(); ?> <!-- Appel à l’entête -->

<?php if(have_posts()) : ?>

    <?php while(have_posts()) : the_post(); ?>

        <article id="article-seul" class="unit-70 centered">

            <header>
                <h2><?php the_title(); ?></h2>
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumb'); ?>
                <?php endif; ?>
                <p class="auteur">Par : <?php the_author(); ?></p>
            </header>

            <?php the_content(); ?>

            <div class="meta">
                <p class="metadata">Publié le : <?php the_date(); ?></p>
            </div>

            <!-- Navigation article suivant précédant -->
            <div class="navigation clearfix"><?php the_post_navigation(); ?></div>

        </article>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?> <!-- Appel au pied de page -->

