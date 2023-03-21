<?php
require_once('config.php');

if(isset($_POST['Nom']) && isset($_POST['Email'])&& isset($_POST['MDP'])) {
    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);