<?php

  session_start();
  $host ="localhost";
  $username ="root";
  $password ="root";
  $database="csmfm";
  $message ="";

try {
  $connection = new PDO("mysql:host=$host; dbname=$database",$username,$password);

  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  if(isset($_POST["valider"]))
  {
    if( empty($_POST["usersmail"]) AND empty($_POST["userspwd"]))
    {
      $message = '<label>REQUIRED</label>';
    }
    else
    {
      $query = "SELECT * FROM users WHERE usersmail = :usersmail";
      $statement = $connection->prepare($query);
      $statement->execute(array(
        'usersmail' => $_POST["usersmail"]
      ));

      $result = $statement->fetch();
      if($result === false){
        $isPasswordCorrect = false;   
      } else {
        $isPasswordCorrect = password_verify($_POST['userspwd'], $result['userspwd']);
      }

      if($isPasswordCorrect)
      {
        $_SESSION["usersmail"] = $_POST["usersmail"];
        header("location: home.php");
      }
      else
      {
        $message = '<label>username or password is wrong</label>';
        echo $message;
      }
    }
  }
}
    catch(PDOException $error) {
        $message = $error->getMessage();
    }

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
    <title>Administration</title>
</head>
  <body class="text-center">

      <main class="form-signin">
          <form action="index.php" method="post">
              <img class="mb-3" src="img/Logo1.png" alt="" width="200" height="97">
              <h1 class="h2 mb-1 fw-normal">Administration</h1>
                  <br>
                      <input type="mail" name="usersmail" class="form-control" placeholder="email" required="required"autocomplete="off">
                  <br>
                      <input type="password" name="userspwd" class="form-control" placeholder="password" required="required" autocomplete="off">
                  <br>
                  <button class="w-80 btn btn-lg btn-primary" type="submit" name="valider">Connexion</button>
                  
            </form>
        </main>
    </body>
</html>
