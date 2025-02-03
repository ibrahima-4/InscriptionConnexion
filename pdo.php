<?php
    $host = 'localhost';
    $dbname = 'base1';
    $username = 'root';
    $password = '';

    try{
            $bdd = new PDO("mysql:host = $host;dbname=$dbname; charser=utf8", $username,$password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connexion reuissies avec PDO !";
    }catch (PDOException $e){
            echo "Erreur de connexion à la base de donnée" . $e->getMessage();
    }
