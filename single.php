<?php get_header(); ?> <!-- Appel à l’entête -->

<?php if(have_posts()) : ?>

    <?php while(have_posts()) : the_post(); ?>

        <article id="article-seul article-<?php the_ID()?>" class="unit-80 centered">

            <header>
                <h2><?php the_title(); ?></h2>
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <p class="auteur">Publié par : <?php the_author(); ?></p>
                <p class="metadata">Publié le : <?php echo ucfirst(get_the_date('l, j F Y')) ?></p>
            </header>

            <?php the_content(); ?>

            <div class="meta">

                <div class="categories">Catégorie : <?php the_category();
                    ?></div>
                <div class="auteur">Écrit par : <?php the_author_posts_link();
                    ?></div>
                <?php edit_post_link(); ?>
            </div>

            <!-- Navigation article suivant précédant -->
            <div class="navigation clearfix"><?php the_post_navigation(); ?></div>

        </article>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?> <!-- Appel au pied de page -->

