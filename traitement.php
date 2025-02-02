<?php
    $host = 'localhost';
    $dbname = 'base1';
    $username = 'root';
    $password = '';

    try{
            $bdd = new PDO("mysql:host = $host;dbname=$dbname; charser=utf8", $username,$password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion reuissies avec PDO !";
    }catch (PDOException $e){
            echo "Erreur de connexion à la base de donnée" . $e->getMessage();
    }

    if(isset($_POST['ok'])){
        // extract($_POST);
        // echo $nom . ' ' . $mdp;
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $requete = $bdd->prepare("INSERT INTO Utilisateurs VALUES (0,:Prenom,:Nom,:Pseudo,:Email,MD5(:MotDePasse))");
        $requete->execute(
                array(
                    "Prenom" => $prenom,
                    "Nom" => $nom,
                    "Pseudo" => $pseudo,
                    "Email" => $email,
                    "MotDePasse" => $mdp
                )
        );
            echo '<br><br>' . "Insertion réuissies !";
    }

?>