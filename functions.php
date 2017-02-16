<?php
/**** Enregistrement des emplacements de menus ****/

/* teste l’existence de la fonction register_nav_menus()*/
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'principal' => 'Menu principal'
        )
    );
}



 /**** Ajout de l'utilisation de la sidebar ****/

 if (function_exists('register_sidebar')) {
     register_sidebar(
         array(
             'name' => 'Barre latérale',
         )
     );
 }




?>
