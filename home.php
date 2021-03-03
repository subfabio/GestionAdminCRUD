<?php
session_start();
    if(!$_SESSION['usersmail']){
        
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body class="text-center">
    <main class="form-signin">
        <div class="container3">
            <a href="logout.php">
                <button class="btn" type="submit" name="valider_deco">Déconnexion</button>
                </a>
        </div>
                <div class="container">
                    <img src="img/id_card.png">
                    <a href="membre.php">
                        <button class="btn" type="submit" name="valider_membres">Membres</button>
                    </a>
                </div>
        <div class="container2">
            <img src="img/id_card2.png">
            <a href="metier.php">
                <button class="btn" type="submit" name="valider_metier">Fiche Métier</button>
            </a>
        </div>
    <main>
</body>
</html>


















