    </div> <!-- fermeture de la div #contenu -->

    <footer>
        <div class="units-row">
            <?php wp_nav_menu(array(
                'theme_location' => 'principal',
                'container_class' => 'piedpage unit-50',
                'container' => 'nav',
                'menu_class' => '',
                'menu_id' => '',
            )); ?>
            <div class="unit-50">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar('pied-de-page');
                }
                ?>
            </div>
        </div>
        <div class="copyright units-row">
            <p class="unit-100"><?php bloginfo('description'); ?></p>
        </div>

        <?php /*wp_footer(); */?>
    </footer>

</body>
</html>
<?php

/**
 * Created by IntelliJ IDEA.
 * User: Alex
 * Date: 16/02/2017
 * Time: 13:45
 */