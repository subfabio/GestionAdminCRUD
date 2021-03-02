<?php
session_start();
require 'database.php';
if(isset($_POST['save']))

{
    $stmt = $bdd->prepare('insert into businesscard(bustitle, busrom, busresum, busdescript, busactivat, activityareaid)
    values(:bustitle, :busrom, :busresum, :busdescript, :busactivat,  :activityareaid)');
    
    $stmt->bindValue(':bustitle', $_POST['bustitle']);
    $stmt->bindValue(':busrom', $_POST['busrom']);
    $stmt->bindValue(':busresum', $_POST['busresum']);
    $stmt->bindValue(':busdescript', $_POST['busdescript']);
    $stmt->bindValue(':busactivat', $_POST['busactivat']);
    $stmt->bindValue(':activityareaid', $_POST['activityareaid']);
  
    $stmt->execute();
    //$stmt->debugDumpParams();
    header('location:metier.php');
}
?>
