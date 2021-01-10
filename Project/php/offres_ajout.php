<?php


	$description = $_POST["description"];
   // $date = $_POST["date_ajout"];
    $valable = $_POST["valable"];

    
    $image = $_FILES['image']['name'];
    $target = "../assets/images/photo/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "travel_story";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	    $sql = "INSERT INTO offres (image, description, valable)
	    VALUES ('$image', '$description', '$valable')";
	    // use exec() because no results are returned
	    $conn->exec($sql);

      header('Location: offres.php');
      

         Exit();


	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>