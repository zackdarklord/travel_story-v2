<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "travel_story";

$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat = $objetPdo->prepare("SELECT * FROM vols WHERE id= :num");
$pdoStat->bindValue(':num',$_GET['numVol'],PDO::PARAM_INT);
$executeIsOk= $pdoStat->execute();
$vols = $pdoStat->fetch();
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
<h1 id="vol">modifier Vol </h1>
<br>
      <div class="form-style-1" id="vols">

            <form action="modifiervol.php" method="POST" >
<div>
<input type="text" name="numVol" value="<?=$vols['id'];?>">
</div>
<div>
<br>
                <label for="depart" ><b>Départ</b></label>
                <input type="text" name="depart" value="<?=$vols['depart'];?>">
</div>
<div>
                <label for="date_depart" ><b>Date départ</b></label>
                <input type="date" name="date_depart" value="<?=$vols['date_depart'];?>">
</div>
<div>
                <label for="destination" ><b>destination</b></label>
                <input type="text" name="destination" value="<?=$vols['destination'];?>">
</div>
<div>
                <label for="date_retour" ><b>Date retour</b></label>
                <input type="date" name="date_retour" value="<?=$vols['date_retour'];?>">
</div>
<div>
                <label for="compagnie"><b>companie aérienne</b></label>
                <input type="text" name="compagnie" value="<?=$vols['compagnie'];?>">
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