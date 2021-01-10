<?php
    // Database connection
    include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM clients ORDER BY nom ASC");
 // $pdoStat->execute();

$execute= $pdoStat->execute();


// $inscriptions=$pdoStat->fetchAll();

//grab a result set
$resultSet = $pdoStat->get_result();

//pull all results as an associative array
$clients = $resultSet->fetch_all();
/*header('Location: http://localhost/project/php/clients.php');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>travel_story-admin</title>
</head>
<body>
    <nav>
        <a href="../php/dashboard.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
        <ul>
            <li><a href="clients.php">clients</a></li>
            <li><a href="gestion_vols.php">vols</a></li>
            <li><a href="billets.php">billets</a></li>
            <li><a href="avis.php">avis</a></li>
            <li><a href="offres.php">offres/actualités</a></li>


        </ul>
        </nav>



<div id="clients">
<h1>CLIENTS</h1>
<table  align="center" id="hor-minimalist-b">
<tr id="hor-minimalist-b">
    <td >nom</td>
    <td>prenom</td>
    <td>date de naissance</td>
    <td>sexe</td>
    <td>télephone</td>
    <td>adresse</td>
    <td>mail</td>
    <td>mot de passe</td>
    <td>Edit</td>

</tr>

<?php foreach($clients as $client): ?>
    <tr>
    <td><?=$client[1] ?> </td>
    <td><?=$client[2] ?></td>
    <td><?=$client[3] ?></td>
    <td><?=$client[4] ?></td>
    <td><?=$client[5] ?></td>
    <td><?=$client[6] ?></td>
    <td><?=$client[7] ?></td>
    <td><?=$client[8] ?></td>
    <td>
                            <a href="delete_clients.php?id='<?php echo $client[0]; ?>'"> supprimer</a>
                 </td>           
    </tr>
    <?php endforeach; ?>
    <a href="trier_clients.php"> <mark><b style="color:blue">trier</b></mark></a>
</table>
</div>

    <?php include 'footer.php' ?>

</body>
</html>
