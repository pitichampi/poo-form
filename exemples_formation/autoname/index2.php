<?php

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
//* Avec Autoload
function chargeClass($className){
    echo "** Chargement via autoload de la classe ".$className." **<br>";
    include 'x'. \substr($className,0) . '_class.php';    
}
spl_autoload_register('chargeClass');   // si pas de namespace 
//spl_autoload_register('toto\chargeClass');   //si on est dans le namespace toto
//*/

///////////   au dessus fait l'équivalent du dessous mais au fur et à mesure des besoins   ///////

/*  Sans Autoload   
include 'xBlog\Commentaire_class.php';
include 'xAlbum\Commentaire_class.php';
//*/
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////


//*
//use Blog;  //si on est dans un namespace particulier
//use Album;  //si on est dans un namespace particulier
//*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <?php 
        echo "C'est parti Sans namespace Toto! <br><br>";
       
        $x = new Blog\Commentaire();
        $x->texte = "je suis un Blog\Commentaire() grace à autoload sans besoin de 'use Blog' car on est dans le namespace global (sans namespace)<br><br>";
        echo $x;
    
        $z = new Album\Commentaire();
        $z->texte = "Je suis un Album\Commentaire() grace à autoload et sans besoin de 'use Album' car on est dans le namespace global (sans namespace)<br><br>";
        echo $z;
    
    ?>
</body>
</html>
