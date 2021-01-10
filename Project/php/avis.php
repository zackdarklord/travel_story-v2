<?php

    // Database connection
    include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM avis");
 // $pdoStat->execute();

$execute= $pdoStat->execute();


// $inscriptions=$pdoStat->fetchAll();

//grab a result set
$resultSet = $pdoStat->get_result();

//pull all results as an associative array
$avis = $resultSet->fetch_all();

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
<h1>AVIS</h1>
<table  align="center" id="hor-minimalist-b">
<tr id="hor-minimalist-b">
    <td >id</td>
    <td>contenu</td>
    <td>date</td>
     <td>Edit</td>

</tr>

<?php foreach($avis as $avi): ?>
    <tr>
    <td><?=$avi[0] ?> </td>
    <td><?=$avi[1] ?></td>
    <td><?=$avi[2] ?></td>

    
    <td>
                            <a href="delete_avis.php?id='<?php echo $avi[0]; ?>'"> supprimer</a>
                 </td>           
    </tr>
    <?php endforeach; ?>


</table>
</div>

    <?php include 'footer.php' ?>

</body>
</html>
