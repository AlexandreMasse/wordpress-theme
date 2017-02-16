<?php get_header(); ?> <!-- Appel à l’entête -->

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article id="article-seul">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <p class="metadata">Par : <?php the_author(); ?></p>
            <p class="metadata">Publié le : <?php the_date(); ?></p>
        </article>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_sidebar(); ?> <!-- Appel à la barre latérale -->
<?php get_footer(); ?> <!-- Appel au pied de page -->

