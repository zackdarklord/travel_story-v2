<?php

// Database connection
include('../config/db.php');

$pdoStat = $connection->prepare("SELECT * FROM offres ORDER BY valable DESC");
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



<div id="billets">
    <h1>offres - Actualités</h1>
    <table  align="center" id="hor-minimalist-b">
        <tr id="hor-minimalist-b">
            <td >id</td>
            <td>image</td>
            <td>description</td>
            <td>date d'ajout</td>
            <td>validité</td>
            <td>contenu</td>
            <td>Edit</td>

        </tr>

        <?php foreach($offres as $offre): ?>
            <tr>
                <td><?=$offre[0] ?> </td>
                <td><?=$offre[1] ?></td>
                <td><?=$offre[2] ?></td>
                <td><?=$offre[3] ?></td>
                <td><?=$offre[4] ?></td>
                <td><img src="../assets/images/<?php echo $offre[1]; ?>" width="160" height="160"/></td>

                <td>
                            <a href="delete_offres.php?id='<?php echo $offre[0]; ?>'"> supprimer</a>
                            <a href="update_offre.php?numOffre=<?= $offre[0] ?>"> <b style="color:darkorange">modifier</b></a>
                 </td>           
             </tr>
        <?php endforeach; ?>

        <a href="trier_offres.php"><mark><b style="color:blue">trier</b></mark></a>
        
    </table>
</div>

<h1 id="vol">Ajouter offres - actualité</h1>
<br>
<div class="form-style-1" id="vols">

    <form action="offres_ajout.php" method="POST" >



    <div class="form-group">
    <label for="exampleInputFile">Choisir une photo</label>
    <input type="file" name="image" id="exampleInputFile">
  </div>
        <div>
            <label for="description" ><b>description</b></label>
            <input type="text" name="description" placeholder="description">
        </div>
       <!--<div>
            <label for="date_ajout" ><b>date d'ajout</b></label>
            <input type="date" name="date_ajout">
        </div>-->
        <div>
        <label for="valable"><b>validité</b></label>
        <select name="valable" id="valable">
        <option value="1">true</option>
        <option value="0">false</option>
        </select>
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
