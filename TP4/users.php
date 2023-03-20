<?php

    require_once('config.php'); 

    $connectionString = "mysql:host=". _MYSQL_HOST;

    if(defined('_MYSQL_PORT'))
        $connectionString .= ";port=". _MYSQL_PORT;

    $connectionString .= ";dbname=" . _MYSQL_DBNAME;
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $erreur) {
    myLog('Erreur : '.$erreur->getMessage());
    }
$request = $pdo->prepare("select * from users");


// TODO: add your code here
try {
    $stmt = $pdo->query($request);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de l'exécution de la requête SQL: " . $e->getMessage();
    exit();
}

//affichage des résultats dans un tableau HTML
echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['nom'] . "</td>";
    echo "<td>" . $user['prenom'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
/*** close the database connection ***/
$pdo = null;








//requête SQL pour récupérer tous les utilisateurs
$sql = "SELECT * FROM User";

//exécution de la requête et récupération des résultats
try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de l'exécution de la requête SQL: " . $e->getMessage();
    exit();
}

//affichage des résultats dans un tableau HTML
echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['nom'] . "</td>";
    echo "<td>" . $user['prenom'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";