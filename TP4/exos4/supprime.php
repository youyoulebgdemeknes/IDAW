<?php
require_once('config.php');

if(isset($_POST['id']) ) {
    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $tryID=$_POST['id'];
        $sth = $pdo->prepare(
        "DELETE FROM users WHERE id= '$tryID' "
        );
        $sth->execute();
echo "Entrée effcée dans la table";
}
catch (PDOException $erreur) {
    echo "Erreur : " . $erreur->getMessage();
exit();
}
$pdo = null;
header('Location: users.php');
}
?>