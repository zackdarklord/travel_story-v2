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
    <h1 align="center">offres - Actualités</h1>
    <table  align="center" id="hor-minimalist-b">
        <tr id="hor-minimalist-b">
           
            <td>image</td>
            <td>description</td>
            <td>date d'ajout</td>
           
            <td></td>

        </tr>
       
        <?php foreach($offres as $offre): ?>
            <?php if($offre[4]==1)?>
            <tr>
                
                <td><?=$offre[1] ?></td>
                <td><?=$offre[2] ?></td>
                <td><?=$offre[3] ?></td>
               

                <td>
                            <a href="#?id='<?php echo $offre[0]; ?>'"> j'aime</a>
                           
                 </td>           
             </tr>
            
        <?php endforeach; ?>

        
    </table>
</div>
<br>

</body>
<?php include 'footer.php' ?>
</html>