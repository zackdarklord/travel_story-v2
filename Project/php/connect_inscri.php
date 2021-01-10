<?php

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
  $date_nais = $_POST["date_nais"];
  $sexe = $_POST["sexe"];
  $tel = $_POST["tel"];
  $adresse = $_POST["adresse"];
  $mail = $_POST["mail"];
  $pass = $_POST["pass"];


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "travel_story";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	    $sql = "INSERT INTO clients (nom, prenom,daten,sexe,tel,adresse,mail,mdp)
	    VALUES ('$nom', '$prenom','$date_nais','$sexe','$tel','$adresse','$mail','$pass')";
	    // use exec() because no results are returned
		$conn->exec($sql);

      header('Location: ../views/home.php');
      

         Exit();


	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>