<?php
session_start();
require 'database.php';

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
   
    $stmt = $bdd->prepare('delete from users where usersid = :usersid');
    $stmt->bindValue('usersid', $_GET['usersid']);
    $stmt->execute();
}
$stmt = $bdd->prepare('select * from users');
$stmt->execute();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Espace Membre</title>
   
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
       <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
       <link rel="stylesheet" href="css/style.css">
    
    
</head>
     <body>
         <div class="tableau">
       <table  data-toggle="table" data-pagination="true" data-search="true">
         <thead class="allsize">
                        <tr class="allsize">
                            <th data-sortable="true" data-field="usersid">Id</th>
                            <th data-sortable="true" data-field="usersname">Nom</th>
                            <th data-sortable="true" data-field="usersfname">Prénom</th>
                            <th data-sortable="true" data-field="usersmail">Mail</th>
                            <th>Password</th>
                            <th data-sortable="true" data-field="usersactiv">Activation</th>
                            <th data-sortable="true" data-field="usertypeid">Type</th>
                            <th>&nbsp;</th>
                        </tr>
        </thead>
                    <tbody>
<?php while($users = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                        <tr>
                            <td><?php echo $users->usersid; ?></td>
                            <td><?php echo $users->usersname; ?></td>
                            <td><?php echo $users->usersfname; ?></td>
                            <td><?php echo $users->usersmail; ?></td>
                            <td><?php echo $users->userspwd; ?></td>
                            <td><?php echo $users->usersactiv; ?></td>
                            <td><?php echo $users->usertypeid; ?></td>
                            <td>
                            <a href="membre.php?usersid=<?php echo $users->usersid; ?>&action=delete" onclick="return confirm('Are you sure?')">Delete</a> | <a href="membre_edit.php?usersid=<?php echo $users->usersid; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php }
?>
                    </tbody>

   
    </table>  
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/locale/bootstrap-table-fr-FR.min.js"></script>

    <div class="create_button">
        <a href="membre_create.php">
            <button class="btn" type="submit" name="create">Create</button>
        </a>
    </div>
</body>
</html>







