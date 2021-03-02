<?php
session_start();
require 'database.php';
if(isset($_POST['save'])) {                
    
                    
    $cost = ['cost' => 12 ];
    $_POST['userspwd'] = password_hash($_POST['userspwd'], PASSWORD_BCRYPT, $cost);

    $stmt = $bdd->prepare('update users set usersid = :usersid, usersname = :usersname, usersfname = :usersfname, usersmail = :usersmail,
    userspwd = :userspwd, usersactiv = :usersactiv, usertypeid = :usertypeid where usersid = :usersid');
    $stmt->bindValue(':usersid', $_POST['usersid']);
    $stmt->bindValue(':usersname', $_POST['usersname']);
    $stmt->bindValue(':usersfname', $_POST['usersfname']);
    $stmt->bindValue(':usersmail', $_POST['usersmail']);
    $stmt->bindValue(':userspwd', $_POST['userspwd']);
    $stmt->bindValue(':usersactiv', $_POST['usersactiv']);
    $stmt->bindValue(':usertypeid', $_POST['usertypeid']);
    
    $stmt->execute();
    header('location:membre.php');
    exit;
}    
$stmt = $bdd->prepare('select * from users where usersid = :usersid');
if(isset($_POST['usersid'])){
    $stmt->bindValue('usersid', $_POST['usersid']);
} else {
    $stmt->bindValue('usersid', $_GET['usersid']);
}

$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_OBJ);
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
    <title>Edition Users</title>
</head>
<body class="text-center">
  
   
    
<main class="form-signin">
  <form method="post" action="membre_edit.php">

    <h1 class="h2 mb-1 fw-normal">Edition<br>Admins & Users</h1>
        <br>
            <input type="text" name="usersname" class="form-control" value="<?php echo $users->usersname; ?>">
        <br>
            <input type="text" name="usersfname" class="form-control" value="<?php echo $users->usersfname; ?>">
        <br>
            <input type="text" name="usersmail" class="form-control" value="<?php echo $users->usersmail; ?>">
        <br>
            <input type="text" name="userspwd" class="form-control" value="<?php echo $users->userspwd; ?>">
        <br>
            <input type="text" name="usersactiv" class="form-control" value="<?php echo $users->usersactiv; ?>">
        <br>
            <input type="text" name="usertypeid" class="form-control" value="<?php echo $users->usertypeid; ?>">        
        <br>
        <input type="hidden" name="usersid" value="<?php echo $users->usersid; ?>">
        <button class="w-70 btn btn-lg btn-success" type="submit" name="save">Edition</button>
  </form>
</main>
</body>
</html>

        <!--<select class="form-control">
            <input type="text" name="usersactiv" class="form-control" value="<?php echo $users->usersactiv; ?>">
            <option>0</option>
            <option>1</option>
        </select>

        <select class="form-control">
            <option value="<?php //echo $users->usertypeid; ?>">1</option>
            <option value="<?php //echo $users->usertypeid; ?>">2</option>
        </select>
        <br> -->  



