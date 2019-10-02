<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pwet</title>
</head>
<body>
<?php
$ok=true;
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=poo', 'root', '123456',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (PDOException $exception){
    echo "Zzzzzz ça grille !!! ".$exception->getMessage();
    $ok=false;
}
if($ok) {
    $sql = 'SELECT * FROM users WHERE login=:login';
    $stmt = $pdo->prepare($sql);

    function dispDB($login)
    {
        GLOBAL $stmt;
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch();
        foreach ($row as $col => $toto) {
            if (gettype($col) != 'integer') {
                echo $col . ' => ' . $toto . ' ║ ';
            }
        }
        echo '<br>';
    }

    dispDB('pouet');
    dispDB('toto');
}
?>


</body>
</html>
