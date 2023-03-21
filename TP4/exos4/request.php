<?php
require_once('config.php');

if(isset($_POST['Nom']) && isset($_POST['Email'])&& isset($_POST['MDP'])) {
    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tryNom=$_POST['Nom'];
        $tryMail=$_POST['Email'];
        $tryMDP =$_POST['MDP'];
        $sth = $pdo->prepare("
            INSERT INTO users (name,email,login)
            VALUES (:Nom, :Email, :MDP)
        ");
        $sth->execute(array(
            ':Nom' => $tryNom,
            ':Email' => $tryMail,
            ':MDP' => $tryMDP));
echo "Entrée ajoutée dans la table";
}
catch (PDOException $erreur) {
    echo "Erreur : " . $erreur->getMessage();
exit();
}
header('Location: users.php');
}