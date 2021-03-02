<?php
session_start();
require 'database.php';
if(isset($_POST['save'])) 

    
{
    //cryptage mot de passe
    $cost = ['cost' => 12 ];
    $_POST['userspwd'] = password_hash($_POST['userspwd'], PASSWORD_BCRYPT, $cost);

    $stmt = $bdd->prepare('insert into users(usersname, usersfname, usersmail, userspwd, usersactiv, usertypeid)
    values(:usersname, :usersfname, :usersmail, :userspwd, :usersactiv, :usertypeid)');
    $stmt->bindValue(':usersname', $_POST['usersname']);
    $stmt->bindValue(':usersfname', $_POST['usersfname']);
    $stmt->bindValue(':usersmail', $_POST['usersmail']);
    $stmt->bindValue(':userspwd', $_POST['userspwd']);
    $stmt->bindValue(':usersactiv', $_POST['usersactiv']);
    $stmt->bindValue(':usertypeid', $_POST['usertypeid']);
  
    $stmt->execute();
    //$stmt->debugDumpParams();
    header('location:membre.php');
}
