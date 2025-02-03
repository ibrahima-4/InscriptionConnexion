<?php 
            require('pdo.php');
            session_start();
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $mdp = $_POST['mdp'];

                $requete = $bdd->prepare("SELECT * FROM Utilisateurs WHERE email = :Email AND password = MD5(:MotDePasse)");
                $requete->execute(
                        ['Email' => $email,
                        'MotDePasse' => $mdp]);

                $user = $requete->fetch(PDO::FETCH_ASSOC);

                if ($user){
                    $_SESSION ['prenom'] = $user['prenom'];
                    $_SESSION ['nom '] = $user ['nom'];
                    header("location: bienvenue.php");
                }else{
                    $error = "Email ou mot de passe incorrect. ";
                }
            }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <h1>Connexion</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Login:</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="mdp" id="mdp" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="connect" value="connect"></td>
            </tr>
        </table>
        <?php
            session_start();
            require ('connect.php');
            if (isset($_POST['connect'])) {
                $Login=$_POST['email'];
                $password=$_POST['mdp'];
                $requete=$id->prepare("SELECT IdUser,Prenom,Nom,Pseudo,MotDePasse FROM Utilisateurs WHERE Email = ?");
                $requete->bind_param("s",$Login);
                $requete->execute();
                $result=$requete->get_result();
                $row=$result->fetch_assoc();

                if ($row && password_verify($password, $row['MotDePasse'])) {
                    $_SESSION['email']=$row['email'];
                    $_SESSION['MotDePasse']=$row['MotDePasse'];
                    if ($row['email']=="ibrahima@php.sn" ) {
                        header('Location: Accueil.php');
                    }
                    exit();
                }else {
                    echo'email ou mot de passe incorrect';
                }
                $requete->close();
=======
    <h2>Connexion</h2>
    <?php if(!empty($error)): ?>
    <p style="color: red;"><?php echo $error ?></p>
    <?php endif; ?>
        <form action="" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required placeholder="Entrez votre email..."><br><br>

=======
    <h2>Connexion</h2>
    <?php if(!empty($error)): ?>
    <p style="color: red;"><?php echo $error ?></p>
    <?php endif; ?>
        <form action="" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required placeholder="Entrez votre email..."><br><br>

>>>>>>> Stashed changes
    <label for="email">Email</label>
    <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe..."><br><br>

    <button type="submit" name="login">Se connecter</button>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes


        </form>
</body>
</html>

