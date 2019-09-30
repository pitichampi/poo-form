<?php
namespace toto{
//*
function strtolower($x){
    return "<br>String to Lower en grève chez toto<br>";
}
//*/

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
//* Avec Autoload
function chargeClass($className){
    echo "** Chargement Autoload de la classe ".$className." **<br>";
    include 'x'. \substr($className,0) . '_class.php';    
}
//spl_autoload_register('chargeClass');   // si pas de namespace 
spl_autoload_register('toto\chargeClass');   //si on est dans le namespace toto
    // Le premier appel à spl_autoload_register(..) est le seul pris en compte. Il ne dépend pas du namespace.
//*/

///////////   au dessus fait l'équivalent du dessous mais au fur et à mesure des besoins   ///////

/*  Sans Autoload   
include 'xBlog\Commentaire_class.php';
include 'xAlbum\Commentaire_class.php';
//*/
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

//*
//Alias Permet d'éviter de rappeler le chemin de la Classe pour le autoload
use Blog\Commentaire;  //<=> use Blog\Commentaire as Commentaire;
use Blog as bb;
use Blog\Commentaire as bbc;
// use Album\Commentaire ; //Conflit avec : use Blog\Commentaire;
use Album\Commentaire as Acom;
//*/

//*
use Blog;  //si on est dans un namespace particulier
use Album;  //si on est dans un namespace particulier
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
        echo "C'est parti ! <br>";
        echo '<code><pre>        $x = new Commentaire();
        $x->texte = "Je suis un Commentaire grace à autoload et use Blog\Commentaire;";
        echo $x;
        $x = new bb\Commentaire();
        $x->texte = "je suis un bb\Commentaire() grace à autoload et use Blog as bb;";
        echo $x;
        $x = new bbc();
        $x->texte = "je suis un bbc() grace à autoload et use Blog\Commentaire as bbc;";
        echo $x;
        $x = new Blog\Commentaire();
        $x->texte = "je suis un Blog\Commentaire() grace à autoload et à use Blog car on est dans le namespace toto;";
        echo $x;
        $x = new \Blog\Commentaire();
        $x->texte = "je suis un \Blog\Commentaire() j\'ai juste besoin de l\'autoload";
        echo $x;
        //----------------------------------
        $z = new Album\Commentaire();
        $z->texte = "Je suis un \Album\Commentaire() grace à autoload et à use Album car on est dans le namespace toto;";
        echo $z;
        $z = new \Album\Commentaire();
        $z->texte = "Je suis un \Album\Commentaire() j\'ai juste besoin de l\'autoload";
        echo $z;
        $z = new Acom();
        $z->texte = "Je suis un Acom() grace à autoload et use Album\Commentaire as Acom;";
        echo $z;<br></pre></code>';
    
    
    
        $x = new Commentaire();
        $x->texte = "Je suis un Commentaire grace à autoload et <code>use Blog\Commentaire;</code><br>";
        echo $x;
        $x = new bb\Commentaire();
        $x->texte = "je suis un bb\Commentaire() grace à autoload et <code>use Blog as bb;</code><br>";
        echo $x;
        $x = new bbc();
        $x->texte = "je suis un bbc() grace à autoload et <code>use Blog\Commentaire as bbc;</code><br>";
        echo $x;
        $x = new Blog\Commentaire();
        $x->texte = "je suis un Blog\Commentaire() grace à autoload et à <code>use Blog</code> car on est dans le namespace toto; <a href='index2.php'> sans namespace toto</a><br>";
        echo $x;
        $x = new \Blog\Commentaire();
        $x->texte = "je suis un \Blog\Commentaire() j'ai juste besoin de l'autoload<br>";
        echo $x;
    
        $z = new Album\Commentaire();
        $z->texte = "Je suis un \Album\Commentaire() grace à autoload et à <code>use Album</code> car on est dans le namespace toto; <a href='index2.php'> sans namespace toto</a><br>";
        echo $z;
        $z = new \Album\Commentaire();
        $z->texte = "Je suis un \Album\Commentaire() j'ai juste besoin de l'autoload<br>";
        echo $z;
        $z = new Acom();
        $z->texte = "Je suis un Acom() grace à autoload et <code>use Album\Commentaire as Acom;</code><br>";
        echo $z;
    } //fin namespace toto
    /////////////////////////////////////////
    //*
    // si on ferme le namespace précédent on peut encréer un nouveau 
    namespace tutu{
    echo "<hr><pre>
    namespace tutu{
    function strtolower(\$x){
        return '&lt;br&gt;String to Lower en grève chez tutu&lt;br&gt;';
    }
        echo   '&lt;h1&gt;Namespace ' . __NAMESPACE__ . ' : &lt;/h1&gt;'';
        echo \strtolower('BOnjouR');     //appel à la fonction php normale
        echo strtolower('BOnjouR');      //appel dans le namespace courant 
        echo \tutu\strtolower('BOnjouR'); //appel au namespace tutu;
        echo \toto\strtolower('BOnjouR'); //appel au namespace toto;
        //echo toto\strtolower('BOnjouR'); //appel au namespace toto;  //!! erreur tutu\toto\strtolower n'existe pas
    }
    </pre>";
        function strtolower($x){
            return "<br>String to Lower en grève chez tutu<br>";
        }
            echo   "<hr> <h1>Namespace " . __NAMESPACE__ . " : </h1>";
            echo \strtolower('BOnjouR');     //appel à la fonction php normale
            echo strtolower('BOnjouR');      //appel dans le namespace courant 
            echo \tutu\strtolower('BOnjouR'); //appel au namespace tutu;
            echo \toto\strtolower('BOnjouR'); //appel au namespace toto;
            //echo toto\strtolower('BOnjouR'); //appel au namespace toto;  //!! erreur tutu\toto\strtolower n'existe pas
    }
    //*/    
    /////////////////////////////////////////
    //*


    
    // namespace seul ==> renvoie sur le namespace global
    namespace {  // ou namespace {  ... }  , mais il faut mettre tous les namespace avec les accolades '{' .. '}'
        
        /* !! INTERDIT DANS le Namespace Global
        function strtolower($x){
            return "<br>String au boulot<br>";
        }*/
        
        echo "<hr><pre>
            // namespace seul ==> renvoie sur le namespace global
            namespace {  // ou namespace {  ... }  , mais il faut mettre tous les namespace avec les accolades '{' .. '}'
                /* !! INTERDIT DANS le Namespace Global
                function strtolower(\$x){
                    return '&lt;br&gt;String au boulot&lt;br&gt;';
                } */
                echo   '&lt;h1&gt;Namespace ' . __NAMESPACE__ . ' :</h1>';
                echo tutu\strtolower('BOnjouR');     //appel au namespace tutu;
                echo strtolower('BOnjouR');      //appel au namespace courant cad global cad fonction php normale 
            </pre>";
        
        
        echo   "<h1>Namespace " . __NAMESPACE__ . " :</h1>";
        echo tutu\strtolower('BOnjouR');     //appel au namespace tutu;
        echo strtolower('BOnjouR');      //appel au namespace courant cad global cad fonction php normale
    ?>
</body>
</html>
<?php
    }  
    //*/
?>
