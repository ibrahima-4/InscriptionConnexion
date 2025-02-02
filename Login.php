<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                $requete=$id->prepare("SELECT (IdUser,Prenom,Nom,Pseudo,MotDePasse) FROM Utilisateurs WHERE Email = ?");
                $requete->bind_param("s",$Login);
                $requete->execute();
                $result=$requete->get_result();
                $row=$result->fetch_assoc();

                if ($row && password_verify($password, $row['MotDePasse'])) {
                    $_SESSION['email']=$row['email'];
                    $_SESSION['MotDePasse']=$row['MotDePasse'];
                    if ($row['email']=="ibrahima@php.sn" && $row['MotDePasse']=="phpphp") {
                        header('Location: Accueil.php');
                    }
                }else {
                    echo'email ou mot de passe incorrect';
                }



            }
        
        
        
        ?>
    </form>
</body>
</html>