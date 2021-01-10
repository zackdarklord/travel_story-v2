<?php

if(!isset($_SESSION)) {
    session_start();
}

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "travel_story";

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");

 $pdoStat = $connection->prepare("SELECT * FROM vols");
 // $pdoStat->execute();

$execute= $pdoStat->execute();


// $inscriptions=$pdoStat->fetchAll();

//grab a result set
$resultSet = $pdoStat->get_result();

//pull all results as an associative array
$vols = $resultSet->fetch_all();



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
        <a href="dashboard.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
        <ul>
            <li><a href="clients.php">clients</a></li>
            <li><a href="gestion_vols.php">vols</a></li>
            <li><a href="billets.php">billets</a></li>
            <li><a href="avis.php">avis</a></li>
            <li><a href="offres.php">offres/actualités</a></li>


        </ul>
        </nav>


     <div id="clients">
            <h1>Liste des Vols</h1>
            <br>
            <table  align="center" id="hor-minimalist-b">
            <tr id="hor-minimalist-b">
                <td >ID</td>
                <td >Depart</td>
                <td>Date départ</td>
                <td>Destination</td>
                <td>Date retour</td>
                <td>Compagnie</td>
                <td>Edit</td>

            </tr>

            <?php foreach($vols as $vol): ?>
                <tr>
                <td><?=$vol[0] ?> </td>
                <td><?=$vol[1] ?></td>
                <td><?=$vol[2] ?></td>
                <td><?=$vol[3] ?></td>
                <td><?=$vol[4] ?></td>
                <td><?=$vol[5] ?></td>
                    <td>
                            <a href="delete_vols.php?id='<?php echo $vol[0]; ?>'"> supprimer</a>
                            <a href="update_vols.php?numVol=<?= $vol[0] ?>"> <b style="color:darkorange">modifier</b></a>
                    </td>
                </tr>
                <?php endforeach; ?>

                <a href="trier_vols.php"><mark><b style="color:blue">trier</b></mark></a>
            </table>
            </div>
<br>


<h1 id="vol">Ajouter Vol</h1>
<br>
      <div class="form-style-1" id="vols">

            <form action="vols_ajout.php" method="POST" >

<div>
<br>
                <label for="depart" ><b>Départ</b></label>
                <input type="text" name="depart" placeholder="Pays départ">
</div>
<div>
                <label for="date_depart" ><b>Date départ</b></label>
                <input type="date" name="date_depart" placeholder="Date départ">
</div>
<div>
                <label for="destination" ><b>destination</b></label>
                <input type="text" name="destination" placeholder="pays destinataire">
</div>
<div>
                <label for="date_retour" ><b>Date retour</b></label>
                <input type="date" name="date_retour" placeholder="Date départ">
</div>
<div>
                <label for="compagnie"><b>companie aérienne</b></label>
                <input type="text" name="compagnie" placeholder="tunisair,airfrance...">
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
