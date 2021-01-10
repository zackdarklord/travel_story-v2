<?php

// Database connection
include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM billets");
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

   
<div id="billets">
    <h1 align ="center">Billet</h1>
    <table  align="center" id="hor-minimalist-b">
        <tr id="hor-minimalist-b">
            <td >ref</td>
            <td>classe</td>
            <td>id_vol</td>
            <td>prix</td>
            <td></td>

        </tr>

        <?php foreach($billets as $billet): ?>
            <tr>
                <td><?=$billet[0] ?> </td>
                <td><?=$billet[1] ?></td>
                <td><?=$billet[2] ?></td>
                <td><?=$billet[3] ?></td>
                <td>
                            <a href="#?id='<?php echo $billet[0]; ?>'"> acheter</a>
                           
                 </td>           
             </tr>
        <?php endforeach; ?>

    </table>
</div>
<br>

</body>
<?php include 'footer.php' ?>
</html>