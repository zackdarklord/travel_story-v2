<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=travel_story','root','');
$pdoStat=$objetPdo->prepare('UPDATE billets SET classe=:classe,id_vol=:id_vol,prix=:prix WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num',$_POST['numBillet'],PDO::PARAM_INT);
$pdoStat->bindValue(':classe',$_POST['classe'],PDO::PARAM_STR);
$pdoStat->bindValue(':id_vol',$_POST['id_vol'],PDO::PARAM_STR);

$pdoStat->bindValue(':prix',$_POST['prix'],PDO::PARAM_INT);


$executeIsOk=$pdoStat->execute();
header('Location: http://localhost/project/php/billets.php');
?>