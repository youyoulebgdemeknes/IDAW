<?php
require_once('config.php');

if(isset($_POST['id']) ) {
    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $tryID=$_POST['id'];
        $sth = $pdo->prepare("
        SELECT * FROM users
        WHERE id=$tryID
      ");
    $sth->execute();
    $user=$sth->fetch();
    $login=$user['login'];
    $name=$user['name'];
    $email=$user['email'];
echo "Entrer les modification";
}
catch (PDOException $erreur) {
    echo "Erreur : " . $erreur->getMessage();
exit();
};
}
    echo"<form id='login_form' action='modify.php' method='POST'>";
    echo"<table>";
    echo"<tr>";
    echo"<th> Nom:</th>";
    echo"<input type='hidden' name='id' value='".$_POST['id']."'/>";
    echo"<td><input type='text' name='Nom' value='".$name."'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Email:</th>";
    echo"<td><input type='text' name='Email' value='".$email."'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Mot De Passe:</th>";
    echo"<td><input type='text' name='MDP' value='".$login."'></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th></th>";
    echo"<td><input type='submit' value='modify'/></td>";
    echo"</tr>";
    echo"</table>";
    echo"</form>";

    if(isset($_POST['Nom'])&& $_POST['Email']&&$_POST['MDP']&&$_POST['id']){
        try {
            $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $tryID=$_POST['id'];
            $name=$_POST['Nom'];
            $email=$_POST['Email'];
            $MDP=$_POST['MDP'];

            $sth = $pdo->prepare(
            "UPDATE users SET email='$email',login='$MDP',name='$name'  WHERE id='$tryID'");
        $sth->execute();
    }
    catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    exit();
    };
    $pdo = null;
    header('Location: users.php');
    }
    ?>