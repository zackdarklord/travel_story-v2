<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat=$objetPdo->prepare('UPDATE vols SET depart=:depart,date_depart=:date_depart,destination=:destination,date_retour=:date_retour,compagnie=:compagnie WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num',$_POST['numVol'],PDO::PARAM_INT);
$pdoStat->bindValue(':depart',$_POST['depart'],PDO::PARAM_STR);
$pdoStat->bindValue(':date_depart',$_POST['date_depart'],PDO::PARAM_STR);
$pdoStat->bindValue(':destination',$_POST['destination'],PDO::PARAM_STR);
$pdoStat->bindValue(':date_retour',$_POST['date_retour'],PDO::PARAM_STR);
$pdoStat->bindValue(':compagnie',$_POST['compagnie'],PDO::PARAM_STR);

$executeIsOk=$pdoStat->execute();
header('Location: http://localhost/project/php/gestion_vols.php');
?>