<ul>
    <?php
    /* teste si le thème peut utiliser les widgets dans la colonne latérale*/
    if (function_exists('dynamic_sidebar')) {
        dynamic_sidebar('barre-laterale');
    }
    ?>
</ul>