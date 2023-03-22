<?php
require_once('config.php');

if(isset($_POST['id']) ) {
    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $tryID=$_POST['id'];
        /*$sth = $pdo->prepare(
        "DELETE FROM Users WHERE id= '$tryID' "
        );
        $sth->execute();*/
echo "Entrée effcée dans la table";
}
catch (PDOException $erreur) {
    echo "Erreur : " . $erreur->getMessage();
exit();
};
}
    print("modify")
    echo"<form id='login_form' action='modify.users' method='POST'>";
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
    echo"<td><input type='submit' value='modify'/></td>";
    echo"</tr>";
    echo"</table>";
    echo"</form>";

    ?>