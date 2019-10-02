<?php

    $pdo = new PDO('mysql:dbname=poo;host=127.0.0.1', 'root', '123456');
    $insert = 'INSERT INTO users(login,nom,email) VALUES(:login,:nom,:email) ';
    $delete = 'DELETE FROM users where login=:login';
    $select = 'SELECT login from users WHERE login=:login';
    $update = 'UPDATE users SET nom=:nom,email=:email WHERE login=:login';
    
$post = $_POST;
    if (isset($_POST['login'])) {
        $login = $post['login'];
        $nom = $post['nom'];
        $email = $post['mail'];


        $test=$pdo->prepare($select);
        $test->bindParam(':login', $login);
        $test->execute();
        $added=false;
        $modified = false;
        if($test->fetch()){
            $run = $pdo->prepare($update);
            $modified = true;
        }
        else {
            $run = $pdo->prepare($insert);

            $added=true;
        }
        $run->bindParam(':login', $login);
        $run->bindParam(':nom', $nom);
        $run->bindParam(':email', $email);
        $run->execute();
    }
if (isset($_POST['todel'])) {
$todel=$post['todel'];
    $run2 = $pdo->prepare($delete);
    $run2->bindParam(':login',$todel);
    $run2->execute();


}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/users-and-avatars/32/user_male_style_hipster_mustache_glasses_profile_man-512.png">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php

    if (isset($run) && $run && $added) {
        echo '<script> M.toast({html:"Utilisateur '.$login.' ajouté",classes:"light-blue darken-1"})</script>';
    }
    if (isset($run) && $run && $modified) {
        echo '<script> M.toast({html:"Utilisateur '.$login.' modifié",classes:"deep-purple darken-2"})</script>';
    }
    if (isset($run2) && $run2) {
        echo '<script> M.toast({html:"Utilisateur '.$todel.' supprimé",classes:"red darken-4"})</script>';
    }
    ?>
    <h1 class="red-text">Gestion des users :)</h1>
    <form action="index.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">flash_on</i>
                <input id="login" type="text" name="login">
                <label for="login">Login</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">accessibility_new</i>
                <input id="nom" type="text" name="nom">
                <label for="nom">Nom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">drafts</i>
                <input id="mail" type="text" name="mail">
                <label for="mail">E-mail</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class= "light-blue darken-1 pulse btn waves-effect waves-light" type="submit" name="action"><i class="material-icons right">cloud_done</i>Ajouter/Modifier</button>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            </div>
        </div>
    </form>
    <hr>
    <form action="index.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">flash_off</i>
                <input id="todel" type="text" name="todel">
                <label for="todel">Login à supprimer</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class="deep-orange darken-1 pulse btn waves-effect waves-light" type="submit" name="action2"><i class="material-icons right">cloud_off</i>Supprimer</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>
