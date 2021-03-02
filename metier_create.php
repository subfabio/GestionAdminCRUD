<?php
session_start();
require 'database.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Enregristrement Métiers</title>
</head>

<body class="text-center">
    <main class="form-signin">
  <form method="post" action="metier_save.php">

    <h1 class="h2 mb-1 fw-normal">Enregistrement<br>Fiche Métier</h1>
        <br>
            <input type="text" name="bustitle" class="form-control" placeholder="Titre" required="required"autocomplete="off">
        <br>
            <input type="text" name="busrom" class="form-control" placeholder="Numéro ROM" required="required"autocomplete="off">
        <br>
            <textarea type="text" name="busresum" class="form-control" placeholder="Résumé" required="required"autocomplete="off"></textarea>
        <br>
            <textarea type="text" name="busdescript" class="form-control" placeholder="Descriptif" required="required"autocomplete="off"></textarea>
        <br>
            <input type="text" name="busactivat" class="form-control" placeholder="Activation" required="required"autocomplete="off">
        <br>
            <input type="text" name="activityareaid" class="form-control" placeholder="Activité" required="required"autocomplete="off">
        <br>   
            <button class="w-70 btn btn-lg btn-success" type="submit" name="save">Enregistrement</button>
  </form>
</main>
</body>
</html>


