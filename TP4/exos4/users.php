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
echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>MDP</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "<td>" . $user['login'] . "</td>";
    //Le bouton supprimer
    echo '<th>';
    echo "<form method='post' action='supprime.php'>";
    echo "<input type='hidden' name='id' value='{$user['id']}'/>";
    echo "<input type='submit' value='Supprimer'/>";
    echo "</form>";
    echo '</th>';
    // Le bouton modifier 
    echo '<th>';
    echo "<form method = 'post' action = 'modify.php>";
    echo "<input type='hidden' name='id' value='{$user['id']}'/>";
    echo "<input type='submit' value='Modifier'/>";
    echo "</form>";
    echo '</th>';
    echo '</tr>';
}
echo "</table>";

    
    //form add
    echo"<form id='login_form' action='request.php' method='POST'>";
    echo"<table>";
    echo"<tr>";
    echo"<th> Nom:</th>";
    echo"<td><input type='text' name='Nom'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Email:</th>";
    echo"<td><input type='text' name='Email'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Mot De Passe:</th>";
    echo"<td><input type='text' name='MDP'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th></th>";
    echo"<td><input type='submit' value='add'/></td>";
    echo"</tr>";
    echo"</table>";
    echo"</form>";
$pdo = null;
?>