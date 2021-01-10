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
    <link rel="stylesheet" href="../assets/css/boutique.css">
    <title>travel_story-boutique</title>
</head>
<body>
<nav>
    <a href="boutique.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
    <ul>
        <li><strong><p style="color:darkorange">BIENVENUE CHER(E) CLIENT(E)</p></strong></li>
        <li><a href="vols_client.php">vols</a></li>
        <li><a href="billets_client.php">billets</a></li>
        <li><a href="offre_client.php">offres/actualités</a></li>
        <li><a href="#" >panier</a></li>
        <li><a href="../views/home.php"><strong>logout</strong></a></li>
        
    </ul>
    </nav>

    <div id="clients">
            <h1 align="center">Liste des Vols</h1>
            <br>
            <table  align="center" id="hor-minimalist-b">
            <tr id="hor-minimalist-b">
                <td >ID</td>
                <td >Depart</td>
                <td>Date départ</td>
                <td>Destination</td>
                <td>Date retour</td>
                <td>Compagnie</td>
                <td></td>

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
                            <a style="color:blue"href="#?id='<?php echo $vol[0]; ?>'"> reserver</a>
                           
                    </td>
                </tr>
                <?php endforeach; ?>

                
            </table>
            </div>
<br>

</body>
<?php include 'footer.php' ?>
</html>