<?php
$pdo =  new PDO('mysql:host=127.0.0.1;dbname=poo','root','123456');
    ?>
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
$sql='SELECT * FROM users WHERE login=:login';
$stmt = $pdo->prepare($sql);
$login='pouet';
$stmt->bindParam(':login',$login);
$stmt->execute();

$row = $stmt->fetch();
echo $row['email'];
error_log('Tuuuut');
?>


</body>
</html>
