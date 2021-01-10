<?php

// Database connection
include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM billets ORDER BY classe ASC");
// $pdoStat->execute();

$execute= $pdoStat->execute();


// $inscriptions=$pdoStat->fetchAll();

//grab a result set
$resultSet = $pdoStat->get_result();

//pull all results as an associative array
$billets = $resultSet->fetch_all();

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



<div id="billets">
    <h1>Billet</h1>
    <table  align="center" id="hor-minimalist-b">
        <tr id="hor-minimalist-b">
            <td >ref</td>
            <td>classe</td>
            <td>id_vol</td>
            <td>prix</td>
            <td>Edit</td>

        </tr>

        <?php foreach($billets as $billet): ?>
            <tr>
                <td><?=$billet[0] ?> </td>
                <td><?=$billet[1] ?></td>
                <td><?=$billet[2] ?></td>
                <td><?=$billet[3] ?></td>
                <td>
                            <a href="delete_billets.php?id='<?php echo $billet[0]; ?>'"> supprimer</a>
                            <a href="update_billet.php?numBillet=<?= $billet[0] ?>"> <b style="color:darkorange">modifier</b></a>
                 </td>           
             </tr>
        <?php endforeach; ?>

        <a href="trier_billets.php"><mark><b style="color:blue">trier</b></mark></a>
    </table>
</div>

<h1 id="vol">Ajouter Billets</h1>
<br>
<div class="form-style-1" id="vols">

    <form action="billets_ajout.php" method="POST" >


        <div>
            <label for="classe" ><b>Classe</b></label>
            <select id="classe" name="classe">
                <option value="First">First class</option>
                <option value="Business">Business class</option>
                <option value="Economique" selected>Economique class</option>
            </select>
        </div>
        <div>
            <label for="id_vol" ><b>reference vol</b></label>
            <input type="text" name="id_vol" placeholder="reference vol">
        </div>
        <div>
            <label for="prix" ><b>Prix</b></label>
            <input type="number" name="prix" placeholder="Prix">
        </div>
        <br>
        <br>
        <button type="submit">Ajouter</button>

        <button type="reset">Annuler</button>



    </form>
</div>

<?php include 'footer.php' ?>

</body>
</html>
