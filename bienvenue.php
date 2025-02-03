<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<style>
    body{
        background-color: green;
    }
    h1{
        color: yellow;
        text-align: center;
        margin-top: 300px;
    }
    p{
        font-size: 25px;
        color: red;
        text-align: center;
    }
</style>
<body>
    <h1>Bienvenue Mr <?php echo (($_SESSION['prenom']. ' '. $_SESSION['nom'])) ?> !</h1>
    <p>Vous etes connectée</p>
    <button><a href="lougout.php">Deconnection</a></button>
</body>
</html>