<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
session_start();

if (!isset($_SESSION['prenom']) || !isset($_SESSION['nom'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
=======
<!DOCTYPE html>
<html lang="en">
>>>>>>> Stashed changes
=======
<!DOCTYPE html>
<html lang="en">
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            font-family: 'Arial', sans-serif;
        }
        .welcome-card {
            margin-top: 10%;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .welcome-card h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .logout-btn {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card text-center p-5 welcome-card">
            <i class="fas fa-smile-beam fa-4x mb-4 text-warning"></i>
            <h1>Bienvenue, Mr <?= ($_SESSION['prenom'] . ' ' . $_SESSION['nom']); ?> !</h1>
            <p class="lead mt-3">Vous etes connecté(e)</p>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-outline-light logout-btn" id="logoutBtn">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const logoutBtn = document.getElementById('logoutBtn');

            
            logoutBtn.addEventListener('click', () => {
                logoutBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Déconnexion...';
                setTimeout(() => {
                    window.location.href = "logout.php";
                }, 20000); 
            });
        });
    </script>
</body>
</html>
=======
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
</html>
>>>>>>> Stashed changes
=======
</html>
>>>>>>> Stashed changes
