<?php
    require_once('config.php'); 


    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = $pdo->prepare("select * from users");
        $request->execute();
        $users = $request->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    exit();
    }

echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "<td>" . $user['login'] . "</td>";
    echo "</tr>";
}
echo "</table>";
/*** close the database connection ***/
$pdo = null;
?>