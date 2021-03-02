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
    <title>Enregistrement Users</title>
</head>
<body class="text-center">
  <main class="form-signin">
  <form method="post" action="membre_save.php">


    <h1 class="h2 mb-1 fw-normal">Enregistrement<br>Admins & Users</h1>
        <br>
            <input type="text" name="usersname" class="form-control" placeholder="Nom" required="required"autocomplete="off">
        <br>
            <input type="text" name="usersfname" class="form-control" placeholder="Prénom" required="required"autocomplete="off">
        <br>
            <input type="text" name="usersmail" class="form-control" placeholder="Mail" required="required"autocomplete="off">
        <br>
            <input type="text" name="userspwd" class="form-control" placeholder="Mot de passe" required="required"autocomplete="off">
        <br>
            <input type="text" name="usersactiv" class="form-control" placeholder="Activation" required="required"autocomplete="off">
        <br>
            <input type="text" name="usertypeid" class="form-control" placeholder="Type" required="required"autocomplete="off">   
    <br>   
         <button class="w-70 btn btn-lg btn-success" type="submit" name="save">Enregistrement</button>
  </form>
</main>
</body>
</html>


