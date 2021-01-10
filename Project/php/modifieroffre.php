<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat=$objetPdo->prepare('UPDATE offres SET image=:image,description=:description,valable=:valable WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num',$_POST['numOffre'],PDO::PARAM_INT);
$pdoStat->bindValue(':image',$_POST['image'],PDO::PARAM_STR);
$pdoStat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
$pdoStat->bindValue(':valable',$_POST['valable'],PDO::PARAM_INT);


$executeIsOk=$pdoStat->execute();
header('Location: http://localhost/project/php/offres.php');
?>