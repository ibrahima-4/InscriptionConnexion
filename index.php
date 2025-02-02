<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<style>
    h1{
        text-align: center;
        color: lightgreen;
        margin-bottom: 150px;
        border: 2px solid blue;
        width: 600px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
    }
    .form{
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-top: 100px;
    }
</style>
<body>
   <h1>Bienvenue dans la page d'Inscription</h1>

      <div class="form">

        <form action="traitement.php" method="POST">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" required><br><br>

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom..." required><br><br>

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo..." required><br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Entrez votre email..." required><br><br>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe..." required> <br><br>

            <input type="submit" name="ok" id="ok" value="Valider">


        </form>
      </div>

</body>
</html>