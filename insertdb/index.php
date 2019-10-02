<?php

$dbip='127.0.0.1';
$dbname='poo';
$dbuser='root';
$dbpass='123456';

$pdo = new PDO('mysql:dbname='.$dbname.';host=' .$dbip , $dbuser, $dbpass);
$insert = 'INSERT INTO users(login,nom,email) VALUES(:login,:nom,:email) ';
$delete = 'DELETE FROM users where login=:login';
$select = 'SELECT login from users WHERE login=:login';
$update = 'UPDATE users SET nom=:nom,email=:email WHERE login=:login';
$getall = 'SELECT * FROM users';


$post = $_POST;
if (isset($_POST['login'])) {
    $login = $post['login'];
    $nom = $post['nom'];
    $email = $post['mail'];


    $test = $pdo->prepare($select);
    $test->bindParam(':login', $login);
    $test->execute();
    $added = false;
    $modified = false;
    if ($test->fetch()) {
        $run = $pdo->prepare($update);
        $modified = true;
    } else {
        $run = $pdo->prepare($insert);

        $added = true;
    }
    $run->bindParam(':login', $login);
    $run->bindParam(':nom', $nom);
    $run->bindParam(':email', $email);
    $run->execute();
}
if (isset($_POST['todel'])) {
    $todel = $post['todel'];
    $run2 = $pdo->prepare($delete);
    $run2->bindParam(':login', $todel);
    $run2->execute();


}
$disp = $pdo->prepare($getall);
$disp->execute();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des users</title>
    <link rel="icon"
          href="https://cdn1.iconfinder.com/data/icons/users-and-avatars/32/user_male_style_hipster_mustache_glasses_profile_man-512.png">
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
        echo '<script> M.toast({html:"Utilisateur ' . $login . ' ajouté",classes:"light-blue darken-1"})</script>';
    }
    if (isset($run) && $run && $modified) {
        echo '<script> M.toast({html:"Utilisateur ' . $login . ' modifié",classes:"deep-purple darken-2"})</script>';
    }
    if (isset($run2) && $run2) {
        echo '<script> M.toast({html:"Utilisateur ' . $todel . ' supprimé",classes:"red darken-4"})</script>';
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
                <button class="light-blue darken-1  btn waves-effect waves-light" type="submit" name="action"><i
                            class="material-icons right">cloud_done</i>Ajouter/Modifier
                </button>
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
                <button class="deep-orange darken-1  btn waves-effect waves-light" type="submit" name="action2"><i
                            class="material-icons right">cloud_off</i>Supprimer
                </button>
            </div>
        </div>

    </form>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red modal-trigger pulse" href="#modal1">
            <i class="large material-icons">view_list</i>
        </a>
    </div>

    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-content">
            <h2 class="center-align">Liste des users</h2>
            <table class="striped container">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Mail</th>
                </tr>
                </thead>
                <tbody>

                <?php while ($res = $disp->fetch()) {
                    ?>

                    <tr>
                        <td><?= $res['id']; ?></td>
                        <td><?= $res['login']; ?></td>
                        <td><?= $res['nom']; ?></td>
                        <td><?= $res['email']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.modal');
        var options = '';
        var instances = M.Modal.init(elems, options);
    });
</script>
</body>
</html>
