<?php
    require_once('config.php'); 

    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = file_get_contents("users (1).sql");
        $pdo->exec($request);
        print("all good my g");
    }
    catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    exit();
    }