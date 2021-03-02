<?php
session_start();
require 'database.php';
if(isset($_POST['save'])) {                
    
    
    $stmt = $bdd->prepare('update businesscard set buscardid = :buscardid, bustitle = :bustitle, busrom = :busrom, busresum = :busresum,
    busdescript = :busdescript, busactivat = :busactivat, activityareaid = :activityareaid where buscardid = :buscardid');
    $stmt->bindValue(':buscardid', $_POST['buscardid']);
    $stmt->bindValue(':bustitle', $_POST['bustitle']);
    $stmt->bindValue(':busrom', $_POST['busrom']);
    $stmt->bindValue(':busresum', $_POST['busresum']);
    $stmt->bindValue(':busdescript', $_POST['busdescript']);
    $stmt->bindValue(':busactivat', $_POST['busactivat']);
    $stmt->bindValue(':activityareaid', $_POST['activityareaid']);
    
    $stmt->execute();
    header('location:metier.php');
    exit;
}    
$stmt = $bdd->prepare('select * from businesscard where buscardid = :buscardid');
if(isset($_POST['buscardid'])){
    $stmt->bindValue('buscardid', $_POST['buscardid']);
} else {
    $stmt->bindValue('buscardid', $_GET['buscardid']);
}

$stmt->execute();
$businesscard = $stmt->fetch(PDO::FETCH_OBJ);
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
    <title>Edition Fiche Métier</title>
</head>
<body class="text-center">
  
   
    
<main class="form-signin">
  <form method="post" action="metier_edit.php">

    <h1 class="h2 mb-1 fw-normal">Edition<br>Fiche Métier</h1>
        <br>
            <input type="hidden" name="buscardid" value="<?php echo $businesscard->buscardid; ?>"> 
        <br>
            <input type="text" name="bustitle" class="form-control" value="<?php echo $businesscard->bustitle; ?>">
        <br>
            <input type="text" name="busrom" class="form-control" value="<?php echo $businesscard->busrom; ?>">
        <br>
            <textarea type="text" name="busresum" class="form-control" value="<?php echo $businesscard->busresum; ?>"></textarea>
        <br>
            <textarea type="text" name="busdescript" class="form-control" value="<?php echo $businesscard->busdescript; ?>"></textarea>
        <br>
            <input type="text" name="busactivat" class="form-control" value="<?php echo $businesscard->busactivat; ?>">
        <br>
            <input type="text" name="activityareaid" class="form-control" value="<?php echo $businesscard->activityareaid; ?>">
        <br>
            <button class="w-70 btn btn-lg btn-success" type="submit" name="save">Edition</button>
  </form>
</main>
</body>
</html>

