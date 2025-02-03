<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
session_start();
require_once 'pdo.php';

if (isset($_POST['connecter'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("SELECT * FROM Utilisateurs WHERE Email = :Email AND MotDePasse = MD5(:MotDePasse)");
    $requete->execute(array(
        "Email" => $email,
        "MotDePasse" => $mdp
    ));

    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['prenom'] = $user['Prenom'];
        $_SESSION['nom'] = $user['Nom'];
        header("Location: bienvenue.php");
        exit;
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<style>
 /* Style général */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f9fc;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

/* Titre de la page */
h1 {
    text-align: center;
    color: #5a67d8;
    margin-bottom: 20px;
    padding: 20px;
    border: 2px solid #805ad5;
    width: fit-content;
    border-radius: 12px;
    background-color: #edf2f7;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Conteneur de formulaire */
.form {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: left;
}

/* Champs de formulaire */
label {
    display: block;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #2d3748;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 14px;
    background-color: #f7fafc;
}

/* Bouton de soumission */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #5a67d8;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #434190;
}

/* Messages d'erreur */
.error {
    color: #e53e3e;
    background-color: #fff5f5;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
    text-align: center;
    border: 1px solid #feb2b2;
}

</style>
<body>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
   <h1>Page de Connexion</h1>

   <div class="form">
       <?php if (isset($error)) : ?>
           <p class="error"><?= $error; ?></p>
       <?php endif; ?>
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

    <label for="email">Email</label>
    <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe..."><br><br>

    <button type="submit" name="login">Se connecter</button>
>>>>>>> Stashed changes

    <label for="email">Email</label>
    <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe..."><br><br>

<<<<<<< Updated upstream
    <button type="submit" name="login">Se connecter</button>
>>>>>>> Stashed changes

    <label for="email">Email</label>
    <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe..."><br><br>

<<<<<<< Updated upstream
    <button type="submit" name="login">Se connecter</button>
>>>>>>> Stashed changes

    <label for="email">Email</label>
    <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe..."><br><br>

<<<<<<< Updated upstream
    <button type="submit" name="login">Se connecter</button>
>>>>>>> Stashed changes

       <form action="login.php" method="POST">
           <label for="email">Email</label>
           <input type="email" name="email" id="email" placeholder="Entrez votre email..." required><br><br>

<<<<<<< Updated upstream
           <label for="mdp">Mot de passe</label>
           <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe..." required><br><br>

           <input type="submit" name="connecter" id="connecter" value="Se connecter">
       </form>
   </div>
</body>
</html>
=======
        </form>
</body>
</html>

>>>>>>> Stashed changes
=======
        </form>
</body>
</html>

>>>>>>> Stashed changes
=======
        </form>
</body>
</html>

>>>>>>> Stashed changes
=======
        </form>
</body>
</html>

>>>>>>> Stashed changes
