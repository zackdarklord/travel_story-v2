<?php

	$ref = $_POST["ref"];
	$classe = $_POST["classe"];
    $id_vol = $_POST["id_vol"];
    $prix = $_POST["prix"];



	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "travel_story";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	    $sql = "INSERT INTO billets (classe, id_vol, prix)
	    VALUES ('$classe', '$id_vol', '$prix')";
	    // use exec() because no results are returned
	    $conn->exec($sql);

      header('Location: billets.php');
      

         Exit();


	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>