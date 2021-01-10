<?php

    // Database connection
    include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM offres");
 // $pdoStat->execute();

$execute= $pdoStat->execute();


// $inscriptions=$pdoStat->fetchAll();

//grab a result set
$resultSet = $pdoStat->get_result();

//pull all results as an associative array
$offres = $resultSet->fetch_all();

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
<h1>Offres</h1>
<table  align="center" id="hor-minimalist-b">
<tr id="hor-minimalist-b">
    <td >image</td>
    <td>description</td>
    <td>date_ajout</td>
    <td>Edit</td>

</tr>

<?php foreach($offres as $offre): ?>
    <tr>
    <td><?=$offre[2] ?></td>
    <td><?=$offre[3] ?></td>
    <td><img src="../assets/images/<?php echo $offre[1]; ?>" width="160" height="160"/></td>
    </tr>
    <?php endforeach; ?>


</table>
</div>

    <?php include 'footer.php' ?>

</body>
</html>
