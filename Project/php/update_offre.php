<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "travel_story";

$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat = $objetPdo->prepare("SELECT * FROM offres WHERE id= :num");
$pdoStat->bindValue(':num',$_GET['numOffre'],PDO::PARAM_INT);
$executeIsOk= $pdoStat->execute();
$offres = $pdoStat->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>modifier</title>
</head>
<body>
    <nav>
    <a href="dashboard.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
    </nav>
    <h1 id="vol">modifier offres - actualité</h1>
<br>
<div class="form-style-1" id="vols">

    <form action="modifieroffre.php" method="POST" >


    <div>
<input type="text" name="numOffre" value="<?=$offres['id'];?>">
</div>

    <div class="form-group">
    <label for="exampleInputFile">Choisir une photo</label>
    <input type="file" name="image" id="exampleInputFile" value="<?=$offres['image'];?>">
  </div>
        <div>
            <label for="description" ><b>description</b></label>
            <input type="text" name="description" value="<?=$offres['description'];?>">
        </div>
       <!--<div>
            <label for="date_ajout" ><b>date d'ajout</b></label>
            <input type="date" name="date_ajout">
        </div>-->
        <div>
        <label for="valable"><b>validité</b></label>
        <select name="valable" id="valable" value="<?=$offres['valable'];?>">
        <option value="1">true</option>
        <option value="0">false</option>
        </select>
        </div>
        <br>
        <br>
        <button type="submit">modifier</button>

        <button type="reset">Annuler</button>



    </form>
    
</div>

    <?php include 'footer.php' ?>
</body>
</html>