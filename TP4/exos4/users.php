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

    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "<td>" . $user['login'] . "</td>";
    echo "</tr>";

    echo"<form id='login_form' action='users.php' method='POST'>";
    echo"<table>";
    echo"<tr>";
    echo"<th>Login :</th>";
    echo"<td><input type='text' name='login'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Mot de passe :</th>";
    echo"<td><input type='text' name='email'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th></th>";
    echo"<td><input type='submit' value='add'/></td>";
    echo"</tr>";
    echo"</table>";
    echo"</form>";
$pdo = null;
?>

<form>
  <div>
    <label for="title">Titre du billet :</label>
    <input type="text" id="title" name="title" value="Mon meilleur billet">
  </div>
  <div>
    <label for="content">Contenu :</label>
    <textarea id="content" name="content" cols="60" rows="5">
Voici le contenu de mon meilleur billet, j'espère que ça vous plaît !
    </textarea>
  </div>
  <div>
    <button type="submit">Mettre à jour le billet</button>
  </div>
  <input type="hidden" id="postId" name="postId" value="34657">
</form>