<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "travel_story";

$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat = $objetPdo->prepare("SELECT * FROM billets WHERE id= :num");
$pdoStat->bindValue(':num',$_GET['numBillet'],PDO::PARAM_INT);
$executeIsOk= $pdoStat->execute();
$billets = $pdoStat->fetch();
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
    <h1 id="vol">modifier Billets</h1>
<br>
<div class="form-style-1" id="vols">

    <form action="modifierbillet.php" method="POST" >

    <div>
<input type="text" name="numBillet" value="<?=$billets['id'];?>">
</div>

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
            <input type="text" name="id_vol" value="<?=$billets['id'];?>">
        </div>
        <div>
            <label for="prix" ><b>Prix</b></label>
            <input type="number" name="prix" value="<?=$billets['prix'];?>">
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